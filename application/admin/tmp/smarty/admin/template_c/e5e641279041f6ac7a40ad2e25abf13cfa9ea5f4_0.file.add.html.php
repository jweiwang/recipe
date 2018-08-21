<?php
/* Smarty version 3.1.32, created on 2018-07-27 08:01:44
  from 'E:\www\w.com\application\admin\views\moduels_group\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5ad1686aa942_97496882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5e641279041f6ac7a40ad2e25abf13cfa9ea5f4' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\moduels_group\\add.html',
      1 => 1532678486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b5ad1686aa942_97496882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
	<div class="layui-card">
		<div class="layui-card-body" style="padding: 15px;">
			<div class="layui-form" lay-filter="layuiadmin-form-role" id="layuiadmin-form-role" style="padding: 20px 30px 0 0;">
				<div class="layui-form-item">
					<label class="layui-form-label"><span class="color-red">*</span>角色</label>
					<div class="layui-input-block">
						<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
" autocomplete="off" class="layui-input" lay-verify="required">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">权限范围</label>
					<div class="layui-input-block">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['moduels']->value, 'item1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item1']->value) {
?>
						<fieldset class="layui-elem-field site-demo-button">
							<legend>
								<input type="checkbox" name="moduels[]" lay-skin="primary" title="<?php echo $_smarty_tpl->tpl_vars['item1']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item1']->value['id'];?>
" lay-filter="J_select" <?php echo $_smarty_tpl->tpl_vars['item1']->value['checked'];?>
>
							</legend>
							<div class="fn-p-10">
								<?php if ($_smarty_tpl->tpl_vars['item1']->value['child']) {?> 
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value['child'], 'item2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['item2']->value['child']) {?>
								<fieldset class="layui-elem-field site-demo-button">
									<legend>
										<input type="checkbox" name="moduels[]" lay-skin="primary" title="<?php echo $_smarty_tpl->tpl_vars['item2']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item2']->value['id'];?>
" lay-filter="J_select" <?php echo $_smarty_tpl->tpl_vars['item2']->value['checked'];?>
>
									</legend>
									<div class="fn-p-10">
										<?php if ($_smarty_tpl->tpl_vars['item2']->value['child']) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item2']->value['child'], 'item3');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
?>
										<input type="checkbox" name="moduels[]" lay-skin="primary" title="<?php echo $_smarty_tpl->tpl_vars['item3']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item3']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['item3']->value['checked'];?>
> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
									</div>
								</fieldset>
								<?php } else { ?>
								<input type="checkbox" name="moduels[]" lay-skin="primary" title="<?php echo $_smarty_tpl->tpl_vars['item2']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item2']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['item2']->value['checked'];?>
>
								<?php }?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
								<?php }?>
							</div>
						</fieldset>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">具体描述</label>
					<div class="layui-input-block">
						<textarea type="text" name="des"  class="layui-textarea"><?php echo $_smarty_tpl->tpl_vars['info']->value['des'];?>
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
				url: "/moduels_group/add",
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

		form.on('checkbox(J_select)', function(data){
		  	$(data.elem).parent().next().find('input').prop('checked', $(this).prop('checked'));
		  	form.render('checkbox');;
		});   
	});

});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:../library/footer.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
