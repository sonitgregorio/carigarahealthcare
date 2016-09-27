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

				<div class="col-md-12">
					<br/>
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th>Name</th>
							<th>Contact</th>
							<th>Gender</th>
							<th>Position</th>
							<th>Action</th>
						</tr>
						<?php foreach ($this->usermd->get_users() as $key => $value){ ?>
							<tr>
								<td><?= $value['firstname'] . ' ' . $value['lastname'] ?></td>
								<td><?= $value['contact'] ?></td>
								<td><?= $value['gender'] ?></td>
								<td><?= $value['description'] ?></td>
								<td><a class="a-table label label-info edit_user" href="#" data-param="<?= $value['id'] ?>">Edit<span class="glyphicon glyphicon-pencil"></span></a>
									<a class="a-table label label-danger" href="/delete/<?= $value['id'] ?>" onclick="return confirm('Are you Sure ?')">Delete <span class="glyphicon glyphicon-trash"></span></a>
								</td>
							</tr>
						<?php } ?>

					</table>
				</div>
			</div>
	</div>
	<br/>
</div>