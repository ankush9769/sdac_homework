<?php
session_start();


?>

<h1>Welcome <?php echo $_SESSION["name"]; ?></h1>

<h3>Active Task</h3>
<p>Task ID: <?php echo $_SESSION["task_id"]; ?></p>

<h3>Today's Tasks</h3>
<ul>
    <li>Update project dashboard</li>
    <li>Fix reported bugs</li>
    <li>Test new features</li>
    <li>Prepare daily report</li>
    <li>Plan tasks for tomorrow</li>
</ul>

<a href="logout.php">Logout</a>