</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Página de Inicio</title>
  <link rel="stylesheet" href="estilos.css" />
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo.png" alt="Logo de ViajaConmigo" />
    </div>
    <div class="icons" style="display: flex; gap: 10px; align-items: center;">
      <a href="https://www.instagram.com/viajaconmigoc/" target="_blank">
        <img src="10900022.png" alt="Instagram" class="icono" />
      </a>
      <a href="https://wa.me/5493515194695" target="_blank">
        <img src="mobile_15047483.png" alt="WhatsApp" class="icono" />
      </a>
      <a href="https://www.facebook.com/viajaconmigoc" target="_blank">
        <img src="status_15047667.png" alt="Facebook" class="icono" />
      </a>
    </div>
  </header>

  <div class="hero">
    <div class="hero-img-container">
      <img src="frace1.png" alt="Descubre el mundo con nosotros" class="hero-img" />
    </div>
    <div class="hero-content">
      <a href="ver_destinos.html" class="btn">Ver Destinos</a>
    </div>
  </div>

  <section class="viaje-sonado">
    <div class="hero-content">
      <h2>Tu viaje soñado</h2>
    </div>
    <div class="carrusel">
      <div class="slides">
        <div class="slide"><img src="cordoba.jpeg" alt="Foto 1" /></div>
        <div class="slide"><img src="salta.jpeg" alt="Foto 2" /></div>
        <div class="slide"><img src="barilochvsudo apt install gnome-keyring libsecret-1-0 libsecret-1-dev -ysudo apt install gnome-keyring libsecret-1-0 libsecret-1-dev -ysudo apt install gnome-keyring libsecret-1-0 libsecret-1-dev -ysudo apt install gnome-keyring libsecret-1-0 libsecret-1-dev -ysudo apt install gnome-keyring libsecret-1-0 libsecret-1-dev -ysudo apt install gnome-keyring libsecret-1-0 libsecret-1-dev -ysudo apt install gnome-keyring libsecret-1-0 libsecret-1-dev -ysudo apt install gnome-keyring libsecret-1-0 libsecret-1-dev -ye.jpeg" alt="Foto 3" /></div>
        <div class="slide"><img src="paris.jpeg" alt="Foto 4" /></div>
        <div class="slide"><img src="newyork.jpeg" alt="Foto 5" /></div>
        <div class="slide"><img src="francia.jpeg" alt="Foto 6" /></div>
      </div>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-column">
          <h3>TurismoViajeros</h3>
          <p>Creando experiencias de viaje inolvidables desde 2010. Tu aventura comienza con nosotros.</p>
        </div>
        <div class="footer-column">
          <h3>Enlaces Rápidos</h3>
          <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#alquiler">Alquiler de Autos</a></li>
            <li><a href="#paquetes">Paquetes</a></li>
            <li><a href="#hospedajes">Hospedajes</a></li>
            <li><a href="#actividades">Actividades</a></li>
            <li><a href="#contacto">Contacto</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Servicios</h3>
          <ul>
            <li><a href="#">Reservas Online</a></li>
            <li><a href="#">Asistencia al Viajero</a></li>
            <li><a href="#">Seguros de Viaje</a></li>
            <li><a href="#">Guías Turísticos</a></li>
            <li><a href="#">Traslados Aeropuerto</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Newsletter</h3>
          <p>Suscríbete para ofertas exclusivas</p>
          <form>
            <input
              type="email"
              placeholder="Tu correo electrónico"
              style="padding: 10px; width: 70%; border-radius: 4px 0 0 4px; border: none;"
            />
            <button
              type="submit"
              style="background: #ff6b00; color: white; border: none; padding: 10px; border-radius: 0 4px 4px 0;"
            >
              OK
            </button>
          </form>
        </div>
      </div>
      <div class="copyright">
        <p>&copy; 2023 TurismoViajeros. Todos los derechos reservados. | Diseñado con ❤️ para viajeros</p>
      </div>
    </div>
  </footer>

  <script>
    const slidesContainer = document.querySelector('.slides');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function showSlide(index) {
      if (index < 0) {
        currentSlide = slides.length - 1;
      } else if (index >= slides.length) {
        currentSlide = 0;
      } else {
        currentSlide = index;
      }
      const offset = slides[currentSlide].offsetLeft;
      slidesContainer.style.transform = `translateX(-${offset}px)`;
    }

    prevBtn.addEventListener('click', () => showSlide(currentSlide - 1));
    nextBtn.addEventListener('click', () => showSlide(currentSlide + 1));
    setInterval(() => showSlide(currentSlide + 1), 5000);
  </script>

   <footer>
    <p>&copy; 2025 Viajaconmigo. Todos los derechos reservados.</p>
  </footer>

</body>
</html>