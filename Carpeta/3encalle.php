<?php require_once ('header_menu_sectionLogo.php'); ?>
<?php require_once ('header_menu.php'); ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./3encalle.css" />
    <title>Tres en raya</title>
  </head>
  <body>
    <div class="contenedor-juego">
      <div class="juego-titulo"><h2>TRES EN RAYA</h2></div>
      <div id="juego-info" class="juego-info"></div>
      <div class="juego-cuadricula">
        <div class="cuadro"></div>
        <div class="cuadro"></div>
        <div class="cuadro"></div>
        <div class="cuadro"></div>
        <div class="cuadro"></div>
        <div class="cuadro"></div>
        <div class="cuadro"></div>
        <div class="cuadro"></div>
        <div class="cuadro"></div>
      </div>

      <div id="juego-boton" class="juego-boton">Volver a jugar</div>
    </div>

    <script src="./3encalle.js"></script>
  </body>
</html>

<?php require_once ('footer.php'); ?>
