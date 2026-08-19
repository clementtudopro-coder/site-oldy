<section class="section" id="<?= h($bloc['id'] ?? '') ?>">
  <div class="conteneur conteneur-etroit centre">
    <?php if (!empty($bloc['surtitre'])): ?><p class="surtitre"><?= h($bloc['surtitre']) ?></p><?php endif; ?>
    <h2 class="titre-section"><?= h($bloc['titre'] ?? '') ?></h2>
    <?php foreach ($bloc['paragraphes'] ?? [] as $p): ?>
      <p class="paragraphe"><?= h($p) ?></p>
    <?php endforeach; ?>
  </div>
</section>
