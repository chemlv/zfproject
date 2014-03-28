<?php
namespace MyZend\System\View\Helper;
use Zend\View\Helper\AbstractHelper;
class LongDate extends AbstractHelper{
    public function __invoke($long_date){
        $arr = array(
            '%B %d, %Y' => 'December 21, 2009',
            '%d %B %Y %H:%M' => '21 December 2009 19:00',
            '%B %d, %Y %I:%M %p' => 'December 21, 2009 4:00 am',
            '%A %d %B, %Y' => 'Monday 21 December, 2009',
            '%A %d %B, %Y %H:%M' => 'Monday 21 December 2009 07:00',
            '%a %d, %B' => 'Mon. 12, December'
        );
        $longdate = '';
        foreach ($arr as $key => $val) {
            if ($key == $long_date) {
                $longdate .= "<option selected=\"selected\" value=\"" . $key . "\">" . $val . "</option>\n";
            } else
                $longdate .= "<option value=\"" . $key . "\">" . $val . "</option>\n";
        }
        unset($val);
        return $longdate;
    }
}