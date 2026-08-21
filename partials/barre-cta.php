<div class="barre-cta" id="barre-cta" hidden>
  <div class="conteneur barre-cta-rangee">
    <p class="barre-cta-texte">Envie d’offrir cette expérience à vos résidents ?</p>
    <div class="barre-cta-actions">
      <a class="bouton bouton-clair" href="/#contact">Demander un devis</a>
      <button type="button" class="barre-cta-fermer" id="barre-cta-fermer" aria-label="Fermer">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
    </div>
  </div>
</div>
<script>
(function () {
  var barre = document.getElementById('barre-cta');
  if (!barre) { return; }
  var CLE = 'oldy-barre-cta-fermee';
  if (sessionStorage.getItem(CLE) === '1') { return; }

  var affichee = false;
  function verifier() {
    if (affichee || window.scrollY < window.innerHeight * .6) { return; }
    affichee = true;
    barre.hidden = false;
    requestAnimationFrame(function () { barre.classList.add('barre-cta-visible'); });
    window.removeEventListener('scroll', verifier);
  }
  window.addEventListener('scroll', verifier, { passive: true });

  document.getElementById('barre-cta-fermer').addEventListener('click', function () {
    barre.classList.remove('barre-cta-visible');
    sessionStorage.setItem(CLE, '1');
    setTimeout(function () { barre.hidden = true; }, 300);
  });
})();
</script>
