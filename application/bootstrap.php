<?php
  session_start();
  require $_SERVER["DOCUMENT_ROOT"].'/application/conf/directory.php';
  require $vendors.'/autoload.php';
  require $classes.'/application.php';
  require $classes.'/smarty.php';
  require $classes.'/router.php';
