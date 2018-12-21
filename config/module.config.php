<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Guard\CPanel\Doctrine;

use MSBios\CPanel\Doctrine\Factory\ControllerFactory;
use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'controllers' => [
        'factories' => [
            Controller\ResourceController::class =>
                ControllerFactory::class,
            Controller\Resource\PermissionController::class =>
                InvokableFactory::class,
            Controller\RoleController::class =>
                ControllerFactory::class,
            Controller\RuleController::class =>
                ControllerFactory::class,
            Controller\UserController::class =>
                ControllerFactory::class,
        ],
        'aliases' => [
            // Overrider Controllers
            \MSBios\Guard\CPanel\Controller\ResourceController::class =>
                Controller\ResourceController::class,
            \MSBios\Guard\CPanel\Controller\Resource\PermissionController::class =>
                Controller\Resource\PermissionController::class,
            \MSBios\Guard\CPanel\Controller\RoleController::class =>
                Controller\RoleController::class,
            \MSBios\Guard\CPanel\Controller\RuleController::class =>
                Controller\RuleController::class,
            \MSBios\Guard\CPanel\Controller\UserController::class =>
                Controller\UserController::class,
        ]
    ],

    'form_elements' => [
        'aliases' => [
            Controller\Resource\PermissionController::class =>
                \MSBios\Guard\Resource\Form\PermissionForm::class,
            Controller\ResourceController::class =>
                \MSBios\Guard\Resource\Form\ResourceForm::class,
            Controller\RoleController::class =>
                \MSBios\Guard\Resource\Form\RoleForm::class,
            Controller\RuleController::class =>
                \MSBios\Guard\Resource\Form\RuleForm::class,
            Controller\UserController::class =>
                \MSBios\Guard\Resource\Form\UserForm::class,
        ]
    ],

    \MSBios\Theme\Module::class => [
        'themes' => [
            'limitless' => [

                'template_path_stack' => [
                    __DIR__ . '/../themes/limitless/view/',
                ],

                'template_map' => [
                    'ms-bios/guard/c-panel/doctrine/resource/permission/add' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/guard/c-panel/doctrine/resource/permission/form.phtml',
                    'ms-bios/guard/c-panel/doctrine/resource/permission/edit' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/guard/c-panel/doctrine/resource/permission/form.phtml',

                    'ms-bios/guard/c-panel/doctrine/resource/add' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/guard/c-panel/doctrine/resource/form.phtml',
                    'ms-bios/guard/c-panel/doctrine/resource/edit' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/guard/c-panel/doctrine/resource/form.phtml',

                    'ms-bios/guard/c-panel/doctrine/role/add' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/guard/c-panel/doctrine/role/form.phtml',
                    'ms-bios/guard/c-panel/doctrine/role/edit' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/guard/c-panel/doctrine/role/form.phtml',

                    'ms-bios/guard/c-panel/doctrine/rule/add' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/guard/c-panel/doctrine/rule/form.phtml',
                    'ms-bios/guard/c-panel/doctrine/rule/edit' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/guard/c-panel/doctrine/rule/form.phtml',

                    'ms-bios/guard/c-panel/doctrine/user/add' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/guard/c-panel/doctrine/user/form.phtml',
                    'ms-bios/guard/c-panel/doctrine/user/edit' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/guard/c-panel/doctrine/user/form.phtml',
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
];
