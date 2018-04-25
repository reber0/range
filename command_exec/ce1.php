<?php
//code by reber <1070018473@qq.com>
    header("Content-Type:text/html; charset=utf-8");

    if (isset($_POST['submit'])) {
        $ipaddr = $_POST['ipaddr'];

        if (empty($ipaddr)) {
            echo "<script language='javascript'>window.history.back(-1);</script>";
        } else {
            $result = shell_exec('ping '.$ipaddr);
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
                    <td><input type="text" name="ipaddr" value="-c 4 wyb0.com"/></td>
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
