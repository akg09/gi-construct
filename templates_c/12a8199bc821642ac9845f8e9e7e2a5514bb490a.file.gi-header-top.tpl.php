<?php /* Smarty version Smarty-3.1.19, created on 2015-01-19 05:28:31
         compiled from "gi-header-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5829969754bc95ff888df8-63445582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12a8199bc821642ac9845f8e9e7e2a5514bb490a' => 
    array (
      0 => 'gi-header-top.tpl',
      1 => 1421297322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5829969754bc95ff888df8-63445582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54bc95ff8cbd65_74563146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bc95ff8cbd65_74563146')) {function content_54bc95ff8cbd65_74563146($_smarty_tpl) {?><!--File Name:gi-header-top.tpl-->
<div class="row">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header pl-md" title="Girish Constructions">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
          		</button>
				<a class="navbar-brand home-icon mt-md nml" href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar" aria-expanded="false">
				<ul class="nav navbar-nav select_pages">
					<li <?php if ($_smarty_tpl->tpl_vars['data']->value['func']=="home") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
">Home</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['data']->value['func']=="services") {?>class="active"<?php }?>><a href="<?php if ($_smarty_tpl->tpl_vars['data']->value['func']=="services") {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
?func=services<?php }?>">Services</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['data']->value['func']=="recent_projects") {?>class="active"<?php }?>><a href="<?php if ($_smarty_tpl->tpl_vars['data']->value['func']=="recent_projects") {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
?func=recent_projects<?php }?>">Projects</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['data']->value['func']=="about_us") {?>class="active"<?php }?>><a href="<?php if ($_smarty_tpl->tpl_vars['data']->value['func']=="about_us") {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
?func=about_us<?php }?>">About Us</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['data']->value['func']=="support") {?>class="active"<?php }?>><a href="<?php if ($_smarty_tpl->tpl_vars['data']->value['func']=="support") {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
?func=support<?php }?>">Contact Us</a></li>
					<!--<li <?php if ($_smarty_tpl->tpl_vars['data']->value['func']=="contact") {?>class="active"<?php }?>><a href="<?php if ($_smarty_tpl->tpl_vars['data']->value['func']=="contact") {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
?func=contact<?php }?>">Contact</a></li>-->
				</ul>
				<ul class="nav navbar-nav navbar-right nmr social hidden-xs">
					<li><a href="https://plus.google.com/u/0/106213702050772196832/about" target="_blank" class="google"></a><li>
					<li><a target="_blank" href="https://www.facebook.com/pages/Girish-Constructions-and-Property-Dealers/256269554568614?ref=hl" class="facebook"></a><li>
					<li><a target="_blank" href="https://twitter.com/girishconstruct?lang=en" class="twitter"></a><li>
					<!--<li><a target="_blank" href="" class="linkedin"></a><li>-->
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
	</nav>
	<!-- /.container -->
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12" id="main-page">
			<?php }} ?>
