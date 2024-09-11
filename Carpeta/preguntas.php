<?php require_once('header_menu_sectionLogo.php'); ?>
<?php require_once('header_menu.php'); ?>

<!doctype html>
<html lang="en">

<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <style>
    /* Estilos específicos para la sección FAQ */
    .faq-section {
      padding: 60px 0;
    }

    .faq-section .card {
      margin-top: 20px;
    }

    .card-body {
      padding: 20px;
    }

    .accordion-body img {
      max-width: 100%;
      border-radius: 8px;
      margin-top: 10px;
    }

    .faq-header-icon {
      width: 50px;
      height: 50px;
      margin-right: 15px;
    }

    .card-title {
      margin-bottom: 0;
    }
  </style>
</head>

<body>
  <section class="ftco-section img bg-hero" style="background-image: url(../img/bg_1.jpg);">
    <div class="container">
      <!-- Contenido de la página principal -->
      <h2 class="text-center mb-4">Nuestros Servicios</h2>
      <div class="row g-4">
        <!-- Aquí van los servicios -->
        <!-- Código para los servicios aquí -->
      </div>

      <!-- Sección FAQ -->
      <div class="faq-section">
        <div class="container-xl">
          <div class="card card-lg shadow-sm">
            <div class="card-body">
              <div class="space-y-4">
                <div class="d-flex align-items-center mb-4">
                  <!-- Reemplazo de la imagen por un SVG -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="faq-header-icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M12 16v0"></path>
                    <path d="M12 8v4"></path>
                  </svg>
                  <h1 class="card-title">Preguntas Frecuentes</h1>
                </div>

                <div>
                  <h2 class="mb-3">Servicios de Diseño Web</h2>
                  <div id="faq-1" class="accordion" role="tablist" aria-multiselectable="true">
                    <!-- Pregunta 1 -->
                    <div class="accordion-item">
                      <div class="accordion-header" role="tab">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-1-1">
                          <i class="ti ti-layout-dashboard me-2"></i> ¿Qué incluye el servicio de diseño web?
                        </button>
                      </div>
                      <div id="faq-1-1" class="accordion-collapse collapse show" role="tabpanel"
                        data-bs-parent="#faq-1">
                        <div class="accordion-body pt-0">
                          <p>Nuestro servicio de diseño web incluye la creación de un diseño personalizado, desarrollo
                            de la
                            estructura del sitio, optimización para dispositivos móviles, y configuraciones básicas de
                            SEO.</p>
                          <img src="../img/servicios.jpg" alt="Ejemplo de diseño web">
                        </div>
                      </div>
                    </div>

                    <!-- Pregunta 2 -->
                    <div class="accordion-item">
                      <div class="accordion-header" role="tab">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-2">
                          <i class="ti ti-clock me-2"></i> ¿Cuánto tiempo toma desarrollar una página web?
                        </button>
                      </div>
                      <div id="faq-1-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                        <div class="accordion-body pt-0">
                          <p>El tiempo de desarrollo puede variar según la complejidad del proyecto, pero generalmente
                            toma
                            entre 2 a 4 semanas desde la fase de planificación hasta la entrega final.</p>
                          <img src="../img/tiempo.jpg" alt="Ejemplo de diseño web">
                        </div>
                      </div>
                    </div>

                    <!-- Pregunta 3 -->
                    <div class="accordion-item">
                      <div class="accordion-header" role="tab">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-3">
                          <i class="ti ti-tools me-2"></i> ¿Ofrecen mantenimiento después de la entrega?
                        </button>
                      </div>
                      <div id="faq-1-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                        <div class="accordion-body pt-0">
                          <p>Sí, ofrecemos planes de mantenimiento que incluyen actualizaciones de contenido,
                            optimización de
                            rendimiento y soporte técnico para garantizar que tu sitio web funcione perfectamente.</p>
                          <img src="../img/mantenimiento.jpg" alt="Mantenimiento de sitios web">
                        </div>
                      </div>
                    </div>

                    <!-- Pregunta 4 -->
                    <div class="accordion-item">
                      <div class="accordion-header" role="tab">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-4">
                          <i class="ti ti-device-mobile me-2"></i> ¿El diseño será compatible con dispositivos móviles?
                        </button>
                      </div>
                      <div id="faq-1-4" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                        <div class="accordion-body pt-0">
                          <p>Todos nuestros diseños son responsivos, lo que significa que tu sitio web se verá y
                            funcionará
                            correctamente en computadoras, tabletas y teléfonos móviles.</p>
                          <img src="../img/responsivo.png" alt="Diseño responsivo">
                        </div>
                      </div>
                    </div>

                    <!-- Pregunta 5 -->
                    <div class="accordion-item">
                      <div class="accordion-header" role="tab">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-5">
                          <i class="ti ti-pencil me-2"></i> ¿Cómo puedo solicitar modificaciones una vez terminado el
                          proyecto?
                        </button>
                      </div>
                      <div id="faq-1-5" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                        <div class="accordion-body pt-0">
                          <p>Para solicitar modificaciones, simplemente contáctanos y detallaremos los cambios que
                            deseas.
                            Dependiendo del plan de mantenimiento que elijas, las modificaciones podrían estar incluidas
                            o
                            tener un costo adicional.</p>
                          <img src="../img/contacto.jpg" alt="Solicitar modificaciones">
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>

<?php require_once('footer.php'); ?>