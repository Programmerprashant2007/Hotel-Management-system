<?php
include 'db.php';

$name = $_POST['customer_name'];
$room = $_POST['room_type'];
$checkin = $_POST['check_in'];
$checkout = $_POST['check_out'];
$phone = $_POST['phone'];

$sql = "INSERT INTO bookings 
(customer_name, room_type, check_in, check_out, phone)
VALUES ('$name', '$room', '$checkin', '$checkout', '$phone')";

mysqli_query($conn, $sql);

header("Location: display.php");
?>