<?php 

// comment -----------> oneline
# comment -----------> oneline
/**
 * multi line
 * documentation 
 * hash code (u won't it to run )
 */

/** =------------- print
 * echo   --- string  
 * print   --- string 
 * var_dump --- string  , array
 * print_r --- string  , array
 */

/**
 * datatypes
 * variable ==> name (place in memory has value )
 * string
 * integer
 * double
 * array
 * boolean
 * object
 * 
 * 
 * =====> php ==> loosely typed language  
 * value of variable ==> know datatype
 * 
 * ----> public function ===> gettype($Var_Name)
 * -------------------------
 * $var_name=value;
 */


$name="iti";
$age=30;
$opened=true;
$test=3.14;
$courses=["php","html"];  
// array ===> 
// length ==> number of elements of array
// index ==> position  of element of array  ==> start from index 0
$dTypeName=gettype($name);
// ----------------------------------------
echo( gettype($name));
print "<br>";
// echo gettype($age) ,"<br>";
// echo gettype($opened) ,"<br>";
// echo gettype($test) ,"<br>";
// echo gettype($courses) ,"<br>";
// ----------------------------------------

// print (gettype($name)) ;
// print "<br>";
// print (gettype($age)) ;
// echo "<br>";
// print (gettype($opened)) ;
// echo "<br>";
// print (gettype($test)) ;
// echo "<br>";
// print (gettype($courses)) ;

// echo $courses;   ==>Warning: Array to string conversion 
// print $courses ;===> Warning: Array to string conversion 
// print_r ($courses) ;  // ===>Array ( [0] => php [1] => html )
                      // dataType of variable (index==> value of index)

var_dump($courses); // array(2) { [0]=> string(3) "php" [1]=> string(4) "html" }
// (dataType of variable , length) 
// (index ==> (data type value of index , length)value of index) 

// ==================================
/**
 * echo  --- string     
 *               
 * print multi value in single line (with out using practises)
 * echo gettype($opened) ,"<br>";
 * echo (gettype($opened));
 * 
 * print  --- string 
 * 
 * print single value in single line 
 * print (gettype($courses)) ;
 * print gettype($courses) ;
 * 
 * 
 * print_r()  --- string , array 
 * should take pracises ===>   print_r($var_Name);         
 * dataType of variable (index==> value of index)
 * var_dump() --- string , array 
 * should take pracises ===>   var_dump($var_Name);         
 *  (dataType of variable , length of variable) 
 * array ==>(index ==> (data type value of index , length)value of index) 

 */


// // constatnt  variable 

// define("PI",3.14);   // when using oop u can't use it
// // echo PI;

// const TRACK_Name="testing";   // when using oop u can use it
// echo TRACK_Name;


/**
 * opeartors 
 * arethamtic operator 
 * + , - ,* ,% , / , ^ 
 * preIncrement || postIncremet
 * predecrement || postdecremet
 *
 * ---------------------
 * comparison operator   ===> true , fasle
 * < , > , == , === , != , !== ,>= ,<=
 * 
 * ------>     ==           ===
 *            value         value and datatype
 * ------->   !=          !==
 *             value      value and datatype
 * --------------
 * Logical operator   ==> true , false  
 *   && , || , !
 * 
 * && ==> true    && false   ==> false  
 * && ==> true    && true    ==> true
 * && ==> fasle   && false  ==> false 
 * && ==> false    && true   ==> false
 * ------------------------------------------

*|| ==> true   || false   ==> true 
 *|| ==> true   || true    ==> true
 *|| ==> fasle  || false  ==> false 
 *|| ==> false   || true   ==> true
 * 
 * ------------------------------------------

    *! ==> !true ===> false   
    *! ==> !false ==> true
 * 
 */
// (5=="5")   => true
// (5==="5")   ==> false


$x="3";
$y=3;

// var_dump(($x==$y));  // value(x)== value(y)==>true  
// var_dump(($x===$y));// (value(x)== value(y) ) && (dtype(x)==dtype(y)) 
                      // true &&  false ===> false 

var_dump($x!=$y);//===> false  ==> (!(value(x) == value(y))) => !t
var_dump($x!==$y);//===> true  ==> (!(value(x) == value(y)) && (dtype(x)==dtype(y)))=> !f

// var_dump(($x==$y) || ($x>$y));
// //          false || true ===> true
// var_dump(($x==$y) || ($x< $y));
// //          false || false  ==> false
// var_dump(($x==$y) && ($x>$y));
// //          false && true ===> false
// var_dump(($x==$y) && ($x< $y));
// //          false && false  ===>  false
// var_dump(($x>$y) && ($x != $y));
// //          true && true  ===>  false

