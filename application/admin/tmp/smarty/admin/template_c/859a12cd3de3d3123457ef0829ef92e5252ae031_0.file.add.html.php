<?php
/* Smarty version 3.1.32, created on 2018-07-30 03:08:38
  from 'E:\www\w.com\application\admin\views\members\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5e8136aa7644_30565222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '859a12cd3de3d3123457ef0829ef92e5252ae031' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\members\\add.html',
      1 => 1532919524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b5e8136aa7644_30565222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\www\\w.com\\application\\admin\\libraries\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
	<div class="layui-card">
		<div class="layui-card-body" style="padding: 15px;">
			<form class="layui-form fn-mt-20" action="">
				<div class="layui-form-item">
					<label class="layui-form-label"><span class="color-red">*</span>帐号</label>
					<div class="layui-input-block">
						<input type="text" name="account" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['account'];?>
" class="layui-input" autocomplete="off" lay-verify="required|account">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">姓名</label>
					<div class="layui-input-block">
						<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">性别</label>
					<div class="layui-input-block">
						<input type="radio" name="sex" value="1" title="男" checked>
						<input type="radio" name="sex" value="2" title="女" <?php if ($_smarty_tpl->tpl_vars['info']->value['sex'] == 2) {?>checked<?php }?>>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">手机</label>
					<div class="layui-input-block">
						<input type="text" name="mobile" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mobile'];?>
" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">邮箱</label>
					<div class="layui-input-block">
						<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">入职时间</label>
					<div class="layui-input-block">
						<input type="text" name="entry_time" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['entry_time']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['entry_time'],'%Y-%m-%d');
}?>" class="layui-input layui-date">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label"><span class="color-red">*</span>权限组</label>
					<div class="layui-input-block">
						<select name="group_id" lay-search lay-verify="required">
							<option value="">选择权限组</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['group_id'] == $_smarty_tpl->tpl_vars['item']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">工作职责</label>
					<div class="layui-input-block">
						<textarea type="text" name="workdo" class="layui-textarea"><?php echo $_smarty_tpl->tpl_vars['info']->value['workdo'];?>
</textarea>
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
		form.verify({
			account: function(value, item) {
				var error_message = '';
				$.ajax({
					type: "POST",
					url: "/members/form_verify",
					dataType: 'json',
					data: "type=account&value=" + value + "&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
",
					async: false,
					success: function(res) {
						if (res.code == 500) {
							error_message = res.data.error_message;
						}
					}
				});
				if (error_message) return error_message;
			},
		});
		form.on('submit(formsubmit)', function(data) {
			data.elem.disabled = true;
			data.elem.innerHTML = '正在提交..';
			$.ajax({
				type: "POST",
				url: "/members/add",
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
