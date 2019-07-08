<!-- Job Listing -->
<div class="alice-bg padding-top-60 section-padding-bottom">
  <div class="container">
    <div class="row no-gutters">
      <div class="col">
        <div class="job-listing-container row">
          <div class="filtered-job-listing-wrapper col-md-9">
            <div class="job-view-controller-wrapper">
              <div class="job-view-controller">
                <div class="controller list active">
                  <i data-feather="menu"></i>
                </div>
                <div class="controller grid">
                  <i data-feather="grid"></i>
                </div>
                <div class="job-view-filter">
                  <select class="selectpicker">
                    <option value="" selected>Most Recent</option>
                    <option value="california">Top Rated</option>
                    <option value="las-vegas">Most Popular</option>
                  </select>
                </div>
              </div>
              <div class="showing-number">
                <span>Showing 1–12 of 28 Jobs</span>
              </div>
            </div>
            <div class="job-filter-result">

              <?php
                $app->get_search_results();
              ?>
            </div>
            <div class="pagination-list text-center">
              <nav class="navigation pagination">
                <div class="nav-links">
                  <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
                  <a class="page-numbers" href="#">1</a>
                  <span aria-current="page" class="page-numbers current">2</span>
                  <a class="page-numbers" href="#">3</a>
                  <a class="page-numbers" href="#">4</a>
                  <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                </div>
              </nav>
            </div>
          </div>
          <div class="job-filter-wrapper col-md-3">
            <div class="selected-options same-pad">
              <div class="selection-title">
                <h4>You Selected</h4>
                <a href="#">Clear All</a>
              </div>
              <ul class="filtered-options">
              </ul>
            </div>
            <div data-id="search-type" class="job-filter job-type same-pad">
              <h4 class="option-title">Type</h4>
              <ul>
                <li><a href="#" data-attr="Institutes">Institutes</a></li>
                <li><a href="#" data-attr="Colleges">Colleges</a></li>
                <li><a href="#" data-attr="Exams">Tutions below XII</a></li>
                <li><a href="#" data-attr="Exams">Job Consultancy</a></li>
                <li><a href="#" data-attr="Exams">Exams</a></li>
              </ul>
            </div>

            <div data-id="categories" class="job-filter experience same-pad">
              <h4 class="option-title">Categories</h4>
              <ul>
                <?php $app->get_int_categories('list_item'); ?>
              </ul>
            </div>
            <div class="job-filter same-pad">
              <h4 class="option-title">Salary Range</h4>
              <div class="price-range-slider">
                <div class="nstSlider" data-range_min="0" data-range_max="10000"
                 data-cur_min="0"    data-cur_max="6130">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                  <div class="grip-label">
                    <span class="leftLabel"></span>
                    <span class="rightLabel"></span>
                  </div>
                </div>
              </div>
            </div>
            <div data-id="post" class="job-filter post same-pad">
              <h4 class="option-title">Date Posted</h4>
              <ul>
                <li><a href="#" data-attr="Last hour">Last hour</a></li>
                <li><a href="#" data-attr="Last 24 hour">Last 24 hour</a></li>
                <li><a href="#" data-attr="Last 7 days">Last 7 days</a></li>
                <li><a href="#" data-attr="Last 14 days">Last 14 days</a></li>
                <li><a href="#" data-attr="Last 30 days">Last 30 days</a></li>
              </ul>
            </div>
            <div data-id="gender" class="job-filter same-pad gender">
              <h4 class="option-title">Gender</h4>
              <ul>
                <li><a href="#" data-attr="Male">Male</a></li>
                <li><a href="#" data-attr="Female">Female</a></li>
              </ul>
            </div>
            <div data-id="qualification" class="job-filter qualification same-pad">
              <h4 class="option-title">Qualification</h4>
              <ul>
                <li><a href="#" data-attr="Matriculation">Matriculation</a></li>
                <li><a href="#" data-attr="Intermidiate">Intermidiate</a></li>
                <li><a href="#" data-attr="Gradute">Gradute</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Job Listing End -->
