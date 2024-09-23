<?php
include "./components/homepage/minicard.php";
?>
<div class="carousel-container">
    <?php
// Database configuration
$host = 'localhost'; // or your database host
$dbname = 'corex'; // your database name
$username = 'root'; // your database username
$password = ''; // your database password

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
$query = "SELECT id, name FROM carousel";
$stmt = $pdo->prepare($query);
$stmt->execute();
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

        <div class="carousel">
            <!-- Dynamically generated carousel items -->
            <?php foreach ($images as $index => $image): ?>
                <div class="carousel-item">
                    <img src="./image/carousels/<?php echo htmlspecialchars($image['name']); ?>.jpg" alt="Image <?php echo $index + 1; ?>">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Carousel navigation controls -->
        <button class="carousel-control prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="carousel-control next" onclick="moveSlide(1)">&#10095;</button>

        <!-- Radio buttons for each slide -->
        <div class="carousel-indicators">
            <?php foreach ($images as $index => $image): ?>
                <input type="radio" name="carousel" id="radio<?php echo $index + 1; ?>" onclick="jumpToSlide(<?php echo $index; ?>)" <?php echo $index === 0 ? 'checked' : ''; ?>>
            <?php endforeach; ?>
        </div>
    </div>

