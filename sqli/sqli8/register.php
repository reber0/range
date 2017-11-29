<?php
/*
code by reber
email:1070018473@qq.com
*/
    require('../../mysql.class.php');
    header("Content-Type:text/html; charset=utf-8");

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $name=  mysql_escape_string($name);

        if (empty($name) or empty($pass)) {
            echo '<script>alert("用户名和密码不能为空.")</script>';
            echo "<script language='javascript'>window.history.back(-1);</script>";
            exit();
        } else {
            $db = new mysql();

            $row = $db->select_one('user','*','username='.$name);
            if (!$row['username']){ //用户名不存在，可以注册
                $arr['username'] = $name;
                $arr['password'] = $pass;
                $num = $db->insert('user',$arr);
                if ($num===1) {
                    echo '<script>alert("注册成功.")</script>';
                    header("refresh:0.1; url=index.php");
                    exit();
                }
            } else {
                echo '<script>alert("用户名已被注册.")</script>';
                echo "<script language='javascript'>window.history.back(-1);</script>";
                exit();
            }
        }
    } else {
        echo '
        <center>
            <h3>注册</h3>
            <form method="post">
            <table width="380" border="0" cellpadding="4">
                <tr>
                    <td align="right">名字：</td>
                    <td><input type="text" name="name"/></td>
                </tr>
                <tr>
                    <td align="right">密码：</td>
                    <td><input type="password" name="pass"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="注册"/ name="submit">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="重置"/>
                    </td>
                </tr>
            </table>
            </form>
        </center>';
    }

?>