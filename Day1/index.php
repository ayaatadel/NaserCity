<?php


echo "<h1 style='color:red;text-align:center'> Hello Track pentration testing </h1>";

$names=["ahmed","mohammed","mahmoud","mostafa"];   // one dimension  array
// echo $names[0], "<br>";
// $names=[[1,2,3],"mohammed","mahmoud","doha"];
// var_dump( $names[0]);
/**
 * index  ==> start =>0
 * length   ==> sizeof ==> 
 */
for($index=0;$index<sizeof($names);$index++)
{
    // echo $names[0];
   echo "<h2> $names[$index] </h2>";

}




?>
