<div class="loader">
  <img src="/assets/images/logo.png" alt="" class="img-responsive">
  <div class="gooey">
    <span class="dot"></span>
    <div class="dots">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<header class="header-2">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="header-top mb-0 py-4">
          <div class="logo-area w-25">
            <a href="#"><img src="/assets/images/logo.png" alt=""></a>
          </div>
          <div class="nav-searchbar w-50 mx-auto">
            <form class="form-inline w-100" method="GET" action="/search">
              <div class="input-group w-100">
                <div class="input-group-prepend cities-list">
                  <select class="form-control pl-4 w-100" name="city">
                    <?php
                      $app->get_cities('select_list');
                    ?>
                  </select>
                </div>
                <input class="form-control px-5" type="search" placeholder="Search" aria-label="Search" name='q'>
              </div>
              <!--button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button-->
            </form>
          </div>
          <?php if (isset($_SESSION["user_id"])): ?>
            <div class="header-top-account w-25 text-right">
              <a href="/account" class="account-button mr-0">My Account</a>
            </div>
          <?php else: ?>
            <div class="user-action-btn w-25 text-right">
              <a class="btn btn-outline-primary btn-signup" href="signup">Signup</a>
              <a class="btn btn-primary btn-signup ml-1" href="login">Login</a>
            </div>
          <?php endif; ?>
        </div>
          
      </div>
    </div>
  </div>
</header>
