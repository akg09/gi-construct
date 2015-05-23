<?php /* Smarty version Smarty-3.1.19, created on 2015-05-06 19:26:33
         compiled from "gi-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1165554a67b3c44677-47147921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1165554a67b3c44677-47147921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554a67b3c71cb1_12208106',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'SERVER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a67b3c71cb1_12208106')) {function content_554a67b3c71cb1_12208106($_smarty_tpl) {?><!--gi-footer.tpl-->
				</div>
			</div>
		</div>
	</body>
	<script src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/js/bootstrap<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
gi-footer<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.js"></script>
</html><?php }} ?>
