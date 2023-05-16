<?php

session_start();
unset($_SESSION['CartData']);
header("location:cart.php");

?>