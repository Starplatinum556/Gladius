// =========================
// Toggle del menú en móvil
// =========================
const toggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('.gc-nav nav');
if (toggle && nav) {
  // Estado accesible
  toggle.setAttribute('aria-expanded', 'false');

  toggle.addEventListener('click', () => {
    const isOpen = nav.style.display === 'flex';
    nav.style.display = isOpen ? 'none' : 'flex';
    toggle.setAttribute('aria-expanded', String(!isOpen));
  });

  // Al redimensionar, restablecer estilos para evitar quedarse abierto/cerrado mal
  window.addEventListener('resize', () => {
    if (window.innerWidth > 900) {
      nav.style.display = ''; // deja que el CSS controle
      toggle.setAttribute('aria-expanded', 'false');
    }
  });
}

// =======================================
// Placeholder de envío (MVP sin recarga)
// =======================================
const form = document.querySelector('.signup');
if (form) {
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const data = Object.fromEntries(new FormData(form).entries());
    console.log('Inscripción:', data);
    alert('¡Inscrito! Te contactaremos por correo.');
    form.reset();
  });
}

// ===============================
// Cursor falso ESTÁTICO (diagonal ↗ con punta como origen)
// ===============================
(() => {
  const el = document.getElementById('custom-cursor');
  if (!el) return;

  const mq = window.matchMedia('(pointer: fine)');
  if (!mq.matches) { el.style.display = 'none'; return; }

  const BASE_ANGLE = 145; // diagonal arriba-derecha

  function move(e) {
    // Mostramos al primer movimiento para que no aparezca pegado arriba-izquierda
    if (el.style.opacity !== '1') el.style.opacity = '1';
    // Como el origen es la PUNTA, ya no restamos HOTSPOT
    el.style.transform = `translate3d(${e.clientX}px, ${e.clientY}px, 0) rotate(${BASE_ANGLE}deg)`;
  }

  document.addEventListener('mousemove', move, { passive: true });
  document.addEventListener('mouseleave', () => { el.style.opacity = '0'; });
  document.addEventListener('mouseenter', () => { el.style.opacity = '1'; });

  mq.addEventListener?.('change', ev => {
    el.style.display = ev.matches ? '' : 'none';
  });
})();
