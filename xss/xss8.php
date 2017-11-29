<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xss9</title>
</head>
<body>


<!-- code by reber <1070018473@qq.com> -->

<input id=link size=60 value="">
<input type=button value="add link" onclick="add()" />
<div id="list"></div>


<script type="text/javascript">
    function add() {
        var link = document.getElementById("link");
        var list = document.getElementById("list");
        list.innerHTML = "<a href='"+link.value+"'>"+link.value+"</a>";
    }
</script>


</body>
</html>