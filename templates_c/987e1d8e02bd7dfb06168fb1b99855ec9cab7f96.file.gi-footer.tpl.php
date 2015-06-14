<?php /* Smarty version Smarty-3.1.19, created on 2015-06-13 19:25:26
         compiled from "gi-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24000557c83a6a4dd86-38309750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '987e1d8e02bd7dfb06168fb1b99855ec9cab7f96' => 
    array (
      0 => 'gi-footer.tpl',
      1 => 1430940391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24000557c83a6a4dd86-38309750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'SERVER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_557c83a6a80003_66556686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557c83a6a80003_66556686')) {function content_557c83a6a80003_66556686($_smarty_tpl) {?><!--gi-footer.tpl-->
				</div>
			</div>
		</div>
	</body>
	<script src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/js/bootstrap<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
gi-footer<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.js"></script>
</html><?php }} ?>
