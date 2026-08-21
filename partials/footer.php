<footer class="pied">
  <div class="conteneur">
    <div class="pied-rangee">
      <div>
        <p class="pied-nom"><?= h($site['nom']) ?></p>
        <p class="pied-baseline">Ateliers créatifs et sensoriels pour seniors</p>
      </div>
      <div class="pied-liens">
        <a href="mailto:<?= h($site['email']) ?>"><?= h($site['email']) ?></a>
        <a href="tel:<?= h(str_replace(' ', '', $site['telephone'])) ?>"><?= h($site['telephone']) ?></a>
        <a href="<?= h($site['espace_url']) ?>"><?= h($site['espace_label']) ?></a>
      </div>
      <div class="pied-liens">
        <a href="/mentions-legales.php">Mentions légales</a>
        <a href="/confidentialite.php">Politique de confidentialité</a>
      </div>
    </div>
    <p class="pied-legal">© <?= date('Y') ?> <?= h($site['nom']) ?> — une activité de Maison Kara</p>
  </div>
</footer>
