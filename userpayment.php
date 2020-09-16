
<?php
    session_start();
    
?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<center><h1>My Courses </h1></center><hr>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
.row
    {
        border: 2px solid black;
    }
.ntf
    {
        color:red;
        position: absolute;
        top:0px;
        
    }
.msg
    {
        color:blue;
    }
.cont
    {
        width:100%;
    }
.cont-head
    {
        width:100%;
         font-weight: bolder;
        
    }
td
    {
        width:15%;
        font-size: 18px;
        text-transform: capitalize;
        padding-top: 8px;
        
    }
.badge {
  position: absolute;
  top: 10px;
  left:20px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
.dwnldbtn {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 30px;
    cursor: pointer;
    font-size: 20px;
    border-radius: 15px;
}

/* Darker background on mouse-over */
.dwnldbtn:hover {
    background-color: RoyalBlue;
}
    a,a:hover
    {
        color:white;
        text-decoration: none;
    }
</style>


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
$result=mysqli_query($conn,"select * from paymenttable where fname='$fname'")
				or die("FAILED!!".mysql_error());
	        $i=0;
echo "<table class='cont-head'>";
echo "<tr >";
echo "<td>Sr</td><td>Course-Name</td><td>Time of Purchase</td><td>Options</td>"; 
echo "</td>";
echo "</tr>";
echo "</table><hr>";
echo "<table class='cont table table-hover table-dark'>";
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
    $i++;
    echo "<tr>";
     echo  "<td>".$i."</td> <td>".$row['coursename']."</td><td>".$row['time']."</td><td>
     <button class='dwnldbtn'><a  download='courses/".$row['coursename'].".pdf' href='courses/".$row['coursename'].".pdf'><i class='fa fa-download'></i>Download</a></td></button>";
    echo "</tr>";
    


}
echo "</table>";
echo "<span class='badge'>$i</span>";
}
else{

echo "<table  class='cont table table-hover table-dark'><tr><td style='text-align:center;'>Yet to Buy a Course</td></tr></table>";
}
}
}
?>