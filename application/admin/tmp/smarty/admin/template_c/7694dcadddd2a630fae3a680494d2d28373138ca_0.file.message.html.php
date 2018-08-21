<?php
/* Smarty version 3.1.32, created on 2018-08-02 06:03:21
  from 'E:\www\w.com\application\admin\views\message\message.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b629ea924b632_78378928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7694dcadddd2a630fae3a680494d2d28373138ca' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\message\\message.html',
      1 => 1533189792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b629ea924b632_78378928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\www\\w.com\\application\\admin\\libraries\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
	<div class="layui-card">
		<form name="searchfrm" action="/message/index" method="GET" id="searchfrm" class="layui-form layui-card-header layuiadmin-card-header-auto">
			
			<div class="layui-input-inline w150">
				<select name="is_public">
					<option value="">消息类型</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['ver']->value['is_public'] == 1) {?>selected<?php }?>>系统</option>
					<option value="-1" <?php if ($_smarty_tpl->tpl_vars['ver']->value['is_public'] == -1) {?>selected<?php }?>>私信</option>
				</select>
			</div>
			<div class="layui-input-inline w150">
				<select name="poster_id" lay-search>
					<option value="">选择发送人</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['members']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 1 && $_smarty_tpl->tpl_vars['item']->value['is_del'] == 0) {?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['ver']->value['poster_id'] == $_smarty_tpl->tpl_vars['item']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['account'];?>
</option>
					<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<div class="layui-input-inline w150">
				<select name="receive_id" lay-search>
					<option value="">选择接收人</option>
					
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['members']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 1 && $_smarty_tpl->tpl_vars['item']->value['is_del'] == 0) {?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['ver']->value['receive_id'] == $_smarty_tpl->tpl_vars['item']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['account'];?>
</option>
					<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				</select>
			</div>
			<div class="layui-input-inline">发送时间：</div>
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
				<button class="layui-btn layuiadmin-btn-list" onclick="iframe_box('/message/add','添加消息','800','600');">添加消息</button>
			</div>
			<table class="layui-table">
				<thead>
					<tr>
						<th class="w25">ID</th>
						<th>标题</th>
						<th>消息类型</th>
						<th>发送人</th>
						<th>接收人</th>
						<th>是否已发送</th>
						<th>发送时间</th>
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
					<td><a href=""><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['poster'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['receiver'];?>
</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['is_send']) {?><span class="color-green">已发送</span><?php } else { ?>未发送<?php }?>
					</td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['send_time']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['send_time'],'%Y-%m-%d %H:%I:%S');
}?></td>
					
					<td>
						<div class="layui-table-cell laytable-cell-2-8">
							<?php if (!$_smarty_tpl->tpl_vars['item']->value['is_send']) {?>
							<a class="layui-btn layui-btn-warm layui-btn-xs J_send" ><i class="layui-icon layui-icon-release"></i>发送</a>
							<a class="layui-btn layui-btn-normal layui-btn-xs J_edit" ><i class="layui-icon layui-icon-edit" ></i>编辑</a>
							<?php }?>
							<a class="layui-btn layui-btn-danger layui-btn-xs J_del" ><i class="layui-icon layui-icon-delete"></i>删除</a>
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
	$(".J_send").click(function() {
		var _this = $(this);
		layer.confirm('确定要发送吗？', { icon: 3, title: '删除提示' }, function(index) {
			var _id = _this.parent().parent().parent().attr('data-id');
			$.ajax({
				type: "POST",
				url: "/message/send",
				dataType: 'json',
				data: "id=" + _id,
				success: function(res) {
					if (res.code == 200) {
						layer.msg('发送成功', {
							offset: '15px',
							icon: 1,
							time: 1000
						}, function() {
							location.reload();
						});
					} else {
						layer.msg('发送失败!');
					}
				},
				error: function() {
					layer.msg('网络异常，操作失败!');
				}
			});
		})
	})

	$(".J_edit").click(function() {
		var _id = $(this).parent().parent().parent().attr('data-id');
		iframe_box('/message/add/id/' + _id, '编辑', '800', '600');
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
				url: "/message/del",
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
