<?php
session_start();
// Allowed origins to upload images
$accepted_origins = array("http://localhost", "http://107.161.82.130", "http://codexworld.com");

// Images upload path
if (isset($_POST['post_image'])) {
  $folder = '/upload/images/posts/'.$_SESSION["user_id"].'/'.date('d-m-Y').'/';
  if (!file_exists($folder) && !is_dir($folder)) {
      //error_log($_SERVER["DOCUMENT_ROOT"].$folder);
      mkdir($_SERVER["DOCUMENT_ROOT"].$folder, 0777, true);
  }
}
$imageFolder = $_SERVER["DOCUMENT_ROOT"].$folder;

reset($_FILES);
$temp = current($_FILES);
if(is_uploaded_file($temp['tmp_name'])){
    /*if(isset($_SERVER['HTTP_ORIGIN'])){
        // Same-origin requests won't set an origin. If the origin is set, it must be valid.
        if(in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)){
            header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
        }else{
            header("HTTP/1.1 403 Origin Denied");
            return;
        }
    }*/

    // Sanitize input
    if(preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])){
        header("HTTP/1.1 400 Invalid file name.");
        return;
    }

    // Verify extension
    if(!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))){
        header("HTTP/1.1 400 Invalid extension.");
        return;
    }

    // Accept upload if there was no origin, or if it is an accepted origin
    $filetowrite = $imageFolder . $temp['name'];
    move_uploaded_file($temp['tmp_name'], $filetowrite);

    // Respond to the successful upload with JSON.
    $protocol=strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https')
                === FALSE ? 'http' : 'https';
    echo json_encode(array('location' => $protocol . '://'.$_SERVER['SERVER_NAME'].$folder.$temp['name']));
} else {
    // Notify editor that the upload failed
    header("HTTP/1.1 500 Server Error");
}
?>
