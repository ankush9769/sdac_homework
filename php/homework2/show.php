<?php
include 'db.php';
$result = $conn->query("select * from emp");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>name</th>
            <th>job title</th>
            <th>salary</th>
        </tr>
        <?php while($row=$result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["job_title"]?></td>
            <td><?php echo $row["salary"]?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>