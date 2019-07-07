<?php
session_start();
if ($_GET["get"]== "y") {
  echo '<pre>';
  var_dump($_SESSION);
  echo '</pre>';
}
if ($_GET["set"]== "y") {
  $_SESSION['authentication_status'] == 'true';
  echo '<pre>';
  var_dump($_SESSION);
  echo '</pre>';
}
if ($_GET["del"]== "y") {
  session_destroy();
  echo '<pre>';
  var_dump($_SESSION);
  echo '</pre>';
}
?>
