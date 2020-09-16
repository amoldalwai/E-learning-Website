<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script> 
    function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
document.getElementById('ct').innerHTML = x;
display_c();
 }
        </script>
<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
          
    
        
       
        
    
}
    .card
    {
        width: 200px;
        height: 100px;
        border: 1px solid grey;
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
        border:1px solid grey;
        font-family: serif;
        
    
       
        
    }
    
    .adminimage
    {
        border-radius: 50%;
        width:100px;
        height:100px;
        
        
    }
    .adminhead
    {
        text-align: center;
        color: white;
        background-color: #5FCF80;
        width:100%;
        height:40px;
        font-weight: bolder;
        font-size: 25px;
        
    }
   .modal-header
    {
        background-color:#5FCF80;
        
    }
    .glyphicon
    {
        float: left;
    }
    .links
    {
        background:white;
        color:black;
        border: 2px solid white;
        
        height:50px;
        width:100%;
        border-radius: 0px; 
        padding-top: 10px;
    }




.container {
    padding: 2px 16px;
}
    .links:hover
    {
        background:rgb(230,230,230) ;
       font-size: 15px;
                 
              

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
        
    }
.adminbadges
    {   
        position:absolute;
        float: right;
        top:100px;
        right:180px;
        width: auto;
    }
     @media screen and (max-width: 1300px) 
    {
    .dashboard {display:inline;}
    .adminbadges {display: none;}
     }
.card
    {
        float: left;
        margin-left: 10px;
        border: 1px solid #5FCF80;
        border-radius: 20px;
        height:20%;
        
        
    }
.card:hover
    {
           box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            
    }


.title
    {
        font-family: arial;
        font-size: 25px;
        color: white;
        text-align: center;
        background: #5FCF80;
        font-weight: bolder;
        
    }
.count
    {
        font-family: arial;
        font-size: 35px;
        color: gray;
        font-weight: bolder;
        text-align: center;
      
        
    }
.count:hover
    {
        color:red;
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
       .badge
    {
        float: right;
        margin-top: -20px;
        position: relative;
        left: 7px;
        
        
        
    }
     .glyphicon
    {
        float: left;
        margin-top: -10px;
         margin-right: -10px;
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

<body onload=display_ct();>
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
  <!--/ Navigation bar--><br><br><br>


   
    
    
    
    

<br>
<div class="dashboard">

    <div class="adminhead">ADMIN-PANEL</div><br>
    <center>
        <img src="admin.jpg" class="adminimage img-responsive"></center>
<hr>
<div style="line-height:0px;">
<form action="adsuggestion.php" method="get">
    <button type="submit"  class="links"><span class="glyphicon glyphicon-bullhorn"></span>Suggestions
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
     $sql = "Select * from reviewtable";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
    $i++;
   }
  echo "<span class='badge' style='background:red;'>$i</span>";

 }
else
{

echo "0 results";
}
}
}
?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </button>
</form>
<br>
<form action="admessage.php" method="get">
        <button type="submit"  class="links"><span class="glyphicon glyphicon-envelope"></span>Messages
    
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
     $sql = "Select * from contacttable";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
    $i++;
   }
  echo "<span class='badge' style='background:red;'>$i</span>";

 }
else
{

echo "0 results";
}
}
}
?>
    
    
    
    
    
    
    </button>
</form>
<br>
<form action="adpayment.php" method="get">
       <button type="submit"  class="links"><span class="glyphicon glyphicon-usd"></span>Payments
    
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
     $sql = "Select * from paymenttable";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
    $i++;
   }
  echo "<span class='badge' style='background:red;'>$i</span>";

 }
else
{

echo "0 results";
}
}
}
?>
    </button>
</form>
<form action="statistics.php" method="get">
        <button type="submit"  class="links"><span class="glyphicon glyphicon-signal"></span>Statistics</button>
</form>
<form action="chat1.php" method="get">
       <button type="submit"  class="links"><span class="glyphicon glyphicon-list"></span>Chat</button>
