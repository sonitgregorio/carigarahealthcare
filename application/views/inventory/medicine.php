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
                    <td style="text-align:center;max-width: 50px">Action</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->medicinemd->get_medicine() as $key => $value) { ?>
                    <tr>

                        <td><?= $value['med_desc'] ?></td>
                        <td><?= $value['price'] ?></td>
                        <td><?= $value['qty']?></td>
                        <td style="text-align:center">
                            <a class="a-table label label-info add_stock" href="#" data-param1="<?= $value['id']?>" data-param="<?= $value['qty']?>"><span
                                    class="glyphicon glyphicon-eye-open"></span>&nbsp;Add Stock</a>

                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

            <div class="modal fade  stocks_ad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <form action="/add_stock" method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" style="color:black" id="myModalLabel">Enter number of stocks:</h4>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="rem_qty" class="form-control">
                            <input type="text" name="medid" class="form-control">
                           <input type="text" class="form-control" name="t_stocks" required/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <br/>
</div>