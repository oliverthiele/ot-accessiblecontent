<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$ll = 'LLL:EXT:ot_accessiblecontent/Resources/Private/Language/locallang_db.xlf:';

$tempColumns = [
    'header_style' => [
        'exclude' => true,
        'label' => $ll . 'header_style',
        'description' => $ll . 'header_style.description',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'label' => $ll . 'header_style.default',
                    'value' => ''
                ],
                [
                    'label' => 'h1',
                    'value' => 'h1',
                    'group' => 'groupHeader'
                ],
                [
                    'label' => 'h2',
                    'value' => 'h2',
                    'group' => 'groupHeader'
                ],
                [
                    'label' => 'h3',
                    'value' => 'h3',
                    'group' => 'groupHeader'
                ],
                [
                    'label' => 'h4',
                    'value' => 'h4',
                    'group' => 'groupHeader'
                ],
                [
                    'label' => 'h5',
                    'value' => 'h5',
                    'group' => 'groupHeader'
                ],
                [
                    'label' => 'h6',
                    'value' => 'h6',
                    'group' => 'groupHeader'
                ],
//                [
//                    'label' => 'Primary',
//                    'value' => 'text-primary',
//                    'group' => 'groupHeaderColor'
//                ],
//                [
//                    'label' => 'Secondary',
//                    'value' => 'text-secondary',
//                    'group' => 'groupHeaderColor'
//                ],
//                [
//                    'label' => 'h1',
//                    'value' => 'h1 text-primary',
//                    'group' => 'groupHeaderSizePrimaryColor'
//                ],
//                [
//                    'label' => 'h2',
//                    'value' => 'h2 text-primary',
//                    'group' => 'groupHeaderSizePrimaryColor'
//                ],
//                [
//                    'label' => 'h3',
//                    'value' => 'h3 text-primary',
//                    'group' => 'groupHeaderSizePrimaryColor'
//                ],
//                [
//                    'label' => 'h4',
//                    'value' => 'h4 text-primary',
//                    'group' => 'groupHeaderSizePrimaryColor'
//                ],
//                [
//                    'label' => 'h5',
//                    'value' => 'h5 text-primary',
//                    'group' => 'groupHeaderSizePrimaryColor'
//                ],
//                [
//                    'label' => 'h6',
//                    'value' => 'h6 text-primary',
//                    'group' => 'groupHeaderSizePrimaryColor'
//                ],
                [
                    'label' => 'Display 1',
                    'value' => 'display-1',
                    'group' => 'groupDisplay'
                ],
                [
                    'label' => 'Display 2',
                    'value' => 'display-2',
                    'group' => 'groupDisplay'
                ],
                [
                    'label' => 'Display 3',
                    'value' => 'display-3',
                    'group' => 'groupDisplay'
                ],
                [
                    'label' => 'Display 4',
                    'value' => 'display-4',
                    'group' => 'groupDisplay'
                ],
                [
                    'label' => 'Display 5',
                    'value' => 'display-5',
                    'group' => 'groupDisplay'
                ],
                [
                    'label' => 'Display 6',
                    'value' => 'display-6',
                    'group' => 'groupDisplay'
                ],
                [
                    'label' => $ll . 'header_style.visuallyHidden',
                    'value' => 'visually-hidden',
                    'group' => 'groupAccessibility',
                    'icon' => 'EXT:ot_accessiblecontent/Resources/Public/Icons/UniversalAccessRegular.svg'

                ]
            ],
            'itemGroups' => [
                'groupHeader' => $ll . 'header_style.groupHeader',
                'groupHeaderColor' => $ll . 'header_style.groupHeaderColor',
                'groupHeaderSizePrimaryColor' => $ll . 'header_style.groupHeaderSizePrimaryColor',
                'groupDisplay' => $ll . 'header_style.groupDisplay',
                'groupAccessibility' => $ll . 'header_style.groupAccessibility',
            ],
            'size' => 1,
            'maxitems' => 1,
        ]
    ],
];

ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);

ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'header',
    'header_style',
    'after:header_layout'
);

ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'headers',
    'header_style',
    'after:header_layout'
);
