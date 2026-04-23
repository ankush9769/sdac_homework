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
    job title 
    <input type="text" name="jobtitle"><br>
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
    $jobtitle=$_POST["jobtitle"];
    $salary=$_POST["salary"];

    $sql = $conn->prepare("insert into emp values(?,?,?)");
    $sql->bind_param('ssd',$name,$jobtitle,$salary);
    if($sql->execute()){
        echo "data inserted successfully";
    }else{
        echo "data not inserted";
    }
}


?>