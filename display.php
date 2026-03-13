<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM bookings");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>All Bookings</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Room</th>
<th>Check In</th>
<th>Check Out</th>
<th>Phone</th>
<th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
echo "<tr>
<td>".$row['id']."</td>
<td>".$row['customer_name']."</td>
<td>".$row['room_type']."</td>
<td>".$row['check_in']."</td>
<td>".$row['check_out']."</td>
<td>".$row['phone']."</td>
<td>
<a href='edit.php?id=".$row['id']."'>Edit</a> |
<a href='delete.php?id=".$row['id']."'>Delete</a>
</td>
</tr>";
}
?>

</table>

<br>
<a href="index.php">Back</a>

</div>
</body>
</html>