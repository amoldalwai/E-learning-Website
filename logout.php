<?php
session_start();
session_destroy();
echo "session loged out!<br>";
header('Location:home.php');

 


?>