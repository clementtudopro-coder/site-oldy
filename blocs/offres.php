<?php
/** Icône décorative par thème, choisie par mot-clé (retourne du SVG brut). */
if (!function_exists('offre_icone_theme')) {
function offre_icone_theme(string $theme): string
{
    $t = mb_strtolower($theme);
    $chemins = [
        'olfact' => '<path d="M12 2c-2 3-5 6-5 10a5 5 0 0 0 10 0c0-4-3-7-5-10z"/>',
        'parfum' => '<path d="M12 2c-2 3-5 6-5 10a5 5 0 0 0 10 0c0-4-3-7-5-10z"/>',
        'végét'  => '<path d="M12 22V12"/><path d="M12 12C7 12 4 9 4 4c5 0 8 3 8 8z"/><path d="M12 12c5 0 8-3 8-8-5 0-8 3-8 8z"/>',
        'jardin' => '<path d="M12 22V12"/><path d="M12 12C7 12 4 9 4 4c5 0 8 3 8 8z"/><path d="M12 12c5 0 8-3 8-8-5 0-8 3-8 8z"/>',
        'créatif'=> '<path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/>',
        'manuel' => '<path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/>',
    ];
    foreach ($chemins as $mot => $chemin) {
        if (str_contains($t, $mot)) {
            return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $chemin . '</svg>';
        }
    }
    return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2l2.4 7.2H22l-6 4.6 2.3 7.2-6.3-4.6-6.3 4.6 2.3-7.2-6-4.6h7.6z"/></svg>';
}
}

$themes = [];
foreach ($bloc['offres'] ?? [] as $offre) {
    if (!empty($offre['theme'])) {
        $themes[$offre['theme']] = true;
    }
}
$themes = array_keys($themes);
?>
<section class="section section-alt" id="<?= h($bloc['id'] ?? '') ?>">
  <div class="conteneur">
    <h2 class="titre-section centre"><?= h($bloc['titre'] ?? '') ?></h2>
    <?php if (!empty($bloc['intro'])): ?><p class="intro centre"><?= h($bloc['intro']) ?></p><?php endif; ?>

    <?php if ($themes): ?>
      <div class="filtres-offres" data-offres-filtres>
        <button type="button" class="filtre-offre filtre-offre-actif" data-filtre="tous">Tous les ateliers</button>
        <?php foreach ($themes as $theme): ?>
          <button type="button" class="filtre-offre" data-filtre="<?= h($theme) ?>"><?= offre_icone_theme($theme) ?><?= h($theme) ?></button>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="grille grille-offres" data-offres-grille>
      <?php foreach ($bloc['offres'] ?? [] as $offre): ?>
        <article class="carte carte-offre" data-offre-theme="<?= h($offre['theme'] ?? '') ?>" tabindex="0" role="button" aria-expanded="false">
          <div class="carte-offre-tete">
            <?php if (!empty($offre['theme'])): ?>
              <span class="carte-offre-icone"><?= offre_icone_theme($offre['theme']) ?></span>
            <?php endif; ?>
            <svg class="carte-offre-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
          </div>
          <?php if (!empty($offre['gamme'])): ?>
            <p class="offre-gamme"><?= h($offre['gamme']) ?></p>
          <?php endif; ?>
          <h3 class="carte-titre"><?= h($offre['nom'] ?? '') ?></h3>
          <?php if (!empty($offre['prix'])): ?>
            <p class="offre-prix"><?= h($offre['prix']) ?></p>
          <?php endif; ?>
          <p class="carte-texte"><?= h($offre['texte'] ?? '') ?></p>
          <div class="carte-offre-detail">
            <p>Séance de 1h30, en petit groupe — matériel et encadrement inclus.</p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($bloc['encadre_titre'])): ?>
      <aside class="encadre">
        <h3 class="encadre-titre"><?= h($bloc['encadre_titre']) ?></h3>
        <p class="encadre-texte"><?= h($bloc['encadre_texte'] ?? '') ?></p>
        <?php if (!empty($bloc['encadre_exemple'])): ?>
          <p class="encadre-exemple"><?= h($bloc['encadre_exemple']) ?></p>
        <?php endif; ?>
        <?php if (!empty($bloc['encadre_note'])): ?>
          <p class="encadre-note"><?= h($bloc['encadre_note']) ?></p>
        <?php endif; ?>
        <div class="actions actions-encadre">
          <a class="bouton" href="#contact">Demander un devis</a>
        </div>
      </aside>
    <?php endif; ?>
  </div>
</section>
<?php if ($themes): ?>
<script>
(function () {
  var section = document.currentScript.previousElementSibling;
  if (!section) { return; }
  var filtres = section.querySelector('[data-offres-filtres]');
  var grille = section.querySelector('[data-offres-grille]');
  if (!filtres || !grille) { return; }

  filtres.addEventListener('click', function (e) {
    var bouton = e.target.closest('.filtre-offre');
    if (!bouton) { return; }
    filtres.querySelectorAll('.filtre-offre').forEach(function (b) { b.classList.remove('filtre-offre-actif'); });
    bouton.classList.add('filtre-offre-actif');
    var choix = bouton.getAttribute('data-filtre');
    grille.querySelectorAll('.carte-offre').forEach(function (carte) {
      var visible = choix === 'tous' || carte.getAttribute('data-offre-theme') === choix;
      carte.style.display = visible ? '' : 'none';
    });
  });

  grille.querySelectorAll('.carte-offre').forEach(function (carte) {
    function toggle() {
      var ouvert = carte.classList.toggle('carte-offre-ouverte');
      carte.setAttribute('aria-expanded', ouvert ? 'true' : 'false');
    }
    carte.addEventListener('click', toggle);
    carte.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); toggle(); }
    });
  });
})();
</script>
<?php endif; ?>
