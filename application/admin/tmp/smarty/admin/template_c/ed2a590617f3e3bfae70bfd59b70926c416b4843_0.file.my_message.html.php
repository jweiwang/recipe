<?php
/* Smarty version 3.1.32, created on 2018-08-02 09:17:35
  from 'E:\www\w.com\application\admin\views\message\my_message.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b62cc2fa8b0f5_32900504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed2a590617f3e3bfae70bfd59b70926c416b4843' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\message\\my_message.html',
      1 => 1533201137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b62cc2fa8b0f5_32900504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\www\\w.com\\application\\admin\\libraries\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="layui-fluid" id="LAY-app-message">
  <div class="layui-card">
    <div class="layui-tab layui-tab-brief layui-card-body">
      <ul class="layui-tab-title">
        <li <?php if ($_smarty_tpl->tpl_vars['public']->value == 'all') {?>class="layui-this" <?php }?>>
          <a href="/message/my/public/all">全部消息<?php if ($_smarty_tpl->tpl_vars['count']->value['all']) {?><span class="layui-badge"><?php echo $_smarty_tpl->tpl_vars['count']->value['all'];?>
</span><?php }?></a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['public']->value == 'system') {?>class="layui-this" <?php }?>>
          <a href="/message/my/public/system">通知<?php if ($_smarty_tpl->tpl_vars['count']->value['system']) {?><span class="layui-badge"><?php echo $_smarty_tpl->tpl_vars['count']->value['system'];?>
</span><?php }?></a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['public']->value == 'letter') {?>class="layui-this" <?php }?>>
          <a href="/message/my/public/letter">私信<?php if ($_smarty_tpl->tpl_vars['count']->value['letter']) {?><span class="layui-badge"><?php echo $_smarty_tpl->tpl_vars['count']->value['letter'];?>
</span><?php }?></a>
        </li>
      </ul>
      <div>
        <div class="LAY-app-message-btns" style="margin-bottom: 10px;margin-top: 10px;">
          <button class="layui-btn layui-btn-primary layui-btn-sm J_message" data-type="all" data-events="del">删除</button>
          <button class="layui-btn layui-btn-primary layui-btn-sm J_message" data-type="all" data-events="read">标记已读</button>
        
        </div>
        <table cellspacing="0" cellpadding="0" border="0" class="layui-table layui-form" lay-skin="line">
          <thead>
            <tr>
              <th class="w25">
                <input type="checkbox" lay-skin="primary" class="checkbox_all" lay-filter="checkbox_all">
              </th>
              <th class="wb50">
                <div class="layui-table-cell laytable-cell-1-title"><span>标题内容</span></div>
              </th>
              <th data-field="time">
                <div class="layui-table-cell laytable-cell-1-time"><span>时间</span></div>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->tpl_vars['result']->value['rows']) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value['rows'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
              <td class="w25">
                <input type="checkbox" name="idboxs" lay-skin="primary" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
              </td>
              <td class="wb50">
                <div class="layui-table-cell laytable-cell-1-title">
                  <a href="/message/view/id/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['read_time'] == 0) {?>style="font-weight: bold;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                </div>
              </td>
              <td>
                <div class="layui-table-cell laytable-cell-1-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['send_time'],'%Y-%m-%d %H:%I:%S');?>
</div>
              </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
          </tbody>
        </table>
        <div class="clearfix ">
          <div class="fn-left">
          </div>
          <div class="fn-right clearfix " id="page" total="<?php echo $_smarty_tpl->tpl_vars['result']->value['count'];?>
" curr="<?php echo $_smarty_tpl->tpl_vars['result']->value['page'];?>
" limit="<?php echo $_smarty_tpl->tpl_vars['result']->value['pagesize'];?>
">
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
  $(".J_message").click(function(){
    var _ids  = $('input[name=idboxs]:checked').map(function(){
            return $(this).val();
        }).get().join(',');

    if (!_ids){
      layer.msg('请选择要操作的记录！');
      return;
    }
    
    var events = $(this).attr('data-events');
    var _this = $(this);
    layer.confirm('确定要操作吗？', { icon: 3, title: '提示' }, function(index) {
      var _id = _this.parent().parent().parent().attr('data-id');
      $.ajax({
        type: "POST",
        url: "/message/read",
        dataType: 'json',
        data: "ids="+_ids+"&events="+events,
        success: function(res) {
          if (res.code == 200) {
            layer.msg('操作成功', {
              offset: '15px',
              icon: 1,
              time: 1000
            }, function() {
              location.reload();
            });
          } else {
            layer.msg('操作失败!');
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
