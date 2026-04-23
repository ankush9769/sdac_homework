<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
     name
    <input type="text" name="name"><br>
    salary
    <input type="number" name="salary"><br>
    <button type="submit">submit</button>
    </form>
    
</body>
</html>

<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $salary=$_POST["salary"];

    $sql = $conn->prepare("update emp set salary = ? where name= ?");
    $sql->bind_param('ds',$salary,$name);
    if($sql->execute()){
        echo "data updated successfully";
    }else{
        echo "data not updateeed";
    }
}


?>