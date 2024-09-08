<div class="sidebar">
    <div class="section1">
        <h2 class="title">
            Price Range
        </h2>
        
        <div>
            <input type="number" placeholder="Min">
            <input type="number" placeholder="Max">
        </div>
        <h2 class="ratingRange">
            Rating:
        </h2>
        <div>
            <?php
            $star=5;
            include './components/homepage/noneditable-rating.php';
            $star=4;
            include './components/homepage/noneditable-rating.php';
            $star=3;
            include './components/homepage/noneditable-rating.php';
            $star=2;
            include './components/homepage/noneditable-rating.php';
            $star=1;
            include './components/homepage/noneditable-rating.php';
            $star=0;
            include './components/homepage/noneditable-rating.php';
            ?>
        </div>
    </div>
    <div class="section2">

    </div>
    <div class="section3">
        
    </div>
</div>