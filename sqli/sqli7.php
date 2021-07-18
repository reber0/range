<?php
    require('../mysql.class.php');
    header("Content-Type:text/html; charset=utf-8");
/*
code by reber
email:1070018473@qq.com
*/
    //过滤# --
    //使用?id=1' union select null,null,null and '1'='1判断列数
    if (isset($_GET['id'])) {
        @$id = $_GET['id'];
        // echo $id;
        
        $id = preg_replace('/--/', '', $id);
        $id = preg_replace('/#/', '', $id);

        $id = "'".$id."'";
        $db = new mysql();
        $rows = $db->select_one('msg','*','id='.$id);

        if ($rows) {
            echo '<table align="center" width="300" cellpadding="0" cellspacing="0" border="1">';
            foreach ($rows as $key => $value) {
                echo '<tr align="lift" height="30">';
                echo '<td>'.$key.'----'.$value.'</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            // echo "<br />";
            echo mysqli_error($db->conn);
            // print_r(mysqli_error($db->conn));
        }
    } else {
        echo "please input id";
    }

?>
