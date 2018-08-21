<?php
/* Smarty version 3.1.32, created on 2018-08-16 08:08:37
  from 'E:\www\recipe\application\admin\views\recipe\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b753105de7643_07247159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75ca8cc782073050d5620a5d878234f30c50bd98' => 
    array (
      0 => 'E:\\www\\recipe\\application\\admin\\views\\recipe\\index.html',
      1 => 1534406913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b753105de7643_07247159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\www\\recipe\\application\\admin\\libraries\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
	<div class="layui-card">
		<form name="searchfrm" action="/recipe/index" method="GET" id="searchfrm" class="layui-form layui-card-header layuiadmin-card-header-auto">
			<!--
			<div class="layui-input-inline w120">
				<select name="category">
					<option value="">选择类型</option>
					<option value="title" <?php if ($_smarty_tpl->tpl_vars['ver']->value['category'] == 'title') {?>selected<?php }?>>标题关键字</option>
					<option value="ings" <?php if ($_smarty_tpl->tpl_vars['ver']->value['category'] == 'ings') {?>selected<?php }?>>食材关键字</option>
				</select>
			</div>
			<div class="layui-input-inline">：
			</div>
			<div class="layui-input-inline">
				<input type='text' name='category_val' value="<?php if ($_smarty_tpl->tpl_vars['ver']->value['category_val']) {
echo $_smarty_tpl->tpl_vars['ver']->value['category_val'];
}?>" class="layui-input" placeholder="关键字">
			</div>
		-->
			<div class="layui-input-inline w150">
				<select name="status">
					<option value="">选择发布状态</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['ver']->value['status'] == 1) {?>selected<?php }?>>发布中</option>
					<option value="-1" <?php if ($_smarty_tpl->tpl_vars['ver']->value['status'] == -1) {?>selected<?php }?>>待发布</option>
				</select>
			</div>
			<div class="layui-input-inline">发布时间：</div>
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
				
				<button class="layui-btn layuiadmin-btn-list" id="J_send"><i class="layui-icon layui-icon-release"></i>发布</button>
				<button class="layui-btn layuiadmin-btn-list" id="J_del"><i class="layui-icon layui-icon-delete"></i>删除</button>
				<button class="layui-btn layuiadmin-btn-list" onclick="iframe_box('/recipe/add','添加','1000','700');"><i class="layui-icon layui-icon-add-circle"></i>添加</button>
			</div>
			<table class="layui-table layui-form">
				<thead>
					<tr>
						<th class="w25"><input type="checkbox" lay-skin="primary" class="checkbox_all" lay-filter="checkbox_all"></th>
						<th>标题</th>
						<th>来源</th>
						<th>食材</th>
						<th>状态</th>
						<th>发布时间</th>
						<th>点赞量</th>
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
					<td><input type="checkbox" name="idboxs" lay-skin="primary" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['baidu_url'];?>
" target="_blank" style="color:red;">搜图</a></td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['sname']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['surl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['sname'];?>
</a><?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['ings'];?>
</td>
					<td>
					<div class="layui-table-cell laytable-cell-1-status">
					<?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 1) {?>
					 <button class="layui-btn layui-btn-xs">已发布</button>
					<?php } else { ?>
					<button class="layui-btn layui-btn-primary layui-btn-xs">待发布</button>
					<?php }?>
					</div>
					</td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['update_time']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['update_time'],'%Y-%m-%d %H:%I:%S');
}?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['like_num'];?>
</td>
					<td>
						<div class="layui-table-cell laytable-cell-2-8">
							<a class="layui-btn layui-btn-warm layui-btn-xs J_send" ><i class="layui-icon layui-icon-release"></i>发布</a>
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
		iframe_box('/recipe/add/id/'+_id,'编辑','1000','700');
	})

	$("#search").click(function() {
		$("#searchfrm").submit();
	});
	$("#J_del,.J_del").click(function() {
		var _this = $(this);
		if (_this.attr('id') == 'J_del') {
			var _ids  = $('input[name=idboxs]:checked').map(function(){
           	 	return $(this).val();
        	}).get().join(',');
		} else {
			var _ids = _this.parent().parent().parent().attr('data-id');
		}
		
	    if (!_ids){
	      layer.msg('请选择要操作的记录！');
	      return;
	    }
		layer.confirm('确定要删除吗？', { icon: 3, title: '删除提示' }, function(index) {
			
			$.ajax({
				type: "POST",
				url: "/recipe/del",
				dataType: 'json',
				data: "ids=" + _ids,
				success: function(res) {
					if (res.code == 200) {
						layer.msg('删除成功', {
							offset: 'auto',
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
	});

	$("#J_send,.J_send").click(function() {
		var _this = $(this);
		if (_this.attr('id') == 'J_send') {
			var _ids  = $('input[name=idboxs]:checked').map(function(){
           	 	return $(this).val();
        	}).get().join(',');
		} else {
			var _ids = _this.parent().parent().parent().attr('data-id');
		}
		
	    if (!_ids){
	      layer.msg('请选择要操作的记录！');
	      return;
	    }
		layer.confirm('确定要发布吗？', { icon: 3, title: '发布提示' }, function(index) {
			
			$.ajax({
				type: "POST",
				url: "/recipe/send",
				dataType: 'json',
				data: "ids=" + _ids,
				success: function(res) {
					if (res.code == 200) {
						layer.msg('发布成功', {
							offset: 'auto',
							icon: 1,
							time: 1000
						}, function() {
							location.reload();
						});
					} else {
						layer.msg('发布失败!');
					}
				},
				error: function() {
					layer.msg('网络异常，操作失败!');
				}
			});
		})
	});
})
<?php echo '</script'; ?>
>
 <?php $_smarty_tpl->_subTemplateRender('file:../library/footer.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
