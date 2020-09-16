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
        top:120px;
        width:450px;
        
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


<body>
<?php
if(isset($_POST['fname']))
{
$fname=$_POST["fname"];
$pass=$_POST["pass"];
$email=$_POST["email"];
//$gen=$_GET["gender"];

if($fname=="" || $pass=="" )
{
    echo"<center>"; 
        echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Account can't be created!</div><div class='card-body'><h5 class='card-title'>All inputs are neccessary!</h5><p class='card-text'>All inputs are necessary  to create new account</p><button class='btn-secondary'><a href='home.php'>Go Back</button></div></div>";
        echo "</center>";
}
else
{
    
if($_SERVER['REQUEST_METHOD']=="POST")//con establish
{
$localhost = "localhost";
$username = "root";
$password = "";
$db = "expdb";
$conn = mysqli_connect($localhost,$username,$password,$db);
if(!$conn){
echo "";
}
else
{
echo "";
}
$result=mysqli_query($conn,"select * from exptable where fname='$fname'")
				or die("FAILED!!".mysql_error());
	$row=mysqli_fetch_array($result);
	if($row['fname']==$fname){
		echo"<center>"; 
        echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Account cant be created!</div><div class='card-body'><h5 class='card-title'>Username,".$fname."</h5><p class='card-text'>Alreday exists please choose another username to create new account</p><button class='btn-secondary'><a href='home.php'>Go Back</button></div></div>";
        echo "</center>"; 
	}
	else
	{   
		$sql = "insert into exptable values('$fname','$pass','$email')";
        $result = mysqli_query($conn,$sql);
		echo"<center>"; 
        echo "<div class='card text-white bg-success mb-3' style='max-width: 18rem;'><div class='card-header'>Account Created!</div><div class='card-body'><h5 class='card-title'>Welcome,".$fname."</h5><p class='card-text'>Hello welcome to the family of learners </p><button class='btn-success'><a href='home.php'>Go Home!</button></div></div>";
        echo "</center>"; 
	}

  
}}}
?>
</body>