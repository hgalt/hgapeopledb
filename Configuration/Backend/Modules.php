<?php

use HGA\Hgapeopledb\Backend\Controller\PeopleBackendController;
use HGA\Hgapeopledb\Backend\Controller\PeopleGroupBackendController;

return [
	'hga' => [
		'labels' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_mod_hga.xlf',
		'iconIdentifier' => 'hgaicon',
		'navigationComponent' => 'TYPO3/CMS/Backend/PageTree/PageTreeElement',
	],
    'hga_hgapeopledb' => [
        'parent' => 'hga',
		'access' => 'user',
        'path' => '/module/hga/Hgapeopledb',
//        'position' => ['after' => 'web_info'],
        'extensionName' => 'Hgapeopledb',
        'labels' => 'LLL:EXT:hgapeopledb/Resources/Private/Language/locallang_hgapeopledbbe.xlf',
        'workspaces' => '*',
        'iconIdentifier' => 'hgapeopleicon',
//        'navigationComponent' => 'TYPO3/CMS/Backend/PageTree/PageTreeElement',
//        'routes' => [
//            '_default' => [
//                'target' => PeopleBackendController::class . '::list',
//            ],
//        ],
        'controllerActions' => [
           PeopleBackendController::class => [
                'list',
                'show',
				'new',
				'create',
				'edit',
				'update',
				'delete',
				'import',
            ],
			PeopleGroupBackendController::class => [
			'list',
			]
		]
    ]
];
?>