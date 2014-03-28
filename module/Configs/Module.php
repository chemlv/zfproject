<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Configs;

use MyZend\System\Mvc;
use Zend\EventManager\EventInterface;
use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;
use Zend\Db\Adapter\Adapter as DbAdapter;

class Module extends Mvc\Module
{
    protected $directory = __DIR__;
    protected $namespace = __NAMESPACE__;
    public function onBootstrap(EventInterface $e)
    {
        $application    = $e->getApplication();
        $config         = $application->getConfig();
        $serviceManager = $application->getServiceManager();
        if (isset($config['db'])) {
            $dbAdapter = $this->initDatabase($config);
        }
        $this->initSetting();
        $this->initLayout($e);
    }
    public function initSetting(){
        \MyZend\Registry::set('Setting',\Configs\Model\Setting\Model::getSetting());
    }
    public function initDatabase(array $config)
    {
        $dbAdapter = new DbAdapter($config['db']);
        GlobalAdapterFeature::setStaticAdapter($dbAdapter);
    }
    public function initLayout(EventInterface $e){
            $e->getApplication()->getEventManager()->getSharedManager()->attach('Zend\Mvc\Controller\AbstractController', 'dispatch', function($e) {
            $controller      = $e->getTarget();
            $controllerClass = get_class($controller);
            $moduleNamespace = substr($controllerClass, 0, strpos($controllerClass, '\\'));
            $config          = $e->getApplication()->getServiceManager()->get('config');
            if (isset($config['module_layouts'][$moduleNamespace])) {
                $controller->layout($config['module_layouts'][$moduleNamespace]);
            }else{
                $controller->layout('layout/undefiled');
            }
        }, 100);
    }
}
