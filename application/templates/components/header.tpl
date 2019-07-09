<header class="header_in is_sticky py-0 border-0">
  <div class="droopmenu-navbar cp-nav-2">
    <div class="droopmenu-inner container">
      <div class="top-menu">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-12">
          <div id="logo">
            <a href="/">
              <img src="/assets/images/logo.png" height="37" alt="" class="logo_sticky">
            </a>
          </div>
        </div>
        <div class="col-lg-9 col-md-9 col-12">
          <ul id="top_menu">
            {if isset($smarty.session.user_id)}
              <li><a href="/account" class="btn_add">My Account</a></li>
              <li class="d-md-none d-lg-none"><a href="/account" id="sign-in" class="login account" title="Account">Account</a></li>
            {else}
              <li><a href="/signup" class="btn_add">Signup</a></li>
              <li><a href="/login" class="btn_add">Login</a></li>
              <li class="d-md-none d-lg-none"><a href="/login" id="sign-in" class="login" title="Login">Login</a></li>
            {/if}

          </ul>
          <!-- /top_menu -->
          {if $mega == 'true'}
            <a href="#" class="droopmenu-toggle btn_mobile"></a>
          {/if}
          <nav id="menu" class="main-menu" style='display:none!important'>

          </nav>
        </div>
      </div>
      <!-- /row -->
    </div>
      {if $mega == 'true'}
        {include file='components/mega-menu.tpl'}
      {/if}
    </div><!-- droopmenu-inner -->
  </div><!-- droopmenu-navbar  -->
</header>
