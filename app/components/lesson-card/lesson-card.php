<?php
    $alias = $item['alias'];
    $link = "/lessons/$alias";
    $imageUrl = "/images/lessons/" . $item['image'];
?>

<div class="lesson-card">
    <a href="<?=$link?>" class="lesson-card__box" style="background-image: url('<?=$imageUrl?>');">
        <div class="lesson-card__inner"></div>
        <div class="lesson-card__statistics">
            <div class="lesson-card__statistics-item">
                <div class="lesson-card__statistics-icon <?=$item['likedByUser'] ? 'is-active' : ''?>">
                    <?=icon('heart')?>
                </div>
                <?=$item['likes']?>
            </div>
            <div class="lesson-card__statistics-item">
                <div class="lesson-card__statistics-icon">
                    <?=icon('eye')?>
                </div>
                <?=$item['views']?>
            </div>
        </div>
    </a>
    <div class="lesson-card__footer">
        <a href="<?=$link?>"><?=$item['title']?></a>
    </div> 
</div>