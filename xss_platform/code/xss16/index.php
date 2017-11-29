<?php setcookie("cookie",'xss16'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xss16</title><!-- code by reber <1070018473@qq.com> -->
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
    <script src="../../static/jquery.min.js"></script>
    <script src="../../static/layer/layer.js"></script>
    <script src="../../static/my.js"></script>
    <script>
    window.alert = function() {
        if (confirm("成功，进入下一关")) {
            window.location.href="../xss17/index.php";
        }
    }
    </script>
</head>
<body>
    <h1 class="header">欢迎来到xss16</h1>

<?php 
    ini_set("display_errors", 0);

    echo '
    <form class="main" action=index.php method=POST>
    <input name=link size=60 value="">
    <input type=submit name=submit value="add link" />
    </form>';
    echo '<div class="link"></div>';

    if (isset($_POST['link'])) {
        $str = strtolower(@$_POST["link"]);
        $str=str_replace('"','&quot;',$str);
        $str=str_replace("'",'&apos;',$str);
        echo '<div class="main"><a href="'.$str.'">Link</a></div>';
    }
?>

    <div class="source">
        <button onclick="a_iframe(600,360,'xss.html','关键代码');">Source</button>
        <button onclick="a_iframe(550,280,'tips.html','答案解析');">Tips</button>
    </div>
</body>
</html>