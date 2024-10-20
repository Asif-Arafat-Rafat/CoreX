<?php
session_start();
include '../database/connection.php';
$stmt= $pdo->prepare("SELECT p.image, c.quantity, c.per_price, (c.quantity * c.per_price) as total_price 
        FROM cart c 
        JOIN products p ON c.product_id = p.product_id 
        WHERE c.user_id = ?");
$stmt->execute([$_SESSION['user']]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(count($result) > 0) {
    foreach ($result as $row) {
        echo "<li class='cart-item'>
                <img src='./image/".$row['image']."' alt='Product Image'>
                <div>
                    <p>Quantity: {$row['quantity']} </p>
                    <p>Price: $".number_format($row['per_price'], 2)."</p>
                    <p>Total: $".number_format($row['total_price'], 2)."</p>
                </div>
            </li>";

    }
}
else{
    echo'No item found';
}
