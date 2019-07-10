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
              {$app->int_details($i, 'images')}
            </span>
          </div>
        </div>
        <!--/hero_in-->

        <nav class="secondary_nav sticky_horizontal_2">
          <div class="container">
            <ul class="clearfix">
              <li><a href="#description" class="active">Description</a></li>
              <li><a href="#reviews">Reviews</a></li>
              <li><a href="#sidebar">Booking</a></li>
            </ul>
          </div>
        </nav>

        <div class="container margin_60_35">
            <div class="row">
              <div class="col-lg-8">
                <section id="description">
                  <div class="detail_title_1">
                    <div class="cat_star">
                      {$app->get_total_rating($i, 'institute')}
                    </div>
                    <h1>{$app->int_details($i, 'name')}</h1>
                    <a class="address" href="#">
                      {$add = explode(',',$app->int_details($i, 'address'))}
                      {$add[0]}, {$add[1]}, {$add[2]}, {$app->int_details($i, 'city')}
                    </a>
                  </div>
                  <p>{$app->int_details($i, 'description')}</p>
                  <h5>Services Offered</h5>
                  <p>{$app->int_details($i, 'services')}</p>
                  <h5 class="add_bottom_15">Amenities</h5>
                  <div class="row add_bottom_30">
                    <div class="col-lg-6">
                      <ul class="bullets">
                        <li>Dolorem mediocritatem</li>
                        <li>Mea appareat</li>
                        <li>Prima causae</li>
                        <li>Singulis indoctum</li>
                      </ul>
                    </div>
                    <div class="col-lg-6">
                      <ul class="bullets">
                        <li>Timeam inimicus</li>
                        <li>Oportere democritum</li>
                        <li>Cetero inermis</li>
                        <li>Pertinacia eum</li>
                      </ul>
                    </div>
                  </div>
                  <!-- /row -->
                  <hr>
                  <h3>Prices</h3>
                  <table class="table table-striped add_bottom_45">
                    <tbody>
                      <tr>
                        <td>Low (from 23/03 to 31/05)</td>
                        <td>140$</td>
                      </tr>
                      <tr>
                        <td>Middle (from 23/03 to 31/05)</td>
                        <td>180$</td>
                      </tr>
                      <tr>
                        <td>High (from 23/03 to 31/05)</td>
                        <td>200$</td>
                      </tr>
                    </tbody>
                  </table>
                  <hr>
                  <h3>Location</h3>
                  <div id="map" class="map map_single add_bottom_45"></div>
                  <!-- End Map -->
                </section>
                <!-- /section -->

                <section id="reviews">
                  <div class="add-review">
                      <h5>Leave a Review</h5>
                      <form>
                        <div class="row">
                          <div class="form-group col-md-6">
                            <label>Name and Lastname *</label>
                            <input type="text" name="name_review" id="name_review" placeholder="" class="form-control">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Email *</label>
                            <input type="email" name="email_review" id="email_review" class="form-control">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Rating </label>
                            <div class="custom-select-form">
                              <select name="rating_review" id="rating_review" class="wide">
                                <option value="1">1 (lowest)</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5" selected>5 (medium)</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10 (highest)</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group col-md-12">
                            <label>Your Review</label>
                            <textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
                          </div>
                          <div class="form-group col-md-12 add_top_20 add_bottom_30">
                            <input type="submit" value="Submit" class="btn_1" id="submit-review">
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
                <!-- /section -->
              </div>
              <!-- /col -->

              <aside class="col-lg-4" id="sidebar">
                <div class="box_detail booking">
                  <div class="price">
                    <span>45$ <small>person</small></span>
                    <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
                  </div>

                  <div class="form-group" id="input-dates">
                    <input class="form-control" type="text" name="dates" placeholder="When..">
                    <i class="icon_calendar"></i>
                  </div>

                  <div class="panel-dropdown">
                    <a href="#">Guests <span class="qtyTotal">1</span></a>
                    <div class="panel-dropdown-content right">
                      <div class="qtyButtons">
                        <label>Adults</label>
                        <input type="text" name="qtyInput" value="1">
                      </div>
                      <div class="qtyButtons">
                        <label>Childrens</label>
                        <input type="text" name="qtyInput" value="0">
                      </div>
                    </div>
                  </div>

                  <div class="form-group clearfix">
                    <div class="custom-select-form">
                      <select class="wide">
                        <option>Room Type</option>
                        <option>Single Room</option>
                        <option>Double Room</option>
                        <option>Suite Room</option>
                      </select>
                    </div>
                  </div>
                  <a href="checkout.html" class=" add_top_30 btn_1 full-width purchase">Purchase</a>
                  <a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Add to wishlist</a>
                  <div class="text-center"><small>No money charged in this step</small></div>
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
      })
    </script>
  </body>
</html>
