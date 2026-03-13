<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['customer_name'];
$room = $_POST['room_type'];
$checkin = $_POST['check_in'];
$checkout = $_POST['check_out'];
$phone = $_POST['phone'];

$sql = "UPDATE bookings SET
customer_name='$name',
room_type='$room',
check_in='$checkin',
check_out='$checkout',
phone='$phone'
WHERE id=$id";

mysqli_query($conn, $sql);

header("Location: display.php");
?>