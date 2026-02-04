<?php
include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$items = $_POST['items'];
$total = $_POST['total'];

$sql = "INSERT INTO orders (customer_name, phone, address, items, total)
        VALUES ('$name','$phone','$address','$items','$total')";

$conn->query($sql);

echo "<h2>✅ Order Placed Successfully!</h2>";
echo "<a href='index.php'>Back to Menu</a>";
?>
