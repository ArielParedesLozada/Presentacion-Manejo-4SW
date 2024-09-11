<?php require_once('header_menu_sectionLogo.php'); ?>
<?php require_once('header_menu.php'); ?>

<div class="page-wrapper d-flex justify-content-center align-items-center min-h-screen bg-gray-100 py-10">
  <div class="container max-w-4xl mx-auto">
    <br>
    <h1 class="text-3xl font-bold text-center mb-8">Herramientas Útiles</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Diseño mejorado para "3 en Línea" -->

      <a href="3encalle.php"
        class="block p-6 bg-white rounded-lg shadow-lg hover:bg-gray-100 transition duration-300 ease-in-out">
        <h2 class="text-2xl font-bold">3 en Línea</h2>
        <p class="text-gray-700">Disfruta del clásico juego de 3 en línea con un diseño atractivo. ¡Perfecto para
          pasar el
          tiempo y competir con amigos!</p>
      </a>

      <a href="Crono.php"
        class="block p-6 bg-white rounded-lg shadow-lg hover:bg-gray-100 transition duration-300 ease-in-out">
        <h2 class="text-xl font-semibold mb-2">Hora Actual</h2>
        <p class="text-gray-700">Consulta la hora actual con precisión en tiempo real.</p>
      </a>
      <a href="Hex.php"
        class="block p-6 bg-white rounded-lg shadow-lg hover:bg-gray-100 transition duration-300 ease-in-out">
        <h2 class="text-xl font-semibold mb-2">Conversor de Decimal a Hexadecimal</h2>
        <p class="text-gray-700">Convierte números decimales a formato hexadecimal fácilmente.</p>
      </a>
      <a href="IBM-Calculator.php"
        class="block p-6 bg-white rounded-lg shadow-lg hover:bg-gray-100 transition duration-300 ease-in-out">
        <h2 class="text-xl font-semibold mb-2">Calculadora de Peso Corporal</h2>
        <p class="text-gray-700">Calcula tu índice de masa corporal (IMC) para evaluar tu estado físico.</p>
      </a>
      <a href="Binary.php"
        class="block p-6 bg-white rounded-lg shadow-lg hover:bg-gray-100 transition duration-300 ease-in-out">
        <h2 class="text-xl font-semibold mb-2">Conversor de Decimal a Binario</h2>
        <p class="text-gray-700">Convierte números decimales a formato binario de manera rápida.</p>
      </a>
    </div>
  </div>
</div>

<?php require_once('footer.php'); ?>