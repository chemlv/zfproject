<?php
namespace MyZend\System\View\Helper;

use Zend\View\Helper\AbstractHelper;

class RequestUri extends AbstractHelper{
	protected $repuest;
	public function __construct($repuest){
		$this->repuest = $repuest;
	}
	public function __invoke(){
		return base64_encode($this->repuest->getRequestUri());
	}
}