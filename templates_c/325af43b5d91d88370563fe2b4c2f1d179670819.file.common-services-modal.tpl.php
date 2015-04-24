<?php /* Smarty version Smarty-3.1.19, created on 2015-01-20 19:23:05
         compiled from "common-services-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135259672454beab19367b68-27714622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '325af43b5d91d88370563fe2b4c2f1d179670819' => 
    array (
      0 => 'common-services-modal.tpl',
      1 => 1421780784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135259672454beab19367b68-27714622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54beab193763f1_68169577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54beab193763f1_68169577')) {function content_54beab193763f1_68169577($_smarty_tpl) {?><!--common-services-modal.tpl-->
<form class="form-horizontal" role="form" id="common-modal-contact">
	<div class="modal fade" id="common-services">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['modal_name'];?>
</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group customer_name-group">
								<label class="col-md-3 col-sm-3 col-xs-12 control-label" for="customer_name">Name*</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" class="form-control" name="customer_name" id="customer_name"/>
								</div>
								<p class="help-block h">Please fill your name.</p>
							</div>
							<div class="form-group customer_email-group">
								<label class="col-md-3 col-sm-3 col-xs-12 control-label" for="customer_email">Your Email*</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" class="form-control" name="customer_email" id="customer_email"/>
								</div>
								<p class="help-block h">Please fill your email.</p>
							</div>
							<div class="form-group phone-group">
								<label class="col-md-3 col-sm-3 col-xs-12 control-label" for="phone">Phone/Mobile*</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" class="form-control" name="phone" id="phone"/>
								</div>
								<p class="help-block h">Please fill your phone/mobile number.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success" onclick="checkFormData();">Submit</button>
				</div>
			</div>
		</div>
	</div>
</form><?php }} ?>
