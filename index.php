<?php
session_start();
include "./components/homepage/header.php";
include "./components/homepage/nav.php";?>
<div class="mainlook">
    <?php
    include "./components/homepage/sidebar.php";
    include "./components/homepage/form.php";
    ?>
    <div class="itemplacelist">
        <?php
        $star=5;
        include "./components/homepage/cardlist.php";
        $star=3;
        include "./components/homepage/cardlist.php";
        ?>
    </div>

</div>
<?php
include "./components/homepage/bottom.php";