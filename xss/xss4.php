<?php
/*
code by reber
email:1070018473@qq.com
*/
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $id = preg_replace('/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t>/i', '', $id);
        echo "<center><h2>id=".$id.'</h2></center>';
    } else {
        echo "please input id.";
    }
?>