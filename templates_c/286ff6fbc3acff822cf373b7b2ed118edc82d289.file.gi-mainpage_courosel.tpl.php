<?php /* Smarty version Smarty-3.1.19, created on 2015-01-16 16:40:14
         compiled from "gi-mainpage_courosel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3061954ac174075cc43-62048274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '286ff6fbc3acff822cf373b7b2ed118edc82d289' => 
    array (
      0 => 'gi-mainpage_courosel.tpl',
      1 => 1421426413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3061954ac174075cc43-62048274',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ac17407624b5_72272542',
  'variables' => 
  array (
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ac17407624b5_72272542')) {function content_54ac17407624b5_72272542($_smarty_tpl) {?><style>
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
foundation/css/images/1.jpg" class="img-responsive" alt="image1">
			<div class="carousel-caption">
				<h3>Build your dream home</h3>
			</div>
		</div>
		<div class="item">
			<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/css/images/2.jpg" class="img-responsive" alt="image2">
			<div class="carousel-caption">
				<h3>Buy home, shops, office spaces and plots</h3>
			</div>
		</div>
		<div class="item">
			<img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
foundation/css/images/3.jpg" alt="image3" class="img-responsive" >
			<div class="carousel-caption">
				<h3>Sell your real estate assets at maximum selling price</h3>
			</div>
		</div>
	</div>
</div><?php }} ?>
