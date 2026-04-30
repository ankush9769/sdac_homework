<?php

$conn = new mysqli("localhost","root","","user");
if($conn){
    echo "connection successfully";
}else{
    echo "failed connetion";
}

?>