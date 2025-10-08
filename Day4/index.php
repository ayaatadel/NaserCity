<?php

/**
 * form
 * action  ===>what will happen after submit (where send data)
 *  ----- store data || move
 * method ==> what will occure after submit (how deal with data)
 * post  ==> send data 
 * get   ==> get data ||  send data 
 * delete  ===> delete data
 * put || edit  ==> edit on data 
 * 
 * ========== super global variables
 *  $_GET   ===> URL   (method get)  ===> associative array
 *  $_POST   ===> Body (method post)
 * ======================================= connection with data base
 * PDO || Mysqli  ==> classes in php (connection with database)
 * Mysqli  ===> mysql  ====> deprecated 
 * PDO ==> diffrent types of database (mysql , monogo , postgree)
 * cradentials ===> 
 * name 
 * type
 * host
 * userName
 * password
 */



$userName="root";
$password="";
// default ==> 3306
$host="localhost";  //$host="localhost:3307";
$dbType="mysql";
$dbName="iti_4m_pen_test_2025";

$connection=new PDO("$dbType:host=$host;dbname=$dbName",$userName,$password) ;
// insert in data
$query="insert into users (name , email, password) values('mohammed','mohammed@gmail.com','123456')";
$sqlQuery=$connection->prepare($query);
// // var_dump($query);
// // echo "<br>";
// // var_dump($sqlQuery);
$sqlQuery->execute();
// var_dump($connection);

// select from data 
$querySelect="SELECT * FROM users"; // string
$sqlSelect=$connection->prepare($querySelect); // sql 
$sqlSelect->execute();// bool  (true , false)
/**
 * fetch ==> one row
 * fetchAll  ==> multi rows
 */

$result=$sqlSelect->fetchAll(PDO::FETCH_ASSOC); // 
// var_dump($result);
foreach ($result as $value) {
  var_dump($value);
  echo "<br>";
}


?>