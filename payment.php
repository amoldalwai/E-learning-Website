<!--
<form action="payment.php" method="get">
    Username<input type="text" name="fname"><br>
    password<input type="text" name="pass"><br>
    Credit card Number<input type="text" name="cred"><br>
    Course Bought<input type="text" name="cname"><br>

    <input type="submit">
</form>
-->
<?php
    session_start();
    
?>

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
$password=$_GET["pass"];
$cred=$_GET["cred"];
$coursename=$_GET["coursename"];
//$gen=$_GET["gender"];

if($fname=="" || $password=="" || $cred=="")
{
     echo"<center>"; 
        echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Transaction Failed!</div><div class='card-body'><h5 class='card-title'>Some input fields are  empty!</h5><p class='card-text'>All inputs are requires to Buy the course! </p><button class='btn-secondary'><a href='courses.php'>Go Back!</a></button></div></div>";
        echo "</center>"; 
}
if(strlen($cred)!=6)
{
    echo"<center>"; 
        echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Transaction Failed!</div><div class='card-body'><h5 class='card-title'>Credit card number is invalid!</h5><p class='card-text'>All inputs must be valid to Buy the course! </p><button class='btn-secondary'><a href='courses.php'>Go Back!</a></button></div></div>";
        echo "</center>"; 
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
$result=mysqli_query($conn,"select * from exptable where fname='$fname' and password='$password'")
				or die("FAILED!!".mysql_error());
	$row=mysqli_fetch_array($result);
	if($row['fname']==$fname and $row['password']!=$password)
    {
       	 
        echo"<center>"; 
        echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'> Wrong credentials!</div><div class='card-body'><h5 class='card-title'> Password is incorrect!!</h5><p class='card-text'>Looks like you have forgot your  password </p><button class='btn-danger'><a href='forgotpassword.html'>Forgot Password!</a></button>&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn-secondary'><a href='courses.php'>Go Back!</a></button></div></div>";
        echo "</center>";
    }
    else if($row['fname']==$fname and $row['password']==$password)//for success
    {
        
        
        $_SESSION["username"]=$fname;
        $paymenttime= date("m/d/y G.i:s<br>", time());
		$sql = "insert into paymenttable values('$fname','$password','$cred','$coursename','$paymenttime')";
        $result = mysqli_query($conn,$sql);
		echo"<center>"; 
        echo "<div class='card text-white bg-success mb-3' style='max-width: 18rem;'><div class='card-header'>Transaction Successfull!</div><div class='card-body'><h5 class='card-title'>Congrats,". $_SESSION["username"]."</h5><p class='card-text'>We have added <b style='color:white;'>".$coursename. "</b><br>to your account </p><button class='btn-success'><a href='myaccount.php'>My Account</a></button></div></div>";
        echo "</center>";   
        
        
        
        
        
    }
	
   
	else if($row['fname']!=$fname )
	{
		
		echo"<center>"; 
        echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Transaction failed!</div><div class='card-body'><h5 class='card-title'>Username is incorrect!</h5><p class='card-text'>Only account holders can buy the courses! </p><button class='btn-success'><a href='home.php'>Create Account</a></button>&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn-secondary'><a href='courses.php'>Go Back!</a></button></div></div>";
        echo "</center>";
	}

  
}}}
?>