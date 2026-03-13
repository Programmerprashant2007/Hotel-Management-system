<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Hotel Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Hotel Management Dashboard</h2>

<p>Welcome, <?php echo $_SESSION['user']; ?></p>

<a href="index.php">Make Booking</a><br><br>
<a href="display.php">View Bookings</a><br><br>
<a href="logout.php">Logout</a>

</div>

</body>
</html>