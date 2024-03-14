<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d\'activité/2024/bilan-2023/user/themes/bilan/blueprints/default.yaml',
    'modified' => 1710438724,
    'size' => 745,
    'data' => [
        'blueprint' => 'default',
        'title' => 'Markdown sections',
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
                                            'label' => 'Position',
                                            'options' => [
                                                'pos-1' => 'position 1',
                                                'pos-2' => 'position 2',
                                                'pos-3' => 'position 3',
                                                'pos-4' => 'position 4'
                                            ],
                                            'default' => 'pos-1'
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
