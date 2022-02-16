
<?php

setcookie ("username",$_POST["username"],time() - 3600);


// destroy session and return to homepage after logout
session_start();
session_destroy();
unset($_SESSION);
session_regenerate_id(true);
header('location: ../index.php'); 

?>
