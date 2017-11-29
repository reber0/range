<?php
/*
code by reber
email:1070018473@qq.com
*/
    session_start();
    ini_set('date.timezone', 'Asia/Shanghai');
    require('../../mysql.class.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的留言板</title>
</head>
<body>
    <center>
        <h3>留言</h3>

        <?php
            if ($_SESSION['uid']) {
                echo "Welcome:".$_SESSION['name']."<a href='logout.php'>(退出登录)</a><br />";
                //var_dump($_SESSION['name']);
            } else {
                echo "<a href='logout.php'>请登录</a>";
            }
        ?>

        <hr>
        
        <table border="1" width="500">
            <tr>
                <th>author</th>
                <th>content</th>
                <th>operation</th>
            </tr>
            <?php
                $db = new mysql();

                $result = $db->select_more('msg','id,name,content');
                // print_r($result);
                foreach ($result as $key => $value) {
                    echo "<tr>";
                        echo "<td>";
                            echo $value['name'];
                        echo "</td>";
                        echo "<td width:'100px'>";
                            echo $value['content'];
                        echo "</td>";
                        echo "<td>";
                            if ($_SESSION && $value['name']===$_SESSION['name']) {
                                echo "<a href='delmsg.php?id=".$value['id']."'>del</a>";  
                            } else {
                                echo "del";
                            }
                        echo "</td>";
                    echo "</tr>";
                }

            ?>
        </table>
        
        <br /><br />
        <a name="001" id="001"></a>
        <form action="msgadd.php" method="post">
            <table border="0">
                <tr>
                    <td>
                        <textarea name="content" rows="5" cols="30"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加留言"/>&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="重置"/>
                    </td>
                </tr>
            </table>
        </form>
    </center>
<body>
</html>