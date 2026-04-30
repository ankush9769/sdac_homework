<?php

$server_name="localhost";
$username="root";
$password="";
$db_name="sdac";

$conn= new mysqli($server_name,$username,$password,$db_name);

if (!$conn){
    echo "database not connected...";
}





?>