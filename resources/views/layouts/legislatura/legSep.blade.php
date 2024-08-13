<x-app-layout>
    <div class="container ">


        <div class="mt-10"></div>

        @if ($tituloSep == 'Legislatura-Noticia-Completa-leg1')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">El Cuerpo Legislativo reconoció a Diego Alberto
                                                Barovero</a>
                                        </h2>
                                        <p>Gracias a un proyecto presentado por el legislador Diego Weck, la
                                            Legislatura destacó la labor y la trayectoria del abogado, historiador e
                                            histórico dirigente de la Unión Cívica Radical.</p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/leg/leg_diego.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">



                                                <p>El Cuerpo Legislativo de la Ciudad declaró como Personalidad
                                                    Destacada de la Cultura al abogado e historiador<strong> Diego
                                                        Alberto
                                                        Barovero.</strong> El acto se llevó a cabo en el salón
                                                    Presidente Alfonsín y
                                                    contó con la presencia del diputado y coautor del proyecto <strong>
                                                        Manuel Valdés </strong> y el homenajeado</p>
                                                <br>


                                                <p>En el comienzo de las alocuciones, Valdés destacó que “es un honor”
                                                    estar presente y rememoró cómo conoció a Barovero: “<strong> mi
                                                        docente
                                                        en el secundario, fue mi profesor de derecho y gracias a él
                                                        conocí
                                                        las primeras nociones de lo que significa un Estado moderno, una
                                                        república y la división de poderes </strong>”. Y sumó: “Es un
                                                    apasionado por
                                                    la transmisión del conocimiento y la historia de las ideas. Personas
                                                    como Diego enriquecen y hacen de nuestro sistema de partidos y
                                                    convivencia algo mucho mejor”. Por su parte, Barovero concluyó:
                                                    “<strong> Me
                                                        siento profundamente conmovido y agradecido </strong>”. A la vez
                                                    que agradeció
                                                    a los diputados Weck y Valdés. </p>


                                                <p>Se desempeñó como colaborador en instituciones como la Junta
                                                    Histórica de La Boca, que promueve, recupera y da a conocer a los
                                                    vecinos e instituciones del barrio, la historia de La Boca, su
                                                    herencia, tradiciones, y patrimonio. A su vez es Presidente del
                                                    Consejo Directivo del Instituto Nacional Yrigoyeneano, creado con el
                                                    objeto de estudiar y difundir la vida y obra de Hipólito Irigoyen.
                                                </p>
                                                <br>
                                                <p>Como escritor e historiador publicó varios trabajos y notas en
                                                    diversas publicaciones dedicadas a la historia, como las revistas
                                                    “ <strong>Todo Es Historia” e “Historias de la Ciudad </strong>”.
                                                    También es columnista
                                                    y colaborador en periódicos de circulación nacional como La Prensa,
                                                    Clarín, Ámbito Financiero, Tiempo Argentino y en diarios locales
                                                    como Democracia (Junín), Acción (Arrecifes), El Argentino (Capitán
                                                    Sarmiento), La Reforma (La Pampa), entre otros. </p>
                                                <br>

                                                <p>En su militancia política Diego Barovero es reconocido por ser un
                                                    histórico dirigente de la Unión Cívica Radical, originario del
                                                    barrio de La Boca. Afiliado a la UCR desde hace más de treinta años
                                                    ocupó diversos cargos partidarios. Entre ellos fue vicepresidente 1º
                                                    de la Honorable Convención de la UCR de la Ciudad de Buenos Aires,
                                                    vicepresidente del Comité de la Comuna 4 y dos veces delegado a la
                                                    Honorable Convención Nacional por la Ciudad de Buenos Aires. En 2005
                                                    fue candidato a diputado nacional por la Ciudad de Buenos Aires.</p>
                                                <br>

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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg2')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Dillom es nueva Personalidad Destacada de la Ciudad</a>
                                        </h2>
                                        <p>Gracias a un proyecto presentado por el legislador Claudio Morresi, el
                                            artista fue reconocido por su irrupción en el escenario artístico porteño,
                                            nacional e internacional.</p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/leg/leg_dillon.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">



                                                <p>El Cuerpo Legislativo de la Ciudad declaró como Personalidad
                                                    Destacada de la Cultura al artista Dylan León Masa, conocido
                                                    popularmente como Dillom. El acto se llevó a cabo en el Salón Dorado
                                                    y contó con la presencia del legislador y autor del proyecto Claudio
                                                    Morresi, el homenajeado y el director de Bohemian Groove Ignacio
                                                    Caiella.</p>
                                                <br>


                                                <p><strong>“Qué bueno que la cultura popular ingrese a esta majestuosa
                                                        sala,
                                                        donde se reconocen a los artistas de otros niveles culturales”,
                                                        comentó Morresi en el comienzo de las alocuciones. Luego
                                                        puntualizó
                                                        en que la cultura “nace de los barrios” y sumó: “Él la peleó
                                                        muchísimo con su grupo de amigos y logró lo que logró. Hoy es un
                                                        embajador de la Argentina </strong>”.

                                                    Luego, Dillom agradeció al legislador por el reconocimiento y
                                                    rememoró: “ <strong> de chico mi sueño fue hacer música, pero no
                                                        para
                                                        hacerme millonario o famoso. Al admirar bandas como Los Ramones
                                                        o
                                                        bandas tan moldeadoras de culturas y sociedades, siempre miré el
                                                        poder transcender y marcar un antes y un después e inspirar
                                                        gente”</strong>.
                                                    Y celebró la música y el arte.
                                                </p>


                                                <p>Dylan León “Dillom” Masa es un compositor y cantante que encontró en
                                                    la cruda crítica social un ámbito de creación artística. Esa
                                                    búsqueda lo llevó a grabar sus temas en la Villa 31 - Barrio Padre
                                                    Múgica, donde dio sus primeros pasos, para luego continuar su
                                                    camino. Siempre tuvo en claro que la autogestión era el único camino
                                                    en el cual quería desarrollarse.
                                                </p>
                                                <br>
                                                <p>Actualmente es uno de los máximos exponentes del trap. Con tan solo
                                                    21 años y una trayectoria que se remonta apenas al 2018, es uno de
                                                    los músicos más vistos en la plataforma Youtube, en donde
                                                    contemporáneamente los artistas alternativos se dan a conocer en una
                                                    crítica de hecho a las empresas discográficas monopólicas. La
                                                    historia personal de Dylan es la de tantos jóvenes argentinos y
                                                    argentinas que a pesar de las complejidades sociales de un tiempo
                                                    difícil, igualmente pueden manifestar un arte nuevo, juvenil,
                                                    callejero y expresivo de las nuevas demandas de la sociedad. </p>
                                                <br>


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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg3')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Es de interés el libro “Dibujos Urgentes. Testimoniar en
                                                juicios de lesa humanidad”</a>
                                        </h2>
                                        <p>Por medio de un proyecto impulsado por los diputados Juan Pablo O’Dezaille y
                                            Victoria Montenegro, se reconoció al trabajo visual de las artistas visuales
                                            Paula Doberti y Eugenia Bekeris.</p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover object-center"
                                                src="{{ asset('../img/leg/leg_vicky.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">



                                                <p>Esta tarde, los legisladores de la Ciudad declararon de Interés para
                                                    la Comunicación Social y los Derechos Humanos al libro “Dibujos
                                                    Urgentes. Testimoniar en juicios de lesa humanidad”, de las artisas
                                                    Paula Doberti y Eugenia Bekeris y editado por Monadanomada. El acto
                                                    se llevó a cabo en el salón Presidente Alfonsín y tuvo la presencia
                                                    de los diputados y autores del proyecto Pablo O’Dezaille y Victoria
                                                    Montenegro, además de las artistas mencionadas.</p>
                                                <br>


                                                <p>“Hoy a 40 años de la democracia, que a veces está golpeada y tiene
                                                    sus deudas pendientes nos parece importante traer este registro. No
                                                    es solo la memoria, es algo vigente y activo”, destacó O’Dezaille, y
                                                    leyó un párrafo del libro en público. En tanto que Montenegro
                                                    subrayó: “Es importantísimo esta declaración, que es el
                                                    pronunciamiento de la Ciudad de Buenos Aires, reconociendo este
                                                    trabajo”.
                                                </p>
                                                <br>

                                                <p>Finalmente, Doberti rememoró: “El libro resume una cantidad de
                                                    dibujos, son cientos y cientos. Estuvimos dos años decidiendo y
                                                    definiendo, y dándonos cuenta que también necesitábamos palabras que
                                                    reflexionaran junto con nosotras. Dibujar en los juicios no es
                                                    fácil”. Y Bekeris concluyó en que construyeron “una forma de ver los
                                                    juicios como testigos de los testigos” y que abordaron las voces de
                                                    las víctimas.
                                                </p>
                                                <br>

                                                <p>En el marco de los 40 años de democracia, el trabajo de Doberti y
                                                    Bekeris comienza en 2010, cuando el tribunal Oral Federal N° 5 de la
                                                    Ciudad Autónoma de Buenos Aires prohibió que las cámaras registrasen
                                                    los juicios a genocidas responsables de crímenes de tortura,
                                                    asesinatos y desaparición de personas por la dictadura
                                                    cívico-militar. La publicación es fruto de horas de trazos, que
                                                    constituyeron en un documento que puede palparse como un conjunto de
                                                    piezas artísticas. Y se transformó en un testimonio de una época.
                                                </p>
                                                <br>

                                                <p>Así estos dibujos textuales, son una contribución a la construcción
                                                    de la memoria cultural como símbolo social de preservación y
                                                    legitimador de la cultura identitaria. “Dibujos Urgentes” son un
                                                    fenómeno inherente a la esencia humana de preservar el patrimonio
                                                    tangible e intangible como registro para las posteriores
                                                    generaciones. Y en este marco abarca el arte político, utilizando el
                                                    dibujo como soporte.</p>
                                                <br>

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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg4')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">El Cuerpo Legislativo entregó nuevas distinciones</a>
                                        </h2>
                                        <p>A lo largo de una nueva jornada, los legisladores de la Ciudad declararon
                                            como Personalidad Destacada a la cantante lírica Lucia Boero y de interés a
                                            la festividad “Fogatas de San Juan” y a la obra teatral “Dejame tu CV que te
                                            llamamos".</p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover object-center"
                                                src="{{ asset('../img/leg/leg_lucia.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El Cuerpo Legislativo de la Ciudad declaró de Interés Cultural a la
                                                    festividad de San Juan Bautista “Fogatas de San Juan” y a la obra
                                                    teatral “Dejame tu CV que te llamamos” y ambos actos se llevaron a
                                                    cabo en el Salón Montevideo.
                                                    El primero tuvo la presencia de la diputada y autora del proyecto
                                                    Claudia Neira, el coordinador de Cooperación en Producción y
                                                    Aprendizaje (CooPA) Daniel Quiroz, la coordinadora del proyecto
                                                    Adolescentes Bajo Flores Lorena Fernández y Leonardo David Demonty,
                                                    integrante de la Asociación Civil Ezequiel Demonty.
                                                </p>
                                                <br>


                                                <p>En el inicio de las alocuciones y después de dar la bienvenida, Neira
                                                    destacó la importancia de realizar este homenaje “a esta festividad
                                                    popular”. También agregó: “Esto implica poner de relieve algo que
                                                    tiene su cuota de espíritu místico, de poner los anhelos
                                                    comunitarios en común, los sueños, los deseos y de apostar al
                                                    futuro, que hace falta en los barrios”. Y puntualizó: “Estas
                                                    comunidades construyen ese futuro a diario”.
                                                </p>
                                                <br>

                                                <p>Luego, Quiroz remarcó: “Acá siempre soñamos con un trabajo colectivo
                                                    y con un barrio mejor, donde los chicos y las chicas sean
                                                    protagonistas y sujetos de derecho”. Y calificó a la fogata como el
                                                    lugar de encuentro “para que el barrio siga festejando la cultura
                                                    popular” y para continuar sumando gente.
                                                </p>
                                                <br>

                                                <p>El día 24 de junio se celebra la festividad de San Juan Bautista, en
                                                    el Bajo Flores. En la víspera de la festividad, o en esa misma
                                                    fecha, es costumbre encender fogatas, en una ceremonia cuyo origen
                                                    es muy remoto. Era una celebración ancestral de origen pagano que
                                                    coincide con el solsticio de verano en el hemisferio norte, la noche
                                                    más corta del año y la más larga en el hemisferio sur.
                                                    Según la tradición, en las fogatas encendidas las penas y miserias
                                                    quedan simbólicamente purificadas al calor del fuego a la vez que
                                                    expresa el anhelo de trascendencia para los hombres.

                                                </p>
                                                <br>

                                                <p>Luego se llevó a cabo el acto por la obra teatral “Dejame tu CV que
                                                    te llamamos”, que contó con las palabras del legislador mandato
                                                    cumplido y coautor de la iniciativa Omar Abboud, la actriz Eugenia
                                                    Aparicio y la directora de la obra Gisella Amarillo.</p>
                                                <br>

                                                <p>“En la medida de que uno tiende con proyectos de esta naturaleza a
                                                    visibilizar, mejoramos los niveles de comprensión de aquella cosa de
                                                    la cual estamos hablando”, argumentó Abboud. También distinguió:
                                                    “Ser accesible no es solo bajar los cordones de la vereda. También
                                                    es abrir la cabeza para comprender la naturaleza, las posibilidades
                                                    del otro y trabajar para una sociedad que explote esas propiedades
                                                    en el mejor de los sentidos”. Y determinó que la distinción es un
                                                    punto de partida para trabajar y sobreponer niveles de igualdad y de
                                                    oportunidades.

                                                    A su turno, Aparicio estableció que hicieron un aporte a la cultura
                                                    de la ciudad y que los llena de orgullo. En la misma línea, Amarillo
                                                    finalizó: “Es una tarde muy movilizante para nosotros, gracias a la
                                                    Legislatura por acompañarnos con tanto cariño. Hoy estamos acá
                                                    porque fuimos mirados como artistas que integran un proyecto
                                                    colectivo que transforma la cultura”.
                                                    La obra cuenta a través de diferentes escenas, intervenciones
                                                    coreografías y relatos historias sobre el trabajo y nos invita a
                                                    preguntarnos si el trabajo puede dignificarnos. Con humor describe
                                                    situaciones de la vida cotidiana e intenta poner en evidencia
                                                    aspectos tales como el poder, la desigualdad social; la alienación
                                                    de los sujetos, el incumplimiento de los derechos, la xenofobia, la
                                                    discriminación, el autoritarismo, la opresión, etc.
                                                </p>
                                                <br>

                                                <p>Una obra de suma actualidad y compromiso social que surge de
                                                    creaciones colectivas relacionadas con las problemáticas sociales.
                                                    Asimismo, esta obra promueve y practica el teatro inclusivo, ya que
                                                    parte del elenco está constituido por personas con discapacidad.</p>
                                                <br>

                                                <p> <strong> Personalidad Destacada </strong></p>
                                                <br>

                                                <p>Por otro lado, los diputados de la Ciudad declararon como
                                                    Personalidad Destacada a la cantante lírica, Lucía Boero. El acto se
                                                    desarrolló en el Salón Dorado y contó con la legisladora y autora
                                                    del proyecto Carolina Estebarena, la ex directora del Instituto
                                                    Superior de Arte del Teatro Colón Ana Massone, el cantante lírico
                                                    Fabián Veloz y la homenajeada.</p>
                                                <br>

                                                <p>“Es un honor haber promovido esta declaración”, estableció la
                                                    diputada y explicó el trayecto parlamentario de la declaración y que
                                                    tuvo el acompañamiento de la amplia mayoría del bloque legislativo.
                                                    “Esta distinción es para quienes la siguen y ojalá despierte muchas
                                                    vocaciones, a que haya más cantantes que elijan la carrera y se
                                                    embarquen en eso. Lucía es un modelo y una gigante”.</p>
                                                <br>

                                                <p>Por su parte, Boero confesó estar profundamente agradecida con
                                                    Estebarena, Massone y Veloz. “Es un día que no me lo esperaba, jamás
                                                    pensé que llegaría porque siempre pienso hacia adelante. No hay que
                                                    perder la esperanza y la ilusión y hay que tener fe y mucha
                                                    constancia”, comentó.</p>
                                                <br>

                                                <p>A sus 23 años, Boero ingresó al Teatro Colón luego de prepararse para
                                                    la audición de ingreso con el maestro de esa institución, Manfredo
                                                    Argento.Una vez dentro del prestigioso establecimiento, tuvo
                                                    distintos maestros que dejaron huella en Lucía, entre ellos podemos
                                                    mencionar a Hina Spani, Teresa Serantes, Enrique Sivieri, Roberto
                                                    Kinski y Carlos Malloyer. Gracias a ellos, muy pronto su carrera
                                                    comenzaría a despegar, ya que, siendo aún estudiante, fue convocada
                                                    para interpretar pequeños roles en la temporada de ópera junto a
                                                    grandes cantantes como Victoria de los Ángeles, Birgit Nilsson y
                                                    Teresa Berganza.</p>
                                                <br>


                                                <p>Entre sus actuaciones más descollantes, se encuentran sus
                                                    interpretaciones del rol de Hansel en la ópera “Hansel y Gretel”, la
                                                    cual alcanzó notable difusión en numerosas presentaciones de
                                                    carácter popular con la finalidad de atraer y formar nuevo público,
                                                    y también tuvo un rol protagónico en la ópera “Carmen”, con la cual
                                                    se presentó en numerosas ciudades del país.</p>
                                                <br>


                                                <p>Además, es docente desde hace 60 años. En su larga trayectoria como
                                                    profesora, brindó sus enseñanzas en el Instituto Superior de Arte
                                                    del Teatro Colón (ISATC) y en distintos institutos del interior del
                                                    país como Mar del Plata, Corrientes y Salta. Al frente del ISATC
                                                    participó activamente del ciclo “Del Colón al país”, a través del
                                                    cual buscó difundir la lírica por toda Argentina.</p>
                                                <br>


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
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg5')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Distinción a “El amor después del amor</a>
                                        </h2>
                                        <p>La serie sobre la carrera musical de Rodolfo “Fito” Páez fue declarada de
                                            Interés para la Ciudad.</p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_fito.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La serie <strong>“El amor después del amor”</strong> obtuvo este
                                                    miércoles la
                                                    declaración de Interés en el ámbito de la Cultura por el proyecto
                                                    presentado por el diputado Manuel Socías (FdT). El Salón Dorado fue
                                                    la sede donde se reconoció al equipo que impulsó la producción y
                                                    desarrollo de la filmación.</p>
                                                <br>


                                                <p>Rodolfo “Fito” Páez permitió el desarrollo de su serie biográfica en
                                                    la que se “narra la apasionada vida y carrera del icónico músico
                                                    argentino”, definieron desde la plataforma Netflix, en la que se
                                                    pueden ver los ocho episodios de la única temporada.</p>
                                                <br>

                                                <p><strong>“En el contexto de los 40 años de la democracia
                                                        ininterrumpida en
                                                        Argentina, la serie narra de una forma muy conmovedora un
                                                        paisaje de
                                                        época donde la música, la cultura, la política y las calles
                                                        transitaban la asfixia, la violencia y la persecución de la
                                                        dictadura pero también el reverdecer de la apertura democrática.
                                                        El
                                                        rock nacional es como una suerte de banda sonora de esos años,
                                                        de
                                                        nuestra democracia”</strong>, marcó el legislador autor del
                                                    proyecto.</p>
                                                <br>

                                                <p>Además, Socías señaló: <strong>“En la serie está planteada la idea de
                                                        una
                                                        relación dialéctica entre el contexto y el arte. El rock está
                                                        como
                                                        un vehículo para la liberación en esos años. Más que un
                                                        reconocimiento, es un agradecimiento por haber hecho eso. Me
                                                        parece
                                                        fundamental que recorramos nuestra historia con relatos de esta
                                                        calidad”</strong>. </p>
                                                <br>

                                                <p>Juan Pablo Kolodziej, como uno de los principales productores de la
                                                    obra, expuso en sus agradecimientos: <strong>“Este es uno de los
                                                        ejemplos en
                                                        los que se traslada que la cultura está por encima de todo. El
                                                        cine
                                                        y la televisión evangelizan cultura. Es muy importante poder
                                                        seguir
                                                        promoviendo esto”</strong>.</p>
                                                <br>


                                                <br>


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
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg6')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Pablo Pineau como nueva personalidad destacada</a>
                                        </h2>
                                        <p>A través de un proyecto presentado por la diputada María Bielli, la
                                            Legislatura reconoció su trayectoria en la formación de docentes,
                                            becarios/as e
                                            investigadores/as y por sus aportes a la producción en el campo de las
                                            ciencias de la
                                            educación.</p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_pinauu.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Los legisladores declararon al doctor<strong> Pablo Pineau</strong>
                                                    como<strong> Personalidad
                                                        Destacada de la Ciudad en el ámbito de la Educación.</strong> El
                                                    acto de
                                                    desarrolló esta tarde en el Salón Montevideo y contó con la
                                                    presencia de la legisladora y autora del proyecto,<strong> María
                                                        Bielli</strong> y el
                                                    homenajeado.</p>
                                                <br>


                                                <p>“Es un orgullo tenerlos a todos acá, este reconocimiento habla de una
                                                    persona que requiere de multiplicidad de voces para poder ser
                                                    abordado de forma integral”, destacó la<strong> diputada
                                                        Bielli</strong>, en el
                                                    inicio de las alocuciones. Luego recordó cómo conoció al
                                                    homenajeado. Y enfatizó: “En esta Legislatura, que estemos
                                                    entregando este reconocimiento a este gran maestro es un pequeño
                                                    acto de justicia”.</p>
                                                <br>

                                                <p>Por su parte,<strong> Pineau</strong> agradeció a los presentes y
                                                    concluyó: “Un
                                                    maestro es alguien que decidió encender en otros la chispa que le
                                                    encendieron cuando niños, devolver el bien recibido
                                                    multiplicándolo”. </p>
                                                <br>

                                                <p>Pablo Pineau es maestro, Profesor de Enseñanza Primaria por la
                                                    Escuela Normal Superior N° 2 “Mariano Acosta”, Licenciado en
                                                    Ciencias de la Educación por la Universidad de Buenos Aires, Máster
                                                    en Sociología de la Facultad Latinoamericana de Ciencias Sociales
                                                    (FLACSO) y Doctor de la Universidad de Buenos Aires, área Ciencias
                                                    de la Educación.</p>
                                                <br>

                                                <p>Además posee una amplia experiencia en la formación de becarios e
                                                    investigadores, en el campo de la historia de la educación. Y a
                                                    través de la dirección y codirección de tesis, becas estímulo y el
                                                    trabajo docente en posgrado.</p>
                                                <br>
                                                <p>A su vez contribuyó a la producción en historia de la educación,
                                                    mediante la formación, inscripción y dirección de proyectos de
                                                    investigación. En los que realizó importantes aportes para la
                                                    formación académica, en las carreras de educación y en la formación
                                                    docente.</p>

                                                <br>

                                                <br>
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
                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}" alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg7')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">El cuerpo Legislativo reconoció al Director Santiago
                                                Mitre</a>
                                        </h2>
                                        <p>El cineasta fue declarado Personalidad Destacada, gracias a un proyecto
                                            presentado por el diputado Roy Cortina.</p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_mitre.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Los diputados declararon al director de cine, guionista y
                                                    actor,<strong>
                                                        Santiago Mitre</strong>, como<strong> Personalidad Destacada en
                                                        el ámbito de la
                                                        Cultura de la Ciudad</strong>. El acto se desarrolló esta tarde
                                                    en el salón
                                                    Presidente Alfonsín y contó con la presencia del diputado y autor de
                                                    la iniciativa, Roy Cortina, y el homenajeado.</p>
                                                <br>


                                                <p>Luego de dar la bienvenida, Cortina explicó el trayecto
                                                    parlamentario: “Santiago obtuvo más del 80% de los votos, cosa que
                                                    es muy meritoria en la ecléctica y enrevesada democracia argentina.
                                                    Él inspira inmediato afecto e inspiración”. Además resaltó que su
                                                    cine nos interpela, nos hace reflexionar y nos conmueve. “Él se ha
                                                    consolidado y tiene una relevancia muy significativa en el cine
                                                    argentino”, marcó.</p>
                                                <br>

                                                <p>A su turno, Mitre agradeció a todos los presentes, amigos y familia:
                                                    “Me siento muy acompañado”. Luego destacó la respuesta de los
                                                    jóvenes para con la película Argentina, 1985: “El cine argentino es
                                                    algo que se ve desde las escuelas. El cine argentino construye
                                                    memoria, es un arte, un lenguaje y un entretenimiento”. Y señaló que
                                                    el cine argentino es reconocido en todo el mundo.</p>
                                                <br>

                                                <p>Su estilo narrativo es único, y se construye a partir de la
                                                    fascinación que tiene por pensar la película como un gran guión. Su
                                                    primera producción se realizó el año 2004 junto a Alejandro Fadel,
                                                    Martín Mauregui y Juan Schnitman, El amor - primera parte,
                                                    presentada en el BAFICI y la Settimana Internazionale della Critica
                                                    de Venecia. </p>
                                                <br>

                                                <p>Su último trabajo, “Argentina, 1985” fue sin dudas una de las
                                                    películas más entrañables y más vistas del año 2022. Este filme está
                                                    situado durante la década de 1980, cuando un grupo de abogados
                                                    investiga y lleva a juicio a los responsables de la dictadura
                                                    cívico-militar argentina.</p>
                                                <br>
                                                <p>El relato plasmado con su estilo personal, toma y reflexiona acerca
                                                    de un hecho que marcó nuestra historia moderna, como es el Juicio a
                                                    las Juntas Militares. En el mismo, a través de la investigación y un
                                                    trabajo meticuloso de escritura, logra concebir una obra perfecta,
                                                    que representa no solo la historia sino gran parte del sentimiento
                                                    de un país que empezaba poco a poco a salir de su periodo más
                                                    oscuro.</p>

                                                <br>
                                                <br>

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
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg8')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">El cuerpo Legislativo reconoció al Director Santiago
                                                Mitre</a>
                                        </h2>
                                        <p>El cineasta fue declarado Personalidad Destacada, gracias a un proyecto
                                            presentado por el diputado Roy Cortina.</p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_mitre.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Los diputados declararon al director de cine, guionista y
                                                    actor,<strong>
                                                        Santiago Mitre</strong>, como<strong> Personalidad Destacada en
                                                        el ámbito de la
                                                        Cultura de la Ciudad</strong>. El acto se desarrolló esta tarde
                                                    en el salón
                                                    Presidente Alfonsín y contó con la presencia del diputado y autor de
                                                    la iniciativa, Roy Cortina, y el homenajeado.</p>
                                                <br>


                                                <p>Luego de dar la bienvenida, Cortina explicó el trayecto
                                                    parlamentario: “Santiago obtuvo más del 80% de los votos, cosa que
                                                    es muy meritoria en la ecléctica y enrevesada democracia argentina.
                                                    Él inspira inmediato afecto e inspiración”. Además resaltó que su
                                                    cine nos interpela, nos hace reflexionar y nos conmueve. “Él se ha
                                                    consolidado y tiene una relevancia muy significativa en el cine
                                                    argentino”, marcó.</p>
                                                <br>

                                                <p>A su turno, Mitre agradeció a todos los presentes, amigos y familia:
                                                    “Me siento muy acompañado”. Luego destacó la respuesta de los
                                                    jóvenes para con la película Argentina, 1985: “El cine argentino es
                                                    algo que se ve desde las escuelas. El cine argentino construye
                                                    memoria, es un arte, un lenguaje y un entretenimiento”. Y señaló que
                                                    el cine argentino es reconocido en todo el mundo.</p>
                                                <br>

                                                <p>Su estilo narrativo es único, y se construye a partir de la
                                                    fascinación que tiene por pensar la película como un gran guión. Su
                                                    primera producción se realizó el año 2004 junto a Alejandro Fadel,
                                                    Martín Mauregui y Juan Schnitman, El amor - primera parte,
                                                    presentada en el BAFICI y la Settimana Internazionale della Critica
                                                    de Venecia. </p>
                                                <br>

                                                <p>Su último trabajo, “Argentina, 1985” fue sin dudas una de las
                                                    películas más entrañables y más vistas del año 2022. Este filme está
                                                    situado durante la década de 1980, cuando un grupo de abogados
                                                    investiga y lleva a juicio a los responsables de la dictadura
                                                    cívico-militar argentina.</p>
                                                <br>
                                                <p>El relato plasmado con su estilo personal, toma y reflexiona acerca
                                                    de un hecho que marcó nuestra historia moderna, como es el Juicio a
                                                    las Juntas Militares. En el mismo, a través de la investigación y un
                                                    trabajo meticuloso de escritura, logra concebir una obra perfecta,
                                                    que representa no solo la historia sino gran parte del sentimiento
                                                    de un país que empezaba poco a poco a salir de su periodo más
                                                    oscuro.</p>

                                                <br>
                                                <br>

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
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg9')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MATÍAS NAPP ES NUEVA PERSONALIDAD DESTACADA</a>
                                        </h2>
                                        <p>El Cuerpo Legislativo reconoció la trayectoria del bailarín y coreógrafo, a
                                            través de un proyecto presentado por el legislador Roy Cortina.</p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_napp.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><strong> Los diputados de la Ciudad declararon al bailarín y
                                                        coreógrafo,
                                                        Matías Napp, como Personalidad Destacada en el ámbito de la
                                                        Cultura.</strong>
                                                    El acto se desarrolló en el<strong> Salón Dorado</strong> y contó
                                                    con la
                                                    presencia del<strong> diputado y autor de la iniciativa, Roy
                                                        Cortina, el
                                                        homenajeado y familiares y amigos suyos.</strong></p>
                                                <br>


                                                <p>Al inicio de los discursos y después de dar la bienvenida al Palacio
                                                    Legislativo, Cortina destacó a Napp como la personificación de toda
                                                    una generación de artistas que abrazan a la música como su lenguaje
                                                    y que transmiten emociones a través del baile.<strong> “Matías nació
                                                        en esta
                                                        ciudad y con cada uno de sus trabajos da vida y movimiento a las
                                                        calles de Buenos Aires”</strong>, remarcó el legislador.</p>
                                                <br>

                                                <p>Luego, el artista agradeció a Cortina por el proyecto:<strong> “Nunca
                                                        pensé
                                                        que me podría llegar a pasar esto y todavía me cuesta
                                                        creerlo”</strong>. A su
                                                    vez agregó:<strong> “Me interesa educar, de tener valores, respetar
                                                        a la
                                                        persona, de motivarla y tener buena energía”</strong>. Y resaltó
                                                    su amor por
                                                    la danza.</p>
                                                <br>

                                                <p>Matías Napp es uno de los bailarines, docente y coreógrafo más
                                                    reconocidos del medio artístico en la actualidad. Con una carrera de
                                                    más de quince años en la escena y una sólida formación, se ha
                                                    convertido en un referente para muchos jóvenes argentinos que desean
                                                    dedicarse a la danza como profesión y es, a su vez, quien los
                                                    convoca para la realización de proyectos y trabajos coreográficos.
                                                </p>
                                                <br>
                                                <p>El artista comenzó a trabajar como bailarín en diferentes videoclips
                                                    musicales, shows de artistas y televisión en programas como “Casi
                                                    Ángeles”, “Patito Feo”, y en la película de “High School Musical”. A
                                                    su vez amplió su experiencia en el mundo televisivo trabajando como
                                                    coreógrafo de Talento FOX, de las series “Días de Gallos” de HBO,
                                                    “GO” de Netflix y “Kally Mashup” de Nickelodeon.</p>
                                                <br>
                                                <p>Y tomó gran popularidad al ser coach ganador del segmento “Bailando
                                                    por un sueño” en el ciclo televisivo Showmatch en su edición 2015,
                                                    además de resultar finalista del certamen en otras cuatro ocasiones.
                                                </p>

                                                <br>
                                                <br>

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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg10')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL MÚSICO MIGUEL DE CARO ES NUEVA PERSONALIDAD
                                                DESTACADA</a>
                                        </h2>
                                        <p>El reconocido saxofonista ligado al tango fue reconocido por la Legislatura,
                                            por medio de un proyecto presentado por el Diputado Matías Barroetaveña.</p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_musico.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><strong> Los legisladores de la Ciudad declararon al compositor,
                                                        arreglador y saxofonista, Miguel De Caro, como Personalidad
                                                        Destacada en el ámbito de la Cultura.</strong> Con la presencia
                                                    del<strong>
                                                        diputado y autor del proyecto, Matías Barroetaveña, y del
                                                        periodista y presidente de la Academia Nacional del Tango,
                                                        Gabriel Soria</strong>, se llevó a cabo en el<strong> salón San
                                                        Martín.</strong> Y donde
                                                    además se realizó un número musical.</strong></p>
                                                <br>


                                                <p>En el comienzo de las alocuciones, el diputado contó el proceso
                                                    legislativo de la iniciativa y resaltó que contó con la unanimidad
                                                    de todo el cuerpo. “Es para mí una enorme satisfacción, pero es
                                                    bueno ser representante, un vehículo para que el pueblo de la Ciudad
                                                    de Buenos Aires reconozca en este acto a Miguel De Caro como
                                                    Personalidad Destacada de la Cultura”, enfatizó Barroetaveña.</p>
                                                <br>

                                                <p>Por su parte, De Caro agradeció a la Legislatura y concluyó: “El
                                                    reconocimiento también es a partir de toda una ruta dentro de lo que
                                                    es la música, tanto de la ciudad como toda la música que puedo
                                                    expresar con mi instrumento”.</p>
                                                <br>

                                                <p>Miguel De Caro, es uno de los músicos más destacados de nuestra
                                                    historia y se convirtió en un vanguardista, que hace escuela en la
                                                    ejecución del género con un instrumento inusual. Es audaz en sus
                                                    arreglos, juega con algunos elementos de otros géneros. Pero lo hace
                                                    con equilibrio y en forma delicada, sin perder la esencia distintiva
                                                    del tango.

                                                </p>
                                                <br>


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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg11')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ARIEL ARDIT ES NUEVA PERSONALIDAD DESTACADA
                                                DE LA CIUDAD</a>
                                        </h2>
                                        <p>El Cuerpo Legislativo reconoció al cantor de tango, gracias a un proyecto
                                            presentado por el diputado, Javier Andrade.</p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_ardit.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><strong> La Legislatura de la Ciudad, a través de sus diputados,
                                                        declaró como
                                                        Personalidad Destacada en el ámbito de la Cultura al cantor de
                                                        tango,
                                                        Ariel Ardit.</strong> El acto se realizó dentro
                                                    del<strong> Salón Dorado</strong> del Palacio Legislativo
                                                    y contó con<strong> la presencia del legislador y autor del proyecto
                                                        Javier
                                                        Andrade, el homenajeado, los periodistas Horacio Pagani y Walter
                                                        Nelson,
                                                        el ex futbolista Carlos Babington y demás personalidades del
                                                        tango.
                                                        Además se realizaron varios números musicales.</strong></p>
                                                <br>


                                                <p>En tanto que Ardit sintetizó: “Acá me hice cantor de tango y donde
                                                    nacieron mis
                                                    hijas y hoy estoy con los que quiero estar. Ustedes son esta vida
                                                    que tengo en
                                                    Buenos Aires y no tengo nada más que decir, solo seguir cantando”.
                                                </p>
                                                <br>

                                                <p>Luego, Nelson contó: “Se me entremezclan un montón de sentimientos,
                                                    el
                                                    destino nos cruzó de casualidad. El tango estuvo en mi sangre desde
                                                    chico, al
                                                    igual que el fútbol y el boxeo”. Mientras que Babington categorizó:
                                                    “Él es un
                                                    crack, Ariel tiene esa mezcla de gusto, de voz, de carisma, de
                                                    escenario que lo
                                                    hace ser el Gardel del siglo XXI”.</p>
                                                <br>

                                                <p>Finalmente Pagani recordó cómo conoció a Ardit por una recomendación
                                                    y
                                                    cuando lo vio por primera vez, en un show en la Asociación de
                                                    Vendedores de
                                                    Diarios y Revistas. “Ariel es un embajador del tango en el mundo, él
                                                    es el
                                                    Carlos Gardel del siglo XXI”, enfatizó el periodista. Y determinó:
                                                    “Es difícil

                                                    establecer vínculos de amistad cuando se es grande. Pero además de
                                                    cantar,
                                                    me di cuenta que este muchacho es buena gente y un padre increíble”.
                                                </p>
                                                <br>
                                                <p>Ariel Ardit, nacido en Córdoba en mayo del 1974 y criado en el
                                                    epicentro de la
                                                    Ciudad de Buenos Aires desde sus ocho años de edad, es hoy en día
                                                    una de
                                                    las caras principales del tango porteño. Con una trayectoria llena
                                                    de logros y
                                                    premios a nivel nacional e internacional, Ariel Ardit sabe como
                                                    representar a
                                                    uno de los grandes emblemas de nuestra cultura. El tango es una
                                                    identidad
                                                    que corre por la sangre de todos los argentinos y argentinas, es un
                                                    ícono de la
                                                    ciudad, testigo y protagonista de hechos que nos marcaron como
                                                    sociedad.</p>
                                                <br>


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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg12')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">El documental “Ojos que no Ven…Movimiento Espartaco” es
                                                de Interés</a>
                                        </h2>
                                        <p><i>La obra audiovisual de la cineasta Ana Caride Burgos fue reconocida por
                                                los legisladores de la ciudad y gracias a un proyecto presentado por el
                                                diputado Juan Pablo O’Dezaille.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="h-96 w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_ojos.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El Cuerpo Legislativo de la Ciudad <u>declaró de Interés para
                                                        la Cultura al documental “Ojos que no ven… Movimiento
                                                        Espartaco”</u>, de la cineasta Ana Caride Burgos, y que a su vez
                                                    es
                                                    una coproducción entre la Universidad Tres de Febrero UNTREF
                                                    MEDIA y el Colectivo Espartacas.
                                                </p>
                                                <br>


                                                <p>El acto se llevó a cabo en el Salón Dorado y<b> contó con la
                                                        presencia
                                                        del autor del proyecto y diputado Juan Pablo O’Dezaille; la
                                                        autora
                                                        del film; el Director de la Escuela Superior de Educación
                                                        Artística
                                                        de Bellas Artes Manuel Belgrano, Gerardo Cianciolo; y la
                                                        familiar y
                                                        participante, Beatriz Mollari.</b>

                                                </p>
                                                <br>

                                                <p>Luego de saludar a los presentes, O’Dezaille recomendó: “El
                                                    documental tiene una calidad estética y artística, que logra hacer
                                                    protagonista al Grupo Espartaco y sus familiares”. También destacó
                                                    que dicho grupo eligió representar a su pueblo y sus luchas. Y
                                                    rememoró: “Este grupo, con todo el éxito que tuvieron, se
                                                    autodisuelve en un acto de coherencia política cuando sienten que el
                                                    movimiento artístico argentino toman esta definición de estar en las
                                                    luchas populares. Y no quisieron ser vanguardia de la vanguardia y
                                                    decidieron manejarse desde lo colectivo”.</p>
                                                <br>

                                                <p>Finalmente Caride Burgos <u>remarcó el trabajo en equipo para llevar
                                                        adelante el documental y las dificultades que sobrepasaron para
                                                        llevarla a cabo</u>. También informó que la película llevó cinco
                                                    años de
                                                    realización y “de rescate de memoria”. Y agradeció a O’Dezaille por
                                                    acompañar el proyecto.
                                                    El documental narra la historia de Malena, que inicia una búsqueda a
                                                    través de relatos, fotos y archivos. Allí reconstruye la historia
                                                    del grupo formado por nueve integrantes, que son Ricardo Carpani,
                                                    Mario Mollari, Juan Manuel Sánchez, Carlos Sessano, Raúl Lara, Elena
                                                    Diz, Pascual Di Bianco Esperilio Bute y Franco Venturi.

                                                </p>
                                                <br>
                                                <p>Estos artistas, que tuvieron su mayor apogeo en los años 60,
                                                    entendían que su arte debería referirse a aspectos de la realidad
                                                    que los preocupaba y motivaba. Fueron pintores de una misma
                                                    generación que compartían valores sociales y afinidades ideológicas.
                                                    Por este camino, reivindicaban un arte netamente de protesta y su
                                                    función política de transformación social.
                                                    El largometraje da a conocer no solo al movimiento, sino también el
                                                    contexto político y social en el que tuvo lugar y lo que esto
                                                    significo para el grupo y sus familiares.
                                                </p>
                                                <br>


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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg13')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ES DE INTERÉS EL COLECTIVO “TANGO POR LA IDENTIDAD”</a>
                                        </h2>
                                        <p><i>El Cuerpo Legislativo destacó las actividades desarrolladas por la
                                                agrupación, a través de un proyecto presentado por el diputado, Juan
                                                Pablo O’Dezaille.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_tango.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Los legisladores de la Ciudad declararon de Interés Cultural y para
                                                    los Derechos Humanos a las actividades desarrolladas por el
                                                    colectivo “Tango por la Identidad”. El acto, que se llevó a cabo en
                                                    el Salón Dorado, contó con la presencia del diputado y autor del
                                                    proyecto, Juan Pablo O’Dezaille; la legisladora, Victoria
                                                    Montenegro; el Gestor Cultural y Artístico de Tango por la
                                                    Identidad, Jorge Firpo; el integrante de la Comisión de Trabajo por
                                                    nuestra Identidad, Silvina Atencio; y la poeta y escritora, Marta
                                                    Pizzo.
                                                </p>
                                                <br>
                                                <p>Luego de dar la bienvenida, O’Dezaille destacó: “El tango es parte de
                                                    nuestra identidad, de los argentinos, de los porteños, y de la
                                                    Argentina en el mundo”. Y sumó: “Que haya Tango por la Identidad es
                                                    el otro gran logro y puestos en perspectiva de esperanza, de vida,
                                                    de memoria, verdad y justicia”.</b>

                                                </p>
                                                <br>
                                                <p>Finalmente, Firpo remarcó que Tango por la Identidad nació de la
                                                    fuerte convicción de que “el tango es un instrumento muy valioso”
                                                    para la transformación social, política y personal. También que en
                                                    todos sus lenguajes deben comprometerse y trabajar con el objetivo
                                                    principal de las Abuelas de Plaza de Mayo. Y concluyó: “Somos
                                                    activistas culturales y también militantes por los derechos
                                                    humanos”.</p>
                                                <br>
                                                <p>Tango por la Identidad es una iniciativa sociocultural de músicos,
                                                    cantantes, bailarines, compositores, coreógrafos, técnicos y
                                                    productores que se inscribe dentro del marco del género tanguero.
                                                    Como expresión viva del arte urbano de esta ciudad, y que tiene como
                                                    objetivo concientizar sobre la importancia de la identidad y el
                                                    derecho a conocerla.

                                                </p>
                                                <br>
                                                <p>En este sentido, el colectivo nace por la profunda necesidad de
                                                    articular legítimos mecanismos de defensa contra la brutalidad y el
                                                    horror que significan el delito de apropiación de bebés y niños. Y
                                                    la sustitución de sus identidades de un modo organizado y
                                                    sistemático, por parte de la última dictadura cívico-militar
                                                    argentina.</p>
                                                <br>
                                                <p>El proyecto fue creado por artistas, con el fin de apoyar la labor de
                                                    la organización Abuelas de Plaza de Mayo. Quienes desde hace más de
                                                    tres décadas siguen el rastro de cuatrocientos jóvenes que aún
                                                    tienen su identidad cambiada, recuperando hasta hoy a 132 nietos y
                                                    quienes restauraron su verdadera identidad.</p>
                                                <br>


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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg14')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL MUSEO ITINERANTE DE BOCA JUNIORS FUE DECLARADO DE
                                                INTERÉS LEGISLATIVO</a>
                                        </h2>
                                        <p><i>La iniciativa llamada “PRESENTES. Siempre estuvimos, estamos y estaremos”
                                                obtuvo el reconocimiento del Cuerpo Legislativo, por medio de un
                                                proyecto presentado por la diputada, María Magdalena Tiesso.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_museo.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El Cuerpo Legislativo declaró de Interés Deportivo y Cultural al
                                                    museo itinerante<b> “PRESENTES. Siempre estuvimos, estamos y
                                                        estaremos”</b>, del Departamento de Inclusión e Igualdad del
                                                    Club
                                                    Atlético Boca Juniors. En el salón Presidente Perón se realizó el
                                                    acto, que contó con la presencia de la diputada y autora del
                                                    proyecto,<b> María Magdalena Tiesso</b>; y la vicepresidenta tercera
                                                    del
                                                    club y presidenta del Departamento de Inclusión e Igualdad, Adriana
                                                    Bravo.
                                                </p>
                                                <br>
                                                <p>En el comienzo de las alocuciones,<b> Tiesso</b> agradeció la
                                                    presencia de
                                                    la gente y destacó el “laburo inmenso” realizado por Bravo y el
                                                    Departamento de Inclusión e Igualdad de la institución. También
                                                    resaltó:<b> “Este museo reivindica y visibiliza a las mujeres que
                                                        fueron parte de la historia del club, y en Boca tenemos la
                                                        historia
                                                        completa”</b>. Y abogó porque este trabajo sea el puntapié
                                                    inicial para
                                                    que otros clubes reconozcan a las mujeres.

                                                </p>
                                                <br>
                                                <p>Por su parte,<b> Bravo</b> remarcó la importancia de saber que las
                                                    mujeres
                                                    son parte de la historia del club y que dejaron su huella.<b>
                                                        “Seremos
                                                        más las mujeres que seremos elegidas. Siempre hay que abrir
                                                        caminos
                                                        y siempre seremos más las mujeres que trabajamos y queremos a
                                                        nuestro club. Ellas van a seguir siendo reconocidas y no vamos a
                                                        dar
                                                        pasos hacia atrás”</b>, concluyó.</p>
                                                <br>
                                                <p>Esta exposición representa -simbólica y concretamente- una reparación
                                                    histórica para visibilizar a las mujeres que han transitado,
                                                    constituido y construido la memoria y biografía bostera a lo largo
                                                    de los años. Sin dejar de mencionar que esto ha sido en un ámbito de
                                                    profunda negación, invisibilización y banalización de la figura de
                                                    las mujeres.

                                                </p>
                                                <br>
                                                <p>De esta manera, el Departamento del club lució un recorrido compuesto
                                                    de fotografías, gigantografías, distintos archivos y documentos
                                                    históricos, trofeos, camisetas, reconocimientos, y representaciones
                                                    escenográficas del trabajo de las mujeres a lo largo de la historia
                                                    del club.</p>
                                                <br>
                                                <p>El museo itinerante es el resultado de un arduo trabajo de
                                                    revisionismo encabezado por Bravo, quien se convirtió en la primera
                                                    mujer en asumir un cargo en la vicepresidencia de Boca, y se propuso
                                                    contactar y atraer a muchas de las protagonistas, volviendo a abrir
                                                    las puertas que les habían sido cerradas años atrás, y dando lugar a
                                                    las que habitan cada día el club: deportistas, trabajadoras y
                                                    socias.</p>
                                                <br>


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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg15')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA MUESTRA “ARGENTINO UNIVERSAL” ES DE INTERÉS PARA LA
                                                CIUDAD</a>
                                        </h2>
                                        <p><i>Gracias a una iniciativa presentada por el legislador, Claudio Morresi, la
                                                Legislatura destacó la exhibición ubicada en Museo Nacional del Cabildo
                                                y la Revolución de Mayo.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_muestra.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><b>El Cuerpo Legislativo declaró de Interés Cultural a la muestra
                                                        Argentino Universal, que es organizada en el marco del proyecto
                                                        Factor Francisco del Centro Nueva Tierra y ubicada en el Museo
                                                        Nacional del Cabildo y la Revolución de Mayo.</b> El acto se
                                                    realizó
                                                    dentro del <b>salón Presidente Perón</b> del Palacio Legislativo. Y
                                                    contó
                                                    con la presencia <b>del legislador y autor de la iniciativa, Claudio
                                                        Morresi, además de Santiago Barassi de Factor Francisco. Y el
                                                        Secretario de Gestión Cultural del Ministerio de Cultura de la
                                                        Nación, Federico Prieto.</b></p>
                                                <br>
                                                <p>En el inicio de las alocuciones, Morresi dio la bienvenida a “la Casa
                                                    del Pueblo de la Ciudad de Buenos Aires, donde ingresó el Papa
                                                    Francisco, el arte y la cultura”. Además destacó la importancia de
                                                    contar con un representante latinoamericano de una de las religiones
                                                    más importantes del mundo. Y sumó: “Que haya un grupo que haya
                                                    tenido la inteligencia de crear esta muestra, que recorrió la
                                                    Argentina, es abrir la cultura para todos y todas",</p>
                                                <br>
                                                <p>Por su parte, Barassi agradeció la distinción. También subrayó que el
                                                    trabajo de la muestra es abordar el mensaje del Papa Francisco, en
                                                    conectar “con la trascendencia de nuestra cultura, ideas e historia
                                                    y ponerlo en perspectiva universal”. Y determinó que estamos en un
                                                    momento “de universalización de Argentina y de América Latina”.</p>
                                                <br>
                                                <p>Por último, Prietto concluyó: “Estas son iniciativas que vienen del
                                                    pueblo y que tratan de poner en valor ciertos criterios, que
                                                    construyen pensamiento crítico. Y que nos hace pensar en un mundo
                                                    más justo y lindo para todos”.
                                                </p>
                                                <br>
                                                <p>En el marco institucional del Centro Nueva Tierra, el proyecto Factor
                                                    Francisco pretende buscar construir “un sistema de palabras e
                                                    imágenes que buscan saltar la tranquera de los lugares comunes de lo
                                                    que se dice sobre el Papa Argentino”.</p>
                                                <br>
                                                <p>En este sentido, convocan a repensar las propias creencias sobre la
                                                    espiritualidad, la relación entre la fe y la práctica cotidiana y
                                                    también el aporte de la Argentina como comunidad con una filosofía y
                                                    una teología propias a un mundo cada vez más caótico.</p>
                                                <br>
                                                <p>La muestra “Argentino Universal” propone una reflexión sobre el
                                                    pontificado de Francisco y lo que de él se dice en nuestro país.
                                                    Para esto, ofrece un recorrido de palabras, imágenes y colores que
                                                    el artista plástico Daniel Santoro denominó “barroco pop
                                                    latinoamericano”.</p>
                                                <br>
                                                <p>A su vez, la forma misma de la muestra en diferentes paneles da
                                                    cuenta de la figura geométrica poliédrica porque toma la figura del
                                                    Papa Argentino como multifacética. En esta relación, la exhibición
                                                    ofrece conexiones posibles entre Francisco y figuras de la política
                                                    y de la cultura contemporánea, como Gardel y Gilda, Diego Maradona y
                                                    Borges, el Che Guevara y Mafalda, Lacan y la murga uruguaya Falta y
                                                    resto. Pero también la relación del Papa con el mundo virtual, su
                                                    discurso sobre la “casa común” –en relación al ambientalismo-, los
                                                    pueblos originarios y las figuras de la historia latinoamericana.
                                                </p>
                                                <br>


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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg16')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DECLARAN DE INTERÉS EL LIBRO "EL PARTIDO. ARGENTINA -
                                                INGLATERRA 1986" DE ANDRÉS BURGO</a>
                                        </h2>
                                        <p><i>La obra escrita por Andrés Burgo y editado por Tusquets, fue reconocido
                                                por medio de un proyecto de declaración presentado por el diputado,
                                                Claudio Morresi.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_libro.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En una emotiva ceremonia celebrada en el Salón Presidente Perón de la
                                                    Ciudad de Buenos Aires, los legisladores de la Ciudad declararon de
                                                    Interés para el Deporte y la Comunicación Social al libro "El
                                                    partido. Argentina - Inglaterra 1986", escrito por Andrés Burgo. El
                                                    acto contó con la destacada presencia del diputado Claudio Morresi,
                                                    impulsor de la iniciativa, así como del propio autor de la obra,
                                                    Andrés Burgo, y el reconocido periodista deportivo Ezequiel
                                                    Fernández Moores.</p>
                                                <br>
                                                <p>El libro de Andrés Burgo arroja luz sobre uno de los momentos más
                                                    icónicos en la historia del fútbol argentino: el partido entre
                                                    Argentina e Inglaterra que se jugó el 22 de junio de 1986. Este
                                                    encuentro tuvo un significado especial para Argentina, ya que no
                                                    solo fue un evento deportivo de gran relevancia, sino que también
                                                    tuvo un profundo impacto político y emocional.</p>
                                                <br>
                                                <p>El partido se llevó a cabo en el marco de la Copa Mundial de la FIFA
                                                    de 1986, que se celebró en México. La victoria de Argentina en el
                                                    Mundial de 1986 y, en particular, en el partido contra Inglaterra,
                                                    simbólicamente aumentó el valor de ese triunfo y se convirtió en un
                                                    motivo de orgullo nacional.
                                                </p>
                                                <br>
                                                <p>El partido en sí mismo está grabado en la memoria del fútbol mundial
                                                    por una serie de detalles icónicos. Uno de los momentos más
                                                    emblemáticos fue el famoso "Gol del Siglo" de Diego Maradona, en el
                                                    que el astro argentino dejó atrás a varios jugadores ingleses y
                                                    luego anotó un gol espectacular. Además, en ese mismo partido,
                                                    Maradona marcó otro gol legendario conocido como la "Mano de Dios",
                                                    en el que utilizó la mano para tocar la pelota y engañar al árbitro.
                                                </p>
                                                <br>
                                                <p>El partido Argentina-Inglaterra 1986 es recordado no solo por su
                                                    importancia deportiva, sino también por su carga emocional y
                                                    política. La victoria de Argentina se convirtió en un símbolo de
                                                    resistencia y superación para el país, y el libro de Andrés Burgo
                                                    arroja luz sobre todos estos aspectos, rindiendo homenaje a un
                                                    evento que dejó una huella imborrable en la historia del fútbol y en
                                                    la memoria colectiva de Argentina.</p>
                                                <br>



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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg17')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">KEVIN JOHANSEN ES PERSONALIDAD DESTACADA DE LA CIUDAD</a>
                                        </h2>
                                        <p><i>El Cuerpo Legislativo reconoció al artista, compositor y músico, por medio
                                                de un proyecto presentado por el diputado, Franco Vitali.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_kevin.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><b>Los legisladores de la Ciudad declararon como Personalidad
                                                        Destacada
                                                        de la cultura al músico y compositor, Kevin Johansen.</b> El
                                                    acto se
                                                    llevó a cabo en el Salón Dorado del Palacio Legislativo y contó con
                                                    la presencia del <b>diputado y co-autor, Juan Modarelli –en
                                                        reemplazo
                                                        del legislador y autor del proyecto, Franco Vitali-; el
                                                        homenajeado;
                                                        Mariana Biro; el abogado, Daniel Divinsky; Karina Johansen; y el
                                                        percusionista, Enrique ‘Zurdo’ Roizner.</b></p>
                                                <br>
                                                <p>En el inicio de los discursos, Modarelli destacó que en la música y
                                                    el arte de Johansen se expresa a América Latina, la diversidad y el
                                                    respeto a ella. Y agregó: “Quiero agradecerle porque su música le
                                                    baja el tono a la discusión. A veces rompiendo las formas, no rompes
                                                    el fondo, pero descontracturando cierto lenguaje o manera de
                                                    entender la música, el mensaje sigue estando”.</p>
                                                <br>
                                                <p><i>“Buenos Aires es una ciudad nuestra, desde mucho antes por cuna
                                                        por
                                                        madre argentinísima y nos nutrió de la argentinidad”</i>,
                                                    resaltó
                                                    Johansen, luego de recordar a su madre. También agradeció a todos
                                                    los presentes. Y concluyó, previo a cantar: “Es retribuir y
                                                    agradecer de la mejor manera que conozco”.
                                                </p>
                                                <br>
                                                <p>Kevin Johansen nació en 1964 en Alaska, de madre argentina y padre
                                                    “gringo” -como él dice- objetor de conciencia de la guerra de
                                                    Vietnam. Creció en una familia muy musical, y a los cinco años se
                                                    mudó de Alaska a San Francisco. Desde sus 12 años vivió en Buenos
                                                    Aires con su mamá, que lo crió rodeado de discos de Tita Merello y
                                                    Violeta Parra, pero también de Los Beatles y Bob Dylan. Vivió
                                                    brevemente en Montevideo, Uruguay, donde se enamoró de la música
                                                    rioplatense y empezó a tocar la guitarra. De vuelta en Buenos Aires,
                                                    devino rockero y tuvo un breve éxito con su banda Instrucción Cívica
                                                    ("Obediencia Debida", 1985, que fue disco de oro en Perú).
                                                </p>
                                                <br>
                                                <p>Con 25 años, el 12 de octubre de 1990, se fue a redescubrir la
                                                    América del Norte de su infancia. Al poco tiempo de arribar, el
                                                    dueño de un reconocido club de música punk y new wave de Nueva York,
                                                    donde vivió casi diez años, lo invitó a participar de su futuro
                                                    sello. Allí, durante los 90 grabó y tocó como banda de la casa,
                                                    entre otros lugares. También fue portero en una milonga, como luego
                                                    supo narrar en uno de sus temas (“El de la puerta”).</p>
                                                <br>
                                                <p>Con un disco bajo el brazo, “The Nada”, tarjeta de presentación que
                                                    daría nombre a su banda, en el 2000 Kevin regresó a Buenos Aires,
                                                    donde se instaló definitivamente al año siguiente. Esa mezcla entre
                                                    lo anglo y lo criollo sería para siempre distintiva de su obra.</p>
                                                <br>
                                                <p>Su música es reflejo de su espíritu nómade, una fusión irreverente de
                                                    ritmos, idiomas y culturas. Johansen suele definirse a sí mismo como
                                                    “desgenerado”, cuando le preguntan por su estilo musical, algo que
                                                    quedó claro desde su primer e icónico tema “Guacamole”. Su obra es
                                                    un canto a la mixutra (“mixtura es el futuro”, el eslogan de su
                                                    primer disco), lo híbrido, lo anfibio, lo mestizo y el sincretismo.
                                                </p>
                                                <br>



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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg18')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">AJUSTES EN ABL Y PATENTES BASADAS EN LA INFLACIÓN:
                                                PRESUPUESTO PORTEÑO 2024</a>
                                        </h2>
                                        <p><i>El proyecto de presupuesto para el próximo año en la Ciudad de Buenos
                                                Aires no contempla incrementos en impuestos ni la creación de nuevos
                                                tributos. Los ajustes en el impuesto de Alumbrado, Barrido y Limpieza
                                                Territorial de Pavimento y Aceras (ABL) y en las patentes estarán
                                                ligados a la inflación, según lo expuesto por el gobierno local.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_macri.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Ciudad de Buenos Aires presentó el proyecto de presupuesto para el
                                                    año 2024, que contempla ajustes en el impuesto de Alumbrado, Barrido
                                                    y Limpieza Territorial de Pavimento y Aceras (ABL) y en las
                                                    patentes, basados ​​en la inflación de la ciudad. La iniciativa no
                                                    incluye aumentos en los impuestos existentes ni la creación de
                                                    nuevos tributos.</p>
                                                <br>
                                                <p>El Gobierno de la Ciudad propone mantener la actualización mensual de
                                                    la tasa de ABL de acuerdo con el Índice de Precios al Consumidor de
                                                    la Ciudad, buscando un ajuste progresivo.</p>
                                                <br>
                                                <p>En cuanto a las patentes, el impuesto que los propietarios de
                                                    vehículos deberán abonar en 2024 tendrá como límite la inflación
                                                    registrada entre noviembre de 2022 y octubre de 2023. Esta medida
                                                    tiene como objetivo mitigar el impacto de los aumentos en el valor
                                                    de los automóviles en el mercado automotriz.
                                                </p>
                                                <br>
                                                <p>El ministro de Hacienda y Finanzas de la Ciudad de Buenos Aires,
                                                    Martín Mura, comparará ante la Comisión de Presupuesto de la
                                                    Legislatura para brindar detalles del proyecto a los legisladores.
                                                </p>
                                                <br>
                                                <p>Según la propuesta, el presupuesto contempla un total de gastos de
                                                    5,8 billones de pesos y un total de recursos equivalentes. El
                                                    Gobierno porteño basa su proyecto en las pautas macroeconómicas
                                                    establecidas en la proyección presupuestaria nacional, que prevé un
                                                    crecimiento del 2,7% en la actividad económica, una inflación
                                                    estimada del 69,5% y un tipo de cambio de 607 pesos por dólar para
                                                    multas del próximo año.</p>
                                                <br>
                                                <p>El Gobierno destaca que este es el tercer año consecutivo en el que
                                                    presenta un proyecto de presupuesto con equilibrio financiero, es
                                                    decir, con déficit cero.</p>
                                                <br>


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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg19')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">AUDIENCIA PÚBLICA EN LA LEGISLATURA DE LA CIUDAD POR DESIGNACIÓN DE AUTORIDADES CLAVE</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/02/2024</p>
                                        <p><i>Designación de autoridades en la Ciudad: Audiencia pública debate la designación del Procurador General y del Banco de la Ciudad, destacando la participación ciudadana y la autonomía institucional.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_audi2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En una jornada cargada de expectativas y debates, la Legislatura de la Ciudad Autónoma de Buenos Aires fue escenario de una Audiencia Pública crucial para la designación de dos cargos fundamentales: el Procurador General de la Ciudad y las autoridades del Banco de la Ciudad. Presidida por la diputada María Luisa González Estevarena, titular de la Junta de Ética, la audiencia contó con la presencia del presidente de la Comisión de Asuntos Constitucionales, el diputado Hernán Reyes, y la presidenta de la Comisión de Presupuesto, Paola Michielotto.</p>
                                                <br>
                                                <p>El Salón San Martín de la Legislatura fue testigo de la presentación de los expedientes 2826-J-2023 y 2828-J-2023, referentes a la designación del Procurador General de la Ciudad y las autoridades del Banco de la Ciudad, respectivamente. El primero en tomar la palabra fue Martín Ocampo, postulante al cargo de Procurador General, quien destacó la importancia de estos actos como herramientas de participación ciudadana y expresó su agradecimiento al Jefe de Gobierno, Jorge Macri, por la oportunidad.</p>
                                                <br>
                                                <p>"Estos actos son una de las herramientas de la participación ciudadana que tiene nuestra constitución, son muy importantes y distinguen a la Ciudad de Buenos Aires como un emblema de la democracia participativa", señaló Ocampo en su discurso inicial. Además, hizo hincapié en el papel primordial que el Procurador tiene en la defensa de la autonomía de la Ciudad y en la lucha por los derechos de los ciudadanos.
                                                </p>
                                                <br>
                                                <p>Tras la presentación de Ocampo, se dio inicio a la Audiencia Pública para la designación de las autoridades del Banco de la Ciudad. Los candidatos fueron presentados de la siguiente manera: Guillermo Alejandro Laje como Presidente, Guillermo Andrés Romero como Vicepresidente, Pablo María Videla, María Delfina Rossi, Gastón Leonardo Rossi y Ezequiel Sabor como Vocales, y Paula Beatriz Villalba como Síndica.
                                                </p>
                                                <br>
                                                <p>Posteriormente, se convocó a una reunión conjunta de la Junta de Ética, la Comisión de Asuntos Constitucionales y la Comisión de Presupuesto, Hacienda, Administración Financiera y Política Tributaria. El objetivo de la reunión fue considerar la idoneidad de los candidatos propuestos por el Poder Ejecutivo de la Ciudad para los cargos en cuestión. Tras un análisis exhaustivo, se concluye que no existen elementos objetivos que afecten la idoneidad y capacidad técnica de los postulantes.</p>
                                                <br>
                                                <p>En este sentido, el dictamen conjunto quedó en la firma de las legisladoras y legisladores que integraron la reunión, lo que indica un respaldo generalizado a las designaciones propuestas. La jornada culminó con la certeza de que la designación de estas autoridades clave se llevará a cabo con el respaldo y la legitimidad que otorga un proceso transparente y participativo como el vivido en la Audiencia Pública de la Legislatura de la Ciudad.</p>
                                                <br>


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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg20')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">AVANZA DESIGNACIÓN DE VICTORIA ROLDÁN MÉNDEZ PARA PRESIDIR ÓRGANO DE ACCESO A INFORMACIÓN</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 28/02/2024</p>
                                        <p><i>Victoria Roldán Méndez, ex legisladora porteña, podría presidir el Órgano Garante del Acceso a la Información Pública tras ser considerada en Audiencia Pública. Destacó la importancia de la transparencia y la participación ciudadana en el gobierno.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_roldan.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Legislatura de la Ciudad Autónoma de Buenos Aires fue escenario de una Audiencia Pública que tuvo como eje central la designación del próximo titular del Órgano Garante del Derecho de Acceso a la Información Pública (OGDAI). En esta instancia, se trató la postulación de Victoria Roldán Méndez, ex legisladora porteña y reconocida defensora de la transparencia y la participación ciudadana.</p>
                                                <br>
                                                <p>El OGDAI, creado por la ley de la Ciudad 104, tiene como objetivo fundamental asegurar el cumplimiento de los preceptos de libre acceso a la información pública y transparencia de los datos. Entre sus funciones principales se encuentra la resolución de reclamos por falta de respuestas a solicitudes de información o por contestaciones incorrectas.</p>
                                                <br>
                                                <p>Durante la Audiencia Pública, los legisladores Hernán Reyes, Inés Parry y María Lúisa González Estebarena, en sus condiciones de presidentes de las comisiones de Asuntos Constitucionales, de Justicia, y de la Junta de Ética, Acuerdos y Organismos de Control, respectivamente, junto a las diputadas Gimena Villafruela y Sol Méndez, tuvieron a cargo la evaluación de la postulante Roldán Méndez.
                                                </p>
                                                <br>
                                                <p>La trayectoria de Victoria Roldán Méndez en el ámbito político y legislativo porteño la posiciona como una candidata idónea para ocupar este cargo. Durante su gestión como legisladora, se destacó por su compromiso con la transparencia y la participación ciudadana, valores que considera fundamentales en toda gestión gubernamental.
                                                </p>
                                                <br>
                                                <p>En su intervención ante la Audiencia Pública, Roldán Méndez hizo hincapié en la importancia de garantizar la transparencia en la gestión pública y promover la participación ciudadana en la toma de decisiones. Asimismo, destacó la relevancia de contar con un órgano garante que vele por el cumplimiento del derecho de acceso a la información pública, un derecho fundamental en cualquier democracia moderna.</p>
                                                <br>
                                                <p>La postulación de Victoria Roldán Méndez fue considerada de forma positiva, resaltando sus cualidades y antecedentes en el ámbito legislativo y su compromiso con la transparencia y la participación ciudadana. Se espera que en breve se confirme su designación al frente del Órgano Garante del Derecho de Acceso a la Información Pública, en lo que sería un paso importante hacia la consolidación de la transparencia y el acceso a la información en la Ciudad de Buenos Aires.</p>
                                                <br>


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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg21')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SALVÁ TU PIEL, DE INTERÉS PARA LA CIUDAD</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                        <p><i>La campaña del laboratorio La Roche-Posay cumplió 10 años y brinda más de 45 mil controles de piel gratis por año en todo el país para prevenir enfermedades y concientizar sobre el cáncer de piel.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_piel1.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La campaña “Salva tu piel” de la firma La Roche-Posay fue declarada de Interés Social por la Legislatura de la Ciudad en una ceremonia realizada hoy, martes, en el Salón Presidente Alfonsín. El proyecto fue presentado por la diputada (mandato cumplido) Ana María Bou Pérez y lo retomó la legisladora María Sol Méndez, con el objetivo de destacar el trabajo educativo y preventivo realizado por el laboratorio. Además estuvo presente la Gerenta de Asuntos Corporativos de L’Oréal, Brenda Bianquet; y Soledad Zambrini, del área de Comunicación de Marca de La Roche-Posay.</p>
                                                <br>
                                                <p>En el inicio de las alocuciones, Méndez destacó: “Esto demuestra que la articulación público-privada es muy importante , sobre todo en estos temas de salud pública; y en un tema que hace unos años atrás no se hablaba, como es el cáncer de piel". A su vez remarcó la importancia de que el mensaje se traslade a toda la sociedad y extendió sus felicitaciones al equipo que presentó el proyecto de ley.</p>
                                                <br>
                                                <p>Luego, Bou Pérez subrayó: "Es un placer acompañar esta campaña como en otros años; y  que es tan importante porque lo más difícil en salud es cambiar hábitos”. Y señaló la necesidad que la campaña persista, ya que “recién se están viendo los primeros resultados de la concientización de la gente a cuidarse la piel”.
                                                </p>
                                                <br>
                                                <p>Por último, Bianquet explicó: “Es una semilla más que aportamos a visibilizar lo que es nuestra misión, que es democratizar el acceso a la dermatología a todas las personas que viven en el mundo, y específicamente en Argentina”. Y recordó que el cáncer de piel se puede prevenir a tiempo y recomendó visitar a un dermatólogo una vez al año.
                                                </p>
                                                <br>
                                                <p>Con 11 ediciones consecutivas en temporadas de mayor temperatura, “Salva tu piel” ofrece asistencia, chequeos e información clave sobre el cáncer de piel, que abarca 1 de cada 3 casos de esta enfermedad. Sin embargo, el 90% de los casos pueden ser curados.</p>
                                                <br>
                                                <p>A través de un plan nacional que cuenta con tres pasos esenciales, el laboratorio brinda su colaboración de manera gratuita y distribuida a lo largo del país. El primer paso consta en una difusión de información educativa en medios de comunicación, para concientizar sobre el asunto, sus medidas de precaución y demás factores a tener en cuenta, como los recomendables y necesarios controles dermatológicos anuales. Como siguiente instancia, La Roche-Posay ofrece chequeos presenciales de lunares con dermatólogos en consultorios móviles que se trasladan por diversos puntos de Argentina, como también puntos fijos en puntos de atención primaria y dependencias de la Liga Argentina de Lucha Contra el Cáncer. La tercera parte de la campaña, inaugurada post pandemia, se enfoca en la consulta y la enseñanza para autochequeos de manera virtual, también gratuitamente, para así llegar a más y más pacientes.</p>
                                                <br>
                                                <p>La propuesta de La Roche-Posay aumenta año tras año y sus objetivos se superan con cada edición. En la campaña 2022/23, 33.000 personas accedieron a los controles presenciales y otras 1.200, a las charlas educativas. Además, se estima que el alcance comunicacional llegó a más de 24 millones de personas. Para esta última campaña, los objetivos de la compañía se fijaron en 45.000 controles de lunares, 2.500 para las charlas y 45 millones más a través de la difusión de la propia campaña.</p>
                                                <br>
                                                <p>La campaña híbrida entre la difusión de información esencial para prevenir el cáncer de piel y el control anual y la asistencia presencial y virtual generó un gran alcance en el país gracias al laboratorio, que finalizó a fines de febrero su 11° año consecutivo con su despliegue nacional, con 13 provincias alcanzadas con atención directa, entre dos camiones equipados con consultorios móviles y más de 50 puntos fijos de atención.</p>
                                                <br>

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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg22')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA LEGISLADORA INÉS PARRY PRESENTÓ PROYECTO QUE EXPRESA EXTREMA PREOCUPACIÓN POR EL AJUSTE PRESUPUESTARIO EN LAS UNIVERSIDADES NACIONALES</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                        <p><i>Este proyecto es acompañado por todo el bloque UCR- Evolución, el bloque Confianza Pública y por el diputado Alejandro Grillo de Unión por la Patria</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_ines.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La legisladora Inés Parry (UCR-Evolución), en una acción dirigida a proteger la educación superior y la estabilidad laboral de miles de docentes e investigadores, ha presentado un proyecto de declaración en la Legislatura porteña.</p>
                                                <br>
                                                <p>Busca que la Legislatura porteña exprese la profunda inquietud ante el ajuste del 72% del presupuesto de las universidades nacionales por parte del Gobierno Nacional, medida que pone en riesgo el funcionamiento continuo de las instituciones académicas, así como las fuentes de trabajo y la trayectoria académica de más de 3 millones de estudiantes.</p>
                                                <br>
                                                <p><b>"Es imperativo que actuemos ante esta situación crítica que enfrentan nuestras universidades nacionales"</b>, afirmó la legisladora Parry</p>
                                                <br>
                                                <p>El proyecto de declaración destaca que este recorte presupuestario representa una caída real del monto de transferencia mensual de más de 2/3 en comparación con el año anterior, medida que no se ajusta a la inflación actual, la cual supera el 254%.
                                                </p>
                                                <br>
                                                <p>Parry subrayó que los fondos de funcionamiento están congelados e incluso para gastos de mantenimiento básico de los edificios (gas, luz, limpieza), lo que afecta gravemente el poder adquisitivo y la calidad de vida de la comunidad universitaria. Además este ajuste impacta directamente en los estudiantes de menores ingresos, ya que afecta las becas de estudio.</p>
                                                <br>
                                                <p>La legisladora destacó que este recorte presupuestario no solo afecta a las universidades, sino también a los colegios preuniversitarios, hospitales, institutos asistenciales y otras instituciones dependientes de las universidades nacionales.</p>
                                                <br>
                                                <p><b>"El congelamiento salarial y los recortes presupuestarios ponen en riesgo la calidad de la enseñanza y el normal funcionamiento de nuestras instituciones educativas"</b>.</p>
                                                <br>
                                                <p>El proyecto de declaración también señala la preocupación por la suspensión unilateral de la creación e inicio de actividades académicas en cinco universidades nacionales, a raíz de la resolución 45/24 del Ministerio de Capital Humano de la Nación, medida que contraviene leyes aprobadas por el Congreso Nacional.</p>
                                                <br>
                                                <p>Parry se refiere a la Universidades de Delta, de Pilar, Ezeiza , Río Tercero y Madres de Plaza Mayo.  "Este tipo de decisiones atentan contra la división de poderes y debilitan las bases de nuestro sistema constitucional, el Ejecutivo no puede dejar sin efecto el cumplimiento de una ley del Congreso", afirmó Parry.</p>
                                                <br>
                                                <p><b>"Sin educación pública no hay libertad posible"</b>, afirmó Parry, quien instó a la Legislatura porteña a aprobar el proyecto de declaración en apoyo a la educación superior y a los principios democráticos fundamentales.</p>
                                                <br>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg23')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CANCILLER CROATA GORDAN GRLIĆ-RADMAN RECIBE RECONOCIMIENTO EN LA LEGISLATURA DE BUENOS AIRES</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 12/03/2024</p>
                                        <p><i>En un acto protocolar lleno de significado, el Canciller de Croacia, Gordan Grlić-Radman, fue recibido en la Legislatura de la Ciudad de Buenos Aires por el Vicepresidente Primero, Matías López, quien le entregó un diploma en reconocimiento a su destacada labor diplomática y amplia experiencia en el ámbito internacional.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_croata2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La visita, que contó con la presencia de la Embajadora croata en Argentina, Duska Paravic, fue organizada por el Subsecretario de Relaciones Internacionales y Cooperación Institucional, Dr. Pablo Garzonio, y la Directora General de Relaciones Internacionales, Ornela Vanzillotta. Además, asistieron al evento el Secretario de Gobierno y Vinculación Ciudadana de la Ciudad, César Torres, y numerosos legisladores locales.</p>
                                                <br>
                                                <p>Durante la ceremonia, el diputado Matías López destacó la importancia de la visita del Canciller Grlić-Radman como un reflejo de la larga tradición bilateral entre Croacia y Argentina, inspirada en valores compartidos y un profundo interés por fortalecer la amistad entre ambas naciones.</p>
                                                <br>
                                                <p>Por su parte, el Canciller agradeció el recibimiento en Buenos Aires y recordó la visita de la Presidenta de Croacia, Kolinda Grabar-Kitarović, en 2018, destacando la labor del Dr. Garzonio en la organización de ambos eventos. Asimismo, resaltó la importancia de estos encuentros para fortalecer las relaciones entre estados y expresó su reconocimiento por ser recibido en una ciudad con una rica historia y cultura como Buenos Aires.</p>
                                                <br>
                                                <p>La visita del Canciller Grlić-Radman a la Legislatura de Buenos Aires refleja la sólida relación entre Croacia y Argentina, marcada por vínculos turísticos, comerciales y educativos activos, así como por una importante comunidad croata en Argentina, estimada en alrededor de 250.000 personas entre descendientes. e inmigrantes.
                                                </p>
                                                <br>
                                                <p>En sus palabras finales, el Canciller reafirmó el compromiso de Croacia en fortalecer las relaciones con las comunidades croatas en Argentina y expresó su deseo de seguir cultivando y fortaleciendo estos lazos en el futuro.</p>
                                                <br>
                                                <p>La presencia del Canciller Grlić-Radman en la Legislatura de Buenos Aires fue un momento destacado que subrayó la importancia de las relaciones internacionales y la diplomacia en el ámbito global.</p>
                                                <br>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg24')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA LEGISLATURA FIRMÓ UN ACUERDO CON LA JUNTA DEPARTAMENTAL DE MALDONADO DE URUGUAY</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 12/03/2024</p>
                                        <p><i>El Palacio Legislativo suscribió a un convenio, con el objetivo de fortalecer la identidad rioplatense a nivel mundial y regional. Y aportar a la integración y progreso sociocultural y económico uruguayo-argentino.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_uru2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><b>La Legislatura de la Ciudad firmó un convenio con la Junta Departamental de Maldonado, Uruguay</b>. El evento se realizó en el Salón Eva Perón y fue organizado por la Dirección General de Relaciones Internacionales y Cooperación. Además se llevó a cabo un intercambio de presentes protocolares.</p>
                                                <br>
                                                <p><b>Allí participaron el Vicepresidente Primero y el Vicepresidente Segundo del Palacio Legislativo, Matías López y Matías Lammens; la diputada, Patricia Glize; el Subsecretario y la Directora General de Relaciones Internacionales y Cooperación Institucional, Pablo Garzonio y Ornela Vanzillotta; y la Directora Ejecutiva de Legislatura Conectadas Diputados, Elizabeth Leites. Mientras que los presentes de Maldonado fueron el Presidente de dicha junta, Alexandro Infante Caballero; además del Embajador, Carlos Enciso Christiansen.</b></p>
                                                <br>
                                                <p>En el inicio de las alocuciones, López dio la bienvenida a la Legislatura. “Es un placer y un orgullo ser el último eslabón de este importante convenio, este es el paso incial”, resaltó el Vicepresidente Primero. Y destacó el trabajo realizado desde el Palacio Legislativo: “Tenemos una Legislatura con diálogo y consenso para sacar leyes que le sirvan a la gente, tenemos un lindo desafío por delante”.</p>
                                                <br>
                                                <p>Por su parte, Infante Caballero señaló la relación entre Argentina y Uruguay, en específico con el departamento de Maldonado: “Los argentinos son fuente de trabajo, de educación, comida arriba de la mesa y progreso para nuestras familias. Cómo no tener un convenio de estas características con tantas cosas en común, desde lo económico y social”. Y concluyó: “Este convenio es extremadamente importante para nosotros porque no solo es firmarlo, sino ponerlo a andar. Hoy no solo empezamos, sino que continuamos”.
                                                </p>
                                                <br>
                                                <p>El acuerdo promueve la cooperación y el intercambio bilateral “para el fortalecimiento de la identidad rioplatense a nivel regional y mundial, así como de las instituciones que la promuevan”. Entre sus objetivos se destacan el aportar a la integración y progreso sociocultural y económico uruguayo-argentino.</p>
                                                <br>
                                                <p>El convenio de Cooperación e Intercambio se regirá por un total de once cláusulas, en donde se resalta el hecho de “mantener una relación fluida de comunicación y cooperación permanente basada en los principios de respeto, transparencia y apoyo mutuo”. Y el fomento de programas, acuerdos y alianzas con organizaciones de los sectores público y privado que propicie los objetivos convenidos.</p>
                                                <br>
                                                <p>Además de priorizar en su defensa los Derechos Humanos y Cívicos. En especial el Derecho al Desarrollo que garantiza la inclusión de todas las personas humanas como protagonistas del progreso y beneficiarios de sus resultados. Respecto a la cooperación técnica, se prevé la cooperación técnica “en materias relacionadas con el derecho internacional, la normalización de marcos para el desarrollo de políticas públicas de integración y cooperación”. Y que tendrán lugar bajo las modalidades de congresos, jornadas, asistencias técnicas y asesoramiento, entre otras.</p>
                                                <br>
                                                <p>A su vez se realizarán intercambios formativos de excelencia para el fortalecimiento de sus instituciones, que tendrán como eje fundamental el desempeño idóneo de la función pública y las buenas prácticas a través de seminarios y cursos. Y se crearán las Unidades Mixtas de Formación para el Progreso, que centrarán sus acciones en la formación de técnicos y profesionales para el desempeño de funciones parlamentarias, de organización y desarrollo institucional.</p>
                                                <br>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg25')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA LEGISLATURA DECLARÓ A ENRIQUE HRABINA COMO NUEVA PERSONALIDAD DESTACADA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 19/03/2024</p>
                                        <p><i>Los legisladores de la Ciudad destacaron la trayectoria del histórico defensor de Boca Juniors, por medio de un proyecto presentado por la diputada, Maia Daer.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_hrabina.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><b>El Cuerpo Legislativo declaró como Personalidad Destacada en el ámbito del Deporte al ex futbolista, Enrique Hrabina</b>. El evento se llevó a cabo en el <b>Salón Dorado</b> del Palacio Legislativo y contó con la presencia de <b>la diputada y autora del proyecto, Maia Daer; su secretario parlamentario, Horacio Rivero; el legislador, Juan Pablo Modarelli; Marta Helguero, directiva de la Fundación Boca Juniors; y el homenajeado.</b></p>
                                                <br>
                                                <p>En el inicio de las alocuciones, Daer brindó la bienvenida a la Casa Legislativa y explicó el proceso parlamentario de la ley. Y destacó: “En representación del mandato otorgado, toda la sociedad lo reconoce por su labor, su desempeño y su historia en Boca Juniors”. Por su parte, Modarelli resaltó la importancia de Hrabina en la historia de Boca Juniors.</p>
                                                <br>
                                                <p>“Es una emoción impresionante porque uno nunca se espera este tipo de homenajes o de reconocimientos, uno hace lo que siente y lo que puede”, declaró Hrabina. También agradeció a su familia y determinó la importancia de los valores. Y concluyó: “Lo más importante es lo humano y este reconocimiento es por eso que por lo deportivo”.</p>
                                                <br>
                                                <p>‘El Ruso’ Hrabina primeramente debutó en el Clubt Atlético Atlanta como marcador de punta izquierda. En los Campeonatos Nacionales de 1º División B tuvo una destacada actuación y por este motivo, el Club Atlético San Lorenzo de Almagro decide comprarlo. Su pase fue el más costoso de la época para un defensor y jugó en ‘El Ciclón’ hasta 1985, cuando San Lorenzo le da el pase libre por una deuda económica que la institución tenía con él.
                                                </p>
                                                <br>
                                                <p>En ese entonces, el empresario deportivo, Osvaldo Rivero, lo acercó al Club Atlético Boca Juniors junto a otros jugadores. Fue así que comenzó a jugar en el club de la rivera y permanece allí hasta su retiro definitivo como jugador profesional, en 1992. En su palmarés se destacan la Supercopa Sudamericana de 1989.</p>
                                                <br>
                                                <p>Actualmente es Director Técnico del equipo de ex jugadores de Boca, denominados Seniors, donde juegan los ex deportistas Jorge Bermúdez, Marcelo Delgado, Sergio ‘Chicho’ Serna, Raúl Cascini, Marcelo ‘Chelo’ Delgado, Pablo Ledesma, Antonio ‘Chipi’ Barijho, Sergio Martínez, Ariel ‘Burrito’ Ortega, Daniel Díaz y Luis Villalba entre otros.</p>
                                                <br>
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg26')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DÍA MUNDIAL DEL SÍNDROME DE DOWN EN LA LEGISLATURA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 26/03/2024</p>
                                        <p><i>La Vicejefa del Gobierno de la Ciudad, Clara Muzzio, encabezó el acto de apoyo y visibilización junto con el personal de la Legislatura, múltiples agrupaciones y ONGs.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_down2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><b>La conmemoración del Día Mundial del Síndrome de Down en el Palacio Legislativo se llevó a cabo este viernes en el Salón San Martín, con la participación de la Vicejefa del Gobierno de la Ciudad, Clara Muzzio y el personal de la casa.</b></p>
                                                <br>
                                                <p>Cada 21 de marzo, desde el 2011 por reconocimiento de la Organización de las Naciones Unidas, se celebra internacionalmente esta fecha para visibilizar, concientizar y apoyar las voces de todos y buscar mejores condiciones de salud, de educación y de igualdad. La Legislatura de la Ciudad fue la sede donde pudieron compartir experiencias, testimonios, mensajes y propuestas en primera persona, y también reunirse con otras agrupaciones que apuntan también a una mejor base.</p>
                                                <br>
                                                <p>Muzzio, como Presidente de la Legislatura y madre de Benjamín, de un año y con síndrome de Down, contó: “Tenemos que cambiar la mirada y seguir trabajando para generar oportunidades reales y concretas. Es una responsabilidad de todos: de las familias, de las personas pero fundamentalmente del Estado. Es ahí donde yo, no solamente como presidenta de esta Casa sino como vicejefa de Gobierno, me pongo bajo esta gran responsabilidad y este gran desafío que tenemos como Gobierno de la Ciudad de seguir generando oportunidades y derribando barreras”.</p>
                                                <br>
                                                <p>María Luisa González Estevarena, como vicepresidenta primera de la Comisión de Discapacidad, acompañó a Muzzio y comentó: “Es un compromiso que asumo con cada uno de ustedes quedar a disposición para tender redes, para tener una respuesta a todo lo que se pueda ir haciendo en este camino”.
                                                </p>
                                                <br>
                                                <p>Entre presencias en el Salón San Martín y acompañamiento desde distintos puntos del país de manera virtual, colaboraron las ONGs Apasido, Loros Parlantes, Crearte, Santa Mónica Hockey Inclusivo, el Taller Municipal de la Ciudad de 9 de Julio Taekwondo Sin Fronteras Parataekwondo Olímpico WT, las fundaciones Baccigalupo y Upis Complejo Ético El Zapato y la Asociación Síndrome de Down República Argentina (ASDRA).</p>
                                                <br>
                                                <p>“Hay mucho por hacer. Los desafíos para la inclusión realmente son importantes. Estamos una época donde nos tenemos que unir. Las cosas se logran cuando nos unimos y los que se benefician son ellos y las familias. La diversidad transforma, nos hace respetuosos, nos hace considerar al otro, nos hace empáticos”, comunicó Rosa Scioti, miembro de ASDRA. Con una frase que enmarca a la organización que representa, cerró: “Hagamos de la inclusión algo de todos los días”.</p>
                                                <br>
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg27')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">VIOLENCIA POLICIAL EN CIUDAD OCULTA Y BARRIO MUGICA: DENUNCIAN DETENCIONES ARBITRARIAS Y ABUSO DE PODER</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 26/03/2024</p>
                                        <p><i>En un operativo de seguridad en Ciudad Oculta y Barrio Mugica, la policía de la ciudad detuvo de forma violenta a vecinos, generando repudio en la comunidad..</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_violencia.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>A fines de la pasada semana, un operativo de seguridad en Ciudad Oculta y Barrio Mugica, comuna 8 de Buenos Aires, terminó en un hecho inédito y grave según denuncias de vecinos. La policía de la ciudad llevó a cabo un supuesto operativo "de saturación", durante el cual detuvieron a 15 personas dentro del Área de Patrimonio Histórico Mercado de Hacienda, algunos de ellos vecinos que acababan de llegar de trabajar.</p>
                                                <br>
                                                <p>Según relatos de testigos, los detenidos fueron traídos esposados y descalzos, mientras eran insultados y agredidos verbalmente por los agentes. Entre los afectados se encuentran mujeres y menores de edad. Carolina, una de las vecinas, fue detenida y golpeada cuando salió a buscar a su hija a la parada del colectivo. Jeremías, otro vecino, también fue detenido y golpeado al regresar del trabajo. Incluso una vecina que estaba colgando la ropa fue agredida de la misma manera.</p>
                                                <br>
                                                <p>En medio de este operativo, el canal de noticias "Crónica" transmitía en vivo, mostrando las caras de los vecinos detenidos, mientras las placas hablaban de "narcotraficantes", generando indignación entre los residentes.</p>
                                                <br>
                                                <p>Los vecinos han expresado su repudio ante estos hechos y han denunciado la improvisación de una alcaldía dentro del predio del ex Mercado de Hacienda, con cientos de policías y móviles de la unidad de despliegue de intervenciones rápidas (DIR).
                                                </p>
                                                <br>
                                                <p>En un comunicado dirigido a Jorge Macri, Diego Kravetz y Waldo Wolf, los juntistas de la Comuna 9, Juan Chaves, Lorena Crespo y Alberto Espiño, exigieron a las autoridades que en lugar de hacer un circo mediático y agredir injustamente a vecinos comunes, se persiga realmente a los narcotraficantes. También pidieron que se limpie la zona de dengue y ratas, se ilumine y se ayude a los comercios que están cerrando tras el traslado del Mercado de Hacienda, y se garantice la seguridad real de la zona.</p>
                                                <br>
                                                <p>Los juntistas enfatizaron que, si hay personas que deben ser detenidas, se haga en lugares legales y adecuados para ello, y que se respete a los vecinos, evitando la utilización del casco histórico del barrio como centro de detención.</p>
                                                <br>
                                                <p>La situación ha generado preocupación en la comunidad y se espera que las autoridades investiguen estos hechos y tomen medidas para garantizar la seguridad y el respeto a los derechos de los ciudadanos en la zona.</p>
                                                <br>
                                                <p>La violencia policial y las detenciones arbitrarias son hechos inaceptables en una sociedad democrática. Es necesario que las autoridades investiguen a fondo lo sucedido y que se tomen medidas para evitar que se repitan este tipo de abusos en el futuro. Los vecinos de Ciudad Oculta y Barrio Mugica exigen justicia y seguridad, y esperan que las autoridades respondan a sus reclamos de manera efectiva.</p>
                                                <br>
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg28')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA PELÍCULA ‘VOLVER A MALVINAS’ FUE DECLARADA DE INTERÉS PARA LA PROMOCIÓN Y DEFENSA DE LOS DERECHOS HUMANOS</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/04/2024</p>
                                        <p><i>El film de Natalio Balderrama fue destacado por el Cuerpo Legislativo, gracias a un proyecto presentado por la diputada, Maia Daer.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_volver.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><b>A pocos días de cumplirse 42 años de la guerra de Malvinas, los legisladores de la Ciudad declararon de Interés para la Promoción y Defensa de los Derechos Humanos a la película y documental ‘Volver a Malvinas’, realizada y dirigida por Natalio Balderrama.</b> El acto se llevó a cabo en el <b>Salón Dorado del Palacio Legislativo</b> y contó con la presencia de <b>la diputada y autora del proyecto, Maia Daer; el secretario parlamentario, Horacio Rivero; el director del largometraje, Natalio Balderrama; el combatiente de Malvinas, Ricardo Daer; y el Secretario General de la Asociación del Personal Legislativo (APL), Norberto Di Prospero.</b></p>
                                                <br>
                                                <p>En el inicio de las alocuciones, la diputada Daer destacó que hoy se distinguió a la historia de “compañeros” que volvieron a las islas, “después de haber dejado compañeros allá y de volver rotos”. Además remarcó el orgullo de la lucha por la recuperación de las islas. Y abogó: “Poder darle valor y malvinizar es una tarea que tenemos que hacer todos los días con nuestros hijos y que se replique, para que nunca dejemos de pensar y sentir a las Malvinas argentinas”.</p>
                                                <br>
                                                <p>Luego, Balderrama agradeció a la legisladora por la iniciativa y agregó: “Que hayan valorado y hayan sentido el respeto que quise transmitir me hace muy feliz, el documental sigue siendo muy reconocido”.</p>
                                                <br>
                                                <p>Finalmente Ricardo Daer expresó: “La posguerra fue peor que la guerra, pero en eso tuvimos las manos de nuestros hermanos compañeros y familia que nos sacaron del pozo. Y tuve la suerte de volver a Malvinas”. Y determinó que jamás abandonarán la lucha, que por eso se llaman Combatientes de Malvinas; y llamó a malvinizar a las próximas generaciones.
                                                </p>
                                                <br>
                                                <p>‘Volver a Malvinas’ no solo narra el regreso del grupo de combatientes de Malvinas de APL  a las islas (acompañados por el Secretario General de dicho gremio y otros 6 trabajadores legislativos) sus emociones, recuerdos, pérdidas y dolencias, sino que también capta el encuentro en vivo entre dicha comitiva y un grupo de combatientes ingleses que se hallaban en Malvinas, hecho inédito y de trascendencia histórica.</p>
                                                <br>
                                                <p>Allí se plasman historias narradas en primera persona por los combatientes y relatadas desde el lugar exacto donde se llevó a cabo el conflicto bélico de 1982, y se transmiten como pocas veces el significado atroz de la guerra e intentan reflejar la hidalguía y el valor de aquellos jóvenes que, a tan temprana edad dieron su vida por la patria.</p>
                                                <br>
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg29')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">FLORENCIA CANALE ES NUEVA PERSONALIDAD DESTACADA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/04/2024</p>
                                        <p><i>El Cuerpo Legislativo resaltó la trayectoria de la escritora y novelista, por medio de un proyecto presentado por el legislador mandato cumplido, Roy Cortina.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_flor.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Los legisladores de la Ciudad declararon a Florencia Canale como Personalidad Destacada de la Cultura. El acto se llevó a cabo en la Biblioteca del Palacio Legislativo y contó con la presencia del legislador mandato cumplido y actual Subsecretario de Políticas Culturales del Ministerio de Cultura de la Ciudad de Buenos Aires, Roy Cortina; el editor y gerente editorial de Editorial Planeta, Mariano Valerio y la homenajeada.</p>
                                                <br>
                                                <p>En el inicio de las alocuciones, Cortina destacó que el proyecto de ley de su autoría fue votada por casi la totalidad de los legisladores y recordó la carrera de la escritora. “La novela histórica tuvo un papel crucial en la historia de nuestra ciudad; en este contexto, es imposible no mencionar a Florencia Canale, que escribió sus historias de manera magistral”, recalcó. Y puntualizó que muchas obras cuentan con una perspectiva de género y el protagonismo de las mujeres.</p>
                                                <br>
                                                <p>La homenajeada agradeció la distinción y resaltó la importancia de la lectura y de la libertad que le dieron desde su familia. “Sin libros no hay libertad ni vida”, afirmó. Y concluyó: “Los libros eran mi salvoconducto a la vida, la supervivencia y la sobrevivencia”.</p>
                                                <br>
                                                <p>Florencia Canale es una reconocida escritora marplatense que también sobresale como novelista, periodista y editora. Se destaca por su narrativa histórica, que no solo ofrece una ventana al pasado, sino que también contribuye a la comprensión de las complejidades sociales, políticas y culturales que han moldeado a la Argentina actual.
                                                </p>
                                                <br>
                                                <p>La narrativa histórica cumple un papel fundamental al proporcionar a los lectores una conexión profunda con la rica y compleja historia del país. A través de este tipo de obras, tenemos la oportunidad de explorar eventos clave, momentos trascendentales y figuras históricas que han dado forma a nuestra identidad nacional.</p>
                                                <br>
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg30')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PAULA BERNINI Y GABRIEL SENANES SON PERSONALIDADES DESTACAS DE LA CIUDAD</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 18/04/2024</p>
                                        <p><i>El Cuerpo Legislativo destacó las trayectorias de la periodista y del compositor, por medio de dos proyectos presentados por los legisladores, Gustavo Mola y Facundo Del Gaiso.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_paula2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><b>Esta tarde, los diputados de la Ciudad declararon como Personalidad Destacada en el ámbito de la Cultura y la Comunicación Social a la periodista y productora, Paula Bernini. El acto se realizó en el Salón Montevideo y contó con la presencia del diputado y autor de la iniciativa, Gustavo Mola; el impulsor, Roberto Salcedo; el Editor General de Todo Noticias, Exequiel Sanitz; el periodista, Guillermo Lobo; y la homenajeada.</b></p>
                                                <br>
                                                <p>En el inicio de los discursos, Mola destacó que el proyecto fue votado por unanimidad por todo el Cuerpo Legislativo. Y sumó: “No hace falta que de argumentos, todos los que vivimos la pandemia sabemos del trabajo y le entrega de Paula para con los más humildes y los más necesitados”.</p>
                                                <br>
                                                <p>Luego la periodista agradeció a los presentes y contó gran parte de su viaje: “Cuando me subí a ese motorhome me sentí muy cuidada por el canal”. Y finalmente resaltó: “Durante la pandemia le brindamos una venta a la gente para conocer el país”.</p>
                                                <br>
                                                <p>Paula Bernini fue productora durante 20 años de Telenoche Investiga, en Canal 13. Además de que la periodista que más viajó en cuarentena, realizando un total de 12 mil kilómetros por todo el país, con los cuidados adecuados y para mostrar cómo vivió el interior de la Argentina el aislamiento. En total llevó a cabo 40 días de viaje, 16 provincias visitadas y 11710 kilómetros.
                                                </p>
                                                <br>
                                                <p>Por último y en el Salón San Martín, los legisladores destacaron al compositor y director de orquesta, Gabriel Senanes, como Personalidad Destacada en el ámbito de la Cultura. El evento tuvo la participación del diputado y autor del proyecto, Facundo Del Gaiso; la cancionista, compositora y productora, More Gemma; la profesora y decana del departamento de Artes Musicales de la UNA, Cristina Vazquez; y el Padre Carlos Accaputo, responsable de la Pastoral Social de la Arquidiócesis de Buenos Aires. Además de que se desarrollaron diferentes números musicales, con la presencia de Lito Vitale y Pedro Aznar, entre otros.</p>
                                                <br>
                                                <p>“Conozco hace muchos años a Gabriel y más allá de su talento y de esta reivindicación y distinción, vamos a distinguir a un amigo. Es un digno representante de la cultura del encuentro”, puntualizó Del Gaiso en su apertura.</p>
                                                <br>
                                                <p>Finalmente Senanes agradeció la distinción y remarcó que el evento “es la siembra de muchos años y de esta celebración que nos reúne”. Y concluyó: “No hay manera de desvincular a la cultura, a la subjetividad y a la expansión del universo subjetivo de lo que es la actividad cultural”.</p>
                                                <br>
                                                <p>Gabriel Senanes dedicó su vida a su vocación de servicio y al servicio del bien común. Lo demuestran sus vocaciones como padre, amigo, artista, médico, periodista, maestro y funcionario cultural.</p>
                                                <br>
                                                <p>Sus composiciones y arreglos nutren una vasta y premiada discografía tanto en su rol de compositor, director de orquesta o multiinstrumentista como a cargo de la dirección de grabación, producción, edición y mezcla. Compuso además música para cine, televisión, radio y teatro.</p>
                                                <br>
                                                <p>Fue arreglador y director musical de primeras figuras del rock, tango, folklore, pop, jazz y la música clásica, como Charly García, Sui Generis, Mercedes Sosa, Martha Argerich, Camerata Bariloche, Paquito D’Rivera, Los Cadillacs, Fernando Suárez Paz, Leopoldo Federico, León Gieco, Peteco Carabajal y muchos más.</p>
                                                <br>
                                                <p>También compuso canciones con letras de Enrique Cadicamo, Hamlet Lima Quintana, Víctor Heredia, Teresa Parodi, Pedro Aznar, Antonio Tarragó Rós, León Gieco, Martín Caparrós y otros. Con Paquito D’Rivera y el cuarteto de cuerdas Buenos Aires ganó en 2005 el primer Latin Grammy para un CD clásico argentino, “Riberas”, que incluye obras y arreglos suyos. Dos producciones posteriores, "Piazzolla de cámara" (2013) y "A Piazzolla y A Ramírez" (2014), con orquesta bajo su dirección, son nominadas a los Latin Grammy 2013 y 2014.</p>
                                                <br>
                                                <p>En 2017, su disco Cuerdas, primero volumen de la Antología de sus obras, fue nominado al premio Gardel. El 18 de agosto de 2022 recibe el Premio Radio Nacional Clásica como Compositor Consagrado. Como gestor cultural, fue Director de Música de la Ciudad de Buenos Aires y luego Director General y Artístico del Teatro Colón, promediando sus cuarenta años, y en plena crisis económico-institucional de comienzos de este siglo.</p>
                                                <br>
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg31')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">VISITA DEL ALCALDE DE LISBOA A LA LEGISLATURA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/05/2024</p>
                                        <p><i>Lisboa es la ciudad invitada en la Feria Internacional del Libro y su delegación internacional visitaron la Casa Parlamentaria.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_lisboa1.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Carlos Moedas, Alcalde de Lisboa, fue recibido en la Legislatura por el Vicepresidente 1°, Matías López. La visita, que tuvo lugar en el Salón Eva Perón y también contó con la presencia del Embajador de Portugal en Argentina, José Frederico Viola de Drummond Ludovice, se dio en el marco de la Feria Internacional del Libro, donde Lisboa es la ciudad invitada oficial.</p>
                                                <br>
                                                <p>El evento fue organizado por la Subsecretaría de Relaciones Internacionales y Cooperación Institucional, a cargo del Dr. Pablo Garzonio, en conjunto con la Dirección de Relaciones Internacionales y Cooperación, dirigida por la Dra. Ornela Vanzilliota.</p>
                                                <br>
                                                <p>En el inicio de las alocuciones, López dio la bienvenida al Visitante Ilustre y destacó: “Hoy nuestras ciudades se unen para celebrar nuestros lazos fraternos; son dos ciudades hermanadas portuarias y literarias y queremos ampliar nuestros puentes”. Finalmente, llamó a dar comienzo a una nueva etapa.</p>
                                                <br>
                                                <p>Luego, Ludovice agradeció a López y señaló que la Legislatura es “una casa de la democracia muy importante”, desde donde se logran consensos. También puntualizó que el acto fue una representación de la “hermandad profunda” entre ambos países y ciudades. Y celebró: “¡Viva Buenos Aires! ¡Viva Lisboa! ¡Viva Portugal! ¡Viva Argentina!”.
                                                </p>
                                                <br>
                                                <p>Por último, Moedas afirmó que Buenos Aires es “una ciudad con una energía única y con gente excepcional”. A su vez, agregó: “Tenemos mucho en común, somos ciudades con alma y que nos hace sentir que pertenecemos; hoy Lisboa y Buenos Aires son las ciudades que definen la política del futuro”. Finalmente, resaltó el trabajo del político local: “Trabajamos con las personas, somos los políticos del concreto”.</p>
                                                <br>
                                                <p>Además, estuvieron presentes en el evento los legisladores Matías Barroetaveña, Cecilia Ferrero, Pablo Donatti, Patricia Glize, Jesica Barreto; la Embajadora de Ecuador, Lotti Andrade; el Subsecretario de Cultura de la Ciudad, Roy Cortina; y Nahuel Muñoz, Director de Cooperación Multilateral del Gobierno de la Ciudad.</p>
                                                <br>
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg32')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">AVANZA EL PROCEDIMIENTO PARA LA DESIGNACIÓN DE LOS DEFENSORES ADJUNTOS</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/05/2024</p>
                                        <p><i><b>Se realizó en el Salón San Martín de la Legislatura porteña la Audiencia Pública para continuar con el procedimiento de designación de Defensores Adjuntos de la Defensoría del Pueblo de la Ciudad Autónoma de Buenos Aires, tal como está previsto en el artículo 18 de la Ley N°3.</b></i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_avanza1.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La jornada comenzó con la apertura del registro de postulantes y su publicación en diversos medios de comunicación. En esta etapa, la Junta de Ética, Acuerdos y Organismos de Control, presidida por María Luisa González Estevarena (Vamos por más), lideró la audiencia pública. Junto a ella, participaron los legisladores Inés Parry, titular de la comisión de Justicia, y Hernán Reyes, titular de la comisión de Asuntos Constitucionales, así como otros integrantes de ambas comisiones y la Junta. También estuvieron presentes el vicepresidente primero de la casa legislativa, Matías López, y la actual Defensora del Pueblo de la Ciudad, María Rosa Muiños.</p>
                                                <br>
                                                <p>Los candidatos a Defensores Adjuntos expusieron durante dos horas sus antecedentes, trayectoria y propuestas. Entre los postulantes se encuentran Lidia Saya, Slike Mayra Arndt, Matías Debasa, Arturo Pozzali, Federico Esswein, Facundo Saez, Fernando Susini, Mara Brawer, Santos Gastón Juan, Laura Arce, David Escobar, Carlos Palmiotti, María Patricia Vischi, Ivana Gimenez y Marina Spinetto. Cada uno de ellos presentó sus planes y perspectivas para mejorar la Defensoría del Pueblo y reforzar su papel en la defensa de los derechos de los ciudadanos.</p>
                                                <br>
                                                <p>María Luisa González Estevarena destacó la importancia de este proceso: “La selección de los Defensores Adjuntos es un paso fundamental para garantizar que la Defensoría del Pueblo cuente con personas capacitadas y comprometidas con la defensa de los derechos humanos y la transparencia en la gestión pública”.</p>
                                                <br>
                                                <p>Por su parte, María Rosa Muiños, actual Defensora del Pueblo, subrayó el valor de la participación ciudadana en este tipo de procedimientos: “La audiencia pública permite a los ciudadanos conocer a quienes se postulan para estos roles y asegura que el proceso sea transparente y participativo”.
                                                </p>
                                                <br>
                                                <p>El vicepresidente primero, Matías López, expresó su satisfacción con el desarrollo de la audiencia: “Este tipo de eventos refuerzan la confianza de la ciudadanía en sus instituciones y promueven la participación activa en la vida democrática de la ciudad”.</p>
                                                <br>
                                                <p>A medida que avanza el proceso de designación, se espera que los nuevos Defensores Adjuntos contribuyan significativamente a fortalecer la Defensoría del Pueblo, asegurando una representación efectiva y una gestión transparente que responda a las necesidades y derechos de los porteños. La próxima etapa consistirá en la evaluación de las presentaciones por parte de la Junta de Ética y las comisiones correspondientes, quienes definirán la terna final para la designación.</p>
                                                <br>
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg33')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DÍA INTENSO EN LA LEGISLATURA: CULTURA, MUJERES Y DERECHOS HUMANOS.</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 08/05/2024</p>
                                        <p><i><b>Diputados porteños abordan temas de homenaje cultural, políticas de género y acceso a la salud en una intensa jornada de comisiones.</b></i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_intenso.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En una jornada legislativa cargada de actividad, las comisiones de Cultura, Mujeres, Géneros y Diversidades, y Derechos Humanos de la Legislatura de la Ciudad de Buenos Aires se reunieron para abordar importantes temas de interés público.</p>
                                                <br>
                                                <p>La Comisión de Cultura, presidida por Cecilia Ferrero, propuso una serie de homenajes a destacados sitios culturales de la ciudad, entre ellos el 130° aniversario del emblemático Bar Los 36 Billares. Esta iniciativa resalta la importancia de preservar y celebrar la rica historia cultural de Buenos Aires.</p>
                                                <br>
                                                <p>Por otro lado, la Comisión de Mujeres, Géneros y Diversidades, bajo la dirección de Sol Méndez, llevó a cabo una reunión informativa con la participación de la Subsecretaria de la Mujer, Carolina Barone. En este encuentro, se destacó la necesidad de un trabajo conjunto entre el Legislativo y el Ejecutivo para mejorar las políticas públicas en materia de género, destacando los ejes de gestión que guiarán las acciones futuras en esta área.</p>
                                                <br>
                                                <p>Finalmente, la Comisión de Derechos Humanos, presidida por Victoria Montenegro, se reunió junto a las comisiones de Discapacidad, Niñez, Promoción Social y Salud. El tema central de esta reunión fue el acceso a los medicamentos, con la participación de diversos organismos, instituciones y referentes de la salud. Esta discusión pone de relieve la importancia de garantizar el acceso equitativo a la salud para todos los ciudadanos.
                                                </p>
                                                <br>
                                                <p>En resumen, esta jornada legislativa refleja el compromiso de los diputados porteños con temas fundamentales para la sociedad, como la cultura, los derechos de las mujeres y el acceso a la salud. Estos debates y acciones legislativas son un paso importante hacia una ciudad más inclusiva y equitativa para todos sus habitantes.</p>
                                                <br>
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg34')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">APROBADA ACTUALIZACIÓN DEL PRESUPUESTO DE LA CIUDAD DE BUENOS AIRES</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 16/05/2024</p>
                                        <p><i><b>La Legislatura de la Ciudad de Buenos Aires aprobó por amplia mayoría la actualización del Presupuesto 2024, destacando el equilibrio fiscal y la equidad tributaria como premisas fundamentales. La sesión, presidida por Clara Muzzio, también incluyó temas como ajustes en topes de tributos y beneficios para jubilados.</b></i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_aprobada2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La actualización del Presupuesto de la Ciudad de Buenos Aires para el año 2024 fue aprobada por la Legislatura luego de varias jornadas de trabajo en la comisión legislativa de Presupuesto, Hacienda, Administración Financiera y Política Tributaria. La ley recibió 38 votos positivos de VxM, UCR, CP y LLA, y 20 negativos de UxP y monobloques de izquierda, y fue destacada por el bloque oficialista por su enfoque en el equilibrio fiscal y la equidad tributaria.</p>
                                                <br>
                                                <p>El aumento nominal propuesto en el Presupuesto se basa en la evolución y proyección de las principales variables macroeconómicas, buscando corregir los desfases generados por la inflación. Además de la actualización presupuestaria, se aprobaron modificaciones en los topes de tributos empadronados y en las exenciones del impuesto a los sellos sobre las transferencias de dominio y los contratos de compraventa de vivienda única.</p>
                                                <br>
                                                <p>En un esfuerzo por evitar que muchos contribuyentes se vean forzados a pasar al Régimen General de Ingresos Brutos debido a aumentos de precios, se ajustaron las fórmulas para ajustar montos del impuesto a fin de considerar el incremento real de las actividades o ventas.</p>
                                                <br>
                                                <p>Además, los centros de jubilados y pensionados registrados en la Ciudad de Buenos Aires quedaron exentos del pago del impuesto inmobiliario y de la tasa de ABL. La sesión también incluyó la toma de juramento a los miembros del estamento judicial para integrar el Consejo de la Magistratura y al Jurado de Enjuiciamiento, así como el sorteo de la integración de legisladores en las salas Acusadora y Juzgadora en caso de un Juicio Político.
                                                </p>
                                                <br>
                                                <p>Durante la sesión, que duró casi 5 horas, también se abordaron otros temas como los homenajes por el 50 aniversario de la muerte del padre Mugica y la autorización para establecer una tarifa diferencial en el precio de la entrada al Jardín Japonés para no residentes.</p>
                                                <br>
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg35')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">JOSÉ TCHERKASKI ES PERSONALIDAD DESTACADA DE LA CIUDAD</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 25/05/2024</p>
                                        <p><i><b>El Cuerpo Legislativo resaltó la trayectoria del escritor y periodista, que fue autor de grandes temas como “Para el pueblo lo que es del pueblo” y “Mi Viejo”.</b></i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_jose2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Legislatura de la Ciudad declaró al periodista y escritor, José Tcherkaskik, como Personalidad Destacada en el ámbito de la Cultura, en un acto que se llevó a cabo en el Salón Presidente Alfonsín. Y que estuvo encabezado por el homenajeado y el diputado y autor del proyecto, Gabriel Solano.</p>
                                                <br>
                                                <p>Al momento de los discursos, Solano contó cómo surgió la iniciativa de la declaración y destacó: “Este es un acto de justicia, su tarea fue muy importante y se debe saber quién es el autor de las canciones populares”.</p>
                                                <br>
                                                <p>“Este es un día importante, nunca lo esperé. Este reconocimiento viene en un momento muy particular”, resaltó el homenajeado. Y finalmente se refirió a su relación con el cantante Piero.</p>
                                                <br>
                                                <p>José Tcherkaski es un escritor, periodista y autor de numerosas canciones, entre las que se destaca "Mi viejo". Aunque esta canción se hizo famosa en la voz de Piero, José fue quien la escribió inspirado en su padre, Mario, cuando tenía 25 años. A pesar de que tuvieron que tocar muchas puertas, finalmente encontraron un sello discográfico dispuesto a grabar este icónico tema que sigue siendo popular después de 50 años.
                                                </p>
                                                <br>
                                                <p>José es un talentoso escritor, no solo de canciones, sino también de recitados, poesías, semblanzas y entrevistas a destacados personajes culturales de todo el mundo. Ha tenido la oportunidad de entrevistar a Fellini, Alain Delon y Siqueiros, entre otros. También ha escrito al menos 30 libros y compuesto alrededor de 140 canciones.</p>
                                                <br>
                                                <p>"Mi viejo" es probablemente la canción que ha alcanzado mayor reconocimiento, siendo traducida a diferentes idiomas y considerada la mejor canción en la historia que representa al padre en el mundo hispanohablante. Además de Piero, otros artistas como Nicola Di Bari, Demis Roussos, Mauro Calderón, Manolo Otero, Leo Dan, Leo Mattioli, Leo García y Antony Santos han interpretado esta emblemática canción.</p>
                                                <br>
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg36')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">En el aniversario  de “Ni una Menos” la Legislatura inauguró la muestra “Tatuajes Sanadores” junto a Manginga Tattoo</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/06/2024</p>
                                        <p><i>Se trata de una exhibición de imágenes de mujeres que sufrieron lesiones y marcas en su piel por violencia de género, las cuales fueron tapadas gracias al arte de los tatuajes.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_muestra2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Legislatura de la Ciudad inauguró la muestra “Tatuajes Sanadores” de la Fundación Mandinga Tattoo, que exhibe imágenes de mujeres que sufrieron lesiones violentas en su cuerpo y fueron tapadas con el arte de los tatuajes.</p>
                                                <br>
                                                <p>En el marco de un nuevo aniversario de “Ni una menos”, la Casa Parlamentaria abrió sus puertas para exponer en el Hall de la planta baja una colección de imágenes que reflejan cómo el arte del tatuaje pudo generar un cambio de vida en víctimas de violencia de género gracias a los tatuajes realizados por el equipo de Mandinga Tattoo, que lograron tapar cirugías, quemaduras y otras marcas en la piel.  La galería de fotos quedará abierta para la vista de los vecinos de la Ciudad hasta el viernes 7 de junio a las 18 horas.</p>
                                                <br>
                                                <p>El vicepresidente primero de la Legislatura, Matías López, encabezó la inauguración de la muestra, junto a Diego Startopoli, director de la Fundación Mandinga. Durante el encuentro, López destacó “el trabajo que la Fundación Mandinga Tattoo viene haciendo hace muchos años de acompañar a las mujeres en estos procesos de violencia” y afirmó que el trabajo que realizan busca “convertir el horror y el dolor en arte” para “sanar de alguna manera el alma”. Por su parte, la diputada María Sol Méndez, presidenta de la Comisión de Mujeres, Género y Diversidad,  destacó que  “estamos todos muy contentos de poder tener esta muestra, recordando aquel 3 de junio del 2015” y reflexionó que aquel “asesinato de Chiara Páez, una adolescente de 14 años que estaba embarazada y que fue enterrada en el patio de quien había sido su novio y la había asesinado, nos interpeló a todas”.</p>
                                                <br>
                                                <p>El director de la fundación, Diego Staropoli, manifestó que “cuando llegan a Mandinga, lo primero que les pregunto es ‘¿estás dispuesta a que te cambiemos la vida?’. Esos tatuajes yo los bauticé como ‘Tatuajes Sanadores’ porque sin duda son tatuajes que sanan el alma. Estamos siempre dispuestos y con las puertas abiertas para que al menos podamos cambiar un poquito la vida de esa mujer que nos tocó intervenir”.
                                                </p>
                                                <br>
                                                <p>Diego y Mandinga fueron reconocidos en anteriores oportunidades en el Palacio Legislativo por sus acciones sociales, que también incluyen tatuajes sanadores en mujeres que tuvieron cáncer de mama y personas que atraviesan diabetes. “Esta muestra es una manera de homenajear no sólo estas 15 que ustedes ven, hemos tatuado a muchísimas mujeres más que no son parte de esta galería. Pero en homenaje a ellas yo solamente les digo gracias y ojalá que esta historia pueda cambiar en algún momento porque realmente es muy preocupante” concluyó el tatuador.</p>
                                                <br>
                                                <p>Para finalizar, impactó el testimonio de Yanina Maidana, quien sufrió  quemaduras  en el 40% de su cuerpo a sus 23 años, tras ser víctima de violencia por parte de su pareja en 2010. Luego de 28 días en coma, con asistencia respiratoria, 37 cirugías, un ACV e insuficiencia renal, pudo conocer a Diego Staropoli y su equipo en Mandinga.  “Lo conocí por otra chica que también estaba internada junto conmigo” explicó Yanina y afirmó que “antes no me miraba, andaba con remera manga larga en mi propia casa y cuando Diego me hizo este tatuaje me cambió la vida de verdad. Hasta la seguridad de poder estar hablando” y resumió que luego del trabajo de Mandinga Tattoo “querés de vuelta tu cuerpo”.</p>
                                                <br>
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg37')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Se reunió la Comisión de Justicia para avanzar con Ley de Reiterancia</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 04/06/2024</p>
                                        <p><i>También se reunieron las comisiones de Asuntos Constitucionales y de Presupuesto, Hacienda, Administración Financiera y Política Tributaria y Turismo y Deporte</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_comision2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La jornada comenzó con dos reuniones de la comisión de Justicia, una de ellas junto a la Comisión de Asuntos Constitucionales, donde se dictaminó avanzar con el proyecto de Reiterancia en la próxima sesión.</p>
                                                <br>
                                                <p>Durante el encutrno de hoy se abordó la posibilidad de que Los tribunales deberán comunicar a la Dirección Nacional de Migraciones cuando se dicten sentencias condenatorias a personas extranjeras. Además se incluyen dentro de las circunstancias que determinan peligro de fuga para la prisión preventiva la reiteración delictiva y se definen condiciones para allanamientos urgentes para las fuerzas de seguridad, en situaciones de emergencia o delito flagrante, las cuales deben contemplar comunicación inmediata al juez y al fiscal.</p>
                                                <br>
                                                <p>La Reiterancia es un proyecto presentado por el Jefe de Gobierno, Jorge Macri, quien inició un debate sobre el tema que hoy cuenta con otras 4 propuestas presentadas por diferentes diputados. El objetivo es modificar el Código Procesal Penal para que aquella persona que vuelve a cometer un delito, atraviese el proceso en la cárcel, en lugar de hacerlo en libertad. El trabajo en comisión llevó varias jornadas de debate, con un proceso que contempló la visita del ministro de Justicia porteño, Gabino Tapia junto a su equipo y la concurrencia de distintos expertos que opinaron sobre diferentes aspectos de la temática, a fin de lograr un texto consolidado a ser debatido en la próxima sesión.</p>
                                                <br>
                                                <p>De las reuniones de hoy participaron los diputados integrantes de ambas comisiones, el vicepresidente primero de la Legislatura, Matías López, las vicepresidentas de Justicia, Claudia Neira (Union por la Patria) y Gimena Villafruela (Vamos por Más) y el presidente de la Comisión de Asuntos Constitucionales, Hernan Reyes (Vamos por Más).
                                                </p>
                                                <br>
                                                <p>El temario también incluyó las modificaciones de la Ley 7 para adecuar la nomenclatura de los órganos judiciales a sus funciones actuales, reflejando mejor las competencias y especializaciones desarrolladas. En función de esto se agrega la Cámara de Casación y Apelaciones en lo Penal, Penal Juvenil, Contravencional y de Faltas, el artículo 7 de la Ley 7. Este cambio responde a necesidades prácticas y jurisprudenciales, y alinea la estructura judicial con las resoluciones del Consejo de la Magistratura y el Código Procesal Penal.</p>
                                                <br>
                                                <p>Más tarde llegó el turno de la reunión conjunta de las de las comisiones de Asuntos Constitucionales y de Presupuesto, Hacienda, Administración Financiera y Política Tributaria, que trató dos expedientes relacionados con el sistema estadístico de la Ciudad, bajo la presidencia de los titulares de ambas comisiones Hernán Reyes y Paola Michielotto (VxM). Se abordó un proyecto para que todos los datos estadísticos producidos por la Ciudad pasen a ser públicos, tanto para su uso como para su difusión, institucionalizando el manejo de las estadísticas públicas de la Ciudad. Es un orientación para todo el país ya que no existe un instituto independiente autárquico y autónomo para el majeo de las estadísticas públicas como el que se propone en CABA. De modo que pasará a ser una política pública.</p>
                                                <br>
                                                <p>Por último, se realizó la reunión conjunta de las comisiones de Turismo y Deporte y de Presupuesto, Hacienda, Administración Financiera y Política Tributaria para tratar expedientes vinculados a la gratuidad de las cuentas del Banco Ciudad para los clubes de barrio en le Ciudad de Buenos Aires. La propuesta recibió despacho único y será tratada en el recinto de Sesiones y presidieron el encuentro las diputadas Maia Daer (UxP) y Paola Michielotto (VxM) presidentas de ambas comisiones. En el comienzo expusieron Ana Rodríguez, Vicepresidenta del Club Malvinas y Guido Veneziale, titular de la Federación de Organizaciones Deportivas de la Argentina (FODA), quienes agradecieron el espacio y el tratamiento del proyecto de ley que beneficiará a las pequeñas entidades radicadas en la Ciudad.</p>
                                                <br>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg38')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DESTACAN A AMALIA LABRA SANZ DE LODI Y ALBERTO LÓPEZ POR SU CONTRIBUCIÓN A LA EDUCACIÓN Y LA CULTURA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 08/06/2024</p>
                                        <p><i>Los legisladores de la Ciudad destacaron la carrera profesional de la docente y la trayectoria del músico y gaitero, por medio de dos proyectos presentados por los legisladores Sergio Siciliano y María Cecilia Ferrero.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_amalia2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Los diputados de la Ciudad Autónoma de Buenos Aires declararon a la fundadora y directora general del Colegio Lincoln Hall del Barrio de Belgrano, Amalia Labra Sanz de Lodi, como Personalidad Destacada en el ámbito de la Educación. En el acto celebrado en el Salón San Martín participaron el diputado y autor del proyecto, Sergio Siciliano, y la homenajeada junto a familiares y amigos.</p>
                                                <br>
                                                <p>Después de dar la bienvenida a “la casa de todos los porteños  y porteñas”, Siciliano destacó: “En la figura de Amalia hay muchos reconocimientos a la vez, no solo un reconocimiento a una gran pedagoga, una persona que sigue dedicando su vida a la educación y el aprendizaje de los niños; sino también a una mujer con historia”. También relató cómo surgió la iniciativa, a través de un proyecto presentado por sus ex alumnos. E informó que fue votada en forma unánime por todo el Cuerpo Legislativo. A su turno, la docente agradeció la distinción y contó su historia de vida.</p>
                                                <br>
                                                <p>La Profesora Amalia Labra Sanz de Lodi tuvo durante toda su vida un gran compromiso con la educación en nuestro país. Exiliada de la guerra española, llegó a la Argentina con tan solo siete años. En el año 1946 egresó de la Escuela N°1 de Profesoras de la Capital "Presidente Roque Sáenz Peña" y en 1948 se convirtió en Profesora Normal Nacional de Jardín de Infantes, luego de estudiar en el Instituto de Profesorado Superior en Jardín de Infantes "Sara Ch. de Eccleston".
                                                </p>
                                                <br>
                                                <p>Agradecida con el recibimiento en nuestro país, quiso devolver con su aporte a la educación la formación que recibió en la escuela pública y por eso funda en 1950 el Colegio Lincoln Hall en el Barrio de Belgrano.</p>
                                                <br>
                                                <p>Su incansable labor para jerarquizar la educación en nuestro país la hicieron merecedora de una serie reconocimientos de la Junta Coordinadora de Asociaciones de la Enseñanza Privada de la República Argentina (COORDIEP). En 2015, en el marco del XIII Encuentro Federal de Escuelas Públicas de Gestión Privada recibió un galardón en reconocimiento de su aporte a la educación; y en 2017 fue distinguida por su larga trayectoria y fortalecimiento de la Educación Privada en nuestro país. Entre otros laureles.</p>
                                                <br>
                                                <p>Hoy la Profesora Labra Sanz de Lodi tiene 95 años y aún continúa asistiendo diariamente a su trabajo en el Colegio Lincoln Hall donde, como fundadora y directora general, supervisa que su espíritu continúe en la tarea diaria de todos los y las docentes de esa institución educativa.</p>
                                                <br>
                                                <p>Luego tuvo lugar el acto que declaró al gaitero, Alberto López, como Personalidad Destacada de la Cultura. Allí participó la legisladora y autora del proyecto, María Cecilia Ferrero, junto al distinguido homenajeado. “Elegí trabajar muy cerca con la colectividad española por mi acercamiento, debemos fortalecer y honrar el fortalecimiento de nuestros pueblos”, señaló la legisladora. Y concluyó, respecto al gaitero: “Es sinónimo de galleguidad y defiende su identidad en cada rincón de la Ciudad, lo que destaca su impronta internacional”.</p>
                                                <br>
                                                <p>Nacido en Buenos Aires en 1971, Alberto López es hijo de inmigrantes gallegos, que llegaron a nuestra ciudad durante la llamada “última oleada migratoria” de Galicia a la Argentina. Compositor, intérprete virtuoso de diferentes instrumentos entre los que sobresale la gaita gallega, su formación artística es vasta. Como estudiante asistió a clases de gaita, danzas españolas, música celta, coro, tango y folklore argentino.  Mientras que su formación en la ejecución de la gaita comenzó en el Centro Galicia de Buenos Aires.</p>
                                                <br>
                                                <p>Actualmente Integra diversos conjuntos musicales, entre ellos el de música celta “Abrego”, cuyos orígenes se remontan a 1989. También, desde su creación en 1998, del grupo de folk celta “Sete Netos”, en alusión a la identidad galaico-porteña de sus miembros y a la influencia de los abuelos en su música.</p>
                                                <br>
                                                <p>Además es Director desde 1999 de las escuelas de gaita y la banda de la Asociación Galega Residentes de Mos en Buenos Aires (“Os demos de Mos”), y desde 2012 profesor y director de la  “Escuela de Gaitas” del Centro Galicia, con el que actúa con asiduidad. Y ha realizado giras internacionales, y donde también está a cargo de la “Escuela de Música Celta” de la institución.</p>
                                                <br>
                                                <p>Debido a sus sobresalientes dotes musicales, que han trascendido las fronteras de nuestro país y cruzado el océano llegando hasta el noroeste peninsular, fue convocado para actuar en distintos escenarios junto a grandes músicos de la Galicia metropolitana, entre los que sobresalen los reconocidos gaiteiros Carlos Núñez y Susana Seivane, durante sus visitas a nuestra ciudad.</p>
                                                <br>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg39')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA LEGISLATURA DISTINGUIÓ EL TRABAJO DE LA EMPRENDEDORA LORENA ALBARRACÍN</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 11/06/2024</p>
                                        <p><i>El Cuerpo Legislativo destacó la labor de la homenajeada en el rubro científico-tecnológico.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_lorena2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Legislatura de la Ciudad entregó el Diploma al Emprendedor a Lorena Albarracín, en el rubro científico-tecnológico. El acto se llevó a cabo dentro del Salón Montevideo y contó con la presencia del legislador Juan Pablo Modarelli; el autor del proyecto y diputado mandato cumplido, Claudio Morresi, y la homenajeada.</p>
                                                <br>
                                                <p>Lorena Albarracín, junto a Diana Castellanos, desarrolló el CANNATEST, un innovador método que permite identificar las concentraciones de cannabinoides en diferentes matrices, como material vegetal, extracciones, aceites y mantecas. Es una herramienta de gran utilidad, tanto para cultivadores como para fabricantes de derivados de Cannabis, médicos y usuarios, que deseen conocer el contenido en mg/g (miligramos sobre gramos) del material analizado, siendo un método cualitativo y cuantitativo.</p>
                                                <br>
                                                <p>Es el único test de estas características representando una innovadora invención argentina. Además de ser un test que cualquier persona puede utilizar, otro de los beneficios es que se requiere una mínima muestra para obtener el resultado. El test que desarrollaron Albarracín y Castellanos se encuentra en la última etapa de validación científica por parte de laboratorios FARMACOOP, contando con una validación previa. Este test proporciona resultados rápidos y precisos logrando que el uso de cannabis sea seguro, tanto el material vegetal como las extracciones, aceites y mantecas.
                                                </p>
                                                <br>
                                                <p>“Con este test es la primera vez que de una manera no costosa, uno puede saber exactamente la composición y lo que tiene frente a sus ojos, ya sea un aceite o en cualquiera de sus derivados”, destacó Modarelli, respecto al trabajo de Albarracín. Y abogó por el acceso a la información, “la deconstrucción de mitos” y encontrar ventajas y desventajas.</p>
                                                <br>
                                                <p>Por su parte, Albarracín agradeció la distinción. Y afirmó: “Queríamos generar accesibilidad y hacer que más pacientes y personas puedan acceder a productos de calidad, que la industria y el monopolio del cannabis no sea un impedimento para los productores”. Finalmente Morresi celebró “las diferentes ideas e ideologías” que hay en la Ciudad de Buenos Aires.</p>
                                                <br>
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg40')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SE REUNIERON LAS COMISIONES DE VIVIENDA Y DE PRESUPUESTO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 12/06/2024</p>
                                        <p><i>Esta mañana en el salón Alfonsín se reunió la Comisión de Vivienda que preside Gustavo Mola (UCR Evolución) e integran Francisco Loupias (UCR Evolución), Victoria Freire, Berencie Iañez  Juan O´dezaille  (Unión por la Patria), Cecilia Ferrero (Vamos por Más), Sandra Rey y Leonardo Saifert (La Libertad Avanza)</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_vivienda2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Durante el encuentro se elevó dictamen para solicitar información relacionada a los programas de créditos hipotecarios individuales del Instituto Vivienda de la Ciudad, el apoyo a personas en situación de vulnerabilidad habitacional,  las políticas de alquiler de vivienda y al accionar de corredores inmobiliarios y sobre la Ley 3902 -operatoria de regularización dominial de los bienes inmuebles-.</p>
                                                <br>
                                                <p>Antes del mediodía también se reunió la Comisión de Presupuesto, Hacienda, Administración Financiera y Política Tributaria en el salón San Martín. La legisladora Paola Michielotto (Vamos por más), presidenta de la comisión, puso a consideración el expediente propuesto por el Poder Ejecutivo que propone sustituir el texto del artículo 1 de la Ley 6504.</p>
                                                <br>
                                                <p>Se refiere a la autorización al Poder Ejecutivo, a través del Ministerio de Hacienda y Finanzas, a efectuar operaciones voluntarias de administración de pasivos, cualquiera sea el instrumento que las exprese, por hasta la suma de dólares estadounidenses mil cien millones (USD 1.100.000.000) o su equivalente en pesos, otra u otras monedas o unidades de valor (en adelante, los "Títulos"). Y a la ampliación, por tanto, del monto del Programa de Asistencia Financiera y/o del Programa de Financiamiento en el Mercado Local, por el importe máximo determinado en el párrafo anterior, en la proporción al monto a ser emitido en cada caso.”
                                                </p>
                                                <br>
                                                <p>Además de Michielotto, estuvieron presentes Matías López, vicepresidente de la Legislatura porteña, juan Pablo Arenaza, Facundo Del Gaiso,  Darío Nieto,  Sergio Siciliano (Vamos por Más), Lucio Lapeña, Fernando Mollard (UCR Evolución), María Luisa Gonzalez Estevarena, Sebastián Nagata (Confianza Pública) y Pilar Ramírez (La Libertad Avanza).</p>
                                                <br>
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg41')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA LEGISLATURA APROBÓ LA LEY DE REITERANCIA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 13/06/2024</p>
                                        <p><i>Además de los cambios en el Código Procesal de la Ciudad, se creó el INDEC porteño, readecuaron la antigüedad de los taxis, se aprobaron beneficios para clubes de barrio y se hicieron modificaciones en Ley de Mecenazgo.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_reite2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Los diputados de la Ciudad de Buenos Aires sancionaron hoy una ley que agrava la situación procesal penal de los imputados con “reiteración de delitos” en una sesión que comenzó cerca del mediodía y fue presidida por la Vicejefa de Gobierno, Clara Muzzio.</p>
                                                <br>
                                                <p>Estas modificaciones al Código Procesal Penal porteño fueron establecidas en una ley que impulsó el jefe de Gobierno de la Ciudad, Jorge Macri, la cual se analizó y discutió durante varias jornadas en las comisiones parlamentarias de Justicia y de Asuntos Constitucionales. Finalmente, este jueves se aprobó en sesión ordinaria por 36 votos positivos sobre 57 diputados presentes, con la oposición de Unión x la Patria y diputados de izquierda.</p>
                                                <br>
                                                <p>La adecuación consiste en modificar el artículo 182 del Código, incorporando a la reiteración delictiva como una nueva circunstancia objetiva a evaluar por los jueces y juezas a la hora de considerar el peligro de fuga. “Es una medida que encuentra sólido respaldo en la jurisprudencia de la Corte Suprema y en la normativa vigente”, se fundamentó en el despacho tratado y aprobado.
                                                </p>
                                                <br>
                                                <p>Además, ciertos actos dictados en el marco de un proceso penal concernientes a personas de nacionalidad extranjera que se encuentren involucrados en hechos delictivos, deberán ser comunicados por los jueces a la Dirección Nacional de Migraciones. También se suma la obligación de informar cuando en un proceso penal se dicte sentencia condenatoria y respecto de los extranjeros que cumplen penas privativas de la libertad, si se dan las condiciones de extrañamiento (expulsión del territorio nacional).</p>
                                                <br>
                                                <p>En cuanto a situaciones de ilícitos en flagrancia, se legislan normas especiales en lo que se denomina “allanamiento de urgencia” y en todos los supuestos, efectuadas las actuaciones de urgencia, se deberá notificar de manera inmediata al juez y al fiscal.” Otra norma relacionada con lo judicial que fue aprobada este jueves es una ley que ordena y define taxativamente la nomenclatura de todos los órganos y estamentos del Poder Judicial de la Ciudad Autónoma.</p>
                                                <br>
                                                <p>Antigüedad de los taxis</p>
                                                <br>
                                                <p>Por unanimidad, los diputados legislaron sobre una prolongación de la vida útil de los automotores asignados al servicio de taxis. Se permitirá, para el año actual, la circulación de modelos de hasta 14 años de antigüedad. Para los años 2025 y 2026 regirá el tope máximo de 15 años de uso y, luego, mediante una tabla decreciente, se dispone volver en el 2030 al techo de 10 años de uso como máximo. Los coches con más de 10 años deberán hacer la verificación técnica cada 6 meses.</p>
                                                <br>
                                                <p>El INDEC de la Ciudad</p>
                                                <br>
                                                <p>Por unanimidad, quedó convertida en ley la normativa que regula y reglamenta el funcionamiento del sistema estadístico del ámbito metropolitano. Al efecto, se creó el Instituto de Estadística y Censo de la Ciudad de Buenos Aires (INDECBA).</p>
                                                <br>
                                                <p>Capacitación sobre mayores</p>
                                                <br>
                                                <p>Con despacho de las comisiones de Personas Mayores y Legislación del Trabajo y el voto ampliamente mayoritario de los legisladores, se ordenó la capacitación obligatoria de todo el personal de la función pública de la Ciudad, en sus tres poderes (Ejecutivo, Legislativo y Judicial), en lo que se denomina “perspectiva de edad”, que es el buen trato a las personas mayores.</p>
                                                <br>
                                                <p>Para los clubes de barrio</p>
                                                <br>
                                                <p>Por iniciativa de la comisión de Turismo y Deporte, el cuerpo parlamentario aprobó una medida que permitirá a los clubes de barrio abrir cuentas corrientes en el Banco Ciudad sin costos de apertura, operativos o de mantenimiento.</p>
                                                <br>
                                                <p>Designaciones</p>
                                                <br>
                                                <p>Adrián Hugo González y Tomás Aguerre fueron formalmente designados como director titular y director adjunto, respectivamente, del Instituto de Gestión Electoral de la Ciudad.</p>
                                                <br>
                                                <p>Por otra parte, se aprobó la nominación de Ezequiel Martín Quaine para cubrir el cargo de Juez de Primera Instancia en lo Penal, Penal Juvenil, Contravencional de Faltas de la Ciudad.</p>
                                                <br>
                                                <p>Nueva legisladora</p>
                                                <br>
                                                <p>Alejandrina Barry renunció este jueves a su banca de legisladora y fue reemplazada por Mercedes Trimarchi. Ambas fueron electas por el Frente de Izquierda, aunque en la Legislatura conforman monobloques con distintos nombres. El relevo está relacionado con decisiones internas de “rotación” de esa agrupación política.</p>
                                                <br>
                                                <p>Ley de Mecenazgo</p>
                                                <br>
                                                <p>El proyecto busca fomentar la financiación privada de iniciativas culturales, incentivando la creación de diversas manifestaciones artísticas y fortaleciendo el sector cultural de la Ciudad. Desde su implementación, ha apoyado miles de proyectos en áreas como teatro, danza, música, artes visuales y más, siendo fundamental para muchos artistas y colectivos.</p>
                                                <br>
                                                <p>A fin de seguir promoviendo el desarrollo de la cultura en la Ciudad Autónoma de Buenos Aires, y posibilitar una mayor participación de los privados en el sector, se propician las siguientes modificaciones a la norma vigente: establecer el veinte por ciento (20%) como aporte que puede imputar el patrocinador en virtud del régimen, salvo para los Grandes Contribuyentes que se mantiene en el diez por ciento (10%); establecer un esquema del ochenta por ciento (80%) de aporte al proyecto cultural para ser considerado como un pago a cuenta del impuesto sobre los Ingresos Brutos con el tope establecido por el artículo 15 de la Ley, y en consecuencia derogar el artículo 19 que exime a los proyectos culturales de inclusión social de la aplicación del artículo 17.</p>
                                                <br>
                                                <p>También introduce nuevas facultades para la Autoridad de Aplicación, como la aprobación de proyectos, la administración de recursos, el control del cumplimiento de los beneficios y la creación de un comité evaluador.  Los integrantes del Consejo de Participación Cultural y del comité evaluador quedan inhabilitados para presentar o participar en proyectos culturales durante su ejercicio y un año después.</p>
                                                <br>
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg42')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA LEGISLATURA DECLARÓ DE INTERÉS AL LIBRO ‘GUERRERO DEL SILENCIO’</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 19/06/2024</p>
                                        <p><i>La publicación desarrolla la biografía del exministro de Educación de la Nación y ex legislador, Esteban Bullrich, quien fue homenajeado en el marco del mes de la Esclerosis Lateral Amiotrófica (ELA).</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_libro2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En el marco del Día Mundial de la Esclerosis Lateral Amiotrófica (ELA), que se conmemora el 21 de junio, hoy se realizó ‘La Legislatura habla de ELA’, una jornada que buscó exponer las problemáticas sociales y el acceso a la salud de las familias que transitan esta enfermedad neuromuscular degenerativa. Durante el encuentro, los legisladores de la Ciudad de Buenos Aires declararon de Interés Social al libro ‘Guerrero del silencio’, biografía del exsenador nacional y exministro de Educación de la Nación, Esteban José Bullrich, escrito por Pablo Sirvén.</p>
                                                <br>
                                                <p>El acto se realizó en el Salón Dorado del Palacio Legislativo y contó con la presencia de la diputada y autora del proyecto, Silvia Imas; la Presidenta de la Legislatura y Vicejefa de Gobierno de la Ciudad, Clara Muzzio; la Directora Ejecutiva de la Fundación Esteban Bullrich, Agustina Bugnard; el Mayor Retirado del Ejército Argentino, Fernando Domínguez y el homenajeado, Esteban Bullrich.</p>
                                                <br>
                                                <p>En el inicio de las alocuciones, Muzzio enfatizó: “Mediante esta declaración de interés no solamente queremos reconocer el gran trabajo que hace la Fundación Esteban Bullrich y reconocer a todos los trabajadores de la salud, sino también a través de libro empezar a reconocer a Esteban; que es una fuente de inspiración para todos nosotros".
                                                </p>
                                                <br>
                                                <p>A su turno, Imas señaló la importancia de la reunión para la comunidad y para la Legislatura. Luego puntualizó: “La ELA no afecta únicamente al paciente, sino a todo su entorno y transforma drásticamente la dinámica familiar”. Y destacó el rol de la Fundación Esteban Bullrich: “Quiero asumir un compromiso con la fundación y con todos ustedes, desde nuestro lugar, de hacer cada vez más visible la labor de la fundación”. ”. Finalmente Bullrich agradeció a Muzzio y a Imas por el reconocimiento y por darle voz a dicha enfermedad.</p>
                                                <br>
                                                <p>En el año 2022, el escritor Pablo Sirvén, encaró la desafiante tarea de escribir la biografía del exsenador Nacional Esteban Bullrich, quien había sido diagnosticado recientemente con Esclerosis Lateral Amiotrófica (ELA), una enfermedad neurodegenerativa que afecta, aproximadamente, a 2 por cada 100.000 argentinos por año.</p>
                                                <br>
                                                <p>El libro, presentado en mayo de 2023, no es un mero recorrido cronológico por la historia de Esteban, sino una verdadera inmersión en su lucha contra la enfermedad; su motivo de vida y su tan arraigada fe que jamás lo han alejado de su antigua lucha contra la “mala política” y la grieta. Sobre estos pilares, fundamentales en la vida del ex senador, versa “Guerrero del Silencio”.</p>
                                                <br>
                                                <p>La publicación narra, íntimamente, una crónica de lucha contra la enfermedad y resalta la actitud que Esteban Bullrich ha tomado a partir de su diagnóstico. De la mano de la fe y de su más preciado sostén, su familia, Esteban se ha convertido en un ejemplo de resiliencia y vitalidad.</p>
                                                <br>
                                                <p>Adicionalmente, la obra va en línea con la misión de Esteban, que es seguir concientizando a la población sobre la ELA, una enfermedad poco frecuente, que aún no despierta el suficiente interés y, por este mismo motivo, no consigue el financiamiento necesario para encontrar su cura. En palabras del protagonista: “La ELA tiene cura, solo falta investigarla”.</p>
                                                <br>
                                                
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg43')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ALEJANDRO MEDINA ES NUEVA PERSONALIDAD DESTACADA DE LA CIUDAD</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 26/06/2024</p>
                                        <p><i>El Cuerpo Legislativo destacó la trayectoria del ex bajista de Manal, Aeroblus, Pappo’s Blues y Billy Bond y La Pesada del Rock and Roll.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_medina2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Legislatura de la Ciudad, a través de sus diputados, declararon como Personalidad Destacada en el ámbito de la cultura al bajista y músico, Alejandro Medina. La ceremonia se llevó a cabo en el Salón San Martín y estuvo encabezada por la legisladora y autora del proyecto, Claudia Neira. Y quien estuvo acompañada por el homenajeado y su esposa, Lola Medina.</p>
                                                <br>
                                                <p>“Es un privilegio poder homenajear a uno de los próceres y de las leyendas vivas del rock nacional”, destacó Neira en el comienzo de las alocuciones. Luego puntualizó en la influencia de Manal -ex banda de Medina-: “En ese primer Manal hay mucho de la nostalgia tanguera de la Ciudad de Buenos Aires”. Y concluyó en la importancia de darle reconocimiento a la cultura que hay en nuestro país. Finalmente Medina agradeció el acompañamiento de los presentes, previo a realizar un número musical.</p>
                                                <br>
                                                <p>Alejandro Medina es un reconocido bajista, compositor y cantante argentino. Nacido en el barrio de Almagro, a sus diez años comenzó a tocar la trompeta y a sus catorce años realizó el cambio por su bajo. A su vez, desempeñó un papel fundamental en el desarrollo y consolidación del rock y el blues en Argentina. En ese sentido, a sus dieciocho años y junto a Claudio Gabis y Javier Martínez, fundaron la emblemática banda Manal, el primer grupo de blues en español; que constituye uno de los grupos fundacionales del rock argentino, en conjunto con Almendra y Los Gatos. Y uno de los primeros en componer el género de blues y rock en castellano.
                                                </p>
                                                <br>
                                                <p>Tras la disolución de Manal en 1971, Medina continuó su carrera musical integrando la banda de Billy Bond y La Pesada del Rock and Roll junto con Billy Bond, Jorge Pinchevesky y Pappo, entre otros. La banda participó en festivales destacados como B.A. Rock. y grabando álbumes que se convirtieron en referentes del género. Su incursión en proyectos solistas y colaboraciones con otros músicos importantes, como Sui Generis y Raúl Porchetto, también dejaron su marca en la escena musical argentina de los años 70.</p>
                                                <br>
                                                <p>En 1977 formó la banda llamada Aeroblus junto con Pappo y Rolando Castello Junior, con quienes grabaron un álbum con el mismo nombre de la banda; y que constituye hasta el día de hoy una referencia del comienzo del rock pesado y el hard rock en Argentina. Con una trayectoria que abarca más de seis décadas, Alejandro Medina ha demostrado una dedicación con la música, continuando su labor musical a través de su proyecto actual, Medinight Band.</p>
                                                <br>
                                                <p>Alejandro Medina contribuyó significativamente al enriquecimiento musical argentino. Sus aportes tanto en la composición como sus realizaciones instrumentales fueron y son fundamentales para la evolución del rock y el blues en español.</p>
                                                <br>
                                                
                                                
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg44')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ERNESTO CHERQUIS BIALO FUE DECLARADO COMO PERSONALIDAD DESTACADA DE LA CIUDAD</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/07/2024</p>
                                        <p><i>El reconocido periodista deportivo fue distinguido por su extensa trayectoria profesional, por medio de un proyecto presentado por el diputado, Alejandro Grillo.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_cherquis1.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El Cuerpo Legislativo de la Ciudad declaró a Ernesto Cherquis Bialo como Personalidad Destacada en el ámbito del periodismo deportivo. El acto se realizó en el Salón Dorado y contó con la presencia del diputado y autor del proyecto, Alejandro Grillo; los periodistas deportivos Julio Ricardo, Diego Horacio Fucks y Luana Viera; y el homenajeado. Además el cantor, Leonardo Pastore, realizó un número musical.</p>
                                                <br>
                                                <p>“Es una tarde de emociones en nuestra casa”, declaró Grillo, en la apertura de las alocuciones. Luego señaló que la iniciativa contó con el voto unánime del arco político. Y destacó: “Encontramos en Cherquis un paradigma principalmente del periodismo y de la cultura, un tipo con rigurosidad, objetividad, con una pluma privilegiada que pocos tienen”.</p>
                                                <br>
                                                <p>Finalmente, el homenajeado comentó: “Soy un contador de historias y las veces que me designaron para hablar con motivo de algún reconocimiento, el sujeto era el otro porque nuestra vida es el otro”.
                                                </p>
                                                <br>
                                                <p>Ernesto Cherquis Bialo nació el 30 de septiembre de 1940 en la ciudad de Montevideo, Uruguay. Su carrera profesional como periodista deportivo se desarrolló íntegramente en nuestro país desde hace 62 años de manera ininterrumpida, sus primeros pasos en la profesión fueron como pasante en la revista El Gráfico desde el 28 de marzo de 1963, retirándose como director editorial el 31 de diciembre de 1990.</p>
                                                <br>
                                                <p>Durante esos años también trabajó en radio Mitre y en radio Rivadavia. Por esta dicotomía, en El Gráfico tuvo que apelar al seudónimo de Robinson con el que firmó más de 1.200 notas durante una trayectoria de 28 años, llegando a cubrir 144 peleas de boxeo por campeonato del mundo. La profesión le permitió visitar infinidad de ciudades cubriendo Juegos Olímpicos, campeonatos mundiales de fútbol, grandes entrevistas a deportistas de época, tales como Muhammad Alí, Bobby Fischer, Pele, Alfredo Di Stéfano, y decenas de deportistas de élite.</p>
                                                <br>
                                                <p>Además, tuvo el privilegio de ser el biógrafo de Ringo Bonavena, Carlos Monzón y Diego Armando Maradona. Fue profesor de la Universidad Católica Argentina en el curso de extensión de la carrera de periodismo durante 15 años como profesor titular de la materia “Fuentes de información y otras nuevas tecnologías”. En la actualidad trabaja como columnista en Infobae, en C5N y en Radio 10.</p>
                                                <br>
                                                
                                                
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg45')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA LEGISLATURA APROBÓ MODIFICACIONES A LA LEY 6505 Y DIO PREFERENCIA A LOS PROYECTOS DE LUDOPATÍA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 12/07/2024</p>
                                        <p><i>Autorizó al Ejecutivo realizar operaciones de administración de deudas y aprobó darle preferencia a los 19 proyectos que abordan la problemática de la Ludopatía, entre otros temas.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_6505.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Legislatura porteña realizó durante el día se hoy una sesión ordinaria presidida por la Vicejefa de Gobierno de la Ciudad, Clara Muzzio, en la cual se aprobó cambiar el texto del artículo 1° de la Ley Nº 6.504. Esta iniciativa autoriza al Poder Ejecutivo, a través del Ministerio de Hacienda y Finanzas, a realizar operaciones de administración de deudas y reabrir series de títulos en circulación, dentro de ciertos límites financieros establecidos, hasta la suma de mil cien millones de dólares estadounidenses (USD 1.100.000.000) o su equivalente en pesos, otras monedas o unidades de valor. Con 37 votos afirmativos y 20 votos negativos, se aprobó esta iniciativa que amplía el monto de los programas de asistencia financiera y financiamiento en el mercado local en la misma proporción que el monto a ser emitido en cada caso.</p>
                                                <br>
                                                <p>También se aprobaron distintas declaraciones relacionadas a aniversarios y conmemoraciones, nomenclaturas de instituciones y se declaró personalidad destacada en el ámbito de la Educación al Sr. Esteban José Bullrich y en el ámbito de la Cultura al Sr. Julián Kartun. También se acordó rendir homenaje a Natalio Zirulnik, dibujante de Hijitus y creador de Dibu, el personaje del que nació el apodo del arquero de la selección, a través de la colocación de una placa.</p>
                                                <br>
                                                <p>Por iniciativa de varios bloques, se aprobó la declaración para solidarizarse con las víctimas que denunciaron al periodista Pedro Brieger por situaciones de acoso sexual y otra declaración que exige al Poder Ejecutivo Nacional el cumplimiento de lo establecido por la Corte Suprema de Justicia de la Nación en el fallo N° 1865/2020 “Gobierno de la Ciudad de Buenos Aires c/ Estado Nacional s/ Acción Declarativa de Inconstitucionalidad - Cobro de Pesos”.
                                                </p>
                                                <br>
                                                <p>Además, durante la sesión se acordó darle preferencia para las próximas sesiones a los 19 proyectos de Ludopatía que presentaron los distintos espacios y se unificaron los giros de los proyectos referidos a esta temática entre diez comisiones para abordar las diferentes temáticas que toca: -Desarrollo Económico, Mercosur y Políticas de Empleo, Salud, Niñez, Infancia, Adolescencia y Juventud, Justicia y Presupuesto, Hacienda, Administración Financiera y Política Tributaria.
                                                </p>
                                                <br>
                                                
                                                
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg46')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LIBRO "POETAS ARGENTINOS, AMIGOS DE MARRUECOS" DECLARADO DE INTERÉS CULTURAL</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 15/07/2024</p>
                                        <p><i>Ante una concurrida presencia de embajadores, la Legislatura porteña destacó esta publicación que presenta 50 obras literarias basadas en pinturas de artistas marroquíes.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_poetas.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En el Salón San Martín de la Legislatura porteña, por iniciativa de la Diputada María Cecilia Ferrero, se realizó la entrega del diploma que declara de interés para la comunicación social el libro "Poetas Argentinos, amigos de Marruecos, Antología III. Diálogos entre Marruecos y Argentina". Esta iniciativa, promovida por la embajada de Marruecos en Argentina desde 2019, presenta en su tercera edición 50 obras literarias inspiradas en 9 pinturas de artistas marroquíes. Las obras exploran el bagaje cultural e histórico de Marruecos a través de poesías, relatos y ensayos.</p>
                                                <br>
                                                <p>El embajador de Marruecos en Argentina, Fares Yassir, escribió el prólogo del libro, destacando que describir una imagen artística con palabras permite transmitir una idea y un sentimiento. En su discurso, subrayó la importancia de este proyecto como un llamado a fortalecer el vínculo entre Marruecos y Argentina.</p>
                                                <br>
                                                <p>Estuvieron presentes representantes de embajadas y provincias argentinas, así como Pablo Garzonio, Subsecretario de Relaciones Internacionales, Ornela Vanzillota, Directora de Relaciones Internacionales, y el legislador Yamil Santoro.
                                                </p>
                                                <br>
                                                <p>La Diputada Ferrero expresó: “Esta trilogía de escritores argentinos amigos de Marruecos es un llamado a reforzar la hermandad entre nuestros países. Los poemas se agrupan en 9 maravillosas pinturas. Es una muestra de cómo la cultura puede servir de puente y también ser una industria. La importancia de las políticas públicas culturales para el desarrollo de un pueblo es indiscutible en el escenario global. El proyecto que lleva adelante el embajador es una acción cultural y diplomática que contribuye a fortalecer la hermandad entre ambos países”.
                                                </p>
                                                <br>
                                                <p>Mariela Palermo, directora del proyecto, destacó “lo imprescindible que es contar historias para la comunicación social y la cultura. La capacidad de contar historias le da valor a cada objeto que nos rodea. Elegimos la literatura para mostrar paisajes y tradiciones a través de la belleza y la emoción”.</p>
                                                <br>
                                                <p>El periodista marroquí Rachid Mamouni expresó: “Es una obra maravillosa. Poetas argentinos amigos de Marruecos tiene un enfoque inédito e innovador. A partir de cuadros de la vida cotidiana de Marruecos, esta antología de escritores argentinos logra interpretar y analizar estas obras, creando páginas íntimas y ayudándonos a descubrir aspectos propios desde una visión extranjera”.</p>
                                                <br>
                                                <p>El embajador Fares Yassir agregó: “Esta es la tercera antología. Esta obra y este acto los considero de lujo. Agradezco a la Legislatura de Buenos Aires por este reconocimiento que rinde homenaje a los 50 escritores que participaron y creyeron en este proyecto. Es diplomacia cultural que permite tender puentes entre Argentina y Marruecos. Esta antología y las anteriores aportan, a través del arte, mayor visibilidad a lo que veníamos haciendo y contribuyen a la difusión de un mensaje que debe seguir vivo, dejando una huella”.</p>
                                                <br>
                                                <p>Participaron los embajadores de Congo, Hungría, Bélgica, Emiratos Árabes Unidos, Armenia y la Liga de los Emiratos Árabes, así como encargados de negocios de Palestina y El Salvador, el secretario delegado de Santa Fe y de Santiago del Estero, y representantes de Cancillería.</p>
                                                <br>
                                                
                                                
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg47')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA LEGISLATURA DECLARÓ DE INTERÉS AL PROYECTO ‘BAR DE VIEJES’</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 08/08/2024</p>
                                        <p><i>El Cuerpo Legislativo resaltó la iniciativa que pone en valor a los bares de la Ciudad de Buenos Aires.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_viejes2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Los diputados de la Ciudad declararon de Interés Cultural al proyecto ‘Bar de Viejes’. El acto se llevó a cabo en el Salón Montevideo y contó con la presencia del legislador y autor de la declaración, Matías Barroetaveña; la creadora de la iniciativa, Martina Sofía Alfuso; la poeta, Belén Nahuz; el licenciado en Diseño del Paisaje, Fabio Márquez; y el artista plástico, Patricio Larrambebere.</p>
                                                <br>
                                                <p>Luego de dar la bienvenida y de explicar el trámite legislativo del proyecto de declaración, Barroetavela declaró: “Lo que nosotros buscamos es enviar mensajes, poder señalar lo que el pueblo de la Ciudad de Buenos Aires valora, en relación al tipo de comunidad y sociedad que queremos construir”. Y señaló la importancia de los bares en la configuración de la Ciudad.</p>
                                                <br>
                                                <p>“Gracias a los bares, que siempre hacen que tenga un camino para volver a casa. En los bares, las personas nos encontramos para construir un mundo sin resultados; parece tonto, pero hoy en este mundo del algoritmo es revolucionario”, estableció finalmente Alfuso. Y lo calificó como el “espacio de la justa banalidad, de generalidades compartidas” y el lugar de las “personas sin plan, sin agenda y que repiten sistemáticamente la misma ceremonia”.
                                                </p>
                                                <br>
                                                <p>‘Bar de viejes’ es un proyecto cultural que nació hace más de 5 años con el objetivo de poner en valor una práctica cultural porteña, que es ir al bar. A través de diferentes iniciativas comunicacionales, artículos, mapas interactivos, encuentros y actividades artísticas, propone una nueva topografía de la Ciudad de Buenos Aires; en cuyo centro se encuentran aquellos bares que conforman parte de la identidad de la ciudad, según su creadora, los “cafés de toda la vida”. El proyecto representa un aporte en la preservación y difusión del patrimonio gastronómico local. Además, brinda nuevas maneras de habitar los espacios de café a través del arte y se ha convertido en salvaguarda de parte de la historia de nuestra Ciudad.
                                                </p>
                                                <br>
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg48')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA LEGISLATURA PORTEÑA RECONOCE A NADIAH DEMARCO Y A RGC EDICIONES</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/08/2024</p>
                                        <p><i>En un emotivo acto, se destacó la trayectoria cultural y el compromiso social de la cantante y del proyecto editorial especializado en políticas culturales.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_demarco2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Legislatura de la Ciudad de Buenos Aires reconoció el trabajo y la trayectoria de dos importantes actores de la cultura argentina. Por un lado, la cantante Nadiah Demarco fue declarada Personalidad Destacada en el ámbito de la Cultura. Por otro, RGC Ediciones fue declarado de Interés Cultural por su aporte en la gestión y políticas culturales.</p>
                                                <br>
                                                <p>Nadiah Demarco, quien recibió su reconocimiento en el Salón San Martín del Palacio Legislativo, fue destacada no solo por su talento artístico y su labor en la difusión del bolero, sino también por su fuerte compromiso social. El diputado Alejandro Grillo, autor del proyecto, resaltó la importancia de su labor en la defensa de los derechos de los trabajadores y su rol en el Comité de Discapacidad. Demarco, a su vez, recordó con emoción sus inicios en la música y la importancia del bolero en la cultura argentina.</p>
                                                <br>
                                                <p>En otro acto realizado en el Salón Presidente Alfonsín, RGC Ediciones fue declarado de Interés Cultural. La legisladora María Bielli, impulsora del reconocimiento, subrayó la relevancia de esta editorial en la construcción de políticas culturales más democráticas e inclusivas. RGC Ediciones, gestionada por la Asociación Civil por los Derechos Culturales, ha sido un referente en la capacitación y articulación de políticas culturales en Argentina y América Latina.
                                                </p>
                                                <br>
                                                <p>Estos reconocimientos reflejan el compromiso de la Legislatura porteña con la promoción de la cultura y el apoyo a quienes, desde diferentes ámbitos, contribuyen al enriquecimiento cultural y social de la ciudad y del país.
                                                </p>
                                                <br>
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
        @elseif ($tituloSep == 'Legislatura-Noticia-Completa-leg49')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">RECONOCIMIENTOS A LA SALUD, LA CULTURA Y LA INCLUSIÓN</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 13/08/2024</p>
                                        <p><i>El Cuerpo Legislativo de la Ciudad de Buenos Aires entregó diversas distinciones de interés cultural y social.</i></p>
                                        <br>
                                        <figure>
                                            <a href="">
                                                <img class="w-full object-cover object-center"
                                                    src="{{ asset('../img/leg/leg_recono2.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El Dr. Horacio Mario Roque fue reconocido como Personalidad Destacada en Salud por su trayectoria en el ámbito de la salud pública. La ceremonia, celebrada en el Salón San Martín, contó con la presencia del diputado Franco Vitalli, impulsor del proyecto, y del ex diputado Javier Andrade, autor de la iniciativa. Vitalli destacó la importancia del reconocimiento, subrayando el "compromiso con la salud pública, especialmente en áreas vulnerables". Roque, graduado en 1978 en la Universidad de Buenos Aires, comenzó su carrera en el Hospital Rivadavia y se destacó en el Hogar Naval 'Stella Maris'. Además, fue Jefe del Centro de Salud y Acción Comunitaria N°25 hasta 2022.</p>
                                                <br>
                                                <p>Durante su carrera, Roque recibió varios premios, incluyendo el ‘Profesor Dr. Enrique Nájera’ en 2010 y un Diploma de Honor del Senado en 2019. En su discurso, Roque enfatizó la importancia de su trabajo no solo en la prevención y tratamiento de enfermedades, sino en "resolver la vida de las personas" que más lo necesitan.</p>
                                                <br>
                                                <p>En el Salón Dorado, se declaró de Interés Cultural el libro "Ahora Alfonsín. Historia íntima de la campaña electoral que cambió la Argentina para siempre", de Rodrigo Estévez Andrade y Matías Méndez. La legisladora Manuela Thourte destacó el legado de Raúl Alfonsín, afirmando que su campaña electoral "marcó un antes y un después en la historia democrática argentina". También estuvo presente el senador Martín Lousteau, quien elogió el libro como un importante aporte a la historiografía nacional.
                                                </p>
                                                <br>
                                                <p>Por último, la obra infantil "Soy Muni, una aventura musical" fue declarada de Interés para la Promoción y Defensa de los Derechos de las Personas con Discapacidad. En el Salón Montevideo, la legisladora María Luisa González Estevarena y la actriz Mariana 'Muni' Seligmann presentaron la función adaptada para niños neurodivergentes, con ajustes en sonido, iluminación y ambiente. Estas adaptaciones representan un avance en la inclusión cultural, permitiendo que más personas disfruten del arte en condiciones adecuadas.
                                                </p>
                                                <br>
                                                
                                                
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                        alt="">
                                </a>

                                <a href="" class="object-cover object-center " width="350">
                                    <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                        alt="">
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
