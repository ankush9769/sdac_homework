<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        id
        <input type="number" name="id"><br>
        name
        <input type="text" name="name"><br>
        age
        <input type="number" name="age"><br>
        address
        <input type="text" name="address"><br>
         email
        <input type="text" name="email">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
  include "db.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $age=$_POST["age"];
    $address=$_POST["address"];
    $email=$_POST["email"];

    $sql = $conn->prepare("insert into user (id, name, age, address, email) values (?,?,?,?,?)");
    $sql->bind_param("isiss", $id, $name, $age, $address, $email);
    if($sql->execute()){
        echo "data inserted successfully";
    }else{
        echo "data insertion failed: ";
    }    

}

?>