<?php
    error_reporting(0);

    if (isset($_GET['id'])) {
        $id = $_GET["id"]; 
        echo '<input id="text" type="text" value="'.$id.'" />';
        echo '<div id="print"></div>';

    } else {
        echo 'please input id.';
    }
?> 

<script type="text/javascript"> 
    var text = document.getElementById("text"); 
    var print = document.getElementById("print"); 
    print.innerHTML = text.value; // 获取text的值，并且输出在print内。这里是导致xss的主要原因。 
</script>