<?php
  /**
   * Authentication
   */
  class Authentication {
    protected $email;
    protected $password;
    protected $role;
    public $db;
    public $debug;

    public function __construct (){
      $dbclass = new DBHelper();
      $this->db = $dbclass->connect();
      $this->debug = $dbclass->debug();
      $this->email = $dbclass->safeValuePost("email");
      $this->password = md5($dbclass->safeValuePost("password"));
      isset($_POST["role"]) ?
        $this->role = $dbclass->safeValuePost("role") : null ;
    }
    function login(){
      if ($result = mysqli_query($this->db, "SELECT * FROM users WHERE email='$this->email' AND password='$this->password'")){
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
          $_SESSION["user_email"] = $row["email"];
          $_SESSION["user_id"] = $row["id"];
          $this->debug ? error_log('Authenticated, User ID: '.$row["id"]) : null ;
          header('location: /account');
        } else {
          $this->debug ? error_log('Authentication Failed: '.mysqli_error($this->db)) : null ;
          header('location: /login?invalid');
        }
      } else {
        $this->debug ? error_log('SQL ERROR: '.mysqli_error($this->db)) : null ;
        return "unexpected";
      }
    }
    function signup(){
      if (mysqli_query($this->db, "INSERT INTO users(email, password, role) VALUES('$this->email', '$this->password', '$this->role')")){
        //return('Success');
        header('Location: /login?continue');
      } else {
        return('Fail, Check Log');
        $this->debug ? error_log('SQL ERROR: '.mysqli_error($this->db)) : null ;
      }
    }
  }
