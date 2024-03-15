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
