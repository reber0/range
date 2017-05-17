<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>
<body>
    <a href="sqli/sqli1.php">注入1(数字型注入)</a><br />
    <a href="sqli/sqli2.php">注入2(闭合单引号)</a><br />
    <a href="sqli/sqli3.php">注入3(闭合双引号)</a><br />
    <a href="sqli/sqli4.php">注入4(闭合括号)</a><br />
    <a href="sqli/sqli5.php">注入5(爆错注入)</a><br />
    <a href="sqli/sqli6.php">注入6(布尔型注入)</a><br />
    <a href="sqli/sqli7.php">注入7(过滤了'--'和'#')</a><br />
    <a href="sqli/sqli8/index.php">注入8(简单二次注入)</a><br />
    <a href="sqli/sqli9.php">注入9(宽字节注入)</a><br />
    <a href="sqli/sqli10.php">注入10(二次urldecode注入)</a><br />
    <br />
    <a href="xss/xss1.php">XSS1(反射型xss)</a><br />
    <a href="xss/xss2.php">XSS2(反射型,正则'/< script>/')</a><br />
    <a href="xss/xss3.php">XSS3(反射型,正则'/< script>/i')</a><br />
    <a href="xss/xss4.php">XSS4(反射型,正则'/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t>/i')</a><br />
    <a href="xss/xss5.php">XSS5(反射型,过滤单双引号)</a><br />
    <a href="xss/xss6.php">XSS6(反射型,正则'/<.*>/')</a><br />
    <a href="xss/xss7.php">XSS7(存储型xss)</a><br />
    <a href="xss/xss8.php">XSS8(DOM型xss)</a><br />
    <br />
    <a href="upload/up1/">文件上传(前端js过滤)</a><br />
    <a href="upload/up2/">文件上传(黑名单过滤后缀名)</a><br />
    <a href="upload/up3/">文件上传(MIME验证)</a><br />
    <a href="upload/up4/">文件上传(MIME验证且文件重命名)</a><br />
    <a href="upload/up5/">文件上传(验证文件头)</a><br />
    <br />
    <a href="command_exec/ce1.php">命令执行</a><br />
    <a href="command_exec/ce2.php">命令执行(GET到的数据被双引号包括)</a><br />
    <a href="command_exec/ce3.php">命令执行(过滤'&'和';')</a><br />
    <br />
    <a href="code_exec/eval1.php">代码执行</a><br />
    <a href="code_exec/eval2.php">代码执行(需要闭合'))</a><br />
    <a href="code_exec/eval3.php">代码执行(需要闭合"))</a><br />
    <a href="code_exec/assert.php">代码执行(assert的使用)</a><br />
    <a href="code_exec/preg_replace.php">代码执行(preg_replace的/e)</a><br />
    <br />
    <a href="fi/fi1/">文件包含</a><br />
    <a href="fi/fi2/">文件包含(使用%00)</a><br />
    <br />
    <a href="csrf/csrf1/">CSRF(可删除留言)</a><br />
    <a href="csrf/csrf2/">CSRF(可重置密码)</a><br />
    <br />
    <a href="ssrf/ssrf1.php">ssrf1</a><br />
    <a href="ssrf/ssrf2.php">ssrf2</a><br />
    <a href="ssrf/ssrf3.php">ssrf3</a><br />
    <br />
    <a href="ultra_vires/">越权(更改cookie)</a><br />
    <br />
    <a href="blast/code/">爆破(4位数字验证码)</a><br />
    <a href="blast/form/">爆破(表单)</a><br />
    <br />
    <a href="file/read.php?file=test.txt">任意文件读取</a><br />
    <a href="file/down.php">任意文件下载</a><br />
</body>
</html>