</form>
    <form action="adrating.php" method="get">
       <button type="submit"  class="links"><span class="glyphicon glyphicon-alert"></span>User Ratings</button>
</form>
    
    <form action="logout.php" method="get">
       <button type="submit"  class="links"><span class="glyphicon glyphicon-cog"></span>Log Out!</button>
</form>
    
    </div>
    </div>
    
   
<div class="adminbadges">

  
    <div class="card">
        <p class="title">Suggestions</p>
        <p class="count">
  
        
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
     $sql = "Select * from reviewtable";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
    $i++;
   }
  echo $i;

 }
else
{

echo "0 results";
}
}
}
?>
            </p>
    </div>
    
      <div class="card">
        <p class="title">Messages</p>
        <p class="count">
  
        
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
     $sql = "Select * from contacttable";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
    $i++;
   }
  echo $i;

 }
else
{

echo "0 results";
}
}
}
?>
            </p>
    </div>
    
        <div class="card">
        <p class="title">Courses Bought</p>
        <p class="count">
  
        
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
     $sql = "Select * from paymenttable";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
    $i++;
   }
  echo $i;

 }
else
{

echo "0 results";
}
}
}
?>
            </p>
    </div>
    
    
    
    
    
    
      
         <div class="card">
        <p class="title">Account Users</p>
        <p class="count">
  
        
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
     $sql = "Select * from exptable";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
    $i++;
   }
  echo $i;

 }
else
{

echo "0 results";
}
}
}
?>
            </p>
    </div>

  <br>
    <style>
        .servertime
        {
            width:100%;
            border: 1px solid grey;
            margin-top: 100px;
            text-align: center;
            font-weight: bolder;
            height:100px;
            border-radius: 20px;
        }
        .servertitle
        {
             font-family: arial;
        font-size: 25px;
        color: white;
       
        background: #5FCF80;
        
        }
        .servercount
        {
            color: gray;
             font-size: 28px;
        }
       
        .servertime:hover
    {
           box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
        
    }

    </style>
    
    
    
    
<div class="servertime">
        <p class="servertitle">Server  Time</p>
        <p class="servercount">
  
        
       <span id='ct' ></span>
            </p>
    </div>
    <style>
    .loader {
  border: 16px solid rgb(240,240,240);
  border-radius: 50%;
  border-top: 16px solid blue;
  width: 100px;
  height: 100px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
        margin-top: 20px;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
    
    
    
<!--    css loader-->
<!--    <center><div class="loader"></div></center>-->
    
    <br>
    <div class="card">
        <p class="title">Home Visits</p>
        <p class="count">
            <?php

     
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
     
     $sql = "select visit from counter where id=0";
    if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s \n",$row[0]);
    }
  // Free result set
  mysqli_free_result($result);
}
             
 }

}

?>
        
            
            </p>
    </div>
    
    
<!--    courses page visit-->
       <div class="card">
        <p class="title">Course Visits</p>
        <p class="count">
            <?php

     
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
     
     $sql = "select visit from counter where id=1";
    if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s \n",$row[0]);
    }
  // Free result set
  mysqli_free_result($result);
}
             
 }

}

?>
        
            
            </p>
    </div>
    
<!--    about us page visits-->
    
    <div class="card">
        <p class="title">About Us Visits</p>
        <p class="count">
            <?php

     
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
     
     $sql = "select visit from counter where id=2";
    if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s \n",$row[0]);
    }
  // Free result set
  mysqli_free_result($result);
}
             
 }

}

?>
        
            
            </p>
    </div> 
    
    
<!--    coding forum-->
       <div class="card">
        <p class="title">Chat Visits</p>
        <p class="count">
            <?php

     
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
     
     $sql = "select visit from counter where id=3";
    if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s \n",$row[0]);
    }
  // Free result set
  mysqli_free_result($result);
}
             
 }

}

?>
        
            
            </p>
    </div> <br><br><br><br><br>
    <center><div class="loader"></div></center>
    
    
    
    </div>
  
  <br> <br><br><br>


    
    
    
    
    
    
    
    

   
    
    
   

    
    

    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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


