<?php
/* Smarty version 3.1.32, created on 2018-08-03 01:51:14
  from 'E:\www\w.com\application\admin\views\members\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b63b5123822a1_83019941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '058866e3f1f099bb9d8754bab37eea5d67b5a366' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\members\\index.html',
      1 => 1533189881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b63b5123822a1_83019941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\www\\w.com\\application\\admin\\libraries\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
	<div class="layui-card">
		<form name="searchfrm" action="/members/index" method="GET" id="searchfrm" class="layui-form layui-card-header layuiadmin-card-header-auto">
			<div class="layui-input-inline w120">
				<select name="category">
					<option value="">选择类型</option>
					<option value="account" <?php if ($_smarty_tpl->tpl_vars['ver']->value['category'] == 'account') {?>selected<?php }?>>帐号</option>
					<option value="name" <?php if ($_smarty_tpl->tpl_vars['ver']->value['category'] == 'name') {?>selected<?php }?>>姓名</option>
					<option value="mobile" <?php if ($_smarty_tpl->tpl_vars['ver']->value['category'] == 'mobile') {?>selected<?php }?>>手机</option>
					<option value="email" <?php if ($_smarty_tpl->tpl_vars['ver']->value['category'] == 'email') {?>selected<?php }?>>邮箱</option>
				</select>
			</div>
			<div class="layui-input-inline">：
			</div>
			<div class="layui-input-inline">
				<input type='text' name='category_val' value="<?php if ($_smarty_tpl->tpl_vars['ver']->value['category_val']) {
echo $_smarty_tpl->tpl_vars['ver']->value['category_val'];
}?>" class="layui-input" placeholder="关键字">
			</div>
			<div class="layui-input-inline w150">
				<select name="group_id">
					<option value="">选择权限组</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['ver']->value['group_id'] == $_smarty_tpl->tpl_vars['item']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<div class="layui-input-inline">入职时间：</div>
			<div class="layui-input-inline">
				<input type='text' name='date_start' value="<?php echo $_smarty_tpl->tpl_vars['ver']->value['date_start'];?>
" class="layui-input layui-date">
			</div>
			<div class="layui-input-inline">
				-
			</div>
			<div class="layui-input-inline">
				<input type='text' name='date_end' value="<?php echo $_smarty_tpl->tpl_vars['ver']->value['date_end'];?>
" class="layui-input layui-date">
			</div>
			<div class="layui-input-inline">
				<button class="layui-btn layuiadmin-btn-list" id="search">
					<i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
				</button>
				<button class="layui-btn layuiadmin-btn-list" type="reset">
					重置
				</button>
			</div>
		</form>
		<div class="layui-card-body">
			<div style="padding-bottom: 10px;">
				<button class="layui-btn layuiadmin-btn-list" onclick="iframe_box('/members/add','添加','800','600');">添加</button>
			</div>
			<table class="layui-table">
				<thead>
					<tr>
						<th class="wb5">ID</th>
						<th>帐号</th>
						<th>姓名</th>
						<th>手机</th>
						<th>邮箱</th>
						<th>入职时间</th>
						<th>权限组</th>
						<th class="wb10">操作</th>
					</tr>
				</thead>
				<?php if ($_smarty_tpl->tpl_vars['result']->value['rows']) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value['rows'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
				<tr data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['account'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['entry_time']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['entry_time'],'%Y-%m-%d');
}?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['group_name'];?>
</td>
					<td>
						<div class="layui-table-cell laytable-cell-2-8">
							<a class="layui-btn layui-btn-normal layui-btn-xs J_edit" lay-event="edit"><i class="layui-icon layui-icon-edit" ></i>编辑</a>
							<a class="layui-btn layui-btn-danger layui-btn-xs J_del" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a>
						</div>
					</td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
			</table>
			<div class="clearfix">
				<div class="fn-left">
				</div>
				<div class="fn-right clearfix" id="page" total="<?php echo $_smarty_tpl->tpl_vars['result']->value['count'];?>
" curr="<?php echo $_smarty_tpl->tpl_vars['result']->value['page'];?>
" limit="<?php echo $_smarty_tpl->tpl_vars['result']->value['pagesize'];?>
">
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
	$(".J_edit").click(function() {
		var _id = $(this).parent().parent().parent().attr('data-id');
		iframe_box('/members/add/id/' + _id, '编辑', '800', '600');
	})

	$("#search").click(function() {
		$("#searchfrm").submit();
	});
	$(".J_del").click(function() {
		var _this = $(this);
		layer.confirm('确定要删除吗？', { icon: 3, title: '删除提示' }, function(index) {
			var _id = _this.parent().parent().parent().attr('data-id');
			$.ajax({
				type: "POST",
				url: "/members/del",
				dataType: 'json',
				data: "id=" + _id,
				success: function(res) {
					if (res.code == 200) {
						layer.msg('删除成功', {
							offset: '15px',
							icon: 1,
							time: 1000
						}, function() {
							location.reload();
						});
					} else {
						layer.msg('删除失败!');
					}
				},
				error: function() {
					layer.msg('网络异常，操作失败!');
				}
			});
		})
	})
})
<?php echo '</script'; ?>
>
 <?php $_smarty_tpl->_subTemplateRender('file:../library/footer.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
