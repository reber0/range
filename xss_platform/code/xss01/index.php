<?php setcookie("cookie",'xss01'); ?>

<!-- code by reber <1070018473@qq.com> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xss01</title>
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
    <script src="../../static/jquery.min.js"></script>
    <script src="../../static/layer/layer.js"></script>
    <script src="../../static/my.js"></script>
    <script>
    window.alert = function() {
        if (confirm("成功，进入下一关")) {
            window.location.href="../xss02/index.php?name=reber";
        }
    }
    </script>
</head>
<body>
    <h1 class="header">欢迎来到xss01</h1>

    <?php
        ini_set('display_errors', 0);
        
        if (isset($_GET['name'])) {
            $str = $_GET['name'];

            echo "<h2 class='main'>你好：".$str.'</h2>';
        } else {
            echo "<h2 class='main'>Please add parameters name.</h2>";
        }
    ?>

    <div class="source">
        <button onclick="a_iframe(550,280,'xss.html','关键代码');">Source</button>
        <button onclick="a_iframe(550,180,'tips.html','答案解析');">Tips</button>
    </div>
</body>
</html>