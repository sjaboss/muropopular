<x-app-layout>
    <div class="container bg-gray-900 ">

        {{-- cartel de alta contactos --}}
        @if ($mensaje = Session::get('success'))
            <div role="alert">
                <div class=" bg-emerald-600  text-white font-bold rounded-t px-4 py-2">
                    {{ $mensaje }}
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    <p>Nos pondremos en contacto. Saludos!</p>
                </div>
                <br>
                <div class="text-center">
                    <a class=" bg-emerald-600 text-white hover:bg-emerald-300 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                        href="{{ route('nuestros.store') }}">
                        Aceptar
                    </a>
                </div>
            </div>
        @endif

        <div class="bg-gray-900 rounded-lg shadow-lg mb-4">
            <p></p>
        </div>

        <!-- Carousel -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pb-6">
            <!-- Imagen principal -->
            <div class=" gap-4 rounded-lg border shadow border-emerald-500 p-4 bg-opacity-0 text-white">
                <article>
                    <iframe class="w-full aspect-video"
                        src="https://www.youtube.com/embed/JtuDAYQXFh8?si=TQXu-LyCO4tPqeqG" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </article>

                {{-- <img class="w-full h-96 object-cover rounded-lg border border-gray-900"
            src="{{ asset('img/AND POPULAR FLYER.gif') }}" alt=""> --}}
            </div>
            <!-- Dos notas con carrusel -->
            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-4 rounded-lg border shadow border-gray-600 p-4 bg-gray-800 text-white">
                <!-- Nota 1 -->
                <div class="rounded-lg border shadow border-emerald-600 p-2">
                    @php
                        $tituloSep = 'Sociedad-Noticia-Completa-soc150';
                    @endphp
                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                        <img class="h-48 w-full object-cover object-center rounded-lg" src="../img/soc/soc_gob1.svg"
                            alt="Imagen Nota 1">
                    </a>
                    <div class="py-4 px-6">
                        <h1 class="text-lg font-serif">
                            <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                KICILLOF RECLAMA EL CANAL MAGDALENA Y CRITICA LA HIDROVÍA DE MILEI
                            </a>
                            {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                        </h1>
                    </div>
                    <div class="pt-4 text-white font-light text-right">
                        <p>Publicado: 12/11/2024</p>
                    </div>
                </div>
                <!-- Nota 2 -->
                <div class="rounded-lg border shadow border-emerald-600 p-2">
                    @php
                    $tituloSep = 'Sociedad-Noticia-Completa-soc149';
                @endphp
                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                    <img class="h-48 w-full object-cover object-center rounded-lg" src="../img/soc/soc_loco.svg"
                        alt="Imagen Nota 1">
                </a>
                <div class="py-4 px-6">
                    <h1 class="text-lg font-serif">
                        <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                            MILEI PROMETE CRECIMIENTO A COSTA DEL ESTADO Y LOS TRABAJADORES
                        </a>
                        {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                    </h1>
                </div>
                <div class="pt-4 text-white font-light text-right">
                    <p>Publicado: 12/11/2024</p>
                </div>
                </div>
            </div>
        </div>
        <!-- Fecha -->
        <div class="flex flex-col sm:flex-row items-center justify-center pb-4 gap-4">
            {{-- <span class="inline-flex items-center px-4 py-2 text-sm bg-blue-500 text-white rounded-full shadow">
                <a href="">ADN POPULARES</a>
            </span> --}}
            <input type="text" id="website-admin"
                class="w-full sm:w-auto flex-1 min-w-0 text-sm text-center bg-white border border-gray-300 text-gray-700 placeholder-gray-400 rounded-full focus:ring-blue-500 focus:border-blue-500 shadow"
                value="{{ $now->format('d-m-Y') }}">
            {{-- <span class="inline-flex items-center px-4 py-2 text-sm bg-blue-500 text-white rounded-full shadow">
                <a href="">ADN POPULARES</a>
            </span> --}}
        </div>


        {{-- cuerpo --}}
        <div>
            <div class="bg-gray-900 rounded-lg shadow-lg mb-4">
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4 gap-4 rounded-lg border  shadow border-gray-600 p-2 bg-gray-800 text-white">





                        {{--  x4 --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-6">
                                <!-- Nota B-1 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                        $tituloSep = 'Deportes-Noticia-Completa-dep17';
                                    @endphp
                                    <a href="{{ route('deportesSep.show', $tituloSep) }}">
                                        <img class="h-48 w-full object-cover object-center rounded-lg"  src="{{ asset('../img/dep/dep_colapinto.svg') }}"
                                            alt="Imagen Nota 1">
                                    </a>
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('deportesSep.show', $tituloSep) }}">
                                                    ¿SE TERMINAN LAS OPORTUNIDADES PARA
                                                    COLAPINTO EN LA FÓRMULA I...?
                                                </a>
                                            </h1>
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 11/11/2024</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                        $tituloSep = 'Sociedad-Noticia-Completa-soc148';
                                    @endphp
                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                        <img class="h-48 w-full object-cover object-center rounded-lg" src="../img/soc/soc_correo.svg"
                                            alt="Imagen Nota 1">
                                    </a>
                                    <div class="py-4 px-6">
                                        <h1 class="text-lg font-serif">
                                            <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                GOBIERNO DESREGULA EL CORREO: ¿CAMBIO EN EL FUTURO DE LAS ELECCIONES?
                                            </a>
                                            {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h1>
                                    </div>
                                    <div class="pt-4 text-white font-light text-right">
                                        <p>Publicado: 11/11/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Politica-Noticia-Completa-pol94';
                                        @endphp
                                        <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="{{ asset('../img/pol/pol_acusa.svg') }}" alt="">
                                        </a>
                                            <h1 class="text-lg  font-serif">
                                                <a  class="p-2"href="{{ route('politicaSep.show', $tituloSep) }}">
                                                    CRISTINA ACUSA A MILEI DE BUSCAR UNA ARGENTINA COMO &quot;COLONIA AGROEXPORTADORA&quot;
                                                </a>
                                            </h1>
                                    </div>
                                    <div class="pt-4 text-white font-light text-right">
                                        <p class="p-2">Publicado: 10/11/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                        $tituloSep = 'Sociedad-Noticia-Completa-soc147';
                                    @endphp
                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                        <img class="h-48 w-full object-cover object-center rounded-lg" src="../img/soc/soc_colonia.svg"
                                            alt="Imagen Nota 1">
                                    </a>
                                    <div class="py-4 px-6">
                                        <h1 class="text-lg font-serif">
                                            <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                COLONIA HINOJO: ESCAPADA CULTURAL AL ​​PRIMER PUEBLO ALEMÁN DE ARGENTINA
                                            </a>
                                            {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h1>
                                    </div>
                                    <div class="pt-4 text-white font-light text-right">
                                        <p>Publicado: 10/11/2024</p>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        {{--  x4 --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-6">
                                <!-- Nota B-1 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                        <div class=" py-2 px-2 bg-gray-800">
                                            @php
                                            $tituloSep = 'Sociedad-Noticia-Completa-soc146';
                                        @endphp
                                        <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg" src="../img/soc/soc_inmobiliario.svg"
                                                alt="Imagen Nota 1">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    CONGRESO INMOBILIARIO 2024: UN ENCUENTRO CLAVE PARA EL SECTOR
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                            </h1>
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 09/11/2024</p>
                                        </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Internacionales-Noticia-Completa-int38';
                                                @endphp

                                                <a href="{{ route('interSepNew.show', $tituloSep) }}">
                                                    <img class="h-48 w-full object-cover object-center rounded-lg"
                                                        src="../img/int/int_egypto.svg" alt="Imagen Nota 1">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white pt-2">

                                                    <a href="{{ route('interSepNew.show', $tituloSep) }}">NUEVO MUSEO EGIPCIO ABRE SUS PUERTAS EN EL CAIRO</a>
                                                </h1>

                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4"> Publicado: 09/11/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                        <div class=" py-2 px-2 bg-gray-800">
                                            @php
                                            $tituloSep = 'Sociedad-Noticia-Completa-soc145';
                                        @endphp
                                        <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg" src="../img/soc/soc_clima.svg"
                                                alt="Imagen Nota 1">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                LA OMS ALERTA: EL CAMBIO CLIMÁTICO PUEDE SALVAR MILLONES DE VIDAS
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                            </h1>
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 08/11/2024</p>
                                        </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                        $tituloSep = 'Deportes-Noticia-Completa-dep16';
                                    @endphp
                                    <a href="{{ route('deportesSep.show', $tituloSep) }}">
                                        <img class="h-48 w-full object-cover object-center rounded-lg"  src="{{ asset('../img/dep/dep_celbla.svg') }}"
                                            alt="Imagen Nota 1">
                                    </a>
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('deportesSep.show', $tituloSep) }}">
                                                    ARGENTINA CERRARÁ EL AÑO CON DOS CLAVES FRENTE A PARAGUAY Y PERÚ
                                                </a>
                                            </h1>
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 08/11/2024</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </section>

                        {{-- de dos --}}
                        <section>
                                <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2  gap-4 py-4">
                                    {{-- Nota A-1 --}}
                                    <li class="rounded-lg  border shadow border-emerald-600">
                                        <div class=" py-2 px-2 bg-gray-800">
                                            <div class="pt-2 text-emerald-500">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Sociedad-Noticia-Completa-soc144';
                                                    @endphp
                                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                        <img class="h-48 w-full object-cover object-center rounded-lg"
                                                            src="../img/soc/soc_verdad.svg" alt="Imagen Nota 1">
                                                    </a>
                                                    <h1 class="text-lg font-serif animate-fade-right text-white pt-2">
                                                        <a href="{{ route('sociedadSep.show', $tituloSep) }}">DILLOM ENFRENTÓ A UN TROLL DE MILEI EN PLENO
                                                            VUELO</a>
                                                    </h1>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="font-light  text-right text-white bg-gray-800">
                                            <p class="p-4">Publicado: 07/11/2024</p>
                                        </div>
                                    </li>
                                    {{-- Nota A-2 --}}
                                    <li class="rounded-lg  border shadow border-emerald-600">
                                        <div class=" py-2 px-2 bg-gray-800">
                                            <div class="pt-2 text-emerald-500">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Internacionales-Noticia-Completa-int37';
                                                    @endphp

                                                    <a href="{{ route('interSepNew.show', $tituloSep) }}">
                                                        <img class="h-48 w-full object-cover object-center rounded-lg"
                                                            src="../img/int/int_puttin.svg" alt="Imagen Nota 1">
                                                    </a>
                                                    <h1 class="text-lg font-serif animate-fade-right text-white pt-2">

                                                        <a href="{{ route('interSepNew.show', $tituloSep) }}">RUSIA Y VENEZUELA REFUERZAN SU ALIANZA CONTRA LAS SANCIONES OCCIDENTALES </a>

                                                    </h1>

                                                </h2>
                                            </div>
                                        </div>
                                        <div class="font-light  text-right text-white bg-gray-800">
                                            <p class="p-4"> Publicado: 07/11/2024</p>
                                        </div>
                                    </li>
                                </ul>
                        </section>

                        {{--  x4 --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-6">
                                <!-- Nota B-1 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Legislatura-Noticia-Completa-leg66';
                                        @endphp
                                        <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="{{ asset('../img/leg/leg_ricardo.svg') }}" alt="">
                                        </a>
                                        <div class="p-2">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                                    JULIO RICARDO PERSONALIDAD DESTACADA DEL PERIODISMO DEPORTIVO ARGENTINO
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 06/11/2024</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Politica-Noticia-Completa-pol93';
                                        @endphp
                                        <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="{{ asset('../img/pol/pol_cristina.svg') }}" alt="">
                                        </a>
                                            <h1 class="text-lg  font-serif">
                                                <a  class="p-2"href="{{ route('politicaSep.show', $tituloSep) }}">
                                                    CRISTINA KIRCHNER, NUEVA PRESIDENTA DEL PJ
                                                </a>
                                            </h1>
                                    </div>
                                    <div class="pt-4 text-white font-light text-right">
                                        <p class="p-2">Publicado: 06/11/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                        <div class=" py-2 px-2 bg-gray-800">
                                            @php
                                                $tituloSep = 'Agenda-Feminista-Completa-fem26';
                                            @endphp
                                            <a href="{{ route('feministaSep.show', $tituloSep) }}">
                                                <img class="h-48 w-full object-cover object-center rounded-lg"
                                                    src="{{ asset('../img/fem/fem_red.svg') }}" alt="">
                                            </a>
                                                <h1 class="text-lg pt-2 font-serif">
                                                    <a href="{{ route('feministaSep.show', $tituloSep) }}">
                                                        PRESENTARON FEMINISMOS EN RED
                                                    </a>
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p class="p-2">Publicado: 05/11/2024</p>
                                        </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Legislatura-Noticia-Completa-leg65';
                                        @endphp
                                        <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="{{ asset('../img/leg/leg_castrilli.svg') }}" alt="">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                                    JAVIER CASTRILLI Y MARTÍN CABRALES SON NUEVAS PERSONALIDADES DESTACADAS DE LA CIUDAD
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 05/11/2024</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        {{--  x4 --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-6">
                                <!-- Nota B-1 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Sociedad-Noticia-Completa-soc143';
                                        @endphp
                                        <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="../img/soc/soc_bochorno.svg" alt="Imagen Nota 1">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    MILEI, EL SHOW MEDIÁTICO Y LA DESVIACIÓN DE LOS PROBLEMAS REALES
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                            </h1>
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p class="p-2">Publicado: 04/11/2024</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Sociedad-Noticia-Completa-soc142';
                                        @endphp
                                        <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="../img/soc/soc_gobernador.svg" alt="Imagen Nota 1">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    KICILLOF DENUNCIA LA SUSPENSIÓN DE OBRAS Y EXIGE RECURSOS A MILEI
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                            </h1>
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p class="p-2">Publicado: 04/11/2024</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Agenda-Feminista-Completa-fem25';
                                        @endphp
                                        <a href="{{ route('feministaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="{{ asset('../img/fem/fem_orgullo_24.svg') }}" alt="">
                                        </a>
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('feministaSep.show', $tituloSep) }}">
                                                    LA MARCHA DEL ORGULLO SE ALZA CONTRA EL GOBIERNO DE ULTRADERECHA
                                                </a>
                                    </div>
                                    <div class="pt-4 text-white font-light text-right">
                                        <p class="p-2">Publicado: 03/11/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600 ">
                                    <div class=" py-2 px-4">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Derechos-Humanos-Noticia-Completa-der39';
                                                @endphp
                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">
                                                    <img class="h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        src="{{ asset('../img/der/der_mirta.svg') }}" alt="">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('derechoSep.show', $tituloSep) }}">MURIÓ MIRTA BARAVALLE, UNA VIDA DE BÚSQUEDA Y DIGNIDAD
                                                    </a>
                                                </h1>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 03/11/2024</p>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        {{--  x4 --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-6">
                                <!-- Nota B-1 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Sociedad-Noticia-Completa-soc141';
                                        @endphp
                                        <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="../img/soc/soc_alfon.svg" alt="Imagen Nota 1">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    ALFONSÍN: &#39;LA DEMOCRACIA ES UNA ABERRACIÓN PARA EL PRESIDENTE&#39
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                            </h1>
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p class="p-2">Publicado: 02/11/2024</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Sociedad-Noticia-Completa-soc140';
                                        @endphp
                                        <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="../img/soc/soc_uni.svg" alt="Imagen Nota 1">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    ROBAN DOCUMENTOS EN NUEVO ATAQUE A LA UNIVERSIDAD DE LAS MADRES
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                            </h1>
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p class="p-2">Publicado: 02/11/2024</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Politica-Noticia-Completa-pol92';
                                        @endphp
                                        <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="{{ asset('../img/pol/pol_nafta.svg') }}" alt="">
                                        </a>
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                                    SUBE EL PRECIO DE LOS COMBUSTIBLES
                                                </a>
                                    </div>
                                    <div class="pt-4 text-white font-light text-right">
                                        <p class="p-2">Publicado: 01/11/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Politica-Noticia-Completa-pol91';
                                        @endphp
                                        <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="{{ asset('../img/pol/pol_gestion.svg') }}" alt="">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                                    EL 50% DE LOS ARGENTINOS RECHAZA LA GESTIÓN DE MILEI
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 01/11/2024</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        {{--  x4 --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-6">
                                <!-- Nota B-1 -->
                                <li class="rounded-lg  border shadow border-emerald-600 ">
                                    <div class=" py-2 px-4">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Derechos-Humanos-Noticia-Completa-der38';
                                                @endphp
                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">
                                                    <img class="h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        src="{{ asset('../img/der/der_laPerla.svg') }}" alt="">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('derechoSep.show', $tituloSep) }}">LAS PROVINCIAS
                                                        EXIGEN ACCIONES CONCRETAS AL GOBIERNO NACIONAL
                                                    </a>
                                                </h1>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 31/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Politica-Noticia-Completa-pol90';
                                        @endphp
                                        <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="{{ asset('../img/pol/pol_descarga.svg') }}" alt="">
                                        </a>
                                        <h1 class="text-lg font-serif animate-fade-right text-white">
                                            <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                                MILEI ECHA A MONDINO Y SE RADICALIZA
                                            </a>
                                            {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                    </div>
                                    <div class="pt-4 text-white font-light text-right">
                                        <p class="p-2">Publicado: 31/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Politica-Noticia-Completa-pol89';
                                        @endphp
                                        <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="{{ asset('../img/pol/pol_frenar.svg') }}" alt="">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                                    UN NUEVO ESPACIO PARA FRENAR A MILEI Y ELMACRISMO EN CABA
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 30/10/2024</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Sociedad-Noticia-Completa-soc139';
                                        @endphp
                                        <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="../img/soc/soc_ia.svg" alt="Imagen Nota 1">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    ¡BATALLA POR LA PROPIEDAD INTELECTUAL! 13.500
                                                    ARTISTAS ENFRENTAN A LA IA
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                            </h1>
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 30/10/2024</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>


                        {{-- videos --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2  gap-6 py-4">
                                <div>
                                    <article>

                                        <li class=" bg-white rounded-lg shadow  ">
                                            <article>
                                                <figure>
                                                    <a href="">
                                                        <img class="h-80 w-full "
                                                            src="{{ asset('../img/publi/Recurso_1.png') }}"
                                                            alt="">
                                                    </a>
                                                </figure>

                                            </article>
                                        </li>

                                        {{--   <figure>
                                            <iframe class="w-full aspect-video"
                                                src="https://www.youtube.com/embed/JSf5Zj3tlxU"
                                                title="YouTube video"frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </figure> --}}
                                    </article>
                                </div>
                                <div>
                                    <article>
                                        <iframe class="w-full aspect-video"
                                            src="https://www.youtube.com/embed/HWemIM7ML-E"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </article>
                                </div>
                            </ul>
                        </section>
                    </div>
                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" mt-4 col-span-6">

                                <a href="" class="object-cover object-center h-35  " width="200">
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="200">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>
                                <br>
                                <div class="flex-col max-w-sm rounded-lg shado bg-gray-800 border-gray-700">
                                    <figure>
                                        <a href="">
                                            <img class=" w-full object-cover object-center"
                                                src="{{ asset('../img/cade.svg') }}" alt="">
                                        </a>
                                    </figure>
                                    <p class="mb-2  font-bold pl-2  text-left text-white">
                                        Inscribite en los Talleres a la Gorra de Coop. CaDe
                                    </p>
                                    <div class="pt-2 pb-2">
                                        <h2>
                                            <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                href="https://forms.gle/NLVJk6j8tboWQCV4A">Completá el
                                                formulario</a>
                                        </h2>
                                    </div>
                                </div>
                                {{-- <article>
                                    <iframe class="w-full aspect-video"
                                        src="https://www.youtube.com/embed/m_sOinzZ1Ts?si=dtCWexPiSDsVIDLe"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </article> --}}
                                <br>

                                <div class="flex-col max-w-sm rounded-lg shado bg-gray-800 border-gray-700">
                                    <figure>
                                        <a href="">
                                            <img class=" w-full object-cover object-center"
                                                src="{{ asset('../img/publi/laturba.svg') }}" alt="">
                                        </a>
                                    </figure>
                                    {{-- <p class="mb-2  font-bold pl-2  text-left text-white">
                                        Inscribite en los Talleres a la Gorra de Coop. CaDe
                                    </p> --}}
                                    <div class="pt-2 pb-2">
                                        <h2>
                                            <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                href="https://radiolaturba.com.ar/">radiolaturba.com.ar</a>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <a href="" class="object-cover object-center h-35  " width="200">
                                    <img class="pb-3" src="{{ asset('img/publi/karate.jpeg') }}" alt="">
                                </a>
                                <br>
                                <a href="" class="object-cover object-center " width="200">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
                                </a>
                                <br>
                                </article>
                                <div id="app">
                                    <h2 class="font-semibold text-center mt-4 mb-2">Internacionales</h2>
                                    <div v-for="item in info">
                                        <div class="flex-col pb-3">
                                            <div
                                                class="flex-col max-w-sm    rounded-lg shadow bg-gray-800 border border-gray-700">
                                                <a href="#">
                                                    <img class="rounded-t-lg"
                                                        :src="'https://www.dailymotion.com/thumbnail/video/' + item.id"
                                                        alt="" />
                                                </a>
                                                <div class="p-5">
                                                    <a href="#">
                                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
                                                            @{{ item.title }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        {{-- gif --}}
        <div class="bg-gray-900 rounded-lg shadow-lg mb-4">
            <figure>
                <a href="">
                    <img class="w-full object-cover object-center"
                        src="{{ asset('../img/Mantener viva la memoria_difu.gif') }}" alt="">
                </a>
            </figure>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('.your-class').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                responsive: [{
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            duration: 0.25
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            duration: 0.25
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            duration: 0.25
                        }
                    },
                    {
                        breakpoint: 1280,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            duration: 0.25
                        }
                    }
                ]
            });
        });
    </script>

    @push('script')
        <script>
            Livewire.on('glider', function(id) {
                new Glider(document.querySelector('.glider-' + id), {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                    draggable: true,
                    autoplay: 2000,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [{
                            breakpoint: 640,
                            settings: {
                                slidesToScroll: 2.5,
                                slidesToShow: 2,
                                duration: 0.25
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToScroll: 3.5,
                                slidesToShow: 3,
                                duration: 0.25
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToScroll: 4.5,
                                slidesToShow: 4,
                                duration: 0.25
                            }
                        },
                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToScroll: 5.5,
                                slidesToShow: 5,
                                duration: 0.25
                            }
                        }
                    ]
                });
            });
        </script>
    @endpush
    {{-- aca arrancamos vue --}}
    @push('js')
        <script>
            new Vue({
                el: '#app',
                data: {
                    info: [],
                    clima: [],
                },
                mounted() {
                    axios.get("https://api.dailymotion.com/videos?channel=news&limit=4")
                        .then(response => {
                            this.info = response.data.list
                        });
                    axios.get(
                            "http://api.openweathermap.org/geo/1.0/direct?q=${Buenos%Aires},${AR}&limit=1&appid=${3d50320e2090d2d6ed8b11dbe5bab0a5}"
                        )
                        .then(response => {
                            this.clima = response.name
                        });
                },
            });
        </script>
    @endpush
</x-app-layout>
