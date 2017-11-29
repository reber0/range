<?php
    session_start();
    setcookie("cookie",'xss21admin');
    @require('../../../mysql.class.php');
?>

<!DOCTYPE html>
<html lang="en">
<head><!-- code by reber <1070018473@qq.com> -->
    <meta charset="UTF-8">
    <title>xss21</title>
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
    <script src="../../static/jquery.min.js"></script>
    <script src="../../static/layer/layer.js"></script>
    <script src="../../static/my.js"></script>
    <script>
    window.alert = function() {
        if (confirm("成功，进入下一关")) {
            window.location.href="../xss22/index.php?name=xxx";
        }
    }
    </script>
</head>
<body>
    <div class="header">
        <h1>欢迎来到xss21的后台</h1>
    </div>
    
    <div width='%70'>
        <table border="1" align="center">
            <tr bgcolor="#cccccc">
                <th>用户名</th><th>留言内容</th><th>客户端</th><th>操作</th>
            </tr>
            <?php
                ini_set('display_errors', 0);

                $db = new mysql();
                $rows = $db->select_more('msg','id,name,content,useragent');

                $_SESSION['token'] = md5(time().rand(100,999));
                foreach ($rows as $key => $value) {
                    echo "<tr>";
                    echo "<td>".htmlspecialchars($value['name'])."</td>";
                    echo "<td>".htmlspecialchars($value['content'])."</td>";
                    echo "<td>".$value['useragent']."</td>";
                    echo "<td width='60px'><a href='del.php?id={$value['id']}&token={$_SESSION['token']}'>删除</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>