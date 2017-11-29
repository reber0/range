<?php
    //code by reber <1070018473@qq.com>
    header("Content-Type:text/html; charset=utf-8");

    if (isset($_POST['name']) && isset($_POST['pass'])) {
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        if (empty($name) or empty($pass)) {
            echo '<script>alert("用户名和密码不能为空.")</script>';
            echo "<script language='javascript'>window.history.back(-1);</script>";
            exit();
        } else {
            if ($name!=='test123'){
                echo 'username is error.';
            } else {
                if ($pass ==  '123456') {
                    echo 'your are right.';
                } else {
                    echo 'password is error.';
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
