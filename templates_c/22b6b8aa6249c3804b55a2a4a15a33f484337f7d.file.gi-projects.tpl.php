<?php /* Smarty version Smarty-3.1.19, created on 2015-05-17 16:35:14
         compiled from "gi-projects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210345558bf3bacebd8-29977060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22b6b8aa6249c3804b55a2a4a15a33f484337f7d' => 
    array (
      0 => 'gi-projects.tpl',
      1 => 1431880514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210345558bf3bacebd8-29977060',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5558bf3c2abf74_44745375',
  'variables' => 
  array (
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5558bf3c2abf74_44745375')) {function content_5558bf3c2abf74_44745375($_smarty_tpl) {?><!--gi-projects.tpl-->
<div class="col-md-12">
<h2>Recent Projects</h2>
	<div class="col-md-12" id="section_project1">
		<h3>Mayashree Shopping Plaza</h3>
		<div class="col-md-4">
			<ul>
				<li>Exclusive Shopping Plaza</li>
				<li>Centrally Located in the Main Market</li>
				<li>Lift with Generator Facility</li>
				<li>Main Gate with Single Entry</li>
				<li>Basement Parking</li>
				<li>CC TV Camera in Common Area</li>
				<li>Intercom System Facility</li>
				<li>Common WC for the Shopping Plaza</li>
				<li>2'x2' Vitrified Floor Tiles in Shop</li>
				<li>Kota/marble in the Passage and Common Area</li>
			</ul>
		</div>
		<div class="col-md-4 center mt-xl mb-xl">
			<button type="button" class="btn btn-danger btn-lg common-modal" modal-name="I would like to buy this shop">Buy Now</button>
		</div>
		<div class="col-md-4 npr mb-xl">
			<a href="#" data-toggle="modal" data-target="#"><img data-original="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/mayashree_shop/2.jpg" src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/mayashree_shop/2.jpg" class="lazy img-responsive fixed_dimension"></a>
		</div>
	</div>
	<div class="col-md-12 mt-md" id="section_project2">
		<h3>Mayashree Residency</h3>
		<div class="col-md-4">
			<ul>
				<li>ADA Approved Project</li>
				<li>Impressive Entrace Lobby</li>
				<li>High Quality Exterior Paint</li>
				<li>2'x2' Ceramic Tiles</li>
				<li>Solar Water Heater & Water Harvesting</li>
				<li>Lift with Power Back-up</li>
				<li>Ample Water Supply with under ground & Over head water Tank</li>
				<li>Complex Secured with Wall Boundaries</li>
			</ul>
		</div>
		<div class="col-md-4 center mt-xl mb-xl">
			<button type="button" class="btn btn-danger btn-lg common-modal" modal-name="I would like to buy a apartment">Buy Now</button>
		</div>
		<div class="col-md-4 npr mb-xl">
			<a href="#" data-toggle="modal" data-target="#"><img data-original="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/mayashree_residency/1.jpg" src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/mayashree_residency/1.jpg" class="lazy img-responsive fixed_dimension"></a>
		</div>
	</div>
	<div class="col-md-12 mt-xl" id="section_project3">
		<h3>Ambition City Lucknow</h3>
		<div class="col-md-4">
			<ul>
				<li>24x7 Power Backup</li>
				<li>24x7 Water Supply</li>
				<li>Entrance gate with 24x7 security</li>
				<li>Swimming pool and pool club</li>
				<li>Interval paved concrete roads</li>
				<li>Community center and party lawn</li>
				<li>Yoga and meditation center</li>
				<li>Jogging track</li>
				<li>Children's park and water park</li>
				<li>Indoor and outdoor games</li>
				<li>Mini stadium</li>
				<li>Street lighting</li>
			</ul>
			<h4>Watch promotional video of this project</h4>
			<div class="mb-xl"><a target="_blank" href="https://www.youtube.com/watch?v=DEJY0LLG7fQ">Click here to watch video on youtube.</a></div>
		</div>
		<div class="col-md-4 center mt-xl mb-xl">
			<button type="button" class="btn btn-danger btn-lg common-modal" modal-name="I would like to buy an apartment">Buy Now</button>
		</div>
		<div class="col-md-4 npr mb-xl">
			<a href="#" data-toggle="modal" data-target="#"><img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/ambition/1.jpg" class="img-responsive fixed_dimension"></a>	
		</div>
	</div>
	<div class="col-md-12 mt-xl">
		<h3>Other Projects</h3>
		<div class="col-md-8">
			<p>There are number of ongoing projects in allahabad which are not listed.<br> For information about other projects in Allahabad. Please contact us.</p>
			<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
?func=support">Contact Us</a>
		</div>
		<div class="col-md-4 mb-xl">
			<a href="#" data-toggle="modal" data-target="#"><img data-original="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/coming_soon.png" src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
images/coming_soon.png" class="lazy img-responsive fixed_dimension"></a>
		</div>
	</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("gi-common-script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
