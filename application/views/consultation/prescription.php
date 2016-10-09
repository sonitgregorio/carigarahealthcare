<?php
$total =0;
?>
<div class="col-md-3"></div>
<div class="col-md-9 container_margin">
    <div class="panel p-body">
        <div class="panel-heading"><h4>Prescription</h4></div>
        <div class="panel-body">
            <?= $this->session->flashdata('message') ?>
            <form class="form-horizontal" method="POST" action="/save_prescribe">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Medicine</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="medid" id="med_change">
                                <option>Select Medicine</option>
                                <?php foreach ($this->medicinemd->get_medicine() as $key => $value) { ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['med_desc'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Note</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="note" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="preprice" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Quantity</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="preqty" required>
                        </div>
                    </div>

                    <input type="hidden" class="form-control" name="remaining_qty">
                    <input type="hidden" class="form-control" name="cid" value="<?= $cid ?>">
                    <button class="btn btn-primary pull-right add_pre">Add</button>
                    <br/>
                    <br/>
                </div>

            </form>


            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>Medicine</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($this->medicinemd->get_record_prescribe($cid) as $key => $value) { ?>
                    <tr>
                        <td><?= $value['med_desc'] ?></td>
                        <td><?= $value['qty'] ?></td>
                        <td><?= $value['price'] ?></td>
                        <td style="text-align: right"><?= $value['total'] ?></td>
                        <td style="text-align: center;max-width: 10px">
                            <a href="/delete_pre/<?= $value['id'] . '/' . $cid ?>" class="a-table label label-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;
                                Remove</a>
                        </td>
                    </tr>
                <?php
                    $total += $value['total'];
                } ?>
                <tr style="background-color: #4c4c4c">
                    <td colspan="3" style="text-align: center;background-color: #4c4c4c;color:white">Total Amount</td>
                    <td style="text-align: right;background-color: #4c4c4c;color:white"><?=  number_format($total, 2, '.', ',') ?></td>
                    <td style="text-align: right;background-color: #4c4c4c;color:white"></td>
                </tr>

            </table>

            <div class="pull-right">
                <a href="/print/<?= $cid ?>" class="btn btn-success" target="_blank">Print</a>
                <a href="/consultation_done/<?= $cid ?>" class="btn btn-primary">Done</a>
            </div>
        </div>
    </div>
    <br/>
</div>

