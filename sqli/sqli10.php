<?php
    require('../mysql.class.php');
    header("Content-Type:text/html; charset=utf-8");

    
    if (isset($_GET['id'])) {

        $id = addslashes($_GET['id']);
        $id = urldecode($id);
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
            echo mysql_error();
        }
    } else {
        echo "please input id";
    }

?>