<div class="col-md-3"></div>
<div class="col-md-9 container_margin">
	<div class="panel p-body">
		<div class="panel-heading"><h4>Add Employee</h4></div>
			<div class="panel-body">
				<?= $this->session->flashdata('message') ?>
				<form class="form-horizontal" method="POST" action="/insert_user">
					<input type="hidden" name="uid" value="">
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-sm-3 control-label">First Name</label>
							<div class="col-sm-9 padding_z">
								<input type="text" class="form-control" name="firstname" placeholder="e.g (Juan)" required>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-sm-3 control-label">Address</label>
							<div class="col-sm-9 padding_z">
								<input type="text" class="form-control" name="address" placeholder="e.g (3RD Door Solon Compound, Barangay San Antonio, Jakosalem St.)" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Contact No.</label>
							<div class="col-sm-9 padding_z">
								<input type="text" class="form-control" name="contact" maxlength="11" placeholder="e.g (09172580624)" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Position</label>
							<div class="col-sm-9 padding_z">
								<select class="form-control" name="position">
									<option>Select Position</option>
									<?php foreach ($this->api->get_position() as $value): ?>
										<option value="<?= $value->id; ?>"><?= $value->description; ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-sm-3 control-label">Last Name</label>
							<div class="col-sm-9 padding_z">
								<input type="text" class="form-control" name="lastname" placeholder="e.g (Tamad)" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Civil Status</label>
							<div class="col-sm-9" style="padding:0">
								<select class="form-control" name="status">
									<option>Single</option>
									<option>Maried</option>
									<option>Divorced</option>
									<option>Separated</option>
									<option>Widowed</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Gender</label>
							<div class="col-sm-9" style="padding:0">
								<select class="form-control" name="gender">
									<option>Male</option>
									<option>Femal</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email Address</label>
							<div class="col-sm-9 padding_z">
								<input type="email" class="form-control" name="emailadd" placeholder="e.g (jaun@gmail.com)" required>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="panel p-body" style="box-shadow: 0 0 10px gray;min-height: 100px;">
							<div class="panel-heading">
								<h4>Credential's</h4>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label class="col-sm-3 control-label">Username</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="username" placeholder="User Name" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" name="password" placeholder="**********" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Confirm Password</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" name="cpassword" placeholder="**********" required>
									</div>
								</div>
							</div>
						</div>
						<div class="pull-right">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</div>
				</form>
			</div>
	</div>
	<br/>
</div>