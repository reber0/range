<?php
/*
code by reber
email:1070018473@qq.com
*/
    if (isset($_GET['url'])){
        header('content-type: image/png');
        $link = $_GET['url'];
        $curlobj = curl_init();
        curl_setopt($curlobj, CURLOPT_POST, 0);
        curl_setopt($curlobj,CURLOPT_URL,$link);
        curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, 1);
        $result=curl_exec($curlobj);
        curl_close($curlobj);

        echo $result;
    } else {
        echo 'please input url.';
    }

?>