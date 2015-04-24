<?php /* Smarty version Smarty-3.1.19, created on 2015-01-11 15:37:19
         compiled from "gi-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:924854abedbd4cd646-73051930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d65dd1a366b5055bf07533d28e2b49733d8208' => 
    array (
      0 => 'gi-footer.tpl',
      1 => 1420990568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '924854abedbd4cd646-73051930',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54abedbd4d81d7_08166328',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'SERVER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54abedbd4d81d7_08166328')) {function content_54abedbd4d81d7_08166328($_smarty_tpl) {?><!--gi-footer.tpl-->
				</div>
			</div>
		</div>
	</body>
	<script src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
gi-footer<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.js"></script>
</html><?php }} ?>
