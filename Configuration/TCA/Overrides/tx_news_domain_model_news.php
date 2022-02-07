<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$fields = [
    'organizer_address' => [
        'exclude' => true,
        'displayCond' => 'FIELD:is_event:>:0',
        'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_organizer',
        'config' => [
            'default' => 0,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', 0],
            ],
            'foreign_table' => 'tt_address',
            'foreign_table_where' => 'ORDER BY tt_address.name',
            'minitems' => 0,
            'maxitems' => 1
        ],
    ],
    'location_address' => [
        'exclude' => true,
        'displayCond' => 'FIELD:is_event:>:0',
        'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_location',
        'config' => [
            'default' => 0,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', 0],
            ],
            'foreign_table' => 'tt_address',
            'foreign_table_where' => 'ORDER BY tt_address.name',
            'minitems' => 0,
            'maxitems' => 1,
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tx_news_domain_model_news', 'palette_eventfields', 'organizer_address,location_address');
