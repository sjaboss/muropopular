   <div id="custom-controls-gallery" class="relative w-full " data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-96 overflow-hidden rounded-lg md:h-96">

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <article>
                                <figure>
                                    @php
                                        $tituloSep = 'Internacionales-Noticia-Completa-int21#int21';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('interSepNew.show', $tituloSep) }}">
                                        <img class="object-cover absolute block w-full  h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="../img/int/int_arce.svg" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a href="{{ route('interSepNew.show', $tituloSep) }}">ARCE FRENÓ EL GOLPE EN BOLIVIA: ZÚÑIGA DETENIDO Y LOS MILITARES SE RETIRAN
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
                                        $tituloSep = 'Gremiales-Noticia-Completa-gre34#gre34';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('gremialSep.show', $tituloSep) }}">
                                        <img class="object-cover absolute block w-full  h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="../img/grem/grem_aceite1.svg" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a href="{{ route('gremialSep.show', $tituloSep) }}">PARO NACIONAL DE ACEITEROS CONTRA LA LEY BASES
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
                                        $tituloDer = 'Sociedad-Noticia-Completa-soc73#soc73';
                                    @endphp
                                    <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                        href="{{ route('sociedadSep.show', $tituloDer) }}">
                                        <img class="object-cover absolute block w-full h-56 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            src="{{ asset('../img/soc/soc_crisaten.svg') }}" alt="">
                                        <div class="py-2 px-4">
                                            <h2 class="text-lg font-serif">
                                                <a h href="{{ route('sociedadSep.show', $tituloDer) }}">JUICIO POR EL ATENTADO A CRISTINA: UN PROCESO CLAVE PARA LA JUSTICIA Y LA DEMOCRACIA
                                                </a>
                                            </h2>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Jorge Rachid</p> --}}
                                        </div>
                                </figure>


                            </article>
                        </div>
                    </div>
                </div>