<div class="alice-bg padding-top-60 section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="company-details p-0">
              <div class="institute-cover" style='background-image: url(<?php echo $app->tuition_details($i, "cover_image") ?>)'>
                <div class="overlay"></div>
                <div class="meta-details">
                  <div class="container-fluid row">
                    <div class="col-md-8">
                      <ul>
                        <li><h3><?php echo $app->tuition_details($i, 'name'); ?></h3></li>
                        <li>
                          <b class='rating'><?php echo $app->text_rating($i, 'tuition'); ?></b>
                          <span>
                            <?php echo $app->get_total_rating($i, 'tuition'); ?>
                          </span>
                        </li>
                        <li><i class="far fa-compass"></i><b><?php echo $app->tuition_details($i, 'city'); ?>, <?php echo $app->tuition_details($i, 'state'); ?></b></li>
                        <li><i class="fas fa-rupee-sign"></i><b>₹<?php echo $app->tuition_details($i, 'fee_range'); ?></b></li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <img src="<?php echo $app->tuition_details($i, "profile_image") ?>" class="img-responsive float-right">
                    </div>
                  </div>
                </div>
                <div class="institute-actions">
                  <ul>
                    <li><i class="icon fas fa-map-marker-alt"></i>Map</li>
                    <li><i class="icon fas fa-envelope"></i>EMAIL</li>
                    <li><a id='activate-review-tab' data-target='#write-review' href><i class="icon fas fa-thumbs-up"></i>Write Review</a></li>
                    <li>
                      <span class="d-block" style="margin-bottom:5px;">
                        <?php echo $app->get_total_rating($i, 'tuition') ?>
                      </span>
                      Average Rating
                    </li>
                    <li>
                      <?php if ($app->tuition_details($i, 'verified') == 'true'): ?>
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
                      <?php $app->tuition_details($i, 'images') ?>
                    </div>
                  </div>
                  <div class="item">
                    <i class="fas fa-city"></i><b> City :</b>
                    <?php echo $app->tuition_details($i, 'city'); ?>
                  </div>
                  <?php if (!empty($app->tuition_details($i, 'state'))): ?>
                    <div class="item">
                      <i class="far fa-compass"></i><b> State :</b>
                      <?php echo $app->tuition_details($i, 'state'); ?>
                    </div>
                  <?php endif; ?>
                  <div class="item">
                    <i class="fas fa-rupee-sign"></i><b> Fee's Range :</b>
                    ₹<?php echo $app->tuition_details($i, 'fee_range'); ?>
                  </div>
                  <div class='tags'>
                    <hr>
                    <h6 class="mt-5 mb-4">Tags</h6>
                    <div><?php $app->tuition_details($i, 'tags'); ?></div>
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
                    <?php if ($_SESSION['user_id'] != $app->tuition_details($i, 'owner')): ?>
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
                        <strong>Yayy!</strong> You successfully reviewed <b><?php echo $app->tuition_details($i, 'name'); ?></b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="far fa-times-circle" style='font-size: 24px;'></i>
                        </button>
                      </div>
                    <?php elseif (isset($status) && $status == 'duplicate'): ?>
                      <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                        <strong>Oh uh!</strong> You already reviewed <b><?php echo $app->tuition_details($i, 'name'); ?></b>
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
                        <h5>Facilities</h5>
                        <p class="my-4"><?php echo $app->tuition_details($i, 'facilities'); ?></p>
                        <br>
                        <h5>Degrees</h5>
                        <p class="my-4"><?php echo $app->tuition_details($i, 'services'); ?></p>
                      </div>
                    </div>
                    <div id="post" class="container tab-pane">
                      <?php if ($_SESSION['user_id'] == $app->tuition_details($i, 'owner')): ?>
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
                        <?php $app->get_posts($i, 'tuition'); ?>
                      </div>
                    </div>

                    <?php if ($_SESSION['user_id'] != $app->tuition_details($i, 'owner')): ?>
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
                      <?php $app->get_reviews($i, 'tuition'); ?>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
