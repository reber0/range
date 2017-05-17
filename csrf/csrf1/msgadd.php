<?php
    session_start();
    require('../../mysql.class.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add msg</title>
</head>
<body>
    <?php
        if (!$_SESSION) {
            echo '<script>alert("请先登录.")</script>';
            header("refresh:0.1; url=index.php");
            exit();
        } else {
            $name = $_SESSION['name'];
            $content = $_POST["content"];

            $db = new mysql();

            $arr = array("name" => $name,"content" => $content);
            $num = $db->insert('msg',$arr);

            if ($num) {
                echo '<script>alert("留言成功.")</script>';
                header("refresh:0.1; url=show.php");
                exit();     
            } else {
                echo '<script>alert("留言失败.")</script>';
                echo "<script language='javascript'>window.history.back(-1);</script>";
                exit();
            }
        }
    ?>
</body>
</html>