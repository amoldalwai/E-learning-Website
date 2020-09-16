<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>

    .card
    {
        position: relative;
        top:100px;
    }
    a,a:hover
    {
        text-decoration: none;
        color: white;
    }
    body
    {
        background: url('reviewback.jpg') no-repeat;
       
        
    }
</style>










<?php
if(isset($_GET['fname']))
{
$fname=$_GET["fname"];
$password=$_GET["pwd"];
$email=$_GET["email"];
//$gen=$_GET["gender"];


if($fname=="" || $password==""|| $email=="" )
{
    echo"<center>"; 
        echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Login unsuccessfull!</div><div class='card-body'><h5 class='card-title'>All inputs are neccessary!</h5><p class='card-text'>All inputs are necessary  to log into your  account</p><button class='btn-secondary'><a href='forgotpassword.html'>Go Back</button></div></div>";
        echo "</center>";
}
else
{
    
if($_SERVER['REQUEST_METHOD']=="GET")//con establish
{
$localhost = "localhost";
$usernamew = "root";
$passw = "";
$db = "expdb";
$conn = mysqli_connect($localhost,$usernamew,$passw,$db);
if(!$conn){
echo "";
}
else
{
echo "";
}
$result=mysqli_query($conn,"select * from exptable where fname='$fname' and email='$email'")
				or die("FAILED!!".mysql_error());
	$row=mysqli_fetch_array($result);
    if($fname=='admin' and $password=='admin'){
		header("Location: adminpanel.php");
        echo "hello Admin";                                 
	}
    else
      {
	   if($row['fname']==$fname and $row['email']==$email)
       {
		   $sql = "update exptable SET password='$password' where fname='$fname'";
           $result = mysqli_query($conn,$sql);
           
           
        echo"<center>"; 
        echo "<div class='card text-white bg-success mb-3' style='max-width: 18rem;'><div class='card-header'>Account Password Updated!</div><div class='card-body'><h5 class='card-title'>Hello,".$fname."</h5><p class='card-text'>Your Account Password has been updated! </p><button class='btn-secondary'><a href='home.php'>Return Home</button></div></div>";
        echo "</center>";   
           
                 
	  }
	  else
	  {
		
		echo"<center>"; 
        echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Login Failed!</div><div class='card-body'><h5 class='card-title'>Username or Email is incorrect!</h5><p class='card-text'>You need to enter valid username and email address </p><button class='btn-danger'><a href='http://localhost/ltc/forgotpassword.html'>Forgot Password!</a></button>&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn-secondary'><a href='forgotpassword.html'>Go back!</a></button>";
        echo "</center>"; 
	  }
    }   
    
}}}
?>