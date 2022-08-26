<?php
/*
 * @Author: reber
 * @Mail: reber0ask@qq.com
 * @Date: 2021-07-30 20:08:44
 * @LastEditTime: 2022-08-26 09:39:32
 */
/*
code by reber
email:1070018473@qq.com
*/
    if (isset($_GET['id'])) {
        echo "<center><h2>id=".@$_GET['id'].'</h2></center>';
    } else {
        echo "please input id.";
    }
?>