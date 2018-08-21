<?php
/* Smarty version 3.1.32, created on 2018-07-31 01:38:41
  from 'E:\www\w.com\application\admin\views\moduels\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5fbda14f0af1_53273445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55317149965b12b32826c50ccb39ea1037f0a718' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\moduels\\add.html',
      1 => 1532677320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b5fbda14f0af1_53273445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid" >
    <div class="layui-card">
    
    <div class="layui-card-body" style="padding: 15px;">

	<form id="form" class="layui-form" >
        <div class="layui-form-item">
            <label class="layui-form-label"><span class="color-red">*</span>权限名称：</label>
            <div class="layui-input-block">
                 <input type="text" name="name" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
" lay-verify="required"/>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">上级：</label>
            <div class="layui-input-block">
                <select class="layui-select" name="parent_id" >
                    <option value="">选择上级栏目</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parent']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['parent_id'] == $_smarty_tpl->tpl_vars['row']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['child']) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value['child'], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['parent_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>selected<?php }?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">目录：</label>
            <div class="layui-input-block">
                <input type="text" name="directory" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['directory'];?>
" />
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">类：</label>
            <div class="layui-input-block">
                <input type="text" name="class" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['class'];?>
" />
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">方法：</label>
            <div class="layui-input-block">
                <input type="text" name="method" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['method'];?>
" />
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"> 默认方法：</label>
            <div class="layui-input-block">
                <input type="text" name="index" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['index'];?>
" />
            </div>
        </div>
         <div class="layui-form-item">
            <label class="layui-form-label"> 排序：</label>
            <div class="layui-input-block">
                <input type="text" name="sort" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
" />
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"> 图标：</label>
            <div class="layui-input-block">
                <input type="text" name="icon" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['icon'];?>
" />
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"> <span class="color-red">*</span>是否菜单：</label>
            <div class="layui-input-block">
                <input name="is_menu" type="radio" value="1" checked title="是">
                <input name="is_menu" type="radio" value="2" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['info']->value['status'])===null||$tmp==='' ? FALSE : $tmp)) {
if ($_smarty_tpl->tpl_vars['info']->value['status'] == 2) {?>checked<?php }
}?> title="否">
            </div>
        </div>
        <div class="layui-form-item layui-layout-admin">
            <div class="layui-input-block">
                <div class="layui-footer" style="left: 0;">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
                    <button class="layui-btn" lay-submit lay-filter="formsubmit">立即提交</button>
                </div>
            </div>
        </div>
    </form>
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
                url: "/moduels/add",
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
