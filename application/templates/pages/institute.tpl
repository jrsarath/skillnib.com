<html>
  <head>
    <title>{$app->int_details($i, 'name')}</title>
    {include file='components/head.tpl'}
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <!--style>
      .hero_in.hotels_detail:before {
          background: url({$app->int_details($i, 'cover_image')}) center center no-repeat;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }
    </style-->
  </head>
  <body>

    <div id="page" class="theia-exception">
      {include file='components/header.tpl' mega='true'}
      <main>
        <div class="hero_in hotels_detail">
          <div class="wrapper">
            <span class="magnific-gallery">
              <div class="container">
                <div class="row h-100 align-items-center">
                  <div class="col-md-4 h-sm-50 text-center">
                    <img src="{$app->int_details($i, 'profile_image')}" class="rounded org-profile-img py-3 h-100" alt="Logo">
                  </div>
                  <div class="col-md-8 h-sm-50 text-center text-md-left">
                    <div class="detail_title_1">
                      <div class="cat_star">
                        {$app->get_total_rating($i, 'institute')}
                      </div>
                      <h1 class="my-2">{$app->int_details($i, 'name')}</h1>
                      <a class="address" href="#">
                        {$add = explode(',',$app->int_details($i, 'address'))}
                        {$add[0]}, {$add[1]}, {$add[2]}, {$app->int_details($i, 'city')}
                      </a>
                    </div>
                    {$app->int_details($i, 'images')}
                  </div>
                </div>

              </div>
            </span>
          </div>
        </div>
        <!--/hero_in-->

        <nav class="secondary_nav sticky_horizontal_2">
          <div class="container">
            <ul class="nav clearfix" id="listing-tab-nav" role="tablist">
              <li><a href='#main' class="active" data-toggle="tab">Details</a></li>
              <li class="d-none d-md-block"><a href='#timeline' data-toggle="tab">Timeline</a></li>
              <li><a href='#review' data-toggle="tab">Reviews</a></li>
              <li><a href="#sidebar" id="info-scroller">Info</a></li>
            </ul>
          </div>
        </nav>

        <div class="container margin_60_35">
            <div class="row">
              <div class="col-lg-8">
                <!-- TABS -->
                <div class="tab-content" id='listing-tabs'>
                  <div class="tab-pane fade show active" id="main" role="tabpanel" aria-labelledby='main-tab'>
                    <section class="border-0">
                      <div class="detail_title_1">
                        <h1 class="my-2">{$app->int_details($i, 'title')}</h1>
                      </div>
                      <h5>Overriew</h5>
                      <p>{$app->int_details($i, 'description')}</p>
                      <h5>Services Offered</h5>
                      <p>{$app->int_details($i, 'services')}</p>
                      <hr>
                      <div class="opening">
                          <div class="ribbon">
                              <span class="open">Now Open</span>
                          </div>
                          <i class="icon_clock_alt"></i>
                          <h4>Opening Hours</h4>
                          <div class="row">
                              <div class="col-md-6">
                                  <ul>
                                      <li>Monday <span>9 AM - 5 PM</span></li>
                                      <li>Tuesday <span>9 AM - 5 PM</span></li>
                                      <li>Wednesday <span>9 AM - 5 PM</span></li>
                                      <li>Thursday <span>9 AM - 5 PM</span></li>
                                  </ul>
                              </div>
                              <div class="col-md-6">
                                  <ul>
                                      <li>Friday <span>9 AM - 5 PM</span></li>
                                      <li>Saturday <span>9 AM - 5 PM</span></li>
                                      <li>Sunday <span>Closed</span></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <!-- /opening -->
                      <hr>
                      <h3>Location</h3>
                      <div id="map" class="map map_single add_bottom_45"></div>
                      <!-- End Map -->
                    </section>
                  </div>
                  <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby='review-tab'>
                    <section>
                      <div class="detail_title_1">
                        <h1>Reviews &amp; Ratings</h1>
                      </div>
                      <div class="add-review">
                          <h5>Leave a Review</h5>
                          <form method="post">
                            <div class="row">
                              <div class="form-group col-md-6">
                                <label>Your Rating </label>
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
                              <div class="form-group col-md-12">
                                <label>Your Review</label>
                                <textarea name="review" id="review_text" class="form-control" placeholder="Be specific and relevant to the place you're reviewing and describe what other visitor are likely to experience. Be authentic and describe why you liked or disliked the place. Include aspects like the ambiance, service quality, value for money, credibility of the vendor, timely delivery" style="height:130px;" required></textarea>
                              </div>
                              <div class="form-group col-md-12 add_top_20 add_bottom_30">
                                <input type="submit" value="Submit" class="btn_1" id="submit-review" name="add-review" >
                              </div>
                            </div>
                          </form>
                        </div>
                      <hr>
                      <h2>Reviews</h2>
                      <div class="reviews-container add_bottom_30">
                        <div class="row">
                          <div class="col-lg-3">
                            <div id="review_summary" class="{$app->review_grade($app->text_rating($i, "institute"))}">
                              <strong>{$app->text_rating($i, "institute")}</strong>
                              <em>{$app->review_grade($app->text_rating($i, "institute"))}</em>
                              <small>Based on {$app->total_review_count($i, "institute")} reviews</small>
                            </div>
                          </div>
                          <div class="col-lg-9">
                            <div class="row">
                              <div class="col-lg-10 col-9">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                              <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                            </div>
                            <!-- /row -->
                            <div class="row">
                              <div class="col-lg-10 col-9">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                              <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                            </div>
                            <!-- /row -->
                            <div class="row">
                              <div class="col-lg-10 col-9">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                              <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                            </div>
                            <!-- /row -->
                            <div class="row">
                              <div class="col-lg-10 col-9">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                              <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                            </div>
                            <!-- /row -->
                            <div class="row">
                              <div class="col-lg-10 col-9">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                              <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                            </div>
                            <!-- /row -->
                          </div>
                        </div>
                        <!-- /row -->
                      </div>
                      <div class="reviews-container">
                        {$app->get_reviews($i, 'institute')}
                      </div>
                      <!-- /review-container -->
                    </section>
                  </div>
                  <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby='timeline-tab'>
                    <section>
                      <div class="detail_title_1">
                        <h1>Institute's Timeline</h1>
                      </div>
                      {$app->get_posts($i, 'institute')}
                    </section>
                  </div>
                </div>
                <!-- TABS -->
              </div>
              <!-- /col -->
              <aside class="col-lg-4" id="sidebar">
                <div class="box_detail booking">
                  <div class="price">
                    <span><img src="/assets/images/icons/{if $app->int_details($i, 'verified') == 'true'}verified{else}not-verified{/if}.png" alt='verification'> {if $app->int_details($i, 'verified') == 'true'}Verified{else}Not Verified{/if}</span>
                    <div class="score"><span>{$app->review_grade($app->text_rating($i, "institute"))}<em>{$app->total_review_count($i, "institute")} Reviews</em></span><strong>{$app->text_rating($i, "institute")}</strong></div>
                  </div>
                  <h4 class="mb-3">Basic Details</h4>
                  <p><i class="icon icon-phone"></i><a href='tel://+91 {$app->int_details($i, "phone")}'>+91 {$app->int_details($i, "phone")}</a></p>
                  <p><i class="icon icon_pin"></i><a href="#">{$app->int_details($i, "address")}</a></p>
                  <p><i class="icon icon-building"></i><a href="#">{$app->int_details($i, "city")}</a></p>
                  <p><i class="icon icon-mail-alt"></i><a href='mailto://{$app->int_details($i, "email")}'>Send enquiry by Email</a></p>
                  <p><i class="icon icon-whatsapp"><img src="/assets/images/icons/whatsapp.png" style='width:16px;margin-left: .2em;margin-right: .2em;' alt=""></i><a href='https://api.whatsapp.com/send?phone=91{$app->int_details($i, "whatsapp")}'>Message on WhatsApp</a></p>
                  <p><i class="icon icon-globe"></i><a href='{if strpos($app->int_details($i, "website"), "http") == true}{$app->int_details($i, "website")}{else}http://{$app->int_details($i, "website")}{/if}'>{if strpos($app->int_details($i, "website"), "http") == true}{$app->int_details($i, "website")}{else}http://{$app->int_details($i, "website")}{/if}</a></p>
                  <p><i class="icon icon-calendar-7"></i><a href="#">Year Established - {$app->int_details($i, 'estd')}</a></p>
                  <hr>
                  <div>
                    {$app->int_details($i, 'tags')}
                  </div>
                </div>
                <ul class="share-buttons">
                  <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                  <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
                  <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                </ul>
              </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

      </main>
      <!--/main-->
      {include file='components/footer.tpl'}
    </div>
    {include file='components/javascripts.tpl'}
    <script src="/assets/js/map_single.js"></script>
	  <script src="/assets/js/infobox.js"></script>
    <script type="text/javascript">
      var marker = {
        'Marker': [{
          type_point: '{$app->int_details_raw($i, "categories")}',
          name: '{$app->int_details($i, "name")}',
          location_latitude: 48.865633,
          location_longitude: 2.321236,
          map_image_url: '{$app->int_details($i, "cover_image")}',
          rate: '{$app->get_total_rating($i, "institute")}',
          name_point: '{$app->int_details($i, "name")}',
          phone: '+91 {$app->int_details($i, "phone")}',
          website: '{if strpos($app->int_details($i, "website"), "http") == true}{$app->int_details($i, "website")}{else}http://{$app->int_details($i, "website")}{/if}'
        }]
      }
      $(document).ready(function(){
        set_map(marker);
        {ldelim}
          {if isset($review_callback)}
            {if $review_callback == 'success'}
              Swal.fire(
                'Success!',
                'You successfully reviewed - \n{$app->int_details($i, "name")}\n',
                'success'
              )
            {elseif $review_callback == 'error'}
              Swal.fire(
                'Something went wrong!',
                'It&apos;s not you It&apos;s us.',
                'error'
              )
            {elseif $review_callback == 'duplicate'}
              Swal.fire(
                'Play fair!',
                'You already reviewed - \n{$app->int_details($i, "name")}\n',
                'warning'
              )
            {/if}
          {/if}
        {rdelim}
      })

    </script>
  </body>
</html>
