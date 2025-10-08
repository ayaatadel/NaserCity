<?php 
$userName="root";
$password="";
// default ==> 3306
$host="localhost";  //$host="localhost:3307";
$dbType="mysql";
$dbName="iti_4m_pen_test_2025";

$connection=new PDO("$dbType:host=$host;dbname=$dbName",$userName,$password) ;

 session_start();

?>