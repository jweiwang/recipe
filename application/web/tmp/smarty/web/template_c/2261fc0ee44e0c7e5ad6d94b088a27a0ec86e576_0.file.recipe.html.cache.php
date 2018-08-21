<?php
/* Smarty version 3.1.32, created on 2018-08-16 07:58:09
  from 'E:\www\recipe\application\web\views\recipe.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b752e9111cde9_35984023',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '2261fc0ee44e0c7e5ad6d94b088a27a0ec86e576' => 
    array (
      0 => 'E:\\www\\recipe\\application\\web\\views\\recipe.html',
      1 => 1534406286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:library/header.lbi' => 1,
    'file:library/footer.lbi' => 1,
  ),
),false)) {
function content_5b752e9111cde9_35984023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5022251425b752e910d8a19_27775828';
$_smarty_tpl->_subTemplateRender('file:library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-wrap">
    <div class="container container-message container-details">
        <div class="contar-wrap">
            <div class="item">
                <div class="item-box  layer-photos-demo1 layer-photos-demo">
                    <h3><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h3>
                    <h5>发布于：<span>刚刚</span></h5>
                    <p><font class="color-blue">备料：</font><?php echo $_smarty_tpl->tpl_vars['info']->value['ings'];?>
</p>
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['img']) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
">
                    <?php }?>
                    <p><font class="color-blue">步骤：</font><br><?php echo $_smarty_tpl->tpl_vars['info']->value['steps'];?>
</p>
                    
                    <div class="count layui-clear">
                        <span class="pull-left">阅读 <em><?php echo '/*%%SmartyNocache:5022251425b752e910d8a19_27775828%%*/<?php echo $_smarty_tpl->tpl_vars[\'info\']->value[\'view_num\'];?>
/*/%%SmartyNocache:5022251425b752e910d8a19_27775828%%*/';?>
</em></span>
                        <span class="pull-right like" data-id="<?php echo '/*%%SmartyNocache:5022251425b752e910d8a19_27775828%%*/<?php echo $_smarty_tpl->tpl_vars[\'info\']->value[\'id\'];?>
/*/%%SmartyNocache:5022251425b752e910d8a19_27775828%%*/';?>
"><i class="layui-icon layui-icon-praise"></i><em><?php echo '/*%%SmartyNocache:5022251425b752e910d8a19_27775828%%*/<?php echo $_smarty_tpl->tpl_vars[\'info\']->value[\'like_num\'];?>
/*/%%SmartyNocache:5022251425b752e910d8a19_27775828%%*/';?>
</em></span>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:library/footer.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
