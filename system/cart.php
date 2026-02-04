<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Your Cart</h2>

<table id="cartTable"></table>

<h3 id="total"></h3>

<form action="place_order.php" method="POST" onsubmit="return prepareOrder()">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <textarea name="address" placeholder="Address" required></textarea>

    <input type="hidden" name="items" id="itemsInput">
    <input type="hidden" name="total" id="totalInput">

    <button type="submit">Place Order</button>
</form>

<script src="js/script.js"></script>
<script>loadCart()</script>

</body>
</html>

