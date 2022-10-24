<div class="navbar-area">
    <div class="container relative">
        <div class="row">
            <div class="w-full">
                <nav class="flex items-center justify-between navbar navbar-expand-lg">
                    <a class="mr-4 navbar-brand " href="{{route('welcome')}}">
                        {{-- <img src="assets/images/logo.svg" alt="Logo"> --}}
                        {{-- <img src="assets/images/logos/frayluis/001.svg" alt="Logo" style="max-width: 15rem !important; max-height: 6rem !important"> --}}
                        <img src="assets/images/logos/logoSimple.svg" alt="Logo" style="max-width: 15rem !important; max-height: 6rem !important">
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
                                <a class="page-scroll" href="#objective">Objetivo</a>
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
                            {{-- <li class="nav-item">
                                <a class="page-scroll" href="#facts">Interesantes</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="page-scroll" href="#team">Equipo</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="#footer">Comunidad</a>
                            </li>
                            <li class="nav-item">
                                @include('welcome.partials.header.access.links')
                            </li>
                        </ul>
                    </div> <!-- navbar collapse -->
                    
                    {{-- <div class="absolute right-0 hidden mt-2 mr-24 navbar-btn sm:inline-block lg:mt-0 lg:static lg:mr-0"> --}}
                        {{-- @include('welcome.partials.header.access.links') --}}
                    {{-- </div> --}}
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- navbar area -->