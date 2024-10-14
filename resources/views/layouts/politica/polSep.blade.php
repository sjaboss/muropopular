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


                                                <p>En una escena que rememora los momentos más oscuros de la historia
                                                    argentina, el despliegue policial frente al Congreso durante la
                                                    manifestación contra la Ley Ómnibus se convirtió en un capítulo
                                                    vergonzoso de represión indiscriminada. Patricia Bullrich, con su
                                                    historial marcado por tácticas represivas, lideró un operativo que
                                                    dejó un rastro de heridos, detenidos y una clara violación a los
                                                    principios democráticos.
                                                </p>
                                                <br>
                                                <p>Lo que inicialmente debería haber sido un despeje de calles se
                                                    convirtió en una cacería despiadada contra manifestantes pacíficos,
                                                    periodistas y diputados opositores. El uso excesivo de la fuerza,
                                                    balas de goma disparadas a mansalva y el gas pimienta, fueron las
                                                    herramientas de un régimen que parece dispuesto a todo con tal de
                                                    sofocar cualquier expresión de disidencia.
                                                </p>
                                                <br>
                                                <p>La ministra de Seguridad podría argumentar la aplicación del
                                                    protocolo de "calles liberadas", pero la realidad es que las fuerzas
                                                    a su cargo mantuvieron cortadas las avenidas Entre Ríos y Rivadavia
                                                    durante horas, contradiciendo su propia bandera de "calles
                                                    liberadas". El resultado fue una jornada de terror con al menos 60
                                                    heridos, incluyendo a un abogado vinculado a derechos humanos que
                                                    podría perder un ojo.
                                                </p>
                                                <br>
                                                <p>La utilización de un nuevo gas pimienta generó alarma entre
                                                    profesionales médicos, quienes denuncian graves lesiones
                                                    dermatológicas y problemas respiratorios. La diputada Miriam Bregman
                                                    anunció acciones legales contra el uso de este "gas ilegal".
                                                    Mientras el gobierno de Milei avanza con su proyecto de Ley Ómnibus,
                                                    la represión se erige como método para acallar la voz del pueblo.
                                                </p>
                                                <br>
                                                <p>En una Argentina donde la violencia policial parece ser la respuesta
                                                    predeterminada, se desvía la atención de los problemas estructurales
                                                    que enfrenta el país. La brutalidad policial no solo atenta contra
                                                    la democracia, sino que también refleja la prioridad dada a la
                                                    represión en lugar de buscar soluciones para los desafíos reales de
                                                    la sociedad.
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol44')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PETRI ENCABEZÓ LA PRESENTACIÓN DEL NUEVO AVIÓN EMBRAER
                                                ERJ 140 LR DE LA FUERZA AÉREA ARGENTINA</a>
                                        </h2>
                                        <p><i>El arribo del Embraer ERJ 140 LR representa un avance significativo en la
                                                modernización de la Fuerza Aérea Argentina, potenciando su capacidad
                                                operativa y reafirmando su compromiso con la defensa nacional y la
                                                seguridad ciudadana.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_petri.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">


                                                <p>El ministro de Defensa, Luis Petri, encabezó esta tarde en la base
                                                    aérea “El Palomar” la presentación del nuevo avión Embraer ERJ 140
                                                    LR (Long Range), un bimotor de alcance regional destinado a
                                                    fortalecer las capacidades operativas de la I Brigada Aérea de la
                                                    Fuerza Aérea Argentina.
                                                </p>
                                                <br>
                                                <p>“Con la llegada del Embraer 140 que se suma a la Fuerza Aérea para
                                                    reforzar la flota de transporte estamos reafirmando la necesidad de
                                                    tener memoria histórica y de reconstruir el valor, la historia de
                                                    las Fuerzas Armadas y la contribución que ellas hacen a la Patria”,
                                                    afirmó el titular de Defensa, y continuó: “Porque aunque el desafío
                                                    para las Fuerzas Armadas no es el mismo que en los tiempos de San
                                                    Martín, que luchó por la independencia y la libertad, en estos
                                                    momentos hay un mismo desafío que es también importante para la
                                                    Fuerza Aérea, el Ejército y la Armada: ser custodios y garantes de
                                                    los intereses vitales de la patria".
                                                </p>
                                                <br>
                                                <p>Durante el acto, se llevó a cabo el pasaje aéreo y el simbólico
                                                    puente de agua, que bautiza oficialmente la aeronave, como gesto de
                                                    buena fortuna y seguridad en los vuelos futuros.
                                                </p>
                                                <br>
                                                <p>Con una capacidad para 43 pasajeros, este avión puede alcanzar
                                                    altitudes de hasta 37,000 pies y tiene un alcance de más de 2,500
                                                    km. Su peso máximo de despegue es de 21,100 kg, y presenta un diseño
                                                    con alas bajas y cola en T. La velocidad máxima de crucero es de
                                                    Mach 0.78, lo que lo hace eficiente en distancias cortas. Además,
                                                    está presurizado para brindar comodidad a altitudes elevadas.
                                                </p>
                                                <br>
                                                <p>El Embraer ERJ 140 LR también está equipado con una avanzada
                                                    aviónica, que incluye una pantalla Flight Dynamics para aterrizajes
                                                    CAT II, cinco pantallas electrónicas de sistema de información y
                                                    vuelo, y un sistema de gestión de vuelo UNIVERSAL con doble FMS y
                                                    GPS.
                                                </p>
                                                <br>
                                                <p>Esta aeronave se incorporará al Escuadrón Aéreo II, del Grupo 1 de
                                                    Transporte Aéreo, en la I Brigada Aérea aumentando la capacidad de
                                                    transporte aéreo operacional y mejorando la movilidad táctica de
                                                    mediano alcance. La misma será utilizada mayormente en operaciones
                                                    militares y en el ámbito de la protección civil, así como también en
                                                    tareas de apoyo a la comunidad y ayuda humanitaria.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol45')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">GOBIERNO SUFRE UNA DURA DERROTA EN LA LEY ÓMNIBUS</a>
                                        </h2>
                                        <p><i>El retiro de la Ley Ómnibus en el Congreso desata críticas y tensiones
                                                políticas en Argentina.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_omnibus.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En un giro sorprendente en el Congreso argentino, el gobierno ha
                                                    sufrido una contundente derrota con la retirada de la Ley Ómnibus
                                                    del tratamiento en el recinto. Esta medida, que representa un duro
                                                    revés para las políticas impulsadas por el oficialismo, ha generado
                                                    un profundo malestar en las filas del gobierno y un aire de triunfo
                                                    entre la oposición y el pueblo argentino.
                                                </p>
                                                <br>
                                                <p>La Ley Ómnibus, presentada por el presidente Javier Milei como una
                                                    supuesta solución a los problemas del país, ha sido objeto de
                                                    intensos debates y protestas desde su introducción. Con más de 660
                                                    artículos, este mega proyecto buscaba introducir cambios profundos
                                                    en diversos aspectos de la vida nacional, desde la economía hasta la
                                                    educación y el medio ambiente.
                                                </p>
                                                <br>
                                                <p>Sin embargo, su contenido altamente polémico y regresivo ha
                                                    encontrado una fuerte resistencia tanto en el Congreso como en la
                                                    sociedad en general. La propuesta de privatizar empresas estatales,
                                                    recortar derechos laborales y limitar las libertades individuales ha
                                                    despertado un rechazo generalizado, incluso dentro de las propias
                                                    filas del oficialismo.
                                                </p>
                                                <br>
                                                <p>La retirada de la Ley Ómnibus del tratamiento en el Congreso
                                                    representa una victoria para aquellos que defienden la justicia
                                                    social y los valores democráticos en Argentina. Ha dejado en
                                                    evidencia la falta de consenso y respaldo político para las
                                                    políticas neoliberales y autoritarias propuestas por el gobierno, y
                                                    ha fortalecido la posición de aquellos que abogan por una Argentina
                                                    más inclusiva y solidaria.
                                                </p>
                                                <br>
                                                <p>Esta derrota del gobierno en el Congreso no solo es un golpe
                                                    político, sino también un llamado de atención sobre la necesidad de
                                                    escuchar la voz del pueblo y respetar sus derechos y aspiraciones.
                                                    En un contexto de creciente polarización y tensiones políticas, es
                                                    fundamental que las autoridades actúen con responsabilidad y busquen
                                                    consensos que beneficien a toda la sociedad argentina.
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol46')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MACRI SE CONSOLIDA COMO PRÓXIMO PRESIDENTE DEL PRO</a>
                                        </h2>
                                        <p><i>Macri liderará el PRO: tras una reunión estratégica, el ex presidente se
                                                encamina a retomar las riendas del partido en un movimiento político
                                                significativo.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_macri.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El ex presidente Mauricio Macri se reunió con su mesa chica en Vicente López, luego de regresar a Buenos Aires tras dos meses en la Patagonia. En el encuentro, se discutieron varios puntos clave para el futuro del partido, entre ellos, los nuevos liderazgos. Según fuentes cercanas, Macri se encamina a ser el próximo presidente del PRO, cargo que ocuparía por segunda vez en su carrera política.
                                                </p>
                                                <br>
                                                <p>Entre los presentes en la reunión se encontraban figuras destacadas del partido, como el jefe de Gobierno porteño, Jorge Macri; el jefe de bloque de PRO en Diputados, Cristian Ritondo; la ex ministra de Educación de la Ciudad, Soledad Acuña; el intendente de General Pueyrredón, Guillermo Montenegro; el diputado bonaerense Diego Santilli; el jefe de Gabinete de la Ciudad, Néstor Grindetti; y Fernando De Andreis.
                                                </p>
                                                <br>
                                                <p>Uno de los puntos más relevantes de la reunión fue la posible designación de Ritondo como presidente de la megasucursal bonaerense del PRO en la Provincia de Buenos Aires, mientras que Jorge Macri podría quedarse con la titularidad de la Capital Federal.
                                                </p>
                                                <br>
                                                <p>Además, se especuló sobre la posibilidad de una fusión entre el PRO y La Libertad Avanza, aunque esta idea quedó en stand-by por el momento. Otro hecho destacado fue la reunión entre Macri y el gobernador de Santa Fe, Maximiliano Pullaro, lo que podría indicar un acercamiento del ex presidente a otras figuras políticas fuera de su partido.
                                                </p>
                                                <br>
                                                <p>En este contexto, la figura de Macri como futuro líder del PRO cobra fuerza, marcando un posible regreso al primer plano de la política argentina para el ex mandatario y sus seguidores.
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol47')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PULTI PROPONE FRENAR EL DESFINANCIAMIENTO EN ARGENTINA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/02/2024</p>
                                        <p><i>Enfrentando el desmantelamiento educativo: Pulti propone un frente federal para resguardar la educación en Argentina, ¿qué implicancias tiene esta propuesta?</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_pulti.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El diputado provincial Gustavo Pulti ha presentado un proyecto para evitar el desfinanciamiento ilegítimo de la educación en Argentina. Proponer la creación de un "Frente Federal en Defensa de la Educación", invitando a los 135 municipios de la provincia de Buenos Aires a sumarse a la iniciativa y llamando a la participación activa de toda la comunidad educativa.
                                                </p>
                                                <br>
                                                <p>Pulti argumenta que la educación tiene una tutela especial en la Constitución Nacional y en la de la provincia de Buenos Aires, así como en Múltiples instrumentos internacionales con jerarquía constitucional. Destaca que desde los orígenes de la construcción de la Nación Argentina, la educación ha sido considerada "un interés vital" para cimentar una sociedad democrática e inteligente.
                                                </p>
                                                <br>
                                                <p>Además, denuncia que el Gobierno nacional ha desconocido las disposiciones contenidas en las Leyes Nacionales 25.053 y 26.075 de Financiamiento Educativo, afectando los derechos tanto de los docentes (con una disminución salarial del 10% al 15%) como de los educandos. Pulti califica esta conducta como cuasidelictual y llama al Ministerio Público a investigarla.
                                                </p>
                                                <br>
                                                <p>En ese contexto, el diputado solicita al Gobernador de la Provincia de Buenos Aires adoptar todas las conductas necesarias para subsanar la crisis educativa generada por el Gobierno nacional. Entre las medidas propuestas están la convocatoria a formar un Frente Federal en Defensa de la Educación, y la invitación a los municipios a crear Frentes Municipales en Defensa de la Educación, como espacios de diálogo y reunión de la comunidad educativa.
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol48')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ROMINA DEL PLÁ: "RECHAZAMOS EL DNU Y LUCHAREMOS HASTA DERROTARLO"</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/02/2024</p>
                                        <p><i>Romina Del Plá denuncia el intento de imponer un régimen de excepción que beneficia a sectores privilegiados, en la Bicameral de Tratamiento Legislativo.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_pla.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Al tomar la palabra en la reunión constitutiva de la Bicameral de Tratamiento Legislativo la Diputada Nacional del Partido Obrero en el Bloque Frente de Izquierda y de los Trabajadores-Unidad Romina Del Plá cuestionó el nombramiento como presidente de la Bicameral del diputado riojano Juan Carlos Pagotto, conocido defensor de represores y genocidas denunciado por los organismos de derechos humanos.
                                                </p>
                                                <br>
                                                <p>Romina Del Plá dijo que: “El presidente Milei tiene la idea de gobernar por decreto y esa idea es la de imponer un régimen de excepción y no precisamente para beneficiar a la población trabajadora, sino a un puñado de patronales, banqueros y especuladores. El DNU 70/2023 arrasa con más de 300 leyes que son el resultado de luchas de décadas de la clase obrera.".
                                                </p>
                                                <br>
                                                <p>Y sostuvo que: “Para la composición de la comisión acudieron a todo tipo de maniobras, asimismo pretenden estirar todos los plazos, negando la convocatoria a sesiones especiales pedida para tratar el decreto. Quieren imponer el plan motosierra de cualquier manera, llevando a la población a una situación cada vez más grave y lo que van a lograr es que cada vez más trabajadores, trabajadoras, jóvenes y jubilados ganen las calles como ya ocurrió durante el tratamiento de la ley ómnibus donde día tras día se enfrentó la ley y el protocolo antipiquete de Bullrich”.
                                                </p>
                                                <br>
                                                <p>“Con este decreto el gobierno pretender imponer, por ejemplo, la esencialidad docente, una medida que ya ha sido rechazada por la justicia. Viola, además, las leyes al no transferir los fondos para el pago del incentivo docente, para los programas educativos, infraestructura y para los comedores: en este momento la docencia está discutiendo un plan de lucha ya que el ajuste que el gobierno traslada a las provincias los gobernadores se lo trasladan automáticamente a la educación pública”. Enfatizó la diputada respecto a decisión del gobierno sobre suspender las transferencias del FONID, y para finalizar dijo que “Rechazamos el DNU y todo el régimen de excepción, lucharemos hasta derrotarlo”.
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol49')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">KICILLOF DENUNCIA ROBO DE FONDOS POR PARTE DEL GOBIERNO DE MILEI</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 28/02/2024</p>
                                        <p><i>Gobernador Kicillof llevará a la Justicia la eliminación del Fondo de Fortalecimiento Fiscal de Buenos Aires por el Gobierno nacional.</i>
                                        </p>
                                        <br>
                                        <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/cKmevL0Jgeg?si=v15MDd7wvBu2vayz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article>
                                        {{-- <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_pla.svg') }}" alt="">

                                        </figure> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El gobernador de Buenos Aires, Axel Kicillof, anunció que llevará a la Justicia la eliminación del Fondo de Fortalecimiento Fiscal de la provincia, medida tomada por el Gobierno de Javier Milei. Este fondo, creado durante la gestión de Alberto Fernández, destinaba un porcentaje de los recursos coparticipables adicionales que la ciudad de Buenos Aires recibía por el traspaso de la Policía Federal hacia la provincia. Kicillof calificó la decisión como un acto de "robo" y anunció la posibilidad de convocar a una cumbre de gobernadores para frenar los decretos de Milei.
                                                </p>
                                                <br>
                                                <p>El conflicto por el Fondo de Fortalecimiento Fiscal se remonta a 2016, cuando el entonces presidente Mauricio Macri aumentó por decreto la coparticipación de CABA, utilizando como justificación la transferencia de la Policía Federal a la ciudad. Para corregir esa inequidad, en 2020, durante la pandemia, Alberto Fernández creó el Fondo para el Fortalecimiento Fiscal de la Provincia de Buenos Aires.
                                                </p>
                                                <br>
                                                <p>La eliminación de este fondo, según el decreto de Milei, se fundamenta en que afectó los intereses generales de la Nación en su conjunto, privando al Estado Nacional de recursos necesarios para el ordenamiento de las cuentas públicas. Sin embargo, para Kicillof, estas decisiones no son contra los gobernadores, sino contra todos los argentinos y argentinas.
                                                </p>
                                                <br>
                                                <p>En respuesta a estas medidas, la presidenta del bloque de senadores bonaerenses por Unión por la Patria (UxP), Teresa García, afirmó que el retiro de fondos por parte del Gobierno nacional a la provincia de Buenos Aires es un "avasallamiento al federalismo", mientras que la senadora nacional del Frente de Todos, Juliana Di Tullio, señaló que la eliminación del Fondo de Fortalecimiento Fiscal afecta a los bonaerenses y quita recursos para políticas públicas como seguridad, educación, salud y rutas.
                                                </p>
                                                <br>
                                                <p>La eliminación del Fondo de Fortalecimiento Fiscal de la provincia de Buenos Aires ha generado un fuerte rechazo por parte de las autoridades provinciales y ha avivado el debate sobre la distribución de recursos entre la Nación y las provincias. La decisión de Kicillof de llevar el caso a la Corte Suprema marca un nuevo capítulo en este conflicto que promete continuar en los próximos días.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol50')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">VICTORIA TOLOSA PAZ: “MILEI ES UN SECUESTRADOR Y EXTORSIONADOR”</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 28/02/2024</p>
                                        <p><i>La diputada de Unión por la Patria, Victoria Tolosa Paz, arremete contra Milei: 'Es un secuestrador y extorsionador', advirtiendo sobre una grave situación institucional.</i>
                                        </p>
                                        <br>
                                        <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/_bPQiSzfFxo?si=dNK9SBhfeNQ6hqYP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article>
                                        {{-- <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_pla.svg') }}" alt="">

                                        </figure> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En un discurso encendido, la diputada nacional Victoria Tolosa Paz se arremetió contra el presidente Javier Milei, acusándolo de comportarse como un "secuestrador de recursos" y de extorsionar a los gobernadores de Argentina. En sus declaraciones, Tolosa Paz denunció una grave situación de violencia institucional, señalando que el presidente estaría vulnerando la Constitución y la soberanía de los gobernadores.
                                                </p>
                                                <br>
                                                <p>Según Tolosa Paz, Milei estaría afectando gravemente al pueblo argentino al privarlos de los recursos necesarios para garantizar una educación pública de calidad, acceso a alimentos básicos y una seguridad ciudadana adecuada. En sus palabras, el presidente estaría "manoteando" las cuentas y recursos de los gobernadores, dejando a la población vulnerable y desamparada.
                                                </p>
                                                <br>
                                                <p>"Estamos frente a una situación sin precedentes, donde un presidente se comporta como un auténtico secuestrador de recursos, afectando directamente a los trabajadores ya los sectores más vulnerables de nuestra sociedad", afirmó Tolosa Paz.
                                                </p>
                                                <br>
                                                <p>La diputada nacional también hizo hincapié en la necesidad de que los gobernadores y el gobierno nacional trabajen juntos para garantizar el bienestar de la población. En este sentido, instó a los gobernadores a resistir las presiones y extorsiones del presidente, ya defender los intereses de sus provincias y ciudadanos.
                                                </p>
                                                <br>
                                                <p>Por último, Tolosa Paz llamó a la unidad de todos los sectores políticos y sociales para enfrentar lo que considera un grave ataque a la democracia y la institucionalidad del país. "Es hora de que nos unamos en defensa de nuestros derechos y de nuestra soberanía. No podemos permitir que un presidente se comporte como un dictador, vulnerando nuestras libertades y derechos fundamentales", concluyó la diputada nacional.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol51')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SOLIDARIDAD EN LA ADVERSIDAD: APOYO A LA REVISTA ANFIBIA TRAS EL INCENDIO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p>En la madrugada del 5 de marzo de 2024, la redacción de la Revista ANFIBIA quedó reducida a cenizas. Pareciera que un cortocircuito se llevó el sueño de 12 años de un grupo de periodistas y trabajadores de prensa, que con pasión y compromiso sostuvieron a lo largo de este tramo de la historia, construyendo una comunidad de lectores no solamente en nuestro país sino en el mundo entero. ANFIBIA se había constituido en una publicación de excelencia, creando una manera de narrar y retratar la coyuntura que los distinguió por sus exquisitos textos y sus cuidadas temáticas. La revista depende de la Universidad Nacional de San Martín (UNSAM).
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/_bPQiSzfFxo?si=dNK9SBhfeNQ6hqYP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_anfi.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>ADN Populares y la Cooperativa El Faro Comunicaciones se solidarizan con el colega Cristian Alarcón, director de la publicación, y con todos los trabajadores del medio siniestrado, con la certeza de que más temprano que tarde, volveremos a disfrutar esas lecturas imprescindibles.
                                                </p>
                                                <br>
                                                <p>ANFIBIA lanzó de inmediato la campaña "DAME EL FUEGO DE TU AMOR", de apoyo económico. Desde Argentina, se pueden hacer aportes solidarios a la cuenta: cuenta.cronos y desde el exterior por medio de PayPal: paypal.me/revistaanfibia.
                                                </p>
                                                <br>
                                                <p>Por más periodismo, por más libertad de prensa, por más libertad de expresión.
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol52')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MAYRA CONTRA EL AJUSTE DEL GOBIERNO NACIONAL: “VAMOS A DEFENDER A LOS QUILMEÑOS”</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p>La intendenta de Quilmes, Mayra Mendoza, encabezó este martes la apertura del período 142º de sesiones ordinarias del Honorable Concejo Deliberante (HCD) de Quilmes, que tuvo lugar en el Teatro Municipal, ubicado en la calle Mitre 721, en Quilmes Centro.
                                        </p>
                                        <br>
                                        <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article>
                                        {{-- <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_anfi.svg') }}" alt="">

                                        </figure> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p><b>La intendenta de Quilmes, Mayra Mendoza, destacó en su discurso el respaldo recibido en las elecciones de octubre y agradeció la confianza de los ciudadanos, resaltando que su gobierno es el segundo en la historia democrática en revalidar su mandato y el primero en lograrlo con más del 50% de los votos.</b>
                                                </p>
                                                <br>
                                                <p>En relación al recorte de fondos a las provincias, la intendenta advirtió sobre los problemas presupuestarios que enfrenta la Provincia de Buenos Aires debido a la desigual distribución establecida por la coparticipación nacional. Subrayó la necesidad de defender y recuperar los fondos que le corresponden a la Provincia, destacando que a pesar de ser el 38% de la población del país y aportar el 40% de los recursos coparticipables, solo se les devuelve el 22%.
                                                </p>
                                                <br>
                                                <p>Mendoza también se refirió a los efectos del primer período de gestión del Gobierno nacional, mencionando el ajuste sobre trabajadores y jubilados, la caída del consumo, la recesión y la inflación desmedida. Ante esta situación, enfatizó las dificultades que implicaría para el municipio la falta de acompañamiento del Estado Nacional en los próximos años.
                                                </p>
                                                <br>
                                                <p>En un llamado a la unidad, la intendenta afirmó que es imprescindible que todos los intendentes, legisladores y la comunidad bonaerense en su conjunto defiendan la posición del gobernador para lograr una justa recuperación de fondos, sin perjudicar a ninguna otra provincia pero en defensa de los bonaerenses.</p>
                                                <br>
                                                <p>En cuanto a los proyectos futuros, Mendoza destacó la continuidad del plan de pavimentos e infraestructura deportiva, la construcción de la primera Veterinaria Municipal, la bajada de la autopista en Ezpeleta y la creación de una Biblioteca y Espacio Cultural en el barrio IAPI. Además, subrayó la política en materia de seguridad, anunciando la compra de más patrulleros, cámaras y lectores de patentes.</p>
                                                <br>
                                                <p>En el cierre de su discurso, la intendenta llamó a construir una nueva mayoría popular que resuelva los problemas estructurales de Argentina y a dar la discusión en todos los barrios, escuchando y hablando con cada vecino. Participaron en la actividad diversas personalidades políticas y funcionarios, así como vecinos y militantes.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol53')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">TRIUNFO ARGENTINO: JUSTICIA DE EEUU ABSUELVE EN CASO CUPÓN PBI</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La jueza Loretta Preska, del distrito Sur de Nueva York, dictó un favor de Argentina en la causa por los cupones PBI de 2013, desestimando la demanda de cuatro fondos de cobertura que reclamaban cerca de 1.500 millones de dólares por supuesta manipulación de datos.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_eeuu2.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En un giro favorable para Argentina, la justicia estadounidense ha resuelto un favor del país en la disputa por los cupones PBI emitidos en 2013. La jueza Loretta Preska, del distrito Sur de Nueva York, revocó una sentencia previa que obligaba a Argentina a pagar casi 1.500 millones de dólares a cuatro fondos de cobertura, quienes argumentaron que hubo manipulación de datos por parte del entonces secretario de Comercio y responsable del INDEC, Guillermo Moreno, para evitar los pagos a bonistas.
                                                </p>
                                                <br>
                                                <p>El fallo de la jueza Preska fue contundente al desestimar las demandas de los fondos buitre, destacando que el juicio no se trataba del INDEC ni de la posible mala fe de Argentina al calcular su PBI, sino de un tecnicismo relacionado con la cláusula "no action" cláusula" del prospecto, que impedía a los demandantes presentar la demanda de la manera en que lo hicieron.
                                                </p>
                                                <br>
                                                <p>Esta decisión representa un revés para los fondos Palladian Partners, HBK Master Fund, Hirsh Group y Virtual Emerald International Limited, quienes habían iniciado una denuncia en 2019 por la falta de pago de los rendimientos de los Cupones PBI emitidos en 2005 por el entonces ministro de Economía, Roberto Lavagna, para reestructurar la deuda defaulteada en 2002.
                                                </p>
                                                <br>
                                                <p>La resolución de la justicia de Estados Unidos a favor de Argentina en el caso por los cupones PBI es un triunfo significativo para el país, que ha sido objeto de numerosas demandas de fondos buitre en los últimos años. Este fracaso refuerza la posición de Argentina en la defensa de sus intereses soberanos y en la protección de los derechos de sus ciudadanos frente a especuladores financieros.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol54')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CINCO GOBERNADORES PERONISTAS RECHAZAN EL PACTO DE MAYO CONVOCADO POR MILEI</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 13/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Axel Kicillof, Ricardo Quintela, Sergio Ziliotto, Gildo Insfrán y Gustavo Melella, todos del peronismo, no asistirán al pacto propuesto por Javier Milei, argumentando incumplimientos del Gobierno nacional con las provincias.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_rechazo.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El gobernador de Buenos Aires, Axel Kicillof, confirmó este lunes que no asistirá a la firma del Pacto de Mayo convocado por el presidente Javier Milei para dentro de dos semanas en Córdoba. Kicillof se suma a otros cuatro mandatarios provinciales del peronismo que ya anticiparon que no formarán parte de la iniciativa: Ricardo Quintela (La Rioja), Sergio Ziliotto (La Pampa), Gildo Insfrán (Formosa) y Gustavo Melella (Tierra del Fuego).
                                                </p>
                                                <br>
                                                <p>Durante un acto en el Teatro Argentino de La Plata, Kicillof afirmó que el Gobierno nacional “está incumpliendo” sus obligaciones con la provincia de Buenos Aires y que “hubiera concurrido si se dignara a dar lo que corresponde”.
                                                </p>
                                                <br>
                                                <p>“La recesión, la caída de la recaudación y la quita ilegal de fondos por parte del Gobierno nacional impacta sobre la provincia y los distritos. Hoy estamos demostrando que el Gobierno provincial no deserta, respeta el federalismo y reconoce la importancia de las y los intendentes”, argumentó el gobernador kirchnerista.
                                                </p>
                                                <br>
                                                <p>Kicillof destacó la importancia de estos fondos en “un momento donde el Gobierno nacional está incumpliendo con todas las provincias argentinas; donde ha pisoteado el federalismo en lo fiscal, económico, operativo y constitucional”.</p>
                                                <br>
                                                <p>El gobernador de La Rioja, Ricardo Quintela, también rechazó la convocatoria al Pacto de Mayo, afirmando: “Al Pacto de Mayo no voy a ir. Antes de un pacto existe una conversación previa y esto es una imposición. Varios gobernadores no nos vamos a someter a eso”.</p>
                                                <br>
                                                <p>Además de la negativa de estos cinco gobernadores, existen dudas sobre lo que harán otros mandatarios provinciales, como Gerardo Zamora (Santiago del Estero) y los patagónicos Claudio Vidal (Santa Cruz), Rolando Figueroa (Neuquén) y Alberto Weretilneck (Río Negro), quienes mantienen una relación oscilante con Milei.</p>
                                                <br>
                                                <p>Se espera que el resto de los gobernadores asistan el sábado 25 de este mes a firmar el pacto, entre ellos Martín Llaryora (Córdoba), Maximiliano Pullaro (Santa Fe), Alfredo Cornejo (Mendoza), Osvaldo Jaldo (Tucumán), Gustavo Sáenz (Salta), Carlos Sadir (Jujuy), Leandro Zdero (Chaco), Rogelio Frigerio (Entre Ríos), Gustavo Valdés (Corrientes), Raúl Jalil (Catamarca), Claudio Poggi (San Luis), Marcelo Orrego (San Juan) y el jefe de gobierno porteño, Jorge Macri.</p>
                                                <br>
                                                <p>A doce días de la fecha prevista para rubricar el Pacto de Mayo, el Gobierno nacional está en plena negociación por la media sanción en la Cámara de Senadores de la Ley Bases, y se mostró abierto a ampliar el temario de los diez puntos contemplados en el acuerdo con los gobernadores.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol55')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL GOBIERNO DE MILEI: AJUSTE, ABANDONO Y PERSECUCIÓN</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 17/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>En medio de un contexto de ajuste económico y aumento de la pobreza, el gobierno de Javier Milei busca distraer la atención con acusaciones hacia los movimientos sociales, mientras se profundizan los problemas en Argentina.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_hambre2.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En medio de un clima político enrarecido, el presidente Javier Milei ha emprendido un viaje a España con fines más personales que institucionales, mientras en Argentina se profundizan los problemas sociales. El contexto nacional se ve marcado por el posible fracaso político del Pacto de Mayo y el estancamiento de la Ley Bases en el Senado, lo que ha llevado al gobierno a buscar distraer la atención con acusaciones hacia los movimientos sociales.
                                                </p>
                                                <br>
                                                <p>El presidente, alejado tanto física como mentalmente de la realidad, se muestra intolerante a las críticas sobre el plan económico, proclamando un supuesto éxito en el ajuste y la inflación. Sin embargo, los números indican que el aumento de precios del 8,8% no es una buena noticia para la población, ya que la línea de pobreza continúa en ascenso, situándose en $828.158 para una familia.
                                                </p>
                                                <br>
                                                <p>Uno de los efectos colaterales del ajuste es el aumento del desempleo, con la pérdida de 100 mil puestos de trabajo en el sector privado solo en el primer trimestre, según datos del Centro de Economía Política Argentina (CEPA).
                                                </p>
                                                <br>
                                                <p>En medio de este panorama, la ministra de Capital Humano, Sandra Pettovello, ha sido denunciada por incumplimiento de los deberes de su función, liderando una acusación contra dirigentes sociales. Pettovello ha eliminado la asistencia alimentaria a comedores y merenderos populares, además de modificar el programa social Potenciar Trabajo, que garantizaba empleo en la economía popular a más de un millón de personas.</p>
                                                <br>
                                                <p>Esta situación ha llevado al Gobierno a buscar legitimar el ajuste sobre las clases populares mediante denuncias por extorsión contra los movimientos sociales y avanzar en su persecución. Pettovello se ofreció como querellante en las causas por las que se imputan a 12 dirigentes sociales.</p>
                                                <br>
                                                <p>Los medios de comunicación masivos se han sumado a este discurso, con editoriales sobre la "esclavitud moderna" y "los curros de los dirigentes sociales", contribuyendo a un clima de persecución política, judicial y mediática a las clases populares organizadas, mientras las necesidades básicas de la población quedan desatendidas.</p>
                                                <br>
                                                <p>En resumen, el Gobierno de Milei se enfrenta a críticas por su gestión económica, que ha resultado en un aumento de la pobreza y el desempleo, además de una serie de medidas que han impactado negativamente en los sectores más vulnerables de la sociedad, mientras busca desviar la atención con acusaciones hacia los movimientos sociales.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol56')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SIN ACUERDO EN EL SENADO: LA LEY BASES EN UN IMPASSE POLÍTICO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 18/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Después de dos semanas de intenso debate, el oficialismo pierde la esperanza de llegar al Pacto de Mayo con su aprobación total. El plenario de comisiones del Senado pasó a cuarto intermedio, y el RIGI aparece como uno de los principales puntos de controversia.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_bases2.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Después de dos semanas de intensos debates en el Senado, la Ley Bases y la Reforma Fiscal propuestas por el oficialismo aún no han logrado obtener el dictamen necesario para su aprobación. Este impasse representa un revés para el Gobierno de Javier Milei, que buscaba que estas medidas fueran aprobadas antes del 25 de mayo.
                                                </p>
                                                <br>
                                                <p>El plenario de comisiones del Senado, compuesto por las comisiones de Legislación General, Presupuesto y Hacienda, y Asuntos Constitucionales, ha decidido entrar en un cuarto intermedio hasta el próximo martes, sin lograr establecer acuerdos para su tratamiento.
                                                </p>
                                                <br>
                                                <p>Uno de los puntos más controvertidos de la Ley Bases es el Régimen de Incentivo a las Grandes Inversiones (RIGI), que ha generado críticas tanto de la oposición como de sectores empresariales y de la sociedad civil. Daniel Rosatto, presidente de Industriales PyMEs Argentinos (IPA), expresó su preocupación por este aspecto de la ley, argumentando que no favorece a las pequeñas y medianas empresas, que son fundamentales para la economía del país.
                                                </p>
                                                <br>
                                                <p>En este contexto, Estela de Carlotto, presidenta de Abuelas de Plaza de Mayo, también ha hecho un llamado al Senado para proteger el Banco de Datos Genéticos y la Comisión Nacional por el Derecho a la Identidad (CONADI), expresando su preocupación por los posibles efectos negativos de la Ley Bases en estos organismos.</p>
                                                <br>
                                                <p>En resumen, la falta de consenso en el Senado ha generado un impasse en la aprobación de la Ley Bases y la Reforma Fiscal, lo que pone en duda la posibilidad de que estas medidas sean aprobadas antes del 25 de mayo, como estaba previsto inicialmente por el Gobierno.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol57')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">JÓVENES ORGANIZAN ACTO-INTERVENCIÓN FRENTE AL CONGRESO EN REPUDIO A LA LEY BASES</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 21/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Diversas organizaciones juveniles realizarán una intervención artística y un acto el miércoles 22 de mayo a las 17:00 horas para manifestarse contra la sanción de la Ley Bases. La actividad, que simulará el remate de derechos y bienes naturales de Argentina, busca influenciar el voto de los Senadores y visibilizar las consecuencias de la normativa.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_jovenes2.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En una acción conjunta, varias organizaciones juveniles se preparan para llevar a cabo un acto-intervención frente al Congreso Nacional en repudio a la sanción de la Ley Bases. La actividad se desarrollará el miércoles 22 de mayo a las 17:00 horas y tendrá una duración estimada de una hora y media.
                                                </p>
                                                <br>
                                                <p>La intervención artística simulará el remate de los derechos y bienes naturales que Argentina perdería de aprobarse la ley. Esta representación visual busca llamar la atención sobre las graves consecuencias que implicaría la normativa y generar conciencia entre los legisladores y la ciudadanía.
                                                </p>
                                                <br>
                                                <p>Tras la intervención, se realizará un breve acto de cierre donde se ofrecerán palabras en representación de las organizaciones, sindicatos y movimientos sociales participantes. Entre los convocantes se encuentran La Cámpora, Grupo Bicentenario, Peronismo Militante, Peronismo por la Ciudad, Descamisados, Unidos y Organizados, El Hormiguero, Federación Juvenil Comunista, Frente Patria Grande, Juventud ATE, Juventud UPCN, Simón Bolívar, Resistentes, Les Jóvenes JP Evita, CCC, Barrios de Pie, Militancia Popular, Juventud sindical CGT, Juventud CTA, La Patria es el Otro y NIETES.
                                                </p>
                                                <br>
                                                <p>Esta movilización busca no solo expresar el rechazo a la Ley Bases, sino también influenciar el voto de los Senadores para evitar su aprobación. Los organizadores invitan a todos los medios de comunicación, militantes y ciudadanos a participar y ser testigos de esta manifestación en defensa de los derechos y bienes naturales del país.</p>
                                                <br>
                                                <p>Fecha: Miércoles 22 de mayo</p>
                                                <p>Hora: 17:00</p>
                                                <p>Lugar: Frente al Congreso Nacional</p>
                                                <br>
                                                <p>Para más información, los interesados pueden contactarse con las organizaciones convocantes.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol58')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ROMINA DEL PLÁ: HACE FALTA AUMENTAR TODO EL PRESUPUESTO: SIN SALARIOS, NO HAY UNIVERSIDAD</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La diputada del Frente de Izquierda y de Trabajadores - Unidad denunció la falta de inversión en educación pública y llamó a continuar la lucha por un aumento real del presupuesto universitario.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_salario.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El bloque del Frente de Izquierda y de Trabajadores - Unidad participó de la Sesión Especial en la Cámara de Diputados de la Nación para tratar el tema educativo en la cual, finalmente, se aprobó su emplazamiento a comisión. La diputada nacional por Partido Obrero, Romina Del Plá, declaró al respecto:
                                                </p>
                                                <br>
                                                <p>“Esta Sesión evidencia que la única forma de arrancar la emergencia educativa y el aumento real del presupuesto universitario es tomando las calles. La marcha del 23 marcó el camino, tenemos que seguir presionando por el presupuesto, por los salarios y por la restitución del FONID. El ajuste de este gobierno tiene a la educación pública en una situación crítica, no podemos aceptar más dilaciones.”
                                                </p>
                                                <br>
                                                <p>La diputada nacional también denunció: “No hay sorpresa, el peronismo y los radicales en la UBA vienen de negociar un presupuesto de miseria, desoyendo los reclamos estudiantiles y docentes. La limosna que ofrece el gobierno no contempla gastos en infraestructura ni salarios para los docentes. Realizan una concesión mínima para desarticular la histórica jornada del 23.”
                                                </p>
                                                <br>
                                                <p>Finalmente, Del Plá sentenció: “Quedó demostrado que no podemos confiar en quienes ven la educación como un negocio. Sin salarios docentes, no hay Universidad. Tenemos que seguir la lucha por un aumento real del presupuesto que no puede quedar en manos de los voceros de las patronales y las burocracias. El jueves vamos todos al Congreso por un paro docente activo y de lucha.”</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol59')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">NUEVAS CARAS Y MOVIMIENTOS EN EL GABINETE DE MILEI</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 25/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El Presidente Javier Milei sorprendió al anunciar una posible revisión de su equipo de gobierno. Aunque el vocero Adorni trató de aplacar la incertidumbre, ya se especula sobre potenciales incorporaciones y cambios en los cargos ministeriales.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_caras.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En medio de un clima de incertidumbre política, el Presidente Milei anunció una "revisión" del Gabinete, desatando especulaciones sobre los movimientos que podrían producirse en el equipo ministerial. Este anuncio ha generado expectativas y debates en los círculos políticos, donde se barajan nombres y se evalúa el impacto potencial de los cambios propuestos.
                                                </p>
                                                <br>
                                                <p>Uno de los nombres que más resuena es el de Federico Sturzenegger, reconocido economista con experiencia en crisis financieras. Su eventual ingreso al Gabinete sugiere un posible giro hacia políticas económicas más ortodoxas y liberales, lo que podría tener repercusiones significativas en el rumbo del país.
                                                </p>
                                                <br>
                                                <p>Otro nombre que ha captado la atención es el de Eduardo “Lule” Menem-Menem, figura con profundos lazos políticos y experiencia en el ámbito legislativo. Su eventual incorporación al gobierno podría fortalecer los vínculos con el Congreso y las provincias, facilitando la articulación política en un momento crucial para la administración de Milei.
                                                </p>
                                                <br>
                                                <p>En tanto, la situación del Ministro del Interior, Guillermo Francos, se encuentra en una posición delicada, sujeta al destino de la Ley Ómnibus. Su eventual salida o continuidad en el Gabinete podría tener importantes implicancias en la gestión gubernamental y en las relaciones con la oposición.</p>
                                                <br>
                                                <p>En el ámbito laboral, se especula con un posible retorno de Patricia Bullrich a una posición relevante en el gobierno. Su histórico enfrentamiento con los sindicatos y su defensa de políticas conservadoras podrían marcar un nuevo rumbo en las políticas laborales del gobierno.</p>
                                                <br>
                                                <p>Por otro lado, la figura de Manuel Adorni, actual vocero presidencial, también ha sido objeto de especulación. Su ascendente influencia en los círculos políticos podría traducirse en un cambio de rol dentro del gobierno, con potenciales implicancias en la comunicación oficial y la toma de decisiones.</p>
                                                <br>
                                                <p>Finalmente, José Luis Espert, diputado y defensor acérrimo de las políticas de Milei, podría desempeñar un papel más destacado en el Gabinete. Su perfil liberal y su compromiso con las reformas económicas podrían influir en la dirección futura del gobierno.</p>
                                                <br>
                                                <p>En resumen, la posible reconfiguración del Gabinete de Milei plantea desafíos y oportunidades para la administración actual. Los próximos movimientos serán clave para definir el rumbo político y económico del país en los próximos meses.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol60')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DIPUTADOS DEBATEN LA REDUCCIÓN DE LA JORNADA LABORAL EN COMISIÓN</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 28/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>En una reunión clave, diputados de distintos bloques parlamentarios analizaron propuestas para modificar la Ley 11.544 y reducir la jornada de trabajo, destacando argumentos a favor de la productividad y el bienestar laboral.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_dipu.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Comisión de Legislación del Trabajo, presidida por el diputado Martín Tetaz (UCR), llevó a cabo un debate crucial sobre la reducción de la jornada laboral. Durante la sesión, diversos legisladores defendieron sus propuestas, buscando actualizar la Ley 11.544 para adecuarla a las nuevas realidades del mercado laboral.
                                                </p>
                                                <br>
                                                <p>El diputado Eduardo Valdés (UxP) destacó que su iniciativa pretende "trabajar menos para que más gente tenga acceso al mercado laboral", mientras que Nicolás del Caño (FIT) abogó por "reducir las horas laborales para alivianar la carga del trabajo y repartir las horas de trabajo para generar un millón de puestos de trabajo genuino".
                                                </p>
                                                <br>
                                                <p>Por su parte, Hugo Yasky (UxP) propuso prohibir que los convenios colectivos puedan alterar la jornada legal máxima establecida por la Ley de Contrato de Trabajo. La diputada Mónica Litza (UxP) enfatizó la necesidad de adoptar herramientas tecnológicas para mejorar el bienestar de los trabajadores, y Vanesa Siley (UxP) subrayó la importancia de la reducción del tiempo laboral en términos de salubridad y salud mental.
                                                </p>
                                                <br>
                                                <p>Sergio Palazzo (UxP) se sumó al debate resaltando que una jornada laboral reducida mejora la productividad y el presentismo. Martín Tetaz (UCR) informó que la jornada laboral no se ha corregido en más de 100 años y propuso explorar jornadas alternativas para evaluar su impacto en la productividad. Además, presentó un proyecto para implementar indemnizaciones ante despidos sin preaviso adecuado.</p>
                                                <br>
                                                <p>El debate también incluyó posturas contrarias. Alida Ferreyra (LLA) y Gabriel Bornoroni (LLA) rechazaron el proyecto de Palazzo, argumentando que se requiere un debate más amplio para evitar la "industria del juicio". Alejandra Torres (HCF) y Germana Figueroa Casas (PRO) pidieron que el proyecto regrese a asesores para un análisis más detallado.</p>
                                                <br>
                                                <p>En un giro interesante, el diputado Julio Cobos (UCR) presentó un proyecto para sistematizar las propinas, proponiendo que se puedan realizar a través de medios de pago electrónicos, garantizando así un ingreso adicional formal para los trabajadores.</p>
                                                <br>
                                                <p>Al cierre de la reunión, se completó la designación de autoridades de la Comisión, nombrando al diputado Jorge Ávila (HCF) a cargo de la secretaría 2°.</p>
                                                <br>
                                                <p>Este debate en comisión marca un paso significativo en la discusión sobre la jornada laboral en Argentina, con múltiples propuestas en juego y un llamado general a modernizar la legislación laboral para adaptarla a las necesidades del siglo XXI.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol61')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">GUILLERMO FRANCOS ASUME COMO JEFE DE GABINETE</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 29/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El nuevo Jefe de Gabinete se reunió con ministros y anunció la incorporación de Federico Sturzenegger como ministro, mientras Javier Milei realiza su quinto viaje a Estados Unidos.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_guille2.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Guillermo Francos asumió sus funciones como Jefe de Gabinete en el gobierno de Javier Milei, reemplazando a Nicolás Posse. En su primera jornada, Francos se reunió con los ministros del gabinete en Casa Rosada y ofreció una conferencia de prensa, en la que confirmó la designación de Federico Sturzenegger como nuevo ministro.
                                                </p>
                                                <br>
                                                <p>El presidente Javier Milei, actualmente en Estados Unidos, delegó la reorganización del gabinete a Francos, quien se ha comprometido a trabajar en busca de consensos respecto a la Ley Bases y el proyecto fiscal. Este cambio de liderazgo es visto como un intento de fortalecer la Jefatura de Gabinete y absorber las competencias del Ministerio del Interior, que ahora estarán bajo la responsabilidad de Francos y su secretario, Lisandro Catalán.
                                                </p>
                                                <br>
                                                <p>Durante la conferencia de prensa, Francos expresó su agradecimiento a Milei por la confianza depositada en él y subrayó la necesidad de impulsar la gestión gubernamental. Aclaró que la salida de Posse fue resultado de diferencias en la marcha del gobierno, pero que este continuará apoyando al presidente desde un nuevo rol que se anunciará próximamente.
                                                </p>
                                                <br>
                                                <p>El nombramiento de Federico Sturzenegger, ex presidente del Banco Central durante el gobierno de Mauricio Macri, como ministro, fue uno de los puntos destacados de la jornada. Sturzenegger será responsable de áreas clave como la modernización del Estado y la desregulación económica, temas en los que ha trabajado estrechamente con el equipo de Milei.</p>
                                                <br>
                                                <p>En paralelo, Javier Milei se encuentra en Estados Unidos acompañado por su hermana Karina y Luis Caputo. Tras aterrizar en San Francisco, Milei tiene previsto reunirse con Sam Altman, CEO de Open AI, y ofrecer una conferencia en la Universidad de Stanford. Además, se espera que mantenga reuniones con destacados empresarios, incluido Mark Zuckerberg, CEO de Meta.</p>
                                                <br>
                                                <p>Milei regresará a Argentina el viernes, haciendo una escala en El Salvador para asistir a la toma de posesión del presidente Nayib Bukele en su segundo mandato. Este viaje es parte de su estrategia para atraer inversiones y fortalecer las relaciones económicas internacionales.</p>
                                                <br>
                                                <p>La reorganización interna del gobierno también incluyó una reunión en Casa Rosada, liderada por Francos, en la que participaron los ministros Luis Petri (Defensa), Sandra Pettovello (Capital Humano), Diana Mondino (Relaciones Exteriores), Patricia Bullrich (Seguridad), Mariano Cúneo Libarona (Justicia) y Mario Russo (Salud), entre otros altos funcionarios.</p>
                                                <br>
                                                <p>Francos aprovechó la oportunidad para reafirmar el compromiso del gobierno con la aprobación de la Ley Bases, que actualmente se encuentra estancada en el Senado tras obtener media sanción en la Cámara de Diputados. El nuevo Jefe de Gabinete enfatizó la necesidad de construir consensos con otros sectores políticos para avanzar con esta y otras iniciativas legislativas clave.</p>
                                                <br>
                                                <p>En resumen, la asunción de Guillermo Francos como Jefe de Gabinete marca un momento decisivo en el gobierno de Javier Milei, con una clara intención de reorganizar y fortalecer el equipo gubernamental en medio de un contexto político desafiante. La incorporación de Federico Sturzenegger y la continuidad de las reformas económicas son señales de un gobierno que busca adaptarse y responder a las exigencias de la actualidad.</p>
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
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight  text-white">
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol62')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">REPRESIÓN Y DETENCIONES EN EL CONGRESO DURANTE TRATAMIENTO DE LA LEY BASES EN EL SENADO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 12/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Violenta represión y detenciones en el Congreso durante protesta contra la ley Bases en el Senado. Manifestantes y diputados afectados por el accionar policial en medio de una jornada de tensión.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_repre.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Manifestantes de diversas organizaciones sindicales, sociales y políticas fueron reprimidos hoy frente al Congreso de la Nación. La represión, que incluyó el uso de balas de goma, gases lacrimógenos y gas pimienta, resultó en al menos 39 detenidos. Los manifestantes se movilizaron para evitar la aprobación de la ley Bases, que continúa siendo tratada en la Cámara de Senadores. Entre los reprimidos se encuentran legisladores de Unión por la Patria (UxP) como Carlos Castagneto, Eduardo Valdés, Juan Manuel Pedrini, Carolina Yutrovic y Luis Basterra, según informó la diputada Cecilia Moreau.
                                                </p>
                                                <br>
                                                <p>Los cinco diputados debieron ser trasladados al Hospital Santa Lucía y al Instituto del Quemado, siendo Castagneto hospitalizado por lesiones en su piel.
                                                </p>
                                                <br>
                                                <p>La primera represión policial tuvo lugar cerca de las 14 cuando personal de Prefectura avanzó contra un cordón que los diputados de UxP intentaban conformar en la calle Entre Ríos. Prefectura también lanzó gas lacrimógeno contra los manifestantes autoconvocados en la intersección de Callao y Rivadavia.
                                                </p>
                                                <br>
                                                <p>La mayor represión ocurrió a partir de las 16 cuando la Policía Federal junto a la Gendarmería avanzaron con gases lacrimógenos y balas de goma contra los manifestantes en la Plaza de los Dos Congresos, tras el acto convocado por las dos CTA y algunos sindicatos de la CGT.</p>
                                                <br>
                                                <p>Camiones hidrantes lanzaron agua a los presentes y abrieron las vallas que las fuerzas policiales habían colocado para desconectar las calles Hipólito Yrigoyen y Rivadavia de Entre Ríos, sobre la que se desplegaron gran cantidad de efectivos que controlaron durante toda la jornada a los manifestantes.</p>
                                                <br>
                                                <p>Algunos manifestantes respondieron con piedras y botellazos frente al avance de las fuerzas de seguridad que por momentos llegó hasta la calle Virrey Cevallos.</p>
                                                <br>
                                                <p>La Policía de la Ciudad detuvo a 18 personas, 16 hombres y 2 mujeres, por los incidentes ocurridos en las últimas horas en inmediaciones del Congreso. Entre los detenidos, hay un hombre de 41 años que tenía en su poder una granada, una mujer responsable de incendiar bicicletas del Gobierno de la Ciudad y otra mujer que estaba prendiendo fuego dos bicicletas de la Ciudad en Cevallos e Hipólito Yrigoyen. Todos quedaron a disposición del juzgado de turno.</p>
                                                <br>
                                                <p>Hasta el momento se contabilizaron 3 policías, dos mujeres y un hombre, heridos. Una de las oficiales heridas recibió un objeto contundente desde un balcón en Salta y Av de Mayo, derivada al Ramos Mejia con Traumatismo de cráneo. Otro de los heridos tuvo una fractura en un dedo por un golpe y otra de las detenidas un traumatismo en un pie.</p>
                                                <br>
                                                <p>Las organizaciones presentes incluyeron sindicatos como ATE, Sutna, Aceiteros, La Fraternidad, Ctera, Suteba, Smata, Utep, Fedun, Fatun, UTE-Ctera, entre otros, así como movimientos sociales como Barrios de Pie, el Movimiento Evita, la CCC, el MTE, el Polo Obrero, La Dignidad, y la Poderosa, y agrupaciones políticas como el Frente Patria Grande, La Cámpora, Liberación Popular, el Nuevo Más, el MST, la Izquierda Socialista, el PTS y Libres del Sur.</p>
                                                <br>
                                                <p>El acto culminó cerca de las 15.30 luego de que se cantara el himno nacional, con una retirada de muchas organizaciones, quedando los movimientos sociales junto a las agrupaciones de izquierda en la primera línea cerca de las vallas, momento en que inició la avanzada de las fuerzas de seguridad marcando un cambio en la jornada, aún cuando se trataba en el Senado la ley Bases pero con más presencia policial que de manifestantes.</p>
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol63')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">VILLARRUEL DESATA EL EMPATE EN EL SENADO Y LA LEY BASES VUELVE A DIPUTADOS</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 13/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Con Victoria Villarruel como figura clave, el Senado aprobó la ley Bases y el paquete fiscal tras 12 horas de debate. La norma ahora vuelve a Diputados tras recibir modificaciones.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_empate.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Tras una extensa sesión de 12 horas, el Senado de la Nación aprobó en general la ley Bases, clave en la agenda legislativa del gobierno de Javier Milei. La vicepresidenta Victoria Villarruel fue decisiva al desempatar la votación que cerró con 36 votos a favor y 36 en contra. Ahora, el proyecto regresa a la Cámara de Diputados debido a modificaciones realizadas durante el debate.
                                                </p>
                                                <br>
                                                <p>La jornada legislativa estuvo marcada por intensos debates y momentos de tensión, dentro y fuera del recinto. En las inmediaciones del Congreso se registraron fuertes incidentes y represión policial, con más de diez detenidos y cinco diputados hospitalizados. A pesar de la violencia, la sesión continuó y se lograron avances en otros proyectos, como el paquete fiscal, que también fue aprobado y ahora pasa a discutirse en particular.
                                                </p>
                                                <br>
                                                <p>Durante la votación en particular de la ley Bases, se aprobaron varios puntos conflictivos, como el Régimen de Incentivos para Grandes Inversiones (RIGI), las facultades delegadas, impuestos al tabaco y el paquete de privatizaciones. Estos temas generaron división entre los senadores, con algunos kirchneristas votando a favor de medidas clave para el oficialismo.
                                                </p>
                                                <br>
                                                <p>El paquete fiscal, por su parte, fue aprobado con 37 votos a favor y 35 en contra. Este proyecto, que incluye modificaciones importantes en materia económica, fue respaldado por el senador Martín Lousteau (CABA) y criticado por otros sectores de la oposición, que lo consideran perjudicial para ciertos sectores.</p>
                                                <br>
                                                <p>La sesión estuvo marcada por negociaciones y acuerdos entre los legisladores, que buscaron obtener beneficios para sus provincias a cambio de apoyar ciertos proyectos. Uno de los temas más polémicos fue el posible nombramiento de la senadora Lucila Crexell como embajadora en París (Unesco), lo que generó críticas y denuncias de la oposición.</p>
                                                <br>
                                                <p>En resumen, la jornada legislativa fue intensa y dejó varias cuestiones para el debate público. La ley Bases y el paquete fiscal ahora deberán ser analizados en detalle en la Cámara de Diputados, donde se espera un nuevo round de discusiones y negociaciones políticas.</p>
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol64')
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
                                        <p><i>En una nueva gira internacional, el presidente Javier Milei se reunió con el primer ministro alemán Olaf Scholz y descartó una devaluación del 30% exigida por el FMI, mientras el pueblo argentino sufre las consecuencias de las políticas neoliberales.</i>
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
                                                <p>La reunión, que se llevó a cabo en Berlín, abordó temas cruciales como la integración del Mercosur con la Unión Europea, el ingreso de Argentina a la OCDE y la OTAN. Sin embargo, la falta de honores militares y la cancelación de la conferencia de prensa reflejan la tensión subyacente en el encuentro. Alemania, con su peso en la UE y el FMI, es un actor clave en la economía global, y su postura frente a Argentina puede influir significativamente en el futuro del país.
                                                </p>
                                                <br>
                                                <p>El comunicado del gobierno alemán subrayó la importancia de la cohesión social, una crítica velada a las políticas de ajuste impulsadas por Milei, que han profundizado la pobreza y la desigualdad en Argentina. Sin embargo, Milei negó cualquier comentario de Scholz sobre la política interna argentina y afirmó que la discusión se centró en fortalecer la economía bilateral.
                                                </p>
                                                <br>
                                                <p>NEGACIÓN DE UNA DEVALUACIÓN NECESARIA</p>
                                                <br>
                                                <p>Ante los crecientes rumores sobre una devaluación del 30%, supuestamente sugerida por el FMI, Milei negó categóricamente que el organismo haya hecho tal recomendación. “El propio Caputo explicó que el informe del organismo no señala eso”, afirmó, intentando calmar los temores. Sin embargo, los economistas señalan que sin una devaluación, la economía argentina seguirá en caída libre, afectando gravemente a los sectores más vulnerables.</p>
                                                <br>
                                                <p>El retraso en la exportación de la cosecha de granos, fundamental para las reservas del Tesoro, ha exacerbado la crisis. Desde Alemania, Milei intentó disipar los temores, asegurando que una devaluación afectaría negativamente el poder adquisitivo de los trabajadores. No obstante, la falta de una fecha clara para eliminar el cepo cambiario genera más incertidumbre y desconfianza en su gestión.</p>
                                                <br>
                                                <p>DESAFÍOS ECONÓMICOS Y POLÍTICAS FALLIDAS</p>
                                                <br>
                                                <p>Milei destacó el desequilibrio fiscal como el principal problema económico, pero sus políticas han sido insuficientes para abordarlo. Criticó las “colocaciones de deuda” en el Banco Central, que representan alrededor del 4% del PBI, y apuntó a Rodrigo Valdés, del FMI, como responsable de la situación heredada. Sin embargo, esta narrativa no exime a su administración de las decisiones que han llevado a la crisis actual.</p>
                                                <br>
                                                <p>UNA IMAGEN INTERNACIONAL POLÉMICA</p>
                                                <br>
                                                <p>En su gira, Milei también buscó consolidar su imagen internacional participando en eventos con figuras alineadas con su ideología neoliberal. En Hamburgo, recibió una medalla de la Sociedad Hayek tras un discurso en el que criticó la “justicia social”. Estas declaraciones refuerzan su postura económica, pero alienan a amplios sectores de la sociedad que luchan por una mayor equidad.</p>
                                                <br>
                                                <p>En España, Milei se reunió con Isabel Díaz Ayuso y asistió a la Cena de la Libertad en el Casino de Madrid, donde fue premiado por el Instituto Juan de Mariana. Compartió escenario con figuras de la derecha europea, consolidando sus lazos con este sector y reafirmando su alineación con políticas neoliberales.</p>
                                                <br>
                                                <p>CONTINUACIÓN DE LA GIRA Y DESAFÍOS FUTUROS</p>
                                                <br>
                                                <p>La gira continuó en la República Checa, donde se reunió con el primer ministro Petr Fiala. Los ministros de Defensa de ambos países firmaron un acuerdo de cooperación para modernizar las Fuerzas Armadas argentinas, reflejando una dimensión militar en la estrategia de Milei para fortalecer la posición de Argentina.</p>
                                                <br>
                                                <p>En su noveno viaje internacional en seis meses, Milei busca consolidar su imagen como líder liberal y fortalecer lazos con aliados internacionales. Sin embargo, sus políticas y declaraciones generan controversia tanto a nivel nacional como internacional, reflejando las tensiones inherentes en su enfoque económico y político. La capacidad de Milei para manejar estas tensiones será crucial para el futuro de Argentina.</p>
                                                <br>
                                                <p>UNA VISIÓN ECONÓMICA Y POLÍTICA BAJO CUESTIONAMIENTO</p>
                                                <br>
                                                <p>La gira de Milei pone de manifiesto su compromiso con una visión económica neoliberal, pero sus políticas están bajo constante escrutinio. La falta de medidas efectivas para abordar la crisis económica y social en Argentina genera dudas sobre su capacidad para liderar el país hacia una recuperación sostenible. En un mundo interconectado y complejo, las decisiones de Milei no solo afectan a Argentina, sino que también tienen implicaciones globales, y la crítica de la comunidad internacional será un factor determinante en su éxito o fracaso.</p>
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
                                        <p><i>La Cámara de Diputados sancionó los proyectos de Javier Milei, otorgándole facultades delegadas. La regresiva reforma laboral y la restitución del Impuesto a las Ganancias son algunas de las preocupaciones que asedian a la población.</i>
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
                                                <p>En una sesión maratónica, la Cámara de Diputados aprobó con holgura la polémica Ley Bases y el paquete fiscal propuesto por el gobierno de Javier Milei. Este avance del Ejecutivo representa un duro golpe para la clase trabajadora, que se verá afectada por una reforma laboral regresiva y la restitución del Impuesto a las Ganancias. El paquete fiscal incluye además modificaciones en Bienes Personales y un blanqueo de capitales que favorece a las grandes fortunas.
                                                </p>
                                                <br>
                                                <p>El Presidente Milei obtuvo facultades delegadas que le permiten privatizar empresas públicas estratégicas y gestionar la economía con amplio margen de maniobra. AySA, Trenes Argentinos, Belgrano Cargas, Corredores Viales, Enarsa e Intercargo están en la lista de posibles privatizaciones. El Régimen de Incentivo a las Grandes Inversiones (RIGI) prioriza a las multinacionales con beneficios impositivos y cambiarios, poniendo en jaque a la industria nacional.
                                                </p>
                                                <br>
                                                <p>El paquete fiscal aprobado incluye la restitución del Impuesto a las Ganancias, afectando a unos 800 mil trabajadores que volverán a pagar este tributo con alícuotas que van del 5% al 35%. En contraste, las grandes fortunas tributarán menos: el nuevo piso de Bienes Personales sube a 100 millones de pesos, con una deducción por vivienda familiar de 350 millones.
                                                </p>
                                                <br>
                                                <p>El gobierno de Javier Milei celebró la aprobación de las leyes. Jorge Macri, jefe de gobierno porteño, exclamó en X: “Ahora hay que poner en marcha los cambios que el país necesita”. Luis Caputo, ministro de Economía, felicitó a los dirigentes y agradeció a los políticos “que les importa la gente”.</p>
                                                <br>
                                                <p>Desde la oposición, la Diputada Nacional Cecilia Moreau lamentó: “El ajuste lo pagan los trabajadores y trabajadoras”. Myriam Bregman del FIT criticó la reforma laboral y la carga impositiva sobre los trabajadores. Victoria Tolosa Paz apuntó contra Milei, acusándolo de usar la extorsión y el maltrato mediático.</p>
                                                <br>
                                                <p>Con la aprobación definitiva de la Ley Bases y el paquete fiscal, se consolidan los problemas para la mayoría de la población. La concentración de poder en el Ejecutivo y la privatización de empresas públicas son solo algunas de las medidas que generan preocupación. El peronismo anticipó que judicializará algunos apartados, como la restitución del Impuesto a las Ganancias y las modificaciones en Bienes Personales, que habían sido rechazadas por el Senado.</p>
                                                <br>
                                                <p>En este contexto, gran parte del pueblo espera que los jueces y la justicia en general estén a la altura de las circunstancias, protegiendo los derechos de los trabajadores y garantizando la equidad en la distribución de cargas tributarias. La aprobación de estas leyes marca un punto de inflexión en la política argentina, con un gobierno que avanza en reformas que afectan profundamente a la clase trabajadora, mientras promete beneficios para las grandes inversiones y las fortunas más concentradas.</p>
                                                <br>
                                                <p>La situación que se avecina para los trabajadores y las clases medias argentinas es preocupante. La regresiva reforma laboral y la carga impositiva renovada sobre los ingresos más modestos contrastan con las ventajas otorgadas a las grandes fortunas y las empresas multinacionales. La respuesta del pueblo, que ya se manifiesta en diversos sectores, será crucial para enfrentar este embate que profundiza las desigualdades y pone en jaque los logros sociales de los últimos años.</p>
                                                <br>
                                                <p>Javier Milei ha conseguido un avance significativo con la aprobación de la Ley Bases y el paquete fiscal, pero el costo social y político de estas medidas se verá reflejado en la resistencia y la movilización de un pueblo que no está dispuesto a aceptar pasivamente estas reformas.</p>
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
                                            <a href="">ADIÓS A LA INDEPENDENCIA INFORMATIVA: FORMALIZAN EL GOLPE A TELAM</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 02/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El gobierno ultra neoliberal de Javier Milei ha dado un golpe definitivo a la histórica Agencia Télam, transformándola en una Sociedad Anónima Unipersonal bajo la denominación de "Agencia de Publicidad del Estado".</i>
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
                                                <p>En un movimiento ampliamente criticado, el gobierno de Javier Milei ha oficializado la transformación de Télam Sociedad del Estado en una entidad dedicada exclusivamente a la publicidad y propaganda estatal. Mediante el Decreto 548/24, publicado recientemente en el Boletín Oficial, se ha consumado la quita de derechos fundamentales para el pueblo argentino, en particular el acceso a una información plural y veraz.
                                                </p>
                                                <br>
                                                <p>Desde su intervención hace casi cuatro meses, Télam ha sido sometida a una serie de medidas coercitivas: todos sus trabajadores fueron pasados a disponibilidad y una parte significativa del personal original fue obligada a aceptar un "retiro forzado". Este último decreto consolida la conversión de Télam en una entidad comercial bajo el nombre de AGENCIA DE PUBLICIDAD DEL ESTADO SOCIEDAD ANÓNIMA UNIPERSONAL (APE S.A.U.), con sede en la Jefatura de Gabinete de Ministros y regida por la Ley General de Sociedades N° 19.550.
                                                </p>
                                                <br>
                                                <p>Organizaciones sindicales y periodistas han denunciado vehementemente esta maniobra como un ataque frontal a la libertad de prensa y al derecho a la información. Esta transformación no solo vulnera la autonomía informativa de Télam, sino que también representa un intento claro de control estatal sobre la agenda mediática del país.
                                                </p>
                                                <br>
                                                <p>En respuesta a estas medidas draconianas, los trabajadores de Télam, respaldados por el sindicato SiPreBa, han mantenido una firme resistencia. Desde las sedes de la calle Bolívar y Avenida Belgrano, han expresado su determinación de defender su derecho a trabajar en una agencia de noticias independiente y libre de presiones políticas.</p>
                                                <br>
                                                <p>El cambio de Télam en una agencia de publicidad estatal marca un precedente peligroso para el periodismo argentino, consolidando un modelo informativo al servicio de los intereses gubernamentales y privando a la ciudadanía de una fuente crucial de información independiente y plural.
                                                </p>
                                                <br>
                                                <p>El silenciamiento de Télam refleja una estrategia calculada de control de la información en un contexto político cada vez más polarizado. Este paso ha desatado un intenso debate sobre los límites del poder estatal en la comunicación pública y las implicancias para la democracia argentina.</p>
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
                                        <p><i>A 50 años del paso a la inmortalidad del General Perón, el gobernador de la provincia de Buenos Aires encabezó un emotivo acto de homenaje, reafirmando el peronismo como alternativa frente al experimento anarcocapitalista de Javier Milei y llamando a la unidad para defender el proyecto de país que el pueblo argentino merece.</i>
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
                                                <p>En un emotivo acto conmemorativo por el 50 aniversario de la muerte de Juan Domingo Perón, el gobernador de la provincia de Buenos Aires, Axel Kicillof, reafirmó el rol transformador del peronismo como contrapeso al actual experimento anarcocapitalista liberal libertario que, según él, perjudica gravemente al pueblo argentino.
                                                </p>
                                                <br>
                                                <p>"La alternativa al actual experimento anarcocapitalista liberal libertario que tanto daño le hace al pueblo se llama peronismo", proclamó Kicillof frente a una multitud que se congregó en la Quinta San Vicente. Acompañado por líderes políticos, sindicales y militantes, Kicillof destacó la vigencia de las ideas de Perón en tiempos de desafíos económicos y sociales.
                                                </p>
                                                <br>
                                                <p>El gobernador enfatizó que, lejos de ser una mera conmemoración del pasado, el acto tenía como objetivo construir un futuro inclusivo y justo para todos los argentinos. Criticó duramente las políticas del gobierno nacional, liderado por Javier Milei, acusándolo de promover más desigualdad, menos derechos y un aumento del desempleo.
                                                </p>
                                                <br>
                                                <p>"Hay más desigualdad, menos derechos y más desempleo. En resumen, Javier Milei significa más privilegios para pocos y menos derechos para muchos. Es exactamente lo contrario de lo que representa el peronismo", señaló Kicillof, haciendo eco de las preocupaciones de muchos sectores sociales.</p>
                                                <br>
                                                <p>El discurso del gobernador también apuntó a la desregulación y el achicamiento del Estado impulsado por el gobierno libertario de Milei. Criticó la idea de una Argentina sin Estado, advirtiendo que sería una pesadilla para la mayoría, privando al país de educación, salud, obra pública y soberanía.
                                                </p>
                                                <br>
                                                <p>En un llamado a la unidad dentro del peronismo y a la resistencia popular, Kicillof hizo un guiño al federalismo y a la defensa de las instituciones democráticas frente a lo que describió como ataques sistemáticos por parte del gobierno actual.</p>
                                                <p>"El objetivo es una patria justa, libre y soberana. El peronismo sigue de pie, va derecho al futuro", concluyó Kicillof, subrayando su compromiso de proteger los derechos sociales y económicos que considera amenazados por las políticas de Milei.
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
                                            <a href="">REINO UNIDO INTENSIFICA SU ACCIÓN ILEGAL EN MALVINAS CON NUEVAS EXPLORACIONES PETROLÍFERAS</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 05/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El país europeo planea extraer 500 millones de barriles de petróleo de la Isla de los Leones Marinos. El diputado Gustavo Pulti presentó un proyecto para repudiar esta actividad y exigir una respuesta del Gobierno argentino.</i>
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
                                                <p>Reino Unido ha renovado su interés por los recursos naturales de las Islas Malvinas, con una nueva operación petrolífera que pone en riesgo la soberanía argentina sobre estos territorios. La compañía israelí Navitas Petroleum ha sido identificada como la principal responsable de este proyecto, que pretende extraer 500 millones de barriles de petróleo de la Isla de los Leones Marinos.
                                                </p>
                                                <br>
                                                <p>El anuncio ha generado una fuerte preocupación en Argentina, especialmente tras la revelación de que la isla podría contener cerca de 1.700 millones de barriles, una cantidad significativamente mayor que la estimada en el desarrollo de Rosebank en el Mar del Norte británico, que cuenta con aproximadamente 300 millones.
                                                </p>
                                                <br>
                                                <p>El medio británico The Telegraph informa que el petróleo extraído de la Isla de los Leones Marinos sería procesado a través de un buque flotante de producción, almacenamiento y descarga. Este buque permitiría el transporte del crudo a los mercados internacionales, un plan que parece estar en marcha a pesar de la falta de consenso con Argentina.
                                                </p>
                                                <br>
                                                <p>La situación se complica aún más con el hecho de que el Gobierno británico ha iniciado un período de consulta con los isleños, que se extenderá hasta el 5 de agosto. Sin embargo, la falta de participación argentina en las negociaciones resalta la ilegalidad de las acciones británicas en las islas.</p>
                                                <br>
                                                <p>El diputado provincial Gustavo Pulti ha levantado la voz contra esta nueva agresión. En un comunicado contundente, Pulti calificó el proceder británico como "ilegítimo" y recordó que el proceso de licitación para la exploración de hidrocarburos en las Malvinas data de 2010. “El yacimiento en cuestión se calificó como de clase mundial, con reservas comprobables de 580 millones de barriles de petróleo”, destacó el legislador.
                                                </p>
                                                <br>
                                                <p>Pulti expresó su preocupación por el impacto ambiental y económico que podría tener esta actividad, que contempla la perforación de 23 pozos y la producción de más de 300 millones de barriles en un período de 30 años. "El silencio y la inacción de la Cancillería violan las leyes y la Constitución nacional", enfatizó el diputado, llamando a una firme postura del Gobierno argentino frente a la explotación británica.
                                                </p>
                                                <br>
                                                <p>El legislador ha presentado un proyecto en la Cámara de Diputados provincial para repudiar esta decisión unilateral e inconsulta y exigir una respuesta contundente del Ministerio de Relaciones Exteriores, Comercio Internacional y Culto. Esta acción busca denunciar la “inacción inexplicable” del gobierno nacional en un tema de vital importancia para la soberanía argentina.</p>
                                                <br>
                                                <p>Desde Argentina, la protesta ha sido constante, pero la empresa Navitas Petroleum ha continuado con sus exploraciones. En 2022, la Secretaría de Energía de Argentina la calificó como “clandestina” e inhabilitó a la compañía por 20 años para desarrollar actividades en territorio nacional.</p>
                                                <br>
                                                <p>La situación en las Islas Malvinas se mantiene en el centro del conflicto diplomático entre Argentina y Reino Unido, con el accionar británico subrayando la necesidad de una respuesta firme y efectiva del gobierno argentino para defender los recursos naturales y la soberanía nacional.</p>
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
                                        <p><i>Los argentinos tenemos muchas formas de decir que algo ha llegado a su fin. Siempre está presente esa picardía heredada de nuestros abuelos, que llegaron a esta tierra tras interminables viajes y cruzando fronteras.</i>
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
                                                <p>Recordemos algunas de nuestras expresiones: "está doblando la curva", "le picaron el boleto", "llegó a su punto de inflexión". Con estas frases, entendemos que junio marcó el momento de no retorno para este gobierno, al que, con su permiso, calificaré de nefasto.
                                                </p>
                                                <br>
                                                <p>El llamado "plan", o mejor dicho, la serie de medidas económicas que parecieran ser más propias de una licuadora o una motosierra que de una política económica coherente, llegó a su fin. Este gobierno pauperizó a un pueblo ya empobrecido y, a contramano de lo que hace el gran presidente de la República Federativa del Brasil, Luiz Inácio Lula da Silva, que lucha por elevar a los pobres a la clase media, el gobierno de Milei empujó a más gente de clase media a la pobreza.
                                                </p>
                                                <br>
                                                <p>La promesa de no emisión fue un cuento chino. La baja de la inflación se desvaneció y ya se percibe un rebote ascendente. Se devoraron la devaluación de diciembre y volvieron a tener una brecha de más del 50% entre los dólares más usados. El campo, como suele suceder, se acomodó a la situación y comenzó la sequía de liquidación de divisas, lo que podría anticipar una nueva devaluación, un salto inflacionario, más emisión o un default de la deuda en pesos con los bancos.
                                                </p>
                                                <br>
                                                <p>Algunos indicadores a considerar son los siguientes: la producción de las automotrices nacionales cayó 16.7 puntos respecto al mes anterior; la venta de cemento se desplomó, lo que afecta tanto a la obra pública como a las remodelaciones en los hogares; y las ventas en autoservicios de cercanía cayeron más del 10% en mayo en comparación con el mismo mes de 2023. Estos datos, entre otros, sugieren que al gobierno de Milei le picaron el boleto, que las fuerzas del cielo lo han abandonado y que ha comenzado su caída.</p>
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
                                            <a href="">MILEI CELEBRA SU PACTO DE MAYO, EN JULIO, ENTRE AUSENCIAS Y REPRESIÓN POLICIAL</a>
                                            {{-- <p class="font-light text-gray-500">Por Daniel Gomez, Politologo.</p>  --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El presidente Javier Milei consiguió la fotografía que había buscado desde el inicio de su mandato: la firma del Pacto de Mayo en la Casa Histórica de Tucumán, con la presencia de 18 gobernadores. Sin embargo, el acto que celebró como una victoria política estuvo marcado por ausencias destacadas y una represión policial que oscureció el evento.</i>
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
                                                <p>A la medianoche del 8 de julio, en un acto que se llevó a cabo para conmemorar el 208º aniversario de la Declaración de la Independencia, Milei y los gobernadores firmaron un acuerdo compuesto por diez puntos destinados a "refundar el país". Entre los firmantes se destacaron los expresidentes Mauricio Macri y Adolfo Rodríguez Saá, así como un grupo de gobernadores alineados con la visión neoliberal del actual presidente. No obstante, la firma no logró el consenso total: importantes figuras políticas y representantes de distintos sectores se ausentaron, evidenciando la falta de apoyo y legitimidad del pacto.
                                                </p>
                                                <br>
                                                <p>El acto, que el gobierno presentó como un hito histórico, no pudo ocultar la realidad de su rechazo generalizado. Gobernadores como Axel Kicillof de Buenos Aires, Gildo Insfrán de Formosa y Ricardo Quintela de La Rioja, entre otros, se ausentaron, al igual que la vicepresidenta Victoria Villarruel, que alegó un estado gripal. La ausencia de la Corte Suprema y de la CGT también fue notable, reflejando un desdén institucional hacia el acuerdo.
                                                </p>
                                                <br>
                                                <p>La represión en los alrededores del teatro del evento agravó la controversia. La policía provincial reprimió con violencia a militantes que habían convocado un acto con olla popular para expresar su desacuerdo con el gobierno de Milei. Cuatro personas fueron detenidas, entre ellas Jesús Ruiz de Patria Grande, Walter Díaz de ADIUNT, Daniel Leal de la CCC y Peter Delgadino del Frente Barrial 19 de diciembre. Los hechos fueron reportados por medios alternativos, que mostraron una realidad muy diferente a la imagen oficial del evento.
                                                </p>
                                                <br>
                                                <p>En su discurso, Milei hizo hincapié en la necesidad de reformas económicas y sociales que, según él, son imprescindibles para el futuro del país. No obstante, sus críticas a quienes se oponen al pacto y su insistencia en una agenda neoliberal, desestimaron las voces disidentes y exacerbaron la polarización. El presidente acusó a sus detractores de intentar boicotear su gobierno y de beneficiarse a expensas del sufrimiento general.</p>
                                                <br>
                                                <p>El Pacto de Mayo, en lugar de consolidar un acuerdo nacional, se ha convertido en un símbolo de las divisiones políticas y sociales que caracterizan a la Argentina actual. La falta de consenso y la represión de la disidencia evidencian la falta de legitimidad y el carácter excluyente de las políticas impulsadas por Milei. En definitiva, el acto no ha logrado más que profundizar la fractura en la sociedad argentina, evidenciando la resistencia de un gobierno que parece más interesado en imponer su agenda que en construir verdaderos consensos.
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
                                            <a href="">DENUNCIAN A DIPUTADA LIBERTARIA POR EXTORSIÓN A SUS ASESORES</a>
                                            {{-- <p class="font-light text-gray-500">Por Daniel Gomez, Politologo.</p>  --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 20/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La acusación surge en medio de la polémica por la visita de diputados oficialistas a represores en Ezeiza, incrementando la tensión dentro de La Libertad Avanza.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_libertaria.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La bancada libertaria en el Congreso se enfrenta a una nueva controversia que expone aún más la naturaleza corrupta y opaca de La Libertad Avanza. Esta vez, la denuncia es contra la diputada cordobesa María Celeste Ponce, acusada de extorsionar a sus propios colaboradores. Según el youtuber El Presto, Ponce habría exigido pagos a sus asesores a cambio de contratos. La denuncia llega en un momento crítico, añadiendo combustible a la ya tensa situación generada por la polémica visita de diputados oficialistas a represores en Ezeiza.
                                                </p>
                                                <br>
                                                <p>El Presto reveló en uno de sus streams que Ponce, después de nombrar apresuradamente a un grupo de asesores en diciembre, habría solicitado a una de las denunciantes el pago de 500 mil pesos para asegurar un contrato que le reportaría a la asesora unos 700 mil pesos. Esta maniobra no es más que otro ejemplo de la corrupción y el clientelismo que caracterizan al espacio liderado por Javier Milei.
                                                </p>
                                                <br>
                                                <p>Ponce llegó a la lista de diputados el año pasado por un fuerte pedido desde la cúpula libertaria, respaldada por su agrupación Pumas Libertarios, con una base sólida en el sur de Córdoba. "Vino impuesta e injertada de afuera y hubo que acceder. Y siempre se ponía al frente la relación con el muchacho", comentó una fuente familiarizada con la campaña de Milei en 2023, destacando la falta de transparencia y democracia interna en el armado de listas.
                                                </p>
                                                <br>
                                                <p>Convertida en una de las tres diputadas de La Libertad Avanza junto a Gabriel Bornoroni y Cecilia Ibáñez, Ponce enfrenta ahora serias acusaciones internas. "Si esto crece, va a ser otro tema de fricción que se suma a lo de la visita a los genocidas", afirmó una persona cercana a la bancada que lidera Bornoroni. Este tipo de prácticas corruptas y la falta de ética parecen ser la norma y no la excepción en el espacio libertario.</p>
                                                <br>
                                                <p>La situación se complica con la posibilidad de un interbloque con el PRO, una estrategia que Milei siempre ha deseado para consolidar su poder a expensas del verdadero debate y representación democrática. "Es probable, es lo que siempre quiso Milei, que nos juntemos con los amarillos. Estamos en conversaciones", añadió la fuente, subrayando la desesperación por mantenerse a flote en medio de la creciente impopularidad y escándalos.
                                                </p>
                                                <br>
                                                <p>Cecilia Ibáñez, quien se unió al Movimiento de Integración y Desarrollo (MID) en abril, podría distanciarse de Ponce si la denuncia resulta ser cierta. "Si llega a ser así, Cecilia se va a despegar de manera completa de Ponce. Es todo lo contrario a lo que Ibáñez piensa, hace y dice", comentaron desde su entorno, tratando de salvar las apariencias en un espacio plagado de prácticas cuestionables.</p>
                                                <br>
                                                <p>La situación en Córdoba se vuelve más crítica, ya que Bornoroni, además de ser jefe de bloque, ha sido apoyado por Karina Milei y Martín Menem para fortalecer el sello de La Libertad Avanza en la provincia. Este conflicto interno ocurre en un contexto donde no habrá elecciones para el Senado ni renovaciones de bancas en la Legislatura provincial el próximo año, complicando aún más el panorama político. Todo esto refleja la incapacidad de La Libertad Avanza para manejarse de manera ética y coherente.</p>
                                                <br>
                                                <p>La denuncia contra Ponce y la tensión creciente dentro de La Libertad Avanza podrían tener repercusiones significativas en el futuro político del partido, exponiendo la corrupción y la falta de transparencia que impera en sus filas. Es imperativo que la justicia y la sociedad civil actúen con firmeza para desenmascarar y sancionar estas prácticas, asegurando que el verdadero espíritu democrático y representativo prevalezca.</p>
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
                                            <a href="">MILEI DESVÍA FONDOS MILLONARIOS A LA SIDE MIENTRAS LA SOCIEDAD SUFRE AJUSTES</a>
                                            {{-- <p class="font-light text-gray-500">Por Daniel Gomez, Politologo.</p>  --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 24/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El gobierno de Javier Milei asigna $100 mil millones a la SIDE mientras la población enfrenta severos recortes y dificultades económicas.</i>
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
                                                <p>La reciente decisión del gobierno de Javier Milei de asignar $100 mil millones a la Secretaría de Inteligencia del Estado (SIDE), anunciada mediante el Decreto 656/2024, ha generado una fuerte polémica. Este significativo desembolso ocurre en un contexto de ajuste fiscal que impacta severamente a la población, evidenciado por altos niveles de desocupación y pobreza.
                                                </p>
                                                <br>
                                                <p>La resolución establece la reedición de la SIDE, reemplazando a la Agencia Federal de Inteligencia (AFI). La medida, descrita como parte de una reforma del Sistema de Inteligencia Nacional (SIN), tiene como objetivo fortalecer los mecanismos de coordinación entre los distintos organismos de inteligencia del país. Según el decreto, el propósito es “proteger la soberanía nacional, preservar el orden constitucional y proporcionar apreciaciones de inteligencia útiles para los objetivos nacionales”.
                                                </p>
                                                <br>
                                                <p>La SIDE, bajo la dependencia directa de Milei, supervisará la operación de cuatro nuevas agencias: el Servicio de Inteligencia Argentino (SIA), la Agencia de Seguridad Nacional (ASN), la Agencia Federal de Inteligencia (AFC) y la División de Asuntos Internos (DAI). Cada una de estas entidades tiene funciones específicas, que van desde la recopilación de información estratégica hasta la supervisión de recursos.
                                                </p>
                                                <br>
                                                <p>Desde la asunción de Milei, los gastos reservados en inteligencia han aumentado un 391%. El decreto establece que los $100 mil millones asignados serán de carácter reservado, sin necesidad de rendir cuentas. Esta cifra se destinará a la reorganización y funcionamiento de la SIDE y sus agencias asociadas, en un contexto donde el gobierno ha priorizado el ajuste económico sobre el bienestar social.</p>
                                                <br>
                                                <p>El artículo 1 del decreto menciona que los fondos se asignan para el fortalecimiento del Sistema de Inteligencia Nacional, mientras que el segundo artículo subraya el carácter reservado de los recursos. La firma del decreto cuenta con el respaldo de figuras clave del gobierno, incluidos el presidente Javier Milei y varios ministros de su gabinete.
                                                </p>
                                                <br>
                                                <p>En resumen, la asignación millonaria a la SIDE en un periodo de ajuste severo pone de relieve una contradicción en la política de Milei, que prioriza los gastos en inteligencia mientras enfrenta críticas por la creciente pobreza y desocupación en el país.</p>
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
                                            <a href="">KICILLOF DEFENDIÓ A BUENOS AIRES EN LA DISPUTA POR LA PLANTA DE GNL</a>
                                            {{-- <p class="font-light text-gray-500">Por Daniel Gomez, Politologo.</p>  --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 25/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El gobernador Axel Kicillof enfrenta una maniobra política del presidente Javier Milei que pone en riesgo el desarrollo estratégico de Buenos Aires. La disputa por la ubicación de la planta de Gas Natural Licuado (GNL) destaca la diferencia entre el compromiso regional de Kicillof y las tácticas de Milei.</i>
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
                                                <p>Uno de los proyectos más significativos en términos de desarrollo estratégico y inversiones de los últimos años es la planta de Gas Natural Licuado (GNL), promovida por YPF y la petrolera malaya Petronas. La iniciativa, que consiste en construir una planta de licuefacción de gas proveniente del yacimiento Vaca Muerta, promete una importante entrada de divisas extranjeras a Argentina al facilitar la exportación de gas.
                                                </p>
                                                <br>
                                                <p>A pesar de que las condiciones estructurales indican que Bahía Blanca sería la ubicación ideal para la planta debido a su infraestructura portuaria y cercanía con los nodos de distribución, el presidente Javier Milei ha propuesto trasladar el proyecto a Punta Colorada, en la provincia de Río Negro. Esta decisión, lejos de responder a consideraciones técnicas, tiene motivaciones puramente políticas.
                                                </p>
                                                <br>
                                                <p>Milei busca disciplinar a Axel Kicillof, gobernador de Buenos Aires y principal referente de la oposición, como represalia por su rechazo a adherir al Régimen de Incentivo a las Grandes Inversiones (RIGI), una política impulsada por Milei que ha sido ampliamente criticada por su impacto negativo en el desarrollo equilibrado del país.
                                                </p>
                                                <br>
                                                <p>El proyecto original, impulsado durante el gobierno de Alberto Fernández, contemplaba la construcción de la planta en Bahía Blanca. Esta ubicación ofrecía ventajas logísticas cruciales para el desarrollo del proyecto, que requiere una inversión histórica de 50.000 millones de dólares. Sin embargo, el cambio de gobierno y la inclusión del RIGI en el paquete de leyes fiscales detuvieron el avance del proyecto.</p>
                                                <br>
                                                <p>El gobierno de Kicillof se opuso al RIGI, presentando en su lugar un sistema tributario alternativo que busca proteger los intereses de Buenos Aires y asegurar que las inversiones generen beneficios claros para la provincia. Kicillof ha señalado que las exportaciones desde Buenos Aires representarían la mitad de las exportaciones del país, subrayando la importancia estratégica de su propuesta.
                                                </p>
                                                <br>
                                                <p>Mientras tanto, Milei, al apoyar la ubicación en Río Negro, ha criticado a Kicillof, tildándolo de “comunista expropiador” y buscando beneficiar al gobernador de Río Negro, Alberto Weretilneck, quien ha prometido un puerto privado para la planta. Sin embargo, la provincia patagónica no cuenta con la infraestructura necesaria, y la construcción de un puerto en esa región implicaría costos adicionales significativos.</p>
                                                <br>
                                                <p>A pesar de los desafíos, Kicillof se mantiene firme en su posición, confiando en que YPF y Petronas evaluarán la conveniencia técnica y económica de la ubicación del proyecto con total profesionalismo. Su postura destaca su compromiso con los derechos de Buenos Aires y su rechazo a las políticas perjudiciales de Milei, reafirmando su papel como defensor de los intereses de su provincia frente a las maniobras políticas del gobierno nacional.</p>
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
                                            <a href="">MOREAU CUESTIONÓ AL GOBIERNO Y ALERTÓ SOBRE DERIVA AUTORITARIA</a>
                                            {{-- <p class="font-light text-gray-500">Por Daniel Gomez, Politologo.</p>  --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 16/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El diputado Leopoldo Moreau criticó el desorden en las sesiones de la Cámara y denunció el uso excesivo de decretos por parte del gobierno, alertando sobre la erosión de la democracia y el desmantelamiento de instituciones clave.</i>
                                        </p>
                                        <br>
                                        <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Z4mV98JfsV4?si=s0FbdjMb5jjA76Yf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article>
                                        {{-- <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_kicignl.svg') }}" alt="">

                                        </figure> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En una acalorada sesión en la Cámara de Diputados, el legislador Leopoldo Moreau expresó su preocupación por el caos en los debates parlamentarios, destacando que la discusión simultánea de múltiples temas conduce a la confusión y socava la credibilidad del Congreso. "Es muy difícil transitar una sesión debatiendo a la vez 10 temas que se mezclan y se termina por no saber qué se está discutiendo", señaló, advirtiendo que esta desorganización daña la confianza pública en la democracia.
                                                </p>
                                                <br>
                                                <p>Moreau criticó duramente al gobierno por recurrir sistemáticamente a los decretos de necesidad y urgencia (DNU), acusándolo de erosionar las facultades del Poder Legislativo. Recordó que un sector político había otorgado al gobierno herramientas poderosas, que fueron utilizadas en exceso. "El gobierno siguió adelante con decretos a troche y moche", afirmó, preocupándose por el debilitamiento del Congreso en su rol legislativo.
                                                </p>
                                                <br>
                                                <p>El diputado también cuestionó las visitas de legisladores a represores encarcelados, sugiriendo que podrían estar orientadas a "poner en marcha una conspiración que pretenda dar vuelta la historia de la Argentina". Criticó la posible complicidad del Servicio Penitenciario Federal, ahora bajo la órbita del Ministerio de Seguridad, y evocó su propia experiencia en visitas a detenidos, destacando las estrictas normas que entonces imperaban.
                                                </p>
                                                <br>
                                                <p>Además, Moreau denunció la reciente decisión del gobierno de suprimir la unidad especial para la búsqueda de niños desaparecidos durante la dictadura, adscripta a la Comisión Nacional por el Derecho a la Identidad (CONADI). "El gobierno suprimió la unidad especial para la desaparición de niños en la época del terrorismo de Estado", señaló, subrayando la incoherencia con el avance de una ley para la base de datos genéticos discutida en la misma sesión.</p>
                                                <br>
                                                <p>Para Moreau, estas acciones revelan una peligrosa deriva autoritaria y una falta de compromiso con la memoria histórica. Llamó a superar la polarización política y a enfocarse en la defensa de los valores democráticos: "Se está con la democracia o se está con el autoritarismo", concluyó, advirtiendo sobre los riesgos de permitir prácticas autoritarias en el corazón de la democracia argentina.
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
                                            <a href="">ADIÓS A LA INDEPENDENCIA INFORMATIVA: FORMALIZAN EL GOLPE A TELAM</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 02/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El gobierno ultra neoliberal de Javier Milei ha dado un golpe definitivo a la histórica Agencia Télam, transformándola en una Sociedad Anónima Unipersonal bajo la denominación de "Agencia de Publicidad del Estado".</i>
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
                                                <p>En el Senado, la oposición logró aprobar por amplia mayoría el financiamiento a las universidades nacionales y rechazó el DNU de la SIDE, marcando una doble derrota para el gobierno. Mientras tanto, la aprobación de la Boleta Única de Papel fue el único consuelo oficialista.
                                                </p>
                                                <br>
                                                <p>La oposición, tras haber sufrido una derrota en Diputados, redobló su apuesta en el Senado y logró aprobar el aumento del presupuesto para las universidades nacionales. Con 57 votos a favor y solo 10 en contra, la oposición no solo consiguió blindar la ley ante un posible veto presidencial, sino que también logró rechazar el DNU de la SIDE con 49 votos.
                                                </p>
                                                <br>
                                                <p>El debate sobre la Ley de Financiamiento Universitario se dio en un contexto de movilizaciones masivas a favor de la educación pública. La ley sancionada garantiza fondos para funcionamiento y salarios docentes ajustados al Índice de Precios al Consumidor (IPC). "Un presidente que veta esta ley desconoce la brecha entre el pueblo y su gobierno", sentenció Maximiliano Abad, de la UCR, ante la amenaza de un veto por parte del Ejecutivo.
                                                </p>
                                                <br>
                                                <p>Por otro lado, el rechazo del DNU de la SIDE representó otro golpe para el gobierno. Conducida por el radical Eduardo Vischi, la oposición logró una mayoría sólida en ambas votaciones, dejando a la Casa Rosada en una posición defensiva. "Nadie quiere que el VAR te marque dos veces en offside", ironizó un senador opositor tras las dos derrotas legislativas.
                                                </p>
                                                <br>
                                                <p>La única victoria del gobierno fue la aprobación de la Boleta Única de Papel (BUP), con 39 votos a favor y 30 en contra, aunque la ley deberá ser tratada nuevamente en Diputados. La BUP propone cambiar el mecanismo de votación, reemplazando las boletas partidarias por una única que incluya todas las opciones electorales.
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
                                            <a href="">CRISTINA A MILEI: “DEJE DE SEGUIR A FRIEDMAN Y ADMINISTRE EL PAÍS”</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 14/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Cristina Kirchner criticó duramente la política económica de Javier Milei, cuestionando el veto a la Ley de Movilidad Jubilatoria y pidiendo un enfoque más pragmático.</i>
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
                                                <p>La expresidenta Cristina Kirchner criticó severamente la política económica de Javier Milei en un evento en la Universidad Nacional del Oeste, donde recibió el doctorado Honoris Causa. En su discurso, cuestionó el veto a la Ley de Movilidad Jubilatoria y pidió al presidente que abandone la "escuela austríaca" para adoptar un enfoque más pragmático.
                                                </p>
                                                <br>
                                                <p>Durante la ceremonia, Kirchner, acompañada por el gobernador Axel Kicillof y la vicegobernadora Verónica Magario, condenó el reciente veto a la Ley de Movilidad Jubilatoria, argumentando que este ha perjudicado a los jubilados. Se refirió a los cinco votos de la UCR que permitieron el veto, señalando que Milei ha terminado comprando a la "casta política" que criticaba durante su campaña. Según Kirchner, esta situación refleja una traición a los principios de su campaña electoral.
                                                </p>
                                                <br>
                                                <p>En su análisis de la situación económica, Kirchner criticó la política de "economía bimonetaria" promovida por el gobierno actual, que, según ella, ha llevado al país a una crisis profunda, con empresas quebrando y deflación. La expresidenta cuestionó la efectividad de las políticas de ajuste, argumentando que el superávit fiscal obtenido a costa de los más vulnerables no es una solución real. Instó a Milei a "abandonar a Friedman y la escuela austríaca" y a adoptar un enfoque que considere la realidad económica del país.
                                                </p>
                                                <br>
                                                <p>Kirchner también abordó el tema de la competencia de monedas propuesta por Milei, criticando la contradicción entre esta teoría y las dificultades económicas actuales. Se refirió a la falta de dólares para la dolarización prometida y a las tensiones con el FMI, subrayando la ineficacia de las políticas actuales.
                                                </p>
                                                <br>
                                                <p>Además, la exmandataria celebró la reciente sanción de la Ley de Financiamiento Universitario, destacando su importancia para asegurar la calidad educativa. A pesar del casi seguro veto presidencial, Kirchner elogió a los senadores por su apoyo a la ley.
                                                </p>
                                                <br>
                                                <p>En su mensaje final, Kirchner hizo un llamado a la militancia para que se comprometa a cambiar el sentido común a través de datos y a promover el respeto mutuo en el debate político. "La tarea no solo es modificar el sentido común de las cosas a través de datos, sino salir a convencer del respeto al otro", concluyó, destacando la necesidad de un diálogo más inclusivo y respetuoso.
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
                                        <p><i>La embajadora británica se negó a una foto con diputada peronista que llevaba una remera con el lema "Las Malvinas son Argentinas".</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                            src="{{ asset('../img/pol/pol_diputadamalvinas.svg') }}" alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Cámara de Diputados vivió un momento tenso este jueves cuando la embajadora del Reino Unido, Kirsty Hayes, se negó a participar de una fotografía protocolar con legisladores argentinos debido a la vestimenta de la diputada Agustina Propato. La legisladora de Unión por la Patria, que asistió al evento con una remera que decía “Las Malvinas son Argentinas”, se negó a cambiarse, argumentando su derecho a llevar un símbolo que representa la lucha por la soberanía nacional.
                                                </p>
                                                <br>
                                                <p>El incidente ocurrió durante la constitución del grupo parlamentario entre el Reino Unido y Argentina. A pesar de las insistencias de la embajadora, quien solicitó a Propato que se cambiara de remera o se retirara de la foto, la diputada se mantuvo firme en su decisión. “No se me puede pedir que me quite un símbolo que homenajea a nuestros caídos en Malvinas”, sostuvo Propato, quien además enfatizó que todos los argentinos deberían poder lucir una prenda similar en honor a los héroes de la guerra.
                                                </p>
                                                <br>
                                                <p>La controversia se intensificó cuando otros diputados, como Martín Tetaz, Lisandro Almirón y Margarita Stolbizer, apoyaron la petición de la embajadora, lo que llevó a Propato a manifestar su desacuerdo en redes sociales. “Esta es la remera que no me pienso sacar”, publicó, acompañado de una foto que mostró su postura inquebrantable sobre el tema. A través de sus declaraciones, la diputada reafirmó su compromiso con la causa Malvinas y criticó la exigencia de la embajadora británica como un intento de silenciar la historia y la memoria colectiva de los argentinos.
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
                                        <p><i>El expresidente busca repatriar la producción automotriz con medidas proteccionistas, a diferencia del enfoque de Milei que promueve un mercado abierto.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/YElDMxWtpio?si=B21D4BO6vjuKVj0Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class="w-full object-cover"
                                            src="{{ asset('../img/pol/pol_trumpmilei.svg') }}" alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Donald Trump ha intensificado su discurso proteccionista al proponer un arancel del 100% sobre los automóviles fabricados en México, con el objetivo de repatriar la producción automotriz y evitar que las empresas estadounidenses trasladen sus operaciones al extranjero. Esta medida forma parte de su visión para una “nueva industrialización estadounidense”, donde la manufactura y los empleos regresen al país a través de fuertes aranceles y la oferta de incentivos para empresas que decidan producir en Estados Unidos.
                                                </p>
                                                <br>
                                                <p>El expresidente enfatizó que su meta es convertir a compañías extranjeras, como las automotrices alemanas, en fabricantes estadounidenses. Su enfoque se basa en obligar a las empresas a trasladar su producción a EE. UU. para evitar el elevado arancel, una estrategia que podría alterar significativamente la industria automotriz global. Muchas automotrices, que producen vehículos en México debido a menores costos de mano de obra, se verían obligadas a replantear sus operaciones.
                                                </p>
                                                <br>
                                                <p>A diferencia de Javier Milei, quien promueve una política de mercado completamente abierta, sin intervención estatal y con una clara oposición a los impuestos y retenciones, Trump adopta un enfoque pragmático que incluye aranceles y medidas proteccionistas. Mientras Milei sostiene que la libertad económica absoluta es el camino para el crecimiento, Trump no descarta la intervención del Estado para proteger y desarrollar la industria nacional. Esta diferencia clave subraya que Trump está dispuesto a imponer barreras comerciales para asegurar que las fábricas y los empleos permanezcan en EE. 
                                                </p>
                                                <br>
                                                <p>UU., mientras que Milei, con su ideología de mercado libre, corre el riesgo de desindustrializar a Argentina y dejar a su economía aún más vulnerable.
                                                </p>
                                                <br>
                                                <p>Además de los aranceles, Trump propone reducir el impuesto corporativo del 21% al 15%, pero solo para las empresas que fabriquen en EE. UU. También sugiere crear un “embajador industrial” para atraer inversiones extranjeras, ofreciendo terrenos federales como incentivo. Sin embargo, estas promesas enfrentan posibles restricciones legales, lo que genera dudas sobre su viabilidad.
                                                </p>
                                                <br>
                                                <p>En resumen, la visión económica de Trump se centra en una mezcla de proteccionismo, incentivos fiscales y medidas intervencionistas para fortalecer la manufactura estadounidense. Esto contrasta drásticamente con las políticas de libre mercado promovidas por Javier Milei, quien parece llevar a Argentina por un camino equivocado, ignorando las lecciones que la economía global ha dejado sobre la importancia de proteger la industria local.
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
                                        <p><i>La vicepresidenta de la Nación recibió al mandatario salvadoreño, cuya gestión enfrenta severas críticas por su enfoque autoritario en la seguridad.
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
                                                <p>La vicepresidenta de la Nación y presidenta del Senado, Victoria Villarruel, se reunió este martes con el presidente de El Salvador, Nayib Bukele. El encuentro, marcado por un carácter reservado, incluyó la firma en el Libro de Honor y el intercambio de obsequios. Sin embargo, la conversación que más ha captado la atención pública fue aquella en la que ambos líderes discutieron sobre el uso de bitcoin, un tema que despierta tanto interés como controversia en sus respectivos países.
                                                </p>
                                                <br>
                                                <p>Villarruel inició el diálogo al abordar la creciente preocupación en Argentina sobre el crimen organizado y la violencia, interpelando a Bukele sobre su estrategia para combatir las Maras, que han dejado una huella de terror en El Salvador. Bukele, conocido por su enfoque de mano dura, compartió su experiencia al reducir la tasa de homicidios en su país, pero sus métodos han sido objeto de críticas internacionales por las violaciones a los derechos humanos y la falta de debido proceso.
                                                </p>
                                                <br>
                                                <p>En un momento donde el narcotráfico también es un tema candente en Argentina, la senadora Carolina Losada destacó el grave problema que enfrenta su provincia con el crimen organizado, sugiriendo que la situación es alarmante y requiere atención urgente. Sin embargo, Bukele desvió la conversación, argumentando que, aunque la inseguridad ha aumentado, Argentina sigue siendo más segura en comparación con su país, donde el control de las pandillas era absoluto.
                                                </p>
                                                <br>
                                                <p>Los antecedentes de la administración Bukele son complejos: su gobierno ha sido denunciado por la represión de la oposición y el debilitamiento de las instituciones democráticas. La preocupación por la "normalización" de un enfoque autoritario en el combate al crimen se hace evidente en las palabras del presidente salvadoreño, quien a menudo enfatiza la "unión de todos los sectores" como clave para enfrentar la inseguridad.
                                                </p>
                                                <br>
                                                <p>Villarruel concluyó la reunión enfatizando la importancia de forjar lazos entre Argentina y El Salvador, pero el encuentro con Bukele plantea interrogantes sobre la dirección de las políticas de seguridad en el país y si esta asociación no podría significar un alineamiento con un modelo que desatiende los derechos humanos en favor de medidas represivas.
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
                                        <p><i>El ex presidente busca una negociación con el gobierno mientras la tensión por el veto a la educación pública aumenta.
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
                                                <p>Mauricio Macri organizó una reunión en su casa en Acassuso con seis senadores del bloque PRO para discutir el veto del presidente Javier Milei al aumento de fondos para las universidades, una decisión que ha causado preocupación en el oficialismo. En el encuentro, Macri adoptó una postura cautelosa, afirmando que espera una negociación con la Casa Rosada y que, por el momento, prefiere comunicarse con Milei a través de mensajes de texto para evitar malentendidos.
                                                </p>
                                                <br>
                                                <p>Durante la reunión, que comenzó a las 8:45 y fue acompañada por un café servido por Juliana Awada, Macri expresó su descontento con la falta de avances en sus conversaciones anteriores con Milei, señalando que sus propuestas eran bloqueadas por Santiago Caputo y Karina Milei. "Hace rato que no hay milanesas", comentó, refiriéndose a la reducción de sus encuentros personales con el presidente.
                                                </p>
                                                <br>
                                                <p>Asistieron al encuentro el líder de la bancada, Luis Juez, y otros senadores como Carmen Álvarez Rivero, Alfredo De Angeli, Andrea Cristina, Martin Goerling y María Victoria Huala. La ausencia más notable fue la de Guadalupe Tagliaferri, quien tenía un viaje previamente programado.
                                                </p>
                                                <br>
                                                <p>La foto del grupo en el jardín de Macri generó reacciones en Balcarce 50 y en el bloque liderado por Cristian Ritondo en la Cámara Baja, donde los diputados del PRO, liderados por Alejandro Finocchiaro, intentan persuadir a sus colegas para respaldar el veto de Milei. Sin embargo, la historia reciente muestra que las decisiones de Macri han socavado acuerdos que se habían logrado con esfuerzo.
                                                </p>
                                                <br>
                                                <p>El nerviosismo entre los libertarios ha crecido, al punto de que el vocero Manuel Adorni tuvo que aclarar en un programa de televisión que sería "razonable" que el PRO apoyara el veto, similar a su respaldo anterior a la ley de movilidad previsional. Algunos senadores presentes en la reunión reconocieron que existen diferencias de opinión con el gobierno, pero la intención sería "caminar juntos sin subirse a cococho", subrayando que la educación pública es un valor fundamental para el PRO.
                                                </p>
                                                <br>
                                                <p>A la espera de la reunión del bloque de diputados del PRO programada para el próximo martes, los senadores decidieron posponer cualquier decisión formal. Ellos esperan ver cómo se desarrollan los acontecimientos antes de pronunciarse sobre el respaldo al veto, en medio de un clima de incertidumbre que ha caracterizado el actual contexto político.
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
                                            <a href="">PRO APOYARÁ EL VETO DE MILEI AL FINANCIAMIENTO UNIVERSITARIO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 08/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El partido liderado por Mauricio Macri reafirma su posición en contra de la Ley de Financiamiento Universitario, consolidando su alianza con el gobierno ultraderechista.
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
                                                <p>El PRO ha confirmado su respaldo al veto del presidente Javier Milei a la Ley de Financiamiento Universitario, tras una reunión por videoconferencia encabezada por el exmandatario Mauricio Macri. La decisión se discutió en un encuentro de la mesa directiva del partido, donde participaron gobernadores y referentes legislativos. La postura del PRO se llevará a la sesión especial de la Cámara de Diputados, convocada para el miércoles próximo, en la que también participarán bloques dialoguistas y el kirchnerismo.
                                                </p>
                                                <br>
                                                <p>El PRO argumenta que su bloque ya había votado mayoritariamente en contra de la ley en semanas recientes. En un comunicado, el partido sostuvo que “somos coherentes con la necesidad de sostener el equilibrio fiscal como prioridad para que nuestro país salga adelante”, reafirmando su respeto por la ley de Administración Financiera. Además, critican la gestión del Gobierno nacional en relación a las universidades, apuntando a la falta de profesionalidad y gestión de la administración actual.
                                                </p>
                                                <br>
                                                <p>El comunicado también plantea tres exigencias al gobierno de Milei: convocar a un diálogo urgente con los gremios universitarios, incluir las necesidades de las universidades en el proyecto de presupuesto 2025 y derogar la resolución del ex procurador Carlos Zanini que limita la auditoría de las universidades. A medida que se acerca la reunión de bloque del PRO, los diputados se preparan para expresar una postura alineada con la conducción partidaria en este crucial tema educativo.
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
                                        <p><i>Diversos actores del peronismo, ajenos a La Cámpora y sin cargos municipales, estarían buscando tender puentes para consolidar una alianza que fortalezca la unidad partidaria.
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
                                                <p>La ex presidenta Cristina Fernández de Kirchner se reunió en el Instituto Patria con Andrés Watson, Julio Pereyra y Carlos Kunkel para analizar la situación política del país y el futuro del peronismo, a pocos días de la definición de las internas del PJ. Durante el encuentro, se mencionó que el gobernador Ricardo Quintela no habría atendido un llamado de Cristina, y se espera que en los próximos días Axel Kicillof haga público su apoyo a la candidatura de Fernández de Kirchner, lo que sería clave para movilizar un amplio sector del peronismo.
                                                </p>
                                                <br>
                                                <p>Entre los puntos discutidos, se destacó la reciente llamada que Cristina realizó al gobernador de La Rioja, Ricardo Quintela, quien no habría respondido. Este hecho pone de manifiesto las tensiones existentes dentro del peronismo y la urgencia de unificar posiciones en un momento crucial para el futuro del movimiento.
                                                </p>
                                                <br>
                                                <p>Por otro lado, se sugiere que Axel Kicillof, actual gobernador de la provincia de Buenos Aires, podría brindar su apoyo a la candidatura de Cristina, lo cual resultaría fundamental, dado que Kicillof cuenta con una base sólida que podría movilizar a un amplio sector del peronismo. Se estima que hay figuras que, aunque no pertenecen a La Cámpora ni son intendentes, estarían trabajando para acercar posiciones y crear un frente unido.
                                                </p>
                                                <br>
                                                <p>A medida que se acercan las internas, se vislumbran dos posibles listas que podrían presentarse en la contienda. La reunión en el Instituto Patria pone de relieve la necesidad de diálogo y cohesión entre los líderes peronistas. Cristina Fernández de Kirchner continúa buscando establecer vínculos y fortalecer alianzas en un panorama político que se vuelve cada vez más desafiante.</p>
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
