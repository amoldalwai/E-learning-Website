<!--

<form action="adchat.php" method="POST">
    Name<input type="text" name="username"  value="admin" readonly ><br>
    message<input type="text" name="msg"><br>
  

    <input type="submit" value="send">
</form>
-->
<style>
    .chatmsg
    {
        background-color: blue;
        border: 1px solid blue;
        border-radius: 10px;
        height:50px;
        width:80px;
        padding: 8px;
        color: white;
        
    }
     .adchatmsg
    {
        background-color: green;
        border: 1px solid green;
        border-radius: 10px;
        height:50px;
        width:80px;
        padding: 8px;
        color: white;
        
    }
</style>



<!--to send message-->
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

	
	
	 
       
		$sql = "delete  from  chattable ";
        $result = mysqli_query($conn,$sql);
//		echo "message sent!";
        echo "all chats deleted";
     
  
}
?>