<!DOCTYPE html>
<html>
<head>
	<title>TRIPS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

      <div class="container-fluid" style="text-align: right">
        <a href="<?php echo base_url().'dashboard/user'; ?>" class="btn btn-primary btn-lg" ">Back</a>
      </div>
      <div class="container-fluid" style="color: black; padding: 20px; text-align: center;">
          <label style="font-size: 50px; font-weight: bold; ">TRIPS</h1>
      </div>
	   <div class="container-fluid" style="text-align: center">
          <div class="group row">
          <?php 
            if($trips){
              foreach($trips as $post){

          ?>
          <div class="col-md-6">
          <?php if($post->user!=$this->session->userdata('post_name')):?>
            <?php if($post->user==$post->leader):?>

            <div class="container" id="posts">
              <?php echo '<h2 >'.$post->name.'</h2>'; ?>
               <?php echo '<label style="font-size:20px;">'.$post->destination.'</label>'; ?><br/>
              <?php 
                if($tourist){
                  foreach($tourist as $img){

              ?>
                  <?php if($post->destination==$img->tourist_name):?>
                    <img style="width: 100%;"; src="<?php echo base_url().'assets/upload/'.$img->ts_image;?>">
                    <?php echo '<label style="font-size:15px;"> Address: '.$img->address.'</label>'; ?><br/>
                    <?php echo '<label style="font-size:15px;"> Estimated Expenses: '.$img->price.'</label>'; ?><br/>
                  <?php endif;?>
                
                <?php
                  }
                }
              ?>
			  <?php echo '<label style="font-size:15px;"> Origin: '.$post->origin.'</label>'; ?><br/>
              <?php echo '<label style="font-size:15px;"> Date: '.$post->date.'</label>'; ?><br/>
			  <?php echo '<label style="font-size:15px;"> Trip Leader: '.$post->user.'</label>'; ?><br/>
 <a href="<?php echo base_url().'trips/requestjoin/'.$this->session->userdata('post_name'). '/'.$post->id; ?>" class="btn btn-success btn-sm" ">Join Trip</a><hr/>
             <!--   <?php foreach($rest as $test):?>
                  <?php if($post->id == $test->tripid && $test->restriction == 'viewer'):?>
                    <label href="<?php echo base_url().'trips/jointrip/'.$this->session->userdata('post_name'). '/'.$post->id; ?>" class="btn btn-dark btn-sm" ">Requested</label><hr/>
                  <?php endif;?>
                  
                <?php endforeach;?>
                <?php if($post->id == $test->tripid && $test->restriction == '' ):?>
                    <a href="<?php echo base_url().'trips/requestjoin/'.$this->session->userdata('post_name'). '/'.$post->id; ?>" class="btn btn-success btn-sm" ">Join Trip</a><hr/>
                  <?php endif;?> -->

            </div>
          <?php endif;?>
          <?php endif;?>
          </div>  
          <?php
            }
          }
        ?>
        </div>
    </div>
</body>
</html>