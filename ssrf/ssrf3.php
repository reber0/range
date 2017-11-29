<?php
/*
code by reber
email:1070018473@qq.com
*/
    function GetFile($host,$port,$link) { 
        $fp = fsockopen($host, intval($port), $errno, $errstr, 30); 
        if (!$fp) 
        { 
            echo "$errstr (error number $errno) \n"; 
        } 
        else 
        { 
            $out = "GET $link HTTP/1.1\r\n"; 
            $out .= "Host: $host\r\n"; 
            $out .= "Connection: Close\r\n\r\n"; 
            $out .= "\r\n"; 
            fwrite($fp, $out); 
            $contents=''; 
            while (!feof($fp)) 
            { 
                $contents.= fgets($fp, 1024); 
            } 
            fclose($fp); 
            return $contents; 
        }
    }


    if (isset($_GET['url'])){
        header('content-type: image/png');
        $url = $_GET['url'];
        $arr = parse_url($url);

        $host = $arr['host'];
        $port = @$arr['port']?$arr['port']:'80';
        $link = $arr['path'];

        $data = GetFile($host,$port,$link);
        preg_match("/Content-Length:.?(\d+)/", $data, $matches);
        $length = $matches[1];
        $content = substr($data,strlen($data) - $length);
        echo $content;
    } else {
        echo 'please input url.';
    }

?>