<?php
    //code by reber <1070018473@qq.com>
    if (isset($_GET['code'])) {
        $code = $_GET['code'];
        eval("\$ret = strtolower('$code');");
        echo $ret;
    } else {
        echo 'please input code.';
    }
?>