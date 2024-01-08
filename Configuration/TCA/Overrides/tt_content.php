<?php

defined('TYPO3') or die();

(static function (): void {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        // extension name, matching the PHP namespaces (but without the vendor)
        'Hgapeopledb',
        // arbitrary, but unique plugin name (not visible in the backend)
        'Hgapeopledb',
        // plugin title, as visible in the drop-down in the backend, use "LLL:" for localization
        'People DB'
    );
})();

	
if (!isset($GLOBALS['TCA']['tt_content']['ctrl']['type'])) {
	if (file_exists($GLOBALS['TCA']['tt_content']['ctrl']['dynamicConfigFile'])) {
		require_once($GLOBALS['TCA']['tt_content']['ctrl']['dynamicConfigFile']);
	}
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$GLOBALS['TCA']['tt_content']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumnstx_hgapeopledb_tt_content = array();
	$tempColumnstx_hgapeopledb_tt_content[$GLOBALS['TCA']['tt_content']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('Content','Tx_Hgapeopledb_Content')
			),
			'default' => 'Tx_Hgapeopledb_Content',
			'size' => 1,
			'maxitems' => 1,
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumnstx_hgapeopledb_tt_content, 1);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'tt_content',
	$GLOBALS['TCA']['tt_content']['ctrl']['type'],
	'',
	'after:' . $GLOBALS['TCA']['tt_content']['ctrl']['label']
);






/* inherit and extend the show items from the parent class */

if(isset($GLOBALS['TCA']['tt_content']['types']['1']['showitem'])) {
	$GLOBALS['TCA']['tt_content']['types']['Tx_Hgapeopledb_Content']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['1']['showitem'];
} elseif(is_array($GLOBALS['TCA']['tt_content']['types'])) {
	// use first entry in types array
	$tt_content_type_definition = reset($GLOBALS['TCA']['tt_content']['types']);
	$GLOBALS['TCA']['tt_content']['types']['Tx_Hgapeopledb_Content']['showitem'] = $tt_content_type_definition['showitem'];
} else {
	$GLOBALS['TCA']['tt_content']['types']['Tx_Hgapeopledb_Content']['showitem'] = '';
}
$GLOBALS['TCA']['tt_content']['types']['Tx_Hgapeopledb_Content']['showitem'] .= ',--div--;LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_content,';
$GLOBALS['TCA']['tt_content']['types']['Tx_Hgapeopledb_Content']['showitem'] .= '';

$GLOBALS['TCA']['tt_content']['columns'][$GLOBALS['TCA']['tt_content']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tt_content.tx_extbase_type.Tx_Hgapeopledb_Content','Tx_Hgapeopledb_Content');





/* \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
	'',
	'EXT:/Resources/Private/Language/locallang_csh_.xlf'
); */