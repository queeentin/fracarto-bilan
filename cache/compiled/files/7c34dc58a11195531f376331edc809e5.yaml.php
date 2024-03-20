<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d\'activité/2024/bilan-2023/user/themes/bilan/blueprints/other.yaml',
    'modified' => 1710895319,
    'size' => 546,
    'data' => [
        'blueprint' => 'other',
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
                                'header.visibletitle' => [
                                    'type' => 'toggle',
                                    'label' => 'Titre visible',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Oui',
                                        0 => 'Non'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.media_order' => [
                                    'unset@' => true
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
