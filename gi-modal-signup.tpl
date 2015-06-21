<!--File Name:gi-modal-signup.tpl-->
<form class="form-horizontal" id="login_form" action="{$SITE_URL}login.php" method="post">
<div class="{if !isset($data.show_in_page) && $data.show_in_page <> 1}modal fade{/if}" id="signup">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Sign Up</h4>
			</div>
			<div class="modal-body">
				<div class="col-md-12 clearfix">
					<div class="form-group first_name-group">
						<label class="col-md-4">First Name*</label>
						<div class="col-md-8">
							<input type="text" name="first_name" id="first_name" class="form-control input-sm">
							<p class="text-danger h">Please fill your first name.</p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4">Last Name</label>
						<div class="col-md-8">
							<input type="text" name="last_name" id="last_name" class="form-control input-sm">
						</div>
					</div>
					<div class="form-group email-group">
						<label class="col-md-4">Email*</label>
						<div class="col-md-8">
							<input type="email" name="email" id="email" class="form-control input-sm">
							<p class="text-danger h">Please fill your email address.</p>
						</div>
					</div>
					<div class="form-group mobile-group">
						<label class="col-md-4">Mobile*</label>
						<div class="col-md-8">
							<input type="text" name="mobile" id="mobile" class="form-control input-sm">
							<p class="text-danger h">Please fill your mobile number.</p>
						</div>
					</div>
					<div class="form-group password-group">
						<label class="col-md-4">Password*</label>
						<div class="col-md-8">
							<input type="password" name="password" id="password" class="form-control input-sm">
							<p class="text-danger h">Please fill a password.</p>
						</div>
					</div>
					<div class="form-group confirm_password-group">
						<label class="col-md-4">Confirm Password*</label>
						<div class="col-md-8">
							<input type="password" name="confirm_password" id="confirm_password" class="form-control input-sm">
							<p class="text-danger h">Both the passwords should match.</p>
						</div>
					</div>
					<div class="col-md-offset-4">
						<button type="button" class="btn btn-success ml-md" id="signup_btn">Sign Up with Us</button>
						<input type="submit" class="h login-submit">
						<input type="hidden" name="new" value="1">
						<input type="hidden" name="func" value="signup">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<a class="btn btn-default pull-left" data-dismiss="modal" href="{$SITE_URL}login.php?func=show_login">Already registered? Login</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</form>
<script>
$(document).ready(function(){
	var msg = "{if isset($msg)}{$msg}{/if}";
	if(msg != "")
	{
		showmsg(msg);
	}
	$('#signup_btn').click(function(){
		validate();
	});
	function validate()
	{
		if(checkFrmElements('first_name,email,mobile,password,confirm_password','3'))
		{
			//check mobile validation
			if(!checkMobile($('#mobile')))
			{
				$('.mobile-group').addClass('has-error');
				$('.mobile-group').find('p').show();
				$('.mobile-group').find('input').focus();
				return false;
			}
			//all the fields are filled now check that the passwords are same
			if($('#password').val() == $('#confirm_password').val())
			{
				$('.login-submit').trigger('click');
			}
			else
			{
				$('.confirm_password-group').addClass('has-error');
				$('.confirm_password-group').find('p').show();;
				$('.confirm_password-group').find('input').focus();				
			}
		}
	}
});
</script>