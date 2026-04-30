<?php
session_start();
include "db.php";
?>


<h1 style="text-align:center">Welcome <?php echo $_SESSION['name']; ?></h1>
<div style="text-align:center">
<a href="logout.php">Logout</a>
