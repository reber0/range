<?php
    // echo 111;
    if (!empty($_GET['file'])) {
        $filename = $_GET['file'];
        // echo file_get_contents($filename);

        $fp = fopen($filename,"r") or die("Unable to open file!");
        $data = fread($fp,filesize($filename));
        // echo $data;
        fclose($fp);

        echo "<pre>";
            print_r(htmlspecialchars($data));
        echo "</pre>";
    } else {
        $filename = "test.txt";
        $data = file_get_contents($filename);
        echo "<pre>";
            print_r(htmlspecialchars($data));
        echo "</pre>";
    }
    // echo file_get_contents('read.php');

?>