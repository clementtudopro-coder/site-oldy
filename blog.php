<?php
/* Moteur du blog OLDY : liste des articles et affichage d'un article.
   Ne contient aucun texte : tout vient de blog-contenu.php.
   Accès : /blog/ (liste) et /blog/<slug>/ (un article), réécrits par
   .htaccess vers blog.php et blog.php?a=<slug>. */
declare(strict_types=1);

$contenu  = require __DIR__ . '/contenu.php';
$site     = $contenu['site'];
$blogData = require __DIR__ . '/blog-contenu.php';

/** Échappement HTML systématique de toute valeur affichée. */
function h($v): string { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); }

/** Un article est visible sauf si 'actif' vaut explicitement false. */
function article_actif(array $a): bool { return ($a['actif'] ?? true) !== false; }

$articles = array_filter($blogData['articles'], 'article_actif');

$slugDemande = $_GET['a'] ?? null;
$slug = null;
if (is_string($slugDemande) && preg_match('/^[a-z0-9-]+$/', $slugDemande) && isset($articles[$slugDemande])) {
    $slug = $slugDemande;
}
$article = $slug ? $articles[$slug] : null;
if ($slugDemande !== null && $article === null) {
    http_response_code(404);
}

$urlBase         = 'https://ateliersoldy.fr/blog/';
$titrePage       = $article ? $article['titre'] . ' — ' . $site['nom'] : 'Blog — ' . $site['nom'];
$descriptionPage = $article ? $article['accroche'] : 'Idées d’ateliers, conseils d’animation et actualités OLDY pour les responsables animation en résidence senior, résidence autonomie et EHPAD.';
$urlCanonique    = $article ? $urlBase . $slug . '/' : $urlBase;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= h($titrePage) ?></title>
<meta name="description" content="<?= h($descriptionPage) ?>">
<meta property="og:title" content="<?= h($titrePage) ?>">
<meta property="og:description" content="<?= h($descriptionPage) ?>">
<meta property="og:type" content="<?= $article ? 'article' : 'website' ?>">
<?php if ($article): ?><meta property="og:image" content="https://ateliersoldy.fr/assets/photos/<?= h($article['image']) ?>"><?php endif; ?>
<link rel="canonical" href="<?= h($urlCanonique) ?>">
<link rel="icon" href="assets/logo.svg" type="image/svg+xml">
<link rel="stylesheet" href="assets/polices.css">
<link rel="stylesheet" href="assets/style.css">
<?php if ($article): ?>
<script type="application/ld+json">
<?= json_encode([
    '@context'      => 'https://schema.org',
    '@type'         => 'Article',
    'headline'      => $article['titre'],
    'description'   => $article['accroche'],
    'datePublished' => $article['date'],
    'author'        => ['@type' => 'Organization', 'name' => $site['nom']],
    'image'         => 'https://ateliersoldy.fr/assets/photos/' . $article['image'],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
<?php endif; ?>
</head>
<body>

<?php include __DIR__ . '/partials/header.php'; ?>

<main>
<?php if ($slugDemande !== null && $article === null): ?>

  <section class="section">
    <div class="conteneur conteneur-etroit centre">
      <h1 class="titre-section">Article introuvable</h1>
      <p class="paragraphe">Cet article n’existe pas ou plus.</p>
      <a class="bouton" href="/blog/">Retour au blog</a>
    </div>
  </section>

<?php elseif ($article): ?>

  <section class="section">
    <div class="conteneur conteneur-etroit">
      <p class="surtitre"><a href="/blog/">← Le blog OLDY</a></p>
      <h1 class="titre-section"><?= h($article['titre']) ?></h1>
      <p class="legale-maj"><?= h(date('d/m/Y', strtotime($article['date']))) ?> · <?= h($article['temps_lecture'] ?? '') ?> de lecture</p>

      <?php if (!empty($article['image'])): ?>
        <p class="article-image">
          <img src="assets/photos/<?= h($article['image']) ?>" alt="<?= h($article['image_alt'] ?? '') ?>" loading="lazy">
        </p>
      <?php endif; ?>

      <?php foreach ($article['sections'] ?? [] as $s):
        $type = $s['type'] ?? '';
        switch ($type):
          case 'intro': ?>
            <p class="intro-article"><?= h($s['texte'] ?? '') ?></p>
          <?php break;
          case 'titre2': ?>
            <h2 class="legale-titre"><?= h($s['texte'] ?? '') ?></h2>
          <?php break;
          case 'titre3': ?>
            <h3 class="article-titre3"><?= h($s['texte'] ?? '') ?></h3>
          <?php break;
          case 'paragraphe': ?>
            <p class="paragraphe"><?= h($s['texte'] ?? '') ?></p>
          <?php break;
          case 'liste': ?>
            <ul class="liste-article">
              <?php foreach ($s['items'] ?? [] as $item): ?>
                <li class="liste-article-item">
                  <p class="liste-article-titre"><?= h($item['titre'] ?? '') ?></p>
                  <p class="liste-article-texte"><?= h($item['texte'] ?? '') ?></p>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php break;
          case 'encadre': ?>
            <div class="encadre">
              <?php if (!empty($s['titre'])): ?><p class="encadre-titre"><?= h($s['titre']) ?></p><?php endif; ?>
              <p class="encadre-texte"><?= h($s['texte'] ?? '') ?></p>
              <?php if (!empty($s['lien']['url'])): ?>
                <a class="bouton" href="<?= h($s['lien']['url']) ?>"><?= h($s['lien']['label'] ?? '') ?></a>
              <?php endif; ?>
            </div>
          <?php break;
        endswitch;
      endforeach; ?>

      <?php if (!empty($article['mots_cles'])): ?>
        <p class="article-mots-cles">
          <?php foreach ($article['mots_cles'] as $mc): ?><span class="mot-cle"><?= h($mc) ?></span><?php endforeach; ?>
        </p>
      <?php endif; ?>
    </div>
  </section>

<?php else: ?>

  <section class="section">
    <div class="conteneur conteneur-etroit centre">
      <p class="surtitre">Le blog OLDY</p>
      <h1 class="titre-section">Idées d’ateliers et conseils d’animation</h1>
      <p class="intro">Des idées concrètes pour animer votre résidence senior, résidence autonomie ou EHPAD, saison après saison.</p>
    </div>
    <div class="conteneur">
      <?php if (!$articles): ?>
        <p class="paragraphe centre">Le premier article arrive bientôt.</p>
      <?php else: ?>
        <div class="grille blog-grille">
          <?php foreach ($articles as $s => $a): ?>
            <article class="carte blog-carte">
              <?php if (!empty($a['image'])): ?>
                <a class="blog-carte-image" href="/blog/<?= h($s) ?>/">
                  <img src="assets/photos/<?= h($a['image']) ?>" alt="<?= h($a['image_alt'] ?? '') ?>" loading="lazy">
                </a>
              <?php endif; ?>
              <p class="offre-gamme"><?= h(date('d/m/Y', strtotime($a['date']))) ?></p>
              <h2 class="carte-titre"><a href="/blog/<?= h($s) ?>/"><?= h($a['titre']) ?></a></h2>
              <p class="carte-texte"><?= h($a['accroche']) ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

<?php endif; ?>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

</body>
</html>
