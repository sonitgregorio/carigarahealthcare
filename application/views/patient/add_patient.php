<div class="col-md-3"></div>
<div class="col-md-9 container_margin">
    <div class="panel p-body">
        <div class="panel-heading"><h4>Add Patient</h4></div>
        <div class="panel-body">
            <?= $this->session->flashdata('message') ?>
            <form class="form-horizontal" method="POST" action="/insert_patient">
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
                            <input type="text" class="form-control" name="address"
                                   placeholder="e.g (3RD Door Solon Compound, Barangay San Antonio, Jakosalem St.)"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contact No.</label>
                        <div class="col-sm-9 padding_z">
                            <input type="text" class="form-control" name="contact" maxlength="11"
                                   placeholder="e.g (09172580624)" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Date of Birth</label>
                        <div class="col-sm-9 padding_z">
                            <input type="date" class="form-control dob" name="dob" >
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
                        <label class="col-sm-3 control-label">Age</label>
                        <div class="col-sm-9 padding_z">
                            <input type="hidden" class="form-control" name="age" placeholder="e.g (18)">
                            <input type="text" class="form-control" name="ages" placeholder="e.g (18)"
                                    disabled>
                        </div>
                    </div>
                </div>


                <div class="pull-right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
<!--            <div class="col-md-12">-->
<!--                <br/>-->
<!--                <table class="table table-striped table-bordered table-hover">-->
<!--                    <tr>-->
<!--                        <th>Name</th>-->
<!--                        <th>Contact</th>-->
<!--                        <th>Gender</th>-->
<!--                        <th>Age</th>-->
<!--                        <th>Date of Birth</th>-->
<!--                    </tr>-->
<!--                    --><?php //foreach ($this->patientsmd->get_patient() as $key => $value) { ?>
<!--                        <tr>-->
<!--                            <td>--><?//= $value['firstname'] . ' ' . $value['lastname'] ?><!--</td>-->
<!--                            <td>--><?//= $value['contact'] ?><!--</td>-->
<!--                            <td>--><?//= $value['gender'] ?><!--</td>-->
<!--                            <td>--><?//= $value['age'] ?><!--</td>-->
<!--                            <td>--><?//= $value['dob'] ?><!--</td>-->
<!--                        </tr>-->
<!--                    --><?php //} ?>
<!---->
<!--                </table>-->
<!--            </div>-->
        </div>
    </div>
    <br/>
</div>