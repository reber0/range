<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图片上传</title>
</head>
<body>
    <form action="up.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file" /><br/>
        <input type="submit" value="提交" name="submit" />
    </form>
    <br /><br />
    <a href="fi.php?page=test.txt">文件包含</a>
</body>
</html>