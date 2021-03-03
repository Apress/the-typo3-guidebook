<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Promotion Tour Site Extension',
    'description' => 'All templates and assets for the website promotion tour',
    'category' => 'fe',
    'author' => 'A new TYPO3 star',
    'author_email' => 'nobody@acme.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' =>
            [
                'typo3' => '10.4.0-10.4.99',
                'fluid_styled_content' => '10.4.0-10.4.99'
            ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
