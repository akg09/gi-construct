<?php /* Smarty version Smarty-3.1.19, created on 2015-05-06 19:12:51
         compiled from "gi-common-script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24868554a67b3c0a8a3-26229885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10197e235b488295df497c1f038876c5d7e550ca' => 
    array (
      0 => 'gi-common-script.tpl',
      1 => 1421737166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24868554a67b3c0a8a3-26229885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554a67b3c1d740_82818584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a67b3c1d740_82818584')) {function content_554a67b3c1d740_82818584($_smarty_tpl) {?><!--File Name:gi-common-script.tpl-->
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
