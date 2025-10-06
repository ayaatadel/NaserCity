<?php
// include "bootstra.php";
require "bootstrap.php"; 
include "navbar.php";
/**
 * function  : reusable block of code   ==> prametarized , non prametarized
 * function fun_name(){code}   ===>signature
 * use : call   =>fun_name() 
 * 
 * void ==> has noreturn value
 * return ==> return value
 * predefined function ==> function alreadey defined in php 
 * ------- array_push 
 * user defined funtion  ==> use write code 
 */



// $sum=5+6,"<br>";
// $sum=1+6;

            // paramers , arguments
// function sum($n1,$n2)   //  signature
// {
//     echo $n1+$n2 , "<br>";
// }
// function sum($n1,$n2)   //  signature
// {
//     return $n1+$n2;
// }
// echo sum(5,6);
// $result=sum(1,2);

// echo "<br>*************** <br>";
// $result=function ($n1=0,$n2=0)   //  signature
// {
//     return $n1+$n2;
// };


// echo $result();
// echo $result(11,22);



/**
 * string
 */

// $str="welcome track PenTeration track testing";
// // get length
// echo strlen($str),"<br>";
// echo strpos($str,"w"),"<br>";
// echo strpos($str,"track"),"<br>";
// echo str_word_count($str),"<br>";
// echo strtoupper($str),"<br>";
// echo strtolower($str),"<br>";



echo "<h1 class='text-center text-danger'> Hello </h1>";


/**
 * variable of variable
 */


// $test="branch";
// $$test="cairo"; // $branch
// echo $$test,"<br>";
// echo "$branch <br>";

/**
 * 
* Null Coalescing Operator   ?? 
 * The Null Coalescing Operator (??) in PHP
 * The null coalescing operator (??) in PHP is used to check if a variable exists and is not null. If the variable is set and not null, it returns the variable's value. Otherwise, it returns the provided default value.
 * It is a shorthand for using isset() in conditional expressions.
 */
// $x="hello";
// // echo $x??"iti";

$name=[1,2,3];
unset($name);  // remove variable from memory
// echo $name??"userName";
echo $name;

// var_dump(isset($name)) ;
// echo "<br>";
// var_dump(empty($name));
// if(isset($name))
// {
//     echo "find";
// }else{
//     echo "notfound";
// }

?>