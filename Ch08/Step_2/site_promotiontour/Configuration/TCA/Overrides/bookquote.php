<?php
call_user_func(static function () {
    // Adds another option to the dropdown representing the field "CType" of the tt_content table.
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        // The first entry is the menu item label, the second is the value stored in the database.
        ['What other people are saying?', 'bookquote'],
        // This content type will show up after the "HTML" content type in the dropdown menu.
        'html',
        'after'
    );

    // The following defines which fields should be visible, and in which order.
    $GLOBALS['TCA']['tt_content']['types']['bookquote'] = [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
                bodytext;Quote,
                header;Author,
                assets;Image of the author,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;;frames,
                --palette--;;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'rows' => 3
                ]
            ]
        ]
    ];
});
