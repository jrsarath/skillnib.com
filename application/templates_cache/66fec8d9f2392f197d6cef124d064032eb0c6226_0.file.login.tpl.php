<?php
/* Smarty version 3.1.33, created on 2019-07-09 05:22:04
  from 'D:\Server\Wamp\www\skillnib\application\templates\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24247c861ae6_50666089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66fec8d9f2392f197d6cef124d064032eb0c6226' => 
    array (
      0 => 'D:\\Server\\Wamp\\www\\skillnib\\application\\templates\\pages\\login.tpl',
      1 => 1562649722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/head.tpl' => 1,
    'file:components/header.tpl' => 1,
    'file:components/footer.tpl' => 1,
    'file:components/javascripts.tpl' => 1,
  ),
),false)) {
function content_5d24247c861ae6_50666089 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <title>Login</title>
    <?php $_smarty_tpl->_subTemplateRender('file:components/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:components/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mega'=>'false'), 0, false);
?>
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
    			  <form>
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
      				<a href="#0" class="btn_1 rounded full-width">Login Now</a>
              <div class="divider"><span>Or</span></div>
              <div class="access_social">
      					<a href="#0" class="social_bt facebook">Login with Facebook</a>
      					<a href="#0" class="social_bt google">Login with Google</a>
      				</div>

      				<div class="text-center add_top_10">New to Sparker? <strong><a href="register.html">Sign up!</a></strong></div>
      			</form>
    			<div class="copy">© 2018 Sparker</div>
    		</aside>
    	</div>
    </div>
  	<!-- /login -->
  	<!-- /login -->
    <?php $_smarty_tpl->_subTemplateRender('file:components/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:components/javascripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
