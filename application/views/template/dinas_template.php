<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard GIS </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/bootstrap/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sistem Informasi Geografis Usaha Kab. Bandung Barat</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Hi, Fazhal</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="<?php echo base_url();?>auth/logout">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
           
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li <?php if($active == "overview"){ echo 'class="active"';} ?>><a href="<?php echo base_url();?>dinas">Overview</a></li>
            <li <?php if($active == "akun"){ echo 'class="active"';} ?>><a href="<?php echo base_url();?>dinas/akun">Data Akun</a></li>
            <li <?php if($active == "wilayah"){ echo 'class="active"';} ?>><a href="<?php echo base_url();?>dinas/wilayah">Data Wilayah</a></li>
            <li <?php if($active == "usaha"){ echo 'class="active"';} ?>><a href="<?php echo base_url();?>dinas/usaha">Data Usaha</a></li>
             <li <?php if($active == "report"){ echo 'class="active"';} ?>><a href="<?php echo base_url();?>dinas/report">Report</a></li>
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <?php $this->load->view($content);?>    
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>
   <script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#table-data-akun').dataTable({
          "iDisplayLength": 25
        });
      } );
    </script>
    
   
  </body>
</html>
