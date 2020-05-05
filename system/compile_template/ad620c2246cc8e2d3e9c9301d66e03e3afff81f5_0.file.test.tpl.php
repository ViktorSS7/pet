<?php
/* Smarty version 3.1.36, created on 2020-05-05 14:48:16
  from '/var/www/ForGitHub/ForSoul/API/Template/test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eb152808bbe33_17409728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad620c2246cc8e2d3e9c9301d66e03e3afff81f5' => 
    array (
      0 => '/var/www/ForGitHub/ForSoul/API/Template/test.tpl',
      1 => 1588679295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb152808bbe33_17409728 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="uk">
<head>
    <title> <?php echo $_smarty_tpl->tpl_vars['Email']->value['title'];?>
 </title>
</head>
<body>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Email']->value['text'], 'email');
$_smarty_tpl->tpl_vars['email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['email']->value != '') {?>
    <strong><?php echo $_smarty_tpl->tpl_vars['email']->value['password'];?>
</strong><br>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<br>
<br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Email']->value['text3'], 'test');
$_smarty_tpl->tpl_vars['test']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->do_else = false;
if ($_smarty_tpl->tpl_vars['test']->value['password'] != '') {?>
<strong><?php echo $_smarty_tpl->tpl_vars['test']->value['password'];?>
</strong><br>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<br>
<br>
</body>
</html><?php }
}
