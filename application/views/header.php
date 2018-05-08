<!DOCTYPE html>
<html lang="en">
  <head>
   
     <title><?= $meta_title;?></title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="<?= $this->config->item('cdn'); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="<?= $this->config->item('cdn'); ?>css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="<?= $this->config->item('cdn'); ?>css/superslides.css">
    <!-- Slick slider css file -->
    <link href="<?= $this->config->item('cdn'); ?>css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='<?= $this->config->item('cdn'); ?>css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="<?= $this->config->item('cdn'); ?>css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="<?= $this->config->item('cdn'); ?>css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="<?= $this->config->item('cdn'); ?>css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="<?= $this->config->item('cdn'); ?>css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="<?= $this->config->item('cdn'); ?>css/style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href="<?= $this->config->item('cdn'); ?>css/css1.css" rel='stylesheet' type='text/css'>   
    <link href="<?= $this->config->item('cdn'); ?>css/css2.css" rel='stylesheet' type='text/css'>       
 
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->
  

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header" style="margin-top: -25px;">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
        <img src="<?= $this->config->item('cdn'); ?>img/maharashtrashashn.gif" class="Maharashtra" alt="img">
        <a class="navbar-brand" id="name" style="margin-top: 34px;"> </br>Goverment Medical College And Hospital <span>Jalgaon(MH)</span></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav" style="margin-top: -13px;">
                <li class="active"><a href="<?php echo base_url();?>home">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">About Institution</a></li>
                     <li><a href="<?php echo base_url();?>about_us/about_hospital">About Hospital</a></li>
                     <li><a href="#">About Jalgaon</a></li>        
                  </ul>
                </li>  
        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Department<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                     <li><a href="<?php echo base_url();?>pre_clinical">Pre-Clinical</a></li>
					 <li><a href="<?php echo base_url();?>clinical">Clinical</a></li> 
                     <li><a href="<?php echo base_url();?>para_clinical">Para-Clinical</a></li>              
                  </ul>
                </li>  
        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Academics<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="Course.html">Courses</a></li>
                 <li><a href="Fee_Structure.html">Fee Structure</a></li>
                 <li><a href="AdmittedStudent.html">Admitted students</a></li> 
              
                  </ul>
                </li>  
        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Student Corner<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                     <li><a href="#">Campus News</a></li>
                     <li><a href="#">Downloads</a></li>
                     <li><a href="#">Campus Events</a></li>
					 <li><a href="https://muhs.ac.in">Affiliated University</a></li>
               
                  </ul>
                </li>  
        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Campus<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                     <li><a href="#">Infrastructure</a></li>
                 <li><a href="#">Hostel</a></li>
                     <li><a href="#">Library</a></li>
              
                  </ul>
                </li>  
        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">News<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                   <li><a href="<?php echo base_url();?>notification">Notifications</a></li>
                   <li><a href="<?php echo base_url();?>tender">Tender</a></li>
                   <li><a href="<?php echo base_url();?>quotation">Quotation</a></li>             
                  </ul>
                </li>  
                 <li><a href="<?php echo base_url();?>commities">Collgeg Committees</a></li>
                 <li><a href="<?php echo base_url();?>rti">RTI</a></li>
                <!--<li><a href="<?php base_url();?>gallery">Gallery</a></li>-->
				<li><a href="#">Gallery</a></li>
                <li><a href="<?php echo base_url();?>contact">Contact</a></li>
                
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 
