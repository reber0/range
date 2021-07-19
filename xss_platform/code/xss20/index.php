<?php setcookie("cookie",'xss21'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xss20</title><!-- code by reber <1070018473@qq.com> -->
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
    <script src="../../static/jquery.min.js"></script>
    <script src="../../static/layer/layer.js"></script>
    <script src="../../static/my.js"></script>
    <script>
    window.alert = function() {
        if (confirm("成功，进入下一关")) {
            window.location.href="../xss21/index.php";
        }
    }
    </script>
</head>
<body>
    <div class="reber">
        <h1 class="header">欢迎来到xss20</h1>
        <div class="left" width='%50'>
<?php
    ini_set('display_errors', 0);
    
    require('../../../mysql.class.php');
    header("Content-Type:text/html; charset=utf-8");

    $db = new mysql();
    
    if (isset($_POST['submit'])) {
        
        $name = $_POST['name'];
        $message = $_POST['message'];

        $arr['content'] = mysqli_real_escape_string($db->conn, $message);
        $arr['name'] = mysqli_real_escape_string($db->conn, $name);
        $arr['useragent'] = mysqli_real_escape_string($db->conn,  $_SERVER['HTTP_USER_AGENT'] );

        $num = $db->insert('msg',$arr);
        if ($num != 1) {
            echo '<script>alert("留言失败.")</script>';
            die("<script>location.href='index.php';</script>");
        } else {
            die("<script>location.href='index.php';</script>");
        }
    } else {
        $rows = $db->select_more('msg','id,name,content');

        foreach ($rows as $key => $value) {
            echo 'name: '.$value['name'].'<br />';
            echo 'content: '.$value['content'].'<br /><br />';
        }
    }
?>
        </div>
        <div class="right" width='%50'>
            <center>
                <h3>留言</h3>
                <form method="post">
                <table border="0" cellpadding="4">
                    <tr>
                        <td align="right">用户名：</td>
                        <td><input type="text" name="name"/></td>
                    </tr>
                    <tr>
                        <td align="right">留言：</td>
                        <td><textarea name="message" cols="30" rows="7" maxlength="500" /></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="留言"/ name="submit">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" value="重置"/>
                        </td>
                    </tr>
                </table>
                </form>
            </center>

            <div class="source">
                <button onclick="a_iframe(700,400,'xss.html','关键代码');">Source</button>
                <button onclick="a_iframe(550,280,'tips.html','答案解析');">Tips</button>
            </div>

        </div>
    </div>
</body>
</html>