// echo $x + $y , "<br>";   // 13
// echo $x - $y , "<br>";    // 7
// echo $x * $y , "<br>";   // 30
// echo $x / $y , "<br>";   // 3.33
// echo $x % $y , "<br>";   // 1 

// // 10/3 ==>10/3= 3   ==> 3*3=9 ==> 10-9=1
// // 10%4 ==>  10/4 = 2 ==> 2*4=8 ==> 10-8=2 
// echo $x ** $y , "<br>";  // 1000


// preIncrement || postIncremet   ==========> x =12
// echo $x++;// 10   --->  10 ==> 11 
// echo ++$x;  //  12  --> 12 ============>  x=12
// // predecrement || postdecremet 
// echo $x--; // 12  ==> 12 --- 11
// echo --$x;  // 10  -- 10


/**
 * Conditional statements 
 * if , if else , if elseif else 
 * if(condition) { true }
 * if(condition) { true } else {else}
 * if(condition) { true } elseif(comdition) {true} else{false}

 */



// if($x>$y)
// {
//   echo "greater than <br> ";
// }

// if($x>$y)
// {
//   echo "greater than <br> ";
// }else{
//     echo "less than";
// }

// if($x>$y)
// {
//   echo "greater than <br> ";
// }elseif($x<$y){
//     echo "less than";
// }else{
//     echo "equal";
// }
// $x=10;
// $y=10;

// // == ternary operator  ==> (condition)?true:false;
// // echo($x>$y)?"greater than":"less than";   ===> if , else 
// echo($x>$y)?"greater than":(($x==$y)?"equal":"less than");  //==> if elseif else

// switch  (variable)  ==> equal 
    //  case :
    //  case :
    //  case :
    //  default :   (false)   ====> else 


// $grade=50;
// switch ($grade) {
//     case 100:
//         echo " Grade A";
//         break;
//     case 90:
//         echo " Grade B";
//         break;
    
//     case 80:
//         echo " Grade C";
//         break;
//     case 70:
//         echo " Grade D";
//         break;
//     case 60:
//         echo " Grade E";
//         break;
    
//     default:
//          echo "sorry u don't pass ";
//         break;
// }




// echo "<h1 style='color:red;text-align:center'> Hello Track pentration testing </h1>";

// loop   ==> repeat ===> 
//(start , end)   ==> for 
// condition ==> while 
// do while

/**
 * hello ==> h1 , h6
 */


// inital  ; condition  ; increment
// for($x=1;$x<=6;$x++){
//   echo "<h$x> Hello</h$x>";
// }
// $x=1;
// for(;$x<=6;){
//   echo "<h$x> Hello</h$x>";
//   $x++;
// }

// $x = 1;
// while ($x >= 6) {
//     echo "<h$x style='color:blue;'> Hello</h$x>";
//     $x++;
// }


// $x = 1;
// do {
//      echo "<h$x style='color:blue;'> Hello</h$x>";
//       $x++;
// } while ($x >= 6);



/**
 * falsy values   ==>   0 , fasle  , "",[],null
 * truthy values   ==> any number except 0 , true , " "  , undefined(vlue ==> string)
 */
echo "<br>*******  falsy values***** <br>";

// if (false) {
//     echo "true <br >";
// } else {
//     echo "fasle <br>";
// };
// echo "<br>************ <br>";
// if (null) {
//     echo "true <br >";
// } else {
//    echo "fasle <br>";
// };
// echo "<br>************ <br>";

// if (0) {
//     echo "true <br >";
// } else {
//    echo "fasle <br>";
// };
// echo "<br>************ <br>";

// if ([]) {
//     echo "true <br >";
// } else {
//    echo "fasle <br>";
// };
// echo "<br>************ <br>";

// if ("") {
//     echo "true <br >";
// } else {
//    echo "fasle <br>";
// };
// echo "<br>************ <br>";

// if ("undefined") {
//     echo "true <br >";
// } else {
//    echo "fasle <br>";
// };


echo "<br>****** Truthy****** <br>";

if (true) {
    echo "true <br >";
} else {
    echo "fasle <br>";
};
echo "<br>************ <br>";
if (1) {
    echo "true <br >";
} else {
   echo "fasle <br>";
};
echo "<br>************ <br>";

if (["hello"]) {
    echo "true <br >";
} else {
   echo "fasle <br>";
};
echo "<br>************ <br>";

if (" ") {
    echo "true <br >";
} else {
   echo "fasle <br>";
};
echo "<br>************ <br>";

if ("undefined") {
    echo "true <br >";
} else {
   echo "fasle <br>";
};



?>