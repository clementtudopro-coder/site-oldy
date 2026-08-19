<section class="section" id="<?= h($bloc['id'] ?? '') ?>">
  <div class="conteneur">
    <h2 class="titre-section centre"><?= h($bloc['titre'] ?? '') ?></h2>
    <?php if (!empty($bloc['intro'])): ?><p class="intro centre"><?= h($bloc['intro']) ?></p><?php endif; ?>
    <ol class="etapes">
      <?php foreach ($bloc['etapes'] ?? [] as $i => $etape): ?>
        <li class="etape">
          <span class="etape-num"><?= (int) $i + 1 ?></span>
          <div>
            <h3 class="etape-titre"><?= h($etape['titre'] ?? '') ?></h3>
            <p class="etape-texte"><?= h($etape['texte'] ?? '') ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
