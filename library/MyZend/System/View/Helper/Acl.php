<?php
namespace MyZend\System\View\Helper;
use MyZend\SystemDb\User\Acl as UserAcl;
use MyZend\SystemDb\User\Model as UserModel;
use Zend\View\Helper\AbstractHelper;
use MyZend\SystemDb\User\Role\Model as RoleModel;
class Acl extends AbstractHelper{
	protected $acl;
	protected $roleName;
	public function __construct(UserModel $user){
		$this->acl = $user->getAcl();
		$this->roleName = $user->getRole()->getName();
	}
	public function __invoke($resource,$permission){
		return RoleModel::PROTECTED_NAME == $this->roleName || $this->acl->isAllowed($this->roleName, $resource, $permission);
	}
}