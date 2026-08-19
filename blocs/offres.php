<section class="section section-alt" id="<?= h($bloc['id'] ?? '') ?>">
  <div class="conteneur">
    <h2 class="titre-section centre"><?= h($bloc['titre'] ?? '') ?></h2>
    <?php if (!empty($bloc['intro'])): ?><p class="intro centre"><?= h($bloc['intro']) ?></p><?php endif; ?>
    <div class="grille grille-offres">
      <?php foreach ($bloc['offres'] ?? [] as $offre): ?>
        <article class="carte carte-offre">
          <h3 class="carte-titre"><?= h($offre['nom'] ?? '') ?></h3>
          <?php if (!empty($offre['prix'])): ?>
            <p class="offre-prix"><?= h($offre['prix']) ?></p>
          <?php endif; ?>
          <p class="carte-texte"><?= h($offre['texte'] ?? '') ?></p>
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
