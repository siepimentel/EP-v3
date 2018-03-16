 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXPLOREPINAS</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="assets/css/sty.css" rel="stylesheet">
	<link href="assets/color/default.css" rel="stylesheet">
	<!--include bootstrap social -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-social.css">

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
		<li><a href="#login">Log in</a></li>
        <li><a href="#about">About</a></li>
		<li><a href="#service">Services</a></li>
		<li><a href="<?php echo base_url('aishiteru/signup'); ?>">Sign Up</a></li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h2>WELCOME TO EXPLORE PINAS<span class="text_color"></span> </h2>
			<h4>ITS MORE FUN IN THE PHILIPPINES</h4>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

		

	<!-- Section: login -->
    <section id="login" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Log in</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		 
		<div class="container">
		
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>

		
    <div class="row">
        <div class="col-lg-7">

            <div class="jumbotron">
            	<?php echo form_open('aishiteru/login_val')?>
                <form id="contact-form">
                <div class="row">
                   <div class="col-md-12">

                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" name="username2" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
							<input type="password" class="form-control" name="password2" placeholder="Password" required="required" />
							  <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?> 
                        </div>
						<br>
						 
						<div class=" col-md-13">
						<a href="#" target="_blank">Forgot your password?</a> 
							<button type="submit" class="btn btn-skin btn-primary btn-lg pull-right ">Log In!</button>
						</div>
						</div>
					
					
				</div>
						
						
                </form>
            </div>
		</div>
		
    </div>	
</div>
	
	</section>
	<!-- /Section: login -->
	
	
	
	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>About us</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
				
			</div>
			</div>
		</div>
		<div class="container">
				
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
		<p>Explore Pinas is a Travel website that will provide you with the most Up-to-date information. Allows you to post or share your most memoreable experience and make your own way to your desirable information.</p>	
			<br><br>
            <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Chocolate Hills</h5>
                        <p class="subtitle">Carmen, Bohol</p>
                        <div class="avatar"><img src="assets/img/team/choco.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Puerto Princesa</h5>
                        <p class="subtitle">Palawan</p>
                        <div class="avatar"><img src="assets/img/team/puerto.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Banaue Rice Terraces</h5>
                        <p class="subtitle">Ifugao, Nueva Vizcaya</p>
                        <div class="avatar"><img src="assets/img/team/rice.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Boracay</h5>
                        <p class="subtitle">Malay, Aklan</p>
                        <div class="avatar"><img src="assets/img/team/bora.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			
        </div>		
		</div>
	</section>
	<!-- /Section: about -->

	
	
	
	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Our Services</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-sm-3 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-1.png" alt="" />
					</div>
					<div class="service-desc">
<div class="service-icon"><img src="<?php echo base_url();?>assets/img/icons/makee.png" alt=""  height="100" width="100"/>
				</div>
						<h5>Make Trip</h5>
						<p>Make your trip including the travel date and the title of your experience.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-2.png" alt="" />
					</div>
					<div class="service-desc">
						<div class="service-icon">
						<img src="<?php echo base_url();?>assets/img/icons/find.png" alt="" height="100" width="100"/>
					</div>
						<h5>Find Trip</h5>
						<p>Show all the available trips that you can try on.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-3.png" alt="" />
					</div>
					<div class="service-desc">
						<div class="service-icon">
						<img src="<?php echo base_url();?>assets/img/icons/map.png" alt=""  height="100" width="100"/>
					</div>
						<h5>My Trip</h5>
						<p>View all the trips you have made and adjust or edit your trip.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/service-icon-4.png" alt="" />
					</div>
					<div class="service-desc">
						<div class="service-icon">
						<img src="<?php echo base_url();?>assets/img/icons/itin.png" alt="" height="100" width="100" />
					</div>
						<h5>Itinerary</h5>
						<p>Make a list of the plce you want to go ang the things you want to do.</p>
					</div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	
	
    
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>	
	<script src="assets/js/jquery.scrollTo.js"></script>
	<script src="assets/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/custom.js"></script>

</body>

</html>

