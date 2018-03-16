

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
    <link href="<?php echo base_url();?>assets/css/signup.css" rel="stylesheet">
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
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">Trips</a></li>
       
     
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
            <li><a href="<?php echo base_url().'dashboard/viewprofile'; ?>">View Profile</a></li>
  			
    
            <li><a href="<?php echo base_url().'aishiteru/logout'; ?>">Log Out</a></li>          
          </ul>
        </li>
      </ul>
  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


	
	 <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Trips</h2>
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
					<div class="service-icon"><img src="<?php echo base_url();?>assets/img/icons/makee.png" alt=""  height="100" width="100"/>
				</div>
					<div class="service-desc"> <a href="<?php echo base_url().'trips/maketrip'; ?>">
						<h5 >Make Trip</h5></a>
					
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="<?php echo base_url();?>assets/img/icons/find.png" alt="" height="100" width="100"/>
					</div>
					<div class="service-desc">
						<a href="<?php echo base_url().'trips/viewtrips'; ?>"><h5>Find Trip</h5></a>
						
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="<?php echo base_url();?>assets/img/icons/map.png" alt=""  height="100" width="100"/>
					</div>
					<div class="service-desc">
					<a href="<?php echo base_url().'dashboard/viewtrips'; ?>"><h5>My Trip</h5></a>
						
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="<?php echo base_url();?>assets/img/icons/itin.png" alt="" height="100" width="100" />
					</div>
					<div class="service-desc">
					<a href="#"><h5>Itinerary</h5></a>
					
					</div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	
	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Tourist Spots</h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
				
			</div>
			</div>
		</div>
		<div class="container">
				<a href="<?php echo base_url().'dashboard/tourist_spot'; ?>"><h4>View Tourist Spots</h4></a>
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
		
	
            <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Chocolate Hills</h5>
                        <p class="subtitle">Carmen, Bohol</p>
                        <div class="avatar"><img src="<?php echo base_url();?>assets/img/team/choco.jpg" alt="" class="img-responsive img-circle" /></div>
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
                        <div class="avatar"><img src="<?php echo base_url();?>assets/img/team/puerto.jpg" alt="" class="img-responsive img-circle" /></div>

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
                        <div class="avatar"><img src="<?php echo base_url();?>assets/img/team/rice.jpg" alt="" class="img-responsive img-circle" /></div>

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
                        <div class="avatar"><img src="<?php echo base_url();?>assets/img/team/bora.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			
        </div>		
		</div>
	</section>
	<!-- /Section: about -->

	
	
	
	<!-- Section: services -->
  
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

    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>

</body>

</html>

