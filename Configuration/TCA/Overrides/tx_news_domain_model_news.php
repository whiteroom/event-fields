<?php
defined('TYPO3_MODE') || die();


$tmp_news_eventfields_columns = [

    'event_title' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.event_title',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required'
        ],

    ],
    'event_type' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.event_type',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],

    
    
    'event_speaker' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.event_speaker',
        'config' => [
            'type' => 'text',
            'cols' => 20,
            'rows' => 5,
            'eval' => 'trim'
        ],

    ],
    
    
    
    'event_language' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.event_language',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'event_date' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.event_date',
        'config' => [
            'l10n_mode' => 'copy',
            'type' => 'input',
            'size' => 7,
            'eval' => 'date,required',
        ],

    ],
    'event_time' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.event_time',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'event_opening_hours' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.event_opening_hours',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'event_end' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.event_end',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'fee_free' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.fee_free',
        'config' => [
            'type' => 'check',
            'items' => [
                '1' => [
                    '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                ]
            ],
            'default' => 0
        ]

    ],
    'fee' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.fee',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'event_currency' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.event_currency',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'location' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.location',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'location_street' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.location_street',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'location_city' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.location_city',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'location_country' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.location_country',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'location_wheelchair_accessible' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.location_wheelchair_accessible',
        'config' => [
            'type' => 'check',
            'items' => [
                '1' => [
                    '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                ]
            ],
            'default' => 0
        ]

    ],
    'organizer' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.organizer',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'organizer_www' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.organizer_www',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'organizer_email' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.organizer_email',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'registration_until' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.registration_until',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'notes' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.notes',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim'
        ]

    ],
    'subheader' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.subheader',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
    'frontend_user' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_eventfields/Resources/Private/Language/locallang_db.xlf:tx_newseventfields_domain_model_news.frontend_user',
        'config' => [
            'type' => 'input',
            'size' => 4,
            'eval' => 'int'
        ]

    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tmp_news_eventfields_columns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news',
    '--div--;LLL:EXT:news_eventfields/Resources/Private/Language/locallang_ttc.xlf:tabs.event,event_title,event_type,event_speaker,event_language,event_date,event_time,event_opening_hours,event_end,fee,fee_free,event_currency,frontend_user,
    --div--;LLL:EXT:news_eventfields/Resources/Private/Language/locallang_ttc.xlf:tabs.location,location,location_street,location_city,location_country,location_wheelchair_accessible,
    --div--;LLL:EXT:news_eventfields/Resources/Private/Language/locallang_ttc.xlf:tabs.organizer,organizer,organizer_www,organizer_email,registration_until,notes');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'subheader', '', 'after:title');

