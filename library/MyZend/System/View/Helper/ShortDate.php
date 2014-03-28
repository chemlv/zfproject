<?php
namespace MyZend\System\View\Helper;
use Zend\View\Helper\AbstractHelper;

class ShortDate extends AbstractHelper{

    public function __invoke($short_date){
            $arr = array(
                '%m-%d-%Y' => '12-21-2009 (MM-DD-YYYY)',
                '%e-%m-%Y' => '21-12-2009 (D-MM-YYYY)',
                '%m-%e-%y' => '12-21-09 (MM-D-YY)',
                '%e-%m-%y' => '21-12-09 (D-MM-YY)',
                '%b %d %Y' => 'Dec 21 2009'
            );
            $shortdate = '';
            foreach ($arr as $key => $val) {
                if ($key == $short_date) {
                    $shortdate .= "<option selected=\"selected\" value=\"" . $key . "\">" . $val . "</option>\n";
                } else
                    $shortdate .= "<option value=\"" . $key . "\">" . $val . "</option>\n";
            }

            unset($val);
            return $shortdate;
    }

}