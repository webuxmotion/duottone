<?php
  $heartIcon = $likedByUser ? icon('heart-filled') : icon('heart');
?>

<div class="statistics">
  <div class="statistics__item">
    <a href="/likes/toggle-like?lessonId=<?=$lessonId?>" class="statistics__button">
      <div class="statistics__icon">
        <?=$heartIcon?>
      </div>
    </a>
    <p class="statistics__text"><?=$likes?></p>
  </div>
  <div class="statistics__item">
    <div class="statistics__icon">
      <?=icon('eye')?>
    </div>
    <p class="statistics__text"><?=$views?></p>
  </div>
</div>