<?php
/* Smarty version 3.1.32, created on 2018-08-02 07:57:03
  from 'E:\www\w.com\application\admin\views\message\view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b62b94f5208a0_51067325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '730d7768138a644cd2091bfdc620930b01ef9107' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\message\\view.html',
      1 => 1533196501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b62b94f5208a0_51067325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\www\\w.com\\application\\admin\\libraries\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid" id="LAY-app-message-detail">
  <div class="layui-card layuiAdmin-msg-detail">
      <div class="layui-card-header">
        <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h1>
        <p>
          <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['send_time'],'%Y-%m-%d %H:%I:%S');?>
</span>
        </p>
      </div>
      <div class="layui-card-body layui-text">
        <div class="layadmin-text">
          <?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>

          
        </div>
        <div style="padding-top: 30px;">
          <a href="javascript:;" layadmin-event="back" class="layui-btn layui-btn-primary layui-btn-sm">返回</a>
        </div>
      </div>

  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:../library/footer.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
