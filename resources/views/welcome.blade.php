<x-app-layout>

    <div class="container ">
        {{-- Redes Seociales --}}
        <div class="flex justify-end pt-6 pb-6 gap-3">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-twitter" viewBox="0 0 16 16">
                    <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
            </a>
            <a href="https://instagram.com/adnpopular?igshid=ZDdkNTZiNTM=">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100090382688484">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
            </a>
        </div>
        {{-- carrucel/slider --}}
        <div class="glider-contain pb-6">
            <ul class="glider">
                <li class=" bg-white rounded-lg shadow "> {{-- primera --}}
                    <article>
                        <figure>
                            <img class=" w-full object-cover" src="img/FOTOS SVG/politica-2.svg" alt="">
                        </figure>
                        <div class="py-4 px-4">
                            <h2 class="text-lg font-black">
                                <a href="">La Mesa Directiva de la Conferencia Regional sobre la Mujer llamó a
                                    cerrar la brecha digital de género </a>
                            </h2>
                            <p class="text-gray-700">La ministra de las Mujeres, Géneros y Diversidad de la Nación,
                                Ayelén Mazzina, encabezó, en calidad de presidenta, la 64° reunión de la Mesa Directiva
                                del principal foro intergubernamental sobre los derechos de las mujeres y
                                la igualdad de género en la región, dependiente de la Comisión Económica para América
                                Latina y el Caribe (CEPAL).
                            <div>
                                <h2>
                                    {{--      {{$titulo = 'Politica: Noticia Completa'}} --}}
                                    @php
                                        $titulo = 'Politica-Noticia-Completa';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('politica.show', $titulo) }}">Ir a la Noticía</a>
                                </h2>
                            </div>
                            </p>
                    </article>
                </li>
                <li class=" bg-white rounded-lg shadow "> {{-- segunda --}}
                    <article>
                        <figure>
                            <img class=" w-full object-cover "src="img/FOTOS SVG/s-1.svg" alt="">
                        </figure>
                        <div class="py-4 px-4">
                            <h2 class="text-lg font-black">
                                <a href="">Alcohol Cero: descendieron los casos de alcoholemia al volante en la
                                    Provincia</a>
                            </h2>
                            <p class="text-gray-700 pt-2 ">Con la llegada de febrero, la ley de Alcohol Cero impulsada
                                por el Ministro
                                D’Onofrio se afianza en la Provincia, apuntalando una merma en la cantidad de casos
                                positivos detectados. </p>

                            <div>
                                <h2>
                                    {{--      {{$titulo = 'Politica: Noticia Completa'}} --}}
                                    @php
                                        $tituloSoc = 'Sociedad-Noticia-Completa';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('sociedad.show', $tituloSoc) }}">Ir a la Noticía</a>
                                </h2>
                            </div>
                        </div>
                    </article>
                </li>
                <li class=" bg-white rounded-lg shadow "> {{-- tercera --}}
                    <article>
                        <figure>
                            <img class=" w-full object-cover "src="img/FOTOS SVG/s-2.svg" alt="">
                        </figure>
                        <div class="py-4 px-4">
                            <h2 class="text-lg font-black">
                                <a href="">Finalizó la Séptima Marcha por la Soberanía en Lago Escondido </a>
                            </h2>
                            <p class="text-gray-700">“SECTORES DEL PODER POLÍTICO, JUDICIAL Y POLICIAL DE RÍO NEGRO
                                RESPONDEN A JOE LEWIS”. </p>
                        </div>

                        {{--    <div>
                            <h2>
                             {{$titulo = 'Politica: Noticia Completa'}} 
                           @php
                               $titulo = 'Politica-Noticia-Completa'
                           @endphp
                                <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline" href="{{route('politica.show',$tituloSoc)}}">Ir a la Noticía</a>
                            </h2>
                        </div> --}}
                    </article>
                </li>
                <li class=" bg-white rounded-lg shadow "> {{-- cuarta --}}
                    <article>
                        <figure>
                            <img class=" w-full object-cover "src="img/FOTOS SVG/politica-1.svg" alt="">
                        </figure>
                        <div class="py-4 px-4">
                            <h2 class="text-lg font-black">
                                {{-- TITULO NOTICIA --}}
                                <a href="">Avellaneda y el ministerio de Seguridad de la Provincia firmaron un
                                    convenio de trabajo y colaboración </a>
                            </h2>
                            <p class="text-gray-700">Lo suscribieron el intendente Ferraresi y el ministro Sergio Berni.
                                En la sede del Centro de Comando Operativo de Puente 12 los funcionarios llevaron
                                adelante la firma de un Convenio marco de colaboración y cooperación, destinado al
                                desarrollo e implementación de nuevas tecnologías en materia de seguridad.
                                . </p>
                        </div>
                        {{--    <div>
                            <h2>
                             {{$titulo = 'Politica: Noticia Completa'}} 
                           @php
                               $titulo = 'Politica-Noticia-Completa'
                           @endphp
                                <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline" href="{{route('politica.show',$titulo)}}">Ir a la Noticía</a>
                            </h2>
                        </div> --}}
                    </article>
                </li>
                <li class=" bg-white rounded-lg shadow "> {{-- quinta --}}
                    <article>
                        <figure>
                            <img class=" w-full object-cover "src="img/FOTOS SVG/policiales-1.svg" alt="">
                        </figure>
                        <div class="py-4 px-4">
                            <h2 class="text-lg font-black">
                                <a href="">Comienza el nuevo juicio por el femicidio de Lucía Pérez </a>
                            </h2>
                            <p class="text-gray-700">Autoridades del Ministerio de las Mujeres, Políticas de Género y
                                Diversidad Sexual de la provincia de Buenos Aires acompañará este próximo martes 7 de
                                febrero, junto al Ministerio de las Mujeres, Géneros y Diversidad de la Nación y la
                                Defensoría del Pueblo bonaerense, el comienzo del nuevo juicio por el femicidio de Lucía
                                Pérez,
                                ocurrido el 8 de octubre de 2016 en la ciudad de Mar del Plata. El mismo se desarrollará
                                hasta el 1° de marzo.. </p>
                            <div>
                                <h2>
                                    @php
                                        $tituloPol = 'Policiales-Noticia-Completa';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('policial.show', $tituloPol) }}">Ir a la Noticía</a>
                                </h2>
                            </div>
                        </div>
                    </article>
                </li>

            </ul>

            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
        </div>

        <div>
            <div class="bg-white rounded-lg shadow-lg mb-4">
                {{-- Titulo --}}
                <div class="px-6 py-2 flex justify-between items-center ">
                    <h1 class="font-semibold text-gray-700 uppercase">
                        Adn Popular
                    </h1>
                    <div class="grid-cols-2 border border-gray-200 divide-x divide-gray-200 text-gray-500 ">

                        <!-- Place somewhere in the <body> of your page -->
                        <!-- Place somewhere in the <body> of your page -->

                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                    <div class=" col-span-4">
                        {{-- primer linea de noticias --}}
                        <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-6 py-4">
                          
                            <li class=" bg-white rounded-lg shadow  ">
                                <article>
                                    <figure>
                                        <a href="">
                                            <img class="h-48 w-full object-cover object-center"
                                                src="img/FOTOS SVG/d-1.svg" alt="">
                                        </a>
                                    </figure>
                                    <div class=" py-4 px-6">
                                        <h1 class="text-lg font-semibold ">
                                            <a href="">
                                              Economía
                                            </a>
                                        </h1>
                                        <p class="font-bold text-gray-700">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Velit, at. Eveniet asperiores consectetur, dolorum
                                            exercitationem quo dolorem earum maiores dolore nulla. Iusto, quis unde
                                            itaque placeat explicabo aliquid ullam nobis.</p>
                                        <div class="pt-4">
                                            <h2>
                                                @php
                                                    $tituloEco = 'Economía-Noticia-Completa';
                                                @endphp
                                                <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                    href="{{ route('economia.show', $tituloEco) }}">Ir a la Noticía</a>
                                            </h2>
                                        </div>
                                    </div>
                                </article>
                            </li>

                            <li class=" bg-white rounded-lg shadow  ">
                                <article>
                                    <figure>
                                        <a href="">
                                            <img class="h-48 w-full object-cover object-center"
                                                src="img/FOTOS SVG/ddhh-2.svg" alt="">
                                        </a>
                                    </figure>
                                    <div class=" py-4 px-6">
                                        <h1 class="text-lg font-semibold ">
                                            <a href="">
                                              Gremiales
                                            </a>
                                        </h1>
                                        <p class="font-bold text-gray-700">Lorem ipsum, dolor sit amet consectetur
                                            adipisicing elit. Magnam, minima officiis nulla, dolores aliquid
                                            necessitatibus adipisci provident at, blanditiis nemo deserunt. Aut nam
                                            reprehenderit, quaerat iure laboriosam officiis exercitationem totam.</p>

                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloGre = 'Gremiales-Noticia-Completa';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('gremial.show', $tituloGre) }}">Ir a la Noticía</a>
                                                </h2>
                                            </div>
                                    </div>
                                   
                                </article>
                            </li>

                            <li class=" bg-white rounded-lg shadow  ">
                                <article>
                                    <figure>
                                        <a href="">
                                            <img class="object-cover object-center" src="img/10.png" alt="">
                                        </a>
                                    </figure>
                                    <div class=" py-4 px-6">
                                        <h1 class="text-lg font-semibold ">
                                            <a href="">
                                                Cultura
                                            </a>
                                        </h1>
                                        <p class="font-bold text-gray-700">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Perferendis at voluptates distinctio possimus eum a
                                            blanditiis esse perspiciatis beatae quaerat explicabo iusto tempore
                                            incidunt, commodi mollitia vitae, natus illo unde.</p>

                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloCul = 'Cultura-Noticia-Completa';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('cultura.show', $tituloCul) }}">Ir a la Noticía</a>
                                                </h2>
                                            </div>
                                    </div>
                                </article>
                            </li>

                            <li class=" bg-white rounded-lg shadow  ">
                                <article>
                                    <figure>
                                        <a href="">
                                            <img class="object-cover object-center" src="img/9.png" alt="">
                                        </a>
                                    </figure>
                                    <div class=" py-4 px-6">
                                        <h1 class="text-lg font-semibold ">
                                            <a href="">
                                            Internacionales
                                            </a>
                                        </h1>
                                        <p class="font-bold text-gray-700">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Fugit, consequatur magni nostrum inventore temporibus qui
                                            nemo iste blanditiis saepe itaque earum a unde autem maxime nesciunt nobis
                                            aliquam. Delectus, autem.</p>
                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloInt = 'Internacionales-Noticia-Completa';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('inter.show', $tituloInt) }}">Ir a la Noticía</a>
                                                </h2>
                                            </div>

                                    </div>
                                </article>
                            </li>

                        </ul>
                        {{-- segunda linea de noticias --}}

                        <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2  gap-6 py-4">
                            <li class=" bg-white rounded-lg shadow  ">
                                <article>
                                    <figure>
                                        <a href="">
                                            <img class=" w-full  object-center" src="img/83.png" alt="">
                                        </a>
                                    </figure>
                                    <div class=" py-4 px-6">
                                        <h1 class="text-lg font-semibold ">
                                            <a href="">
                                           Derechos Humanos
                                            </a>
                                        </h1>
                                        <p class="font-bold text-gray-700">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Fugit, consequatur magni nostrum inventore temporibus qui
                                            nemo iste blanditiis saepe itaque earum a unde autem maxime nesciunt nobis
                                            aliquam. Delectus, autem.</p>
                                            <div class="pt-4">
                                                <h2>
                                                    @php
                                                        $tituloDer = 'Derechos-Humanos-Noticia-Completa';
                                                    @endphp
                                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="{{ route('derechos.show', $tituloDer) }}">Ir a la Noticía</a>
                                                </h2>
                                            </div>
                                    </div>
                                </article>
                            </li>

                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2  gap-6 py-4">
                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-70 w-full  object-center" src="img/81.png" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-semibold ">
                                                <a href="">
                                                    El gran titulo grande
                                                </a>
                                            </h1>
                                            <p class="font-bold text-gray-700">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Fugit, consequatur magni nostrum inventore temporibus qui
                                                nemo iste blanditiis saepe itaque earum a unde autem maxime nesciunt nobis
                                                aliquam. Delectus, autem.</p>
                                        </div>
                                    </article>
                                </li>

                                <li class=" bg-white rounded-lg shadow  ">
                                    <article>
                                        <figure>
                                            <a href="">
                                                <img class="h-70 w-full  object-center" src="img/81.png" alt="">
                                            </a>
                                        </figure>
                                        <div class=" py-4 px-6">
                                            <h1 class="text-lg font-semibold ">
                                                <a href="">
                                                    El gran titulo grande
                                                </a>
                                            </h1>
                                            <p class="font-bold text-gray-700">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Fugit, consequatur magni nostrum inventore temporibus qui
                                                nemo iste blanditiis saepe itaque earum a unde autem maxime nesciunt nobis
                                                aliquam. Delectus, autem.</p>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </ul>

                                 {{-- tercera linea de noticias --}}

                                 <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2  gap-6 py-4">
                                  
        
                                    <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2  gap-6 py-4">
                                        <li class=" bg-white rounded-lg shadow  ">
                                            <article>
                                                <figure>
                                                    <a href="">
                                                        <img class="h-70 w-full  object-center" src="img/81.png" alt="">
                                                    </a>
                                                </figure>
                                                <div class=" py-4 px-6">
                                                    <h1 class="text-lg font-semibold ">
                                                        <a href="">
                                                            El gran titulo grande
                                                        </a>
                                                    </h1>
                                                    <p class="font-bold text-gray-700">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Fugit, consequatur magni nostrum inventore temporibus qui
                                                        nemo iste blanditiis saepe itaque earum a unde autem maxime nesciunt nobis
                                                        aliquam. Delectus, autem.</p>
                                                </div>
                                            </article>
                                        </li>
        
                                        <li class=" bg-white rounded-lg shadow  ">
                                            <article>
                                                <figure>
                                                    <a href="">
                                                        <img class="h-70 w-full  object-center" src="img/81.png" alt="">
                                                    </a>
                                                </figure>
                                                <div class=" py-4 px-6">
                                                    <h1 class="text-lg font-semibold ">
                                                        <a href="">
                                                            El gran titulo grande
                                                        </a>
                                                    </h1>
                                                    <p class="font-bold text-gray-700">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Fugit, consequatur magni nostrum inventore temporibus qui
                                                        nemo iste blanditiis saepe itaque earum a unde autem maxime nesciunt nobis
                                                        aliquam. Delectus, autem.</p>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>

                                    <li class=" bg-white rounded-lg shadow  ">
                                        <article>
                                            <figure>
                                                <a href="">
                                                    <img class=" w-full  object-center" src="img/83.png" alt="">
                                                </a>
                                            </figure>
                                            <div class=" py-4 px-6">
                                                <h1 class="text-lg font-semibold ">
                                                    <a href="">
                                                   Derechos Humanos
                                                    </a>
                                                </h1>
                                                <p class="font-bold text-gray-700">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Fugit, consequatur magni nostrum inventore temporibus qui
                                                    nemo iste blanditiis saepe itaque earum a unde autem maxime nesciunt nobis
                                                    aliquam. Delectus, autem.</p>
                                                    <div class="pt-4">
                                                        <h2>
                                                            @php
                                                                $tituloDer = 'Derechos-Humanos-Noticia-Completa';
                                                            @endphp
                                                            <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                                href="{{ route('derechos.show', $tituloDer) }}">Ir a la Noticía</a>
                                                        </h2>
                                                    </div>
                                            </div>
                                        </article>
                                    </li>
                                </ul>

                    </div>
                    {{-- columna de la derecha chica --}}
                    <aside>
                        <h2 class="font-semibold text-center mb-2">Politica</h2>
                        <ul class="divide-y divide-gray-200 ">
                            <ul class="divide-y divide-gray-200 ">
                                <li class=" text-sm ">
                                    <iframe class=" w-full  object-center" width="150" height="200"
                                        src="https://www.youtube.com/embed/vUfaWO41SNM?controls=1">
                                    </iframe>
                                </li>
                            </ul>

                        </ul>

                        <h2 class="font-semibold text-center mt-4 mb-2">Sindicales</h2>
                        <ul class="divide-y divide-gray-200">

                            <li class="text-sm ">
                                <iframe class=" w-full  object-center" width="150" height="200"
                                    src="https://www.youtube.com/embed/9BRMp2Y2yLw?controls=1">
                                </iframe>
                            </li>

                        </ul>


                        <h2 class="font-semibold text-center mt-4 mb-2">Agenda</h2>
                        <ul class="divide-y divide-gray-200">

                            <li class=" bg-white rounded-lg shadow  ">
                                <article>
                                    <figure>
                                        <a href="">
                                            <img class="object-cover object-center" src="img/img-2.jpg"
                                                alt="">
                                        </a>
                                    </figure>
                                    <div class=" py-4 px-6">
                                        <h1 class="text-lg font-semibold ">
                                            <a href="">
                                                El gran titulo
                                            </a>
                                        </h1>
                                        <p class="font-bold text-gray-700">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Fugit, consequatur magni nostrum inventore temporibus qui
                                            nemo iste blanditiis saepe itaque earum a unde autem maxime nesciunt nobis
                                            aliquam. Delectus, autem.</p>
                                    </div>
                                </article>
                            </li>
                        </ul>

                        <h2 class="font-semibold text-center mt-4 mb-2">tecnología</h2>
                        <ul class="divide-y divide-gray-200">

                            <li class=" bg-white rounded-lg shadow  ">
                                <article>
                                    <figure>
                                        <a href="">
                                            <img class=" object-cover object-center" src="img/img-7.jpg"
                                                alt="">
                                        </a>
                                    </figure>
                                    <div class=" py-4 px-6">
                                        <h1 class="text-lg font-semibold ">
                                            <a href="">
                                                El gran titulo
                                            </a>
                                        </h1>
                                        <p class="font-bold text-gray-700">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Fugit, consequatur magni nostrum inventore temporibus qui
                                            nemo iste blanditiis saepe itaque earum a unde autem maxime nesciunt nobis
                                            aliquam. Delectus, autem.</p>
                                    </div>
                                </article>
                            </li>
                        </ul>


                    </aside>
                </div>
            </div>
        </div>
        <footer>
            <div class="flex justify-end pt-6 pb-6 gap-3">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-twitter" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
            </div>




        </footer>

        <script>
            new Glider(document.querySelector('.glider'), {
                slidesToShow: 1,
                dots: '#dots',
                draggable: true,
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                }
            });
        </script>






</x-app-layout>
