<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xss22</title><!-- code by reber <1070018473@qq.com> -->
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
    <script src="../../static/jquery.min.js"></script>
    <script src="../../static/layer/layer.js"></script>
    <script src="../../static/my.js"></script>
    <script>
    window.alert = function() {
        if (confirm("成功，进入下一关")) {
            window.location.href="../xss23/index.php";
        }
    }
    </script>
</head>
<body>
    <h1 class="header">欢迎来到xss22</h1>

<?php
    ini_set('display_errors', 0);

    if (isset($_GET['name'])) {
        $name = $_GET["name"]; 

        echo "<div class='main'>";
        echo '<input id="text" type="text" value="'.$name.'" />';
        echo '<div id="print"></div>';
        echo "</div>";
    } else {
        echo "<h2 class='main'>Please add parameters name.</h2>";
    }
?>

<script type="text/javascript"> 
    var text = document.getElementById("text");
    var print = document.getElementById("print");
    print.innerHTML = text.value;
</script>

    <div class="source">
        <button onclick="a_iframe(570,420,'xss.html','关键代码');">Source</button>
        <button onclick="a_iframe(420,220,'tips.html','答案解析');">Tips</button>
    </div>
</body>
</html>
