<?php

    if (isset($_GET['id'])) {
        echo "<center><h2>id=".@$_GET['id'].'</h2></center>';
    } else {
        echo "please input id.";
    }
?>