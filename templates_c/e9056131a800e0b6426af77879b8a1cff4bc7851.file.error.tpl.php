<?php /* Smarty version Smarty-3.1.19, created on 2015-05-06 19:12:51
         compiled from "error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25976554a67b3733dc8-50186892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9056131a800e0b6426af77879b8a1cff4bc7851' => 
    array (
      0 => 'error.tpl',
      1 => 1421735828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25976554a67b3733dc8-50186892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'error' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554a67b375fae8_20191573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a67b375fae8_20191573')) {function content_554a67b375fae8_20191573($_smarty_tpl) {?><!-- File Name: 'error.tpl' -->
<div id="errmsg" class="alert alert-warning nm pt-md pb-md h<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&is_array($_smarty_tpl->tpl_vars['msg']->value)) {?> hide<?php }?>">
	<button type="button" class="close" onclick="javascript:showmsg('','',1);">&times;</button>
	<span class="msg"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['msg'];?>
<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</span>
</div><?php }} ?>
