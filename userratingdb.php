<!--

<form action="signupltc.php" method="get">
    Name<input type="text" name="fname"><br>
    password<input type="text" name="pass"><br>
    male<input type="radio" name="gender" value="male">Female<input type="radio" name="gender" value="female"><br>

    <input type="submit">
</form>
-->
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
session_start();



?>




<?php

$fname=$_SESSION["username"];
if(isset($_GET['ui']))
{
$ui=$_GET["ui"];
$performance=$_GET["performance"];
$design=$_GET["design"];
$usablity=$_GET["usablity"];
//$gen=$_GET["gender"];

if($ui=="" || $performance=="" || $usablity=="")
{
    echo "all inputs required";
}
else
{
    
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

	
	   
     		$sql = "insert into ratingtable values('$fname','$ui','$performance','$design','$usablity')";
           $result = mysqli_query($conn,$sql);
		  echo"<center>"; 
        echo "<div class='card text-white bg-success mb-3' style='max-width: 18rem;'><div class='card-header'>Suggestion Submitted!</div><div class='card-body'><h5 class='card-title'>Thank You, ".$fname."</h5><p class='card-text'>We appreciate you for taking out your valueable time for us </p><button class='btn-secondary'><a href='http://localhost/ltc/myaccount.php'>Continue</button></div></div>";
        echo "</center>"; 
	

  
}}}
?>