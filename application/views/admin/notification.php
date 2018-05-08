<style type="text/css">
  .add
  {
    font-size: 20px;
    color: #6cb670;
  }
  hr{
    border-color: black;
  }
  .col
  {
  	padding-bottom: 10px;
  }
</style>

<div  class="container">
  <div class="row well">
    <form action = "" method = "POST" enctype="multipart/form-data">
    <span class="add">Add Notification</span>
     <?php 
      if($this->session->flashdata('message')){
        ?>
        <div class="alert alert-success">
          <strong>Success!</strong>Added Successfully.
        </div>
      <?php 
      }
    ?>  
    <hr>

	<div class="col-md-12 col">      
        <div class="form-group">
          <div class="col-md-3">
            <label for="exampleInputEmail1">Notification Title</label>
          </div>
          <div class="col-md-6">
    		    <input type="text" class="form-control" id="notification_title" name="notification_title" aria-describedby="fileHelp" required>
          </div>                    
        </div>
      </div>
	
      <div class="col-md-12 col">      
        <div class="form-group">
          <div class="col-md-3">
            <label for="exampleInputEmail1">Choose Image</label>
          </div>
          <div class="col-md-6">
    		    <input type="file" class="form-control-file" id="exampleInputFile" name="profileimg" aria-describedby="fileHelp" required>
          </div>                    
        </div>
      </div>
	  
      <input type="submit" class="btn btn-primary" placeholder="Submit" value="Submit" name="submit">
    </form> 
  </div>
</div>

<div class="container">
      <div class="row">
        <div class="col-md-12 well">
            <form class="form-horizontal" role="form">
              <?php 
                if($this->session->flashdata('success')){
                  ?>
                  <div class="alert alert-success">
                    <strong>Success!</strong> Product Deleted Successfully.
                  </div>
                <?php 
                }
              ?>  
          <div class="col-md-12">
          <div class="login-pop">           
          </div> 
           
            <table class="table table-bordered" id="example" style="margin-left: -28px;">
              <thead>
                <tr>
                  <th>Image</th>
				  <th>Date</th>
                  <th>Status</th>                
                  <th>Action</th>   
                </tr>
              </thead>
              <tbody>
				<?php foreach($notification_list as $key => $val){?>
					<tr>
						<td>
							<?php echo $val['notification_title']; ?>							
						</td>
						<td><?php echo $val['date']; ?></td>
						<td>
							<?php if($val['recStatus'] == '1'){ ?>
								<img src="<?= $this->config->item('cdn'); ?>img/active.jpg" class="status" style="height: 20px;"/> 
                    <?php }else{ ?>
                      <img src="<?= $this->config->item('cdn'); ?>img/delete.jpg" class="status" style="height: 20px;"/> 
							<?php } ?>
						</td>   
						<td style="text-align:center" width="200px">                                            
							<a id="delete" href="<?php echo site_url('Login_success/delete/?id='.$val['id'].'/notification');?>"><i class="glyphicon del glyphicon-trash" aria-hidden="true"></i></a>
						</td>
					</tr>
              <?php }?>
              </tbody>
            </table>
           </div>
            </form>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
</div>

<script>
/*Hide alert message*/
$(document).ready(function () {
   $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){   });
});
</script>