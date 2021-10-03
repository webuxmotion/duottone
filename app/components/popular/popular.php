<div class="popular section">
  <div class="container">
    <div class="popular__header">
      <h2 class="popular__title">Популярные уроки</h2>
      <a class="popular__link" href="/lessons">Смотреть все уроки</a>
    </div>
    <div class="popular__list">
        <?php if ($items): ?>
          <?php foreach ($items as $item): ?>
            <div class="popular__list-item">
              <?=$this->component('lesson-card', [
                'item' => $item
              ])?>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
    </div>
  </div>
</div>