<?php require_once('header_menu_sectionLogo.php'); ?>
<?php require_once('header_menu.php'); ?>

<style>
    * {
        font-family: Nunito, sans-serif;
    }

    .responsive-cell-block {
        min-height: 75px;
    }

    .text-blk {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        line-height: 25px;
    }

    .responsive-container-block {
        min-height: 75px;
        height: fit-content;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        margin-top: 0px;
        margin-right: auto;
        margin-bottom: 0px;
        margin-left: auto;
        justify-content: space-evenly;
    }

    .team-head-text {
        font-size: 48px;
        font-weight: 900;
        text-align: center;
    }

    .team-head-text {
        line-height: 50px;
        width: 100%;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 50px;
        margin-left: 0px;
    }

    .container {
        max-width: 1380px;
        margin-top: 60px;
        margin-right: auto;
        margin-bottom: 60px;
        margin-left: auto;
        padding-top: 0px;
        padding-right: 30px;
        padding-bottom: 0px;
        padding-left: 30px;
    }

    .card {
        text-align: center;
        box-shadow: rgba(0, 0, 0, 0.05) 0px 4px 20px 7px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 30px;
        padding-right: 25px;
        padding-bottom: 30px;
        padding-left: 25px;
    }

    .card-container {
        width: 280px;
        margin-top: 0px;
        margin-right: 10px;
        margin-bottom: 25px;
        margin-left: 10px;
    }

    .name {
        margin-top: 20px;
        margin-right: 0px;
        margin-bottom: 5px;
        margin-left: 0px;
        font-size: 18px;
        font-weight: 800;
    }

    .position {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 10px;
        margin-left: 0px;
    }

    .feature-text {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 20px;
        margin-left: 0px;
        color: rgb(122, 122, 122);
        line-height: 30px;
    }

    .social-icons {
        width: 70px;
        display: flex;
        justify-content: space-between;
    }

    .team-image-wrapper {
        clip-path: circle(50% at 50% 50%);
        width: 130px;
        height: 130px;
    }

    .team-member-image {
        max-width: 100%;
    }

    @media (max-width: 500px) {
        .card-container {
            width: 100%;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 25px;
            margin-left: 0px;
        }
    }

    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');

    *,
    *:before,
    *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        margin: 0;
    }

    .wk-desk-1 {
        width: 8.333333%;
    }

    .wk-desk-2 {
        width: 16.666667%;
    }

    .wk-desk-3 {
        width: 25%;
    }

    .wk-desk-4 {
        width: 33.333333%;
    }

    .wk-desk-5 {
        width: 41.666667%;
    }

    .wk-desk-6 {
        width: 50%;
    }

    .wk-desk-7 {
        width: 58.333333%;
    }

    .wk-desk-8 {
        width: 66.666667%;
    }

    .wk-desk-9 {
        width: 75%;
    }

    .wk-desk-10 {
        width: 83.333333%;
    }

    .wk-desk-11 {
        width: 91.666667%;
    }

    .wk-desk-12 {
        width: 100%;
    }

    @media (max-width: 1024px) {
        .wk-ipadp-1 {
            width: 8.333333%;
        }

        .wk-ipadp-2 {
            width: 16.666667%;
        }

        .wk-ipadp-3 {
            width: 25%;
        }

        .wk-ipadp-4 {
            width: 33.333333%;
        }

        .wk-ipadp-5 {
            width: 41.666667%;
        }

        .wk-ipadp-6 {
            width: 50%;
        }

        .wk-ipadp-7 {
            width: 58.333333%;
        }

        .wk-ipadp-8 {
            width: 66.666667%;
        }

        .wk-ipadp-9 {
            width: 75%;
        }

        .wk-ipadp-10 {
            width: 83.333333%;
        }

        .wk-ipadp-11 {
            width: 91.666667%;
        }

        .wk-ipadp-12 {
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .wk-tab-1 {
            width: 8.333333%;
        }

        .wk-tab-2 {
            width: 16.666667%;
        }

        .wk-tab-3 {
            width: 25%;
        }

        .wk-tab-4 {
            width: 33.333333%;
        }

        .wk-tab-5 {
            width: 41.666667%;
        }

        .wk-tab-6 {
            width: 50%;
        }

        .wk-tab-7 {
            width: 58.333333%;
        }

        .wk-tab-8 {
            width: 66.666667%;
        }

        .wk-tab-9 {
            width: 75%;
        }

        .wk-tab-10 {
            width: 83.333333%;
        }

        .wk-tab-11 {
            width: 91.666667%;
        }

        .wk-tab-12 {
            width: 100%;
        }
    }

    @media (max-width: 500px) {
        .wk-mobile-1 {
            width: 8.333333%;
        }

        .wk-mobile-2 {
            width: 16.666667%;
        }

        .wk-mobile-3 {
            width: 25%;
        }

        .wk-mobile-4 {
            width: 33.333333%;
        }

        .wk-mobile-5 {
            width: 41.666667%;
        }

        .wk-mobile-6 {
            width: 50%;
        }

        .wk-mobile-7 {
            width: 58.333333%;
        }

        .wk-mobile-8 {
            width: 66.666667%;
        }

        .wk-mobile-9 {
            width: 75%;
        }

        .wk-mobile-10 {
            width: 83.333333%;
        }

        .wk-mobile-11 {
            width: 91.666667%;
        }

        .wk-mobile-12 {
            width: 100%;
        }
    }
</style>

<div class="responsive-container-block container">
    <p class="text-blk team-head-text">
        Our Team
    </p>
    <div class="responsive-container-block">
        <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
                <div class="team-image-wrapper">
                    <img class="team-member-image" src="../img/joel_bonilla.png">
                </div>
                <p class="text-blk name">
                    Joel Bonilla
                </p>
                <p class="text-blk position">
                    Líder de equipo
                </p>
                <p class="text-blk feature-text">
                    Se encarga de coordinar el equipo, asignar tareas y asegurar que todos los objetivos se cumplan de
                    manera eficiente y en tiempo.
                </p>
                <div class="social-icons">
                    <a target="_blank">
                        <img class="twitter-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                    </a>
                    <a target="_blank">
                        <img class="facebook-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                    </a>
                </div>
            </div>
        </div>
        <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
                <div class="team-image-wrapper">
                    <img class="team-member-image" src="../img/david_manjarres.jpg">
                </div>
                <p class="text-blk name">
                    David Manjarres
                </p>
                <p class="text-blk position">
                    Desarrollador Backed
                </p>
                <p class="text-blk feature-text">
                    Su habilidad para trabajar con el lado servidor asegura la estabilidad y el buen funcionamiento del
                    proyecto.
                </p>
                <div class="social-icons">
                    <a target="_blank">
                        <img class="twitter-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                    </a>
                    <a target="_blank">
                        <img class="facebook-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                    </a>
                </div>
            </div>
        </div>
        <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
                <div class="team-image-wrapper">
                    <img class="team-member-image" src="../img/josue_garcia.jpg">
                </div>
                <p class="text-blk name">
                    Josué García
                </p>
                <p class="text-blk position">
                    Desarrollador frontend
                </p>
                <p class="text-blk feature-text">
                    Se especializa en la interfaz de usuario, asegurándose de que la experiencia sea intuitiva y
                    visualmente atractiva.
                </p>
                <div class="social-icons">
                    <a target="_blank">
                        <img class="twitter-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                    </a>
                    <a target="_blank">
                        <img class="facebook-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                    </a>
                </div>
            </div>
        </div>
        <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
                <div class="team-image-wrapper">
                    <img class="team-member-image" src="../img/ariel_paredes.jpg">
                </div>
                <p class="text-blk name">
                    Ariel Paredes
                </p>
                <p class="text-blk position">
                    Tester y Control de Calidad
                </p>
                <p class="text-blk feature-text">
                    Se enfoca en garantizar que el producto final sea de alta calidad.
                </p>
                <div class="social-icons">
                    <a target="_blank">
                        <img class="twitter-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                    </a>
                    <a target="_blank">
                        <img class="facebook-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                    </a>
                </div>
            </div>
        </div>
        <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
                <div class="team-image-wrapper">
                    <img class="team-member-image" src="../img/david_barragan.png">
                </div>
                <p class="text-blk name">
                    David Barragan
                </p>
                <p class="text-blk position">
                    Soporte y documentación
                </p>
                <p class="text-blk feature-text">
                    Es responsable de mantener la documentación clara y accesible para el equipo.
                </p>
                <div class="social-icons">
                    <a target="_blank">
                        <img class="twitter-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                    </a>
                    <a target="_blank">
                        <img class="facebook-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>