<?php
/* Smarty version 3.1.36, created on 2020-04-27 10:41:05
  from '/var/www/ForGitHub/ForSoul/API/Template/Error/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ea68c91499a19_16571180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9af173dd8caa144935ef92c4c9c70f5214164dc4' => 
    array (
      0 => '/var/www/ForGitHub/ForSoul/API/Template/Error/error.tpl',
      1 => 1587907294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea68c91499a19_16571180 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="uk">
<head>
    <title> <?php echo $_smarty_tpl->tpl_vars['Report']->value['status'];?>
 </title>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['Report']->value['text'];?>

</body>
</html><?php }
}
