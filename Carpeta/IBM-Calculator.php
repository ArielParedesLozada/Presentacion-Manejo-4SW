<?php require_once('header_menu_sectionLogo.php'); ?>
<?php require_once('header_menu.php'); ?>

<div class="page-wrapper d-flex justify-content-center align-items-center">
  <div class="container container-tight py-4">
    <!-- Calculadora de IMC -->
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
      <h2 class="text-2xl font-semibold mb-4 text-center">Calculadora de IMC</h2>
      <form id="bmi-form" class="space-y-4">
        <div>
          <label for="weight" class="block text-sm font-medium text-gray-700">Peso (kg)</label>
          <input type="number" id="weight" name="weight"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            placeholder="Ingrese su peso" required>
        </div>
        <div>
          <label for="height" class="block text-sm font-medium text-gray-700">Altura (cm)</label>
          <input type="number" id="height" name="height"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            placeholder="Ingrese su altura" required>
        </div>
        <button type="submit"
          class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Calcular
          IMC</button>
      </form>
      <div id="bmi-result" class="mt-4 text-center text-lg font-medium"></div>
    </div>
  </div>
</div>

<?php require_once('footer.php'); ?>

<script src="../js/login.js"></script>
<script>
document.getElementById('bmi-form').addEventListener('submit', function(event) {
  event.preventDefault();

  // Obtener los valores de los campos
  const weight = parseFloat(document.getElementById('weight').value);
  const height = parseFloat(document.getElementById('height').value) / 100; // Convertir a metros

  // Validar los datos ingresados
  if (isNaN(weight) || isNaN(height) || height <= 0) {
    document.getElementById('bmi-result').textContent = 'Por favor, ingrese valores válidos.';
    return;
  }

  // Calcular IMC
  const bmi = weight / (height * height);
  let bmiCategory;

  if (bmi < 18.5) {
    bmiCategory = 'Bajo peso';
  } else if (bmi < 24.9) {
    bmiCategory = 'Normal';
  } else if (bmi < 29.9) {
    bmiCategory = 'Sobrepeso';
  } else {
    bmiCategory = 'Obesidad';
  }

  // Mostrar el resultado
  document.getElementById('bmi-result').textContent = `Tu IMC es ${bmi.toFixed(2)} (${bmiCategory})`;
});
</script>