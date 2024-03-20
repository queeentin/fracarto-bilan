<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d\'activité/2024/bilan-2023/user/themes/bilan/blueprints/chapter.yaml',
    'modified' => 1710881663,
    'size' => 319,
    'data' => [
        'blueprint' => 'chapter',
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
                                'content' => [
                                    'unset@' => true
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
