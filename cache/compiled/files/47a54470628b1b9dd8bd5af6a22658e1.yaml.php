<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u445656494/domains/quentinastie.space/public_html/frac-arto/bilan-2023/user/themes/bilan/blueprints.yaml',
    'modified' => 1710318266,
    'size' => 872,
    'data' => [
        'name' => 'Bilan',
        'slug' => 'bilan',
        'type' => 'theme',
        'version' => '0.1.0',
        'description' => 'mise en page du rapport d&#039;activité du Frac-Artothèque Nouvelle-Aquitaine',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Quentin Astié',
            'email' => 'hello@quentinastie.space'
        ],
        'homepage' => 'https://github.com/https://github.com/queeentin/grav-theme-bilan',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/https://github.com/queeentin/grav-theme-bilan/issues',
        'readme' => 'https://github.com/https://github.com/queeentin/grav-theme-bilan/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
