<div class="rating noneditable-rating ">
  <?php
  if($vote){
  echo '<p>('.$vote.')</p>';
  unset($vote); 
  }
  ?>
  <?php

   for($i=0;$i<5;$i++){
    if($i<$star){
        echo '<p class="checked"></p>';
    }
    else{
    echo'<p class="star"></p>';
    }
   }
  ?>


</div>