<?php
/* Smarty version 3.1.33, created on 2019-02-16 04:18:01
  from 'E:\Project_40K\inc\templates\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c678ef9237520_57444522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd61565bfca4fa844d698b0566abc50cb7a09640f' => 
    array (
      0 => 'E:\\Project_40K\\inc\\templates\\breadcrumb.tpl',
      1 => 1550073142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c678ef9237520_57444522 (Smarty_Internal_Template $_smarty_tpl) {
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
