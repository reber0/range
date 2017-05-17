<?php
    session_start();
?>

<?php
    require('../../mysql.class.php');
    header("Content-Type:text/html; charset=utf-8");

    if (@!$_SESSION['uid']) {
        echo "<a href='index.php'>请登录</a>";
    } else {
        if ($_POST['npass'] && $_POST['rnpass']) {
            $npass = $_POST['npass'];
            $rnpass = $_POST['rnpass'];
            
            $db = new mysql();
            if ($npass===$rnpass) {
                $arr['password'] = $npass;
                $num = $db->update('user',$arr,"username={$_SESSION['name']}");

                if ($num==1) {
                    echo '<script>alert("修改成功,请重新登陆.")</script>';
                    session_destroy();
                    header("refresh:0.1; url=index.php");
                    exit();
                } else {
                    echo '<script>alert("修改失败.")</script>';
                    header("refresh:0.1; url=show.php");
                    exit();
                }
            } else {
                echo '<script>alert("两次密码要相同！！！")</script>';
                echo "<script language='javascript'>window.history.back(-1);</script>";
                exit();
            }
        }
    }
?>