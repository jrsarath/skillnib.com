<?php
/* Smarty version 3.1.33, created on 2019-07-09 01:47:23
  from 'D:\Server\Wamp\www\skillnib\application\templates\pages\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d23f22b4ea602_80125523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bfe45c944666e457b431780a209711154562bc2' => 
    array (
      0 => 'D:\\Server\\Wamp\\www\\skillnib\\application\\templates\\pages\\home.tpl',
      1 => 1562636834,
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
function content_5d23f22b4ea602_80125523 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <title>Login</title>
    <?php $_smarty_tpl->_subTemplateRender('file:components/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:components/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mega'=>'true'), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender('file:components/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:components/javascripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
