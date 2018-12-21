<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 *
 */
namespace MSBios\Guard\CPanel\Doctrine\Controller;

use MSBios\CPanel\Doctrine\Mvc\Controller\AbstractActionController;
use MSBios\Guard\CPanel\Controller\RoleController as DefaultRoleController;
use MSBios\Guard\Resource\Doctrine\Entity\Role;

/**
 * Class RoleController
 * @package MSBios\Guard\CPanel\Doctrine\Controller
 */
class RoleController extends AbstractActionController
{
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getResourceId()
    {
        return DefaultRoleController::class;
    }

    /**
     * @inheritdoc
     *
     * @return mixed|Role
     */
    protected static function factory()
    {
        return new Role;
    }
}
