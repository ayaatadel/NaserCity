<?php 
require "connection.php";
session_destroy();
header("location:login.php?message=you logout")


?>