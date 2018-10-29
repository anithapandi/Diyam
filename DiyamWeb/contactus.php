<!DOCTYPE html>
<html lang="en">
<head>
  <title>Diyam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js.map"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
  
  
  <link rel="stylesheet" href="contactusstyle.css">
  <script type="text/javascript" src="contaustimeline.js"></script>
  <?php include 'TimeLineTemplate.php';?>
   
   <script>
   $("label").on("click",function(){
		alert("hi");
	  $('#para1').show();
	  $('#para3').hide();
	});</script>
</head>
<body>

<nav id="navdy" class="navbar navbar-expand-sm navbar-dark">
  <!-- Brand/logo -->
  <div class="row" id="logo">
  <div class="col-md-2">
  <img src="Diyamlogo.jpg" alt="logo" style="width:75px;height:75px;">
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
  <a class="dropbtn" href="Portfolio.php">PORTFOLIO</a>
      <div class="dropdown-content">
     <a href="#Portfolio/SPM/ICM">SPM/ICM</a>
    <a href="#Data Management Services">Data Management Services</a>
    <a href="# Web Technologies">Web Technologies</a>
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
      <a href="#IBM ICM">IBM ICM V10</a>
      <a href="#KeyPoints">Key Points of ICM</a>
      <a href="#Videos">Videos</a>
      <a href="#Blogs">Blogs</a>
     </div>
      </div>
</li>

  <div class="dropdown">
<li class="nav-item">
  <a class="dropbtn" href="#">DIYAM</a>
      <div class="dropdown-content">
      </div>
      </div>
</li>
 </ul>
 </div>
  </div>
</nav>
<div class="whole">
<div class="row" id="about" >
		<div class="col-md-12">
			<ul class="timeline">
			</ul>
		</div>
	</div>
	<div class="row" id="contact">
	<div class="col-md-1 offset-md-4">
	   <i class="fa fa-envelope-o" style="font-size:48px;color:red"></i> 
	   <span>Email</span>     
      </div>  
      <div class="col-md-3 offset-md-2">
      <div class="row">
      <div class="col-md-12" style="padding-left:35px;">
      <i class="fa fa-phone" style="font-size:48px;color:red"></i>
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
  <form action="#" id="form" method="post" name="form">

    <div class="form-group">
      <label for=" Name"> Name</label>
      <input class="form-control" id="Name" placeholder="Enter Name" name="fname">
    </div>
    <div class="form-group">
      <label for="Mobile No">Mobile No</label>
      <input class="form-control" id="LName" placeholder="Enter Mobile No" name="lname">
    </div>
    <div class="form-group">
      <label for="Email">Email*</label>
      <input class="form-control" id="Email" placeholder="Enter Email" name="email">
    </div>
     <div class="form-group">
    <label for="message">Message</label>
    <textarea id="message" class="form-control" name="message" placeholder="Enter Your Comments.."></textarea>
    </div>
   
    <button type="submit" name="submit" style="float: center;" class="btn btn-default">Send</button>
  </form>
   <h3><?php include "Sendemail.php";?></h3>
  </div>
 
  
  <div class="col-md-6" style="margin-top:25px;">
  <h3>ADDRESS</h3>
  <p>I608 Ittina mahavir apartment</p>
  <p>Neeladri road</p>
  <p>Electronic City Phase 1</p>
  <p>Banglore 560100</p>
 <h3>CONTACT INFORMATION</h3>
 <div class="row">
 <div class="col-md-1" style="padding-top: 4px;padding-right: 5px;padding-left: 20px;">
  <i class="fa fa-phone" style="font-size:20px;color:Blue"></i>
 </div>
 <div class="col-md-6" style="text-align: left;padding-left:0px;">
  <P> +91 8754541474</P>
 </div>
 </div>
 <div class="row">
 <div class="col-md-1" style="padding-top: 4px;padding-right: 5px;padding-left: 20px;">
  <i class="fa fa-envelope-o" style="font-size:20px;color:Blue"></i>
 </div>
 <div class="col-md-6" style="text-align: left;padding-left:0px;">
 <p>Contactus@diyaminfotech.com</p>
  
  </div>
  
</div>


     
  <script type="text/javascript" src="timelineView.js"></script>

</body>
</html>
