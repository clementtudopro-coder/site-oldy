<?php
/* Gabarit commun aux pages légales. Appelé par mentions-legales.php et
   confidentialite.php, qui définissent $cle avant de l'inclure. */
declare(strict_types=1);

$contenu = require __DIR__ . '/contenu.php';
$site    = $contenu['site'];
$legal   = require __DIR__ . '/contenu-legal.php';
$page    = $legal[$cle] ?? null;
if (!$page) { http_response_code(404); exit; }

function h($v): string { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); }
$url = 'https://ateliersoldy.fr/' . basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= h($page['titre']) ?> — <?= h($site['nom']) ?></title>
<meta name="description" content="<?= h($page['titre']) ?> du site <?= h($site['nom']) ?>.">
<link rel="canonical" href="<?= h($url) ?>">
<link rel="icon" href="assets/logo.svg" type="image/svg+xml">
<link rel="stylesheet" href="assets/polices.css">
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<?php include __DIR__ . '/partials/header.php'; ?>
<main>
  <section class="section section-legale">
    <div class="conteneur conteneur-etroit">
      <h1 class="titre-section"><?= h($page['titre']) ?></h1>
      <p class="legale-maj">Dernière mise à jour : <?= h($page['maj']) ?></p>
      <?php foreach ($page['sections'] as $s): ?>
        <h2 class="legale-titre"><?= h($s['titre']) ?></h2>
        <?php foreach ($s['paragraphes'] as $p): ?>
          <p class="paragraphe"><?= h($p) ?></p>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
