<?php /* Smarty version Smarty-3.1.19, created on 2015-01-19 15:53:06
         compiled from "gi-mainpage_courosel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49257840154bc95ff8dd149-34657911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b4d3616d244d7ed37c5d0c3e55eca49197d9ee9' => 
    array (
      0 => 'gi-mainpage_courosel.tpl',
      1 => 1421682624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49257840154bc95ff8dd149-34657911',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54bc95ff8e4b71_82928401',
  'variables' => 
  array (
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bc95ff8e4b71_82928401')) {function content_54bc95ff8e4b71_82928401($_smarty_tpl) {?><style>
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
