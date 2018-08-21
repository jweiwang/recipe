<?php
/* Smarty version 3.1.32, created on 2018-07-30 02:02:03
  from 'E:\www\w.com\application\admin\views\attribute\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5e719be1f4f8_50126333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914f0dd954abe00c06db43d62e7ad2e2740fee15' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\attribute\\add.html',
      1 => 1532916118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b5e719be1f4f8_50126333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-card-body" style="padding: 15px;">
            <form class="layui-form fn-mt-20" action="">
                <div class="layui-form-item">
                    <label class="layui-form-label"><span class="color-red">*</span>属性/名称：</label>
                    <div class="layui-input-block">
                        <input type="text" name="attr_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['attr_name'];?>
" class="layui-input" autocomplete="off" lay-verify="required">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">排序：</label>
                    <div class="layui-input-block">
                        <input type="text" name="sort" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
" />
                    </div>
                </div>
                <div class="layui-form-item layui-layout-admin">
                    <div class="layui-input-block">
                        <div class="layui-footer" style="left: 0;">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
                            <input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['parent_id']->value;?>
">
                            <button class="layui-btn" lay-submit lay-filter="formsubmit">立即提交</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php echo '<script'; ?>
>
$(document).ready(function() {
    layui.use('form', function() {
        var form = layui.form;
        form.on('submit(formsubmit)', function(data) {
            data.elem.disabled = true;
            data.elem.innerHTML = '正在提交..';

            $.ajax({
                type: "POST",
                url: "/attribute/add",
                dataType: 'json',
                data: data.field,
                success: function(res) {
                    if (res.code == 200) {
                        layer.msg('保存成功', {
                            offset: '15px',
                            icon: 1,
                            time: 1000
                        }, function() {
                            parent.location.reload();
                            var index = parent.layer.getFrameIndex(window.name);
                            parent.layer.close(index)
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
