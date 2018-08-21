<?php
/* Smarty version 3.1.32, created on 2018-08-16 07:59:57
  from 'E:\www\recipe\application\web\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b752efd123422_46254578',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '5c9412938346c31c9f8ced7a0b771eabbfff9d5f' => 
    array (
      0 => 'E:\\www\\recipe\\application\\web\\views\\index.html',
      1 => 1534406393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:library/header.lbi' => 1,
    'file:library/footer.lbi' => 1,
  ),
),false)) {
function content_5b752efd123422_46254578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7897009325b752efd0d21d5_51678408';
$_smarty_tpl->_subTemplateRender('file:library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <div class="container-wrap">
        <div class="container">
            <div class="contar-wrap">
                <?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php if ($_smarty_tpl->tpl_vars[\'list\']->value[\'rows\']) {?>/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
 <?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'list\']->value[\'rows\'], \'item\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->value) {
?>/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>

                <div class="item">
                    <div class="item-box  layer-photos-demo1 layer-photos-demo">
                        <h3><a href="/recipe/<?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'id\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
.html" target="_blank" title="<?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'title\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
"><?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'title\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
</a></h3>
                        <h5>发布于：<span><?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'update_time\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
</span></h5>
                        <p><font class="color-blue">备料：</font><?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'ings\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
</p>
                        <?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php if ($_smarty_tpl->tpl_vars[\'item\']->value[\'img\']) {?>/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>

                        <div class="layui-row">
                            <div class="layui-col-md4 list-img">
                                <img src="<?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'img\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
" alt="<?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'title\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
">
                            </div>
                            <div class="layui-col-md8">
                                <div class="layui-row">
                                    <div class="layui-col-md12 list-steps">
                                        <font class="color-blue">步骤：</font><br><?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'steps\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>

                                    </div>
                                    <div class="layui-col-md12 list-btn">
                                        <a href="/recipe/<?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'id\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
.html" target="_blank" class="layui-btn layui-btn-sm layui-btn-normal" title="<?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'title\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
-开始去做菜"> <i class="layui-icon layui-icon-fire"></i>开始去做菜</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php } else { ?>/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>

                        <div class="layui-row">
                            <div class="layui-col-md12 list-steps">
                                <font class="color-blue">步骤：</font><br><?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'steps\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>

                            </div>
                            <div class="layui-col-md12 list-btn">
                                <a href="/recipe/<?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'id\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
.html" target="_blank" class="layui-btn layui-btn-sm layui-btn-normal" title="<?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value[\'title\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
-开始去做菜"> <i class="layui-icon layui-icon-fire"></i>开始去做菜</a>
                            </div>
                        </div>
                        <?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php }?>/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>

                    </div>
                </div>
                <?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
 <?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php }?>/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>

                <?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php if ($_smarty_tpl->tpl_vars[\'list\']->value[\'next_page\']) {?>/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>

                <div class="item-btn">
                    <a class="layui-btn layui-btn-normal" href="/?page=<?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php echo $_smarty_tpl->tpl_vars[\'list\']->value[\'next_page\'];?>
/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>
">下一页</a>
                </div>
                <?php echo '/*%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/<?php }?>/*/%%SmartyNocache:7897009325b752efd0d21d5_51678408%%*/';?>

            </div>
        </div>
    </div>
    
<?php $_smarty_tpl->_subTemplateRender('file:library/footer.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
