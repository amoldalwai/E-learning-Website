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
if(isset($_POST['username']))
{

$message=$_POST["msg"];
$username=$_POST["username"];

//$gen=$_POST["gender"];

if($message=="" )
{
    echo "all inputs required";
}
else
{
    
if($_SERVER['REQUEST_METHOD']=="POST")//con establish
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

	
	
	 
        $time= date("m/d/y G.i:s<br>", time());
		$sql = "insert into chattable values('$username','$message','$time')";
        $result = mysqli_query($conn,$sql);
//		echo "message sent!";
        header('Location: chat1.php');
     
  
}}}
?>