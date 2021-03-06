<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Promotion Tour: Upcoming Events',
    'description' => 'Manage upcoming events and display them on your website',
    'category' => 'fe',
    'author' => 'A new TYPO3 star',
    'author_email' => 'nobody@acme.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' =>
            [
                'typo3' => '10.4.0-10.4.99'
            ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
