<?php

include "./components/homepage/header.php";
include "./components/homepage/nav.php";
include './components/homepage/form.php';
    include './components/homepage/cart.php';

include './backend/database/connection.php';
$searchTerm = $_GET['search'];
$category = $_GET['category'];

if ($searchTerm) {
    // Prepare the SQL query for search
    $sql = "SELECT * FROM products WHERE name LIKE :searchTerm OR description LIKE :searchTerm";
    $stmt = $pdo->prepare($sql);
    $searchTermLike = "%" . $searchTerm . "%";
    $stmt->bindValue(':searchTerm', $searchTermLike, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// Handle search by category
elseif ($category) {
    $sql = "SELECT * FROM products WHERE category = :category";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':category', $category, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "Something went wrong";
}

?>

<div class="mainlook">
    <?php
    include './components/homepage/sidebar.php';
    
    echo '<div class="cardview">';
    if (count($result) > 0) {
        foreach ($result as $row) {
            $productId=$row['product_id'];
            $productName = $row['name'];
            $star = $row['score'];
            $imageName = $row['image'];
            $price = $row['price'];
            $varients = $row['varient'];
            $soldQuan = $row['sold'];
            include './components/homepage/card.php';
        }
    } else {
        echo '<h1>No Product Found</h1>';
    }
    echo '</div>';
    ?>
</div>

<?php
include './components/homepage/footer.php';
include './components/homepage/bottom.php';
?>
