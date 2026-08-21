<header class="entete">
  <div class="conteneur entete-rangee">
    <a class="marque" href="/">
      <img class="marque-logo" src="/assets/logo.svg" alt="Ateliers OLDY" width="99" height="56">
    </a>

    <nav class="nav" aria-label="Navigation principale">
      <?php foreach ($site['menu'] as $item): ?>
        <a href="<?= h($item['ancre']) ?>"><?= h($item['label']) ?></a>
      <?php endforeach; ?>
    </nav>

    <a class="bouton bouton-espace" href="<?= h($site['espace_url']) ?>">
      <?= h($site['espace_label']) ?>
    </a>
  </div>
</header>
