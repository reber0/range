<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");

    function getCode($m=4,$type=0){
        $str = "0123456789";
        $t = array(9,35,strlen($str)-1);
        //随机生成验证码所需内容
        $c="";
        for($i=0;$i<$m;$i++){
            $c.=$str[rand(0,$t[$type])];
        }
        return $c;
    }
    $_SESSION['scode'] = getCode();
    echo $_SESSION['scode'];

    echo '<form method="post" action="check.php">';
    echo '猜测验证码(4位数字)：<input type="text" name="code" />';
    echo '<input type="submit" name="submit" value="submit" />';
    echo '</form>';
?>