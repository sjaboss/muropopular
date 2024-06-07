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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc13')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CADE LANZA SU CURSO "ENLATADOS CADE: ADMINISTRACIÓN DE
                                                COOPERATIVAS DE TRABAJO" </a>
                                        </h2>
                                        <p><i>Una nueva oportunidad de capacitación y formación se presenta para
                                                aquellas
                                                personas interesadas en el mundo de las cooperativas y la economía
                                                social y
                                                solidaria. La Cooperativa Capacitación y Desarrollo (CaDe) anuncia el
                                                lanzamiento de su curso "Enlatados CaDe: Administración de Cooperativas
                                                de
                                                Trabajo"</i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_cade1.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El escenario político argentino se mantiene en constante ebullición a
                                                    medida que se acercan las elecciones presidenciales. Dos encuestas
                                                    recientes, realizadas por las consultoras Aresco y Zuban Córdoba,
                                                    confirman una tendencia interesante: un posible ballotage entre
                                                    Javier Milei y Sergio Massa. La capacitación estará a cargo de
                                                    Cecilia Mariel Ratovicius, una profesional con amplia experiencia en
                                                    el ámbito de la gestión de pymes y la administración de cooperativas
                                                    y mutuales con enfoque en derechos humanos. El curso se llevará a
                                                    cabo de manera virtual, permitiendo a los participantes acceder
                                                    desde cualquier lugar, y constará de 8 clases en vivo (sincrónicas)
                                                    que se llevarán a cabo los días jueves de 18:30 a 21:00 hs., además
                                                    de 4 clases grabadas (asincrónicas), trabajos grupales y una
                                                    evaluación final.
                                                </p>
                                                <br>
                                                <p>El objetivo de este curso es proporcionar a los participantes las
                                                    herramientas necesarias para la administración efectiva de
                                                    cooperativas de trabajo. Se abordarán temas claves relacionados con
                                                    la gestión de estas entidades, incluyendo aspectos legales,
                                                    financieros, administrativos y de organización. Los participantes
                                                    podrán aprender de manera práctica y aplicable a situaciones reales
                                                    de trabajo cooperativo.
                                                </p>
                                                <br>
                                                <p><b>Detalles del curso:</b>
                                                </p>
                                                <br>
                                                <p><b>Inicio de cursada:</b> Jueves 19 de octubre.</p>
                                                <br>
                                                <p><b>Fin de cursada:</b> Jueves 7 de diciembre.
                                                </p>
                                                <br>
                                                <p><b>Metodología:</b> Clases en vivo por medio de Zoom, clases
                                                    grabadas,
                                                    trabajos grupales y evaluación final.</p>
                                                <br>
                                                <p><b>Herramientas digitales utilizadas:</b> Google Classroom y Zoom.
                                                </p>
                                                <br>
                                                <p><b>Requisitos para la certificación:</b> Se requiere al menos el 75%
                                                    de
                                                    asistencia a las clases sincrónicas y la aprobación de las
                                                    evaluaciones por módulo.</p>
                                                <br>
                                                <p>El valor del curso es de $20.000, pero se ofrece un descuento
                                                    especial para cooperativas que inscriban a más de 3 personas. Si
                                                    deseas obtener más información o solicitar el descuento para tu
                                                    cooperativa, puedes escribir a<u>
                                                        capacitacionescoopcade@gmail.com</u>
                                                </p>
                                                <br>
                                                <p>Si estás interesado en formarte y contribuir al fortalecimiento de
                                                    las cooperativas de trabajo, esta es una oportunidad única para
                                                    adquirir conocimientos sólidos y prácticos en administración
                                                    cooperativa. Puedes inscribirte en el curso a través del siguiente
                                                    enlace: <a
                                                        class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                        href="https://forms.gle/Q2hg1JiHoXfbYU6MA"> Formulario de
                                                        Inscripción</a></p>
                                                </p>
                                                <br>
                                                <p>No dejes pasar esta oportunidad de crecimiento y aprendizaje en el
                                                    mundo de la economía social y solidaria. ¡Inscríbete ahora y forma
                                                    parte de este proceso de capacitación con CaDe!
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc14')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA FRAGATA ARA “LIBERTAD” CULMINÓ SU 51° VIAJE DE
                                                INSTRUCCIÓN</a>
                                        </h2>
                                        <p><i>Se realizó la ceremonia de recibimiento por el regreso del buque escuela
                                                de la Armada Argentina que arribó hoy al Apostadero Naval Buenos Aires
                                                en Dársena Norte, tras un periplo de más de cinco meses, que incluyó
                                                visitas a diez ciudades de países americanos y cuatro argentinas.</i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_fragata1.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Fragata Libertad, embajadora de los mares, cumplió una vez más con
                                                    su misión principal: la de completar la formación profesional de las
                                                    distintas promociones de guardiamarinas, al incrementar sus
                                                    conocimientos náuticos y acrecentar los vínculos de amistad y
                                                    cooperación con los países visitados. Allí estuvieron presentes el
                                                    secretario de Asuntos Internacionales, Francisco Cafiero y el jefe
                                                    de la Armada, almirante Julio Guardia.
                                                </p>
                                                <br>
                                                <p>La Fragata comenzó su 51 ° Viaje de Instrucción el sábado 27 de mayo
                                                    último cuando zarpó del Apostadero Naval, al mando del capitán de
                                                    Navío Gonzalo Horacio Nieto. A bordo se encontraban los
                                                    guardiamarinas en Comisión integrantes de las Promociones 152 ° del
                                                    Escalafón Comando Naval, 87 ° del Escalafón Infantería de Marina, y
                                                    108 ° del Cuerpo Profesional, Escalafón Intendencia de la Escuela
                                                    Naval Militar.

                                                </p>
                                                <br>
                                                <p>La tripulación de la Fragata, de 270 personas, de las cuales 48 son
                                                    mujeres, estuvo compuesta por 26 oficiales, 51 guardiamarinas en
                                                    Comisión (de los cuales dos son becados de las Armada de Bolivia y
                                                    de Panamá) y 192 suboficiales. Además, navegaron oficiales invitados
                                                    de institutos de formación de la Armada Argentina (de los Liceos
                                                    Navales Militares “Almirante Guillermo Brown” y “Almirante Storni”,
                                                    de la Escuela de Náutica “Manuel Belgrano” y de la Escuela Nacional
                                                    Fluvial "Comodoro Antonio Somellera"); de otras Fuerzas Armadas
                                                    (Ejército Argentino y Fuerza Aérea Argentina); de Fuerzas de
                                                    Seguridad (Gendarmería Nacional y Prefectura Naval Argentina), y del
                                                    Instituto del Servicio Exterior de la Nación.

                                                </p>
                                                <br>
                                                <p>Asimismo, a lo largo del viaje participaron oficiales de las Armadas
                                                    de Bolivia, Brasil, Chile, España, Estados Unidos Mexicanos, Italia,
                                                    Paraguay, Perú y Portugal.</p>
                                                <br>
                                                <p>Durante su itinerario, que tuvo una duración de poco más de cinco
                                                    meses, recorrió un total de 18.260 millas náuticas (aproximadamente
                                                    33.800 kilómetros). El buque estuvo 161 días fuera de su apostadero
                                                    natural, de los cuales navegó durante 116 días y permaneció 45 en
                                                    puertos durante su visita a 10 ciudades extranjeras de América y
                                                    cuatro de Argentina: Salvador de Bahía (Brasil), Puerto España
                                                    (Trinidad y Tobago), Baltimore (Estados Unidos de América),
                                                    Cartagena de Indias (Colombia), Veracruz (Estados Unidos Mexicanos),
                                                    Limón (Costa Rica), Balboa (Panamá), Guayaquil (Ecuador), El Callao
                                                    (Perú), Valparaíso (Chile), Ushuaia (Argentina), Comodoro Rivadavia
                                                    (Argentina), Puerto Madryn (Argentina), finalizando su recorrido en
                                                    la Ciudad Autónoma de Buenos Aires.
                                                </p>
                                                <br>
                                                <p><b>Viaje de Instrucción</b> </p>
                                                <br>
                                                <p>El plan de formación que se lleva a cabo en la Escuela Naval Militar
                                                    requiere que, a lo largo del trayecto educativo en esa Unidad
                                                    Académica, los cadetes vayan adaptándose progresivamente a las
                                                    particularidades, costumbres y tradiciones de la vida a bordo,
                                                    desarrollando a su vez la práctica efectiva de las actividades
                                                    profesionales, cuyo sustento académico proviene de los conocimientos
                                                    impartidos en ese Instituto.
                                                </p>
                                                <br>
                                                <p>En ese sentido, el embarco en el buque escuela Fragata ARA “Libertad”
                                                    como quinto ciclo de formación teórico-práctico, es parte del Plan
                                                    de Estudios y materializa la culminación de su etapa formativa
                                                    donde, a partir de una práctica profesional integrada desarrollada
                                                    en forma intensiva, se procura consolidar las aptitudes básicas
                                                    adquiridas, obteniendo mediante un embarco prolongado, la adecuada
                                                    aplicación y evaluación de los conocimientos aprendidos, una
                                                    integral adaptación a la vida en el mar y satisfacer las
                                                    competencias de egreso de los futuros Oficiales de la Armada.</p>
                                                <br>
                                                <p>La misión de la Fragata ARA “Libertad” es completar la formación
                                                    general y profesional de los guardiamarinas en Comisión, acrecentar
                                                    los vínculos de amistad y cooperación con los países visitados y
                                                    fomentar la integración interinstitucional con invitados nacionales
                                                    y extranjeros a fin de cumplir con las exigencias del plan de
                                                    estudios de la Escuela Naval Militar y representar protocolarmente a
                                                    la Institución y a la República Argentina.
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc15')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">TAIANA HIZO ENTREGA DE EQUIPAMIENTO PARA EL ARMA DE
                                                INGENIEROS</a>
                                        </h2>
                                        <p><i>Estuvieron presentes en la entrega el subsecretario de Planeamiento y
                                                Coordinación Ejecutiva en Emergencias, Martín Fiorenza; el subjefe del
                                                Estado Mayor General del Ejército, general de División, Diego López
                                                Blanco; el director de Acciones Pre Escriturarias, Gustavo Alarcón; el
                                                subsecretario de Hábitat bonaerense, Ruben Pascolini; el director
                                                general de Ingenieros y Infraestructura del Ejército Argentino, general
                                                de brigada Jorge Alberto Puebla; y el comandante de Adiestramiento y
                                                Alistamiento, general de División Gustavo Garcés Luzuriaga.</i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_taiana.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El ministro de Defensa, Jorge Taiana, acompañado del jefe del
                                                    Ejército, teniente general Guillermo Olegario Pereda, encabezó hoy
                                                    en Campo de Mayo el acto de presentación de la segunda incorporación
                                                    en el año de equipamiento para el Arma de Ingenieros del Ejército
                                                    Argentino con recursos provenientes del Fondo Nacional de la Defensa
                                                    (FONDEF). Esta adquisición de 16 máquinas, que refuerza las
                                                    capacidades específicas del Arma, es la más importante de las
                                                    últimas cuatro décadas para este sector de la Fuerza.
                                                </p>
                                                <br>
                                                <p><b>“Este material que costó mucho esfuerzo concretar es de
                                                        extraordinaria importancia para la recuperación de capacidades
                                                        del
                                                        Ejército. Y merece un reconocimiento, ya que se trata de la
                                                        segunda
                                                        entrega que hacemos en el año de un equipamiento tan
                                                        importante”</b>,
                                                    aseveró Taiana y explicó que “este equipamiento será distribuido en
                                                    las distintas unidades con presencia de Ingenieros a lo largo y
                                                    ancho de todo el territorio”.
                                                </p>
                                                <br>
                                                <p>Asimismo, el ministro destacó: “Es un orgullo presentar toda esta
                                                    maquinaria y ver cómo las Fuerzas Armadas van recuperando
                                                    capacidades y adquiriendo mayor modernización de sus instrumentos.
                                                    Esto les permite realizar su tarea de manera más acorde con los
                                                    tiempos que vivimos, con las necesidades que tenemos y con la
                                                    presencia activa de las fuerzas listas para defender la soberanía y
                                                    cumplir eficazmente con las misiones subsidiarias de apoyo a la
                                                    comunidad”.
                                                </p>
                                                <br>
                                                <p>“Esta nueva adquisición nos estimula a seguir avanzando -afirmó
                                                    Taiana- a continuar en la tarea de tener un Ejército que esté en las
                                                    mejores condiciones de defender nuestra soberanía, nuestras
                                                    riquezas, nuestra democracia y sobre todo, defender lo más valioso
                                                    que tenemos, nuestro pueblo.”.
                                                    A su turno, Pereda afirmó que esta entrega “es producto de la
                                                    inversión que estamos haciendo con los aportes que otorga la ley del
                                                    FONDEF. En el tercer año de gestión de este fondo, en la cual
                                                    estamos entrando en un ciclo virtuoso que nos permite tener una
                                                    mirada de fortalecimiento del Ejército en su conjunto, en sus
                                                    capacidades”.
                                                </p>
                                                <br>
                                                <p>La incorporación de este equipamiento refuerza las capacidades
                                                    específicas del Arma de Ingenieros, que se dedica a tareas de
                                                    construcción, mantenimiento y reparación de infraestructura vial,
                                                    ferroviaria, hídrica y aeroportuaria, así como a la ejecución de
                                                    obras de defensa civil y apoyo a la comunidad.
                                                    En esta oportunidad, se incorporaron seis motoniveladoras, cuatro
                                                    excavadoras a oruga, cuatro manipuladores telescópicos y dos
                                                    acoplados tipo semirremolque con cuello desmontable.
                                                </p>
                                                <br>
                                                <p>Las motoniveladoras son equipos altamente versátiles que permiten
                                                    nivelar terrenos, refinar taludes con diversos ángulos de
                                                    inclinación y llevar a cabo otras tareas de construcción básica de
                                                    caminos.
                                                </p>
                                                <br>
                                                <p>Asimismo, las excavadoras sobre orugas se utilizan para excavar,
                                                    realizar demoliciones, desmontes y limpieza de terrenos. Por otro
                                                    lado, los manipuladores telescópicos tienen la capacidad de manejar
                                                    cargas de hasta 5.400 kilogramos y se utilizan para elevar, mover y
                                                    ubicar material pesado y voluminoso, como vigas, columnas y otros
                                                    elementos de construcción.
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc16')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">TESTIMONIO DE UNA LUCHA: ANA FERNÁNDEZ Y SU LLAMADO POR
                                                LA DEMOCRACIA EN EL SUBTE</a>
                                        </h2>
                                        <p><i>Hija de una sobreviviente de la dictadura argentina, Ana Fernández
                                                advierte sobre las peligrosas posturas de La Libertad Avanza y su
                                                reivindicación del terrorismo de Estado.</i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_ana.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La lucha por la defensa de la democracia y los derechos humanos se
                                                    hace visible en cada rincón de la sociedad. En esta ocasión,<b> Ana
                                                        Fernández, hija de Ana María Careaga y nieta de Esther
                                                        Ballestrino,
                                                        fundadora de Madres de Plaza de Mayo</b>, se ha convertido en
                                                    una voz
                                                    que interpela a los ciudadanos en el subte, instándoles a no votar
                                                    por la opción que amenaza. los valores democráticos.
                                                </p>
                                                <br>
                                                <p>Ana relató la trágica historia de su madre, quien fue secuestrada a
                                                    los 16 años cuando estaba embarazada de ella, su abuela y su destino
                                                    fatal. Su mensaje apela a la memoria y la defensa de los logros
                                                    obtenidos después de largas luchas por la democracia y los derechos
                                                    humanos.
                                                </p>
                                                <br>
                                                <p>La micromilitancia y la exposición clara de lo que representa la
                                                    ultraderecha se convierte en armas para quienes se movilizan ante la
                                                    amenaza que supondría un posible gobierno de La Libertad Avanza y su
                                                    candidato, Javier Milei, y la negacionista Victoria Villarruel.
                                                </p>
                                                <br>
                                                <p>El valiente testimonio de Ana Fernández resuena en un contexto en el
                                                    que diversas intervenciones en el espacio público cobran fuerza. Su
                                                    relación personal, marcada por la historia de su familia atravesada
                                                    por el terrorismo de Estado, <b>refleja la urgencia de preservar los
                                                        valores democráticos</b>. Este llamado resuena en un contexto en
                                                    el que
                                                    testimonios en primera persona, como el de una madre de tres hijos
                                                    con discapacidad y una víctima de violencia de género, se suman para
                                                    advertir sobre las propuestas del "libertario" y sus implicaciones
                                                    para la sociedad.

                                                </p>
                                                <br>
                                                <p>Los ciudadanos, movilizados por la necesidad de preservar la memoria,
                                                    la verdad y la justicia, buscan a través de relaciones personales
                                                    concientizar y exponer la peligrosidad de ciertas propuestas
                                                    políticas que amenazan con desandar un pacto civilizatorio forjado
                                                    con luchas y sacrificios. Ana, cuyo testimonio se viralizó,
                                                    representa un grito por la democracia, la memoria y los derechos
                                                    conquistados tras años de resistencia.
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc17')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ESTUDIANTES SE MOVILIZAN CONTRA LOS VOUCHERS DE MILEI</a>
                                        </h2>
                                        <p><i>Bajo la consigna "No al Voucher, no al arancel: educación pública en
                                                alerta", el movimiento estudiantil argentino se pronuncia en contra de
                                                las propuestas de Milei que amenazan la gratuidad de la educación. </i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_vales.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El movimiento estudiantil argentino ha levantado su voz en una
                                                    protesta masiva, convocada por la Federación Universitaria Argentina
                                                    (FUA), en rechazo a los vales propuestos por el candidato
                                                    presidencial de La Libertad Avanza, Javier Milei. En un contexto
                                                    previo al balotaje, estudiantes de las tres facultades de la
                                                    Universidad de Buenos Aires y el Ciclo Básico Común (CBC) lanzaron
                                                    una campaña de afiches y stickers bajo el lema "Los estudiantes no
                                                    votamos a Milei". Este acto de movilización es una expresión
                                                    contundente contra las posturas que atentan contra la educación y
                                                    universidad públicas.
                                                </p>
                                                <br>
                                                <p>Piera Fernández De Piccoli, presidenta de la FUA, enfatizó que el
                                                    movimiento estudiantil argentino se encuentra en estado de alerta
                                                    debido a las amenazas constantes a la educación pública, un pilar
                                                    fundamental de la sociedad argentina. Las propuestas de Milei, que
                                                    promueven la implementación de vales, son vistas con preocupación
                                                    por parte de los estudiantes, quienes argumentan que este sistema ha
                                                    fracasado en otros países y no ha demostrado mejoras en la calidad
                                                    educativa.
                                                </p>
                                                <br>
                                                <p>El uso de vales, que "subsidian la demanda", otorga a las
                                                    instituciones educativas el poder de seleccionar a qué estudiantes
                                                    aceptar y cuáles rechazar, lo que profundiza la desigualdad. Para
                                                    los estudiantes, esta es una amenaza directa a la educación pública
                                                    y gratuita en Argentina. La movilización se centró en la Facultad de
                                                    Derecho de la UBA y congregó a cientos de estudiantes de todo el
                                                    país.
                                                </p>
                                                <br>
                                                <p>En el marco de esta alerta, estudiantes y docentes realizarán una
                                                    convocatoria multisectorial en defensa de la Educación Pública con
                                                    una vigilancia que se llevará a cabo en todas las universidades
                                                    públicas del país antes de la veda electoral. La movilización busca
                                                    destacar la importancia de preservar la gratuidad de la educación
                                                    como un pilar de la sociedad argentina.
                                                </p>
                                                <br>
                                                <p>Este acto de resistencia estudiantil coincide con la campaña de
                                                    afiches y stickers lanzada en las facultades y sedes del CBC de la
                                                    UBA, donde los estudiantes expresan su contundente rechazo a las
                                                    propuestas de Milei. Además, en la Universidad Nacional de San
                                                    Martín y la Universidad de Tucumán, las organizaciones estudiantiles
                                                    que lucharon contra la dictadura en los años ochenta llamaron a
                                                    votar por Sergio Massa, expresando su preocupación por el avance de
                                                    ideas autoritarias disfrazadas de libertad en la elección actual.
                                                    presidencial. Las propuestas de campaña de UxP, que incluyen un
                                                    aumento del presupuesto educativo y la creación de nuevas
                                                    universidades nacionales, son consideradas por los estudiantes como
                                                    fundamentales para combatir las desigualdades y garantizar una
                                                    educación pública, gratuita y de calidad. </p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc18')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Mario Bonino: 30 años de impunidad</a>
                                        </h2>
                                        <p><i>A 30 años del asesinato de Mario Bonino desde estas líneas ADN populares y
                                                quien escribe intentaremos no solo mantener viva la memoria de Mario
                                                Bonino, sino también reclamar Justicia por su asesinato. </i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_bonino.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Mario Bonino, el primer periodista asesinado desde el regreso de la
                                                    democracia en 1983, continúa siendo un nombre desconocido para la
                                                    mayoría de los argentinos. A pesar de recibir el premio que lleva su
                                                    nombre, su historia ha sido relegada al olvido, en gran parte por la
                                                    falta de cobertura de los grandes medios de comunicación. Hoy, a 30
                                                    años de su asesinato, su memoria resurge como un recordatorio de la
                                                    importancia de la justicia y la verdad en nuestra sociedad.
                                                </p>
                                                <br>
                                                <p>En noviembre de 1993, los resultados de las pericias judiciales
                                                    revelaron que Mario Bonino, periodista y militante sindical, fue
                                                    asesinado y arrojado a las aguas del Riachuelo. El juez de
                                                    instrucción, Raúl Irigoyen, aclaró que "se ha excluido el
                                                    diagnóstico de muerte por inmersión" y que "tampoco se han detectado
                                                    rastros de sustancias tóxicas en los restos". A pesar de estas
                                                    evidencias, la causa Bonino sufrió una parálisis típica de la
                                                    justicia de la era menemista y posteriormente fue olvidada por la
                                                    sociedad y los medios de comunicación.
                                                </p>
                                                <br>
                                                <p>Mario Bonino, que trabajó como cronista deportivo en varios medios
                                                    gráficos, se destacó por su honestidad y su pasión por la política y
                                                    el fútbol. En 1993, se desempeñaba en el área de Comunicación de la
                                                    Unión de Trabajadores de Prensa de Buenos Aires (UTPBA), donde
                                                    difundía informes de prensa y actividades en defensa de los
                                                    trabajadores. Su compromiso político y su lucha por los derechos de
                                                    los periodistas lo llevaron a enfrentar amenazas de muerte y
                                                    agresiones.
                                                </p>
                                                <br>
                                                <p>El jueves 11 de noviembre de 1993, Bonino se había ocupado
                                                    especialmente del caso de varios periodistas de San Luis que estaban
                                                    siendo amenazados. Salió de la sede de la UTPBA, ​​jugó con su hijo
                                                    y prometió traerle unas figuritas a la vuelta. Sin embargo, nunca
                                                    regresó a su hogar. Su desaparición desencadenó una serie de
                                                    amenazas a la sede de la UTPBA y la posterior aparición de su cuerpo
                                                    en el Riachuelo.
                                                </p>
                                                <br>
                                                <p>A pesar de las claras evidencias de asesinato, el fiscal Luis
                                                    González Warcalde, designado por el gobierno, intentó sostener la
                                                    teoría del suicidio. Durante años, la causa Bonino fue un ejemplo de
                                                    impunidad y obstáculos para la justicia, en un contexto de ataques y
                                                    amenazas a periodistas en la década de los '90.
                                                </p>
                                                <br>
                                                <p>A diferencia de otros casos que generaron movilizaciones populares,
                                                    como el asesinato de José Luis Cabezas, el caso Bonino no recibió la
                                                    misma atención de los medios de comunicación y la sociedad en
                                                    general. Mas allá de los esfuerzos de la UTPBA, ​​la Federación
                                                    Latinoamericana de Periodistas y la Organización Internacional de
                                                    Periodistas, la causa de Bonino sigue sin resolverse. </p>
                                                <br>
                                                <p>Ante la falta de atención mediática, la Unión de Trabajadores de
                                                    Prensa de Buenos Aires (UTPBA) ha mantenido viva la memoria de Mario
                                                    Bonino y su lucha por la justicia. Cada año, se entrega el Premio
                                                    Mario Bonino a periodistas que destacan por su compromiso en defensa
                                                    de la verdad y contra la injusticia, lo que representa un acto de
                                                    reconocimiento y homenaje a un mártir de la democracia.</p>


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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc19')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">GOBIERNO SUSPENDE PROGRAMA VITAL PARA PERSONAS
                                                VULNERABLES</a>
                                        </h2>
                                        <p><i>La medida del Ministerio de Capital Humano deja desamparados a pacientes
                                                con cáncer y enfermedades crónicas. </i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_peto.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El Gobierno Nacional ha dado un golpe devastador a las personas más
                                                    vulnerables de nuestra sociedad al suspender el programa Dadse, una
                                                    iniciativa crucial que brindaba asistencia médica a quienes carecen
                                                    de cobertura de salud, especialmente en el ámbito de enfermedades
                                                    crónicas y cáncer. Esta decisión, anunciada por el secretario de
                                                    Niñez, Adolescencia y Familia, Pablo de la Torre, bajo la excusa de
                                                    "revisar los circuitos administrativos", deja en la desesperación a
                                                    miles de argentinos que dependen de esta ayuda para sobrellevar sus
                                                    condiciones de salud.
                                                </p>
                                                <br>
                                                <p>La Dirección de Asistencia Directa por Situaciones Especiales (Dadse)
                                                    ha sido una tabla de salvación para muchos, proporcionando subsidios
                                                    para medicamentos, insumos y productos médicos necesarios para el
                                                    tratamiento y la gestión de enfermedades crónicas y patologías
                                                    agudas urgentes. Sin embargo, esta crucial red de apoyo ahora se
                                                    encuentra en pausa, en un momento en que la necesidad de asistencia
                                                    médica es más urgente que nunca.
                                                </p>
                                                <br>
                                                <p>La suspensión de Dadse no solo es un golpe a los más vulnerables,
                                                    sino que también revela las prioridades del gobierno de Javier
                                                    Milei, quien parece priorizar las demandas del Fondo Monetario
                                                    Internacional sobre las necesidades básicas de su propio pueblo. En
                                                    medio de una escalada de precios y una crisis económica que afecta
                                                    desproporcionadamente a los sectores más pobres de la sociedad, esta
                                                    medida es un cruel recordatorio de la falta de empatía y
                                                    sensibilidad del gobierno hacia quienes más lo necesitan.
                                                </p>
                                                <br>
                                                <p>Es inaceptable que en un momento de crisis social y económica, el
                                                    gobierno opte por suspender un programa vital como Dadse, en lugar
                                                    de buscar soluciones que protejan a los más desfavorecidos. La
                                                    excusa de revisar los circuitos administrativos no es más que una
                                                    cortina de humo para encubrir una decisión insensible y despiadada
                                                    que dejará a muchas personas sin acceso a la atención médica que
                                                    necesitan desesperadamente.
                                                </p>
                                                <br>
                                                <p>Es hora de que el gobierno de Milei priorice el bienestar de su
                                                    propio pueblo sobre las demandas de los organismos financieros
                                                    internacionales. La suspensión de Dadse es una afrenta a la justicia
                                                    social y un recordatorio de la necesidad de un cambio de dirección
                                                    en las políticas gubernamentales. Los argentinos merecen un gobierno
                                                    que esté verdaderamente comprometido con su bienestar y que tome
                                                    medidas concretas para proteger a los más vulnerables de nuestra
                                                    sociedad.
                                                </p>
                                                <br>
                                                <div class="text-start object-center">
                                                    {{--  <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Gus.svg') }}"
                                                            alt="">
                                                        Publicado: 13/11/2023
                                                        <p> <strong>Nota de Gustavo Cano</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc20')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">“NECESITA UN MEDICAMENTO PARA NO MORIR”: PIDE AYUDA ANTE
                                                LA INDIFERENCIA DEL ESTADO</a>
                                        </h2>
                                        <p><i><b>A pesar de la promesa de los gobiernos nacional y provincial de
                                                    entregar
                                                    la medicación en 4 a 6 meses, Sandra esposa de un paciente
                                                    oncológico se
                                                    ve obligada a iniciar una dolorosa batalla que va más allá del
                                                    sufrimiento de su marido.</b> </i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_necesita.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><b>Sandra Cabero</b>, residente de Salta, enfrenta una angustiosa
                                                    odisea en busca de la vital medicación de quimioterapia para su
                                                    esposo, <b>Daniel Oxandaburu</b>, quien libra una feroz batalla
                                                    contra el cáncer.
                                                </p>
                                                <br>
                                                <p>Este tormentoso viaje no es la primera aflicción para la familia.
                                                    Sandra relata episodios anteriores, desde 2019 hasta diciembre de
                                                    2022, dónde han tenido que rogar por diferentes tratamientos
                                                    oncológicos. En un desesperado llamado de auxilio, Sandra solicita
                                                    ayuda a la población y manifiesta la falta de respuestas a pesar de
                                                    la declaración del ministro el 22 de enero, que prometió la entrega
                                                    de la medicación indicada para todos los pacientes oncológicos.</p>
                                                    <br>
                                                <p>La situación se torna aún más dramática cuando revela que, en los
                                                    meses de espera, a Daniel le diagnosticaron otro tumor en las
                                                    vértebras cervicales. La urgencia de las drogas es apremiante, y
                                                    Sandra se pregunta en voz alta,<b> “¿Por qué nos castigan de esta
                                                        forma?“</b>, señalando la contradicción entre la supuesta falta
                                                    de fondos para medicamentos y los gastos superfluos del gobierno
                                                    nacional.
                                                </p>
                                                <br>
                                                <p>La espera se hace insostenible al conocer que la droga
                                                    <b>POMALIDOMIDA</b> 4 mg por 21 comprimidos, vital para el
                                                    tratamiento, y está a cargo del gobierno nacional, pero con una
                                                    demora de 4 a 6 meses. <b>En un acto de desesperación, la familia
                                                        ofrece devolver la medicación cuando el Estado finalmente la
                                                        provea.</b>
                                                </p>
                                                <br>
                                                <p>La situación se agrava al revelar que, a pesar de la urgencia, las
                                                    autoridades nacionales demoran meses en suministrar una de las
                                                    drogas necesarias. Sandra, consciente de los altos costos, comparte
                                                    sus datos bancarios solicitando ayuda económica para al menos cubrir
                                                    el primer mes, mientras continúa su lucha por la intervención del
                                                    Estado.
                                                </p>
                                                <br>
                                                <p><b>"El cáncer no espera”</b>, exclama Sandra, llamando la atención de
                                                    las autoridades locales y nacionales. La trágica realidad de los
                                                    pacientes oncológicos en la provincia se ve marcada por procesos de
                                                    mediatización y judicialización, subrayando la urgente necesidad de
                                                    reformas en el sistema de atención médica.</p>
                                                <br>
                                                <p>La solicitud final de Sandra es clara: difundir su situación para que
                                                    el mundo conozca la falta de atención a la salud y la necesidad de
                                                    solidaridad para salvar vidas.</p>
                                                <br>
                                                <p>La familia comparte su CBU y alias, esperando que esta llamada
                                                    desesperada no caiga en oídos sordos, confiando en la conciencia
                                                    pública y la empatía para prevalecer.</p>
                                                <br>
                                                <p><b>Aquí compartimos el CBU: 0170087940000037064435</b></p>

                                                <p><b>Alias: sanydany</b></p>

                                                <p><b>Sandra Cabero</b></p>

                                                <p><b>Banco Francés</b></p>
                                                <br>
                                                <br>
                                                <p><i>Fuente Diario InfoSalta:
                                                        https://diarioinfosalta.com/2024/02/02/necesita-un-medicamento-para-no-morir-pide-ayuda-ante-la-indiferencia-del-estado/
                                                    </i></p>
                                                <br>
                                                <div class="text-start object-center">
                                                    {{--  <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Gus.svg') }}"
                                                            alt="">
                                                        Publicado: 13/11/2023
                                                        <p> <strong>Nota de Gustavo Cano</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc21')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ABANDONO DEL CANAL MAGDALENA: ¿TRAICIÓN A LA PATRIA?</a>
                                        </h2>
                                        <p><i>Decisión polémica decisión del gobierno de Milei desata críticas y alertas sobre el futuro de la soberanía argentina en torno al acceso al océano Atlántico.</i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_canal.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En el marco de la reciente decisión del presidente Javier Milei de abandonar la construcción del Canal Magdalena, un proyecto crucial para la conexión marítima del país, Luciano Orellano, referente del Foro por la Recuperación del Paraná, compartió su opinión y preocupaciones sobre este hecho que ha generado debate en la opinión pública argentina.
                                                </p>
                                                <br>
                                                <p>En abril de 2023, durante la gestión del entonces presidente Alberto Fernández y el gobernador de Buenos Aires, Axel Kicillof, se anunció la licitación para la realización del Canal Magdalena, un proyecto destinado a establecer un corredor logístico nacional para el comercio exterior. Sin embargo, tras meses de espera y errores en el proceso licitatorio, el proyecto quedó en pausa.</p>
                                                <br>
                                                <p>La nueva administración encabezada por Milei decidió descartar definitivamente la construcción del canal, optando en cambio por aprobar planes de expansión en el puerto de Montevideo, una medida que ha sido celebrada en Uruguay pero que ha generado preocupación en sectores argentinos preocupados por la soberanía nacional.
                                                </p>
                                                <br>
                                                <p>Luciano Orellano, autor del libro "Argentina sangra por las barrancas del río Paraná", advierte sobre las implicaciones de esta decisión. Para él, renunciar al Canal Magdalena significa perder una oportunidad histórica para fortalecer la soberanía argentina y su acceso directo al océano Atlántico. Además, señala que esta medida beneficia a empresas extranjeras y socava la capacidad del país para ejercer control sobre sus recursos marítimos.
                                                </p>
                                                <br>
                                                <p>El referente del Foro por la Recuperación del Paraná critica la falta de visión estratégica del gobierno de Milei y su aparente prioridad por servir a intereses extranjeros en lugar de proteger los intereses nacionales. Según Orellano, esta decisión representa una claudicación total al pueblo argentino y a la patria, y lamenta el rumbo que está tomando el país en términos de soberanía y desarrollo nacional.
                                                </p>
                                                <br>
                                                <p>Ante este panorama, el Foro por la Recuperación del Paraná planea continuar su lucha en defensa de la soberanía nacional, organizando exposiciones y encuentros para concienciar a la población sobre la importancia de proteger los recursos y territorios argentinos. Sin embargo, el camino hacia la soberanía parece cada vez más desafiante en un contexto político dominado por intereses extranjeros y decisiones que parecen ignorar las necesidades y aspiraciones del pueblo argentino.</p>
                                                <br>
                                                
                                              
                                                <div class="text-start object-center">
                                                    {{--  <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Gus.svg') }}"
                                                            alt="">
                                                        Publicado: 13/11/2023
                                                        <p> <strong>Nota de Gustavo Cano</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc22')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">TURISMO SOCIAL EN RIESGO: PELIGRA EL FUTURO DE HOTELES ESTATALES</a>
                                        </h2>
                                        <p><i>Peligra el Futuro de los Hoteles Estatales en Chapadmalal y Embalse. La posible privatización de estos establecimientos pone en riesgo la accesibilidad al turismo para sectores vulnerables y la preservación de un patrimonio nacional.</i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_turismo.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El turismo social en Argentina enfrenta un desafío sin precedentes con el posible cierre de los hoteles estatales en Chapadmalal y Embalse. Estas unidades, que han sido durante décadas un bastión de accesibilidad al turismo para sectores de bajos recursos, ahora se ven amenazadas por decisiones gubernamentales que apuntan a su privatización.
                                                </p>
                                                <br>
                                                <p>La Cooperativa de Santa Fe, responsable de organizar contingentes para estas unidades turísticas, ha recibido la noticia de que a partir de marzo no podrán enviar más grupos, debido a que el gobierno no renovará las concesiones. Esto significa que miles de trabajadores y trabajadoras que dependen de estas actividades se verán afectados, así como también los beneficiarios del turismo social, quienes podrían perder una de sus pocas oportunidades de acceder a vacaciones dignas.</p>
                                                <br>
                                                <p>En Embalse, las negociaciones con empresarios españoles para privatizar la Unidad Turística están avanzadas. Aunque se asegura que parte de la infraestructura se mantendría para el turismo social, la incertidumbre y la preocupación entre los trabajadores y la comunidad en general es palpable. La declaración de la unidad como Monumento Histórico Nacional en 2013 añade un elemento de complejidad legal a este proceso de enajenación.
                                                </p>
                                                <br>
                                                <p>Por otro lado, la subsecretaria de Turismo del Ministerio del Interior, Yanina Martínez, ha mencionado que se trabaja en un programa para lograr la autosuficiencia de estas unidades. Si bien se busca mantener el turismo social, la falta de detalles sobre este programa genera incertidumbre sobre su efectividad y continuidad en el tiempo.
                                                </p>
                                                <br>
                                                <p>La privatización de los hoteles estatales en Chapadmalal y Embalse representaría un retroceso significativo en términos de inclusión social y acceso igualitario al turismo. Estos establecimientos han sido durante décadas una herramienta fundamental para garantizar que personas de bajos recursos puedan disfrutar de vacaciones dignas y accesibles. Privatizarlos significaría poner en manos de empresas privadas un servicio que debería ser un derecho garantizado por el Estado, lo que podría resultar en un aumento de los costos y en una exclusión de aquellos que no puedan pagar tarifas más altas. 
                                                </p>
                                                <br>
                                                <p>Además, la privatización podría llevar a una pérdida de identidad y de valor cultural, al poner en riesgo la preservación de estos espacios históricos que forman parte del patrimonio nacional. Es fundamental que se busquen alternativas que permitan mantener estos hoteles bajo control estatal, garantizando así su función social y su importancia como patrimonio histórico y cultural de Argentina.</p>
                                                <br>
                                                <div class="text-start object-center">
                                                    {{--  <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Gus.svg') }}"
                                                            alt="">
                                                        Publicado: 13/11/2023
                                                        <p> <strong>Nota de Gustavo Cano</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc23')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DOLARIZACIÓN: EL ENGAÑO QUE BENEFICIA A LOS PODEROSOS Y CONDENA A LOS TRABAJADORES</a>
                                        </h2>
                                        <p><i>La dolarización en Argentina: ¿Salvación económica o condena social? Un análisis detallado de los impactos que esta medida tendría en los trabajadores y la sociedad en su conjunto.</i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_dolar.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La propuesta de dolarizar la economía argentina ha generado un intenso debate, con defensores que ven en esta medida una solución a los problemas de inflación y estabilidad económica. Sin embargo, esta aparente solución presenta riesgos significativos que podrían llevar al país por un camino de dependencia económica y pérdida de soberanía monetaria.
                                                </p>
                                                <br>
                                                <p>En el contexto actual, la dolarización de la economía argentina tendría consecuencias devastadoras para los trabajadores. La fijación de los salarios en dólares resultaría en una pérdida significativa del poder adquisitivo de los trabajadores, especialmente en un contexto de devaluación del peso argentino frente al dólar. Esto llevaría a un aumento de la pobreza y la desigualdad, afectando principalmente a los sectores más vulnerables de la sociedad.</p>
                                                <br>
                                                <p>Además, la dolarización llevaría a una mayor precarización laboral, ya que las empresas ajustarían los salarios y las condiciones laborales para mantener su competitividad en un entorno dolarizado. Esto resultaría en una disminución de la calidad de vida de los trabajadores y sus familias, así como en un aumento de la informalidad laboral y la inestabilidad económica.
                                                </p>
                                                <br>
                                                <p>Por otro lado, la subsecretaria de Turismo del Ministerio del Interior, Yanina Martínez, ha mencionado que se trabaja en un programa para lograr la autosuficiencia de estas unidades. Si bien se busca mantener el turismo social, la falta de detalles sobre este programa genera incertidumbre sobre su efectividad y continuidad en el tiempo.Por otro lado, la dolarización solo beneficiaría a un grupo minúsculo de grandes empresarios exportadores, que verían facilitada su actividad al eliminar el riesgo cambiario y al tener una moneda estable para sus transacciones internacionales. Estos empresarios, que representan una minoría en la economía argentina, se verían favorecidos en detrimento de la mayoría de los trabajadores y pequeños empresarios del país.
                                                </p>
                                                <br>
                                                <p>En resumen, la dolarización de la economía argentina sería un riesgo para los trabajadores y un beneficio para los pocos privilegiados. Antes de tomar una decisión tan trascendental, es necesario evaluar cuidadosamente todos los riesgos y considerar alternativas que puedan ofrecer una solución más equitativa y sostenible para el país.
                                                </p>
                                                <br>
                                                <p>La dolarización no es la solución mágica a los problemas económicos de Argentina. Más bien, es un paso en falso que tendría consecuencias devastadoras para la economía y la sociedad en su conjunto. Es hora de considerar otras opciones que nos permitan mantener nuestra soberanía monetaria y construir un futuro más próspero y equitativo para todos los argentinos.</p>
                                                <br>
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Gus.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Gustavo Cano</strong></p>

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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc24')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">¡VUELOS SECRETOS PONEN EN JAQUE LA SOBERANÍA!</a>
                                        </h2>
                                        <p><i>Ex combatientes alertan sobre vuelos clandestinos a Malvinas que desafían la soberanía nacional. Acusan al gobierno de complicidad y exigen respuestas urgentes.</i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_vuelo2.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El Centro de Ex Combatientes Islas Malvinas (Cecim) La Plata ha lanzado una advertencia contundente: vuelos de dudosa procedencia hacia las Islas Malvinas podrían comprometer la soberanía nacional. En una declaración pública, los ex combatientes denuncian la aparente falta de acción del gobierno argentino frente a estas operaciones, que consideran violatorias de resoluciones de la ONU, en particular la Zona de Paz y Cooperación en el Atlántico Sur (ZPCAS).
                                                </p>
                                                <br>
                                                <p>Según el Cecim, el Ministerio de Defensa, a cargo de Luis Petri, habría creado un "Triángulo de las Malvinas" donde desaparecen aviones, especialmente británicos, y otros de dudosa procedencia. Durante la semana del 22 al 26 de enero, se registraron vuelos que, según los ex combatientes, requieren una investigación detallada y la intervención urgente de las agencias estatales correspondientes.</p>
                                                <br>
                                                <p>Uno de los vuelos que generó mayor preocupación fue realizado por la aeronave Bombardier Learjet Matrícula LV-GQR de la empresa Pacific Ocean S.A., que despegó desde el Aeropuerto de San Fernando con destino a Monte Agradable, Islas Malvinas. El Cecim cuestiona la falta de información sobre la autorización de este vuelo y la identidad de sus pasajeros, planteando la posibilidad de que estén relacionados con actividades petroleras en la región.
                                                </p>
                                                <br>
                                                <p>En un comunicado, los ex combatientes de La Plata manifestaron: “Estamos ante una situación de gravedad institucional inaudita, que está en riesgo la soberanía nacional ante un plan de entrega que se advierte por los propios dichos del presidente Milei, de la Canciller Mondino y de la vicepresidenta Villarruel”.
                                                </p>
                                                <br>
                                                <p>El silencio de la canciller Diana Mondino también fue objeto de crítica, así como la supuesta complacencia del gobierno uruguayo al permitir desde Montevideo el puente aéreo hacia Malvinas desde la Base Militar Brize Norton en Oxfordshire, Reino Unido.
                                                </p>
                                                <br>
                                                <p>En un contexto donde la soberanía nacional parece estar en riesgo, el Cecim hace un llamado urgente a las autoridades argentinas para que tomen medidas concretas que protejan los intereses del país en las Islas Malvinas. Esta situación, según los ex combatientes, podría ser parte de un plan de entrega de la soberanía en beneficio de intereses extranjeros, especialmente en relación con la explotación petrolera en la región.</p>
                                                <br>
                                                <p>La comunidad internacional debe prestar atención a estas denuncias y respaldar los esfuerzos de Argentina por proteger su soberanía en las Islas Malvinas.</p>
                                                <br>
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Gus.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Gustavo Cano</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc25')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CARTA ABIERTA DE GABO RUGIERO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/02/2024</p>
                                        <p><i>En relación al cierre del INADI, el querido Brujito Maya emitió esta carta abierta que reproducimos.</i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_gabo1.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Estimados compañeres:
                                                </p>
                                                <br>
                                                <p>Como homosexual siento que este es el principio del fin de nuestros derechos. La amenaza del cierre del INADI no es un acto inocente, es una clara operación de avasallamiento a todas y cada una de nuestras conquistas sociales. Se nos dio un lugar de igualdad y legitimidad con la Ley de Matrimonio Igualitario en el 2010, y la Ley de Identidad de Género en el 2012. La Ley nos ampara frente a cualquier acto de discriminación y desigualdad. El cierre del INADI es una manera de decirnos que esos derechos no serán protegidos y respetados, y que no tendremos una institución que nos respalde y asegure la continuidad del cumplimiento de la Ley. El cierre del INADI no solo nos afecta a la comunidad LGTBIQ, es una bandera blanca a favor del racismo y la xenofobia. Como docentes debemos decir NO a la sistematización de las operaciones de derecha y del gobierno de Javier Milei que atentan con la igualdad social y nuestros derechos. Queremos una Argentina libre y democrática, exigimos que se respalde la continuidad de cada una de las instituciones que nos protegen y el INADI. </p>
                                                <br>
                                                <p>Uno de los vuelos que generó mayor preocupación fue realizado por la aeronave Bombardier Learjet Matrícula LV-GQR de la empresa Pacific Ocean S.A., que despegó desde el Aeropuerto de San Fernando con destino a Monte Agradable, Islas Malvinas. El Cecim cuestiona la falta de información sobre la autorización de este vuelo y la identidad de sus pasajeros, planteando la posibilidad de que estén relacionados con actividades petroleras en la región.
                                                </p>
                                                <br>
                                                <p>Gabo Rugiero
                                                </p>
                                                
                                                <p>Artista. Docente. Homosexual
                                                </p>
                                                
                                                <p>Buenos Aires, 22 de febrero 2024</p>
                                                <br>
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Gus.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Gustavo Cano</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc26')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL SILENCIAMIENTO DE TÉLAM: UN GOLPE A LA LIBERTAD DE PRENSA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                        <p><i>Como colega periodista, expreso mi más profundo apoyo y solidaridad con mis compañeros de Télam, quienes ven peligrar su fuente de trabajo y su medio de vida.</i>.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_telam2.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En los últimos días, Argentina ha sido sacudida por una noticia que ha generado preocupación y repudio en toda la sociedad: el anuncio del cierre de la emblemática Agencia Télam. Este acto, perpetrado por el gobierno de Javier Milei, no solo representa un golpe a la libertad de prensa, sino que también amenaza con socavar uno de los pilares fundamentales de cualquier democracia: el derecho a la información.
                                                </p>
                                                <br>
                                                <p>El presidente Milei ha justificado su decisión argumentando que Télam era una agencia "militante", pero esta afirmación está infundada. Télam, con sus más de 70 años de historia, ha sido mucho más que una simple agencia de noticias. Ha sido una fuente confiable de información para millones de argentinos, proporcionando noticias objetivas y verificadas en un momento en el que la verdad parece ser cada vez más esquiva. </p>
                                                <br>
                                                <p>La importancia de Télam trasciende las fronteras nacionales. En comparación con otras agencias similares de la región, como la Agencia Brasil o la Agencia Andina, Télam se destaca por su cobertura exhaustiva y su compromiso con la objetividad y la veracidad de la información. Además, al compararla con agencias de renombre a nivel mundial, como Reuters o Associated Press, queda claro que Télam ocupa un lugar destacado en el panorama mediático internacional, siendo reconocida como una de las mejores agencias de noticias del mundo.
                                                </p>
                                                <br>
                                                <p>Es crucial destacar que ningún país serio del mundo cierra su agencia de noticias. El cierre de Télam no solo afectaría a los más de 700 trabajadores que dependen de ella para sostener a sus familias, sino que también privaría a la sociedad argentina de una fuente invaluable de información veraz y objetiva.
                                                </p>
                                                <br>
                                                <p>Detrás de la decisión de cerrar Télam se esconde un intento flagrante de silenciar una voz incómoda y consolidar el control sobre la información. Sin embargo, es importante recordar que la lucha de los trabajadores y del pueblo argentino puede ser crucial para evitar que se consolide.
                                                </p>
                                                <br>
                                                <p>Es hora de que la sociedad argentina se una en solidaridad con los trabajadores de Télam y en defensa de la libertad de prensa y el derecho a la información. El cierre de Télam no solo sería un golpe a la libertad de prensa en Argentina, sino un ataque a uno de los pilares fundamentales de nuestra democracia. Es hora de levantar nuestras voces y exigir que se revierta esta decisión injusta y antidemocrática.</p>
                                                <br>
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Gus.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Gustavo Cano</strong></p>

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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc27')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ARGENTINA: DOS MODELOS EN PUGNA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                        <p><i>En una reciente declaración, el Dr. Jorge Rachid expuso su visión sobre la situación política argentina, describiendo una división entre dos modelos políticos claramente opuestos.</i>.
                                        </p>
                                        <br>
                                        {{-- <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_telam2.svg"
                                                alt="">
                                        </figure> --}}
                                        <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Según Rachid, uno de estos modelos representa un enfoque nacional, federal, popular y solidario, mientras que el otro está más orientado a los intereses de sectores que históricamente han buscado el saqueo de Argentina y Latinoamérica. Este último modelo, en palabras del Dr. Rachid, está respaldado por intereses concretos, como fondos de inversión y la Embajada de Estados Unidos, y busca la privatización y el saqueo de los recursos nacionales.
                                                </p>
                                                <br>
                                                <p>El primer modelo, según Rachid, se ha representado por gobernadores como Axel Kicillof, Gildo Insfrán y otros, que buscan recuperar la soberanía y promover modelos solidarios centrados en la salud, la educación y la recuperación de la infraestructura nacional.</p>
                                                <br>
                                                <p>Rachid destaca la confrontación entre estos dos modelos, que, según él, se resuelve en la calle y en la movilización popular, con el pueblo argentino como el sujeto que construye la historia. Además, expresa la visión de volver a integrarse con países y bloques como los BRICS y el Oriente, en contraposición a una supuesta alineación exclusiva con Estados Unidos e Inglaterra.
                                                </p>
                                                <br>
                                                <p><b>"En Argentina, dos modelos políticos se enfrentan: uno entreguista y colonial, representado por el presidente, y otro que busca soberanía y solidaridad, encarnado por gobernadores provinciales. La disputa se resolverá en la calle, con el pueblo como protagonista."</b>
                                                </p>
                                                <br>
                                                <p>En resumen, Jorge Rachid plantea una clara dicotomía entre dos modelos políticos en Argentina, destacando la importancia de la movilización popular y la necesidad de rectificar errores para colocar a Argentina en un lugar destacado en el mundo multipolar.
                                                </p>
                                                <br>
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Gus.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Gustavo Cano</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc28')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">JAVIER MILEI, ¿UN NUEVO SAVONAROLA?</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p>En 1494, en la Florencia renacentista, llegó al poder Girolamo Savonarola, un fray dominicano carismático que instituyó un régimen despótico inspirado en ideas religiosas ultramontanas. Accedió al gobierno criticando los excesos de los ricos y prometiendo combatir la corrupción de la Iglesia, algo que agradaba al pueblo, así como Milei se impuso en el balotaje con la promesa de acabar con “la casta” política y los privilegios de “los de siempre”. En ambos casos, fueron promesas incumplidas ya que terminaron aliándose a la flor y nata de los que proclamaban combatir: los Médicis en Florencia y Macri, capitán de la ‘patria contratista’ en Argentina.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_savo1.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Si trazamos un paralelismo entre ambas figuras políticas, podemos ver que si el gobernante florentino,  prometía la salvación eterna a cambio de despojarse de los placeres mundanos (como las fiestas populares, la literatura, la pintura, las ropas suntuosas, etc.), por su vez, Javier Milei, en nombre del “dios mercado”, promete la prosperidad futura siempre que nos resignemos a abandonar los “lujos” en el presente, tales como salir de vacaciones, ir al cine, llenar el tanque de combustible, tener salud y transporte, etc.
                                                </p>
                                                <br>
                                                <p>En lo político, ambas figuras también se asemejan: así como Savonarola usaba al Papa Alejandro VI como blanco de críticas para  construir y legitimar su poder, Milei (como lo hizo Macri entre 2015-2019) se vale de la figura de los Kirchner. El hombre nacido en Ferrara, por otro lado, tenía “enemigos menores” como los clérigos apóstatas y los nobles corruptos, así como Milei se la carga contra los sindicalistas, los herejes populistas…. o socialistas/comunistas y/o keynesianos, etc.</p>
                                                <br>
                                                <p>En su mesianismo teocrático extremo, Savonarola defendía que Cristo era el Rey de Florencia y que la ciudad debía ser gobernada por principios religiosos, contraponiendo el ascetismo religioso a la Renascenza italiana.  En su mesianismo economicista, Milei desprecia las normas de la administración pública (que muchas veces desconoce) que rigen el funcionamiento del Estado y propone suplantarlas por las alocadas soluciones dictadas por la escuela austríaca de economía, que de tan radicales nunca fueron aplicadas íntegramente en ningún país.
                                                </p>
                                                <br>
                                                <p>Para su propósito moralizador, Savonarola organizaba la ‘hoguera de las vanidades’ en la plaza della Signoria en la que quemaba los objetos suntuosos ofrecidos por la nobleza o decomisados por las milicias de sus firmes seguidores. También le cortaba la lengua a los blasfemos, creó un impuesto para quienes llevasen una vida desordenada y una pena pesadísima para los homosexuales. En el mismo sentido, aunque minorado por los tiempos modernos, el mandatario argentino destruye reputaciones con su ejército de trolls y periodistas acólitos, corta planes sociales a los “planeros”, no entrega medicamentos a quienes los necesitan, despide masivamente a los “parásitos” del estado (aunque luego contrata los propios), cierra los medios públicos y, no contento, prohíbe el uso del lenguaje inclusivo, entre otras cosas.
                                                </p>
                                                <br>
                                                <p>Como dato curioso, la prédica de Savonarola no solo ‘encantaba’ al pueblo sino también a los poderosos, cansados del poder de la Iglesia ‘corrupta’, así como la de Milei, que llega a vastos sectores populares y medios de la sociedad pero también a un gran sector del empresariado cansado de la ‘corrupción opresiva’ del Estado.
                                                </p>
                                                <br>
                                                <figure>
                                                    <img class="w-full object-cover" src="../img/soc/soc_savo2.svg"
                                                        alt="">
                                                </figure>
                                                <br>
                                                <p>La "República de Savonarola" duró relativamente poco tiempo, de 1494 a 1498, cuando fue excomulgado por la iglesia, encarcelado, torturado y condenado a muerte por herejía y sedición y quemado en la piazza della Signoria por el pueblo cansado de su tiranía. En los tiempos modernos, en los que no se quema o ahorca a los gobernantes en plaza pública, Javier Milei puede perecer en la “hoguera mediática” en 4 años de gobierno.</p>
                                                <br>
                                                <p>Sin embargo, lo que más los asemeja es que ni Savonarola ni Milei pretendían o pretenden gobernar administrando justicia y terciando en los conflictos de intereses, existentes en toda sociedad, como un gobernante normal haría. En última instancia, ambos desprecian al pueblo que los llevó al poder porque están imbuidos de un mesianismo sin par, una fe ciega en sus dogmas, teocráticos uno y mercadológicos el otro, y quieren pasar a la historia como los que sacrificaron sus vidas en esa empresa. Savonarola, a su manera, ya lo consiguió y hoy tiene una modesta estatua en su Ferrara natal. Ojalá el argentino no tenga tanta suerte.</p>
                                                <br>
                                               
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc29')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">TARIFAZO EN EL SUBTE: GOLPE AL BOLSILLO DE LOS TRABAJADORES</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 14/03/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p>El exorbitante aumento de la tarifa del subte en Buenos Aires genera preocupación entre los usuarios y trabajadores, mientras persisten las deficiencias en el servicio.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_tarifazo.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El anuncio del aumento desmesurado de la tarifa del subte ha generado una ola de indignación en la Ciudad de Buenos Aires. Con cifras que alcanzarían los $574 en abril, $667 en mayo y $757 desde junio, este incremento golpeará fuertemente los bolsillos de los usuarios, especialmente en un contexto económico ya de por sí difícil.
                                                </p>
                                                <br>
                                                <p>La Asociación Gremial de Trabajadores del Subte y Premetro (AGTSYP Metrodelegadxs) ha expresado su preocupación por esta medida, señalando que a pesar de los aumentos, no se han visto mejoras significativas en el servicio. La frecuencia sigue siendo deficiente, los túneles se inundan con cada lluvia y se interrumpe el servicio con frecuencia. Además, se ha reducido el personal de atención al usuario, lo que afecta la calidad del servicio.</p>
                                                <br>
                                                <p>Este tarifazo no solo impacta en el día a día de los usuarios, sino que también representa un nuevo ajuste que afecta el ingreso de los trabajadores y trabajadoras. El transporte público es un derecho fundamental, y este aumento lo convierte en un bien cada vez más inaccesible para quienes dependen de él para llegar a sus trabajos o lugares de estudio.
                                                </p>
                                                <br>
                                                <p>En medio de este escenario, la AGTSYP Metrodelegadxs ha anunciado su participación en la audiencia pública por el aumento, programada para el próximo 15 de marzo. Será una oportunidad para manifestar su rechazo a esta medida y exigir que se priorice la calidad del servicio y el acceso equitativo al transporte público en la ciudad.
                                                </p>
                                                <br>
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc30')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ADN POPULARES LLEGA AL STREAMING: ¡UNA NUEVA ERA DE COMUNICACIÓN!</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 14/03/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p>"ADN Populares" se renueva y llega al streaming con un equipo de conductores de lujo: Gustavo Cano, Pepo Benítez y Adriana Zerdin. Acompáñalos cada lunes a las 18:30 en Espacio Diagonal para disfrutar de un programa lleno de noticias, análisis, música y reflexiones. ¡No te lo pierdas!
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_adntv.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Desde el lunes 18 de marzo, todos los lunes a las 18:30, en Espacio Diagonal, el programa de radio "ADN Populares" da un gran paso hacia el futuro al llegar al mundo del streaming. A partir del próximo lunes, los seguidores de este programa de comunicación popular, comunitaria y contrahegemónica podrán disfrutarlo en un nuevo formato, accesible desde cualquier dispositivo con conexión a internet.
                                                </p>
                                                <br>
                                                <p>Conducido por los comunicadores Gustavo Cano, Pepo Benítez y Adriana Zerdin, "ADN Populares" seguirá abordando temas de actualidad, entrevistas a expertos, música en vivo y mucho más. Ahora, con su llegada al streaming, el programa busca ampliar su alcance y llegar a una audiencia aún más diversa y globalizada.</p>
                                                <br>
                                                <p>Producido por la cooperativa El Faro, "ADN Populares" mantendrá su compromiso con la igualdad, los derechos humanos y la justicia social, ofreciendo un espacio de análisis crítico y reflexión sobre los temas más relevantes de la sociedad actual.
                                                </p>
                                                <br>
                                                <p>Además de su emisión en streaming, "ADN Populares" también cuenta con su portal de noticias www.adnpopulares.com y está presente en redes sociales como Facebook, Twitter, Instagram, TikTok y YouTube, asegurando una interacción constante con su audiencia y manteniéndola informada. en todo momento.
                                                </p>
                                                <br>
                                                <p>¡Prepárate para sumergirte en un universo de noticias, deportes, política, cultura, derechos humanos y mucha buena música con "ADN Populares" en su nueva etapa en el streaming! No te pierdas el inicio de esta emocionante nueva era el próximo lunes. ¡Sintoniza y descubre todo lo que "ADN Populares" tiene para ofrecerte!</p>
                                                <br>
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc31')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">UNO DE LOS ASTILLEROS MÁS IMPORTANTES DEL MUNDO CONFIÓ EN EL ARS Y SE CUMPLIÓ CON LAS EXPECTATIVAS</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 26/03/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p>Concluyeron los trabajos en la Fragata Américo Vespucio que se realizaron en el Astillero Río Santiago
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_santi2.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En menor tiempo del previsto y con tareas que se agregaron a las que se habían pautado inicialmente, finalizaron en el Astillero Río Santiago los trabajos que requería la Fragata Américo Vespucio. El buque escuela de la Armada italiana realizó exitosamente las pruebas de mar y ya está listo para retomar su tour mundial. Es importante destacar que el Astillero Fincantieri, uno de los más importantes a nivel internacional, confió en el ARS para que se realicen en su planta naval los trabajos que requería la embarcación de su principal cliente y se cumplieron con las expectativas.
                                                </p>
                                                <br>
                                                <p>Pedro Wasiejko, presidente del Astillero Río Santiago (ARS) volvió a resaltar la importancia del trabajo que se viene realizando desde la actual gestión para poner en condiciones el ARS, recuperar la confianza de potenciales clientes en el exterior y cumplir con los compromisos asumidos.</p>
                                                <br>
                                                <p>“Quiero volver a agradecer a Fincantieri, que es el astillero público italiano que cuenta con 18 astilleros en distintos continentes, a la Armada Italiana y a las autoridades de la Marina Argentina, que han colaborado para que sea nuestro astillero el lugar en el que se realizaron las tareas de mantenimiento de esta embarcación emblemática. Haber concluido con las tareas previstas cumpliendo con los estándares de calidad internacional pero además habiendo reducido los tiempos de finalización de los trabajos nos permite recuperar una confianza en el ARS que se había perdido. El capitán del buque escuela Giuseppe Las manifestó su satisfacción con los trabajos realizados e incluso lo dijo públicamente en una entrevista. Esto es muy importante para el astillero”.
                                                </p>
                                                <br>
                                                <p>A la embarcación que arribó a Ensenada el 5 de noviembre y que tenía previsto estar hasta abril en el astillero se le realizaron importantes tareas de mantenimiento en los sistemas de propulsión, diversos motores, sistemas de refrigeración, tanques, mástiles, velas, mobiliarios y otros equipos de la embarcación. Hay que destacar que este buque escuela es similar a la Fragata Libertad que fue construida en el ARS y a la que se le han realizado los trabajos de media vida y las reparaciones periódicas.
                                                </p>
                                                <br>
                                                <p>Wasiejko volvió a recordar que “estamos recuperando la confianza no sólo de clientes locales sino también de importantes actores de la industria naval a nivel internacional y esto es producto del trabajo que venimos realizando para poner en valor y reactivar el Astillero Río Santiago, que es posible gracias a la decisión política del gobernador Axel Kicillof y del ministro Augusto Costa de realizar las inversiones necesarias para recuperar las capacidades de esta planta naval que fueron seriamente afectadas producto de la parálisis que promovió el gobierno de Juntos por el Cambio, pero también de nuestro relacionamiento con astilleros internacionales para realizar trabajos conjuntos. Como venimos diciendo, la industria naval en nuestro país tiene una potencialidad enorme para generar divisas y para desarrollar toda una cadena de proveedores locales que permiten al mismo tiempo generar trabajo de calidad. Tenemos importantes desafíos por delante y este es un paso más en el camino que estamos transitando para reactivar este sector”, sostuvo el presidente del ARS.</p>
                                                <br>
                                                <p>La "Americo Vespucio” es una legendaria embarcación que fue construida en 1930 y cuenta con tres mástiles de 54, 50 y 43 metros de altura, veintiséis velas, una superficie de más de 2000 metros cuadrados. La eslora (longitud) del velero es de 100,5 metros, la manga (ancho) es de 15,56 y el calado (profundidad) es de 7,3 metros.</p>
                                                <br>
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc32')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">COMIENZA LA CAMPAÑA ANTIGRIPAL EN TODA LA PROVINCIA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 26/03/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Provincia comienza hoy a aplicar la vacuna antigripal en todo el territorio bonaerense. Se realizará de forma escalonada según grupos, el primero es personas embarazadas, personal de salud y mayores de 65 años.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_anti2.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El titular de la cartera sanitaria, Nicolás Kreplak, anunció hoy el lanzamiento de la Campaña de Vacunación Antigripal 2024. Buscan reducir las complicaciones, hospitalizaciones, muertes y secuelas ocasionadas por la infección por el virus influenza en la población de riesgo.
                                                </p>
                                                <br>
                                                <p>La gripe o influenza es una enfermedad viral respiratoria que se presenta habitualmente en los meses más fríos del año, y la mayoría de las personas afectadas se recuperan sin necesidad de recibir tratamiento médico. Sin embargo, los niños y niñas pequeños, adultos mayores, embarazadas o en período de puerperio, así como personas con factores de riesgo, pueden presentar complicaciones graves de la enfermedad. </p>
                                                <br>
                                                <p>El Calendario Nacional de Vacunación incluye la vacuna antigripal anual para los grupos de riesgo y está disponible de manera <b>gratuita en todos los vacunatorios</b> de la Provincia de Buenos Aires. (Ver Centros de Vacunación según partido)
                                                </p>
                                                <br>
                                                <p>Es importante tener en cuenta que la vacuna contra la influenza NO contagia la enfermedad, dado que se fabrica con virus inactivados (muertos), y que se puede aplicar junto con la de COVID-19, la de neumococo u otras del Calendario Nacional.
                                                </p>
                                                <br>
                                                <p><b>¿Quiénes deben recibir la vacuna antigripal?</b></p>
                                                <br>
                                                <p>. Personal de salud</p>
                                                <br>
                                                <p>. Personas gestantes: una dosis en cualquier trimestre del embarazo.</p>
                                                <br>
                                                <p>. Personas puérperas: una dosis hasta 10 días posteriores al parto en caso de no haberla recibido durante el embarazo (preferentemente antes del egreso de la maternidad).</p>
                                                <br>
                                                <p>. Niños y niñas entre 6 meses y 2 años</p>
                                                <br>
                                                <p>. Personas de 2 a 64 años con factores de riesgo (no se requiere orden médica)<p>
                                                <br>
                                                <p>. Personas mayores de 65 años: una dosis anual.</p>
                                                <br>
                                                <p>. Personal estratégico.</p>
                                                <br>
                                                <p>Mediante esta campaña de vacunación se busca lograr coberturas mayores o iguales al 95% en cada grupo de la población en riesgo.</p>
                                                <br>
                                                <p>Para la protección contra la gripe, es necesaria la aplicación de una dosis cada año, para asegurar la inmunidad contra las variantes de virus influenza que circulan en cada temporada.</p>
                                                <br>
                                                <p>Las personas mayores de 65 y más años y las personas de 2 a 64 años con factores de riesgo, junto con el personal de salud, los niños y las niñas de 6 a 24 meses, las personas gestantes, constituyen grupos identificados con riesgo para el desarrollo de formas graves de gripe, por lo que son poblaciones objetivo de la campaña de vacunación antigripal. Dichos grupos de riesgo no requieren orden médica para solicitar la aplicación de la vacuna.</p>
                                                <br>
                                                <p>En caso de niños y niñas de 6 a 24 meses, corresponde la aplicación de dos dosis separadas por un intervalo de 30 días la primera vez que la reciben, y luego una dosis anual, y en el caso de las personas gestantes, se indica una dosis anual, en cualquier trimestre del embarazo o en el puerperio, hasta los 10 días.</p>
                                                <br>
                                                <p>Dadas las complicaciones que puede presentar la enfermedad en estos grupos, es de suma importancia su acceso a la vacunación antigripal lo antes posible, con la perspectiva de su protección previa al momento de mayor circulación de virus influenza.</p>
                                                <br>
                                                

                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc33')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">FUROR POR MI SALUD DIGITAL: TURNOS EN HOSPITALES BONAERENSES AHORA ONLINE</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Con "Mi Salud Digital Bonaerense", reservar turnos en hospitales públicos de la Provincia de Buenos Aires se convierte en una tarea sencilla y rápida, en línea con las políticas de modernización y accesibilidad del sistema de salud.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_salud.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Provincia de Buenos Aires ha dado un paso adelante en la digitalización de los servicios de salud con el lanzamiento de "Mi Salud Digital Bonaerense". Esta plataforma web permite a los ciudadanos reservar turnos de forma online en los 72 hospitales públicos de la provincia, consultar los turnos ya sacados y cancelarlos en caso de imposibilidad de asistencia.
                                                </p>
                                                <br>
                                                <p>Además de la gestión de turnos, "Mi Salud Digital Bonaerense" ofrece otras funcionalidades que facilitan el acceso a la atención médica. Los usuarios pueden ver y descargar sus recetas electrónicas desde cualquier dispositivo, acceder a la cartilla de la Red Bonaerense de Salud para encontrar los establecimientos públicos de salud más cercanos y consultar información sobre prácticas, especialidades y datos de contacto.</p>
                                                <br>
                                                <p>Una de las características más destacadas de la plataforma es la posibilidad de interactuar con un chatbot que brinda información relevante y, si es necesario, deriva al usuario a un teleoperador para una atención más personalizada. Además, los usuarios pueden acceder a su registro de vacunas, conocer las dosis aplicadas y su número de lote, así como guardar información relacionada con su salud.
                                                </p>
                                                <br>
                                                <p>"Mi Salud Digital Bonaerense" representa un avance significativo en la modernización y accesibilidad del sistema de salud en la Provincia de Buenos Aires. Esta plataforma no solo simplifica la gestión de turnos y trámites de salud, sino que también brinda a los ciudadanos una herramienta integral para el cuidado de su salud y el acceso a información relevante.
                                                </p>
                                                <br>
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc34')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">COMUNICADO DEL FRENTE DE SINDICATOS DE LAS UNIVERSIDADES NACIONALES</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 11/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El Gobierno Nacional presentó su propuesta salarial que consiste en un 6% para el mes de febrero que se suma a los porcentajes ya acordados en las paritarias firmadas en los meses de noviembre y diciembre de 2023 con el gobierno anterior.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_univer1.svg"
                                                alt="">
                                        </figure>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_univer2.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La pérdida del poder adquisitivo del salario de docentes y nodocentes es de más del 50% respecto de la inflación de los meses de diciembre y enero - para las trabajadoras y los trabajadores el impacto inflacionario es aún mayor por la suba de alimentos y servicios. Lo mínimo que reclamamos es que nuestros salarios no pierdan respecto de la inflación; la propuesta del Gobierno está muy lejos de esa equiparación. Por ello, rechazamos ese porcentaje.
                                                </p>
                                                <br>
                                                <p>Por otro lado, efectivamente el Gobierno pretende establecer una rebaja salarial para la docencia preuniversitaria quitando el FONID. Ese incentivo representa un porcentaje importante del salario preuniversitario. Rechazamos también de plano esa pretensión y exigimos al Gobierno que haga efectivo el pago del FONID para los meses de enero y febrero y acuerde una recomposición del Fondo de manera urgente. Reclamamos también la actualización de las garantías salariales de ambos sectores.</p>
                                                <br>
                                                <p>El Frente Sindical de Universidades Nacionales responsabiliza al Gobierno Nacional por la situación conflictiva generada al pretender que aceptemos la pérdida salarial que es la más importante desde que existen registros. Exigimos al Gobierno Nacional que convoque de urgencia una nueva instancia paritaria en la que haga un ofrecimiento acorde a la pérdida salarial de nuestros sectores.
                                                </p>
                                                <br>
                                                <p>Este conflicto salarial ocurre en un contexto de recorte del presupuesto universitario que pone en riesgo el normal funcionamiento de las universidades nacionales. Defendemos la universidad pública y gratuita al servicio de las grandes mayorías, salarios dignos para trabajadoras y trabajadores y jubilaciones dignas.
                                                </p>
                                                <br>
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc35')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DESCONTROL EN LAS CUOTAS DE MEDICINA PREPAGA: EL NEGOCIO PRIVADO QUE AFECTA A LA CLASE MEDIA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 11/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Escribe Reynaldo Saccone,  Ex presidente Cicop/Izquierda Socialista-FIT Unidad
                                            Los aumentos de las cuotas por parte de las empresas de medicina prepaga han sido siderales e indiscriminados. En 4 meses superaron el 150%, tiempo en que los tribunales se inundaron de amparos por parte de familias que no pueden pagar más las cuotas, que van desde 250 mil pesos a 700 mil según el grupo familiar.
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_prepagas.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El ministro Caputo salió a decir que las prepagas “le declararon la guerra a la clase media” y Milei que “se les fue la mano, aunque no con mala intención”. Caraduras. Este gobierno es quien les posibilitó bajo la famosa “libertad de precios” y a través del DNU 70/23 se eliminó todo tipo de regulación.
                                                </p>
                                                <br>
                                                <p>El gobierno dice que las prepagas no entienden el “cambio cultural”. ¿Cuál sería? El de aplicar la competencia. Una ridiculez completa, ya que el negocio de las pre pagas está controlado por unas pocas empresas que se pusieron de acuerdo al unísono en aumentar las cuotas en porcentajes similares.</p>
                                                <br>
                                                <p>Diez de las empresas prepagas concentran el 83% de los afiliados a las mismas, siendo las primeras OSDE, Swiss Medical, Galeno, Sancor, OMINT, entre otras, como Medifé, Medicus, Accord Salud, Hospital Italiano y Jerárquicos Salud.
                                                </p>
                                                <br>
                                                <p>Los empresarios de las prepagas son mercaderes de la salud. En todos estos años se vinieron beneficiando ante el desastre del hospital público. Con pacientes que aun pagando altas cuotas mensuales tienen que a su vez abonar consultas y estudios privados para acelerar diagnósticos y tratamientos; co-pagos a profesionales y centros por consultas y prácticas; parte del precio de los medicamentos, y otros rubros.
                                                </p>
                                                <br>
                                                <p>Estos empresarios dicen que están en una situación de “extrema gravedad” y que por ello no les queda otra que aumentar. Que fueron sometidas durante años a un desfinanciamiento y que “no son formadores de precios”. Una mentira total. Ahora aumentan sideralmente y bajo el gobierno peronista de Alberto Fernández y Cristina Kirchner fueron beneficiados con exenciones impositivas y del pago de contribuciones patronales, por ejemplo. Además, son las patronales que tienen a sus trabajadoras y trabajadores con salarios miserables y jornadas de pluriempleo.</p>
                                                <br>
                                                <p>El negocio de la salud entre 1990 y 2015 tuvo una rentabilidad del 13% anual, superando al negocio financiero y a la industria petrolera. Un sector privilegiado que crea una gran desigualdad, ya que cubre solamente a un 10% de la población, pero consume el 30% del gasto total en salud, el mismo porcentaje que utiliza el sector público, pero para atender tres veces más gente, un 35% de la población.</p>
                                                <br>
                                                <p>Desde Izquierda Socialista en el FIT Unidad nos sumamos al repudio a los aumentazos de las prepagas y llamamos a luchar para que se retrotraigan. Como la salud no debe ser un negocio privado capitalista, postulamos un sistema nacional único de salud, estatal, igualitario y de excelencia para todas y todos, con atención y remedios gratuitos, financiado con fondos que se van a la deuda externa y al FMI, controlado por trabajadores y profesionales del sistema, organizaciones de usuarios y vecinales.</p>
                                                <br>
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc36')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">KICILLOF RECIBIÓ A INTENDENTES E INTENDENTAS DE LA PROVINCIA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 11/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El gobernador de Buenos Aires, Axel Kicillof, se reunió con intendentes radicales para abordar la preocupante situación de la salud y la obra pública en los municipios, destacando la necesidad de mantener el empleo y los servicios públicos frente a recortes nacionales.
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_pba1.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El gobernador de la provincia de Buenos Aires, Axel Kicillof, encabezó este martes una reunión con integrantes del Foro de Intendentes e Intendentas Radicales en el Salón Dorado de la Casa de Gobierno. Fue junto a la vicegobernadora Verónica Magario; la jefa de Asesores, Cristina Álvarez Rodríguez; los ministros de Gobierno, Carlos Bianco; de Economía, Pablo López; de Salud, Nicolás Kreplak; de Desarrollo de la Comunidad, Andrés Larroque; de Infraestructura y Servicios Públicos, Gabriel Katopodis; de Seguridad, Javier Alonso; y la secretaria general de la Gobernación, Agustina Vila.
                                                </p>
                                                <br>
                                                <p>Durante el encuentro, los intendentes expresaron su preocupación por la situación que atraviesa el sistema de salud en sus municipios debido al incremento de los precios de medicamentos e insumos médicos, así como también por la migración de numerosos vecinos desde el sistema privado al sistema público de salud. Además, recalcaron la necesidad de que continúe la obra pública provincial teniendo en cuenta la paralización de la obra pública nacional y el rol clave que esta cumple en la generación de empleo local.</p>
                                                <br>
                                                <p>En ese marco, Kicillof destacó que “el Gobierno nacional ha paralizado la obra pública y cortado drásticamente las transferencias a las provincias: el ajuste que está llevando adelante ya impacta en cada municipio en el que cierran las pymes y se deterioran los ingresos”. “Nosotros no vamos a apoyar ningún tipo de recorte. Quienes coincidimos en que lo que necesitan nuestros vecinos y vecinas es más empleo, salud y educación pública, debemos trabajar en conjunto para dar respuestas más allá de nuestras diferencias”.
                                                </p>
                                                <br>
                                                <p>Estuvieron presentes las y los intendentes de Monte, José Castro; de General Alvear, Ramón Capra; de Lobería, Pablo Barrena; de Lezama, Arnaldo Harispe; de General Belgrano, Osvaldo Dinapoli; de Balcarce, Esteban Reino; de Rojas, Román Bouvier; de Gonzales Chaves, Miriam Gómez; de General Viamonte, Franco Flexas; de Trenque Lauquen, Francisco Recoulat; de Saladillo, José Luis Salomón; de Maipú, Matías Rapallini; de Ayacucho, Emilio Cordonnier; de Tandil, Miguel Ángel Lunghi; de Adolfo Alsina, Javier Andrés; de Florentino Ameghino, Nahuel Mittelbach; de Pellegrini, Sofía Gambier; de Tres Lomas, Luciano Spinolo Sayago; de General Lavalle, Nahuel Guardia; de General La Madrid, Martín Randazzo; de San Cayetano, Miguel Gargaglione; de Rauch, Maximiliano Suescun; de General Madariaga, Carlos Santoro; de Magdalena, Lisandro Hourcade; y de General Arenales, Érica Revilla.
                                                </p>
                                                <br>
                                                
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc37')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">NO PODEMOS QUEDARNOS CALLADOS MIENTRAS INTENTAN DESTRUIR LA EDUCACIÓN PÚBLICA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 11/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El bloque de legisladores de la Unión Cívica Radical manifestó su profunda preocupación por la situación que atraviesan las universidades nacionales.
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_educacion.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Las instituciones educativas hoy reciben un tercio de los fondos que necesitan para funcionar. El gobierno nacional decidió congelar el presupuesto del año 2023 sin tener en cuenta la inflación interanual de más del 250% y sin considerar los brutales aumentos en las tarifas de todos los servicios. Además, ante los reclamos de los rectores, el gobierno nacional adelantó que no enviará fondos adicionales.
                                                </p>
                                                <br>
                                                <p>Las universidades atraviesan un ahogo financiero que hace imposible afrontar el ciclo lectivo 2024. Ya se han suspendido proyectos de extensión e investigación y peligra el normal dictado de clases. “El propio presidente Milei ha expresado su repudio a la educación pública. Esta situación ya ha pasado de las frases altisonantes en las redes sociales a una premeditada acción de desfinanciamiento que pone en quiebre a la educación pública superior”, resumió la presidenta del bloque, Lorena Matzen.</p>
                                                <br>
                                                <p>“Esta situación impacta de lleno en el funcionamiento de la Universidad Nacional del Comahue y la Universidad Nacional de Río Negro, que hoy reúnen a unos 98 mil estudiantes. La comunidad universitaria está movilizada y temen que se suspendan las clases si esta situación continúa”, resaltó. “Se anunció un aumento del 70% pero es necesario aclarar que es sobre el 3,5% del total del presupuesto 2023 y que sólo está destinado a cubrir gastos operativos menores. El aumento no contempla los salarios docentes y no docentes”, explicó Matzen.
                                                </p>
                                                <br>
                                                <p>“No podemos quedarnos callados mientras intentan destruir la educación pública. Debemos acompañar las iniciativas que la defiendan. Por esto presentamos un proyecto de comunicación para apoyar el proyecto de ley de la diputada nacional Danya Tavela, del bloque de la UCR. Plantea declarar la emergencia presupuestaria del sistema universitario nacional y propone establecer un mecanismo de asignación de recursos y gastos en el marco del presupuesto 2024”, sentenció Matzen
                                                </p>
                                                <br>
                                                <p>El proyecto de Tavela es acompañado por sus pares radicales y por diputados de otros bloques. La iniciativa impulsa un esquema que contempla un 85% para gastos de salarios y un 15% para gastos generales y de funcionamiento. Además, prevé una actualización bimestral atada al índice de precios al consumidor y a la variación promedio de las tarifas de los servicios públicos
                                                </p>
                                                <br>
                                                
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc38')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PRESENTARON FORMALMENTE EL PEDIDO DE JUICIO POLÍTICO CONTRA MILEI</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 23/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Este lunes se presentó formalmente en el Congreso de la Nación el pedido de Juicio Político contra el Presidente Javier Milei por mal desempeño de sus funciones y posible comisión de delitos.
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_juicio1.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En un escrito de 25 páginas el premio Nobel de la Pax, Adolfo Perez Esquivel; la referente de Soberanxs y ex embajadora en Venezuela y ante el Reino Unido, Alicia Castro; el constitucionalista Eduardo Barcesat; el ex juez Carlos Rozanski; la referente de Madres de Plaza de Mayo Línea Fundadora, Taty Almeida; el politólogo Atilio Borón; el economista Claudio Lozano; el sociólogo y periodista Jorge Elbaum; la investigadora Dora Barrancos; la secretaria de las Mujeres, Políticas de Género y Diversidades de La Matanza, Liliana Hendel; el Presidente del Observatorio del Derecho a la Ciudad, Jonatan Baldiviezo y la ingeniera y referente del Movimiento La ciudad Somos Quienes La Habitamos, María Eva Koutsovitis, entre otros y otras, solicitaron al titular de la Cámara de Diputados, Martín Menem, el inicio del proceso de juicio político contra Javier Milei. El expediente quedó registrado bajo el número 0031-P-2024.
                                                </p>
                                                <br>
                                                <p>En la presentación, solicitaron que el Congreso de la Nación investigue tanto al Presidente como a otros funcionarios por los posibles delitos de: instigación a la población a cometer uno o más delitos específicos; apología del delito y la incitación a cometer delitos financieros con la posible afectación a la división de poderes; la posible comisión del delito de apología del crimen; el delito de abandono de personas y el incumplimiento de deberes de funcionario público que tuvieron como algunas de sus consecuencias el desfinanciamiento y el desmantelamiento los recursos asignados al Plan Nacional Argentina Contra el Hambre poniendo en peligro la vida y la salud de miles de personas que asisten cotidianamente a los comedores comunitarios así como también la suspensión de la Dirección de Asistencia Directa por Situaciones Especiales (la DADSE) que implicó el desfinanciamiento de los subsidios para la adquisición de medicamentos y/o elementos de tecnología biomédica para pacientes oncológicos; la malversación de caudales públicos; mal desempeño por el desfinanciamiento de la educación, entre otros puntos entre los que hay también cuestiones vinculadas a la política exterior y la soberanía territorial. </p>
                                                <br>
                                                <p>Por otra parte, tras señalar que la legitimidad de origen otorgada por el voto popular se concreta y agota al asumir el cargo, entre los argumentos centrales para solicitar el inicio del juicio político, el escrito también plantea que la puesta en vigencia del Decreto 70/2023 “configura, inexcusablemente, mal desempeño y amerita la necesidad de examinar las violaciones a la normativa penal que derivan de su dictado y menguada pero efectiva vigencia”.
                                                </p>
                                                <br>
                                                <p>En paralelo a la presentación de juicio político al presidente Javier Milei por las vías institucionales, el proyecto será puesto a disposición de toda la ciudadanía para la recolección de firmas con la convicción de que el pueblo argentino no se someterá a estas políticas de sufrimiento y desprecio por la Constitución Nacional.
                                                </p>
                                                <br>
                                                
                                                
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc39')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">¡IMPULSO NACIONAL! ASTILLERO RÍO SANTIAGO ENTREGA EQUIPAMIENTO CLAVE PARA LA ARMADA ARGENTINA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 20/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La entrega de dos embarcaciones de instrucción para cadetes de la Armada Argentina y una compuerta para el Dique 2 del Arsenal Naval de Puerto Belgrano, construidas íntegramente en el Astillero Río Santiago, marca un hito en la industria naval argentina y resalta la capacidad de producción local en el sector.
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_barco2.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En un acto simbólico, el gobernador de la Provincia de Buenos Aires, Axel Kicillof, junto al Presidente del Astillero Río Santiago, Pedro Wasiejko, hizo entrega de dos embarcaciones de instrucción para cadetes de la Armada Argentina y una compuerta para el Dique 2 del Arsenal Naval de Puerto Belgrano. Estas construcciones, íntegramente realizadas en el Astillero Río Santiago de Ensenada, representan un hito en la industria naval argentina y marcan un antes y un después en la capacidad de producción y desarrollo del sector.
                                                </p>
                                                <br>
                                                <p>"Este es el resultado concreto que surge del trabajo bonaerense y argentino", expresó Kicillof durante la ceremonia. "Nos da orgullo que la Armada Argentina empiece a tener para el adiestramiento de sus cadetes estos barcos producidos en la Argentina, en la Provincia de Buenos Aires, en el Astillero Río Santiago", agregó el gobernador.</p>
                                                <br>
                                                <p>"Demostramos que el Astillero funciona. Demostramos con inversión pública que el Astillero Río Santiago puede hacer obras y dar resultados", enfatizó Kicillof.
                                                </p>
                                                <br>
                                                <p>Por su parte, Pedro Wasiejko sostuvo que “sin dudas el Astillero tiene capacidad para desarrollar proyectos como éste pero también y fundamentalmente otros de mayor envergadura".
                                                </p>
                                                <br>
                                                <p>"Tenemos que preparar nuestro astillero para afrontar el offshore frente a Mar del Plata. Es un desafío para el Astillero Río Santiago, pero vamos a estar acompañados por todos los actores del sector privado que están relacionados con el sector de la construcción naval y con el sector metalmecánico de gran porte y con las universidades", añadió Wasiejko.
                                                </p>
                                                <br>
                                                <p>Las embarcaciones, bautizadas como "Ciudad de Ensenada" y "Ciudad de Berisso", tienen capacidad para albergar a una tripulación de 40 personas, entre cadetes, oficiales y suboficiales. Estas lanchas de instrucción para cadetes (LICA) son cruciales para la formación de los estudiantes de la Escuela Naval, quienes hasta ahora recibían instrucción de manera teórica y en simuladores, sin contar con estos instrumentos que son fundamentales para su desarrollo profesional.
                                                </p>
                                                <br>
                                                <p>La compuerta entregada para el Dique 2 del Arsenal Naval de Puerto Belgrano representa una importante mejora en la capacidad operativa de este dique, permitiendo la puesta en seco de buques de mayor porte a los que podían ingresar anteriormente. Esta obra de metalmecánica es la más importante realizada en Argentina en los últimos tiempos y reafirma la capacidad del país para construir el equipamiento necesario para nuestras fuerzas de Defensa y Seguridad.
                                                </p>
                                                <br>
                                                
                                                
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc40')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ESTELA DÍAZ INAUGURA CONSEJO DE POLÍTICAS DE GÉNERO 2024 EN LA PLATA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 20/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El encuentro reunió a autoridades de género de unos 70 distritos bonaerenses y enfatizó el compromiso de mantener y fortalecer las políticas públicas con perspectiva de género en los territorios.
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_stela2.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La ministra de Mujeres y Diversidad de la provincia de Buenos Aires, Estela Díaz, junto a la intendenta de Quilmes, Mayra Mendoza, y la intendenta de Cañuelas, Marisa Fassi, realizó la apertura anual del Consejo de Políticas de Género y Diversidad Sexual con los Municipios, que se llevó a cabo en el Pasaje Dardo Rocha, de la ciudad de La Plata, con la presencia de las autoridades de las áreas de género de alrededor de 70 distritos bonaerenses.
                                                </p>
                                                <br>
                                                <p>En este marco, Estela Díaz expresó: “En esta provincia mantenemos la institucionalidad porque fue construida gracias a la lucha de las mujeres y las diversidades y porque sabemos que quieren arrasar con todo lo público, con el Estado presente” y agregó: “Además, tenemos a este gran conductor del gobierno de la provincia de Buenos Aires, Axel Kicillof, que se planta donde hay que plantarse y todos los días redobla el esfuerzo y el compromiso para que a nuestro pueblo bonaerense, a las mujeres, a los varones, a las y los jóvenes, a las personas mayores, este Estado le siga dando respuestas”.</p>
                                                <br>
                                                <p>Durante la apertura, la Ministra estuvo acompañada por la subsecretaria de Políticas Transversales de Género, Lidia Fernández; la subsecretaria de Políticas contra las Violencias por Razones de Género, Laurana Malacalza; la subsecretaria de Políticas de Género y Diversidad Sexual, Lucía Portos; la subsecretaria Técnica, Administrativa y Legal, Mercedes Castilla; la directora provincial de Formación, Investigación y Políticas Culturales para la Igualdad; Iris Pezzarini; la directora provincial de Regiones, Silvia Zaballa; y la secretaria de Mujeres y Diversidad del municipio de La Plata, Silvina Perugino.
                                                </p>
                                                <br>
                                                <p>“El Consejo se compone por las 130 áreas de género municipales y tiene como objetivo crear este espacio de discusión, debate, articulación y puesta en común. Porque la transversalización de la perspectiva de género no es posible hacerlo en soledad y, como señaló nuestro Gobernador, las políticas de género no son de un Ministerio sino de todo el gobierno de la provincia de Buenos Aires”, señaló la subsecretaria Lidia Fernández.
                                                </p>
                                                <br>
                                                <p>Luego del panel de apertura, se realizaron tres rondas de trabajo en las que las autoridades de las áreas de género municipales compartieron los principales logros durante la primera etapa de gestión del ministerio y los desafíos para el desarrollo de las tareas cotidianas en la actualidad.
                                                </p>
                                                <br>
                                                <p>Durante el cierre de la jornada, las referentas y referentes locales expusieron las conclusiones del debate en las comisiones y los ejes de trabajo prioritarios en los que es necesario avanzar para profundizar las políticas públicas con perspectiva de género en los territorios.
                                                </p>
                                                <br>
                                                <p>Por su parte, la ministra concluyó: “Ante un gobierno nacional que está planificando la pobreza, la exclusión y la desigualdad. nosotras trabajamos en un sentido absolutamente contrario. El gobierno de la provincia de Buenos Aires, y estas grandes conductoras de su gestión en cada distrito, trabajan construyendo igualdad. Sigamos trabajando por la igualdad.” 
                                                </p>
                                                <br>
                                                <p>El encuentro contó con la participación de las autoridades de las áreas de género de Adolfo Alsina, Arrecifes, Ayacucho, Azul, Balcarce, Baradero, Benito Juárez, Berazategui, Berisso, Bragado, Campana, Cañuelas, Carlos Casares, Carlos Tejedor, Carmen de Areco, Carmen de Patagones, Chacabuco, Colón, Coronel Rosales, Dolores, Escobar, Esteban Echeverría, Ezeiza, Florencio Varela, Florentino Ameghino, General Arenales, General La Madrid, General Lavalle, General Rodríguez, Gonzalez Chaves, Guaminí, Guido, Hurlingham, Ituzaingó, La Matanza, La Plata, Lanús, Las Flores, Lezama, Lobos, Lomas de Zamora, Luján, Magdalena, Mar Chiquita, Monte Hermoso, Moreno, Navarro, Necochea, Olavarría, Pehuajó, Pila, Pinamar, Presidente Perón, Punta Indio, Quilmes, Ramallo, Rauch, Rivadavia,  Saavedra, Salliqueló, San Martín, San Vicente, Suipacha, Tornquist y Tres Lomas. </p>
                                                <br>
                                                
                                                
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc41')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">3,2 MILLONES DE NUEVOS POBRES POR POLÍTICAS DE MILEI</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 20/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Las políticas de Javier Milei generaron 3,2 millones de nuevos pobres en solo 3 meses, según informe de la Universidad Torcuato Di Tella
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_conan.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En el primer trimestre del año, las políticas implementadas por el gobierno de Javier Milei han tenido un impacto devastador en la situación económica de Argentina. Según un informe de la Universidad Torcuato Di Tella, se estima que durante este período se sumaron 3,2 millones de personas a la ya extensa lista de argentinos que viven en situación de pobreza. Esto eleva el total a alrededor de 22,6 millones de personas, lo que representa casi la mitad de la población del país.
                                                </p>
                                                <br>
                                                <p>El informe, titulado "Nowcast de Pobreza", realizado por el investigador Martín González Rozada, utiliza datos de la Encuesta Permanente de Hogares (EPH) del INDEC, junto con proyecciones de la canasta básica total (CBT) y el Índice de Precios al Consumidor. Según estas estimaciones, la tasa de pobreza urbana alcanzó el 48,3% para el período de octubre de 2023 a marzo de 2024.</p>
                                                <br>
                                                <p>Estos números representan un aumento significativo con respecto a las cifras oficiales de fines de 2023, que situaban a 19,4 millones de personas en situación de pobreza. Este drástico incremento se produce en un contexto de alta inflación y políticas de ajuste a subsidios y tarifas, que han sido implementadas por el gobierno de Milei como parte de su plan económico.
                                                </p>
                                                <br>
                                                <p>Además, el informe revela que la canasta básica total promedio en la región de Gran Buenos Aires alcanzó los 177.598 pesos por adulto, lo que representa un aumento interanual del 239,4%. Mientras tanto, el ingreso total familiar promedio se proyectó con un incremento interanual del 184,0%.
                                                </p>
                                                <br>
                                                <p>Este alarmante panorama económico plantea serias preocupaciones sobre el bienestar de los argentinos y la viabilidad de las políticas implementadas por el gobierno de Milei. Con millones de personas luchando para llegar a fin de mes, se hace evidente la necesidad de medidas urgentes para abordar esta crisis y garantizar un futuro más estable y próspero para todos los argentinos.
                                                </p>
                                                <br>
                                                
                                                
                                                
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/noteros/Ramiro.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Ramiro Caggiano Blanco</strong></p>

                                                    </figure> --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc42')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">UNIVERSIDADES NACIONALES EN LUCHA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 18/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Como una disnea que avanza,  la  Universidad de Buenos Aires  está sintiendo el ahogo preanunciado con diagnóstico de asfixia presupuestaria impuesto por las políticas de recorte estricto por el Presidente de la Nación.
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_uni.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El Consejo Superior de la Universidad comenzó con un ajuste en gastos donde anuncian  que no encenderán calderas, ni aires acondicionados, no funcionarán los ascensores y restringirán el uso de energía eléctrica. Tampoco habrá  becas ni programas de extensión.
                                                </p>
                                                <br>
                                                <p>Un pronóstico desalentador, porque no estaría garantizado el segundo cuatrimestre.</p>
                                                <br>
                                                <p>Como inicio de un plan de lucha, varias facultades dieron clases públicas: en escalinatas de la Facultad de Derecho o  sobre la calle Santiago del Estero la Facultad de que el Instituto de Oncología Roffo. Ciencias Sociales, abrazo multitudinario al Hospital de Clínicas dependiente de la UBA.
                                                </p>
                                                <br>
                                                <p>Quedando expuesto el conflicto  en el cual  están involucradas todas Universidades Nacionales  con un recorte de más del 70% del presupuesto universitario con  un gravísimo impacto sobre los salarios docentes y no docentes, más la anulación de las obras de infraestructura, se presagia que la Marcha Federal del 23  de abril próximo,  convocada  como culminación de esta etapa del plan de lucha será de gran magnitud.
                                                </p>
                                                <br>
                                                <p>Cifras  muy preocupantes que se dieron a conocer sobre el funcionamiento del Hospital de Clínicas (UBA), indican que su actividad debió  quedar reducida al 40 %  de su capacidad, atendiendo solamente las emergencias y patologías oncológicas.
                                                </p>
                                                <br>
                                                <p>Qué junio no sea la partida de defunción para las Universidades Nacionales.</p>
                                                <br>
                    
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc43')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DÍA INTERNACIONAL CONTRA EL ACOSO ESCOLAR: UNA LLAMADA A LA CONCIENCIA Y LA PREVENCIÓN</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 02/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El bullying, una realidad que compromete e involucra a toda la comunidad educativa
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_bulin.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En el marco del "Día Internacional contra el Acoso Escolar", conmemorado el 2 de mayo, se busca sensibilizar y generar conciencia sobre una problemática que afecta de manera significativa a la comunidad educativa en todo el mundo. Esta efeméride, proclamada por la UNESCO en 2013, busca destacar la importancia de erradicar el bullying en todas sus formas, incluido el ciberacoso, reconociendo que la violencia escolar constituye una violación de los derechos fundamentales de los niños, niñas y adolescentes.
                                                </p>
                                                <br>
                                                <p>El bullying, definido por UNICEF y UNESCO como un comportamiento negativo y agresivo que implica un desequilibrio de poder, puede tener efectos devastadores en la salud mental y emocional de los jóvenes afectados. Se manifiesta de diversas formas, como el acoso físico, verbal o emocional, y puede ocurrir tanto en entornos escolares como fuera de ellos.</p>
                                                <br>
                                                <p>Los niños más vulnerables, como aquellos de comunidades marginadas, con identidades de género diversas, con discapacidades, migrantes o refugiados, enfrentan un mayor riesgo de ser víctimas de acoso. Es por ello que la prevención y la concientización son fundamentales para crear entornos escolares seguros y libres de violencia.
                                                </p>
                                                <br>
                                                <p>Para identificar el bullying, es importante prestar atención a los signos que pueden manifestar las víctimas, como cambios repentinos de comportamiento, aislamiento, lesiones físicas inexplicables, pérdida de pertenencias o dinero, entre otros. Es fundamental que los padres, maestros y la comunidad en general estén atentos a estos indicadores y tomen medidas para abordar la situación de manera adecuada.
                                                </p>
                                                <br>
                                                <p>En caso de identificar un caso de bullying, es importante buscar ayuda de inmediato. Se pueden comunicar con organizaciones como la Línea 102 de la Ciudad de Buenos Aires, que brinda asesoramiento en casos de violencia y maltrato infantil, o acudir a la Defensoría del Pueblo de la Ciudad Autónoma de Buenos Aires para recibir orientación y apoyo.
                                                </p>
                                                <br>
                                                <p>El Día Internacional contra el Acoso Escolar nos recuerda la importancia de trabajar juntos para prevenir y erradicar el bullying, garantizando así un ambiente seguro y saludable para todos los niños y jóvenes en el entorno escolar.</p>
                                                <br>
                    
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc44')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">HISTÓRICO CAMBIO DE GUARDIA EN PLAZA DE MAYO CON TRES REGIMIENTOS SIMULTÁNEOS</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 04/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i><b>Por primera vez en la historia, los regimientos de Granaderos, Patricios y General Iriarte realizaron en simultáneo el cambio de guardia en la Plaza de Mayo.
                                            </b></i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_regi.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El ministro de Defensa, Luis Petri, asistió hoy a la ceremonia especial de cambio de guardia en la Plaza de Mayo, en la que participaron las tres unidades históricas del Ejército Argentino: el Regimiento de Granaderos a Caballo, el Regimiento de Infantería 1 Patricios y el Regimiento de Artillería 1 “Brigadier General Tomás Iriarte”. Más de 200 militares formaron parte de este simbólico relevo, acompañados por un entusiasta público en una inédita experiencia, ya que no hay antecedentes de un cambio de guardia efectuado en forma simultánea por estos tres regimientos tradicionales.
                                                </p>
                                                <br>
                                                <p>Junto al ministro Petri, estuvieron presentes en el acto el jefe del Estado Mayor Conjunto de las Fuerzas Armadas, brigadier general Xavier Julián Isaac, y los titulares del Ejército, general de brigada Carlos Alberto Presti, de la Armada, contralmirante Carlos María Allievi, y de la Fuerza Aérea, brigadier mayor Fernando Luis Mengo.</p>
                                                <br>
                                                <p>“Es una tradición que estamos recuperando y le estamos dando un contenido histórico muy importante. No tiene precedentes. Un relevo histórico de tres regimientos, Iriarte, Granaderos y Patricios, como el que se llevó a cabo, tiene que ver con la reivindicación que desde el primer día quisimos hacer a las Fuerzas Armadas”, aseguró el titular de la cartera castrense.
                                                </p>
                                                <br>
                                                <p>“La gente disfruta esta ceremonia. Es hacer memoria, es reivindicar el rol de nuestras Fuerzas Armadas. A su vez, es un evento cultural muy importante y necesario que la ciudadanía estaba reclamando hace muchísimo tiempo”, afirmó el ministro Petri en la Plaza de Mayo, y adelantó que eventos de similares características se realizarán con las unidades históricas en el interior del país.
                                                </p>
                                                <br>
                                                <p>Hasta ahora, los cambios de guardia de cada uno de los edificios se realizaban por separado. Ahora se integró en un solo acto el relevo de las custodias de la Casa Rosada, a cargo de efectivos de Granaderos a Caballo; el Cabildo, donde se posicionan los integrantes de Patricios; y el Ministerio de Defensa, bajo simbólica protección de la unidad histórica del arma de Artillería, el Regimiento Iriarte.
                                                </p>
                                                <br>
                                                <p>A partir de esta ceremonia, que además contó con una destacada participación de la banda militar Tambor de Tacuarí del Regimiento Infantería 1 Patricios, el acto de cambio de guardia en la Plaza de Mayo se repetirá los primeros sábados de cada mes, generando así un extraordinario y emotivo evento abierto al público. Este evento cultural, al igual que en países con gran tradición en este tipo de ceremonias, se convierte en un atractivo turístico.</p>
                                                <br>
                    
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc45')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">BUSCAN ACUERDO PARA NUEVA FÓRMULA DE JUBILACIONES EN ARGENTINA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Victoria Tolosa Paz: “Estamos muy cerca de lograr un dictamen con el radicalismo y Hacemos Coalición Federal por la fórmula de jubilaciones”
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_jubilados.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La diputada nacional de Unión por la Patria se refirió hoy a la discusión que se esta llevando a cabo en la Comisión de Presupuesto y Hacienda de la Cámara de Diputados para poder llegar a dictaminar una nueva fórmula para los jubilados y pensionados de la República Argentina, destacando un acercamiento con los bloques del radicalismo y de Hacemos Coalición Federal, y criticando fuertemente la propuesta manifestada por María Eugenia Vidal y el PRO.
                                                </p>
                                                <br>
                                                <p>“Estamos muy cerca de lograr un dictamen entre la propuesta de Unión por la Patria y la del radicalismo y Hacemos Coalición Federal. Nosotros decimos que tenemos que levantar el piso de los jubilados con el bono dentro del salario para luego comenzar a ajustar por inflación o por salario. Ahí coincidimos con ellos que plantean que ningún jubilado puede cobrar por debajo de la Canasta Básica Total de aun adulto, y luego a partir de ahí ajustamos si hay vaivenes en la economía”, explicó Tolosa Paz en declaraciones a Radio 10.</p>
                                                <br>
                                                <p>La exministra de Desarrollo Social subrayó que "el decreto 274 de Milei no no viene a solucionar lo que le pasa al conjunto de jubilados y pensionados. Por eso queremos llegar a un consenso y mejorar la fórmula, ya que el decreto de Milei los deja por debajo de la línea de pobreza sin ofrecer perspectivas de crecimiento futuro".
                                                </p>
                                                <br>
                                                <p>En ese sentido, la diputada también se refirió a la propuesta presentada ayer por la diputada María Eugenia Vidal en representación del bloque del PRO, quien planteó pagar en 12 cuotas la diferencia entre la inflación de enero (20,6%) y el reconocimiento del 12,5% en el decreto de Milei.
                                                </p>
                                                <br>
                                                <p>"No se trata de competir por ser más despiadados con los jubilados. Milei ya mostró su insensibilidad y ahora se suma Vidal y el PRO. Si hacemos los cálculos, estamos hablando de cuotas de 907 pesos por mes. Es realmente escandaloso", agregó.
                                                </p>
                                                <br>
                                                <p>Durante la entrevista, Tolosa Paz también abordó el paro general convocado por la CGT que se está llevando a cabo hoy: "El paro es contundente, no solo lo están respaldando aquellos que se oponen a las políticas económicas de Javier Milei, sino también los pequeños comerciantes, lo que demuestra claramente la situación. Hay una caída significativa en los salarios y la actividad económica que afecta a todos los sectores".</p>
                                                <br>
                    
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc46')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CAME EN RONDA DE NEGOCIOS DEL TURISMO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>CAME inauguró ronda de negocios del sector turismo organizada por FEDECATUR y CAT
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_came.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Confederación Argentina de la Mediana Empresa (CAME) participó hoy de la inauguración de la 13° edición del Neoworkshop Federal que organizan la Federación de Cámaras de Turismo de la República Argentina (FEDECATUR) y la Cámara Argentina de Turismo (CAT), una ronda de negocios para el fortalecimiento y difusión de la promoción turística, que cuenta con la participación conjunta del sector público y privado.
                                                </p>
                                                <br>
                                                <p>El presidente de CAME, Alfredo González, destacó la importancia del evento al resaltar su “mirada federal” y “las herramientas que da a las pymes del sector para poder comercializar”. A la vez, recordó que “el turismo es un gran derramador, ya que en las localidades que reciben visitantes no sólo se benefician los emprendimientos ligados a la actividad, sino todos los demás comercios”.</p>
                                                <br>
                                                <p>En ese sentido, el secretario de Turismo, Ambiente y Deportes del Ministerio del Interior de la Nación, Daniel Scioli, afirmó que “el turismo es la respuesta a muchos de los problemas que tiene el país”, y añadió: “El turismo receptivo crece, y también tenemos que incrementar el interno”. Al respecto, remarcó la iniciativa de sumar el turismo a Cuota Simple. “El impacto fue muy positivo”, dijo.
                                                </p>
                                                <br>
                                                <p>Por su parte, Yanina Martínez, subsecretaria de Turismo del Ministerio del Interior, subrayó que “la capacitación es uno de los ejes fundamentales para nuestro sector, que emplea a 1,2 millones de personas en todo el país, y que va a llevar bienestar a las familias argentinas”.
                                                </p>
                                                <br>
                                                <p>Participaron también de la inauguración, que se llevó a cabo en el hotel Marriott de la Ciudad de Buenos Aires, el secretario de Turismo de CAME, Gregorio Werchow; el presidente de FEDECATUR, Héctor Viñuales; el titular del Ente de Turismo de la Ciudad de Buenos Aires, Valentín Díaz Gilligan; el presidente de la Cámara Argentina de Turismo, Gustavo Hani; y el prosecretario de la Cámara Argentina de Comercio (CAC), Ángel Machado.
                                                </p>
                                                <br>
                                                
                    
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc47')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ONU TURISMO PRESENTA LA HERRAMIENTA DIGITAL DE AUTOEVALUACIÓN PARA LOS DESTINOS RURALES</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 21/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>ONU Turismo lanza STAR, una herramienta digital de autoevaluación que permite a los destinos rurales cuantificar su desarrollo turístico y obtener recomendaciones adaptadas para fomentar un turismo sostenible e inclusivo.
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_onu2.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>ONU Turismo ha lanzado una innovadora herramienta digital de autoevaluación destinada a promover el desarrollo turístico en zonas rurales. La Herramienta de Autoevaluación de ONU Turismo para Asistir a los Destinos Rurales (STAR) permite que las autoridades locales de estos destinos autoevalúen y cuantifiquen su nivel de desarrollo turístico. Además, proporciona recomendaciones adaptadas a las necesidades específicas de cada destino, comparando distintos lugares y generando datos e ideas valiosas para mejorar las políticas sostenibles e inclusivas en materia de turismo.
                                                </p>
                                                <br>
                                                <p>El Secretario General de ONU Turismo, Zurab Pololikashvili, declaró: "La Herramienta de Autoevaluación de ONU Turismo constituye un punto de inflexión para los destinos rurales. Empodera a las autoridades locales con una herramienta que les permite autoevaluar sus políticas y medidas, proporcionando ideas viables que fomentan el desarrollo del turismo sostenible y contribuyendo al crecimiento global de las comunidades rurales."</p>
                                                <br>
                                                <p>En ese sentido, el secretario de Turismo, Ambiente y Deportes del Ministerio del Interior de la Nación, Daniel Scioli, afirmó que “el turismo es la respuesta a muchos de los problemas que tiene el país”, y añadió: “El turismo receptivo crece, y también tenemos que incrementar el interno”. Al respecto, remarcó la iniciativa de sumar el turismo a Cuota Simple. “El impacto fue muy positivo”, dijo.
                                                </p>
                                                <br>
                                                <p><b>Características de STAR</b>
                                                </p>
                                                <br>
                                                <p><b>Autoevaluación</b> Los destinos rurales pueden evaluar sus políticas e iniciativas mediante indicadores que abarcan cinco ámbitos: gobernanza del turismo; sostenibilidad económica, social y cultural; sostenibilidad medioambiental; desarrollo turístico; e infraestructuras. Esto permite a los interesados centrarse en la planificación estratégica, comercialización y promoción, formación y educación, formulación de políticas, diversificación de productos y servicios, infraestructuras, preservación medioambiental y cultural, colaboración con agentes locales, acceso a la financiación, datos y cuantificación de resultados.
                                                </p>
                                                <br>
                                                <p><b>Recomendaciones adaptadas a las necesidades</b> La herramienta ofrece una guía de recomendaciones ajustadas a los usuarios, acorde con las normas de ONU Turismo y teniendo en cuenta las características únicas de los destinos rurales.</p>
                                                <br>
                                                <p><b>Excelencia comparativa</b> Facilita la comparación de políticas y prácticas entre destinos, ayudando a las autoridades locales a evaluar sus componentes turísticos.</p>
                                                <br>
                                                <p><b>Datos e ideas</b> Proporciona un acervo de datos que permite a los Estados Miembros realizar análisis profundos de los destinos evaluados, destacando puntos fuertes y débiles de las políticas, estrategias e intervenciones en materia de turismo.</p>
                                                <br>
                                                <p>STAR está disponible para todos los destinos rurales de los Estados Miembros de ONU Turismo, y se ofrece a las autoridades locales interesadas en cuantificar el desarrollo de su turismo y obtener recomendaciones adaptadas a sus necesidades. Esta herramienta forma parte del trabajo de Turismo para el Desarrollo Rural de ONU Turismo, un programa que concibe el turismo como motor del desarrollo y el bienestar rural, valorando y salvaguardando los pueblos rurales, los paisajes, los sistemas de conocimientos y la diversidad cultural, en consonancia con los Objetivos de Desarrollo Sostenible (ODS).</p>
                                                <br>
                    
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc48')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">FLORES CUMPLE 218 Y HABRÁ FESTIVAL EN LOS CENTROS CULTURALES DEL BARRIO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 23/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Flores, uno de los barrios más emblemáticos de Buenos Aires, se prepara para festejar su 218 aniversario con una semana llena de actividades culturales. Desde el 24 de mayo, se llevarán a cabo charlas, ferias, shows en vivo, recorridas históricas y un gran festival cultural con la participación especial de Orkesta San Bomba.
                                            </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_flores1.svg"
                                                alt="">
                                        </figure>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_flores2.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Organizado por la Red Cultural de la Comuna 7, este evento busca resaltar la diversidad y la riqueza cultural de Flores, un barrio que ha sido históricamente un punto de encuentro para diversas comunidades y artistas. Desde sus orígenes, Flores ha sido un lugar de inclusión y de persistencia de la cultura popular, y en esta semana de celebración, se busca mantener viva esa tradición.
                                                </p>
                                                <br>
                                                <p>Además de las actividades mencionadas, habrá eventos en diferentes espacios del barrio, como centros culturales, escuelas, clubes, bares y cooperativas. Estos eventos incluirán ferias de productores, charlas, espectáculos en vivo y mucho más.</p>
                                                <br>
                                                <p>Flores ha sido cuna de grandes personalidades, desde artistas hasta líderes sociales, y en este aniversario se busca honrar esa historia de lucha y de resistencia. Figuras como Miguel Ángel, Dolina, Hugo del Carril e incluso el Papa Francisco tienen una conexión especial con este barrio, que sigue siendo un lugar donde la cultura florece y se renueva constantemente.
                                                </p>
                                                <br>
                                                <p>En un momento en el que la cultura popular parece estar en peligro, Flores reafirma su compromiso con los sueños y con la construcción de un barrio inclusivo y diverso. Esta semana de celebración es una oportunidad para recordar la importancia de la cultura como motor de cambio y de transformación social.
                                                </p>
                                                <br>
                                                <p>La programación completa de la Semana de Flores puede encontrarse en @redculturalcomuna7. ¡Ven a celebrar con nosotros el aniversario de Flores, "Donde la cultura florece"!
                                                </p>
                                                <br>
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc49')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PETTOVELLO Y LOS PLATOS VACÍOS: ACUSACIONES Y CONTRADICCIONES GUBERNAMENTALES</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 24/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El Gobierno admite el almacenamiento de cinco millones de kilos de alimentos en un contexto de creciente pobreza. Grabois y organizaciones sociales exigen su distribución inmediata.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_petto.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En un contexto de agudización de la pobreza y la inseguridad alimentaria, el Gobierno confirmó que más de cinco mil toneladas de alimentos no perecederos permanecen retenidos en los galpones del Ministerio de Capital Humano. Estos productos, adquiridos por la gestión anterior para abastecer comedores y merenderos populares, han quedado en stock bajo la dirección de la ministra Sandra Pettovello. La situación ha generado una fuerte reacción por parte de organizaciones sociales y dirigentes políticos, quienes denuncian la inutilización de estos recursos en un momento crítico para muchas familias argentinas.
                                                </p>
                                                <br>
                                                <p>“Es inaudito que toda esa cantidad de comida esté guardada mientras en los barrios la gente se apila cada vez más para pedir un plato caliente”, expresó Alejandro “Peluca” Gramajo, secretario general de la UTEP, durante una manifestación frente a las oficinas de la ministra. Las imágenes de largas filas de personas esperando recibir asistencia alimentaria contrastan dolorosamente con los informes de alimentos almacenados sin ser distribuidos.</p>
                                                <br>
                                                <p>En una reciente conferencia de prensa, el vocero gubernamental Manuel Adorni confirmó la existencia de los alimentos en desuso, en respuesta a un informe publicado por El Destape. “Efectivamente esos alimentos existen”, admitió, lamentando la situación. Según Adorni, el acopio se debe a que la administración anterior entregaba alimentos a comedores "truchos" o inexistentes. Sin embargo, fuentes cercanas a Pettovello argumentan que los alimentos están reservados para situaciones extraordinarias, como catástrofes naturales.
                                                </p>
                                                <br>
                                                <p>Esta disparidad en las explicaciones ha suscitado sospechas y críticas. El dirigente de Patria Grande, Juan Grabois, ha ampliado la denuncia penal contra Pettovello por abuso de autoridad e incumplimiento de los deberes de funcionario público. Además, ha solicitado una inspección ocular en uno de los principales galpones donde se almacenan los alimentos, con el objetivo de verificar tanto la existencia como el estado de los productos.
                                                </p>
                                                <br>
                                                <p>Los datos obtenidos por El Destape revelan que en los depósitos de Martelli y Tafí (Tucumán) se almacenan más de tres millones de kilos de yerba mate, más de un millón de kilos de leche en polvo, y cantidades significativas de otros productos básicos como puré de tomate, garbanzos y arroz con carne. Según cálculos preliminares de las organizaciones sociales, estos alimentos podrían cubrir las necesidades de unas 250 mil familias durante varias semanas.
                                                </p>
                                                <br>
                                                <p>Lorena Corral, responsable de un comedor en el Centro Cultural Recreativo Evita, en la Zabaleta, subraya la gravedad de la situación: “Con lo que la ministra tiene acopiado en sachets de leche podríamos dar meriendas durante 32 años ininterrumpidos.” Corral relata cómo su comedor se mantiene gracias a donaciones y asistencia de la Ciudad, pero señala que muchos otros comedores están cerrando por falta de recursos.</p>
                                                <br>
                                                <p>La tensión social se refleja también en incidentes de violencia en los comedores, algo que, según Gramajo, nunca se había visto antes. “La gente se pelea por un plato de comida, literalmente. Y son cosas que vimos en Capital Federal, acá nomás. El Gobierno tiene que recapacitar”, afirmó.</p>
                                                <br>
                                                <p>En el aspecto presupuestario, el Movimiento de Trabajadores Excluidos (MTE) señala que el ajuste en las partidas destinadas a la ayuda alimentaria es significativo. Comparado con el año anterior, el recorte alcanza el 17,6%, resultado de la falta de actualización por inflación y la subejecución de partidas específicas. Por ejemplo, del presupuesto inicial de 34.338,8 millones de pesos para comedores y merenderos comunitarios, sólo se ha ejecutado el 30% en los primeros cinco meses del año.</p>
                                                <br>
                                                <p>El panorama es desalentador. Mientras las necesidades básicas de miles de familias no están siendo satisfechas, toneladas de alimentos permanecen inmovilizadas. “Le declararon la guerra a los pobres”, concluyó Grabois, resumiendo el sentimiento de frustración y urgencia que embarga a quienes están en la primera línea de asistencia en los barrios más afectados por la crisis.</p>
                                                <br>
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc50')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">JORNADA POR LA COMUNICACIÓN Y LA CULTURA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 25/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>LA CGT Y LA DEFENSORÍA DEL PÚBLICO CONVOCAN A UNA JORNADA EN DEFENSA DE LA COMUNICACIÓN Y LA CULTURA COMO PARTE FUNDAMENTAL DE LOS DERECHOS HUMANOS Y DE NUESTRA IDENTIDAD NACIONAL</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_cultura1.svg"
                                                alt="">
                                        </figure>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_cultura2.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Secretaría de Prensa y Comunicación de la CGT y la Defensoría del Público de Servicios de Comunicación Audiovisual invitan a participar de una jornada en defensa de la comunicación y la cultura como derechos humanos y constitutivos de nuestra identidad nacional. 
                                                </p>
                                                <br>
                                                <p>La actividad se realizará el jueves 6 de junio en el Salón Felipe Vallese de la central obrera (Azopardo 802, CABA) a las 15 hs y contará con la participación de Jorge Sola, Secretario de Prensa y Comunicación de la CGT; Luis Cáceres, Secretario General de la Unión Obrera Ladrillera (UOLRA), Mirian Lewin, titular de la Defensoría del Público, Carla Gaudensi, Secretaria General de la Federación Argentina de Trabajadores de Prensa (FATPREN) y trabajadora de Télam y representantes de RADAR (Intersindical de Cultura) La presentación y moderación del panel estará a cargo de la Secretaria de Prensa y Comunicación de la UOLRA, María Van Loy.</p>
                                                <br>
                                                <p>En la previa del Día del Periodista, esta jornada se enmarca en el creciente escenario de producción y circulación de noticias falsas, discursos agresivos y discriminatorios sobre derechos de los y las trabajadoras, sus organizaciones y representantes. Además de las políticas de censura y el ataque a la libertad de expresión a través del “Proceso de Reorganización” del sistema de medios públicos que lleva adelante el gobierno de Javier Milei.
                                                </p>
                                                <br>
                                                <p>Durante la jornada se presentarán los resultados del Segundo Informe del Observatorio de Prácticas Comunicacionales e Informativas sobre Trabajadores, Trabajadoras y Organizaciones Sindicales en las que se destaca el modo en que se tratan las noticias referidas al sindicalismo, las acciones de protesta y los representantes sindicales.
                                                </p>
                                                <br>
                                                <p>Son convocados a esta jornada las y los trabajadores del sector de la cultura y de Télam, Radio Nacional, la TV pública y  contenidos (Paka Paka, Depor tv y Canal Encuentro), la Intersindical de Cultura RADAR, referentes populares, formadores culturales comunitarios,  sindicales, federaciones, representantes de la Organización Internacional del Trabajo (OIT), bibliotecas, iglesias, abogados y abogadas laboralistas y organismos de DDHH.
                                                </p>
                                                <br>
                                                
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc51')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA CIUDAD PLANTARÁ 18.000 ÁRBOLES Y REEMPLAZARÁ LOS CAÍDOS POR EL TEMPORAL</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 27/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El Ministerio de Espacio Público e Higiene Urbana anunció un incremento del 20% en la plantación de árboles, con 18.074 ejemplares para este año.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_planta.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El Gobierno de la Ciudad de Buenos Aires plantará 18.074 árboles en 2024, sumando 3.074 adicionales para reemplazar los árboles caídos durante el temporal de diciembre. Este esfuerzo representa un incremento significativo en el arbolado urbano. 
                                                </p>
                                                <br>
                                                <p>El Ministerio de Espacio Público e Higiene Urbana del Gobierno de la Ciudad de Buenos Aires ha lanzado un ambicioso plan de arbolado que contempla la plantación de 18.074 árboles este año. De estos, 15.000 forman parte del plan maestro de arbolado porteño, mientras que los restantes 3.074 se añadirán para mitigar el impacto del fuerte temporal del 17 de diciembre, que derribó casi 1.000 árboles. Según el ministerio, esto representa un aumento de más del 20% en comparación con los árboles plantados en años anteriores y un incremento del 50% respecto a 2023.</p>
                                                <br>
                                                <p>Las plantaciones se llevarán a cabo en los espacios verdes de todas las comunas y en las planteras ubicadas en la vía pública. Las empresas encargadas del mantenimiento del arbolado urbano serán las responsables de proveer los nuevos árboles. Además, se sumarán 7.500 nuevas planteras y se relevó que 6.131 planteras están vacías. También se incorporarán 4.443 ejemplares en los espacios verdes de la ciudad.
                                                </p>
                                                <br>
                                                <p>El plan incluye una variedad de al menos 30 especies de árboles, como fresno dorado, crespón, fotinia, viscote, pata de vaca, anacahuita, cedro misionero, lapacho rosado, ciruelo de flor, jacarandá, liquidámbar, tulipanero, plátano, tilo, ibirapitá, caña fístula, tipa, fresno americano y arce plateado, entre otros. La elección de las especies se basará en la disponibilidad en el mercado al momento de la plantación, siempre respetando el diseño paisajístico original.
                                                </p>
                                                <br>
                                                <p>Una situación especial se presenta en el Parque Tres de Febrero de Palermo (Comuna 14), que sufrió importantes pérdidas en su patrimonio forestal durante el temporal. En este caso, se está realizando un censo total de los árboles para luego desarrollar un proyecto de reforestación que se ajuste lo más posible al diseño original, basado en la documentación gráfica histórica existente.
                                                </p>
                                                <br>
                                                <p>Este esfuerzo no solo busca embellecer la ciudad, sino también mejorar la calidad del aire y proporcionar más sombra y espacios verdes para los ciudadanos. El compromiso del Gobierno de la Ciudad con la reforestación y el mantenimiento del arbolado urbano es una respuesta directa a los desafíos ambientales y climáticos actuales.</p>
                                                <br>
                                                <p>La reforestación y plantación de árboles es una parte esencial del plan de la Ciudad de Buenos Aires para crear un entorno urbano más sostenible y saludable para sus residentes.</p>
                                                <br>
                                                
                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc52')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MINIBUSES ELÉCTRICOS RECORRERÁN EL MICROCENTRO PORTEÑO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 27/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El Gobierno de la Ciudad de Buenos Aires adquirirá 12 minibuses eléctricos que recorrerán el Casco Histórico, mejorando la conectividad y reduciendo las emisiones de carbono.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_mini1.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Con el objetivo de avanzar en la descarbonización del transporte público, el Gobierno de la Ciudad de Buenos Aires ha lanzado una licitación pública para la adquisición de 12 minibuses eléctricos. Estos vehículos están destinados a recorrer el Casco Histórico, una zona que abarca desde Retiro hasta Parque Lezama, con un trayecto total de 12.3 kilómetros y 36 paradas. 
                                                </p>
                                                <br>
                                                <p>El proyecto busca mejorar la conectividad en áreas que fueron afectadas por las obras de puesta en valor realizadas en 2022, las cuales trasladaron las líneas de colectivos que circulaban por calles históricas como Perú, Chacabuco, Bolívar y Defensa hacia los Metrobuses de 9 de Julio y del Bajo. Ahora, los minibuses eléctricos ofrecerán una solución sostenible y eficiente para los residentes y visitantes del microcentro porteño.</p>
                                                <br>
                                                <p>Las unidades, que realizarán un trayecto de ida de 7.3 kilómetros y de vuelta de 5 kilómetros en aproximadamente 97 minutos, están diseñadas con piso bajo y adaptaciones para personas con movilidad reducida, garantizando accesibilidad para todos. Además, el servicio será operado exclusivamente por conductoras mujeres, quienes recibirán becas para obtener su licencia de conducir, en un esfuerzo por promover la inclusión laboral femenina.
                                                </p>
                                                <br>
                                                <p>El jefe de Gobierno porteño, Jorge Macri, destacó la importancia de este proyecto como parte de su compromiso con la movilidad sustentable. "La descarbonización del transporte público es uno de los objetivos que tenemos. Este minibus es el primer paso y buscamos vincular el Casco Histórico de la Ciudad cuidando el medio ambiente y ante el cambio climático para que todos podamos vivir mejor", afirmó.
                                                </p>
                                                <br>
                                                <p>Por su parte, el ministro de Infraestructura, Pablo Bereciartúa, subrayó la relevancia de la movilidad eléctrica en la lucha contra la contaminación urbana. "La movilidad sustentable es el camino hacia un futuro más limpio. Con el minibús eléctrico, Buenos Aires tiene la posibilidad de revitalizar su Casco urbano con una alternativa sostenible y sin emisiones", señaló.
                                                </p>
                                                <br>
                                                <p>El recorrido previsto para los minibuses eléctricos incluirá las siguientes calles y avenidas:</p>
                                                <br>
                                                <p><b>Ida</b> Desde Av. Elvira Rawson De Dellepiane y Av. Brasil, pasando por Av. Juan De Garay, Av. Paseo Colón, Av. Martín García, Uspallata, Ituzaingó, Piedras, Av. Brasil, Perú, Av. Belgrano, Av. Presidente Julio A. Roca, Moreno, Piedras, Esmeralda, Bartolomé Mitre, San Martín, Marcelo T. De Alvear, Esmeralda, Arenales, Crucero Gral. Belgrano, hasta Juncal.</p>
                                                <br>
                                                <p><b>Vuelta</b> Desde Juncal y Crucero General Belgrano, por Juncal, Maipú, Av. Santa Fe, Maipú, Chacabuco, Av. Brasil, hasta Av. Elvira Rawson de Dellepiane.</p>
                                                <br>
                                                <p>Se espera que este nuevo sistema de transporte beneficie a más de 500,000 pasajeros anualmente, ofreciendo una opción de movilidad moderna, accesible y ecológica en el corazón de Buenos Aires.</p>
                                                <br>

                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc53')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">FEDERACIÓN DE MEDIOS DIGITALES HACE SU PRESENTACIÓN EN LA PLATA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 28/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Con más de 80 medios asociados a la Red, la Federación de Medios Digitales realizará su presentación oficial en La Plata este miércoles 29 de mayo. Tras obtener la personería jurídica hace más de un año y visitar provincias como San Juan, Tucumán y Córdoba, la Federación hará su debut en la capital bonaerense.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_federa.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/UqID0Ip36fk?si=YLUh3qCeGsHV25ll" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La presentación tendrá lugar a las 16 horas en la Sala Polivalente del Pasaje Dardo Rocha, en la calle 50 entre 6 y 7. En el evento participarán alrededor de 30 autoridades de cooperativas de medios digitales, radiales, impresos y productoras de contenidos multimediales, quienes abordarán el estado de situación de los medios cooperativos. 
                                                </p>
                                                <br>
                                                <p>La jornada continuará con una mesa cultural en Esquina América, calle 18 y 71, a partir de las 19 horas, que se transmitirá por streaming en el canal de Youtube de @argmediosok. En este espacio se espera la presencia de funcionarios del Gobierno municipal y provincial, académicos y estudiantes de la carrera de Periodismo y Comunicación Social de la Universidad Nacional de La Plata (UNLP).</p>
                                                <br>
                                                <p>La Federación de Medios Digitales, integrada por 80 medios de Argentina, tiene como objetivo defender y mejorar la situación de medios de comunicación alternativos. Laureano Barrera, referente de la Federación y perteneciente al medio Perycia, destacó que la elección de La Plata para la presentación se debe a que es donde está “asentado el poder político de la provincia”.
                                                </p>
                                                <br>
                                                <p>En este contexto, la Federación busca dialogar con otros actores institucionales y construir junto a funcionarios, dirigentes y políticos. Para ello, han preparado una intensa charla donde integrantes de distintos medios hablarán acerca de la situación que atraviesan los medios populares, alternativos y comunitarios.
                                                </p>
                                                <br>
                                                <p>Entre las actividades de la Federación se encuentran un proyecto de ley para fomentar los medios cooperativos en la agenda gubernamental, la regulación de plataformas para que empresas multinacionales paguen un porcentaje justo por el trabajo de los medios digitales, un censo para visibilizar el sector y gestionar mejor los recursos, pasantías con estudiantes universitarios y la preparación del Encuentro Federal en Santa Fe para trazar una agenda que permita nuevas conquistas.
                                                </p>
                                                <br>
                                                <p>La presentación en La Plata es un paso más en el camino de resistencia y crecimiento de la Federación de Medios Digitales, que busca mantener firmes sus objetivos a pesar de la coyuntura política y económica.</p>
                                                <br>
                                                

                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc54')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">RODOLFO YANZÓN: "LA LUCHA POR LOS DERECHOS HUMANOS Y LA CLASE TRABAJADORA VAN DE LA MANO"</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Yanzón, quien recibió el reconocimiento en la legislatura porteña, reafirmó su compromiso con la clase trabajadora y la defensa de la memoria, la verdad y la justicia en Argentina.</i>
                                        </p>
                                        <br>
                                        {{-- <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_federa.svg"
                                                alt="">
                                        </figure> --}}
                                        
                                        <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/c5VP9iT8Pvg?si=giH97dL_Y_icbxF7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En el marco de la entrega de los premios Jorge Morresi 2024, Rodolfo Yanzón, reconocido abogado especializado en derechos humanos y miembro destacado de la Liga Argentina por los Derechos del Hombre, fue homenajeado por su incansable lucha por la memoria, la verdad y la justicia. Yanzón, quien también fue querellante en el juicio de la ESMA, recibió este galardón en un acto emotivo donde se destacó su compromiso y trayectoria en la defensa de los derechos humanos en Argentina. 
                                                </p>
                                                <br>
                                                <p>Durante la entrega del premio, Yanzón destacó la importancia de la universidad pública y gratuita en su formación como abogado y su vínculo con la clase trabajadora. "Yo vengo de la clase trabajadora y pude ser abogado gracias a la universidad pública gratuita. Nunca me olvidé de ser de esa clase y me voy a morir siendo de la clase trabajadora", afirmó Yanzón, resaltando la importancia de la educación pública en la formación de profesionales comprometidos con la justicia social.</p>
                                                <br>
                                                <p>Asimismo, Yanzón hizo hincapié en el ejemplo de las Madres y Abuelas de Plaza de Mayo, así como en el papel fundamental de las organizaciones de derechos humanos y los sindicatos en la lucha por los derechos humanos y laborales en Argentina. "Las organizaciones van a seguir, el payaso que hoy está en la Casa Rosada será algo transitorio, un dolor de cabeza seguro, pero va a pasar y las organizaciones van a quedar", expresó Yanzón, destacando la importancia de la resistencia y la continuidad en la lucha por los derechos humanos.
                                                </p>
                                                <br>
                                                <p>Además, Yanzón hizo referencia a la persistencia de los discursos negacionistas y reivindicatorios por parte de algunos sectores de la sociedad. "Estamos hablando de gente que reivindica, no es que niegan, reivindican lo afirman y dicen que lo volverían a hacer", señaló Yanzón, enfatizando la importancia de seguir combatiendo la impunidad y el olvido en relación con los crímenes de lesa humanidad cometidos durante la última dictadura militar en Argentina.
                                                </p>
                                                <br>
                                                <p>En este sentido, Yanzón resaltó la importancia de la lucha colectiva y la unidad en la defensa de los derechos humanos y la memoria histórica. "Este pueblo no se va a doblegar, hemos dejado claro que no vamos a permitir que se siga reivindicando el pacto de silencio que hemos querido romper en todos estos años", concluyó Yanzón, reafirmando su compromiso y el de toda la sociedad en la búsqueda de justicia y verdad.
                                                </p>
                                                <br>
                                                
                                                

                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc55')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA DEFENSA DE LOS MEDIOS PÚBLICOS EN ARGENTINA: UN LLAMADO A LA RESISTENCIA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Fernando Pedernera, miembro de la comisión directiva de SIPREBA y delegado de la intersindical en Radio Nacional, alerta sobre el peligro que enfrentan los medios públicos en Argentina, incluyendo la posible venta de Radio Nacional y el cierre de Télam, la agencia de noticias nacional.</i>
                                        </p>
                                        <br>
                                        {{-- <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_federa.svg"
                                                alt="">
                                        </figure> --}}
                                        
                                        <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Z8erUjiM40o?si=cY0HKLmYrrwJbmcA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En un contexto de incertidumbre y preocupación, Fernando Pedernera, destacado miembro de la comisión directiva de SIPREBA y delegado de la intersindical en Radio Nacional, ha levantado la voz para advertir sobre los riesgos que enfrentan los medios públicos en Argentina. En declaraciones recientes, Pedernera ha señalado que el gobierno actual está considerando la venta de Radio Nacional y el cierre de Télam, la agencia de noticias nacional, lo que representa un grave peligro para la diversidad informativa y la democracia en el país. 
                                                </p>
                                                <br>
                                                <p>Para Pedernera, la defensa de los medios públicos va más allá de una cuestión laboral o sectorial: es un tema de soberanía informativa y de derecho de la ciudadanía a acceder a una información plural y diversa. En un momento en el que la concentración de medios privados es cada vez mayor, los medios públicos juegan un papel fundamental en garantizar que la información llegue de forma equitativa a toda la población.</p>
                                                <br>
                                                <p>El dirigente sindical destaca además la importancia histórica de los medios públicos en Argentina, recordando cómo las emisoras de Radio Nacional fueron clave durante momentos críticos de la historia del país, como el levantamiento de los carapintadas en 1987. Este legado de compromiso con la verdad y la diversidad informativa es lo que está en juego en la actualidad.
                                                </p>
                                                <br>
                                                <p>En un gesto de solidaridad y compromiso, el equipo de ADN Populares se ha unido a la defensa de los medios públicos, reconociendo su importancia en la construcción de una sociedad informada y democrática. Pedernera y su equipo están decididos a resistir cualquier intento de desmantelamiento de los medios públicos, reafirmando su compromiso con la libertad de expresión y la soberanía informativa en Argentina.
                                                </p>
                                                <br>
                                                
                                                

                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc56')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">HOMENAJE A LA GARGANTA PODEROSA: VOZ Y MEMORIA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>En un emotivo acto en la Legislatura porteña, La Garganta Poderosa recibió un merecido homenaje, recordando su lucha y compromiso con los sectores más vulnerables.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_levy.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Z8erUjiM40o?si=cY0HKLmYrrwJbmcA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Garganta Poderosa, emblema de la lucha popular, fue homenajeada en la Legislatura porteña en un acto lleno de emoción y memoria. Nacho Levy, destacado referente del movimiento, resaltó la importancia de reconocer la historia y el legado de quienes precedieron a La Poderosa, subrayando la necesidad de unidad y reconocimiento de los sectores postergados. 
                                                </p>
                                                <br>
                                                <p>El acto en la Legislatura porteña fue un reconocimiento a La Garganta Poderosa, destacada organización que representa a los sectores populares y lucha por sus derechos. Levy, en su discurso, recordó que la historia de La Poderosa no comenzó con su fundación, sino con los sueños de miles de desaparecidos y vecinos de barrios populares que resistieron y se organizaron.</p>
                                                <br>
                                                <p>Levy recordó que "el camino de la garganta no es un camino que nació con La Poderosa como movimiento social, ni siquiera con la creación de los movimientos sociales en su gran mayoría después del 2001, sino que es la consecución histórica de un legado de sueños que tenían 30,000 compañeras y compañeros detenidos desaparecidos".
                                                </p>
                                                <br>
                                                <p>El referente de La Garganta Poderosa criticó la impunidad con la que son tratados los sectores populares, responsabilizándolos de la situación económica del país, mientras ellos luchan por subsistir. "Hay que ser muy cínico para pensar que la culpa de la situación económica la tengan vecinas y vecinos que vienen peleando por el derecho a la vivienda, al pan y al trabajo desde hace décadas", afirmó Levy.
                                                </p>
                                                <br>
                                                <p>En un llamado a la unidad y a la valoración del capital humano de los sectores postergados, Levy destacó la importancia de visibilizar y priorizar sus necesidades. La Garganta Poderosa, a través de su lucha y resistencia, sigue siendo un faro de esperanza y un ejemplo de organización y dignidad en medio de la adversidad.</p>
                                                <br>
                                                

                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc57')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CLAUDIO PEPE: EL LEGADO DE UN PADRE VISIONARIO Y COMPROMETIDO</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>En el marco de un emotivo homenaje en la Legislatura porteña, Claudio Pepe, hijo de Lorenzo Pepe, compartió sus reflexiones sobre el legado de su padre y la actualidad política y social de Argentina. </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_pepe.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Z8erUjiM40o?si=cY0HKLmYrrwJbmcA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>"Recién minutos atrás terminamos de homenajear a mi padre, Lorenzo Pepe, entre muchas otras personas, por su discurso visionario hace 23 años en el homenaje a Andrés Framini. Él vaticinó lo que hoy está pasando en Argentina, y eso fue gracias a ATE, fundamentalmente por la idea y por el reconocimiento a la figura de Lorenzo", compartió Claudio Pepe. 
                                                </p>
                                                <br>
                                                <p>Lorenzo Pepe, reconocido dirigente político y sindical, no pudo asistir al homenaje debido a problemas de salud, lo que para Claudio representa un sentimiento muy fuerte. "Corría el 2001 con el grito de 'que se vayan todos', y Juan Carlos Pugliese, presidente de la cámara en ese momento, le plantea a Lorenzo que alguien tiene que decir algo. Y ahí en este discurso de homenaje al compañero Andrés Framini, Lorenzo vaticinó lo que terminó siendo lamentablemente una realidad en los años venideros", agregó.</p>
                                                <br>
                                                <p>En cuanto al impacto del discurso de su padre en las nuevas generaciones, Claudio señaló: "Uno de los pibes de la juventud de 20 años me decía que estos discursos necesitamos mostrarle a los pibes, porque tu viejo ha marcado un rumbo y lo sigue marcando. Creo que ha sido un hombre que nunca trabajó para el reconocimiento, sino que desde la política y en el campo gremial, ha sido un hombre que ha hablado a cinco compañeros o a 5000 con la misma pasión".
                                                </p>
                                                <br>
                                                <p>Claudio también destacó la importancia de reconocer que la política es una tarea noble, y que la dirigencia no son seres excepcionales, sino un reflejo de la sociedad. "Con el tiempo veremos cómo conforma la dirigencia. Esperamos una reacción social y en el corto plazo. Acá se espera de la dirigencia en general que sean seres excepcionales, y no son más que quienes de alguna manera tenemos actividad política y social, no somos más que un reflejo de la sociedad. O sea, no vienen de Marte, surgen de nuestro pueblo", expresó.
                                                </p>
                                                <br>
                                                <p>En cuanto a la situación actual y los desafíos que enfrenta el país, Claudio hizo referencia a la importancia de la acción colectiva: "Estamos en un momento donde te obligan a elegir entre la razón y la luz, la salud o viste. Realmente es muy difícil, es demencial lo que estamos atravesando en todos los ámbitos".</p>
                                                <br>
                                                <p>El legado de Lorenzo Pepe sigue vivo en la memoria y el compromiso de quienes lo conocieron y en las nuevas generaciones que se inspiran en su ejemplo de lucha y compromiso por un país más justo y solidario.</p>
                                                <br>

                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc58')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">III FORO DE COMUNICACIÓN, DERECHOS HUMANOS Y DEMOCRACIA: "EL ROL DE LOS MEDIOS EN LA ERA DE LA CRUELDAD"</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 006/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Este viernes 7 de junio, en el marco del Día de las y los Periodistas, se realizará el III Foro de Comunicación, Derechos Humanos y Democracia en "El Pulqui Bar" de Buenos Aires. El evento, que comenzará a las 18 hs, abordará el papel de los medios en la actual "Era de la crueldad" y contará con la participación de reconocidos expertos y comunicadores.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_foro1.svg"
                                                alt="">
                                        </figure>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_foro2.svg"
                                                alt="">
                                        </figure>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Z8erUjiM40o?si=cY0HKLmYrrwJbmcA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El III Foro de Comunicación, Derechos Humanos y Democracia tendrá lugar este viernes 7 de junio a las 18 hs en "El Pulqui Bar", ubicado en Entre Ríos 484, Ciudad Autónoma de Buenos Aires. Este encuentro se celebra en el Día de las y los Periodistas y pretende reflexionar sobre el rol de los medios en la denominada "Era de la crueldad". 
                                                </p>
                                                <br>
                                                <p>El panel del foro estará compuesto por distinguidos profesionales del ámbito de la comunicación y la academia. Entre los participantes se encuentran Diego de Charras, profesor de Derecho a la Información y vicedecano de la Facultad de Ciencias Sociales de la Universidad de Buenos Aires (UBA); Josefina Bolis, doctora en Comunicación y pro-secretaria de Medios y Publicaciones de la Universidad Nacional de La Plata (UNLP); Daniel Rosso, director de AM 530 y de la Maestría en Periodismo y Medios de Comunicación de la UNLP; y Sol Despeinada, médica, sexóloga clínica, especialista en abordaje medicinal de la planta de cannabis y comunicadora en ESI, género y salud sexual y reproductiva.</p>
                                                <br>
                                                <p>La moderación del panel estará a cargo de María Quintero, magíster en periodismo, presidenta de la Cooperativa de Comunicación y Cultura Por Venir, y directora de Revista PPV. Quintero guiará el debate y las reflexiones en torno a los desafíos y responsabilidades de los medios en un contexto caracterizado por la creciente violencia y desinformación.
                                                </p>
                                                <br>
                                                <p>Para finalizar el evento, se ofrecerá un show musical a cargo de Verde Aluminio y Edu Schmidt, ex Árbol, quienes aportarán una cuota de arte y entretenimiento a la jornada.
                                                </p>
                                                <br>
                                                <p>El III Foro de Comunicación, Derechos Humanos y Democracia promete ser un espacio de reflexión y debate crucial sobre el papel de los medios en tiempos de adversidad. La participación de destacados expertos y el cierre musical garantizan una tarde enriquecedora tanto para los profesionales de la comunicación como para el público en general.</p>
                                                <br>
                                                

                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc59')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA POBREZA EN ARGENTINA ALCANZÓ EL 55,5% EN 2024, SEGÚN LA UCA</a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 06/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El Observatorio de la Deuda Social de la UCA reveló que la indigencia también creció al 17,5% en el primer trimestre. La inflación y la subida de precios son los principales factores.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_pobreza2.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Z8erUjiM40o?si=cY0HKLmYrrwJbmcA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Un estudio del Observatorio de la Deuda Social de la Universidad Católica Argentina (UCA) estimó que la pobreza en Argentina ascendió al 55,5% y la indigencia al 17,5% en el primer trimestre de 2024. La inflación y el aumento de los precios de alimentos son las principales causas de este deterioro social, afectando a casi 25 millones de personas en áreas urbanas. 
                                                </p>
                                                <br>
                                                <p>En un reciente informe, el Observatorio de la Deuda Social Argentina (ODSA) de la Universidad Católica Argentina (UCA) presentó cifras alarmantes sobre la situación social del país. Durante el primer trimestre de 2024, la pobreza alcanzó al 55,5% de la población, mientras que la indigencia se elevó del 9,6% al 17,5%.</p>
                                                <br>
                                                <p>El estudio detalla que casi 25 millones de personas, residentes en áreas urbanas, viven por debajo de la línea de pobreza, principalmente debido a la inflación y al incremento de los precios de los alimentos, que han golpeado duramente a los sectores más vulnerables.
                                                </p>
                                                <br>
                                                <p>“Estos incrementos se atribuyen en gran parte al impacto de la inflación de los últimos meses y a la suba principalmente en el rubro alimentos que afectó a los estratos más bajos de la sociedad”, señala el informe. Además, se destaca que unos 7,8 millones de personas se encuentran en estado de indigencia, viviendo por debajo de la canasta básica alimentaria (CBA).
                                                </p>
                                                <br>
                                                <p>La inseguridad alimentaria es otro de los puntos críticos. El informe revela que el 24,7% de las personas en áreas urbanas enfrentan inseguridad alimentaria, afectando al 32,2% de los niños, niñas y adolescentes. En el Área Metropolitana de Buenos Aires (AMBA), estos valores son aún más altos, alcanzando al 35% de los menores.</p>
                                                <br>
                                                <p>Pese a los esfuerzos del Estado por mitigar la crisis, como el refuerzo de la Asignación Universal por Hijo (AUH) y la Tarjeta Alimentaria, el informe indica que estas medidas no han sido suficientes. "El 42,6% de los niños, niñas y adolescentes reside en hogares que reciben AUH+Tarjeta Alimentaria", señala el ODSA.</p>
                                                <br>
                                                <p>El informe también analiza la situación educativa y laboral en el país. Se destaca que el 23% de los niños de 3 a 5 años no asiste a establecimientos educativos formales y que el 35,3% de los jóvenes de 18 a 29 años no ha terminado la secundaria. En el ámbito laboral, el 32,5% de los trabajadores residen en hogares en situación de pobreza, y el 26,5% tiene un empleo precario.</p>
                                                <br>
                                                <p>El informe de la UCA refleja una preocupante realidad en Argentina, donde la pobreza y la indigencia continúan en ascenso, afectando gravemente a los sectores más vulnerables. La inflación y el aumento de los precios de los alimentos se presentan como desafíos críticos que requieren respuestas urgentes y efectivas del Estado para revertir esta alarmante tendencia, mientras el gobieno apuesta a dejar librado al mercado la suerte de los y las argentinas.</p>
                                                <br>

                                                <div class="text-start object-center">
                                                    {{-- <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/der/Adri.svg') }}"
                                                            alt="">
                                                        
                                                        <p> <strong>Nota de Adriana Zerdín</strong></p>

                                                    </figure>  --}}
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


                    axios.get("https://api.dailymotion.com/videos?channel=news&limit=3")
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
