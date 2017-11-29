<?php setcookie("cookie",'xss02'); ?>
<!DOCTYPE html>
<html lang="en">
<head><!-- code by reber <1070018473@qq.com> -->
    <meta charset="UTF-8">
    <title>xss02</title>
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
    <script src="../../static/jquery.min.js"></script>
    <script src="../../static/layer/layer.js"></script>
    <script src="../../static/my.js"></script>
    <script>
    window.alert = function() {
        if (confirm("成功，进入下一关")) {
            window.location.href="../xss03/index.php?name=reber";
        }
    }
    </script>
</head>
<body>
    <h1 class="header">欢迎来到xss02</h1>

    <?php
        ini_set('display_errors', 0);
        
        if (isset($_GET['name'])) {
            $str = $_GET['name'];

            echo '<h3 class="main">你的名字是：<input type="text" value="'.$str.'"></h3>';
        } else {
            echo "<h2 class='main'>Please add parameters name.</h2>";
        }
    ?>

    <div class="source">
        <button onclick="a_iframe(700,280,'xss.html','关键代码');">Source</button>
        <button onclick="a_iframe(500,230,'tips.html','答案解析');">Tips</button>
    </div>
</body>
</html>