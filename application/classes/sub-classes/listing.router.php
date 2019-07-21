<?php
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
  $GLOBALS['smarty']->assign('i', $value);
  $GLOBALS['smarty']->display('pages/college.tpl');
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
  $GLOBALS['smarty']->assign('i', $value);
  $GLOBALS['smarty']->display('pages/job-consultancy.tpl');
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
  $GLOBALS['smarty']->assign('i', $value);
  $GLOBALS['smarty']->display('pages/tuition.tpl');
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
