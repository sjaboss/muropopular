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
                                        $tituloSep = 'Politica-Noticia-Completa-pol36#pol36';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('politicaSep.show', $tituloSep) }}">
                                        <img class="object-cover absolute block w-full  h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="../img/pol/pol_locura.svg" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}"> Detrás de la locura de Milei puede haber “Gato encerrado”
                                                </a>
                                                <p class="font-light text-gray-500"> Nota: Del Tomate A Sumido  </p>
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
                                        $tituloSep = 'Politica-Noticia-Completa-pol37#pol37';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('politicaSep.show', $tituloSep) }}">
                                        <img class="object-cover absolute block w-full  h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="../img/pol/pol_cucaracha.svg" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}">LA CUCARACHA DE MILEI
                                                </a>
                                                <p class="font-light text-gray-500">Nota: de Oscar “el Chino” Martínez Zemborain   </p>
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
                                          $tituloDer = 'Derechos-Humanos-Noticia-Completa-der11#der11';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                    href="{{ route('derechoSep.show', $tituloDer) }}">
                                        <img class="object-cover absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="../img/der/der_ley.svg" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a  href="{{ route('derechoSep.show', $tituloDer) }}">Presentación del Proyecto de Ley “Ley Antinegacionista por los 40 años de democracia Dictadura Nunca Mas” </a>
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
                            $tituloSep = 'Sociedad-Noticia-Completa-soc17#soc17';
                        @endphp
                        <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                            href="{{ route('sociedadSep.show', $tituloSep) }}">
                            <img class="h-48 w-full object-cover object-center"
                                src="{{ asset('../img/soc/soc_vales.svg') }}" alt="">
                        </a>
                    </figure>
                    <div class=" py-4 px-6">
                        <h1 class="text-lg font-serif ">
                            <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                ESTUDIANTES SE MOVILIZAN CONTRA LOS VOUCHERS DE MILEI
                            </a>
                        </h1>
                        <p class="font-light  text-gray-500"></p>
                        <div class="pt-4">
                            <p class="font-light  text-right text-gray-500">Publicado: 10/11/2023</p>
                        </div>

                    </div>
                </div>

                <div>
                    <figure>
                        @php
                            $tituloSep = 'Sociedad-Noticia-Completa-soc16#soc16';
                        @endphp
                        <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                            href="{{ route('sociedadSep.show', $tituloSep) }}">
                            <img class="h-48 w-full object-cover object-center"
                                src="{{ asset('../img/soc/soc_ana.svg') }}" alt="">
                        </a>
                    </figure>
                    <div class=" py-4 px-6">
                        <h1 class="text-lg font-serif ">
                            <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                TESTIMONIO DE UNA LUCHA: ANA FERNÁNDEZ Y SU LLAMADO POR LA DEMOCRACIA EN EL SUBTE
                            </a>
                        </h1>
                        <p class="font-light  text-gray-500"></p>
                        <div class="pt-4">
                            <p class="font-light  text-right text-gray-500">Publicado: 10/11/2023</p>
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

                                                <img class=" h-56  w-full object-cover" src="../img/pol/pol_debate.svg">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif animate-fade-right ">
                                                <a href="">
                                                    <a href="">SERGIO MASSA Y JAVIER MILEI: PROPUESTAS EN CONTRASTE</a>
                                                </a>                                      
                                            </h1>
                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                      $tituloSep = 'Politica-Noticia-Completa-pol38#pol38';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 13/11/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">

                                                <img class=" h-56 w-full object-cover"   src="{{ asset('../img/soc/soc_bonino.svg') }}">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    <a href="">Mario Bonino: 30 años de impunidad</a>
                                                </a>
                                                {{-- <p class="font-light text-gray-500">Por Gustavo Cano
                                                </p> --}}
                                            </h1>

                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                         $tituloSep = 'Sociedad-Noticia-Completa-soc18#soc18';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                    href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/11/2023</p>
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
                                                    src="{{ asset('../img/grem/grem_cgt.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    CGT PROPONE MINISTERIO DE DEPORTES EN GESTIÓN MASSA </a>
                                            </h1>
                                            <p class="font-light  text-gray-500">
                                            </p>
                                            {{--    <p class="font-light text-gray-500"> Por: Eduardo García</p> --}}

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Gremiales-Noticia-Completa-gre8#gre8';

                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('gremialSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>




                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/11/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48 w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_macri.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    AJUSTES EN ABL Y PATENTES BASADAS EN LA INFLACIÓN: PRESUPUESTO PORTEÑO 2024
                                                </a>
                                            </h1>
                                            <p class="font-light  text-gray-500">
                                            </p>
                                            {{--    <p class="font-light text-gray-500"> Por: Eduardo García</p> --}}
                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Legislatura-Noticia-Completa-leg18#leg18';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('legislaturaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/11/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48  w-full object-cover object-center"
                                                    src="{{ asset('../img/grem/grem_tano.svg') }}"alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    DANIEL CATALANO: FIRMEZA Y UNIDAD PARA ENFRENTAR DESAFÍOS POLÍTICOS


                                                </a>
                                            </h1>
                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Gremiales-Noticia-Completa-gre7#gre7';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('gremialSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/11/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48  w-full object-cover object-center"
                                                    src="{{ asset('../img/int/int_cuba.svg') }}"alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    CUBA SE ENFRENTA AL DESAFÍO DE MEJORAR LA CALIDAD DE LA SALUD PÚBLICA CON UN NUEVO ENFOQUE INTEGRAL</a>
                                                {{-- <p class="font-light text-gray-500">Por Gustavo Cano --}}
                                                </p>
                                            </h1>
                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Internacionales-Noticia-Completa-int8#int8';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('interSepNew.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/11/2023</p>
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
                                            <img class="h-60 w-full object-cover object-center"
                                                src="{{ asset('../img/fem/fem_geoloca.svg') }}" alt="">
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    EL GOBIERNO NACIONAL IMPULSA LA GEOLOCALIZACÓN DE CUIDADORAS Y CUIDADORES CON LA ACTUALIZACIÓN DEL MAPA FEDERAL DEL CUIDADO                                              </a>
                                            </h1>

                                            <div class="pt-4">
                                                <h2>

                                                    @php
                                                        $tituloPo = 'Agenda-Feminista-Completa-fem15#fem15';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('feministaSep.show', $tituloPo) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/11/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-60 w-full object-cover object-center"
                                                    src="{{ asset('../img/int/int_uribe.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    DENUNCIAN A ÁLVARO URIBE EN ARGENTINA  POR PRESUNTA IMPLICACIÓN EN FALSOS POSITIVOS
                                                </a>
                                            </h1>
                                            {{--     <p class="font-light text-gray-500">En el marco de las acciones destinadas
                                                a
                                                fortalecer el abordaje de las situaciones de violencia por razones de
                                                género
                                                en la administración pública bonaerense, nos reunimos con el equipo
                                                interdisciplinario de Fiscalía de Estado.</p> --}}

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Internacionales-Noticia-Completa-int7#int7';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('interSepNew.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/11/2023</p>
                                    </article>
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

                        {{-- cuarta linea de noticias --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-6 py-4">
                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48 w-full object-cover object-center"
                                                    src="{{ asset('../img/soc/soc_taiana.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    TAIANA HIZO ENTREGA DE EQUIPAMIENTO PARA EL ARMA DE INGENIEROS 
                                                </a>
                                            </h1>

                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Sociedad-Noticia-Completa-soc15#soc15';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>

                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/11/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48 w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_kevin.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    KEVIN JOHANSEN ES PERSONALIDAD DESTACADA DE LA CIUDAD
                                                </a>
                                                <p class="font-light text-gray-500">
                                                </p>
                                            </h1>
                                            <p class="font-light  text-gray-500"></p>
                                            <p class="font-light  text-gray-500"></p>
                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Legislatura-Noticia-Completa-leg17#leg17';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('legislaturaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>

                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/11/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48 w-full object-cover object-center"
                                                    src="{{ asset('../img/soc/soc_fragata2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    LA FRAGATA ARA “LIBERTAD” CULMINÓ SU 51° VIAJE DE INSTRUCCIÓN
                                                </a>
                                            </h1>

                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Sociedad-Noticia-Completa-soc14#soc14';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>

                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 05/11/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48 w-full object-cover object-center"
                                                    src="{{ asset('../img/int/int_afri2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    GOLPES EN ÁFRICA: EL CASO DE BURKINA FASO
                                                </a>
                                            </h1>
                                            <p class="font-light  text-gray-500"></p>
                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Internacionales-Noticia-Completa-int6#int6';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('interSepNew.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>

                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/10/2023</p>
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
                                    </div>



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
