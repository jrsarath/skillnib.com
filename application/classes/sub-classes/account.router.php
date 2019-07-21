<?php
// ACCOUNT
$router->get('/account', function() {
    global $app;
    $id = $_SESSION['user_id'];
    $GLOBALS['smarty']->assign('id', $id);
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
    $GLOBALS['smarty']->assign('id', $id);
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
    // ADD INSTITUTE
    $router->get('/account/add/institute', function() {
        $GLOBALS['smarty']->display('pages/add-institute.tpl');
    });
    $router->post('/account/add/institute', function() {
        global $app;
        if (isset($_POST['submit'])) {
          $callback = $app->add_institute();
          $GLOBALS['smarty']->assign('review_callback', $callback);
        }
        $GLOBALS['smarty']->display('pages/add-institute.tpl');
    });
    // EDIT INSTITUTE
    $router->get('/account/edit/institute', function() {
        $GLOBALS['smarty']->display('pages/edit-institute.tpl');
    });
    $router->post('/account/edit/institute', function() {
        $GLOBALS['smarty']->display('pages/edit-institute.tpl');
    });

    // ADD COLLEGE
    $router->get('/account/add/college', function() {
        $GLOBALS['smarty']->display('pages/add-college.tpl');
    });
    $router->post('/account/add/college', function() {
        global $app;
        if (isset($_POST['submit'])) {
          $callback = $app->add_institute();
          $GLOBALS['smarty']->assign('review_callback', $callback);
        }
        $GLOBALS['smarty']->display('pages/add-college.tpl');
    });
    // EDIT COLLEGE
    $router->get('/account/edit/college', function() {
        $GLOBALS['smarty']->display('pages/edit-college.tpl');
    });
    $router->post('/account/edit/college', function() {
        $GLOBALS['smarty']->display('pages/edit-college.tpl');
    });

    // ADD TUITION
    $router->get('/account/add/tuition', function() {
        $GLOBALS['smarty']->display('pages/add-tuition.tpl');
    });
    $router->post('/account/add/tuition', function() {
        global $app;
        if (isset($_POST['submit'])) {
          $callback = $app->add_tuition();
          $GLOBALS['smarty']->assign('review_callback', $callback);
        }
        $GLOBALS['smarty']->display('pages/add-tuition.tpl');
    });
    // EDIT TUITION
    $router->get('/account/edit/tuition', function() {
        $GLOBALS['smarty']->display('pages/edit-tuition.tpl');
    });
    $router->post('/account/edit/college', function() {
        $GLOBALS['smarty']->display('pages/edit-tuition.tpl');
    });

    // ADD JOB CONSULTANCY
    $router->get('/account/add/job-consultancy', function() {
        $GLOBALS['smarty']->display('pages/add-job-consultancy.tpl');
    });
    $router->post('/account/add/job-consultancy', function() {
        global $app;
        if (isset($_POST['submit'])) {
          $callback = $app->add_job_consultancy();
          $GLOBALS['smarty']->assign('review_callback', $callback);
        }
        $GLOBALS['smarty']->display('pages/add-job-consultancy.tpl');
    });
    // EDIT JOB CONSULTANCY
    $router->get('/account/edit/job-consultancy', function() {
        $GLOBALS['smarty']->display('pages/edit-job-consultancy.tpl');
    });
    $router->post('/account/edit/college', function() {
        $GLOBALS['smarty']->display('pages/edit-job-consultancy.tpl');
    });
