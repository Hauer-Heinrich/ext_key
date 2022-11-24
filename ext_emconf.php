<?php

$EM_CONF['ext_key'] = [
    'title' => 'default Extension',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Christian Hackl',
    'author_email' => 'web@hauer-heinrich.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'MyVendor\\ExtKey\\' => 'Classes'
        ],
    ],
];
