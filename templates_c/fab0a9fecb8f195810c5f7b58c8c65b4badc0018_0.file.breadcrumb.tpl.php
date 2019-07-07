<?php
/* Smarty version 3.1.33, created on 2019-05-13 06:45:57
  from 'C:\server\wamp\www\listia\inc\templates\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd912a5e59e87_90963989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fab0a9fecb8f195810c5f7b58c8c65b4badc0018' => 
    array (
      0 => 'C:\\server\\wamp\\www\\listia\\inc\\templates\\breadcrumb.tpl',
      1 => 1550073142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd912a5e59e87_90963989 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="breadcrumb-area">
          <h1><?php echo $_smarty_tpl->tpl_vars['data']->value["current_page"];?>
</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href='<?php echo $_smarty_tpl->tpl_vars['data']->value["home_link"];?>
'><?php echo $_smarty_tpl->tpl_vars['data']->value["home"];?>
</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['data']->value["current_page"];?>
</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb End -->
<?php }
}
