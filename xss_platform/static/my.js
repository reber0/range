
//页面层-自定义
function a_self() {
    layer.open({
        type: 1,
        area: ['300px', '200px'],
        title: false,
        // closeBtn: 0,
        maxmin: true,
        shadeClose: true,
        skin: 'layui-layer-rim',
        content: '<h2><font color="red">hello<br>world!</font></h2>'
    });
}

//iframe层-父子操作
function a_iframe(width,height,file,title) {
    layer.open({
        type: 2,
        title:title,
        area: [width+'px', height+'px'],
        fixed: false, //不固定
        maxmin: true,
        shadeClose: true,
        content: file
    });
}
