<?php
/* Smarty version 3.1.32, created on 2018-08-03 02:45:34
  from 'E:\www\recipe\application\admin\views\members\password.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b63c1ced7ba78_09975369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51c5cf62b6b04c650e4f04db1f68a1e7063a9593' => 
    array (
      0 => 'E:\\www\\recipe\\application\\admin\\views\\members\\password.html',
      1 => 1532921834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b63c1ced7ba78_09975369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">修改密码</div>
          <div class="layui-card-body" pad15>
            
            <div class="layui-form" lay-filter="">
              <div class="layui-form-item">
                <label class="layui-form-label">当前密码</label>
                <div class="layui-input-inline">
                  <input type="password" name="oldpassword" lay-verify="required|oldpassword" lay-verType="tips" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">新密码</label>
                <div class="layui-input-inline">
                  <input type="password" name="password" id="password" lay-verify="required|password" lay-verType="tips" autocomplete="off" id="LAY_password" class="layui-input">
                </div>
               
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">确认新密码</label>
                <div class="layui-input-inline">
                  <input type="password" name="repassword" id="repassword" lay-verify="required|repassword" lay-verType="tips" autocomplete="off" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <button class="layui-btn" lay-submit lay-filter="setmypass">确认修改</button>
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
    form.verify({
      oldpassword: function(value, item) {
        var error_message = '';
        $.ajax({
          type: "POST",
          url: "/members/form_verify",
          dataType: 'json',
          data: "type=oldpassword&value="+value,
          async: false,
          success: function(res) {
            if (res.code == 500) {
              error_message = res.data.error_message;
            }
          }
        });
        if (error_message) return error_message;
      },
      password: function(value, item) {
        var repassword = $("#repassword").val();
        if (value != repassword) return '新密码两次输入不一致';
      },
      repassword: function(value, item) {
        var password = $("#password").val();
        if (value != password) return '新密码两次输入不一致';
      },
    });
    form.on('submit(setmypass)', function(data) {
      $.ajax({
        type: "POST",
        url: "/members/password",
        dataType: 'json',
        data: data.field,
        success: function(res) {
          if (res.code == 200) {
            layer.msg('修改成功', {
              offset: '15px',
              icon: 1,
              time: 1000
            }, function() {
              location.reload();
            });

          } else {
            layer.msg('修改失败');
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
<?php $_smarty_tpl->_subTemplateRender('file:../library/footer.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
