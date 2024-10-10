<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../database/connection.php';
// Set the response header to JSON
header('Content-Type: application/json');

// Get the JSON data from the AJAX request
$data = json_decode(file_get_contents('php://input'), true);

// Check if required data is present
if (isset($data['productId']) && isset($data['productPrice'])) {
    $productId = $data['productId'];
    $productPrice = $data['productPrice'];
    $quantity = 1; // Default quantity
    $perPrice = floatval($productPrice);
    $totalPrice = $perPrice * $quantity;

    // Check if user is logged in
    if (!isset($_SESSION['user'])) {
        echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
        exit;
    }

    $userId = $_SESSION['user'];

    // Check if the product already exists in the user's cart
    $sql = "SELECT * FROM cart WHERE user_id = :user_id AND product_id = :product_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':user_id' => $userId,
        ':product_id' => $productId
    ]);

    $existingProduct = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existingProduct) {
        // Product exists, update the quantity and total price
        $newQuantity = $existingProduct['quantity'] + $quantity;
        $newTotalPrice = $perPrice * $newQuantity;

        $updateSql = "UPDATE cart SET quantity = :quantity, total_price = :total_price 
                      WHERE user_id = :user_id AND product_id = :product_id";
        $updateStmt = $pdo->prepare($updateSql);
        if ($updateStmt->execute([
            ':quantity' => $newQuantity,
            ':total_price' => $newTotalPrice,
            ':user_id' => $userId,
            ':product_id' => $productId
        ])) {
            echo json_encode(['status' => 'success', 'message' => 'Product quantity updated in cart']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update product quantity']);
        }
    } else {
        // Product does not exist, insert a new row into the cart
        $insertSql = "INSERT INTO cart (user_id, product_id, quantity, per_price, total_price) 
                      VALUES (:user_id, :product_id, :quantity, :per_price, :total_price)";
        $insertStmt = $pdo->prepare($insertSql);
        if ($insertStmt->execute([
            ':user_id' => $userId,
            ':product_id' => $productId,
            ':quantity' => $quantity,
            ':per_price' => $perPrice,
            ':total_price' => $totalPrice
        ])) {
            echo json_encode(['status' => 'success', 'message' => 'Product added to cart']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to add product to cart']);
        }
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input']);
}
