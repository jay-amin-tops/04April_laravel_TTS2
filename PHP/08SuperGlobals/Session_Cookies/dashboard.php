<?php require_once("headerfile.php"); 

if (!isset($_SESSION['UserData'])) {
    header("location:login.php");
}
echo "<pre>";
print_r($_SESSION);
?> 
<h2>Welcome user</h2>