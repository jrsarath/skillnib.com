<div class="alice-bg padding-top-60 section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container company-details row">
              <div class="dashboard-sidebar col-3 p-0">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#account" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    My Account
                  </a>
                  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#org" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    My Organizations
                  </a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#mcqs" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    My MCQs Questions
                  </a>
                  <div class="dropdown-divider my-4"></div>
                  <a class="nav-link featured shadow mt-3" id="v-pills-messages-tab" data-toggle="pill" href="#newLising" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    Add Organization
                    <i class="fas fa-plus float-right mt-1"></i>
                  </a>
                </div>
              </div>
              <div class="dashboard-content-wrapper col-9">
                <?php if (isset($status) && $status == 'mcq-success'): ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your MCQ questions are live now.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="far fa-times-circle" style='font-size: 24px;'></i>
                    </button>
                  </div>
                <?php elseif (isset($status) && $status == 'mcq-limit'): ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Limit Reached!</strong> You have already added 10 Questions today.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="far fa-times-circle" style='font-size: 24px;'></i>
                      </button>
                    </div>
                <?php elseif (isset($status) && $status == 'mcq-error'): ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Oh uh!</strong> Something went wrong, Contact support!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="far fa-times-circle" style='font-size: 24px;'></i>
                    </button>
                  </div>
                <?php endif; ?>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="account" role="tabpanel" >
                    ACCOUNT INFO AND EDIT FEATURE HERE (IN PROGRESS)
                  </div>
                  <div class="tab-pane fade px-4" id="org" role="tabpanel" >
                    <h5>My Institutes</h5>
                    <?php $app->get_my_inst($id, 'card'); ?>
                    <hr>
                    <h5>My Colleges</h5>
                    <?php $app->get_my_colg($id, 'card'); ?>
                    <hr>
                    <h5>My Tution Classes</h5>
                    <?php $app->get_my_tuitions($id, 'card'); ?>
                    <hr>
                    <h5>My Job Consultancies</h5>
                    <?php $app->get_my_jobc($id, 'card'); ?>
                  </div>
                  <div class="tab-pane fade px-4" id="mcqs" role="tabpanel" >
                    <h5 class="mb-5">Add a MCQ Question :</h5>
                    <div class="card-body p-0">
                      <form action="" method="post" class="post">
                          <select name="for_int" class="form-control mb-4">
                            <option>SELECT INSTITUTE</option>
                            <?php $app->get_my_inst($id, 'id-only-list'); ?>
                          </select>
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
                          <input class="btn btn-primary px-5 py-3 mt-3" value="Add MCQ" type="submit" name="post_mcq">
                      </form>
                    </div>
                  </div>
                  <div class="tab-pane fade px-4" id="newLising" role="tabpanel" >
                    <div class="card shadow my-4 rounded p-4">
                      <div class="card-body pb-0">
                        <h5 class="card-title">Add a New Institute</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/account/add/institute" class="btn btn-primary">Add Institute</a>
                      </div>
                    </div>
                    <div class="card shadow my-4 rounded p-4">
                      <div class="card-body pb-0">
                        <h5 class="card-title">Add a New College</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/account/add/college" class="btn btn-primary">Add College</a>
                      </div>
                    </div>
                    <div class="card shadow my-4 rounded p-4">
                      <div class="card-body pb-0">
                        <h5 class="card-title">Add a new Tution Below XII</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/account/add/tuition" class="btn btn-primary">Add Tution Below XII</a>
                      </div>
                    </div>
                    <div class="card shadow my-4 rounded p-4">
                      <div class="card-body pb-0">
                        <h5 class="card-title">Add a new Job Consultancy</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/account/add/job-consultancy" class="btn btn-primary">Add Job Consultancy</a>
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
      $(' select[name="mcq-subcategory"] option[data-parent="'+$(' select[name="mcq-category"]').val()+'"]').attr('hidden', false);
      $(' select[name="mcq-category"]').change(function(){
        $(' select[name="mcq-subcategory"] option').attr('hidden', true);
        $(' select[name="mcq-subcategory"] option[data-parent="'+$(' select[name="mcq-category"]').val()+'"]').attr('hidden', false);
      });
    </script>
