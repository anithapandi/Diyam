<!DOCTYPE html>
<html lang="en">
<head>
<title>Diyam</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="libraries/fontawesome-all.min.css">
<link rel="stylesheet" href="libraries/bootstrap.min.css">

<script src="libraries/jquery-3.3.1.min.js"></script>
<script src="libraries/popper.min.js"></script>
<script src="libraries/bootstrap.min.js"></script>

<script src="libraries/underscore-1.9.1.min.js"></script>


<link rel="stylesheet" href="contactusstyle.css">
<script type="text/javascript" src="contactus_timeline.js"></script>
  <?php include 'TimeLineTemplate.php';?>
   
</head>
<body>

	<nav id="navdy" class="navbar navbar-expand-sm navbar-dark">
		<!-- Brand/logo -->
		<div class="row" id="logo">
			<div class="col-md-2">
				<img src="Diyamlogo.jpg" alt="logo"
					style="width: 75px; height: 75px;">
			</div>
			<div id="divcol" class="col-md-7 offset-md-3">


				<ul class="navbar-nav">
					<li class="nav-item">
						<div class="dropdown">
							<a class="dropbtn">HOME</a>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a class="dropbtn" href="#">PORTFOLIO</a>
							<div class="dropdown-content">
								<a href="#Portfolio/SPM/ICM">SPM/ICM</a> <a
									href="#Data Management Services">Data Management Services</a> <a
									href="# Web Technologies">Web Technologies</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a class="dropbtn" href="#">CUSTOMERS</a>
							<div class="dropdown-content">
								<a href="#Consolidated Communication">Consolidated communication</a>
								<a href="#Blue Rental">Blue Rental</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a class="dropbtn" href="#">RESOURCES</a>
							<div class="dropdown-content">
								<a href="#IBM ICM">IBM ICM V10</a> <a href="#KeyPoints">Key
									Points of ICM</a> <a href="#Videos">Videos</a> <a href="#Blogs">Blogs</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a class="dropbtn" href="#">VIDEOS</a>
							<div class="dropdown-content"></div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a class="dropbtn" href="#">BLOGS</a>
							<div class="dropdown-content"></div>
						</div>
					</li>
					<li class="nav-item"><a class="dropbtn" href="#">DIYAM</a>
					 <div class="dropdown">					
					  <div class="dropdown-content"></div>					
					</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="whole">
		<div class="row" id="about">
			<div class="col-md-12">
				<ul class="timeline">
				</ul>
			</div>
		</div>
		<div class="row" id="contact">
			<div class="col-md-1 offset-md-4">
				<i class="fas fa-envelope" style="font-size: 48px; color: red"></i>
				<span>Email</span>
			</div>
			<div class="col-md-3 offset-md-2">
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
		<div class="row">
			<div class="col-md-5" style="margin-left: 20px;">
				<form name="diyam_form" action="mailto:contactus@diyaminfotech.com"
					method="post" enctype="text/plain">
					<div class="form-group">
						<label for="Name">Name</label> <input type="Name"
							class="form-control" id="Name" placeholder="Enter Name"
							name="Name">
					</div>
					<div class="form-group">
						<label for="Mobile No">Mobile No.</label> <input type="tel"
							class="form-control" id="Telephone"
							placeholder="Enter Mobile No." name="Mobile No.">
					</div>
					<div class="form-group">
						<label for="Email">Email*</label> <input type="email"
							class="form-control" id="Email" placeholder="Enter Email"
							name="Email" required>
					</div>

					<div class="form-group">
						<label for="Email">Comments</label>
						<textarea class="form-control" id="comments"
							placeholder="Comments" name="Comments"></textarea>
					</div>

					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="col-md-6" style="margin-top: 25px;">
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
					<div class="col-md-6" style="text-align: left; padding-left: 0px;">
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
		</div>
</div>

		<script type="text/javascript" src="contactus_timelineView.js"></script>

</body>
</html>
