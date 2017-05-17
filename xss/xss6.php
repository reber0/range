<?php
    //?id=<img src=x onerror=alert(1)//
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $id = preg_replace('/<.*>/', '', $id);
        echo "<center><h2>id=".$id.'</h2></center>';
    } else {
        echo "please input id.";
    }
?>