<?php
/*
 * @Author: reber
 * @Mail: reber0ask@qq.com
 * @Date: 2021-07-30 20:08:44
 * @LastEditTime: 2022-05-25 15:50:59
 */
	//code by reber
    session_start();
    header("Content-Type:text/html; charset=utf-8");

	if ($_POST['submit']) {
		$code = $_POST['code'];
		$scode = $_SESSION['scode'];

		echo $code."    ".$scode;

		if ($code === $scode) {
			echo 'ok';
		} else {
			echo 'error';
		}
	}

?>