<?php
    $conn = mysql_connect('localhost','root','217977');
    mysql_select_db('messages',$conn);
    mysql_query("SET NAMES 'gbk'",$conn);

    if (isset($_GET['id'])) {
        $id = addslashes($_GET['id']);
        $sql = "select * from msg where id='$id'";
        $result = mysql_query($sql);

        $rows = @mysql_fetch_assoc($result);
        
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
        echo "please input id.";
    }

?>