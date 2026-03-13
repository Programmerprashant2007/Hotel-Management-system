<?php
include 'db.php';
$keyword = $_GET['keyword'];

$result = mysqli_query($conn,
"SELECT * FROM bookings WHERE customer_name LIKE '%$keyword%'");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Search Result</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Room</th>
<th>Check In</th>
<th>Check Out</th>
<th>Phone</th>
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
</tr>";
}
?>

</table>

<br>
<a href="index.php">Back</a>

</div>
</body>
</html>