<?php
$name = "ankush";
echo "hello $name <br>";



$sername = "pal";
$fullname = $name . " " . $sername;  //concatenation
echo "hello $fullname <br>";


$story = "hello world";
echo "postion of the world ".strpos($story,"world")."<br>";

echo "replace funtion of the string = ".str_replace("world","jems",$story)."<br>";

echo "length of the string =".strlen($story)."<br>";

echo "lower case of the string =".strtolower($story)."<br>";

echo "upper case of the string =".strtoupper($story)."<br>";

$text = "  hello world  ";
echo "trimed string =".trim($text)."<br>";

echo "substring = ".substr($story,6,)."<br>";
?>