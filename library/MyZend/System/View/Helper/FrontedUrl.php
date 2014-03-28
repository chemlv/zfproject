<?php
namespace MyZend\System\View\Helper;
use MyZend\SystemDb\User\Model as UserModel;
use Zend\Authentication\AuthenticationService;
use Zend\View\Helper\AbstractHelper;

class FrontedUrl extends AbstractHelper{
	protected $request;
	public function __construct($request=null){
		$app = \MyZend\Registry::get('Application');
		$sm = $app->getServiceManager();
		$request = $sm->get('request');
		$this->request = is_null($request)?$request:$request;
	}
	public function __invoke(){
		return $this->request->getUri()->getHost();
	}
}