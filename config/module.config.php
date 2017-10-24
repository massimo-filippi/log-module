<?php

namespace MassimoFilippi\LogModule;

return [
    'controller_plugins' => [
        'factories' => [
            Controller\Plugin\LogPlugin::class => Controller\Plugin\Factory\LogPluginFactory::class,
        ],
    ],
];
