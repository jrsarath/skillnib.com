<script src="/assets/js/readmore.min.js"></script>
<div class="alice-bg padding-top-60 section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="company-details p-0">
              <div class="row p-5">
                <div class="exam-content-wrapper col-md-8">
                  <div class="section mt-0">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Result</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'result')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4">About <?php echo $app->exam_details($i, 'name').' '.date('Y'); ?></h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'about')); ?>
                    </div>
                    <br>
                    <!-- GRID INFO IN PROGGRESS -->
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Important Dates</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'imp_dates')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Eligibility Criteria</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'eligibility')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Application Process</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'application_process')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Syllabus</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'syllabus')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Preparation</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'preparation')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Exam Pattern</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'exam_pattern')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Mock Test</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'mock_test')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Admin Card</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'admit_card')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Exam Centers</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'exam_centers')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4">Documents Required at Exam</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'req_docs')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Answer Key</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'answer_key')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Cutoff</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'cutoff')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4">Qualifying Marks Trend</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'marks_trend')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Counselling</h3>
                    <div class="">
                      <?php echo base64_decode($app->exam_details($i, 'counselling')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4"><?php echo $app->exam_details($i, 'name').' '.date('Y'); ?> Selection Process</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'selection')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4">Documents Required at Counselling</h3>
                    <div class="more">
                      <?php echo base64_decode($app->exam_details($i, 'req_docs_counselling')); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="section">
                    <h3 class="mb-4">General Information</h3>
                    <!-- GRID STYLE -->
                    IN PROGRESS
                  </div>
                </div>
                <div class="exam-sidebar col-md-4">
                  <div>
                    <p>Related Exams</p>
                  </div>

                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
        $('.more').readmore({
          speed: 75, embedCSS: true,
          collapsedHeight: 200,
          lessLink: '<a href="#" class="btn btn-outline-primary mt-3">Read less</a>',
          moreLink: '<a href="#" class="btn btn-outline-primary mt-3">Read More</a>'
        });
    </script>
