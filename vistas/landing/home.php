<!DOCTYPE html>
<html lang="es">
<head> 
    <?php $this->plantilla('metas-basicas')?>
    <?php $this->plantilla('estilos')?>
    <?= configuracion('tag_manager_head') ?>
    <title><?= $landing['titulo'] ?? env('EMPRESA') ?></title>
    <meta name="description" content="<?= $landing['descripcion'] ?? '' ?>">
    <meta name="robots" content="noindex, nofollow">
    <style>
        /* Estilos para bullets personalizados */
        .custom-bullet {
            position: relative;
            padding-left: 1.5em;
        }
        .custom-bullet:before {
            content: '•';
            color: #FF5C00;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1.5em;
            position: absolute;
            left: 0;
        }
        
        /* Estilos para el carrusel */
        .carousel-container {
            position: relative;
        }
        .carousel-images {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .carousel-images img {
            flex-shrink: 0;
        }
    </style>
</head>
<body class="w-screen overflow-x-clip">
    <main>
        <?= configuracion('tag_manager_body') ?>
        
        <?php $this->componente('navbar');?>
        <?php $this->componente('flotante-whatsapp');?>

        <!-- SECCIÓN HERO CON BACKGROUND -->
        <section id="seccion1" class="relative bg-fixed bg-cover bg-no-repeat min-h-screen flex items-center justify-left" style="background-image: url('<?= importAsset('Desktop_1.png') ?>');">
            <div class="w-[90%] md:w-3/4 lg:w-1/2 px-[20px] md:px-[60px] lg:px-[120px] pt-[100px] md:pt-[150px] flex items-center justify-center bg-opacity-50">
                <div>
                    <h1 class="text-3xl md:text-4xl lg:text-6xl text-white font-bold mb-4">
                        <?php 
                        $h1Text = $landing['h1'] ?? 'Tecnología en Epóxicos y Pulidos';
                        echo preg_replace('/(\S+\s+\S+)$/', '<span class="text-naranjaIndustrial">$1</span>', $h1Text); 
                        ?>
                    </h1>
                    <h2 class="text-xl md:text-2xl lg:text-4xl text-white font-bold">
                        <?= $landing['h2'] ?? 'Soluciones integrales para pisos industriales' ?>
                    </h2>
                    <button class="rounded-full text-xl md:text-2xl py-[8px] px-[30px] md:px-[40px] lg:px-[50px] text-white font-bold bg-naranjaIndustrial mt-[40px] md:mt-[50px] lg:mt-[60px] hover:scale-105 hover:bg-[#E55200] transition-all duration-300" onclick="toggleModal(true)">
                        Cotiza ahora
                    </button>
                </div>
            </div>
        </section>

        <!-- SECCIÓN DE SERVICIOS CON IMAGEN -->
        <section id="seccion2" class="relative min-h-screen flex flex-col md:flex-row md:mt-0">
            <div class="w-full md:w-1/2 flex items-center justify-center py-[50px] md:py-[100px] pl-[20px] md:pl-[200px]">
                <img src="<?= importAsset('Desktop_2.png') ?>" alt="Servicios TEP" class="rounded-[50px]">
            </div>

            <div class="w-full md:w-1/2 px-[20px] md:px-[80px] flex flex-col justify-center bg-opacity-50">
                <div class="text-container">
                    <p class="text-black mt-4">
                        <label class="text-xl md:text-2xl font-bold">
                            Contamos con calidad y una
                            <span class="text-naranjaIndustrial">gran variedad</span> de sistemas
                            de recubrimientos, pulido y
                            abrillantado de pisos.
                        </label>
                        <ul class="text-black text-lg md:text-xl mt-4 list-none">
                            <li class="custom-bullet">Monteros y recubrimientos epóxicos autonivelantes</li>
                            <li class="custom-bullet">Pulido y abrillantado de concreto</li>
                            <li class="custom-bullet">Decapado</li>
                            <li class="custom-bullet">Curva sanitaria</li>
                            <li class="custom-bullet">Reparación y reconstrucción de juntas</li>
                            <li class="custom-bullet">Bacheo</li>
                            <li class="custom-bullet">Señalización</li>
                        </ul>
                    </p>

                    <button class="rounded-full text-lg md:text-xl py-[8px] px-[30px] md:px-[50px] ml-[20%] sm:ml-0 text-white font-bold bg-black mt-[40px] md:mt-[60px] hover:scale-105 hover:bg-gray-800 transition-all duration-300" onclick="toggleModal(true)">
                        Obtener una cotización
                    </button>
                </div>
            </div>
        </section>

        <!-- SECCIÓN DE 3 CARACTERÍSTICAS -->
        <section id="seccion3" class="relative min-h-screen flex flex-col items-center justify-center mt-[510px] sm:mt-0 py-16">
            <h2 id="referencia-navbardiscreto" class="text-2xl md:text-3xl lg:text-4xl text-black font-bold mb-8 px-4 md:px-[10%] text-center">
                <span class="text-naranjaIndustrial">Tenemos el equipo y producto perfecto</span> para atender las necesidades específicas que tu empresa necesita.
            </h2>
            <div class="flex flex-col md:flex-row justify-around w-full px-[20%] md:px-8 text-center">
                <!-- Característica 1 -->
                <div class="flex flex-col items-center w-full md:w-[30%] h-auto md:h-[500px] mb-8 md:mb-0 justify-end">
                    <img src="<?= importAsset('Desktop_Icono1.png') ?>" alt="Tecnología" class="mb-4 h-[100px] md:h-[150px]">
                    <label class="text-lg md:text-xl lg:text-3xl text-black font-bold mb-2">
                        Tecnología en epóxicos y pulidos
                    </label>
                    <div class="flex flex-col items-center bg-white rounded-[30px] border-[3px] border-[#FF5C00] p-4 shadow-lg h-auto md:h-[300px] justify-center">
                        <p class="text-black text-base md:text-lg">
                            Nuestra garantía integra resistencia ante agresiones químicas, antiadherentes, descontaminantes, lavables, rápida sustitución de losetas dañadas, disipativos, conductivos y electrostáticos, bacteriostáticas y fungistáticas, tráfico interno y control acústico.
                        </p>
                    </div>
                </div>
                
                <!-- Característica 2 -->
                <div class="flex flex-col items-center w-full md:w-[30%] h-auto md:h-[500px] mb-8 md:mb-0 justify-end">
                    <img src="<?= importAsset('Desktop_Icono2.png') ?>" alt="Servicio especializado" class="mb-4 h-[100px] md:h-[150px]">
                    <label class="text-lg md:text-xl lg:text-3xl text-black font-bold mb-2">
                        Servicio especializado para la industria
                    </label>
                    <div class="flex flex-col items-center bg-white rounded-[30px] border-[3px] border-[#FF5C00] p-4 shadow-lg h-auto md:h-[300px] justify-center">
                        <p class="text-black text-base md:text-lg">
                            Somos expertos en el sector industrial: Automotriz, plantas de producción, tecnológicas y muchas más.
                        </p>
                    </div>
                </div>
                
                <!-- Característica 3 -->
                <div class="flex flex-col items-center w-full md:w-[30%] h-auto md:h-[500px] justify-end">
                    <img src="<?= importAsset('Desktop_Icono3.png') ?>" alt="Soluciones" class="mb-4 h-[100px] md:h-[150px]">
                    <label class="text-lg md:text-xl lg:text-3xl text-black font-bold mb-2">
                        Soluciones de recubrimientos industriales
                    </label>
                    <div class="flex flex-col items-center bg-white rounded-[30px] border-[3px] border-[#FF5C00] p-4 shadow-lg h-auto md:h-[300px] justify-center">
                        <p class="text-black text-base md:text-lg">
                            Cada día nos renovamos, tecnológica e intelectualmente, capacitando a nuestro personal para seguir brindando a nuestros clientes todos los servicios que superen las más exigentes expectativas.
                        </p>
                    </div>
                </div>
            </div>
            <button class="rounded-full text-lg md:text-xl py-[8px] px-[30px] md:px-[50px] text-white font-bold bg-naranjaIndustrial mt-8 md:mt-[60px] hover:scale-105 hover:bg-[#E55200] transition-all duration-300" onclick="toggleModal(true)">
                Cotizar
            </button> 
        </section>

        <!-- CARRUSEL DE IMÁGENES -->
        <section class="carousel-container relative overflow-hidden flex items-center justify-center px-[5%] md:px-[10%] mt-[400px] sm:mt-[100px] py-8">
            <div class="carousel-images flex w-full sm:h-[98%] h-[250px] space-x-4">
                <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 1.png') ?>" alt="Galería 1" class="w-full h-full object-cover rounded-lg">
                <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 2.png') ?>" alt="Galería 2" class="w-full h-full object-cover rounded-lg">
                <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 3.png') ?>" alt="Galería 3" class="w-full h-full object-cover rounded-lg">
                <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 4.png') ?>" alt="Galería 4" class="w-full h-full object-cover rounded-lg">
                <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 5.png') ?>" alt="Galería 5" class="w-full h-full object-cover rounded-lg">
                <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 6.png') ?>" alt="Galería 6" class="w-full h-full object-cover rounded-lg">
                <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 7.png') ?>" alt="Galería 7" class="w-full h-full object-cover rounded-lg">
            </div>
            <button class="absolute top-1/2 left-5 md:left-[200px] transform -translate-y-1/2 text-white p-2 rounded-full font-bold text-[50px] hover:scale-110 transition-transform" onclick="prevSlide()">&lt;</button>
            <button class="absolute top-1/2 right-5 md:right-[200px] transform -translate-y-1/2 text-white p-2 rounded-full font-bold text-[50px] hover:scale-110 transition-transform" onclick="nextSlide()">&gt;</button>
        </section>

        <!-- GALERÍA DE MINIATURAS -->
        <section class="flex flex-row justify-between items-center w-full px-[5%] md:px-[10%] my-8">
            <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 1.png') ?>" alt="Miniatura 1" class="h-[30px] md:h-[100px] my-2 cursor-pointer hover:opacity-75" onclick="currentSlide(1)">
            <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 2.png') ?>" alt="Miniatura 2" class="h-[30px] md:h-[100px] mx-[1px] my-2 cursor-pointer hover:opacity-75" onclick="currentSlide(2)">
            <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 3.png') ?>" alt="Miniatura 3" class="h-[30px] md:h-[100px] mx-[1px] my-2 cursor-pointer hover:opacity-75" onclick="currentSlide(3)">
            <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 4.png') ?>" alt="Miniatura 4" class="h-[30px] md:h-[100px] mx-[1px] my-2 cursor-pointer hover:opacity-75" onclick="currentSlide(4)">
            <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 5.png') ?>" alt="Miniatura 5" class="h-[30px] md:h-[100px] mx-[1px] my-2 cursor-pointer hover:opacity-75" onclick="currentSlide(5)">
            <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 6.png') ?>" alt="Miniatura 6" class="h-[30px] md:h-[100px] mx-[1px] my-2 cursor-pointer hover:opacity-75" onclick="currentSlide(6)">
            <img src="<?= importAsset('carrusel/Landing Desktop_Galeria 7.png') ?>" alt="Miniatura 7" class="h-[30px] md:h-[100px] my-2 cursor-pointer hover:opacity-75" onclick="currentSlide(7)">
        </section>

        <?php $this->componente('formulario-contacto', [
            'landing_id' => $landing_id ?? 0,
            'intereses' => $intereses ?? [],
            'servicios' => $servicios ?? []
        ]);?>

        <?php $this->componente('footer');?>
    </main>

    <!-- Scripts -->
    <script>
        // Script para el carrusel
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function nextSlide() {
            showSlides(slideIndex += 1);
        }
        
        function prevSlide() {
            showSlides(slideIndex -= 1);
        }
        
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            const slides = document.querySelectorAll('.carousel-images img');
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            slides.forEach(slide => slide.style.display = 'none'); 
            slides[slideIndex - 1].style.display = 'block';
        }
    </script>
</body>
</html>