<?php

$conn = new mysqli("localhost","root","","employee_sdac");
if($conn){
    echo "connection successfully";
}else{
    echo "failed connetion";
}

?>