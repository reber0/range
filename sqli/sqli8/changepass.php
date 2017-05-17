<?php
    session_start();
?>

<?php
    require('../../mysql.class.php');
    header("Content-Type:text/html; charset=utf-8");

    if (@!$_SESSION['uid']) {
        echo "<a href='index.php'>请登录</a>";
    } else {
        if ($_POST['submit']) {
            $opass = $_POST['opass'];
            $npass = $_POST['npass'];
            
            $db = new mysql();

            $arr['password'] = $npass;
            $num = $db->update('user',$arr,"username='{$_SESSION['name']}' and password='{$opass}'");

            if ($num===1) {
                echo '<script>alert("修改成功.")</script>';
                session_destroy();
                header("refresh:0.1; url=index.php");
                exit();
            } else {
                echo '<script>alert("修改失败.")</script>';
                header("refresh:0.1; url=show.php");
                exit();
            }
        }
    }
?>