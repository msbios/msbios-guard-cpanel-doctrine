<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Guard\CPanel\Doctrine;

use MSBios\ModuleInterface;
use Zend\Loader\AutoloaderFactory;
use Zend\Loader\StandardAutoloader;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

/**
 * Class Module
 * @package MSBios\Guard\CPanel\Doctrine
 */
class Module implements
    ModuleInterface,
//    BootstrapListenerInterface,
    AutoloaderProviderInterface
{
    const VERSION = '0.0.1';

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

//    /**
//     * Listen to the bootstrap event
//     *
//     * @param EventInterface $e
//     * @return array
//     */
//    public function onBootstrap(EventInterface $e)
//    {
//        /** @var ApplicationInterface $target */
//        $target = $e->getTarget();
//
//        /** @var ServiceLocatorInterface $serviceManager */
//        $serviceManager = $target->getServiceManager();
//
//        (new LazyListenerAggregate(
//            $serviceManager->get(self::class)->get('listeners')->toArray(),
//            $serviceManager
//        ))->attach($target->getEventManager());
//    }

    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            AutoloaderFactory::STANDARD_AUTOLOADER => [
                StandardAutoloader::LOAD_NS => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }
}
