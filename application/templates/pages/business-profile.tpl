<html>
  <head>
    <title>My Dashboard</title>
    {include file='components/head.tpl'}
    <link rel="stylesheet" href="/assets/css/admin.css">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
  </head>
  <body>
    {include file='components/header.tpl' mega='true'}
    <div class="container py-4">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" data-toggle="pill" href="#home" role="tab">Home</a>
            <a class="nav-link" data-toggle="pill" href="#orgs" role="tab">My Listings</a>
            <a class="nav-link" data-toggle="pill" href="#mcqs" role="tab">My MCQs</a>
            <a class="nav-link" data-toggle="pill" href="#account" role="tab">My Account</a>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel">
              <!-- Icon Cards-->
              <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card dashboard text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fa fa-fw fa-envelope-open"></i>
                      </div>
                      <div class="mr-5"><h5>26 New Messages!</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="messages.html">
                      <span class="float-left">View Details</span>
                      <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card dashboard text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fa fa-fw fa-star"></i>
                      </div>
        				<div class="mr-5"><h5>11 New Reviews!</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="reviews.html">
                      <span class="float-left">View Details</span>
                      <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card dashboard text-white bg-success o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fa fa-fw fa-calendar-check-o"></i>
                      </div>
                      <div class="mr-5"><h5>10 New Bookings!</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="bookings.html">
                      <span class="float-left">View Details</span>
                      <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card dashboard text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fa fa-fw fa-heart"></i>
                      </div>
                      <div class="mr-5"><h5>10 New Bookmarks!</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="bookmarks.html">
                      <span class="float-left">View Details</span>
                      <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
          		</div>
          		<!-- /cards -->
          		<div class="box_general">
          			<div class="header_box version_2">
          				<h2><i class="fa fa-bar-chart"></i>Statistic</h2>
          			</div>
          		</div>
            </div>
            <div class="tab-pane fade" id="orgs" role="tabpanel">
              <div class="box_general">
          			<div class="header_box version_2">
          				<h2><i class="fa fa-bar-chart"></i>My Listings</h2>
          			</div>
          		</div>
            </div>
            <div class="tab-pane fade" id="mcqs" role="tabpanel">
              <div class="box_general">
          			<div class="header_box version_2">
          				<h2><i class="fa fa-bar-chart"></i>My MCQs</h2>
          			</div>
          		</div>
            </div>
            <div class="tab-pane fade" id="account"role="tabpanel">
              <div class="box_general">
          			<div class="header_box version_2">
          				<h2><i class="fa fa-bar-chart"></i>My Account</h2>
          			</div>
          		</div>
            </div>
          </div>
        </div>
      </div>
	  </div>
    <!-- /.container-wrapper-->
    {include file='components/footer.tpl'}
    {include file='components/javascripts.tpl'}
  </body>
</html>
