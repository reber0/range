<?php
/*
code by reber
email:1070018473@qq.com
*/
    session_start();

    require('../../mysql.class.php');
    header("Content-Type:text/html; charset=utf-8");

    if (isset($_POST['name']) && isset($_POST['pass'])) {
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        if (empty($name) or empty($pass)) {
            echo '<script>alert("用户名和密码不能为空.")</script>';
            echo "<script language='javascript'>window.history.back(-1);</script>";
            exit();
        } else {
            $db = new mysql();
            $name=  mysqli_escape_string($db->conn, $name);

            $row = $db->select_one('user','*',"username='$name'");
            $num = $db->affected_num();
            if ($num==0){
                echo '<script>alert("用户名不存在.")</script>';
                echo "<script language='javascript'>window.history.back(-1);</script>";
                exit();
            } else {
                $row = $db->select_one('user', 'id,password', "username='$name'");

                if ($pass ==  $row['password']) {
                    $_SESSION['name'] = $name;
                    $_SESSION['uid'] = $row['id'];
                    // print_r($_SESSION['name']);
                    // echo "aaaaaaaaaaa";
                    echo "<script language='javascript'>window.location.href='show.php';</script>";
                    exit();
                } else {
                    echo '<script>alert("密码错误.")</script>';
                    echo "<script language='javascript'>window.history.back(-1);</script>";
                    exit();
                }
            }
        }
    } else {
        echo '
        <center>
            <h3>登录</h3>
            <form method="post">
            <table width="380" border="0" cellpadding="4">
                <tr>
                    <td align="right">用户名：</td>
                    <td><input type="text" name="name"/></td>
                </tr>
                <tr>
                    <td align="right">密码：</td>
                    <td><input type="password" name="pass"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="登录"/>
                    </td>
                </tr>
            </table>
            </form>
        </center>';
    }
?>
