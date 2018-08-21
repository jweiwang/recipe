<?php
/* Smarty version 3.1.32, created on 2018-08-03 02:30:16
  from 'E:\www\w.com\application\admin\views\welcome_message.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b63be388aa712_49988388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '717d69c6316b836eb0595bd516bbed800ab7567a' => 
    array (
      0 => 'E:\\www\\w.com\\application\\admin\\views\\welcome_message.html',
      1 => 1533263413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b63be388aa712_49988388 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<title>w - Admin</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="/www/admin/layui/css/layui.css" media="all">
	<link rel="stylesheet" href="/www/admin/style/admin.css" media="all">
</head>

<body class="layui-layout-body">
	<div id="LAY_app">
		<div class="layui-layout layui-layout-admin">
			<div class="layui-header">
				<!-- 头部区域 -->
				<ul class="layui-nav layui-layout-left">
					<li class="layui-nav-item layadmin-flexible" lay-unselect>
						<a href="javascript:;" layadmin-event="flexible" title="侧边伸缩">
			              <i class="layui-icon layui-icon-shrink-right" id="LAY_app_flexible"></i>
			            </a>
					</li>
					<li class="layui-nav-item layui-hide-xs" lay-unselect>
						<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
" target="_blank" title="前台">
			              <i class="layui-icon layui-icon-website"></i>
			            </a>
					</li>
					<li class="layui-nav-item" lay-unselect>
						<a href="javascript:;" layadmin-event="refresh" title="刷新">
			              <i class="layui-icon layui-icon-refresh-3"></i>
			            </a>
					</li>
				</ul>
				<ul class="layui-nav layui-layout-right" lay-filter="layadmin-layout-right">
					<li class="layui-nav-item" lay-unselect>
						<a lay-href="/message/my" layadmin-event="message" lay-text="消息中心">
			              <i class="layui-icon layui-icon-notice"></i>  
			              
			              <!-- 如果有新消息，则显示小圆点 -->
			              <?php if ($_smarty_tpl->tpl_vars['message']->value['num']) {?>
			              <span class="layui-badge-dot"></span>
			              <?php }?>
			            </a>
					</li>
					<li class="layui-nav-item layui-hide-xs" lay-unselect>
						<a href="javascript:;" layadmin-event="theme">
			              <i class="layui-icon layui-icon-theme"></i>
			            </a>
					</li>
					<li class="layui-nav-item layui-hide-xs" lay-unselect>
						<a href="javascript:;" layadmin-event="note">
			              <i class="layui-icon layui-icon-note"></i>
			            </a>
					</li>
					<li class="layui-nav-item layui-hide-xs" lay-unselect>
						<a href="javascript:;" layadmin-event="fullscreen">
			              <i class="layui-icon layui-icon-screen-full"></i>
			            </a>
					</li>
					<li class="layui-nav-item" lay-unselect>
						<a href="javascript:;">
							<cite><?php echo $_smarty_tpl->tpl_vars['loginUser']->value['account'];?>
</cite>
						</a>
						<dl class="layui-nav-child">
							<dd><a lay-href="/members/my">基本资料</a></dd>
							<dd><a lay-href="/members/password">修改密码</a></dd>
							<hr>
							<dd style="text-align: center;"><a href="/login/out">退出</a></dd>
						</dl>
					</li>
					<li class="layui-nav-item layui-hide-xs" lay-unselect>
						<a href="javascript:;" layadmin-event="about"><i class="layui-icon layui-icon-more-vertical"></i></a>
					</li>
					<li class="layui-nav-item layui-show-xs-inline-block layui-hide-sm" lay-unselect>
						<a href="javascript:;" layadmin-event="more"><i class="layui-icon layui-icon-more-vertical"></i></a>
					</li>
				</ul>
			</div>
			<!-- 侧边菜单 -->
			<div class="layui-side layui-side-menu">
				<div class="layui-side-scroll">
					<div class="layui-logo" lay-href="welcome/console">
						<span>w - Admin</span>
					</div>
					<ul class="layui-nav layui-nav-tree" lay-shrink="all" id="LAY-system-side-menu" lay-filter="layadmin-system-side-menu">

						<?php if ($_smarty_tpl->tpl_vars['menus']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'item_1', false, NULL, 'foo_1', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item_1']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo_1']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo_1']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_foo_1']->value['index'];
?>
						<li data-name="home-<?php echo $_smarty_tpl->tpl_vars['item_1']->value['id'];?>
" class="layui-nav-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo_1']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo_1']->value['first'] : null)) {?>layui-nav-itemed<?php }?>">
							<a href="javascript:;" lay-tips="<?php echo $_smarty_tpl->tpl_vars['item_1']->value['name'];?>
" lay-direction="<?php echo $_smarty_tpl->tpl_vars['item_1']->value['id'];?>
">
                				<i class="layui-icon <?php echo $_smarty_tpl->tpl_vars['item_1']->value['icon'];?>
"></i>
                				<cite><?php echo $_smarty_tpl->tpl_vars['item_1']->value['name'];?>
</cite>
              				</a>
              				<?php if ($_smarty_tpl->tpl_vars['item_1']->value['child']) {?>
							<dl class="layui-nav-child">
              					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_1']->value['child'], 'item_2', false, NULL, 'foo_2', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item_2']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo_2']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo_2']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_foo_2']->value['index'];
?>
              					<?php if ($_smarty_tpl->tpl_vars['item_2']->value['child']) {?>
              					<dd data-name="content-<?php echo $_smarty_tpl->tpl_vars['item_2']->value['id'];?>
">
									<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['item_2']->value['name'];?>
</a>
									<dl class="layui-nav-child">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_2']->value['child'], 'item_3', false, NULL, 'foo_3', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item_3']->value) {
?>
										<dd data-name="list"><a lay-href="<?php echo $_smarty_tpl->tpl_vars['item_3']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item_3']->value['name'];?>
</a></dd>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									
									</dl>
								</dd>
              					<?php } else { ?>
              					<dd <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo_1']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo_1']->value['first'] : null) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo_2']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo_2']->value['first'] : null)) {?>class="layui-this"<?php }?>>
									<a lay-href="<?php echo $_smarty_tpl->tpl_vars['item_2']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item_2']->value['name'];?>
</a>
								</dd>
              					<?php }?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</dl>
							<?php }?>
						</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>

					</ul>
				</div>
			</div>
			<!-- 页面标签 -->
			<div class="layadmin-pagetabs" id="LAY_app_tabs">
				<div class="layui-icon layadmin-tabs-control layui-icon-prev" layadmin-event="leftPage"></div>
				<div class="layui-icon layadmin-tabs-control layui-icon-next" layadmin-event="rightPage"></div>
				<div class="layui-icon layadmin-tabs-control layui-icon-down">
					<ul class="layui-nav layadmin-tabs-select" lay-filter="layadmin-pagetabs-nav">
						<li class="layui-nav-item" lay-unselect>
							<a href="javascript:;"></a>
							<dl class="layui-nav-child layui-anim-fadein">
								<dd layadmin-event="closeThisTabs"><a href="javascript:;">关闭当前标签页</a></dd>
								<dd layadmin-event="closeOtherTabs"><a href="javascript:;">关闭其它标签页</a></dd>
								<dd layadmin-event="closeAllTabs"><a href="javascript:;">关闭全部标签页</a></dd>
							</dl>
						</li>
					</ul>
				</div>
				<div class="layui-tab" lay-unauto lay-allowClose="true" lay-filter="layadmin-layout-tabs">
					<ul class="layui-tab-title" id="LAY_app_tabsheader">
						<li lay-id="home/console" lay-attr="home/console" class="layui-this"><i class="layui-icon layui-icon-home"></i></li>
					</ul>
				</div>
			</div>
			<!-- 主体内容 -->
			<div class="layui-body" id="LAY_app_body">
				<div class="layadmin-tabsbody-item layui-show">
					<iframe src="welcome/console" frameborder="0" class="layadmin-iframe"></iframe>
				</div>
			</div>
			<!-- 辅助元素，一般用于移动设备下遮罩 -->
			<div class="layadmin-body-shade" layadmin-event="shade"></div>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="/www/admin/layui/layui.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	layui.config({
		base: '/www/admin/' //静态资源所在路径
	}).extend({
		index: 'lib/index' //主入口模块
	}).use(['index','console']);
	<?php echo '</script'; ?>
>
</body>

</html><?php }
}
