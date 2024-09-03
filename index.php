<?php
session_start();
include "./components/homepage/header.php";
include "./components/homepage/nav.php";?>
<div class="mainlook">
    <?php
    include "./components/homepage/sidebar.php";
    ?>
    <div class="itemplacelist">
        <?php
        include "./components/homepage/cardlist.php";
        include "./components/homepage/cardlist.php";
        ?>
    </div>
</div>
<?php
include "./components/homepage/bottom.php";
