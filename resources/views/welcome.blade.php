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





        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="grid gap-4">
                <div id="custom-controls-gallery" class="relative w-full " data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-96 overflow-hidden rounded-lg md:h-96">

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <article>
                                <figure>
                                    @php
                                        $tituloSep = 'Politica-Noticia-Completa-pol31#pol31';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('politicaSep.show', $tituloSep) }}">
                                        <img class="object-cover absolute block w-full  h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="../img/pol/pol_pepe.svg" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a href="{{ route('politicaSep.show', $tituloSep) }}"> EL PEPE RONISMO DIGITAL
                                                </a>
                                                <p class="font-light text-gray-500">Por Pablo Arsegot.</p>
                                            </h2>
                                            {{-- <p class="font-light mb-10 text-right text-gray-500">Publicado: 02/10/2023
                                            </p> --}}
                                        </div>
                                </figure>
                            </article>
                        </div>

                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <article>
                                <figure>
                                    @php
                                        $tituloSep = 'Legislatura-Noticia-Completa-leg14#leg14';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                        <img class="object-cover absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="../img/leg/leg_museo.svg" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">EL MUSEO ITINERANTE DE BOCA JUNIORS FUE DECLARADO DE INTERÉS LEGISLATIVO</a>
                                            </h2>
                                            {{-- <p class="font-light mb-10 text-right text-gray-500">Publicado: 02/10/2023
                                            </p> --}}
                                        </div>
                                </figure>
                            </article>
                        </div>

                        <!-- Item 3 -->

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <article>
                                <figure>
                                    @php
                                        $tituloSep = 'Internacionales-Noticia-Completa-int3#int3';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('interSepNew.show', $tituloSep) }}">
                                        <img class="object-cover absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="../img/int/int_ayotzi1.svg" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a href="{{ route('interSepNew.show', $tituloSep) }}">ANIVERSARIO DE LA MASACRE DE LOS 43 DE AYOTZINAPA</a>
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
                            $tituloSep = 'Derechos-Humanos-Noticia-Completa-der9#der9';
                        @endphp
                        <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                            href="{{ route('derechoSep.show', $tituloSep) }}">
                            <img class="h-48 w-full object-cover object-center"
                                src="{{ asset('../img/der/der_encuentro.svg') }}" alt="">
                        </a>
                    </figure>
                    <div class=" py-4 px-6">
                        <h1 class="text-lg font-serif ">
                            <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                VII ENCUENTRO FEDERAL DE DERECHOS HUMANOS
                            </a>
                        </h1>
                        <p class="font-light  text-gray-500"></p>
                        <div class="pt-4">
                            <p class="font-light  text-right text-gray-500">Publicado: 26/09/2023</p>
                        </div>

                    </div>
                </div>

                <div>
                    <figure>
                        @php
                            $tituloSep = 'Sociedad-Noticia-Completa-soc12#soc12';
                        @endphp
                        <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                            href="{{ route('sociedadSep.show', $tituloSep) }}">
                            <img class="h-48 w-full object-cover object-center"
                                src="{{ asset('../img/soc/soc_carillo.svg') }}" alt="">
                        </a>
                    </figure>
                    <div class=" py-4 px-6">
                        <h1 class="text-lg font-serif ">
                            <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                CARRILLO: EL FUNDADOR DEL SANITARISMO NACIONAL
                            </a>
                        </h1>
                        <p class="font-light  text-gray-500"></p>
                        <div class="pt-4">
                            <p class="font-light  text-right text-gray-500">Publicado: 02/10/2023</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        {{-- cuerpo --}}
        <div>
            <div class="bg-white rounded-lg shadow-lg mb-4">
                {{-- Titulo --}}
                <div class="px-6 py-2 flex justify-between items-center ">
                    <h4 class="text-lg text-center font-serif ">
                        <a href="">ADN POPULARES </a>
                    </h4>
                   
                </div>




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

                                                <img class=" h-56  w-full object-cover" src="../img/der/der_veloz.svg">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif animate-fade-right ">
                                                <a href="">
                                                    <a href="">COMPLICIDADES EMPRESARIALES DURANTE LA DICTADURA CÍVICO MILITAR ECLESIAL</a>
                                                </a>
                                                <p class="font-light text-gray-500">Por Adriana Zerdín.</p>
                                                <p class="font-light text-gray-500"></p>
                                            </h1>

                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Derechos-Humanos-Noticia-Completa-der10#der10';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('derechoSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/10/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">

                                                <img class=" h-56 w-full object-cover" src="../img/pol/pol_moneda.svg">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    <a href="">MONEDA DIGITAL ARGENTINA: CÓMO FUNCIONA Y POR QUÉ PODRÍA SER CLAVE</a>
                                                </a>
                                                <p class="font-light text-gray-500">Por Gustavo Cano
                                                </p>
                                            </h1>

                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Politica-Noticia-Completa-pol32#pol32';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/10/2023</p>
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
                                                    src="{{ asset('../img/int/int_narges.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    NARGES MOHAMMADI RECIBE EL PREMIO NOBEL DE LA PAZ 2023
                                                </a>
                                            </h1>
                                            <p class="font-light  text-gray-500">
                                            </p>
                                            {{--    <p class="font-light text-gray-500"> Por: Eduardo García</p> --}}

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Internacionales-Noticia-Completa-int5#int5';
                                                        
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('interSepNew.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>




                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/10/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48 w-full object-cover object-center"
                                                    src="{{ asset('../img/pol/pol_albert.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    ALBERTO FERNÁNDEZ RECIBE A INTEGRANTES DE INSTITUCIONES ARMENIAS
                                                </a>
                                            </h1>
                                            <p class="font-light  text-gray-500">
                                            </p>
                                            {{--    <p class="font-light text-gray-500"> Por: Eduardo García</p> --}}
                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Politica-Noticia-Completa-pol33#pol33';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/10/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48  w-full object-cover object-center"
                                                    src="{{ asset('../img/pol/pol_encuesta.svg') }}"alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    DOS ENCUESTAS CONFIRMAN LA TENDENCIA DE UN ESCENARIO DE BALLOTAGE ENTRE JAVIER MILEI Y SERGIO MASSA

                                                </a>
                                            </h1>
                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Politica-Noticia-Completa-pol34#pol34';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/10/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48  w-full object-cover object-center"
                                                    src="{{ asset('../img/pol/pol_traicion.svg') }}"alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    ¿UNA TRAICIÓN A LA SOBERANÍA ARGENTINA?
                                                </a>
                                                <p class="font-light text-gray-500">Por Gustavo Cano
                                                </p>
                                            </h1>
                                            <p class="font-light text-gray-500"></p>
                                            <p class="font-light text-gray-900 "></p>

                                            <div class="pt-2">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Politica-Noticia-Completa-pol35#pol35';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('politicaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/10/2023</p>
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
                                                src="{{ asset('../img/leg/leg_libro.svg') }}" alt="">
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    DECLARAN DE INTERÉS EL LIBRO "EL PARTIDO. ARGENTINA - INGLATERRA 1986" DE ANDRÉS BURGO
                                                </a>
                                            </h1>

                                            <div class="pt-4">
                                                <h2>

                                                    @php
                                                        $tituloPo = 'Legislatura-Noticia-Completa-leg16#leg16';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('legislaturaSep.show', $tituloPo) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 06/10/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-60 w-full object-cover object-center"
                                                    src="{{ asset('../img/soc/soc_cade1.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    CADE LANZA SU CURSO "ENLATADOS CADE: ADMINISTRACIÓN DE COOPERATIVAS DE TRABAJO"
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
                                                        $tituloSep = 'Sociedad-Noticia-Completa-soc13#soc13';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/10/2023</p>
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
                                                    src="{{ asset('../img/cul/cul_17o1.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    FESTIVAL CULTURAL "17 DE OCTUBRE" CELEBRA LA HISTORIA Y LA CULTURA ARGENTINA EN MÙLTIPLES LOCALIDADES
                                                </a>
                                            </h1>

                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Cultura-Noticia-Completa-cul11#cul11';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('culturaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>

                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 06/10/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48 w-full object-cover object-center"
                                                    src="{{ asset('../img/fem/fem_mapuche.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    LIBERTAD A YESSICA BONNEFOI CARRIQUEO ANTIMIL: UN LLAMADO URGENTE A LA JUSTICIA
                                                </a>
                                                <p class="font-light text-gray-500">
                                                </p>
                                            </h1>
                                            <p class="font-light  text-gray-500"></p>
                                            <p class="font-light  text-gray-500"></p>
                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Agenda-Feminista-Completa-fem14#fem14';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('feministaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>

                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 06/10/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48 w-full object-cover object-center"
                                                    src="{{ asset('../img/fem/fem_esi.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    SE CUMPLEN 17 AÑOS DE LA SANCIÓN DE LA LEY ESI
                                                </a>
                                            </h1>

                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Agenda-Feminista-Completa-fem13#fem13';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('feministaSep.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>

                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/10/2023</p>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-48 w-full object-cover object-center"
                                                    src="{{ asset('../img/int/int_naufragio.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-serif ">
                                                <a href="">
                                                    TRAGEDIA EN NIGERIA: NAUFRAGIO EN EL RIO DEJA 40 DESAPARECIDOS
                                                </a>
                                            </h1>
                                            <p class="font-light  text-gray-500"></p>
                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloSep = 'Internacionales-Noticia-Completa-int4#int4';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('interSepNew.show', $tituloSep) }}">Ir a la
                                                        Noticía</a>
                                                </h2>
                                            </div>

                                        </div>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/10/2023</p>
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
