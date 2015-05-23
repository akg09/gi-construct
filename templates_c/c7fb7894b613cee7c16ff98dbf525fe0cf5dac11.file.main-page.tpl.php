<?php /* Smarty version Smarty-3.1.19, created on 2015-05-06 19:26:33
         compiled from "main-page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25782554a67b39811a0-12743307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7fb7894b613cee7c16ff98dbf525fe0cf5dac11' => 
    array (
      0 => 'main-page.tpl',
      1 => 1430940368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25782554a67b39811a0-12743307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554a67b3a36a36_52555226',
  'variables' => 
  array (
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a67b3a36a36_52555226')) {function content_554a67b3a36a36_52555226($_smarty_tpl) {?><!--main-page.tpl-->
<?php echo $_smarty_tpl->getSubTemplate ("gi-mainpage_courosel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container">
	<h3 class="center"><b>100+ projects available including apartments, shops, plots and many more</b></h3>
</div>
<div class="col-md-12 mt-xl">
	<div class="col-xs-12 col-sm-6 col-md-3">
		<div class="thumbnail">
			<img class="lazy main-thumbnail" data-src="holder.js/100%x180" src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/icons/construction.jpg" data-original="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/icons/construction.jpg" alt="">
			<div class="caption">
				<h3 class="center">Build</h3>
				<p>We help to you to build your dream home. We use best engineering practices and techniques for building.</p>
				<p class="center"><button type="button" class="btn btn-primary common-modal" modal-name="Beautify my home">Open</button></p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3">
		<div class="thumbnail">
			<img class="lazy main-thumbnail" data-src="holder.js/100%x180" data-original="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/icons/sell.png" src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/icons/sell.png" alt="">
			<div class="caption">
				<h3 class="center">Sell</h3>
				<p>We help you in getting maximum selling price of your real estate assets. We will buy or help you to sell your assets.</p>
				<p class="center"><button type="button" class="btn btn-primary common-modal" modal-name="I would like to sell" id="sell_modal">Open</button></p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3">
		<div class="thumbnail">
			<img class="lazy main-thumbnail" data-src="holder.js/100%x180" data-original="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/icons/buy.png" src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/icons/buy.png" alt="">
			<div class="caption">
				<h3 class="center">Buy</h3>
				<p>Buy homes, shops, office spaces or plots as per your needs at minimum possible price as compared to the market.</p>
				<p class="center"><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
?func=recent_projects" class="btn btn-primary" id="buy_projects">Open</a></p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3">
		<div class="thumbnail">
			<img class="lazy main-thumbnail" data-src="holder.js/100%x180" src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/icons/rent.jpg" alt="">
			<div class="caption">
				<h3 class="center">Rent</h3>
				<p>Give your apartments, rooms, shops, for rent.<br> Best place to search rooms, offices, and shops.</p>
				<p class="center"><button type="button" class="btn btn-primary" disabled="disabled" id="rents_modal">Open</button></p>
			</div>
		</div>
	</div>		
</div>
<section class="clearfix bg-gradient">
	<div class="container">
		<div class="center">
			<h1>Customers Review</h1>
		</div>
		<div class="col-md-12 mt-xl">
			<div class="col-md-4">
				<div class="testimonial">
					Girish Constructions is ready for everything. They have solution for every real estate problems. 
				</div>
				<div class="testimonial-author">
					<cite title="Source Title pull-left">Raj - Allahabad</cite>
				</div>
			</div>
			<div class="col-md-4">
				<div class="testimonial">
					I appreciate their efforts in getting my shop in the center of the city Allahabad. It helped in growing my business more.
				</div>
				<div class="testimonial-author">
					<cite title="Source Title pull-left">Ajay - Allahabad</cite>
				</div>
			</div>
			<div class="col-md-4">
				<div class="testimonial">
					This company is doing great, not only in terms of real estate business but also they make a healthy relationship with their customers.
				</div>
				<div class="testimonial-author">
					<cite title="Source Title pull-left">Santosh - Allahabad</cite>
				</div>
			</div>
			<div class="col-md-4">
				<div class="testimonial">
					Only two words Simply, Great! I was new in Allahabad and Girish Constructions made me feel just like home by helping me in purchasing my home.
				</div>
				<div class="testimonial-author">
					<cite title="Source Title pull-left">Anurag - Hyderabad</cite>
				</div>
			</div>
		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("gi-common-script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
