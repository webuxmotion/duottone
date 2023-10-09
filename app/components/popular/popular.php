<div class="popular section">
  <div class="container">
    <div class="popular__header">
      <h2 class="popular__title">Популярні уроки</h2>
      <a class="popular__link" href="/lessons">Дивитися всі уроки</a>
    </div>
    <?=$this->component('cards', [
      'items' => $items
    ])?>
  </div>
</div>