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
                        src="https://www.youtube.com/embed/aTjj5MNhHt0?si=7QqhvGfkNQeypJsR" title="YouTube video player"
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
                        $tituloSep = 'Deportes-Noticia-Completa-dep15';
                    @endphp
                    <a href="{{ route('deportesSep.show', $tituloSep) }}">
                        <img class="h-48 w-full object-cover object-center rounded-lg"
                            src="../img/dep/dep_dibu.svg" alt="Imagen Nota 1">
                    </a>
                    <div class="py-4 px-6">
                        <h1 class="text-lg font-serif">
                            <a href="{{ route('deportesSep.show', $tituloSep) }}">
                                DIBU MARTÍNEZ GANA EL PREMIO YASHIN Y SE
                                AFIRMA COMO MEJOR ARQUERO DEL MUNDO
                            </a>
                            {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                        </h1>
                    </div>
                    <div class="pt-4 text-white font-light text-right">
                        <p>Publicado: 28/10/2024</p>
                    </div>
                </div>
                <!-- Nota 2 -->
                <div class="rounded-lg border shadow border-emerald-600 p-2">
                    @php
                        $tituloSep = 'Internacionales-Noticia-Completa-int36';
                    @endphp
                    <a href="{{ route('interSepNew.show', $tituloSep) }}">
                        <img class="h-48 w-full object-cover object-center rounded-lg" src="../img/int/int_evo.svg"
                            alt="Imagen Nota 1">
                    </a>
                    <div class="py-4 px-6">
                        <h1 class="text-lg font-serif">
                            <a href="{{ route('interSepNew.show', $tituloSep) }}">
                                EVO MORALES SUFRE ATAQUE ARMADO: &quot;QUIEREN MI DESAPARICIÓN FÍSICA&quot;
                            </a>
                            {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                        </h1>
                    </div>
                    <div class="pt-4 text-white font-light text-right">
                        <p>Publicado: 2/10/2024</p>
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
                                <li class="rounded-lg  border shadow border-emerald-600 ">
                                    <div class=" py-2 px-4">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Politica-Noticia-Completa-pol88';
                                                @endphp
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                                    <img class="h-56  w-full object-cover rounded-lg border-gray-900 "
                                                    src="{{ asset('../img/pol/pol_malvinas.svg') }}" alt="">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('politicaSep.show', $tituloSep) }}">EL GOBIERNO DE MILEI LLAMA ‘FALKLANDS’ A LAS MALVINAS, UN ERROR QUE ESCONDE UNA TRAICION 

                                                    </a>
                                                    {{-- <p class="font-light text-gray-500">Por Jorge Rachid --}}
                                                    </p>
                                                </h1>
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 25/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Internacionales-Noticia-Completa-int35';
                                                @endphp
                                                <a href="{{ route('interSepNew.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt=""
                                                        src="{{ asset('../img/int/int_eeuu.svg') }}">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('interSepNew.show', $tituloSep) }}">ELECCIÓN PRESIDENCIAL CON FINAL ABIERTO ENTRE TRUMP Y HARRIS 
                                                    </a>
                                                </h1>
                                                <a href="{{ route('interSepNew.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 27/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Legislatura-Noticia-Completa-leg63';
                                        @endphp
                                        <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                            src="{{ asset('../img/leg/leg_digital.svg') }}"
                                            alt="">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                                    LOS DESAFÍOS DE LA DEMOCRACIA EN LA ERA DIGITAL: JORNADA EN LA LEGISLATURA PORTEÑA  
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 26/10/2024</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                        $tituloSep = 'Sociedad-Noticia-Completa-soc137';
                                    @endphp
                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                        <img class="h-48 w-full object-cover object-center rounded-lg" src="{{ asset('../img/soc/soc_grandes.svg') }}" alt="">
                                    </a>
                                    <div class="py-4 px-6">
                                        <h1 class="text-lg font-serif">
                                            <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                GRANDES CORPORACIONES DUPLICAN RENTABILIDAD MIENTRAS SE DERRUMBAN INGRESOS POPULARES 
                                            </a>
                                            {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h1>
                                    </div>
                                    <div class="pt-4 text-white font-light text-right">
                                        <p>Publicado: 26/10/2024</p>
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
                                                    $tituloSep = 'Agenda-Feminista-Completa-fem24';
                                                @endphp
                                                <a href="{{ route('feministaSep.show', $tituloSep) }}">
                                                    <img class="h-56  w-full object-cover rounded-lg border-gray-900 "
                                                    src="{{ asset('../img/fem/fem_acciones.svg') }}" alt="">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('feministaSep.show', $tituloSep) }}">LAS PROVINCIAS EXIGEN ACCIONES CONCRETAS AL GOBIERNO NACIONAL

                                                    </a>
                                                    {{-- <p class="font-light text-gray-500">Por Jorge Rachid --}}
                                                    </p>
                                                </h1>
                                                <a href="{{ route('feministaSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 25/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Derechos-Humanos-Noticia-Completa-der37';
                                                @endphp
                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1"
                                                        src="{{ asset('../img/der/der_violencia.svg') }}">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('derechoSep.show', $tituloSep) }}">VIOLENCIA VERBAL DEL PRESIDENTE: REPUDIO DE
                                                        ORGANISMOS DE DDHH
                                                    </a>
                                                </h1>
                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 25/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Economia-Noticia-Completa-eco14';
                                        @endphp
                                        <a href="{{ route('economiaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                            src="{{ asset('../img/eco/eco_resesion.svg') }}"
                                            alt="">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('economiaSep.show', $tituloSep) }}">
                                                    LA RECESIÓN DE MILEI: UN HURACÁN QUE NO SE DISIPA
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 24/10/2024</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                        $tituloSep = 'Economia-Noticia-Completa-eco13';
                                    @endphp
                                    <a href="{{ route('economiaSep.show', $tituloSep) }}">
                                        <img class="h-48 w-full object-cover object-center rounded-lg" src="{{ asset('../img/eco/eco_fmiAposto.svg') }}" alt="">
                                    </a>
                                    <div class="py-4 px-6">
                                        <h1 class="text-lg font-serif">
                                            <a href="{{ route('economiaSep.show', $tituloSep) }}">
                                                FMI APOSTÓ POR UNA INFLACIÓN DEL 45% EN 2025 
                                            </a>
                                            {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h1>
                                    </div>
                                    <div class="pt-4 text-white font-light text-right">
                                        <p>Publicado: 24/10/2024</p>
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
                                                    $tituloSep = 'Derechos-Humanos-Noticia-Completa-der36';
                                                @endphp
                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">
                                                    <img class="h-56  w-full object-cover rounded-lg border-gray-900 "
                                                    src="{{ asset('../img/der/der_40anios.svg') }}" alt="">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('derechoSep.show', $tituloSep) }}">40 AÑOS DEL ÍNDICE DE ABUELIDAD: LA LUCHA POR LOS NIETOS QUE FALTAN </a>
                                                    {{-- <p class="font-light text-gray-500">Por Jorge Rachid --}}
                                                    </p>
                                                </h1>
                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 23/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Sociedad-Noticia-Completa-soc136';
                                                @endphp
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1"
                                                        src="{{ asset('../img/soc/soc_arsat.svg') }}">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">EL GOBIERNO PRIVATIZA FRECUENCIAS Y PONE EN RIESGO EL FUTURO DE ARSAT 
                                                    </a>
                                                </h1>
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 23/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Legislatura-Noticia-Completa-leg62';
                                        @endphp
                                        <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                            src="{{ asset('../img/leg/leg_LuchaCancer.svg') }}"
                                            alt="">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                                    LEGISLATURA IMPULSA LA LUCHA CONTRA EL
                                                    CÁNCER DE MAMA
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 22/10/2024</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                        $tituloSep = 'Derechos-Humanos-Noticia-Completa-der35';
                                    @endphp
                                    <a href="{{ route('derechoSep.show', $tituloSep) }}">
                                        <img class="h-48 w-full object-cover object-center rounded-lg" src="{{ asset('../img/der/der_AbuelasSeguir.svg') }}" alt="">
                                    </a>
                                    <div class="py-4 px-6">
                                        <h1 class="text-lg font-serif">
                                            <a href="{{ route('derechoSep.show', $tituloSep) }}">
                                                UN ABRAZO PARA ABUELAS: CONVOCAN A VISIBILIZAR LA BÚSQUEDA DE LOS NIETOS DESAPARECIDOS 
                                            </a>
                                            {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h1>
                                    </div>
                                    <div class="pt-4 text-white font-light text-right">
                                        <p>Publicado: 22/10/2024</p>
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
                                                    $tituloSep = 'Politica-Noticia-Completa-pol87';
                                                @endphp
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                                    <img class="h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        src="{{ asset('../img/pol/pol_AlfonsinUnidad.svg') }}" alt="">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('politicaSep.show', $tituloSep) }}">ALFONSÍN Y SARAVIA RECLAMAN UNIDAD
                                                        PROGRESISTA CONTRA LA CRISIS</a>
                                                    {{-- <p class="font-light text-gray-500">Por Jorge Rachid --}}
                                                    </p>
                                                </h1>
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 21/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Politica-Noticia-Completa-pol86';
                                                @endphp
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1"
                                                        src="{{ asset('../img/pol/pol_DiscursoOdio.svg') }}">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('politicaSep.show', $tituloSep) }}">MILEI AMENAZA A LA DEMOCRACIA CON SU DISCURSO DE ODIO
                                                    </a>
                                                </h1>
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 21/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                            $tituloSep = 'Sociedad-Noticia-Completa-soc135';
                                        @endphp
                                        <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                src="../img/soc/soc_mileiCrisis.svg" alt="Imagen Nota 1">
                                        </a>
                                        <div class="py-4 px-6">
                                            <h1 class="text-lg font-serif">
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    MILEI, UNA CRISIS QUE AFECTA AL 73,3% DE LOS
                                                    ARGENTINOS
                                                </a>
                                                {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </div>
                                        <div class="pt-4 text-white font-light text-right">
                                            <p>Publicado: 20/10/2024</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        @php
                                        $tituloSep = 'Legislatura-Noticia-Completa-leg61';
                                    @endphp
                                    <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                        <img class="h-48 w-full object-cover object-center rounded-lg" src="../img/leg/leg_afa.svg"
                                            alt="Imagen Nota 1">
                                    </a>
                                    <div class="py-4 px-6">
                                        <h1 class="text-lg font-serif">
                                            <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                                LA LEGISLATURA ENTREGÓ UN BENEPLÁCITO A LA
                                                AFA
                                            </a>
                                            {{--   <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h1>
                                    </div>
                                    <div class="pt-4 text-white font-light text-right">
                                        <p>Publicado: 19/10/2024</p>
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
                                                    $tituloSep = 'Sociedad-Noticia-Completa-soc134';
                                                @endphp
                                                <article>
                                                    <iframe class="w-full aspect-video"
                                                        src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin"
                                                        allowfullscreen></iframe>

                                                </article>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">EL OJO QUE
                                                        ESPIA: EL ESPIONAJE EN LA HISTORIA
                                                        ARG.</a>
                                                </h1>
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 19/10/2024</p>
                                    </div>
                                </li>
                                {{-- Nota A-2 --}}
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Sociedad-Noticia-Completa-soc133';
                                                @endphp

                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1"src="{{ asset('../img/soc/soc_liam1.svg') }}">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">

                                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">MURIÓ LIAM
                                                        PAYNE EN UN HOTEL DE PALERMO </a>
                                                    </p>
                                                </h1>

                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4"> Publicado: 18/10/2024</p>
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
                                                    $tituloSep = 'Internacionales-Noticia-Completa-int34';
                                                @endphp
                                                <a href="{{ route('interSepNew.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1"src="../img/int/int_orsi.svg">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('interSepNew.show', $tituloSep) }}">ORSI, A UN
                                                        PASO DE LA VICTORIA EN PRIMERA
                                                        VUELTA</a>
                                                </h1>
                                                <a href="{{ route('interSepNew.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 18/10/2024</p>
                                    </div>
                                </li>
                                {{-- Nota A-2 --}}
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Gremiales-Noticia-Completa-gre53';
                                                @endphp

                                                <a href="{{ route('gremialSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1"src="{{ asset('../img/grem/grem_manrrique.svg') }}">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">

                                                    <a href="{{ route('gremialSep.show', $tituloSep) }}">MANRIQUE
                                                        RENUNCIA A LA CGT Y DENUNCIA DIVISIÓN INTERNA </a>
                                                    </p>
                                                </h1>

                                                <a href="{{ route('gremialSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4"> Publicado: 17/10/2024</p>
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
                                                    $tituloSep = 'Politica-Noticia-Completa-pol85';
                                                @endphp
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                                    <img class="h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        src="{{ asset('../img/pol/pol_lealtad.svg') }}"
                                                        alt="">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('politicaSep.show', $tituloSep) }}">REAFIRMANDO
                                                        LA LEALTAD: LA NECESIDAD DE UNIR AL PERONISMO</a>
                                                    {{-- <p class="font-light text-gray-500">Por Jorge Rachid --}}
                                                    </p>
                                                </h1>
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 17/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Politica-Noticia-Completa-pol84';
                                                @endphp
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1"
                                                        src="{{ asset('../img/pol/pol_cgtManifiesto.svg') }}">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('politicaSep.show', $tituloSep) }}">CGT SE
                                                        MANIFESTÓ POR UNA NUEVA CONDUCCIÓN
                                                        EN EL PJ</a>
                                                </h1>
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 16/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Derechos-Humanos-Noticia-Completa-der34';
                                                @endphp
                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">
                                                    <img class="h-48 w-full object-cover object-center rounded-lg"
                                                        src="{{ asset('../img/der/der_condena.svg') }}"
                                                        alt="Imagen Nota 1">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('derechoSep.show', $tituloSep) }}">
                                                        CONFIRMAN CONDENA PARA EL TIGRE ACOSTA
                                                    </a>
                                                </h1>
                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 16/10/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Sociedad-Noticia-Completa-soc132';
                                                @endphp
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    <img class="h-48 w-full object-cover object-center rounded-lg"
                                                        src="../img/soc/soc_la_inidad_eman.svg" alt="Imagen Nota 1">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                        LA UNIDAD EMANCIPADORA ANTE EL FASCISMO EN ARGENTINA
                                                    </a>
                                                </h1>
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 15/10/2024</p>
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
                                                    $tituloSep = 'Internacionales-Noticia-Completa-int33';
                                                @endphp
                                                <a href="{{ route('interSepNew.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1"src="../img/int/int_china_rodea.svg">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('interSepNew.show', $tituloSep) }}">CHINA RODEA
                                                        TAIWÁN CON UNA DEMOSTRACIÓN MILITAR MASIVAL</a>
                                                </h1>
                                                <a href="{{ route('interSepNew.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4">Publicado: 15/10/2024</p>
                                    </div>
                                </li>
                                {{-- Nota A-2 --}}
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Legislatura-Noticia-Completa-leg60';
                                                @endphp

                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1"src="{{ asset('../img/leg/leg_reu_com_presu.svg') }}">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">

                                                    <a href="{{ route('legislaturaSep.show', $tituloSep) }}">REUNIÓN
                                                        DE
                                                        LAS COMISIONES DE PRESUPUESTO, CULTURA Y DESCENTRALIZACIÓN </a>
                                                    </p>
                                                </h1>

                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p class="p-4"> Publicado: 14/10/2024</p>
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
                                                            src="{{ asset('../img/publi/Recurso 1.png') }}"
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
                    axios.get("https://api.dailymotion.com/videos?channel=news&limit=6")
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
