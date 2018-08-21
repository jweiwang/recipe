<?php
/* Smarty version 3.1.32, created on 2018-08-03 01:51:30
  from 'E:\www\w.com\application\admin\views\moduels_group\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b63b5229e35d2_98914259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4aa748e5d50b4b3e586c0e43cd5162b99c24ce8' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\moduels_group\\index.html',
      1 => 1533189836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b63b5229e35d2_98914259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
	<div class="layui-card">
		<form name="searchfrm" action="/moduels_group/index" method="GET" id="searchfrm" class="layui-form layui-card-header layuiadmin-card-header-auto">
			<div class="layui-input-inline">权限组：</div>
			<div class="layui-input-inline">
				<input type='text' name='name' value="<?php if ($_smarty_tpl->tpl_vars['ver']->value['name']) {
echo $_smarty_tpl->tpl_vars['ver']->value['name'];
}?>" class="layui-input">
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
				<button class="layui-btn layuiadmin-btn-list" onclick="iframe_box('/moduels_group/add','添加角色','800','600');">添加角色</button>
			</div>
			<table class="layui-table">
				<thead>
					<tr>
						<th class="wb5">ID</th>
						<th class="wb15">权限组名称</th>
						<th>关联账户</th>
						<th>描述</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['members'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['des'];?>
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
				<div class="fn-left clearfix">
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

	$("#search").click(function() {
		$("#searchfrm").submit();
	});
	$(".J_edit").click(function() {
		var _id = $(this).parent().parent().parent().attr('data-id');
		iframe_box('/moduels_group/add/id/' + _id, '编辑', '800', '600');
	})
	$(".J_del").click(function() {
		var _this = $(this);
		layer.confirm('删除后不可恢复，确定要删除吗？', { icon: 3, title: '删除提示' }, function(index) {
			var _id = _this.parent().parent().parent().attr('data-id');
			$.ajax({
				type: "POST",
				url: "/moduels_group/del",
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
