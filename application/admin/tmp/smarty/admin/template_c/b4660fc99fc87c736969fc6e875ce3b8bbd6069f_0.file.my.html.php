<?php
/* Smarty version 3.1.32, created on 2018-07-30 03:10:41
  from 'E:\www\w.com\application\admin\views\members\my.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5e81b1f36829_80608211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4660fc99fc87c736969fc6e875ce3b8bbd6069f' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\members\\my.html',
      1 => 1532920237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b5e81b1f36829_80608211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\www\\w.com\\application\\admin\\libraries\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">设置我的资料</div>
        <div class="layui-card-body" pad15>
          <div class="layui-form" lay-filter="">
            <div class="layui-form-item">
              <label class="layui-form-label">用户名</label>
              <div class="layui-input-inline">
                <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['loginUser']->value['account'];?>
" readonly class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">不可修改。一般用于后台登入名</div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">姓名</label>
              <div class="layui-input-inline">
                <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['loginUser']->value['name'];?>
" readonly class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">管理员录入，不可更改</div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">性别</label>
              <div class="layui-input-block">
                <input type="radio" name="sex" value="1" title="男" <?php if ($_smarty_tpl->tpl_vars['loginUser']->value['sex'] == 1) {?>checked<?php }?>>
                <input type="radio" name="sex" value="2" title="女" <?php if ($_smarty_tpl->tpl_vars['loginUser']->value['sex'] == 2) {?>checked<?php }?>>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">手机</label>
              <div class="layui-input-inline">
                <input type="text" name="mobile" value="<?php echo $_smarty_tpl->tpl_vars['loginUser']->value['mobile'];?>
"  autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">邮箱</label>
              <div class="layui-input-inline">
                <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['loginUser']->value['email'];?>
"  autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">入职时间</label>
              <div class="layui-input-inline">
                <input type="text" name="entry_time" value="<?php if ($_smarty_tpl->tpl_vars['loginUser']->value['entry_time']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['loginUser']->value['entry_time'],'%Y-%m-%d');
}?>"  readonly autocomplete="off" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">管理员录入，不可更改</div>
            </div>
            <div class="layui-form-item layui-form-text">
              <label class="layui-form-label">工作职责</label>
              <div class="layui-input-block">
                <textarea name="workdo" placeholder="请输入内容" class="layui-textarea"><?php echo $_smarty_tpl->tpl_vars['loginUser']->value['workdo'];?>
</textarea>
              </div>
            </div>
            <div class="layui-form-item">
              <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="setmyinfo">确认修改</button>
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
   
    form.on('submit(setmyinfo)', function(data) {
      $.ajax({
        type: "POST",
        url: "/members/my",
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
