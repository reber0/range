<?php
/*
code by reber
email:1070018473@qq.com
*/
    echo '<a href="down.php?file=test.txt">test.txt</a>';

    if ($_GET['file']) {
        $filename = $_GET['file'];
        $filesize = filesize($filename);

        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$filename);
        header('Content-Lengh: 11');
        readfile($filename);
    }
?>