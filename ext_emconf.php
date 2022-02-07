<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Address fields for eventnews',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Georg Ringer',
    'author_email' => '',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'tt_address' => '5.0.0-6.9.99',
            'eventnews' => '4.0.0-6.9.99',
            'news' => '8.2.0-9.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
