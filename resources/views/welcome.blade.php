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
            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/HHfiWftSpMk?si=XIwfqMddQFupU1SB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
        </article>
    
        {{-- <img class="w-full h-96 object-cover rounded-lg border border-gray-900"
            src="{{ asset('img/AND POPULAR FLYER.gif') }}" alt=""> --}}
    </div>
    <!-- Dos notas con carrusel -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 rounded-lg border shadow border-gray-600 p-4 bg-gray-800 text-white">
        <!-- Nota 1 -->
        <div class="rounded-lg border shadow border-emerald-600 p-2">
                @php
                $tituloSep = 'Derechos-Humanos-Noticia-Completa-der30#der30';
                @endphp
                <a href="{{ route('derechoSep.show', $tituloSep) }}">
                    <img class="h-48 w-full object-cover object-center rounded-lg"
                        src="{{ asset('../img/der/der_cienaga1.svg') }}" alt="Imagen Nota 1">
                </a>
            <div class="py-4 px-6">
                <h1 class="text-lg font-serif">
                    <a href="{{ route('derechoSep.show', $tituloSep) }}">
                        DE LA CIÉNAGA A LA VERDAD
                    </a>
                    <p class="font-light text-gray-500">Por Adriana Zerdín
                    </p>
                </h1>
            </div>
            <div class="pt-4 text-white font-light text-right">
                <p>Publicado: 15/08/2024</p>
            </div>
        </div>
        <!-- Nota 2 -->
        <div class="rounded-lg border shadow border-emerald-600 p-2">
            @php
            $tituloSep = 'Legislatura-Noticia-Completa-leg50#leg50';
            @endphp
            <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                <img class="h-48 w-full object-cover object-center rounded-lg"
                    src="{{ asset('../img/leg/leg_ludo1.svg') }}" alt="Imagen Nota 1">
            </a>
            <div class="py-4 px-6">
            <h1 class="text-lg font-serif">
                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                    JORNADA EN LA LEGISLATURA PORTEÑA ABORDÓ LA CRECIENTE LUDOPATÍA DIGITAL
                </a>
            </h1>
            </div>
            <div class="pt-4 text-white font-light text-right">
            <p>Publicado: 15/08/2024</p>
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

                {{-- notas --}}
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4 gap-4 rounded-lg border  shadow border-gray-600 p-2 bg-gray-800 text-white">

                        {{-- primera linea de noticias --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2  gap-4 py-4">
                                {{-- Nota A-1 --}}
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Gremiales-Noticia-Completa-gre40#gre40';
                                                @endphp

                                                <a href="{{ route('gremialSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1" src="../img/grem/grem_estatales.svg">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">

                                                    <a href="{{ route('gremialSep.show', $tituloSep) }}">ESTATALES EXIGEN FIN DE LA PRECARIZACIÓN Y AUMENTOS SALARIALES EN CABA</a>
                                                </h1>
                                                <a href="{{ route('gremialSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 14/08/2024</p>
                                    </div>
                                </li>
                                {{-- Nota A-2 --}}
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Agenda-Feminista-Completa-fem20#fem20';
                                                @endphp

                                                <a href="{{ route('feministaSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1" src="../img/fem/fem_medios1.svg">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">

                                                    <a href="{{ route('feministaSep.show', $tituloSep) }}">LA RESPONSABILIDAD DE LOS MEDIOS EN LA DIFUSIÓN DE IMÁGENES DE VIOLENCIA DE GÉNERO</a>
                                                </h1>
                                                <a href="{{ route('feministaSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 14/08/2024</p>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        {{-- segundalinea de noticias --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-6">
                                <!-- Nota B-1 -->
                                <li class="rounded-lg  border shadow border-emerald-600 ">
                                    <div class=" py-2 px-4">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Derechos-Humanos-Noticia-Completa-der29#der29';
                                                @endphp
                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">
                                                    <img class="h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        src="../img/der/der_faro1.svg" alt="a2">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('derechoSep.show', $tituloSep) }}">QUÉ SE ESCONDE DETRÁS DEL NUEVO PROYECTO EN EL FARO DE MAR DEL PLATA</a>
                                                </h1>
                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 13/08/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Legislatura-Noticia-Completa-leg49#leg49';
                                                @endphp

                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1" src="../img/leg/leg_recono1.svg">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">

                                                    <a href="{{ route('legislaturaSep.show', $tituloSep) }}">RECONOCIMIENTOS A LA SALUD, LA CULTURA Y LA INCLUSIÓN</a>
                                                </h1>
                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 13/08/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Gremiales-Noticia-Completa-gre39#gre39';
                                                @endphp

                                                <a href="{{ route('gremialSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1" src="../img/grem/grem_yofra.svg">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">

                                                    <a href="{{ route('gremialSep.show', $tituloSep) }}">DANIEL YOFRA: “LAS EMPRESAS QUERÍAN CONFLICTO PARA PRESIONAR AL GOBIERNO”</a>
                                                </h1>
                                                <a href="{{ route('gremialSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 12/08/2024</p>
                                    </div>
                                </li>
                                <!-- Nota B-4 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Sociedad-Noticia-Completa-soc88#soc88';
                                                @endphp

                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1" src="../img/soc/soc_veto.svg">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">

                                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">MILEI PODRÍA VETAR EL AUMENTO DE JUBILACIONES SI SE APRUEBA EN EL SENADO</a>
                                                </h1>
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 12/08/2024</p>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        {{-- tercera linea de noticias --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2  gap-6 py-4">
                                <!-- Nota c-1 -->
                                <li class="rounded-lg  border shadow border-emerald-600 ">
                                    <div class=" py-2 px-4">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Sociedad-Noticia-Completa-soc87#soc87';
                                                @endphp
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    <img class="h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        src="../img/soc/soc_enva1.svg" alt="a2">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">HOMENAJE A ENVAR EL KADRI EN PLAZA FLORES</a>
                                                </h1>
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 11/08/2024</p>
                                    </div>
                                </li>
                                <!-- Nota c-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Sociedad-Noticia-Completa-soc86#soc86';
                                                @endphp

                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1" src="../img/soc/soc_hidro1.svg">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">

                                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">EL GOBIERNO PUSO EN VENTA CUATRO CENTRALES HIDROELÉCTRICAS CLAVE</a>
                                                </h1>
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 11/08/2024</p>
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
                        {{-- cuarta linea de noticias --}}
                        <section>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-6">
                                <!-- Nota e-1 -->
                                <li class="rounded-lg  border shadow border-emerald-600 ">
                                    <div class=" py-2 px-4">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Sociedad-Noticia-Completa-soc85#soc85';
                                                @endphp
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    <img class="h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        src="../img/soc/soc_fabrica.svg" alt="a2">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">RIESGO DE PÉRDIDA DE SOBERANÍA POR PRIVATIZACIÓN DE FABRICACIONES MILITARES</a>
                                                </h1>
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 10/08/2024</p>
                                    </div>
                                </li>
                                <!-- Nota E-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Derechos-Humanos-Noticia-Completa-der28#der28';
                                                @endphp

                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1" src="../img/der/der_genocidas1.svg">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">

                                                    <a href="{{ route('derechoSep.show', $tituloSep) }}">LIBERTARIOS ALIADOS CON GENOCIDAS</a>
                                                </h1>
                                                <a href="{{ route('derechoSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 10/08/2024</p>
                                    </div>
                                </li>
                                <!-- Nota E-2 -->
                                <li class="rounded-lg  border shadow border-emerald-600 ">
                                    <div class=" py-2 px-4">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Sociedad-Noticia-Completa-soc84#soc84';
                                                @endphp
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">
                                                    <img class="h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        src="../img/soc/soc_convenio.svg" alt="a2">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">
                                                    <a href="{{ route('sociedadSep.show', $tituloSep) }}">FIRMAN CONVENIO PARA COMBATIR LA TRATA DE PERSONAS EN BUENOS AIRES</a>
                                                </h1>
                                                <a href="{{ route('sociedadSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 09/08/2024</p>
                                    </div>
                                </li>
                                <!-- Nota E-3 -->
                                <li class="rounded-lg  border shadow border-emerald-600">
                                    <div class=" py-2 px-2 bg-gray-800">
                                        <div class="pt-2 text-emerald-500">
                                            <h2>
                                                @php
                                                    $tituloSep = 'Legislatura-Noticia-Completa-leg48#leg48';
                                                @endphp

                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">
                                                    <img class=" h-56  w-full object-cover rounded-lg border-gray-900 "
                                                        alt="a1" src="../img/leg/leg_demarco1.svg">
                                                </a>
                                                <h1 class="text-lg font-serif animate-fade-right text-white">

                                                    <a href="{{ route('legislaturaSep.show', $tituloSep) }}">LA LEGISLATURA PORTEÑA RECONOCE A NADIAH DEMARCO Y A RGC EDICIONES</a>
                                                </h1>
                                                <a href="{{ route('legislaturaSep.show', $tituloSep) }}">Ir a la
                                                    Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="font-light  text-right text-white bg-gray-800">
                                        <p>Publicado: 09/08/2024</p>
                                    </div>
                                </li>
                            </ul>
                        </section>

                    </div>

                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" mt-4 col-span-6">

                                <a href="" class="object-cover object-center h-35  " width="200">
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}" alt="">
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
                                <a href="" class="object-cover object-center " width="200">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
                                </a>
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
                    axios.get("https://api.dailymotion.com/videos?channel=news&limit=1")
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
