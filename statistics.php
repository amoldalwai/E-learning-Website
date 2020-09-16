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
      
        
  
        
          echo "<div class='side'>
    <div>Messages</div>
  </div>
  <div class='middle'>
    <div class='bar-container'>
      <div class='bar-2'style='width:".$i."%'></div>
    </div>
  </div>
  <div class='side right'>
    <div>".$i."%</div>
  </div>";

        
        
       

 }
else
{

echo "0 results";
}
}
}
?>
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
      
        
  
        
          echo "<div class='side'>
    <div>Account users</div>
  </div>
  <div class='middle'>
    <div class='bar-container'>
      <div class='bar-4'style='width:".$i."%'></div>
    </div>
  </div>
  <div class='side right'>
    <div>".$i."%</div>
  </div>";

        
        
       

 }
else
{

echo "0 results";
}
}
}
?>
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
      
        
  
        
          echo "<div class='side'>
    <div>Courses bought</div>
  </div>
  <div class='middle'>
    <div class='bar-container'>
      <div class='bar-1'style='width:".$i."%'></div>
    </div>
  </div>
  <div class='side right'>
    <div>".$i."%</div>
  </div>";

        
        
       

 }
else
{

echo "0 results";
}
}
}
?>
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
      
        
  
        
          echo "<div class='side'>
    <div>User suggestions</div>
  </div>
  <div class='middle'>
    <div class='bar-container'>
      <div class='bar-3'style='background:green;width:".$i."%'></div>
    </div>
  </div>
  <div class='side right'>
    <div>".$i."%</div>
  </div>";

        
        
       

 }
else
{

echo "0 results";
}
}
}
?>