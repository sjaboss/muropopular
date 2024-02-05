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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol25')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CEREMONIA POR EL DÍA DEL ESTADO MAYOR
                                                CONJUNTO</a>
                                        </h2>

                                        <p>En la ceremonia por el día del Estado Mayor Conjunto, Taiana y Paleo
                                            anunciaron la aprobación del Plan de Capacidades Militares
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="h-96 w-full object-cover"
                                                src="{{ asset('../img/pol/pol_mayor2.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El ministro de Defensa, Jorge Taiana, junto a la ministra de Salud de
                                                    la Nación,
                                                    Carla Vizzotti y al jefe del Estado Mayor Conjunto de las Fuerzas
                                                    Armadas,
                                                    teniente general Juan Martín Paleo, encabezaron esta mañana el acto
                                                    en
                                                    conmemoración por el 75 ° aniversario de la creación del Estado
                                                    Mayor
                                                    Conjunto. Durante la ceremonia realizada en el Salón San Martín del
                                                    Edificio
                                                    Libertador, se anunció que el ministro Taiana firmó la resolución
                                                    que aprueba el
                                                    Plan de Capacidades Militares (PLANCAMIL), dando por concluido un
                                                    ciclo
                                                    completo de planeamiento, hecho que no se lograba desde el año 2011.
                                                </p>
                                                <br>
                                                <p>En este sentido, Taiana enfatizó:<strong> “El PLANCAMIL constituye
                                                        una pieza clave
                                                        para la gestión de la política de Defensa nacional, pues de él
                                                        se
                                                        desprenden, no solo los requerimientos materiales para las
                                                        inversiones
                                                        en materia de defensa, sino también las características que
                                                        deberán tener
                                                        todos aquellos subsistemas del instrumento militar: información,
                                                        recursos humanos, infraestructura, logística, adiestramiento,
                                                        doctrina y
                                                        organización”.</strong></p>
                                                <br>
                                                <p>A su turno, el teniente general Juan Martín Paleo repasó los hitos de
                                                    la gestión
                                                    vinculada a la Defensa nacional y destacó<strong> “la definitiva
                                                        consolidación del rol
                                                        que el marco legal otorga al Estado Mayor Conjunto como órgano
                                                        de
                                                        planeamiento militar y conductor, a través del Comando
                                                        Operacional de
                                                        las Operaciones en Desarrollo que lleva adelante el instrumento
                                                        militar”.</strong>
                                                    Asimismo, explicó<strong> “la importancia de la resolución
                                                        ministerial 1365, firmada
                                                        por el ministro Taiana recientemente que aprueba el Plan de
                                                        Capacidades
                                                        Militares 2023,  como un hito relevante para la defensa
                                                        nacional, ya que
                                                        establece formalmente el diseño de capacidades y generación de
                                                        fuerzas

                                                        para el mediano plazo para enfrentar el eventual conflicto
                                                        futuro,
                                                        considerando una estrategia militar disuasiva activa, el
                                                        desarrollo de
                                                        acciones en nuevos ámbitos de operación, como el cibernético, el
                                                        espacial y el de la información y el establecimiento de las
                                                        capacidades
                                                        necesarias para cumplir con la misión principal del instrumento
                                                        militar”.</strong>
                                                </p>
                                                <br>
                                                <figure>
                                                    <img class="h-96 w-full object-cover"
                                                        src="{{ asset('../img/pol/pol_mayor1.svg') }}" alt="">

                                                </figure>
                                                <br>
                                                <p>Durante la ceremonia, la ministra de Salud, Vizzotti fue distinguida
                                                    como
                                                    <strong> “Dama Expedicionaria al Desierto Blanco”</strong> por su
                                                    aporte sanitario a las
                                                    Bases Antárticas Conjuntas. En esa línea, Vizzotti mencionó:<strong>
                                                        “Como
                                                        representante de un equipo muy grande del Ministerio de Salud,
                                                        quiero
                                                        agradecer esta distinción y decirles que la comparto con las y
                                                        los
                                                        trabajadores de nuestro Ministerio que articularon con ustedes
                                                        en la
                                                        respuesta a la pandemia y en el despliegue en la Antártida para
                                                        el
                                                        fortalecimiento de este país bicontinental que tanto orgullo nos
                                                        da”</strong>,
                                                    manifestó Vizzotti y sumó su agradecimiento<strong> “a cada uno de
                                                        los hombres y
                                                        mujeres de las Fuerzas Armadas y a los investigadores e
                                                        investigadoras
                                                        del personal de sanidad que estuvieron articulando en el momento
                                                        más
                                                        difícil desde el punto de vista sanitario que nos tocó
                                                        vivir”.</strong>
                                                </p>
                                                <br>
                                                <p>Además, durante el acto, se entonaron las estrofas del himno nacional
                                                    argentino, y se realizó la entrega de distinciones, medallas y
                                                    diplomas a los
                                                    agentes civiles que cumplieron treinta años de servicio en la
                                                    administración
                                                    pública nacional, y diplomas a los Veteranos de Guerra del conflicto
                                                    del
                                                    Atlántico Sur.</p>
                                                <br>
                                                {{--  <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/Chino.svg') }}" alt="">
                                                        <p> <strong>Nota de Oscar Chino Martínez<strong></p>

                                                        <p><strong> Zemborain <strong></p>

                                                    </figure>
                                                </div> --}}

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
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol26')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">TOLOSA PAZ Y MASSA PRESENTARON EL REGISTRO ÚNICO DE
                                                SOLICITANTES DE LOTES</a>
                                        </h2>

                                        <p>Realizaron la presentación de este instrumento<strong> "que le permitirá al
                                                Estado
                                                garantizar el acceso a la tierra a familias de sectores populares de
                                                todo el
                                                país".</strong> Se dio en el marco de una gira en la que entregaron
                                            viviendas e
                                            inauguraron un Centro de Desarrollo Infantil.

                                        </p>
                                        <br>
                                        <figure>
                                            <img class="h-96 w-full object-cover"
                                                src="{{ asset('../img/pol/pol_vtp2.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La ministra y candidata a diputada nacional Victoria Tolosa Paz
                                                    participó hoy de una extensa jornada de trabajo en el norte del
                                                    país, donde encabezó con el ministro de economía y candidato a
                                                    presidente por Unión por la Patria Sergio Massa, el jefe de gabinete
                                                    Agustín Rossi, el Gobernador Ricardo Quintela, el ministro de
                                                    Desarrollo Territorial y Hábitat de la Nación Santiago Maggiotti y
                                                    la Secretaria de Integración Socio Urbana Fernanda Miño, el anuncio
                                                    del Registro Único de Solicitantes de Lotes (RUS), y la entrega de
                                                    502 viviendas en La Rioja.
                                                </p>
                                                <br>
                                                <p>El candidato a presidente de la Nación, Sergio Massa expresó que
                                                    "lanzaremos este registro que tiene que ver con un programa de
                                                    articulación que permita construir en 4 años 4 millones de lotes con
                                                    servicios”.
                                                    “Tenemos que dar el primer paso de una manera efectiva hacia
                                                    millones de argentinos que hoy no tienen la posibilidad ni de
                                                    desarrollar su propio programa de agricultura familiar y mucho menos
                                                    de tener su propio lote. Cada argentino en su lote es la consigna de
                                                    los próximos cuatro años”, dijo Massa.
                                                </p>
                                                <br>
                                                <p>Finalmente, el Jefe de Gabinete y candidato a vicepresidente de la
                                                    nación, Agustín Rossi, dijo: “es muy importante lo que estamos
                                                    haciendo hoy porque significa darle una vuelta al acceso a la
                                                    tierra, y nosotros vamos a poner todas aquellas tierras ociosas que
                                                    tiene el Estado Nacional en búsqueda de este objetivo, lo cual
                                                    significa que intendentes, gobernadores y Estado Nacional tienen que
                                                    entrar a pensar en bancos de tierra y en generar condiciones para
                                                    que haya tierra y después podamos implementar este tipo de
                                                    políticas”.

                                                </p>
                                                <br>
                                                <figure>
                                                    <img class="h-96 w-full object-cover"
                                                        src="{{ asset('../img/pol/pol_vtp1.svg') }}" alt="">

                                                </figure>
                                                <br>
                                                <p><strong>¿Qué es el RUS?</strong>
                                                </p>
                                                <br>
                                                <p>El RUS es un registro que permite conocer las personas y familias de
                                                    los barrios y sectores populares de todo el país que necesitan
                                                    acceder al suelo para construir su vivienda o desarrollar
                                                    actividades agrícolas. Es una herramienta que permitirá identificar
                                                    las zonas con mayor demanda de suelo, los diferentes tipos de lotes
                                                    requeridos e impulsar proyectos de manera federal, ágil, justa y
                                                    transparente.</p>
                                                <br>
                                                <p>Esta iniciativa permite profundizar la política de acceso al suelo
                                                    del Programa Lote.Ar del Ministerio de Desarrollo Social de la
                                                    Nación, en conjunto con los gobiernos provinciales y municipales,
                                                    para una redistribución justa de la tierra disponible en el país.
                                                </p>
                                                <br>
                                                <p>El registro será el punto de partida para avanzar en un programa
                                                    concreto de 1.000.000 de lotes con servicios destinados a las
                                                    familias de sectores populares que lo necesitan.</p>
                                                <br>
                                                <p>Más tarde, la ministra junto a los funcionarios nacionales y el
                                                    Secretario de Niñez, Adolescencia y Familia Gabriel Lerner, realizó
                                                    la inauguración de un nuevo Centro de Desarrollo Infantil en la
                                                    provincia para la atención integral de 144 niños y niñas entre 45
                                                    días y hasta los 4 años de edad, que demandó una inversión de más de
                                                    55 millones de pesos.</p>
                                                <br>

                                                {{--  <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/Chino.svg') }}" alt="">
                                                        <p> <strong>Nota de Oscar Chino Martínez<strong></p>

                                                        <p><strong> Zemborain <strong></p>

                                                    </figure>
                                                </div> --}}

                                </article>
                            </li>
                        </ul>
                    </div>


                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" col-span-6">

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol27')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA DESMEMORIA</a>
                                        </h2>

                                        <p>Mario Benedetti, ese enorme “charrúa” de las letras, escribió hace décadas
                                            una columna muy valiosa que tituló como este aporte a la memoria y la
                                            reflexión. Se publicó en el prestigioso diario madrileño El País, antes que
                                            el cotidiano virara hacia el calorcito de los medios adocenados.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="h-96 w-full object-cover"
                                                src="{{ asset('../img/pol/pol_desme.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Entonces, nuestro subcontinente empezaba a dejar atrás el horror de
                                                    la eterna noche de sangriento sufrimiento y hasta allí, muy
                                                    acompañado por el diario de mayor tirada en Europa en castellano.
                                                </p>
                                                <br>
                                                <p>Cinco décadas después, por hablar de lo contemporáneo, aquel fenómeno
                                                    fue el común denominador que manipulaba la verdad con la
                                                    sobreinformación: las consecuencias horribles, están en superficie.
                                                </p>
                                                <br>
                                                <p>El país, una vez más atraviesa la turbulencia de los momentos
                                                    bisagra. Ahora y con mayor virulencia el antagonismo de modelos está
                                                    en juego; la cuestión pasa por consolidar el proceso democrático de
                                                    cuatro décadas sin interrupciones violentas. De eso se trata, aunque
                                                    en la otra vereda haya una fuerte corriente colonizadora. Basten
                                                    recordar las declaraciones públicas de la Comandanta de la IV Flota
                                                    de EE.UU, Laura Richardson, uniformada y colmada de condecoraciones
                                                    en su pecho que, ante una cámara de TV, enumeró como propios
                                                    recursos (litio, gas, petróleo, agua dulce y alimentos), como si se
                                                    tratara de un almacén de ramos generales al que se pudiera echar
                                                    mano sin más.
                                                </p>
                                                <br>
                                                <p>Pero no fue todo. También recorrió la zona austral, poniendo el ojo
                                                    en el paso que une los dos océanos, sin perder de vista el enclave
                                                    nuclear en las usurpadas Islas Malvinas. Ya de puertas adentro,
                                                    coincidió con la candidata PROpositora, Patricia Bullrich, que no
                                                    dudó en manifestar su decisión de regalar el archipiélago, temeraria
                                                    determinación dada a conocer en el canal, cuya propiedad se atribuye
                                                    a Mauricio Macri.
                                                </p>
                                                <br>
                                                <p>O, el líder libertario, Javier Milei, que manifiesta su decisión de
                                                    dinamitar el Estado, empezando por el Banco Central, salud,
                                                    educación, etcétera. Ambos candidatos, están en el desenfreno de
                                                    competir por el mayor grado de radicalización de derecha (¿ultra?).
                                                    También ambos cultores de un escenario de violencia muy grave, que
                                                    no dudan en decir que su principal objetivo es hacer desaparecer el
                                                    “kirchnerismo”. Un verbo de triste memoria para las mayorías.</p>
                                                <br>
                                                <p><strong>¿DE DÓNDE VENIMOS?</strong></p>
                                                <br>
                                                <p>También y como para no remontarnos a los albores de la Patria, hace
                                                    70 años, se debe recordar la continuidad histórica de ciertos
                                                    apellidos ejecutores de la historia reciente. En el golpe de Estado
                                                    que derrocó al presidente radical, Hipólito Yrigoyen, el 6 de
                                                    setiembre de 1930, contó con el apoyo del Procurador General de la
                                                    Nación, Horacio Rodríguez Larreta.</p>
                                                <br>
                                                <p>Años después, exactamente 25, se produjo el primer acto terrorista de
                                                    la historia, el 16 de junio de 1955, cuando oficiales de la aviación
                                                    naval secundados por civiles bombardearon la Casa de Gobierno para
                                                    asesinar al presidente Juan Domingo Perón. No lo lograron y, en
                                                    cambio dieron en el blanco de unos 300 civiles, incluyendo un
                                                    transporte de niños. El responsable fue el ministro de Marina,
                                                    contralmirante Olivieri, que en su Estado Mayor tenía incorporados
                                                    dos jóvenes oficiales: Emilio Eduardo Massera y Francisco Mayorga.
                                                    Del primero, es ocioso recordar su antecedente genocida, mientras
                                                    que de Mayorga bien vale decir que se trató del comandante de la
                                                    base naval Almirante Zar, en cuya madrugada del 22 de agosto de
                                                    1972, la Armada fusiló a 16 presos políticos. </p>
                                                <br>
                                                <p>Aquellos “héroes” huyeron al Uruguay, donde fueron recibidos con
                                                    entusiasmo por el joven oficial del Ejército, Guillermo Suárez
                                                    Mason, alias “Pajarito”, condenado por genocida. Como muestra la
                                                    historia, esos soldados armados por la Constitución giraron sus
                                                    armas contra el pueblo y cobraron rigurosa y triste actualidad en la
                                                    dictadura más sangrienta, corrupta y cobarde de la historia: 30.000
                                                    detenidos-desaparecidos, mujeres violadas, niños apropiados y
                                                    destrucción de todo el aparato productivo. </p>
                                                <br>
                                                <p>A partir de 1983, y con la derrota militar en Malvinas el horizonte
                                                    democrático empezó a clarear, de la mano del candidato radical, Raúl
                                                    Alfonsín. Su campaña fue hecha advirtiendo que propiciaría el juicio
                                                    a los represores. No hay antecedentes en el mundo. </p>
                                                <br>
                                                <p>Año 2023 (Siglo XXI), electoral, el país y la región siguen siendo
                                                    territorios en disputa, como lo proclama la generala Richardson y,
                                                    tantas veces, con la invalorable ayuda de los “gerentes” locales.
                                                    Baste recordar que con el derrocamiento de Perón el FMI hizo pie en
                                                    el país y su inclinación colonial, sólo se interrumpió en el período
                                                    encabezado por Néstor y Cristina Kirchner.</p>
                                                <br>
                                                <p>Los “gerentes” fueron Carlos Melconian, delfín de P. Bullrich y
                                                    Domingo Cavallo (hoy asesor del candidato Javier Milei), ministro
                                                    privatizador y confiscador de trabajadores y jubilados en los
                                                    gobiernos de Carlos Saúl y Fernando de la Rúa. Y ambos estatizadores
                                                    de la deuda privada multibillonaria en dólares. Por aquello de la
                                                    desmemoria, tampoco hay que olvidar que el mentor de la dolarización
                                                    en Ecuador fue el superministro de los años noventa, cepo del que
                                                    nunca salió aquel país.</p>
                                                <br>
                                                <p>Mauricio Macri, por fin, hoy el ariete del FMI en el proyecto de
                                                    dominación. No se debe olvidar que “gestionó” una deuda impagable
                                                    por 100 años para someter a 47 millones de argentinos y su
                                                    descendencia. </p>
                                                <br>
                                                <p>¿El poder judicial y la Corte?</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol28')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CASO TESTIGO A LA UNDÉCIMA POTENCIA</a>
                                        </h2>

                                        <p>En una nota escrita para este portal hace unos meses se remarcaba:<strong>
                                                “La
                                                elección en San Juan mostró que la falta de unidad del peronismo es
                                                sinónimo de derrota”.</strong> Diferentes contextos, un mismo destino.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="h-96 w-full object-cover"
                                                src="{{ asset('../img/pol/pol_caso.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p><strong> Chaco</strong> es diagnóstico de derrota para el peronismo.
                                                    Las razones son
                                                    varias: para una referencia taxativa y criteriosa les recomiendo el
                                                    artículo en Pagina 12 de Matías Ferrari. De todas ellas extraigo un
                                                    hilo conductor que hace referencia a por lo menos tres de las claves
                                                    del traspié electoral del Frente Chaqueño.
                                                </p>
                                                <br>
                                                <p>En una nota escrita para este portal hace unos meses se remarcaba “La
                                                    elección en San Juan mostró que la falta de unidad del peronismo es
                                                    sinónimo de derrota”. Diferentes contextos, un mismo destino
                                                    pusieron a prueba este axioma improvisado para la nota, pero no
                                                    exento de antecedentes durante los últimos diez años desde el primer
                                                    cisma con la partida de Sergio Massa y la fundación del Frente
                                                    Renovador.
                                                </p>
                                                <br>
                                                <p>Consecuencia lógica de un proceso de recuperación de la
                                                    representación política efectiva de las demandas de los sectores
                                                    populares, la ampliación de la esfera del debate, la acción
                                                    institucional y las políticas públicas hacia nuevas reivindicaciones
                                                    sociales postergadas. Pero más que nada sugiere una secuela de la
                                                    ampliación no solo del discurso y las exigencias en cuanto a la
                                                    redistribución del ingreso, sino por su realización efectiva que
                                                    inclinaba la puja distributiva hacia un sentido que retroalimentaba
                                                    anímicamente la tendencia, consolidando por añadidura el
                                                    ensanchamiento del margen de maniobra de los dispositivos vinculados
                                                    al trabajo asalariado.
                                                </p>
                                                <br>
                                                <p>Esta condición virtuosa de la representación política no solo
                                                    envalentonaría las aventuras en solitario de dirigentes
                                                    justicialistas, sino que -como un reverso inevitable- favorecería el
                                                    ordenamiento de los sectores conservadores cuya punta de lanza sería
                                                    la gestión política de la Ciudad de Buenos Aires. La historia es
                                                    bien conocida. Entre una de las claves de Matías Ferrari aparece el
                                                    corte de boleta intendente peronista- gobernador Zdero como una
                                                    muestra de la sangría ocasionada por la negligente gestión de la
                                                    interna a fin de lograr una síntesis.
                                                </p>
                                                <br>
                                                <p>Aparece en el horizonte una tensión. Tensión cuyos protagonistas han
                                                    negado pero que más allá de los nombres del contrapunto puede
                                                    ponernos ante un debate interesante acerca de la dirección que
                                                    asumirá el peronismo ante la ausencia de Cristina en el escenario
                                                    electoral. Dos posturas que pueden generar una síntesis de acción.
                                                    Pero que más allá de la relación entre los protagonistas, los
                                                    partidarios de uno u otro estilo o premisas bien podrían ver en el
                                                    caso testigo Chaco o en los últimos cuatro años las consecuencias de
                                                    no canalizarlas adecuadamente.</p>
                                                <br>


                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/pablo.svg') }}" alt="">
                                                        <p> <strong>Nota de Pablo Arsegot<strong></p>

                                                        <p><strong><strong></p>

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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol29')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PILAR: JORNADA PARA LAS JUVENTUDES DE LA PROVINCIA</a>
                                        </h2>

                                        <p><i>El gobernador Axel Kicillof estuvo presente en la Jornada "Juventudes,
                                                Derecho al Futuro" organizada en Pilar, donde anunció la implementación
                                                del
                                                boleto estudiantil terciario.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="h-96 w-full object-cover"
                                                src="{{ asset('../img/pol/pol_juve.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La subsecretaria de Políticas de Género y Diversidad Sexual Lucía
                                                    Portos acompañó al gobernador en el anuncio y recorrió las distintas
                                                    actividades de la jornada. El stand de nuestro Ministerio contó con
                                                    actividades lúdicas y promoción de programas dedicados a la
                                                    juventud, como "ESI con amigues".
                                                </p>
                                                <br>
                                                <p>La jornada recreativa contó con iniciativas tecnológicas, culturales
                                                    y deportivas, muestras de proyectos de Centros Juveniles vinculados
                                                    a tecnología, ambiente y cultura y stands de organismos públicos.
                                                </p>
                                                <br>
                                                <p>En el marco del Mes de las Juventudes, participaron más de 4000
                                                    jóvenes que forman parte de programas y actividades de la Dirección
                                                    Provincial de Juventudes del Ministerio de Desarrollo de la
                                                    Comunidad.
                                                </p>
                                                <br>


                                                {{--   <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/pablo.svg') }}"
                                                            alt="">
                                                        <p> <strong>Nota de Pablo Arsegot<strong></p>

                                                        <p><strong><strong></p>

                                                    </figure>
                                                </div> --}}

                                </article>
                            </li>
                        </ul>
                    </div>


                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" col-span-6">

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol30')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ALLÍ DONDE LA “LIBERTAD” ARRASA</a>
                                        </h2>

                                        <p class="font-light text-gray-500">Por Pablo Arsegot.</p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_libertad.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p><i>¿Qué derechos voy a perder si no los tengo? ¿Para qué conservar un
                                                        sistema político cuya acción no ha redundado en satisfacer mis
                                                        demandas? Ahí es donde la “libertad” avanza.</i>
                                                </p>
                                                <br>
                                                <p>En plena pandemia chequeado.com apuntaba que las plataformas de
                                                    delivery se habían incrementado un 400 % en el contexto del
                                                    aislamiento obligatorio. Esto significó el engrosamiento
                                                    significativo de los trabajadores que usan las aplicaciones para el
                                                    reparto de comida a domicilio y la consolidación de un colectivo que
                                                    data de unos seis años afirmándose como un sujeto laboral ya
                                                    insoslayable. Por entonces se había planteado la necesidad de una
                                                    legislación tendiente a proteger a este nuevo actor en el escenario
                                                    del trabajo informal.
                                                </p>
                                                <br>
                                                <p>El artículo de Chequeado finaliza con un “aún no se envió el
                                                    proyecto” y lo remarca en dos oportunidades. Otro antecedente es la
                                                    presentación del proyecto por parte de Omar Plaini aprobado por el
                                                    Senado de la Provincia de Buenos Aires, pero bloqueado en la cámara
                                                    de Diputados. Dejando de lado los precedentes:<B> ¿De qué manera le
                                                        ha
                                                        hablado el sistema político a este sector? ¿Lo ha hecho? ¿O por
                                                        el
                                                        contrario dejó un vacío narrativo que ocupó un emergente como la
                                                        Libertad Avanza?</B> Está claro que ninguna de las dos fuerzas
                                                    hasta
                                                    2019 mayoritarias han sido lo suficientemente creativa para
                                                    interpelar a este colectivo compuesto mayormente por jóvenes menores
                                                    de 30 años.
                                                </p>
                                                <br>
                                                <p>Sintomáticamente hubo una fuerza política que sintonizó con el ánimo
                                                    de esos sectores de la economía precarizada que no teniendo derechos
                                                    laborales, al ver sus ingresos pauperizados por la creciente
                                                    inflación, puede suponerse que se inclina por un cambio que rechaza
                                                    al sistema político tradicional al sentir que lo ha dejado a la
                                                    deriva, al trabajador formal a quien percibe como un privilegiado y
                                                    a los políticos a los que considera como una casta que vive bien
                                                    mientras él o ella ve aniquilada toda expectativa de mejorar su
                                                    vida.</p>
                                                <br>
                                                <p>La retórica de la pérdida de derechos laborales es inadecuada porque
                                                    surge la replica:<b> ¿Qué derechos voy a perder si no los tengo?
                                                        ¿Para
                                                        qué conservar un sistema político cuya acción no ha redundado en
                                                        satisfacer mis demandas?</b> Ahí es donde la “libertad” avanza.
                                                </p>
                                                <br>
                                                <p>Es gracioso y patológico, de una patología de base sociopática, que
                                                    Macri afirmé suelto de cuerpo que el populismo es contagioso. El
                                                    populismo no es una política en sí, es una forma de hacer política.
                                                    Las respuestas que propone difieren. Pueden ser progresivas o
                                                    regresivas. A una problemática o demanda social real se le puede
                                                    oponer diferentes clases de respuestas. Donald Trump es populista
                                                    como lo fue Hugo Chávez. Lo que difería era la manera en que
                                                    respondían a las demandas populares. Macri fue populista en 2015 con
                                                    su estafa electoral, asegurando una continuidad de las políticas
                                                    populares sin los vicios o defectos de la etapa anterior. Y hoy su
                                                    candidato bis, Javier Milei, lo es. Solo que las respuestas que
                                                    propone a problemas reales son las peores posibles.</p>
                                                <br>

                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/pablo.svg') }}" alt="">
                                                        <p> <strong>Nota de Pablo Arsegot<strong></p>

                                                        <p><strong><strong></p>

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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol31')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL PEPE RONISMO DIGITAL</a>
                                        </h2>

                                        <p><i>¿Cómo hacer que un movimiento político de masas que surgió en la
                                                era analógica pueda convertirse en una vanguardia en este
                                                escenario de bombardeo digital donde el medio es el mensaje? Mas
                                                allá de dar respuestas la idea es plantear esta necesidad
                                                insoslayable de percibir que el tiempo está cambiando y junto a
                                                él los lenguajes y el espacio mismo en que se articula el debate
                                                público y la política en general.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_pepe.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <br>
                                                <p>Escucho a Pedro Rosenmblat en un segmento "Como la ves" del programa
                                                    de
                                                    <b>Gabriel Sued en Futurock</b> hablar sobre la digitalización del
                                                    peronismo. ¿Cómo sería esto? ¿Cómo hacer que un movimiento político
                                                    de masas que surgió en la era analógica pueda convertirse en una
                                                    vanguardia en este escenario de bombardeo digital donde el medio es
                                                    el mensaje?
                                                </p>
                                                <br>
                                                <p>Mas allá de dar respuestas la idea es plantear esta necesidad
                                                    insoslayable de percibir que el tiempo está cambiando y junto a él
                                                    los lenguajes y el espacio mismo en que se articula el debate
                                                    público y la política en general. Habrá que pensarlo porque la
                                                    política entendida en términos absolutamente prácticos constituye un
                                                    medio para incidir en la organización de la sociedad, configura un
                                                    ordenamiento y una dirección hacia donde van a estar determinadas
                                                    las decisiones de carácter administrativo que afectan las diversas
                                                    esferas de la vida económica, ambiental, cultural, comunicacional,
                                                    social.
                                                </p>
                                                <br>
                                                <p>La política como una herramienta para satisfacer las demandas de los
                                                    diferentes sectores de una sociedad y para articularlos mediante el
                                                    estado cuya intervención limita el carácter desigualador y voraz del
                                                    mercado global. Pero en un tiempo donde lo digital -la velocidad de
                                                    lo digital- esa ruedita que cumple con nuestras expectativas en
                                                    apenas segundos ¿Cómo hace la política y el estado para satisfacer
                                                    las demandas? ¿De qué manera le habla a aquel cuya decisión busca
                                                    captar? ¿Cómo lo interpela?</p>
                                                <br>
                                                <p>Antes que nada la comunicación política, el peronismo digital podría
                                                    fijarse, como dice Mariana Moyano en su podcast Anaconda con
                                                    memoria, en las condiciones de recepción. En semiótica, la ciencia
                                                    que estudia los signos que permiten la comunicación humana, las
                                                    condiciones de recepción son fundamentales: se habla mucho de ellas
                                                    a la hora de imaginar un medio como una publicación gráfica, pero en
                                                    tiempos de lo digital esto se incrementa drásticamente porque el
                                                    medio es el mensaje y lo que se necesita es lograr la atención,
                                                    buscar que nos den bolilla y calcular cuántas horas les restamos a
                                                    otros intereses.
                                                </p>
                                                <br>
                                                <p>Nos guste o no, es una batalla por el tiempo en un nuevo tiempo: el
                                                    tiempo de lo inmediato, de lo digital. Y allí, en este nuevo tiempo,
                                                    las condiciones en que se recepciona el mensaje son sobre las que
                                                    hay que trabajar, no en las de producción. Pensando en las
                                                    condiciones del agua de la pileta en la cual nos tiramos. sean estas
                                                    o no las que consideremos las mas adecuadas, con nuestro estilo de
                                                    nado, que es valedero y tiene sus razones, debemos ejecutar nuestra
                                                    mejor performance.</p>
                                                <br>

                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/pablo.svg') }}" alt="">
                                                        <p> <strong>Nota de Pablo Arsegot<strong></p>

                                                        <p><strong><strong></p>

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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol32')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MONEDA DIGITAL ARGENTINA: CÓMO FUNCIONA Y POR QUÉ PODRÍA
                                                SER CLAVE</a>
                                        </h2>

                                        <p><i>En un esfuerzo por modernizar su sistema financiero y enfrentar los
                                                desafíos económicos actuales, el Gobierno argentino está considerando la
                                                creación de una Moneda Digital Argentina. Aquí explicamos cómo
                                                funcionaría esta iniciativa y por qué podría ser clave para el país.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_moneda.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La moneda digital, un tema que ha ganado relevancia en la escena
                                                    financiera internacional, se encuentra en el centro de atención en
                                                    Argentina. En un esfuerzo por modernizar el sistema financiero y
                                                    abordar desafíos económicos, el gobierno argentino está considerando
                                                    la implementación de una Moneda Digital Argentina. Aquí, exploramos
                                                    cómo funciona y por qué podría ser clave para el país.
                                                </p>
                                                <br>
                                                <p>¿Qué es una Moneda Digital? Una moneda digital es una forma de dinero
                                                    completamente digital que se basa en la tecnología blockchain. A
                                                    diferencia de las monedas tradicionales, no existen en forma física
                                                    y se almacenan en billeteras digitales en línea o en aplicaciones
                                                    móviles. Las transacciones con moneda digital se registran de manera
                                                    transparente y segura en la cadena de bloques, lo que garantiza la
                                                    trazabilidad y la seguridad.
                                                </p>
                                                <br>
                                                <p>¿Cómo funcionaría el proyecto de Moneda Digital Argentina propuesto
                                                    por el gobierno que busca crear una moneda digital respaldada por el
                                                    Banco Central de Argentina? Funcionaría de manera similar a las
                                                    criptomonedas, pero tendría un respaldo oficial, lo que la haría más
                                                    estable y confiable. Los usuarios podrían adquirir Moneda Digital
                                                    Argentina a través de una plataforma gubernamental y utilizarla para
                                                    realizar transacciones, pagar servicios y realizar compras en línea.
                                                </p>
                                                <br>
                                                <p><b>Ventajas Potenciales</b></p>
                                                <br>
                                                <p><i>1- <b>Reducción de la Informalidad:</b> Una moneda digital
                                                        respaldada por el
                                                        gobierno podría ayudar a reducir la economía informal, ya que
                                                        todas
                                                        las transacciones quedarían registradas en la cadena de bloques,
                                                        lo
                                                        que dificultaría la evasión fiscal.</i></p>
                                                <br>
                                                <p><i>2- <b>Mayor Inclusión Financiera:</b> Facilitaría el acceso a
                                                        servicios
                                                        financieros para personas no bancarizadas al permitirles abrir
                                                        billeteras digitales sin necesidad de una cuenta bancaria
                                                        tradicional.</i></p>
                                                <br>
                                                <p><i>3- <b>Transparencia y Seguridad:</b> Las transacciones en moneda
                                                        digital son
                                                        transparentes y seguras debido a la tecnología blockchain, lo
                                                        que
                                                        puede reducir el fraude y la corrupción.</i></p>
                                                <br>
                                                <p><i>4- <b>Reducción de Costos:</b> Podría disminuir los costos
                                                        asociados con la
                                                        gestión y el manejo de efectivo, lo que sería una ventaja tanto
                                                        para
                                                        el gobierno como para las empresas.</i></p>
                                                <br>
                                                <p>El Ministro de Economía, Sergio Massa, anunció que enviará un
                                                    proyecto de ley al Congreso para regular la Moneda Digital
                                                    Argentina. Se espera que el proyecto establezca las bases legales y
                                                    regulatorias para su implementación y funcionamiento. También se
                                                    prevé que aborde cuestiones relacionadas con la seguridad
                                                    cibernética, la protección del consumidor y la supervisión del Banco
                                                    Central.</p>
                                                <br>
                                                <p>El proyecto de ley será debatido en el Congreso en las próximas
                                                    semanas y se espera un intenso debate sobre su viabilidad y
                                                    beneficios. La Moneda Digital Argentina representa un paso audaz
                                                    hacia la modernización del sistema financiero argentino y podría
                                                    tener un impacto significativo en la economía y la inclusión
                                                    financiera del país. La decisión final del Congreso será crucial
                                                    para determinar si esta iniciativa se convierte en una realidad.</p>
                                                <br>

                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/gus.svg') }}"
                                                            alt="">
                                                        <p> <strong>Nota de Gustavo Cano<strong></p>

                                                        <p><strong><strong></p>

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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol33')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ALBERTO FERNÁNDEZ RECIBE A INTEGRANTES DE INSTITUCIONES
                                                ARMENIAS</a>
                                        </h2>

                                        <p><i>Alberto Fernández, mantuvo una importante reunión en la Casa Rosada en la
                                                mañana de este viernes con representantes de Instituciones Armenias de
                                                la República Argentina (IARA).</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_albert.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En un encuentro significativo, se destacó la continuidad de la
                                                    política del Estado argentino en defensa de la causa armenia y la
                                                    valiosa ayuda brindada por Cascos Blancos destinada a la población
                                                    afectada por la emergencia que vive Armenia.
                                                </p>
                                                <br>
                                                <p>La audiencia contó con la presencia del presidente de IARA, Alejandro
                                                    Artín Aram Kalpakian, así como los distinguidos miembros de la
                                                    institución, Eduardo Costanian, Antonio Sarafian, Alfonso José
                                                    Tabakian, Nechan Ricardo Ichkhanian, Daniel Agop Rizzian, Adriana
                                                    Aida Camara Kasparian, Maral Masrian , Sergio Juan Tchabrassian,
                                                    Onik Boyadjian y Miguel Harutiunian.
                                                </p>
                                                <br>
                                                <p>Durante el encuentro, los representantes de IARA expresaron su
                                                    profundo agradecimiento al presidente Alberto Fernández por el apoyo
                                                    inquebrantable brindado en los foros internacionales. La reunión se
                                                    convirtió en una oportunidad para destacar la importancia de la
                                                    cooperación entre Argentina y Armenia en asuntos de interés mutuo,
                                                    así como para reafirmar el compromiso argentino en la defensa de la
                                                    causa armenia.
                                                </p>
                                                <br>
                                                <p>El Gobierno argentino, a través de su política de Estado, ha sido un
                                                    aliado constante de la comunidad armenia en Argentina y en todo el
                                                    mundo, respaldando sus esfuerzos para preservar su cultura, historia
                                                    y luchar por el reconocimiento internacional de los acontecimientos
                                                    históricos ocurridos durante el Genocidio Armenio.</p>
                                                <br>
                                                <p>Además, se subrayó la relevante contribución de Cascos Blancos, una
                                                    entidad argentina especializada en la gestión de situaciones de
                                                    emergencia, que ha brindado asistencia crucial a la población
                                                    afectada en Armenia. Esta ayuda refleja el compromiso de Argentina
                                                    con la solidaridad internacional y la cooperación humanitaria en
                                                    momentos críticos.</p>
                                                <br>
                                                <p>La reunión entre el presidente Alberto Fernández y los representantes
                                                    de IARA sirvió como un recordatorio de la importancia de mantener y
                                                    fortalecer las relaciones entre Argentina y la comunidad armenia,
                                                    así como de la firme determinación de Argentina de seguir apoyando
                                                    la causa armenia en el escenario mundial. </p>
                                                <br>

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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol34')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DOS ENCUESTAS CONFIRMAN LA TENDENCIA DE UN ESCENARIO DE
                                                BALLOTAGE ENTRE JAVIER MILEI Y SERGIO MASSA</a>
                                        </h2>

                                        <p><i>En medio de un clima político cada vez más candente, dos nuevas encuestas
                                                han arrojado resultados que apuntan a un escenario de ballotage
                                                altamente probable entre los candidatos Javier Milei y Sergio Massa.</i>
                                        </p>

                                        <p><i>El escenario político argentino se mantiene en constante ebullición a
                                                medida que se acercan las elecciones presidenciales. Dos encuestas
                                                recientes, realizadas por las consultoras Aresco y Zuban Córdoba,
                                                confirman una tendencia interesante: un posible ballotage entre Javier
                                                Milei y Sergio Massa.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_encuesta.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><b>Aresco muestra una disputa cerrada</b>
                                                </p>
                                                <br>
                                                <p>La encuesta de Aresco, realizada antes del debate presidencial,
                                                    revela que Javier Milei lidera con un 32,9% de intención de voto,
                                                    seguido de cerca por Sergio Massa, quien cuenta con un 30,2%. La
                                                    tercera posición en esta encuesta la ocupa Patricia Bullrich, con un
                                                    24,3%. Estos números se basan en la intención de voto de los
                                                    encuestados antes de considerar la proyección de indecisos.
                                                </p>
                                                <br>
                                                <p>Sin embargo, cuando se proyecta la intención de voto de los
                                                    indecisos, Milei sube al 35%, acercándose peligrosamente al umbral
                                                    del 50% necesario para evitar un ballotage. En caso de llegar a la
                                                    segunda vuelta, Aresco otorga a Milei una ventaja, aunque estrecha,
                                                    sobre Massa o Bullrich. En el primer caso, Milei alcanza el 48,7%,
                                                    mientras que en el segundo se queda en el 39,3%. En este último
                                                    escenario, Patricia Bullrich logra acortar la brecha, situándose en
                                                    un 36,6%, aunque todavía distante de Milei.
                                                </p>
                                                <br>
                                                <p><b>Zuban Córdoba confirma la tendencia</b></p>
                                                <br>
                                                <p>La encuesta realizada por Zuban Córdoba se llevó a cabo después del
                                                    debate presidencial y muestra resultados similares. Milei lidera con
                                                    un 34,7% de intención de voto, seguido nuevamente por Massa con un
                                                    32,7% y Bullrich con un 25%. En un eventual balotaje, Milei mide un
                                                    sólido 42,9% contra el 36,9% de Massa, consolidando su posición como
                                                    un contendiente fuerte.</p>
                                                <br>
                                                <p>En cuanto a la provincia de Buenos Aires, Massa se distingue como
                                                    líder en intención de voto, sacando una ventaja de casi 7 puntos a
                                                    Milei y de 12 puntos a Bullrich. En la carrera por la gobernación,
                                                    Axel Kicillof lidera con un 35,3%, seguido por Néstor Grindetti con
                                                    un 25,4% y Carolina Piparo con un 21,4%. </p>
                                                <br>
                                                <p>Estas encuestas reflejan la volatilidad y la incertidumbre que
                                                    caracterizan a la política argentina en un momento crucial. A medida
                                                    que se acercan las elecciones, los candidatos deberán luchar por
                                                    cada voto, y los resultados podrían cambiar en cualquier momento. La
                                                    disputa por la presidencia promete ser reñida, y el escenario de un
                                                    posible ballotage entre Milei y Massa agrega un elemento adicional
                                                    de intriga a la contienda electoral.</p>
                                                <br>
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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol35')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">¿UNA TRAICIÓN A LA SOBERANÍA ARGENTINA?</a>
                                        </h2>

                                        <p><i>En declaraciones recientes, Mondino argumentó que respetar los derechos de
                                                los isleños implica abrir la puerta a la autodeterminación, una posición
                                                que se ha mantenido de manera consistente por parte del Reino Unido.
                                            </i>
                                        </p>
                                        <br>
                                        <p>Diana Mondino, candidata a diputada de La Libertad Avanza y postulante a
                                            canciller en caso de una victoria de Javier Milei en las elecciones, ha
                                            desatado un encendido debate en la política argentina al manifestar su
                                            posición sobre el conflicto de las Islas Malvinas y su relación con el Reino
                                            Unido. Lo que más ha sorprendido a muchos es su apoyo a respetar los
                                            derechos de los isleños, una postura que parece alinearse sorprendentemente
                                            con la histórica posición británica.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_traicion.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Su declaración ganó notoriedad cuando fue publicada en un artículo de
                                                    su autoría en el prestigioso diario londinense The Telegraph, bajo
                                                    el título "Los derechos de los isleños serán respetados si Javier
                                                    Milei gana las elecciones en la Argentina".
                                                </p>
                                                <br>
                                                <p>La cuestión de las Islas Malvinas ha sido un conflicto prolongado
                                                    entre nuestro país y el Reino Unido. Argentina reclama la soberanía
                                                    de las Islas Malvinas, Georgia del Sur y las Islas Sandwich del Sur.
                                                    El Reino Unido, en contrapartida, sostiene que los habitantes de las
                                                    Islas Malvinas tienen el derecho de determinar su propio estatus
                                                    político.
                                                </p>
                                                <br>
                                                <p>La propuesta de Mondino, que defiende el respeto a los derechos de
                                                    los isleños a través de la autodeterminación, es un marcado
                                                    alejamiento de la tradicional posición argentina, que insiste en la
                                                    soberanía indiscutible sobre las Islas Malvinas.
                                                </p>
                                                <br>
                                                <p>Históricamente, Argentina ha mantenido una postura inquebrantable en
                                                    relación a la soberanía de las Malvinas, lo que ha llevado a
                                                    numerosos conflictos diplomáticos y tensiones con el Reino Unido. La
                                                    guerra de las Malvinas en 1982 representa uno de los momentos más
                                                    trágicos en la historia de estas islas disputadas, cuando Argentina
                                                    intentó recuperar el control de las mismas, pero finalmente fue
                                                    derrotada por las fuerzas británicas.</p>
                                                <br>
                                                <p>Desde una perspectiva económica, el conflicto en torno a las Islas
                                                    Malvinas tiene implicaciones significativas. La región que rodea a
                                                    las Malvinas es rica en recursos naturales, incluyendo petróleo, gas
                                                    y pesca. La explotación de estos recursos podría tener un impacto
                                                    sustancial en la economía argentina. Sin embargo, mientras persista
                                                    el conflicto, Argentina se ve privada de la oportunidad de
                                                    beneficiarse económicamente de estas vastas riquezas.</p>
                                                <br>
                                                <p>La posición de Mondino plantea interrogantes cruciales sobre la
                                                    estrategia de Argentina en relación a las Islas Malvinas y su
                                                    vínculo con el Reino Unido. Su postura es controvertida en el
                                                    contexto político argentino, no representa un intento de abordar
                                                    este conflicto de larga data desde una perspectiva divergente, sino
                                                    una traición a la soberanía y a los intereses nacionales. </p>
                                                <br>
                                                <p>La pregunta que queda en el aire es, ¿Alguien puede votar a quienes
                                                    proponen una traición a la soberanía Argentina?</p>
                                                <br>
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/gus.svg') }}"
                                                            alt="">
                                                        <p> <b>Nota de Gustavo Cano</b></p>



                                                    </figure>
                                                </div>
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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol36')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Detrás de la locura de Milei puede haber “Gato
                                                encerrado”</a>
                                        </h2>
                                        <p>Todo el país está comentando los “brotes sicóticos” del candidato Javier
                                            Milei en A24, canal súper amigo, con sus extravagantes tácticas de
                                            comunicación sexuales y sus muecas de “sacado”. Todo parecería más un
                                            “acting” de alguien que construyó su ethos de político como alguien que
                                            coquetea a diario con la locura, como identidad marquetera. Hasta la
                                            mirada a lo Stanley Kubrick es parte del show, como señaló atinadamente
                                            en facebook el usuario “el Pulpo” (https://www.facebook.co
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_locura.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>También están las explicaciones de Rial en Radio 10, de que estaba
                                                    muy nervioso por una reunión anterior en la que los propios le
                                                    habrían dicho que lo abandonarían y otros cuestionamientos más
                                                    (https://www.youtube.com/watch?v=WWhyGMegewc). Huelga decir que le
                                                    irrita sobremanera que lo contradigan. Además, hacer “la gran
                                                    Bolsonaro” y denunciar fraude en San Juan le salió bastante mal:
                                                    perdió un senador en el recuento de votos. Hasta aquí, todo bastante
                                                    “racional”.
                                                    Sin embargo, tal vez por influencia de las sustancias químicas y
                                                    etílicas que me quedan de la adolescencia, tengo esa manía de
                                                    surfearme todas las olas del mar de la paranoia.
                                                </p>
                                                <br>
                                                <p>Por eso aclaro que puedo estar muy equivocado, pero todo esto no me
                                                    parece casual, huele a cosa armada por el “Gato Maula” que nos
                                                    gobernó entre 2015-2019. Milei ya no corta más nada, el bacalao lo
                                                    mira de lejos. El que mueve los hilos es el gato que está
                                                    desesperado por que no sigan los 4 principales juicios de los que
                                                    viene zafando. Hipotéticamente, a mi juicio, seguramente equivocado,
                                                    si Massa le garantizase 4 años más de impunidad, El Gato "lo baja" a
                                                    Milei de un plumazo. Pero Massa no va a cometer ese suicidio
                                                    político porque sabe que Macri es un escorpión.
                                                </p>
                                                <br>
                                                <p>El “as en la manga” del Gato es la promesa al Peluquín del de
                                                    sectores del PRO, que no estarían colaborando, y de 15 millones de
                                                    dólares, que se los entregaría el lunes, sin los cuales Milei no
                                                    puede seguir la campaña. Esa limitación presupuestaria explicaría la
                                                    desesperación del Peluca cuando, al ver que no ganaba en el primer
                                                    turno, empezó a meter la pata a troche y moche. Pero Macri, que de
                                                    tonto no tiene ni un pelo, lo va a estirar hasta que le convenga.
                                                </p>
                                                <br>
                                                <p>Para colmo de males, para ellos, veo que se están quedando sin gas ya
                                                    que la principal arma que vienen usando desde 2008, los medios
                                                    hegemónicos, ya están panquequeando y esos son como las ratas, saben
                                                    antes que nadie cuando la catástrofe se aproxima. </p>
                                                <br>
                                                <p>Lo concreto es que el “Milei libertario”, el que consiguió casi el
                                                    30% de los votos, ACABÓ en el acuerdo con la Pato, en la casa del
                                                    Macri, (al mejor estilo “famiglia”) cuando acordaron puntos
                                                    “programáticos” que destruyen todo lo que viene pregonando hace años
                                                    (dolarización, armas para todos, venta de órganos, privatización de
                                                    la enseñanza, etc.). </p>
                                                <br>
                                                <p>Tal vez por ello, siguiendo con mis elucubraciones conspiranoicas,
                                                    desde varios espacios de la derecha lo quieran bajar “al Loco” para
                                                    que la campaña la siga la vice, que es mucho más articulada y
                                                    conseguiría algo de empatía con las votantes femeninas, que ven con
                                                    justificado espanto al clown libertario. </p>
                                                <br>
                                                <p>En los próximos días, u horas, seguramente veremos cosas propias de
                                                    las cloacas de la política porque el Gato es sucio, muy sucio,
                                                    dispone de un arsenal carpetazos para “tutti il mondo”, y lo
                                                    acompañan los exservicios y los aliados del gran país de norte,
                                                    capitaneados por el Comando Sur y su generala “Laurita” Richardson,
                                                    desesperada por echarle mano a todo lo que sean riquezas energéticas
                                                    latinoamericanas, peritos en guerras híbridas.</p>
                                                <br>
                                                <p>Por ello no podemos olvidarnos lo que hicieron con Nisman en el 2015,
                                                    al que en cada elección lo sacan a hacer campaña sin respetar ni
                                                    siquiera su memoria ni el dolor de sus deudos. Menos aún la
                                                    “cuchillada” oportuna que le permitió a Bolsonaro imponerse en el
                                                    balotaje en Brasil, cuando iba muy atrás en las encuestas. Como si
                                                    no fueran suficientes las olas en este mar de paranoia en el que me
                                                    encuentro, tenemos lo que acaban de hacer en las elecciones en
                                                    Ecuador, asesinando a un candidato de centro (Fernando
                                                    Villavicencio) y “plantando socialmente” la idea de que la
                                                    responsabilidad criminal fue del correísmo... ¡Y les dio
                                                    resultado!!! Un tilingo sin historia ni ideas le ganó a Luisa
                                                    González, una candidata brillante como pocos/as.</p>
                                                <br>
                                                <p>Para finalizar, nunca me gustaron las metáforas futbolísticas, pero
                                                    esta coyuntura electoral se asemeja mucho a una final del campeonato
                                                    en la que el puntero, si gana el último partido, sale campeón. No
                                                    podemos especular con que el segundo pierda o empate, hay que salir
                                                    a todo o nada y asegurarse los 3 puntos. A ganar con la nuestra, con
                                                    la militancia peronista y la de los aliados del campo popular que es
                                                    la única garantía de que Massa ocupe el sillón de Rivadavia el 10 de
                                                    diciembre y la república no ingrese en la larga noche del
                                                    neoliberalfascismo.</p>
                                                <br>
                                                <p>Esto no es análisis, es teoría de la conspiración y, repito una vez
                                                    más, puedo estar totalmente equivocado.</p>
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        Publicado: 27/11/2023
                                                        <p> <b>Ramiro Caggiano Blanco</b></p>
                                                    </figure>
                                                </div>
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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol37')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA CUCARACHA DE MILEI</a>
                                        </h2>
                                        <p><i>"El último desafío: Debate entre Massa y Milei, un choque de modelos
                                                antagónicos que definirá el rumbo del país". </i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_cucaracha.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Pocos podrían negar que la derecha es creativa, en publicidad y,
                                                    particularmente, en campaña electoral. Vimos como el ex JxC y el PRO
                                                    hicieron todo lo ordenado por el FMI para radicalizar sus posturas
                                                    de la mano de su coordinador italo-argentino, Mauricio Macri.
                                                </p>
                                                <br>
                                                <p>El juego de ingeniería política consistió en quitar del camino sin
                                                    miramientos a su muy antiguo amigo y socio, Enrique Rodríguez
                                                    Larreta. Acto seguido, a la candidata de la interna, Patricia
                                                    Bullrich, quien recriminó públicamente estar haciendo campaña a
                                                    favor del libertario Javier Milei, sin ponerse colorado. Hoy, "la
                                                    tira bombas en jardines de infante", de lo que Milei debió
                                                    retractarse, no atina a encontrar su lugar político a sabiendas que
                                                    se trata de su última oportunidad.
                                                </p>
                                                <br>
                                                <p>La introducción apunta a poner en contexto la pelea final por la
                                                    Presidencia de la Nación por los próximos cuatro años. Se trata, sin
                                                    duda, de dos modelos antagónicos de país. Y en esta realidad está el
                                                    domingo 19 (votación), precedido por el domingo anterior: el
                                                    esperado debate entre Sergio Massa, por el peronismo y aliados. Y
                                                    Javier Milei, libertario y sus nuevos compañeros, Patricia Bullrich
                                                    y Mauricio Macri.
                                                </p>
                                                <br>
                                                <p>Faltan apenas unos días para que ambos candidatos se enfrenten en la
                                                    Facultad de Derecho de la Universidad de Buenos Aires, con reglas de
                                                    juego acordadas. Tal vez, para Milei la más difícil de cumplir sea
                                                    la prohibición de leer durante el debate sobre sus posturas. Fue
                                                    entonces que vino a la memoria de la política un grave episodio
                                                    protagonizado por Zulemita Menem, en 2008, en la UADE. Entonces una
                                                    compañera de la hija del ex presidente y en ocasión de estar
                                                    rindiendo un examen, advirtió y denunció que Zulema, hija, estaba
                                                    recibiendo las respuestas a la prueba a través de un mecanismo
                                                    electrónico en el oído, conocido vulgarmente como cucaracha, de uso
                                                    habitual en radio y TV. La Justicia Electoral no aclaró si este
                                                    recurso fue tratado en el acuerdo celebrado entre los apoderados.
                                                </p>
                                                <br>

                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/Chino.svg') }}" alt="">
                                                        Publicado: 12/11/2023
                                                        <p> <strong>Nota de Oscar Chino
                                                                Martínez</strong></p>

                                                        <p><strong> Zemborain </strong></p>
                                                    </figure>
                                                </div>
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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol38')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SERGIO MASSA Y JAVIER MILEI: PROPUESTAS EN CONTRASTE</a>
                                        </h2>
                                        <p><i>En el reciente debate presidencial, quedaron en claro las marcadas
                                                divergencias en las visiones económicas y las propuestas radicales
                                                presentadas por el candidato de La Libertad Avanza (LLA), lo que plantea
                                                considerables riesgos para el futuro de Argentina. A continuación,
                                                analizamos los puntos clave de este enfrentamiento y sus implicaciones.
                                                El enfrentamiento en el último debate presidencial entre Sergio Massa,
                                                candidato de Unión por la Patria (UxP), y Javier Milei, de La Libertad
                                                Avanza (LLA), arrojó luz sobre las profundas diferencias entre ambos
                                                aspirantes y subrayó la preocupante naturaleza de las propuestas.
                                                económicas y políticas de Milei para el país.
                                            </i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_debate.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p> <b>Economía: Entre el proteccionismo y la apertura indiscriminada
                                                    </b></p>
                                                <p>El enfoque económico fue uno de los puntos centrales de este debate.
                                                    Sergio Massa se destacó como un defensor de la producción y el
                                                    empleo, subrayando la relevancia del papel del Estado en la
                                                    protección de las empresas y los trabajadores, y expresando su sueño
                                                    de convertirse en "el presidente del Trabajo". Por el contrario,
                                                    Javier Milei abogó por una apertura económica radical y la
                                                    eliminación de regulaciones, argumentando que el Estado es el
                                                    problema. Sin embargo, sus propuestas de apertura indiscriminada y
                                                    la dolarización de la economía plantean un riesgo palpable para la
                                                    estabilidad y el bienestar de los argentinos.
                                                </p>
                                                <br>
                                                <p> <b>Relaciones internacionales y comercio exterior: Un
                                                        replanteamiento
                                                        peligroso</b>
                                                </p>
                                                <p>Milei expresó su apoyo a la apertura del comercio internacional y la
                                                    retirada de Argentina del Mercosur, lo que indica un replanteamiento
                                                    en las relaciones exteriores del país. Estas propuestas pueden tener
                                                    graves consecuencias para la economía argentina, especialmente en un
                                                    contexto global cada vez más competitivo. Sus enfoques radicales
                                                    sobre las Malvinas y referencias favorables a figuras políticas
                                                    cuestionables, como Margaret Thatcher, añadieron controversia al
                                                    debate.
                                                </p>

                                                <p>Por otro lado, Massa destacó su alineamiento con otros países y el
                                                    respeto a los tratados internacionales, subrayando la importancia de
                                                    mantener relaciones bilaterales sólidas y respetuosas.</p>
                                                <p>Educación, salud, seguridad y justicia: Ideas disruptivas y
                                                    cuestionables</p>
                                                <p>En el ámbito de la educación, Milei planteó su idea de vales
                                                    educativos como una solución "revolucionaria", aunque esta medida
                                                    podría poner en peligro la calidad y el acceso a la educación
                                                    pública. Además, sus propuestas de reforma en el sistema carcelario
                                                    y la justicia son controvertidas y podrían afectar la seguridad y la
                                                    estabilidad del país.
                                                </p>
                                                <br>
                                                <p><b>Conclusión: Una elección decisiva</b></p>
                                                <p>El debate presidencial dejó en claro que Argentina se enfrenta a una
                                                    elección decisiva en la que los ciudadanos deberán considerar
                                                    cuidadosamente las propuestas y visiones de los candidatos.</p>
                                                <p>Propuestas peligrosas: Milei y su enfoque radical</p>
                                                <p>Javier Milei propone un giro radical en las políticas económicas. Con
                                                    su postura de apertura indiscriminada y su defensa del libre
                                                    comercio, plantea una visión que podría ser riesgosa para el
                                                    desarrollo del país. La dolarización de la economía, el cierre del
                                                    Banco Central y la eliminación de subsidios son algunos de los
                                                    puntos que podrían afectar severamente la estabilidad económica
                                                    argentina.
                                                </p>
                                                <br>
                                                <p><b>La apuesta por un futuro seguro: Sergio Massa y el proyecto de
                                                        Unión
                                                        por la Patria</b>
                                                </p>
                                                <p>En contraposición, Sergio Massa propone una visión que busca la
                                                    protección y el fortalecimiento de la producción nacional. Su visión
                                                    busca resguardar la economía, crear empleo y proteger las empresas
                                                    locales, contrarrestando las propuestas más extremas de Milei. Con
                                                    el objetivo de crear dos millones de nuevos puestos de trabajo.
                                                </p>
                                                <br>
                                                <p><b>El camino a seguir</b></p>
                                                <p>Frente a la contienda electoral que se avecina, se plantea una
                                                    disyuntiva fundamental: la elección entre un rumbo extremo y
                                                    arriesgado propuesto por Milei o la apuesta por un proyecto más
                                                    moderado y seguro encabezado por Sergio Massa. La elección de los
                                                    votantes marcará el futuro de la nación, definiendo si se opta por
                                                    la estabilidad y el crecimiento sostenible o por un cambio más
                                                    radical que podría conducir al país a caer en un abismo.
                                                </p>

                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Gus.svg') }}"
                                                            alt="">
                                                        Publicado: 13/11/2023
                                                        <p> <strong>Nota de Gustavo Cano</strong></p>

                                                    </figure>
                                                </div>
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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol39')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">POR LA DEFENSA DE UNA ARGENTINA INCLUSIVA Y EL RECHAZO AL
                                                AVANCE DEL FASCISMO</a>
                                        </h2>
                                        <p><i>Editorial del programa “Al Borde del Abismo” del 14 de noviembre de 2023,
                                                que conducen Gustavo Cano, Pepo Benitez y Pablo Arsegot los Martes 21 a
                                                23 hs por Radio Grafica FM 89.3 / www.radiografica.org.ar

                                            </i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_Alborde.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">


                                                <p>Alguna vez nos escucharon como parte del campo nacional y popular
                                                    reivindicar una narrativa criminal? justificar el atentado
                                                    individual por parte de las organizaciones armadas?
                                                </p>
                                                <br>
                                                <p> No, lo hemos condenado, hemos repudiado el asesinato selectivo y el
                                                    secuestro para exaltar y poner en valor las acciones políticas
                                                    territoriales y pacíficas de la militancia de base sin dejar de
                                                    exponer el contexto en que tuvieron lugar esos crímenes pero no los
                                                    celebramos, no decimos que se trataron de excesos o los exhibimos
                                                    como una equivocación.
                                                </p>
                                                <br>
                                                <p>Fueron crímenes sí dentro de un contexto histórico en dónde la
                                                    violencia política era cotidiana y había empezado con un golpe de
                                                    estado contra el gobierno democrático de Juan Domingo Perón y
                                                    contemporáneos a una militancia que ayudaba al otro trasuntando
                                                    barrios carenciados y villas. Ninguno de esos hechos, ninguno,
                                                    habilitaban un plan sistemático de exterminio a nivel continental
                                                    conocido como el plan cóndor ejecutado a partir del 24 de marzo de
                                                    1976.
                                                </p>
                                                <br>
                                                <p>"El camino que lleva a Milei no es la izquierda -dice Bregman- es el
                                                    ajuste". Tal vez se refiera al ajuste de los recursos públicos, a la
                                                    disparada del precio del dólar por la escasez histórica de divisas
                                                    de nuestro país que no tiene la máquina para producir dólares y que
                                                    tras la toma de una deuda de 47 mil millones de dólares con el FMI a
                                                    pagar en dólares su gobierno ve reducida la cantidad disponible a
                                                    utilizar. Este desajuste aumenta, y por reflejo aumentan los
                                                    productos de primera necesidad sobre todo los que se exportan
                                                    generando ingresos en dólares, y para sostener sus ganancias unos y
                                                    sueldos los otros, empresarios y trabajadores entran en el espiral
                                                    de la puja distributiva: aumentan los precios, alquileres mientras
                                                    los salarios por convenio suben pero en menor medida, con lo cual
                                                    disminuye la capacidad de consumo de los sectores populares y se
                                                    deteriora su calidad de vida, su expectativa de futuro deteniéndose
                                                    la movilidad social ascendente, la aspiración de que los hijos estén
                                                    mejor que sus padres y abuelos.
                                                </p>
                                                <br>
                                                <p>Entre todo esto: la pandemia, la digitalización creciente de las
                                                    actividades sociales y económicas, el aislamiento, la pérdida del
                                                    contacto y la diversidad social y la brindada por el sistema
                                                    educativo, por ende la no enseñanza de los contenidos escolares, en
                                                    definitiva un año perdido.
                                                </p>
                                                <br>
                                                <p>Internas a cielo abierto, exhibiendo impotencia en un sistema
                                                    presidencialista dónde el presidente toma las decisiones
                                                    exclusivamente y un Alberto Fernández que no estuvo a la altura.
                                                </p>
                                                <br>
                                                <p>El trabajo informal de las aplicaciones se multiplica durante la
                                                    pandemia y el gobierno no interpela a este sector con medidas
                                                    concretas apenas salimos de la crisis sanitaria global.</p>
                                                <p>Errores de la actual gestión, sí, pero errores lidiando con la
                                                    criminalidad que supuso la toma de una deuda a cien años por
                                                    Mauricio Macri cuando no era para nada necesario. Y de serlo en que
                                                    se invirtió? Se sabe que fue para sostener a los bancos y a los
                                                    grupos empresariales que fugaron los dolares.
                                                </p>
                                                <p>Delito contra todo el pueblo argentino. Y a esto nos llevó la deuda
                                                    con el FMI, deuda tomada por Juntos por el cambio que disminuyeron,
                                                    socavaron la capacidad de la política para mejorar las condiciones
                                                    de vida, que bajó el salario que era el mas alto de América latina a
                                                    niveles por debajo de Uruguay y Brasil, un mandatario Mauricio Macri
                                                    junto a un sector político que hicieron lo contrario a lo que
                                                    prometieron en campaña diciendo que las advertencias de Scioli eran
                                                    campaña del miedo y terminaron tomando la deuda más alta de la
                                                    historia, dinero que no fue a escuelas, caminos, hospitales jardines
                                                    de infantes, ciencia y tecnología, tampoco a mejorar el espacio
                                                    público. </p>
                                                <p>Y sí el gobierno de Alberto después de una correcta gestión sanitaria
                                                    de la pandemia, dilapido su legitimidad y ahi están las fotos de la
                                                    fiesta de Fabiola, la vuelta atrás con Vicentin, el acuerdo
                                                    inflacionario con el FMI firmado por Guzman, deficiente en tanto el
                                                    establecimiento de los plazos de vencimientos de los pagos y las
                                                    condiciones.

                                                </p>
                                                <br>
                                                <p>El reconocimiento de esos errores fue relevar al actual primer
                                                    mandatario de la posibilidad de postularse para una reelección y
                                                    consagrar a un candidato de la unidad cuya potencialidad de gestión,
                                                    su enorme pericia como presidente de la cámara de diputados, su
                                                    formación, su gestión en economía que frenó una sangría y un
                                                    adelantamiento de la entrega de la presidencia, intendente más
                                                    joven, director ejecutivo de Anses, jefe de gabinete y armador de su
                                                    propio espacio a nivel nacional lo ponen al frente del gran desafío
                                                    de recuperar las variables económicas del país y gestionar el estado
                                                    para devolver la expectativas de un futuro mejor y privilegiar a los
                                                    trabajadores de todos los sectores y sacar al FMI de la Argentina.

                                                </p>
                                                <br>
                                                <p>Con el desafío y las herramientas para construir el país que soñamos
                                                    con mayor inclusión, mejor calidad de vida, más poder adquisitivo
                                                    para los sectores populares y clases medias, una expectativa real de
                                                    futuro. Un candidato que incluso pidió perdón e invita a la escucha
                                                    activa. Y en contraposición: dos candidatos, uno a presidente y la
                                                    otra a vicepresidenta, cuyo marco teórico reivindica la venta de
                                                    órganos, la libre portación de armas, el terrorismo de estado la
                                                    desaparición física de personas, la tortura, el asesinato, las
                                                    violaciones y apropiacion de menores, que insulta al Papa, que
                                                    plantea romper relaciones comerciales con Brasil nuestro principal
                                                    socio comercial y con China, que proclama a Menem como el mejor
                                                    presidente, que admira a Margaret Tatcher, que renuncia a la
                                                    soberanía de Malvinas ignorando el dolor de los familiares de caídos
                                                    y los veteranos, que mercantiliza la vida al punto de que si un
                                                    diabético no tiene para insulina el estado no tiene por qué hacerse
                                                    cargo y entonces que se muera, que propone Vouchers para que los
                                                    estudiantes elijan donde estudiar, contraigan deudas y pasen años de
                                                    su vida trabajando para pagarla, que la salud se privatice, que te
                                                    pagues la universidad parásito, sí a vos estudiante del conurbano
                                                    pagatela con la tuya no seas rata dicen los partidarios de la
                                                    libertad avanza, que en su plataforma anuncian el retorno de las
                                                    afjp, que reivindican el bullying, que le dice mogolico a una
                                                    persona con discapacidad, que disfrutan humillando a una mujer, que
                                                    sienten placer ante la quiebra de una pyme, que usan términos de la
                                                    guerra fría y los personeros de la dictadura cuando dicen zurdos de
                                                    mierda o socialistas de manera despectiva, que hablan con un perro
                                                    muerto al que clonó Milei, que tiene una relación dudosa con una
                                                    actriz que se cristalizó en plena campaña, que buscan destruir el
                                                    Banco Central -cosa inédita en el mundo y en los países que quieren
                                                    imitar- que no creen en el sistema democrático en el que participan
                                                    para llegar al poder porque no pueden utilizar a las fuerzas
                                                    armadas, que incentivan trolls que agreden, que intimidan que
                                                    insultan, que lastiman, que incitan a la violencia verbal para que
                                                    eso derive en violencia física, que proponen el exterminio del otro
                                                    o la otra porque no sostienen las aberraciones que ellos exaltan,
                                                    que desacreditan a Lali Esposito porque no los votaría, que usan
                                                    canciones que nadie los autorizó, que plagian libros, que utizan las
                                                    fake news y difaman al candidato contra el que compiten, que te
                                                    invitan a suicidarte colectivamente. Vos elegís este 19 de noviembre
                                                    con plena conciencia tras lo que te dije, después... después, no
                                                    tenes excusas.
                                                </p>
                                                <br>


                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Gus.svg') }}"
                                                            alt="">
                                                        Publicado: 13/11/2023
                                                        <p> <strong>Nota de Gustavo Cano</strong></p>

                                                    </figure>
                                                </div>
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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol40')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">INTELIGENCIA REPRESIVA</a>
                                        </h2>
                                        <p><i>Por Oscar Martínez Zemborain
                                            </i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_intel.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">


                                                <p>En las grandes ciudades en las que proliferan animales no deseados y
                                                    combatidos de mil maneras, porque entre otras cosas son portadores
                                                    de enfermedades como la rabia y otras, sus habitantes recurren a
                                                    métodos varios para protegerse. Desde mosquiteros en las entradas,
                                                    hasta la contratación de empresas especializadas que administran
                                                    venenos caros a los muy debilitados bolsillos del contribuyente.
                                                </p>
                                                <br>
                                                <p>Años atrás y ante una plaga de murcièlagos invasores que tantas veces
                                                    hacían nido en los portarrollos de las ventanas exteriores,
                                                    especialistas desarrollaron y pusieron en prueba un sistema de
                                                    ultrasonido, que siendo imperceptible al oído humano espantaba a los
                                                    indeseables.
                                                </p>
                                                <br>
                                                <p>El recurso fue y es estudiado por las inteligencias militares tanto
                                                    de EE.UU. como de Israel, pero para aplicaciones de otra índole. En
                                                    ambos casos, el objeto del recurso dejó de ser las plagas, para
                                                    direccionarlo a los hombres y mujeres víctimas de decisiones del
                                                    poder que practican la discriminación y persecución política,
                                                    económica y de derechos ya adquiridos.
                                                </p>
                                                <br>
                                                <p>Mientras se sigue investigando y desarrollando esta herramienta
                                                    represiva, hubo países que ya probaron el método, como fue el caso
                                                    de Irak, en ocasión del ataque e invasión que costó la vida a
                                                    600.000 personas y la destitución y muerte de Sadam Hussein. O
                                                    frente a la embajada de Brasil, donde se refugió el destituido
                                                    presidente hondureño, Manuel Zelaya. Los ensayos muestran que las
                                                    personas no pueden soportar la emisión del ultrasonido y se
                                                    dispersan sin más ni más.
                                                </p>
                                                <br>
                                                <p>Cabe recordar, por otra parte, que, durante el gobierno de Mauricio
                                                    Macri, la hoy también ministra de Seguridad, Patricia Bullrich, a
                                                    través de su pareja, Guillermo Yanco, de fuertes vínculos con el
                                                    gobierno de Tel Aviv, compró cuatro lanchas “rápidas” para combatir
                                                    el narcotráfico. Entonces, no faltaron las fuertes críticas por lo
                                                    inservible de la compra y el costo de 50 millones de dólares, con
                                                    una denuncia por sobreprecios. El cuestionamiento adicional lo
                                                    formuló la Oficina Anticorrupción (OA).

                                                </p>
                                                <br>



                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/Chino.svg') }}" alt="">

                                                        <p> <strong>Oscar Martínez Zemborain</strong></p>

                                                    </figure>
                                                </div>
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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol41')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">BAJO EL CALOR POLÍTICO: RESISTENCIA ANTE UN GOBIERNO
                                                MESIÁNICO</a>
                                        </h2>
                                        <p><i>En la ola de calor político, un gobierno ultra derechista amenaza el
                                                bienestar. En la Cámara de Diputados, decisiones cruciales se toman
                                                mientras la resistencia se organiza ante un futuro incierto.
                                            </i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_bajo.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">


                                                <p>En medio de una ola de calor abrasante, las garras mesiánicas de un
                                                    gobierno ultra derechista, fascistoide, y autoritario nos están
                                                    ahogando hasta dejarnos con apenas un hilo de oxígeno. Los intereses
                                                    de las grandes corporaciones monopólicas, las sociedades de
                                                    inversión transnacionales, socios ávidos por enajenar recursos
                                                    naturales y bienes del Estado, con los cubiertos en la mano
                                                    esperando hincar los colmillos en el primer bocado.
                                                </p>
                                                <br>
                                                <p>Mientras en la Cámara de Diputados se está jugando el destino de la
                                                    Patria, y en las manos alzadas de aquellos que voten a favor de un
                                                    mamotreto que cambiaría la esencia y el espíritu de lo que conocimos
                                                    como estado de bienestar y derecho, aparecen inevitables
                                                    interrogantes.
                                                </p>
                                                <br>
                                                <p>La pregunta surge por sí sola: cómo los votantes ingenuos (sí,
                                                    ingenuos), que no pudieron hacer un análisis sencillo, breve,
                                                    lineal, sobre lo que significaba hacer campaña con una motosierra y
                                                    el valor simbólico de destrucción que conllevaba, sumado a un
                                                    candidato- personaje de historietas, panelista de la TV, sin
                                                    formación intelectual, con particularidades bizarras, riesgosas y
                                                    mesiánicas de personalidad.
                                                </p>
                                                <br>
                                                <p>Agrego: decepción por el gobierno que antecedió, enclenque, indeciso,
                                                    con una guerra interna indisimulable y librada a cielo abierto de
                                                    cara a la ciudadanía. Y como frutilla del postre el infaltable
                                                    antiperonismo serril confrontando dos modelos antagónicos, uno con
                                                    derechos plenos a les ciudadanes y el otro con la lisa y llana
                                                    supresión de derechos.
                                                </p>
                                                <br>
                                                <p>Preguntas que siguen vigentes y que deberíamos seguir pensando y
                                                    reflexionando sobre todo lo hecho y lo abandonado a su suerte, por
                                                    cuanto esta nueva etapa que nos toca transitar no nos da tregua ni
                                                    respiro. La sesión acaba de comenzar y quedará expuesta la decisión,
                                                    la voluntad y la convicción de cada une de nuestros representantes.
                                                    Mientras tanto, nos vamos organizando en una, también inevitable,
                                                    resistencia a las impensadas horas que nos esperan.

                                                </p>
                                                <br>



                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}" alt="">

                                                        <p> <strong>Adriana Zerdín</strong></p>

                                                    </figure>
                                                </div>
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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol42')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">IMPACTO MILEI: KICILLOF ALERTA POR CRISIS EN LA COSTA
                                                BONAERENSE</a>
                                        </h2>
                                        <p><i>Desde la costa bonaerense, el gobernador alerta sobre la pérdida
                                                vertiginosa del poder adquisitivo y señala a Milei como responsable.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_impacto.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">


                                                <p>En su segunda conferencia de verano, realizada en Villa Gesell, Axel
                                                    Kicillof, el gobernador de Buenos Aires, abordó con preocupación la
                                                    situación económica de la provincia. Con un discurso directo, afirmó
                                                    que "llegó Milei y pinchó la economía de la provincia de Buenos
                                                    Aires", señalando una drástica caída en el poder adquisitivo,
                                                    perceptible en los precios que se exhiben en la región.
                                                </p>
                                                <br>
                                                <p>A pesar de que la afluencia turística no ha disminuido, Kicillof
                                                    destacó un desplome en el consumo y la ocupación hotelera. Durante
                                                    los últimos quince días de enero, los destinos bonaerenses
                                                    recibieron 3 millones 324 mil turistas, un 1,3% más que en 2023. A
                                                    lo largo de enero, la cifra ascendió a 6 millones 500 mil
                                                    visitantes, registrando un aumento del 4% respecto al año anterior.
                                                    No obstante, el ministro de Producción, Augusto Costa, advirtió
                                                    sobre un cambio en el perfil turístico, fragmentado y dual,
                                                    especialmente en municipios de alta gama frente a localidades
                                                    populares.
                                                </p>
                                                <br>
                                                <p>Costa detalló que el alojamiento hotelero se desplomó, dando paso a
                                                    un aumento en el alojamiento en casas de familiares, con estadías
                                                    más cortas y ocasionales. El gasto se redujo, y los turistas
                                                    limitaron sus actividades a la playa, reflejando un comportamiento
                                                    diferente al de temporadas anteriores. Destacó el impacto positivo
                                                    de la Cuenta DNI en el sostenimiento del consumo.
                                                </p>
                                                <br>
                                                <p>En el contexto de la Ley Bases, en la Cámara de Diputados, los
                                                    funcionarios del gabinete provincial expusieron la situación
                                                    turística, previo a la conferencia. Kicillof se reunió con más de
                                                    200 representantes de sectores productivos en Mar de Ajó, abordando
                                                    cómo el plan económico de Javier Milei ha golpeado a la provincia.
                                                </p>
                                                <br>
                                                <p>La subsecretaria de Turismo bonaerense, Soledad Martínez, expresó
                                                    previamente la necesidad de un "acompañamiento nacional" en el
                                                    sector turístico. La designación de Daniel Scioli como Secretario de
                                                    Turismo, Ambiente y Deportes generó opiniones divididas entre los
                                                    presentes.
                                                </p>
                                                <br>
                                                <p>Ante intendentes de la región y diversos sectores productivos,
                                                    Kicillof subrayó la importancia del turismo para la provincia,
                                                    posicionándose como la quinta actividad productiva que más ingresos
                                                    genera. Walter Wischnivetzky, alcalde de Mar Chiquita, describió la
                                                    temporada como "rara, compleja y dual", con sectores favorecidos y
                                                    afectados. La preocupación se acentuó debido al tratamiento de la
                                                    ley en el Congreso, que según Kicillof, no favorece a los
                                                    bonaerenses.
                                                </p>
                                                <br>
                                                <p>El gobernador criticó al gobierno nacional, sosteniendo que el ajuste
                                                    no solo afecta a la "casta" como se planteó inicialmente, sino
                                                    también a trabajadores, empresarios y productores presentes en la
                                                    conferencia.</p>
                                                <br>
                                                <p>Luego del encuentro, el ministro Augusto Costa destacó la importancia
                                                    de comprender la situación de cada sector y criticó al Gobierno
                                                    nacional por no brindar respuestas concretas. El intendente de La
                                                    Costa, Juan de Jesús, describió la reunión como un "espacio de
                                                    escucha y acompañamiento activo" frente a la incertidumbre en la
                                                    población.</p>
                                                <br>
                                                <p>En el marco del programa “Mi Provincia Recicla”, Kicillof visitó la
                                                    planta de reciclaje en Mar de Ajó, entregando un camión para la
                                                    recolección diferenciada de residuos. Esta iniciativa, liderada por
                                                    Daniela Vilar, busca fortalecer la capacidad de trabajo y logística
                                                    para la recolección de residuos urbanos, con una inversión de casi 5
                                                    mil millones de pesos en maquinarias y equipamientos distribuidos en
                                                    más de 60 municipios. El camión se suma a las herramientas
                                                    entregadas previamente a la Cooperativa Reciclando Vidas.</p>
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


                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" col-span-6">

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol43')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">REPRESIÓN DESATADA: VIOLENCIA Y DESPRECIO DEMOCRÁTICO EN
                                                EL OPERATIVO POLICIAL</a>
                                        </h2>
                                        <p><i>Una vez más, las fuerzas de seguridad bajo el mando de Patricia Bullrich
                                                protagonizan un operativo desmedido, utilizando la violencia para
                                                acallar la protesta contra la Ley Ómnibus. Balas de goma, gases y palos
                                                en un día trágico para la democracia argentina.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_represion.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">


                                                <p>En una escena que rememora los momentos más oscuros de la historia argentina, el despliegue policial frente al Congreso durante la manifestación contra la Ley Ómnibus se convirtió en un capítulo vergonzoso de represión indiscriminada. Patricia Bullrich, con su historial marcado por tácticas represivas, lideró un operativo que dejó un rastro de heridos, detenidos y una clara violación a los principios democráticos.
                                                </p>
                                                <br>
                                                <p>Lo que inicialmente debería haber sido un despeje de calles se convirtió en una cacería despiadada contra manifestantes pacíficos, periodistas y diputados opositores. El uso excesivo de la fuerza, balas de goma disparadas a mansalva y el gas pimienta, fueron las herramientas de un régimen que parece dispuesto a todo con tal de sofocar cualquier expresión de disidencia.
                                                </p>
                                                <br>
                                                <p>La ministra de Seguridad podría argumentar la aplicación del protocolo de "calles liberadas", pero la realidad es que las fuerzas a su cargo mantuvieron cortadas las avenidas Entre Ríos y Rivadavia durante horas, contradiciendo su propia bandera de "calles liberadas". El resultado fue una jornada de terror con al menos 60 heridos, incluyendo a un abogado vinculado a derechos humanos que podría perder un ojo.
                                                </p>
                                                <br>
                                                <p>La utilización de un nuevo gas pimienta generó alarma entre profesionales médicos, quienes denuncian graves lesiones dermatológicas y problemas respiratorios. La diputada Miriam Bregman anunció acciones legales contra el uso de este "gas ilegal". Mientras el gobierno de Milei avanza con su proyecto de Ley Ómnibus, la represión se erige como método para acallar la voz del pueblo.
                                                </p>
                                                <br>
                                                <p>En una Argentina donde la violencia policial parece ser la respuesta predeterminada, se desvía la atención de los problemas estructurales que enfrenta el país. La brutalidad policial no solo atenta contra la democracia, sino que también refleja la prioridad dada a la represión en lugar de buscar soluciones para los desafíos reales de la sociedad.
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


                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" col-span-6">

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @endif

    </div>




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


                    axios.get("https://api.dailymotion.com/videos?channel=news&limit=2")
                        .then(response => {
                            this.info = response.data.list
                        });

                    /*    axios.get( */
                    /*      "https://api.weatherbit.io/v2.0/current?lat=35.7796&lon=-78.6382&key=f2207d043ea74a359ff232a1d03d0c72&include=minutely"
                     )*/
                    axios.get(
                            "https://api.openweathermap.org/2.5/wheater?q=BURNOS AIRESlat=35.7796&lon=-78.6382&key=f2207d043ea74a359ff232a1d03d0c72&include=minutely"
                        )
                        .then(response => {
                            this.clima = response
                        });


                },

            });
        </script>
    @endpush



</x-app-layout>
