<?php
/* Smarty version 3.1.32, created on 2018-08-20 06:02:29
  from 'E:\www\recipe\application\admin\views\attribute\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7a5975b57895_40822721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd15df54b41193ede4e0cde4c2203fda4cd4bdbe3' => 
    array (
      0 => 'E:\\www\\recipe\\application\\admin\\views\\attribute\\index.html',
      1 => 1533295383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b7a5975b57895_40822721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-card-body">
            <div style="padding-bottom: 10px;">
                <button class="layui-btn layuiadmin-btn-list" onclick="iframe_box('/attribute/add/parent_id/<?php echo $_smarty_tpl->tpl_vars['parent_id']->value;?>
','添加','600','400');">添加</button>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
            <div class="clearfix fn-p-10">
                <span class="layui-breadcrumb">
                    <a href="/attribute/index/parent_id/0">列表</a>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parents']->value, 'item', false, NULL, 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null)) {?>
                     <a><cite><?php echo $_smarty_tpl->tpl_vars['item']->value['attr_name'];?>
</cite></a>
                    <?php } else { ?>
                     <a href="/attribute/index/parent_id/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['attr_name'];?>
</a>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </span>
            </div>
            <?php }?>
            <table class="layui-table"  lay-skin="nob">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'item', false, 'id', 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
                <tr data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style="border-bottom: 1px solid #e6e6e6;">
                    <td class="level1 li-left"><?php echo $_smarty_tpl->tpl_vars['item']->value['attr_name'];?>
</td>
                    <td style="text-align: right;">
                        <div class="layui-table-cell laytable-cell-2-8">
                            <a class="layui-btn layui-btn-normal layui-btn-xs J_edit"><i class="layui-icon layui-icon-edit" ></i>编辑</a>
                            <a class="layui-btn layui-btn-danger layui-btn-xs J_del" ><i class="layui-icon layui-icon-delete"></i>删除</a>
                             <a class="layui-btn layui-btn-danger layui-btn-xs " href="/attribute/index/parent_id/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="layui-icon layui-icon-set-fill"></i>属性</a>
                        </div>
                    </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
$(function() {
    $(".J_del").click(function() {
        var _this = $(this);
        layer.confirm('删除后不可恢复，确定要删除吗？', { icon: 3, title: '删除提示' }, function(index) {
            var _id = _this.parent().parent().parent().attr('data-id');
            $.ajax({
                type: "POST",
                url: "/attribute/del",
                dataType: 'json',
                data: "id=" + _id,
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
    })
})
<?php echo '</script'; ?>
>
 <?php $_smarty_tpl->_subTemplateRender('file:../library/footer.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
