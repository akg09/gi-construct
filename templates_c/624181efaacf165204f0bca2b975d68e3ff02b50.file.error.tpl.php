<?php /* Smarty version Smarty-3.1.19, created on 2015-01-20 19:38:53
         compiled from "error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40584299354beaecd33f767-55343088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624181efaacf165204f0bca2b975d68e3ff02b50' => 
    array (
      0 => 'error.tpl',
      1 => 1421780827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40584299354beaecd33f767-55343088',
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
  'unifunc' => 'content_54beaecd34d933_19991149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54beaecd34d933_19991149')) {function content_54beaecd34d933_19991149($_smarty_tpl) {?><!-- File Name: 'error.tpl' -->
<div id="errmsg" class="alert alert-warning nm pt-md pb-md h<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&is_array($_smarty_tpl->tpl_vars['msg']->value)) {?> hide<?php }?>">
	<button type="button" class="close" onclick="javascript:showmsg('','',1);">&times;</button>
	<span class="msg"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['msg'];?>
<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</span>
</div><?php }} ?>
