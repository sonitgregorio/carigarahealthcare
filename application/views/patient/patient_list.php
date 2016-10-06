<div class="col-md-3"></div>
<div class="col-md-9 container_margin">
    <div class="panel p-body">
        <div class="panel-heading"><h4>Patient List</h4></div>
        <div class="panel-body">
            <?= $this->session->flashdata('message') ?>
            <div class="col-md-12">
                <br/>
                <table class="table table-striped table-bordered table-hover" id="dataTable">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Contact</td>
                        <td>Gender</td>
                        <td>Name</td>
                        <td>Date of Birth</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($this->patientsmd->get_patient() as $key => $value) { ?>
                        <tr>
                            <td><?= $value['firstname'] . ' ' . $value['lastname'] ?></td>
                            <td><?= $value['contact'] ?></td>
                            <td><?= $value['gender'] ?></td>
                            <td><?= $value['age'] ?></td>
                            <td><?= $value['dob'] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br/>
</div>