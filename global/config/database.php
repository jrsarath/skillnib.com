<?php
  // DB CONFIG FILE
  $db_host = "localhost";
  $db_name = "listing";
  $db_user = "jrsarath_camalia";
  $db_pass = "jrsarath_camalia";

  $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if (!$db) {
    die(header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500));
  }
