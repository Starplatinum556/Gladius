<footer class="gc-footer">
  <div class="gc-container">
    <p>© <?= date('Y'); ?> Gladius Coliseum — No afiliado a Riot Games.</p>
    <ul class="footer-links">
      <li><a href="#">Términos</a></li>
      <li><a href="#">Privacidad</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </div>
</footer>

<!-- Carga el JS al final para que el DOM ya exista -->
<script src="<?= BASE_URL ?>assets/js/main.js?v=1.0.4" defer></script>

<!-- Fallback: si JS está deshabilitado, muestra el cursor normal -->
<noscript>
  <style>
    html, body { cursor: auto !important; }
    #custom-cursor { display: none !important; }
  </style>
</noscript>
</body>
</html>
