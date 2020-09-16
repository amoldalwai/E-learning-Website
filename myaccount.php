
<?php
    session_start();
    
?>

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
        background-color:white;
        color:white;
        width:20%;
        max-width:300px;
        
        
        border:1px solid grey;
        font-family: serif;
/*        display: inline;*/
        
        
    
       
        
    }
    @media screen and (max-width: 900px) 
    {
    .dashboard {display:inline;}
    .adminbadges {display: none;}
     }
    .adminbadges
    {   
        position:absolute;
        float: right;
        top:150px;
        left:600px;
    }
    
    .adminimage
    {
        border-radius: 50%;
        width:130px;
        height:130px;
        
        
    }
    .adminhead
    {
        text-align: center;
        color: white;
        background-color: #5FCF80;
        width:100%;
        height:60px;
        padding-top: 10px;
        font-weight: bolder;
        font-size: 25px;
        text-transform: capitalize;
        
    }
   .modal-header
    {
        background-color:#5FCF80;
        
    }
    .glyphicon
    {
        float: left;
        margin-top: -10px;
         margin-right: -10px;
    }
    .links
    {
              background:white;
        color:#282828;
/*        border: 0.5px solid #282828;*/
        font-weight: bolder;
        height:50px;
        width:100%;
        border-radius: 0px; 
        padding-top: 10px;
        font-size: 15px;
    }
    .links:hover
    {
/*        background:rgb(230,230,230) ;*/
        border-radius: 50px;
       font-size: 18px;
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
           
              background:#282828;
        color:white;

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
    .badge
    {
        float: right;
        margin-top: -20px;
        position: relative;
        left: 7px;
        
        
        
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
        <a class="navbar-brand" href="home.php"><span> Learn to Code</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="home.php">Features</a></li>
          <li><a href="home.php">Organisations</a></li>
          <li><a href="home.php">Courses</a></li>
          <li><a href="home.php">Pricing</a></li>
<!--
          <li><a href="#" data-target="#login" data-toggle="modal">Log in</a></li>
          <li class="btn-trial"><a href="#" data-target="#signin" data-toggle="modal">Sign in</a></li>
-->
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar--><br><br><br>


   
    
    
    
    
    
<div class="dashboard">

    <div class="adminhead">
    <?php
        
        echo  $_SESSION["username"];
        
        
        ?>
    
    </div><br>
    
    <center>
        <img src="deafaultuser.jpg" class="adminimage img-responsive"></center>
<hr>
<div style="line-height:0px;">
<form action="userprofile.php" method="get">
    <button type="submit"  class="links"><span class="glyphicon glyphicon-user"></span>My Profile
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </button>
</form>
<form action="usersuggestion.php" method="get">
    <button type="submit"  class="links"><span class="glyphicon glyphicon-bullhorn"></span>Suggestions
<?php

    
if($_SERVER['REQUEST_METHOD']=="GET")//con establish
{
$localhost = "localhost";
$usernamew = "root";
$passwordw = "";
$db = "expdb";
$conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
if(!$conn){
echo "";
}
else
{
echo "";
}
    $fname=$_SESSION["username"];
$result=mysqli_query($conn,"select * from reviewtable where username='$fname'")
				or die("FAILED!!".mysql_error());
	        $i=0;
             if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result))
              {
                  $i++;  
                  


                  }
              echo "<span class='badge' style='background:red;'>".$i."</span>";
             $fname="";
    
       
    
	
   
	

  
}}
?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </button>
</form>
<br>
<form action="usermessage.php" method="get">
        <button type="submit"  class="links"><span class="glyphicon glyphicon-envelope"></span>Messages
               <?php

    
if($_SERVER['REQUEST_METHOD']=="GET")//con establish
{
$localhost = "localhost";
$usernamew = "root";
$passwordw = "";
$db = "expdb";
$conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
if(!$conn){
echo "";
}
else
{
echo "";
}
    $fname=$_SESSION["username"];
$result=mysqli_query($conn,"select * from contacttable where fullname='$fname'")
				or die("FAILED!!".mysql_error());
	        $i=0;
             if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result))
              {
                  $i++;  
                  


                  }
              echo "<span class='badge' style='background:red;'>".$i."</span>";
             $fname="";
    
       
    
	
   
	

  
}
              else 
              {
                  
              }

}
?>
      
    
    
    
    
    
    
    </button>
</form>
<br>
<form action="userpayment.php" method="get">
       <button type="submit"  class="links"><span class="glyphicon glyphicon-usd"></span>Courses
    <?php

    
if($_SERVER['REQUEST_METHOD']=="GET")//con establish
{
$localhost = "localhost";
$usernamew = "root";
$passwordw = "";
$db = "expdb";
$conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
if(!$conn){
echo "";
}
else
{
echo "";
}
    $fname=$_SESSION["username"];
$result=mysqli_query($conn,"select * from paymenttable where fname='$fname'")
				or die("FAILED!!".mysql_error());
	        $i=0;
             if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result))
              {
                  $i++;  
                  


                  }
              echo "<span class='badge' style='background:red;'>".$i."</span>";
             $fname="";
    
       
    
	
   
	

  
}
              else 
              {
                  
              }

}
?>
      
     
           
           
           
           
    </button>
</form>
<form action="userratingpage.php" method="get">
        <button type="submit"  class="links"><span class="glyphicon glyphicon-signal"></span>Rate our Site</button>
</form>
<form action="chat2.php" method="get">
        <button type="submit"  class="links"><span class="glyphicon glyphicon-envelope"></span>Chat with admin</button>
</form>
<form action="logout.php" method="get">
       <button type="submit"  class="links"><span class="glyphicon glyphicon-cog"></span>Log Out!</button>
</form>
    </div>
    </div>
    
    
<!--  php for messages  -->
<style>


.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.cardcontainer {
    padding: 2px 16px;
  
    
}



.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
 
    width:300px;
  margin: auto;
  text-align: center;
  font-family: arial;
    float: left;
  
    
}

.title {
  color: grey;
  font-size: 18px;
}
    img
    {
        width: 50%;
        height: 150px;
        border-radius: 50%;
    }
    button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
color:white;
}
</style>

<div class="adminbadges">
    <div class="card" >
    
  <img src="deafaultuser.jpg" alt="John" >
  <h1 style='text-transform:capitalize;'><?php echo $_SESSION["username"];?></h1>
<?php

$i=0;
if($_SERVER['REQUEST_METHOD']=="GET"){
$localhost = "localhost";
$usernamew = "root";
$passwordw = "";
$db = "expdb";
$conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
if(!$conn){
echo "Connection error";
}
else{
echo "";
$fname=$_SESSION["username"];
$sql = "Select * from exptable where fname='$fname'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
    

echo  "<p class='title'>".$row["email"]."</p>";



}

}

}
}
?>

  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button type="submit" id="javascript"  >Edit Profile Details</button></p>
</div>
    </div>
    
   

    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <br><br>
    
    <!--Footer-->
  <footer id="footer" class="footer" >
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


