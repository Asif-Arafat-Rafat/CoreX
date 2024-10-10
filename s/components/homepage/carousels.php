<div class="top_section">
    <?php
    include "./components/homepage/minicard.php";
    ?>
    <div class="carousel-container">
        <?php
        // Database configuration
        include './backend/database/connection.php';
    
        // Update query to fetch front_image, left_image, right_image, title, sub_title, and extra_info
        $query = "SELECT front_image, left_image, right_image, title, sub_title, extra_info FROM carousel";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $cards = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
    
        <div class="carousel">
            <!-- Dynamically generated carousel items -->
            <?php foreach ($cards as $index => $card): ?>
                <div class="carousel-item">
                    <!-- Carousel card content -->
                    <div class="carousel-card">
                        <div class="card-content">
                            <!-- Title and subtitles from database -->
                            <h1><?php echo htmlspecialchars($card['title']); ?></h1>
                            <p><?php echo htmlspecialchars($card['sub_title']); ?></p>
                            <p class="motivating-slogan"><?php echo htmlspecialchars($card['extra_info']); ?></p>
                        </div>
    
                        <!-- Image containers -->
                        <div class="card-images">
                            <div class="card-image front">
                                <img src="./image/carousels/<?php echo htmlspecialchars($card['front_image']); ?>" alt="Front View">
                            </div>
                            <div class="card-image left">
                                <img src="./image/carousels/<?php echo htmlspecialchars($card['left_image']); ?>" alt="Left View">
                            </div>
                            <div class="card-image right">
                                <img src="./image/carousels/<?php echo htmlspecialchars($card['right_image']); ?>" alt="Right View">
                            </div>
                        </div>
    
                        <!-- Action button -->
                        <button class="cool-button">Buy Now</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    
        <!-- Carousel navigation controls -->
        <button class="carousel-control prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="carousel-control next" onclick="moveSlide(1)">&#10095;</button>
    
        <!-- Radio buttons for each slide -->
        <div class="carousel-indicators">
            <?php foreach ($cards as $index => $card): ?>
                <input type="radio" name="carousel" id="radio<?php echo $index + 1; ?>" onclick="jumpToSlide(<?php echo $index; ?>)" <?php echo $index === 0 ? 'checked' : ''; ?>>
            <?php endforeach; ?>
        </div>
    </div>
</div>
