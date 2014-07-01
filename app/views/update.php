<?php echo load_view('Layout/header'); ?>
<div class="container">
		<div class="col-md-9">
			<form class="form-horizontal" role="form">
				<legend>Update your Information</legend>
				<div class="form-group">
					<label for="exampleInputEmail1" class="control-label col-sm-2">Name : </label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="Mg Mg">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1" class="control-label col-sm-2">Phone</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="09-1234567">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1" class="control-label col-sm-2">Address : </label>
					<div class="col-sm-6">
						<textarea class="form-control" rows="3">A-14</textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-2">Category : </label>
					<div class="col-sm-4">
						<select class="form-control">
							<option selected="selected" value="">Select Category </option>
							<option value="AYARWADDY">Colleagues</option>
							<option value="BAGO - EAST" selected>Family</option>
							<option value="BAGO - WEST">Friends</option>
							<option value="CHIN">Work</option>
						</select>					
					</div>
				</div>		
				<div class="form-group">
					<label for="exampleInputFile" class="control-label col-sm-2">Photo Upload : </label>
					<div class="col-sm-6">
						<input type="file" name="photo">
						<!-- <p class="help-block">Example block-level help text here.</p> -->
					</div>
				</div>
				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary" name="update">Update</button>
				</div>
			</form>
		</div>	
	</div>
	<?php echo load_view('Layout/footer'); ?>