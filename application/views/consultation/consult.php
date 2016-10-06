<div class="col-md-3"></div>
<div class="col-md-9 container_margin">
    <div class="panel p-body">
        <div class="panel-heading"><h4>Add Employee</h4></div>
        <div class="panel-body">
            <?= $this->session->flashdata('message') ?>
            <?php if($this->session->userdata('position') == 4) { ?>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Contact</td>
                        <td>Gender</td>
                        <td>Age</td>
                        <td>Date of Birth</td>
                        <td>Action</td>
                    </tr>
                    </thead>

                    <?php foreach ($this->patientsmd->get_queue() as $key => $value) { ?>
                        <tr>
                            <td><?= $value['firstname'] . ' ' . $value['lastname'] ?></td>
                            <td><?= $value['contact'] ?></td>
                            <td><?= $value['gender'] ?></td>
                            <td><?= $value['age'] ?></td>
                            <td><?= $value['dob'] ?></td>
                            <td style="text-align: center;">
                                <a href="/view_records/<?= $value['id'] ?>" class="a-table label label-info" data-param="<?= $value['id']; ?>"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp; Consult</a>
                            </td>
                        </tr>
                    <?php } ?>

                </table>
            <?php } else { ?>
            <table class="table table-striped table-bordered table-hover" id="dataTable">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Contact</td>
                    <td>Gender</td>
                    <td>Age</td>
                    <td>Date of Birth</td>
                    <td>Action</td>
                </tr>
                </thead>

                <?php foreach ($this->patientsmd->get_patient() as $key => $value) { ?>
                    <tr>
                        <td><?= $value['firstname'] . ' ' . $value['lastname'] ?></td>
                        <td><?= $value['contact'] ?></td>
                        <td><?= $value['gender'] ?></td>
                        <td><?= $value['age'] ?></td>
                        <td><?= $value['dob'] ?></td>
                        <td style="text-align: center;">
                            <a href="/view_records/<?= $value['id'] ?>" class="a-table label label-info" data-param="<?= $value['id']; ?>"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp; Consult</a>
                        </td>
                    </tr>
                <?php } ?>

            </table>
            <?php } ?>
        </div>
    </div>
    <br/>
</div>

