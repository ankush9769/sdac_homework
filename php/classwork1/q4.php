<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        email
        <input type="email" name="email"><br>
        pass
        <input type="password" name="pass"><br>
        subscribe
        <input type="checkbox" name="checkbox" id="" value="yes"><br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="GET"){
    $email=$_GET["email"];
    $pass=$_GET["pass"];
    $subscribe = isset($_GET["checkbox"])?"subscribe":"unsubscribe";  

    echo "thank you for signing up , $email. you have $subscribe to the newsletter";
}
?>