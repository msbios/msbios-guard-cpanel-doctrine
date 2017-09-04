<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 *
 */
namespace MSBios\Guard\CPanel\Doctrine\Controller;

use MSBios\CPanel\Doctrine\Mvc\Controller\AbstractLazyActionController;
use MSBios\Guard\CPanel\Controller\RoleController as DefaultRoleController;
use MSBios\Guard\Resource\Entity\Role;


/**
 * Class RoleController
 * @package MSBios\Guard\CPanel\Doctrine\Controller
 */
class RoleController extends AbstractLazyActionController
{
    /**
     * RoleController constructor.
     */
    public function __construct()
    {
        $this->setObjectPrototype(new Role);
    }

    /**
     * @return string
     */
    public function getResourceId()
    {
        return DefaultRoleController::class;
    }

}
