<?php
defined('DS')? null: define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null: define('SITE_ROOT',DS.'wamp64'.DS.'www'.DS.'phpRest');
defined('INC_PATH') ? null:define('INC_PATH',SITE_ROOT.DS.'includes');
defined('CORE_PATH')? null:define('CORE_PATH',SITE_ROOT.DS.'core');

require_once(INC_PATH.DS."../includes/config.php");
require_once(CORE_PATH.DS."Post.php");
require_once(CORE_PATH.DS."category.php");


?>
