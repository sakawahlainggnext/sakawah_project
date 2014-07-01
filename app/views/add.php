<?php echo load_view('Layout/header'); ?>
<div class="container">
		<form class="form-horizontal" role="form">
			<legend>Add New Information</legend>
			<div class="form-group">
				<label for="exampleInputEmail1" class="control-label col-sm-2">Name : </label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1" class="control-label col-sm-2">Phone</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1" class="control-label col-sm-2">Address : </label>
				<div class="col-sm-4">
					<textarea class="form-control" rows="3"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="control-label col-sm-2">Category : </label>
				<div class="col-sm-4">
					<select class="form-control">
						<option selected="selected" value="">Select Category </option>
						<option value="AYARWADDY">Colleagues</option>
						<option value="BAGO - EAST">Family</option>
						<option value="BAGO - WEST">Friends</option>
						<option value="CHIN">Work</option>
					</select>					
				</div>
			</div>		
			<div class="form-group" id="domain" style="display: none;">
				<label for="" class="control-label col-sm-2">Category : </label>
				<div class="col-sm-4">					
					<input type="text" class="form-control" name="domain[]" placeholder="Category Name" value="<?php //echo flashdata( 'domain1', isset($a_client) ? $a_client->domain1 : '' ) ?>">
				</div>
			</div>
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-4">
						<button type="button" class="btn btn-success" id="add-domain">Add More Category</button>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFile" class="control-label col-sm-2">Photo Upload : </label>
					<div class="col-sm-4">
						<input type="file" name="photo">
						<!-- <p class="help-block">Example block-level help text here.</p> -->
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary" name="update">Update</button>
					</div>
				</div>
			</form>
		</div>
		<?php echo load_view('Layout/footer'); ?>