1
<?php
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', false);
$rootDir = dirname(dirname(__FILE__));
set_include_path($rootDir . '/library/zf2.2.2' . PATH_SEPARATOR . get_include_path());
require_once 'Controller/Front.php';
Zend_Controller_Front::run('application/controllers');
?>