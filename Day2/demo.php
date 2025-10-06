<?php
/**
 * Array  ===> any data type || multi types
 * var_dump || print_r
 * loop : index , length of this array
 * count ===> length of array
 * ====> Array types
 * 1- indexed Array  ==>  one dimension array || depend on index
 * 2- associtive array  ===> key  ==> getValue ==> $aarName["key]
 * 3- MultiDimension array 
 
*/

// // $arr=[1,"iti",true];
// $arr2=array("mohammed","ahmed","adel");
// echo $arr2[0] , "<br>";
// // print_r($arr2);
// // echo "<br>";
// // var_dump($arr);

// // for ($i=0; $i < count($arr2); $i++) { 
// //     echo $i." : ".$arr2[$i]."<br>";
// // }
// // add element to array (first , last)
// // 1- index ===> $arr_Name[index]
// // 2- array_push  ==> add elemnt to array after last index
// // 3- add from first (array_unshift) 
// $arr2[3]="ali";
// // $arr2[5]="Mahmoud";
// // var_dump($arr2);
// // array_push($arr2,"mahmoud");
// // array_push($arr2,"mahmoud","mostafa","nedaa");
// array_push($arr2,["mahmoud","mostafa","nedaa"]);
// echo "<br>********************** <br>";

// array_unshift($arr2,"omar","david");

// var_dump($arr2);
// /**
//  * array_push
//  * add more than one value
//  * any types of value  ==> string , inreger, array
//  * 
//  */


// /**
//  * remove elemnt from array
//  * first ==> shift
//  * last ==> pop
//  */
// echo "<br> pop ******** pop ************** <br>";
// array_pop($arr2);
// var_dump($arr2);
// echo "<br>***********  shift  *********** <br>";

// array_shift($arr2);
// var_dump($arr2);
// // for ($i=0; $i < count($arr2); $i++) { 
// //     echo $i." : ".$arr2[$i]."<br>";
// // }


//   // index => value of index
// foreach ($arr2 as $index => $value) {
//     # code...
//         echo "<br>".$index." : ".$value."<br>";

// }
// echo "<br> pop ********************** <br>";

// foreach ($arr2 as  $value) {
//     # code...
//         echo $value."<br>";

// }


$a1=["mahmoud","mohammed","ahmed","omar"]; // name
// name  : mahmoud
// age :25
$a2=[25,23,22,21]; // age 
$person=[ 
"name"=>"mahmoud",
"age"=>25,
"address"=>"cairo",
];
// echo $person["name"];

// $person=[
// [
// "name"=>"mahmoud",
// "age"=>25,
// "address"=>"cairo",
// ],
// [
//     "name"=>"mahammed",
// "age"=>23,
// "address"=>"menoufia",
// ],
// [
//     "name"=>"omar",
// "age"=>21,
// "address"=>"naserCity",
// ],
// ];
      // 0    //1
$arr=[[1,2],[3,4]];
/**
 * rows
 * columns
 */

// [c0  c1  c2
//   1  2  3   // r0
//   4  5  6   // r1

// ]
// $arr=[[1,2],[3,4]];
// $arr[0][0]; // 1
// $arr[0][1];  //2
// $arr[1][0];  //3
// $arr[1][1];  //3

// for ($i=0; $i <count($arr) ; $i++) { 
//     //   print_r($arr[$i]);
//     //   echo "<br>";
//     for ($j=0; $j < count($arr[$i]); $j++) { 
//         # code...
//         echo $arr[$i][$j],"<br>";
//     }
// }
// echo "<br>************ <br>";

// foreach ($arr as $key1 => $value) {
//     # code...
//     foreach ($value as $key2 => $number) {
//         # code...
//         echo "$number.<br>";

//     }
// }



// $person=[
// [
// "name"=>"mahmoud",
// "age"=>25,
// "address"=>"cairo",
// ],
// [
// "name"=>"mahammed",
// "age"=>23,
// "address"=>"menoufia",
// ],
// [
//     "name"=>"omar",
// "age"=>21,
// "address"=>"naserCity",
// ],
// ];


// // $person=[ 
// // "name"=>"mahmoud",
// // "age"=>25,
// // "address"=>"cairo",
// // ];

// $person=[
// [
// "name"=>"mahmoud",
// "age"=>25,
// "address"=>"cairo",
// ],
// [
// "name"=>"mahammed",
// "age"=>23,
// "address"=>"menoufia",
// ],
// [
//     "name"=>"omar",
// "age"=>21,
// "address"=>"naserCity",
// ],
// ];

// // foreach ($person as $key => $value) {
// // //     echo $key , "<br>";
// // //    var_dump($value) ;

// // //    echo "<br> ************** <br>";
// // foreach($value as $k=>$indexedValue )
// // {
// //     echo "$k : $indexedValue <br>";
// // }
// // }


// // var_dump(array_keys($person));

// // $person=[ 
// // "name"=>"mahmoud",
// // "age"=>25,
// // "address"=>"cairo",
// // ];
// $person=[
// [
// "name"=>"mahmoud",
// "age"=>25,
// "address"=>"cairo",
// ],
// [
// "name"=>"mahammed",
// "age"=>23,
// "address"=>"menoufia",
// ],
// [
//     "name"=>"omar",
// "age"=>21,
// "address"=>"naserCity",
// ],
// ];
// // //  echo "<br> ************** <br>";
// // var_dump(array_values(array_keys($person))); ///  
// //  echo "<br> ************** <br>";
// // var_dump(array_values($person)); ///  

// // name          age       address
// // mohammed       21       cairo
// // mohammed       21       cairo
// // mohammed       21       cairo
// $person=[
// [
// "name"=>"mahmoud",
// "age"=>25,
// "address"=>"cairo",
// ],
// [
// "name"=>"mahammed",
// "age"=>23,
// "address"=>"menoufia",
// ],
// [
//     "name"=>"omar",
// "age"=>21,
// "address"=>"naserCity",
// ],
// ];
// echo "<table border=1>";
// echo "<head>";
// echo "<tr>";
// echo "<th> name</th>";
// echo "<th>";echo "age";echo "</th>";
// echo "<th>";echo "address";echo "</th>";
// echo "</th>";
// echo "</head>";

// echo "<tbody>";
// foreach ($person as $key => $value) {
//     echo "<tr>";
//     foreach ($value as $k => $v) {

//         echo "<td> $v </td>";
//     }
//       echo "</tr>";
// }
// echo "</tbody>";

// echo "</table>";


/***
 * concatination between arrays
 * array_merge
 * spread operator (...)
 */
$arr1=[1,2,3];
$arr2=[4,5,6,7];

// [1,2,3,7]
$arr3=[...$arr1,...$arr2];
var_dump($arr3);
// $arr3=array_merge($arr1,$arr2);
// var_dump($arr3);



?>