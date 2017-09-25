<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 *
 */
namespace MSBios\Guard\CPanel\Doctrine\Controller;

use MSBios\CPanel\Doctrine\Mvc\Controller\AbstractLazyActionController;
use MSBios\Guard\CPanel\Controller\RuleController as DefaultRuleController;
use MSBios\Guard\Resource\Doctrine\Entity\Rule;

/**
 * Class RuleController
 * @package MSBios\Guard\CPanel\Doctrine\Controller
 */
class RuleController extends AbstractLazyActionController
{
    /**
     * RuleController constructor.
     */
    public function __construct()
    {
        $this->setObjectPrototype(new Rule);
    }

    /**
     * @return string
     */
    public function getResourceId()
    {
        return DefaultRuleController::class;
    }
}
