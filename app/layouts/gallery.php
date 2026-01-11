<h1>Shooting Mood</h1>

<h2>Gallery</h2>
<!-- category menu -->
<div class="category-menu">
  <button class="category-btn active" data-category="all">All</button>
  <button class="category-btn" data-category="day">Daylife</button>
  <button class="category-btn" data-category="night">Nightlife</button>
  <button class="category-btn" data-category="home">Home</button>
</div>

<!-- gallery -->
<div class="image-container">
  <!-- bucle en vez de escribir todos los <img> -->
  <?php foreach ($images as $img): ?>
    <img src="<?= htmlspecialchars($img->file) ?>"
      alt="<?= htmlspecialchars($img->alt) ?>"
      class="gallery-item <?= htmlspecialchars($img->category) ?>">
  <?php endforeach; ?>

</div>

<script src="web/js/gallery.js"></script>