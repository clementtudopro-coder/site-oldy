<?php
/* Moteur de rendu du site OLDY.
   Ne contient aucun texte : tout vient de contenu.php.
   Pour ajouter un type de bloc, créez blocs/<type>.php puis référencez-le. */
declare(strict_types=1);

$contenu = require __DIR__ . '/contenu.php';
$site    = $contenu['site'];
$blocs   = $contenu['blocs'];

/** Échappement HTML systématique de toute valeur affichée. */
function h($v): string { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); }

/** Un bloc est affiché sauf si 'actif' vaut explicitement false. */
function bloc_actif(array $b): bool { return ($b['actif'] ?? true) !== false; }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= h($site['titre']) ?></title>
<meta name="description" content="<?= h($site['description']) ?>">
<meta property="og:title" content="<?= h($site['titre']) ?>">
<meta property="og:description" content="<?= h($site['description']) ?>">
<meta property="og:type" content="website">
<link rel="icon" href="/assets/logo.svg" type="image/svg+xml">
<link rel="stylesheet" href="/assets/polices.css">
<link rel="canonical" href="https://ateliersoldy.fr/">
<link rel="stylesheet" href="/assets/style.css">
<?php include __DIR__ . '/partials/seo.php'; ?>
</head>
<body>

<?php include __DIR__ . '/partials/header.php'; ?>

<main>
<?php
foreach ($blocs as $bloc) {
    if (!bloc_actif($bloc)) { continue; }
    $gabarit = __DIR__ . '/blocs/' . basename((string) ($bloc['type'] ?? '')) . '.php';
    if (is_file($gabarit)) { include $gabarit; }
}
?>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
<?php include __DIR__ . '/partials/barre-cta.php'; ?>

</body>
</html>
