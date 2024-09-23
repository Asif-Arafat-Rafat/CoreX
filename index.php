<?php
session_start();
include "./components/homepage/header.php";
include "./components/homepage/nav.php";?>
<div class="mainlook">
        <?php
        include "./components/homepage/carousels.php";
        include "./components/homepage/form.php";
        ?>
</div>
<div class="sec2">
    <?php
        include "./components/homepage/categories.php";
        ?>
</div>
<?php
    include "./components/homepage/footer.php"
?>
<?php
include "./components/homepage/bottom.php";