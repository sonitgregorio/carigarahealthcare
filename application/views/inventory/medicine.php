<div class="col-md-3"></div>
<div class="col-md-9 container_margin">
    <div class="panel p-body">
        <div class="panel-heading"><h4>Medicine Management Panel</h4></div>
        <div class="panel-body">
            <?= $this->session->flashdata('message') ?>
            <div id="medMessage"></div>
            <form class="form-horizontal" id="medic" action="/save_med" method="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-3 control-label padding_z" for="">Medicine Name</label>
                        <div class="col-sm-9 ">
                            <input type="text" class="form-control" name="medname" id=""
                                   placeholder="Enter Medicine Name" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">Amount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="amount" id="" placeholder="Amount" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="qty" id="" placeholder="Qunatity" required>
                        </div>

                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <br/><br/>
                </div>

            </form>


            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <td>Medicine Name</td>
                    <td>Amount</td>
                    <td>Remaining Quantity</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->medicinemd->get_medicine() as $key => $value) { ?>
                    <tr>
                        <td><?= $value['med_desc'] ?></td>
                        <td><?= $value['price'] ?></td>
                        <td><?= $value['qty']?></td>
                        <td>
                            <a class="a-table label label-info edit_user" href="#" data-param="">Edit<span
                                    class="glyphicon glyphicon-pencil"></span></a>
                            <a class="a-table label label-danger" href="#" onclick="return confirm('Are you Sure ?')">Delete
                                <span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <br/>
</div>