<div class="col-md-3"></div>
<div class="col-md-9 container_margin">
    <div class="panel p-body">
        <div class="panel-heading"><h4>Medicine Management Panel</h4></div>
        <div class="panel-body">
            <?= $this->session->flashdata('message') ?>
            <div id="medMessage"></div>
            <form class="form-horizontal" action="/save_eq" method="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-3 control-label padding_z" for="">Eqpuipment Name</label>
                        <div class="col-sm-9 ">
                            <input type="text" class="form-control" name="eqname" id=""
                                   placeholder="Enter Equipment Name" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">Amount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sup_amount" id="" placeholder="Amount"
                                   required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="">Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="sup_qty" id="" placeholder="Qunatity"
                                   required>
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
                    <td style="text-align:center;max-width: 50px">Action</td>
                </tr>
                </thead>
                <tbody>
                <?php //foreach ($this->medicinemd->get_medicine() as $key => $value) { ?>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align:center">
                        <a class="a-table label label-info add_stock" href="#" data-param1="" data-param=""><span
                                class="glyphicon glyphicon-eye-open"></span>&nbsp;Add Stock</a>

                    </td>
                </tr>
                <?php //} ?>
                </tbody>
            </table>


        </div>
    </div>
    <br/>
</div>