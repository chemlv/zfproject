<?php
namespace MyZend\System\View\Helper;
use Zend\View\Helper\AbstractHelper;
use Zend\Http\Request;

/*
echo $this->staticLink('my_picture.jpg',
     Application\View\Helper\StaticLink::IMAGE,
     array('profiles', 'admins')
);
// Output: http://static.mydomain.com/images/profiles/admins/my_picture.jpg
*/
class StaticLink extends AbstractHelper {
    const SUBDOMAIN = 'static';
    const IMAGE = 'images';
    const CSS = 'css';
    const JS = 'js';
    const VIDEO = 'videos';
    const OTHER = 'other';
    protected $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }
    public function __invoke($file_name, $subfolder = null, array $subdirectories = array()) {
        $static_url = 'http://' . self::SUBDOMAIN . '.' . $this->request->getUri()->getHost() . '/';
        if (!empty($subfolder)) {
            $static_url .= $subfolder . '/';
        }
        if (is_array($subdirectories) && !empty($subdirectories)) {
            foreach ($subdirectories as $subdirectory) {
                $static_url .= $subdirectory . '/';
            }
        }
        $static_url .= $file_name;
        return $static_url;
    }
    public function setRequest($request) {
        $this->request = $request;
    }
    public function getRequest() {
        return $this->request;
    }
}