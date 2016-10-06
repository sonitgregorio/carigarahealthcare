<?php
        $x = $this->patientsmd->get_records($pid);
?>

<div class="col-md-3"></div>
<div class="col-md-9 container_margin">
    <div class="panel p-body">
        <div class="panel-heading"><h4>Consultation</h4></div>
        <div class="panel-body">
            <?= $this->session->flashdata('message') ?>
            <form class="form-horizontal" method="POST" action="/insert_patient">
                <input type="hidden" name="uid" value="">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-9 padding_z">
                            <input disabled value="<?= $x['firstname'] ?>" type="text" class="form-control" name="firstname" placeholder="e.g (Juan)" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9 padding_z">
                            <input disabled value="<?= $x['address'] ?>" type="text" class="form-control" name="address"
                                   placeholder="e.g (3RD Door Solon Compound, Barangay San Antonio, Jakosalem St.)"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contact No.</label>
                        <div class="col-sm-9 padding_z">
                            <input disabled value="<?= $x['contact'] ?>" type="text" class="form-control" name="contact" maxlength="11"
                                   placeholder="e.g (09172580624)" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Date of Birth</label>
                        <div class="col-sm-9 padding_z">
                            <input disabled value="<?= $x['dob'] ?>" type="text " class="form-control dob" name="dob" >
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-9 padding_z">
                            <input disabled value="<?= $x['lastname'] ?>" type="text" class="form-control" name="lastname" placeholder="e.g (Tamad)" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Civil Status</label>
                        <div class="col-sm-9" style="padding:0">
                            <input disabled type="text" class="form-control" value="<?= $x['civil_status'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Gender</label>
                        <div class="col-sm-9" style="padding:0">
                            <input disabled type="text" class="form-control" value="<?= $x['gender'] ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Age</label>
                        <div class="col-sm-9 padding_z">
                            <input type="hidden" class="form-control" name="age" placeholder="e.g (18)">
                            <input value="<?= $x['age'] ?>" type="text" class="form-control" name="ages" placeholder="e.g (18)"
                                   disabled>
                        </div>
                    </div>
                </div>
            </form>
            <?php  if($this->session->userdata('position') == 3) { ?>
            <form action="/insert_consultation" method="POST" class="form-horizontal">
                <input name="pid" type="hidden" value="<?= $pid ?>">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Syptoms</label>
                        <div class="col-sm-9 padding_z">
                            <textarea name="symptoms" rows="5" class="form-control" style="resize: none" placeholder="Enter The Symptoms of the patient"></textarea>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
            <?php } ?>

            <div class="col-md-12">
                <br/>
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th>Consultation Date</th>
                        <th>Symptoms</th>
                        <?php if($this->session->userdata('position') == 4) { ?>
                          <th>Findings</th>
                        <th>Action</th>
                        <?php } ?>
                    </tr>
                    <?php foreach ($this->patientsmd->get_consultation($pid) as $key => $value) { ?>
                        <tr>
                            <td style="max-width: 20px"><?= $value['date'] ?></td>
                            <td><?= $value['symptoms'] ?></td>

                            <?php if($this->session->userdata('position') == 4) { ?>
                                <td><?= $value['findings'] ?></td>
                            <td style="text-align:right;max-width: 150px">
                                <a href="#" class="btn btn-info consult_user" data-param="<?= $value['id'] ?>"><span class="glyphicon glyphicon-certificate"></span>&nbsp;&nbsp;Add Findings</a>
                                <a href="/prescription/<?= $value['id'] ?>" class="btn btn-success"><span class="glyphicon glyphicon-hand-up"></span>&nbsp;&nbsp;Prescription</a>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>
    <br/>
</div>


<!-- Modal -->
<div id="consult" class="modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Note In Consulting</h4>
            </div>
            <form class="form-horizontal" action="/save_findings" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Enter Symptoms</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="10" name="symptomss"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Findings</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="findings">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <input type="hidden" class="form-control" name="cid">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <input type="hidden" class="form-control" name="pid">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>