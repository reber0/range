<?php
/*
code by reber
email:1070018473@qq.com
*/
    if (isset($_GET['url'])){
        header('content-type: image/png');
        $url = $_GET['url'];
        echo file_get_contents($url);
    } else {
        echo 'please input url.';
    }
?>
