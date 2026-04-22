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
        email
        <input type="text" name="email"><br>
        pass 
        <input type="password" name="pass"><br>
        cpass 
        <input type="password" name="cpass"><br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $cpass=$_POST["cpass"];

    if(empty($name)){
        echo "<script>alert('all feild are required')</script>";
    }
    if($pass != $cpass){
        echo "<script>alert('password not match')</script>";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('enter email in correct format')</script>";
    }


}
?>