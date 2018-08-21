<?php
/* Smarty version 3.1.32, created on 2018-08-15 02:45:52
  from 'E:\www\recipe\application\web\views\library\footer.lbi' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7393e00410c8_83194817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e89018b6979f779a03a1e89b3331983aba3a20' => 
    array (
      0 => 'E:\\www\\recipe\\application\\web\\views\\library\\footer.lbi',
      1 => 1534300982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7393e00410c8_83194817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20040105135b7393e003e4d0_61654434';
?>
    <div class="footer">
        <p>
            <span>Copyright © 2018</span>
            <span><a href="<?php echo $_smarty_tpl->tpl_vars['configure']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['configure']->value['domain'];?>
</a></span>
            <span>MIT license</span>
        </p>
        <p><span>人生就是一场修行</span></p>
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
