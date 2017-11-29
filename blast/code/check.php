<?php
	//code by reber
    session_start();
    header("Content-Type:text/html; charset=utf-8");

	if ($_POST['submit']) {
		$code = $_POST['code'];
		$scode = $_SESSION['scode'];

		// echo $code.$scode;

		if ($code === $scode) {
			echo 'ok';
		} else {
			echo 'error';
		}
	}

?>