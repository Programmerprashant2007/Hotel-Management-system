<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM bookings WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Booking</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Edit Booking</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Customer Name:
<input type="text" name="customer_name" value="<?php echo $row['customer_name']; ?>">

Room Type:
<input type="text" name="room_type" value="<?php echo $row['room_type']; ?>">

Check In:
<input type="date" name="check_in" value="<?php echo $row['check_in']; ?>">

Check Out:
<input type="date" name="check_out" value="<?php echo $row['check_out']; ?>">

Phone:
<input type="text" name="phone" value="<?php echo $row['phone']; ?>">

<input type="submit" value="Update Booking">

</form>

</div>

</body>
</html>