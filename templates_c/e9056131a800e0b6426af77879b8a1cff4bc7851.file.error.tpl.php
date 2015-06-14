<?php /* Smarty version Smarty-3.1.19, created on 2015-06-13 19:29:02
         compiled from "error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21606557c83a6435a29-29352828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9056131a800e0b6426af77879b8a1cff4bc7851' => 
    array (
      0 => 'error.tpl',
      1 => 1434223741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21606557c83a6435a29-29352828',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_557c83a6467279_58451363',
  'variables' => 
  array (
    'msg' => 0,
    'error' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557c83a6467279_58451363')) {function content_557c83a6467279_58451363($_smarty_tpl) {?><!-- File Name: 'error.tpl' -->
<div id="errmsg" class="alert alert-warning nm pt-md pb-md h<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&is_array($_smarty_tpl->tpl_vars['msg']->value)) {?> hide<?php }?>">
	<button type="button" class="close" onclick="javascript:showmsg('','',1);">&times;</button>
	<span class="msg"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)||isset($_smarty_tpl->tpl_vars['data']->value['msg'])||isset($_smarty_tpl->tpl_vars['msg']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['msg'];?>
<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?></span>
</div><?php }} ?>
