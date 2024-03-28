<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d\'activité/2024/bilan-2023/user/themes/bilan/blueprints/tables.yaml',
    'modified' => 1711572285,
    'size' => 971,
    'data' => [
        'blueprint' => 'table',
        'title' => 'Markdown tables',
        'extends@' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'content' => [
                                    'unset@' => true
                                ],
                                'header.media_order' => [
                                    'unset@' => true
                                ],
                                'header.sections' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'fields' => [
                                        '.content' => [
                                            'type' => 'markdown',
                                            'validate' => [
                                                'type' => 'textarea'
                                            ]
                                        ],
                                        '.class_name' => [
                                            'type' => 'selectize',
                                            'label' => 'Type de tableau',
                                            'selectize' => [
                                                'options' => [
                                                    0 => [
                                                        'text' => 'flag',
                                                        'value' => 'flag'
                                                    ],
                                                    1 => [
                                                        'text' => 'sum-row',
                                                        'value' => 'sum-row'
                                                    ],
                                                    2 => [
                                                        'text' => 'head-row',
                                                        'value' => 'head-row'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
