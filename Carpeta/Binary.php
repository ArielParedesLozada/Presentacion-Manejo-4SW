<?php require_once('header_menu_sectionLogo.php'); ?>
<?php require_once('header_menu.php'); ?>

<div class="page-wrapper d-flex justify-content-center align-items-center">
    <form action="" method="get">
        <label for="decimal">Ingrese su número decimal</label>
        <input type="number" id="decimal" name="decimal">
        <button type="submit">Calcular</button>
    </form>
    <?php
    if (isset($_GET['decimal'])) {
        $decimal = $_GET['decimal'];
        $resultado = decbin($decimal);
        echo $resultado;
    }
    ?>
</div>

<?php require_once('footer.php'); ?>