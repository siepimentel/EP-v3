<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXPLOREPINAS</title>

   <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
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
                <a class="navbar-brand" href="index.html">
                    <h1>EXPLORE PINAS</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">About</a></li>
		<li><a href="#service">Service</a></li>
		<li><a href="#contact">Sign Up</a></li>
		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Places <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Must Visit</a></li>
            <li><a href="#">Most Visit</a></li>
            <li><a href="#">Editor's Choice</a></li>
          </ul>
        </li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	
	
	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="section-heading">
					<h1>Add Tourist Spot </h1>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
    <div class="row">
        <div class="col-lg-14 col-md-offset-1 ">
         <div class="form-group row">
				<br/><br/>
				<label for="title" class="col-md-2 text-center">Tourist Spot</label>
				<div class="col-md-10">
					<input type="text" name="txt_tourist_name" class="form-control" required>
				</div>
			</div>
			<?php echo form_open_multipart('main/submit');?>
		
		<!--<form action="<?php echo base_url('main/submit') ?>" method="post" class="form-horizontal"> -->
			<div class="form-group row">
				<label for="desc_name" class="col-md-2 text-center">Description</label>
				<div class="col-md-10">
					<input type="text" name="txt_desc_name" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="reg_name" class="col-md-2 text-center">Region</label>
				<div class="col-md-10">
					<input type="text" name="txt_reg_name" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="prov_name" class="col-md-2 text-center">Province</label>
				<div class="col-md-10">
					<input type="text" name="txt_prov_name" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="city_name" class="col-md-2 text-center">City</label>
				<div class="col-md-10">
					<input type="text" name="txt_city_name" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-2 text-center">Upload Image</label>
				<input type="file" name="userfile" required >
			</div>
			<div class="form-group ">
				<label class="col-md-2 text-center"></label>
				<div class="col-md-12">
					<input type="submit" name="btnSave" class="btn btn-success btn-lg" value="Save">
					<a href="<?php echo base_url('gomenasai/tourist_spot'); ?>" class="btn btn-danger btn-lg">Back</a>
				</div>
			</div>
		</form>
	
	</div>
</div>
        </div>
		
		
    </div>	

		</div>
	</section>


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
