<?php
  /**
   * Database Helper
   */
  class DBHelper {
    public $post;
    public $value;
    public $debug = true;

    function safeValuePost($post) {
      return mysqli_real_escape_string($this->connect(), $_POST[$post]);
    }
    function safeValue($value) {
      return mysqli_real_escape_string($this->connect(), $value);
    }

    function connect() {
      $db_host = "localhost";
      $db_name = "myjoqxmb_skill";
      $db_user = "myjoqxmb_skill";
      $db_pass = "myjoqxmb_skill";

      $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
      return $db;
    }
    function debug(){
      return $this->debug;
    }
  }
