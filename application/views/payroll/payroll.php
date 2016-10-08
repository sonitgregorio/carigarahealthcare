<div class="col-md-3"></div>
<div class="col-md-9 body-container">
    <div class="panel p-body">
        <div class="panel-heading search">
            <div class="col-md-6">

                <h4 style="font-size:25px">Payroll Period List</h4>


            </div>

        </div>
        <div class="panel-body">
        <div class="col-md-12">
        <?php echo $this->session->flashdata('message') ?>
            <form class="form-horizontal" method="post" action="/payroll_period">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <label class="btn btn-default" disabled style="background-color: #FFF;color:black">From:</label>
                      </span>
                      <input type="date" class="form-control" placeholder="Search for..." name="date_from">
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="input-group">
                    <span class="input-group-btn">
                    <label class="btn btn-default" disabled style="background-color: #FFF;color:black">To:</label>
                        <!-- <button class="btn btn-default" type="button">To:</button> -->
                      </span>
                      <input type="date" class="form-control" placeholder="Date From" name="date_to">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Save!</button>
                      </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </form>
            <br/>
        </div>
            <table class="table table-striped table-bordered table-hover" id="dataTable">
                <thead>
                <tr style="text-align: center;">
                    <td>Date of Entry</td>
                    <td>Payroll Period</td>
                    <td style="width: 100px">Action</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->payrollmd->getPayroll() as $key => $value) { ?>
                    <tr>
                        <td><?php echo $value['date_entry'] ?></td>
                        <td><?php echo $value['date_from'] . ' - ' .  $value['date_to']?></td>
                        <td style="text-align: center;">
                            <a href="/payroll_view/<?php echo $value['id'] ?>" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
