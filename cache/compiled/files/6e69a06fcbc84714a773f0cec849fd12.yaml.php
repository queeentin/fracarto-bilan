<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d\'activité/2024/bilan-2023/user/themes/bilan/blueprints/default.yaml',
    'modified' => 1711483287,
    'size' => 557,
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
                                'header.title' => [
                                    'unset@' => true
                                ],
                                'header.tiitle' => [
                                    'type' => 'textarea',
                                    'label' => 'Titre'
                                ],
                                'header.cover' => [
                                    'type' => 'file',
                                    'label' => 'Image de fond',
                                    'accept' => [
                                        0 => 'image/*'
                                    ],
                                    'multiple' => false,
                                    'preview_images' => true
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
