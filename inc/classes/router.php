<?php
  ob_start();
  require $_SERVER["DOCUMENT_ROOT"]."/inc/classes/application.php";
  $app = new App();
  $router = new Buki\Router();
  $view;

      // HOME
      $router->get('/', function() {
          global $view;
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/home.php";
      });

      // ACCOUNT
      $router->get('/account', function() {
          global $view;
          global $app;
          global $id;
          $id = $_SESSION['user_id'];
          if ($app->user_details($id, 'role') == 'student') {
            $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/student_profile.php";
          }
          if ($app->user_details($id, 'role') == 'business') {
            $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/business_profile.php";
          }
      });
      $router->post('/account', function() {
          global $view;
          global $app;
          global $id;
          $id = $_SESSION['user_id'];
          if ($app->user_details($id, 'role') == 'student') {
            $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/student_profile.php";
            if (isset($_POST['add-student-info'])) {
              $app->add_student_data($id);
            }
          }
          if ($app->user_details($id, 'role') == 'business') {
            $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/business_profile.php";
            if (isset($_POST['post_mcq'])) {
              $app->add_mcq($_POST["for_int"]);
            }
          }
      });
          // ACCOUNT SUB ROUTES
          $router->get('/account/edit', function() {
              global $view;
              $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/edit-org.php";
          });
          $router->post('/account/edit', function() {
              global $view;
              $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/edit-org.php";
          });
      // Authentications
      $router->get('/signup', function() {
          global $view;
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/signup.php";
      });
      $router->post('/signup', function() {
          global $view;
          require $_SERVER["DOCUMENT_ROOT"].'/inc/classes/authentication.php';
          if (isset($_POST['signup']) && isset($_POST['email'])) {
            $auth = new Authentication();
            $auth->signup();
          }
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/signup.php";
      });
      $router->get('/login', function() {
          global $view;
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/login.php";
      });
      $router->post('/login', function() {
          global $view;
          require $_SERVER["DOCUMENT_ROOT"].'/inc/classes/authentication.php';
          if (isset($_POST['login']) && isset($_POST['email'])) {
            $auth = new Authentication();
            $auth->login();
          }
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/login.php";
      });
      // End Authentications

      // Institutes
      $router->get('/institutes', function($value) {
          global $view;
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/institutes.php";
      });
      $router->get('/institute/{*}', function($value) {
          global $view;
          global $i;  // institute name
          $i = $value;
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/institute.php";
      });
      $router->post('/institute/{*}', function($value) {
          global $view;
          global $i;  // institute name
          global $app;
          $i = $value;
          if (isset($_POST['add-review'])) {
            $app->addReview($i, 'institute');
          } elseif (isset($_POST['add-post'])) {
            $app->addPost($i, 'institute');
          } elseif (isset($_POST["add-mcq-set"])) {
            $app->add_mcq($i);
          }
          $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/institute.php";
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
      $router->error(function(){
        header('Location: /404');
      });
      $router->add('GET|POST', '/404', function(){
        global $view;
        $view = $_SERVER["DOCUMENT_ROOT"]."/inc/views/404.php";
      });
  $router->run();
