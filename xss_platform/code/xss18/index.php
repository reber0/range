<?php setcookie("cookie",'xss18'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><!-- code by reber <1070018473@qq.com> -->
    <title>xss18</title>
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
    <script src="../../static/jquery.min.js"></script>
    <script src="../../static/layer/layer.js"></script>
    <script src="../../static/my.js"></script>
    <script>
    window.alert = function() {
        if (confirm("成功，进入下一关")) {
            window.location.href="../xss19/index.php?name=xiaoming";
        }
    }
    </script>
</head>
<body>
    <h1 class="header">欢迎来到xss18</h1>

<?php 
    ini_set("display_errors", 0);
    $search = $_GET["search"];
    $type = $_GET["type"];

    echo '
    <form class="search">
        <input name=type type=hidden value="'.$type.'">
    </form>'."\n";
    echo '<h3 class="main">No results for "<b>'.htmlspecialchars($search).'</b>"</h3>';
?>

    <div class="source">
        <button onclick="a_iframe(720,280,'xss.html','关键代码');">Source</button>
        <button onclick="a_iframe(500,250,'tips.html','答案解析');">Tips</button>
    </div>
</body>
</html>