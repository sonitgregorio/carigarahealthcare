<div class="col-md-3"></div>
<div class="col-md-9 body-container">
    <div class="panel p-body">
        <div class="panel-heading search">
            <div class="col-md-6">

                <h4 style="font-size:25px">Payslip Record</h4>


            </div>

        </div>
        <div class="panel-body">
        <?php echo $this->session->flashdata('message') ?>
            <table class="table table-striped table-bordered table-hover" id="dataTable">
                <thead>
                <tr style="text-align: center;">
                    <td>Date of Entry</td>
                    <td>Payroll Period <?php echo $this->session->userdata('pid') ?></td>
                    <td style="width: 100px">Action</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->payrollmd->getPaysliprecord($this->session->userdata('pid')) as $key => $value) { ?>
                    <tr>
                        <td><?php echo $value['date_entry'] ?></td>
                        <td><?php echo $value['date_from'] . ' - ' .  $value['date_to']?></td>
                        <td style="text-align: center;">
                            <a href="/my_payslip/<?php echo $value['id'] ?>" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
