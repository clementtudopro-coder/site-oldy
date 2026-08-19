<section class="section section-contact" id="<?= h($bloc['id'] ?? '') ?>">
  <div class="conteneur conteneur-etroit centre">
    <h2 class="titre-section titre-clair"><?= h($bloc['titre'] ?? '') ?></h2>
    <p class="paragraphe paragraphe-clair"><?= h($bloc['texte'] ?? '') ?></p>
    <div class="actions">
      <a class="bouton bouton-clair" href="mailto:<?= h($site['email']) ?>"><?= h($site['email']) ?></a>
      <a class="bouton bouton-fantome-clair" href="tel:<?= h(str_replace(' ', '', $site['telephone'])) ?>"><?= h($site['telephone']) ?></a>
    </div>
  </div>
</section>
