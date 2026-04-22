<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        username
        <input type="text" name="username"><br>
        pass
        <input type="password" name="pass"><br>
        Terms and condition
        <input type="checkbox" name="checkbox" id="" value="yes"><br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="GET"){
    $username=$_GET["username"];
    $pass=$_GET["pass"];
    $condition = isset($_GET["checkbox"])?"agreed":"not agreed";  

    echo "welcome $username. you have $subscribe to the terms and condition";
}
?>