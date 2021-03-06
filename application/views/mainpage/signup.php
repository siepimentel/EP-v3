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

            </div>
            <!-- /.navbar-collapse -->
        
        <!-- /.container -->
       </nav>


  

  <!-- Section: contact -->
    <section id="contact" class="home-section text-center">
    <div class="heading-contact">
      <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow bounceInDown" data-wow-delay="0.4s">
          <div class="section-heading">
          <h2>Sign Up </h2>
          <i class="fa fa-2x fa-angle-down"></i>

          </div>
          </div>
        </div>
      </div>
      </div>
    </div>
     <?php echo '<label id="msg" class="text-danger">'.$this->session->flashdata("error").'</label>'; ?> 
           <?php echo form_open('aishiteru/submit');?>
          <input type="hidden" name="user_role_id" value="2">
    <div class="container">
     <input type="hidden" name="user_role_id" value="2">

    <div class="row">
        <div class="col-lg-14 col-md-offset-1 well well-sm ">
            <div class="boxed-grey">
      
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 well well-lg ">
           <div class="form-group">
                            <label for="name">
                               Full Name</label>
                            <input type="text" name="full_name" class="form-control" id="name" placeholder="Enter Full name" minlength="5"  required="required" />
                        </div>
                        <div class="form-group">
                            <label for="name">
                               Username</label>
                            <input type="text" name="username" class="form-control" id="name" placeholder="Enter username" minlength="5" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
            <div class="form-group">
                            <label for="name">
                                Password</label>
                            <input type="text" name="password" class="form-control" id="name" placeholder="Enter password" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="subject">
                               Gender</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected=""> Select </option>
                                <option value="suggestions">Female</option>
                                <option value="product">Male</option>
                            </select>
                        </div>
            
                    <div class="form-group">  
         
                    <input type="submit" name="insert" value="Sign up" class="btn btn-success btn-md"/> 
                 
                    <a href="<?php echo base_url(); ?>" class="btn btn-danger btn-md">Back</a> 
                </div>  
               
           </form>  
      </div>  
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
