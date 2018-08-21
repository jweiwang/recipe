<?php
/* Smarty version 3.1.32, created on 2018-08-20 06:23:42
  from 'E:\www\recipe\application\web\views\library\header.lbi' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7a5e6e3ecea1_60505715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd09ae212b5494afb2c84fd64a53753ce206db6b' => 
    array (
      0 => 'E:\\www\\recipe\\application\\web\\views\\library\\header.lbi',
      1 => 1534746219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7a5e6e3ecea1_60505715 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['seo']->value['keywords'];?>
" />
    <meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['seo']->value['description'];?>
" />
    <link rel="stylesheet" href="/www/web/res/layui/css/layui.css">
    <link rel="stylesheet" href="/www/web/res/static/css/mian.css">
</head>

<body class="lay-blog">
    <div class="header">
        <div class="header-wrap">
            <h1 class="logo pull-left">
                <a href="index.html">
                    <img src="/www/web/res/static/images/logo.png" alt="logo" class="logo-img">
                    <img src="/www/web/res/static/images/logo-text.png" alt="logo-text" class="logo-text">
                </a>
            </h1>

            <div class="blog-nav pull-right">
                <ul class="layui-nav pull-left">
                    <li class="layui-nav-item layui-this"><a href="/">首页</a></li>
                    <!--<li class="layui-nav-item"><a href="/about.html">关于</a></li>-->
                </ul>
                <!--<a href="#" class="personal pull-left">
                <i class="layui-icon layui-icon-username"></i>
                </a>-->
            </div>
            <div class="mobile-nav pull-right" id="mobile-nav">
                <a href="javascript:;">
                <i class="layui-icon layui-icon-more"></i>
                </a>
            </div>
        </div>
        <ul class="pop-nav" id="pop-nav">
            <li><a href="/">首页</a></li>
           <!-- <li><a href="/about.html">关于</a></li>-->
        </ul>

       
    </div><?php }
}
