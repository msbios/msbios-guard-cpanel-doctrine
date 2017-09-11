<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 *
 */
namespace MSBios\Guard\CPanel\Doctrine\Controller;

use MSBios\CPanel\Doctrine\Mvc\Controller\AbstractLazyActionController;
use MSBios\Guard\CPanel\Controller\ResourceController as DefaultResourceController;
use MSBios\Guard\Resource\Entity\Resource;

/**
 * Class ResourceController
 * @package MSBios\Guard\CPanel\Doctrine\Controller
 */
class ResourceController extends AbstractLazyActionController
{
    /**
     * ResourceController constructor.
     */
    public function __construct()
    {
        $this->setObjectPrototype(new Resource);
    }

    /**
     * @return string
     */
    public function getResourceId()
    {
        return DefaultResourceController::class;
    }
}
