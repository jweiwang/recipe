<?php
/* Smarty version 3.1.32, created on 2018-08-03 02:45:33
  from 'E:\www\recipe\application\admin\views\library\header.lbi' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b63c1cdc58da3_19289869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '106309f3d3314ec29d9bfd11b380774dcb384ee4' => 
    array (
      0 => 'E:\\www\\recipe\\application\\admin\\views\\library\\header.lbi',
      1 => 1533022495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b63c1cdc58da3_19289869 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/www/admin/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="/www/admin/style/admin.css" media="all">
  <link rel="stylesheet" href="/www/admin/style/custom.css" media="all">
  <?php echo '<script'; ?>
  src="/www/admin/jquery_1.10.2.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/www/admin/layui/layui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
layui.config({
  base: '/www/admin/' 
}).extend({
  index: 'lib/index'
}).use(['index']);
layui.use('my_common');
<?php echo '</script'; ?>
>
</head>
<body>
<?php }
}
