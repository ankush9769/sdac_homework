<?php

include 'db.php';
if($_GET["id"]){
    $id = $_GET["id"];
    $sql = $conn->prepare("delete from products where id = ?");
    $sql->bind_param("i",$id);
    if($sql->execute()){
        header("location:home.php");
    }else{
        echo "deleteion failed";
    }
}

?>