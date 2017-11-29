<?php setcookie("cookie",'xss17'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xss17</title><!-- code by reber <1070018473@qq.com> -->
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
    <script src="../../static/jquery.min.js"></script>
    <script src="../../static/layer/layer.js"></script>
    <script src="../../static/my.js"></script>
    <script>
    window.alert = function() {
        if (confirm("成功，进入下一关")) {
            window.location.href="../xss18/index.php?search=123&type=456";
        }
    }
    </script>
</head>
<body>
    <h1 class="header">欢迎来到xss17</h1>

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
        if (strpos($str,'http://')===false) {
            echo '<center><b>链接不合法</b></center>';
        } else {
            echo '<div class="main"><a href="'.$str.'">Link</a></div>';
        }
    }
?>

    <div class="source">
        <button onclick="a_iframe(600,420,'xss.html','关键代码');">Source</button>
        <button onclick="a_iframe(450,280,'tips.html','答案解析');">Tips</button>
    </div>
</body>
</html>