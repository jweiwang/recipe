<?php
/* Smarty version 3.1.32, created on 2018-08-20 02:33:53
  from 'E:\www\recipe\application\admin\views\configure\website.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7a28915a4db8_88791096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8deed44472e16dad55cb74a78493a8603a99b33a' => 
    array (
      0 => 'E:\\www\\recipe\\application\\admin\\views\\configure\\website.html',
      1 => 1534732423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b7a28915a4db8_88791096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">网站设置</div>
        <div class="layui-card-body" pad15>
          <div class="layui-form" wid100 lay-filter="">
            <div class="layui-form-item">
              <label class="layui-form-label">网站名称</label>
              <div class="layui-input-block">
                <input type="text" name="configure[sitename]" value="<?php echo $_smarty_tpl->tpl_vars['configure']->value['sitename'];?>
" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">网站域名</label>
              <div class="layui-input-block">
                <input type="text" name="configure[domain]" value="<?php echo $_smarty_tpl->tpl_vars['configure']->value['domain'];?>
" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">最大文件上传</label>
              <div class="layui-input-inline" style="width: 80px;">
                <input type="text" name="configure[upload_size]" lay-verify="number" value="<?php echo $_smarty_tpl->tpl_vars['configure']->value['upload_size'];?>
" class="layui-input">
              </div>
              <div class="layui-input-inline layui-input-company">KB</div>
              <div class="layui-form-mid layui-word-aux">提示：1 M = 1024 KB</div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">上传文件类型</label>
              <div class="layui-input-block">
                <input type="text" name="configure[upload_ext]" value="<?php echo $_smarty_tpl->tpl_vars['configure']->value['upload_ext'];?>
" class="layui-input">
              </div>
            </div>
       
            <div class="layui-form-item layui-form-text">
              <label class="layui-form-label">版权信息</label>
              <div class="layui-input-block">
                <textarea name="configure[copyright]" class="layui-textarea"><?php echo $_smarty_tpl->tpl_vars['configure']->value['copyright'];?>
</textarea>
              </div>
            </div>
             <div class="layui-form-item layui-form-text">
              <label class="layui-form-label">icp</label>
              <div class="layui-input-block">
                <textarea name="configure[icp]" class="layui-textarea"><?php echo $_smarty_tpl->tpl_vars['configure']->value['icp'];?>
</textarea>
              </div>
            </div>
            <div class="layui-form-item">
              <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="set_website">确认保存</button>
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
   
    form.on('submit(set_website)', function(data) {
      $.ajax({
        type: "POST",
        url: "/configure/website",
        dataType: 'json',
        data: data.field,
        success: function(res) {
          if (res.code == 200) {
            layer.msg('保存成功', {
              offset: 'auto',
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
<?php $_smarty_tpl->_subTemplateRender('file:../library/footer.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
