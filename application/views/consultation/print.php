<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carigara Health Care Center</title>

    <link rel="icon" type="image/jpg" href="<?php echo base_url('assets/images/ico.gif'); ?>">
    <link rel="shortcut icon" type="image/jpg" href="<?= base_url('assets/images/seal.jpg'); ?>">

    <!-- ================================ css library ================================== -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jasny-bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datatable.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/select2.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/select2-bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <!-- =============================================================================== -->

</head>
<body>
<div class="row">
    <nav class="navbar nav-head" role="navigation" style="background-color:#4c4c4c;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                    <!--                    <img class="img-logo" src="-->
                    <?php //echo base_url('assets/images/seal.jpg'); ?><!--"-->
                    <!--                         style="border-radius: 20px">-->
                    <!--                    <h2 class="hd-title"><a class="title" href="-->
                    <?php //echo base_url(); ?><!--">Carigara Health Care-->
                    <!--                            Center</a></h2>-->
                    <div style="margin-top:15%">
                        <button class="btn btn-primary" onclick="window.print()"><span class="glyphicon glyphicon-print"></span>&nbsp;&nbsp;Print
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <?php $total = 0; ?>
    <div class="col-md-10 col-md-offset-1 print_this">
         <center>
            <h3 style="color:black">Carigara Healt Care</h3>
            <h3 style="color:black">Carigara Leyte</h3>
            <h4 style="color:black">Contact: 090909090909</h4>
        </center>


        <?php
            $get_name = $this->medicinemd->get_name($cid);
        ?>
       <table class="table table-striped table-bordered table-hover">

            <tr>
                <td>Name:</td>
                <td><?php echo $get_name['fname'] ?></td>
                <td>Date:</td>
                <td><?php echo date('Y-m-d') ?></td>
            </tr>
           <tr>

            </tr>
        </table>


        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Medicine</th>
                <th>Note</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            <?php foreach ($this->medicinemd->get_record_prescribe($cid) as $key => $value) { ?>
                <tr>
                    <td><?= $value['med_desc'] ?></td>
                    <td><?= $value['note'] ?></td>
                    <td><?= $value['qty'] ?></td>
                    <td><?= $value['price'] ?></td>
                    <td style="text-align: right"><?= $value['total'] ?></td>

                </tr>
                <?php
                $total += $value['total'];
            } ?>
            <tr style="background-color: #4c4c4c">
                <td colspan="4" style="text-align: center;background-color: #4c4c4c;color:white">Total Amount</td>
                <td style="text-align: right;background-color: #4c4c4c;color:white"><?= number_format($total, 2, '.', ',') ?></td>
            </tr>
        </table>

        <?php
            $user = $this->medicinemd->get_userProfile($this->session->userdata('uid'));
        ?>


        <table class="table" style="width: 50%;border: 1px solid white">

            <tr>
                <td>Doctor:</td>
                <td><?php echo $user['fname'] ?></td>
            </tr>
            <tr>

            </tr>
        </table>
    </div>


</div>
<br />
<br />
</body>