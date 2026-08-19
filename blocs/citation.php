<section class="section citation-section">
  <div class="conteneur conteneur-etroit">
    <blockquote class="citation">
      <p class="citation-texte"><?= h($bloc['texte'] ?? '') ?></p>
      <footer class="citation-signature">
        <span class="citation-auteur"><?= h($bloc['auteur'] ?? '') ?></span>
        <span class="citation-role"><?= h($bloc['role'] ?? '') ?></span>
      </footer>
    </blockquote>
  </div>
</section>
