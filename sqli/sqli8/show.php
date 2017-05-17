<?php
    session_start();
?>

<?php
    header("Content-Type:text/html; charset=utf-8");

    if (@$_SESSION['uid']) {
        echo "<center><h2>Welcome:".$_SESSION['name']."<a href='logout.php'>(退出登录)</a></h2></center><br />";
        //var_dump($_SESSION['name']);
    } else {
        echo "<a href='logout.php'>请登录</a>";
    }

    echo '
    <center>
        <form action="changepass.php" method="post">
        <table width="380" border="0" cellpadding="4">
            <tr>
                <td align="right">old pass：</td>
                <td><input type="text" name="opass"/></td>
            </tr>
            <tr>
                <td align="right">new pass：</td>
                <td><input type="password" name="npass"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="修改密码" name="submit" />&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="重置"/>
                </td>
            </tr>
        </table>
        </form>
    </center>
    ';

?>