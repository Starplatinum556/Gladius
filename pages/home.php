<main id="home">
  <!-- HERO -->
  <section class="hero">
    <div class="gc-container hero-grid">
      <div class="hero-copy">
        <h1>Entra al Coliseo. Honra tu nombre.</h1>
        <p>Formato 1v1 con árbitro y reglas claras. Solo para verdaderos guerreros.</p>
        <div class="hero-cta">
          <a class="btn btn-primary" href="#inscribirse">Unirme al Torneo</a>
          <a class="btn btn-ghost" href="#reglas">Ver Reglas</a>
        </div>
      </div>
      <div class="hero-art">
        <img src="<?php echo BASE_URL . 'assets/img/hero.png'; ?>" alt="Coliseo épico">
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="features" id="torneos">
    <div class="gc-container grid-3">
      <article class="card">
        <h3>Arbitraje Real</h3>
        <p>Moderadores validan resultados y evidencias. Cero excusas.</p>
      </article>
      <article class="card">
        <h3>Premios Claros</h3>
        <p>Pozo y pagos transparentes. Tu gloria, tu recompensa.</p>
      </article>
      <article class="card">
        <h3>Formato 1v1</h3>
        <p>First Blood / 100 CS / 1ª Torre. Gana con honor.</p>
      </article>
    </div>
  </section>

  <!-- CTA INSCRIPCIÓN -->
  <section class="cta" id="inscribirse">
    <div class="gc-container cta-box">
      <h2>¿Listo para luchar?</h2>
      <p>Inscríbete ahora y recibe confirmación por correo.</p>
      <form class="signup" method="post" action="#">
        <input type="text" name="summoner" placeholder="Invocador de LoL" required>
        <input type="email" name="email" placeholder="Correo" required>
        <button class="btn btn-primary" type="submit">Inscribirme</button>
      </form>
    </div>
  </section>

  <!-- REGLAS -->
  <section class="rules" id="reglas">
    <div class="gc-container">
      <h2>Reglas esenciales</h2>
      <ul class="rules-list">
        <li>Mapa: Howling Abyss. Win: First Blood / 100 CS / 1ª Torre.</li>
        <li>Modo: Blind Pick. 1 pausa técnica por jugador (máx. 3 min).</li>
        <li>Conducta: Cero toxicidad. Sanciones hasta DQ.</li>
      </ul>
    </div>
  </section>

  <!-- PREMIOS -->
  <section class="prizes" id="premios">
    <div class="gc-container grid-3">
      <div class="prize"><h3>Bronce</h3><p>Inscripción $3 — Premio 90% del pozo.</p></div>
      <div class="prize"><h3>Plata</h3><p>Inscripción $5 — Premio 90% del pozo.</p></div>
      <div class="prize"><h3>Oro</h3><p>Inscripción $10 — Premio 90% del pozo.</p></div>
    </div>
  </section>
</main>
