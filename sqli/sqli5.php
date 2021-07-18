<?php
    require('../mysql.class.php');
    header("Content-Type:text/html; charset=utf-8");
/*
code by reber
email:1070018473@qq.com
*/
    //爆错注入
    if (isset($_GET['id'])) {
        @$id = $_GET['id'];
        // echo $id;

        $id = "'".$id."'";
        $db = new mysql();
        $rows = $db->select_one('msg','*','id='.$id);

        if ($rows) {
            echo "<center><h2>secevery.</h2></center>";
        } else {
            // echo mysqli_error($db->conn);
            print_r(mysqli_error($db->conn));
        }
    } else {
        echo "please input id";
    }

?>
