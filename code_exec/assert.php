<?php
    if (isset($_GET['code'])) {
        $code = $_GET['code'];
        assert($code);
        echo $ret;
    } else {
        echo 'please input code.';
    }
?>