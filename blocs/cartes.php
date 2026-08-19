<section class="section section-alt" id="<?= h($bloc['id'] ?? '') ?>">
  <div class="conteneur">
    <?php if (!empty($bloc['titre'])): ?><h2 class="titre-section centre"><?= h($bloc['titre']) ?></h2><?php endif; ?>
    <div class="grille">
      <?php foreach ($bloc['cartes'] ?? [] as $carte): ?>
        <article class="carte">
          <h3 class="carte-titre"><?= h($carte['titre'] ?? '') ?></h3>
          <p class="carte-texte"><?= h($carte['texte'] ?? '') ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
