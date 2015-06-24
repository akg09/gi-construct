<!--File Name:gi-add_property_modal.tpl-->
<form class="form-horizontal" action="{$SITE_URL}?func=my_property&action=add">
<div class="modal fade" id="add_property" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Add property</h4>
			</div>
			<div class="modal-body">
				<div class="form-group project_name-group">
					<label class="control-label col-md-4">Property Name*</label>
					<div class="col-md-6"><input type="text" class="form-control" name="project_name" id="project_name" placeholder="Please fill name of the property"/></div>
					<p class="h text-danger">Please fill name of your property.</p>
				</div>
				<div class="form-group budget-group">
					<label class="control-label col-md-4">Estimated Budget*</label>
					<div class="col-md-6"><input type="text" class="form-control" name="budget" id="budget" placeholder="Estimated budget (in Rupees)"/></div>
					<p class="h text-danger">Please fill the estimated budget.</p>
				</div>
				<div class="form-group area-group">
					<label class="control-label col-md-4">Approximate area*</label>
					<div class="col-md-6"><input type="text" class="form-control" name="area" id="area" placeholder="Approx. area (in sq.ft.)"/></div>
					<p class="h text-danger">Please fill the area of the property.</p>
				</div>
				<div class="form-group type-group">
					<label class="control-label col-md-4">Property type*</label>
					<div class="col-md-6">
						<select class="form-control" name="type" id="type">
							<option value="" selected="selected">Choose type of property</option>
							<option value="r">Residential house</option>
							<option value="f">Residential flat</option>
							<option value="c">Commercial</option>
							<option value="p">Plot</option>
						</select>
					</div>
				</div>
				<div class="form-group stype-group h">
					<label class="control-label col-md-4">Type of flat*</label>
					<div class="col-md-6">
						<select class="form-control" name="stype" id="stype">
							<option value="" selected="selected">Choose type of flat</option>
							{for $i=1 to 5}
							<option value="{$i}">{$i} BHK</option>
							{/for}
						</select>
					</div>
				</div>
				<div class="form-group rooms-group h">
					<label class="control-label col-md-4">Number of rooms*</label>
					<div class="col-md-6">
						<input type="number" class="form-control span1" name="rooms" id="rooms" max="20" min="0" value="0">
					</div>
				</div>
				<div class="form-group locality-group">
					<label class="control-label col-md-4">House no./ Plot no.</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="house_no" id="house_no" placeholder="House no./ Plot no.">
					</div>
				</div>
				<div class="form-group locality-group">
					<label class="control-label col-md-4">Locality*</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="locality" id="locality" placeholder="Locality">
					</div>
				</div>
				<div class="form-group city-group">
					<label class="control-label col-md-4">City*</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="city" id="city" placeholder="City">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-4">Pincode</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="pincode" id="pincode" placeholder="Pincode">
					</div>
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success">Save</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</form>