<?php
namespace MyZend\System\View\Helper;
use MyZend\SystemDb\User\Model as UserModel;
use Zend\Authentication\AuthenticationService;
use Zend\View\Helper\AbstractHelper;

class Admin extends AbstractHelper{
	protected $auth;
	public function __construct(AuthenticationService $auth){
		$this->auth = $auth;
	}
	public function __invoke(){
		if ($this->auth->hasIdentity()) {
            return $this->auth->getIdentity();
        }
        return false;
	}
}