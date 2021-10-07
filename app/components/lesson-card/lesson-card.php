<?php
    $alias = $item['alias'];
    $link = "/lessons/$alias";
    $imageUrl = "/images/lessons/" . $item['image'];
    $heartIcon = $item['likedByUser'] ? icon('heart-filled') : icon('heart');
?>

<div class="lesson-card">
    <a href="<?=$link?>" class="lesson-card__box" style="background-image: url('<?=$imageUrl?>');">
        <div class="lesson-card__inner"></div>
        <div class="lesson-card__statistics">
            <div class="lesson-card__statistics-item">
                <div class="lesson-card__statistics-icon">
                    <?=$heartIcon?>
                </div>
                <div class="lesson-card__statistics-number">
                    <?=$item['likes']?>
                </div>
                
            </div>
            <div class="lesson-card__statistics-item">
                <div class="lesson-card__statistics-icon">
                    <?=icon('eye')?>
                </div>
                <div class="lesson-card__statistics-number">
                    <?=$item['views']?>
                </div>
            </div>
        </div>
    </a>
    <div class="lesson-card__footer">
        <a href="<?=$link?>"><?=$item['title']?></a>
    </div> 
</div>