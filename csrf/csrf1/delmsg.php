<?php
    session_start();
    require('../../mysql.class.php');
?>

<?php
    //code by reber <1070018473@qq.com>
    header("Content-Type:text/html; charset=utf-8");

    if (!$_SESSION['uid']) {
        echo '<script>alert("请先登录.")</script>';
        header("refresh:0.1; url=http://127.0.0.1/php/msg_mysql/login.php");
        exit();
    } else {
        $id = $_GET['id'];
        // echo $id;

        $db = new mysql();

        $num = $db->delete('msg','id='.$id);
        //echo $num;
        if ($num) {
            header("location: show.php");
            exit();
        } else {
            echo '<script>alert("删除失败.")</script>';
            header("location: show.php");
            exit();
        }
    }

?>
