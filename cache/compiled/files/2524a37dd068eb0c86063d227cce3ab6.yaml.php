<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d\'activité/2024/bilan-2023/user/themes/bilan/blueprints/tables.yaml',
    'modified' => 1710442036,
    'size' => 767,
    'data' => [
        'blueprint' => 'tables',
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
                                                't-col-4' => '4 colonnes',
                                                't-col-5' => '5 colonnes',
                                                't-col-5b' => '5 colonnes bis',
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
