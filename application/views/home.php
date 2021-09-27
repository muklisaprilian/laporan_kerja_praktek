<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Apps Administrasi IRP|Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
        <body style="background-color:#000a0a;">
          
          <form action="<?php echo base_url('login/masuk');?>" method="post">
               <div class="col-md-4 col-md-offset-4" style="margin-top:10%">
                    <div class="panel panel-default"><center><b>Welcome Admin</b></center>
                          <div class="panel-body">
                              <div class="row form-group">
                              <label class="col-md-3"><i class="fa fa-user"></i></label>
                              <div class="col-md-9" >
                                   <input type="text" name="username" class="form-control input-sm" id="username" placeholder="Username" required>
                              </div>
                              </div>

                              <div class="row form-group">
                              <label class="col-md-3"><i class="fa fa-lock"></i></label>
                              <div class="col-md-9">
                              <input type="password" name="password" class="form-control input-sm" id="password"  placeholder="Password" required>
                              </div>
                              </div>

                              <div class="row form-group">
                              <label class="col-md-3"></label>
                              <div class="col-md-9">
                              <button type="submit" class="btn btn-info btn-sm">LOGIN</button>
                              </div>
                              </div>
                        </div>
                  </div>

          <?php
          if($this->session->flashdata('pesan') <> ''){
          ?>
               <div class="alert alert-dismissible alert-danger">
                    <?php echo $this->session->flashdata('pesan');?>
               </div>
          <?php
          }
          ?>
                </div>
        </form>
        </body>
</html>
