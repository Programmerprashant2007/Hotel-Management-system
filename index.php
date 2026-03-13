<!DOCTYPE html>
<html>
<head>
    <title>Hotel Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Hotel Booking Form</h2>

<form action="insert.php" method="POST">

Customer Name:
<input type="text" name="customer_name" required>

Room Type:
<select name="room_type">
    <option>Single</option>
    <option>Double</option>
    <option>Deluxe</option>
</select>

Check In:
<input type="date" name="check_in" required>

Check Out:
<input type="date" name="check_out" required>

Phone:
<input type="text" name="phone" required>

<input type="submit" value="Book Room">

</form>

<br>

<form action="search.php" method="GET">
Search by Name:
<input type="text" name="keyword">
<input type="submit" value="Search">
</form>

<br>
<a href="display.php">View All Bookings</a>

</div>
</body>
</html>