<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>GIS Usaha  Bandung Barat</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/bootstrap/navbar-fixed-top.css" rel="stylesheet">
    <style>
      #map-canvas {
        height: 500px;
      
      }
      #message{
        color:red;
      }
    </style>

  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GIS Usaha Bandung Barat</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($active == "home"){ echo 'class="active"';} ?>><a href="<?php echo base_url();?>">Home</a></li>
            <li <?php if($active == "about"){ echo 'class="active"';} ?>><a href="<?php echo base_url();?>welcome\about">About</a></li>
            <li <?php if($active == "contact"){ echo 'class="active"';} ?>><a href="<?php echo base_url();?>welcome\contact">Contact</a></li>
            <?php if ($this->ion_auth->logged_in()){?>
            <li  ><a href="<?php echo base_url();?>dinas">Dashboard</a></li>
            <?php }?>
          </ul>
         
          <ul class="nav navbar-nav navbar-right">
           <?php if (!$this->ion_auth->logged_in()){?>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
              <div class="dropdown-menu" style="padding:17px;width:400px;">
              <form class="form" id="formLogin"> 
                <div id="message"></div>
                <div class="form-group">
                  <label for="no_ktp">No Ktp</label>
                  <input type="email" class="form-control" id="no_ktp" placeholder="No Ktp" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <button type="button" id="btnLogin" class="btn">Login</button>
                <a href="<?php echo base_url();?>welcome\daftar">Daftar</a> | <a href="">Forgot Password</a>
              </form>
            </div>
            </li>
            <?php }else{ ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php  echo $this->ion_auth->users()->result()[0]->first_name;?> 
                  <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                   <li><a href="<?php echo base_url();?>auth/logout">Logout</a></li>
                </ul>
              </li>
            <?php }?>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
        <?php $this->load->view($content);?>    
    </div> <!-- /container -->
    <input type="hidden" id="base_url" value="<?php echo base_url();?>">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
     
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
    
  </body>
</html>
