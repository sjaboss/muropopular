<x-app-layout>



    <div class="container ">



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

        <div class="bg-white rounded-lg shadow-lg mb-4">
            <p></p>
        </div>
        <!-- Carousel -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="grid gap-4">
                <div id="custom-controls-gallery" class="relative w-full " data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-96 overflow-hidden rounded-lg md:h-96">

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <article>
                                <figure>
                                    @php
                                        $tituloSep = 'Gremiales-Noticia-Completa-gre18#gre18';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('gremialSep.show', $tituloSep) }}">
                                        <img class="object-cover absolute block w-full  h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="../img/grem/grem_cgtpario.svg" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a href="{{ route('gremialSep.show', $tituloSep) }}">CGT: DEFENSA FIRME DE LOS TRABAJADORES FRENTE A POLÍTICAS LABORALES DEL GOBIERNO
                                                </a>
                                                {{--     <p class="font-light text-gray-500"> Nota: Del Tomate A Sumido  </p> --}}
                                                {{--  <p class="font-light mb-10 text-right text-gray-500">Publicado: 27/11/2023
                                                </p> --}}
                                            </h2>

                                        </div>
                                </figure>
                            </article>
                        </div>

                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <article>
                                <figure>
                                    @php
                                        $tituloSep = 'Legislatura-Noticia-Completa-leg21#leg21';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                        <img class="object-cover absolute block w-full  h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="../img/leg/leg_piel2.svg" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">SALVÁ TU PIEL, DE INTERÉS PARA LA CIUDAD 
                                                </a>
                                                <p class="font-light text-gray-500"></p>
                                                {{--  <p class="font-light mb-10 text-right text-gray-500">Publicado: 27/11/2023
                                                </p> --}}
                                            </h2>

                                        </div>
                                </figure>
                            </article>
                        </div>
                        <!-- Item 3 -->

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <article>
                                <figure>
                                    @php
                                        $tituloDer = 'Cultura-Noticia-Completa-cul16#cul16';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('culturaSep.show', $tituloDer) }}">
                                        <img class="object-cover absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="{{ asset('../img/cul/cul_sandro.svg') }}" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a h href="{{ route('culturaSep.show', $tituloDer) }}">FERNANDO SAMARTIN, HOMENAJE A SANDRO
                                                </a>
                                            </h2>
                                            {{-- <p class="font-light  text-right text-gray-500">Publicado: 02/10/2023</p> --}}
                                        </div>
                                </figure>


                            </article>
                        </div>
                    </div>
                </div>
            </div>

            {{-- dos notas con carrusel --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <figure>
                        @php
                            $tituloSep = 'Legislatura-Noticia-Completa-leg22#leg22';
                        @endphp
                        <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                            href="{{ route('legislaturaSep.show', $tituloSep) }}">
                            <img class="h-48 w-full object-cover object-center"
                                src="{{ asset('../img/leg/leg_ines.svg') }}" alt="">
                        </a>
                    </figure>
                    <div class=" py-4 px-6">
                        <h1 class="text-lg font-serif ">
                            <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                LA LEGISLADORA INÉS PARRY PRESENTÓ PROYECTO QUE EXPRESA EXTREMA PREOCUPACIÓN POR EL AJUSTE PRESUPUESTARIO EN LAS UNIVERSIDADES NACIONALES
                            </a>
                        </h1>
                        <p class="font-light  text-gray-500"></p>
                        <div class="pt-4">
                            <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                        </div>

                    </div>
                </div>

                <div>
                    <figure>
                        @php
                            $tituloSep = 'Sociedad-Noticia-Completa-soc26#soc26';
                        @endphp
                        <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                            href="{{ route('sociedadSep.show', $tituloSep) }}">
                            <img class="h-48 w-full object-cover object-center"
                                src="{{ asset('../img/soc/soc_telam1.svg') }}" alt="">
                        </a>
                    </figure>
                    <div class=" py-4 px-6">
                        <h1 class="text-lg font-serif ">
                            <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                EL SILENCIAMIENTO DE TÉLAM: UN GOLPE A LA LIBERTAD DE PRENSA
                            </a>
                            <p class="font-light text-gray-500">Por Gustavo Cano
                            </p>
                        </h1>
                        <p class="font-light  text-gray-500"></p>
                        <div class="pt-4">
                            <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- fecha --}}
        <div class="flex pb-2">
            <span
                class="inline-flex items-center text-sm
        text-gray-900
        bg-gray-200 
            border border-r-0
            border-gray-300 
            rounded-l-md
            dark:bg-gray-600
            dark:text-gray-400
                dark:border-gray-600">
                <a href="">ADN POPULARES</a>
            </span>
            <input type="text" id="website-admin"
                class="rounded-none 
            bg-gray-50 border
            border-gray-300
            text-gray-900
            focus:ring-blue-500
            focus:border-blue-500
                block flex-1 min-w-0 w-full text-sm   text-center
            dark:bg-gray-700
            dark:border-gray-600
            dark:placeholder-gray-400
            dark:text-gray-900
            dark:focus:ring-blue-500
            dark:focus:border-blue-500"
                value="{{ $now->format('d-m-Y') }}">
            <span
                class="inline-flex items-center 
                text-sm
            text-gray-900
            bg-gray-200 
                border border-l-0 
                border-gray-300 
                rounded-r-md
                dark:bg-gray-600
                    dark:text-gray-400
                    dark:border-gray-600">
                <a href="">ADN POPULARES</a>
            </span>
        </div>

        {{-- cuerpo --}}
        <div>
            <div class="bg-white rounded-lg shadow-lg mb-4">

                {{-- notas --}}
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        {{-- primera linea de noticias --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2  gap-6 py-4">
                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">

                                                <img class=" h-56  w-full object-cover" src="../img/grem/grem_noe1.svg">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif animate-fade-right ">
                                                <a href="">
                                                    <a href="">LAS TRABAJADORAS Y LOS TRABAJADORES FUIMOS, SOMOS Y SEREMOS QUIENES GARANTIZAMOS LA DEMOCRACIA</a>
                                                    {{-- <p class="font-light text-gray-500">Por Gustavo Cano
                                                    </p> --}}
                                                </a>
                                            </h1>
                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Gremiales-Noticia-Completa-gre19#gre19';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('gremialSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">

                                                <img class=" h-56 w-full object-cover"
                                                    src="{{ asset('../img/soc/soc_jorge.svg') }}">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    <a href=""> ARGENTINA: DOS MODELOS EN PUGNA</a>
                                                </a>
                                                {{-- <p class="font-light text-gray-500">Por Gustavo Cano
                                                </p> --}}
                                            </h1>

                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Sociedad-Noticia-Completa-soc27#soc27';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                    </article>
                                </li>
                            </ul>
                        </section>

                        {{-- segunda linea de noticias --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-6 py-4">

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48 w-full object-cover object-center"
                                                    src="{{ asset('../img/pol/pol_pla.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    ROMINA DEL PLÁ: "RECHAZAMOS EL DNU Y LUCHAREMOS HASTA DERROTARLO"
                                                </a>
                                            </h1>

                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Politica-Noticia-Completa-pol48#pol48';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>

                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/02/2024</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48  w-full object-cover object-center"
                                                    src="{{ asset('../img/soc/soc_gabo1.svg') }}"alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    CARTA ABIERTA DE GABO RUGIERO</a>
                                                {{-- <p class="font-light text-gray-500">Por Gustavo Cano
                                                </p> --}}
                                            </h1>
                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Sociedad-Noticia-Completa-soc25#soc25';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/02/2024</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48  w-full object-cover object-center"
                                                    src="{{ asset('../img/cul/cul_paja1.svg') }}"alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    EL EQUIPO DE "PAJARITA" SE REÚNE EN EL TEATRO DEL PUEBLO PARA PRESENTAR UNA OBRA IMPACTANTE
                                                </a>
                                            </h1>
                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Cultura-Noticia-Completa-cul14#cul14';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('culturaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/02/2024</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">

                                                <img class=" h-56  w-full object-cover" src="../img/soc/soc_dolar.svg">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif animate-fade-right ">
                                                <a href="">
                                                    <a href="">DOLARIZACIÓN: EL ENGAÑO QUE BENEFICIA A LOS PODEROSOS Y CONDENA A LOS TRABAJADORES</a>
                                                    <p class="font-light text-gray-500">Por Gustavo Cano
                                                    </p>
                                                </a>
                                            </h1>
                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Sociedad-Noticia-Completa-soc23#soc23';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 15/02/2024</p>
                                    </article>
                                </li>


                            </ul>
                        </section>

                        {{-- tercera linea de noticias --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2  gap-6 py-4">



                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">

                                                <img class=" h-56  w-full object-cover" src="../img/pol/pol_pulti.svg">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif animate-fade-right ">
                                                <a href="">
                                                    <a href="">PULTI PROPONE FRENAR EL DESFINANCIAMIENTO EN ARGENTINA</a>
                                                    {{-- <p class="font-light text-gray-500">Por Gustavo Cano
                                                    </p> --}}
                                                </a>
                                            </h1>
                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Politica-Noticia-Completa-pol47#pol47';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/02/2024</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">

                                                <img class=" h-56 w-full object-cover"
                                                    src="{{ asset('../img/leg/leg_audi1.svg') }}">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    <a href="">AUDIENCIA PÚBLICA EN LA LEGISLATURA DE LA CIUDAD POR DESIGNACIÓN DE AUTORIDADES CLAVE</a>
                                                </a>
                                                {{-- <p class="font-light text-gray-500">Por Gustavo Cano
                                                </p> --}}
                                            </h1>

                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Legislatura-Noticia-Completa-leg19#leg19';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('legislaturaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/02/2024</p>
                                    </article>
                                </li
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

                        {{-- cuarta linea de noticias --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-6 py-4">
                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48 w-full object-cover object-center"
                                                    src="{{ asset('../img/soc/soc_vuelo1.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    ¡VUELOS SECRETOS PONEN EN JAQUE LA SOBERANÍA!
                                                </a>
                                            </h1>

                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Sociedad-Noticia-Completa-soc24#soc24';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>

                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 15/02/2024</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48  w-full object-cover object-center"
                                                    src="{{ asset('../img/cul/cul_analia1.svg') }}"alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    ANALÍA COBAS PRESENTA SU PRIMER LIBRO EN LA FERIA DE AGRONOMÍA</a>
                                                <p class="font-light text-gray-500">Por Gustavo Cano
                                                </p>
                                            </h1>
                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Cultura-Noticia-Completa-cul13#cul13';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('culturaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 15/02/2024</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48  w-full object-cover object-center"
                                                    src="{{ asset('../img/dep/dep_finalcopa.svg') }}"alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    BUENOS AIRES SERÁ LA SEDE DE LA FINAL DE LA COPA LIBERTADORES 2024
                                                </a>
                                            </h1>
                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Deportes-Noticia-Completa-dep7#dep7';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('deportesSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 15/02/2024</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48  w-full object-cover object-center"
                                                    src="{{ asset('../img/soc/soc_necesita.svg') }}"alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    “NECESITA UN MEDICAMENTO PARA NO MORIR”: PIDE AYUDA ANTE LA
                                                    INDIFERENCIA DEL ESTADO</a>
                                                {{-- <p class="font-light text-gray-500">Por Gustavo Cano --}}
                                                </p>
                                            </h1>
                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Sociedad-Noticia-Completa-soc20#soc20';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/02/2024</p>
                                    </article>
                                </li>
                            </ul>
                        </section>
                    </div>

                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" mt-4 col-span-6">

                                <a href="" class="object-cover object-center h-35  " width="200">
                                    <img class="pb-3" src="{{ asset('img/publi/Recurso 1.png') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="200">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="200">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
                                </a>


{{-- 
                                <h2 class="font-semibold text-center mt-4 mb-2">Notas de Opinión</h2>


                                <article>
                                    <div
                                        class="flex-col max-w-sm   rounded-lg shadow bg-gray-800 border border-gray-700">
                                        <figure>
                                            <a href="">
                                                <img class="rounded-t-lg object-cover object-center h-35 "
                                                    src="{{ asset('img/der/izquier-3_der_corbatas_2.svg') }}"
                                                    alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <p class="mb-2  font-bold pl-2  text-left text-white">
                                            LA NOCHE DE LAS CORBATAS Y LA ACTUALIDAD DE SUS MOTIVOS

                                        </p>
                                        <p class="font-light text-gray-500"> Por: Eduardo García</p>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/07/2023</p>
                                        <div class="">
                                            <h2>
                                                @php
                                                    $tituloDer = 'Derechos-Humanos-Noticia-Completa-der5#der5';
                                                @endphp
                                                <a class="text-emerald-700 pl-4 font-semibold hover:text-emerald-400 hover:underline"
                                                    href="{{ route('derechoSep.show', $tituloDer) }}">Nota
                                                    completa.. </a>
                                            </h2>
                                            <br>
                                        </div>
                                    </div> --}}



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
                                    <br>
                                    <a href="" class="object-cover object-center h-35  " width="200">
                                        <img class="pb-3" src="{{ asset('img/publi/karate.jpeg') }}" alt="">
                                    </a>

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
        <div class="bg-white rounded-lg shadow-lg mb-4">

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


                    axios.get("https://api.dailymotion.com/videos?channel=news&limit=1")
                        .then(response => {
                            this.info = response.data.list
                        });

                    /*    axios.get( */
                    /*      "https://api.weatherbit.io/v2.0/current?lat=35.7796&lon=-78.6382&key=f2207d043ea74a359ff232a1d03d0c72&include=minutely"
                     )*/
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
