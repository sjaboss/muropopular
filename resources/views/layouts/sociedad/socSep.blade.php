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
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">KICILLOF IMPULSA LA CREACIÓN DE UNA UNIDAD PARA BUSCAR A
                                                LOS NIETOS APROPIADOS</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 17/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El gobernador de Buenos Aires creó la Unidad Provincial Especializada
                                                    para la búsqueda de personas apropiadas durante la última dictadura,
                                                    en respuesta al desmantelamiento de la Conadi por parte del gobierno
                                                    nacional.</i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_kicinietes2.svg"
                                                    alt="">
                                            </figure>

                                            {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                                        </article> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">

                                                    <p>El gobernador Axel Kicillof ha anunciado la creación de la Unidad
                                                        Provincial Especializada para la búsqueda de personas
                                                        apropiadas, en respuesta al desmantelamiento de la Comisión
                                                        Nacional por el Derecho a la Identidad (CONADI) y al reciente
                                                        decreto 727/2024, que desactivó la Unidad Especial de
                                                        Investigación de la Desaparición de Niños. Esta nueva unidad,
                                                        dependiente del Ministerio de Justicia bonaerense, se enfocará
                                                        en la búsqueda de bebés apropiados durante la última dictadura
                                                        cívico-militar, estimando que la mitad de estos casos podrían
                                                        corresponder a personas nacidas en la provincia de Buenos Aires.
                                                    </p>
                                                    <br>
                                                    <p>Matías Moreno, subsecretario de Derechos Humanos de la provincia,
                                                        detalló que la unidad recibirá denuncias, solicitará
                                                        documentación y coordinará con organismos nacionales para
                                                        realizar pericias genéticas en el Banco Nacional de Datos
                                                        Genéticos. La creación de esta unidad responde al compromiso
                                                        provincial con la memoria, verdad, justicia y reparación, en
                                                        contraste con el desmantelamiento de la CONADI por parte del
                                                        gobierno nacional.</p>
                                                    <br>
                                                    <p>El gobernador Kicillof se reunió con Estela Carlotto, presidenta
                                                        de Abuelas de Plaza de Mayo, para coordinar el trabajo de la
                                                        nueva unidad. Kicillof subrayó que la provincia continuará
                                                        buscando a los 300 nietos y nietas aún no recuperados y
                                                        defenderá el trabajo de las Abuelas de Plaza de Mayo. El
                                                        gobernador también expresó su preocupación por el
                                                        desmantelamiento de la CONADI y destacó que la provincia actuará
                                                        como un "escudo" para mitigar el impacto de esta decisión sobre
                                                        los bonaerenses.</p>
                                                    <br>
                                                    <p>La Subsecretaría de Derechos Humanos de Buenos Aires ya
                                                        implementa políticas de restitución de identidad, incluyendo la
                                                        colaboración con el equipo de Antropología Forense y el
                                                        Ministerio de Salud para la identificación de restos óseos de
                                                        desaparecidos. La nueva unidad también asumirá el rol de
                                                        recepción y tramitación de denuncias de apropiaciones,
                                                        garantizando el acceso a documentación y coordinación con
                                                        autoridades judiciales.</p>
                                                    <br>
                                                    <p>Roberto Cipriano, miembro de la Comisión Provincial por la
                                                        Memoria, celebró la creación de la unidad, considerándola
                                                        indispensable para continuar la búsqueda de identidades aún no
                                                        recuperadas. Cipriano criticó al Gobierno nacional por no
                                                        abordar adecuadamente el tema y por promover una narrativa que
                                                        minimiza los efectos de la dictadura, resaltando la importancia
                                                        de mantener el compromiso con la memoria y la justicia.</p>
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
                    @livewire('lateral')

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
                                            <a href="">AUMENTOS DE TARIFAS EN OCTUBRE: UN GOLPE AL BOLSILLO DE
                                                LAS FAMILIAS ARGENTINAS</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El gobierno de Javier Milei implementa subas de entre el 4% y el 16%
                                                    en servicios esenciales, lo que agrava la situación económica y el
                                                    poder adquisitivo de los hogares.</i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_tarisubas.svg"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En octubre, el gobierno de Javier Milei ha decidido implementar
                                                        aumentos de tarifas que oscilan entre el 4% y el 16% en
                                                        servicios esenciales, como colegios, medicina prepaga, agua,
                                                        transporte y alquileres. Este es el segundo mes consecutivo de
                                                        incrementos, lo que agrava la situación económica de las
                                                        familias argentinas, que ya se enfrentan a un contexto de alta
                                                        inflación y reducción del poder adquisitivo.
                                                    </p>
                                                    <br>
                                                    <p>Entre los aumentos más significativos, destaca el del boleto del
                                                        subte, que aumentará un 16,46%, mientras que las tarifas de agua
                                                        ya han subido un 4,9%. Estos ajustes tarifarios no solo impactan
                                                        el presupuesto familiar, sino que también reflejan una
                                                        preocupante transferencia de ingresos desde los sectores medios
                                                        hacia las empresas, que han recuperado rentabilidad a través de
                                                        estas medidas.
                                                    </p>
                                                    <br>
                                                    <p>La presión sobre el poder adquisitivo es alarmante. Según el
                                                        Instituto Interdisciplinario de Economía Política (IIPE), un
                                                        tipo de familia necesita más de 140 mil pesos para cubrir los
                                                        costos fijos mensuales. Esta cifra resalta la magnitud de los
                                                        desafíos económicos que enfrentan muchos hogares, que luchan por
                                                        adaptarse a un escenario cada vez más complicado.
                                                    </p>
                                                    <br>
                                                    <p>La incertidumbre sobre futuros aumentos y la falta de medidas
                                                        concretas por parte del gobierno para frenar esta tendencia
                                                        generan preocupación entre la población. Los hogares, a medida
                                                        que intentan ajustar sus gastos a estos nuevos costos, se
                                                        encuentran en una situación cada vez más precaria. Esto ha
                                                        llevado a intensificar la discusión sobre la sostenibilidad de
                                                        las políticas económicas actuales, lo que podría desencadenar un
                                                        creciente descontento social si no se abordan las necesidades de
                                                        las familias.
                                                    </p>
                                                    <br>
                                                    <p>Con un panorama tan adverso, la urgencia por un cambio en las
                                                        políticas económicas se hace cada vez más evidente. Las
                                                        decisiones del gobierno en los próximos meses serán cruciales
                                                        para determinar si las familias argentinas podrán encontrar
                                                        alivio ante la creciente presión económica o si, por el
                                                        contrario, se verán obligadas a seguir lidiando con aumentos que
                                                        parecen no tener fin.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc123')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MASIVA MARCHA FEDERAL UNIVERSITARIA CONTRA EL VETO DE
                                                MILEI</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Más de un millón de personas se movilizaron en rechazo a la decisión
                                                    del Presidente Javier Milei de vetar la Ley de Financiamiento
                                                    Universitario, consolidando una fuerte oposición en defensa de la
                                                    educación pública.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_vetoley.svg"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>La Segunda Marcha Federal Universitaria congregó a una multitud
                                                        en las principales ciudades del país, con una asistencia que los
                                                        organizadores estimaron en 1,5 millones de personas. En Buenos
                                                        Aires, el epicentro de la protesta fue frente al Congreso, donde
                                                        se dieron cita estudiantes, docentes, sindicatos, organizaciones
                                                        sociales y referentes de derechos humanos, todos unificados en
                                                        la defensa del presupuesto universitario. “No queremos que nos
                                                        arrebaten nuestros sueños. Nuestro futuro no les pertenece”,
                                                        afirmó Piera Fernández de Piccoli, presidenta de la Federación
                                                        Universitaria Argentina (FUA), desde el escenario.
                                                    </p>
                                                    <br>
                                                    <p>Los convocados alzaron sus voces en un contexto de creciente
                                                        preocupación por el ajuste que el gobierno de Milei aplica a la
                                                        educación pública. La marcha, considerada más masiva que la
                                                        anterior realizada en abril, incluyó expresiones de apoyo en
                                                        ciudades como Córdoba, Mendoza, Rosario, Tucumán y Ushuaia.
                                                        “Ojalá el Gobierno tome nota y podamos planificar una solución”,
                                                        dijo Victor Moriñigo, presidente del Consejo Interuniversitario
                                                        Nacional.
                                                    </p>
                                                    <br>
                                                    <p>El Presidente respondió a la marcha desde sus redes sociales,
                                                        sosteniendo que “la universidad pública no está en peligro” y
                                                        cuestionando la legitimidad de los manifestantes. A pesar de las
                                                        tácticas del gobierno para limitar la movilización, como la
                                                        detención de micros y el cierre de calles, la manifestación fue
                                                        contundente y su mensaje claro.
                                                    </p>
                                                    <br>
                                                    <p>La comunidad educativa denunció la crítica situación actual: “La
                                                        pérdida de quienes trabajamos en las universidades públicas es
                                                        de una gravedad inusitada; muchos docentes y no docentes
                                                        perciben salarios por debajo de la línea de pobreza”, expusieron
                                                        en un documento leído en el acto.
                                                    </p>
                                                    <br>
                                                    <p>Entre los oradores, la expresidenta Cristina Fernández de
                                                        Kirchner destacó la importancia de la educación pública para la
                                                        movilidad social. También se hicieron presentes líderes
                                                        opositores, desde Horacio Rodríguez Larreta hasta Sergio Massa,
                                                        quienes coincidieron en la necesidad de mantener y fortalecer el
                                                        financiamiento de las universidades.
                                                    </p>
                                                    <br>
                                                    <p>La movilización no solo reunió a sectores políticos, sino que
                                                        también atrajo a movimientos sociales, sindicatos y organismos
                                                        de derechos humanos, evidenciando un amplio respaldo a la causa.
                                                        “La universidad es de todos, y nuestros hijos ocupan las aulas
                                                        de esas universidades públicas, tenemos que defenderlas”,
                                                        declaró Norma Morales de la UTEP.
                                                        <br>
                                                    <p>El acto concluyó con una ovación y la interpretación de
                                                        "Fanático" de Lali Espósito, cerrando una jornada que reafirmó
                                                        el compromiso de la sociedad con la educación pública y la
                                                        justicia social.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc124')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI FIRMA EL VETO Y DESAFÍA A LA EDUCACIÓN PÚBLICA</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La decisión del presidente se tomó horas después de la masiva marcha
                                                    en defensa del financiamiento universitario, desatando la
                                                    indignación de la comunidad educativa y la oposición política.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_desafio.svg"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En una muestra clara de su desdén por la educación pública, el
                                                        presidente Javier Milei firmó el veto a la Ley de Financiamiento
                                                        Universitario horas después de la Segunda Marcha Federal
                                                        Universitaria, que reunió a más de un millón de personas en todo
                                                        el país. Desde Olivos, Milei se dedicó a descalificar a la
                                                        oposición en redes sociales, acusándola de ser "populistas
                                                        demagógicos" y de intentar desestabilizar su gobierno. La
                                                        movilización, que concentró no solo a estudiantes y docentes,
                                                        sino también a sindicatos y organizaciones sociales, fue
                                                        calificada por el Gobierno como un mero acto político, tratando
                                                        de restarle legitimidad a un reclamo que, según los
                                                        organizadores, es vital para el futuro de la educación en
                                                        Argentina.
                                                    </p>
                                                    <br>
                                                    <p>En un comunicado emitido desde Casa Rosada, el Gobierno intentó
                                                        dividir el apoyo de los distintos sectores políticos a la
                                                        movilización, argumentando que la presencia de figuras como
                                                        Cristina Kirchner, Sergio Massa y Horacio Rodríguez Larreta en
                                                        la protesta formaba parte de un “nuevo frente de izquierda
                                                        populista” que busca obstaculizar el plan económico del
                                                        presidente. "El problema no es con las universidades, sino con
                                                        los legisladores que hacen populismo demagógico", afirmaron,
                                                        tratando de desviar la atención del verdadero asunto: la crítica
                                                        situación de las instituciones educativas ante el recorte
                                                        presupuestario.
                                                    </p>
                                                    <br>
                                                    <p>Pese a los esfuerzos del Gobierno por deslegitimar la marcha, la
                                                        realidad es que La Libertad Avanza carece de los votos
                                                        necesarios en el Congreso para respaldar el veto que Milei
                                                        firmó. Las universidades habían solicitado un presupuesto de 7,2
                                                        billones de pesos, mientras que el Gobierno solo asigna 3,8
                                                        billones, lo que revela una clara intención de desfinanciar la
                                                        educación pública. Esto plantea serias dudas sobre la viabilidad
                                                        del sistema universitario en el país, donde muchos docentes
                                                        viven por debajo de la línea de pobreza.
                                                        <br>
                                                    <p>La comunidad educativa denunció la crítica situación actual: “La
                                                        pérdida de quienes trabajamos en las universidades públicas es
                                                        de una gravedad inusitada; muchos docentes y no docentes
                                                        perciben salarios por debajo de la línea de pobreza”, expusieron
                                                        en un documento leído en el acto.
                                                    </p>
                                                    <br>
                                                    <p>La ministra de Seguridad, Patricia Bullrich, intensificó la
                                                        narrativa de conspiración al insinuar que la movilización era un
                                                        pretexto para preparar un “golpe” contra el Gobierno,
                                                        desestimando la importancia de las demandas educativas. En
                                                        respuesta a la creciente presión social, Milei utilizó su cuenta
                                                        de Twitter para reafirmar su postura: "Si para enfrentar a uno
                                                        solo tenés que juntarte con un montón de impresentables
                                                        prostituyendo una causa noble, eso es una mayúscula muestra de
                                                        debilidad y cobardía".
                                                    </p>
                                                    <br>
                                                    <p>La decisión de Milei de firmar el veto a la ley de financiamiento
                                                        universitario refleja una clara estrategia de confrontación con
                                                        la comunidad educativa y los sectores políticos que apoyan la
                                                        educación pública. Mientras la tensión en el Congreso crece y se
                                                        intensifican las negociaciones por los votos, la lucha por una
                                                        educación pública y de calidad se convierte en un tema central
                                                        en el debate político argentino.
                                                        <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc125')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CARRERA AMO MIS MAMAS EN LA PLATA</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 04/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La carrera "Amo Mis Mamas" se llevará a cabo en La Plata para
                                                    concientizar sobre la prevención del cáncer de mama, coincidiendo
                                                    con su día internacional.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_materia.svg"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El próximo sábado 19 de octubre, el Estadio Único Diego Armando
                                                        Maradona de La Plata será el escenario de la segunda edición de
                                                        la carrera "Amo Mis Mamas", organizada por el Ministerio de
                                                        Mujeres y Diversidad de la provincia de Buenos Aires. El evento,
                                                        que comenzará a las 14 hs., tiene como objetivo visibilizar la
                                                        importancia de la prevención y detección temprana del cáncer de
                                                        mama, coincidiendo con el Día Internacional de la Lucha contra
                                                        esta enfermedad.
                                                    </p>
                                                    <br>
                                                    <p>La carrera se llevará a cabo bajo la consigna “Cada Paso Cuenta”
                                                        y contará con la participación de diversas organizaciones
                                                        locales que apoyan la causa, entre ellas la Secretaría de
                                                        Mujeres y Diversidad del municipio de La Plata, la Dirección de
                                                        Mujer, Género y Diversidad de Berisso y el Ministerio de Salud.
                                                        Las actividades incluirán acreditaciones, entrega de kits, una
                                                        charla técnica, y una feria de artesanas y artesanos, así como
                                                        stands institucionales relacionados con la salud.
                                                    </p>
                                                    <br>
                                                    <p>Los participantes podrán inscribirse en dos modalidades: un
                                                        recorrido de 2 km participativos y otro de 8 km competitivos,
                                                        ambos gratuitos y abiertos a la comunidad. La carrera dará
                                                        inicio a las 19 hs., con la ruta de 2 km llegando hasta el
                                                        Parque Alberti y la de 8 km hasta Plaza Moreno. Los corredores
                                                        del trayecto más largo contarán con un chip para rastrear su
                                                        ubicación.
                                                    </p>
                                                    <br>
                                                    <p>Esta iniciativa es parte de las acciones del Ministerio de
                                                        Mujeres y Diversidad, que desde 2024 promueve la campaña “Si
                                                        cuidas, cuidate. Prevenir es una tarea compartida”. La propuesta
                                                        busca generar conciencia sobre la salud integral de mujeres y
                                                        diversidades, destacando la importancia de la detección temprana
                                                        del cáncer.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc126')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA INTERNA DEL PJ Y LA CANDIDATURA DE CRISTINA</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 05/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El PJ enfrenta un momento crucial en su historia interna, donde se
                                                    define la posible candidatura de Cristina Fernández de Kirchner a la
                                                    presidencia del partido.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_interna.svg"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El operativo clamor por "Cristina presidenta" resuena nuevamente,
                                                        esta vez en la búsqueda de la conducción del PJ. Ante un
                                                        peronismo dividido por la disputa entre Máximo Kirchner y Axel
                                                        Kicillof, la expresidenta se muestra dispuesta a asumir un rol
                                                        que nunca había considerado, a la espera de que se reordenen las
                                                        piezas del tablero político. Ricardo Quintela, gobernador de La
                                                        Rioja y hasta hace poco único candidato a presidir el partido,
                                                        desafió las expectativas al reafirmar su intención de competir:
                                                        “El peronismo tiene que debatir, y si tiene que competir, tiene
                                                        que competir”.
                                                    </p>
                                                    <br>
                                                    <p>Mientras Quintela recorre el país buscando apoyos, CFK ha estado
                                                        proponiendo alternativas desde el Instituto Patria, aunque
                                                        ninguna ha tenido éxito hasta ahora. La figura de Quintela no
                                                        era bien vista por algunos sectores, que argumentaban que el
                                                        presidente del PJ debía ser alguien que no fuera un gobernador,
                                                        debido a la necesidad de ejercer una oposición activa.
                                                    </p>
                                                    <br>
                                                    <p>La presión para que Cristina acepte liderar el partido ha
                                                        aumentado, especialmente tras la crisis social provocada por las
                                                        políticas del actual gobierno. Gildo Insfrán, gobernador de
                                                        Formosa y aliado clave, ha insistido en que la expresidenta
                                                        debería ser la candidata. Recientemente, CFK mantuvo una reunión
                                                        con Insfrán y otros senadores en la que se discutió su posible
                                                        candidatura y se destacó su disposición para liderar.
                                                    </p>
                                                    <br>
                                                    <p>La fragmentación del peronismo actual hace que la unidad sea
                                                        esencial, y muchos consideran que la única figura que puede
                                                        aglutinar al partido es CFK. Sin embargo, Ricardo Quintela,
                                                        quien continúa recibiendo respaldo, ha dejado claro que no se
                                                        retirará. “El que gana conduce, el que pierde acompaña”, afirmó
                                                        desde Neuquén, donde se encontraba en campaña.
                                                    </p>
                                                    <br>
                                                    <p>En un contexto donde el trasvasamiento generacional parece
                                                        estancado, la pregunta que queda es si Cristina tomará el mando
                                                        o si el partido encontrará una manera de unirse en torno a un
                                                        candidato que represente a todos los sectores. La decisión debe
                                                        tomarse pronto, ya que las elecciones internas están programadas
                                                        para el 17 de noviembre.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc127')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DENUNCIAS POR EL CIERRE DEL HOSPITAL LAURA BONAPARTE</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 06/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El cierre del Hospital Nacional de Salud Mental Laura Bonaparte genera
                                                    alarma entre los trabajadores y organizaciones de derechos humanos.
                                                    El Gobierno nacional anunció la reestructuración del centro, que
                                                    atiende a miles de personas con problemas de salud mental.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_bona.svg"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Los trabajadores del Hospital Nacional de Salud Mental Laura
                                                        Bonaparte se encuentran en estado de alerta tras el anuncio del
                                                        gobierno nacional de cerrar los servicios de internación y
                                                        guardia. Esta decisión afectará a más de 25,000 pacientes
                                                        atendidos anualmente y pone en riesgo la continuidad de un
                                                        equipo de 600 trabajadores que luchan por brindar atención en un
                                                        contexto de ajuste y precariedad laboral.
                                                    </p>
                                                    <br>
                                                    <p>La noticia fue comunicada de manera confusa y repentina. Según
                                                        Leonardo Fernández Camacho, delegado general de ATE, “no
                                                        sabíamos nada hasta hoy, aunque nos han dicho que el Gobierno ya
                                                        estaría firmando el decreto”. La respuesta oficial del
                                                        Ministerio de Salud argumenta que se busca “priorizar la
                                                        asignación de recursos en los pacientes que lo necesitan”, sin
                                                        embargo, los trabajadores destacan que esta medida representa un
                                                        abandono sistemático de la salud mental en el país.
                                                    </p>
                                                    <br>
                                                    <p>An Millet, trabajador social del hospital, enfatizó la
                                                        importancia de este centro como un lugar de cuidado integral.
                                                        “No se trata solo del cierre del Bonaparte, sino de una política
                                                        que atenta contra el bienestar de la población”, advirtió. La
                                                        atención a personas en situación de vulnerabilidad y los
                                                        programas de capacitación a nivel nacional corren el riesgo de
                                                        desaparecer.
                                                        <br>
                                                    <p>Organizaciones de derechos humanos también expresaron su repudio
                                                        ante esta decisión. En un comunicado, denuncian que el cierre
                                                        del hospital es un ataque directo a los derechos humanos y a la
                                                        salud pública. “En tiempos en que la atención de la salud mental
                                                        es prioritaria, esta medida es un atropello inaceptable”,
                                                        afirmaron.
                                                        <br>
                                                    <p>La comunidad y los trabajadores se movilizan para exigir la
                                                        continuidad del hospital, que, desde su fundación, ha sido un
                                                        pilar fundamental en la atención de la salud mental en el país.
                                                        En un momento donde el sufrimiento psíquico se ha incrementado,
                                                        es imperativo que el Estado garantice la atención y los recursos
                                                        necesarios para la salud mental de su población.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc128')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CÁMARA DE DIPUTADOS APRUEBA VETO A LEY DE FINANCIAMIENTO
                                                UNIVERSITARIO
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La Cámara de Diputados respaldó el veto presidencial a la Ley de
                                                    Financiamiento Universitario, desoyendo la movilización social en
                                                    defensa de la educación pública.

                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_tablero.svg"
                                                    alt="">
                                            </figure>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El veto a la Ley de Financiamiento Universitario fue convalidado
                                                        en la Cámara de Diputados con 160 votos afirmativos, 84
                                                        negativos y 5 abstenciones. Este texto, que había sido aprobado
                                                        por ambas Cámaras del Congreso y luego vetado por el Presidente,
                                                        buscaba ampliar el financiamiento de las universidades
                                                        nacionales para garantizar su funcionamiento y mejorar los
                                                        salarios de docentes y no docentes. La decisión del gobierno de
                                                        Javier Milei pone de relieve una política de ajuste que prioriza
                                                        el recorte de recursos esenciales, en lugar de fortalecer la
                                                        educación pública.
                                                    </p>
                                                    <br>
                                                    <p>En paralelo al debate, organizaciones estudiantiles y sindicatos
                                                        se concentraron frente al Congreso para expresar su rechazo al
                                                        veto. En el recinto, los votos a favor de la sanción de la ley
                                                        se enfrentaron a la decisión del Ejecutivo, cuya intención de
                                                        judicializar la ley en caso de ser rechazada evidencia su
                                                        postura contra el fortalecimiento de la educación pública. La
                                                        Ley de Financiamiento Universitario proponía destinar el 85% de
                                                        los recursos del presupuesto a gastos salariales y el 15% a
                                                        gastos generales y de funcionamiento. Con este veto, el futuro
                                                        de las instituciones educativas se encuentra en un panorama
                                                        incierto, generando un clima de descontento en la comunidad
                                                        académica que exige recursos suficientes para garantizar la
                                                        calidad educativa.</p>
                                                    <br>
                                                    <p>La decisión de la Cámara de Diputados, alineada con la agenda
                                                        neoliberal del gobierno, resalta la necesidad de una respuesta
                                                        contundente por parte de los movimientos sociales y políticos
                                                        que defienden la educación como pilar de una sociedad justa. La
                                                        lucha por la Ley de Financiamiento Universitario no solo
                                                        representa un desafío al ajuste de Javier Milei, sino también
                                                        una defensa del futuro educativo de las próximas generaciones.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc129')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">GRABOIS DENUNCIA VIOLENCIA INSTITUCIONAL EN ALLANAMIENTO
                                                A DIRIGENTA SOCIAL
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Juan Grabois apuntó contra el gobierno de Javier Milei por el violento
                                                    allanamiento a la casa de Fernanda Miño, ex titular del FISU,
                                                    denunciando un avance de la represión estatal.
                                                </i>
                                            </p>
                                            <br>
                                            {{-- <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_denunciagrabo.svg"
                                                alt="">
                                        </figure> --}}
                                            <iframe class="w-full aspect-video"
                                                src="https://www.youtube.com/embed/enpgkjq3cF0?si=D0Ez_XHrRdLLde5E"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen></iframe>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Juan Grabois condenó el allanamiento realizado en la casa de
                                                        Fernanda Miño, ex titular del Fondo de Integración Socio Urbana
                                                        (FISU), acusando al gobierno de Javier Milei de cruzar una
                                                        “línea roja” en su ataque a las organizaciones sociales. Miño
                                                        fue víctima de un operativo policial en Villa La Cava, San
                                                        Isidro, por un presunto robo de moto, que el dirigente del
                                                        Movimiento de Trabajadores Excluidos (MTE) tildó de irregular y
                                                        desproporcionado. Grabois, que se trasladó al lugar
                                                        inmediatamente después del operativo, criticó la falta de
                                                        atención a la grave problemática del narcotráfico en el barrio,
                                                        que se ha convertido en un foco de violencia y muertes entre los
                                                        jóvenes.
                                                    </p>
                                                    <br>
                                                    <p>El ex candidato presidencial inicialmente responsabilizó a la
                                                        Policía Federal, aunque luego aclaró que el operativo fue
                                                        llevado a cabo por la Policía Bonaerense. “La responsabilidad
                                                        por la golpiza a Fernanda y su hija es de la Bonaerense”, afirmó
                                                        Grabois, mientras denunciaba cómo las fuerzas de seguridad
                                                        habían aterrorizado a la familia durante el allanamiento. En un
                                                        video compartido en redes sociales, el dirigente enfatizó que
                                                        “nunca encontraron nada” en las acciones anteriores contra Miño
                                                        y criticó el hecho de que un allanamiento nocturno por un
                                                        supuesto robo de moto tuviera lugar mientras la dirigente
                                                        regresaba de una actividad política.</p>
                                                    <br>
                                                    <p>Las denuncias de Grabois reflejan un creciente descontento entre
                                                        los sectores sociales organizados, que ven en estas acciones un
                                                        intento de silenciar las voces críticas al gobierno de Milei.
                                                        "Son cobardes siempre con los de arriba y muy fuertes con los de
                                                        abajo", sentenció, advirtiendo que este tipo de acciones no
                                                        quedarán impunes. La situación ha encendido alarmas sobre la
                                                        violencia institucional, llevando a muchos a cuestionar la
                                                        efectividad de las políticas de seguridad que, según críticos,
                                                        priorizan la represión sobre la protección de los derechos
                                                        humanos.
                                                    </p>
                                                    <br>
                                                    <p>Con un claro mensaje de resistencia, Grabois finalizó afirmando
                                                        que "esto no queda así" y prometió seguir luchando contra las
                                                        injusticias que afectan a los sectores más vulnerables,
                                                        destacando la necesidad de una respuesta firme ante la creciente
                                                        ola de represión.</p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc130')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL IPC DE SEPTIEMBRE ALCANZÓ EL 3,5%
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La inflación de septiembre mostró un aumento del 3,5% y acumuló un
                                                    preocupante 101,6% en lo que va del año, en un contexto económico
                                                    cada vez más adverso para las familias trabajadoras.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_ipcsep.svg"
                                                    alt="">
                                            </figure>
                                            {{-- <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/enpgkjq3cF0?si=D0Ez_XHrRdLLde5E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El Índice de Precios al Consumidor (IPC) de septiembre de 2024
                                                        registró un incremento interanual del 209%. El rubro que más
                                                        aumentó fue Vivienda, agua, electricidad, gas y otros
                                                        combustibles, con una suba del 7,3%. Esta alza estuvo impulsada
                                                        por las actualizaciones en tarifas de servicios públicos y los
                                                        costos de alquileres, que continúan afectando fuertemente a los
                                                        sectores populares. La inflación golpea especialmente en las
                                                        regiones de GBA, Noroeste y Cuyo, donde los servicios básicos
                                                        impactaron de manera más profunda.
                                                    </p>
                                                    <br>
                                                    <p>En contraste, en regiones como Pampeana, Noreste y Patagonia, el
                                                        mayor aumento se dio en Alimentos y bebidas no alcohólicas
                                                        (2,3%), con subas importantes en carnes, pan, cereales y
                                                        productos lácteos. Esto profundiza aún más las dificultades para
                                                        quienes enfrentan dificultades para llenar la canasta básica en
                                                        un contexto de ajuste brutal promovido por el gobierno de Javier
                                                        Milei, que insiste en políticas que empobrecen a los sectores
                                                        más vulnerables.</p>
                                                    <br>
                                                    <p>La segunda mayor suba del mes se registró en Prendas de vestir y
                                                        calzado (6,0%), atribuido al cambio de temporada. Mientras
                                                        tanto, las menores variaciones se vieron en Bebidas alcohólicas
                                                        y tabaco (2,2%) y Recreación y cultura (2,1%).
                                                    </p>
                                                    <br>
                                                    <p>A nivel de categorías, los precios regulados subieron un 4,5%,
                                                        principalmente por los aumentos en tarifas de servicios
                                                        públicos, reflejando una vez más el peso de las políticas de
                                                        ajuste en los sectores medios y bajos. El núcleo del IPC mostró
                                                        una suba del 3,3%, mientras que los productos estacionales
                                                        subieron un 2,9%.</p>
                                                    <br>
                                                    <p>La situación es cada vez más crítica para la mayoría de la
                                                        población, que debe enfrentar un aumento constante del costo de
                                                        vida mientras los salarios permanecen estancados. Las cifras del
                                                        INDEC reflejan no solo el fracaso de las políticas neoliberales
                                                        impulsadas por el gobierno, sino también la urgencia de generar
                                                        un cambio de rumbo que priorice la protección social y el
                                                        bienestar de las mayorías.</p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc131')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI Y UN NUEVO ATAQUE A LAS UNIVERSIDADES
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 13/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>En el acto para rebautizar el CCK, el presidente lanza duras críticas
                                                    a la educación pública.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_ataque_uni_2.svg"
                                                    alt="">
                                            </figure>
                                            {{-- <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/enpgkjq3cF0?si=D0Ez_XHrRdLLde5E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En un controvertido discurso durante el acto de rebautizo del
                                                        Centro Cultural Kirchner como Palacio de la Libertad Domingo
                                                        Faustino Sarmiento, el presidente Javier Milei aprovechó la
                                                        ocasión para criticar nuevamente a las universidades públicas.
                                                        Refiriéndose a la figura de Sarmiento, conocido como el "padre
                                                        del aula" en Argentina, el mandatario sostuvo que “la
                                                        universidad pública nacional hoy no le sirve a nadie más que a
                                                        los hijos de la clase alta y los ricos y la clase media alta”,
                                                        reiterando su intención de auditar las casas de altos estudios.
                                                    </p>
                                                    <br>
                                                    <p>A pesar de que la tarea de auditar a las universidades no
                                                        corresponde al Poder Ejecutivo, Milei insistió en que el sistema
                                                        actual es un "subsidio de los pobres hacia los ricos",
                                                        exacerbando la ya tensa relación con el ámbito académico. En su
                                                        crítica, señaló que “en un país donde la mayoría de los niños
                                                        son pobres y no saben leer, escribir ni realizar una operación
                                                        matemática básica, el mito de la universidad gratuita se
                                                        convierte en una farsa”.
                                                    </p>
                                                    <br>
                                                    <p>El presidente también intentó vincular su discurso con la figura
                                                        de Sarmiento, afirmando que, si los defensores de las
                                                        universidades públicas verdaderamente apoyaran la movilidad
                                                        social, "tomarían el ejemplo de Sarmiento y defenderían una
                                                        educación inicial de calidad para todos". Según Milei, el
                                                        sistema universitario ha dejado de ser una herramienta de
                                                        ascenso social y se ha transformado en un "obstáculo" para el
                                                        mismo.
                                                    </p>
                                                    <br>
                                                    <p>Milei volvió a poner en escena la propuesta de auditorías,
                                                        sosteniendo que las universidades están llenas de "filtraciones
                                                        de dinero" que no llegan ni a los alumnos ni a los profesores.
                                                        Rechazó las críticas que señalan que su gobierno pretende
                                                        desmantelar la universidad pública, alegando que su único
                                                        objetivo es "terminar con la corrupción".
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc132')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA UNIDAD EMANCIPADORA ANTE EL FASCISMO EN ARGENTINA
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 15/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Rocco Carbone analiza el auge del fascismo en Argentina y llama a la
                                                    unidad de las fuerzas progresistas para construir un futuro
                                                    emancipador.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover"
                                                    src="../img/soc/soc_la_inidad_eman.svg" alt="">
                                            </figure>
                                            {{-- <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/enpgkjq3cF0?si=D0Ez_XHrRdLLde5E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En un momento de creciente polarización política en Argentina, el
                                                        filósofo y analista político Rocco Carbone expone su
                                                        preocupación sobre el ascenso del fascismo en el país. En una
                                                        reciente entrevista, Carbone sostiene que el gobierno de Javier
                                                        Milei representa una amenaza real para las conquistas
                                                        democráticas y los derechos humanos, alineando su ideología con
                                                        la de movimientos de extrema derecha que han proliferado en el
                                                        continente.
                                                    </p>
                                                    <br>
                                                    <p>Carbone destaca la importancia de no caer en la trampa del
                                                        sectarismo y la fragmentación entre las fuerzas progresistas.
                                                        "Debemos evitar los fraccionalismos en los partidos y
                                                        movimientos sociales. Es esencial construir un gran campo de
                                                        resistencia y afirmación que reúna a las tradiciones
                                                        emancipadoras del peronismo y de la izquierda en Argentina",
                                                        señala. Para él, esta unidad no solo es estratégica, sino
                                                        necesaria para enfrentar la opresión que representa el actual
                                                        gobierno.
                                                    </p>
                                                    <br>
                                                    <p>El académico también hace referencia a Clara Zetkin, quien en la
                                                        década de 1920 propuso la confluencia de fuerzas emancipadoras
                                                        ante el auge del fascismo en Europa. Carbone sugiere que, al
                                                        igual que Zetkin, hoy debemos articular las luchas de distintas
                                                        tradiciones políticas para formar un bloque sólido que enfrente
                                                        los desafíos actuales. "Debemos buscar una síntesis entre el
                                                        peronismo y las diversas corrientes de izquierda que existen en
                                                        el país", afirma.
                                                    </p>
                                                    <br>
                                                    <p>A lo largo de la entrevista, Carbone enfatiza que la historia no
                                                        ha terminado y que la resistencia es una parte integral de la
                                                        lucha por la emancipación. “Los tiempos difíciles son
                                                        oportunidades para reafirmar nuestras convicciones y avanzar
                                                        hacia un futuro más justo”, concluye.
                                                    </p>
                                                    <br>
                                                    <p>La visión de Rocco Carbone no solo es un llamado a la acción,
                                                        sino también una invitación a la reflexión sobre el papel de
                                                        cada militante y ciudadano en la construcción de una sociedad
                                                        más equitativa, donde los derechos de todos sean respetados y
                                                        promovidos.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc133')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MURIÓ LIAM PAYNE EN UN HOTEL DE PALERMO
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 18/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El exintegrante de One Direction falleció tras caer del tercer piso.
                                                    La autopsia
                                                    confirmó las causas de su muerte.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_liam1.svg"
                                                    alt="">
                                            </figure>
                                            {{-- <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/enpgkjq3cF0?si=D0Ez_XHrRdLLde5E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Liam Payne, cantante británico y exintegrante de One Direction,
                                                        falleció el
                                                        miércoles tras caer desde el tercer piso de un hotel en el
                                                        barrio porteño de
                                                        Palermo. Tenía 31 años. Según el informe forense, la causa de
                                                        muerte fueron
                                                        “politraumatismos y una hemorragia interna y externa” provocadas
                                                        por el
                                                        impacto de la caída. La Fiscalía Nacional en lo Criminal y
                                                        Correccional N°14
                                                        investiga el caso como “muerte dudosa”.
                                                    </p>
                                                    <br>
                                                    <p>El hecho ocurrió a las 17:07, cuando el encargado del hotel
                                                        alertó al 911 sobre
                                                        un huésped que se encontraba bajo los efectos de drogas y
                                                        alcohol. Al llegar
                                                        los equipos de emergencia y la Policía de la Ciudad, Payne ya
                                                        había caído
                                                        desde el balcón de su habitación y fue declarado muerto en el
                                                        lugar.
                                                        <br>
                                                    <p>La autopsia, realizada entre las 21:45 y las 23:05 del mismo día,
                                                        confirmó las
                                                        causas del deceso. Aunque no se descarta ninguna hipótesis, los
                                                        primeros
                                                        estudios indican que Payne estaba solo al momento de la caída y
                                                        que no hubo
                                                        intervención de terceros. En la habitación se encontraron
                                                        sustancias que
                                                        podrían ser estupefacientes, además de bebidas alcohólicas.
                                                    </p>
                                                    <br>
                                                    <p>El cantante había llegado a Buenos Aires para asistir al recital
                                                        de su
                                                        excompañero de banda, Niall Horan. Los fanáticos de Payne,
                                                        conmocionados
                                                        por la noticia, se congregaron en las afueras del hotel, donde
                                                        armaron un altar
                                                        en su honor. Además, está prevista una vigilia en el Obelisco
                                                        para este jueves
                                                        a las 17 horas.
                                                    </p>
                                                    <br>
                                                    <p>Payne había hablado abiertamente sobre sus problemas con las
                                                        adicciones y la
                                                        salud mental en varias entrevistas. Era padre de un niño de
                                                        siete años junto a
                                                        la cantante Cheryl Cole. La tragedia sacudió a sus seguidores,
                                                        quienes

                                                        recordaron su paso por Argentina en 2014 junto a One Direction,
                                                        cuando se
                                                        presentaron en el Estadio Vélez.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc134')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL OJO QUE ESPIA: EL ESPIONAJE EN LA HISTORIA
                                                ARGENTINA
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 19/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Juan Ignacio Provéndola explora la Dirección de Inteligencia de la
                                                    Policía de la
                                                    Provincia de Buenos Aires en su libro y revela las verdades ocultas
                                                    sobre el
                                                    espionaje en el país.
                                                </i>
                                            </p>
                                            <br>
                                            {{-- <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_liam1.svg"
                                                alt="">
                                        </figure> --}}
                                            <iframe class="w-full aspect-video"
                                                src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen></iframe>
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Juan Ignacio Provéndola, escritor y periodista de investigación,
                                                        ofrece una
                                                        mirada profunda sobre la Dirección de Inteligencia de la Policía
                                                        de la Provincia
                                                        de Buenos Aires (DIBA) en su obra &quot;El Ojo que Espía&quot;.
                                                        Este organismo, clave
                                                        en la persecución del peronismo durante la Revolución
                                                        Fusiladora, operó hasta
                                                        1998 y fue el segundo más grande del país después de la AFI.
                                                        Provéndola
                                                        destaca que la DIBA acumuló aproximadamente tres millones de
                                                        documentos,
                                                        fotografías, cassettes y videos, revelando un vasto archivo de
                                                        espionaje.
                                                    </p>
                                                    <br>
                                                    <p>Su interés por la DIBA surgió durante su colaboración con la
                                                        Comisión
                                                        Provincial por la Memoria, que trabajaba para organizar estos
                                                        archivos. En este
                                                        contexto, Provéndola exploró temas que captaban la curiosidad
                                                        del público,
                                                        como el espionaje en el rock, un ámbito que conocía bien por su
                                                        labor en el
                                                        suplemento de cultura joven de Página/12. Al investigar,
                                                        descubrió que las
                                                        representaciones populares del espionaje a menudo no reflejan la
                                                        realidad. La
                                                        complejidad de estos organismos contrasta con la imagen del
                                                        espía que
                                                        Hollywood ha popularizado.
                                                        <br>
                                                    <p>Provéndola también se adentra en el tema de los cuerpos de
                                                        desaparecidos
                                                        que aparecieron en la costa atlántica argentina, un interés que
                                                        ha cultivado
                                                        desde su libro sobre Villa Gesell. En su investigación,
                                                        reflexiona sobre cómo la
                                                        mudanza a Buenos Aires en 2001 le permitió comprender la
                                                        historia de
                                                        militantes desaparecidos, como Santiago Villanueva, y cómo en
                                                        las
                                                        comunidades pequeñas la represión puede ser menos evidente, pero
                                                        persiste
                                                        en la cotidianidad.
                                                    </p>
                                                    <br>
                                                    <p>Un aspecto crucial de su trabajo es el análisis de los
                                                        &quot;vuelos de la muerte&quot;
                                                        durante la dictadura, donde los cuerpos de las víctimas fueron
                                                        ocultados para
                                                        evitar que los turistas se enteraran. Este proceso fue
                                                        facilitado por la falta de
                                                        recursos en las comunidades locales, y Provéndola ha logrado
                                                        profundizar en
                                                        estos aspectos oscuros, aportando información valiosa que sigue
                                                        emergiendo.
                                                    </p>
                                                    <br>
                                                    <p>A pesar del consenso que promueve dejar atrás el pasado,
                                                        Provéndola afirma
                                                        que quedan muchas historias por contar sobre la dictadura. La
                                                        violencia
                                                        policial, como en el caso de Miguel Bru, y la represión que
                                                        continuó después de
                                                        la dictadura, son temas que aún requieren investigación. La
                                                        policía, en
                                                        ocasiones, instigaba violencia en eventos culturales y
                                                        deportivos para justificar
                                                        su presencia, perpetuando un ciclo de control y desinformación.
                                                    </p>
                                                    <br>
                                                    <p>Provéndola concluye que, a pesar de los avances democráticos, las
                                                        prácticas
                                                        de espionaje e infiltración en movimientos sociales persisten,
                                                        lo que enfatiza la
                                                        necesidad de seguir investigando y desenterrando las verdades
                                                        ocultas de la
                                                        historia argentina.
                                                    </p>
                                                    <br>
                                                    <p>A pesar del consenso que promueve dejar atrás el pasado,
                                                        Provéndola afirma
                                                        Para conocer más sobre esta fascinante conversación, te
                                                        invitamos a ver el
                                                        video completo de la entrevista en nuestro canal de YouTube, ADN
                                                        Populares
                                                        TV.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc135')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI, UNA CRISIS QUE AFECTA AL 73,3% DE LOS
                                                ARGENTINOS
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 20/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Las decisiones del Gobierno de Javier Milei han agravado la situación
                                                    de
                                                    pobreza en el país, alcanzando al 73,3% de la población.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_mileiCrisis.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Las decisiones del Gobierno de Javier Milei han llevado a la
                                                        pobreza a un
                                                        alarmante 73,3% de la población argentina. Desde su asunción el
                                                        10 de
                                                        diciembre de 2023, el presidente ha implementado una serie de
                                                        medidas que
                                                        han intensificado el descontento social. Entre estas, se
                                                        encuentra el cierre de
                                                        13 ministerios y el despido de 30.000 empleados públicos, lo que
                                                        representa
                                                        casi el 10% de la plantilla nacional. Estas acciones han
                                                        provocado una
                                                        paralización de la obra pública y recortes significativos en
                                                        áreas clave como
                                                        educación, salud, ciencia y jubilaciones.
                                                    </p>
                                                    <br>
                                                    <p>Los recortes presupuestarios han generado un clima de
                                                        incertidumbre,
                                                        afectando a los sectores más vulnerables de la sociedad. Las
                                                        universidades,
                                                        por su parte, han respondido con paros nacionales, evidenciando
                                                        el impacto de
                                                        estas políticas en la formación y el desarrollo del país.
                                                    </p>
                                                    <br>
                                                    <p>En el periodo entre 2002 y 2012, Argentina experimentó un
                                                        crecimiento
                                                        económico que permitió una disminución notable de la pobreza y
                                                        una mejora
                                                        en la distribución de la riqueza. Sin embargo, a partir de 2012,
                                                        el país enfrentó
                                                        serias dificultades económicas que se han profundizado con la
                                                        actual gestión.
                                                        Las políticas de ajuste implementadas por el Gobierno han
                                                        afectado no solo la
                                                        economía, sino también la capacidad de la nación para innovar y
                                                        desarrollarse.
                                                    </p>
                                                    <br>
                                                    <p>La resistencia social está en aumento, evidenciada por las
                                                        movilizaciones de
                                                        estudiantes universitarios que han tomado más de cien facultades
                                                        en todo el
                                                        país en protesta por los recortes. La situación actual refleja
                                                        la creciente
                                                        preocupación de la población por el impacto de las decisiones
                                                        gubernamentales en sus vidas y en su futuro.
                                                    </p>
                                                    <br>
                                                    <p>La pobreza en Argentina, que afecta a más de dos tercios de la
                                                        población, es
                                                        un claro indicativo de la crisis económica que atraviesa el país
                                                        y resalta la
                                                        urgencia de buscar soluciones inclusivas y justas que devuelvan
                                                        la esperanza a
                                                        los argentinos.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc136')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL GOBIERNO PRIVATIZA FRECUENCIAS Y PONE EN
                                                RIESGO EL FUTURO DE ARSAT
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 23/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La decisión de Javier Milei de privatizar 150 megahercios de espectro
                                                    y la
                                                    eliminación del IVA a medios de comunicación provocan críticas y
                                                    denuncias
                                                    sobre la desmantelación del Estado.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_arsat.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El gobierno de Javier Milei avanza en su agenda privatizadora con
                                                        la reciente
                                                        decisión de privatizar 150 megahertz de espectro que estaban
                                                        reservados para
                                                        ARSAT y Enacom, lo que despierta preocupaciones sobre el futuro
                                                        de las
                                                        telecomunicaciones en el país. Durante una conferencia de
                                                        prensa, el vocero
                                                        presidencial, Manuel Adorni, anunció que los 100 megahertz de
                                                        espectros
                                                        asignados a ARSAT y los 50 MHz en manos del Enacom se pondrán a
                                                        disposición del mercado. Esta medida se produce en medio de un
                                                        conflicto
                                                        laboral en ARSAT, donde las negociaciones paritarias están
                                                        congeladas y más
                                                        de 600 trabajadores enfrentan dificultades económicas.
                                                    </p>
                                                    <br>
                                                    <p>El ex vicepresidente del Enacom y actual presidente de Forja,
                                                        Gustavo López,
                                                        señaló que la venta de estas frecuencias es un error estratégico
                                                        que podría
                                                        obligar al Estado a pagar a empresas privadas por un servicio
                                                        que antes
                                                        ofrecía internamente. López explicó que estas frecuencias eran
                                                        vitales para
                                                        mantener la soberanía en telecomunicaciones y criticó la falta
                                                        de justificación
                                                        por parte del gobierno al afirmar que no se estaban utilizando.
                                                        Además,
                                                        denunció que la privatización es parte de un plan más amplio
                                                        para desmantelar
                                                        empresas públicas que son consideradas estratégicas y rentables.
                                                    </p>
                                                    <br>
                                                    <p>ARSAT, que atraviesa una crisis interna con paritarias congeladas
                                                        y una fuga
                                                        de profesionales, se enfrenta a un futuro incierto. López alertó
                                                        que el objetivo
                                                        del gobierno es destruir el Estado y sus empresas, a pesar de
                                                        que estas
                                                        generan ganancias. En caso de concretarse la privatización, el
                                                        nuevo
                                                        propietario adquiriría la red de fibra óptica más grande del
                                                        país y otros activos
                                                        valiosos, lo que López calificó como una &quot;estafa&quot; que
                                                        beneficiaría a
                                                        empresarios cercanos al oficialismo.
                                                    </p>
                                                    <br>
                                                    <p>Además, el gobierno eliminó las exenciones del IVA para los
                                                        medios de
                                                        comunicación, lo que aumentará los costos para los consumidores
                                                        y limitará el
                                                        acceso a la información. Esta decisión ha sido calificada como
                                                        un ataque a la
                                                        libertad de expresión ya los derechos constitucionales de los
                                                        ciudadanos.
                                                    </p>
                                                    <br>
                                                    <p>En este contexto, López advirtió sobre las graves consecuencias
                                                        que estas
                                                        políticas podrían afectar, no solo para ARSAT y sus
                                                        trabajadores, sino también
                                                        para el acceso de la población a servicios de telecomunicaciones
                                                        y a la
                                                        información en un momento crítico para la democracia argentina.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc137')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">GRANDES CORPORACIONES DUPLICAN
                                                RENTABILIDAD MIENTRAS SE DERRUMBAN
                                                INGRESOS POPULARES
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 26/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Un estudio del Instituto Pensamiento y Políticas Públicas destaca a
                                                    las grandes
                                                    empresas que maximizaron ganancias en medio de la crisis, mientras
                                                    los
                                                    salarios reales y el poder adquisitivo de la mayoría se hunden.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_grandes.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El Instituto Pensamiento y Políticas Públicas (IPyPP) reveló en
                                                        su informe
                                                        “Ganadores y Perdedores en el Primer Semestre del Gobierno de
                                                        Milei” un
                                                        contraste alarmante: mientras que las principales empresas del
                                                        país han
                                                        logrado multiplicar sus rentabilidades gracias a las políticas
                                                        de ajuste y la
                                                        devaluación impulsadas desde diciembre de 2023, el grueso de la
                                                        población
                                                        enfrenta una significativa caída en sus ingresos reales.
                                                    </p>
                                                    <br>
                                                    <p>Ganadores al calor de la crisis
                                                    </p>
                                                    <p>Para elaborar el informe, el IPyPP analizó los balances de
                                                        grandes empresas
                                                        que cotizan en la Bolsa de Comercio de Buenos Aires. El
                                                        resultado es
                                                        revelador: sectores como hidrocarburos, alimentos, energía,
                                                        telecomunicaciones y finanzas han experimentado rentabilidades
                                                        extraordinarias. Entre las firmas beneficiadas se destacan YPF,
                                                        con un
                                                        aumento del 1069,9% en sus resultados operativos, y Tecpetrol,
                                                        con un
                                                        incremento del 1860,4% en resultados netos. En el sector de
                                                        alimentos,
                                                        Mastellone Hermanos registró un alza del 2050% en sus resultados
                                                        netos, a
                                                        pesar de la caída del consumo. En finanzas, Banco Macro y
                                                        Santander Río
                                                        también reportaron aumentos superiores al 400%.
                                                    </p>
                                                    <br>
                                                    <p>Empresas como Molinos Agro y Metrogas reflejan de manera drástica
                                                        esta
                                                        tendencia, con incrementos en sus ganancias operativas del
                                                        7.543% y 2.581%,
                                                        respectivamente. Según el IPyPP, esta expansión de ganancias
                                                        encuentra su
                                                        origen en una “mega devaluación” sin controles, que profundizó
                                                        las ganancias
                                                        empresariales en detrimento de la regulación de precios y el
                                                        poder adquisitivo.
                                                    </p>
                                                    <br>
                                                    <p>Perdedores: trabajadores y sectores vulnerables
                                                        A contracara de estas rentabilidades crecientes, el informe
                                                        subraya la caída
                                                        generalizada en el ingreso real de los trabajadores y sectores
                                                        vulnerables.
                                                        Entre noviembre de 2023 y julio de 2024, los trabajadores
                                                        públicos sufrieron
                                                        una reducción del 16,8% en sus salarios reales, mientras que el
                                                        salario mínimo
                                                        experimentó una caída aún más pronunciada, del 26,5%. Asimismo,
                                                        jubilados y
                                                        beneficiarios de planes sociales, golpeados por el ajuste,
                                                        perdieron poder
                                                        adquisitivo, lo cual ha contribuido a aumentar la desigualdad.
                                                    </p>
                                                    <br>
                                                    <p>Un modelo que exacerba la desigualdad
                                                        El informe concluye que las políticas implementadas por el
                                                        gobierno de Milei
                                                        han generado “una transferencia masiva de recursos desde los
                                                        sectores
                                                        populares hacia el capital concentrado”, impulsando la
                                                        rentabilidad de las
                                                        grandes corporaciones a expensas de la economía popular.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc138')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PARO NACIONAL DE TRANSPORTES: UNA
                                                ADVERTENCIA AL GOBIERNO DE MILEI
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 29/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Este 30 de octubre, gremios de transporte pararán en rechazo al
                                                    ajuste, la suba
                                                    de tarifas y el impacto en la pobreza; la medida abarca trenes,
                                                    camiones,
                                                    subtes, aviones y barcos.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_paroNac.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>La Confederación Argentina de Trabajadores del Transporte (CATT)
                                                        llevará
                                                        adelante un paro nacional que afectará el funcionamiento de
                                                        trenes, subtes,
                                                        camiones, aviones y barcos. La medida de fuerza es una respuesta
                                                        directa a
                                                        las políticas de ajuste impulsadas por el gobierno de Javier
                                                        Milei,
                                                        particularmente en lo que respecta a la suba de tarifas y el
                                                        recorte de
                                                        subsidios, medidas que los gremios consideran que están
                                                        empujando a miles
                                                        de argentinos hacia la pobreza.
                                                    </p>
                                                    <br>
                                                    <p>Roberto Fernández, líder de la Unión Tranviarios Automotor (UTA),
                                                        aclaró que
                                                        los choferes de colectivos, en su mayoría afiliados a esta
                                                        organización, no se
                                                        sumarán a la huelga, ya que se encuentran en medio de
                                                        negociaciones
                                                        paritarias y en conciliación obligatoria hasta el 28 de octubre.
                                                        Fernández
                                                        explicó que, si bien la UTA no se pliega al paro por el momento,
                                                        no se descarta
                                                        la adhesión si las negociaciones no prosperan.
                                                    </p>
                                                    <br>
                                                    <p>La medida, ratificada el 22 de octubre en una reunión liderada
                                                        por Hugo y
                                                        Pablo Moyano en el sindicato de camioneros, responde a la
                                                        decisión del
                                                        gobierno de privatizar Aerolíneas Argentinas y de recortar
                                                        subsidios que han
                                                        encarecido el acceso al transporte público y afectado a los
                                                        sectores más
                                                        vulnerables. El comunicado difundido tras el encuentro sindical
                                                        denuncia que
                                                        las políticas actuales están incrementando la carga sobre los
                                                        trabajadores y
                                                        jubilados, reduciendo el poder adquisitivo y generando más
                                                        exclusión.
                                                    </p>
                                                    <br>
                                                    <p>A este paro se sumarán también otros gremios estatales, como la
                                                        Asociación
                                                        de Trabajadores del Estado (ATE), ampliando así el alcance de la
                                                        protesta más
                                                        allá del sector transporte. La jornada de paro se extenderá
                                                        durante todo el día
                                                        y, aunque el servicio de colectivos se mantendrá en gran medida
                                                        operativo, se
                                                        prevén complicaciones significativas en el transporte público y
                                                        de carga.
                                                    </p>
                                                    <br>
                                                    <p>La medida genera expectativas en torno a posibles nuevas acciones
                                                        sindicales
                                                        si el gobierno no muestra un giro en sus políticas. Los líderes
                                                        sindicales,
                                                        quienes encabezaron esta decisión, enfatizan que la jornada de
                                                        protesta es
                                                        una advertencia hacia un modelo económico que, según ellos,
                                                        &quot;condena a la
                                                        exclusión y empuja a la marginalidad&quot; a amplios sectores
                                                        del país.v
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc139')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">¡BATALLA POR LA PROPIEDAD INTELECTUAL! 13.500
                                                ARTISTAS ENFRENTAN A LA IA
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 30/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Creativos de renombre global exigen que sus trabajos dejen de permiso
                                                    sin
                                                    utilizar en el entrenamiento de inteligencia artificial, en una
                                                    medida que refuerza
                                                    la cláusula de Penguin Random House para la protección de la
                                                    propiedad
                                                    intelectual.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_ia.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Una petición firmada por más de 13.500 figuras del mundo
                                                        artístico y literario
                                                        ha encendido las alarmas sobre el uso no autorizado de obras
                                                        creativas para
                                                        entrenar modelos de inteligencia artificial (IA). Entre los
                                                        firmantes figuran
                                                        reconocidos artistas como Julianne Moore, el Nobel Kazuo
                                                        Ishiguro y el líder de
                                                        Radiohead, Thom Yorke, quienes denuncian que las empresas
                                                        tecnológicas
                                                        están explotando sus trabajos sin permiso ni compensación, bajo
                                                        el pretexto de
                                                        &quot;entrenamiento&quot; de IA.
                                                    </p>
                                                    <br>
                                                    <p>&quot;Es inaceptable que las obras de artistas, escritores y
                                                        músicos se utilicen sin
                                                        licencia, lo que representa una grave amenaza para sus medios de
                                                        vida&quot;,
                                                        subraya el comunicado impulsado por Ed Newton-Rex, compositor
                                                        británico y
                                                        ex ejecutivo de inteligencia artificial. Newton-Rex, quien
                                                        renunció a Stability AI
                                                        al considerar inmoral su política de &quot;uso justo&quot; para
                                                        entrenar modelos con
                                                        material protegido, sostuvo que las grandes corporaciones
                                                        tecnológicas
                                                        invierten millones en ingenieros y tecnología, pero se resisten
                                                        a pagar por los
                                                        datos, que representan el trabajo de millas de personas.
                                                    </p>
                                                    <br>
                                                    <p>Este llamado se suma a la decisión de la editorial Penguin Random
                                                        House
                                                        (PRH), que ha introducido una nueva cláusula en sus derechos de
                                                        autor para
                                                        evitar el uso de sus obras en el entrenamiento de sistemas de
                                                        IA. Con esta
                                                        medida, PRH prohíbe explícitamente la reproducción de sus textos
                                                        con fines de
                                                        “minería de texto y datos”, alineándose con las regulaciones de
                                                        la Unión
                                                        Europea. Sin embargo, los especialistas advierten que esta
                                                        cláusula, aunque
                                                        simbólica, no tiene un peso legal directo, ya que la ley de
                                                        derechos de autor
                                                        sigue en debate frente al avance de la IA.
                                                    </p>
                                                    <br>
                                                    <p>A pesar de esto, la inclusión de esta disposición destaca la
                                                        urgencia por
                                                        delimitar el alcance de los derechos de autor en la era digital,
                                                        donde muchas
                                                        editoriales y artistas ven sus trabajos incorporados sin
                                                        consentimiento a
                                                        sistemas de IA que luego los replican y monetizan sin ninguna.
                                                        retribución a
                                                        sus creadores originales. La Asociación de Editores
                                                        Estadounidenses también
                                                        se ha sumado a esta postura, exigiendo respeto por los derechos
                                                        de autor y
                                                        señalando que los creadores trabajan &quot;al servicio de un
                                                        público, no para el
                                                        beneficio no autorizado de las grandes corporaciones
                                                        tecnológicas&quot;.
                                                    </p>
                                                    <br>
                                                    <p>El debate sobre los derechos de autor en la era de la
                                                        inteligencia artificial se
                                                        intensifica, con una industria cultural que exige protección
                                                        frente a las prácticas
                                                        de extracción masiva de contenido, y señala el abuso corporativo
                                                        en un sector
                                                        cada vez más vulnerable.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc140')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ROBAN DOCUMENTOS EN NUEVO ATAQUE A LA
                                                UNIVERSIDAD DE LAS MADRES
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 02/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La universidad denunció un atentado en el que fueron sustraídos
                                                    documentos
                                                    importantes y causaron daños materiales a la infraestructura.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_uni.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>La Universidad Nacional Madres de Plaza de Mayo (UNMa) denunció
                                                        este
                                                        jueves un nuevo ataque a su sede en Defensa 119, ubicada a
                                                        escasos metros
                                                        de la Casa Rosada. Un grupo de personas no identificadas ingresó
                                                        al edificio,
                                                        sustrajo documentación tanto digital como en papel y provocó
                                                        daños materiales
                                                        en computadoras y muebles. El hecho ocurre en un contexto de
                                                        fuerte tensión
                                                        entre la universidad y el gobierno nacional.
                                                    </p>
                                                    <br>
                                                    <p>Según un comunicado de la institución, los atacantes, que al
                                                        parecer
                                                        conocerán las instalaciones, robaron documentos importantes,
                                                        incluido material
                                                        administrativo relacionado con alumnos y docentes. Además,
                                                        destruirán
                                                        equipos informáticos y otros objetos de valor. La UNMa ha
                                                        iniciado acciones
                                                        legales y exige una investigación a fondo para identificar a los
                                                        responsables.
                                                    </p>
                                                    <br>
                                                    <p>Este ataque se suma a una serie de incidentes contra la
                                                        universidad, que ha
                                                        sido objeto de recortes presupuestarios y amenazas de
                                                        intervención por parte
                                                        del gobierno de Javier Milei. En su denuncia, la universidad
                                                        también destacó la
                                                        cercanía de su sede con numerosas cámaras de seguridad y el
                                                        control policial
                                                        constante, lo que genera dudas sobre la efectividad de las
                                                        medidas de
                                                        seguridad.
                                                    </p>
                                                    <br>
                                                    <p>Demetrio Iramain, docente de Historia de las Madres de Plaza de
                                                        Mayo, explicó
                                                        que el ataque fue descubierto por trabajadores administrativos
                                                        tras un paro
                                                        universitario. Señaló que, debido a la ausencia de personas en
                                                        el edificio, los
                                                        atacantes pudieron actuar con tiempo. &quot;Rompieron
                                                        computadoras, se llevaron
                                                        papeles y destruyeron mobiliario&quot;, detalló. Iramain también
                                                        subrayó que el
                                                        ataque está vinculado al conflicto con el gobierno sobre la
                                                        autonomía
                                                        universitaria.
                                                    </p>
                                                    <br>
                                                    <p>Este ataque se enmarca en una serie de embates que ha sufrido la
                                                        UNMa
                                                        desde que consolidó el nuevo gobierno. Además de los recortes
                                                        presupuestarios, la universidad ha sido objeto de intentos de
                                                        intervención,
                                                        como el nombramiento de un interventor en octubre, lo que fue
                                                        detenido por un
                                                        fallo judicial favorable a la institución. La UNMa continúa
                                                        luchando por su
                                                        autonomía y por el respeto a sus derechos como universidad
                                                        pública.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc141')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  pb-6">
                                            <a href="">ALFONSÍN: &#39;LA DEMOCRACIA ES UNA ABERRACIÓN
                                                PARA EL PRESIDENTE&#39;
                                            </a>
                                        <p class="font-light  text-right text-gray-500">Publicado: 02/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El dirigente se refirió a las agresiones de Javier Milei hacia su padre y denunció
                                                un gobierno plutocrático. Aseguró que los valores democráticos y republicanos
                                                de Raúl Alfonsín son cuestionados por el actual mandatario.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_alfon.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Ricardo Alfonsín rindió homenaje a su padre, Raúl Alfonsín, en el cementerio
                                                        de La Recoleta, con una ofrenda floral en el marco del 41° aniversario de las
                                                        primeras elecciones democráticas tras la dictadura. Durante su visita, estuvo
                                                        acompañado por los dirigentes Silvia Saravia (Libres del Sur) y Gustavo López
                                                        (FORJA).
                                                    </p>
                                                    <br>
                                                    <p>En ese contexto, el hijo del exmandatario se refirió a las recientes
                                                        declaraciones de Javier Milei, quien había tildado a Raúl Alfonsín de &quot;partidario
                                                        de un golpe&quot; y aseguró que lo llamaban &quot;padre de la democracia&quot;. &quot;Es
                                                        canallesco decir esto. El presidente dijo una barbaridad&quot;, expresó Ricardo
                                                        Alfonsín, quien agregó que lo que realmente le importa a Milei no es la verdad,
                                                        sino la confrontación.
                                                    </p>
                                                    <br>
                                                    <p>Además, el dirigente cuestionó las convicciones democráticas del actual
                                                        presidente, afirmando que aunque algunos dudaran de las del exmandatario,
                                                        hoy en día la democracia y el compromiso republicano de Javier Milei están en
                                                        duda.
                                                    </p>
                                                    <br>
                                                    <p>Ricardo Alfonsín también comparó la agresividad del presidente hacia sus
                                                        adversarios con la falta de respeto hacia los valores democráticos. “Nunca
                                                        había oído a un dirigente político referirse a sus adversarios de la forma en que
                                                        lo hace el presidente, que se refiere a medios, periodistas y hasta empresarios
                                                        en términos descalificatorios”, señaló.
                                                    </p>
                                                    <br>
                                                    <p>El dirigente comentó que el legado de Raúl Alfonsín abogaba por una
                                                        democracia justa e igualitaria, un modelo que, según él, el presidente actual
                                                        parece rechazar. “Para Milei, la democracia, la justicia social y la igualdad son
                                                        aberraciones”, afirmó.
                                                    </p>
                                                    <br>
                                                    <p>Por otro lado, Alfonsín destacó que la victoria de LLA representa un riesgo para
                                                        los valores fundamentales de la república, citando la creciente desigualdad bajo
                                                        el gobierno actual, que, según él, favorece a los más ricos. “Es un gobierno
                                                        plutocrático, que no es elegido por los ricos, pero gobierna para ellos”, sostuvo.
                                                    </p>
                                                    <br>
                                                    <p>Ricardo Alfonsín concluyó pidiendo seriedad al presidente y urgió a un cambio
                                                        de actitud. “Es fundamental que el diálogo sea una herramienta para construir
                                                        consensos que nos permitan resolver los graves problemas del país”, concluyó.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>

        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc142')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  pb-6">
                                            <a href="">KICILLOF DENUNCIA LA SUSPENSIÓN DE OBRAS Y
                                                EXIGE RECURSOS A MILEI
                                            </a>
                                        <p class="font-light  text-right text-gray-500">Publicado: 04/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El gobernador de Buenos Aires, Axel Kicillof, acusó al gobierno nacional de
                                                suspender más de mil obras en la provincia, lo que, según él, representa un
                                                &quot;crimen social&quot;.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_gobernador.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El gobernador de la Provincia de Buenos Aires, Axel Kicillof, publicó un video
                                                        denunciando la suspensión de más de mil obras públicas en diferentes
                                                        municipios de la provincia, como Berazategui, Avellaneda, Florencio Varela y
                                                        General Lavalle, entre otros. Acompañado de imágenes de proyectos
                                                        detenidos, desde edificios educativos hasta viviendas sociales, Kicillof sostuvo
                                                        que la decisión del gobierno de Javier Milei de interrumpir estos trabajos
                                                        representa &quot;una deserción del Estado nacional de sus obligaciones&quot;.
                                                    </p>
                                                    <br>
                                                    <p>El mandatario bonaerense convocó a los intendentes de diversas fuerzas
                                                        políticas a firmar un reclamo conjunto dirigido a la Casa Rosada. &quot;Suspender la
                                                        obra pública es un crimen social&quot;, afirmó con dureza Kicillof, quien recordó que
                                                        este recorte de inversión pública se enmarca en un ajuste fiscal que se está
                                                        llevando a cabo a costa de las clases populares. “El equilibrio fiscal de Milei se
                                                        construye sobre más desigualdad, más dolor y más exclusión”, criticó,
                                                        señalando los recortes en áreas clave como jubilaciones, salud, educación y
                                                        transporte.
                                                    </p>
                                                    <br>
                                                    <p>En el video, Kicillof y el ministro de Infraestructura, Gabriel Katopodis, visitan
                                                        algunas de las obras suspendidas. “No es una medida administrativa, es un
                                                        ataque directo a las provincias”, subrayó el gobernador. A pesar de los
                                                        esfuerzos provinciales por continuar con algunas de estas iniciativas, el ahogo
                                                        impuesto financiero por el gobierno nacional está dificultando aún más la
                                                        situación. “Lo que están haciendo es un capricho ideológico”, dijo, refiriéndose
                                                        a la suspensión de proyectos en un país con enormes déficits en infraestructura
                                                        y servicios básicos.
                                                    </p>
                                                    <br>
                                                    <p>Kicillof también calificó la postura de Milei como una “venganza” hacia la
                                                        provincia de Buenos Aires, que históricamente ha sido un bastión de
                                                        resistencia frente al modelo económico del actual gobierno. &quot;No somos una
                                                        isla, necesitamos que el gobierno nacional cumpla con sus compromisos&quot;,
                                                        remarcó, mientras anticipaba la acción conjunta que llevará a cabo con los
                                                        intendentes en los próximos días.
                                                    </p>
                                                    <br>
                                                    <p>Además, el gobernador criticó la actitud del presidente Milei hacia Buenos
                                                        Aires, sugiriendo que la administración actual pretende castigar a la provincia
                                                        por haber sido uno de los principales focos de oposición a su candidatura,
                                                        destacando que este tipo de medidas no logrará cambiar el respaldo popular.
                                                        en la región. “El pueblo de Buenos Aires no se someterá a su venganza”,
                                                        concluyó.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc143')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  pb-6">
                                            <a href="">MILEI, EL SHOW MEDIÁTICO Y LA DESVIACIÓN DE
                                                LOS PROBLEMAS REALES
                                            </a>
                                        <p class="font-light  text-right text-gray-500">Publicado: 04/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>En su entrevista con Yuyito González, el presidente mostró una faceta personal
                                                y política cargada de contradicciones, donde la autocomplacencia y los ataques
                                                    a la oposición fueron protagonistas.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_bochorno.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Javier Milei protagonizó un bizarro espectáculo mediático al conceder una
                                                    entrevista a su novia, Yuyito González, en su programa Empezar el día de
                                                    Canal Ciudad Magazine. En un intento por humanizar su imagen, el presidente
                                                    se dedicó a elogiarse a sí mismo, destacando logros ficticios como el &quot;ajuste
                                                    más grande de la historia&quot; y el superávit fiscal, mientras el país enfrenta una
                                                    inflación descontrolada y una pobreza creciente.
                                                    </p>
                                                    <br>
                                                    <p>Lo más alarmante no fue la constante exaltación de su gestión, sino la defensa
                                                        de figuras como Patricia Bullrich y Luis Caputo, a quienes agradeció por su
                                                        “gran corazón” y por ayudarle a llegar a la presidencia. Mientras tanto, no dejó
                                                        de culpar a la oposición, a la burocracia internacional ya quienes se oponen a
                                                        sus políticas neoliberales.
                                                    </p>
                                                    <br>
                                                    <p>El espectáculo mediático también incluyó ataques contra la UCR y las
                                                        universidades públicas, mientras omitía mencionar las consecuencias sociales
                                                        de sus recortes: más pobres, más desempleo y una economía en ruinas. En un
                                                        arranque de autoritarismo, Milei aprovechó para prometer la purga en
                                                        Cancillería por no respaldar su línea en la ONU, calificando a la diplomacia
                                                        como &quot;burocracia parasitaria&quot; y &quot;traidores a la patria&quot; a quienes no se alinean
                                                        con él.
                                                    </p>
                                                    <br>
                                                    <p>Mientras el país se desangra en una crisis económica y social, el presidente
                                                        optó por mostrar su vida privada, hablando de sus perros y sus reuniones de
                                                        ópera en Olivos. En una de las entrevistas más vacías, no solo se mostró ajeno
                                                        a las necesidades del pueblo, sino que evadió hasta un beso de su novia,
                                                        dejando en claro que, para Milei, la política es un show personal.
                                                    </p>
                                                    <br>
                                                    <p>Este tipo de entrevistas, lejos de ser un acercamiento genuino al pueblo, son
                                                        una cortina de humo que desvía la atención de los problemas reales. El
                                                        presidente prefiere perpetuar su imagen de líder fuerte mientras el país sigue
                                                        pagando el precio de su irresponsabilidad.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc144')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  pb-6">
                                            <a href="">DILLOM ENFRENTÓ A UN TROLL DE MILEI EN PLENO
                                                VUELO
                                            </a>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El músico argentino encaró al tuitero &quot;La Pistarini&quot; luego de que este lo
                                                insultara en redes. En persona, el usuario evitó responderle y generó un
                                                revuelo que se volvió viral.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_verdad.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El cantante Dillom fue protagonista de un tenso cruce con un tuitero
                                                        ultraderechista identificado como &quot;La Pistarini&quot; durante un vuelo comercial. El
                                                        episodio se originó cuando el usuario de X, conocido por sus publicaciones
                                                        agresivas y su apoyo al libertarismo, subió a sus redes una foto de Dillom,
                                                        acompañada de insultos hacia el artista. Sin embargo, el ataque en línea no
                                                        pasó desapercibido: Dillom, decidido a no dejar pasar la provocación, encaró al
                                                        usuario frente a frente y el momento quedó registrado en video, rápidamente
                                                        viralizado.
                                                    </p>
                                                    <br>
                                                    <p>En redes, &quot;La Pistarini&quot; había escrito: “Lo último que me faltaba, coincidir en el
                                                        vuelo con el pelotudo de Dillom”, en tono despectivo hacia el músico de 23
                                                        años. Enterado del mensaje y tras verificar la identidad del tuitero, Dillom lo
                                                        confrontó en persona: “¿Vos sos Pistarini? ¿El que sub fotos mías a Twitter?
                                                        ¿Tenés algún problema?”, le preguntó al usuario, quien solo atinó a responder:
                                                        &quot;Ninguno, capo, andá tranquilo&quot;, mientras intentaba tapar la cámara de quienes
                                                        grababan el enfrentamiento. Visiblemente incómodo, el tuitero se mostró
                                                        incapaz de sostener su postura provocandora fuera de la virtualidad.
                                                    </p>
                                                    <br>
                                                    <p>Después del cruce, Dillom optó por quitarle dramatismo al asunto y concluyó en
                                                        tono irónico: &quot;Uno paga wifi en el avión para darse cuenta que un salame le
                                                        sacó una foto&quot;. Las redes sociales reaccionaron mayormente en apoyo al
                                                        músico, destacando el contraste entre la valentía en redes y la actitud evasiva
                                                        del usuario en la vida real.
                                                    </p>
                                                    <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc145')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  pb-6">
                                            <a href="">LA OMS ALERTA: EL CAMBIO CLIMÁTICO PUEDE
                                                SALVAR MILLONES DE VIDAS
                                            </a>
                                        <p class="font-light  text-right text-gray-500">Publicado: 08/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>La Organización Mundial de la Salud asegura que combatir el cambio climático
                                                podría evitar dos millones de muertes anuales, impulsando beneficios
                                                sanitarios y económicos.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_clima.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>A días de la Cumbre del Clima en Bakú, la Organización Mundial de la Salud
                                                        (OMS) publicó dos informes en los que alerta que el calentamiento global no
                                                        solo es una crisis ambiental, sino también una amenaza sanitaria. Con como
                                                        energías limpias, alertas de olas de calor y políticas de transporte sostenibles,
                                                        se podrían evitar hasta siete millones de muertes causadas por contaminación
                                                        y otros factores asociados al cambio climático.
                                                    </p>
                                                    <br>
                                                    <p>María Neira, directora del Departamento de Medio Ambiente, Cambio Climático
                                                        y Salud de la OMS, afirmó que “combatir el calentamiento global puede generar
                                                        enormes beneficios sanitarios”, destacando que las políticas preventivas en
                                                        salud pública podrían cuadruplicar el valor de la inversión inicial. En un mundo
                                                        donde el subsidio a los combustibles fósiles alcanza los 7 billones de dólares
                                                        anuales, la OMS sugiere redirigir estos recursos hacia energías limpias y
                                                        accesibles.
                                                    </p>
                                                    <br>
                                                    <p>Entre las recomendaciones de la OMS figura el desarrollo de sistemas de alerta
                                                    temprana para proteger a las poblaciones más vulnerables ante olas de calor,
                                                    así como la inversión en transporte y sistemas alimentarios sostenibles, áreas
                                                    que podrían reducir las muertes por accidentes y desnutrición. Vanessa Kerry,
                                                    enviada especial de la OMS, advirtió que las sequías, inundaciones y olas de
                                                    calor son cada vez más graves y exigen “acciones urgentes y diferentes a las
                                                    actuales”.
                                                    </p>
                                                    <br>
                                                    <p>La Cumbre del Clima COP29 en Bakú se presenta como una oportunidad clave
                                                        para que los líderes globales no solo tomen medidas contra el cambio
                                                        climático, sino que también comprenden su impacto directo en la salud pública.
                                                        </p>
                                                        <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc146')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  pb-6">
                                            <a href="">CONGRESO INMOBILIARIO 2024: UN ENCUENTRO
                                                CLAVE PARA EL SECTOR
                                            </a>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Durante dos jornadas, expertos del sector compartirán sus conocimientos sobre
                                                temas clave como Inteligencia Artificial, técnicas de negociación y tendencias
                                                del mercado, ofreciendo herramientas fundamentales para los profesionales del
                                                rubro.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_inmobiliario.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Durante las dos jornadas, los asistentes participarán de diversas conferencias
                                                        en las que destacados especialistas abordarán temas de actualidad e interés
                                                        para el sector. &quot;Contaremos con expertos que compartirán conocimientos
                                                        valiosos, incluyendo aplicaciones de Inteligencia Artificial en el ámbito
                                                        inmobiliario&quot;, explicó Colao, quien también destacó que el evento tendrá como
                                                        objetivo primordial “brindar herramientas actualizadas de sumo interés para el
                                                        martillero y corredor público que busca elevar su nivel profesional para esta
                                                        nueva época en que estamos todos como comunidad transitando”.
                                                    </p>
                                                    <br>
                                                    <p>Entre los conferencistas invitados se encuentran el Lic. Enrique Fraga; el Lic.
                                                        Federico González Rouco; el Perito Judicial Hugo Lescano; la General
                                                        Manager Silvana Negri; las Escribanas Graciela Curuchelar y Graciela ‘Gachi’
                                                        Vilalta; el Ing. Jorge Brucetta; los martilleros y corredores públicos: Carmelo La
                                                        Forgia; Ignacio O’Keefe; Osvaldo Botta; Verónica Berasueta y Mariano Gómez,
                                                        junto a otros destacados profesionales. También participarán representantes
                                                        del equipo técnico de la Universidad Nacional del Noroeste de la Provincia de
                                                        Buenos Aires (UNNOBA) y de GISA Garantías Inmobiliarias, además de la
                                                        intervención como presentadores y moderadores del evento de los presidentes
                                                        de los Colegios departamentales que integran ‘Martilleros BA’: Fabián Acervo,
                                                        (Pergamino); Daniel Di Palma (Junín); Daniel Ortíz (Lomas de Zamora);
                                                        Guillermo Rossi (Mar del Plata); Alfredo Lavalle (Quilmes); entre otros”.
                                                    </p>
                                                    <br>
                                                    <p>Los temas a tratar incluirán Inteligencia Artificial, estadística y datos
                                                        inmobiliarios, créditos hipotecarios, emprendimientos inmobiliarios, lenguaje
                                                        corporal, garantías inmobiliarias, técnicas de negociación, liderazgo emocional,
                                                        y la presentación de nuevas herramientas y servicios de ‘Martilleros BA’.
                                                    </p>
                                                    <br>
                                                    <p>Este evento también ha sido reconocido oficialmente, ya que el 31 de octubre,
                                                        la Cámara de Diputados de la Provincia de Buenos Aires aprobó el proyecto del
                                                        diputado Gustavo Pulti para declarar de &quot;Interés Legislativo&quot; al Congreso
                                                        Inmobiliario 2024, subrayando su importancia para el desarrollo del sector.
                                                        </p>
                                                        <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc147')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  pb-6">
                                            <a href="">COLONIA HINOJO: ESCAPADA CULTURAL AL ​​PRIMER
                                                PUEBLO ALEMÁN DE ARGENTINA
                                            </a>
                                        <p class="font-light  text-right text-gray-500">Publicado: 10/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Con su legado alemán intacto, Colonia Hinojo, a cuatro horas de Buenos Aires,
                                                invita a vivir un fin de semana largo lleno de tradición, gastronomía típica y
                                                eventos culturales únicos.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_colonia.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>Ubicada a solo cuatro horas de la Ciudad de Buenos Aires, Colonia Hinojo es
                                                        una joya histórica que ofrece una experiencia cultural única en el corazón de la
                                                        provincia. Fundado en 1878 por inmigrantes alemanes, este pequeño pueblo
                                                        conserva un legado arquitectónico y gastronómico que lo convierte en un
                                                        destino ideal para una escapada en familia.
                                                    </p>
                                                    <br>
                                                    <p>Conocida también como “Kamenka” por sus raíces europeas, Colonia Hinojo se
                                                        ubica a 15 kilómetros de Olavarría y mantiene viva la tradición de sus
                                                        fundadores. Su encanto germánico se respira en cada rincón: los visitantes
                                                        pueden deleitarse con una variada oferta de platos típicos alemanes, como
                                                        kreppels, verenikes y strudel, disponibles en cafeterías y restaurantes que
                                                        conservan recetas ancestrales.
                                                    </p>
                                                    <br>
                                                    <p>Entre sus atractivos, destaca la Parroquia Natividad de la Santísima Virgen,
                                                        una iglesia que resplandece con sus vitrales de época, y que actualmente
                                                        busca ser declarada Monumento Histórico Provincial. Además, el pueblo
                                                        celebra cada año el Kreppelfest, un festival en honor a su herencia cultural,
                                                        donde la música, el baile y la gastronomía típica crean una experiencia
                                                        inolvidable para los visitantes.
                                                    </p>
                                                    <br>
                                                    <p>ECon el fin de semana largo de noviembre como una excelente oportunidad,
                                                        Colonia Hinojo invita a vivir una escapada que combina historia, tradición y
                                                        sabor en un rincón único de la Argentina.
                                                        </p>
                                                        <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc148')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  pb-6">
                                            <a href="">GOBIERNO DESREGULA EL CORREO: ¿CAMBIO EN
                                                EL FUTURO DE LAS ELECCIONES?
                                            </a>
                                        <p class="font-light  text-right text-gray-500">Publicado: 11/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>Con la desregulación del servicio postal, se abre la incertidumbre sobre el
                                                papel del Correo Argentino en las elecciones nacionales. La medida del
                                                Gobierno plantea dudas sobre la logística electoral y el futuro de una empresa
                                                estatal clave.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_correo.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El Gobierno nacional oficializó la desregulación del servicio postal a través de
                                                        un decreto publicado en el Boletín Oficial. La medida, anunciada por el vocero
                                                        presidencial Manuel Adorni, abre la puerta a la competencia privada y plantea
                                                        interrogantes sobre el futuro de Correo Argentino, una empresa que ha sido
                                                        pieza clave en la organización de las elecciones nacionales.
                                                    </p>
                                                    <br>
                                                    <p>A pesar de que el decreto establece que el Gobierno garantizará un operador
                                                        postal en todo el territorio, las dudas sobre la participación del Correo Argentino
                                                        en los comicios persisten. La empresa estatal ha sido responsable del traslado
                                                        de urnas, materiales electorales y la organización de los telegramas con los
                                                        resultados, tareas que representan el 70% de los costos de cada elección. Con
                                                        los recientes despidos y la reestructuración del servicio postal, los jueces
                                                        electorales ya alertan sobre posibles complicaciones en el proceso electoral si
                                                        el Correo pierde su exclusividad en las elecciones.
                                                    </p>
                                                    <br>
                                                    <p>El decreto menciona que el Correo Argentino continuará a cargo del &quot;Servicio
                                                        Electoral Nacional&quot;, pero no aclara si esta responsabilidad seguirá siendo
                                                        exclusiva. La medida, que busca generar competencia y mejorar la
                                                        digitalización y seguridad en el servicio postal, deja abierta la posibilidad de que
                                                        otros operadores se hagan cargo de funciones clave en los comicios.
                                                    </p>
                                                    <br>
                                                    <p>En paralelo, el vaciamiento y la quiebra del Correo Argentino, investigados en
                                                        el marco de la gestión del PRO, suman un elemento de incertidumbre adicional.
                                                        La Corte Suprema aún no se expidió sobre el caso, lo que deja en el aire las
                                                        consecuencias legales y políticas de las maniobras de la empresa para licuar
                                                        su deuda.
                                                        </p>
                                                        <br>
                                                        <p>Los sindicatos, por su parte, denuncian que la desregulación pone en riesgo no
                                                            solo miles de puestos de trabajo, sino también la calidad de un servicio
                                                            esencial para la conectividad y la organización del país. Para la Federación de
                                                            Obreros y Empleados de Correos y Telecomunicaciones (FOECYT), la
                                                            privatización del Correo no es la solución, y advierten que la medida podría
                                                            afectar tanto a los trabajadores como a los ciudadanos.
                                                            </p>
                                                            <br>
                                                            <p>La desregulación del Correo se enmarca en un proceso más amplio de
                                                                privatización de empresas del Estado, con implicancias que van más allá de la
                                                                gestión de servicios y apuntan a un modelo económico que favorece la
                                                                apertura y desprotección de lo público. A medida que se avanza en la
                                                                privatización de servicios esenciales, el futuro de las elecciones nacionales
                                                                parece cada vez más incierto.
                                                                </p>
                                                                <br>
                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc149')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  pb-6">
                                            <a href="">MILEI PROMETE CRECIMIENTO A COSTA DEL ESTADO
                                                Y LOS TRABAJADORES
                                            </a>
                                        <p class="font-light  text-right text-gray-500">Publicado: 12/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El mandatario visitó la empresa Ualá para alentar el “crecimiento sin
                                                restricciones” del sector privado y aseguró que “la recesión terminó”. Mientras
                                                el país se ajusta, Milei promueve el desmantelamiento del Estado.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_loco.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>En un acto que muestra su visión privatista de la economía, Javier Milei visitó
                                                        este lunes la empresa Ualá, donde ratificó su apoyo irrestricto al sector privado
                                                        y volvió a afirmar, con optimismo cuestionable, que “la recesión terminó”. En un
                                                        discurso breve y cargado de promesas, Milei alentó a los empresarios a
                                                        “subirse al tren del progreso ahora” en lo que describió como “el mejor
                                                        momento del país en los últimos 100 años”. Sin embargo, el efecto real de sus
                                                        políticas neoliberales sobre la sociedad sigue siendo preocupante.
                                                    </p>
                                                    <br>
                                                    <p>El acto se realizó en la sede de Ualá, ubicada en una zona emblemática de la
                                                        Ciudad de Buenos Aires, y contó con la presencia de figuras clave de su
                                                        administración, incluida su hermana y asesora, Karina Milei. Desde allí, el
                                                        mandatario elogió al CEO de la empresa, Pierpaolo Barbieri, como ejemplo del
                                                        “éxito del capitalismo”. Su discurso estuvo centrado en desvalorizar el rol del
                                                        Estado y ensalzar el beneficio que los empresarios pueden lograr en su
                                                        gestión: “Les digo a todos los actores del sector privado: aprovechen a subirse
                                                        al tren del progreso porque es comprar más barato”, afirmó.
                                                    </p>
                                                    <br>
                                                    <p>Milei afirmó que la economía argentina “ya está volando” y destacó que el
                                                        “ajuste histórico” que implementó fue exitoso, ya que “cayó sobre el sector
                                                        público y no sobre el privado”. Sus declaraciones dejan claro un desinterés
                                                        alarmante por el impacto en las áreas sociales del Estado y en el bienestar de
                                                        la población. Para el mandatario, la inflación “bajó al 2%” mensual, en gran
                                                        parte gracias a la eliminación del gasto estatal, un discurso que parece obviar
                                                        la precarización creciente en áreas como la salud y la educación, que sufren
                                                        los efectos del ajuste.
                                                    </p>
                                                    <br>
                                                    <p>El mandatario volvió a su tono provocador al jactarse de que no puede
                                                        “inaugurar obras públicas” porque “la cortó de cuajo”, en alusión a los recortes
                                                        en infraestructura que afectan al país y sus habitantes. Este comentario,
                                                        presentado como una crítica a gobiernos anteriores, representa su visión: un
                                                        Estado reducido y debilitado, sin capacidad de inversión pública en áreas
                                                        necesarias.
                                                        </p>
                                                        <br>
                                                        <p>En sus palabras finales, Milei fue claro en su rechazo al rol del Estado como
                                                            generador de riqueza y afirmó que “la única forma de crecimiento es quitarle la
                                                            bota del Estado al sector privado”. Mientras tanto, su equipo aplaudía,
                                                            destacándose funcionarios como Guillermo Francos y Manuel Adorni. Pero
                                                            detrás de la retórica y de los aplausos, lo que preocupa es el efecto que tendrá
                                                            este “capitalismo sin restricciones” sobre una sociedad que necesita del Estado
                                                            para asegurar derechos básicos.
                                                            </p>
                                                            <br>

                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc150')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  pb-6">
                                            <a href="">KICILLOF RECLAMA EL CANAL MAGDALENA Y
                                                CRITICA LA HIDROVÍA DE MILEI
                                            </a>
                                        <p class="font-light  text-right text-gray-500">Publicado: 12/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                            <p><i>El gobernador bonaerense exige la transferencia del Canal Magdalena y
                                                avanza en legal contra la nueva concesión acciones de la Vía Navegable
                                                Troncal, firmada por la Nación. Afirma que la obra es clave para la soberanía y
                                                la competitividad de la provincia.
                                                </i>
                                            </p>
                                            <br>
                                            <figure>
                                                <img class="w-full object-cover" src="../img/soc/soc_gob1.svg"
                                                    alt="">
                                            </figure>
                                            {{--  <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Elj4W5gq3AM?si=Px86mJ-v6RAaS8Yh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                            <br>
                                            <div
                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                                <div class=" font-sans text-lg text-left col-span-6  ">
                                                    <p>El gobernador bonaerense, Axel Kicillof, reclamó este lunes la cesión de la
                                                        competencia sobre el Canal Magdalena, una obra clave para la soberanía
                                                        nacional y la competitividad de la región. Además, el mandatario anunció que
                                                        evaluará iniciar acciones legales contra la nueva concesión de la Vía
                                                        Navegable Troncal, firmada por la Administración General de Puertos (AGP),
                                                        un contrato que considera perjudicial para los puertos bonaerenses y que fue
                                                        firmado de manera unilateral por la Nación. .
                                                    </p>
                                                    <br>
                                                    <p>Kicillof cuestionó la falta de inversiones del gobierno nacional, especialmente
                                                        en obras estratégicas como el Canal Magdalena, que según los expertos
                                                        podrían autofinanciarse con los beneficios que generaría para la navegación y
                                                        servicios conexos. “Este Gobierno Nacional no va a hacer nada por la
                                                        soberanía ni por mejorar la competitividad de la provincia”, afirmó el
                                                        gobernador, quien destacó que las concesiones a los puertos privados y la falta
                                                        de inversión en infraestructura perjudican directamente a los puertos públicos
                                                        bonaerenses. como el de La Plata.
                                                    </p>
                                                    <br>
                                                    <p>El ministro de Gobierno, Carlos Bianco, también criticó el contrato de la
                                                        hidrovía, señalando que no contempla mejoras necesarias, como el
                                                        ensanchamiento de la vía y la profundización de los canales, lo que
                                                        consolidaría a Montevideo como puerto central en lugar de fortalecer a los
                                                        puertos argentinos. Además, Bianco recordó que la Nación disolvió el Ente
                                                        Nacional de Control y Gestión de la Vía Navegable (Ecovina), excluyendo a las
                                                        provincias ribereñas de la toma de decisiones.
                                                    </p>
                                                    <br>
                                                    <p>En una reunión con la Comisión Asesora del Canal Magdalena, Kicillof ratificó
                                                        su voluntad de llevar adelante la obra a nivel provincial, al considerar que es
                                                        una medida viable y necesaria. El ex canciller Jorge Taiana aseguró que el
                                                        proyecto es accesible y podría recuperarse rápidamente. Por su parte, José
                                                        Lojo, presidente del Puerto La Plata, destacó que el canal es fundamental para
                                                        reducir costos y mejorar la navegación en la región.
                                                        </p>
                                                        <br>
                                                        <p>El conflicto entre la provincia de Buenos Aires y la Nación refleja la creciente
                                                            tensión por el control de recursos estratégicos, en un contexto donde las
                                                            políticas neoliberales del gobierno de Milei parecen anteponer los intereses
                                                            privados a los de la soberanía y la productividad nacional.
                                                            </p>
                                                            <br>

                                                    <div class="text-start object-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                        <br>
                    </div>
                    @livewire('lateral')
                </div>
            </section>



            @endif

</x-app-layout>
