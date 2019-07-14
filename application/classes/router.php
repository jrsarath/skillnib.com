<?php
  $app = new App();
  $router = new Buki\Router();
  $smarty->assign('app', $app);
  // HOME
  $router->get('/', function() {
      $GLOBALS['smarty']->display('pages/home.tpl');
  });

  // ACCOUNT
  $router->get('/account', function() {
      global $app;
      $id = $_SESSION['user_id'];
      $GLOBALS['smarty']->assign('i', $id);
      if ($app->user_details($id, 'role') == 'student') {
        $GLOBALS['smarty']->display('pages/student-profile.tpl');
      }
      if ($app->user_details($id, 'role') == 'business') {
        $GLOBALS['smarty']->display('pages/business-profile.tpl');
      }
  });
  $router->post('/account', function() {
      global $app;
      $id = $_SESSION['user_id'];
      $GLOBALS['smarty']->assign('i', $id);
      if ($app->user_details($id, 'role') == 'student') {
        $GLOBALS['smarty']->display('pages/student-profile.tpl');
        if (isset($_POST['add-student-info'])) {
          $app->add_student_data($id);
        }
      }
      if ($app->user_details($id, 'role') == 'business') {
        $GLOBALS['smarty']->display('pages/business-profile.tpl');
        if (isset($_POST['post_mcq'])) {
          $app->add_mcq($_POST["for_int"]);
        }
      }
  });
  // ACCOUNT SUB ROUTES
      // EDIT ORG
      $router->get('/account/edit', function() {
          global $view;
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/edit-org.php";
      });
      $router->post('/account/edit', function() {
          global $view;
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/edit-org.php";
      });
      // ADD INSTITUTE
      $router->get('/account/add/institute', function() {
          global $view;
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/add-institute.php";
      });
      $router->post('/account/add/institute', function() {
          global $view;
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/add-institute.php";
      });

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

  // Institutes
  $router->get('/institutes', function($value) {
      $GLOBALS['smarty']->display('pages/institutes.tpl');
  });
  $router->get('/institute/{*}', function($value) {
      $GLOBALS['smarty']->assign('i', $value);
      $GLOBALS['smarty']->display('pages/institute.tpl');
  });
  $router->post('/institute/{*}', function($value) {
      global $view;
      global $i;  // institute name
      global $app;
      $i = $value;
      if (isset($_POST['add-review'])) {
        $callback = $app->addReview($i, 'institute');
        $GLOBALS['smarty']->assign('review_callback', $callback);
      } elseif (isset($_POST['add-post'])) {
        $app->addPost($i, 'institute');
      } elseif (isset($_POST["add-mcq-set"])) {
        $app->add_mcq($i);
      }
      $GLOBALS['smarty']->assign('i', $value);
      $GLOBALS['smarty']->display('pages/institute.tpl');
  });
  // End Institutes

  // Colleges
  $router->get('/colleges', function($value) {
      global $view;
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/colleges.php";
  });
  $router->get('/college/{*}', function($value) {
      global $view;
      global $i;  // institute name
      $i = $value;
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/college.php";
  });
  $router->post('/college/{*}', function($value) {
      global $view;
      global $i;  // institute name
      global $app;
      $i = $value;
      if (isset($_POST['add-review'])) {
        $app->addReview($i, 'college');
      } elseif (isset($_POST['add-post'])) {
        $app->addPost($i, 'college');
      }
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/college.php";
  });
  // End Colleges

  // Job Consultancy
  $router->get('/job-consultancies', function($value) {
      global $view;
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/job_consultancies.php";
  });
  $router->get('/job-consultancy/{*}', function($value) {
      global $view;
      global $i;  // institute name
      $i = $value;
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/job_consultancy.php";
  });
  $router->post('/job-consultancy/{*}', function($value) {
      global $view;
      global $i;  // institute name
      global $app;
      $i = $value;
      if (isset($_POST['add-review'])) {
        $app->addReview($i, 'job_consultancy');
      } elseif (isset($_POST['add-post'])) {
        $app->addPost($i, 'job_consultancy');
      }
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/job_consultancy.php";
  });
  // End Job Consultancy

  // Tuitions
  $router->get('/tuitions', function($value) {
      global $view;
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/tuitions.php";
  });
  $router->get('/tuition/{*}', function($value) {
      global $view;
      global $i;  // institute name
      $i = $value;
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/tuition.php";
  });
  $router->post('/tuition/{*}', function($value) {
      global $view;
      global $i;  // institute name
      global $app;
      $i = $value;
      if (isset($_POST['add-review'])) {
        $app->addReview($i, 'tuition');
      } elseif (isset($_POST['add-post'])) {
        $app->addPost($i, 'tuition');
      }
      $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/tuition.php";
  });
  // End Job Consultancy

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
  });
  $router->add('GET|POST', '/404', function(){
    global $view;
    $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/404.php";
  });*/

  $router->run();
