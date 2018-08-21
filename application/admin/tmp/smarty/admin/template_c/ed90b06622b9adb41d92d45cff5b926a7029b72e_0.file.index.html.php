<?php
/* Smarty version 3.1.32, created on 2018-07-31 01:39:24
  from 'E:\www\w.com\application\admin\views\moduels\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5fbdccac05f1_52654626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed90b06622b9adb41d92d45cff5b926a7029b72e' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\moduels\\index.html',
      1 => 1533000746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b5fbdccac05f1_52654626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
	<div class="layui-card">
		<div class="layui-card-body">
			<div style="padding-bottom: 10px;">
				<button class="layui-btn layuiadmin-btn-role" onclick="iframe_box('/moduels/add','添加','800','650');">添加</button>
			</div>
			<table class="layui-table" lay-skin="line" lay-filter="test">
				<thead>
					<tr>
						<th>一级</th>
						<th>二级</th>
						<th>三级</th>
						<th>排序</th>
						<th>是否菜单</th>
						<th>图标</th>
						<th>操作</th>
					</tr>
				</thead>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? FALSE : $tmp)) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'item', false, 'id', 'foo', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
				<tr data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
					<td></td>
					<td></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['sort'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['is_menu'] == 1) {?><span class="color-green">是</span><?php } else { ?><span class="color-red">否</span><?php }?></td>
					<td><i class="layui-icon <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"></i></td>
					<td>
						<div class="layui-table-cell laytable-cell-2-8">
							<a class="layui-btn layui-btn-normal layui-btn-xs J_edit" lay-event="edit"><i class="layui-icon layui-icon-edit" ></i>编辑</a> <?php if (!(($tmp = @$_smarty_tpl->tpl_vars['item']->value['child'])===null||$tmp==='' ? FALSE : $tmp)) {?>
							<a class="layui-btn layui-btn-danger layui-btn-xs J_del" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> <?php }?>
						</div>
					</td>
				</tr>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['item']->value['child'])===null||$tmp==='' ? FALSE : $tmp)) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['child'], 'item1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item1']->value) {
?>
				<tr data-id="<?php echo $_smarty_tpl->tpl_vars['item1']->value['id'];?>
">
					<td></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item1']->value['name'];?>
</td>
					<td></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item1']->value['sort'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['item1']->value['is_menu'] == 1) {?><span class="color-green">是</span><?php } else { ?><span class="color-red">否</span><?php }?></td>
					<td><i class="layui-icon <?php echo $_smarty_tpl->tpl_vars['item1']->value['icon'];?>
"></i></td>
					<td>
						<div class="layui-table-cell laytable-cell-2-8">
							<a class="layui-btn layui-btn-normal layui-btn-xs J_edit" lay-event="edit"><i class="layui-icon layui-icon-edit" ></i>编辑</a> <?php if (!(($tmp = @$_smarty_tpl->tpl_vars['item1']->value['child'])===null||$tmp==='' ? FALSE : $tmp)) {?>
							<a class="layui-btn layui-btn-danger layui-btn-xs J_del" lay-event="del"><i class="layui-icon layui-icon-delete"></i>删除</a> <?php }?>
						</div>
					</td>
				</tr>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['item1']->value['child'])===null||$tmp==='' ? FALSE : $tmp)) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value['child'], 'item2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
?>
				<tr data-id="<?php echo $_smarty_tpl->tpl_vars['item2']->value['id'];?>
">
					<td></td>
					<td></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item2']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item2']->value['sort'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['item2']->value['is_menu'] == 1) {?><span class="color-green">是</span><?php } else { ?><span class="color-red">否</span><?php }?></td>
					<td><i class="layui-icon <?php echo $_smarty_tpl->tpl_vars['item2']->value['icon'];?>
"></i></td>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
			</table>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
$(function() {
	$(".J_edit").click(function() {
		var _id = $(this).parent().parent().parent().attr('data-id');
		iframe_box('/moduels/add/id/' + _id, '编辑', '800', '650');
	})
	$(".J_del").click(function() {
		var _this = $(this);
		layer.confirm('删除后不可恢复，确定要删除吗？', { icon: 3, title: '删除提示' }, function(index) {
			var _id = _this.parent().parent().parent().attr('data-id');
			$.ajax({
				type: "POST",
				url: "/moduels/del",
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
