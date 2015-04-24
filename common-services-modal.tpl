<!--common-services-modal.tpl-->
<form class="form-horizontal" role="form" id="common-modal-contact">
	<div class="modal fade" id="common-services">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">{$data.modal_name}</h4>
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
</form>