<!--File Name:gi-myprofile_form.tpl-->
<form class="form-horizontal" action="{$SITE_URL}myprofile.php/?func=personal_info" method="post">
	<div class="form-group first_name-group">
		<label class="col-md-2 control-label" for="first_name">First Name*</label>
		<div class="col-md-4">
			<input type="text" name="first_name" id="first_name" class="form-control" value="{$user.first_name}">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="last_name">Last Name</label>
		<div class="col-md-4">
			<input type="text" name="last_name" id="last_name" class="form-control" value="{$user.last_name}">
		</div>
	</div>
	<div class="form-group email-group">
		<label class="col-md-2 control-label" for="email">Email*</label>
		<div class="col-md-4">
			<input type="email" name="email" id="email" class="form-control" disabled="disabled" value="{$user.email}">
		</div>
	</div>
	<div class="form-group mobile-group">
		<label class="col-md-2 control-label" for="email">Mobile*</label>
		<div class="col-md-4">
			<input type="text" name="mobile" id="mobile" class="form-control" value="{$user.mobile}">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="dob">Date of birth</label>
		<div class="col-md-4">
			<select type="select" class="form-control span1 inline" name="day" id="day">
				<option value="">Day</option>
				{for $start=1 to 31}
				<option value="{$start}">{$start}</option>
				{/for}
			</select>
			<select type="select" class="form-control span2 inline" name="months" id="months">
				<option value="Month">Month</option>
				{foreach from=$months item=mon}
				<option value="{$mon}">{$mon}</option>
				{/foreach}
			</select>
			<select type="select" class="form-control span2 inline" name="year" id="year">
				<option value="">Year</option>
				{for $start=1901 to 2016}
				<option value="{$start}">{$start}</option>
				{/for}
			</select>
			
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="house_no">House no</label>
		<div class="col-md-4">
			<input type="text" name="house_no" id="house_no" class="form-control" value="{if isset($user.house_no)}{$user.house_no}{/if}">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="city">City</label>
		<div class="col-md-4">
			<input type="text" name="city" id="city" class="form-control" value="{$user.city}">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="house_no">Pincode</label>
		<div class="col-md-4">
			<input type="text" name="pincode" id="pincode" class="form-control" value="{$user.pincode}">
		</div>
	</div>
	<div class="col-md-offset-2">
		<button type="button" name="save_info" id="save_info" class="btn btn-success ml">Save</button>
		<input type="hidden" name="action" value="save_profile">
		<input type="submit" name="submit_frm" id="submit_frm" class="h">
		<input type="hidden" name="func" value="personal_info">
	</div>
</form>
<script>
$(document).ready(function(){
	$('#save_info').click(function(){
		if(checkFrmElements('first_name,email,mobile','3,3,10'))
		{
			if(!checkMobile($('#mobile')))
			{
				$('.mobile-group').addClass('has-error');
				$('.mobile-group').find('p').show();
				$('.mobile-group').find('input').focus();
			}
			else
			{
				$('#submit_frm').trigger('click');
			}
		}
	});
});
</script>