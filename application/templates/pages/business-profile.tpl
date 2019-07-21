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
        <aside class="col-lg-3 sidenav-pills">
						<div class="box_style_cat">
							<ul class="nav cat_nav" role="tablist">
								<li><a data-toggle="pill" href="#home" role="tab" class="active"><i class="icon_document_alt"></i>Home</a></li>
								<li><a data-toggle="pill" href="#orgs" role="tab"><i class="icon_document_alt"></i>My Organizations</a></li>
								<li><a data-toggle="pill" href="#mcqs" role="tab"><i class="icon_document_alt"></i>My MCQs</a></li>
								<li><a data-toggle="pill" href="#account" role="tab"><i class="icon_document_alt"></i>My Account</a></li>
							</ul>
						</div>
						<!--/sticky -->
				</aside>
				<!--/aside -->
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
                      <div><h5>02 Total Institutes</h5></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card dashboard text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fa fa-fw fa-star"></i>
                      </div>
        				      <div><h5>06 Total Colleges</h5></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card dashboard text-white bg-success o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fa fa-fw fa-calendar-check-o"></i>
                      </div>
                      <div><h5>10 Job Consultancy</h5></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card dashboard text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fa fa-fw fa-heart"></i>
                      </div>
                      <div><h5>10 Tuitions Below XII</h5></div>
                    </div>
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
              <!-- Icon Cards-->
              <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card dashboard text-white bg-primary o-hidden h-100">
                    <div class="card-body">
        				      <div><h5>Add New Institute</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="/account/add/institute">
                      <span class="float-left">Add Now</span>
                      <span class="float-right">
                        <i class="ti-arrow-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card dashboard text-white bg-warning o-hidden h-100">
                    <div class="card-body">
        				      <div><h5>Add New College</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="/account/add/college">
                      <span class="float-left">Add Now</span>
                      <span class="float-right">
                        <i class="ti-arrow-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card dashboard text-white bg-success o-hidden h-100">
                    <div class="card-body">
        				      <div><h5>Add New Tuition(XII)</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="/account/add/tuition">
                      <span class="float-left">Add Now</span>
                      <span class="float-right">
                        <i class="ti-arrow-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card dashboard text-white bg-danger o-hidden h-100">
                    <div class="card-body">
        				      <div><h5>Add New Job Consultancy</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="/account/add/institute">
                      <span class="float-left">Add Now</span>
                      <span class="float-right">
                        <i class="ti-arrow-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- INSTITUTES -->
              <div class="box_general">
          			<div class="header_box">
          				<h2><i class="fa fa-bar-chart"></i>My Institutes</h2>
          			</div>
          		</div>
              <div>
                {$app->get_my_inst($id, 'card')}
              </div>
              <!-- COLLEGES -->
              <div class="box_general">
          			<div class="header_box">
          				<h2><i class="fa fa-bar-chart"></i>My Colleges</h2>
          			</div>

          		</div>
              <div>
                {$app->get_my_colg($id, 'card')}
              </div>
              <!-- TUITIONS -->
              <div class="box_general">
          			<div class="header_box">
          				<h2><i class="fa fa-bar-chart"></i>My Tuitions Below XII</h2>
          			</div>
          		</div>
              <div>
                {$app->get_my_tuitions($id, 'card')}
              </div>
              <!-- JOB CONSULTANCIES -->
              <div class="box_general">
          			<div class="header_box">
          				<h2><i class="fa fa-bar-chart"></i>My Job Consultancies</h2>
          			</div>
          		</div>
              <div>
                {$app->get_my_jobc($id, 'card')}
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
