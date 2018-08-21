<?php
/* Smarty version 3.1.32, created on 2018-08-17 02:43:18
  from 'E:\www\recipe\application\web\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b763646d7ae98_18725385',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '5c9412938346c31c9f8ced7a0b771eabbfff9d5f' => 
    array (
      0 => 'E:\\www\\recipe\\application\\web\\views\\index.html',
      1 => 1534406393,
      2 => 'file',
    ),
    'fd09ae212b5494afb2c84fd64a53753ce206db6b' => 
    array (
      0 => 'E:\\www\\recipe\\application\\web\\views\\library\\header.lbi',
      1 => 1534302139,
      2 => 'file',
    ),
    '86e89018b6979f779a03a1e89b3331983aba3a20' => 
    array (
      0 => 'E:\\www\\recipe\\application\\web\\views\\library\\footer.lbi',
      1 => 1534300982,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 60,
),true)) {
function content_5b763646d7ae98_18725385 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>太有谱啦</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="菜谱，八大菜系" />
    <meta name="Description" content="菜谱，八大菜系" />
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
                    <li class="layui-nav-item"><a href="/about.html">关于</a></li>
                </ul>
                <a href="#" class="personal pull-left">
                <i class="layui-icon layui-icon-username"></i>
                </a>
            </div>
            <div class="mobile-nav pull-right" id="mobile-nav">
                <a href="javascript:;">
                <i class="layui-icon layui-icon-more"></i>
                </a>
            </div>
        </div>
        <ul class="pop-nav" id="pop-nav">
            <li><a href="/">首页</a></li>
            <li><a href="/about.html">关于</a></li>
        </ul>

       
    </div>    
    <div class="container-wrap">
        <div class="container">
            <div class="contar-wrap">
                <?php if ($_smarty_tpl->tpl_vars['list']->value['rows']) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value['rows'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <div class="item">
                    <div class="item-box  layer-photos-demo1 layer-photos-demo">
                        <h3><a href="/recipe/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
.html" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h3>
                        <h5>发布于：<span><?php echo $_smarty_tpl->tpl_vars['item']->value['update_time'];?>
</span></h5>
                        <p><font class="color-blue">备料：</font><?php echo $_smarty_tpl->tpl_vars['item']->value['ings'];?>
</p>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['img']) {?>
                        <div class="layui-row">
                            <div class="layui-col-md4 list-img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                            </div>
                            <div class="layui-col-md8">
                                <div class="layui-row">
                                    <div class="layui-col-md12 list-steps">
                                        <font class="color-blue">步骤：</font><br><?php echo $_smarty_tpl->tpl_vars['item']->value['steps'];?>

                                    </div>
                                    <div class="layui-col-md12 list-btn">
                                        <a href="/recipe/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
.html" target="_blank" class="layui-btn layui-btn-sm layui-btn-normal" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
-开始去做菜"> <i class="layui-icon layui-icon-fire"></i>开始去做菜</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } else { ?>
                        <div class="layui-row">
                            <div class="layui-col-md12 list-steps">
                                <font class="color-blue">步骤：</font><br><?php echo $_smarty_tpl->tpl_vars['item']->value['steps'];?>

                            </div>
                            <div class="layui-col-md12 list-btn">
                                <a href="/recipe/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
.html" target="_blank" class="layui-btn layui-btn-sm layui-btn-normal" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
-开始去做菜"> <i class="layui-icon layui-icon-fire"></i>开始去做菜</a>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['list']->value['next_page']) {?>
                <div class="item-btn">
                    <a class="layui-btn layui-btn-normal" href="/?page=<?php echo $_smarty_tpl->tpl_vars['list']->value['next_page'];?>
">下一页</a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <p>
            <span>Copyright © 2018</span>
            <span><a href="http://www.w.com/" target="_blank">http://www.w.com/</a></span>
            <span>MIT license</span>
        </p>
        <p><span>人生就是一场修行</span></p>
    </div>
<script src="/www/web/res/layui/layui.js"></script>
<script>
layui.config({
    base: '/www/web/res/static/js/'
}).use('blog');
</script>
</body>

</html><?php }
}
