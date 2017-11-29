<?php 
/*
code by reber
email:1070018473@qq.com
*/
    require('../mysql.class.php');
    header("Content-Type:text/html; charset=utf-8");

    $db = new mysql();
    
    if (isset($_POST['submit'])) {
        
        $name = $_POST['name'];
        $message = $_POST['message'];

        $arr['content'] = mysql_real_escape_string( $message );
        $arr['name'] = mysql_real_escape_string( $name );

        $num = $db->insert('msg',$arr);
        if ($num != 1) {
            echo '<script>alert("留言失败.")</script>';
            echo "<script language='javascript'>window.history.back(-1);</script>";
            exit();
        } else {
            header("refresh:0.01; url=xss7.php");
            exit();
        }
    } else {
        echo '
        <center>
            <h3>留言</h3>
            <form method="post">
            <table width="380" border="0" cellpadding="4">
                <tr>
                    <td align="right">用户名：</td>
                    <td><input type="text" name="name"/></td>
                </tr>
                <tr>
                    <td align="right">留言：</td>
                    <td><textarea name="message" cols="20" rows="3" maxlength="500" /></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="留言"/ name="submit">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="重置"/>
                    </td>
                </tr>
            </table>
            </form>
        </center>';
        $rows = $db->select_more('msg','*',true);
        foreach ($rows as $key => $value) {
            echo 'name: '.$value['name'].'<br />';
            echo 'content: '.$value['content'].'<br /><br />';
        }
    }
?>