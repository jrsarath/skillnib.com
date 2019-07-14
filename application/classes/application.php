<?php

  /**
   * MAIN APPLICATION CONTROLLER
   */
  require __DIR__ .'/databaseHelper.php';
  class App {
    public $db;
    public $debug;
    public $version = '1.0';

    function __construct() {
      $DBHelper = new DBHelper();
      $this->db = $DBHelper->connect();
      $this->debug = $DBHelper->debug();
    }
    // INSTITUTE DETAILS
    function int_details($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM institutes WHERE slug='$i'")) {
        $row = mysqli_fetch_assoc($result);
        if ($d == 'images') {
          $img = explode(',', $row[$d]);
          $index = 0;
          foreach($img as &$key) {
            if ($index == 0) {
              echo '<a href="'.$key.'" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>';
            } else {
              echo '<a href="'.$key.'" title="Photo title" data-effect="mfp-zoom-in"></a>';
            }
            $index++;
          }
        } elseif ($d == 'categories' || $d == 'tags') {
          $item = explode(',', $row[$d]);
          foreach ($item as &$tag) {
            echo '<span class="tag">'.$tag.'</span>';
          }
        } else {
          return $row[$d];
        }
      } else {
        $this->debug_error();
      }
    }
    function int_details_raw($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM institutes WHERE slug='$i'")) {
        $row = mysqli_fetch_assoc($result);
        return $row[$d];
      } else {
        $this->debug_error();
      }
    }
    // END INSTITUTE DETAILS

    // COLLEGE DETAILS
    function clg_details($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM colleges WHERE slug='$i'")) {
        $row = mysqli_fetch_assoc($result);
        if ($d == 'images') {
          $img = explode(',', $row[$d]);
          $index = 0;
          foreach($img as &$key) {
            if ($index == 0) {
              echo '<a href="'.$key.'" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>';
            } else {
              echo '<a href="'.$key.'" title="Photo title" data-effect="mfp-zoom-in"></a>';
            }
            $index++;
          }
        } elseif ($d == 'exams' || $d == 'tags' || $d == 'degree') {
          $item = explode(',', $row[$d]);
          foreach ($item as &$tag) {
            echo '<span class="tag">'.$tag.'</span>';
          }
        } elseif ($d == 'facilities') {
          $item = explode(',', $row[$d]);
          foreach ($item as &$tag) {
            echo '<span class="facility">'.$tag.'</span>';
          }
        } else {
          return $row[$d];
        }
      } else {
        $this->debug_error();
      }
    }
    function clg_details_raw($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM colleges WHERE slug='$i'")) {
        $row = mysqli_fetch_assoc($result);
        return $row[$d];
      } else {
        $this->debug_error();
      }
    }
    // END COLLEGE DETAILS

    // JOB CONSULTANCY DETAILS
    function job_details($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM job_consultancy WHERE slug='$i'")) {
        $row = mysqli_fetch_assoc($result);
        if ($d == 'images') {
          $img = explode(',', $row[$d]);
          $index = 0;
          foreach($img as &$key) {
            if ($index == 0) {
              echo '<a href="'.$key.'" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>';
            } else {
              echo '<a href="'.$key.'" title="Photo title" data-effect="mfp-zoom-in"></a>';
            }
            $index++;
          }
        } elseif ($d == 'exams' || $d == 'tags' || $d == 'degree') {
          $item = explode(',', $row[$d]);
          foreach ($item as &$tag) {
            echo '<span class="tag">'.$tag.'</span>';
          }
        } elseif ($d == 'facilities') {
          $item = explode(',', $row[$d]);
          foreach ($item as &$tag) {
            echo '<span class="facility">'.$tag.'</span>';
          }
        } else {
          return $row[$d];
        }
      } else {
        $this->debug_error();
      }
    }
    function job_details_raw($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM job_consultancy WHERE slug='$i'")) {
        $row = mysqli_fetch_assoc($result);
        return $row[$d];
      } else {
        $this->debug_error();
      }
    }
    // END JOB CONSULTANCY DETAILS

    // TUITION DETAILS
    function tuition_details($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM tuition WHERE slug='$i'")) {
        $row = mysqli_fetch_assoc($result);
        if ($d == 'images') {
          $img = explode(',', $row[$d]);
          foreach($img as &$key) {
            echo '
            <div class="portfolio-item">
              <a href="'.$key.'" data-lightbox="portfolio-image">
                <img src="'.$key.'" class="img-fluid" alt="">
              </a>
            </div>
            ';
          }
        } elseif ($d == 'exams' || $d == 'tags' || $d == 'degree') {
          $item = explode(',', $row[$d]);
          foreach ($item as &$tag) {
            echo '<span class="tag">'.$tag.'</span>';
          }
        } elseif ($d == 'facilities') {
          $item = explode(',', $row[$d]);
          foreach ($item as &$tag) {
            echo '<span class="facility">'.$tag.'</span>';
          }
        } else {
          return $row[$d];
        }
      } else {
        $this->debug_error();
      }
    }
    function tuition_details_raw($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM tuition WHERE slug='$i'")) {
        $row = mysqli_fetch_assoc($result);
        return $row[$d];
      } else {
        $this->debug_error();
      }
    }
    // END TUITION DETAILS

    // EXAM DETAILS
    function exam_details($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM exams WHERE slug='$i'")) {
        $row = mysqli_fetch_assoc($result);
        if ($d == 'exams' || $d == 'tags' || $d == 'degree') {
          $item = explode(',', $row[$d]);
          foreach ($item as &$tag) {
            echo '<span class="tag">'.$tag.'</span>';
          }
        } elseif ($d == 'facilities') {
          $item = explode(',', $row[$d]);
          foreach ($item as &$tag) {
            echo '<span class="facility">'.$tag.'</span>';
          }
        } else {
          return $row[$d];
        }
      } else {
        $this->debug_error();
      }
    }
    function exam_details_raw($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM exams WHERE slug='$i'")) {
        $row = mysqli_fetch_assoc($result);
        return $row[$d];
      } else {
        $this->debug_error();
      }
    }
    // END EXAM DETAILS

    // REVIEWS & RATINGS
    function get_reviews($i, $t) {
      if ($t == 'institute') {
        $id = $this->int_details($i, 'id');
      } else if ($t == 'college') {
        $id = $this->clg_details($i, 'id');
      } else if ($t == 'job_consultancy') {
        $id = $this->job_details($i, 'id');
      } else if ($t == 'tuition') {
        $id = $this->tuition_details($i, 'id');
      }
      if ($result = mysqli_query($this->db, "SELECT * FROM reviews WHERE review_for='$id' AND review_type='$t'")) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $stars = '';
            for ($x = 1; $x <= $row['star']/2; $x++) {
                $stars .= '<i class="icon_star voted"></i>';
            }
            if ($row["reviewer_type"] == 'student' ) {
              $img = $this->student_details($row['reviewer_id'], 'image');
            } else {
              $img = $this->business_details($row['reviewer_id'], 'image');
            }
            echo '
              <div class="review-box clearfix">
                <figure class="rev-thumb"><img src="'.$img.'" alt="Avatar">
                </figure>
                <div class="rev-content">
                  <div class="rating">
                    '.$stars.'
                  </div>
                  <div class="rev-info">
                    '.$row["name"].' – '.$row["date"].'
                  </div>
                  <div class="rev-text">
                    <p>
                      '.$row["comment"].'
                    </p>
                  </div>
                </div>
              </div>
            ';
          }
        } else {
          echo '<div class="review-content container-fluid py-5 text-center">
                  <h6 class="text-secondary">No Reviews Yet</h6>
                </div>';
        }
      } else {
        $this->debug_error();
      }
    }
    function get_total_rating($i, $t) {
      if ($t == 'institute') {
        $id = $this->int_details($i, 'id');
      } else if ($t == 'college') {
        $id = $this->clg_details($i, 'id');
      } else if ($t == 'job_consultancy') {
        $id = $this->job_details($i, 'id');
      } else if ($t == 'tuition') {
        $id = $this->tuition_details($i, 'id');
      }
      if ($result = mysqli_query($this->db, "SELECT AVG(star) as star FROM reviews WHERE review_for='$id' AND review_type='$t'")) {
        $row = mysqli_fetch_assoc($result);

        if (!empty($row['star'])) {
          $s = '';
          for ($x = 1; $x <= $row['star']/2; $x++) {
              $s .= '<i class="icon_star"></i>';
          }
          return $s;
        } else {
          return '<i class="icon_star"></i>';
        }

      } else {
        $this->debug_error();
      }
    }
    function text_rating($i, $t) {
      if ($t == 'institute') {
        $id = $this->int_details($i, 'id');
      } else if ($t == 'college') {
        $id = $this->clg_details($i, 'id');
      } else if ($t == 'job_consultancy') {
        $id = $this->job_details($i, 'id');
      } else if ($t == 'tuition') {
        $id = $this->tuition_details($i, 'id');
      }
      if ($result = mysqli_query($this->db, "SELECT AVG(star) as star FROM reviews WHERE review_for='$id' AND review_type='$t'")) {
        $row = mysqli_fetch_assoc($result);
        return $row['star']/2;
      } else {
        $this->debug_error();
      }
    }
    function review_grade($d){
      if ($d <= 1.5) {
        return 'Poor';
      }
      if ($d > 1.5 && $d < 2.5) {
        return 'Okay';
      }
      if ($d > 2.5 && $d < 4) {
        return 'Good';
      }
      if ($d >= 4) {
        return 'Excellent';
      }
    }
    function total_review_count($i, $t) {
      if ($t == 'institute') {
        $id = $this->int_details($i, 'id');
      } else if ($t == 'college') {
        $id = $this->clg_details($i, 'id');
      } else if ($t == 'job_consultancy') {
        $id = $this->job_details($i, 'id');
      } else if ($t == 'tuition') {
        $id = $this->tuition_details($i, 'id');
      }
      if ($result = mysqli_query($this->db, "SELECT AVG(star) as star FROM reviews WHERE review_for='$id' AND review_type='$t'")) {
        //$row = mysqli_fetch_assoc($result);
        return mysqli_num_rows($result);
      } else {
        $this->debug_error();
      }
    }
    function addReview($i, $t) {
      if ($t == 'institute') {
        $id = $this->int_details($i, 'id');
      } else if ($t == 'college') {
        $id = $this->clg_details($i, 'id');
      } else if ($t == 'job_consultancy') {
        $id = $this->job_details($i, 'id');
      } else if ($t == 'tuition') {
        $id = $this->tuition_details($i, 'id');
      }
      $user = $_SESSION['user_id'];
      if ($this->user_details($user, 'role') == 'student') {
        $name = $this->student_details($user, 'name');
        $reviewer_type = 'student';
      } else {
        $name = $this->business_details($user, 'name');
        $reviewer_id = 'business';
      }
      $rating = $this->safeValuePost('rating');
      $review = $this->safeValuePost('review');
      $date = date('d M Y');
      $query = mysqli_query($this->db, "SELECT * FROM reviews WHERE parent_id='$user' AND review_for='$id' AND review_type='$t'");
      //error_log(mysqli_num_rows($query));
      if (mysqli_num_rows($query) <= 0 ){
        if (mysqli_query($this->db, "INSERT INTO reviews(review_type, review_for, parent_id, name, reviewer_id, reviewer_type, star, comment, date) VALUES('$t','$id','$user', '$name', '$user', '$reviewer_type', '$rating','$review', '$date')")) {
          return 'success';
        } else {
          return 'error';
          $this->debug_error();
        }
      } elseif (mysqli_num_rows($query) > 0){
        return 'duplicate';
      } else {
        return 'error';
        $this->debug_error();
      }
    }
    // END REVIEWS & RATINGS

    // POSTING
    function addPost($i, $t) {
      if ($t == 'institute') {
        $id = $this->int_details($i, 'id');
      } else if ($t == 'college') {
        $id = $this->clg_details($i, 'id');
      } else if ($t == 'job_consultancy') {
        $id = $this->job_details($i, 'id');
      } else if ($t == 'tuition') {
        $id = $this->tuition_details($i, 'id');
      }
      $title = $this->safeValuePost('post-title');
      $post = $this->safeValuePost('post-ready-content');
      $date = date('d M Y-h:i A');
      if (mysqli_query($this->db, "INSERT INTO posts(parent_id, post_type, title,content,date) VALUES('$id', '$t', '$title','$post','$date')")) {
        global $status;
        $status = 'post-success';
      } else {
        global $status;
        $status = 'post-error';
        $this->debug_error();
      }
    }
    function get_posts($i, $t){
      if ($t == 'institute') {
        $id = $this->int_details($i, 'id');
      } else if ($t == 'college') {
        $id = $this->clg_details($i, 'id');
      } else if ($t == 'job_consultancy') {
        $id = $this->job_details($i, 'id');
      } else if ($t == 'tuition') {
        $id = $this->tuition_details($i, 'id');
      }
      if ($result = mysqli_query($this->db, "SELECT * FROM posts WHERE parent_id='$id' ORDER BY id DESC")) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo '            
              <article class="blog">
								<div class="post_info">
									<small>'.explode('-', $row["date"])[0].'</small>
									<h2>'.$row["title"].'</h2>
									<p>'.$row["content"].'</p>
								</div>
							</article>
            ';
          }
        } else {
          echo '
          <article class="blog">
            <div class="post_info">
              <small>&nbsp;</small>
              <h2>No Post/Announcement Yet</h2>
            </div>
          </article>
          ';
        }
      } else {
        $this->debug_error();
      }
    }
    // END POSTING
    function get_mcq_categories($m){
      if ($result = mysqli_query($this->db, "SELECT * FROM categories WHERE type='mcq'")) {
        while ($row = mysqli_fetch_assoc($result)) {
          if ($m == "select_list") {
            echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';
          }
        }
      }
    }
    function get_mcq_subcategories($m){
      if ($result = mysqli_query($this->db, "SELECT * FROM categories WHERE type='mcq'")) {
        while ($row = mysqli_fetch_assoc($result)) {
          $subc = explode(',', $row['subcategories']);
          //error_log(sizeof($subc));
          foreach($subc as &$key){
             echo '<option value="'.$key.'" data-parent="'.$row["category"].'" hidden>'.$key.'</option>';
          }
        }
      }
    }
    function get_courses($m){
      if ($result = mysqli_query($this->db, "SELECT * FROM courses")) {
        $city = '';
        while ($row = mysqli_fetch_assoc($result)) {
          if ($m == "select_list") {
            echo '<option value='.$row["course"].'>'.$row["course"].'</option>';
          } else {
            $city .= '<option value='.$row["course"].'>'.$row["course"].'</option>';
          }
        }
        if ($m != "select_list") {
          return $city;
        }
      } else {
        $this->debug_error();
      }
    }
    function add_mcq($i){
      $id = $this->int_details($i, 'id');
      $preSql = mysqli_query($this->db, "SELECT mcq_limit FROM institutes WHERE id='$id'");
      $pre = mysqli_fetch_assoc($preSql);
      if ($pre['mcq_limit'] <= 9) {
        $ca = $this->safeValuePost('mcq-category');
        $sca = $this->safeValuePost('mcq-subcategory');
        $mcq_content = array(
                          '1' => $this->safeValuePost('choice1'),
                          '2' => $this->safeValuePost('choice2'),
                          '3' => $this->safeValuePost('choice3'),
                          '4' => $this->safeValuePost('choice4'),
                          'correct' => $this->safeValuePost('correct'),
                          'exp' => $this->safeValuePost('exp'),
                        );
        $co = base64_encode(serialize($mcq_content));
        $d = date('d M Y');
        $q = $this->safeValuePost('question');
        if (mysqli_query($this->db, "INSERT INTO mcq(parent_id,category,sub_category,content,date, question)
                                     VALUES('$id','$ca','$sca','$co','$d', '$q')")) {

          mysqli_query($this->db, "UPDATE institutes SET mcq_limit=mcq_limit+1 WHERE id='$id'");
          global $status;
          $status = 'mcq-success';
        } else {
          global $status;
          $status = 'mcq-error';
          $this->debug_error();
        }
      } else {
        global $status;
        $status = 'mcq-limit';
      }

    }
    function get_mcq($i){
      function get_status($d, $ii){
        if ($d == $ii) {
          return 'correct';
        } else {
          return 'wrong';
        }
      }
      $id = $this->int_details($i, 'id');
      if ($result = mysqli_query($this->db, "SELECT * FROM mcq WHERE parent_id='$id'")) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            // FORMAT THE ACTUAL MCQ DATA
            $content = unserialize(base64_decode($row["content"]));
            $data = '
              <ul class="mcq-answers">
                <li data-correct="'.get_status($content["correct"], '1').'">1. '.$content['1'].'</li>
                <li data-correct="'.get_status($content["correct"], '2').'">2. '.$content['2'].'</li>
                <li data-correct="'.get_status($content["correct"], '3').'">3. '.$content['3'].'</li>
                <li data-correct="'.get_status($content["correct"], '4').'">4. '.$content['4'].'</li>
              </ul>
            ';
            echo '
            <div class="single-post">
              <div class="post-heading">
                <h4>'.$row["question"].'</h4>
                <p>'.$row["category"].'/'.$row['sub_category'].'</p>
              </div>
              <div class="post-contents">
                '.$data.'
                  <p class="ansexp">Explaination of the answer: '.$content["exp"].'</p>
              </div>
            </div>
            ';
          }
        } else {
          echo '<div class="review-content container-fluid py-5 text-center">
                  <h6 class="text-secondary">No MCQ Question added yet</h6>
                </div>';
        }
      } else {
        $this->debug_error();
      }
    }
    function get_mcq_student($i){
      function get_status($d, $ii){
        if ($d == $ii) {
          return 'correct';
        } else {
          return 'wrong';
        }
      }
      $id = $this->int_details($i, 'id');
      if ($result = mysqli_query($this->db, "SELECT * FROM mcq ")) {
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            // FORMAT THE ACTUAL MCQ DATA
            $content = unserialize(base64_decode($row["content"]));
            $data = '
              <ul class="mcq-answers">
                <li data-correct="'.get_status($content["correct"], '1').'">1. '.$content['1'].'</li>
                <li data-correct="'.get_status($content["correct"], '2').'">2. '.$content['2'].'</li>
                <li data-correct="'.get_status($content["correct"], '3').'">3. '.$content['3'].'</li>
              </ul>
            ';
            echo '
            <div class="single-post">
              <div class="post-heading">
                <h4>'.$row["question"].'</h4>
                <p>'.$row["category"].'/'.$row['sub_category'].'</p>
              </div>
              <div class="post-contents">
                '.$data.'
              </div>
            </div>
            ';
          }
        } else {
          echo '<div class="review-content container-fluid py-5 text-center">
                  <h6 class="text-secondary">No MCQ Question added yet</h6>
                </div>';
        }
      } else {
        $this->debug_error();
      }
    }
    function get_int_categories($m){
      if ($result = mysqli_query($this->db, "SELECT * FROM categories WHERE type='int'")) {
        while ($row = mysqli_fetch_assoc($result)) {
          if ($m == "select_list") {
            echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';
          }
          if ($m == "list_item"){
            echo '<li><a href="#" data-attr="'.$row['category'].'">'.$row['category'].'</a></li>';
          }
        }
      }
    }
    // USER FUNCTIONS
    function user_details($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM users WHERE id='$i'")) {
        $row = mysqli_fetch_assoc($result);
        return $row[$d];
      } else {
        $this->debug_error();
      }
    }
    function student_details($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM student_profile WHERE parent_id='$i'")) {
        $row = mysqli_fetch_assoc($result);
        return $row[$d];
      } else {
        $this->debug_error();
      }
    }
    function business_details($i, $d) {
      if ($result = mysqli_query($this->db, "SELECT $d FROM business_profile WHERE parent_id='$i'")) {
        $row = mysqli_fetch_assoc($result);
        return $row[$d];
      } else {
        $this->debug_error();
      }
    }
    function add_student_data($i) {
      $n = $this->safeValuePost('name');
      $d = $this->safeValuePost('dob');
      $c = $this->safeValuePost('city');
      $q = $this->safeValuePost('qualification');
      $im = $this->upload_image('student-profile');
      $st = $this->safeValuePost('state');
      $co = $this->safeValuePost('courses');
      $ex = $this->safeValuePost('exams');
      error_log($im);
      if (mysqli_query($this->db, "INSERT INTO student_profile (parent_id,name,dob,city,qualification,image,state,courses,exams)
                                  VALUES('$i','$n','$d','$c','$q','$im', '$st','$co','$ex')")) {
        global $student_data_status;
        $student_data_status = 'success';
      } else {
        global $student_data_status;
        $student_data_status = 'success';
      }
    }
    function get_my_inst($i, $m) {
      if ($result = mysqli_query($this->db, "SELECT * FROM institutes WHERE owner='$i'")) {
        if ($m == 'card') {
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
              $data = '
                <div class="custom-card p-0" style="background-image: url('.$row["cover_image"].')">
                  <div class="overlay"></div>
                  <div class="row">
                    <div class="col-4">
                      <img class="img-100" src="'.$row["profile_image"].'" alt="" />
                    </div>
                    <div class="col-8 text-white account-card-content-wrapper">
                      <div class="account-card-content">
                        <h6>'.$row["name"].'</h6>
                        <p><a href="/institute/'.$row["slug"].'">@'.$row["slug"].'</a></p>
                        <div class="mb-4">
                          <b class="rating">'.$this->text_rating($row["slug"], 'institute').'</b>
                          '.$this->get_total_rating($row["slug"], 'institute').'
                        </div>
                        <a href="/account/edit?type=institute&slug='.$row["slug"].'" class="button">Update Info</a>

                      </div>
                    </div>
                  </div>
                </div>
              ';
              echo $data;
            }
          } else {
            echo '<div class="review-content container-fluid py-5 text-center">
                    <h6 class="text-secondary">You didnt added any Institute yet</h6>
                  </div>';
          }
        }
        if ($m == 'id-only-list') {
          while ($row = mysqli_fetch_assoc($result)) {
            echo '
              <option value="'.$row["slug"].'">'.$row["name"].'</option>
            ';
          }
        }
      } else {
        $this->debug_error();
      }
    }
    function get_my_colg($i, $m) {
      if ($result = mysqli_query($this->db, "SELECT * FROM colleges WHERE owner='$i'")) {
        if ($m == 'card') {
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
              $data = '
                <div class="custom-card p-0" style="background-image: url('.$row["cover_image"].')">
                  <div class="overlay"></div>
                  <div class="row">
                    <div class="col-4">
                      <img class="img-100" src="'.$row["profile_image"].'" alt="" />
                    </div>
                    <div class="col-8 text-white account-card-content-wrapper">
                      <div class="account-card-content">
                        <h6>'.$row["name"].'</h6>
                        <p><a href="/college/'.$row["slug"].'">@'.$row["slug"].'</a></p>
                        <div class="mb-4">
                          <b class="rating">'.$this->text_rating($row["slug"], 'college').'</b>
                          '.$this->get_total_rating($row["slug"], 'college').'
                        </div>
                        <a href="/account/edit?type=college&slug='.$row["slug"].'" class="button">Update Info</a>

                      </div>
                    </div>
                  </div>
                </div>
              ';
              echo $data;
            }
          } else {
            echo '<div class="review-content container-fluid py-5 text-center">
                    <h6 class="text-secondary">You didnt added any Colleges yet</h6>
                  </div>';
          }
        }
      } else {
        $this->debug_error();
      }
    }
    function get_my_tuitions($i, $m) {
      if ($result = mysqli_query($this->db, "SELECT * FROM tuition WHERE owner='$i'")) {
        if ($m == 'card') {
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
              $data = '
                <div class="custom-card p-0" style="background-image: url('.$row["cover_image"].')">
                  <div class="overlay"></div>
                  <div class="row">
                    <div class="col-4">
                      <img class="img-100" src="'.$row["profile_image"].'" alt="" />
                    </div>
                    <div class="col-8 text-white account-card-content-wrapper">
                      <div class="account-card-content">
                        <h6>'.$row["name"].'</h6>
                        <p><a href="/tuition/'.$row["slug"].'">@'.$row["slug"].'</a></p>
                        <div class="mb-4">
                          <b class="rating">'.$this->text_rating($row["slug"], 'tuition').'</b>
                          '.$this->get_total_rating($row["slug"], 'tuition').'
                        </div>
                        <a href="/account/edit?type=tuition&slug='.$row["slug"].'" class="button">Update Info</a>
                      </div>
                    </div>
                  </div>
                </div>
              ';
              echo $data;
            }
          } else {
            echo '<div class="review-content container-fluid py-5 text-center">
                    <h6 class="text-secondary">You didnt added any Tution Class yet</h6>
                  </div>';
          }
        }
      } else {
        $this->debug_error();
      }
    }
    function get_my_jobc($i, $m) {
      if ($result = mysqli_query($this->db, "SELECT * FROM job_consultancy WHERE owner='$i'")) {
        if ($m == 'card') {
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
              $data = '
                <div class="custom-card p-0" style="background-image: url('.$row["cover_image"].')">
                  <div class="overlay"></div>
                  <div class="row">
                    <div class="col-4">
                      <img class="img-100" src="'.$row["profile_image"].'" alt="" />
                    </div>
                    <div class="col-8 text-white account-card-content-wrapper">
                      <div class="account-card-content">
                        <h6>'.$row["name"].'</h6>
                        <p><a href="/job-consultancy/'.$row["slug"].'">@'.$row["slug"].'</a></p>
                        <div class="mb-4">
                          <b class="rating">'.$this->text_rating($row["slug"], 'job_consultancy').'</b>
                          '.$this->get_total_rating($row["slug"], 'job_consultancy').'
                        </div>
                        <a href="/account/edit?type=job_consultancy&slug='.$row["slug"].'" class="button">Update Info</a>

                      </div>
                    </div>
                  </div>
                </div>
              ';
              echo $data;
            }
          } else {
            echo '<div class="review-content container-fluid py-5 text-center">
                    <h6 class="text-secondary">You didnt added any Job Consultancy yet</h6>
                  </div>';
          }
        }
      } else {
        $this->debug_error();
      }
    }
    // SEARCH FUNCTIONS
    function get_search_results() {
      $q = $this->safeValue($_GET['q']);
      $c = $this->safeValue($_GET['city']);
      if ($result = mysqli_query($this->db, "SELECT * FROM institutes WHERE name LIKE '%$q%' AND city='$c'")) {
        while ($row = mysqli_fetch_assoc($result)) {
          $data = '
          <div class="job-list">
            <div class="thumb">
              <a href="/institute/'.$row["slug"].'">
                <img src="'.$row["profile_image"].'" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <div class="content">
                <h4><a href="/institute/'.$row["slug"].'">'.$row["name"].'</a></h4>
                <div class="info">
                  <span><i class="fas fa-phone"></i>'.$row["phone"].'</span>
                  <span><a href="#"><i class="fas fa-map-marker-alt"></i>'.$row["city"].'</a></span>
                </div>
              </div>
              <div class="more">
                <div class="buttons">
                  <a href="/institute/'.$row["slug"].'" class="button">Know More</a>
                </div>
              </div>
            </div>
          </div>
          ';
          echo $data;
        }
      } else {
        $this->debug_error();
      }
    }
    // GLOBAL FUNCTIONS
    function get_institutes($c, $n, $t){
      $q = "SELECT * FROM institutes";
      $c == null ? null : $q .= " WHERE city='$c'";
      $t == "random" ? $q .= " ORDER BY RAND()" : $q .= "AND categories LIKE '%$t%'";
      $n == null ? null : $q .= " LIMIT $n";
      //error_log($q);
      $result = mysqli_query($this->db, $q);
      if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
           $data = "
            <div class='custom-card' style='background-image: url(".$row['cover_image'].")'>
              <div class='overlay'></div>
              <div class='content'>
                <p>".$row['name']."</p>
                <span>"
                  .$this->get_total_rating($row['name'], 'institute').
                "</span>
                <ul>
                  <li><a href='#' class='default'><i class='icon fas fa-phone'></i></a></li>
                  <li><a href='#' class='default'><i class='icon fas fa-map-marker-alt'></i></a></li>
                </ul>
              </div>
            </div>
           ";
           echo $data;
        }
      } else {
        echo "
        <div class='custom-card' style='background-image: url(/assets/images/defaults/default-cover.jpg)'>
          <div class='overlay'></div>
          <div class='content'>
            <p>Not Enough Data</p>
          </div>
        </div>
        ";
      }
    }
    function get_top_institutes($c, $n){
      $q = "SELECT * FROM institutes WHERE categories LIKE '%$c%' ORDER BY avg_review DESC";
      $n == null ? null : $q .= " LIMIT $n";
      //error_log($q);
      $result = mysqli_query($this->db, $q);
      if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
           $data = "
            <div class='custom-card' style='background-image: url(".$row['cover_image'].")'>
              <div class='overlay'></div>
              <div class='content'>
                <p>".$row['name']."</p>
                <span>"
                  .$this->get_total_rating($row['name'], 'institute').
                "</span>
                <ul>
                  <li><a href='#' class='default'><i class='icon fas fa-phone'></i></a></li>
                  <li><a href='#' class='default'><i class='icon fas fa-map-marker-alt'></i></a></li>
                </ul>
              </div>
            </div>
           ";
           echo $data;
        }
      } else {
        echo "
        <div class='custom-card' style='background-image: url(/assets/images/defaults/default-cover.jpg)'>
          <div class='overlay'></div>
          <div class='content'>
            <p>Not Enough Data</p>
          </div>
        </div>
        ";
      }
    }
    function get_cities($m){
      if ($result = mysqli_query($this->db, "SELECT city FROM cities")) {
        $city = '';
        while ($row = mysqli_fetch_assoc($result)) {
          if ($m == "select_list") {
            echo '<option value='.$row["city"].'>'.$row["city"].'</option>';
          } else {
            $city .= '<option value='.$row["city"].'>'.$row["city"].'</option>';
          }
        }
        if ($m != "select_list") {
          return $city;
        }
      } else {
        $this->debug_error();
      }
    }
    function upload_image($d) {
      // Images upload path
      if ($d == 'student-profile') {
        $folder = '/upload/images/profile/students/'.$_SESSION["user_id"].'/';
        if (!file_exists($folder) && !is_dir($folder)) {
            mkdir($_SERVER["DOCUMENT_ROOT"].$folder, 0777, true);
        }
      }
      $imageFolder = $_SERVER["DOCUMENT_ROOT"].$folder;

      $temp = $_FILES['profile_image'];
      $filetowrite = $imageFolder . $temp['name'];

      if(preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])){
          error_log('Upload failed: sanitization failed');
          return '/assets/images/defaults/default-profile.png';
      }
      // Verify extension
      if(!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))){
          error_log('Upload failed: extension verification failed');
          return '/assets/images/defaults/default-profile.png';
      }

      if (move_uploaded_file($temp['tmp_name'], $filetowrite)) {
        error_log($folder.$temp['name']);
        return $folder.$temp['name'];
      } else {
        error_log('Upload failed: unknown error');
        return '/assets/images/defaults/default-profile.png';
      }


    }
    function safeValuePost($post) {
      return mysqli_real_escape_string($this->db, $_POST[$post]);
    }
    function safeValue($value) {
      return mysqli_real_escape_string($this->db, $value);
    }
    function debug_error() {
      $this->debug ? error_log('SQL Error: '.mysqli_error($this->db)) : null ;
    }

  }

?>
