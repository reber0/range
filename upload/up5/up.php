<?php
    header("Content-Type:text/html; charset=utf-8");
/*
code by reber
email:1070018473@qq.com
*/
    $upfile = $_FILES['file'];
    $typeList = array(1,2,3,6);
    $path="../uploads/";

    if (in_array(exif_imagetype($upfile["tmp_name"]), $typeList)) {
        if($upfile["error"]>0){
            //获取错误信息
            switch($upfile['error']){
                case 1: $info="大小超过了php.ini中upload_max_filesize的值"; break;
                case 2: $info="大小超过HTML表单中MAX_FILE_SIZE的值"; break;
                case 3: $info="文件只有部分被上传。"; break;
                case 4: $info="没有文件被上传。 "; break;
                case 6: $info="找不到临时文件夹。"; break;
                case 7: $info="文件写入失败"; break;
            }
            die("上传文件错误，原因：".$info);
        }
      
        if($upfile["size"]>1000000){
            die("上传文件大小超出限制！");
        }

        //判断是否是一个上传的文件
        if(is_uploaded_file($upfile["tmp_name"])){
            //执行文件上传（移动上传文件）
            if(move_uploaded_file($upfile["tmp_name"],$path.$upfile["name"])){
                echo '上传成功,路径：'.$path.$upfile['name'];
            }else{
                die("上传文件失败");
            }
        }else{
            die("不是一个上传文件！");
        }
    } else {
        echo '文件非法';
    }

?>