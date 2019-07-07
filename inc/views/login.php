<div class="alice-bg section-padding-bottom padding-top-70 padding-bottom-70">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto contact-block">
        <div class="contact-form padding-bottom-40 px-5">
          <h3 class="text-center padding-bottom-100">Login</h3>
          <form action="login" method="post">
            <div class="row">
              <div class="col-12">
                <?php if (isset($_GET["continue"])): ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> You are now registered!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i data-feather="x-circle"></i>
                    </button>
                  </div>
              <?php elseif (isset($_GET["invalid"])): ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Uh oh!</strong> Invalid Email or Password!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i data-feather="x-circle"></i>
                    </button>
                  </div>
                <?php endif; ?>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
              </div>
            </div>
            <button class="button w-100 text-center" name='login'>Login</button>
            <h4 class="text-center my-4">OR</h4>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <a href="#" class="button w-100 text-center btn-facebook">
                  Log In With
                  <i data-feather="facebook"></i>
                </a>
              </div>
              <div class="col-sm-6 col-md-6">
                <a href="#" class="button w-100 text-center btn-google">
                  Log In With &nbsp;
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path class="st0" d="M21.8,10h-2.6H12v4h5.7c-0.8,2.3-3,4-5.7,4c-3.3,0-6-2.7-6-6c0-3.6,3.2-5.9,6-6c1.6,0,2.8,0.7,3.4,1.1
                    C16.2,6.1,17,5,17.8,4c-0.4-0.3-1-0.8-1.9-1.2c0,0-1.8-0.8-3.9-0.8C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10
                    C22,11.3,21.9,10.6,21.8,10z"/>
                  </svg>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
