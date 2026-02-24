<footer class="w-screen overflow-x-clip">
    <hr class="border-t-2 border-naranjaIndustrial my-4 mx-[10%]">
    <div class="w-full text-center my-[12px] text-gray-700">
        <?= configuracion('nombre_empresa', env('EMPRESA', 'Servicios Industriales TEP')) ?>® Derechos Reservados <?= date('Y') ?> · 
        <a href="" class="hover:text-naranjaIndustrial transition-colors">Aviso de Privacidad</a>
    </div>
    <div class="w-full text-center mb-[12px] text-gray-600">
        Diseño y Desarrollo por <?= configuracion('desarrollador', 'Cimiento®') ?>
    </div>
</footer>
