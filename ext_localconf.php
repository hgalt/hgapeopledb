<?php

use HGA\Hgapeopledb\Controller\PeopleController;
use HGA\Hgapeopledb\Controller\PeopleGroupController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die('Access denied.');

ExtensionUtility::configurePlugin(
	'Hgapeopledb',
	'Hgapeopledb',
	[
		PeopleController::class => 'list, show, new, create, edit, update, delete, import, ',
		PeopleGroupController::class => 'list',
		
	],
	// non-cacheable actions
	[
		PeopleController::class  => 'create, update, delete, ',
		PeopleGroupController::class => '',
		
	]
);
ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:hgapeopledb/Configuration/PageTS/NewContentElementWizard.typoscript">'
);

?>

