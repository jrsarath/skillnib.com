<?php
/* Smarty version 3.1.33, created on 2019-02-13 15:52:35
  from 'C:\server\wamp\www\Project_40K\inc\templates\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c643d4336d756_28058934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81f65de333f04506a3ca42eb893cb9b34dd9ab5f' => 
    array (
      0 => 'C:\\server\\wamp\\www\\Project_40K\\inc\\templates\\breadcrumb.tpl',
      1 => 1550073142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c643d4336d756_28058934 (Smarty_Internal_Template $_smarty_tpl) {
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
