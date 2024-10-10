<div class="card" style='background-image: url("./image/<?php echo $imageName; ?>");   background-size: 100%;   background-repeat: no-repeat;'>
<div class="top">
        <?php
                include './components/homepage/noneditable-rating.php';
                ?>
        <div class="soldInfo"><p><?php echo $soldQuan; ?> sold</p></div>
</div>

<div class="infocard">
        <div class="productName"><p><?php echo $productName; ?></p> </div>
        <div class="restInfo">
        <div class="productPrice"><p><?php echo $price; ?></p></div>
        <div class="addToCart" data-product-id="<?php echo $productId; ?>" data-price="<?php echo $price; ?>">
    <img src="./image/icons/cart-plus.svg" alt="Add to Cart" />
</div>

        </div>
        <div class="productVariant"><p><?php echo $varients; ?> varients</p></div>

        
        
    </div>
</div>