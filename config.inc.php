<?php
/*
 * @Author: reber
 * @Mail: reber0ask@qq.com
 * @Date: 2021-07-30 20:08:44
 * @LastEditTime: 2022-08-26 09:25:24
 */
return array(
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'mysql',
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