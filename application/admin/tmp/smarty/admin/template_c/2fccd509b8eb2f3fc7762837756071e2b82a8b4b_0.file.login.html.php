<?php
/* Smarty version 3.1.32, created on 2018-08-20 02:29:55
  from 'E:\www\recipe\application\admin\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7a27a3571cf5_91462686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fccd509b8eb2f3fc7762837756071e2b82a8b4b' => 
    array (
      0 => 'E:\\www\\recipe\\application\\admin\\views\\login.html',
      1 => 1533295380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7a27a3571cf5_91462686 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<title>登入 - layuiAdmin</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="/www/admin/layui/css/layui.css" media="all">
	<link rel="stylesheet" href="/www/admin/style/admin.css" media="all">
	<link rel="stylesheet" href="/www/admin/style/login.css" media="all">
</head>

<body>
	<div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
		<div class="layadmin-user-login-main">
			<div class="layadmin-user-login-box layadmin-user-login-header">
				<h2>layuiAdmin</h2>
			
			</div>
			<div class="layadmin-user-login-box layadmin-user-login-body layui-form">
				<div class="layui-form-item">
					<label class="layadmin-user-login-icon layui-icon layui-icon-username" for="LAY-user-login-username"></label>
					<input type="text" name="account" id="LAY-user-login-username" lay-verify="required" placeholder="用户名" class="layui-input">
				</div>
				<div class="layui-form-item">
					<label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
					<input type="password" name="password" id="LAY-user-login-password" lay-verify="required" placeholder="密码" class="layui-input">
				</div>
				
				<div class="layui-form-item" style="margin-bottom: 20px;">
					<input type="checkbox" name="rememberme" lay-skin="primary" title="记住密码">
					
				</div>
				<div class="layui-form-item">
					<button class="layui-btn layui-btn-fluid" lay-submit lay-filter="login_hash">登 入</button>
				</div>
				
			</div>
		</div>
		<div class="layui-trans layadmin-user-login-footer">
			<p>© 2018 <a href="http://www.layui.com/" target="_blank">layui.com</a></p>
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
	}).use(['index', 'user'], function() {
		var $ = layui.$,
			setter = layui.setter,
			admin = layui.admin,
			form = layui.form,
			router = layui.router(),
			search = router.search;

		form.render();

		
		form.on('submit(login_hash)', function(data) {
	        $.ajax({
	            type: "POST",
	            url: "/login",
	            dataType: 'json',
	            data: data.field,
	            success: function(res) {
	                if (res.code <=0) {
	                    layer.msg(res.data.error_message || '登录失败，请检查你的输入！');
	                } else {
	                	layer.msg('登入成功', {
							offset: 'auto',
							icon: 1,
							time: 1000
						}, function() {
							location.href = res.data.forward; 
						});
	                  
	                }
	            },
	            error: function() {
	                layer.alert('网络异常，请重试！');
	            }
	        });
	        return false;
	    });


	});
	<?php echo '</script'; ?>
>
</body>

</html><?php }
}
