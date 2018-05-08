<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $meta_title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= $this->config->item('cdn'); ?>css/bootstrap.min.css">
    <script src="<?= $this->config->item('cdn'); ?>js/jquery-1.11.0.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="<?= $this->config->item('cdn'); ?>js/bootstrap.min.js"></script>
    <style type="text/css">
      .logo
      {
        margin-top: -11px;
        color: #6cb670;
        font-family: Castellar;
      }
      .navbar-inverse
      {
        background-color: #2B2C30;
		height: 60px;
      }
      .navbar-nav
      {
        font-size: 18px;
      }
	  .navbar-right{
		  margin-top: 3px;
	  }
    </style>
</head>
<body>


<header id="navigation" class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
        <!-- responsive nav button -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>            
        </div>
<!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
          <ul id="nav" class="nav navbar-nav">
            <li class="current"><a href="<?= base_url();?>login_success">Home</a></li>
            <li><a href="<?= base_url();?>login_success/gallery">Gallery</a></li>    
			<li><a href="<?= base_url();?>login_success/notification">Notification</a></li>    
			<li><a href="<?= base_url();?>login_success/tender">Tender</a></li>    
			<li><a href="<?= base_url();?>login_success/quotation">Quotation</a></li>    
            <li><a href="<?= base_url('index.php/Login_success/logout');?>">Log Out</a></li>        
          </ul>
        </nav>
    </div>
</header>