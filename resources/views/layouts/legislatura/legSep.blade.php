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


                    axios.get("https://api.dailymotion.com/videos?channel=news&limit=5")
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
