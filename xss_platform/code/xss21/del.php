<?php
    session_start();
    ini_set('date.timezone', 'Asia/Shanghai');
    @require('../../../mysql.class.php');
?>
<!-- code by reber <1070018473@qq.com> -->
<?php
    @header("Content-Type:text/html; charset=utf-8");

    $id = intval(@$_GET['id']);
    $token = htmlspecialchars(addslashes(@$_GET['token']));

    if (@$_SESSION['token'] === $token) {
        $db = new mysql();
        $num = $db->delete('msg',"id={$id}");
        if ($num) {
            die("<script>location.href='admin.php';</script>");
        } else {
            echo '<script>alert("删除失败.")</script>';
            die("<script>location.href='admin.php';</script>");
        }
    } else {
        die("<script>location.href='admin.php';</script>");
    }
?>