<?php
session_start();
// Allowed origins to upload images
$accepted_origins = array("http://skillnib", "http://skillnib.com", "https://skillnib", "https://skillnib.com");

reset($_FILES);
$temp = current($_FILES);
if(is_uploaded_file($temp['tmp_name'])){
    if(isset($_SERVER['HTTP_ORIGIN'])){
        // VERIFY ORIGIN IF SET
        if(in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)){
            header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
        }else{
            header("HTTP/1.1 403 Origin Denied");
            return;
        }
    }

    // SANITIZE FILE NAME
    if(preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])){
        header("HTTP/1.1 400 Invalid file name.");
        return;
    }

    // VERIFY EXTENSION
    if(!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))){
        header("HTTP/1.1 400 Invalid extension.");
        return;
    }

    $folder = '/upload/images/users/'.$_SESSION["user_id"].'/'.$_POST["type"].'/'.date('d-m-Y').'/';

    if (!file_exists($folder) && !is_dir($folder)) {
        //error_log($_SERVER["DOCUMENT_ROOT"].$folder);
        mkdir($_SERVER["DOCUMENT_ROOT"].$folder, 0777, true);
    }
    $imageFolder = $_SERVER["DOCUMENT_ROOT"].$folder;

    // ACCEPT UPLOAD IF ORIGIN IS VALID, EXTENSION VERIFIED
    $newImg = str_replace(' ', '', $temp['name']);
    $filetowrite = $imageFolder . $newImg;
    move_uploaded_file($temp['tmp_name'], $filetowrite);

    // Respond to the successful upload with JSON.
    $protocol=strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https')
                === FALSE ? 'http' : 'https';
    echo $protocol . '://'.$_SERVER['SERVER_NAME'].$folder.$newImg;
  } else {
      // RETURN 500
      header("HTTP/1.1 500 Server Error");
  }
?>
