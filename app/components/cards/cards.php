<div class="cards">
  <div class="cards__list">
    <?php if ($items): ?>
      <?php foreach ($items as $item): ?>
        <div class="cards__list-item">
          <?=$this->component('lesson-card', [
            'item' => $item
          ])?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>