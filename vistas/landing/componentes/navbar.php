<header class="bg-grisOscuro text-naranjaIndustrial p-4 flex justify-between items-center fixed w-screen h-[100px] shadow-2xl shadow-black z-50">
    <img src="<?= importAsset('Desktop_Logo.png') ?>" alt="TEP Logo" class="h-[40px] sm:h-[80px] mr-4">

    <?php $telefono = configuracion('telefono') ?? '4461420006'; ?>
    <a href="tel:<?= htmlspecialchars($telefono) ?>" class="flex items-center space-x-2 text-white hover:text-blue-800 mr-[50px]">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 256 256">
            <g fill="#FF5C00" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <g transform="scale(5.33333,5.33333)">
                    <path d="M22.916,6.625l1.719,4.055c0.749,1.767 0.334,3.845 -1.028,5.137l-3.212,3.048c-0.362,0.344 -0.55,0.843 -0.469,1.335c0.31,1.881 0.997,3.736 2.061,5.566c1.062,1.826 2.355,3.38 3.88,4.661c0.404,0.339 0.965,0.427 1.465,0.26l3.747,-1.25c1.725,-0.575 3.603,0.086 4.661,1.64l2.465,3.621c1.23,1.807 1.009,4.299 -0.517,5.831l-1.636,1.642c-1.628,1.634 -3.953,2.227 -6.104,1.556c-5.078,-1.584 -9.746,-6.286 -14.006,-14.107c-4.266,-7.832 -5.771,-14.478 -4.516,-19.936c0.528,-2.297 2.163,-4.126 4.298,-4.808l2.153,-0.688c2.02,-0.643 4.175,0.399 5.039,2.437z"></path>
                </g>
            </g>
        </svg>
        <span class="text-xl"><?= htmlspecialchars($telefono) ?></span>
    </a>
</header>

