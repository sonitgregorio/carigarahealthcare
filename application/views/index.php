<style>
    .header{
        background-image: url('assets/images/doctor.jpg');
        background-position: top;
        background-repeat: no-repeat;
        background-size: 100%;
        height: 600px;
        margin-top: 2%;
    }
    .row{
        margin-left: 0;
        margin-right: 0;
    }
</style>
<div class="row">
    <nav class="navbar nav-head" role="navigation" style="background-color:#4c4c4c">
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
                    <img class="img-logo" src="<?php echo base_url('assets/images/seal.jpg'); ?>" style="border-radius: 20px">
                    <h2 class="hd-title"><a class="title" href="<?php echo base_url(); ?>">Carigara Health Care
                            Center</a></h2>
                </div>
            </div>
        </div>
    </nav>
</div>
    <div class="row">
        <div class="col-md-12 header">
            <div class="col-md-4">

            </div>
            <div class = "col-md-4">
                <form class="form-horizontal login" action="/verify" style="box-shadow:  0px 0px 10px gray;margin-top: 30%;" method="post" role="form">
                    <h2 class="sign">
                        <b>Sign in</b>
                    </h2>
                    <?php echo $this->session->flashdata('message') ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                     <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                       <button class="btn btn-primary" type="submit">Sign in</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-4">
<!--                <img src="--><?//= base_url('assets/images/seal.jpg'); ?><!--" style="margin-top: 5%;width: 200px;height: 200px;float: right">-->
            </div>
          <br>
        </div>
    </div>