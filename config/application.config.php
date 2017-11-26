<?php
/**
 * If you need an environment-specific system or application configuration,
 * there is an example in the documentation
 * @see https://docs.zendframework.com/tutorials/advanced-config/#environment-specific-system-configuration
 * @see https://docs.zendframework.com/tutorials/advanced-config/#environment-specific-application-configuration
 */
return [
    // Retrieve list of modules used in this application.
    'modules' => [
        'MSBios\Test',
        'MSBios\Form',
        'Zend\Cache',
        'Zend\Paginator',
        'Zend\I18n',
        'Zend\Navigation',
        'Zend\Mvc\Plugin\FilePrg',
        'Zend\Mvc\Plugin\Identity',
        'Zend\Mvc\Plugin\Prg',
        'Zend\Mvc\Plugin\FlashMessenger',
        'Zend\Form',
        'Zend\InputFilter',
        'Zend\Filter',
        'Zend\Hydrator',
        'Zend\Session',
        'Zend\Router',
        'Zend\Validator',

        'DoctrineModule',
        'DoctrineORMModule',
        'DoctrineDataFixtureModule',

        'MSBios\View',
        'MSBios\Doctrine',
        'MSBios\Form\Doctrine',
        'MSBios\I18n',
        'MSBios\Widget',
        'MSBios\Theme',
        'MSBios\Resource',
        'MSBios\Navigation',
        'MSBios\Application',
        'MSBios\Authentication',
        'MSBios\Guard',
        'MSBios\Guard\Resource',
        'MSBios\Guard\CPanel',
        'MSBios\CPanel',
        'MSBios\CPanel\Doctrine',

        'MSBios\Authentication\Doctrine',
        'MSBios\Guard\CPanel\Doctrine',
        'MSBios\Guard\Resource\Doctrine',
        'MSBios\Resource\Doctrine',

        'ZendDeveloperTools',
    ],

    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
        ],
        'config_cache_enabled' => false,
        'module_map_cache_enabled' => false,
        'cache_dir' => 'data/cache/',
    ],
];
