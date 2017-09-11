<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Guard\CPanel\Doctrine;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'doctrine' => [
        'authentication' => [
            'orm_default' => [
                'identity_class' => \MSBios\Guard\Resource\Doctrine\UserInterface::class,
                'identity_property' => 'username',
                'credential_property' => 'password'
            ],
        ],
    ],

    'router' => [
        'routes' => [
            'cpanel' => [
                'child_routes' => [
                    'resource' => [
                        'options' => [
                            'defaults' => [
                                'controller' => Controller\ResourceController::class,
                            ],
                        ],
                    ],
                    'role' => [
                        'options' => [
                            'defaults' => [
                                'controller' => Controller\RoleController::class,
                            ],
                        ],
                    ],
                    'user' => [
                        'options' => [
                            'defaults' => [
                                'controller' => Controller\UserController::class,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [

        'abstract_factories' => [
        ],

        'factories' => [
            Controller\ResourceController::class =>
                InvokableFactory::class,
            Controller\RoleController::class =>
                InvokableFactory::class,
            Controller\UserController::class =>
                InvokableFactory::class,
        ]
    ],

    'form_elements' => [
        'aliases' => [
            Controller\UserController::class =>
                \MSBios\Guard\Resource\Form\UserForm::class
        ]
    ],

    \MSBios\Theme\Module::class => [
        'themes' => [
            'limitless' => [

                'template_path_stack' => [
                    __DIR__ . '/../themes/limitless/view/',
                ],

                'controller_map' => [
                ],

                'translation_file_patterns' => [
                    [
                        'type' => 'gettext',
                        'base_dir' => __DIR__ . '/../themes/limitless/language/',
                        'pattern' => '%s.mo',
                    ],
                ],
            ],
        ],
    ],


    Module::class => [

        // Module listeners
        'listeners' => [
        ]
    ],
];
