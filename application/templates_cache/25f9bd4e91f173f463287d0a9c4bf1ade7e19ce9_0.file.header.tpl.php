<?php
/* Smarty version 3.1.33, created on 2019-07-09 00:39:26
  from 'D:\Server\Wamp\www\skillnib\application\templates\components\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d23e23e798a17_02134038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25f9bd4e91f173f463287d0a9c4bf1ade7e19ce9' => 
    array (
      0 => 'D:\\Server\\Wamp\\www\\skillnib\\application\\templates\\components\\header.tpl',
      1 => 1562632756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/mega-menu.tpl' => 1,
  ),
),false)) {
function content_5d23e23e798a17_02134038 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['mega']->value == 'true') {?>
  <?php $_smarty_tpl->_subTemplateRender('file:components/mega-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
