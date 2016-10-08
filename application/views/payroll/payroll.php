<div class="col-md-3"></div>
<div class="col-md-9 body-container">
    <div class="panel p-body">
        <div class="panel-heading search">
            <div class="col-md-6">

                <h4 style="font-size:25px">Payroll</h4>


            </div>

        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-hover" id="dataTable">
                <thead>
                <tr style="text-align: center;">
                    <td>Name</td>
                    <td>Contact</td>
                    <td>Address</td>
                    <td>Position</td>
                    <td style="width: 200px">Action</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->payrollmd->get_List() as $value) { ?>
                    <tr>
                        <td><?= $value['firstname'] . ' ' . $value['lastname']  ?></td>
                        <td><?= $value['contact'] ?></td>
                        <td><?= $value['address'] ?></td>
                        <td><?= $value['description'] ?></td>
                        <td style="text-align: right">
                            <a href="" class="btn btn-success">Add Payslip</a>
                            <a href="" class="btn btn-success">View Record</a>
                        </td>
                    </tr>
               <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
