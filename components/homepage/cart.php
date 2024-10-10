
<?php
session_start();
include './backend/database/connection.php';

// Fetch the cart items from the database
$userId = $_SESSION['user'];
$sql = "SELECT p.image, c.quantity, c.per_price, (c.quantity * c.per_price) as total_price 
        FROM cart c 
        JOIN products p ON c.product_id = p.product_id 
        WHERE c.user_id = :user_id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':user_id' => $userId]);
$cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div id="cart" class="cart">
    <button id="closeCart" class="close-btn">X</button>
    <h2>Your Cart</h2>
    <ul>
        <?php foreach ($cartItems as $item): ?>
            <li class="cart-item">
                <img src="./image/<?php echo $item['image']; ?>" alt="Product Image">
                <div>
                    <p>Quantity: <?php echo $item['quantity']; ?></p>
                    <p>Price: $<?php echo number_format($item['per_price'], 2); ?></p>
                    <p>Total: $<?php echo number_format($item['total_price'], 2); ?></p>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div> 