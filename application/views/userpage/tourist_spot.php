<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
	<title>EXPLORE PINAS</title>  
			

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="<?php echo base_url(); ?>assets/css/tour.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/color/default.css" rel="stylesheet">
	<!--include bootstrap social -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-social.css">
<style>
			#posts{
					background-color: #fafafa;
					margin-bottom: 40px;
					padding: 20px;
					border-radius: 2px;
				}
				</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
		
            <div class="navbar-header page-scroll ">
			
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
        <li class="active"><a href="#intro">Home</a></li>
		<li><a href="#login">Trips</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Places<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Must visit</a></li>
            <li><a href="<?php echo base_url().'dashboard/tourist_spot'; ?>">Tourist Spot</a></li>
			<li><a href="<?php echo base_url().'dashboard/editorspick'; ?>">Editors Pick</a></li>
          </ul>
        </li>
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Settings</a></li>
            <li><a href="<?php echo base_url().'aishiteru/logout'; ?>">Log out</a></li>
          </ul>
        </li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<br><br><br><br><br>
	<a href="<?php echo base_url().'dashboard/user'; ?>" class="btn btn-danger btn-lg" ">Back</a>
	<div class="container">
			<center><label style="color: black; font-size: 60px;">Tourist Spots</label></center>
			<br/>
			<div class="group row">
				<?php 
					if($spots){
						foreach($spots as $spot){

				?>
				
				
				<div class="col-md-4">
				<div class="row">
				
				<div class="wow bounceInUp" data-wow-delay="0.2s">
				<div class="team boxed-grey">
					
					<div class="inner">
					
				
				<div  id="posts">
						<?php echo '<h2 >'.$spot->tourist_name.'</h2>'; ?>
						<hr/>
						<?php if(!$spot->ts_image):?>
							<img style="width: 100%; position: relative; heigth: same-as-width;"; src="<?php echo base_url().'assets/default_photo/Logo.png';?>">
						<?php else:?>
							<img style="width: 100%; heigth:auto;"; src="<?php echo base_url().'assets/upload/'.$spot->ts_image;?>">
						<?php endif?>
						<hr/>
						<?php echo '<label style="font-size:15px;">'.$spot->address.'</label>'; ?>
					</div>
					</div>
				</div>
				</div>
				</div>
				</div>
				
				
				
				
				<?php
						}
					}
				?>
			</div>
		</div>

    
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2018 - EXPLOREPINAS. All rights reserved.</p>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>	
	<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

</body>

</html>
