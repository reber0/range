<?php setcookie("cookie",'xss22'); ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>xss23</title><!-- code by reber <1070018473@qq.com> -->
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
    <script src="../../static/jquery.min.js"></script>
    <script src="../../static/layer/layer.js"></script>
    <script src="../../static/my.js"></script>
    <script>
    window.alert = function() {
        if (confirm("成功，进入下一关")) {
            window.location.href="../../index.php";
        }
    }
    </script>
</head>
<body>
    <div class="header">
        <h1>欢迎来到xss23</h1>
        <b>本实验需要linux环境</b>
    </div>
    
    <?php
        if (isset($_POST['submit'])) {
            $path = "../../upload/";
            $upfile = @$_FILES["pic"];
            $whitelist = array("image/jpeg","image/jpg","image/png","image/gif");

            if($upfile["error"]>0){
                //获取错误信息
                switch($upfile["error"]){
                    case 1:
                        $info="上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。 ";
                        break;
                    case 2:
                        $info="上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。 ";
                        break;
                    case 3:
                        $info="文件只有部分被上传。 ";
                        break;
                    case 4:
                        $info="没有文件被上传。 ";
                        break;
                    case 6:
                        $info="找不到临时文件夹。";
                        break;
                    case 7:
                        $info="文件写入失败。";
                        break;
                }
                die("上传文件错误,原因：".$info);
            }
            if($upfile["size"]>1000000000){
                die("上传文件大小超出限制");
            }
            if (!in_array($upfile["type"], $whitelist)) {
                die("上传文件非法".$upfile["type"]);
            }

            if(is_uploaded_file($upfile["tmp_name"])){
                if(move_uploaded_file($upfile["tmp_name"],$path.$upfile["name"])){
                    echo "文件上传成功！";
                }else{
                    die("上传文件失败");
                }
            }else{
                die("不是一个上传文件！");
            }
        }
    ?>
    
    <div class="main">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
            上传图片：<input type="file" name="pic" />
            <input type="submit" name="submit" value="上传" />
        </form>
    </div>

    <table width="500" border="1" align="center">
        <tr bgcolor="#cccccc">
            <th>文件名</th><th>图片</th><th>添加时间</th>
        </tr>
        <?php
            $dir = opendir("../../upload");
            $i=0;
            while($f = readdir($dir)){
                if($f!="." && $f!=".."){
                    $i++;
                    echo "<tr>";
                    echo "<td><a href='../../upload/{$f}'>{$f}</a></td>";
                    echo "<td><img src='../../upload/{$f}' width='100' height='80' /></td>";
                    echo "<td>".date("Y-m-d",filectime("../../upload/".$f))."</td>";
                    echo "</tr>";
                }
            }
            closedir($dir);
        ?>
    </table>

    <div class="source">
        <button onclick="a_iframe(750,400,'xss.html','关键代码');">Source</button>
        <button onclick="a_iframe(550,300,'tips.html','答案解析');">Tips</button>
    </div>
</body>
</html>