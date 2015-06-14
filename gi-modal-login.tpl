<!--File Name:gi-modal-login.tpl-->
<style>
.modal-login{
	max-width:540px;
	margin:auto;
}
</style>
<form class="form-horizontal" action="{$SITE_URL}login.php" method="post" id="loginForm">
	<div class="{if !isset($data.show_in_page)}modal fade{/if}" id="login_modal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content modal-login">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Login</h4>
				</div>
				<div class="modal-body">
					<div class="col-md-12 clearfix">
						<div class="form-group email-group">
							<label class="col-md-3">Email*</label>
							<div class="col-md-9">
								<input type="email" name="email" id="email" class="form-control">
								<p class="text-danger h">Please fill your email address.</p>
							</div>
						</div>
						<div class="form-group password-group">
							<label class="col-md-3">Password*</label>
							<div class="col-md-9">
								<input type="password" name="password" id="passowrd" class="form-control">
								<p class="text-danger h">Please fill password.</p>
							</div>
						</div>
						<div class="col-md-offset-3">
							<button type="button" class="btn btn-success span2 ml-md mr-md" name="login" id="login">Login</button>
							<a href="#"><u>Forgot Password?</u></a>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<a class="btn btn-default pull-left" href="{$SITE_URL}login.php">Don't have an account?</a>
					<input type="hidden" name="func" value="login">
					<input type="submit" class="h" id="submit_login">
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
	$('#login').click(function(){
		validate();
	});
	function validate()
	{
		if(checkFrmElements('email,password','3'))
		{
			$('#submit_login').trigger('click');
		}
	}
});
</script>