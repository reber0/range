<?php
/*
 * @Author: reber
 * @Mail: reber0ask@qq.com
 * @Date: 2021-07-30 20:08:44
 * @LastEditTime: 2022-08-26 09:20:24
 */
    require('../mysql.class.php');
    header("Content-Type:text/html; charset=utf-8");
/*
code by reber
email:1070018473@qq.com
*/
    
    if (isset($_GET['id'])) {
        @$id = $_GET['id'];
        // echo $id;

        $id = '('.$id.')';
        $db = new mysql();
        $rows = $db->select_one('msg','*','id='.$id);
        // print_r($rows);
        // echo $rows['id'].'---'.$rows['title'];

        if ($rows) {
            echo '<table align="center" width="300" cellpadding="0" cellspacing="0" border="1">';
            foreach ($rows as $key => $value) {
                echo '<tr align="lift" height="30">';
                echo '<td>'.$key.'----'.$value.'</td>';
                echo '</tr>';            
            }
            echo '</table>';
        } else {
            echo mysqli_error($db->conn);
        }
    } else {
        echo "please input id";
    }

?>
