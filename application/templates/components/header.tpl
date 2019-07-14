<header class="header_in py-0 border-0">
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
            {if $mega == 'true'}
              <li class="d-md-none d-lg-none"><a href="#0" class="search_mob login search"></a></li>
            {/if}
            {if isset($smarty.session.user_id)}
              <li><a href="/account" class="btn_add">My Account</a></li>
              <li class="d-md-none d-lg-none"><a href="/account" class="login account" title="Account">Account</a></li>
            {else}
              <li><a href="/signup" class="btn_add">Signup</a></li>
              <li><a href="/login" class="btn_add">Login</a></li>
              <li class="d-md-none d-lg-none"><a href="/login" class="login" title="Login">Login</a></li>
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
  {if $mega == 'true'}
    <div>
        <div class="search-bar">
          <div class="container">
   			   <div class="row">
   				   <div class="col-lg-3 col-md-4 col-10">
   					   <h4><strong>145</strong> result for All listing</h4>
   				   </div>
   				   <div class="col-lg-9 col-md-8 col-2">
   					   <a href="#0" class="search_mob btn_search_mobile"></a> <!-- /open search panel -->
   						<div class="row no-gutters custom-search-input-2 inner">
   							<div class="col-lg-4">
   								<div class="form-group">
   									<input class="form-control" type="text" placeholder="What are you looking for...">
   									<i class="icon_search"></i>
   								</div>
   							</div>
   							<div class="col-lg-4">
   								<div class="form-group">
   									<input class="form-control" type="text" placeholder="Where">
   									<i class="icon_pin_alt"></i>
   								</div>
   							</div>
   							<div class="col-lg-3">
   								<select class="wide">
   									<option>All Categories</option>
   									<option>Shops</option>
   									<option>Hotels</option>
   									<option>Restaurants</option>
   									<option>Bars</option>
   									<option>Events</option>
   									<option>Fitness</option>
   								</select>
   							</div>
   							<div class="col-lg-1">
   								<input type="submit" value="Search">
   							</div>
   						</div>
   				   </div>
   			   </div>
   			   <!-- /row -->
          </div>
        </div>
         <div class="search_mob_wp search-bar">
           <div class="container">
             <div class="custom-search-input-2">
               <div class="form-group">
                 <input class="form-control" type="text" placeholder="What are you looking for...">
                 <i class="icon_search"></i>
               </div>
               <div class="form-group">
                 <input class="form-control" type="text" placeholder="Where">
                 <i class="icon_pin_alt"></i>
               </div>
               <select class="wide">
                 <option>All Categories</option>
                 <option>Shops</option>
                 <option>Hotels</option>
                 <option>Restaurants</option>
                 <option>Bars</option>
                 <option>Events</option>
                 <option>Fitness</option>
               </select>
               <input type="submit" value="Search">
             </div>
           </div>
         </div>
				<!-- /search_mobile -->
	   </div>

	   <!-- /results -->
  {/if}
</header>
