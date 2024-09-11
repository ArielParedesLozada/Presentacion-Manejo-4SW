<?php require_once('header_menu_sectionLogo.php'); ?>
<?php require_once('header_menu.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bg-hero {
            background-size: cover;
            background-position: center;
            padding: 60px 0;
            /* Adjusted padding for better spacing */
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            /* Light background for readability */
            padding: 30px;
            /* Padding inside container */
            border-radius: 8px;
            /* Rounded corners */
        }

        .box {
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Shadow for depth */
        }

        .service-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .testimonial {
            font-style: italic;
        }

        .author {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <section class="ftco-section img bg-hero" ">
        <div class=" container">
        <!-- Contenido adicional -->
        <div class="container-xl">
            <div class="container my-5">
                <!-- Descripción de servicios/productos -->
                <h2 class="text-center mb-4">Nuestros Servicios</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="box text-center">
                            <div class="service-icon">🖥️</div>
                            <h4 class="mt-3">Desarrollo Web Personalizado</h4>
                            <p>Construimos sitios web adaptados a tus necesidades, con las últimas tecnologías y
                                diseño
                                responsivo.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box text-center">
                            <div class="service-icon">📈</div>
                            <h4 class="mt-3">Optimización SEO</h4>
                            <p>Aumenta la visibilidad de tu sitio web en los motores de búsqueda con nuestras
                                estrategias de SEO
                                avanzadas.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box text-center">
                            <div class="service-icon">🛒</div>
                            <h4 class="mt-3">E-commerce</h4>
                            <p>Creamos tiendas en línea seguras y eficientes, optimizadas para ventas y
                                conversiones.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box text-center">
                            <div class="service-icon">🔧</div>
                            <h4 class="mt-3">Soporte y Mantenimiento</h4>
                            <p>Servicio continuo para asegurar que tu sitio esté siempre actualizado y funcionando
                                sin
                                problemas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <!-- Testimonios o reseñas -->
                <h2 class="text-center mb-4">Lo que dicen nuestros clientes</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <p class="testimonial">"Excelente servicio y atención al cliente. Mi sitio web ahora
                                carga más
                                rápido y mis ventas han mejorado considerablemente."</p>
                            <span class="author">— Carlos García, Propietario de tienda online</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <p class="testimonial">"Gracias al equipo, logramos posicionar nuestra web en los
                                primeros
                                resultados de Google. Muy recomendable."</p>
                            <span class="author">— Ana Pérez, Gerente de marketing</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <p class="testimonial">"El proceso fue rápido y eficiente. El diseño final superó
                                nuestras
                                expectativas."</p>
                            <span class="author">— Javier Rodríguez, CEO de Startup Tech</span>
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