<?php
$cars = ["bwm","audi","mercedes","toyota","honda"];
for($i=0;$i<count($cars);$i++){
    echo "car = $cars[$i] <br>";
}

$car = ["bmw"=>"x5", "audi"=>"a4", "mercedes"=>"c200", "toyota"=>"camry", "honda"=>"civic"];
foreach($car as $key=>$value){
    echo "brand name = $key and model = $value<br>";
}
array_push($cars,"maruti");  //array_push()
echo "after push <br>";
print_r($cars);

array_pop($cars);  //array_pop()
echo "after pop <br>";
print_r($cars);

array_shift($cars);  //array_shift()
echo "after shift <br>";
print_r($cars);

array_unshift($cars,"maruti");  //array_unshift()
echo "after unshift <br>";
print_r($cars);

$cars2=["ford","porche"];
$cars3=array_merge($cars,$cars2);  //array_merge()
echo "after merge <br>";
print_r($cars3);

array_slice($cars,2,4);  //array_slice()
echo "after slice <br>";
print_r(array_slice($cars,2,4));

array_keys($car);  //array_keys()
echo "after keys <br>";
print_r(array_keys($car));
?>