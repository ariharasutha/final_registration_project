<?php

session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}
?>
<link rel="stylesheet" href="style.css">
<body>
<div class="container">
<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<a href="view.php">View Users</a>
<br><br>

<a href="logout.php"
onclick="return confirm('Do you want to logout?')">
Logout
</a>
</div>
</body>