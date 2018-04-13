<?php
/* Smarty version 3.1.30, created on 2018-04-13 14:44:55
  from "D:\soft\OSPanel\domains\myshop.local\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad09837659078_05381599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d446c807563964944cde338f65ec98f92cfa662' => 
    array (
      0 => 'D:\\soft\\OSPanel\\domains\\myshop.local\\views\\default\\header.tpl',
      1 => 1523619894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5ad09837659078_05381599 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet"
          href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">
</head>
<body>
<div id="header">
    <h1>my shop - интернет магазин</h1>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="centerColumn">
    centerColumn<?php }
}
