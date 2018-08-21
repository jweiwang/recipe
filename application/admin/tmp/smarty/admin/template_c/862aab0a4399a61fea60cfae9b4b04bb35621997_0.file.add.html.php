<?php
/* Smarty version 3.1.32, created on 2018-08-01 08:25:09
  from 'E:\www\w.com\application\admin\views\message\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b616e659c26b5_33681897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '862aab0a4399a61fea60cfae9b4b04bb35621997' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\message\\add.html',
      1 => 1533111904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b616e659c26b5_33681897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link href="/www/admin/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<?php echo '<script'; ?>
 type="text/javascript" src="/www/admin/umeditor/third-party/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/www/admin/umeditor/umeditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/www/admin/umeditor/umeditor.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/www/admin/umeditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>

<style type="text/css">
.edui-container{width:100% !important;}
</style>

<div class="layui-fluid">
	<div class="layui-card">
		<div class="layui-card-body" style="padding: 15px;">
			<form class="layui-form fn-mt-20" action="">
				<div class="layui-form-item">
					<label class="layui-form-label"><span class="color-red">*</span>标题</label>
					<div class="layui-input-block">
						<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
" class="layui-input" autocomplete="off" lay-verify="required">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">消息类型</label>
					<div class="layui-input-block">
						<input type="radio" name="is_public" lay-filter="is_public" value="1" title="通知" <?php if ($_smarty_tpl->tpl_vars['info']->value['is_public'] == 1) {?>checked<?php }?>>
						<input type="radio" name="is_public" lay-filter="is_public" value="0" title="私信" <?php if ($_smarty_tpl->tpl_vars['info']->value['is_public'] != 1) {?>checked<?php }?>>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">接收人</label>
					<div class="layui-input-block">
						<select name="receive_id" lay-search id="receive_id" <?php if ($_smarty_tpl->tpl_vars['info']->value['is_public'] == 1) {?>disabled<?php }?>>
							<option value="">选择帐号</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['members']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['receive_id'] == $_smarty_tpl->tpl_vars['item']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['account'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">发送内容</label>
					<div class="layui-input-block">
						<textarea name="content" class="layui-textarea" id="myEditor" style="height:180px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
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
	var um = UM.getEditor('myEditor', { zIndex: 1 });
	layui.use('form', function() {
		var form = layui.form;

		form.on('radio(is_public)', function(data){
		  	if (data.value == 1) {
		  		$('#receive_id').attr("disabled",true); 
		  	} else {
		  		$('#receive_id').removeAttr("disabled"); 
		  	}
		  	form.render('select');
		});  
		form.on('submit(formsubmit)', function(data) {
			data.elem.disabled = true;
			data.elem.innerHTML = '正在提交..';
			$.ajax({
				type: "POST",
				url: "/message/add",
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
