<!--File Name:gi-property_design.tpl-->
<div class="col-md-12 npl pr_list">
	<div class="col-md-9">
		<div>
			<span class="inline-block mr-lg"><h3 class="mt bold">{$prop.project_name}</h3></span>
			<span class="inline-block area_font">{$prop.area} sq.ft.</span>
			<span class="pull-right mt-md prop_price">Rs. {$prop.budget}</span>
		</div>
		<div>
			<label>Locality:</label><span> {$prop.locality}</span>
			<label>City:</label><span> {$prop.city}</span>		
		</div>
		{assign var=t value=$prop.type}
		{if $prop.type}<div><label>Type of property:</label><span> {$property_type.$t}</span></div>{/if}
		{assign var=st value=$prop.stype}
		{if $prop.type}<div><label>Details:</label><span> {$property_stype.$st}</span></div>{/if}
		<div><label>Owner says:</label><span> {$prop.config}</span></div>
		{if $user.user_guid == $prop.owner_guid}
		<div class="mt">	
			<button type="button" class="btn btn-primary btn-sm mr-md"><span class="glyphicon glyphicon-pencil mr text-top"></span><span>Edit</span></button>
			<button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove mr text-top"></span><span>Remove</span></button>
		</div>
		{/if}
	</div>
	<div class="col-md-3">
		<div class="thumbnail mt">
			<img src="" data-src="" class="img-responsive" style="height:150px;">
		</div>
	</div>
</div>