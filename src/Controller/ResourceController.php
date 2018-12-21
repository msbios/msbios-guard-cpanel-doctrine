<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 *
 */
namespace MSBios\Guard\CPanel\Doctrine\Controller;

use MSBios\CPanel\Doctrine\Mvc\Controller\AbstractActionController;
use MSBios\CPanel\Doctrine\Mvc\Controller\AbstractLazyActionController;
use MSBios\Guard\CPanel\Controller\ResourceController as DefaultResourceController;
use MSBios\Guard\Resource\Doctrine\Entity\Resource;

/**
 * Class ResourceController
 * @package MSBios\Guard\CPanel\Doctrine\Controller
 */
class ResourceController extends AbstractActionController
{
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getResourceId()
    {
        return DefaultResourceController::class;
    }

    /**
     * @inheritdoc
     *
     * @return mixed|Resource
     */
    protected static function factory()
    {
        return new Resource;
    }
}
