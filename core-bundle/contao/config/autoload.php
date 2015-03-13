<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

// Namespaces
ClassLoader::addNamespaces(array
(
	'Contao',
));

// Classes
ClassLoader::addClasses(array
(
	// Classes
	'Contao\Ajax'                      => 'vendor/contao/core-bundle/contao/classes/Ajax.php',
	'Contao\Backend'                   => 'vendor/contao/core-bundle/contao/classes/Backend.php',
	'Contao\BackendModule'             => 'vendor/contao/core-bundle/contao/classes/BackendModule.php',
	'Contao\BackendTemplate'           => 'vendor/contao/core-bundle/contao/classes/BackendTemplate.php',
	'Contao\BackendUser'               => 'vendor/contao/core-bundle/contao/classes/BackendUser.php',
	'Contao\DataContainer'             => 'vendor/contao/core-bundle/contao/classes/DataContainer.php',
	'Contao\DiffRenderer'              => 'vendor/contao/core-bundle/contao/classes/DiffRenderer.php',
	'Contao\DropZone'                  => 'vendor/contao/core-bundle/contao/classes/DropZone.php',
	'Contao\FileUpload'                => 'vendor/contao/core-bundle/contao/classes/FileUpload.php',
	'Contao\Frontend'                  => 'vendor/contao/core-bundle/contao/classes/Frontend.php',
	'Contao\FrontendTemplate'          => 'vendor/contao/core-bundle/contao/classes/FrontendTemplate.php',
	'Contao\FrontendUser'              => 'vendor/contao/core-bundle/contao/classes/FrontendUser.php',
	'Contao\Hybrid'                    => 'vendor/contao/core-bundle/contao/classes/Hybrid.php',
	'Contao\LiveUpdate'                => 'vendor/contao/core-bundle/contao/classes/LiveUpdate.php',
	'Contao\Messages'                  => 'vendor/contao/core-bundle/contao/classes/Messages.php',
	'Contao\PurgeData'                 => 'vendor/contao/core-bundle/contao/classes/PurgeData.php',
	'Contao\RebuildIndex'              => 'vendor/contao/core-bundle/contao/classes/RebuildIndex.php',
	'Contao\StyleSheets'               => 'vendor/contao/core-bundle/contao/classes/StyleSheets.php',
	'Contao\Theme'                     => 'vendor/contao/core-bundle/contao/classes/Theme.php',
	'Contao\Versions'                  => 'vendor/contao/core-bundle/contao/classes/Versions.php',

	// Controllers
	'Contao\BackendChangelog'          => 'vendor/contao/core-bundle/contao/controllers/BackendChangelog.php',
	'Contao\BackendConfirm'            => 'vendor/contao/core-bundle/contao/controllers/BackendConfirm.php',
	'Contao\BackendFile'               => 'vendor/contao/core-bundle/contao/controllers/BackendFile.php',
	'Contao\BackendHelp'               => 'vendor/contao/core-bundle/contao/controllers/BackendHelp.php',
	'Contao\BackendIndex'              => 'vendor/contao/core-bundle/contao/controllers/BackendIndex.php',
	'Contao\BackendInstall'            => 'vendor/contao/core-bundle/contao/controllers/BackendInstall.php',
	'Contao\BackendMain'               => 'vendor/contao/core-bundle/contao/controllers/BackendMain.php',
	'Contao\BackendPage'               => 'vendor/contao/core-bundle/contao/controllers/BackendPage.php',
	'Contao\BackendPassword'           => 'vendor/contao/core-bundle/contao/controllers/BackendPassword.php',
	'Contao\BackendPopup'              => 'vendor/contao/core-bundle/contao/controllers/BackendPopup.php',
	'Contao\BackendPreview'            => 'vendor/contao/core-bundle/contao/controllers/BackendPreview.php',
	'Contao\BackendSwitch'             => 'vendor/contao/core-bundle/contao/controllers/BackendSwitch.php',
	'Contao\FrontendCron'              => 'vendor/contao/core-bundle/contao/controllers/FrontendCron.php',
	'Contao\FrontendIndex'             => 'vendor/contao/core-bundle/contao/controllers/FrontendIndex.php',
	'Contao\FrontendShare'             => 'vendor/contao/core-bundle/contao/controllers/FrontendShare.php',

	// Drivers
	'Contao\DC_File'                   => 'vendor/contao/core-bundle/contao/drivers/DC_File.php',
	'Contao\DC_Folder'                 => 'vendor/contao/core-bundle/contao/drivers/DC_Folder.php',
	'Contao\DC_Table'                  => 'vendor/contao/core-bundle/contao/drivers/DC_Table.php',

	// Elements
	'Contao\ContentAccordion'          => 'vendor/contao/core-bundle/contao/elements/ContentAccordion.php',
	'Contao\ContentAccordionStart'     => 'vendor/contao/core-bundle/contao/elements/ContentAccordionStart.php',
	'Contao\ContentAccordionStop'      => 'vendor/contao/core-bundle/contao/elements/ContentAccordionStop.php',
	'Contao\ContentAlias'              => 'vendor/contao/core-bundle/contao/elements/ContentAlias.php',
	'Contao\ContentArticle'            => 'vendor/contao/core-bundle/contao/elements/ContentArticle.php',
	'Contao\ContentCode'               => 'vendor/contao/core-bundle/contao/elements/ContentCode.php',
	'Contao\ContentDownload'           => 'vendor/contao/core-bundle/contao/elements/ContentDownload.php',
	'Contao\ContentDownloads'          => 'vendor/contao/core-bundle/contao/elements/ContentDownloads.php',
	'Contao\ContentElement'            => 'vendor/contao/core-bundle/contao/elements/ContentElement.php',
	'Contao\ContentGallery'            => 'vendor/contao/core-bundle/contao/elements/ContentGallery.php',
	'Contao\ContentHeadline'           => 'vendor/contao/core-bundle/contao/elements/ContentHeadline.php',
	'Contao\ContentHtml'               => 'vendor/contao/core-bundle/contao/elements/ContentHtml.php',
	'Contao\ContentHyperlink'          => 'vendor/contao/core-bundle/contao/elements/ContentHyperlink.php',
	'Contao\ContentImage'              => 'vendor/contao/core-bundle/contao/elements/ContentImage.php',
	'Contao\ContentList'               => 'vendor/contao/core-bundle/contao/elements/ContentList.php',
	'Contao\ContentMarkdown'           => 'vendor/contao/core-bundle/contao/elements/ContentMarkdown.php',
	'Contao\ContentMedia'              => 'vendor/contao/core-bundle/contao/elements/ContentMedia.php',
	'Contao\ContentModule'             => 'vendor/contao/core-bundle/contao/elements/ContentModule.php',
	'Contao\ContentSliderStart'        => 'vendor/contao/core-bundle/contao/elements/ContentSliderStart.php',
	'Contao\ContentSliderStop'         => 'vendor/contao/core-bundle/contao/elements/ContentSliderStop.php',
	'Contao\ContentTable'              => 'vendor/contao/core-bundle/contao/elements/ContentTable.php',
	'Contao\ContentTeaser'             => 'vendor/contao/core-bundle/contao/elements/ContentTeaser.php',
	'Contao\ContentText'               => 'vendor/contao/core-bundle/contao/elements/ContentText.php',
	'Contao\ContentToplink'            => 'vendor/contao/core-bundle/contao/elements/ContentToplink.php',
	'Contao\ContentYouTube'            => 'vendor/contao/core-bundle/contao/elements/ContentYouTube.php',

	// Forms
	'Contao\Form'                      => 'vendor/contao/core-bundle/contao/forms/Form.php',
	'Contao\FormCaptcha'               => 'vendor/contao/core-bundle/contao/forms/FormCaptcha.php',
	'Contao\FormCheckBox'              => 'vendor/contao/core-bundle/contao/forms/FormCheckBox.php',
	'Contao\FormExplanation'           => 'vendor/contao/core-bundle/contao/forms/FormExplanation.php',
	'Contao\FormFieldset'              => 'vendor/contao/core-bundle/contao/forms/FormFieldset.php',
	'Contao\FormFileUpload'            => 'vendor/contao/core-bundle/contao/forms/FormFileUpload.php',
	'Contao\FormHeadline'              => 'vendor/contao/core-bundle/contao/forms/FormHeadline.php',
	'Contao\FormHidden'                => 'vendor/contao/core-bundle/contao/forms/FormHidden.php',
	'Contao\FormHtml'                  => 'vendor/contao/core-bundle/contao/forms/FormHtml.php',
	'Contao\FormPassword'              => 'vendor/contao/core-bundle/contao/forms/FormPassword.php',
	'Contao\FormRadioButton'           => 'vendor/contao/core-bundle/contao/forms/FormRadioButton.php',
	'Contao\FormSelectMenu'            => 'vendor/contao/core-bundle/contao/forms/FormSelectMenu.php',
	'Contao\FormSubmit'                => 'vendor/contao/core-bundle/contao/forms/FormSubmit.php',
	'Contao\FormTextArea'              => 'vendor/contao/core-bundle/contao/forms/FormTextArea.php',
	'Contao\FormTextField'             => 'vendor/contao/core-bundle/contao/forms/FormTextField.php',

	// Library
	'Contao\Automator'                 => 'vendor/contao/core-bundle/contao/library/Contao/Automator.php',
	'Contao\Cache'                     => 'vendor/contao/core-bundle/contao/library/Contao/Cache.php',
	'Contao\ClassLoader'               => 'vendor/contao/core-bundle/contao/library/Contao/ClassLoader.php',
	'Contao\Combiner'                  => 'vendor/contao/core-bundle/contao/library/Contao/Combiner.php',
	'Contao\Config'                    => 'vendor/contao/core-bundle/contao/library/Contao/Config.php',
	'Contao\Controller'                => 'vendor/contao/core-bundle/contao/library/Contao/Controller.php',
	'Contao\Database\Installer'        => 'vendor/contao/core-bundle/contao/library/Contao/Database/Installer.php',
	'Contao\Database\Mysql\Result'     => 'vendor/contao/core-bundle/contao/library/Contao/Database/Mysql/Result.php',
	'Contao\Database\Mysql\Statement'  => 'vendor/contao/core-bundle/contao/library/Contao/Database/Mysql/Statement.php',
	'Contao\Database\Mysql'            => 'vendor/contao/core-bundle/contao/library/Contao/Database/Mysql.php',
	'Contao\Database\Mysqli\Result'    => 'vendor/contao/core-bundle/contao/library/Contao/Database/Mysqli/Result.php',
	'Contao\Database\Mysqli\Statement' => 'vendor/contao/core-bundle/contao/library/Contao/Database/Mysqli/Statement.php',
	'Contao\Database\Mysqli'           => 'vendor/contao/core-bundle/contao/library/Contao/Database/Mysqli.php',
	'Contao\Database\Result'           => 'vendor/contao/core-bundle/contao/library/Contao/Database/Result.php',
	'Contao\Database\Statement'        => 'vendor/contao/core-bundle/contao/library/Contao/Database/Statement.php',
	'Contao\Database\Updater'          => 'vendor/contao/core-bundle/contao/library/Contao/Database/Updater.php',
	'Contao\Database'                  => 'vendor/contao/core-bundle/contao/library/Contao/Database.php',
	'Contao\Date'                      => 'vendor/contao/core-bundle/contao/library/Contao/Date.php',
	'Contao\Dbafs'                     => 'vendor/contao/core-bundle/contao/library/Contao/Dbafs.php',
	'Contao\DcaExtractor'              => 'vendor/contao/core-bundle/contao/library/Contao/DcaExtractor.php',
	'Contao\DcaLoader'                 => 'vendor/contao/core-bundle/contao/library/Contao/DcaLoader.php',
	'Contao\Email'                     => 'vendor/contao/core-bundle/contao/library/Contao/Email.php',
	'Contao\Encryption'                => 'vendor/contao/core-bundle/contao/library/Contao/Encryption.php',
	'Contao\Environment'               => 'vendor/contao/core-bundle/contao/library/Contao/Environment.php',
	'Contao\Feed'                      => 'vendor/contao/core-bundle/contao/library/Contao/Feed.php',
	'Contao\FeedItem'                  => 'vendor/contao/core-bundle/contao/library/Contao/FeedItem.php',
	'Contao\File'                      => 'vendor/contao/core-bundle/contao/library/Contao/File.php',
	'Contao\Files\Ftp'                 => 'vendor/contao/core-bundle/contao/library/Contao/Files/Ftp.php',
	'Contao\Files\Php'                 => 'vendor/contao/core-bundle/contao/library/Contao/Files/Php.php',
	'Contao\Files'                     => 'vendor/contao/core-bundle/contao/library/Contao/Files.php',
	'Contao\Filter\SqlFiles'           => 'vendor/contao/core-bundle/contao/library/Contao/Filter/SqlFiles.php',
	'Contao\Filter\SyncExclude'        => 'vendor/contao/core-bundle/contao/library/Contao/Filter/SyncExclude.php',
	'Contao\Folder'                    => 'vendor/contao/core-bundle/contao/library/Contao/Folder.php',
	'Contao\GdImage'                   => 'vendor/contao/core-bundle/contao/library/Contao/GdImage.php',
	'Contao\Idna'                      => 'vendor/contao/core-bundle/contao/library/Contao/Idna.php',
	'Contao\Image'                     => 'vendor/contao/core-bundle/contao/library/Contao/Image.php',
	'Contao\Input'                     => 'vendor/contao/core-bundle/contao/library/Contao/Input.php',
	'Contao\InsertTags'                => 'vendor/contao/core-bundle/contao/library/Contao/InsertTags.php',
	'Contao\Message'                   => 'vendor/contao/core-bundle/contao/library/Contao/Message.php',
	'Contao\Model\Collection'          => 'vendor/contao/core-bundle/contao/library/Contao/Model/Collection.php',
	'Contao\Model\QueryBuilder'        => 'vendor/contao/core-bundle/contao/library/Contao/Model/QueryBuilder.php',
	'Contao\Model\Registry'            => 'vendor/contao/core-bundle/contao/library/Contao/Model/Registry.php',
	'Contao\Model'                     => 'vendor/contao/core-bundle/contao/library/Contao/Model.php',
	'Contao\ModuleLoader'              => 'vendor/contao/core-bundle/contao/library/Contao/ModuleLoader.php',
	'Contao\Pagination'                => 'vendor/contao/core-bundle/contao/library/Contao/Pagination.php',
	'Contao\Picture'                   => 'vendor/contao/core-bundle/contao/library/Contao/Picture.php',
	'Contao\Request'                   => 'vendor/contao/core-bundle/contao/library/Contao/Request.php',
	'Contao\RequestToken'              => 'vendor/contao/core-bundle/contao/library/Contao/RequestToken.php',
	'Contao\Search'                    => 'vendor/contao/core-bundle/contao/library/Contao/Search.php',
	'Contao\Session'                   => 'vendor/contao/core-bundle/contao/library/Contao/Session.php',
	'Contao\SortedIterator'            => 'vendor/contao/core-bundle/contao/library/Contao/SortedIterator.php',
	'Contao\String'                    => 'vendor/contao/core-bundle/contao/library/Contao/String.php',
	'Contao\System'                    => 'vendor/contao/core-bundle/contao/library/Contao/System.php',
	'Contao\Template'                  => 'vendor/contao/core-bundle/contao/library/Contao/Template.php',
	'Contao\TemplateInheritance'       => 'vendor/contao/core-bundle/contao/library/Contao/TemplateInheritance.php',
	'Contao\TemplateLoader'            => 'vendor/contao/core-bundle/contao/library/Contao/TemplateLoader.php',
	'Contao\User'                      => 'vendor/contao/core-bundle/contao/library/Contao/User.php',
	'Contao\Validator'                 => 'vendor/contao/core-bundle/contao/library/Contao/Validator.php',
	'Contao\Widget'                    => 'vendor/contao/core-bundle/contao/library/Contao/Widget.php',
	'Contao\ZipReader'                 => 'vendor/contao/core-bundle/contao/library/Contao/ZipReader.php',
	'Contao\ZipWriter'                 => 'vendor/contao/core-bundle/contao/library/Contao/ZipWriter.php',

	// Models
	'Contao\ArticleModel'              => 'vendor/contao/core-bundle/contao/models/ArticleModel.php',
	'Contao\ContentModel'              => 'vendor/contao/core-bundle/contao/models/ContentModel.php',
	'Contao\FilesModel'                => 'vendor/contao/core-bundle/contao/models/FilesModel.php',
	'Contao\FormFieldModel'            => 'vendor/contao/core-bundle/contao/models/FormFieldModel.php',
	'Contao\FormModel'                 => 'vendor/contao/core-bundle/contao/models/FormModel.php',
	'Contao\ImageSizeItemModel'        => 'vendor/contao/core-bundle/contao/models/ImageSizeItemModel.php',
	'Contao\ImageSizeModel'            => 'vendor/contao/core-bundle/contao/models/ImageSizeModel.php',
	'Contao\LayoutModel'               => 'vendor/contao/core-bundle/contao/models/LayoutModel.php',
	'Contao\MemberGroupModel'          => 'vendor/contao/core-bundle/contao/models/MemberGroupModel.php',
	'Contao\MemberModel'               => 'vendor/contao/core-bundle/contao/models/MemberModel.php',
	'Contao\ModuleModel'               => 'vendor/contao/core-bundle/contao/models/ModuleModel.php',
	'Contao\PageModel'                 => 'vendor/contao/core-bundle/contao/models/PageModel.php',
	'Contao\SessionModel'              => 'vendor/contao/core-bundle/contao/models/SessionModel.php',
	'Contao\StyleModel'                => 'vendor/contao/core-bundle/contao/models/StyleModel.php',
	'Contao\StyleSheetModel'           => 'vendor/contao/core-bundle/contao/models/StyleSheetModel.php',
	'Contao\ThemeModel'                => 'vendor/contao/core-bundle/contao/models/ThemeModel.php',
	'Contao\UserGroupModel'            => 'vendor/contao/core-bundle/contao/models/UserGroupModel.php',
	'Contao\UserModel'                 => 'vendor/contao/core-bundle/contao/models/UserModel.php',

	// Modules
	'Contao\Module'                    => 'vendor/contao/core-bundle/contao/modules/Module.php',
	'Contao\ModuleArticle'             => 'vendor/contao/core-bundle/contao/modules/ModuleArticle.php',
	'Contao\ModuleArticleList'         => 'vendor/contao/core-bundle/contao/modules/ModuleArticleList.php',
	'Contao\ModuleArticlenav'          => 'vendor/contao/core-bundle/contao/modules/ModuleArticlenav.php',
	'Contao\ModuleBooknav'             => 'vendor/contao/core-bundle/contao/modules/ModuleBooknav.php',
	'Contao\ModuleBreadcrumb'          => 'vendor/contao/core-bundle/contao/modules/ModuleBreadcrumb.php',
	'Contao\ModuleCloseAccount'        => 'vendor/contao/core-bundle/contao/modules/ModuleCloseAccount.php',
	'Contao\ModuleCustomnav'           => 'vendor/contao/core-bundle/contao/modules/ModuleCustomnav.php',
	'Contao\ModuleFlash'               => 'vendor/contao/core-bundle/contao/modules/ModuleFlash.php',
	'Contao\ModuleHtml'                => 'vendor/contao/core-bundle/contao/modules/ModuleHtml.php',
	'Contao\ModuleLogin'               => 'vendor/contao/core-bundle/contao/modules/ModuleLogin.php',
	'Contao\ModuleLogout'              => 'vendor/contao/core-bundle/contao/modules/ModuleLogout.php',
	'Contao\ModuleMaintenance'         => 'vendor/contao/core-bundle/contao/modules/ModuleMaintenance.php',
	'Contao\ModuleNavigation'          => 'vendor/contao/core-bundle/contao/modules/ModuleNavigation.php',
	'Contao\ModulePassword'            => 'vendor/contao/core-bundle/contao/modules/ModulePassword.php',
	'Contao\ModulePersonalData'        => 'vendor/contao/core-bundle/contao/modules/ModulePersonalData.php',
	'Contao\ModuleQuicklink'           => 'vendor/contao/core-bundle/contao/modules/ModuleQuicklink.php',
	'Contao\ModuleQuicknav'            => 'vendor/contao/core-bundle/contao/modules/ModuleQuicknav.php',
	'Contao\ModuleRandomImage'         => 'vendor/contao/core-bundle/contao/modules/ModuleRandomImage.php',
	'Contao\ModuleRegistration'        => 'vendor/contao/core-bundle/contao/modules/ModuleRegistration.php',
	'Contao\ModuleRssReader'           => 'vendor/contao/core-bundle/contao/modules/ModuleRssReader.php',
	'Contao\ModuleSearch'              => 'vendor/contao/core-bundle/contao/modules/ModuleSearch.php',
	'Contao\ModuleSitemap'             => 'vendor/contao/core-bundle/contao/modules/ModuleSitemap.php',
	'Contao\ModuleUser'                => 'vendor/contao/core-bundle/contao/modules/ModuleUser.php',

	// Pages
	'Contao\PageError403'              => 'vendor/contao/core-bundle/contao/pages/PageError403.php',
	'Contao\PageError404'              => 'vendor/contao/core-bundle/contao/pages/PageError404.php',
	'Contao\PageForward'               => 'vendor/contao/core-bundle/contao/pages/PageForward.php',
	'Contao\PageRedirect'              => 'vendor/contao/core-bundle/contao/pages/PageRedirect.php',
	'Contao\PageRegular'               => 'vendor/contao/core-bundle/contao/pages/PageRegular.php',
	'Contao\PageRoot'                  => 'vendor/contao/core-bundle/contao/pages/PageRoot.php',

	// Widgets
	'Contao\CheckBox'                  => 'vendor/contao/core-bundle/contao/widgets/CheckBox.php',
	'Contao\CheckBoxWizard'            => 'vendor/contao/core-bundle/contao/widgets/CheckBoxWizard.php',
	'Contao\ChmodTable'                => 'vendor/contao/core-bundle/contao/widgets/ChmodTable.php',
	'Contao\FileSelector'              => 'vendor/contao/core-bundle/contao/widgets/FileSelector.php',
	'Contao\FileTree'                  => 'vendor/contao/core-bundle/contao/widgets/FileTree.php',
	'Contao\ImageSize'                 => 'vendor/contao/core-bundle/contao/widgets/ImageSize.php',
	'Contao\InputUnit'                 => 'vendor/contao/core-bundle/contao/widgets/InputUnit.php',
	'Contao\KeyValueWizard'            => 'vendor/contao/core-bundle/contao/widgets/KeyValueWizard.php',
	'Contao\ListWizard'                => 'vendor/contao/core-bundle/contao/widgets/ListWizard.php',
	'Contao\MetaWizard'                => 'vendor/contao/core-bundle/contao/widgets/MetaWizard.php',
	'Contao\ModuleWizard'              => 'vendor/contao/core-bundle/contao/widgets/ModuleWizard.php',
	'Contao\OptionWizard'              => 'vendor/contao/core-bundle/contao/widgets/OptionWizard.php',
	'Contao\PageSelector'              => 'vendor/contao/core-bundle/contao/widgets/PageSelector.php',
	'Contao\PageTree'                  => 'vendor/contao/core-bundle/contao/widgets/PageTree.php',
	'Contao\Password'                  => 'vendor/contao/core-bundle/contao/widgets/Password.php',
	'Contao\RadioButton'               => 'vendor/contao/core-bundle/contao/widgets/RadioButton.php',
	'Contao\RadioTable'                => 'vendor/contao/core-bundle/contao/widgets/RadioTable.php',
	'Contao\SelectMenu'                => 'vendor/contao/core-bundle/contao/widgets/SelectMenu.php',
	'Contao\TableWizard'               => 'vendor/contao/core-bundle/contao/widgets/TableWizard.php',
	'Contao\TextArea'                  => 'vendor/contao/core-bundle/contao/widgets/TextArea.php',
	'Contao\TextField'                 => 'vendor/contao/core-bundle/contao/widgets/TextField.php',
	'Contao\TextStore'                 => 'vendor/contao/core-bundle/contao/widgets/TextStore.php',
	'Contao\TimePeriod'                => 'vendor/contao/core-bundle/contao/widgets/TimePeriod.php',
	'Contao\TrblField'                 => 'vendor/contao/core-bundle/contao/widgets/TrblField.php',
	'Contao\Upload'                    => 'vendor/contao/core-bundle/contao/widgets/Upload.php',
));

