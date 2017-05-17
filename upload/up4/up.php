<?php
    header("Content-Type:text/html; charset=utf-8");
    
    $upfile = $_FILES["file"];
    $path="../uploads/";  //定义一个上传过后的目录

    if (isset($_POST["submit"])){
        if ($upfile['type']=="image/jpeg" || $upfile['type']=="image/png") {
            if($upfile["error"]>0){
                //获取错误信息
                switch($upfile['error']){
                    case 1:
                        $info="上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。"; 
                        break;
                    case 2:
                        $info="上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。"; 
                        break;
                    case 3:
                        $info="文件只有部分被上传。"; 
                        break;
                    case 4:
                        $info="没有文件被上传。 ";
                    case 6:
                        $info="找不到临时文件夹。"; 
                        break;
                    case 7:
                        $info="文件写入失败"; 
                        break;
                }

                die("上传文件错误，原因：".$info);
            }
          
            if($upfile["size"]>100000){
                die("上传文件大小超出限制！");
            }

            //随机获取一个文件名
            $fileinfo = pathinfo($upfile["name"]);//解析上传文件名字
            do{
                $newfile= date("YmdHis").rand(1000,9999).".".$fileinfo["extension"];
            }while(file_exists($path.$newfile));

            //判断是否是一个上传的文件
            if(is_uploaded_file($upfile["tmp_name"])){
                //执行文件上传（移动上传文件）
                if(move_uploaded_file($upfile["tmp_name"],$path.$newfile)){
                    echo '<script>alert("上传成功.")</script>';
                    echo "<script language='javascript'>window.history.back(-1);</script>";
                    exit();
                }else{
                    die("上传文件失败");
                }
            } else {
                die("不是一个上传文件！");
            }
        } else {
            echo "文件类型不对.";
        }
    }
?>