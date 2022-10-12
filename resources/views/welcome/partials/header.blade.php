<header class="header-area">
        <div class="navbar-area">
            <div class="container relative">
                <div class="row">
                    <div class="w-full">
                        <nav class="flex items-center justify-between navbar navbar-expand-lg">
                            <a class="mr-4 navbar-brand" href="index.html">
                                <img src="assets/images/logo.svg" alt="Logo">
                            </a>
                            <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white shadow lg:w-auto collapse navbar-collapse lg:block top-100 mt-full lg:static lg:bg-transparent lg:shadow-none" id="navbarOne">
                                <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Características</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">Nosotros</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="page-scroll" href="#facts">Experiencias</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#facts">Eventos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Equipo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#blog">Comunidad</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="absolute right-0 hidden mt-2 mr-24 navbar-btn sm:inline-block lg:mt-0 lg:static lg:mr-0">
                                <a class="main-btn btn-grad" data-scroll-nav="0" href="#" rel="nofollow">Acceder</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="header-hero" style="background-image: url(assets/images/banner-bg.svg)">
            <div class="container">
                <div class="justify-center row">
                    <div class="w-full lg:w-2/3">
                        <div class="pt-32 mb-12 text-center lg:pt-48 header-hero-content">
                            <h3 class="text-4xl font-light leading-tight text-white header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Pastoral Fray Luís Amigó.</h3>
                            <h2 class="mb-3 text-4xl font-bold text-white header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Formación Catequetica para la 1ra Comunión y Confirmación.</h2>
                            <p class="mb-8 text-white text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Enseñanza del catecismo para entender e interiorizar el significado del misterio de Cristo.</p>
                            <a href="#" class="main-btn gradient-btn gradient-btn-2 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Comenzamos</a>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->

                <div class="justify-center row">
                    <div class="w-full lg:w-2/3">
                        <div class="text-center header-hero-image wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">                            
                            <img src="assets/images/header-hero.png" alt="hero">
                        </div> 
                    </div>
                </div> <!-- row -->


                <div class="justify-center row">
                    <div class="w-full h-full sm:w-2/3 lg:w-1/3">
                        <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="services-icon">
                                <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                                <img class="shape-1" src="assets/images/services-shape-1.svg" alt="shape">
                                <i class="lni lni-baloon"></i>
                            </div>
                            <div class="mt-8 services-content">
                                <h4 class="mb-8 text-xl font-bold text-gray-900">Preinscripciones</h4>
                                <p class="mb-8">
                                    Preinscribe en línea a niñas, niños o adolescentes que esten interesados en recibir formación de preparación para la <b>1ra de Comunión</b>
                                    o de Catecismo de preparaciòn para el sacraemnto de la <b>Confirmación</b> en el ciclo escolar 2022-2023.
                                </p>
                                <a class="duration-300 hover:text-theme-color !font-bold" href="{{ route('enrollments')}}">Registrar preinscripción<i class="ml-2 lni lni-chevron-right"></i></a>
                            </div>
                        </div> <!-- single services -->
                    </div>
                    <div class="w-full h-full sm:w-2/3 lg:w-2/3">
                        <div class="mt-8 text-center single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="services-icon">
                                <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                                <img class="shape-1" src="assets/images/services-shape-2.svg" alt="shape">
                                <i class="lni lni-cog"></i>
                            </div>
                            <div class="mt-8 services-content">
                                <h4 class="mb-8 text-xl font-bold text-gray-900">Inscripciones</h4>
                                <div class="text-left">
                                    <p class="mb-4">
                                        Formación catequética amigoniana para la 1ra Comunión (5to y 6to grado) y Confirmación (4to y 5to Año), año catequético 2022-2024. <br>
                                        Del 17 al 28 de octubre de 2022, horario: 10:30AM a 12:00PM. <br>
                                        Lugar: Sala Audio Visual "Padre Francis Morant".<br>                                        
                                    </p>
                                    <ul class="ml-2">
                                        <li class="font-bold">Requisitos obligatorios:</li>
                                        <li>Fotocopias: Partida de nacimiento, Cédula de identidad del catequizando y su representante.</li>
                                        <li>Fotografía del catequizando.</li>
                                        <li class="font-bold text-theme-color">Libro "Mi compromiso eucarístico".</li>
                                    </ul>

                                    <div class ="mt-2">Los sacramentos en nuestra casa de estudios se realizan con uniforme escolar.</div>
                                    <div class ="mt-2 font-bold">Canal informativo: en Instagram @amigonianos_SF.</div>
                                </div>
                                <!-- <a class="duration-300 hover:text-theme-color" href="javascript:void(0)">Learn More <i class="ml-2 lni lni-chevron-right"></i></a> -->
                            </div>
                        </div> <!-- single services -->
                    </div>

                </div> <!-- row -->

            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header> 