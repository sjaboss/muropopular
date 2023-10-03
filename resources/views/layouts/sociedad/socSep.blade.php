<x-app-layout>
    <div class="container ">

        <div class="mt-10"></div>


        @if ($tituloSep == 'Sociedad-Noticia-Completa-soc1')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MELAR, LA PYME FAMILIAR ARGENTINA QUE ABASTECE A LA
                                                INDUSTRIA ALIMENTICIA DEL PAÍS</a>
                                        </h2>


                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">



                                                <p>Con casi 100 años en el país, pocos conocen a esta empresa pero casi
                                                    todos consumen sus materias primas sin saberlo. ¿Cómo? Porque Melar
                                                    es la principal abastecedora de materias primas de la industria
                                                    alimenticia. </p>
                                                <br>


                                                <p><strong> Melar</strong> es una empresa que<strong> en 2024 cumplirá
                                                        100 años</strong> proveyendo
                                                    materias primas -más de 1000 productos entre semillas, frutos secos,
                                                    verduras deshidratadas, entre otros- y servicios de producción a la
                                                    industria de la alimentación. Su historia se remonta a 1924 con una
                                                    pareja de inmigrantes ucranianos, que se dedicaban a la agricultura
                                                    en su país natal y que una vez radicados en Argentina decidieron
                                                    incursionar en la apicultura con colmenas en<strong>
                                                        Navarro</strong> y <strong> Azul</strong>,
                                                    provincia de<strong> Buenos Aires</strong>.</p>
                                                <br>
                                                <figure>
                                                    <img class="h-80 w-full object-cover" src="../img/soc/soc_melar.svg"
                                                        alt="">

                                                </figure>
                                                <br>

                                                <p>Hasta<strong> 1976 Melar</strong> fue una empresa dedicada a la miel,
                                                    a la producción
                                                    y a la venta a granel exclusivamente y ese año comenzaron a
                                                    fraccionar a través de su marca,<strong> Aquel Viejo
                                                        Cosaco</strong>, con envases
                                                    simples pero llamativos. Ya para<strong> 1986</strong> comenzaron a
                                                    exportar miel a<strong>
                                                        Bolivia</strong> y a<strong> Brasil</strong> entre otros países;
                                                    mientras que paralelamente
                                                    incursionaron en la importación de jalea real y polen adueñándose de
                                                    un incipiente mercado local con mucha proyección. </p>
                                                <br>
                                                <p>La<strong> década del 90´</strong> fue de crecimiento e incorporación
                                                    de nuevos
                                                    productos y con el cambio de siglo comenzó un proceso de
                                                    “profesionalización” en la empresa con la entrada de los nietos de
                                                    los fundadores. </p>
                                                <br>
                                                <P><strong> Innovación y buena reputación, claves para la
                                                        permanencia</strong></P>
                                                <br>
                                                <P><strong> Jorge Scoufalos</strong> , su<strong> gerente
                                                        general</strong> , destaca que entre otras cosas
                                                    esto fue posible porque “siendo una empresa familiar, siempre se ha
                                                    apostado al crecimiento y a tomar aspectos de las empresas
                                                    multinacionales, como la inversión en maquinaria y tecnología.
                                                    Tenemos software donde, con mapas de calor, nos ayuda a ser más
                                                    eficientes con la logística. También contamos con distintos
                                                    departamentos donde analizamos datos. Por un lado, está lo
                                                    relacionado con la innovación tradicional, participando en todas las
                                                    ferias internacionales como la de Dubai, París, Shanghái y Colonia
                                                    (Alemania); mientras que por otro, no dejamos de ver que somos una
                                                    empresa familiar”.</P>
                                                <br>
                                                <P><strong>Planes y desafíos</strong> </P>
                                                <br>
                                                <P><strong> Melar</strong> tiene como gran objetivo para el 2023 obtener
                                                    la<strong> certificación
                                                        como Empresa B</strong>, demostrando así su compromiso con lo
                                                    social y
                                                    ambiental. Esta distinción refleja su enfoque más allá de lo
                                                    económico y resalta su preocupación por generar un impacto positivo
                                                    en la sociedad.
                                                </P>
                                                <br>
                                                <P>Con más de<strong> 1000 productos de 50 orígenes</strong> distintos;
                                                    con su propia
                                                    marca<strong> El Cosaco</strong> en pleno auge y en expansión; con
                                                    más del 85% de los
                                                    empleados (no operarios) con título profesional; proveyendo a
                                                    algunas de las compañías alimenticias más grandes del país y del
                                                    mundo; con un clima laboral saludable y organizado; con un
                                                    laboratorio propio y certificaciones de calidad de nivel
                                                    internacional; con stock permanente y trabajando con seriedad y
                                                    responsabilidad,<strong> Melar se encamina a cumplir 100 años en el
                                                        país en
                                                        2024</strong> con toda la expectativa de seguir creciendo y
                                                    abasteciendo a un
                                                    mercado cada vez más competitivo y de calidad.</P>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc2')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">INICIÓ EL PRIMER CURSO DEL PLAN FEDERAL DE CAPACITACIÓN
                                                SOBRE DERECHOS DE NIÑAS, NIÑOS Y ADOLESCENTES, CRECER CON DERECHOS </a>
                                        </h2>

                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La ministra Victoria Tolosa Paz participó del comienzo de la
                                                    capacitación obligatoria para agentes de los tres poderes del Estado
                                                    nacional, en el marco de la Ley 27.709.</p>
                                                <br>
                                                <p>La ministra de Desarrollo Social de la Nación,<strong> Victoria
                                                        Tolosa Paz</strong>,
                                                    participó del acto de apertura del primer curso del<strong> Plan
                                                        Federal de
                                                        Capacitación sobre Derechos de Niñas, Niños y Adolescentes,
                                                        “Crecer
                                                        con Derechos”</strong>, que se llevó a cabo en el Auditorio de
                                                    la Jefatura de
                                                    Gabinete de ministros. Estuvo presente la familia del niño Lucio
                                                    Dupuy, que luego fue recibida por el presidente de la Nación Alberto
                                                    Fernández en la Casa Rosada.
                                                </p>
                                                <br>
                                                <figure>
                                                    <img class="h-80 w-full object-cover" src="../img/soc/soc_niñez.svg"
                                                        alt="">

                                                </figure>
                                                <br>

                                                <p>“Esta no es una capacitación más, es una capacitación central para
                                                    poder prevenir y no lamentar lo que podemos evitar, alejando las
                                                    violencias, tanto físicas como psicológicas, el abuso, el acoso
                                                    sexual, el abandono y el maltrato de las infancias en la República
                                                    Argentina”, expresó la ministra Tolosa Paz durante su alocución.
                                                </p>
                                                <br>
                                                <p>El panel institucional de la apertura también expuso el secretario
                                                    nacional de Niñez, Adolescencia y Familia,<strong> Gabriel
                                                        Lerner</strong>; la
                                                    defensora nacional de Derechos de niñas, niños y adolescentes,
                                                    Marisa Graham; y la representante de Unicef en Argentina,<strong>
                                                        Luisa
                                                        Brumana</strong>. Además, estuvieron presentes, la ministra de
                                                    Mujeres,
                                                    Géneros y diversidad,<strong> Ayelen Mazzina</strong>, la secretaria
                                                    de Gestión y
                                                    Empleo Público,<strong> Ana Castellani</strong>; la secretaria de
                                                    Deportes de la
                                                    nación, Inés Arrondo; el director de INAP,<strong> Leandro
                                                        Bottinelli</strong>; la
                                                    diputada nacional<strong> Paola Vessvessian</strong>, entre otras
                                                    autoridades
                                                    nacionales.
                                                </p>
                                                <br>
                                                <P>Allí se celebró la firma del convenio marco de cooperación entre el
                                                    Ministerio de Desarrollo Social de la Nación, la Secretaría Nacional
                                                    de Niñez, Adolescencia y Familia, la Secretaría de Medios y
                                                    Comunicación Pública de la Jefatura de Gabinete de Ministros, y la
                                                    Defensoría de los Derechos de las Niñas, Niños y Adolescentes, para
                                                    la implementación de planes semestrales de sensibilización. </P>
                                                <br>
                                                <P>Más de 2.400 personas se inscribieron al primer curso denominado
                                                    <strong> “Violencias contra niñas, niños y adolescentes: Estrategias
                                                        de
                                                        prevención e intervención”</strong>, que se implementa a través
                                                    de la
                                                    plataforma virtual de SENAF, con una duración de cuatro semanas.
                                                </P>
                                                <br>
                                                <P>El curso se centra en la prevención, detección e intervención ante
                                                    situaciones de violencia contra niñas, niños y adolescentes, en pos
                                                    de evitar la revictimización y lograr la restitución de los derechos
                                                    vulnerados. Los contenidos fueron establecidos por SENAF, como
                                                    autoridad de aplicación de la ley, en acuerdo con el Consejo Federal
                                                    de Niñez, Adolescencia y Familia (COFENAF) y se desarrollaron en
                                                    colaboración con UNICEF y la Universidad Nacional de Entre Ríos,
                                                    habiendo mantenido consultas previas con la Defensoría nacional de
                                                    Derechos de Niñas, Niños y Adolescentes, universidades y gremios
                                                    estatales, entre otros.
                                                </P>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc3')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SE ENCUENTRA ABIERTA LA INSCRIPCIÓN PARA LA DIPLOMATURA EN
                                                GESTIÓN DEL DEPORTE INFANTIL </a>
                                        </h2>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_diplo.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En el marco de la Ley de Infancias Respetadas en las Asociaciones
                                                    Civiles, impulsada por el senador provincial Emmanuel González
                                                    Santalla, el IDEAL Avellaneda en articulación con la UNDAv y en
                                                    colaboración con FADI, lanzan la Diplomatura en perspectivas
                                                    generales para la gestión del deporte infantil; que busca brindar
                                                    herramientas pedagógicas, conceptuales y metodológicas para el
                                                    abordaje de las actividades deportivas para y con niñas, niños y
                                                    adolescentes desde una perspectiva integral, respetuosa de los
                                                    deseos, las necesidades y la salud de estos actores.</p>
                                                <br>
                                                <p>La diplomatura, que comienza el 28 de agosto, tiene una duración
                                                    anual y se cursará semanalmente y de forma presencial los días lunes
                                                    de 18 a 21 hs. en la UNDAv.
                                                </p>
                                                <br>
                                                <p>Inscripciones:</p>
                                                <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                    href="https://forms.gle/r2GwiwxE2DTYxo9Q8">Completá el
                                                    formulario</a>

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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc4')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">TAIANA Y DE MENDIGUREN INAUGURARON UNA NAVE INDUSTRIAL
                                                DEDICADA A LOS PROYECTOS DE DEFENSA </a>
                                        </h2>
                                        <figure>
                                            <img class="h-80 w-full object-cover" src="../img/soc/soc_nave1.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El ministro de Defensa, Jorge Taiana, junto al secretario de
                                                    Industria y Desarrollo Productivo del Ministerio de Economía, José
                                                    Ignacio de Mendiguren, inauguraron hoy en IMPSA una nave industrial
                                                    denominada “Malvinas Argentinas”.</p>
                                                <br>
                                                <p>La misma estará dedicada específicamente a los proyectos de industria
                                                    para la Defensa. Esta decisión estratégica tiene como objetivo
                                                    optimizar la producción en series cortas de distintos proyectos y
                                                    potenciar el desarrollo tecnológico de la empresa en esta área. El
                                                    acto se llevó a cabo en el Centro de Desarrollo Tecnológico que la
                                                    empresa tiene en Godoy Cruz, provincia de Mendoza.
                                                </p>
                                                <br>
                                                <p>Allí Taiana afirmó:<strong> “La capacidad de IMPSA y de su trabajo en
                                                        metalmecánica de primera línea, demuestra que una empresa
                                                        argentina
                                                        puede recuperarse, salir adelante y puede realizar una serie de
                                                        trabajos de gran calidad. Eso tiene que ver con una decisión
                                                        política de recuperarla y con la capacidad de sus
                                                        trabajadores”</strong>.
                                                </p>

                                                <br>
                                                <p><strong> “La industria para la Defensa crece en todo el mundo porque
                                                        hay una
                                                        revolución tecnológica que la obliga a modernizarse y a tener
                                                        cada
                                                        vez más desarrollo y esta nave, que se llama Malvinas
                                                        Argentinas, no
                                                        solo reconoce a los que lucharon por las Islas y el reclamo
                                                        permanente de la Argentina para obtener el ejercicio efectivo de
                                                        su
                                                        soberanía, sino que es la nave que IMPSA ha destinado para
                                                        trabajos
                                                        que tengan que ver con la defensa argentina”</strong>, enfatizó
                                                    el ministro.
                                                </p>
                                                <br>
                                                <figure>
                                                    <img class="h-80 w-full object-cover"
                                                        src="../img/soc/soc_nave2.svg" alt="">
                                                </figure>
                                                <br>
                                                <p>Por su parte, de Mendiguren, destacó la importancia de<strong>
                                                        “contar con la
                                                        presencia del ministro de Defensa, que además inaugura una nave
                                                        que
                                                        se llama Malvinas Argentinas y que IMPSA ha destinado
                                                        precisamente
                                                        al desarrollo de la industria para la defensa”, además hizo
                                                        mención
                                                        a la situación que la empresa atravesó años anteriores y afirmó:
                                                        “Hubo una decisión política de este Gobierno y del Ministerio de
                                                        Defensa, de rescatar una empresa tecnológica de las más
                                                        avanzadas
                                                        del mundo y ponerla en marcha”.</strong></p>
                                                <br>
                                                <p>A su turno, el presidente de IMPSA, Gabriel Vienni mencionó:<strong>
                                                        “Es muy
                                                        importante poner en valor y celebrar lo que estamos haciendo
                                                        hoy,
                                                        inaugurar esta nueva nave y firmar un nuevo contrato con
                                                        Fabricaciones Militares sigue haciendo que IMPSA crezca y se
                                                        incorpore a nuevos sectores de actividad”</strong>.
                                                </p>
                                                <br>
                                                <p>La nave, que será utilizada en el proceso de mecanización de las
                                                    torres del TAM 2C y la fabricación de canastos y soportes para dicho
                                                    tanque, ubicará a IMPSA como proveedora estratégica de la Defensa.
                                                    Esta producción se enmarca en el programa de modernización del
                                                    Tanque Argentino Mediano (TAM 2C), el cual se estableció mediante la
                                                    firma de un contrato en junio de 2022, entre el Ministerio de
                                                    Defensa y el Ejército Argentino con IMPSA con aportes del Fondo
                                                    Nacional de la Defensa (FONDEF).</p>
                                                <br>
                                                <p>En este centro de tecnología de vanguardia, que estaba inactivo desde
                                                    2018, la empresa industrial también está desarrollando otros
                                                    proyectos como la fabricación de una grúa de astillero para la Base
                                                    Naval Puerto Belgrano y la capacitación de personal del Ejército
                                                    Argentino. Actualmente en la nave trabaja un equipo de personas
                                                    altamente calificadas, con dedicación exclusiva a estas tareas.
                                                    Además, estos proyectos generan trabajo en otros sectores de la
                                                    empresa, como el área de ingeniería, de calderería o mecanizado.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc5')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ENCUENTRO “CRECER CON LIBROS: PERSPECTIVA DE DERECHOS EN
                                                LA LITERATURA INFANTIL” </a>
                                        </h2>
                                        <figure>
                                            <img class="h-96 w-full object-cover" src="../img/soc/soc_crecer1.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La ministra de Desarrollo Social de la Nación suscribió un acuerdo
                                                    con editoriales para promover producciones literarias que incorporen
                                                    perspectivas de derechos de niñas, niños y la diversidad de las
                                                    configuraciones familiares actuales.</p>
                                                <br>
                                                <p>La ministra de Desarrollo Social de la Nación, Victoria Tolosa Paz,
                                                    encabezó hoy el encuentro<strong> “Crecer con Libros: Perspectiva de
                                                        Derechos en la Literatura Infantil”</strong>, realizado en el
                                                    Centro Cultural
                                                    Kirchner de la Ciudad Autónoma de Buenos Aires, que contó con la
                                                    participación de ministras y ministros provinciales, intendentes,
                                                    representantes del BID y de UNICEF, y autoridades de cientos de
                                                    Espacios de Primera Infancia de todo el país.
                                                </p>
                                                <br>
                                                <p>"Soñábamos con el equipo del Ministerio y de la SENAF, hacer esta
                                                    actividad para<strong> visibilizar el enorme esfuerzo que hace el
                                                        Estado
                                                        Nacional en acompañar los procesos de inclusión de las
                                                        infancias</strong>,
                                                    desde Tierra del Fuego hasta La Quiaca", destacó en su alocución
                                                    Tolosa Paz. "En todas y cada una las provincias del país, hay un
                                                    equipo de trabajo que articula, y ejecuta políticas públicas
                                                    pensando en las infancias", sostuvo la ministra, acompañada en el
                                                    estrado por el secretario de Niñez, Adolescencia y Familia (SENAF),
                                                    Gabriel Lerner, y el subsecretario nacional de Primera Infancia,
                                                    Nicolás Falcone.
                                                </p>

                                                <br>
                                                <p>"Sin el apoyo del gobierno nacional, sería impensado haber logrado
                                                    esta marca que ayer celebramos, junto al Ministerio de Obras
                                                    Públicas de la Nación:<strong> 195 Espacios de Primera Infancia y
                                                        Centros de
                                                        Desarrollo Infantil financiados</strong>, un logro que nos llena
                                                    de orgullo
                                                    porque somos un gobierno que trabajó sistemáticamente para lograr
                                                    transformar realidades", resaltó la ministra.
                                                    Por otra parte, en el marco del Programa de Apoyo al Plan Nacional
                                                    de Primera Infancia y la Política de Universalización de la
                                                    Educación Inicial, la ministra de Desarrollo Social firmó un<strong>
                                                        acuerdo
                                                        de colaboración con editoriales nacionales, para promover
                                                        producciones literarias que incorporen perspectivas de derechos
                                                        de
                                                        niñas, niños y la diversidad de las configuraciones familiares
                                                        actuales</strong>.
                                                </p>
                                                <br>
                                                <figure>
                                                    <img class="h-80 w-full object-cover"
                                                        src="../img/soc/soc_crecer2.svg" alt="">
                                                </figure>
                                                <br>
                                                <p>“Es el Estado el que hace posible no solo la construcción de
                                                    infraestructura de calidad y la dotación del personal, sino también
                                                    esto que estamos haciendo hoy, que muchas veces no se ve o no se
                                                    pone en valor,<strong> 7,8 millones de dólares de inversión</strong>
                                                    del BID para
                                                    comprar<strong> libros, juegos y todo el equipamiento
                                                        necesario</strong>, pensado y
                                                    repensado para los chicos y chicas de nuestra Patria", afirmó.
                                                </p>
                                                <br>
                                                <p><strong> "Crecer con libros es crecer con derechos, y eso es lo que
                                                        hacemos
                                                        todos los días para construir una Patria libre, justa e
                                                        igualitaria"</strong>, concluyó la titular de la cartera
                                                    nacional.
                                                </p>
                                                <br>
                                                <p>Las editoriales que suscribieron el acuerdo en esta instancia
                                                    fueron<strong>
                                                        Santillana; El Ateneo; Calibroscopio; Gerbera; La Brujita de
                                                        Papel;
                                                        Catapulta y Pequeño Editor</strong>.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}" alt="">
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc6')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">FEDERICO DELGADO 1968 - 2023 </a>
                                        </h2>
                                        <p>TE FUISTE FEDERICO. DEMASIADO PRONTO, SÓLO TENÍAS 54 AÑOS.</p>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_delgado.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Nosotros, los nadies, el pueblo, los de a pie, sabíamos de tu
                                                    generosidad, tu sapiencia, tu profundo profesionalismo. Ahora
                                                    quedamos un poco huérfanos.
                                                </p>
                                                <br>
                                                <p>Tu silencio será un hueco en nuestras almas, pero nunca en nuestras
                                                    memorias: quedan tus fallos, tus escritos, tus justas palabras y tu
                                                    defensa por aquellos que jamás tuvieron voz.
                                                </p>
                                                <br>
                                                <p>Con tus remeras negras, sin traje, a modo de diferenciarte de los
                                                    trajeados y encorbatados, los dabas vuelta y media con tu discurso
                                                    llano y claro, pedaleando esa bicicleta, tu compañera de camino.
                                                </p>

                                                <br>
                                                <p><strong> Valiente y audaz Federico.</strong>
                                                </p>

                                                <br>
                                                <p>La memoria, esa memoria que nos recuerda tus acciones en las
                                                    investigaciones de los sobornos al estado -la banelco-, el megacanje
                                                    de Domingo Cavallo, la denuncia penal contra la policía federal
                                                    argentina cuando atacaron y embistieron a las madres de plaza de
                                                    mayo (2001).
                                                </p>
                                                <br>
                                                <p>Acompañaste al juez Daniel Rafecas investigando la causa del primer
                                                    cuerpo de ejército, la mayor megacausa por crímenes de lesa
                                                    humanidad.

                                                </p>
                                                <br>
                                                <p>Impulsaste otras investigaciones en las que estabas absolutamente
                                                    comprometido, como aquella cuando analizaste e indagaste la red y
                                                    estructura que habilitó el golpe cívico militar eclesial de 1976.
                                                </p>
                                                <br>
                                                <p>Tu función como Fiscal de la Nación impulsó investigaciones sobre los
                                                    delitos sexuales cometidos en los centros clandestinos de detención,
                                                    las complicidades civiles de empresas como la Mercedes Benz o la
                                                    Ford. Asimismo, fuiste fiscal de la causa del plan sistemático del
                                                    robo de bebés.</p>
                                                <br>
                                                <p>Federico, que tu ejemplo cunda entre los fiscales responsables,
                                                    comprometidos, y audaces. Que los hay, claro. Y esos otros que
                                                    conspiran y son cómplices del gran poder piensen en dedicarse a otra
                                                    cosa, a la que siempre se dedicaron, que no es impartir justicia,
                                                    precisamente.</p>
                                                <br>
                                                <p>Ser fiscal de la nación es algo muy serio, lo demás es espectáculo de
                                                    mal gusto.</p>
                                                <br>
                                                <p>Abrazamos tu valentía, tu decisión, y tu memoria estará siempre con
                                                    nosotros. </p>
                                                <br>
                                                <p>¡Hasta la victoria siempre!</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc7')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MAYRA: “CUENTEN CONMIGO PARA SEGUIR TRABAJANDO POR
                                                QUILMES” </a>
                                        </h2>
                                        <p>Encuentro con instituciones y tareas conjuntas</p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_mayra1.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La intendenta de Quilmes, Mayra Mendoza, acompañó este domingo los
                                                    festejos por el 46º aniversario del Centro Tradicionalista El
                                                    Fortín, ubicado en la avenida Italia y Alsina, en La Ribera de
                                                    Quilmes, donde compartió un almuerzo criollo con sus integrantes y
                                                    disfrutó de los diversos shows que preparó la entidad especialmente
                                                    para la ocasión. Luego se dirigió a San Francisco Solano, donde se
                                                    llevó a cabo una actividad por el Día de las Infancias, en la calle
                                                    838 y Donato Álvarez, en conjunto con el Rotary Club de la zona.
                                                </p>
                                                <br>
                                                <p><strong> “Compartir este almuerzo de aniversario de una institución
                                                        icónica
                                                        para nuestro municipio, además de las ganas, es un deber por
                                                        estos
                                                        46 años de historia y también de mucho futuro. Han pasado muchas
                                                        generaciones por este lugar, hay también un compromiso de las
                                                        nuevas
                                                        generaciones de seguir trabajando y quiero que sepan que pueden
                                                        contar con esta Intendenta”</strong>, expresó Mayra en El
                                                    Fortín.
                                                </p>
                                                <br>
                                                <p>Durante el festejo, la Jefa comunal conversó con vecinos y vecinas
                                                    sobre cada una de las obras que se realizaron en el barrio y
                                                    mejoraron notoriamente su calidad de vida, como la concreción de
                                                    nuevos asfaltos y obras hidráulicas, además del avance del Nuevo
                                                    Complejo Socio Ambiental Eco Parque Quilmes, ubicado en Italia 487,
                                                    que está desarrollado en conjunto con el Ministerio de Ambiente y
                                                    Desarrollo Sostenible de la Nación, con financiamiento del Banco
                                                    Interamericano de Desarrollo.
                                                </p>

                                                <br>
                                                <p>Por su parte, el titular de la institución, Walter Cabrera indicó:
                                                    <strong> “Estamos muy contentos de que haya venido la Intendenta,
                                                        para
                                                        nosotros es un honor. Como presidente de la institución, el
                                                        apoyo de
                                                        los centros tradicionalistas no solo de El Fortín, sino de
                                                        todos,
                                                        siempre los va a tener”</strong>.
                                                </p>

                                                <br>
                                                <p>La jornada de Mayra siguió en Solano, donde se celebró una nueva
                                                    edición del Día de las Infancias, que tuvo actividades recreativas
                                                    con el taller de clown del CPC Amaicha, que se desarrolló en la
                                                    calle 838 y Donato Álvarez, que además contó con un metegol, un
                                                    pelotero y la presencia del bondi cultural para el disfrute de los
                                                    niños y niñas. A su vez, en la sede del Rotary Club, en 838 Nº 2679,
                                                    se entregaron juguetes y una merienda para cada uno.
                                                </p>
                                                <br>
                                                <p><strong> “Es un día especial porque tiene que ver con nuestro eje
                                                        principal de
                                                        proyecto de trabajo que son las nuevas generaciones en Quilmes,
                                                        siempre decimos que queremos dejar un Municipio mejor del que
                                                        encontramos y mejor del que vivimos nosotros”</strong>, analizó
                                                    la
                                                    Intendenta.
                                                </p>
                                                <br>
                                                <p>En este marco, la vecina Leonela Vidoni, que asistió al evento con su
                                                    hijo Gael, relató: “Que los chicos puedan disfrutar y tener momentos
                                                    que no se van a olvidar, compartir cosas y recibir algún obsequio,
                                                    está bueno. Y después de tanto tiempo, veo más cosas hechas en lo
                                                    que es el partido de Quilmes en general, no solo en Solano”.
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc8')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">HABRÁ ASISTENCIA ECONÓMICA INMEDIATA PARA PRODUCTORES DEL
                                                CORDÓN FRUTIHORTÍCOLA PLATENSE AFECTADOS POR LAS INUNDACIONES </a>
                                        </h2>
                                        <p>Lo anunciaron la Ministra de Desarrollo Social de la Nación, Victoria Tolosa
                                            Paz, junto al secretario nacional de Agricultura, Ganadería y Pesca, Juan
                                            José Bahillo, y el ministro de Desarrollo Agrario de la provincia de Buenos
                                            Aires, Javier Rodríguez. Serán destinados 2.400 millones de pesos a la
                                            entrega de aportes no reintegrables.</p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_vt2.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La ministra de Desarrollo Social de la Nación, Victoria Tolosa Paz,
                                                    junto al secretario de Agricultura, Ganadería y Pesca de la Nación,
                                                    Juan José Bahillo, y el ministro de Desarrollo Agrario de la
                                                    provincia de Buenos Aires, Javier Rodríguez, y anunciaron la
                                                    creación del Programa de Asistencia Inmediata a Productores del
                                                    Cinturón Frutihortícola Platense, que dispondrá de un financiamiento
                                                    total de 2.400 millones de pesos para acompañar a las y los
                                                    productores afectados por las lluvias torrenciales y granizo,
                                                    mediante un aporte no reintegrable por única vez.

                                                </p>
                                                <br>
                                                <p>Del acto, realizado en la Casona de Agroindustria del Parque Pereyra
                                                    Iraola de La Plata, participaron también el ministro provincial de
                                                    Desarrollo de la Comunidad de Buenos Aires, Andrés Larroque, y el
                                                    titular de la cartera de Justicia y Derechos Humanos bonaerense,
                                                    Julio Alak.
                                                </p>
                                                <br>
                                                <p><strong> "Es el Estado el único capaz de asistir a las familias ante
                                                        una inclemencia climática de tal magnitud. En tiempos donde se
                                                        pone en duda el rol del Estado, acá hay un equipo nacional y
                                                        provincial manifestando la vocación enorme de acompañar a
                                                        quienes lo necesitan, porque no hay mano invisible del mercado
                                                        que repare tanto daño a más de 4 mil productores"</strong>,
                                                    remarcó la ministra.
                                                </p>
                                                <br>
                                                <p>Por su parte, el secretario Juan José Bahillo destacó que la
                                                    importancia del Cinturón Frutihortícola Platense, cuyos invernáculos
                                                    se concentran en un 85 por ciento en el Partido de La Plata y el 15
                                                    por ciento restante se distribuye entre los partidos de Florencio
                                                    Varela y Berazategui.
                                                </p>
                                                <br>
                                                <p><strong> “Es un sector productivo que produce más de 70 tipos de
                                                        frutas y
                                                        hortalizas, con las cuales se alimentan más de catorce millones
                                                        de
                                                        personas del conurbano bonaerense y otras regiones"</strong>,
                                                    resaltó
                                                    Bahillo, quien explicó que cada productor o productora recibirá un
                                                    pago de 600.000 pesos.</p>
                                                <br>
                                                <p>En tanto que Julio Alak señaló<strong> “la falta de asistencia en
                                                        algunos
                                                        aspectos, por parte del municipio de La Plata”</strong> y la
                                                    necesidad de
                                                    volver al código de ordenamiento urbano y territorial de esa ciudad,
                                                    implementado durante su gestión como intendente.<strong> “Tenemos
                                                        que
                                                        recuperar ese espíritu y tener un código que planifique y
                                                        proteja al
                                                        cinturón hortícola, para que se pueda producir bien"</strong>,
                                                    sostuvo.
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

                                    <img class="pb-3" src="{{ asset('img/publi/baner-leg1.png') }}"
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc9')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">AUDIENCIA PERIÓDICA INFORMATIVA DEL CONSEJO DE LA
                                                MAGISTRATURA DE LA NACIÓN (CMN) EN ROSARIO </a>
                                        </h2>
                                        <p>El Dr. Miguel Piedecasas, presidente de la Comisión de Acusación del Consejo
                                            de la Magistratura de la Nación (CMN), estará en Rosario los días 29 y 30 de
                                            agosto. </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_audiencia.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El 30 de agosto, se realizará la Audiencia Periódica Informativa del
                                                    Consejo de la Magistratura de la Nación (CMN). Este evento tendrá
                                                    lugar en las instalaciones de la Facultad de Derecho de la
                                                    Universidad Nacional de Rosario y participarán todos los integrantes
                                                    del Consejo.

                                                </p>
                                                <br>
                                                <p>Cobra importancia la exposición del Dr. Miguel Piedecasas en dicha
                                                    jornada, dado que como presidente de la Comisión de Acusación dio
                                                    inicio al proceso de juicio político contra el juez federal de
                                                    Mendoza, Walter Bento por presunto mal desempeño en sus funciones.
                                                    En septiembre se avanzará con el debate por este asunto, marcando un
                                                    paso fundamental en el compromiso del CMN por asegurar la integridad
                                                    y la responsabilidad en el ejercicio de la magistratura.
                                                </p>
                                                <br>
                                                <p>El día previo -29 de agosto- Piedecasas, asistirá al Colegio de
                                                    Abogados de Rosario que preside Lucas Galdeano, para el acto
                                                    conmemorativo del Día de la Abogacía. Este acto representa una
                                                    oportunidad para destacar la importancia del trabajo de los
                                                    profesionales legales en la sociedad y para fortalecer los lazos
                                                    entre las instituciones judiciales y la comunidad legal.
                                                </p>
                                                <br>
                                                <p>También recorrerá diversas localidades de la provincia de Santa Fe
                                                    que albergan sedes de la Justicia Federal para conversar mano a mano
                                                    respecto de las realidades y desafíos que enfrentan estas
                                                    jurisdicciones y el avance en el fortalecimiento del sistema de
                                                    Justicia Penal Federal en la provincia de Santa Fe, que, tras la
                                                    sanción de la ley, conlleva un aumento en el número de jueces,
                                                    fiscales y defensores en la provincia.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc10')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SE VIENE LA 44° EXPOSICIÓN NACIONAL ANGUS DE PRIMAVERA
                                                CON LA FUERZA DE EXPOAGRO </a>
                                        </h2>
                                        <p>El evento tendrá lugar del 19 al 22 de septiembre con más de 450 animales
                                            inscriptos, y se realizará en la Sociedad Rural de Olavarría. </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_angus.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Por segundo año consecutivo y debido a los resultados logrados en
                                                    2022, la Asociación Argentina de Angus con la fuerza de Expoagro,
                                                    realizarán la 44° Exposición Nacional Angus de Primavera. Esta
                                                    exposición destacará la mejor genética del sector, ofreciendo una
                                                    interesante variedad de actividades y un entorno inigualable para
                                                    los negocios agropecuarios.
                                                </p>
                                                <br>
                                                <p>La exposición se ha convertido en uno de los eventos ganaderos más
                                                    destacados del segundo semestre, promete atraer a una multitud de
                                                    entusiastas de la raza Angus, así como a empresas y público en
                                                    general. A lo largo de cuatro días, los asistentes podrán disfrutar
                                                    de diversas actividades como juras, remates y charlas técnicas sobre
                                                    Tuberculosis y Ganadería Eficiente, entre otras temáticas.
                                                </p>
                                                <br>
                                                <p><strong> La unión hace la fuerza</strong>
                                                </p>
                                                <br>
                                                <p>Alfonso Bustillo, presidente de Angus, expresó: “Vamos a realizar
                                                    nuestra 44ª Exposición Nacional Angus de Primavera, la 23ª
                                                    Exposición Nacional del Ternero y nuestra exposición de Puro
                                                    Controlado del Circuito Bonaerense”, y agregó: “Nos va a acompañar
                                                    nuevamente Exponenciar con todo el apoyo comercial que ello implica.
                                                    Será una exposición muy importante, nuevamente con 450 animales ya
                                                    inscriptos entre Pedigree y Puro Controlado. Así que serán cuatro
                                                    días muy fuertes para lo que es la parte de exposiciones de nuestra
                                                    Asociación Argentina de Angus”.</p>
                                                <br>
                                                <p>Por su parte, Eduardo Alem, presidente de la Sociedad Rural de
                                                    Olavarría, anfitriona del evento, comentó: "Con tantas opciones
                                                    disponibles, ser seleccionados nuevamente para ser sede de la
                                                    Exposición Nacional de Primavera, sentimos un profundo orgullo y a
                                                    su vez gran compromiso y responsabilidad". </p>
                                                <br>
                                                <p>Según anticipó Alem, están mejorando el predio tanto en lo que
                                                    respecta a infraestructura como a servicios. En cuanto a las
                                                    actividades que se realizarán durante los cuatro días, destacó que:
                                                    “Este año el Circuito Bonaerense será Clase A, es la máxima
                                                    categoría de lo que es Puro Controlado, acompañará la Nacional y hay
                                                    más inscriptos que el año pasado”.</p>
                                                <br>
                                                <p>Al igual que en 2022, Exponenciar aportará su experiencia en la
                                                    realización de exposiciones a campo, el músculo comercial para
                                                    generar el marco adecuado de negocios y comunicación. A respecto,
                                                    Martín Schvartzman, CEO de Exponenciar, resaltó: "Es un honor y un
                                                    privilegio renovar nuestra colaboración con Angus, una asociación
                                                    que refleja la excelencia y el compromiso con la ganadería. Nuestra
                                                    trayectoria en la organización de eventos de envergadura, la
                                                    comercialización de stands y la efectiva comunicación nos permite
                                                    contribuir de manera significativa a este nuevo evento”.</p>
                                                <br>
                                                <p>Considerando la coyuntura, Schvartzman, señaló: “En este momento
                                                    crítico para Argentina, al unir fuerzas aspiramos no solo a reforzar
                                                    el sector, sino también a renovar la confianza y optimismo hacia el
                                                    futuro. Creemos firmemente que nuestra alianza con Angus no solo
                                                    enriquecerá la experiencia de cabañeros y empresas, sino que también
                                                    ejemplificará cómo la unión en tiempos desafiantes puede marcar una
                                                    diferencia en la ganadería argentina”.</p>
                                                <br>
                                                <p>Las juras, remates y la voz de los protagonistas se podrá seguir en
                                                    vivo y en directo por Expoagro.com.ar</p>
                                                <br>
                                                <p>Tal es el interés que genera la raza y el evento en particular, que
                                                    en esta oportunidad contará con el apoyo de Banco Provincia y
                                                    Procampo como main sponsor; RUS Agro y Secretaría de Agricultura,
                                                    Ganadería y Pesca de la Nación (SAGyP) como sponsor; Banco Galicia,
                                                    Datamars, Marfrig, Massey Ferguson, Ministerio de Desarrollo Agrario
                                                    de Buenos Aires y Swift como auspiciantes; John Deere como aliado
                                                    estratégico y el acompañamiento de Advanta, CLAAS, IPCVA, Banco
                                                    Macro y Valtra por el momento.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc11')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SE LLEVO A CABO EL 7° CONGRESO DE COMUNICACIÓN POPULAR EN
                                                LA MATANZA </a>
                                        </h2>
                                        <p>Este martes 5 de septiembre, y bajo la consigna “Comunidad: comunicación en
                                            red”, se llevó a cabo el 7° Congreso de Comunicación Popular.
                                            El mismo tuvo lugar en el Auditorio René Nicoletti de la Universidad
                                            Nacional de La Matanza.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_ucaya.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>A través de un comunicado de prensa, la<strong> Unión de
                                                        Comunicadores
                                                        Audiovisuales y Afines, UCAYA</strong>, señaló “retomamos el
                                                    compromiso de
                                                    convocarnos en un ámbito donde podamos continuar dialogando sobre la
                                                    situación actual de la comunicación en nuestros barrios, el país y
                                                    la región”.
                                                </p>
                                                <br>
                                                <p>Los ejes del debate estuvieron centrados en “¿Cuáles son las
                                                    prioridades a la hora de la construcción de la agenda periodística?
                                                    ¿Con quién hablamos? ¿Desde dónde hablamos? ¿De qué hablamos?”

                                                </p>
                                                <br>
                                                <p>Además se abordaron temas tales como “la comunicación como derecho
                                                    humano, las tecnologías apropiadas, el surgimiento de herramientas
                                                    digitales de alto rendimiento y el crecimiento del uso de las
                                                    plataformas sociales invitan a un debate profundo sobre los usos y
                                                    sus impactos sobre el ecosistema comunicacional.
                                                </p>
                                                <br>
                                                <p>En este sentido remarcaron<strong> “La pluralidad como objetivo y la
                                                        prioridad de la humanidad del mensaje“</strong>.</p>
                                                <br>
                                                <p>El sector de la comunicación es atravesado directamente por las
                                                    tecnologías y el Desarrollo de herramientas digitales que invitan a
                                                    pensar el rol de los comunicadores y las Comunicadoras, sobre todo
                                                    en los medios locales y regionales de las distintas comunidades.
                                                </p>
                                                <br>
                                                <p>“Todos estos conceptos nos interpelan día a día y el 7° Congreso de
                                                    Comunicación Popular en La Matanza pretende ser un espacio de
                                                    reflexión de estas realidades cotidianas, junto con el intercambio
                                                    de prácticas de distintos actores que vienen desarrollando
                                                    experiencias de trabajos en redes, articulaciones y tramas que
                                                    pretenden dar más y mejor volumen, agregando valor a sus propuestas”
                                                    Expresó Guillermo Saucedo.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc12')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CARRILLO: EL FUNDADOR DEL SANITARISMO NACIONAL </a>
                                        </h2>
                                        <p>En un contexto en el que un candidato presidencial está amenazando con
                                            serruchar el servicio público de la salud, Baschetti recupera de su archivo
                                            personal la historia y militancia del primer ministro de Salud de la
                                            historia del país, nombrado por Juan Perón. Hoy los trabajadores de la salud
                                            mantienen intacto su legado.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_carillo.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Por: Roberto Baschetti
                                                    Sociólogo, historiador, investigador. Autor de más de 50 libros
                                                    sobre el peronismo revolucionario. Socio fundador de la editorial
                                                    Jirones de mi vida.
                                                    Para: kranear.com.ar
                                                </p>
                                                <br>
                                                <p>En estos momentos pre-electorales donde uno de los candidatos –Javier
                                                    Milei- se propone en caso de triunfar en las elecciones
                                                    presidenciales arrasar con la salud pública, me parece pertinente
                                                    recordar a Ramón Carrillo.
                                                </p>
                                                <br>
                                                <p>Fue un hombre de Santiago del Estero, nacido el 7 de marzo de 1906.
                                                    Obtuvo su título de bachiller en 1923 con medalla de oro. Se recibió
                                                    de médico en 1928 también con medalla de oro. Premio Nacional de
                                                    Ciencia en 1937 por sus trabajos de investigación.
                                                </p>
                                                <br>
                                                <p>En octubre de 1945 conoce al por entonces Coronel Perón, internado en
                                                    el Hospital Militar; él era Jefe del Servicio de Neurología en dicho
                                                    nosocomio. Un año más tarde el gobierno peronista lo nombra
                                                    secretario de Salud Pública, y en 1949, reforma constitucional de
                                                    por medio, se crea el Ministerio de Salud Pública y Carrillo será su
                                                    primer ministro, llevando adelante un plan de salud que no dejará a
                                                    ningún argentino sin atención médica.</p>
                                                <br>
                                                <p>Basó su labor en tres premisas: 1) Todos los hombres tienen igual
                                                    derecho a la vida y a la salud. 2) No puede haber política sanitaria
                                                    sin política social. 3) De nada sirven las conquistas de la técnica
                                                    médica si éstas no pueden llegar al pueblo a través de los medios
                                                    adecuados.
                                                </p>
                                                <br>
                                                <p>A su inquietud y determinación se debe la creación de EMESTA, la
                                                    primera fábrica nacional de medicamentos, que dando el apoyo a los
                                                    laboratorios argentinos enfrentó a las transnacionales
                                                    farmacéuticas.</p>
                                                <br>
                                                <p><b><i>Carrillo, peronista y primer ministro de Salud de la
                                                            historia</i></b></p>
                                                <br>
                                                <p>Bajo su gestión se construyeron hospitales, sanatorios y policlínicos
                                                    con los últimos adelantos técnicos y de confortabilidad (aire
                                                    acondicionado, por ejemplo); centros de salud, hogares para ancianos
                                                    y niños; puestos sanitarios de frontera.</p>
                                                <br>
                                                <p>Fallecida Evita en 1952, su gran compañera de causa y logros en lo
                                                    social, su estrella comienza a declinar. Por problemas internos
                                                    (puja con el vicepresidente Teisaire, que luego en los hechos
                                                    demostró ser un pusilánime) renuncia a su cargo en julio de 1954 y
                                                    parte hacia Estados Unidos para hacerse tratar una hipertensión
                                                    arterial con cefaleas agudas que lo invalidaban por ciertos períodos
                                                    de tiempo en el desempeño de sus actividades.</p>
                                                <br>
                                                <p>Estando en el país vecino del norte, lo sorprende el triunfo de la
                                                    mal llamada “Revolución Libertadora”, que haciendo gala de un
                                                    revanchismo primitivo lo acusa de enriquecimiento ilícito y le
                                                    confisca sus contados bienes con que cuenta en nuestra patria. Don
                                                    Ramón, necesitado de trabajo para poder subsistir, e imposibilitado
                                                    de volver a su patria, se emplea en Belém do Pará, Brasil, como
                                                    empleado de una compañía minera donde también ejercerá la medicina
                                                    rural. Allá sufre un severo accidente cerebro-vascular y fallece el
                                                    20 de diciembre de 1956 en la miseria.</p>
                                                <br>
                                                <p>Sus restos fueron repatriados y enterrados tal como él lo había
                                                    deseado, en su Santiago del Estero natal, recién en 1972. A cien
                                                    años de su nacimiento y a cincuenta de su deceso, el presidente
                                                    Néstor Kirchner en nombre del Gobierno Nacional y como homenaje a su
                                                    figura y a su obra, declaró al año 2006 como el “Año de Homenaje al
                                                    Dr. Ramón J. Carrillo”.</p>
                                                <br>
                                                <p>Todavía resuenan las palabras premonitorias de este facultativo,
                                                    brindadas en una conferencia pública en los años ‘50: “Las tareas de
                                                    los higienistas no rendirán frutos si previamente no se consolidan
                                                    las leyes obreras destinadas a dignificar la tarea en fábricas y
                                                    oficinas, a mejorar sueldos y salarios y lograr los beneficios de
                                                    jubilaciones y pensiones”.</p>
                                                <br>
                                                <p>Su vasta obra fue llevada al papel por la Editorial Universitaria de
                                                    Buenos Aires (EUDEBA) entre 1973 y 1974 gracias a los servicios del
                                                    Dr. Raúl Sciarreta que compiló todo el material existente en varios
                                                    tomos, llevando por nombre los dos primeros: Teoría del Hospital y
                                                    Contribuciones al Conocimiento Sanitario, respectivamente.</p>
                                                <br>
                                                <p>Los reconocimientos hacia su persona y su labor, por el Estado, por
                                                    sus pares y/o intelectuales no ha cesado hasta el día de la fecha.
                                                    Aquí se mencionan solo algunos ejemplos:</p>
                                                <br>
                                                <p>- 1972. Dr. Ramón Carrillo (Síntesis Biográfica). Superior Gobierno
                                                    de la Provincia de Santiago del Estero. Comisión de Homenaje al Dr.
                                                    Ramón Carrillo.</p>
                                                <br>
                                                <p>- 1988. Ramón Carrillo, el fundador del sanitarismo nacional. R.A.
                                                    Alzugaray. CEAL/Biblioteca Política Argentina (2 tomos, números 225
                                                    y 226).</p>
                                                <br>
                                                <p>- 1990. Homenaje al Profesor Dr. Ramón Carrillo. Precursor, creador e
                                                    iniciador del Sanitarismo Latinoamericano. Ministerio de Educación y
                                                    Justicia de la Nación.</p>
                                                <br>
                                                <p>- 2002. Dr. Ramón Carrillo. Primer Ministro de Salud Pública y
                                                    Asistencia Social de la República Argentina (1946-1954). Jorge
                                                    Campana. Subsecretaría de Cultura de la Provincia de Santa Fe.</p>
                                                <br>
                                                <p>- 2005. El olvidado de Belem. Vida y obra de Ramón Carrillo. Daniel
                                                    Chiarenza. Adrifer Libros.</p>
                                                <br>
                                                <p>- 2005. Ministro Profesor Dr. Ramón Carrillo. Su alejamiento del
                                                    cargo y exilio. Francisco Karsties. Edición de Autor.</p>
                                                <br>
                                                <p>- 2005. Ramón Carrillo. El hombre… el médico… el sanitarista. Arturo
                                                    Carrillo. Edición del Autor. </p>
                                                <br>
                                                <p>- 2006. Dr. Ramón Carrillo. De Santiago del Estero a Belém do Pará.
                                                    Homenagem. José María Barale. ALUBAR.</p>
                                                <br>
                                                <p>- 2006. Ramón Carrillo. Política sanitaria argentina. Textos
                                                    elegidos. Ministerio de Salud y Ambiente de la Nación / Ministerio
                                                    de Educación, Ciencia y Tecnología de la Nación. </p>
                                                <br>
                                                <p>- 2010. Santiago del Estero – Belém do Pará. Una vida, un destino …
                                                    Ramón Carrillo. Daniel Alberto Chiarenza. Edición del Autor.</p>
                                                <br>
                                                <p><b>Como justo reconocimiento a su titánica labor, este año, 2023,
                                                        comenzó a circular un billete de curso legal por el valor de
                                                        2.000 pesos, en el que Carrillo comparte imagen con Cecilia
                                                        Grierson (1859-1934) la primera doctora en Medicina en la
                                                        República Argentina.</b></p>
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


                    axios.get("https://api.dailymotion.com/videos?channel=news&limit=7")
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
