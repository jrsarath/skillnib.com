<?php
/* Smarty version 3.1.33, created on 2019-07-09 05:32:09
  from 'D:\Server\Wamp\www\skillnib\application\templates\components\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2426d9a25db5_72817716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25f9bd4e91f173f463287d0a9c4bf1ade7e19ce9' => 
    array (
      0 => 'D:\\Server\\Wamp\\www\\skillnib\\application\\templates\\components\\header.tpl',
      1 => 1562650328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/mega-menu.tpl' => 1,
  ),
),false)) {
function content_5d2426d9a25db5_72817716 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="header_in is_sticky py-0 border-0">
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
            <?php if (isset($_SESSION['user_id'])) {?>
              <li><a href="/account" class="btn_add">My Account</a></li>
              <li class="d-md-none d-lg-none"><a href="/account" id="sign-in" class="login account" title="Account">Account</a></li>
            <?php } else { ?>
              <li><a href="/signup" class="btn_add">Signup</a></li>
              <li><a href="/login" class="btn_add">Login</a></li>
              <li class="d-md-none d-lg-none"><a href="/login" id="sign-in" class="login" title="Login">Login</a></li>
            <?php }?>

          </ul>
          <!-- /top_menu -->
          <?php if ($_smarty_tpl->tpl_vars['mega']->value == 'true') {?>
            <a href="#" class="droopmenu-toggle btn_mobile"></a>
          <?php }?>
          <nav id="menu" class="main-menu" style='display:none!important'>

          </nav>
        </div>
      </div>
      <!-- /row -->
    </div>
      <?php if ($_smarty_tpl->tpl_vars['mega']->value == 'true') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:components/mega-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>
    </div><!-- droopmenu-inner -->
  </div><!-- droopmenu-navbar  -->
</header>
<?php }
}
