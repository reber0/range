<?php setcookie("cookie",'xss14'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xss14</title><!-- code by reber <1070018473@qq.com> -->
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
    <script src="../../static/jquery.min.js"></script>
    <script src="../../static/layer/layer.js"></script>
    <script src="../../static/my.js"></script>
    <script>
    window.alert = function() {
        if (confirm("成功，进入下一关")) {
            window.location.href="../xss15/index.php";
        }
    }
    </script>
</head>
<body>
    <h1 class="header">欢迎来到xss14</h1>

<?php 
    ini_set("display_errors", 0);

    $str = strtolower(@$_POST["keyword"]);
    while (strpos($str,'script')) {$str = str_replace('script', '', $str);}
    $str = str_replace('(', '', $str);
    $str = str_replace(')', '', $str);
    $str = str_replace(' ', '', $str);

    echo '
    <form class="main" action="index.php" method="POST">
    <input name=keyword size=60 value="'.$str.'">
    <input type=submit name=submit value="Search"/>
    </form>';
    echo '<p class="main">No results for "<b>'.htmlspecialchars($str).'</b>"</p>';
?>

    <div class="source">
        <button onclick="a_iframe(700,350,'xss.html','关键代码');">Source</button>
        <button onclick="a_iframe(470,220,'tips.html','答案解析');">Tips</button>
    </div>
</body>
</html>