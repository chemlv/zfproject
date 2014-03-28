<?php
namespace MyZend\SystemDb\User\Resource;

use MyZend\System\Db\AbstractTable;
use Zend\Db\Sql\Select;
use Zend\Paginator\Paginator;
use Zend\Paginator\Adapter\Iterator as paginatorIterator;

class Collection extends AbstractTable
{
    protected $resources = array();
    protected $name = 'user_acl_resource';

    public function init()
    {
        $this->setResources();
    }
    public function setResources(){
        $select = $this->select(
            function (Select $select) {
                $select->order('id');
            }
            );
        $rows  = $this->fetchAll($select);
        $resources = array();
        foreach ($rows as $row) {
            $resources[] = Model::fromArray((array) $row);
        }
        $this->resources = $resources;
        $this->setData('resources', $resources);
    }
    public function getResources()
    {
        return $this->resources;
    }
}