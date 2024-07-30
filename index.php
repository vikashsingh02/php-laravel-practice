<?php   

// for($a=1;$a<=10;$a++){
//    for($b=$a;$b<=5;$b++){
//       echo"$a";
//    }
//    echo"</br>";
// }
/* string 

strlen -- string length 
str_replace -- to replace strig charcters 
str_ireplace -- not an case sensitive 
ucwords -- it captilize first letter of every sentence present in string
ucfirst -- it caotilize only first letter of string
 
*/
$name = "vikash singh doon";
echo "changeing this for github  ". strlen($name) . "  characters ";
echo "<br>";
echo str_Ireplace("V","X" ,$name);
echo "<br>";
echo ucwords($name);
echo "<br>";
echo ucfirst($name);
echo "<br>";
echo strtoupper($name);
echo "<br>";
echo strtolower($name);
?>