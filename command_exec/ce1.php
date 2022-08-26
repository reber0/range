<?php
/*
 * @Author: reber
 * @Mail: reber0ask@qq.com
 * @Date: 2021-07-30 20:08:44
 * @LastEditTime: 2021-09-01 14:59:52
 */
//code by reber <1070018473@qq.com>
    header("Content-Type:text/html; charset=utf-8");

    if (isset($_POST['ipaddr'])) {
        $ipaddr = $_POST['ipaddr'];

        if (empty($ipaddr)) {
            echo "<script language='javascript'>window.history.back(-1);</script>";
        } else {
            $result = shell_exec('ping -c 4 "'.$ipaddr.'"');
            echo '<pre>'.$result.'<pre>';
            // print_r($result);
        }
    } else {
        echo '
        <center>
            <form method="post">
            <table border="0">
                <tr>
                    <td align="right">ip: </td>
                    <td><input type="text" name="ipaddr" value="wyb0.com"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Ping"/ name="submit">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="重置"/>
                    </td>
                </tr>
            </table>
            </form>
        </center>';
    }

?>
