<?php
/* Smarty version 3.1.32, created on 2018-08-20 02:35:52
  from 'E:\www\recipe\application\web\views\library\footer.lbi' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7a29086f0d61_48000632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e89018b6979f779a03a1e89b3331983aba3a20' => 
    array (
      0 => 'E:\\www\\recipe\\application\\web\\views\\library\\footer.lbi',
      1 => 1534732549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7a29086f0d61_48000632 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="footer">
        <p>
            <span><?php echo $_smarty_tpl->tpl_vars['configure']->value['copyright'];?>
</span>
            <span><?php echo $_smarty_tpl->tpl_vars['configure']->value['icp'];?>
</span>
        </p>
       
    </div>
<?php echo '<script'; ?>
 src="/www/web/res/layui/layui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
layui.config({
    base: '/www/web/res/static/js/'
}).use('blog');
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
