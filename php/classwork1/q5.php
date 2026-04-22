<?php
$arr =[1,2,3,3,4];
for($i =0 ;$i<count($arr);$i++){
    echo $arr[$i]."<br>";
}


$fruits=["apple"=>"red","chicho"=>"brown","banana"=>"yellow","orange"=>"orange"];
foreach($fruits as $fruit=>$color){
    echo"fruit=$fruit and color=$color<br>";
}
array_push($arr,10);  //array_push()
echo "after push <br>";
print_r($arr);

array_pop($arr);  //array_pop()
echo "after pop <br>";
print_r($arr);

array_shift($arr);  //array_shift()
echo "after shift <br>";
print_r($arr);

array_unshift($arr,10);  //array_unshift()
echo "after unshift <br>";
print_r($arr);

$arr2=[5,6,7];
$arr3=array_merge($arr,$arr2);  //array_merge()
echo "after merge <br>";
print_r($arr3);

array_slice($arr,2,4);  //array_slice()
echo "after slice <br>";
print_r(array_slice($arr,2,4));

array_keys($fruits);  //array_keys()
echo "after keys <br>";
print_r(array_keys($fruits));







?>