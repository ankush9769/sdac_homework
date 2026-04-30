<?php
session_start();
include "db.php";

if (!isset($_SESSION['name'])) {
    header("Location: project_login.php");

}

$result = $conn->query("select * from projects");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align:center">Welcome <?php echo $_SESSION['name']; ?></h1>
    <div style="text-align:center">
        <a href="logout.php">Logout</a>


        <h1 style="text-align:center">Project Details</h1>

        <table border="1"
            style="background: linear-gradient(rgb(221, 238, 108),rgb(225, 151, 47),rgb(67, 199, 235),rgb(235, 78, 67)); text-align: center; margin: auto; border-collapse: collapse;">

            <tr>
                <td style="padding:15px;">ID</td>
                <td style="padding:15px;">Project Name</td>
                <td style="padding:15px;">Project Description</td>
                <td style="padding:15px;">Status</td>
                <td style="padding:15px;">Start Date</td>
                <td style="padding:15px;">End Date</td>
            </tr>

            <?php while ($row = $result->fetch_assoc()) { ?>

                <tr>
                    <td style="padding:15px;"><?php echo $row['id'] ?></td>
                    <td style="padding:15px;"><?php echo $row['project_name'] ?></td>
                    <td style="padding:15px;"><?php echo $row['project_description'] ?></td>
                    <td style="padding:15px;"><?php echo $row['status'] ?></td>
                    <td style="padding:15px;"><?php echo $row['start_date'] ?></td>
                    <td style="padding:15px;"><?php echo $row['end_date'] ?></td>
                </tr>

            <?php } ?>

        </table>

</body>

</html>