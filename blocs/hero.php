<section class="section hero" id="haut">
  <?php if (!empty($bloc['photo'])): ?>
  <div class="conteneur hero-grille">
    <div>
      <p class="surtitre"><?= h($bloc['surtitre'] ?? '') ?></p>
      <h1 class="hero-titre"><?= h($bloc['titre'] ?? '') ?></h1>
      <p class="hero-texte"><?= h($bloc['texte'] ?? '') ?></p>
      <div class="actions actions-hero">
        <?php if (!empty($bloc['bouton_principal'])): ?>
          <a class="bouton" href="<?= h($bloc['bouton_principal']['lien']) ?>"><?= h($bloc['bouton_principal']['label']) ?></a>
        <?php endif; ?>
        <?php if (!empty($bloc['bouton_secondaire'])): ?>
          <a class="bouton bouton-fantome" href="<?= h($bloc['bouton_secondaire']['lien']) ?>"><?= h($bloc['bouton_secondaire']['label']) ?></a>
        <?php endif; ?>
      </div>
    </div>
    <div class="hero-photo-zone">
      <div class="polaroid">
        <img src="/assets/photos/<?= h($bloc['photo']) ?>" alt="<?= h($bloc['photo_alt'] ?? '') ?>" width="700" height="805">
        <?php if (!empty($bloc['photo_legende'])): ?><p class="polaroid-legende"><?= h($bloc['photo_legende']) ?></p><?php endif; ?>
      </div>
    </div>
  </div>
  <?php else: ?>
  <div class="conteneur hero-inner">
    <p class="surtitre"><?= h($bloc['surtitre'] ?? '') ?></p>
    <h1 class="hero-titre"><?= h($bloc['titre'] ?? '') ?></h1>
    <p class="hero-texte"><?= h($bloc['texte'] ?? '') ?></p>
    <div class="actions">
      <?php if (!empty($bloc['bouton_principal'])): ?>
        <a class="bouton" href="<?= h($bloc['bouton_principal']['lien']) ?>"><?= h($bloc['bouton_principal']['label']) ?></a>
      <?php endif; ?>
      <?php if (!empty($bloc['bouton_secondaire'])): ?>
        <a class="bouton bouton-fantome" href="<?= h($bloc['bouton_secondaire']['lien']) ?>"><?= h($bloc['bouton_secondaire']['label']) ?></a>
      <?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
</section>
