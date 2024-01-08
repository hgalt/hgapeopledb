<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people',
		'label' => 'last_name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'last_name,first_name,title,gender,image,maiden_name,dead,people_group,birth_date,email,nick_name,phone,mobile_phone,street,zip,town,country,info,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('hgapeopledb') . 'Resources/Public/Icons/tx_hgapeopledb_domain_model_people.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, last_name, first_name, title, gender, image, maiden_name, dead, people_group, birth_date, email, nick_name, phone, mobile_phone, street, zip, town, country, info',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, 
		--div--;Person,
		--palette--;;name,
		image, 
		--div--;Kommunikation,
		--palette--;;com,
		--palette;;town,
		--div--;Info
		info;;;richtext:rte_transform[mode=ts_links], 
		--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'name' => array('showitem' => 'last_name,  first_name, title,--linebreak--, maiden_name, nick_name,dead, --linebreak--, people_group, gender, birth_date'),
		'com' => array('showitem' => 'email, phone, mobile_phone'),
		'town' => array('showitem' => 'street, --linebreak--,zip, town, --linebreak--, country'),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_hgapeopledb_domain_model_people',
				'foreign_table_where' => 'AND tx_hgapeopledb_domain_model_people.pid=###CURRENT_PID### AND tx_hgapeopledb_domain_model_people.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		
		
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		
	
		'last_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.last_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'first_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.first_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.title',
			'config' => array(
				'type' => 'input',
				'size' => 12,
				'eval' => 'trim'
			),
		),
		'gender' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.gender',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
					array('male', 1),
					array('female', 2),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				array('maxitems' => 1,
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					)
				),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'maiden_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.maiden_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'dead' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.dead',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'people_group' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.people_group',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_hgapeopledb_domain_model_peoplegroup',
				'size' => 2,
				'maxitems' => 5,
				'eval' => ''
			),
		),
		'birth_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.birth_date',
			'config' => array(
				'dbType' => 'date',
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => '0000-00-00'
			),
		),
		'email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'nick_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.nick_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'phone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.phone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'mobile_phone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.mobile_phone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'street' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.street',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'zip' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.zip',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'town' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.town',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'country' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.country',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'info' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_db.xlf:tx_hgapeopledb_domain_model_people.info',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
//						'script' => '',
						'module' => array(
							'name' => 'wizard_RTE',
							'urlParameters' => array(
								'mode' => 'wizard',
								'act' => 'wizard_rte.php'
							)
						),
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		
	),
);