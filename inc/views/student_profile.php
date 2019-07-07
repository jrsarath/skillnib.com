<?php
  if (empty($app->student_details($id, 'id'))) {
    echo '
    <!-- Modal -->
      <div class="overlay-fullscreen"></div>
      <div class="account-modal-parent">
        <div class="account-modal col-md-6 col-sm-8 col-xs-10 p-5">
          <div class="container">
            <h4 class="text-center w-100 mb-2">Lets complete your Account</h4>
            <p class="text-center w-100 mb-5">Please provide us the following informations</p>
            <hr />
            <form action="/account" method="post" enctype="multipart/form-data" class="modal-form mt-5">
              <div class="form-group">
                <label for="">Full Name :</label>
                <input class="form-control" type="text" name="name" placeholder="Your full name"/>
              </div>
              <div class="form-group">
                <label for="">Your current city :</label>
                <select class="form-control" name="city">
                  '.$app->get_cities('list').'
                </select>
              </div>
              <div class="form-group">
                <label for="">State :</label>
                <input class="form-control" type="text" name="state" placeholder="Your current State"/>
              </div>
              <div class="form-group">
                <label for="">Date of Birth :</label>
                <input class="form-control" type="date" name="dob" style="padding-top:10px; padding-bottom:10px;" />
              </div>
              <div class="form-group">
                <label for="">Highest Qualification :</label>
                <input class="form-control" type="text" name="qualification" placeholder="Your highest qualification"/>
              </div>
              <div class="form-group">
                <label for="">Courses interested in :</label>
                <input class="form-control" type="text" name="courses" style="padding-top:10px; padding-bottom:10px;" />
              </div>
              <div class="form-group">
                <label for="">Exams interested in :</label>
                <input class="form-control" type="text" name="exams" style="padding-top:10px; padding-bottom:10px;" />
              </div>
              <div class="form-group">
                <label for="">Your Profile Picture :</label><br>
                <input class="p-0" style="border-radius:0" type="file" name="profile_image"/>
              </div>
              <button class="btn btn-primary btn-block py-3 mt-3" value="Post" type="submit" name="add-student-info">Submit</button>
            </form>
          </div>
        </div>
      </div>
    ';
  }
?>
<div class="alice-bg padding-top-60 section-padding-bottom">
  <div class="container no-gliters">
    <div class="row no-gliters">
      <div class="col">
        <div class="company-details p-0">
          <div class="institute-cover" style="background-image: url(/assets/images/defaults/default-cover.jpg)">
            <div class="overlay"></div>
            <div class="student-meta container">
              <div class="row row-eq-height" style="height: inherit;">
                <div class="col-md-4 my-auto">
                  <img src="<?php echo $app->student_details($id, 'image') ?>" alt="" class="student_profile_pic img-responsive w-100">
                </div>
                <div class="col-md-8">
                  <ul>
                    <li><h3><?php echo $app->student_details($id, 'name') ?></h3></li>
                    <li><i class="fas fa-map-marker-alt"></i> City : <?php echo $app->student_details($id, 'city') ?></li>
                    <li><i class="fas fa-certificate"></i>Highest Qualification : <?php echo $app->student_details($id, 'qualification') ?></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
          <div class="student-body p-5">
            <div class="row">
              <div class="col-md-3">
                <div>
                  <p>Institutes in <b><?php echo $app->student_details($id, 'city') ?></b></p>
                  <div class="sidebar-org-list">
                    <?php $app->get_institutes($app->student_details($id, 'city'), 5 , 'random') ?>
                  </div>
                </div>
                <div>
                  <p>Competative Exam Institutes in <b><?php echo $app->student_details($id, 'city') ?></b></p>
                  <div class="sidebar-org-list">
                    <?php $app->get_institutes($app->student_details($id, 'city'), 5 , 'Competitive Exam Institutes') ?>
                  </div>
                </div>
                <div>
                  <p>Entrance Exam Institutes in <b><?php echo $app->student_details($id, 'city') ?></b></p>
                  <div class="sidebar-org-list">
                    <?php $app->get_institutes($app->student_details($id, 'city'), 5 , 'Entrance Exam Institutes') ?>
                  </div>
                </div>
                <div>
                  <p>Courses Institutes in <b><?php echo $app->student_details($id, 'city') ?></b></p>
                  <div class="sidebar-org-list">
                    <?php $app->get_institutes($app->student_details($id, 'city'), 5 , 'Courses Institutes') ?>
                  </div>
                </div>
              </div>
              <div class="col-md-6 border-right border-left">
                <div class="mcq-metric">
                  <div class="custom-card m-0">
                    <h5 class="p-2 py-4">Your MCQ Performence</h5>
                    <hr>
                    <p class="m-0">Correct answers:</p>
                    <div class="bar" id="bar_right"></div>
                    <p class="m-0">Wrong Answers:</p>
                    <div class="bar" id="bar_wrong"></div>
                  </div>
                </div>
                <div class="mc-feed">
                  <?php $app->get_mcq_student($app->student_details($id, 'courses')) ?>
                </div>
              </div>
              <div class="col-md-3">
                <div>
                  <p>Top Courses Institutes</p>
                  <div class="sidebar-org-list">
                    <?php $app->get_top_institutes('Courses Institutes', 5) ?>
                  </div>
                </div>
                <div>
                  <p>Top Outrance Exam Institutes</p>
                  <div class="sidebar-org-list">
                    <?php $app->get_top_institutes('Outrance Exam Institutes', 5) ?>
                  </div>
                </div>
                <div>
                  <p>Top Competative Exam Institutes</p>
                  <div class="sidebar-org-list">
                    <?php $app->get_top_institutes('Competative Exam Institutes', 5) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  // RIGHT PROGRESS
  var bar_right = new ProgressBar.Line('#bar_right', {
    strokeWidth: 4,
    easing: 'easeInOut',
    duration: 1400,
    color: '#FFEA82',
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: {width: '100%', height: '100%'},
    from: {color: '#66bb6a'},
    to: {color: '#4caf50'},
    step: (state, bar) => {
      bar.path.setAttribute('stroke', state.color);
      }
  });
  bar_right.animate(0.20);

  // WRONG PROGRESS
  var bar_wrong = new ProgressBar.Line('#bar_wrong', {
    strokeWidth: 4,
    easing: 'easeInOut',
    duration: 1400,
    color: '#FFEA82',
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: {width: '100%', height: '100%'},
    from: {color: '#FFEA82'},
    to: {color: '#ef5350'},
    step: (state, bar) => {
      bar.path.setAttribute('stroke', state.color);
      }
  });
  bar_wrong.animate(0.80);
</script>
