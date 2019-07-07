<div class="alice-bg padding-top-60 section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="company-details p-0">
              <div class="institute-cover" style='background-image: url(<?php echo $app->int_details($i, "cover_image") ?>)'>
                <div class="overlay"></div>
                <div class="meta-details">
                  <div class="container-fluid row">
                    <div class="col-md-8">
                      <ul>
                        <li><h3><?php echo $app->int_details($i, 'name'); ?></h3></li>
                        <li>
                          <b class='rating'><?php echo $app->text_rating($i, 'institute'); ?></b>
                          <span>
                            <?php echo $app->get_total_rating($i, 'institute'); ?>
                          </span>
                        </li>
                        <li><i class="fas fa-phone"></i><b> +91 <?php echo $app->int_details($i, 'phone'); ?></b></li>
                        <li>
                          <?php
                            if (!empty($app->int_details($i, 'whatsapp'))) {
                              echo '<a href="https://api.whatsapp.com/send?phone=91'.$app->int_details($i, "whatsapp").'" target="_blank"><i class="fab fa-whatsapp"></i><b> Message on WhatsApp</b></a>';
                            } else {
                              echo '<i class="fab fa-whatsapp"></i><b> Not Available</b>';
                            }

                          ?>
                        </li>
                        <li>
                          <?php
                            if (!empty($app->int_details($i, 'messenger'))) {
                              echo '<a href="https://m.me/@'.$app->int_details($i, "messenger").'" target="_blank"><i class="fab fa-facebook-messenger"></i></i><b> Chat on Messenger</b></a>';
                            } else {
                              echo '<i class="fab fa-facebook-messenger"></i></i><b> Not Available</b>';
                            }
                          ?>
                       </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <img src="<?php echo $app->int_details($i, "profile_image") ?>" class="img-responsive float-right">
                    </div>
                  </div>
                </div>
                <div class="institute-actions">
                  <ul>
                    <li><i class="icon fas fa-map-marker-alt"></i>Map</li>
                    <li><i class="icon fas fa-envelope"></i>SMS/EMAIL</li>
                    <li><a id='activate-review-tab' data-target='#write-review' href><i class="icon fas fa-thumbs-up"></i>Write Review</a></li>
                    <li>
                      <span class="d-block" style="margin-bottom:5px;">
                        <?php echo $app->get_total_rating($i, 'institute') ?>
                      </span>
                      Average Rating
                    </li>
                    <li>
                      <?php if ($app->int_details($i, 'verified') == 'true'): ?>
                        <i class="icon fas fa-check-circle"></i>Verified
                      <?php else: ?>
                        <i class="icon fas fa-times-circle"></i>Not Verified
                      <?php endif; ?></li>
                  </ul>
                </div>
              </div>

              <div class="row p-5">
                <div class="dashboard-sidebar col-md-4">
                  <div class="portfolio">
                    <div class="owl-carousel" id="inst-images">
                      <?php $app->int_details($i, 'images') ?>
                    </div>
                  </div>
                  <div class="item">
                    <i class="fas fa-phone"></i>
                    <b> +91 <?php echo $app->int_details($i, 'phone'); ?></b>
                  </div>
                  <div class="item">
                    <i class="fas fa-map-marker-alt"></i>
                    <?php echo $app->int_details($i, 'address'); ?></b>
                  </div>
                  <div class="item">
                    <i class="fas fa-city"></i><b> City :</b>
                    <?php echo $app->int_details($i, 'city'); ?>
                  </div>
                  <?php if (!empty($app->int_details($i, 'state'))): ?>
                    <div class="item">
                      <i class="far fa-compass"></i><b> State :</b>
                      <?php echo $app->int_details($i, 'state'); ?>
                    </div>
                  <?php endif; ?>
                  <div class="item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?php echo $app->int_details($i, 'email'); ?>">Send Enquiry by mail</b></a>
                  </div>
                  <div class="item">
                    <i class="fas fa-globe"></i>
                    <a <?php
                              if (!empty($app->int_details($i, 'website'))) {
                                if (strpos($app->int_details($i, 'website'), 'http') == true) {
                                  echo 'href="'.$app->int_details($i, 'website').'"';
                                } else {
                                  echo "href='http://".$app->int_details($i, 'website')."'";
                                }
                              }
                            ?>
                            target="_blank">
                      <?php echo !empty($app->int_details($i, 'website')) ? $app->int_details($i, 'website') : 'Not Available'; ?></a>
                  </div>
                  <div class="item">
                    <i class="far fa-calendar-alt"></i><b> Year Established :</b>
                    <?php echo $app->int_details($i, 'estd'); ?>
                  </div>

                  <div class="hours">
                    <hr>
                    <h6 class="mt-5">Hours of Operation ( <a href="#" data-toggle="collapse" data-target="#hours">View All</a> )</h6>
                    <p class="mt-4">Today
                      <span class="ml-5">
                        <?php
                        if (date("l") == 'Monday') {
                          echo explode(',', $app->int_details($i, 'hours'))[0];
                        }
                        if (date("l") == 'Tuesday') {
                          echo explode(',', $app->int_details($i, 'hours'))[1];
                        }
                        if (date("l") == 'Wednesday') {
                          echo explode(',', $app->int_details($i, 'hours'))[2];
                        }
                        if (date("l") == 'Thursday') {
                          echo explode(',', $app->int_details($i, 'hours'))[3];
                        }
                        if (date("l") == 'Friday') {
                          echo explode(',', $app->int_details($i, 'hours'))[4];
                        }
                        if (date("l") == 'Saturday') {
                          echo explode(',', $app->int_details($i, 'hours'))[5];
                        }
                        if (date("l") == 'Sunday') {
                          echo explode(',', $app->int_details($i, 'hours'))[6];
                        }
                        ?>
                      </span>
                    </p>
                    <div id="hours" class="collapse mt-4">
                      <ul>
                        <li>Monday <span><?php echo explode(',', $app->int_details($i, 'hours'))[0]; ?></span></li>
                        <li>Tuesday <span><?php echo explode(',', $app->int_details($i, 'hours'))[1]; ?></span></li>
                        <li>Wednesday <span><?php echo explode(',', $app->int_details($i, 'hours'))[2]; ?></span></li>
                        <li>Thursday <span><?php echo explode(',', $app->int_details($i, 'hours'))[3]; ?></span></li>
                        <li>Friday <span><?php echo explode(',', $app->int_details($i, 'hours'))[4]; ?></span></li>
                        <li>Saturday <span><?php echo explode(',', $app->int_details($i, 'hours'))[5]; ?></span></li>
                        <li>Sunday <span><?php echo explode(',', $app->int_details($i, 'hours'))[6]; ?></span></li>
                      </ul>
                    </div>
                  </div>
                  <!--div class="listed-in">
                    <hr>
                    <h6 class="mt-5 mb-4">Also Listed in</h6>
                    <div><?php $app->int_details($i, 'categories'); ?></div>
                  </div-->
                  <div class='tags'>
                    <hr>
                    <h6 class="mt-5 mb-4">Tags</h6>
                    <div><?php $app->int_details($i, 'tags'); ?></div>
                  </div>

                </div>
                <div class="dashboard-content-wrapper col-md-8">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" data-target="#details" href="">Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" data-target="#post" href="">Timeline</a>
                    </li>
                    <?php if ($_SESSION['user_id'] == $app->int_details($i, 'owner') && !array_search($app->int_details_raw($i, 'categories'), array("Colleges", "Class Tution below XII", "Job Consultancy"))): ?>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" data-target="#view-mcq" href="">MCQs</a>
                      </li>
                    <?php endif; ?>
                    <?php if ($_SESSION['user_id'] != $app->int_details($i, 'owner')): ?>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" data-target="#write-review" href="">Write a review/rating</a>
                      </li>
                    <?php endif; ?>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" data-target="#check-review" href="">Review &amp; Ratings</a>
                    </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content mb-5">
                    <?php if (isset($status) && $status == 'success'): ?>
                      <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                        <strong>Yayy!</strong> You successfully reviewed <b><?php echo $app->int_details($i, 'name'); ?></b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="far fa-times-circle" style='font-size: 24px;'></i>
                        </button>
                      </div>
                    <?php elseif (isset($status) && $status == 'duplicate'): ?>
                      <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                        <strong>Oh uh!</strong> You already reviewed <b><?php echo $app->int_details($i, 'name'); ?></b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="far fa-times-circle" style='font-size: 24px;'></i>
                        </button>
                      </div>
                    <?php elseif (isset($status) && $status == 'error'): ?>
                      <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                        <strong>Oh no!</strong> Something went wrong!</b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="far fa-times-circle" style='font-size: 24px;'></i>
                        </button>
                      </div>
                    <?php endif; ?>
                    <?php if (isset($status) && $status == 'mcq-success'): ?>
                      <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                        <strong>Success!</strong> Your MCQ questions are live now.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="far fa-times-circle" style='font-size: 24px;'></i>
                        </button>
                      </div>
                    <?php elseif (isset($status) && $status == 'mcq-limit'): ?>
                        <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                          <strong>Limit Reached!</strong> You have already added 10 Questions today.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="far fa-times-circle" style='font-size: 24px;'></i>
                          </button>
                        </div>
                    <?php elseif (isset($status) && $status == 'mcq-error'): ?>
                      <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                        <strong>Oh uh!</strong> Something went wrong, Contact support!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="far fa-times-circle" style='font-size: 24px;'></i>
                        </button>
                      </div>
                    <?php endif; ?>
                    <?php if (isset($status) && $status == 'post-success'): ?>
                      <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                        <strong>Yayy!</strong> You posted an update!</b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="far fa-times-circle" style='font-size: 24px;'></i>
                        </button>
                      </div>
                    <?php elseif (isset($status) && $status == 'post-error'): ?>
                      <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                        <strong>Oh no!</strong> Something went wrong, Couldn't Post an update!</b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="far fa-times-circle" style='font-size: 24px;'></i>
                        </button>
                      </div>
                    <?php endif; ?>
                    <div id="details" class="container tab-pane active">
                      <div class="addictional-content mt-5">
                        <h5><?php echo $app->int_details($i, 'title'); ?></h5>
                        <p class="my-4"><?php echo $app->int_details($i, 'description'); ?></p>
                        <br>
                        <h5>Location &amp; Overview</h5>
                        <p class="my-4"><?php echo $app->int_details($i, 'overview'); ?></p>
                        <br>
                        <h5>Services offered</h5>
                        <p class="my-4"><?php echo $app->int_details($i, 'services'); ?></p>
                      </div>
                    </div>
                    <div id="post" class="container tab-pane">
                      <?php if ($_SESSION['user_id'] == $app->int_details($i, 'owner')): ?>

                        <div class="card mt-4">
                          <div class="card-header">
                            <a class="card-link w-100" data-toggle="collapse" data-target="#new-post">
                              <h5>Post something</h5>
                              <i class="fas fa-plus float-right"></i>
                            </a>
                          </div>
                          <div id="new-post" class="collapse">
                            <div class="card-body p-5">
                              <form action="" method='post' class="post">
                                <input name='post-title' type="text" class="form-control mb-4 title" placeholder="Title">
                                <textarea name='post-content' rows="8" class="form-control post-content"></textarea>
                                <input name='post-ready-content' type='hidden'>
                                <input class="btn btn-primary btn-block mt-4" value="Post" type='submit' name="add-post">
                              </form>
                            </div>
                          </div>
                        </div>

                        <hr>
                      <?php endif; ?>

                      <div class="timeline">
                        <h5 class="my-5">Latest Updates</h5>
                        <?php $app->get_posts($i, 'institute'); ?>
                      </div>
                    </div>

                    <?php if ($_SESSION['user_id'] != $app->int_details($i, 'owner')): ?>
                      <div id="write-review" class="container tab-pane">
                        <div class="wrie-review pt-5">
                          <form method='post'>
                            <div class="row row-eq-height mb-5">
                              <div class="col-md-5">
                                <h6 class='mt-2'>Please rate your experience</h6>
                              </div>
                              <div class="col-md-7">
                                <select id="write-review-rating" name="rating">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                </select>
                              </div>
                            </div>
                            <div class="write-review-area">
                              <div class="row mb-4">
                                <div class="col-sm-6">
                                  <p>Add Review</p>
                                </div>
                                <div class="col-sm-6">
                                  <p style='float:right'><a class='link' href='' data-target="#review-guidelines" data-toggle="modal">Review guidelines</a></p>
                                </div>
                              </div>
                              <div id="review-guidelines" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header p-4">
                                        <h6 class="modal-title">Review Guidelines</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <i class="far fa-times-circle" style='font-size: 25px;'></i>
                                        </button>
                                      </div>
                                      <div class="modal-body p-4">
                                        <h6></h6>
                                        <p>Your review will be posted on skillnib website subject to conditions:</p>
                                          <div class="ml-5">
                                            Skillnib reserves the right to refuse and remove any review.
                                          </div>
                                          <div class="ml-5">
                                            Skillnib will not be held responsible or accept any liability of reviews posted for any
                                          </div>

                                      </div>
                                  </div>
                                </div>
                              </div>
                                <textarea name="review" rows="6" class="form-control p-4" placeholder="Be specific and relevant to the place you're reviewing and describe what other visitor are likely to experience. Be authentic and describe why you liked or disliked the place. Include aspects like the ambiance, service quality, value for money, credibility of the vendor, timely delivery,"></textarea>
                                <input class="btn btn-primary btn-block mt-4" value="Submit" type='submit' name="add-review">
                            </div>
                          </form>
                        </div>
                      </div>
                    <?php endif; ?>

                    <div id="check-review" class="container tab-pane fade">
                      <br>
                      <?php $app->get_reviews($i, 'institute'); ?>
                    </div>

                    <?php if ($_SESSION['user_id'] == $app->int_details($i, 'owner') && !array_search($app->int_details_raw($i, 'categories'), array("Colleges", "Class Tution below XII", "Job Consultancy"))): ?>
                      <div id="view-mcq" class="container tab-pane fade">
                      <div class="card mt-4">
                          <div class="card-header">
                            <a class="card-link w-100 collapsed" data-toggle="collapse" data-target="#new-mcqs" aria-expanded="true">
                              <h5>Add new Questions</h5>
                              <i class="fas fa-plus float-right"></i>
                            </a>
                          </div>
                          <div id="new-mcqs" class="collapse" style="">
                            <div class="card-body p-5">
                              <form action="" method="post" class="post">
                                  <input type="text" class="form-control mb-4 title" placeholder="Question" name='question'>
                                  <select class="form-control mb-4 title" name="mcq-category">
                                    <option value="courses">Courses</option>
                                    <option value="exams">Exams</option>
                                  </select>
                                  <select class="form-control mb-4 title" name="mcq-subcategory">
                                    <option value="NULL">Select Sub-category</option>
                                    <!-- COURSES -->
                                    <option value="Aptitude Courses" data-parent='courses'>Aptitude Courses</option>
                                    <option value="Software Development" data-parent='courses'>Software Development</option>
                                    <option value="Web Development" data-parent='courses'>Web Development</option>
                                    <option value="Embeded Systems" data-parent='courses'>Embeded Systems</option>
                                    <option value="Graphics, Vision, Games and Animation" data-parent='courses'>Graphics, Vision, Games and Animation</option>
                                    <option value="Hardware Design/Engineering" data-parent='courses'>Hardware Design/Engineering</option>
                                    <option value="Security" data-parent='courses'>Security</option>
                                    <!-- EXAMS -->
                                    <option value="Banking" data-parent='exams' hidden>Banking</option>
                                    <option value="SSC & Govt. Job Exams" data-parent='exams' hidden>SSC & Govt. Job Exams</option>
                                    <option value="Teaching" data-parent='exams' hidden>Teaching</option>
                                    <option value="JEE & BITSAT" data-parent='exams' hidden>JEE & BITSAT</option>
                                    <option value="GATE" data-parent='exams' hidden>GATE</option>
                                    <option value="Medical" data-parent='exams' hidden>Medical</option>
                                    <option value="UPSC" data-parent='exams' hidden>UPSC</option>
                                  </select>
                                  <p class="pl-2">Answer choices</p>
                                  <input type="text" class="form-control mb-4 title d-inline" placeholder="Choice 1" name='choice1'>
                                  <input type="text" class="form-control mb-4 title d-inline" placeholder="Choice 2" name='choice2'>
                                  <input type="text" class="form-control mb-4 title d-inline" placeholder="Choice 3" name='choice3'>
                                  <input type="text" class="form-control mb-4 title d-inline" placeholder="Choice 4" name='choice4'>
                                  <input type="number" min='1' max='4' class="form-control mb-4 title d-inline" placeholder="Correct Answer = 1,2,3 or 4" name='correct'>
                                  <input type="text" class="form-control mb-4 title d-inline" placeholder="In-Depth Explaination answer" name='exp'>
                                  <!--div class="mcq-answers-group">
                                      <div class="d-flex">
                                        <input type="text" class="form-control mb-4 title d-inline" placeholder="Choice 1" name='choice1'>
                                        <div class="custom-checkbox d-inline">
                                          <div class="round">
                                            <input class="correct-answer" type="checkbox" id='for-choice1' name='for-choice1' value='for-choice1' />
                                            <label for="for-choice1"></label>
                                          </div>
                                          Correct
                                        </div>
                                      </div>
                                      <div class="d-flex">
                                        <input type="text" class="form-control mb-4 title d-inline" placeholder="Choice 2" name='choice2'>
                                        <div class="custom-checkbox d-inline">
                                          <div class="round">
                                            <input class="correct-answer" type="checkbox" id='for-choice2' name='for-choice2' value='for-choice2' />
                                            <label for="for-choice2"></label>
                                          </div>
                                          Correct
                                        </div>
                                      </div>
                                      <div class="d-flex">
                                        <input type="text" class="form-control mb-4 title d-inline" placeholder="Choice 3" name='choice3'>
                                        <div class="custom-checkbox d-inline">
                                          <div class="round">
                                            <input class="correct-answer" type="checkbox" id='for-choice3' name='for-choice3' value='for-choice3' />
                                            <label for="for-choice3"></label>
                                          </div>
                                          Correct
                                        </div>
                                      </div>
                                  </div-->
                                <input class="btn btn-primary btn-block mt-4" value="Post" type="submit" name="add-mcq-set">
                              </form>
                            </div>
                          </div>
                        </div>
                        <hr>
                        <h5 class="my-5">Your existing MCQ questions</h5>
                        <?php $app->get_mcq($i); ?>
                    </div>
                    <?php endif; ?>
                  </div>
                  <hr>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
