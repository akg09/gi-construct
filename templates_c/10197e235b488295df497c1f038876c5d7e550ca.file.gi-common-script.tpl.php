<?php /* Smarty version Smarty-3.1.19, created on 2015-06-14 10:22:30
         compiled from "gi-common-script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25411557c83a6a0a4e8-10252488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10197e235b488295df497c1f038876c5d7e550ca' => 
    array (
      0 => 'gi-common-script.tpl',
      1 => 1434277348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25411557c83a6a0a4e8-10252488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_557c83a6a28974_00227318',
  'variables' => 
  array (
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557c83a6a28974_00227318')) {function content_557c83a6a28974_00227318($_smarty_tpl) {?><!--File Name:gi-common-script.tpl-->
<script>
$(document).ready(function(){
	$('.common-modal').click(function(){
		activate(1);
		var name = $(this).attr('modal-name');
		$.post('<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
index.php?func=get_common_modal&ajax=1&modal_name='+name,function(data){
			$('body').append(data);
			$('#common-services').modal('show');
			activate(0);
		});
	});
	$('#show_modal_login').click(function(){
		activate(1);
		$.post("<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
index.php?func=login_modal&ajax=1",function(data){
			$('body').append(data);
			$('#login_modal').modal('show');
			activate(0);
		});
	});
});
</script><?php }} ?>
