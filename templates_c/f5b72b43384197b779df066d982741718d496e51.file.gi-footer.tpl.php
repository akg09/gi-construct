<?php /* Smarty version Smarty-3.1.15, created on 2015-05-06 19:37:42
         compiled from "gi-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23689554a6d866fccb1-80545494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5b72b43384197b779df066d982741718d496e51' => 
    array (
      0 => 'gi-footer.tpl',
      1 => 1430940391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23689554a6d866fccb1-80545494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'SERVER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554a6d8677ccc0_10833117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a6d8677ccc0_10833117')) {function content_554a6d8677ccc0_10833117($_smarty_tpl) {?><!--gi-footer.tpl-->
				</div>
			</div>
		</div>
	</body>
	<script src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/js/bootstrap<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
gi-footer<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.js"></script>
</html><?php }} ?>
