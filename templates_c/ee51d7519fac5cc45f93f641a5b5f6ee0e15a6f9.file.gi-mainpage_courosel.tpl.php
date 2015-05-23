<?php /* Smarty version Smarty-3.1.15, created on 2015-05-06 19:37:42
         compiled from "gi-mainpage_courosel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18003554a6d86660bf0-34957038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee51d7519fac5cc45f93f641a5b5f6ee0e15a6f9' => 
    array (
      0 => 'gi-mainpage_courosel.tpl',
      1 => 1421637624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18003554a6d86660bf0-34957038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554a6d8668f2c3_02734253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a6d8668f2c3_02734253')) {function content_554a6d8668f2c3_02734253($_smarty_tpl) {?><style>
@media(min-width: 1199px) {
.carousel{
	width:1000px!important;
	margin:auto;
	}
}
</style>
<div id="carousel-example-generic hidden-xs" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/css/images/1.jpg" data-original="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/css/images/1.jpg" class="lazy img-responsive" alt="image1">
			<div class="carousel-caption">
				<h3>Build your dream home</h3>
			</div>
		</div>
		<div class="item">
			<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/css/images/2.jpg" data-original="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/css/images/2.jpg" class="lazy img-responsive" alt="image2">
			<div class="carousel-caption">
				<h3>Buy home, shops, office spaces and plots</h3>
			</div>
		</div>
		<div class="item">
			<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/css/images/3.jpg" alt="image3" data-original="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/css/images/3.jpg" class="lazy img-responsive">
			<div class="carousel-caption">
				<h3>Sell your real estate assets at maximum selling price</h3>
			</div>
		</div>
	</div>
</div><?php }} ?>
