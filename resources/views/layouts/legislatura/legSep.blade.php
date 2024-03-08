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


                    axios.get("https://api.dailymotion.com/videos?channel=news&limit=4")
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
