<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d\'activité/2024/bilan-2023/user/themes/bilan/blueprints/acquisitions.yaml',
    'modified' => 1711550838,
    'size' => 866,
    'data' => [
        'blueprint' => 'acquisitions',
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
                                        '.subtitle' => [
                                            'type' => 'text',
                                            'label' => 'Titre'
                                        ],
                                        '.pictures' => [
                                            'type' => 'file',
                                            'label' => 'Images des œuvres',
                                            'accept' => [
                                                0 => 'image/*'
                                            ],
                                            'multiple' => true,
                                            'preview_images' => true
                                        ],
                                        '.content' => [
                                            'type' => 'markdown',
                                            'validate' => [
                                                'type' => 'textarea'
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
