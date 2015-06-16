<!--File Name:gi-myprofile.tpl-->
{include file="gi-my_property_tabs.tpl"}
<ul class="nav nav-pills mb-xl">
	<li class="active"><a href="#personal_info" data-toggle="tab">Personal Info</a></li>
	<li class=""><a href="#privacy_settings" data-toggle="tab">Privacy</a></li>
</ul>
<div class="tab-content">
	<div class="tab-pane active" id="personal_info">
		{include file="gi-myprofile_form.tpl"}
	</div>
	<div class="tab-pane" id="privacy_settings">
		{include file="gi-change_password.tpl"}
	</div>
</div>