<!DOCTYPE html>
<html>
<head>
    <title>Food Ordering System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>🍔 Food Delivery</h1>

<div class="menu">

    <div class="card">
        <h3>Burger</h3>
        <p>$5</p>
        <button onclick="addToCart('Burger',5)">Add</button>
    </div>

    <div class="card">
        <h3>Pizza</h3>
        <p>$8</p>
        <button onclick="addToCart('Pizza',8)">Add</button>
    </div>

    <div class="card">
        <h3>Pasta</h3>
        <p>$7</p>
        <button onclick="addToCart('Pasta',7)">Add</button>
    </div>

</div>

<a href="cart.php" class="cartBtn">🛒 View Cart</a>

<script src="js/script.js"></script>
</body>
</html>

