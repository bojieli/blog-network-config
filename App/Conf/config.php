<?php
if (!defined('THINK_PATH')) exit();

date_default_timezone_set('Asia/Chongqing');
$config = require("./App/Conf/dbconfig.php");
$newconfig = array(
	'DEFAULT_MODULE' => 'index',
	'APP_AUTOLOAD_PATH' => '@.TagLib,@.ORG',
	'SHOW_PAGE_TRACE' => false,
);
return array_merge($config, $newconfig);
?>
