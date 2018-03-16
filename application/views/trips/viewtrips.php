<!DOCTYPE html>
<html>
<head>
	<title>Make Trip</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
      body{
        font-family: century gothic;
        background-color: black;
      }
      #posts{
          background-color: white;
          margin-bottom: 40px;
          padding: 20px;
          border-radius: 2px;
          width: 90%;
        
        }
  </style>
</head>
<body>

      <div class="container-fluid" style="text-align: right">
        <a href="<?php echo base_url().'dashboard/user'; ?>" class="btn btn-primary btn-lg" ">Back</a>
      </div>
      <div class="container-fluid" style="color: white; padding: 20px; text-align: center;">
          <label style="font-size: 50px; font-weight: bold; ">MY TRIPS</h1>
      </div>
      <div class="container" >
        <center><?php
                if($this->session->flashdata('success_msg')){
                ?>
                    <div class="alert alert-success">
                      <?php echo $this->session->flashdata('success_msg'); ?>
                    </div>
                <?php   
                  }
                ?>
                <?php
                    if($this->session->flashdata('error_msg')){
                ?>
                  <div class="alert alert-danger">
                   <?php echo $this->session->flashdata('error_msg'); ?>
                  </div>
                <?php   
                  }
                 ?></center>
        </div>
      <div class="container-fluid" style="text-align: center">
          <div class="group row">
          <?php 
            if($trips){
              foreach($trips as $post){

          ?>
          <div class="col-md-6">
          <?php if($post->user==$this->session->userdata('post_name')):?>
            <div class="container" id="posts">
              <?php echo '<h2 >'.$post->name.'</h2>'; ?>
               <?php echo '<label style="font-size:15px;"> Destination: '.$post->destination.'</label>'; ?><br/>
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
              <?php echo '<label style="font-size:15px;"> Date: '.$post->date.'</label>'; ?><hr/>
             
              <?php if($this->session->userdata('post_name')==$post->leader):?>
                  <a href="<?php echo base_url('dashboard/editTrip/'.$post->id); ?>" class="btn btn-success btn-sm">Edit Trip</a>
              <?php endif?>
              <a href="<?php echo base_url('dashboard/cancelTrip/' .$post->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to cancel this trip?');">Cancel Trip</a>

            </div>
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