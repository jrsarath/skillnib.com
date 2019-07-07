<?php
  require __DIR__ .'/application.php';
  $app = new App();


  // AVG REVIEW CRON JOB

  (function(){
    global $app;
    $result = mysqli_query($app->db, "SELECT AVG(star) as star, review_for, review_type FROM reviews GROUP BY review_for");
    while ($row = mysqli_fetch_assoc($result)) {
      $i = $row['review_for'];
      $t = $row['review_type'];
      $s = $row['star'];
      if ($t == 'institute') {
        mysqli_query($app->db, "UPDATE institutes SET avg_review='$s' WHERE id=$i") ? null : error_log("SQL Error(cron job): ".mysqli_error($this->db));
      } else if($t == 'college') {
        mysqli_query($app->db, "UPDATE colleges SET avg_review='$s' WHERE id=$i") ? null : error_log("SQL Error(cron job): ".mysqli_error($this->db));
      } else if($t == 'job_consultancy') {
        mysqli_query($app->db, "UPDATE job_consultancy SET avg_review='$s' WHERE id=$i") ? null : error_log("SQL Error(cron job): ".mysqli_error($this->db));
      } else if($t == 'tuition') {
        mysqli_query($app->db, "UPDATE tuition SET avg_review='$s' WHERE id=$i") ? null : error_log("SQL Error(cron job): ".mysqli_error($this->db));
      }
    }
  })();

  // RESET MCQ LIMIT A 00:00 HOURS
  /*(function(){
    global $app;
    $result = mysqli_query($app->db, "UPDATE institutes SET mcq_limit='0'");
  })();*/


  /*(function(){
    global $app;
    if ($query = mysqli_query($app->db, "SELECT * FROM institutes")) {
      while ($row = mysqli_fetch_assoc($query)) {
        //echo $row["name"];
        if ($row['slug'] == NULL ) {
          $slug = strtolower(str_replace(" ", "-", $row["name"]));
          $id = $row["id"];
          mysqli_query($app->db, "UPDATE institutes SET slug='$slug' WHERE id='$id' ");
          echo $slug.'<br>';
        }
      }
    }
  })();*/
