<section class="section<?= empty($bloc['fond_alt']) ? '' : ' section-alt' ?>" id="<?= h($bloc['id'] ?? '') ?>">
  <div class="conteneur">
    <?php if (!empty($bloc['surtitre'])): ?><p class="surtitre centre"><?= h($bloc['surtitre']) ?></p><?php endif; ?>
    <h2 class="titre-section centre"><?= h($bloc['titre'] ?? '') ?></h2>
    <?php if (!empty($bloc['intro'])): ?><p class="intro centre"><?= h($bloc['intro']) ?></p><?php endif; ?>
    <div class="galerie-grille">
      <?php foreach ($bloc['photos'] ?? [] as $photo): ?>
        <figure class="galerie-photo">
          <img src="/assets/photos/<?= h($photo['fichier'] ?? '') ?>" alt="<?= h($photo['alt'] ?? '') ?>" loading="lazy" width="787" height="1400">
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
