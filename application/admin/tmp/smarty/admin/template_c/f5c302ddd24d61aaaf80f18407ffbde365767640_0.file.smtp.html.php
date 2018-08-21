<?php
/* Smarty version 3.1.32, created on 2018-07-31 02:54:26
  from 'E:\www\w.com\application\admin\views\configure\smtp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5fcf62d30b38_24123584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5c302ddd24d61aaaf80f18407ffbde365767640' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\configure\\smtp.html',
      1 => 1533005614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 2,
  ),
),false)) {
function content_5b5fcf62d30b38_24123584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">邮件服务</div>
        <div class="layui-card-body">
          <div class="layui-form" wid100 lay-filter="">
            <div class="layui-form-item">
              <label class="layui-form-label">SMTP服务器</label>
              <div class="layui-input-inline">
                <input type="text" name="configure[smtp_server]" value="<?php echo $_smarty_tpl->tpl_vars['configure']->value['smtp_server'];?>
" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">如：smtp.163.com</div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">SMTP端口号</label>
              <div class="layui-input-inline" style="width: 80px;">
                <input type="text" name="configure[port]" lay-verify="number" value="<?php echo $_smarty_tpl->tpl_vars['configure']->value['port'];?>
" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">一般为 25 或 465</div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">发件人邮箱</label>
              <div class="layui-input-inline">
                <input type="text" name="configure[send_email]" value="<?php echo $_smarty_tpl->tpl_vars['configure']->value['send_email'];?>
" lay-verify="email" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">发件人昵称</label>
              <div class="layui-input-inline">
                <input type="text" name="configure[send_nickname]" value="<?php echo $_smarty_tpl->tpl_vars['configure']->value['send_nickname'];?>
" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">邮箱登入密码</label>
              <div class="layui-input-inline">
                <input type="password" name="configure[send_password]" value="<?php echo $_smarty_tpl->tpl_vars['configure']->value['send_password'];?>
" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="set_system_email">确认保存</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
$(document).ready(function() {
  layui.use('form', function() {
    var form = layui.form;
   
    form.on('submit(set_system_email)', function(data) {
      $.ajax({
        type: "POST",
        url: "/configure/smtp",
        dataType: 'json',
        data: data.field,
        success: function(res) {
          if (res.code == 200) {
            layer.msg('保存成功', {
              offset: '15px',
              icon: 1,
              time: 1000
            }, function() {
              location.reload();
            });

          } else {
            layer.msg('保存失败');
          }
        },
        error: function() {
          layer.msg('网络异常，请重试！');
        }
      });
      return false;
    });


  });

});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
