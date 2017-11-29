<?php setcookie("cookie",'xss19'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xss19</title><!-- code by reber <1070018473@qq.com> -->
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
    <script src="../../static/jquery.min.js"></script>
    <script src="../../static/layer/layer.js"></script>
    <script src="../../static/my.js"></script>
    <script>
    window.alert = function() {
        if (confirm("成功，进入下一关")) {
            window.location.href="../xss20/index.php";
        }
    }
    </script>
</head>
<body>
    <h1 class="header">欢迎来到xss19</h1>

<?php 
    ini_set("display_errors", 0);
    $name = $_GET["name"];

    echo '<h3 class="main">No results for "<b>';
    echo htmlspecialchars($name).'</b>"</h3>';
    echo '
    <script>
        var t="'.$name.'";
        var s="xxxxxxxx";
        var d="dddd";
    </script>';
?>

    <div class="source">
        <button onclick="a_iframe(450,300,'xss.html','关键代码');">Source</button>
        <button onclick="a_iframe(450,230,'tips.html','答案解析');">Tips</button>
    </div>
</body>
</html>