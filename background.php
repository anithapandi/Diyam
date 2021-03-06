<head>
<title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="libraries/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="libraries/underscore-1.9.1.min.js"></script>
    <link rel="stylesheet" href="background.css">
    <script type="text/javascript" src="contactus_timeline.js"></script>

 <?php include 'TimeLineTemplate.php';?>
</head>
<body style="background-color: white !important;">
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-static-top"
			style="margin-Top: 0px !important; background-color: white; border-color: white;">
			<div class="row">
				<div class="col-md-2">
					<img src="Diyamlogo.jpg" alt="logo"
						style="width: 75px; height: 75px;">
				</div>
				<div id="divcol" class="col-md-10">
					<div class="navbar-collapse collapse"
						style="background-color: white;margin-top:15px;">
						<ul class="nav navbar-nav" style="float: right";>
							<li><a href="#">Home</a></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown">Portfolio <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">SPM/ICM</a></li>
									<li><a href="#">Data Management Services</a></li>
									<li><a href="#">Web Technologies</a></li>
								</ul></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown">Customers <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Consolidated communication</a></li>
									<li><a href="#">Blue Rental</a></li>
								</ul></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown">Resources <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">IBM ICM V10</a></li>
									<li><a href="#">Key Points of ICM</a></li>
									<li><a href="#">Videos</a></li>
									<li><a href="#">Blogs</a></li>
								</ul></li>
							<li><a href="#contact">Diyam</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>


	<!-- /navbar wrapper -->

	<div class="overlay">
		<div class="row" id="about">
			<div class="col-md-1">
				<ul class="timeline">
				</ul>
			</div>
			<div class="col-md-9 col-md-offset-1" style="margin-top: 20px;">
				<div class="timeLineContent"
					style="text-align: center; height: 150px; width: 100% !important;">
					<span class="content">Acheivements of Diyam..</span>
				</div>
			</div>
		</div>
	</div>
	<div id="myCarousel" class="carousel slide" style="height:70%">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img
					src=" businessman-3210932_960_720.jpg  "
					class="img-responsive">
				<div class="container">
					<div class="carousel-caption"></div>
				</div>
			</div>
			<div class="item">
				<img src="28439764-canada-high-resolution-business-concept.jpg"
					class="img-responsive">
				<div class="container">
					<div class="carousel-caption"></div>
				</div>
			</div>
			<div class="item">
				<img
					src="kisspng-business-partner-partnership-computer-icons-busine-partnership-hd-icon-5ab0b77cbe0b55.4991802715215307487784.jpg"
					class="img-responsive">
				<div class="container">
					<div class="carousel-caption"></div>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a style="display: none;" class="left carousel-control" href="#myCarousel" data-slide="prev">
			<i class="glyphicon glyphicon-chevron-left"></i>
		</a> <a style="display: none;" class="right carousel-control" href="#myCarousel"
			data-slide="next"> <i class="glyphicon glyphicon-chevron-right"></i>
		</a>
	</div>
	<div class="row" id="contact">
		<div class="col-md-3 col-md-offset-3">
			<div class="row">
				<div class="col-md-12" style="padding-left: 35px;">
					<i class="fas fa-envelope" style="font-size: 48px; color: red"></i>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="padding-left: 40px !important;">
					<span>Email</span>
				</div>
			</div>
		</div>
		<div class="col-md-2 col-md-offset-2">
			<div class="row">
				<div class="col-md-12" style="padding-left: 35px;">
					<a href="tel:+91 8754541474"> <i class="fas fa-phone"
						style="font-size: 48px; color: red; transform: rotate(90deg);"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<span>Give Us Call</span>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
			<h3>ADDRESS</h3>
			<p>I608 Ittina mahavir apartment</p>
			<p>Neeladri road</p>
			<p>Electronic City Phase 1</p>
			<p>Banglore 560100</p>
			<h3>CONTACT INFORMATION</h3>
			<div class="row">
				<div class="col-md-1"
					style="padding-top: 4px; padding-right: 5px; padding-left: 20px;">
					<i class="fas fa-phone"
						style="font-size: 20px; color: Blue; transform: rotate(90deg);"></i>
				</div>
				<div class="col-md-4" style="text-align: left; padding-left: 0px;">
					<P>+91 8754541474</P>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"
					style="padding-top: 4px; padding-right: 5px; padding-left: 20px;">
					<i class="fas fa-envelope" style="font-size: 20px; color: Blue"></i>
				</div>
				<div class="col-md-6" style="text-align: left; padding-left: 0px;">
					<p>contactus@diyaminfotech.com</p>
				</div>
			</div>
		</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-1" style="margin-left: 20px;">
			<form name="diyam_form" action="mailto:contactus@diyaminfotech.com"
				method="post" enctype="text/plain">
				<div class="form-group">
					<label for="Name">Name</label> <input type="Name"
						class="form-control" id="Name" placeholder="Enter Name"
						name="Name">
				</div>
				<div class="form-group">
					<label for="Mobile No">Mobile No.</label> <input type="tel"
						class="form-control" id="Telephone" placeholder="Enter Mobile No."
						name="Mobile No.">
				</div>
				<div class="form-group">
					<label for="Email">Email*</label> <input type="email"
						class="form-control" id="Email" placeholder="Enter Email"
						name="Email" required>
				</div>

				<div class="form-group">
					<label for="Email">Comments</label>
					<textarea class="form-control" id="comments" placeholder="Comments"
						name="Comments"></textarea>
				</div>

				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		
	</div>

    <!-- Footer Elements -->
    <div class="container" style="margin-top:10px">>

      <!-- Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-5 col-md-offset-5">
          <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fa fa-facebook"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <a class="pin-ic">
              <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">� 2018 Copyright:
      <a target="blank" href="http://www.diyaminfotech.com/"> diyaminfotech.com</a>
    </div>
    <!-- Copyright -->

  </footer>
	<script type="text/javascript" src="contactus_timelineView.js"></script>
</body>