<?php
/*$result   = getEmpInfo($_SESSION['id']);
$row      = mysql_fetch_row($result);
$name     = $row[2]." ".$row[4];*/
?>
<div class="container-fluid main-body">

    <!-- ============================== header & navigation ============================ -->
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
                        <img class="img-logo" src="<?php echo base_url('assets/images/seal.jpg'); ?>"
                             style="border-radius: 20px">
                        <h2 class="hd-title"><a class="title" href="<?php echo base_url(); ?>">Carigara Health Care
                                Center</a></h2>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-3 side-bar-menu hidden-print">
            <div class="collapse navbar-collapse">
                <div class="panel-heading" style="border-radius:0px"><h4><?php echo "Dashboard" ?></h4></div>
                <?php if ($this->session->userdata('position') == 1) { ?>
                    <li class="list-group-item"><a class="menu">
                            <span class="glyphicon glyphicon-user"></span>&nbsp; &nbsp; Employee</a>
                        <ul class="sub-menu">
                            <li class="li-sub-menu">
                                <a class="menu <?= $nav == 'employee_list' ? 'active' : '' ?>" href="/employee_list">
                                    <span class="glyphicon glyphicon-th-list"></span>&nbsp; &nbsp; Employee List
                                </a>
                                <a class="menu <?= $nav == 'employee' ? 'active' : '' ?>" href="/add_employee">
                                    <span class="glyphicon glyphicon-plus"></span>&nbsp; &nbsp; Add Employee
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item ">
                        <a class="menu <?= $nav == 'equipment' ? 'active' : '' ?>" href="/equipment">
                            <span class="glyphicon glyphicon-tint"></span>&nbsp; &nbsp; Equipment List
                        </a>
                    </li>
                    <li class="list-group-item ">
                        <a class="menu <?= $nav == 'payroll' ? 'active' : '' ?>" href="/payrolls">
                            <span class="glyphicon glyphicon-stats"></span>&nbsp; &nbsp; Payroll
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('position') == 3) { ?>
                    <li class="list-group-item"><a class="menu">
                            <span class="glyphicon glyphicon-hand-up"></span>&nbsp; &nbsp; Patient</a>
                        <ul class="sub-menu">
                            <li class="li-sub-menu">
                                <a class="menu <?= $nav == 'patient_list' ? 'active' : '' ?>" href="/patient_list">
                                    <span class="glyphicon glyphicon-th-list"></span>&nbsp; &nbsp; Patient List
                                </a>
                                <a class="menu <?= $nav == 'patient' ? 'active' : '' ?>" href="/patient">
                                    <span class="glyphicon glyphicon-plus"></span>&nbsp; &nbsp; Patient Registration
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

                <?php if ($this->session->userdata('position') == 4 || $this->session->userdata('position') == 3) { ?>
                    <li class="list-group-item ">
                        <a class="menu <?= $nav == 'consult' ? 'active' : '' ?>" href="/consultation">
                            <span class="glyphicon glyphicon-record"></span>&nbsp; &nbsp; Consultation
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('position') == 2) { ?>
                    <li class="list-group-item ">
                        <a class="menu <?= $nav == 'inventory' ? 'active' : '' ?>" href="/inventory">
                            <span class="glyphicon glyphicon-tint"></span>&nbsp; &nbsp; Medicine Inventory
                        </a>
                    </li>
                <?php } ?>
                <li class="list-group-item ">
                        <a class="menu <?= $nav == 'view_payslip' ? 'active' : '' ?>" href="/view_payslip">
                            <span class="glyphicon glyphicon-tags"></span>&nbsp; &nbsp; Payslip
                        </a>
                    </li>


                <li class="list-group-item ">
                    <a class="menu <?= $nav == 'logout' ? 'active' : '' ?>" href="/logout">
                        <span class="glyphicon glyphicon-off"></span>&nbsp; &nbsp; Logout
                    </a>
                </li>
            </div>
        </div>
    </div>