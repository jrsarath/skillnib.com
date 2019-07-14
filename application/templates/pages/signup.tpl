<html>
  <head>
    <title>SkillNib - Register</title>
    {include file='components/head.tpl'}
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
  </head>
  <body>
    {include file='components/header.tpl' mega='false'}
    <div class="sub_header_in">
  	<div class="container">
  			<h1>Register your Account</h1>
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
              <div class="form-group with-icon">
      					<label>Account type</label>
                <div class="custom-select-form">
                  <select type="text" class="form-control nice" name="role" id="role">
                    <option value="student">Student</option>
                    <option value="business">Educational Institute</option>
                  </select>
                </div>
      					<i class="ti-user"></i>
      				</div>
      				<button class="btn_1 rounded full-width" style="margin-top: 80px;" type="submit" name='signup'>Login Now</button>
              <div class="divider"><span>Or</span></div>
              <div class="access_social">
      					<a href="#0" class="social_bt facebook">Login with Facebook</a>
      					<a href="#0" class="social_bt google">Login with Google</a>
      				</div>

      				<div class="text-center add_top_10">Have an Account? <strong><a href="/login">Login!</a></strong></div>
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
