<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d\'activité/2024/grav/system/blueprints/flex/configure/compat.yaml',
    'modified' => 1704458762,
    'size' => 428,
    'data' => [
        'form' => [
            'compatibility' => [
                'type' => 'tab',
                'title' => 'Compatibility',
                'fields' => [
                    'object.compat.events' => [
                        'type' => 'toggle',
                        'toggleable' => true,
                        'label' => 'Admin event compatibility',
                        'help' => 'Enables onAdminSave and onAdminAfterSave events for plugins',
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
    ]
];
