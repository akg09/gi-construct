<?php /* Smarty version Smarty-3.1.19, created on 2015-01-14 16:28:51
         compiled from "gi-support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2874854ad5baa1283c8-18031972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd429d5521cfe41b037c6e1d066d7e6e826888cdb' => 
    array (
      0 => 'gi-support.tpl',
      1 => 1421252929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2874854ad5baa1283c8-18031972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ad5baa183e84_08277529',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad5baa183e84_08277529')) {function content_54ad5baa183e84_08277529($_smarty_tpl) {?><!--gi-support.tpl-->
<form role="form" class="form-horizontal" method="post">
	<div class="col-md-12">
		<h2>Our Customers</h2>
		<p>
			We are dedicated to give you a single stop where they can buy or make your dreams homes. You can also sell your property at MSP (Maximum Selling Price).<br>
			We provide a safe and highly effective engineering
			practices which ensures safety for your family.
		</p>
		<h4>Support Request</h4>
		<p>Send us the queries you have, the problem you are experiencing, we also invite you to leave comments and suggestions that will help us to improve.</p>
		<br>
		<h4><b>Contact Form</b></h4>
		<div class="form-group mt-xl customer_name-group">
			<label class="col-md-2 col-sm-3 col-xs-12 control-label" for="customer_name">Name*</label>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<input type="text" class="form-control" name="customer_name" id="customer_name"/>
			</div>
			<p class="help-block h">Please fill your name.</p>
		</div>
		<div class="form-group customer_email-group">
			<label class="col-md-2 col-sm-3 col-xs-12 control-label" for="customer_email">Your Email*</label>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<input type="text" class="form-control" name="customer_email" id="customer_email"/>
			</div>
			<p class="help-block h">Please fill your email.</p>
		</div>
		<div class="form-group phone-group">
			<label class="col-md-2 col-sm-3 col-xs-12 control-label" for="phone">Phone/Mobile*</label>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<input type="text" class="form-control" name="phone" id="phone"/>
			</div>
			<p class="help-block h">Please fill your phone/mobile number.</p>
		</div>
		<div class="form-group">
			<label class="col-md-2 col-sm-3 col-xs-12 control-label" for="customer_action">Action</label>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<select name="category" id="category" class="chosen form-control" placeholder="Choose an option">
					<option value="" selected disabled>Choose an option</option>
					<option value="buy">Buy</option>
					<option value="sell">Sell</option>
					<option value="contract">Request for contract</option>
				</select>
			</div>
		</div>
		<div class="form-group customer_comment-group">
			<label class="col-md-2 col-sm-3 col-xs-12 control-label" for="customer_comment">Comment*</label>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<textarea class="form-control" id="customer_comment" name="customer_comment" rows="6"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-sm-offset-3">
				<input type="button" class="btn btn-success ml-lg mr" value="Submit" name="submit" id="submit">
				<input type="submit" class="submit_support h">
				<input type="hidden" name="func" value="support">
				<input type="hidden" name="action" value="submit_user_request">
				<button type="button" class="btn btn-default" name="cancel" id="cancel">Reset</button>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$('#submit').click(function(){
			if(validateForm('customer_name,customer_email,phone,customer_comment','3'))
			{
				activate(1);
				submitSupportForm().done(function(){
					$('.submit_support').trigger('click');
				});
			}
			return false;
		});
		$('#cancel').click(function(){
			location.reload();
		});
	});
</script><?php }} ?>
