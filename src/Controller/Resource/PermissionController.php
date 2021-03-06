<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 *
 */
namespace MSBios\Guard\CPanel\Doctrine\Controller\Resource;

use MSBios\CPanel\Doctrine\Mvc\Controller\AbstractLazyActionController;
use MSBios\Guard\CPanel\Controller\Resource\PermissionController as DefaultResourcePermissionController;
use MSBios\Guard\Resource\Doctrine\Entity\Permission;
use MSBios\Guard\Resource\Doctrine\Entity\Resource;
use Zend\Form\FormInterface;
use Zend\Mvc\MvcEvent;

/**
 * Class PermissionController
 * @package MSBios\Guard\CPanel\Doctrine\Controller\Resource
 */
class PermissionController extends AbstractLazyActionController
{
    /**
     * PermissionController constructor.
     */
    public function __construct()
    {
        $this->setObjectPrototype(new Permission);
    }

    /**
     * @param MvcEvent $e
     * @return mixed
     */
    public function onDispatch(MvcEvent $e)
    {
        $e->getRouter()->setDefaultParams([
            'resource_id' => $e->getRouteMatch()->getParam('resource_id'),
        ]);

        return parent::onDispatch($e);
    }

    /**
     * @return mixed
     */
    public function getResourceId()
    {
        return DefaultResourcePermissionController::class;
    }

    /**
     * @return \Zend\Http\Response|\Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
        /** @var int $id */
        $id = (int)$this->params()->fromRoute('resource_id', 0);

        /** @var Object $object */
        $object = $this->getEntityManager()->find(
            Resource::class,
            $id
        );

        /** @var int $id */
        if (! $object) {
            return $this->redirect()->toRoute(
                'cpanel/resource',
                ['action' => 'add']
            );
        }

        return parent::indexAction(); // TODO: Change the autogenerated stub
    }

    /**
     * @return FormInterface
     */
    public function getForm()
    {
        /** @var FormInterface $form */
        $form = parent::getForm();
        $form->get('resource')->setValue(
            $this->params()->fromRoute('resource_id')
        );
        return $form;
    }
}
