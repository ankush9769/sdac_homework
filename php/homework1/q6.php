<?php
$car = "mercedese";
echo "wow $car <br>";



$price = 1000000;
$fulldescription = $car . " " . $price;  //concatenation
echo "wow $fulldescription <br>";


$description = "bmw is daddy of all machine";
echo "postion of the world ".strpos($description,"daddy")."<br>";

echo "replace funtion of the string = ".str_replace("daddy","papa",$description)."<br>";

echo "length of the string =".strlen($description)."<br>";

echo "lower case of the string =".strtolower($description)."<br>";

echo "upper case of the string =".strtoupper($description)."<br>";

$text = "  bmw bimmer  ";
echo "trimed string =".trim($text)."<br>";

echo "substring = ".substr($description,6,)."<br>";
?>