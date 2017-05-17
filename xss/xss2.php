<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $id = preg_replace('/<script>/', '', $id);
        echo "<center><h2>id=".$id.'</h2></center>';
    } else {
        echo "please input id.";
    }
?>