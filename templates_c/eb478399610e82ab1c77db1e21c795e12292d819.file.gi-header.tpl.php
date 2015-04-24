<?php /* Smarty version Smarty-3.1.19, created on 2015-01-13 18:51:29
         compiled from "gi-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3124954a56e2d1ec7a1-10392529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb478399610e82ab1c77db1e21c795e12292d819' => 
    array (
      0 => 'gi-header.tpl',
      1 => 1421175087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3124954a56e2d1ec7a1-10392529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a56e2d2285f0_63339416',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'SERVER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a56e2d2285f0_63339416')) {function content_54a56e2d2285f0_63339416($_smarty_tpl) {?><html>
	<head>
		<title>Girish Constructions</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/css/bootstrap<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/css/chosen.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
style<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" type="image/png"  href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/icons/home_icon50.png" />
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <script src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/js/jquery-1.10.2<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/js/bootstrap<?php if ($_smarty_tpl->tpl_vars['SERVER']->value['is_developer']!=1) {?>.min<?php }?>.js"></script>
	</head>
	<body>
	<?php echo $_smarty_tpl->getSubTemplate ("gi-header-top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }} ?>
