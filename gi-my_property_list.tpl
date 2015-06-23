<!--File Name:gi-my_property_list.tpl-->
{include file="gi-my_property_tabs.tpl"}
<div class="tab-content">
	<div class="tab-pane active" id="propertylist">
		<div class="col-md-12">
			{if count($property)<1}
				<div class="alert alert-success">You have not added any property. Please add your property by clicking "Add property" button.</div>
			{/if}
			<div class="clearfix"><button class="btn btn-default" data-toggle="modal" data-target="#add_property"><span class="glyphicon glyphicon-plus-sign"></span> Add Property</button></div>
		</div>
	</div>
</div>
{include file="gi-add_property_modal.tpl"}