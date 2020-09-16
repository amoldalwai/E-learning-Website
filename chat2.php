<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<center>

<div id="limit">
<center >
<form action="chatinsert.php" method="POST" class="chatinput" >
  <input type="text" name="username"  value="amol" readonly style='border-radius:50px;border:1px solid green;display:none;'><br><br><br>
    <input type="text" name="msg" id="msg" placeholder="                                                                type your message here"><br><br>
  

    <button type="submit" class="btn btn-lg btn-success" style="border-radius:50%;"><span class="glyphicon glyphicon-send"></span></button>
</form>
<style>
    .chatmsg
    {
        background-color: #075bff;
        border: 1px solid #075bff;
        border-radius: 10px;
        height:auto;
        width:20%;
        padding: 8px;
        color: red;
        
    }
     .adchatmsg
    {
        background-color: #5FCF80;
        border: 1px solid #5FCF80;
        border-radius: 10px;
        height:auto;
        width:20%;
        padding: 8px;
        color: white;
        
    }
    #chats
    {
        text-align: center;
        width:50%;
        height: auto;
        border-radius: 30px;
        background: url('wall.png');
        padding-top: 10px;
        min-height: 80%;
        
    }
    #msg
    {
        height:80px;
        width:700px;
        border:1px solid green;
        border-radius: 50px;
        background-color: lightyellow;
        
    }
 #limit
    {
        background-image:url('wall.jpg');
    }
</style>
<script>
    function displaychat() 
    {
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("chats").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "chatdisplay.php", true);
        xmlhttp.send();
    }
   setInterval(displaychat,100);
</script>

    <div id="chats"></div></center>


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
     
     $sql = "UPDATE counter SET visit=visit+1 WHERE id = 3";
    $result = mysqli_query($conn,$sql);
 }

}

?>
