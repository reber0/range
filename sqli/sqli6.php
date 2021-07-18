<?php
    require('../mysql.class.php');
    header("Content-Type:text/html; charset=utf-8");
/*
code by reber
email:1070018473@qq.com
*/
    //布尔型注入
    if (isset($_GET['id'])) {
        @$id = $_GET['id'];
        // echo $id;

        $id = "'".$id."'";
        $db = new mysql();
        $rows = $db->select_one('msg','*','id='.$id);

        if ($rows) {
            echo "this is txt.";
        } else {
            echo "<br />";
            // echo mysqli_error($db->conn);
            // print_r(mysqli_error($db->conn));
        }
    } else {
        echo "please input id";
    }

?>
