<?php
return array(
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'rtest', 
	'DB_USER' => 'root',
	'DB_PASS' => 'root',
	'DB_CHARSET' => 'utf8',
    'IS_LOG' => True,
    'LOGFILEPATH' => dirname(__FILE__).'/log.txt',
);
/*
	$database = require('./config.php');
	echo $database['DB_TYPE'];   //输出'DB_TYPE'
*/

?>