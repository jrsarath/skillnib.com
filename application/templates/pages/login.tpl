<html>
  <head>
    <title>SkillNib - Login</title>
    {include file='components/head.tpl'}
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
  </head>
  <body>
    {include file='components/header.tpl' mega='false'}
    <div class="sub_header_in">
  	<div class="container">
  			<h1>Login to your Account</h1>
  		</div>
  		<!-- /container -->
  	</div>
    <!-- Login -->
    <div class="container">
      <div id="login" class="row justify-content-center margin_60">
    		<aside>
    			  <form method="post">
      				<div class="form-group">
      					<label>Email</label>
      					<input type="email" class="form-control" name="email" id="email">
      					<i class="icon_mail_alt"></i>
      				</div>
      				<div class="form-group">
      					<label>Password</label>
      					<input type="password" class="form-control" name="password" id="password" value="">
      					<i class="icon_lock_alt"></i>
      				</div>
      				<div class="clearfix add_bottom_30">
      					<div class="checkboxes float-left">
      						<label class="container_check">Remember me
      						  <input type="checkbox">
      						  <span class="checkmark"></span>
      						</label>
      					</div>
      					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
      				</div>
      				<button class="btn_1 rounded full-width" type="submit" name="login">Login Now</button>
              <div class="divider"><span>Or</span></div>
              <div class="access_social">
      					<a href="#0" class="social_bt facebook">Login with Facebook</a>
      					<a href="#0" class="social_bt google">Login with Google</a>
      				</div>

      				<div class="text-center add_top_10">New to SkillNib? <strong><a href="/signup">Sign up!</a></strong></div>
      			</form>
    			<div class="copy">© 2018 Sparker</div>
    		</aside>
    	</div>
    </div>
  	<!-- /login -->
  	<!-- /login -->
    {include file='components/footer.tpl'}
    {include file='components/javascripts.tpl'}
  </body>
</html>
