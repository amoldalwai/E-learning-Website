<center>Authenticated User Rating</center><hr>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.row
    {
        
        margin:10px;
        padding: 10px;
        border-radius: 20px;
        background: ;
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
        
    }
td
    {
        width:15%;
    }
</style>
<style>
* {
    box-sizing: border-box;
}



.heading {
    font-size: 25px;
    margin-right: 25px;
    
    
}

.fa {
    font-size: 25px;
}

.checked {
    color: orange;
}

/* Three column layout */
.side {
    float: left;
    width: 15%;
    margin-top:10px;
}

.middle {
    margin-top:10px;
    float: left;
    width: 70%;
}

/* Place text to the right */
.right {
    text-align: right;
    
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The bar container */
.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
    border-radius: 20px;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50; border-radius: 20px;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3; border-radius: 20px;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4; border-radius: 20px;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800; border-radius: 20px;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336; border-radius: 20px;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .side, .middle {
        width: 100%;
    }
    .right {
        display: none;
    }
}
</style>
<body>
    


</body>

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
$result = mysqli_query($conn,'SELECT COUNT(ui) AS no_avg FROM ratingtable'); 
$row = mysqli_fetch_assoc($result); 
//echo "user count ".$row['no_avg']."<br>";
    echo "<div style='background: #5FCF80;border-radius:20px;'><div class='row'><span class='heading' style='color:white;'>User Rating</span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star'></span>
<p style='color:white;'>3.4 average based on ".$row['no_avg']." reviews.</p></div>";

    
    
    
$result = mysqli_query($conn,'SELECT AVG(ui) AS ui_avg FROM ratingtable'); 
$row = mysqli_fetch_assoc($result); 
//echo "Average ui rating ".$row['ui_avg']."<br>";
    $row['ui_avg']=$row['ui_avg']*10;
    
//echo $row['ui_avg'];
    
echo "<div class='side''>
    <div>UserInterface</div>
  </div>
  <div class='middle''>
    <div class='bar-container'>
      <div class='bar-4'style='width:10*".$row['ui_avg']."%'></div>
    </div>
  </div>
  <div class='side right'>
    <div>".$row['ui_avg']."%</div>
  </div>";
    
$result = mysqli_query($conn,'SELECT AVG(performance) AS per_avg FROM ratingtable'); 
$row = mysqli_fetch_assoc($result); 
//echo "Average performance rating ".$row['per_avg']."<br>";
    $row['per_avg']=$row['per_avg']*10;
    
    
echo "<div class='side''>
    <div>Performance</div>
  </div>
  <div class='middle''>
    <div class='bar-container'>
      <div class='bar-3'style='width:".$row['per_avg']."%'></div>
    </div>
  </div>
  <div class='side right'>
    <div>".$row['per_avg']."%</div>
  </div>";
    
$result = mysqli_query($conn,'SELECT AVG(design) AS des_avg FROM ratingtable'); 
$row = mysqli_fetch_assoc($result); 
//echo "Average design rating ".$row['des_avg']."<br>";
     $row['des_avg']=$row['des_avg']*10;
    
    echo "<div class='side''>
    <div>Design</div>
  </div>
  <div class='middle''>
    <div class='bar-container'>
      <div class='bar-2'style='width:".$row['des_avg']."%'></div>
    </div>
  </div>
  <div class='side right'>
    <div>".$row['des_avg']."%</div>
  </div>";
    
    
    
    
    
    
    
    
    

$result = mysqli_query($conn,'SELECT AVG(usablity) AS us_avg FROM ratingtable'); 
$row = mysqli_fetch_assoc($result); 
//echo "Average usablity rating ".$row['us_avg']."<br>";

   $row['us_avg']=$row['us_avg']*10;
    
    echo "<div class='side''>
    <div>Design</div>
  </div>
  <div class='middle''>
    <div class='bar-container'>
      <div class='bar-1'style='width:".$row['us_avg']."%'></div>
    </div>
  </div>
  <div class='side right'>
    <div>".$row['us_avg']."%</div>
  </div></div>";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

}
}
?>