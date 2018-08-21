<?php
/* Smarty version 3.1.32, created on 2018-08-20 02:20:49
  from 'E:\www\recipe\application\web\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7a258191b8a2_23349236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c9412938346c31c9f8ced7a0b771eabbfff9d5f' => 
    array (
      0 => 'E:\\www\\recipe\\application\\web\\views\\index.html',
      1 => 1534731620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:library/header.lbi' => 1,
    'file:library/footer.lbi' => 1,
  ),
),false)) {
function content_5b7a258191b8a2_23349236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
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
                            <div class="layui-col-md5 list-img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                            </div>
                            <div class="layui-col-md7">
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
    
<?php $_smarty_tpl->_subTemplateRender('file:library/footer.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
