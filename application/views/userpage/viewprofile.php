<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXPLOREPINAS</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="<?php echo base_url();?>assets/css/prof.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!-- Preloader -->
    <div id="preloader">
      <div id="load"></div>
    </div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
               <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                    <li><a><font font size="5">EXPLOREPINAS</font></a></li>
                </ul>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url().'dashboard/user'; ?>">Home</a></li>
        <li><a href=<?php echo base_url().'dashboard/viewtrips'; ?>">Trips</a></li>
     
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Places <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Must Visit</a></li>
            <li><a href="<?php echo base_url().'dashboard/tourist_spot'; ?>">Tourist Spot</a></li>
            <li><a href="<?php echo base_url().'dashboard/editorspick'; ?>">Editor's Choice</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
          <ul class="dropdown-menu">
        
            <li><a href="<?php echo base_url().'aishiteru/logout'; ?>">Log Out</a></li>
           
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section id="contact" class="home-section text-center">

        <div class="heading-contact">

            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  
                    <div class="section-heading">
              <h1>   <?php echo 'WELCOME, '.$this->session->userdata('post_name'). '</h1>'?>
                    </div>
                    </div>
                </div>
            </div>
            </div>
   
         <?php echo form_open_multipart('dashboard/create_post_in_profile');?>
        <div class="container">

         <input type="hidden" name="editors" value="1">
         <input type="hidden" name="post_name" value="<?php echo $this->session->userdata('post_name');?>">
    <div class="row">
        <div class="col-lg-14 col-md-offset-1 well well-xs ">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 well well-lg ">
                        <h2>Share your Story </h2>
                     <div class="form-group">
                            
                            <input type="text" name="title" class="form-control" placeholder="Title"  required="required" />
                        </div>
                        <div class="form-group">
                       <textarea class="form-control" name="body" placeholder="Add Body" required rows="5"></textarea>
                        </div>
                        <div class="form-group">
                          
                            <input  type="file" name="userfile" >
                        </div>
                        
                      
                        
                    <div class="form-group">  
                    <input type="submit" name="insert" value="Create Post" class="btn btn-success btn-md"/> 
                   
                </div>  
            </div>
        </div>
    </div>
</div>

               <hr/><br/><br/>
               
        <center><label><h2>My Posts</h2></label></center><br/>
        <div class="group row">
            <?php 
                if($posts){
                    foreach($posts as $post){

            ?>
            <div class="col-md-9">
                  <div class="row">
            <?php if($post->post_name==$this->session->userdata('post_name')):?>
                <div class="container" >
                    <div class="boxed-grey">
                <form id="contact-form">
              
                    <a href="" style="font-size: 20px"><?php echo '@'.$post->post_name;?></a><hr/>
                    <?php echo '<h2 >'.$post->title.'</h2>'; ?><br/>
                    <?php if(!$post->post_image):?>
                        <img style="width: 70%;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
                    <?php else:?>
                        <img style="width: 70%;"; src="<?php echo base_url().'assets/uploadposts/'.$post->post_image;?>">
                    <?php endif?>
                    <br>
                    <?php echo '<label style="font-size:20px;">'.$post->body.'</label>'; ?><hr/>
                    <a href="<?php echo base_url('dashboard/editpost_inprofile/'.$post->id); ?>" class="btn btn-success">Edit</a>
                    <a href="<?php echo base_url('dashboard/deletepost_inprofile/' .$post->id) ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>

                </div>
            <?php endif;?>
            </div>  
            <?php
                }
            }
        ?>
        </div>

                   
                </div>
                </form>
            </div>
        </div>
        
        
    </div>  

        </div>
    </section>
    <!-- /Section: contact -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    
                    <p>About US</p>
                </div>
            </div>  
        </div>
    </footer>

    <!-- Core JavaScript Files -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>

</body>

</html>