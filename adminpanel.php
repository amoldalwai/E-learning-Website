<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
          
    
        
       
        
    
}
    .adpg
    {
        background: url('back1.jpg') no-repeat;
        width:100%;
        height: 100%;
    }
    .mouse
    {
        transform: rotate(90deg);
        background-color: black;
    }
    .price-table:hover
    {
       box-shadow: 5px 5px 5px lightgrey, -5px 0px 5px lightgrey;
    }
    .dashboard
    {
        background-color:#333399;
        color:white;
        width:25%;
        font-family: serif;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 5px 5px 5px black, -5px 0px 5px black;
        
    }
     .dashboard:hover
    {
     transform: translateY(5px);
        
    }
    .adminimage
    {
        border-radius: 50%;
        
        
    }
    .adminhead
    {
        text-align: center;
        color: white;
        background-color: #000066;
        width:100%;
        height:40px;
        font-weight: bolder;
        font-size: 25px;
        
    }
   .modal-header
    {
        background-color:#5FCF80;
        
    }
 
    .links
    {
        background: #000066;
        color:white;
         border:2px solid #333399;
        height:50px;
        width:100%;
        border-radius: 10px; 
    }
    .links:hover
    {
        background: #333399;
       font-size: 15px;
        border: 2px solid #000066; 
    }
        .links1
    {
        background: #000066;
        color:white;
         border:2px solid #333399;
        height:50px;
        width:100%;
        border-radius: 5%; 
        margin-left: 50px;
        margin-top: 50px;
    }
    .links1:hover
    {
        background: #333399;
       
        border: 2px solid #000066; 
    }
    .dash1
    {
        float: left;
    }
     .dash2
    {
        float: right;
        position: absolute;
        top:75px;
        right: 90px;
    }
  
    
    .mybutton {
  border-radius: 0px 40px 40px 0px;
  background-color: #5FCF80;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.mybutton span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.mybutton span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.mybutton:hover span {
  padding-right: 25px;
}

.mybutton:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>learntocode.com</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><span> Learn to Code</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">Features</a></li>
          <li><a href="#organisations">Organisations</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Log in</a></li>
          <li class="btn-trial"><a href="#" data-target="#signin" data-toggle="modal">Sign in</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar--><br><br>
<div class="adpg">
    <br><br>
<div class="dash1">
  <form action="adsuggestion.php" method="get">
    <input type="submit" value="Suggestions from authenticated users" class="links1">
</form>
<br>
<form action="admessage.php" method="get">
    <input type="submit" value="Messages from non-authenticated users" class="links1">
</form>
<br>
<form action="adpayment.php" method="get">
    <input type="submit" value="Course payment detials" class="links1">
</form>
<form action="adpayment.php" method="get">
    <input type="submit" value="Course payment detials" class="links1">
</form>
    </div>
<center>
   
    
    
    
    
    
<div class="dashboard">

    <div class="adminhead">ADMIN-PANEL</div><br>
    <center>
        <img src="amol.jpg" class="adminimage img-responsive"></center>
<hr>
<div style="line-height:0px;">
<form action="adsuggestion.php" method="get">
    <input type="submit" value="Suggestions from authenticated users" class="links">
</form>
<br>
<form action="admessage.php" method="get">
    <input type="submit" value="Messages from non-authenticated users" class="links">
</form>
<br>
<form action="adpayment.php" method="get">
    <input type="submit" value="Course payment detials" class="links"s>
</form>
    </div>
    </div>
    </center>
    
    
    
    
    
    <div class="dash2">
  <form action="adsuggestion.php" method="get">
    <input type="submit" value="Suggestions from authenticated users" class="links1">
</form>
<br>
<form action="admessage.php" method="get">
    <input type="submit" value="Messages from non-authenticated users" class="links1">
</form>
<br>
<form action="adpayment.php" method="get">
    <input type="submit" value="Course payment detials" class="links1">
</form>
        <form action="adpayment.php" method="get">
    <input type="submit" value="Course payment detials" class="links1">
</form>
    </div>
    
    <br><br><br><br>
    </div>
    <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3>Suggestions Are Welcomed</h3>

      <form class="mc-trial row" action="review.php" method="get">
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="username" placeholder="Enter Your FullName" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="comment" placeholder="Enter Your Suggestion" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Suggest this! <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2016 Learn To Code  All rights reserved
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
        -->
        Designed by <a href="https://amoldalwai.com/">Amol Dalwai</a>
      </div>
    </div>
  </footer>
</body>


