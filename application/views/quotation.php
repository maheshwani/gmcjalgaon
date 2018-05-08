<style type="text/css">
.title_area{
  margin-top: -80px;
}
</style>
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="commities">
      <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Quotation</h2>             
            </div>
          </div>
       </div>
      <div class="container">
            <div class="row">
            <!-- Table Element -->
				<div class="col-md-12 no-pad col-xs-12 col-sm-12 animated" data-wow-delay="0.5s" data-wow-offset="200">
					<?php foreach($quotation as $key => $val){?>
						<div class="row  margin-top border-bottom">
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 fadeInDown wow animated" style="visibility: visible;">
								<div class="blog-box-title" style="font-size: 18px;color: #15adcc;padding: 15px 15px;width: 100%;">
								<?php echo $val['quotation_title'];?></div>
								<div class="post-meta" style="border-bottom:none;width:60%;float:left;"> 
									<span class="post-date"><?php echo date('d F Y', strtotime($val['date']));?></span>
								</div>
								<div style="float:right;width:40%;border-top:none;margin-top:0px;line-height:50px;">
									<a href="<?php echo IMAGE_PATHBK.$val['quotation'];?>" target="_blank" style="color: #15adcc;">Read More &gt;</a>
								</div>
							</div>
						</div><hr>
					<?php }?>
				</div>
            </div>
        </div>
     </div>
    
    
   
 