<?php echo load_view('Layout/header'); ?>


<div class="container">
		<div class="col-md-8">
			<form class="form-horizontal" role="form">
				<div class="form-group">
				<legend class="login">Login Form</legend>
					<label for="exampleInputEmail1" class="control-label col-sm-2">Email : </label>
					<div class="col-sm-4">
						<input type="email" class="form-control" name="email" placeholder="Enter email">
					</div>					
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1" class="control-label col-sm-2">Password : </label>
					<div class="col-sm-4">
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary" name="login">Login</button>
					</div>
				</div>				
			</form>
		</div>	
	</div>

	<?php echo load_view('Layout/footer'); ?>