<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdac_php";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn){
    echo "Connected successfully";
}else{
    echo "Connection failed: ";
}
?>