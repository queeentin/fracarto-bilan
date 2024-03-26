<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d\'activité/2024/bilan-2023/user/themes/bilan/blueprints/tables.yaml',
    'modified' => 1711380725,
    'size' => 1000,
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
                                            'type' => 'select',
                                            'label' => 'Type de tableau',
                                            'options' => [
                                                't-col-2' => '2 colonnes',
                                                't-col-3' => '3 colonnes',
                                                't-col-4' => '4 colonnes',
                                                't-col-5' => '5 colonnes',
                                                't-col-5b' => '5 colonnes bis',
                                                't-col-5t' => '5 colonnes ter',
                                                't-col-6' => '6 colonnes'
                                            ],
                                            'default' => '4 colonnes'
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