// Templates
TemplateLoader::addFiles(array
(
	'analytics_google'    => 'vendor/contao/core-bundle/contao/templates/analytics',
	'analytics_piwik'     => 'vendor/contao/core-bundle/contao/templates/analytics',
	'be_ace'              => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_changelog'        => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_confirm'          => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_diff'             => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_error'            => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_forbidden'        => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_help'             => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_incomplete'       => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_insecure'         => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_install'          => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_live_update'      => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_login'            => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_main'             => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_maintenance'      => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_navigation'       => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_no_active'        => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_no_forward'       => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_no_layout'        => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_no_page'          => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_no_root'          => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_pagination'       => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_password'         => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_picker'           => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_popup'            => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_preview'          => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_purge_data'       => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_rebuild_index'    => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_referer'          => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_switch'           => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_tinyFlash'        => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_tinyMCE'          => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_tinyNews'         => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_unavailable'      => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_welcome'          => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_widget'           => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_widget_chk'       => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_widget_pw'        => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_widget_rdo'       => 'vendor/contao/core-bundle/contao/templates/backend',
	'be_wildcard'         => 'vendor/contao/core-bundle/contao/templates/backend',
	'block_searchable'    => 'vendor/contao/core-bundle/contao/templates/block',
	'block_section'       => 'vendor/contao/core-bundle/contao/templates/block',
	'block_sections'      => 'vendor/contao/core-bundle/contao/templates/block',
	'block_unsearchable'  => 'vendor/contao/core-bundle/contao/templates/block',
	'ce_accordion'        => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_accordion_start'  => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_accordion_stop'   => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_code'             => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_download'         => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_downloads'        => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_gallery'          => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_headline'         => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_html'             => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_hyperlink'        => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_hyperlink_image'  => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_image'            => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_list'             => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_markdown'         => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_player'           => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_slider_start'     => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_slider_stop'      => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_table'            => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_teaser'           => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_text'             => 'vendor/contao/core-bundle/contao/templates/elements',
	'ce_toplink'          => 'vendor/contao/core-bundle/contao/templates/elements',
	'form'                => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_captcha'        => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_checkbox'       => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_explanation'    => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_fieldset'       => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_headline'       => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_hidden'         => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_html'           => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_message'        => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_password'       => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_radio'          => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_row'            => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_row_double'     => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_select'         => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_submit'         => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_textarea'       => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_textfield'      => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_upload'         => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_widget'         => 'vendor/contao/core-bundle/contao/templates/forms',
	'form_xml'            => 'vendor/contao/core-bundle/contao/templates/forms',
	'fe_page'             => 'vendor/contao/core-bundle/contao/templates/frontend',
	'gallery_default'     => 'vendor/contao/core-bundle/contao/templates/gallery',
	'j_accordion'         => 'vendor/contao/core-bundle/contao/templates/jquery',
	'j_colorbox'          => 'vendor/contao/core-bundle/contao/templates/jquery',
	'j_mediaelement'      => 'vendor/contao/core-bundle/contao/templates/jquery',
	'j_tablesort'         => 'vendor/contao/core-bundle/contao/templates/jquery',
	'js_highlight'        => 'vendor/contao/core-bundle/contao/templates/js',
	'js_slider'           => 'vendor/contao/core-bundle/contao/templates/js',
	'mail_default'        => 'vendor/contao/core-bundle/contao/templates/mail',
	'member_default'      => 'vendor/contao/core-bundle/contao/templates/member',
	'member_grouped'      => 'vendor/contao/core-bundle/contao/templates/member',
	'mod_article'         => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_article_list'    => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_article_nav'     => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_article_plain'   => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_article_teaser'  => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_booknav'         => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_breadcrumb'      => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_flash'           => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_html'            => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_login_1cl'       => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_login_2cl'       => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_logout_1cl'      => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_logout_2cl'      => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_message'         => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_navigation'      => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_password'        => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_quicklink'       => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_quicknav'        => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_random_image'    => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_search'          => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_search_advanced' => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_search_simple'   => 'vendor/contao/core-bundle/contao/templates/modules',
	'mod_sitemap'         => 'vendor/contao/core-bundle/contao/templates/modules',
	'moo_accordion'       => 'vendor/contao/core-bundle/contao/templates/mootools',
	'moo_chosen'          => 'vendor/contao/core-bundle/contao/templates/mootools',
	'moo_mediabox'        => 'vendor/contao/core-bundle/contao/templates/mootools',
	'moo_tablesort'       => 'vendor/contao/core-bundle/contao/templates/mootools',
	'nav_default'         => 'vendor/contao/core-bundle/contao/templates/navigation',
	'pagination'          => 'vendor/contao/core-bundle/contao/templates/pagination',
	'picture_default'     => 'vendor/contao/core-bundle/contao/templates/picture',
	'rss_default'         => 'vendor/contao/core-bundle/contao/templates/rss',
	'rss_items_only'      => 'vendor/contao/core-bundle/contao/templates/rss',
	'search_default'      => 'vendor/contao/core-bundle/contao/templates/search',
));
