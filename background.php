
<head>
<title>Diyam - ContactUs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
					<img src="Images/Diyamlogo.jpg" alt="logo"
						style="width: 75px; height: 75px;">
				</div>
				<div id="divcol" class="col-md-10">
					<div class="navbar-collapse collapse"
						style="background-color: white;margin-top:15px;">
						<ul class="nav navbar-nav" style="float: right;">
							<li><a id="home" class="port" >Home</a></li>
							<li><a id="portfolio" class="port">Portfolio</a></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown">Customers <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Consolidated communication</a></li>
									<li><a href="#">Blue Rental</a></li>
								</ul></li>
							<li class="dropdown"><a id="Reso" class="dropdown-toggle port"
								data-toggle="dropdown">Resources <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">IBM ICM V10</a></li>
									<li><a href="#">Key Points of ICM</a></li>
									<li><a href="#">Videos</a></li>
									<li><a href="#">Blogs</a></li>
								</ul></li>
							<li><a id="contact" class="port">Diyam</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>


	<!-- /navbar wrapper -->
    <div class="contact" style="display:none !important;" >
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
			<!-- <li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li> -->
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img
					src="Images/businessman-3210932_960_720.jpg"
					class="img-responsive">
				<div class="container">
					<div class="carousel-caption"></div>
				</div>
			</div>
			<!-- <div class="item">
			         <img src="Images/28439764-canada-high-resolution-business-concept.jpg"
					class="img-responsive">
				<div class="container">
					<div class="carousel-caption"></div>
				</div>
			</div>
			<div class="item">
				<img
					src="Images/kisspng-business-partner-partnership-computer-icons-busine-partnership-hd-icon-5ab0b77cbe0b55.4991802715215307487784.jpg"
					class="img-responsive">
				<div class="container">
					<div class="carousel-caption"></div>
				</div>
			</div> -->
				
		</div>

		<!-- Controls -->
		<a style="display: none;" class="left carousel-control" href="#myCarousel" data-slide="prev">
			<i class="glyphicon glyphicon-chevron-left"></i>
		</a> <a style="display: none;" class="right carousel-control" href="#myCarousel"
			data-slide="next"> <i class="glyphicon glyphicon-chevron-right"></i>
		</a>
	</div>
	
	<div class="col-md-4">
			<h3>ADDRESS</h3>
			<p>I608 Ittina mahavir apartment</p>
			<p>Neeladri road</p>
			<p>Electronic City Phase 1</p>
			<p>Banglore 560100</p>
			<h3>Contact Us</h3>
			<div class="row">
				<div class="col-md-1"
					style="padding-top: 4px; padding-right: 5px; padding-left: 20px;">
					<i class="fas fa-phone"
						style="font-size: 20px; color: Blue; transform: rotate(90deg);"></i>
				</div>
				<div class="col-md-4" style="text-align: left; padding-left: 5px; padding-bottom: 3px;">
					<P>+91 8754541474</P>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"
					style="padding-top: 4px; padding-right: 5px; padding-left: 20px;">
					<i class="fas fa-envelope" style="font-size: 20px; color: Blue"></i>
				</div>
				<div class="col-md-6" style="text-align: left; padding-left: 5px; padding-top: 3px;">
					<p>contactus@diyaminfotech.com</p>
				</div>
			</div>
		</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-1" style="margin-left: 20px; margin-top:20px; ">
			<form action="#" id="form" method="post" name="form">

    <div class="form-group">
      <label for=" Name"> Name*</label>
      <input class="form-control" id="Name" placeholder="Enter Name" name="fname">
    </div>
    <div class="form-group">
      <label for="Mobile No">Mobile No*</label>
      <input class="form-control" id="LName" placeholder="Enter Mobile No" name="lname">
    </div>
    <div class="form-group">
      <label for="Email">Email*</label>
      <input class="form-control" id="Email" placeholder="Enter Email" name="email">
    </div>
     <div class="form-group">
    <label for="message">Message*</label>
    <textarea id="message" class="form-control" name="message" placeholder="Share your thoughts.."></textarea>
    </div>
   
    <button type="submit" name="submit" style="float: center;" class="btn btn-default">Send</button>
  </form>
   

			<h3><?php include "NewSendEmail.php";?></h3>
		</div>
		
	</div>
</div>
<iframe id="pageLoader" style="width:100%;height:100%;" src="index.php"></iframe>
    <!-- Footer Elements -->
    <div class="row">
    <div class="col-md-6 col-md-offset-5">
    <div class="fa">
	
    <a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-google"></a>
	<a href="#" class="fa fa-linkedin"></a>
	<a href="#" class="fa fa-instagram"></a>
	<a href="#" class="fa fa-pinterest"></a>
	

</div>
</div>
</div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="row">
    <div class="col-md-2 col-md-offset-5">
    <div class="footer-copyright text-center py-3">&copy;
      <a href="index.php">Diyam Infotech.All Rights Reserved.</a>
    </div>
    </div>
    </div>
    <!-- Copyright -->

 
	<script type="text/javascript" src="contactus_timelineView.js"></script>
</body>
