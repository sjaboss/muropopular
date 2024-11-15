<x-app-layout>
    <div class="container ">
        <div class="mt-10"></div>
        @if ($tituloSep == 'Politica-Noticia-Completa-pol1')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Bancó Cristina... </a>
                                        </h2>

                                        <br>

                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">



                                                <p><strong>"Construyamos una pared para poner límites a quienes vienen a
                                                        cercenar derechos: nunca más neoliberalismo en la
                                                        Argentina"</strong>,
                                                    concluyó aplaudida su intervención Sergio Massa, la tarde del lunes
                                                    junto a Cristina Kirchner, la Presidenta en ejercicio. Fue en el
                                                    marco de un acto emocionante por la presentación de uno de los
                                                    aviones rescatados de la Armada utilizado en la dictadura
                                                    cívico-militar para arrojar vivos al mar a detenidos-desaparecidos,
                                                    reconocido por la matrícula N 190 WW.</p>
                                                <br>


                                                <p>En el Aeroparque de la Capital, la vicepresidenta, rodeada por las
                                                    principales figuras de la lista de Unión por la Patria (UP), avaló
                                                    la propuesta de candidatos que se hará cargo de la campaña
                                                    presidencial del próximo octubre y que enfrentará al macrismo en sus
                                                    diversas expresiones. Esas, cada vez más radicalizadas con la
                                                    orientación que alguna vez dio el ex jefe, Mauricio Macri. Fue
                                                    entonces, cuando se propuso volver al gobierno con su plan de
                                                    "endeudamiento y devastación de la Argentina", pero más rápido. </p>

                                                <figure>
                                                    <img class=" w-full object-cover" src="../img/pol/pol_chino2.svg"
                                                        alt="">

                                                </figure>


                                                <p>De puertas adentro, Cristina no ahorró cuestionamientos al Presidente
                                                    Fernández, empeñado en la PASO y sus seguidores más cercanos
                                                    (Victoria Tolosa Paz), al ensayar una competencia en la provincia de
                                                    Buenos Aires, contra Axel Kicillof, Eso fue a pesar de que ya
                                                    contaba con su postulación como diputada de la Nación. Lo mismo que
                                                    el actual canciller. </p>
                                                <br>
                                                <p>La sensación que flotó en el acto del recuerdo de la muerte, es que
                                                    la conductora del peronismo empoderó a los candidatos, "aunque
                                                    ninguno de ustedes imagina que me iré a tejer para mis nietos", como
                                                    recordó hace poco en otro acto. </p>
                                                <br>


                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/Chino.svg') }}" alt="">
                                                        <p> <strong>Nota de Oscar Chino Martínez<strong></p></a>

                                                        <p class=""> <strong> Zemborain <strong></p></a>

                                                    </figure>
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </article>
                            </li>
                        </ul>
                        <br>

                    </div>


                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" col-span-6">
                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}" alt="">
                                </a>

                                <div id="app">

                                    <div v-for="item in info">

                                        <div class="flex-col pb-3">
                                            <div
                                                class="flex-col max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                                <a href="#">
                                                    <img class="rounded-t-lg"
                                                        :src="'https://www.dailymotion.com/thumbnail/video/' + item.id"
                                                        alt="" />
                                                </a>
                                                <div class="p-5">
                                                    <a href="#">
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                            @{{ item.title }}</h5>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div v-for="va in clima">

                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            @{{ va }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>

                </div>

            </section>

            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">¿QUÉ NOS FALTA VER?</a>
                                        </h2>

                                        <p>Hace pocos meses se pudo ver y oír a la Comandanta de la IV Flota de
                                            Estados Unidos, generala Laura Richardson con su pecho izquierdo del
                                            uniforme, poblado al extremo de condecoraciones castrenses por
                                            &quot;hazañas&quot; y
                                            explicando a quiera oír por TV que &quot;tenemos (los norteamericanos),
                                            litio, gas y
                                            agua potable&quot;, en referencia al territorio que va del Río Bravo al
                                            extremo sur
                                            antártico. Es decir, América del Sur, una suerte de almacén norteamericano.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="h-96 w-full object-cover"
                                                src="{{ asset('../img/pol/pol_chinosab.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Poco tiempo después y con el resultado de las PASO en la mano,
                                                    también se
                                                    pudo ver a Mauricio Macri --la punta de lanza del FMI y Estados
                                                    Unidos--,
                                                    felicitando a su candidata interna, Patricia Bullrich frente al
                                                    vencido Horacio
                                                    Rodríguez Larreta. El alcalde de Buenos Aires, sentido por la
                                                    derrota, aclaró
                                                    que no será parte de un eventual gobierno de su color. En realidad,
                                                    en la
                                                    felicitación más enfática de Macri a Javier Milei, se mostró como el
                                                    ordenador
                                                    de la oleada de derecha, alguna de tonalidad extrema.
                                                </p>
                                                <br>
                                                <p>EE.UU. no estaría dispuesto a un posible triunfo peronista y mucho
                                                    menos en
                                                    consonancia con el país más grande de la región, Brasil, presidido
                                                    por Lula,
                                                    (BRICS &quot;A&quot;) de por medio. Esta hipótesis estaría avalada
                                                    por el hostigamiento
                                                    del FMI contra la candidatura de Sergio Massa, acordada con Cristina
                                                    Kirchner,
                                                    gobernadores y la CGT.</p>
                                                <br>
                                                <p>Hay que recordar que la actual vicepresidenta fue proscrita por un
                                                    Poder
                                                    Judicial con identidad partidaria opositora y dispuesto a todo. El
                                                    candidato del
                                                    oficialismo confirmó hace unos días que aquel organismo
                                                    internacional no sólo
                                                    nunca adelantó antes de las PASO la cifra millonaria en dólares,
                                                    sino que
                                                    quiso exigir al ministro Massa que la devaluación concretada en el
                                                    pasado
                                                    agosto debería haber sido de 60 o 100% y no del 22% dispuesto por el
                                                    Gobierno.
                                                </p>
                                                <br>
                                                <p>Pero éste no las tiene todas consigo, porque registra una inflación
                                                    que creció al
                                                    doble de la heredada por Macri. Hay descontento y bronca... ¡Ah, el
                                                    marco de
                                                    esta realidad es el primer aniversario del magnicidio frustrado y no
                                                    resuelto por

                                                    el mismo Poder Judicial contra la figura política más importante de
                                                    Argentina,
                                                    dos veces presidenta por amplios márgenes y actual vicepresidenta
                                                    del país!
                                                    Los primeros indicios sólidos involucrarían en el intento frustrado
                                                    a dirigentes y
                                                    legisladores de la oposición. A propósito, la candidata Bullrich se
                                                    negó a
                                                    condenar el episodio, el más grave desde la recuperación
                                                    democrática, hace
                                                    40 años.
                                                </p>
                                                <br>
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/Chino.svg') }}" alt="">
                                                        <p> <strong>Nota de Oscar Chino Martínez<strong></p>

                                                        <p><strong> Zemborain <strong></p>

                                                    </figure>
                                                </div>

                                </article>
                            </li>
                        </ul>
                    </div>


                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" col-span-6">

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}" alt="">
                                </a>



                                <div id="app">

                                    <div v-for="item in info">

                                        <div class="flex-col pb-3">
                                            <div
                                                class="flex-col max-w-sm  border  border-gray-700 rounded-lg shadow bg-gray-800">
                                                <a href="#">
                                                    <img class="rounded-t-lg"
                                                        :src="'https://www.dailymotion.com/thumbnail/video/' + item.id"
                                                        alt="" />
                                                </a>
                                                <div class="p-5">
                                                    <a href="#">
                                                        <h5 class="mb-2 text-2xl font-bold tracking-tight  text-white">
                                                            @{{ item.title }}</h5>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div v-for="va in clima">

                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
                                            @{{ va }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>

                </div>

            </section>

            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI NIEGA DEVALUACIÓN EN REUNIÓN CON SCHOLZ</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 25/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>En una nueva gira internacional, el presidente Javier Milei se reunió
                                                    con el primer ministro alemán Olaf Scholz y descartó una devaluación
                                                    del 30% exigida por el FMI, mientras el pueblo argentino sufre las
                                                    consecuencias de las políticas neoliberales.</i>
                                            </p>
                                            <br>
                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                        </article> --}}
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_gira.svg') }}" alt="">

                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>LA REUNIÓN EN BERLÍN: MÁS QUE UN ENCUENTRO DIPLOMÁTICO
                                                    </p>
                                                    <br>
                                                    <p>La reunión, que se llevó a cabo en Berlín, abordó temas cruciales
                                                        como la integración del Mercosur con la Unión Europea, el
                                                        ingreso de Argentina a la OCDE y la OTAN. Sin embargo, la falta
                                                        de honores militares y la cancelación de la conferencia de
                                                        prensa reflejan la tensión subyacente en el encuentro. Alemania,
                                                        con su peso en la UE y el FMI, es un actor clave en la economía
                                                        global, y su postura frente a Argentina puede influir
                                                        significativamente en el futuro del país.
                                                    </p>
                                                    <br>
                                                    <p>El comunicado del gobierno alemán subrayó la importancia de la
                                                        cohesión social, una crítica velada a las políticas de ajuste
                                                        impulsadas por Milei, que han profundizado la pobreza y la
                                                        desigualdad en Argentina. Sin embargo, Milei negó cualquier
                                                        comentario de Scholz sobre la política interna argentina y
                                                        afirmó que la discusión se centró en fortalecer la economía
                                                        bilateral.
                                                    </p>
                                                    <br>
                                                    <p>NEGACIÓN DE UNA DEVALUACIÓN NECESARIA</p>
                                                    <br>
                                                    <p>Ante los crecientes rumores sobre una devaluación del 30%,
                                                        supuestamente sugerida por el FMI, Milei negó categóricamente
                                                        que el organismo haya hecho tal recomendación. “El propio Caputo
                                                        explicó que el informe del organismo no señala eso”, afirmó,
                                                        intentando calmar los temores. Sin embargo, los economistas
                                                        señalan que sin una devaluación, la economía argentina seguirá
                                                        en caída libre, afectando gravemente a los sectores más
                                                        vulnerables.</p>
                                                    <br>
                                                    <p>El retraso en la exportación de la cosecha de granos, fundamental
                                                        para las reservas del Tesoro, ha exacerbado la crisis. Desde
                                                        Alemania, Milei intentó disipar los temores, asegurando que una
                                                        devaluación afectaría negativamente el poder adquisitivo de los
                                                        trabajadores. No obstante, la falta de una fecha clara para
                                                        eliminar el cepo cambiario genera más incertidumbre y
                                                        desconfianza en su gestión.</p>
                                                    <br>
                                                    <p>DESAFÍOS ECONÓMICOS Y POLÍTICAS FALLIDAS</p>
                                                    <br>
                                                    <p>Milei destacó el desequilibrio fiscal como el principal problema
                                                        económico, pero sus políticas han sido insuficientes para
                                                        abordarlo. Criticó las “colocaciones de deuda” en el Banco
                                                        Central, que representan alrededor del 4% del PBI, y apuntó a
                                                        Rodrigo Valdés, del FMI, como responsable de la situación
                                                        heredada. Sin embargo, esta narrativa no exime a su
                                                        administración de las decisiones que han llevado a la crisis
                                                        actual.</p>
                                                    <br>
                                                    <p>UNA IMAGEN INTERNACIONAL POLÉMICA</p>
                                                    <br>
                                                    <p>En su gira, Milei también buscó consolidar su imagen
                                                        internacional participando en eventos con figuras alineadas con
                                                        su ideología neoliberal. En Hamburgo, recibió una medalla de la
                                                        Sociedad Hayek tras un discurso en el que criticó la “justicia
                                                        social”. Estas declaraciones refuerzan su postura económica,
                                                        pero alienan a amplios sectores de la sociedad que luchan por
                                                        una mayor equidad.</p>
                                                    <br>
                                                    <p>En España, Milei se reunió con Isabel Díaz Ayuso y asistió a la
                                                        Cena de la Libertad en el Casino de Madrid, donde fue premiado
                                                        por el Instituto Juan de Mariana. Compartió escenario con
                                                        figuras de la derecha europea, consolidando sus lazos con este
                                                        sector y reafirmando su alineación con políticas neoliberales.
                                                    </p>
                                                    <br>
                                                    <p>CONTINUACIÓN DE LA GIRA Y DESAFÍOS FUTUROS</p>
                                                    <br>
                                                    <p>La gira continuó en la República Checa, donde se reunió con el
                                                        primer ministro Petr Fiala. Los ministros de Defensa de ambos
                                                        países firmaron un acuerdo de cooperación para modernizar las
                                                        Fuerzas Armadas argentinas, reflejando una dimensión militar en
                                                        la estrategia de Milei para fortalecer la posición de Argentina.
                                                    </p>
                                                    <br>
                                                    <p>En su noveno viaje internacional en seis meses, Milei busca
                                                        consolidar su imagen como líder liberal y fortalecer lazos con
                                                        aliados internacionales. Sin embargo, sus políticas y
                                                        declaraciones generan controversia tanto a nivel nacional como
                                                        internacional, reflejando las tensiones inherentes en su enfoque
                                                        económico y político. La capacidad de Milei para manejar estas
                                                        tensiones será crucial para el futuro de Argentina.</p>
                                                    <br>
                                                    <p>UNA VISIÓN ECONÓMICA Y POLÍTICA BAJO CUESTIONAMIENTO</p>
                                                    <br>
                                                    <p>La gira de Milei pone de manifiesto su compromiso con una visión
                                                        económica neoliberal, pero sus políticas están bajo constante
                                                        escrutinio. La falta de medidas efectivas para abordar la crisis
                                                        económica y social en Argentina genera dudas sobre su capacidad
                                                        para liderar el país hacia una recuperación sostenible. En un
                                                        mundo interconectado y complejo, las decisiones de Milei no solo
                                                        afectan a Argentina, sino que también tienen implicaciones
                                                        globales, y la crítica de la comunidad internacional será un
                                                        factor determinante en su éxito o fracaso.</p>
                                                    <br>

                                                    <div class="text-start object-center">
                                                        {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}" alt="">

                                                        <p> <strong>Adriana Zerdín</strong></p>

                                                    </figure> --}}
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol65')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LEY BASES: MILEI Y EL GOLPE AL PUEBLO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 30/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La Cámara de Diputados sancionó los proyectos de Javier Milei,
                                                    otorgándole facultades delegadas. La regresiva reforma laboral y la
                                                    restitución del Impuesto a las Ganancias son algunas de las
                                                    preocupaciones que asedian a la población.</i>
                                            </p>
                                            <br>
                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                        </article> --}}
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_golpe1.svg') }}" alt="">

                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En una sesión maratónica, la Cámara de Diputados aprobó con
                                                        holgura la polémica Ley Bases y el paquete fiscal propuesto por
                                                        el gobierno de Javier Milei. Este avance del Ejecutivo
                                                        representa un duro golpe para la clase trabajadora, que se verá
                                                        afectada por una reforma laboral regresiva y la restitución del
                                                        Impuesto a las Ganancias. El paquete fiscal incluye además
                                                        modificaciones en Bienes Personales y un blanqueo de capitales
                                                        que favorece a las grandes fortunas.
                                                    </p>
                                                    <br>
                                                    <p>El Presidente Milei obtuvo facultades delegadas que le permiten
                                                        privatizar empresas públicas estratégicas y gestionar la
                                                        economía con amplio margen de maniobra. AySA, Trenes Argentinos,
                                                        Belgrano Cargas, Corredores Viales, Enarsa e Intercargo están en
                                                        la lista de posibles privatizaciones. El Régimen de Incentivo a
                                                        las Grandes Inversiones (RIGI) prioriza a las multinacionales
                                                        con beneficios impositivos y cambiarios, poniendo en jaque a la
                                                        industria nacional.
                                                    </p>
                                                    <br>
                                                    <p>El paquete fiscal aprobado incluye la restitución del Impuesto a
                                                        las Ganancias, afectando a unos 800 mil trabajadores que
                                                        volverán a pagar este tributo con alícuotas que van del 5% al
                                                        35%. En contraste, las grandes fortunas tributarán menos: el
                                                        nuevo piso de Bienes Personales sube a 100 millones de pesos,
                                                        con una deducción por vivienda familiar de 350 millones.
                                                    </p>
                                                    <br>
                                                    <p>El gobierno de Javier Milei celebró la aprobación de las leyes.
                                                        Jorge Macri, jefe de gobierno porteño, exclamó en X: “Ahora hay
                                                        que poner en marcha los cambios que el país necesita”. Luis
                                                        Caputo, ministro de Economía, felicitó a los dirigentes y
                                                        agradeció a los políticos “que les importa la gente”.</p>
                                                    <br>
                                                    <p>Desde la oposición, la Diputada Nacional Cecilia Moreau lamentó:
                                                        “El ajuste lo pagan los trabajadores y trabajadoras”. Myriam
                                                        Bregman del FIT criticó la reforma laboral y la carga impositiva
                                                        sobre los trabajadores. Victoria Tolosa Paz apuntó contra Milei,
                                                        acusándolo de usar la extorsión y el maltrato mediático.</p>
                                                    <br>
                                                    <p>Con la aprobación definitiva de la Ley Bases y el paquete fiscal,
                                                        se consolidan los problemas para la mayoría de la población. La
                                                        concentración de poder en el Ejecutivo y la privatización de
                                                        empresas públicas son solo algunas de las medidas que generan
                                                        preocupación. El peronismo anticipó que judicializará algunos
                                                        apartados, como la restitución del Impuesto a las Ganancias y
                                                        las modificaciones en Bienes Personales, que habían sido
                                                        rechazadas por el Senado.</p>
                                                    <br>
                                                    <p>En este contexto, gran parte del pueblo espera que los jueces y
                                                        la justicia en general estén a la altura de las circunstancias,
                                                        protegiendo los derechos de los trabajadores y garantizando la
                                                        equidad en la distribución de cargas tributarias. La aprobación
                                                        de estas leyes marca un punto de inflexión en la política
                                                        argentina, con un gobierno que avanza en reformas que afectan
                                                        profundamente a la clase trabajadora, mientras promete
                                                        beneficios para las grandes inversiones y las fortunas más
                                                        concentradas.</p>
                                                    <br>
                                                    <p>La situación que se avecina para los trabajadores y las clases
                                                        medias argentinas es preocupante. La regresiva reforma laboral y
                                                        la carga impositiva renovada sobre los ingresos más modestos
                                                        contrastan con las ventajas otorgadas a las grandes fortunas y
                                                        las empresas multinacionales. La respuesta del pueblo, que ya se
                                                        manifiesta en diversos sectores, será crucial para enfrentar
                                                        este embate que profundiza las desigualdades y pone en jaque los
                                                        logros sociales de los últimos años.</p>
                                                    <br>
                                                    <p>Javier Milei ha conseguido un avance significativo con la
                                                        aprobación de la Ley Bases y el paquete fiscal, pero el costo
                                                        social y político de estas medidas se verá reflejado en la
                                                        resistencia y la movilización de un pueblo que no está dispuesto
                                                        a aceptar pasivamente estas reformas.</p>
                                                    <br>


                                                    <div class="text-start object-center">
                                                        {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}" alt="">

                                                        <p> <strong>Adriana Zerdín</strong></p>

                                                    </figure> --}}
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol66')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ADIÓS A LA INDEPENDENCIA INFORMATIVA: FORMALIZAN EL GOLPE
                                                A TELAM</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 02/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El gobierno ultra neoliberal de Javier Milei ha dado un golpe
                                                    definitivo a la histórica Agencia Télam, transformándola en una
                                                    Sociedad Anónima Unipersonal bajo la denominación de "Agencia de
                                                    Publicidad del Estado".</i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_adios2.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En un movimiento ampliamente criticado, el gobierno de Javier
                                                        Milei ha oficializado la transformación de Télam Sociedad del
                                                        Estado en una entidad dedicada exclusivamente a la publicidad y
                                                        propaganda estatal. Mediante el Decreto 548/24, publicado
                                                        recientemente en el Boletín Oficial, se ha consumado la quita de
                                                        derechos fundamentales para el pueblo argentino, en particular
                                                        el acceso a una información plural y veraz.
                                                    </p>
                                                    <br>
                                                    <p>Desde su intervención hace casi cuatro meses, Télam ha sido
                                                        sometida a una serie de medidas coercitivas: todos sus
                                                        trabajadores fueron pasados a disponibilidad y una parte
                                                        significativa del personal original fue obligada a aceptar un
                                                        "retiro forzado". Este último decreto consolida la conversión de
                                                        Télam en una entidad comercial bajo el nombre de AGENCIA DE
                                                        PUBLICIDAD DEL ESTADO SOCIEDAD ANÓNIMA UNIPERSONAL (APE S.A.U.),
                                                        con sede en la Jefatura de Gabinete de Ministros y regida por la
                                                        Ley General de Sociedades N° 19.550.
                                                    </p>
                                                    <br>
                                                    <p>Organizaciones sindicales y periodistas han denunciado
                                                        vehementemente esta maniobra como un ataque frontal a la
                                                        libertad de prensa y al derecho a la información. Esta
                                                        transformación no solo vulnera la autonomía informativa de
                                                        Télam, sino que también representa un intento claro de control
                                                        estatal sobre la agenda mediática del país.
                                                    </p>
                                                    <br>
                                                    <p>En respuesta a estas medidas draconianas, los trabajadores de
                                                        Télam, respaldados por el sindicato SiPreBa, han mantenido una
                                                        firme resistencia. Desde las sedes de la calle Bolívar y Avenida
                                                        Belgrano, han expresado su determinación de defender su derecho
                                                        a trabajar en una agencia de noticias independiente y libre de
                                                        presiones políticas.</p>
                                                    <br>
                                                    <p>El cambio de Télam en una agencia de publicidad estatal marca un
                                                        precedente peligroso para el periodismo argentino, consolidando
                                                        un modelo informativo al servicio de los intereses
                                                        gubernamentales y privando a la ciudadanía de una fuente crucial
                                                        de información independiente y plural.
                                                    </p>
                                                    <br>
                                                    <p>El silenciamiento de Télam refleja una estrategia calculada de
                                                        control de la información en un contexto político cada vez más
                                                        polarizado. Este paso ha desatado un intenso debate sobre los
                                                        límites del poder estatal en la comunicación pública y las
                                                        implicancias para la democracia argentina.</p>
                                                    <br>


                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol67')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA ALTERNATIVA SE LLAMA PERONISMO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>A 50 años del paso a la inmortalidad del General Perón, el gobernador
                                                    de la provincia de Buenos Aires encabezó un emotivo acto de
                                                    homenaje, reafirmando el peronismo como alternativa frente al
                                                    experimento anarcocapitalista de Javier Milei y llamando a la unidad
                                                    para defender el proyecto de país que el pueblo argentino
                                                    merece.</i>
                                            </p>
                                            <br>
                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                        </article> --}}
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_alter2.svg') }}" alt="">

                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En un emotivo acto conmemorativo por el 50 aniversario de la
                                                        muerte de Juan Domingo Perón, el gobernador de la provincia de
                                                        Buenos Aires, Axel Kicillof, reafirmó el rol transformador del
                                                        peronismo como contrapeso al actual experimento
                                                        anarcocapitalista liberal libertario que, según él, perjudica
                                                        gravemente al pueblo argentino.
                                                    </p>
                                                    <br>
                                                    <p>"La alternativa al actual experimento anarcocapitalista liberal
                                                        libertario que tanto daño le hace al pueblo se llama peronismo",
                                                        proclamó Kicillof frente a una multitud que se congregó en la
                                                        Quinta San Vicente. Acompañado por líderes políticos, sindicales
                                                        y militantes, Kicillof destacó la vigencia de las ideas de Perón
                                                        en tiempos de desafíos económicos y sociales.
                                                    </p>
                                                    <br>
                                                    <p>El gobernador enfatizó que, lejos de ser una mera conmemoración
                                                        del pasado, el acto tenía como objetivo construir un futuro
                                                        inclusivo y justo para todos los argentinos. Criticó duramente
                                                        las políticas del gobierno nacional, liderado por Javier Milei,
                                                        acusándolo de promover más desigualdad, menos derechos y un
                                                        aumento del desempleo.
                                                    </p>
                                                    <br>
                                                    <p>"Hay más desigualdad, menos derechos y más desempleo. En resumen,
                                                        Javier Milei significa más privilegios para pocos y menos
                                                        derechos para muchos. Es exactamente lo contrario de lo que
                                                        representa el peronismo", señaló Kicillof, haciendo eco de las
                                                        preocupaciones de muchos sectores sociales.</p>
                                                    <br>
                                                    <p>El discurso del gobernador también apuntó a la desregulación y el
                                                        achicamiento del Estado impulsado por el gobierno libertario de
                                                        Milei. Criticó la idea de una Argentina sin Estado, advirtiendo
                                                        que sería una pesadilla para la mayoría, privando al país de
                                                        educación, salud, obra pública y soberanía.
                                                    </p>
                                                    <br>
                                                    <p>En un llamado a la unidad dentro del peronismo y a la resistencia
                                                        popular, Kicillof hizo un guiño al federalismo y a la defensa de
                                                        las instituciones democráticas frente a lo que describió como
                                                        ataques sistemáticos por parte del gobierno actual.</p>
                                                    <p>"El objetivo es una patria justa, libre y soberana. El peronismo
                                                        sigue de pie, va derecho al futuro", concluyó Kicillof,
                                                        subrayando su compromiso de proteger los derechos sociales y
                                                        económicos que considera amenazados por las políticas de Milei.
                                                    </p>
                                                    <br>



                                                    <div class="text-start object-center">
                                                        {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}" alt="">

                                                        <p> <strong>Adriana Zerdín</strong></p>

                                                    </figure> --}}
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol68')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">REINO UNIDO INTENSIFICA SU ACCIÓN ILEGAL EN MALVINAS CON
                                                NUEVAS EXPLORACIONES PETROLÍFERAS</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 05/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El país europeo planea extraer 500 millones de barriles de petróleo de
                                                    la Isla de los Leones Marinos. El diputado Gustavo Pulti presentó un
                                                    proyecto para repudiar esta actividad y exigir una respuesta del
                                                    Gobierno argentino.</i>
                                            </p>
                                            <br>
                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                        </article> --}}
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_islas.svg') }}" alt="">

                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Reino Unido ha renovado su interés por los recursos naturales de
                                                        las Islas Malvinas, con una nueva operación petrolífera que pone
                                                        en riesgo la soberanía argentina sobre estos territorios. La
                                                        compañía israelí Navitas Petroleum ha sido identificada como la
                                                        principal responsable de este proyecto, que pretende extraer 500
                                                        millones de barriles de petróleo de la Isla de los Leones
                                                        Marinos.
                                                    </p>
                                                    <br>
                                                    <p>El anuncio ha generado una fuerte preocupación en Argentina,
                                                        especialmente tras la revelación de que la isla podría contener
                                                        cerca de 1.700 millones de barriles, una cantidad
                                                        significativamente mayor que la estimada en el desarrollo de
                                                        Rosebank en el Mar del Norte británico, que cuenta con
                                                        aproximadamente 300 millones.
                                                    </p>
                                                    <br>
                                                    <p>El medio británico The Telegraph informa que el petróleo extraído
                                                        de la Isla de los Leones Marinos sería procesado a través de un
                                                        buque flotante de producción, almacenamiento y descarga. Este
                                                        buque permitiría el transporte del crudo a los mercados
                                                        internacionales, un plan que parece estar en marcha a pesar de
                                                        la falta de consenso con Argentina.
                                                    </p>
                                                    <br>
                                                    <p>La situación se complica aún más con el hecho de que el Gobierno
                                                        británico ha iniciado un período de consulta con los isleños,
                                                        que se extenderá hasta el 5 de agosto. Sin embargo, la falta de
                                                        participación argentina en las negociaciones resalta la
                                                        ilegalidad de las acciones británicas en las islas.</p>
                                                    <br>
                                                    <p>El diputado provincial Gustavo Pulti ha levantado la voz contra
                                                        esta nueva agresión. En un comunicado contundente, Pulti
                                                        calificó el proceder británico como "ilegítimo" y recordó que el
                                                        proceso de licitación para la exploración de hidrocarburos en
                                                        las Malvinas data de 2010. “El yacimiento en cuestión se
                                                        calificó como de clase mundial, con reservas comprobables de 580
                                                        millones de barriles de petróleo”, destacó el legislador.
                                                    </p>
                                                    <br>
                                                    <p>Pulti expresó su preocupación por el impacto ambiental y
                                                        económico que podría tener esta actividad, que contempla la
                                                        perforación de 23 pozos y la producción de más de 300 millones
                                                        de barriles en un período de 30 años. "El silencio y la inacción
                                                        de la Cancillería violan las leyes y la Constitución nacional",
                                                        enfatizó el diputado, llamando a una firme postura del Gobierno
                                                        argentino frente a la explotación británica.
                                                    </p>
                                                    <br>
                                                    <p>El legislador ha presentado un proyecto en la Cámara de Diputados
                                                        provincial para repudiar esta decisión unilateral e inconsulta y
                                                        exigir una respuesta contundente del Ministerio de Relaciones
                                                        Exteriores, Comercio Internacional y Culto. Esta acción busca
                                                        denunciar la “inacción inexplicable” del gobierno nacional en un
                                                        tema de vital importancia para la soberanía argentina.</p>
                                                    <br>
                                                    <p>Desde Argentina, la protesta ha sido constante, pero la empresa
                                                        Navitas Petroleum ha continuado con sus exploraciones. En 2022,
                                                        la Secretaría de Energía de Argentina la calificó como
                                                        “clandestina” e inhabilitó a la compañía por 20 años para
                                                        desarrollar actividades en territorio nacional.</p>
                                                    <br>
                                                    <p>La situación en las Islas Malvinas se mantiene en el centro del
                                                        conflicto diplomático entre Argentina y Reino Unido, con el
                                                        accionar británico subrayando la necesidad de una respuesta
                                                        firme y efectiva del gobierno argentino para defender los
                                                        recursos naturales y la soberanía nacional.</p>
                                                    <br>



                                                    <div class="text-start object-center">
                                                        {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}" alt="">

                                                        <p> <strong>Adriana Zerdín</strong></p>

                                                    </figure> --}}
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>

            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol69')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA HORA DE LA VERDAD: EL FIN DEL GOBIERNO MILEI</a>
                                            <p class="font-light text-gray-500">Por Daniel Gomez, Politologo.</p>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Los argentinos tenemos muchas formas de decir que algo ha llegado a su
                                                    fin. Siempre está presente esa picardía heredada de nuestros
                                                    abuelos, que llegaron a esta tierra tras interminables viajes y
                                                    cruzando fronteras.</i>
                                            </p>
                                            <br>
                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                        </article> --}}
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_clon.svg') }}" alt="">

                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Recordemos algunas de nuestras expresiones: "está doblando la
                                                        curva", "le picaron el boleto", "llegó a su punto de inflexión".
                                                        Con estas frases, entendemos que junio marcó el momento de no
                                                        retorno para este gobierno, al que, con su permiso, calificaré
                                                        de nefasto.
                                                    </p>
                                                    <br>
                                                    <p>El llamado "plan", o mejor dicho, la serie de medidas económicas
                                                        que parecieran ser más propias de una licuadora o una motosierra
                                                        que de una política económica coherente, llegó a su fin. Este
                                                        gobierno pauperizó a un pueblo ya empobrecido y, a contramano de
                                                        lo que hace el gran presidente de la República Federativa del
                                                        Brasil, Luiz Inácio Lula da Silva, que lucha por elevar a los
                                                        pobres a la clase media, el gobierno de Milei empujó a más gente
                                                        de clase media a la pobreza.
                                                    </p>
                                                    <br>
                                                    <p>La promesa de no emisión fue un cuento chino. La baja de la
                                                        inflación se desvaneció y ya se percibe un rebote ascendente. Se
                                                        devoraron la devaluación de diciembre y volvieron a tener una
                                                        brecha de más del 50% entre los dólares más usados. El campo,
                                                        como suele suceder, se acomodó a la situación y comenzó la
                                                        sequía de liquidación de divisas, lo que podría anticipar una
                                                        nueva devaluación, un salto inflacionario, más emisión o un
                                                        default de la deuda en pesos con los bancos.
                                                    </p>
                                                    <br>
                                                    <p>Algunos indicadores a considerar son los siguientes: la
                                                        producción de las automotrices nacionales cayó 16.7 puntos
                                                        respecto al mes anterior; la venta de cemento se desplomó, lo
                                                        que afecta tanto a la obra pública como a las remodelaciones en
                                                        los hogares; y las ventas en autoservicios de cercanía cayeron
                                                        más del 10% en mayo en comparación con el mismo mes de 2023.
                                                        Estos datos, entre otros, sugieren que al gobierno de Milei le
                                                        picaron el boleto, que las fuerzas del cielo lo han abandonado y
                                                        que ha comenzado su caída.</p>
                                                    <br>
                                                    <p>Como alguien dijo, no diré nada más, pero habrá señales.
                                                    </p>
                                                    <br>




                                                    <div class="text-start object-center">
                                                        {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}" alt="">

                                                        <p> <strong>Adriana Zerdín</strong></p>

                                                    </figure> --}}
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol70')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI CELEBRA SU PACTO DE MAYO, EN JULIO, ENTRE AUSENCIAS
                                                Y REPRESIÓN POLICIAL</a>
                                            {{-- <p class="font-light text-gray-500">Por Daniel Gomez, Politologo.</p>  --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El presidente Javier Milei consiguió la fotografía que había buscado
                                                    desde el inicio de su mandato: la firma del Pacto de Mayo en la Casa
                                                    Histórica de Tucumán, con la presencia de 18 gobernadores. Sin
                                                    embargo, el acto que celebró como una victoria política estuvo
                                                    marcado por ausencias destacadas y una represión policial que
                                                    oscureció el evento.</i>
                                            </p>
                                            <br>
                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                        </article> --}}
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_pacto.svg') }}" alt="">

                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>A la medianoche del 8 de julio, en un acto que se llevó a cabo
                                                        para conmemorar el 208º aniversario de la Declaración de la
                                                        Independencia, Milei y los gobernadores firmaron un acuerdo
                                                        compuesto por diez puntos destinados a "refundar el país". Entre
                                                        los firmantes se destacaron los expresidentes Mauricio Macri y
                                                        Adolfo Rodríguez Saá, así como un grupo de gobernadores
                                                        alineados con la visión neoliberal del actual presidente. No
                                                        obstante, la firma no logró el consenso total: importantes
                                                        figuras políticas y representantes de distintos sectores se
                                                        ausentaron, evidenciando la falta de apoyo y legitimidad del
                                                        pacto.
                                                    </p>
                                                    <br>
                                                    <p>El acto, que el gobierno presentó como un hito histórico, no pudo
                                                        ocultar la realidad de su rechazo generalizado. Gobernadores
                                                        como Axel Kicillof de Buenos Aires, Gildo Insfrán de Formosa y
                                                        Ricardo Quintela de La Rioja, entre otros, se ausentaron, al
                                                        igual que la vicepresidenta Victoria Villarruel, que alegó un
                                                        estado gripal. La ausencia de la Corte Suprema y de la CGT
                                                        también fue notable, reflejando un desdén institucional hacia el
                                                        acuerdo.
                                                    </p>
                                                    <br>
                                                    <p>La represión en los alrededores del teatro del evento agravó la
                                                        controversia. La policía provincial reprimió con violencia a
                                                        militantes que habían convocado un acto con olla popular para
                                                        expresar su desacuerdo con el gobierno de Milei. Cuatro personas
                                                        fueron detenidas, entre ellas Jesús Ruiz de Patria Grande,
                                                        Walter Díaz de ADIUNT, Daniel Leal de la CCC y Peter Delgadino
                                                        del Frente Barrial 19 de diciembre. Los hechos fueron reportados
                                                        por medios alternativos, que mostraron una realidad muy
                                                        diferente a la imagen oficial del evento.
                                                    </p>
                                                    <br>
                                                    <p>En su discurso, Milei hizo hincapié en la necesidad de reformas
                                                        económicas y sociales que, según él, son imprescindibles para el
                                                        futuro del país. No obstante, sus críticas a quienes se oponen
                                                        al pacto y su insistencia en una agenda neoliberal, desestimaron
                                                        las voces disidentes y exacerbaron la polarización. El
                                                        presidente acusó a sus detractores de intentar boicotear su
                                                        gobierno y de beneficiarse a expensas del sufrimiento general.
                                                    </p>
                                                    <br>
                                                    <p>El Pacto de Mayo, en lugar de consolidar un acuerdo nacional, se
                                                        ha convertido en un símbolo de las divisiones políticas y
                                                        sociales que caracterizan a la Argentina actual. La falta de
                                                        consenso y la represión de la disidencia evidencian la falta de
                                                        legitimidad y el carácter excluyente de las políticas impulsadas
                                                        por Milei. En definitiva, el acto no ha logrado más que
                                                        profundizar la fractura en la sociedad argentina, evidenciando
                                                        la resistencia de un gobierno que parece más interesado en
                                                        imponer su agenda que en construir verdaderos consensos.
                                                    </p>
                                                    <br>



                                                    <div class="text-start object-center">
                                                        {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}" alt="">

                                                        <p> <strong>Adriana Zerdín</strong></p>

                                                    </figure> --}}
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol71')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DENUNCIAN A DIPUTADA LIBERTARIA POR EXTORSIÓN A SUS
                                                ASESORES</a>
                                            {{-- <p class="font-light text-gray-500">Por Daniel Gomez, Politologo.</p>  --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 20/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La acusación surge en medio de la polémica por la visita de diputados
                                                    oficialistas a represores en Ezeiza, incrementando la tensión dentro
                                                    de La Libertad Avanza.</i>
                                            </p>
                                            <br>
                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                        </article> --}}
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_libertaria.svg') }}"
                                                    alt="">

                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>La bancada libertaria en el Congreso se enfrenta a una nueva
                                                        controversia que expone aún más la naturaleza corrupta y opaca
                                                        de La Libertad Avanza. Esta vez, la denuncia es contra la
                                                        diputada cordobesa María Celeste Ponce, acusada de extorsionar a
                                                        sus propios colaboradores. Según el youtuber El Presto, Ponce
                                                        habría exigido pagos a sus asesores a cambio de contratos. La
                                                        denuncia llega en un momento crítico, añadiendo combustible a la
                                                        ya tensa situación generada por la polémica visita de diputados
                                                        oficialistas a represores en Ezeiza.
                                                    </p>
                                                    <br>
                                                    <p>El Presto reveló en uno de sus streams que Ponce, después de
                                                        nombrar apresuradamente a un grupo de asesores en diciembre,
                                                        habría solicitado a una de las denunciantes el pago de 500 mil
                                                        pesos para asegurar un contrato que le reportaría a la asesora
                                                        unos 700 mil pesos. Esta maniobra no es más que otro ejemplo de
                                                        la corrupción y el clientelismo que caracterizan al espacio
                                                        liderado por Javier Milei.
                                                    </p>
                                                    <br>
                                                    <p>Ponce llegó a la lista de diputados el año pasado por un fuerte
                                                        pedido desde la cúpula libertaria, respaldada por su agrupación
                                                        Pumas Libertarios, con una base sólida en el sur de Córdoba.
                                                        "Vino impuesta e injertada de afuera y hubo que acceder. Y
                                                        siempre se ponía al frente la relación con el muchacho", comentó
                                                        una fuente familiarizada con la campaña de Milei en 2023,
                                                        destacando la falta de transparencia y democracia interna en el
                                                        armado de listas.
                                                    </p>
                                                    <br>
                                                    <p>Convertida en una de las tres diputadas de La Libertad Avanza
                                                        junto a Gabriel Bornoroni y Cecilia Ibáñez, Ponce enfrenta ahora
                                                        serias acusaciones internas. "Si esto crece, va a ser otro tema
                                                        de fricción que se suma a lo de la visita a los genocidas",
                                                        afirmó una persona cercana a la bancada que lidera Bornoroni.
                                                        Este tipo de prácticas corruptas y la falta de ética parecen ser
                                                        la norma y no la excepción en el espacio libertario.</p>
                                                    <br>
                                                    <p>La situación se complica con la posibilidad de un interbloque con
                                                        el PRO, una estrategia que Milei siempre ha deseado para
                                                        consolidar su poder a expensas del verdadero debate y
                                                        representación democrática. "Es probable, es lo que siempre
                                                        quiso Milei, que nos juntemos con los amarillos. Estamos en
                                                        conversaciones", añadió la fuente, subrayando la desesperación
                                                        por mantenerse a flote en medio de la creciente impopularidad y
                                                        escándalos.
                                                    </p>
                                                    <br>
                                                    <p>Cecilia Ibáñez, quien se unió al Movimiento de Integración y
                                                        Desarrollo (MID) en abril, podría distanciarse de Ponce si la
                                                        denuncia resulta ser cierta. "Si llega a ser así, Cecilia se va
                                                        a despegar de manera completa de Ponce. Es todo lo contrario a
                                                        lo que Ibáñez piensa, hace y dice", comentaron desde su entorno,
                                                        tratando de salvar las apariencias en un espacio plagado de
                                                        prácticas cuestionables.</p>
                                                    <br>
                                                    <p>La situación en Córdoba se vuelve más crítica, ya que Bornoroni,
                                                        además de ser jefe de bloque, ha sido apoyado por Karina Milei y
                                                        Martín Menem para fortalecer el sello de La Libertad Avanza en
                                                        la provincia. Este conflicto interno ocurre en un contexto donde
                                                        no habrá elecciones para el Senado ni renovaciones de bancas en
                                                        la Legislatura provincial el próximo año, complicando aún más el
                                                        panorama político. Todo esto refleja la incapacidad de La
                                                        Libertad Avanza para manejarse de manera ética y coherente.</p>
                                                    <br>
                                                    <p>La denuncia contra Ponce y la tensión creciente dentro de La
                                                        Libertad Avanza podrían tener repercusiones significativas en el
                                                        futuro político del partido, exponiendo la corrupción y la falta
                                                        de transparencia que impera en sus filas. Es imperativo que la
                                                        justicia y la sociedad civil actúen con firmeza para
                                                        desenmascarar y sancionar estas prácticas, asegurando que el
                                                        verdadero espíritu democrático y representativo prevalezca.</p>
                                                    <br>



                                                    <div class="text-start object-center">
                                                        {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}" alt="">

                                                        <p> <strong>Adriana Zerdín</strong></p>

                                                    </figure> --}}
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol72')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI DESVÍA FONDOS MILLONARIOS A LA SIDE MIENTRAS LA
                                                SOCIEDAD SUFRE AJUSTES</a>
                                            {{-- <p class="font-light text-gray-500">Por Daniel Gomez, Politologo.</p>  --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 24/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El gobierno de Javier Milei asigna $100 mil millones a la SIDE
                                                    mientras la población enfrenta severos recortes y dificultades
                                                    económicas.</i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_desvio.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>La reciente decisión del gobierno de Javier Milei de asignar $100
                                                        mil millones a la Secretaría de Inteligencia del Estado (SIDE),
                                                        anunciada mediante el Decreto 656/2024, ha generado una fuerte
                                                        polémica. Este significativo desembolso ocurre en un contexto de
                                                        ajuste fiscal que impacta severamente a la población,
                                                        evidenciado por altos niveles de desocupación y pobreza.
                                                    </p>
                                                    <br>
                                                    <p>La resolución establece la reedición de la SIDE, reemplazando a
                                                        la Agencia Federal de Inteligencia (AFI). La medida, descrita
                                                        como parte de una reforma del Sistema de Inteligencia Nacional
                                                        (SIN), tiene como objetivo fortalecer los mecanismos de
                                                        coordinación entre los distintos organismos de inteligencia del
                                                        país. Según el decreto, el propósito es “proteger la soberanía
                                                        nacional, preservar el orden constitucional y proporcionar
                                                        apreciaciones de inteligencia útiles para los objetivos
                                                        nacionales”.
                                                    </p>
                                                    <br>
                                                    <p>La SIDE, bajo la dependencia directa de Milei, supervisará la
                                                        operación de cuatro nuevas agencias: el Servicio de Inteligencia
                                                        Argentino (SIA), la Agencia de Seguridad Nacional (ASN), la
                                                        Agencia Federal de Inteligencia (AFC) y la División de Asuntos
                                                        Internos (DAI). Cada una de estas entidades tiene funciones
                                                        específicas, que van desde la recopilación de información
                                                        estratégica hasta la supervisión de recursos.
                                                    </p>
                                                    <br>
                                                    <p>Desde la asunción de Milei, los gastos reservados en inteligencia
                                                        han aumentado un 391%. El decreto establece que los $100 mil
                                                        millones asignados serán de carácter reservado, sin necesidad de
                                                        rendir cuentas. Esta cifra se destinará a la reorganización y
                                                        funcionamiento de la SIDE y sus agencias asociadas, en un
                                                        contexto donde el gobierno ha priorizado el ajuste económico
                                                        sobre el bienestar social.</p>
                                                    <br>
                                                    <p>El artículo 1 del decreto menciona que los fondos se asignan para
                                                        el fortalecimiento del Sistema de Inteligencia Nacional,
                                                        mientras que el segundo artículo subraya el carácter reservado
                                                        de los recursos. La firma del decreto cuenta con el respaldo de
                                                        figuras clave del gobierno, incluidos el presidente Javier Milei
                                                        y varios ministros de su gabinete.
                                                    </p>
                                                    <br>
                                                    <p>En resumen, la asignación millonaria a la SIDE en un periodo de
                                                        ajuste severo pone de relieve una contradicción en la política
                                                        de Milei, que prioriza los gastos en inteligencia mientras
                                                        enfrenta críticas por la creciente pobreza y desocupación en el
                                                        país.</p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol73')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">KICILLOF DEFENDIÓ A BUENOS AIRES EN LA DISPUTA POR LA
                                                PLANTA DE GNL</a>
                                            {{-- <p class="font-light text-gray-500">Por Daniel Gomez, Politologo.</p>  --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 25/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El gobernador Axel Kicillof enfrenta una maniobra política del
                                                    presidente Javier Milei que pone en riesgo el desarrollo estratégico
                                                    de Buenos Aires. La disputa por la ubicación de la planta de Gas
                                                    Natural Licuado (GNL) destaca la diferencia entre el compromiso
                                                    regional de Kicillof y las tácticas de Milei.</i>
                                            </p>
                                            <br>
                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                        </article> --}}
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_kicignl.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Uno de los proyectos más significativos en términos de desarrollo
                                                        estratégico y inversiones de los últimos años es la planta de
                                                        Gas Natural Licuado (GNL), promovida por YPF y la petrolera
                                                        malaya Petronas. La iniciativa, que consiste en construir una
                                                        planta de licuefacción de gas proveniente del yacimiento Vaca
                                                        Muerta, promete una importante entrada de divisas extranjeras a
                                                        Argentina al facilitar la exportación de gas.
                                                    </p>
                                                    <br>
                                                    <p>A pesar de que las condiciones estructurales indican que Bahía
                                                        Blanca sería la ubicación ideal para la planta debido a su
                                                        infraestructura portuaria y cercanía con los nodos de
                                                        distribución, el presidente Javier Milei ha propuesto trasladar
                                                        el proyecto a Punta Colorada, en la provincia de Río Negro. Esta
                                                        decisión, lejos de responder a consideraciones técnicas, tiene
                                                        motivaciones puramente políticas.
                                                    </p>
                                                    <br>
                                                    <p>Milei busca disciplinar a Axel Kicillof, gobernador de Buenos
                                                        Aires y principal referente de la oposición, como represalia por
                                                        su rechazo a adherir al Régimen de Incentivo a las Grandes
                                                        Inversiones (RIGI), una política impulsada por Milei que ha sido
                                                        ampliamente criticada por su impacto negativo en el desarrollo
                                                        equilibrado del país.
                                                    </p>
                                                    <br>
                                                    <p>El proyecto original, impulsado durante el gobierno de Alberto
                                                        Fernández, contemplaba la construcción de la planta en Bahía
                                                        Blanca. Esta ubicación ofrecía ventajas logísticas cruciales
                                                        para el desarrollo del proyecto, que requiere una inversión
                                                        histórica de 50.000 millones de dólares. Sin embargo, el cambio
                                                        de gobierno y la inclusión del RIGI en el paquete de leyes
                                                        fiscales detuvieron el avance del proyecto.</p>
                                                    <br>
                                                    <p>El gobierno de Kicillof se opuso al RIGI, presentando en su lugar
                                                        un sistema tributario alternativo que busca proteger los
                                                        intereses de Buenos Aires y asegurar que las inversiones generen
                                                        beneficios claros para la provincia. Kicillof ha señalado que
                                                        las exportaciones desde Buenos Aires representarían la mitad de
                                                        las exportaciones del país, subrayando la importancia
                                                        estratégica de su propuesta.
                                                    </p>
                                                    <br>
                                                    <p>Mientras tanto, Milei, al apoyar la ubicación en Río Negro, ha
                                                        criticado a Kicillof, tildándolo de “comunista expropiador” y
                                                        buscando beneficiar al gobernador de Río Negro, Alberto
                                                        Weretilneck, quien ha prometido un puerto privado para la
                                                        planta. Sin embargo, la provincia patagónica no cuenta con la
                                                        infraestructura necesaria, y la construcción de un puerto en esa
                                                        región implicaría costos adicionales significativos.</p>
                                                    <br>
                                                    <p>A pesar de los desafíos, Kicillof se mantiene firme en su
                                                        posición, confiando en que YPF y Petronas evaluarán la
                                                        conveniencia técnica y económica de la ubicación del proyecto
                                                        con total profesionalismo. Su postura destaca su compromiso con
                                                        los derechos de Buenos Aires y su rechazo a las políticas
                                                        perjudiciales de Milei, reafirmando su papel como defensor de
                                                        los intereses de su provincia frente a las maniobras políticas
                                                        del gobierno nacional.</p>
                                                    <br>


                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol74')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MOREAU CUESTIONÓ AL GOBIERNO Y ALERTÓ SOBRE DERIVA
                                                AUTORITARIA</a>
                                            {{-- <p class="font-light text-gray-500">Por Daniel Gomez, Politologo.</p>  --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 16/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El diputado Leopoldo Moreau criticó el desorden en las sesiones de la
                                                    Cámara y denunció el uso excesivo de decretos por parte del
                                                    gobierno, alertando sobre la erosión de la democracia y el
                                                    desmantelamiento de instituciones clave.</i>
                                            </p>
                                            <br>
                                            <article>
                                                <iframe class="w-full aspect-video"
                                                    src="https://www.youtube.com/embed/Z4mV98JfsV4?si=s0FbdjMb5jjA76Yf"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin"
                                                    allowfullscreen></iframe>

                                            </article>
                                            {{-- <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_kicignl.svg') }}" alt="">

                                        </figure> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En una acalorada sesión en la Cámara de Diputados, el legislador
                                                        Leopoldo Moreau expresó su preocupación por el caos en los
                                                        debates parlamentarios, destacando que la discusión simultánea
                                                        de múltiples temas conduce a la confusión y socava la
                                                        credibilidad del Congreso. "Es muy difícil transitar una sesión
                                                        debatiendo a la vez 10 temas que se mezclan y se termina por no
                                                        saber qué se está discutiendo", señaló, advirtiendo que esta
                                                        desorganización daña la confianza pública en la democracia.
                                                    </p>
                                                    <br>
                                                    <p>Moreau criticó duramente al gobierno por recurrir
                                                        sistemáticamente a los decretos de necesidad y urgencia (DNU),
                                                        acusándolo de erosionar las facultades del Poder Legislativo.
                                                        Recordó que un sector político había otorgado al gobierno
                                                        herramientas poderosas, que fueron utilizadas en exceso. "El
                                                        gobierno siguió adelante con decretos a troche y moche", afirmó,
                                                        preocupándose por el debilitamiento del Congreso en su rol
                                                        legislativo.
                                                    </p>
                                                    <br>
                                                    <p>El diputado también cuestionó las visitas de legisladores a
                                                        represores encarcelados, sugiriendo que podrían estar orientadas
                                                        a "poner en marcha una conspiración que pretenda dar vuelta la
                                                        historia de la Argentina". Criticó la posible complicidad del
                                                        Servicio Penitenciario Federal, ahora bajo la órbita del
                                                        Ministerio de Seguridad, y evocó su propia experiencia en
                                                        visitas a detenidos, destacando las estrictas normas que
                                                        entonces imperaban.
                                                    </p>
                                                    <br>
                                                    <p>Además, Moreau denunció la reciente decisión del gobierno de
                                                        suprimir la unidad especial para la búsqueda de niños
                                                        desaparecidos durante la dictadura, adscripta a la Comisión
                                                        Nacional por el Derecho a la Identidad (CONADI). "El gobierno
                                                        suprimió la unidad especial para la desaparición de niños en la
                                                        época del terrorismo de Estado", señaló, subrayando la
                                                        incoherencia con el avance de una ley para la base de datos
                                                        genéticos discutida en la misma sesión.</p>
                                                    <br>
                                                    <p>Para Moreau, estas acciones revelan una peligrosa deriva
                                                        autoritaria y una falta de compromiso con la memoria histórica.
                                                        Llamó a superar la polarización política y a enfocarse en la
                                                        defensa de los valores democráticos: "Se está con la democracia
                                                        o se está con el autoritarismo", concluyó, advirtiendo sobre los
                                                        riesgos de permitir prácticas autoritarias en el corazón de la
                                                        democracia argentina.
                                                    </p>
                                                    <br>




                                                    <div class="text-start object-center">
                                                        {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}" alt="">

                                                        <p> <strong>Adriana Zerdín</strong></p>

                                                    </figure> --}}
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol75')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ADIÓS A LA INDEPENDENCIA INFORMATIVA: FORMALIZAN EL GOLPE
                                                A TELAM</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 02/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El gobierno ultra neoliberal de Javier Milei ha dado un golpe
                                                    definitivo a la histórica Agencia Télam, transformándola en una
                                                    Sociedad Anónima Unipersonal bajo la denominación de "Agencia de
                                                    Publicidad del Estado".</i>
                                            </p>
                                            <br>
                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                        </article> --}}
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_uniside.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En el Senado, la oposición logró aprobar por amplia mayoría el
                                                        financiamiento a las universidades nacionales y rechazó el DNU
                                                        de la SIDE, marcando una doble derrota para el gobierno.
                                                        Mientras tanto, la aprobación de la Boleta Única de Papel fue el
                                                        único consuelo oficialista.
                                                    </p>
                                                    <br>
                                                    <p>La oposición, tras haber sufrido una derrota en Diputados,
                                                        redobló su apuesta en el Senado y logró aprobar el aumento del
                                                        presupuesto para las universidades nacionales. Con 57 votos a
                                                        favor y solo 10 en contra, la oposición no solo consiguió
                                                        blindar la ley ante un posible veto presidencial, sino que
                                                        también logró rechazar el DNU de la SIDE con 49 votos.
                                                    </p>
                                                    <br>
                                                    <p>El debate sobre la Ley de Financiamiento Universitario se dio en
                                                        un contexto de movilizaciones masivas a favor de la educación
                                                        pública. La ley sancionada garantiza fondos para funcionamiento
                                                        y salarios docentes ajustados al Índice de Precios al Consumidor
                                                        (IPC). "Un presidente que veta esta ley desconoce la brecha
                                                        entre el pueblo y su gobierno", sentenció Maximiliano Abad, de
                                                        la UCR, ante la amenaza de un veto por parte del Ejecutivo.
                                                    </p>
                                                    <br>
                                                    <p>Por otro lado, el rechazo del DNU de la SIDE representó otro
                                                        golpe para el gobierno. Conducida por el radical Eduardo Vischi,
                                                        la oposición logró una mayoría sólida en ambas votaciones,
                                                        dejando a la Casa Rosada en una posición defensiva. "Nadie
                                                        quiere que el VAR te marque dos veces en offside", ironizó un
                                                        senador opositor tras las dos derrotas legislativas.
                                                    </p>
                                                    <br>
                                                    <p>La única victoria del gobierno fue la aprobación de la Boleta
                                                        Única de Papel (BUP), con 39 votos a favor y 30 en contra,
                                                        aunque la ley deberá ser tratada nuevamente en Diputados. La BUP
                                                        propone cambiar el mecanismo de votación, reemplazando las
                                                        boletas partidarias por una única que incluya todas las opciones
                                                        electorales.
                                                    </p>
                                                    <br>


                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')

                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol76')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CRISTINA A MILEI: “DEJE DE SEGUIR A FRIEDMAN Y ADMINISTRE
                                                EL PAÍS”</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 14/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Cristina Kirchner criticó duramente la política económica de Javier
                                                    Milei, cuestionando el veto a la Ley de Movilidad Jubilatoria y
                                                    pidiendo un enfoque más pragmático.</i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_crismerlo.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>La expresidenta Cristina Kirchner criticó severamente la política
                                                        económica de Javier Milei en un evento en la Universidad
                                                        Nacional del Oeste, donde recibió el doctorado Honoris Causa. En
                                                        su discurso, cuestionó el veto a la Ley de Movilidad Jubilatoria
                                                        y pidió al presidente que abandone la "escuela austríaca" para
                                                        adoptar un enfoque más pragmático.
                                                    </p>
                                                    <br>
                                                    <p>Durante la ceremonia, Kirchner, acompañada por el gobernador Axel
                                                        Kicillof y la vicegobernadora Verónica Magario, condenó el
                                                        reciente veto a la Ley de Movilidad Jubilatoria, argumentando
                                                        que este ha perjudicado a los jubilados. Se refirió a los cinco
                                                        votos de la UCR que permitieron el veto, señalando que Milei ha
                                                        terminado comprando a la "casta política" que criticaba durante
                                                        su campaña. Según Kirchner, esta situación refleja una traición
                                                        a los principios de su campaña electoral.
                                                    </p>
                                                    <br>
                                                    <p>En su análisis de la situación económica, Kirchner criticó la
                                                        política de "economía bimonetaria" promovida por el gobierno
                                                        actual, que, según ella, ha llevado al país a una crisis
                                                        profunda, con empresas quebrando y deflación. La expresidenta
                                                        cuestionó la efectividad de las políticas de ajuste,
                                                        argumentando que el superávit fiscal obtenido a costa de los más
                                                        vulnerables no es una solución real. Instó a Milei a "abandonar
                                                        a Friedman y la escuela austríaca" y a adoptar un enfoque que
                                                        considere la realidad económica del país.
                                                    </p>
                                                    <br>
                                                    <p>Kirchner también abordó el tema de la competencia de monedas
                                                        propuesta por Milei, criticando la contradicción entre esta
                                                        teoría y las dificultades económicas actuales. Se refirió a la
                                                        falta de dólares para la dolarización prometida y a las
                                                        tensiones con el FMI, subrayando la ineficacia de las políticas
                                                        actuales.
                                                    </p>
                                                    <br>
                                                    <p>Además, la exmandataria celebró la reciente sanción de la Ley de
                                                        Financiamiento Universitario, destacando su importancia para
                                                        asegurar la calidad educativa. A pesar del casi seguro veto
                                                        presidencial, Kirchner elogió a los senadores por su apoyo a la
                                                        ley.
                                                    </p>
                                                    <br>
                                                    <p>En su mensaje final, Kirchner hizo un llamado a la militancia
                                                        para que se comprometa a cambiar el sentido común a través de
                                                        datos y a promover el respeto mutuo en el debate político. "La
                                                        tarea no solo es modificar el sentido común de las cosas a
                                                        través de datos, sino salir a convencer del respeto al otro",
                                                        concluyó, destacando la necesidad de un diálogo más inclusivo y
                                                        respetuoso.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')

                </div>

            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol77')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ENFRENTAMIENTO EN EL CONGRESO POR MALVINAS</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 28/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La embajadora británica se negó a una foto con diputada peronista que
                                                    llevaba una remera con el lema "Las Malvinas son Argentinas".</i>
                                            </p>
                                            <br>
                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                        </article> --}}
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_diputadamalvinas.svg') }}"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>La Cámara de Diputados vivió un momento tenso este jueves cuando
                                                        la embajadora del Reino Unido, Kirsty Hayes, se negó a
                                                        participar de una fotografía protocolar con legisladores
                                                        argentinos debido a la vestimenta de la diputada Agustina
                                                        Propato. La legisladora de Unión por la Patria, que asistió al
                                                        evento con una remera que decía “Las Malvinas son Argentinas”,
                                                        se negó a cambiarse, argumentando su derecho a llevar un símbolo
                                                        que representa la lucha por la soberanía nacional.
                                                    </p>
                                                    <br>
                                                    <p>El incidente ocurrió durante la constitución del grupo
                                                        parlamentario entre el Reino Unido y Argentina. A pesar de las
                                                        insistencias de la embajadora, quien solicitó a Propato que se
                                                        cambiara de remera o se retirara de la foto, la diputada se
                                                        mantuvo firme en su decisión. “No se me puede pedir que me quite
                                                        un símbolo que homenajea a nuestros caídos en Malvinas”, sostuvo
                                                        Propato, quien además enfatizó que todos los argentinos deberían
                                                        poder lucir una prenda similar en honor a los héroes de la
                                                        guerra.
                                                    </p>
                                                    <br>
                                                    <p>La controversia se intensificó cuando otros diputados, como
                                                        Martín Tetaz, Lisandro Almirón y Margarita Stolbizer, apoyaron
                                                        la petición de la embajadora, lo que llevó a Propato a
                                                        manifestar su desacuerdo en redes sociales. “Esta es la remera
                                                        que no me pienso sacar”, publicó, acompañado de una foto que
                                                        mostró su postura inquebrantable sobre el tema. A través de sus
                                                        declaraciones, la diputada reafirmó su compromiso con la causa
                                                        Malvinas y criticó la exigencia de la embajadora británica como
                                                        un intento de silenciar la historia y la memoria colectiva de
                                                        los argentinos.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                        {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}" alt="">

                                                        <p> <strong>Adriana Zerdín</strong></p>

                                                    </figure> --}}
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')

                </div>

            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol78')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">TRUMP SE DIFERENCIA DE MILEI EN SU ENFOQUE ECONÓMICO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 29/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El expresidente busca repatriar la producción automotriz con medidas
                                                    proteccionistas, a diferencia del enfoque de Milei que promueve un
                                                    mercado abierto.</i>
                                            </p>
                                            <br>
                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                        </article> --}}
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_trumpmilei.svg') }}"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Donald Trump ha intensificado su discurso proteccionista al
                                                        proponer un arancel del 100% sobre los automóviles fabricados en
                                                        México, con el objetivo de repatriar la producción automotriz y
                                                        evitar que las empresas estadounidenses trasladen sus
                                                        operaciones al extranjero. Esta medida forma parte de su visión
                                                        para una “nueva industrialización estadounidense”, donde la
                                                        manufactura y los empleos regresen al país a través de fuertes
                                                        aranceles y la oferta de incentivos para empresas que decidan
                                                        producir en Estados Unidos.
                                                    </p>
                                                    <br>
                                                    <p>El expresidente enfatizó que su meta es convertir a compañías
                                                        extranjeras, como las automotrices alemanas, en fabricantes
                                                        estadounidenses. Su enfoque se basa en obligar a las empresas a
                                                        trasladar su producción a EE. UU. para evitar el elevado
                                                        arancel, una estrategia que podría alterar significativamente la
                                                        industria automotriz global. Muchas automotrices, que producen
                                                        vehículos en México debido a menores costos de mano de obra, se
                                                        verían obligadas a replantear sus operaciones.
                                                    </p>
                                                    <br>
                                                    <p>A diferencia de Javier Milei, quien promueve una política de
                                                        mercado completamente abierta, sin intervención estatal y con
                                                        una clara oposición a los impuestos y retenciones, Trump adopta
                                                        un enfoque pragmático que incluye aranceles y medidas
                                                        proteccionistas. Mientras Milei sostiene que la libertad
                                                        económica absoluta es el camino para el crecimiento, Trump no
                                                        descarta la intervención del Estado para proteger y desarrollar
                                                        la industria nacional. Esta diferencia clave subraya que Trump
                                                        está dispuesto a imponer barreras comerciales para asegurar que
                                                        las fábricas y los empleos permanezcan en EE.
                                                    </p>
                                                    <br>
                                                    <p>UU., mientras que Milei, con su ideología de mercado libre, corre
                                                        el riesgo de desindustrializar a Argentina y dejar a su economía
                                                        aún más vulnerable.
                                                    </p>
                                                    <br>
                                                    <p>Además de los aranceles, Trump propone reducir el impuesto
                                                        corporativo del 21% al 15%, pero solo para las empresas que
                                                        fabriquen en EE. UU. También sugiere crear un “embajador
                                                        industrial” para atraer inversiones extranjeras, ofreciendo
                                                        terrenos federales como incentivo. Sin embargo, estas promesas
                                                        enfrentan posibles restricciones legales, lo que genera dudas
                                                        sobre su viabilidad.
                                                    </p>
                                                    <br>
                                                    <p>En resumen, la visión económica de Trump se centra en una mezcla
                                                        de proteccionismo, incentivos fiscales y medidas
                                                        intervencionistas para fortalecer la manufactura estadounidense.
                                                        Esto contrasta drásticamente con las políticas de libre mercado
                                                        promovidas por Javier Milei, quien parece llevar a Argentina por
                                                        un camino equivocado, ignorando las lecciones que la economía
                                                        global ha dejado sobre la importancia de proteger la industria
                                                        local.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                        {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}" alt="">

                                                        <p> <strong>Adriana Zerdín</strong></p>

                                                    </figure> --}}
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')


                </div>

            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol79')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">BUKELE Y VILLARRUEL: UNA REUNIÓN QUE LEVANTA POLÉMICA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 02/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La vicepresidenta de la Nación recibió al mandatario salvadoreño, cuya
                                                    gestión enfrenta severas críticas por su enfoque autoritario en la
                                                    seguridad.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_bukele.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>La vicepresidenta de la Nación y presidenta del Senado, Victoria
                                                        Villarruel, se reunió este martes con el presidente de El
                                                        Salvador, Nayib Bukele. El encuentro, marcado por un carácter
                                                        reservado, incluyó la firma en el Libro de Honor y el
                                                        intercambio de obsequios. Sin embargo, la conversación que más
                                                        ha captado la atención pública fue aquella en la que ambos
                                                        líderes discutieron sobre el uso de bitcoin, un tema que
                                                        despierta tanto interés como controversia en sus respectivos
                                                        países.
                                                    </p>
                                                    <br>
                                                    <p>Villarruel inició el diálogo al abordar la creciente preocupación
                                                        en Argentina sobre el crimen organizado y la violencia,
                                                        interpelando a Bukele sobre su estrategia para combatir las
                                                        Maras, que han dejado una huella de terror en El Salvador.
                                                        Bukele, conocido por su enfoque de mano dura, compartió su
                                                        experiencia al reducir la tasa de homicidios en su país, pero
                                                        sus métodos han sido objeto de críticas internacionales por las
                                                        violaciones a los derechos humanos y la falta de debido proceso.
                                                    </p>
                                                    <br>
                                                    <p>En un momento donde el narcotráfico también es un tema candente
                                                        en Argentina, la senadora Carolina Losada destacó el grave
                                                        problema que enfrenta su provincia con el crimen organizado,
                                                        sugiriendo que la situación es alarmante y requiere atención
                                                        urgente. Sin embargo, Bukele desvió la conversación,
                                                        argumentando que, aunque la inseguridad ha aumentado, Argentina
                                                        sigue siendo más segura en comparación con su país, donde el
                                                        control de las pandillas era absoluto.
                                                    </p>
                                                    <br>
                                                    <p>Los antecedentes de la administración Bukele son complejos: su
                                                        gobierno ha sido denunciado por la represión de la oposición y
                                                        el debilitamiento de las instituciones democráticas. La
                                                        preocupación por la "normalización" de un enfoque autoritario en
                                                        el combate al crimen se hace evidente en las palabras del
                                                        presidente salvadoreño, quien a menudo enfatiza la "unión de
                                                        todos los sectores" como clave para enfrentar la inseguridad.
                                                    </p>
                                                    <br>
                                                    <p>Villarruel concluyó la reunión enfatizando la importancia de
                                                        forjar lazos entre Argentina y El Salvador, pero el encuentro
                                                        con Bukele plantea interrogantes sobre la dirección de las
                                                        políticas de seguridad en el país y si esta asociación no podría
                                                        significar un alineamiento con un modelo que desatiende los
                                                        derechos humanos en favor de medidas represivas.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')


                </div>

            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol80')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MACRI REUNIÓN A SENADORES DEL PRO ANTE VETO DE MILEI</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 04/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El ex presidente busca una negociación con el gobierno mientras la
                                                    tensión por el veto a la educación pública aumenta.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_reunion.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Mauricio Macri organizó una reunión en su casa en Acassuso con
                                                        seis senadores del bloque PRO para discutir el veto del
                                                        presidente Javier Milei al aumento de fondos para las
                                                        universidades, una decisión que ha causado preocupación en el
                                                        oficialismo. En el encuentro, Macri adoptó una postura
                                                        cautelosa, afirmando que espera una negociación con la Casa
                                                        Rosada y que, por el momento, prefiere comunicarse con Milei a
                                                        través de mensajes de texto para evitar malentendidos.
                                                    </p>
                                                    <br>
                                                    <p>Durante la reunión, que comenzó a las 8:45 y fue acompañada por
                                                        un café servido por Juliana Awada, Macri expresó su descontento
                                                        con la falta de avances en sus conversaciones anteriores con
                                                        Milei, señalando que sus propuestas eran bloqueadas por Santiago
                                                        Caputo y Karina Milei. "Hace rato que no hay milanesas",
                                                        comentó, refiriéndose a la reducción de sus encuentros
                                                        personales con el presidente.
                                                    </p>
                                                    <br>
                                                    <p>Asistieron al encuentro el líder de la bancada, Luis Juez, y
                                                        otros senadores como Carmen Álvarez Rivero, Alfredo De Angeli,
                                                        Andrea Cristina, Martin Goerling y María Victoria Huala. La
                                                        ausencia más notable fue la de Guadalupe Tagliaferri, quien
                                                        tenía un viaje previamente programado.
                                                    </p>
                                                    <br>
                                                    <p>La foto del grupo en el jardín de Macri generó reacciones en
                                                        Balcarce 50 y en el bloque liderado por Cristian Ritondo en la
                                                        Cámara Baja, donde los diputados del PRO, liderados por
                                                        Alejandro Finocchiaro, intentan persuadir a sus colegas para
                                                        respaldar el veto de Milei. Sin embargo, la historia reciente
                                                        muestra que las decisiones de Macri han socavado acuerdos que se
                                                        habían logrado con esfuerzo.
                                                    </p>
                                                    <br>
                                                    <p>El nerviosismo entre los libertarios ha crecido, al punto de que
                                                        el vocero Manuel Adorni tuvo que aclarar en un programa de
                                                        televisión que sería "razonable" que el PRO apoyara el veto,
                                                        similar a su respaldo anterior a la ley de movilidad
                                                        previsional. Algunos senadores presentes en la reunión
                                                        reconocieron que existen diferencias de opinión con el gobierno,
                                                        pero la intención sería "caminar juntos sin subirse a cococho",
                                                        subrayando que la educación pública es un valor fundamental para
                                                        el PRO.
                                                    </p>
                                                    <br>
                                                    <p>A la espera de la reunión del bloque de diputados del PRO
                                                        programada para el próximo martes, los senadores decidieron
                                                        posponer cualquier decisión formal. Ellos esperan ver cómo se
                                                        desarrollan los acontecimientos antes de pronunciarse sobre el
                                                        respaldo al veto, en medio de un clima de incertidumbre que ha
                                                        caracterizado el actual contexto político.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')


                </div>

            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol81')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PRO APOYARÁ EL VETO DE MILEI AL FINANCIAMIENTO
                                                UNIVERSITARIO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 08/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El partido liderado por Mauricio Macri reafirma su posición en contra
                                                    de la Ley de Financiamiento Universitario, consolidando su alianza
                                                    con el gobierno ultraderechista.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_macreVeto.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El PRO ha confirmado su respaldo al veto del presidente Javier
                                                        Milei a la Ley de Financiamiento Universitario, tras una reunión
                                                        por videoconferencia encabezada por el exmandatario Mauricio
                                                        Macri. La decisión se discutió en un encuentro de la mesa
                                                        directiva del partido, donde participaron gobernadores y
                                                        referentes legislativos. La postura del PRO se llevará a la
                                                        sesión especial de la Cámara de Diputados, convocada para el
                                                        miércoles próximo, en la que también participarán bloques
                                                        dialoguistas y el kirchnerismo.
                                                    </p>
                                                    <br>
                                                    <p>El PRO argumenta que su bloque ya había votado mayoritariamente
                                                        en contra de la ley en semanas recientes. En un comunicado, el
                                                        partido sostuvo que “somos coherentes con la necesidad de
                                                        sostener el equilibrio fiscal como prioridad para que nuestro
                                                        país salga adelante”, reafirmando su respeto por la ley de
                                                        Administración Financiera. Además, critican la gestión del
                                                        Gobierno nacional en relación a las universidades, apuntando a
                                                        la falta de profesionalidad y gestión de la administración
                                                        actual.
                                                    </p>
                                                    <br>
                                                    <p>El comunicado también plantea tres exigencias al gobierno de
                                                        Milei: convocar a un diálogo urgente con los gremios
                                                        universitarios, incluir las necesidades de las universidades en
                                                        el proyecto de presupuesto 2025 y derogar la resolución del ex
                                                        procurador Carlos Zanini que limita la auditoría de las
                                                        universidades. A medida que se acerca la reunión de bloque del
                                                        PRO, los diputados se preparan para expresar una postura
                                                        alineada con la conducción partidaria en este crucial tema
                                                        educativo.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol82')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CRISTINA FORTALECE ALIANZAS EN EL INSTITUTO PATRIA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Diversos actores del peronismo, ajenos a La Cámpora y sin cargos
                                                    municipales, estarían buscando tender puentes para consolidar una
                                                    alianza que fortalezca la unidad partidaria.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_alianza.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>La ex presidenta Cristina Fernández de Kirchner se reunió en el
                                                        Instituto Patria con Andrés Watson, Julio Pereyra y Carlos
                                                        Kunkel para analizar la situación política del país y el futuro
                                                        del peronismo, a pocos días de la definición de las internas del
                                                        PJ. Durante el encuentro, se mencionó que el gobernador Ricardo
                                                        Quintela no habría atendido un llamado de Cristina, y se espera
                                                        que en los próximos días Axel Kicillof haga público su apoyo a
                                                        la candidatura de Fernández de Kirchner, lo que sería clave para
                                                        movilizar un amplio sector del peronismo.
                                                    </p>
                                                    <br>
                                                    <p>Entre los puntos discutidos, se destacó la reciente llamada que
                                                        Cristina realizó al gobernador de La Rioja, Ricardo Quintela,
                                                        quien no habría respondido. Este hecho pone de manifiesto las
                                                        tensiones existentes dentro del peronismo y la urgencia de
                                                        unificar posiciones en un momento crucial para el futuro del
                                                        movimiento.
                                                    </p>
                                                    <br>
                                                    <p>Por otro lado, se sugiere que Axel Kicillof, actual gobernador de
                                                        la provincia de Buenos Aires, podría brindar su apoyo a la
                                                        candidatura de Cristina, lo cual resultaría fundamental, dado
                                                        que Kicillof cuenta con una base sólida que podría movilizar a
                                                        un amplio sector del peronismo. Se estima que hay figuras que,
                                                        aunque no pertenecen a La Cámpora ni son intendentes, estarían
                                                        trabajando para acercar posiciones y crear un frente unido.
                                                    </p>
                                                    <br>
                                                    <p>A medida que se acercan las internas, se vislumbran dos posibles
                                                        listas que podrían presentarse en la contienda. La reunión en el
                                                        Instituto Patria pone de relieve la necesidad de diálogo y
                                                        cohesión entre los líderes peronistas. Cristina Fernández de
                                                        Kirchner continúa buscando establecer vínculos y fortalecer
                                                        alianzas en un panorama político que se vuelve cada vez más
                                                        desafiante.</p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol83')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CRISTINA KIRCHNER VA POR LA PRESIDENCIA DEL PJ</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 14/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La expresidenta inscribió su lista para las internas del Partido
                                                    Justicialista. Con el respaldo de múltiples provincias, Cristina
                                                    busca liderar el PJ y fortalecer el espacio opositor al gobierno de
                                                    Javier Milei.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_presi_pj.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Cristina Fernández de Kirchner formalizó este lunes su
                                                        candidatura a la presidencia del Partido Justicialista (PJ) con
                                                        la lista "Primero La Patria", avalada por dirigentes y
                                                        militantes de provincias clave como Buenos Aires, Tierra del
                                                        Fuego, Santa Cruz y Río Negro, entre otras. La inscripción se
                                                        realizó con los apoderados Anabel Fernández Sagasti, Teresa
                                                        García y Gustavo Arrieta, quienes también solicitaron la reserva
                                                        de los colores celeste y blanco para la lista.
                                                    </p>
                                                    <br>
                                                    <p>La exmandataria apuntó a un liderazgo claro del PJ, tras la
                                                        renuncia de Alberto Fernández en agosto, en un contexto donde el
                                                        peronismo busca reorganizarse frente al avance de la
                                                        ultraderecha representada por el gobierno de Javier Milei. Desde
                                                        principios de octubre, un "operativo clamor" pedía que CFK
                                                        asumiera la conducción del partido para enfrentar los nuevos
                                                        desafíos políticos.
                                                    </p>
                                                    <br>
                                                    <p>"Primero La Patria" refleja el deseo de consolidar un liderazgo
                                                        fuerte y unificado dentro del PJ, capaz de articular una
                                                        oposición robusta y popular. "La unidad necesita dirección y
                                                        proyecto para construir el mejor peronismo posible en una
                                                        Argentina que se ha vuelto imposible para la mayoría", expresó
                                                        Fernández en una carta reciente, confirmando su voluntad de
                                                        asumir el reto.
                                                    </p>
                                                    <br>
                                                    <p>Por su parte, el gobernador de La Rioja, Ricardo Quintela,
                                                        presentó su lista "Federalismo y Justicia", convirtiéndose en el
                                                        principal rival de Cristina en las internas del 17 de noviembre.
                                                        Quintela, quien cuenta con el apoyo de sectores del interior,
                                                        destacó la importancia de que los afiliados "determinen quién
                                                        quiere que los represente" y no descartó un encuentro con la
                                                        expresidenta para dialogar antes de la elección.
                                                    </p>
                                                    <br>
                                                    <p>Estas internas definirán quién conducirá el PJ en un momento
                                                        crítico para el peronismo, en medio de la crisis económica y
                                                        social que atraviesa el país bajo la gestión de Milei. La
                                                        contienda entre Cristina y Quintela promete marcar el futuro del
                                                        movimiento justicialista, con la vista puesta en una renovación
                                                        que pueda enfrentar los desafíos que se avecinan.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol84')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CGT SE MANIFESTÓ POR UNA NUEVA CONDUCCIÓN
                                                EN EL PJ</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 16/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La CGT critica indirectamente a Cristina Kirchner y exige renovación
                                                    en el PJ,
                                                    abogando por unidad y un programa común ante el avance del gobierno
                                                    de
                                                    Javier Milei.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_cgtManifiesto.svg') }}"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El sector mayoritario de la Confederación General del Trabajo
                                                        (CGT) se ha
                                                        adentrado en la interna del Partido Justicialista (PJ) con un
                                                        documento que,
                                                        aunque evita mencionar directamente a Cristina Kirchner, desliza
                                                        críticas hacia
                                                        su liderazgo. La nota, redactada por los triunviros Héctor Daer
                                                        y Carlos Acuña,
                                                        reclama una profunda renovación en la conducción del peronismo.
                                                    </p>
                                                    <br>
                                                    <p>En el texto, los dirigentes gremiales subrayan la necesidad de
                                                        convocar a todos
                                                        los sectores afines, destacando que &quot;no es con
                                                        personalismos que vamos a
                                                        encaminar la recuperación de la confianza ciudadana&quot;. Este
                                                        llamado a la
                                                        unidad se produce en un contexto en el que los vínculos entre
                                                        ciertos sectores
                                                        del sindicalismo y el gobierno de Javier Milei están en tensión.
                                                    </p>
                                                    <br>
                                                    <p>La CGT enfatiza que &quot;es preciso iniciar un proceso de
                                                        renovación genuina&quot;,
                                                        sugiriendo que solo con nombres propios no se alcanzará el
                                                        objetivo deseado.
                                                        Los sectores de &quot;Los Gordos&quot; y &quot;los
                                                        independientes&quot; abogan por avanzar hacia
                                                        un programa común que respete los principios fundamentales del
                                                        peronismo:
                                                        justicia social, independencia económica y soberanía política.
                                                    </p>
                                                    <br>
                                                    <p>El pronunciamiento llega en un momento delicado, con el triunviro
                                                        Pablo
                                                        Moyano en el extranjero, y en medio de la renuncia de Mario
                                                        Manrique, del
                                                        Smata, quien se distanció de la conducción
                                                        &quot;dialoguista&quot; por el acercamiento a
                                                        la gestión de Milei. El documento critica abiertamente el modelo
                                                        de gobierno
                                                        actual, denunciando que &quot;ajusta gravemente los ingresos de
                                                        los que menos
                                                        tienen&quot; y favorece a sectores concentrados de la economía,
                                                        al tiempo que
                                                        posterga la atención a jubilados y desfinancia la salud y la
                                                        educación pública.
                                                    </p>
                                                    <br>
                                                    <p>Asimismo, entre los dirigentes de los sectores &quot;Gordos&quot;
                                                        e &quot;independientes&quot;,
                                                        crece el apoyo hacia el gobernador Axel Kicillof, considerado el
                                                        candidato más
                                                        viable para liderar al PJ en las elecciones de 2027. Existe un
                                                        deseo de que
                                                        Kicillof mantenga su autonomía frente A Kirchner, lo que podría
                                                        redefinir las
                                                        alianzas dentro del peronismo.
                                                    </p>
                                                    <br>
                                                    <p>Este pronunciamiento de la CGT es la primera manifestación
                                                        pública sobre la
                                                        interna del PJ, justo a horas del cierre de listas. La próxima
                                                        reunión entre el
                                                        gobernador riojano Ricardo Quintela y Cristina Kirchner será
                                                        clave para definir
                                                        el rumbo del partido. Si se presenta una elección interna entre
                                                        dos listas, es
                                                        probable que este sector de la CGT se posicione más cerca de
                                                        Quintela que de
                                                        CFK, un escenario que se desarrollará cuando finalice el plazo
                                                        de inscripción
                                                        de listas.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol85')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">REAFIRMANDO LA LEALTAD: LA NECESIDAD DE UNIR
                                                AL PERONISMO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 17/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El 17 de octubre es una fecha emblemática en la historia de Argentina
                                                    y en la
                                                    memoria del movimiento peronista. Este Día de la Lealtad conmemora
                                                    la
                                                    movilización de 1945, cuando millones de trabajadores y militantes
                                                    salieron a
                                                    las calles para exigir la libertad de Juan Domingo Perón. Más que un
                                                    simple
                                                    acontecimiento histórico, esta conmemoración representa el espíritu
                                                    de lucha
                                                    por la justicia social, la dignidad y el bienestar de la clase
                                                    trabajadora.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_lealtad.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En un contexto marcado por la polarización y el avance de un
                                                        modelo de
                                                        gobierno que, bajo la gestión de Javier Milei, amenaza con
                                                        precarizar aún más
                                                        las condiciones de vida de los sectores más vulnerables, el Día
                                                        de la Lealtad
                                                        adquirió un renovado significado. El peronismo, en todos sus
                                                        vertientes, debía
                                                        unirse y llenar la Plaza de Mayo, junto con los sindicatos, la
                                                        CGT, las dos CTA,
                                                        los movimientos sociales, los jubilados, los universitarios, los
                                                        jóvenes y las
                                                        compañeras feministas. La convocatoria debía incluir a líderes
                                                        como Cristina
                                                        Kirchner, Ricardo Quintela, Máximo Kirchner, Axel Kicillof, los
                                                        intendentes del
                                                        conurbano y los cinco gobernadores que representan al peronismo.
                                                    </p>
                                                    <br>
                                                    <p>Si había un momento para pararse y afirmar &quot;aquí está el
                                                        peronismo&quot;, era el 17
                                                        de octubre. Sin embargo, no se hizo un acto en la Plaza de Mayo.
                                                        La ausencia
                                                        de este evento ha dejado una pregunta resonando en el aire: ¿por
                                                        qué no se
                                                        llenó la Plaza este 17 de octubre? ¿Por qué no se hicieron los
                                                        esfuerzos
                                                        necesarios para que los trabajadores y las trabajadoras
                                                        expresaran su
                                                        descontento y defendieran los intereses de la patria?
                                                    </p>
                                                    <br>
                                                    <p>Es fundamental reflexionar sobre este vacío y reconocer que, como
                                                        comunicadores del campo nacional y popular, debemos
                                                        replantearnos por qué
                                                        no estuvimos allí. Meses antes de esta fecha, cuando ya
                                                        intuíamos que no
                                                        habría una convocatoria, debimos exigir desde nuestros medios la
                                                        unidad del
                                                        peronismo, por el bien del campo nacional y popular, de la
                                                        República y de los
                                                        derechos de todos los argentinos y argentinas.
                                                    </p>
                                                    <br>
                                                    <p>El Día de la Lealtad no debe ser solo un recuerdo, sino un
                                                        llamado a la acción
                                                        ya la movilización en defensa de los principios que nos unen.
                                                        Este 17 de
                                                        octubre, la lealtad no se limitó a la figura de un líder, sino
                                                        que se reafirmó como
                                                        un compromiso colectivo con la justicia social, la independencia
                                                        económica y la
                                                        soberanía política. Aunque no estuvimos a la altura en esta
                                                        ocasión, la lucha
                                                        por un país más justo, solidario e inclusivo continúa, y debemos
                                                        ser
                                                        protagonistas en su construcción.
                                                    </p>
                                                    <br>
                                                    <p>Desde estas líneas, hacemos un llamado a la reflexión ya redoblar
                                                        los
                                                        esfuerzos necesarios para construir la unidad del peronismo y
                                                        del campo
                                                        popular, en defensa de la patria y de los sectores más humildes.
                                                        Este
                                                        compromiso es fundamental para enfrentar los desafíos que nos
                                                        presenta el
                                                        contexto actual y garantizar un futuro más justo y solidario
                                                        para todos los
                                                        argentinos.
                                                    </p>
                                                    <br>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol86')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI AMENAZA A LA DEMOCRACIA CON SU
                                                DISCURSO DE ODIO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 21/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Con la complicidad de colegas y medios que prefieren hacerse los
                                                    distraídos
                                                    Milei sigue abonando la división del pueblo a través de su discurso
                                                    de odio.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_DiscursoOdio.svg') }}"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Desde ADN Populares, manifestamos nuestro más enérgico repudio a
                                                        las
                                                        recientes declaraciones del presidente Javier Milei, quien
                                                        expresó su “morbo”
                                                        por “meterle el último clavo al cajón del kirchnerismo con
                                                        Cristina adentro”.
                                                        Estas palabras no son solo un exabrupto; son un ataque
                                                        deliberado que revela
                                                        una peligrosa política de odio y descalificación, contraria a
                                                        los principios
                                                        democráticos que deben gobernar nuestro país.
                                                    </p>
                                                    <br>
                                                    <p>Las afirmaciones de Milei, dirigidas a una figura que simboliza
                                                        no solo a una
                                                        corriente política, sino a millones de argentinos, muestran un
                                                        intento de eliminar
                                                        simbólicamente a toda una historia política. No se trata solo de
                                                        una disputa
                                                        interna; es un ataque frontal contra la misma democracia.
                                                        “¿Cuántas veces
                                                        habrá que repudiar el odio y la violencia de las palabras de
                                                        Milei?”, se
                                                        preguntan muchos en el ámbito político. La respuesta es clara:
                                                        mientras
                                                        permanezca en el poder, el repudio debe ser constante.
                                                    </p>
                                                    <br>
                                                    <p>Milei no solo intenta borrar a Cristina Fernández de Kirchner,
                                                        sino también
                                                        desviar la atención de su propio fracaso económico. Sus
                                                        declaraciones
                                                        encubren la realidad de un modelo que ha llevado al país a
                                                        niveles de alarma
                                                        de pobreza y exclusión social. En lugar de gobernar para el
                                                        bienestar de todos
                                                        los argentinos, busca confrontar y dividir, propagando un clima
                                                        de odio que
                                                        desestabiliza la convivencia pacífica. “Lo que Milei quiere
                                                        enterrar es la
                                                        dignidad del pueblo argentino”, y lo personifica en CFK porque
                                                        fue con ella que
                                                        la Argentina logró avances significativos.
                                                    </p>
                                                    <br>
                                                    <p>Es inaceptable que el presidente de la Nación, en lugar de
                                                        fomentar un
                                                        ambiente de respeto y diálogo, utilice su posición para amenazar
                                                        a una figura
                                                        política que ha sido víctima de un atentado contra su vida. Las
                                                        palabras de
                                                        Milei no solo atacan a Cristina Fernández de Kirchner como
                                                        dirigente, sino que
                                                        también despojan a la política de su esencia más humana. “No
                                                        podemos
                                                        permitir que su retórica de odio defina nuestra realidad; sus
                                                        fantasías deben ser
                                                        tratadas en un ámbito privado, no desde el ejercicio del poder”,
                                                        debe resonar
                                                        como un clamor en nuestra sociedad, que anhela una convivencia
                                                        democrática
                                                        sin hostilidad.
                                                    </p>
                                                    <br>
                                                    <p>Por último, es esencial recordar que no solo Cristina Kirchner
                                                        está en la mira de
                                                        Milei. Aquellos que creen que su violencia verbal se limita a
                                                        ella están
                                                        equivocados. La política de odio que él representa pone en
                                                        riesgo la misma
                                                        democracia, y es urgente que todas las fuerzas políticas se unan
                                                        para ponerle
                                                        un freno. Desde ADN Populares, hacemos un llamado a la unidad y
                                                        al respeto,
                                                        porque solo así podremos construir un futuro digno para todos
                                                        los argentinos,
                                                        lejos de la barbarie y la división.
                                                    </p>
                                                    <br>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol87')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ALFONSÍN Y SARAVIA RECLAMAN UNIDAD
                                                PROGRESISTA CONTRA LA CRISIS</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 21/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Durante una intensa recorrida en Tigre y La Matanza, Alfonsín y
                                                    Saravia
                                                    denunciaron la política económica del gobierno y abogaron por una
                                                    alternativa
                                                    que priorice la justicia social.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_AlfonsinUnidad.svg') }}"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Ricardo Alfonsín, junto a Silvia Saravia, referente de Libres del
                                                        Sur, recorrió los
                                                        municipios de Tigre y La Matanza para impulsar una construcción
                                                        unitaria de
                                                        los sectores progresistas frente a la crisis económica. La
                                                        jornada en Tigre
                                                        incluyó diálogos con vecinos y comerciantes en el Mercado de
                                                        Frutos y la
                                                        Terminal del Tren Mitre, donde ambos dirigentes reconocieron
                                                        testimonios
                                                        sobre el deterioro del consumo, las dificultades de las pymes y
                                                        el impacto de la
                                                        inflación en los hogares.
                                                    </p>
                                                    <br>
                                                    <p>Al finalizar la recorrida, Alfonsín y Saravia se reunieron con el
                                                        intendente de
                                                        Tigre, Julio Zamora, para reforzar su compromiso con alianzas
                                                        que prioricen el
                                                        bienestar social y económico. &quot;Hoy necesitamos unidad para
                                                        combatir una
                                                        política económica que aumenta la pobreza y el desempleo
                                                        mientras los
                                                        salarios y jubilaciones se derrumban&quot;, manifestó Alfonsín.
                                                    </p>
                                                    <br>
                                                    <p>La visita continuó en La Matanza, con una serie de encuentros en
                                                        Ramos Mejía
                                                        y Villa Luzuriaga, donde fueron recibidos por dirigentes
                                                        socialistas y
                                                        comunitarios. En la Casa de Auxilio de Ramos Mejía, Alfonsín y
                                                        Saravia
                                                        dialogaron con el presidente de la entidad, Arturo Ter Akopian,
                                                        y el diputado
                                                        socialista Esteban Paulón sobre la gravedad de la crisis en el
                                                        conurbano y la
                                                        necesidad de una alternativa progresista. Posteriormente, en un
                                                        centro
                                                        comunitario de Villa Luzuriaga, participó en una jornada de
                                                        salud y nutrición
                                                        infantil, poniendo en foco la urgencia de políticas sociales
                                                        activas.
                                                    </p>
                                                    <br>
                                                    <p>Silvia Saravia destacó el apoyo recibido de vecinos y
                                                        comerciantes y subrayó la
                                                        desconexión entre el discurso oficial y la realidad: “El
                                                        deterioro del poder
                                                        adquisitivo es evidente; mientras el titular de ANSES lo llama
                                                        una &#39;sensación&#39;,
                                                        los pequeños comerciantes nos cuentan cómo las ventas se
                                                        desploman”.
                                                        Alfonsín, por su parte, apuntó contra la política económica del
                                                        gobierno: “La
                                                        política sin ética abandona a la población en el hambre y la
                                                        recesión, y esta fue
                                                        la vía que eligieron, aunque lo nieguen”.
                                                    </p>
                                                    <br>
                                                    <p>Ambos dirigentes coincidieron en la urgencia de consolidar una
                                                        alternativa
                                                        progresista que proponga soluciones reales para enfrentar la
                                                        crisis y que,
                                                        además de denunciar las políticas actuales, construya un
                                                        proyecto de país
                                                        inclusivo y solidario.
                                                    </p>
                                                    <br>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>

            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol88')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL GOBIERNO DE MILEI LLAMA ‘FALKLANDS’ A LAS
                                                MALVINAS, UN ERROR QUE ESCONDE UNA TRAICION</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 27/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Las encuestas anticipan un escenario reñido para el 5 de noviembre en
                                                    una
                                                    contienda marcada por acusaciones y tensiones en torno a la
                                                    economía,
                                                    migración y seguridad nacional.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_malvinas.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>La decisión del gobierno de Javier Milei de referirse a las Islas
                                                        Malvinas como
                                                        ‘Falklands’ en un comunicado oficial ha generado indignación y
                                                        preocupación
                                                        en la arena política y social. Este acto, lejos de ser un simple
                                                        error protocolar,
                                                        revela una postura permisiva ante los intereses británicos que,
                                                        para muchos,
                                                        raya en la traición a la soberanía argentina.
                                                    </p>
                                                    <br>
                                                    <p>Desde Cancillería, la situación es calificada como un “desorden
                                                        total”, en el que
                                                        prevalecen directrices contradictorias y una desconexión entre
                                                        el presidente y
                                                        la diplomacia argentina. La canciller Diana Mondino, superada
                                                        por las internas
                                                        y por el círculo cercano al mandatario, parece incapaz de frenar
                                                        una serie de
                                                        decisiones que alejan al país de su tradicional defensa
                                                        soberana. Este desliz,
                                                        inédito en la historia diplomática argentina, suma un golpe de
                                                        desprestigio en
                                                        un momento en el que Argentina enfrenta un aislamiento creciente
                                                        en la región
                                                        y el mundo.
                                                    </p>
                                                    <br>
                                                    <p>Las repercusiones no se hicieron esperar. Países aliados de
                                                        Argentina, como
                                                        Brasil y México, han expresado preocupación por la dirección
                                                        errática de la
                                                        diplomacia argentina. La Cancillería hoy se encuentra en un
                                                        clima de extrema
                                                        tensión, con un cuerpo diplomático que, lejos de alinearse con
                                                        las políticas de
                                                        Milei, advierte sobre las consecuencias de una política
                                                        internacional que parece
                                                        priorizar una agenda ultraliberal en detrimento de los intereses
                                                        nacionales.
                                                    </p>
                                                    <br>
                                                    <p>SEl uso de ‘Falklands’ no es un desliz menor: jamás un gobierno
                                                        argentino utilizó
                                                        este término en una declaración oficial. En contraste, el Reino
                                                        Unido jamás ha
                                                        hecho referencia a las ‘Malvinas’ en un texto formal. Las
                                                        consecuencias de este
                                                        giro impactarán en las aspiraciones de Argentina en foros
                                                        internacionales como
                                                        el Comité de Descolonización de la ONU, donde la postura
                                                        histórica del país ha
                                                        sido clara y firme.
                                                    </p>
                                                    <br>
                                                    <p>La posible entrega de la causa Malvinas a la influencia británica
                                                        deja una
                                                        marca indeleble en la administración de Milei, quien, en vez de
                                                        fortalecer la
                                                        defensa de la soberanía argentina, parece optar por una actitud
                                                        de
                                                        complacencia que muchos califican de traición.
                                                    </p>
                                                    <br>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol89')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">UN NUEVO ESPACIO PARA FRENAR A MILEI Y EL
                                                MACRISMO EN CABA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 30/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>En un esfuerzo por frenar el avance de la ultraderecha y devolver el
                                                    control de
                                                    la Ciudad a los sectores populares, dirigentes y movimientos
                                                    políticos lanzan
                                                    Confluencia.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_frenar.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En un encuentro que reunió a referentes de múltiples agrupaciones
                                                        políticas y
                                                        sociales en el centro porteño, se presentó oficialmente
                                                        “Confluencia”, un
                                                        espacio que busca constituir un frente amplio en la Ciudad de
                                                        Buenos Aires.
                                                        Este nuevo movimiento está impulsado por organizaciones como
                                                        Unidad
                                                        Popular, Forja, Libres del Sur, Soberanxs, y otros colectivos,
                                                        quienes
                                                        compartieron un manifiesto para denunciar las políticas del
                                                        actual gobierno de
                                                        Javier Milei y el modelo macrista, que, afirman, ha consolidado
                                                        la desigualdad.
                                                        y multiplicando la pobreza.
                                                    </p>
                                                    <br>
                                                    <p>Propuestas para una Buenos Aires más justa
                                                    </p>
                                                    <br>
                                                    <p>“Confluencia” se diferencia de otros movimientos en su rechazo a
                                                        ser solo una
                                                        herramienta electoral, enfocándose en una propuesta de cambio
                                                        estructural. Su
                                                        manifiesto señala como objetivo fundamental &quot;recuperar la
                                                        ciudad para quienes
                                                        la habitan&quot;, y propone destinar parte del fondo anticrisis
                                                        porteño a políticas de
                                                        impacto social inmediato. Entre las iniciativas destacan la
                                                        construcción de
                                                        viviendas para alquiler social, el desarrollo de espacios verdes
                                                        y la creación de
                                                        polideportivos gratuitos, medidas que buscan aliviar el contexto
                                                        crítico de una
                                                        ciudad donde la pobreza y la falta de acceso a servicios básicos
                                                        afectan a más
                                                        de la mitad de la población.
                                                    </p>
                                                    <br>
                                                    <p>Críticas a Milei y al macrismo
                                                    </p>
                                                    <br>
                                                    <p>Durante el acto, los referentes señalan el desmantelamiento del
                                                        Estado y la
                                                        represión de Milei como el “proyecto autoritario” que reinstala
                                                        paradigmas de la
                                                        última dictadura, mientras el modelo macrista es acusado de
                                                        enriquecer a
                                                        pocos a la costa de la mayoría. Claudio Lozano, de Unidad
                                                        Popular, sostuvo:
                                                        “Este frente requiere democracia participativa y apertura a la
                                                        comunidad; no es
                                                        un mero acuerdo electoral ni una suma de fracasos”.
                                                    </p>
                                                    <p>Con este lanzamiento, &quot;Confluencia&quot; se presenta como un
                                                        movimiento inclusivo
                                                        y popular, invitando a los porteños a unirse para construir una
                                                        Buenos Aires
                                                        más democrática e igualitaria, capaz de poner fin a las
                                                        políticas de Milei ya dos
                                                        décadas de gestión neoliberal en la capital.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol90')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI ECHA A MONDINO Y SE RADICALIZA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 31/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El despido de la excanciller marca un nuevo giro radical en la
                                                    política exterior
                                                    de Milei, que amenaza el vínculo con América Latina y hunde al país
                                                    en un
                                                    aislamiento global sin precedentes.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_descarga.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En La destitución de Diana Mondino, tras la reciente votación en la
                                                        ONU contra el
                                                        bloqueo a Cuba, era un desenlace esperado: las tensiones entre
                                                        Mondino y el
                                                        entorno de Javier Milei crecía desde hace meses, especialmente
                                                        en torno a su
                                                        postura sobre la diplomacia latinoamericana y los BRICS. El voto
                                                        de Argentina
                                                        en la ONU, que acompañó a 187 países en el repudio al bloqueo,
                                                        se mantuvo
                                                        en la línea histórica de apoyo al multilateralismo y la
                                                        cooperación regional. Sin
                                                        embargo, esta decisión fue suficiente para que el gobierno de
                                                        Milei empujara a
                                                        Mondino fuera del gabinete y avanzara en un proceso de
                                                        depuración interna en
                                                        la Cancillería.
                                                    </p>
                                                    <br>
                                                    <p>Una &quot;limpieza ideológica&quot; en la Cancillería
                                                    </p>
                                                    <br>
                                                    <p>En el comunicado oficial de su destitución, el gobierno de Milei
                                                        calificó de
                                                        &quot;enemigos de la libertad&quot; a quienes, dentro de la
                                                        diplomacia argentina,
                                                        defienden posturas alineadas con derechos humanos, el combate al
                                                        cambio
                                                        climático y la cooperación latinoamericana. Este giro
                                                        ultraderechista implica
                                                        una purga interna al estilo macartista, donde las posiciones que
                                                        disientan de la
                                                        visión ultraliberal de Milei son desechadas o investigadas.
                                                        Mondino, quien
                                                        hasta hace poco era una de las figuras visibles en la
                                                        Cancillería, quedó en el
                                                        centro de esta limpieza ideológica por no someterse a la línea
                                                        dura del
                                                        “Triángulo de Hierro” conformado por los hermanos Milei y
                                                        Santiago Caputo.
                                                    </p>
                                                    <br>
                                                    <p>Argentina más sola y lejos de América Latina
                                                    </p>
                                                    <br>
                                                    <p>El impacto de esta decisión va más allá de la política doméstica
                                                        y tiene
                                                        profundas implicancias para el rol de Argentina en la región y
                                                        el mundo. Al
                                                        atacar la cooperación histórica en el tema Malvinas y alinearse
                                                        con un discurso
                                                        de confrontación, el gobierno argentino se aleja de países
                                                        estratégicos para la
                                                        estabilidad regional y se aísla en temas como derechos humanos,
                                                        género y
                                                        cambio climático. Mientras los BRICS se consolidan como una
                                                        plataforma de
                                                        cooperación multilateral, Argentina se desvincula de este
                                                        bloque, debilitando
                                                        sus lazos con naciones clave en términos geopolíticos, como
                                                        Brasil y China, y
                                                        acercándose a la posición aislacionista y confrontativa de
                                                        gobiernos como el de
                                                        Estados Unidos e Israel.
                                                    </p>
                                                    <p>Así, con la salida de Mondino, el país sigue profundizando su
                                                        aislamiento
                                                        global, sin espacios de diálogo regional y con la diplomacia
                                                        enfocada en
                                                        objetivos que desarticulan alianzas y empujan a Argentina cada
                                                        vez más a la
                                                        marginalidad en la arena internacional.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol91')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL 50% DE LOS ARGENTINOS RECHAZA LA GESTIÓN
                                                DE MILEI</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Según una encuesta de la consultora brasileña Atlas y la agencia Bloomberg, la
                                                mitad de los argentinos desaprueba la gestión del presidente, mientras que la
                                                mayoría considera que la situación económica empeorará en los próximos
                                                meses.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_gestion.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Un estudio realizado por la consultora Atlas y la agencia Bloomberg midió el
                                                        apoyo a los líderes políticos de Brasil, Colombia, México, Chile y Argentina. Los
                                                        resultados muestran que el 50,7% de los argentinos desaprueba la gestión del
                                                        presidente, mientras que el 42,8% la aprueba. Además, el 48,1% califica al
                                                        gobierno como malo o muy malo, y solo el 34% lo considera excelente.
                                                    </p>
                                                    <br>
                                                    <p>En cuanto a la situación económica, los números son aún más preocupantes.
                                                        El 64% de los encuestados considera que la situación de su familia es mala,
                                                        mientras que un 78% piensa lo mismo sobre la economía argentina y el 76%
                                                        sobre el mercado laboral. La mayoría de los consultados prevé un
                                                        empeoramiento de la economía, la situación familiar y el mercado laboral en los
                                                        próximos seis meses. Además, el 57,4% dice haber reducido su nivel de
                                                        compra de bienes duraderos debido a la crisis inflacionaria.
                                                    </p>
                                                    <br>
                                                    <p>La encuesta también revela que los altos precios son la principal preocupación
                                                        de los argentinos (50%), seguida por el desempleo (45,7%) y la corrupción
                                                        (36,6%). Solo el 22,8% se muestra preocupado por el debilitamiento de la
                                                        democracia y sus instituciones.
                                                    </p>
                                                    <br>
                                                    <p>En cuanto a la política exterior, el 60% de los consultados cree que Argentina
                                                        debería tener una relación más estrecha con Brasil, y un 59% opina lo mismo
                                                        respecto a Rusia y China. Por otro lado, el 48% considera que el país tiene
                                                        más vínculos con Estados Unidos de los que debería.

                                                        El estudio también menciona el creciente conocimiento del bloque BRICS, que
                                                        un 39,3% de los argentinos reconoce. Sin embargo, un 34% aún no tiene
                                                        conocimiento del grupo, y solo un 34,8% cree que el bloque tiene mucha
                                                        influencia.
                                                    </p>
                                                    <br>
                                                    <p>Finalmente, la encuesta refleja un fuerte rechazo hacia las políticas migratorias,
                                                        con un 65% de los consultados apoyando medidas restrictivas contra los
                                                        inmigrantes.
                                                    </p>
                                                    <p>A nivel regional, Milei se encuentra por debajo de Lula (51%) y Claudia
                                                        Sheinbaum (67%) en cuanto a aprobación, superando solo a Gabriel Boric
                                                        (39%) y Gustavo Petro (40%).
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol92')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SUBE EL PRECIO DE LOS COMBUSTIBLES</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La medida rige desde la medianoche y se espera que el resto de las
                                                compañías la sigan en las próximas horas. Afectará principalmente a los
                                                usuarios de la Ciudad de Buenos Aires, con un incremento promedio del 2,7%.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_nafta.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>YPF aumentó los precios de sus combustibles un 2,7% en promedio en la
                                                        Ciudad de Buenos Aires desde la medianoche, y se prevé que otras petroleras
                                                        sigan el mismo camino en las próximas horas. La suba de 2,75% aplicada por
                                                        YPF buscaría mitigar los efectos de la devaluación de octubre y la actualización
                                                        de impuestos.
                                                    </p>
                                                    <br>
                                                    <p>Este incremento se da tras la primera baja en casi seis años, cuando en
                                                        octubre los combustibles habían reducido sus precios en un 1% para el TLCAN
                                                        y un 2% en el gasoil, aunque en los márgenes de las petroleras fueron de 4% y
                                                        5. %, respectivamente.
                                                    </p>
                                                    <br>
                                                    <p>El ajuste tiene un impacto directo en el bolsillo de los consumidores, quienes ya
                                                        venían padeciendo las constantes subas. En la Ciudad de Buenos Aires, los
                                                        nuevos precios de YPF son:
                                                        Nafta Súper: $1077,
                                                        Nafta Premium: $1332,
                                                        Gasoil 500: $1092,
                                                        Gasoil G3: $1343.
                                                        Desde diciembre de 2023, el TLCAN Súper ha acumulado un incremento de
                                                        166,5%, lo que refleja el contexto inflacionario y el impacto de las políticas del
                                                        gobierno. A pesar de los aumentos, las ventas de combustibles al público han
                                                        caído un 6% en lo que va del año, una señal clara de la presión económica
                                                        sobre los sectores más vulnerables.
                                                    </p>
                                                    <br>
                                                    <p>En la Patagonia, el aumento será incluso mayor, para achicar la brecha de
                                                        precios con el resto del país, debido a los elevados costos logísticos de
                                                        transporte desde las refinerías.
                                                    </p>
                                                    <br>
                                                    <p>El contexto económico y la continua suba de precios alimentan el descontento
                                                        de los ciudadanos, que enfrentan un panorama de alta inflación y una
                                                        constante pérdida del poder adquisitivo.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol93')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CRISTINA KIRCHNER, NUEVA PRESIDENTA DEL PJ</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 06/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La ex presidenta fue proclamada hoy titular del Consejo Nacional del PJ tras un
                                                proceso judicializado, quedando como única candidata después de que se
                                                impugnara la lista de Ricardo Quintela.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_cristina.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>La Junta Electoral del Partido Justicialista (PJ) proclamó hoy a Cristina Kirchner
                                                        como nueva presidenta del Consejo Nacional del partido, en un proceso que
                                                        estuvo marcado por una fuerte judicialización interna. La ex presidenta asumirá
                                                        formalmente el cargo el próximo 17 de noviembre, tras quedar como única
                                                        candidata a la presidencia del PJ luego de que la Justicia Electoral impugnara
                                                        la lista del gobernador de La Rioja, Ricardo Quintela, por no reunir los avales
                                                        necesarios para su participación.
                                                    </p>
                                                    <br>
                                                    <p>La lista &#39;Primero la Patria&#39;, encabezada por la compañera Cristina Fernández
                                                        de Kirchner, fue proclamada como la ganadora”, declaró la Junta Electoral del
                                                        PJ en un comunicado. La resolución fue aprobada con 13 votos positivos y uno
                                                        en disidencia. Este fallo consagra a Kirchner al frente del peronismo nacional
                                                        en un momento clave para el futuro político del país, en medio de un contexto
                                                        electoral incierto y con la necesidad de reestructurar y fortalecer al PJ a nivel
                                                        nacional.
                                                    </p>
                                                    <br>
                                                    <p>La decisión fue celebrada por amplios sectores del peronismo, que destacaron
                                                        el papel central que Kirchner ha jugado en la historia del partido y en la política
                                                        argentina. Desde su espacio político, “Federales, un grito de Corazón”, que
                                                        promovía la candidatura de Quintela, se convocó a la unidad del PJ, resaltando
                                                        que el partido es mucho más que una simple fuerza política. Este sector aclaró
                                                        que no apelarán la decisión judicial y afirmó que el peronismo debe seguir
                                                        siendo un movimiento de transformación social y cultural, capaz de anticipar el
                                                        futuro y construir un país con más inclusión y justicia.
                                                    </p>
                                                    <br>
                                                    <p>A pesar de la impugnación de la lista de Quintela, la resolución de la Junta
                                                        Electoral permitió que Cristina Kirchner se posicionara nuevamente como la
                                                        principal figura del peronismo a nivel nacional. La ex mandataria, que se ha
                                                        mostrado en diversas ocasiones como una voz influyente dentro del
                                                        movimiento, tendrá ahora la responsabilidad de guiar al partido en un período
                                                        crucial de cara a los próximos desafíos electorales.
                                                    </p>
                                                    <br>
                                                    <p>La proclamación de Cristina Kirchner como presidenta del PJ también llega en
                                                        un momento de recomposición del espacio político, donde el peronismo busca
                                                        consolidar sus alianzas y fortalecer su presencia en la arena nacional. A través
                                                        de su liderazgo, se espera que el partido pueda retomar la centralidad política y
                                                        proyectar una estrategia renovada que responda a las necesidades del pueblo
                                                        argentino.
                                                    </p>
                                                    <br>
                                                    <p>Cristina Kirchner asumirá formalmente la presidencia del PJ el 17 de
                                                        noviembre, momento en el cual el partido buscará avanzar en su
                                                        reestructuración interna y en la consolidación de un proyecto político que
                                                        representa los intereses de los sectores más postergados de la sociedad
                                                        argentina.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol94')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CRISTINA ACUSA A MILEI DE BUSCAR UNA
                                                ARGENTINA COMO &quot;COLONIA AGROEXPORTADORA&quot;</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La exmandataria cuestionó la admiración de Milei por Trump y le pidió que
                                                aprendiera del nacionalismo del republicano, quien promueve un modelo
                                                proteccionista, frente al enfoque de apertura indiscriminada del libertario.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="{{ asset('../img/pol/pol_acusa.svg') }}" alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En un acto realizado en Lomas de Zamora, Cristina Kirchner lanzó duras
                                                        críticas contra Javier Milei, señalando una contradicción en su admiración por
                                                        el presidente electo de Estados Unidos, Donald Trump. Según la exmandataria,
                                                        el líder libertario debería reflexionar sobre el modelo económico del magnate
                                                        republicano, que se basa en políticas proteccionistas y la promoción del
                                                        mercado interno.
                                                    </p>
                                                    <br>
                                                    <p>“Este idiota, que está contento porque ganó Trump. ¡Pero que aprendas
                                                        de Trump! Que es nacionalista, que quiere que los trabajadores
                                                        industriales norteamericanos tengan buenos salarios”, disparó Cristina, en
                                                        una clara alusión al contraste con las propuestas de Milei. El exjefa de Estado
                                                        remarcó que el gobierno del libertario no está alineado con los intereses
                                                        nacionales, pues, según ella, su enfoque apuesta a la destrucción de la
                                                        estructura productiva local en favor de una apertura indiscriminada.
                                                    </p>
                                                    <br>
                                                    <p>En su intervención, Fernández de Kirchner enfatizó que la política de Milei
                                                        podría devolver al país a un modelo dependiente de la exportación de materias
                                                        primas. &quot;Quieren reducirnos de vuelta a una simple colonia
                                                        agroexportadora, y el resto que se joda&quot;, subrayó, rechazando esta visión
                                                        como “el país que no queremos y que ni siquiera es el mundo que viene”.
                                                    </p>
                                                    <br>
                                                    <p>Además, Cristina citó las polémicas declaraciones de Milei sobre su intención
                                                        de &quot;destruir el Estado desde adentro&quot;, un concepto que la exmandataria
                                                        parecía alarmante y perjudicial para la estructura nacional. Esta idea de
                                                        &quot;destrucción&quot; también se conecta con su crítica a las políticas de ajuste que el
                                                        gobierno de Milei promueve, algo que, según la exmandataria, afecta
                                                        directamente a la clase trabajadora y al bienestar general de la sociedad
                                                        Argentina.
                                                    </p>
                                                    <br>
                                                    <p>Con un fuerte tono crítico, Cristina también abordó la gestión del Poder Judicial
                                                        y la figura de quienes son percibidos como los “honestos” en la política. “Es
                                                        curioso porque cuando gobiernan los chorros, la gente puede comer, le
                                                        alcanza el salario, comen cuatro veces por día, los pibes estudian, se van
                                                        de vacaciones. Ahora, cuando gobiernan los que el Poder Judicial dice
                                                        que son &#39;los honestos&#39;, se caga todo el mundo de hambre”, lanzó,
                                                        poniendo en duda la legitimidad de las figuras asociadas a la nueva
                                                        administración.
                                                    </p>
                                                    <br>
                                                    <p>La exmandataria cerró su mensaje destacando la importancia de visibilizar lo
                                                        que está sucediendo en el país, mientras recorría una planta de reciclaje en
                                                        Avellaneda, junto a la diputada Natalia Zaracho, referente del Frente Patria
                                                        Grande, con quien compartió reflexiones sobre la situación económica y social.
                                                        en Argentina.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>



            @endif

    </div>





</x-app-layout>
