<?php
  $app = new App();
  $router = new Buki\Router();
  $smarty->assign('app', $app);
  // HOME
  $router->get('/', function() {
      $GLOBALS['smarty']->display('pages/home.tpl');
  });

  if (strpos($_SERVER['REQUEST_URI'], 'account')) {
    if (!isset($_SESSION['user_id'])) {
      header('Location: /login');
    }
  }
  require_once __DIR__.'/sub-classes/account.router.php';


  // Authentications
  $router->get('/signup', function() {
      $GLOBALS['smarty']->display('pages/signup.tpl');
  });
  $router->post('/signup', function() {
      global $view;
      require $_SERVER["DOCUMENT_ROOT"].'/inc/classes/authentication.php';
      if (isset($_POST['signup']) && isset($_POST['email'])) {
        $auth = new Authentication();
        $auth->signup();
      }
      $GLOBALS['smarty']->display('pages/signup.tpl');
  });
  $router->get('/login', function() {
      $GLOBALS['smarty']->display('pages/login.tpl');
  });
  $router->post('/login', function() {
      if (isset($_POST['login']) && isset($_POST['email'])) {
        $auth = new Authentication();
        $auth->login();
      }
      $GLOBALS['smarty']->display('pages/login.tpl');
  });
  // End Authentications

  require_once __DIR__.'/sub-classes/listing.router.php';

  // Exams
  $router->get('/exams', function($value) {
      global $view;
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/exams.php";
  });
  $router->get('/exam/{*}', function($value) {
      global $view;
      global $i;  // institute name
      $i = $value;
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/exam-details.php";
  });
  // End Exams

  // Search
  $router->get('/search', function() {
      global $view;
      //isset($_GET['q']) && !empty($_GET['q']) ? null : header('Location: /');
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/search.php";
  });
  // End Search

  // 404
  /*$router->error(function(){
    header('Location: /404');
  });*/
  $router->add('GET|POST', '/404', function(){
    $GLOBALS['smarty']->display('pages/404.tpl');
  });

  $router->run();
