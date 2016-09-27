<div class="col-md-3"></div>
<div class="col-md-9 container_margin">
    <div class="panel p-body">
        <div class="panel-heading"><h4>Add Employee</h4></div>
        <div class="panel-body">
            <?= $this->session->flashdata('message') ?>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Date of Birth</th>
                    <th>Action</th>
                </tr>
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
        </div>
    </div>
    <br/>
</div>

