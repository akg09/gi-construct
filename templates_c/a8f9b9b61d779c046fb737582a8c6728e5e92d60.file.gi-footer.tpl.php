<?php /* Smarty version Smarty-3.1.19, created on 2015-02-15 16:14:05
         compiled from "gi-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89722057354bc95ff8e6912-67044868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f9b9b61d779c046fb737582a8c6728e5e92d60' => 
    array (
      0 => 'gi-footer.tpl',
      1 => 1424016807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89722057354bc95ff8e6912-67044868',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54bc95ff8ed7e7_34329265',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'SERVER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bc95ff8ed7e7_34329265')) {function content_54bc95ff8ed7e7_34329265($_smarty_tpl) {?><!--gi-footer.tpl-->
				</div>
			</div>
		</div>
	</body>
	<script async src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/js/bootstrap<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.js"></script>
	<script async src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
gi-footer<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.js"></script>
</html><?php }} ?>
