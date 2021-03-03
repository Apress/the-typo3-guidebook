<?php

return [
    'ctrl' => [
        # A text for TYPO3 listings
        'title' => 'Promotion Tour Events',
        # The main label for TYPO3 listings, plus alternative fields which should be shown along
        'label' => 'promotiondate',
        'label_alt' => 'headline,promotiontime',
        'label_alt_force' => true,
        # order records in TYPO3's Backend by the date
        'default_sortby' => 'promotiondate DESC',
        # an icon for the records in TYPO3 Backend, custom icons can be registered as well
        'typeicon_classes' => [
            'default' => 'mimetypes-x-sys_note'
        ],
        # TYPO3 will automatically create control-fields in the database here
        'tstamp' => 'updatedon',
        'crdate' => 'createdon',
        'cruser_id' => 'createdby',
        'enablecolumns' => [
            'disabled' => 'hidden'
        ]
    ],
    # definition of each field from ext_tables.sql
    'columns' => [
        'title' => [
            'label' => 'Title',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 200,
                'eval' => 'required'
            ],
        ],
        'description' => [
            'label' => 'Additional information',
            'config' => [
                'type' => 'text',
                'renderType' => '',
                'cols' => 80,
                'rows' => 15,
                'enableRichtext' => true,
            ]
        ],
        'promotiondate' => [
            'label' => 'Date of the Event',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'date,required',
                'dbType' => 'date',
            ]
        ],
        'promotiontime' => [
            'label' => 'Start time of the Event',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'time,required',
                'dbType' => 'time',
            ]
        ],
        'location' => [
            'label' => 'Location',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 200,
                'eval' => 'required'
            ],
        ],
        'locationlink' => [
            'label' => 'Optional Link to the location',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => 50,
                'max' => 1024,
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                        ],
                    ],
                ],
                'softref' => 'typolink'
            ]
        ],
    ],
    # define the order on how the fields should be shown in TYPO3s Backend Editing view
    'types' => [
        1 => [
            'showitem' => '
               title,
               promotiondate,
               promotiontime,
               location,
               locationlink,
               description,
           '
        ]
    ]
];
