<?php /* Smarty version Smarty-3.1.15, created on 2015-05-06 19:37:42
         compiled from "gi-common-script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27536554a6d866c6fb8-16002712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b12f88fdc4dc10cab9de320ad046ce67326147' => 
    array (
      0 => 'gi-common-script.tpl',
      1 => 1421737166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27536554a6d866c6fb8-16002712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554a6d866da2a7_74928251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a6d866da2a7_74928251')) {function content_554a6d866da2a7_74928251($_smarty_tpl) {?><!--File Name:gi-common-script.tpl-->
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
