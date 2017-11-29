<?php
/*
code by reber
email:1070018473@qq.com
*/
    if (isset($_GET['page'])) {
        @include($_GET['page']);
    } else {
        @include('test.txt');
    }
?>