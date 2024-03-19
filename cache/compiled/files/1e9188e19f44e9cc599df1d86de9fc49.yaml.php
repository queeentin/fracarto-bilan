<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d\'activité/2024/bilan-2023/user/themes/bilan/blueprints/custom-items.yaml',
    'modified' => 1710791133,
    'size' => 1775,
    'data' => [
        'title' => 'Custom Items',
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
                                'header.items' => [
                                    'type' => 'list',
                                    'fields' => [
                                        '.text_items' => [
                                            'type' => 'fieldset',
                                            'title' => 'Texte',
                                            'collapsed' => true,
                                            'collapsible' => true,
                                            'fields' => [
                                                '.text_content' => [
                                                    'type' => 'markdown',
                                                    'label' => 'Texte'
                                                ],
                                                '.text_class' => [
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
                                        ],
                                        '.image_items' => [
                                            'type' => 'fieldset',
                                            'title' => 'Image',
                                            'collapsed' => true,
                                            'collapsible' => true,
                                            'fields' => [
                                                '.image_file' => [
                                                    'type' => 'file',
                                                    'label' => 'Image',
                                                    'modes' => [
                                                        0 => [
                                                            'file' => [
                                                                'type' => 'image',
                                                                'extensions' => [
                                                                    0 => 'jpg',
                                                                    1 => 'jpeg',
                                                                    2 => 'png',
                                                                    3 => 'gif',
                                                                    4 => 'svg'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                '.image-caption' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Légende'
                                                ]
                                            ]
                                        ],
                                        '.link_items' => [
                                            'type' => 'fieldset',
                                            'title' => 'Liens',
                                            'collapsed' => true,
                                            'collapsible' => true,
                                            'fields' => [
                                                '.link_url' => [
                                                    'type' => 'text',
                                                    'label' => 'Link URL'
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
