<?php
/* Smarty version 3.1.32, created on 2018-08-16 08:16:18
  from 'E:\www\recipe\application\admin\views\recipe\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7532d2810bb6_44523501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dc40f075e199a2b2ef60c498d085c1993f1df87' => 
    array (
      0 => 'E:\\www\\recipe\\application\\admin\\views\\recipe\\add.html',
      1 => 1533871176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../library/header.lbi' => 1,
    'file:../library/footer.lbi' => 1,
  ),
),false)) {
function content_5b7532d2810bb6_44523501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../library/header.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/www/admin/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/www/admin/ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="/www/admin/ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    

<style type="text/css">
.edui-container{width:100% !important;}
</style>

<div class="layui-fluid">
	<div class="layui-card">
		<div class="layui-card-body" style="padding: 15px;">
			<form class="layui-form fn-mt-20" action="">
				<div class="layui-form-item">
					<label class="layui-form-label"><span class="color-red">*</span>标题</label>
					<div class="layui-input-block">
						<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
" class="layui-input" autocomplete="off" lay-verify="required">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label"><span class="color-red">*</span>主图</label>
					<div class="layui-input-block">
						<div class="layui-input-inline" style="width:20%;margin-right: 0px;">
						<button type="button" class="layui-btn" id="upload">
						  <i class="layui-icon">&#xe67c;</i>上传图片
						</button>
						</div>
						<div class="layui-input-inline" style="width:80%;text-align: right;margin-right: 0px;">
						<input type="text" name="img" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['img'];?>
" id="img" class="layui-input" lay-verify="required" readonly>
						</div>
						
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label"><span class="color-red">*</span>用料</label>
					<div class="layui-input-block">
						<textarea type="text" name="ings" class="layui-textarea" lay-verify="required" autocomplete="off"><?php echo $_smarty_tpl->tpl_vars['info']->value['ings'];?>
</textarea>
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label"><span class="color-red">*</span>步骤</label>
					<div class="layui-input-block">
						<?php echo '<script'; ?>
 id="editor" type="text/plain" name="steps" lay-verify="required" style="height:300px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['steps'];
echo '</script'; ?>
>
					</div>
				</div>
				
				
				<div class="layui-form-item ">
					<div class="layui-input-block">
						<div class="layui-footer" >
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
							<button class="layui-btn" lay-submit lay-filter="formsubmit">立即提交</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
$(document).ready(function() {
	var ue = UE.getEditor('editor',{toolbars: [
    [
        'anchor', //锚点
        'undo', //撤销
        'redo', //重做
        'bold', //加粗
        'italic', //斜体
        'underline', //下划线
        'strikethrough', //删除线
        'fontborder', //字符边框
        'formatmatch', //格式刷
        'source', //源代码
        'pasteplain', //纯文本粘贴模式
        'preview', //预览
        'horizontal', //分隔线
        'removeformat', //清除格式
        'inserttitle', //插入标题
        'cleardoc', //清空文档
        'fontfamily', //字体
        'fontsize', //字号
        'paragraph', //段落格式
        'simpleupload', //单图上传
        'insertimage', //多图上传
        'link', //超链接
        'unlink', //取消链接
        'insertvideo', //视频
        'justifyleft', //居左对齐
        'justifyright', //居右对齐
        'justifycenter', //居中对齐
        'justifyjustify', //两端对齐
        'forecolor', //字体颜色
        'backcolor', //背景色
        'insertorderedlist', //有序列表
        'insertunorderedlist', //无序列表
        'fullscreen', //全屏
        'attachment', //附件
        'autotypeset', //自动排版
        'background', //背景
        'inserttable', //插入表格

    ]
]});
	layui.use(['form','upload'], function() {
		var form = layui.form,upload=layui.upload;

		//执行实例
		var uploadInst = upload.render({
		    elem: '#upload',
		    url: '/upload/index',
		    field:'Filedata',
		    done: function(res){
		    	if(res.code == 200) {
		    		$("#img").val(res.file);
		    	} else {
		    		layui.msg(res.error);
		    	}
		    }
		    ,error: function(){
		    	layui.msg('接口异常');
		    }
		});
		form.on('submit(formsubmit)', function(data) {
			data.elem.disabled = true;
			data.elem.innerHTML = '正在提交..';
			$.ajax({
				type: "POST",
				url: "/recipe/add",
				dataType: 'json',
				data: data.field,
				success: function(res) {
					if (res.code == 200) {
						layer.msg('保存成功', {
							offset: 'auto',
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


	});

});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:../library/footer.lbi', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
