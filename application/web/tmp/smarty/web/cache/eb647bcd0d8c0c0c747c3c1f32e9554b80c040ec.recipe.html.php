<?php
/* Smarty version 3.1.32, created on 2018-08-17 05:57:56
  from 'E:\www\recipe\application\web\views\recipe.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7663e494c175_39578967',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '2261fc0ee44e0c7e5ad6d94b088a27a0ec86e576' => 
    array (
      0 => 'E:\\www\\recipe\\application\\web\\views\\recipe.html',
      1 => 1534406286,
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
function content_5b7663e494c175_39578967 (Smarty_Internal_Template $_smarty_tpl) {
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

       
    </div><div class="container-wrap">
    <div class="container container-message container-details">
        <div class="contar-wrap">
            <div class="item">
                <div class="item-box  layer-photos-demo1 layer-photos-demo">
                    <h3>手擀面</h3>
                    <h5>发布于：<span>刚刚</span></h5>
                    <p><font class="color-blue">备料：</font>面粉：1500g左右、盐：2g、鸡蛋：1个、</p>
                                        <img src="uploads/2018/0817/5dd361d29d5efd147f76fed8176db8be.jpg" alt="手擀面">
                                        <p><font class="color-blue">步骤：</font><br><p>1、面粉里放入碱面，盐，还有鸡蛋，水用的豆浆机杯子，2斤水，实际用了1斤左右！</p><p>2、水用大温水，手感觉不烫手为宜，水一点一点的倒入，混合成干一点的面絮！</p><p>3、把棉絮压成干面团，用手蘸水搋chuai面！</p><p>4、刚开始新手，不要活的太硬，我的面团太硬了，我揉了好多遍才揉的光滑！新手可能揉不动！可以稍微软点，但不能太软了，那就不叫手擀面了(^_^)！</p><p>5、盖上干净的布，让面团醒一会，吃硬的面条最好早晨和面，下午吃，面才能醒的好，也揉的劲道！</p><p>6、醒面的过程，可以制作哨子面的材料，今天没出去买菜，就用家里现成的凑个数，用的土豆丁，辣椒丁，还有火腿丁！</p><p>7、准备好配菜！</p><p>8、手上全是面，擀面的过程没有拍照，把面团揉光滑，转圈擀开，折叠起来，切成想要的面条形状！</p><p>9、切好的！</p><p>10、配上刚才的汤，甭提多筋道了！</p></p>
                    
                    <div class="count layui-clear">
                        <span class="pull-left">阅读 <em><?php echo $_smarty_tpl->tpl_vars['info']->value['view_num'];?>
</em></span>
                        <span class="pull-right like" data-id="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"><i class="layui-icon layui-icon-praise"></i><em><?php echo $_smarty_tpl->tpl_vars['info']->value['like_num'];?>
</em></span>
                    </div>
                    
                </div>
            </div>
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
