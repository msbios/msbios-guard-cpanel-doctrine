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

        'Zend\Db',
        'Zend\Paginator',
        'Zend\Cache',
        'Zend\Serializer',
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

        'MSBios\Guard\Resource',
        'MSBios\Authentication',
        'MSBios\Db',
        'MSBios\Form',
        'MSBios\Hydrator',
        'MSBios\Cache',
        'MSBios\Test',
        'MSBios\View',
        'MSBios\I18n',
        'MSBios\Widget',
        'MSBios\Theme',
        'MSBios\Resource',
        'MSBios\Navigation',
        'MSBios\Application',
        'MSBios\Guard',
        'MSBios\Guard\CPanel',
        'MSBios\CPanel',

        'MSBios\Doctrine',
        'MSBios\Form\Doctrine',
        'MSBios\Authentication\Doctrine',
        'MSBios\Guard\Doctrine',
        'MSBios\Guard\Resource\Doctrine',
        'MSBios\CPanel\Doctrine',
        'MSBios\Guard\CPanel\Doctrine',
        'MSBios\Resource\Doctrine',
        'MSBios\Guard\CPanel\Doctrine',

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
