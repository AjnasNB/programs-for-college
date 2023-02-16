<?php
$str="hello string";
$x=200;
$y=44.6;
echo "string is: $str <br>";
echo "integer is: $x <br>";
echo "float is: $y <br>";
echo date("l , d-m-Y h:i:s A jS \of F ,o",mktime(13,4,8,01,31,2023))."<br>";
$d= strtotime("12.30.59 am May 23 2024");
echo("createrd date is ".date("Y-m-d , h:i:s a",$d));
$array=array("suni"=>"60980","salu"=>"08975");
echo "<br>suni's salary: ". $array["suni"];
$array["saji"]=456778878;

echo "<br>saji's salary: ". $array["saji"];

$sen= "She is so beautiful";
print_r (explode(" ",$sen));
$rt=array("so","you","are","mad");
echo implode(" ", $rt);
echo "<br>";
echo array_search("08975",$array);
 

?>