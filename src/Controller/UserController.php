<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 *
 */
namespace MSBios\Guard\CPanel\Doctrine\Controller;

use MSBios\CPanel\Doctrine\Mvc\Controller\AbstractLazyActionController;
use MSBios\Guard\CPanel\Controller\UserController as DefaultUserController;
use MSBios\Guard\Resource\Doctrine\Entity\User;
use Zend\Crypt\Password\Bcrypt;
use Zend\EventManager\EventInterface;
use Zend\Mvc\MvcEvent;

/**
 * Class UserController
 * @package MSBios\Guard\CPanel\Doctrine\Controller
 */
class UserController extends AbstractLazyActionController
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->setObjectPrototype(new User);
    }

    /**
     * @return string
     */
    public function getResourceId()
    {
        return DefaultUserController::class;
    }


    /**
     * @param MvcEvent $e
     */
    public function onDispatch(MvcEvent $e)
    {
        $this->getEventManager()->attach(self::EVENT_PERSIST_OBJECT, [$this, 'onPersistObject']);
        $this->getEventManager()->attach(self::EVENT_MERGE_OBJECT, [$this, 'onMergeObject']);
        parent::onDispatch($e);
    }

    /**
     * @param EventInterface $e
     */
    public function onPersistObject(EventInterface $e)
    {
        /** @var User $entity */
        $entity = $e->getParam('entity');

        /** @var Bcrypt $bcrypt */
        $bcrypt = new Bcrypt;
        $entity->setPassword($bcrypt->create($entity->getPassword()));
    }

    /**
     * @param EventInterface $e
     */
    public function onMergeObject(EventInterface $e)
    {
        /** @var User $object */
        $object = $e->getParam('object');

        /** @var User $entity */
        $entity = $e->getParam('entity');
        $entity->setPassword($object->getPassword());

        /** @var array $data */
        $data = $e->getParam('data');

        if (! empty($data['password'])) {

            /** @var Bcrypt $bcrypt */
            $bcrypt = new Bcrypt;
            $entity->setPassword($bcrypt->create($data['password']));
        }
    }
}
