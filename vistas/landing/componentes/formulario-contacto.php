<!-- Modal -->
<div id="myModal" class="fixed inset-0 hidden items-center justify-center bg-opacity-80 text-white">
  <div class="bg-naranjaIndustrial p-8 shadow-lg w-[80%] lg:w-1/2 mt-[100px] z-50 relative rounded-[30px]">
    <!-- Botón de cerrar -->
    <button class="absolute top-0 right-0 mt-5 mr-5 text-white text-[60px] text-2xl" onclick="toggleModal(false)">
      &times;
    </button>
    <h2 class="text-2xl font-bold mb-4 text-center">Formulario</h2>
    <form id="formulario" action="<?= ruta('gracias') ?>" method="POST" class="flex flex-col w-full space-y-4">
      <input type="hidden" name="landing_id" value="<?= htmlspecialchars($landing_id ?? 0) ?>">
      <div class="w-full flex items-center">
        <label for="name" class="w-1/4 text-right mr-2">Nombre<span class="text-white">*</span></label>
        <input name="nombre" class="appearance-none border rounded py-2 px-3 w-2/3 bg-white text-naranjaIndustrial leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" required>
      </div>
      <div class="w-full flex items-center mb-4">
        <label for="number" class="w-1/4 text-right mr-2">Número<span class="text-white">*</span></label>
        <input name="tel" class="appearance-none border rounded py-2 px-3 w-2/3 bg-white text-naranjaIndustrial leading-tight focus:outline-none focus:shadow-outline" 
            id="number" type="text" pattern="\d+" maxlength="10" 
            oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
      </div>
      <div class="w-full flex items-center mb-4">
        <label for="email" class="w-1/4 text-right mr-2">Email<span class="text-white">*</span></label>
        <input name="email" class="appearance-none border rounded py-2 px-3 w-2/3 bg-white text-naranjaIndustrial leading-tight focus:outline-none focus:shadow-outline" 
        id="email" type="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|mx)" required>
      </div>
      <div class="w-full flex items-center mb-4">
        <label for="empresa" class="w-1/4 text-right mr-2">Empresa<span class="text-white">*</span></label>
        <input name="empresa" class="appearance-none border rounded py-2 px-3 w-2/3 bg-white text-naranjaIndustrial leading-tight focus:outline-none focus:shadow-outline" id="empresa" type="text" required>
      </div>
      <div class="w-full flex items-center mb-4">
        <label for="estado" class="w-1/4 text-right mr-2">Estado<span class="text-white">*</span></label>
        <select name="estado" class="appearance-none border rounded py-2 px-3 w-2/3 bg-white text-naranjaIndustrial leading-tight focus:outline-none focus:shadow-outline" id="estado" required>
          <option value="">Selecciona un estado</option>
          <option value="Aguascalientes">Aguascalientes</option>
          <option value="Baja California">Baja California</option>
          <option value="Baja California Sur">Baja California Sur</option>
          <option value="Campeche">Campeche</option>
          <option value="Chiapas">Chiapas</option>
          <option value="Chihuahua">Chihuahua</option>
          <option value="Ciudad de México">Ciudad de México</option>
          <option value="Coahuila">Coahuila</option>
          <option value="Colima">Colima</option>
          <option value="Durango">Durango</option>
          <option value="Estado de México">Estado de México</option>
          <option value="Guanajuato">Guanajuato</option>
          <option value="Guerrero">Guerrero</option>
          <option value="Hidalgo">Hidalgo</option>
          <option value="Jalisco">Jalisco</option>
          <option value="Michoacán">Michoacán</option>
          <option value="Morelos">Morelos</option>
          <option value="Nayarit">Nayarit</option>
          <option value="Nuevo León">Nuevo León</option>
          <option value="Oaxaca">Oaxaca</option>
          <option value="Puebla">Puebla</option>
          <option value="Querétaro">Querétaro</option>
          <option value="Quintana Roo">Quintana Roo</option>
          <option value="San Luis Potosí">San Luis Potosí</option>
          <option value="Sinaloa">Sinaloa</option>
          <option value="Sonora">Sonora</option>
          <option value="Tabasco">Tabasco</option>
          <option value="Tamaulipas">Tamaulipas</option>
          <option value="Tlaxcala">Tlaxcala</option>
          <option value="Veracruz">Veracruz</option>
          <option value="Yucatán">Yucatán</option>
          <option value="Zacatecas">Zacatecas</option>
        </select>
      </div>
      <div class="w-full flex items-center justify-center">
        <button type="submit" class="bg-white text-naranjaIndustrial font-bold py-2 px-12 rounded-full focus:outline-none focus:shadow-outline">
          Cotizar
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Script para mostrar/ocultar el modal -->
<script>
  function toggleModal(show) {
    const modal = document.getElementById('myModal');
    if (show) {
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    } else {
      modal.classList.remove('flex');
      modal.classList.add('hidden');
    }
  }
</script>