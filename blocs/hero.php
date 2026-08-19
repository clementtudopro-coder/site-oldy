<section class="section hero" id="haut">
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
</section>
