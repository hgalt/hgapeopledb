<?php
declare(strict_types=1);

use HGA\Hgapeopledb\Controller\PeopleController;
use HGA\Hgapeopledb\Controller\PeopleGroupController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

/*

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'HGA People DB');


	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hgapeopledb_domain_model_people', 'EXT:hgapeopledb/Resources/Private/Language/locallang_csh_tx_hgapeopledb_domain_model_people.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hgapeopledb_domain_model_people');
	

	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hgapeopledb_domain_model_peoplegroup', 'EXT:hgapeopledb/Resources/Private/Language/locallang_csh_tx_hgapeopledb_domain_model_peoplegroup.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hgapeopledb_domain_model_peoplegroup');

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

//
// * Adds Plugin (pi) Flexform to the tt_content table
// * Definition of the added table in Hgapeopledb.xml in dir /Configuration/FlexForms
// 

$extName = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY));
$piName = strtolower('hgapeopledb');
$piSignature = $extName.'_'.$piName;
 
//$TCA['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'select_key,pages';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$piSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($piSignature, 'FILE:EXT:'.$_EXTKEY . '/Configuration/FlexForms/Hgapeopledb.xml');

//if (TYPO3_MODE === 'BE') {
// Adds Extension to ContentElementWizard for Plugin
$GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['HGA\\hgapeopledb\\Wizicon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath ($extName). 'Classes/Utility/Hook/Wizicon.php';
//}
*/