<?php /* Smarty version Smarty-3.1.19, created on 2015-01-20 19:29:30
         compiled from "gi-common-script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32915736854beab089c9849-80752675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32ac93c775488916ae82e1f411eccea1c73a8d47' => 
    array (
      0 => 'gi-common-script.tpl',
      1 => 1421782165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32915736854beab089c9849-80752675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54beab089cded1_29646107',
  'variables' => 
  array (
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54beab089cded1_29646107')) {function content_54beab089cded1_29646107($_smarty_tpl) {?><!--File Name:gi-common-script.tpl-->
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
});
</script><?php }} ?>
