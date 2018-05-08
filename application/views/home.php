
    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
          
            <!--<div id="slides" style="position: relative;overflow: hidden;width: 100%;height: 427px;margin-top: -52px;">
              <ul class="slides-container">                          
                <li>
					<img src="<?= $this->config->item('cdn'); ?>img/slider/2.jpg" alt="img">
					<div class="slider_caption">                    
					</div>
                </li>
              
                <li>
                  <img src="<?= $this->config->item('cdn'); ?>img/slider/3.jpg" alt="img">
                   <div class="slider_caption slider_right_caption">                    
                  </div>
                </li>
               
                <li>
                  <img src="<?= $this->config->item('cdn'); ?>img/slider/4.jpg" alt="img">
                   <div class="slider_caption">                    
                  </div>
                </li>
              </ul>
              <nav class="slides-nvigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>-->
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->
  
    
    <!--=========== BEGIN DIN SECTION ================-->

<section id="photo">
    <div class="container panel-default">
        <div class="row">
      
        <div class="col-md-12">          
          <div class="col-lg-12 col-md-12 col-sm-12"> 
            <div class="title_area">
              <h2 class="title_two" style="margin-left: -750px;">Dean's Desk</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <div class="col-md-12" style="text-align: center;">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="single_course">                
			    <img alt="" class="img-rounded" style="width:400px; height: 350px; border-color: #000000;" 
				src="<?= $this->config->item('cdn'); ?>img/HongovernorPhoto.jpg">                                  
				<div class="singCourse_content">
				  <b><span style="font-size: 16px;color: #313338;">Dr. B S Khaire</span><br></b>
				  <strong>Dean Gov. Medical College, Jalgaon</strong><br>
				  <strong>(MBBS , MS)</strong><br>
				  <strong>Mob. No:- 9511636626 / STD & Fax :- 0257- 2232390</strong><br>
				</div>
				<div>                  
				  <p></p>
				</div>
            </div>            
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="single_course">              
                <img alt="" class="img-rounded" style="width: 400px; height: 350px; border-color: #000000;" 
                  src="<?= $this->config->item('cdn'); ?>img/KiranSir.jpg">                              
              <div class="singCourse_content">
                <b><span style="font-size: 16px;color: #313338;">Dr. Kiran Patil</span><br></b>
					<strong>Medical Superitendent</strong><br>
					<strong>Gov. Medical College & Hospital, Jalgaon</strong><br>
					<!--<strong>He is specialised in </strong><br>-->
					<strong></strong><br>
              </div>
              <div>                
                <p></p>
              </div>
            </div>
          </div>  

			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="newsfeed_area wow fadeInRight">
					<ul class="nav nav-tabs feed_tabs" id="myTab2">
					  <li class="active"><a href="#news" data-toggle="tab" style="font-size: 15px;">Notification</a></li>
					  <li><a href="#notice" data-toggle="tab" style="font-size: 15px;">Tender</a></li>
					  <li><a href="#events" data-toggle="tab" style="font-size: 15px;">Quotation</a></li>         
					</ul>

					<!-- Tab panes -->            
					<div class="tab-content">
					  <!-- Start news tab content -->
					  <div class="tab-pane fade in active" id="news">                
						<ul class="news_tab">
							<marquee scrollamount = "3" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
								<?php foreach ($notification as $key => $val){?>
								  <li>                  
									<div class="media">								                   
									  <div class="media-body">
									   <a href="<?php echo IMAGE_PATHBK.$val['notification'];?>" target="_blank"><?php echo $val['notification_title'];?></a>
									   <span class="feed_date"><?php echo date('d F Y', strtotime($val['date']));?></span>
									  </div>
									</div>                    
								  </li>						  
								<?php }?>
							</marquee>
						</ul>                
					  </div>
					  <!-- Start notice tab content -->  
					  <div class="tab-pane fade " id="notice">
						<div class="single_notice_pane">
						  <ul class="news_tab">
							<marquee scrollamount = "3" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
								<?php foreach($tender as $key => $val){?>
									<li>
									  <div class="media">									
										<div class="media-body">
										 <a href="<?php echo IMAGE_PATHBK.$val['notification'];?>" target="_blank""><?php echo $val['notification_title'];?></a>
										 <span class="feed_date"><?php echo date('d F Y', strtotime($val['date']));?></span>
										</div>
									  </div>                   
									</li>	
								<?php }?>								
							</marquee >                    
							</ul>
						</div>               
					  </div>
					  <!-- Start events tab content -->
					  <div class="tab-pane fade " id="events">
						<ul class="news_tab">							
							<marquee scrollamount = "3" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
								<?php foreach($quotation as $key => $val){?>
									<li>
										<div class="media">							  
										  <div class="media-body">
										   <a href="<?php echo IMAGE_PATHBK.$val['quotation'];?>" target="_blank""><?php echo $val['quotation_title'];?></a>
										   <span class="feed_date"><?php echo date('d F Y', strtotime($val['date']));?></span>
										  </div>
										</div>
									  </li>			
								<?php }?>								  
							</marquee>    							
						</ul>					
					  </div>
					</div>
				</div>
            </div> 

        </div>
      </div>
    </div>
</section>
    <hr style="border-top: 4px solid #78adc9;">  
    <!--=========== END DIN SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">About Us</h2>
            <p></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 

    <!--=========== BEGIN WHY US SECTION ================--

      <div class="row">        
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_top">
            <div class="container">

              <div class="row">
                <div class="col-lg-12 col-md-12"> 
                  <div class="title_area">
                    <h2 class="title_two">Why Us</h2>
                    <span></span> 
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-desktop"></span>
                    </div>
                    <h3>Technology</h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-users"></span>
                    </div>
                    <h3>Best Tutor</h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-flask"></span>
                    </div>
                    <h3>Practical Training</h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-support"></span>
                    </div>
                    <h3>Support</h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>        
      </div>

    </section>
    <!--=========== END WHY US SECTION ================-->  
    