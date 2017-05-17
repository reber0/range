<?php
    session_start();
?>

<?php
    header("Content-Type:text/html; charset=utf-8");
    require('../mysql.class.php');

    if (isset($_COOKIE['name'])) {
        $db = new mysql();
        $name = base64_decode($_COOKIE['name']);

        $row = $db->select_one('user','username,password','username='.$name);

        echo '<center>';
            echo 'your name is: '.$row['username'].'<br />';
            echo 'your password is: '.$row['password'];
        echo '</center>';
    } else {
        echo "<script language='javascript'>window.history.back(-1);</script>";
        exit();
    }

?>