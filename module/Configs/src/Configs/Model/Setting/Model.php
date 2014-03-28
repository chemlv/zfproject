<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 2/16/14
 * Time: 3:02 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Configs\Model\Setting;
use MyZend\System\Db\AbstractTable;

class Model extends AbstractTable
{
    protected $name = 'settings';
    public static function fromArray(array $array)
    {
        $model = new Model();
        $model->setData($array);
        $model->setOrigData();
        return $model;
    }
    public static function getSetting()
    {
        $userTable = new Model();
        $row       = $userTable->fetchRow($userTable->select(array('id' => (int) 1)));
        $userTable->events()->trigger(__CLASS__, 'before.load', null, array('object' => $userTable));
        if (!empty($row)) {
            $userTable->setData((array) $row);

            $userTable->setOrigData();
            $userTable->events()->trigger(__CLASS__, 'after.load', null, array('object' => $userTable));
            return $userTable;
        } else {
            $userTable->events()->trigger(__CLASS__, 'after.load.failed', null, array('object' => $userTable));
            return false;
        }
    }
    public function save()
    {
        $this->events()->trigger(__CLASS__, 'before.save', null, array('object' => $this));
        $arraySave = array(
            'site_name' => $this->getSiteName(),
            'company' => $this->getCompany(),
            'site_url' => $this->getSiteUrl(),
            'site_email' => $this->getSiteEmail(),
            'perpage' => $this->getPerpage(),
            'thumb_w' => $this->getThumbW(),
            'thumb_h' => $this->getThumbH(),
            'img_w' => $this->getImgW(),
            'img_h' => $this->getImgH(),
            'avatar_w' => $this->getAvatarW(),
            'avatar_h' => $this->getAvatarH(),
            'short_date' => $this->getShortDate(),
            'long_date' => $this->getLongDate(),
            'dtz' => $this->getDtz(),
            'weekstart'=>$this->getWeekstart(),
            'offline'=>$this->getOffline(),
            'currency'=>$this->getCurrency(),
            'reg_verify'=>$this->getRegVerify(),
            'auto_verify'=>$this->getAutoVerify(),
            'reg_allowed'=>$this->getRegAllowed(),
            'notify_admin'=>$this->getNotifyAdmin(),
            'logging'=>$this->getLogging(),
            'smtp_host'=>$this->getSmtpHost(),
            'smtp_user'=>$this->getSmtpUser(),
            'smtp_pass'=>$this->getSmtpPass(),
            'smtp_port'=>$this->getSmtpPort(),
            'analytics'=>$this->getAnalytics(),
            'metakeys'=>$this->getMetakeys(),
            'metadesc'=>$this->getMetadesc(),
        );
        try {
            $id = $this->getId();
            if (empty($id)) {
                throw \Exception();
            } else {
                echo $id;
                $this->update($arraySave, array('id' => $this->getId()));
            }
            $this->events()->trigger(__CLASS__, 'after.save', null, array('object' => $this));
            return $this->getId();
        } catch (\Exception $e) {
            $this->events()->trigger(__CLASS__, 'after.save.failed', null, array('object' => $this));
            throw new \MyZendTrung\Exception($e->getMessage(), $e->getCode(), $e);
        }
    }
}