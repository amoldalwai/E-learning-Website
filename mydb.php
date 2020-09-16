
<?php

$i=0;
if($_SERVER['REQUEST_METHOD']=="GET")
{
      $localhost = "localhost";
      $usernamew = "root";
      $passwordw = "";
      $db = "expdb";
$conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
if(!$conn)
     {
            echo "Connection error";
      }
  else
   {
       echo "";

    }
}
?>