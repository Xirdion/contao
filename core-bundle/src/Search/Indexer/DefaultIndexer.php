<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Search\Indexer;

use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\CoreBundle\Search\Document;
use Contao\Search;
use Doctrine\DBAL\Driver\Connection;

class DefaultIndexer implements IndexerInterface
{
    /**
     * @var ContaoFramework
     */
    private $framework;

    /**
     * @var Connection
     */
    private $connection;

    /**
     * @var bool
     */
    private $indexProtected;

    /**
     * @internal Do not inherit from this class; decorate the "contao.search.indexer.default" service instead
     */
    public function __construct(ContaoFramework $framework, Connection $connection, bool $indexProtected = false)
    {
        $this->framework = $framework;
        $this->connection = $connection;
        $this->indexProtected = $indexProtected;
    }

    public function index(Document $document): void
    {
        if (200 !== $document->getStatusCode()) {
            $this->throwBecause('HTTP Statuscode is not equal to 200.');
        }

        if ('' === $document->getBody()) {
            $this->throwBecause('Cannot index empty response.');
        }

        $meta = [];
        $this->extendMetaFromJsonLdScripts($document, $meta);

        if (0 === count($meta)) {
            $this->throwBecause('No JSON-LD meta data provided.');
        }

        // If search was disabled in the page settings, we do not index
        if (!isset($meta['potentialAction']['@type']['SearchAction'])) {
            $this->throwBecause('Was explicitly marked "noSearch" in page settings.');
        }

        // If the front end preview is activated, we do not index
        if (isset($meta['version']) && 'preview' === $meta['version']) {
            $this->throwBecause('Indexing when the front end preview is enabled is not possible.');
        }

        // If the page is protected and indexing protecting pages is disabled, we do not index
        $isProtected = isset($meta['conditionsOfAccess']) && 'Accessible only from logged-in accounts' === $meta['conditionsOfAccess'];
        if ($isProtected && !$this->indexProtected) {
            $this->throwBecause('Indexing protected pages is disabled.');
        }

        $this->framework->initialize();

        /** @var Search $search */
        $search = $this->framework->getAdapter(Search::class);

        try {
            $search->indexPage([
                'url' => (string) $document->getUri(),
                'content' => $document->getBody(),
                'protected' => $isProtected ? '1' : '',
                'groups' => $this->getAudienceValue($meta, 'groups'),
                'pid' => $meta['identifier'],
                'title' => $meta['name'],
                'language' => $meta['inLanguage'],
            ]);
        } catch (\Throwable $t) {
            $this->throwBecause('Could not add a search index entry: '.$t->getMessage(), false);
        }
    }

    public function delete(Document $document): void
    {
        $this->framework->initialize();

        /** @var Search $search */
        $search = $this->framework->getAdapter(Search::class);
        $search->removeEntry((string) $document->getUri());
    }

    public function clear(): void
    {
        $this->connection->exec('TRUNCATE TABLE tl_search');
        $this->connection->exec('TRUNCATE TABLE tl_search_index');
    }

    /**
     * @throws IndexerException
     */
    private function throwBecause(string $message, bool $onlyWarning = true): void
    {
        if ($onlyWarning) {
            throw IndexerException::createAsWarning($message);
        }

        throw new IndexerException($message);
    }

    private function extendMetaFromJsonLdScripts(Document $document, array &$meta): void
    {
        $jsonLds = $document->extractJsonLdScripts('https://schema.org/', 'WebPage');

        if (0 === \count($jsonLds)) {
            return;
        }

        // Merge all entries to one meta array (the latter overrides the former)
        $meta = array_merge($meta, array_merge(...$jsonLds));
    }

    private function getAudienceValue(array $meta, string $name): array
    {
        if (!isset($meta['audience']) || !is_array($meta['audience'])) {
            return [];
        }

        foreach ($meta['audience'] as $audience) {
            if (isset($audience['name'])
                && $name === $audience['name']
                && isset($audience['@type'])
                && 'PeopleAudience' === $audience['@type']
                && isset($audience['identifier'])
            ) {
                return (array) $audience['identifier'];
            }
        }

        return [];
    }
}
