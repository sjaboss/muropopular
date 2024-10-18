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
                                            <a href="">KICILLOF IMPULSA LA CREACIÓN DE UNA UNIDAD PARA BUSCAR A LOS NIETOS APROPIADOS</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 17/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El gobernador de Buenos Aires creó la Unidad Provincial Especializada para la búsqueda de personas apropiadas durante la última dictadura, en respuesta al desmantelamiento de la Conadi por parte del gobierno nacional.</i>
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

                                                <p>El gobernador Axel Kicillof ha anunciado la creación de la Unidad Provincial Especializada para la búsqueda de personas apropiadas, en respuesta al desmantelamiento de la Comisión Nacional por el Derecho a la Identidad (CONADI) y al reciente decreto 727/2024, que desactivó la Unidad Especial de Investigación de la Desaparición de Niños. Esta nueva unidad, dependiente del Ministerio de Justicia bonaerense, se enfocará en la búsqueda de bebés apropiados durante la última dictadura cívico-militar, estimando que la mitad de estos casos podrían corresponder a personas nacidas en la provincia de Buenos Aires. 
                                                </p>
                                                <br>
                                                <p>Matías Moreno, subsecretario de Derechos Humanos de la provincia, detalló que la unidad recibirá denuncias, solicitará documentación y coordinará con organismos nacionales para realizar pericias genéticas en el Banco Nacional de Datos Genéticos. La creación de esta unidad responde al compromiso provincial con la memoria, verdad, justicia y reparación, en contraste con el desmantelamiento de la CONADI por parte del gobierno nacional.</p>
                                                <br>
                                                <p>El gobernador Kicillof se reunió con Estela Carlotto, presidenta de Abuelas de Plaza de Mayo, para coordinar el trabajo de la nueva unidad. Kicillof subrayó que la provincia continuará buscando a los 300 nietos y nietas aún no recuperados y defenderá el trabajo de las Abuelas de Plaza de Mayo. El gobernador también expresó su preocupación por el desmantelamiento de la CONADI y destacó que la provincia actuará como un "escudo" para mitigar el impacto de esta decisión sobre los bonaerenses.</p>
                                                <br>
                                                <p>La Subsecretaría de Derechos Humanos de Buenos Aires ya implementa políticas de restitución de identidad, incluyendo la colaboración con el equipo de Antropología Forense y el Ministerio de Salud para la identificación de restos óseos de desaparecidos. La nueva unidad también asumirá el rol de recepción y tramitación de denuncias de apropiaciones, garantizando el acceso a documentación y coordinación con autoridades judiciales.</p>
                                                <br>
                                                <p>Roberto Cipriano, miembro de la Comisión Provincial por la Memoria, celebró la creación de la unidad, considerándola indispensable para continuar la búsqueda de identidades aún no recuperadas. Cipriano criticó al Gobierno nacional por no abordar adecuadamente el tema y por promover una narrativa que minimiza los efectos de la dictadura, resaltando la importancia de mantener el compromiso con la memoria y la justicia.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc91')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CRISTINA FERNÁNDEZ: "FALTA INVESTIGAR A LOS LOS AUTORES INTELECTUALES”</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 17/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>En su declaración, la exvicepresidenta cuestionó la ausencia de los responsables intelectuales en el juicio y criticó la influencia de los medios y del fiscal Diego Luciani en el contexto previo al ataque.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_cristinak.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Este miércoles, en el marco del proceso judicial por el atentado en su contra, Cristina Fernández de Kirchner declaró como testigo ante el Tribunal Oral Federal 6. La ex vicepresidenta afirmó que enfrentó a los autores materiales del ataque, pero no a los intelectuales que lo habrían planificado. 
                                                </p>
                                                <br>
                                                <p>La audiencia comenzó a las 9:34 con la presencia de los principales acusados: Fernando Sabag Montiel, Brenda Uliarte y Nicolás Carrizo, miembros de “La banda de Los Copitos”. Sabag Montiel, autor material del intento de homicidio, confesó: “Yo quería matar a Cristina y Brenda Uliarte quería que muriera”. Uliarte, en chats revelados tras el atentado, había expresado su deseo de atacar a Fernández y su autodenominación como la “libertadora de Argentina”.</p>
                                                <br>
                                                <p>Fernández de Kirchner criticó que el proceso no incluya a los ideólogos y financiadores del ataque. Subrayó: “Sería ingenuo pensar que los tres acusados fueron los únicos responsables de idear el atentado”. Mencionó al diputado Gerardo Milman y a su proyecto que, según ella, vinculaba a la violencia política. Recordó que Milman dijo: “Cuando la maten, voy a estar camino a la costa”, y acusó a Patricia Bullrich de eliminar pruebas en los celulares de sus secretarias.</p>
                                                <br>
                                                <p>La ex vicepresidenta también cuestionó el papel de los medios y del Poder Judicial en el clima de odio previo al atentado. Aseguró que el fiscal Diego Luciani, al acusar al peronismo de corrupción, avivó la violencia que culminó en el ataque fallido. “En épocas de odio, de redes, de absoluta hegemonía de la comunicación, ya no es necesario desaparecer ni matar físicamente a nadie. Si hay una articulación con los medios hegemónicos de comunicación y Poder Judicial se ve el poder económico concentrado”, aseveró.</p>
                                                <br>
                                                <p>Fernández de Kirchner remarcó que, aunque nunca temió por su vida, el atentado afectó psicológicamente a su nieta, quien recibió tratamiento por el miedo a ser atacada. En redes sociales, compartió un video denunciando la protección que gozan los autores intelectuales del ataque, quienes, según ella, permanecen impunes en Comodoro Py.</p>
                                                <br>
                                                <p>La defensa de Kirchner argumentó que la organización vinculada a los acusados recibió fondos de Caputo Hermanos S.A., de los hermanos del ministro de Economía Luis Caputo, pero la jueza decidió no incluir esta información en el juicio.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc92')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PLATAFORMA DIGITAL DE UTPBA: UNA APUESTA POR LA COMUNICACIÓN PROPIA</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 18/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Unión de Trabajadores de Prensa de Buenos Aires (UTPBA) lanzó su innovadora plataforma DATA.U, destinada a revolucionar el panorama comunicacional con contenidos digitales de calidad.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_utpba2.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En un evento realizado en su sede de Avenida de Mayo, la UTPBA presentó DATA.U, una plataforma que integra contenidos en múltiples formatos, incluyendo archivos digitales y en papel, radio streaming, y estudios para filmación y televisión. Los asistentes tuvieron la oportunidad de explorar las nuevas herramientas de comunicación, como cámaras de realidad virtual, y reflexionar sobre la evolución del periodismo. 
                                                </p>
                                                <br>
                                                <p>Leandro Torres, secretario general de la UTPBA, destacó la importancia de mantener una comunicación propia frente a las corporaciones mediáticas. Enfatizó la necesidad de generar contenidos independientes, citando la histórica afirmación de la UTPBA: “No hay democracia informativa sin democracia económica”. Torres subrayó que la plataforma DATA.U permitirá distribuir contenidos audiovisuales, gráficos y radiales de manera directa a los afiliados y a la Federación Latinoamericana de Prensa (FELAP), promoviendo una visión inclusiva y no elitista del periodismo.</p>
                                                <br>
                                                <p>Durante la presentación, también se discutió la influencia de la comunicación digital y audiovisual en la región. El humorista Jorge Meiji Meijide participó con su ciclo de entrevistas “Charlas Dibujadas”, enriqueciendo el debate sobre las nuevas formas de comunicación.</p>
                                                <br>
                                                <p>Torres criticó la concentración mediática y defendió la idea de que “todos somos comunicadores”. Señaló que la UTPBA enfrenta resistencia de sectores empresariales y mediáticos tradicionales, pero reafirmó su compromiso con una comunicación equitativa y diversa, libre de agendas impuestas por el poder económico.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc93')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ALLANAN SEDE DE UTEP Y BLOQUEAN COMEDOR COMUNITARIO</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 18/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Unión de Trabajadores y Trabajadoras de la Economía Popular (UTEP) denunció que el allanamiento realizado hoy por la Policía Federal en su sede central, en Constitución, obstruyó la actividad de un comedor comunitario.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_utep2.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En un comunicado, UTEP criticó el operativo ordenado por el juez Julián Ercolini, que, según indican, irrumpió de manera violenta en el lugar. “Preguntaron por una cooperativa que ni siquiera tiene domicilio en este espacio”, detalla el comunicado. En paralelo, al menos 15 cooperativas fueron allanadas en la Ciudad de Buenos Aires y el conurbano. 
                                                </p>
                                                <br>
                                                <p><b>Operativo cuestionado</b></p>
                                                <br>
                                                <p>Nicolás Caropresi, referente de UTEP presente durante el allanamiento, relató que los agentes de la Policía Federal llegaron a las 9 de la mañana con una orden que no correspondía con la dirección real de la cooperativa mencionada. “Revisan papeles y buscan máquinas de coser”, informó Caropresi.</p>
                                                <br>
                                                <p>El allanamiento interrumpió el funcionamiento del comedor comunitario, que opera los miércoles para brindar alimentos a quienes los necesitan. Aunque el servicio pudo reanudarse tras la difusión pública del hecho, los trabajadores sociales, psicólogos y otros voluntarios fueron impedidos de acceder al espacio.</p>
                                                <br>
                                                <p>El comunicado de UTEP también denuncia que en la zona, “la policía y la justicia persiguen a una cola de gente esperando que le sirvan el alimento” mientras que la criminalidad en el barrio continúa sin ser abordada.</p>
                                                <br>
                                                <p>A la espera de la conclusión del operativo, UTEP cuestiona la temporalidad del allanamiento, vinculándolo con eventos recientes del 7 de agosto. “No nos dejaremos intimidar por esta persecución y hostigamiento hacia las organizaciones populares”, concluye el comunicado.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc94')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL CAMINO DE PISTARINI</a>
                                            <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 20/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Un recorrido por los hitos que marcaron la transformación de Ezeiza, desde la construcción de la Autopista Riccheri hasta la creación del Bosque Nacional, pasando por la historia del Aeropuerto Internacional y el cambio del sentido de circulación.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_pistarini2.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Construida en 1948, la Autopista Riccheri es la primera autovía del país, comunicando la Av. General Paz con el Aeropuerto Internacional de Ezeiza, inaugurado el 12 de marzo de 1949. En su momento, se consideró uno de los más grandes del mundo, y su infraestructura es tan sólida que no fue necesario modificar las pistas para acomodar a las aeronaves modernas más grandes y pesadas. 
                                                </p>
                                                <br>
                                                <p>A tan solo 3 kilómetros del aeropuerto, se encuentra el Barrio Uno, creado en 1944 como un barrio residencial. Este lugar albergó al viejo hospital de Ezeiza, inaugurado en 1949 y posteriormente reubicado en la localidad de Unión Ferroviaria del Partido de Ezeiza.</p>
                                                <br>
                                                <p>El 31 de mayo de 1950 se creó la Comisión Nacional de Energía Atómica, que comprende tres centros atómicos: Bariloche, Constituyentes y Ezeiza. Este último se encuentra dentro del Bosque de Ezeiza, un predio de casi 600 hectáreas inaugurado el 21 de enero de 1950, que incluía un centro recreativo y deportivo con piletas olímpicas. En 1955, la llamada Revolución Libertadora vació las piletas y prendió fuego el centro recreativo, el cual fue recuperado recién en 2008 por el Estado Nacional.</p>
                                                <br>
                                                <p>Durante la década de los 80, el Bosque de Ezeiza fue hogar de "Mundo Animal", un zoológico famoso de Jorge Cutini que ofrecía una experiencia única con animales sueltos. Sin embargo, el 8 de octubre de 1988, un niño de 7 años perdió un brazo, lo que desató una serie de denuncias por maltrato animal.</p>
                                                <br>
                                                <p>Juan Pistarini, ministro de Obras Públicas del gobierno de Juan Domingo Perón, ya había ocupado el mismo puesto durante la presidencia de Agustín P. Justo, cuando presentó por primera vez la idea de construir el Aeropuerto Internacional de Ezeiza. Un dato curioso es que Pistarini realizó miles de kilómetros de rutas e infraestructura para el cambio del sentido de circulación; hasta el 6 de junio de 1945, se circulaba por la mano izquierda, siguiendo el sistema inglés.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc95')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">INAUGURACIÓN DE LA CASA BONAERENSE DE LA PATRIA ES EL OTRO</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 21/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La inauguración de la casa bonaerense de La Patria es el Otro en La Plata fue una demostración de unidad y apoyo al gobernador Axel Kicillof, además de un homenaje a la militante Ana Herrán de Castagneto.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_lapatria.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La casa bonaerense de la organización La Patria es el Otro, ubicada en el centro de La Plata, fue inaugurada con un evento que combinó apoyo a la gestión de Axel Kicillof, homenajes y críticas al actual contexto político. Andrés Larroque, anfitrión y ministro de Desarrollo de la Comunidad, subrayó la importancia de la autocrítica y la necesidad de pedir perdón al pueblo argentino por los desafíos que enfrenta el peronismo. 
                                                </p>
                                                <br>
                                                <p>El acto, realizado en la calle 40 de La Plata, contó con la presencia de figuras destacadas como el intendente de La Plata, Julio Alak, el de Ensenada, Mario Secco, y los ministros Carlos Bianco y Walter Correa, así como la jefa de asesores del gobierno, Cristina Álvarez Rodríguez. La casa, abarrotada de militantes y representantes de más de 40 organizaciones, reflejó la vitalidad y el compromiso de La Patria es el Otro en un contexto político complicado para el peronismo.</p>
                                                <br>
                                                <p>Mario Secco, en su discurso, reiteró su apoyo a Kicillof y criticó a quienes prefieren esperar a que la situación mejore para actuar. Walter Correa, por su parte, comparó a la organización con los libertos que lucharon por la libertad, y destacó el papel de La Patria es el Otro en la defensa de causas justas. Carlos Bianco, en un tono más crítico, afirmó que el "Cuervo" Larroque ha dictado una estrategia de doble discurso: ser oficialista en la provincia y opositor a nivel nacional.</p>
                                                <br>
                                                <p>Cristina Álvarez Rodríguez destacó el significado de la unidad básica como un espacio de encuentro y lucha, mientras que Larroque ofreció una visión histórica que conectó los desafíos actuales con figuras como San Martín y Juan Manuel de Rosas, y criticó a Javier Milei, sugiriendo que debería agradecer a Kicillof por la gestión en la provincia. Además, Larroque reflexionó sobre la historia del peronismo y la necesidad de aprender de los errores pasados, mencionando la importancia de pedir perdón al pueblo argentino por la situación actual.</p>
                                                <br>
                                                <p>La inauguración también rindió homenaje a Ana Herrán de Castagneto, una militante peronista fallecida recientemente. La ceremonia incluyó un minuto de aplausos en su honor, resaltando su contribución al movimiento y su legado.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc96')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ROMERO EL MÁS ‘CASTA’ DEL SENADO ASEGURÓ SU FORTUNA IMPULSANDO UN AUMENTO DE 8 MILLONES POR MES PARA ÉL Y LEGISLADORES NACIONALES</a>
                                            <p class="font-light  text-lef text-gray-500">Por Teresita Frias, publicado en www.diarioinfosalta.com</p>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 21/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><b>El legislador salteño que supo enriquecerse a costa del pueblo que dice representar, vuelve a estar en el centro de la polémica esta vez por presentar un proyecto que lo benefició con un aumento mensual millonario.</b>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_casta.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En una argentina dónde hay más de un millón de niños con hambre, <b>Juan Carlos Romero</b>, el ‘Zar’ salteño que logró notoriedad por negociados que le valieron el control de buena parte de la provincia, elaboró <b>proyecto que llevó a los senadores nacionales a aprobar un aumento de sus dietas hasta los ocho millones de pesos en bruto, lo que se traduce en cinco millones en mano tras los descuentos.</b>
                                                </p>
                                                <br>
                                                <p>La propuesta, que fue sancionada por la <b>Cámara Alta casi sin oposición y en tiempo récord, tiene la marca registrada de Romero</b>, quién no solo es uno de los hombres más poderosos de Salta, sino también en uno de los más cuestionados.</p>
                                                <br>
                                                <p>Con causas judiciales aún pendientes y una fortuna amasada a través de negocios que dejan mucho que desear, este senador salteño sigue acumulando privilegios.</p>
                                                <br>
                                                <p>El aumento, que fue el resultado de un acuerdo en la Comisión Negociadora paritaria del Congreso, eleva las dietas en bruto de los senadores a nueve millones de pesos, consolidando una vez más la brecha entre la clase política y el ciudadano común.</p>
                                                <br>
                                                <p>Mientras tanto, en la <b>Cámara de Diputados</b>, el impacto será menor, ya que el presidente <b>Martín Menem decidió no vincular el aumento de las dietas de los diputados a los incrementos salariales del personal legislativo, limitando así su alcance.</b></p>
                                                <br>
                                                <p>En abril, Romero logró que su proyecto para atar los ingresos de los senadores a los aumentos del personal legislativo se aprobara sin apenas debate, en una sesión que duró <b>menos de dos minutos.</b></p>
                                                <br>
                                                <p>Sin embargo, esta maniobra no hizo más que reforzar la imagen de un político que, lejos de trabajar por el bienestar de su provincia, parece estar <b>más interesado en llenar sus bolsillos y perpetuar su poder</b>.</p>
                                                <br>
                                                <p>La vicepresidenta del Senado, Victoria Villarruel, intentó desentenderse de la decisión, afirmando en redes sociales que no tiene herramientas para frenar este tipo de resoluciones. Pero lo cierto es que, una vez más, los senadores nacionales se aseguraron un aumento <b>en medio de una crisis que golpea duramente a los argentinos, demostrando que, cuando se trata de beneficios propios, la clase política actúa con una celeridad que en otros temas parece no tener.</b></p>
                                                <br>
                                                <p>Así, mientras Juan Carlos Romero sigue manejando los hilos en Salta y sumando ceros a su cuenta bancaria, el pueblo salteño muere de hambre.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc97')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">TAXISTAS ACUSAN A ENTIDADES EMPRESARIALES Y SINDICALES DE RESPALDAR APLICACIONES ILEGALES</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Teresita Frias, publicado en www.diarioinfosalta.com</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><b>Identidad Taxista rechaza la legalización de las apps de transporte y acusa al gobierno de favorecer intereses extranjeros en detrimento del sector. Convocan a una asamblea abierta el 31 de agosto.</b>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_taxistas.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Identidad Taxista amplió su denuncia contra el avance de la legalización de las aplicaciones de transporte, señalando que el presidente de la Sociedad de Propietarios de Automóviles con Taxímetro (SPAT), Celia, admitió en una reciente entrevista radial que varias entidades empresariales y sindicales apoyan la legalización de estas plataformas, a pesar de la legislación vigente que regula el transporte de pasajeros.</b>
                                                </p>
                                                <br>
                                                <p>Entre las entidades mencionadas están SPAT, UPAT, UPINRA, CAMETAX y los sindicatos de Conductores de Taxis y de Peones de Taxi. Todas ellas, según denuncian, se benefician económicamente del aporte de los taxistas, pero están avalando un modelo que pone en riesgo la subsistencia del sector.</p>
                                                <br>
                                                <p>Identidad Taxista advierte sobre la posible desaparición del taxi, declarado de interés cultural en la Ciudad de Buenos Aires, y sobre el impacto que estas políticas tendrían en miles de trabajadores que dependen de esta actividad.</p>
                                                <br>
                                                <p>Por ello, convocan a una asamblea el próximo 31 de agosto a las 14:00 horas en Amancio Alcorta y Ramón Carrillo, donde discutirán el futuro de la actividad y las acciones a seguir. Agradecen la difusión de esta convocatoria.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc98')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL GOBIERNO ENTREGA EL PATRIMONIO NACIONAL AL PRIVADO</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Teresita Frias, publicado en www.diarioinfosalta.com</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El decreto 747/24 elimina la obligación del Estado de contratar empresas públicas, profundizando la entrega de sectores estratégicos al capital privado en detrimento de la soberanía nacional.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_patri.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El gobierno avanza en su objetivo de desmantelar el Estado y entregar el control de sectores clave al capital privado. Con el decreto 747/24, publicado en el Boletín Oficial, se eliminan los decretos que obligaban al Estado a contratar empresas públicas como YPF, Nación Seguros, Optar y el Banco Nación. Esta medida, que aparece como una simple "desregulación", en realidad desnuda la profunda entrega del patrimonio nacional a manos de intereses foráneos.</b>
                                                </p>
                                                <br>
                                                <p>Federico Sturzenegger, ministro de Desregulación, justificó la decisión afirmando que "las empresas públicas no deben servirse de los ciudadanos", un discurso repetido hasta el cansancio por quienes buscan beneficiar a los monopolios privados, asegurando que solo ellos tienen la capacidad de brindar servicios "eficientes". Sin embargo, este cambio no es más que otro paso hacia la pérdida de soberanía sobre sectores estratégicos como la energía, las finanzas y el transporte.</p>
                                                <br>
                                                <p>El decreto 853/23, que garantizaba que los seguros de las entidades públicas fueran contratados con Nación Seguros, y los decretos 1187/12 y 1189/12, que priorizaban al Banco Nación y YPF, respectivamente, eran pilares que aseguraban que las utilidades generadas por estas contrataciones quedaran en manos del Estado. Con esta derogación, la puerta queda abierta para que multinacionales extranjeras se lleven esa riqueza, mientras se debilitan las herramientas del Estado para intervenir en la economía.</p>
                                                <br>
                                                <p>La medida también afecta a Optar SA, una empresa pública vinculada a la gestión de pasajes para el personal estatal. El gobierno eliminó esta obligación, argumentando que "impedía la competencia", sin reconocer que empresas como Optar cumplen una función social que va mucho más allá del simple beneficio económico.</p>
                                                <br>
                                                <p>Bajo el pretexto de una "emergencia económica", el gobierno impulsa la desregulación de sectores que, por su relevancia, deberían mantenerse bajo control estatal. Esto no es más que una entrega descarada al capital privado, siguiendo los dictados del mercado, que solo busca maximizar ganancias sin preocuparse por el bienestar de la población ni por el control soberano de recursos estratégicos.</p>
                                                <br>
                                                <p>La excusa de la "eficiencia" no es más que una cortina de humo. Lo que realmente se busca es que el Estado argentino ceda su rol a favor de corporaciones extranjeras que verán sus arcas crecer mientras los argentinos pagamos las consecuencias. Cada vez más, el gobierno actual parece decidido a despojar al país de su propio futuro.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc99')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">NUEVOS CASOS DE VIRUELA DEL MONO EN EL CONURBANO</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Teresita Frias, publicado en www.diarioinfosalta.com</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 23/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Las autoridades de salud confirman nuevos casos de viruela del mono en el conurbano bonaerense, mientras el país sigue en alerta ante el brote global.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_viruela.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Este martes, el Ministerio de Salud de la Nación informó sobre la activación de un protocolo de emergencia en un buque proveniente de Brasil. Un tripulante del barco “Ina-Lotte” presentó lesiones cutáneas sospechosas, pero finalmente se descartó la presencia de viruela del mono al confirmarse que se trataba de varicela.</p>
                                                <br>
                                                <p><b>El conurbano en alerta</b></p>
                                                <br>
                                                <p>El Ministerio de Salud de la provincia de Buenos Aires confirmó dos nuevos casos de viruela del mono en el conurbano: uno en La Matanza y otro en Berazategui. El paciente de La Matanza presentó síntomas en junio tras un viaje, mientras que el caso de Berazategui se registró en julio, asociado al contacto con un viajero. Ambos pacientes se encuentran en buen estado de salud y bajo seguimiento.</p>
                                                <br>
                                                <p>A nivel nacional, el primer caso de viruela del mono se registró en 2022, acumulándose hasta la fecha 1.158 casos y dos fallecidos. En 2024, ya se confirmaron 9 casos sin víctimas fatales, según el Boletín Epidemiológico Nacional.</p>
                                                <br>
                                                <p><b>Transmisión y síntomas</b></p>
                                                <br>
                                                <p>La viruela del mono, declarada como emergencia internacional por la OMS, se transmite principalmente por contacto directo con las lesiones en la piel, secreciones respiratorias o superficies contaminadas. Los síntomas incluyen fiebre, dolor de cabeza, erupciones cutáneas y dolores musculares.</p>
                                                <br>
                                                <p>Las autoridades recomiendan que cualquier persona con síntomas o antecedentes de viaje consulte inmediatamente a un hospital, mientras refuerzan las medidas preventivas de higiene y distanciamiento para evitar nuevos contagios.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc100')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">500 KILOS DE ALIMENTOS PARA LOS QUE MÁS LO NECESITAN</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Teresita Frias, publicado en www.diarioinfosalta.com</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 25/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>En una jornada solidaria organizada por Palermo K, casi 100 personas se reunieron con el padre Paco Olveira para entregar alimentos a familias vulnerables. La solidaridad contrasta con las políticas de ajuste del gobierno nacional.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_500.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El pasado viernes, se llevó a cabo una jornada solidaria en Palermo organizada por el colectivo Palermo K, que reunió a cerca de un centenar de personas comprometidas con apoyar a los sectores más afectados por la crisis económica. Encabezada por el padre Paco Olveira, la actividad permitió la entrega de 500 kilos de alimentos a familias en situación de vulnerabilidad. Durante la noche, Juan Ruggieri y Tango Compañero se encargaron de la música, generando un ambiente emotivo y de unión entre los presentes.</p>
                                                <br>
                                                <p>El evento tuvo como objetivo central mitigar el hambre que padecen muchas familias a causa de las políticas económicas del gobierno nacional de Javier Milei. En su discurso, el padre Olveira resaltó que “mientras el gobierno sigue con su ajuste, es la solidaridad la que responde a las necesidades del pueblo”. Además, valoró el rol del gobierno de la Provincia de Buenos Aires en este contexto, destacándolo como un ejemplo de gestión comprometida frente a la crisis social y económica que atraviesa el país.</p>
                                                <br>
                                                <p>Los asistentes formaron una cadena humana para cargar los alimentos en una camioneta que partiría hacia la provincia de Buenos Aires, donde se encuentran las familias destinatarias. La escena reflejó el esfuerzo colectivo para llevar alivio a quienes más lo necesitan, bajo la consigna de que “solo el pueblo salvará al pueblo”.</p>
                                                <br>
                                                <p>El acto fue una respuesta directa a la creciente pobreza y la indigencia que afectan a un amplio sector de la población. Según estadísticas recientes, cerca del 70% de los niños en Argentina viven en la pobreza, y uno de cada cuatro hogares no cuenta con los recursos suficientes para cubrir sus necesidades básicas. Frente a este escenario, actividades como la organizada por Palermo K se vuelven fundamentales para contrarrestar la falta de respuestas del gobierno.</p>
                                                <br>
                                                <p>El padre Olveira también hizo hincapié en la importancia de la organización comunitaria como forma de resistencia frente a la deshumanización que, según sus palabras, caracteriza a la gestión nacional actual. La jornada fue, en definitiva, un testimonio del poder de la solidaridad y de la necesidad de seguir construyendo redes de apoyo en tiempos difíciles.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc101')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI CONVIERTE LA PEDOFILIA EN OBJETO DE BURLA POLÍTICA</a>
                                            <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 27/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El presidente usa un caso grave de pedofilia para atacar a un rival político, mostrando una falta de respeto y sensibilidad hacia el sufrimiento de las víctimas.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_pedofilia.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Javier Milei ha cruzado una línea de decencia al usar la acusación de pedofilia contra el diputado misionero Germán Kiczka como un instrumento para atacar a Martín Tetaz. En un acto de extrema insensibilidad, Milei retuiteó una imagen que ridiculiza la gravedad de las acusaciones con un mensaje que burla el sufrimiento de las víctimas: "Prueba gráfica del diputado pedófilo de Misiones queriendo abusar de un pibito".</p>
                                                <br>
                                                <p>Este acto desprecia el dolor real que acompaña a las acusaciones de abuso infantil, convirtiendo un tema de seriedad abrumadora en una herramienta para la confrontación política. Kiczka, aunque aliado de Milei, está acusado de un crimen atroz y está prófugo, lo que debería generar una respuesta de seriedad y empatía. Sin embargo, el Presidente ha optado por la burla, mostrando un alarmante desdén por la gravedad del asunto.</p>
                                                <br>
                                                <p>La actitud de Milei resalta un patrón peligroso en su conducta: el uso de cualquier circunstancia, por dolorosa que sea, para atacar a sus opositores. Este comportamiento no solo demuestra una falta de respeto por las víctimas y sus familias, sino que también revela una estrategia política enfermiza centrada en la agresión y el escándalo.</p>
                                                <br>
                                                <p>Mientras Milei se regodea en ataques burlescos, otros políticos como Martín Tetaz han elegido mantener la dignidad y enfocarse en cuestiones de política pública, como el aumento a los jubilados. La decisión de Milei de trivializar un caso de abuso infantil para desacreditar a un rival refleja una falta de moralidad y responsabilidad.</p>
                                                <br>
                                                <p>El Presidente no solo banaliza un tema crucial, sino que también utiliza su plataforma para atacar a quienes no están de acuerdo con él. La burla de Milei es un insulto a las víctimas y a la dignidad humana, y es un recordatorio de cómo la política puede ser usada para fines deshonestos y crueles. Este episodio exige una reflexión profunda sobre la ética en el liderazgo y el respeto por los temas serios. La falta de sensibilidad de Milei ante un asunto tan grave es inaceptable y debe ser condenada enérgicamente.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc102')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">20 AÑOS DE LA COALICIÓN POR UNA COMUNICACIÓN DEMOCRÁTICA</a>
                                            <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 28/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La CCD cumple dos décadas de lucha por la pluralidad y la libertad en el acceso a la información. En un contexto de creciente autoritarismo, su rol es más necesario que nunca para garantizar la democracia y la diversidad de voces en nuestro país.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_comudemo.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Coalición por una Comunicación Democrática (CCD) ha sido, a lo largo de estos 20 años, un faro indispensable en la defensa de un derecho esencial: el derecho a la comunicación. Desde su creación en 2004, esta red de organizaciones y medios ha sido un pilar fundamental en la construcción de un sistema de medios plural y democrático. Desde ADN Populares, aunque aún no formamos parte de la red, adherimos plenamente a sus principios, valores y objetivos, y compartimos su compromiso por un espacio mediático en el que todas las voces puedan ser escuchadas.</p>
                                                <br>
                                                <p>Gracias a la CCD, se impulsaron debates esenciales sobre la necesidad de desconcentrar el poder mediático en Argentina, promoviendo políticas públicas que garantizaran el acceso a la información para todos, como la Ley de Servicios de Comunicación Audiovisual (LSCA) de 2009. Esta ley marcó un antes y un después en la historia de la comunicación en el país, limitando la acumulación de licencias y reservando espacio para medios comunitarios, alternativos y sin fines de lucro. Fue una victoria para la democracia, la pluralidad y la inclusión de sectores históricamente silenciados.</p>
                                                <br>
                                                <p>Hoy, más que nunca, los principios que defiende la CCD resultan vitales. Nos encontramos en un momento en el que la libertad de expresión está amenazada por políticas que buscan concentrar aún más el poder en manos de unos pocos, en detrimento de la información libre, veraz y plural. En este contexto de autoritarismo rampante, donde la diversidad de voces está en peligro, la Coalición vuelve a erigirse como la trinchera desde donde debemos dar esta batalla.</p>
                                                <br>
                                                <p>Como medio comprometido con la justicia social, la igualdad y los derechos humanos, desde ADN Populares hacemos nuestra la lucha de la CCD. Sus valores no solo resuenan con nuestro trabajo periodístico, sino que también reflejan nuestro compromiso inquebrantable con la construcción de una comunicación al servicio del pueblo y no de los intereses empresariales o políticos que intentan someterla.</p>
                                                <br>
                                                <p>El camino trazado por la Coalición durante estos 20 años nos señala que es posible resistir, que no estamos solos en la defensa del derecho a la información. Y que, a pesar de los obstáculos, seguimos luchando por un país más justo, más inclusivo, más democrático. Pero para ello, necesitamos redoblar esfuerzos y fortalecer esta red de medios populares y comunitarios, que son una barrera contra el avasallamiento de las libertades que algunos sectores autoritarios pretenden instaurar.</p>
                                                <br>
                                                <p>La <p>Coalición por una Comunicación Democrática</p> no es solo un espacio de resistencia; es una apuesta concreta por un futuro donde la verdad y la pluralidad sean las bases del ejercicio de la comunicación. Por ello, a 20 años de su nacimiento, reafirmamos nuestro apoyo incondicional a esta causa. Porque hoy, más que nunca, necesitamos estar unidos para defender lo conquistado y enfrentar las nuevas amenazas.</p>
                                                <br>
                                                <p>Desde <p>ADN Populares</p>, celebramos estas dos décadas de lucha y nos comprometemos a seguir construyendo, junto a la CCD, una comunicación libre, popular y verdaderamente democrática. La libertad de expresión no es negociable; la pluralidad no puede ser silenciada.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc103')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">UN MINISTRO ANTI-DIVERSIDAD EN EL SIGLO XXI</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 29/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Las declaraciones transfóbicas del ministro de Justicia en la Comisión de Mujeres y Diversidad generaron un fuerte rechazo de organizaciones y políticas de género, mientras que algunos funcionarios oficialistas salieron en su defensa.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_cuneo2.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Las recientes declaraciones del ministro de Justicia, Mariano Cúneo Libarona, han generado una ola de rechazo y preocupación. En su intervención en la Comisión de Mujeres y Diversidad de la Cámara de Diputados, Cúneo Libarona se manifestó en contra de la diversidad sexual, afirmando que las identidades no alineadas con la biología son "inventos subjetivos". Esta postura retrógrada ha sido ampliamente criticada, pero también respaldada por algunos sectores del Gobierno.</p>
                                                <br>
                                                <p>El ministro reafirmó sus palabras en redes sociales, donde calificó las políticas de género como "caprichos ideológicos" que, según él, han servido para ocultar la pobreza en el país. Esta visión no solo ha causado indignación entre activistas y sectores políticos, sino que también ha sido respaldada por otros funcionarios del Gobierno, como el vocero presidencial, Manuel Adorni, quien argumentó que estas políticas han escondido negocios perjudiciales.</p>
                                                <br>
                                                <p>Cúneo Libarona también hizo énfasis en valores tradicionales como la familia y la educación, contraponiéndolos a lo que describió como una "agenda cultural de izquierda". Sin embargo, su discurso parece desconectado de la realidad, ya que el Gobierno que él representa ha sido criticado por rechazar la diversidad de género, atacar a los trabajadores y menospreciar la educación pública. La administración actual está envuelta en escándalos, como la visita a genocidas y la fuga del diputado pedófilo Germán Kiczka, lo que ha intensificado el rechazo hacia sus políticas.</p>
                                                <br>
                                                <p>El movimiento feminista y disidente Mujeres de la Matria Latinoamericana (MuMaLá) ha exigido la renuncia del ministro, denunciando sus declaraciones como una negación de derechos fundamentales. Estela Díaz, ministra de Mujeres, Políticas de Género y Diversidad bonaerense, también criticó la postura de Cúneo Libarona, subrayando que sus opiniones van en contra de la Constitución y de las leyes vigentes en Argentina.</p>
                                                <br>
                                                <p>En respuesta a las declaraciones de Cúneo Libarona, la Confederación de Trabajadores de la Educación (CTERA) y diversos grupos han expresado un fuerte rechazo hacia las políticas del Gobierno en materia de género y diversidad. La postura del ministro ha profundizado la polarización en torno a derechos fundamentales, evidenciando una creciente disconformidad entre sectores de la sociedad que defienden la igualdad y la inclusión frente a las políticas regresivas impulsadas por el oficialismo.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc104')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                              <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">RICARDO ALFONSÍN RENUNCIÓ A LA UCR Y CONVOCÓ A LA CONSTRUCCIÓN DE UN FRENTE PROGRESISTA</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 29/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Ricardo Alfonsín convocó a la formación de un espacio progresista en la Provincia de Buenos Aires, junto a Forja y Libres del Sur y anunció su renuncia a la Unión Cívica Radical.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_forja.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En un acto que reunió a los principales referentes de los tres espacios políticos, Ricardo Alfonsín, Gustavo López y Silvia Saravia llamaron a unir y fortalecer al progresismo bonaerense contra las políticas de ajuste y deshumanizantes de Javier Milei.</p>
                                                <br>
                                                <p>“Creemos firmemente en la importancia de alcanzar la justicia social como base para garantizar el bienestar y la igualdad de oportunidades para todos”, sostuvieron a lo largo del acto.</p>
                                                <br>
                                                <p>Gustavo López fue el primer orador y señaló que “Forja nació, históricamente, para mantener el legado del campo nacional y democrático frente a las políticas de entrega. La contradicción fundamental siempre fue entre dos modelos de Argentina: Patria o Colonia, Democracia o Dictadura, desarrollo con inclusión o pobreza y desocupación. Cuando se pierde el norte, la brújula en la política son los principios, por eso llamamos a unir al progresismo desde los Principios, defendiendo la República, la democracia, la libertad con equidad y justicia social frente a un modelo brutal de exclusión y antidemocrático”.</p>
                                                <br>
                                                <p>A su turno, Silvia Saravia, referente de Libres del Sur, sostuvo que “tenemos que hacer todos los esfuerzos para convocar a quienes, desde distintas identidades tenemos el convencimiento de que hay que frenar este proceso de desigualdad, autoritarismo y frustración que intenta consolidar Milei. Y construir definitivamente un espacio dispuesto a poner de pie un modelo de país soberano en toda su dimensión."</p>
                                                <br>
                                                <p>Finalmente, Ricardo Alfonsín cerró el acto anunciando primero, su desafiliación de la Unión Cívica Radical: “tomar esta decisión que me ha costado tiempo y dolor, pero se corresponde con mis convicciones acerca de lo que es más consecuente con los valores e ideas que, como ciudadano y político, siempre me han acompañado”.</p>
                                                <br>
                                                <p>El último candidato a presidente del partido del que se aleja recordó que “en la campaña electoral decíamos que las recetas económicas y sociales de LLA no solo no resolverían los problemas de los argentinos, sino que los agravarían. La historia lo demuestra. No hay un solo país en el mundo que haya progresado socialmente con estas políticas. Al contrario.</p>
                                                <br>
                                                <p>Y agregó que: “En la segunda parte del mandato, irán más a fondo: intentará derogar las leyes e instituciones que le atribuyen al Estado la responsabilidad de promover sociedades justas. Pero para el presidente esta atribución es una aberración.</p>
                                                <br>
                                                <p>El parlamento es el terreno donde podemos darle pelea. Hoy, entre LLA y la oposición amigable, la derecha tiene mayoría. Hay que modificar la actual correlación de fuerzas en el Parlamento. Ese es el desafío”.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc105')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA JUSTICIA ALLANÓ EL MINISTERIO DE CAPITAL HUMANO</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 30/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Justicia investiga la retención de alimentos en el Ministerio de Capital Humano, con la ministra Sandra Pettovello acusada de abuso de autoridad y violación de sus deberes.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_alimento2.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El juez Sebastián Casanello ordenó el allanamiento del Ministerio de Capital Humano en el marco de una investigación por la retención de alimentos destinados a comedores y merenderos populares. La ministra Sandra Pettovello enfrenta acusaciones de incumplimiento de los deberes de funcionario público y abuso de autoridad.</p>
                                                <br>
                                                <p>Este jueves, el Juzgado Criminal y Correccional Federal Nº 7, bajo la dirección del juez Sebastián Casanello, realizó un allanamiento en el Ministerio de Capital Humano. La investigación se centra en las 6 mil toneladas de alimentos que, en lugar de ser distribuidos, han permanecido en depósitos, afectando a comedores y merenderos populares.</p>
                                                <br>
                                                <p>El juez dispuso el secuestro de elementos cruciales para la causa, incluyendo una copia de seguridad de la computadora asignada a Pablo Berardi, director de Logística del Ministerio; todas las órdenes de entrega desde el 27 de mayo; y los partes diarios de los depósitos “Buenos Aires” en Villa Martelli y del Centro Operativo Tucumán en Tafí Viejo. También se revisará el sistema informático S.U.M.A. para rastrear los movimientos de los alimentos.</p>
                                                <br>
                                                <p>Entre los hallazgos del allanamiento se incluyen el backup de la computadora del Director de Logística, las órdenes de entrega desde mayo, los partes diarios con detalles de stock y estado de los alimentos, y el acceso a diversas cuentas de correos electrónicos de empleados y funcionarios.</p>
                                                <br>
                                                <p>Desde el Ministerio de Capital Humano, encabezado por Sandra Pettovello, se defendieron asegurando que han estado trabajando para transparentar la distribución y aumentar el poder de compra de las familias vulnerables, afirmando que cumplen con el plan de distribución de alimentos. También acusaron al Poder Judicial de entrometerse en la gestión del Poder Ejecutivo.</p>
                                                <br>
                                                <p>El conflicto se intensificó cuando, a fines de julio, el juez federal Martín Cormick rechazó una apelación del ministerio y exigió la distribución inmediata de los alimentos retenidos. Pettovello había apelado la decisión que requería un informe detallado sobre la distribución, pero el juez mantuvo su orden, estableciendo un plazo de 48 horas para restituir el servicio a los comedores y merenderos.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc106')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">NAFTA ROMPE LA BARRERA DE $1.000</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 30/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El nuevo aumento en los combustibles llevará a la nafta a superar los $ 1.000 por litro, evidenciando la ineficacia del Gobierno para controlar la inflación.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_nafta.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Las estaciones de servicio aplicarán nuevos aumentos en los precios de los combustibles este fin de semana, con incrementos que oscilarán entre el 2,5% y el 3,5%, según la provincia. Este ajuste hará que todas las variedades de nafta y gasoil superen los $1.000 por litro en la Ciudad de Buenos Aires, reflejando el desinterés del gobierno por aliviar la carga económica que soportan los ciudadanos.</p>
                                                <br>
                                                <p>Desde el inicio de 2024, los precios de los combustibles han subido más del 85%. Este nuevo incremento, diseñado para compensar la devaluación del peso y ajustar los impuestos, pone en evidencia la preferencia del gobierno por las ganancias de las empresas petroleras sobre el bienestar de los consumidores. Mientras los precios suben, los ciudadanos sufren el impacto de un costo de vida creciente, sin que el Ejecutivo tome medidas efectivas para controlar la inflación o proteger el poder adquisitivo.</p>
                                                <br>
                                                <p>Fuentes de la industria revelan que los precios internos de los combustibles aún están un 12% por debajo de la paridad de exportación, lo que desincentiva las ventas al exterior. Este desfase muestra una clara falta de políticas que prioricen el interés público sobre los beneficios de las grandes empresas. El Gobierno, en lugar de implementar controles de precios o políticas que beneficien al pueblo, elige mantener una postura que favorece a los empresarios y perpetúa la injusticia económica.</p>
                                                <br>
                                                <p>Además, el Gobierno se prepara para emitir un decreto que retrasará otras actualizaciones de precios previstas para el próximo mes, mientras busca recuperar hasta $135 en impuestos a la nafta y $87 en el gasoil. Este ajuste tributario, que tiene como objetivo recuperar aproximadamente US$3.000 millones, refleja una estrategia enfocada en equilibrar las cuentas fiscales en lugar de ofrecer un alivio real a los consumidores.</p>
                                                <br>
                                                <p>En lugar de implementar soluciones efectivas para controlar los precios y proteger a la ciudadanía, la administración actual continúa priorizando los intereses de las grandes corporaciones. La falta de acciones concretas para abordar las verdaderas causas de la inflación demuestra que el gobierno sigue desentendiéndose de las necesidades de la gente y enfocándose en satisfacer a los poderosos.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc107')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI VETA LA LEY DE JUBILACIONES Y RECHAZA EL AUMENTO A LOS JUBILADOS</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 31/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El Presidente denegó el aumento a los jubilados y pensionados, al vetar la ley que había votado el Congreso.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_veto1.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El presidente Javier Milei firmó el veto total a la ley de jubilaciones aprobada por el Congreso el pasado 22 de agosto, desestimando el aumento del 8,1% vinculado al Índice de Precios al Consumidor (IPC). La medida fue oficializada en la noche del viernes tras una reunión con los líderes de los bloques dialoguistas en la Casa Rosada, quienes respaldaron la decisión del Ejecutivo.</p>
                                                <br>
                                                <p>Durante el encuentro, Milei explicó que el veto se basa en la necesidad de controlar el déficit fiscal. Cristian Ritondo, jefe del bloque del PRO, justificó el veto argumentando que la ley generaba un déficit adicional de entre 1.2% y 1.8%, afirmando que el gasto en aumentos no es sostenible sin incrementar el déficit o recurrir a endeudamiento.</p>
                                                <br>
                                                <p>El presidente del PRO, Mauricio Macri, había anticipado el apoyo a la medida, y la presencia del PRO en la discusión asegura que la oposición no alcanzará los dos tercios necesarios para revertir el veto. Además, la estrategia del Gobierno incluye publicar el veto de manera excepcional esta misma noche, garantizando que el aumento jubilatorio no se implemente.</p>
                                                <br>
                                                <p>La reunión también contó con la participación de la secretaria general de la Presidencia, Karina Milei, y el jefe de Gabinete, Guillermo Francos, quienes se reunieron con los jefes de bloque del PRO, MID y La Libertad Avanza. Entre los asistentes estaban figuras destacadas como María Eugenia Vidal, Luciano Laspina, Diego Santilli, y senadores libertarios.</p>
                                                <br>
                                                <p>El veto a la ley de jubilaciones subraya la postura del Gobierno en su estrategia de ajuste fiscal y control del gasto público, en línea con el objetivo de déficit cero defendido por Milei. La decisión refuerza la postura del Ejecutivo frente a la presión de la oposición para implementar aumentos que, según el Gobierno, no son viables en el contexto económico actual.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc108')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL GOBIERNO OFICIALIZÓ AUMENTOS EN TARIFAS DE GAS Y ELECTRICIDAD</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Gustavo Cano</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Los nuevos ajustes tarifarios, vigentes desde septiembre, elevarán los costos del gas y la electricidad en promedio un 4%, afectando a usuarios de todos los ingresos.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_tarigas.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El Gobierno oficializó este viernes un aumento del 4% en las tarifas de gas y electricidad que entrará en vigor a partir de septiembre. La medida tiene como objetivo mitigar el impacto de la devaluación y la inflación sobre los subsidios, pero implicará un nuevo ajuste en los bolsillos de los ciudadanos.</p>
                                                <br>
                                                <p>El incremento será aplicado de manera diferenciada según el nivel de ingresos: los usuarios de altos ingresos (N1), comercios e industrias pagarán el 72% del costo del gas y el 90,5% de la electricidad. Los hogares de ingresos medios (N3) cubrirán el 32% del valor del gas y el 40% de la electricidad, mientras que los usuarios de bajos ingresos (N2) abonarán el 26% y 25%, respectivamente. En caso de superar el bloque de consumo establecido, los N3 y N2 deberán pagar el costo adicional al mismo valor que los N1.</p>
                                                <br>
                                                <p>La Secretaría de Energía justificó el ajuste afirmando que es necesario para garantizar un suministro de gas sostenible y evitar el desabastecimiento. Sin embargo, el aumento se produce en un contexto de creciente presión económica sobre los hogares. Los nuevos precios del gas serán de US$3,45 por millón de BTU para los usuarios de altos ingresos y de US$1,24 para los usuarios de bajos ingresos en un bloque subsidiado. El costo real del gas es de US$4,77 por millón de BTU.</p>
                                                <br>
                                                <p>En cuanto a la electricidad, el precio de referencia subirá de $58.596 a $61.526 por MWh, aunque el costo real sin subsidios es de $68.016. Esta medida busca alinear los precios con el costo real de producción y distribución, aunque implica una mayor carga económica para los ciudadanos.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc109')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">UNA CONDUCCIÓN ESTRATÉGICA</a>
                                            <p class="font-light  text-lef text-gray-500">Por Jorge Rachid</p>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La principal preocupación de los sectores nacionales y populares además de la falta de una conducción clara, es sin dudas la construcción de una planificación estratégica en conjunto de todos los sectores que acuerden en los objetivos de soberanía y justicia social, con los instrumentos necesarios que garanticen esa direccionalidad en las decisiones tácticas. La Patria se construye a diario junto al Pueblo en la Comunidad Organizada máxima expresión de la organización comunitaria y herramienta de poder indispensable en la disputa permanente con los enemigos colonizadores de nuestro país, tanto las élites oligárquicas como los avances imperiales.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_conduccion.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Los límites se marcan al fijar esos objetivos a largo plazo, entre quienes acuerdan o no sobre cuestiones liminares, innegociables, en tanto se garantice un proceso de liberación nacional, en el marco de la Patria Grande Latinoamericana, integrado al mundo multipolar. Los ejes de construcción electorales limitan esta posibilidad, porque la supuesta búsqueda de votos termina clausurando los sueños compartidos y una comunidad que ya descree de promesas y cánticos incumplidos a la hora de la verdad.</p>
                                                <br>
                                                <p>La pérdida de identidad y el borramiento de la memoria es el objetivo central del enemigo que actúa en forma permanente sobre esos ejes, en una profundización de la cultura dominante que luego irradia a los ámbitos económicos financieros e institucionales. Las construcciones electorales desprovistas de programas estratégicos, lleva a un proceso de debilidades doctrinarias a la hora de ejercer el rol tanto de oposición u oficialismo, llegando a la hora de la verdad a actuar consentidamente con los factores de poder, consolidando la posición ya dominante.</p>
                                                <br>
                                                <p>Esto viene sucediendo desde el inicio mismo de la democracia, claudicando a cada paso en el objetivo final de derrotar la pobreza, distribuir la riqueza, generar producción nacional, con un Estado con presencia determinante en la direccionalidad de los recursos que garantice la ampliación de los derechos sociales, la preservación de los DDHH y la investigación y desarrollo en ciencia y tecnología, que nos brinde la máxima posibilidad de construcción de soberanía nacional en un mundo integrado al multipolarismo.</p>
                                                <br>
                                                <p>La ausencia de una conducción totalizadora del Movimiento Nacional y Popular, no impide realizar el esfuerzo de todas las fuerzas comprometidas y militantes, desde agrupaciones políticas a movimiento obrero organizado, desde movimientos sociales hasta organizaciones libres del Pueblo, a confluir desde el convencimiento que la fragmentación nos lleva a la derrota, hacia un objetivo compartido donde las supuestas alquimias salvadoras dejen de ser protagónicas, construyendo caminos estratégicos que se verifiquen en la decisiones de cada día, identificando al enemigo, que no pude desaparecer del radar militante, porque al difuminarse éste, comienza el canibalismo interno y a debilitarse el campo nacional y popular.</p>
                                                <br>
                                                <p>Es entonces reflexionar sobre los caminos a recorrer, escuchando y aprendiendo de las jóvenes generaciones que serán responsables de construir el futuro, apuntalar la Patria Matria Grande, comprendiendo sus mecanismos de interpretación de la realidad, sin demonizarlos ni denigrarlos, como se suele hacer desde posiciones soberbias y rencorosas. El camino es recuperar valores y virtudes arrojadas a la vera del camino por el posibilismo individualista dominante. Sin utopías y esperanzas no se puede construir un destino, por esa razón levantar los sueños de una Patria justa y soberana se puede realizar colocando los límites en lo estratégico, sin demandas electorales que licuan los mismos, pero consolidando objetivos que más temprano que tarde serán recogidos por nuestros compatriotas cuando se sientan comprendidos en esos sueños. </p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc110')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL VIEJO GASÓMETRO</a>
                                            <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 02/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Un monumento a la historia industrial y energética de Buenos Aires, el Gasómetro de Constituyentes se alza con sus 85 metros de altura y 54 metros de diámetro en el cruce de la autopista Av. General Paz y Av. Constituyentes. Este gigante de acero, que marcó el paisaje porteño durante más de siete décadas, tiene un legado que va más allá de su tamaño imponente.</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_gaso2.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Construido por una empresa alemana en 1948, el Gasómetro fue terminado en 1951, pero su función real duró poco más de tres años, ya que dejó de operar en 1954. Aunque comúnmente se lo asocia con San Lorenzo, el gasómetro no tiene relación directa con el club, ni es simplemente un depósito de gas. En lugar de ello, fue una pieza clave en la infraestructura de distribución de gas.</p>
                                                <br>
                                                <p>Antes de la década de 1950, el gas natural aún no estaba disponible y el gas se fabricaba a partir de carbón de coque en la Usina de Corrales, en el barrio de Parque Patricios. Este gas, que incluso iluminaba la ciudad con lámparas de gas, se almacenaba en los gasómetros a través de tuberías. La magia del gasómetro residía en su émbolo interno, que permitía regular la presión del gas al subir y bajar, facilitando su distribución.</p>
                                                <br>
                                                <p>La llegada del gas natural desde Chubut en 1954 hizo obsoleto el uso de gasómetras y fábricas de gas similares. Sin embargo, el Gasómetro de Constituyentes ha resistido el paso del tiempo, y a pesar de los embates de la historia, incluida una tentativa de bombardeo en 1955 que lo esquivó, sigue en pie como un testimonio de una era pasada.</p>
                                                <br>
                                                <p>Hoy en día, el Gasómetro de Constituyentes no solo es un símbolo de la historia industrial, sino también un ícono cultural que promete mantenerse en la memoria colectiva de Buenos Aires.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc111')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL PERONISMO PRESENTA LISTA OPOSITORA EN LA CARRERA DE COMUNICACIÓN DE LA UBA</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 02/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Dr. Christian Dodaro, candidato a director: "Tenemos que volver a construir comunidad, vincularnos con el mundo del trabajo y pensar las nuevas formas de comunicación" </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_dadoro.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>El peronismo presentó una lista opositora a la dirección de la carrera de ciencias de la comunicación de la UBA. “Es necesario recuperar la centralidad de la carrera en las discusiones públicas sobre la comunicación como derecho humano y con base comunitaria, pensar la carrera desde el territorio y desde los desafíos que plantean las innovaciones tecnológicas y el mundo del trabajo” señaló Christian Dodaro en el lanzamiento de su candidatura a Director de Carrera de Ciencias de la Comunicación de la Facultad de Ciencias Sociales.</p>
                                                <br>
                                                <p>Dodaro asume la candidatura acompañando la lista de la agrupación peronista de graduados y estudiantes UES desde la necesidad de generar debates en una carrera que tiene una conducción progresista de ocho años y que intenta renovar por dos mas.</p>
                                                <br>
                                                <p>Una de las dimensiones centrales de su proyecto es el crecimiento de la matrícula, que hoy hay cada vez menos estudiantes, y en la permanencia y el egreso de estudiantes. "Para lograrlo, es fundamental recuperar una carrera de puertas abiertas, entender sus problemas para pagarse el boleto, los apuntes, algo para comer" señaló.</p>
                                                <br>
                                                <p>En sus diálogos con graduados, docentes y estudiantes señala que es imprescindible pensar la comunicación como derecho humano y al servicio de la democracia, las producciones de bienes y servicios culturales mirada desde una perspectiva comunitaria, recuperar las formas de hacer y los saberes en plural y desde allí producir conocimiento, organizar las audiencias y politizarlas (dar talleres en clubes, escuelas, sindicatos para el consumo crítico de medios), promover mediaciones culturales, sociales y políticas. Rearmar lo comunitario, la comunidad organizada y la federalización y regionalización de la comunicación.</p>
                                                <br>
                                                <p>También destaca la defensa del sistema de medios públicos de comunicación y la defenza los puestos de trabajo de periodistas y personal técnico de la comunicación, así como combatir los discursos de odio, las fake news y las formas de invisibilización del diferente.</p>
                                                <br>
                                                <p>Christian Dodaro, es Dr en Ciencias Sociales, Magister en comunicación y cultura y Licenciado en Comunicación. Todo por la UBA. Es docente de comunicación desde 2003 y ha dado clases de grado y postgrado en distintas universidades del país. Es militante peronista, territorial y sindical. Es periodista y participa de programas en Radio Caput y Radio Madres de Plaza de Mayo. Desarrolla el seminario de comunicación sindical y ha dirigido muchisimas tesis y TIF.  Sus producciones sobre cultura y comunicación pueden leerse en Página 12, Pacu Urondo, Diario Ku entre otros portales.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc112')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">INFANCIAS Y VEJECES OLVIDADAS, EL RETROCESO DE UNA NACIÓN</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Hubo un tiempo que fui hermoso, Y fui libre de verdad, Guardaba todos mis sueños, En castillos de cristal, Poco a poco fuí creciendo, Y mis fábulas de amor, Se fueron desvaneciendo, Como pompas de jabón. “Canción para mi muerte” - Sui Generis</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_vejez2.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Si hay dos extremos frágiles en la vida de las personas son la infancia y la vejez.  Las niñeces sufren la vulnerabilidad de su llegada a este planeta tan hostil. Hambre, abandono, muertes prematuras totalmente evitables, indiferencias de este Estado con muestras innegables de crueldad.</p>
                                                <br>
                                                <p>Los que tienen la buena fortuna de llegar a la vejez, cosa que no todos lo logran, sienten la misma debilidad y desamparo que en aquel lejano principio.</p>
                                                <br>
                                                <p>Los Estados de bienestar, fuertes, contenedores y empáticos con sus congéneres siempre nos garantizan contención.   El peronismo fue el primer Estado que tomó en cuenta estas variables, ni más ni menos que de “la buena vida”. El derecho al goce de los adultos mayores del “Decálogo de la Ancianidad”, con una lista de condiciones de plena dignidad que fueron incorporados en la Constitución en 1949 y siguen siendo un paradigma. Claro que el benemérito Arturo Sampay, ideólogo de la Constitución de 1949, jamás imaginó que su tan progresista y justa Carta Magna tendría tan poca vida.</p>
                                                <br>
                                                <p>Las infancias y sus inicios de vida fueron acompañados por una magnífica consigna “Los únicos privilegiados son los niños”. Coincidentemente en esa época se integran los Derechos del Niño a la Declaración Universal de los Derechos Humanos, proclamada por la Naciones Unidas en 1948. La Constitución de 1949 va a dedicar un capítulo a los Derechos de la Familia, incluyendo la Niñez y la Ancianidad. La familia toda, en sus diferentes etapas de la vida, tenía sus derechos expresamente enunciados y garantizados con el fin de lograr el objetivo esencial del peronismo: el bienestar de las familias. También en el plano legal, se igualaron los hijos llamados hasta entonces “legítimos e ilegítimos” (nacidos dentro o fuera del matrimonio), sin ninguna diferencia de derechos.</p>
                                                <br>
                                                <p>Sin embargo, después de 75 años seguimos recordando y añorando aquel compendio de derechos que nos fue arrebatado a partir 1956 por el gobierno de facto (la fusiladora) liderado por Pedro Eugenio Aramburu, con un decreto que derogó la Constitución y restauró la vigencia de la anterior Constitución de 1853, con sus reformas de 1860, 1866. Desde entonces, la Constitución de 1949 ha sido relegada y su reforma se ha omitido en los planes de estudio de derecho y en los textos de constitucionalistas. ¡Cómo nos remite a los actuales tiempos de ferocidad e impiedad!</p>
                                                <br>
                                                <p>Qué destino para esta Patria.</p>
                                                <br>
                                                <p>Mientras el Pami recorta medicaciones fundamentales para sobrellevar la salud de las vejeces, los niños nacidos en estado de hiper vulnerabilidad, en hospitales públicos con necesidad de internación en neonatología, con mamás apenas alimentadas durante sus embarazos, hacen que sus vidas pendan de un hilo a punto de cortarse. Esas niñeces tampoco gozarán del buen vivir.</p>
                                                <br>
                                                <p>Mientras los trabajadores de la salud hacen lo imposible, día a día, para que las vidas tengan el valor de ser vividas, desde un Estado canalla no hay una pizca de solidaridad con la especie, entonces estamos frente al final de una civilización<p>
                                                <br>
                                                <p>Si desde un Estado angurriento de bienes y dineros para unos muy pocos, que sólo se conmueve con las opulencias exuberantes para las minorías, el final está más próximo.</p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc113')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SE VIENE LA EXPO IGUALDAD BONAERENSE EN LA PLATA</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Los días 7 y 8 de septiembre, entre las 12.00 a 18.00 hs., se realizará la Expo Igualdad Bonaerense en el Estadio Único Diego Armando Maradona, en La Plata</i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_expo2.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La Expo Igualdad Bonaerense busca fortalecer las alianzas entre las y los distintos protagonistas de las cadenas de producción local, desde un enfoque integral para garantizar un nodo productivo en clave de género, abonando a la igualdad y al fortalecimiento de la comunidad bonaerense.</p>
                                                <br>
                                                <p>La feria Expo@diseño desplegará más de 160 stands, dónde participarán mujeres emprendedoras, diseñadoras, empresarias, profesionales del arte, decoradoras y profesionales del ambiente productivo y sectores gastronómicos de la ciudad de La Plata.</p>
                                                <br>
                                                <p>Las y los productores de alimentos que integran el programa Mercados Bonaerenses estarán presentes con diversas propuestas para la comercialización.</p>
                                                <br>
                                                <p>A través de Cuenta DNI, el Banco de la provincia de Buenos Aires ofrecerá una serie de descuentos que estarán disponibles sólo para los días del evento: 40% de descuento en stands adheridos, con tope de $4000 por acción y por persona; 40% de descuento en comercios de Mercados Bonaerenses, con tope de $4000 por acción y por persona y 30% de descuento en stands de gastronomía adheridos, con tope de $5.000 unificado por semana y por persona.</p>
                                                <br>
                                                <p>Con el objetivo de promover el derecho a la salud de mujeres y diversidades, junto a Expo Mujer Saludable, el ministerio de Salud de la provincia de Buenos Aires e instituciones de la salud privada, se desarrollarán actividades de promoción de salud integral, en las que se  brindará información sobre primeros auxilios, vacunación, donación de sangre, prevención de enfermedades como cáncer de mama, de útero y de transmisión sexual.</p>
                                                <br>
                                                <p>En el marco de la Expo, se llevará adelante “Nosotras producimos”, un programa del Ministerio de Mujeres y Diversidad que busca propiciar acciones que potencien experiencias productivas de mujeres y personas LGTBI+ de la provincia de Buenos Aires. Es un espacio de intercambio entre diversos nodos productivos pensado para promover el intercambio de experiencias entre empresas, sindicatos, cooperativistas, mutuales, universidades y emprendedoras.</p>
                                                <br>
                                                <p>En los stands institucionales de la Provincia, los distintos ministerios y organismos participantes brindarán información sobre  sus principales políticas y programas desarrollados en el territorio bonaerense.</p>
                                                <br>
                                                <p>Durante todas las jornadas habrá actividades culturales y funcionará una variada oferta gastronómica.<p>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc114')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EXPO IGUALDAD REUNIÓ A 25 MIL PERSONAS</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 08/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        {{-- <p><i>Los días 7 y 8 de septiembre, entre las 12.00 a 18.00 hs., se realizará la Expo Igualdad Bonaerense en el Estadio Único Diego Armando Maradona, en La Plata</i>
                                        </p> --}}
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_expoigualdad.svg"
                                                alt="">
                                        </figure>
                                        
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/GeOVAG1Bfz8?si=r2ihOrxI6uEWI0IU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El gobernador Axel Kicillof visitó el primer día de la Expo, en tanto que el intendente de La Plata, Julio Alak, y el ministro de Desarollo Agrario Javier Rodríguez recorrieron los stands en la jornada que se desarrolló el domingo 8</p>
                                                <br>
                                                <p>El Estadio Único Diego Armando Maradona fue el escenario de la primera edición de Expo Igualdad Bonaerense, un encuentro que reunió a más de 25.000 personas los días 7 y 8 de septiembre. Organizado por el Ministerio de Mujeres y Diversidad de la Provincia de Buenos Aires, el evento contó con la participación de más de 160 stands de productoras y productores locales, además de diversas charlas y talleres.</p>
                                                <br>
                                                <p>La iniciativa se destacó por la articulación entre el Estado y el sector privado, con el objetivo de fortalecer la trama productiva bonaerense y colocar a las mujeres en el centro de la producción. “Reunimos propuestas de lo público y lo privado, en una articulación muy virtuosa, donde el Estado estuvo claramente presente dando una oportunidad para fortalecer la trama productiva bonaerense pero con las mujeres en el centro de la producción y el trabajo”, señaló la ministra Estela Díaz durante el cierre de la jornada.
                                                </p>
                                                <br>
                                                <p>Los productores, tanto del programa Mercados Bonaerenses como de Expo@diseño, realizaron un balance positivo de la experiencia, destacando las oportunidades de visibilización de sus productos y las ventas alcanzadas. A su vez, el público aprovechó los descuentos ofrecidos a través de la aplicación Cuenta DNI del Banco Provincia, cuyo stand fue uno de los más visitados.</p>
                                                <br>
                                                <p>La jornada también tuvo un emotivo homenaje a Herenia Sánchez Viamonte, cofundadora de Madres de Plaza de Mayo La Plata, quien falleció a los 97 años. Sánchez Viamonte dedicó su vida a la búsqueda de su hijo y su nuera, desaparecidos durante la última dictadura cívico-militar.</p>
                                                <br>
                                                <p>En el marco de la Expo, se realizaron actividades enfocadas en la salud y la inclusión financiera, destacándose las charlas de Expo Mujer Saludable y la presentación de los servicios del Banco Provincia. También hubo un espacio para el cine, con proyecciones del ciclo “Proyectando Feminismos”.
                                                </p>
                                                <br>
                                                <p>El cierre musical estuvo a cargo de DJ La Puta Ama y la banda Potencia Bernarda, quienes animaron a las miles de personas presentes con una combinación de nuevos temas y clásicos de la cumbia argentina.
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
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc115')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MARCHA CONTRA EL VETO DE MILEI</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        {{-- <p><i>Los días 7 y 8 de septiembre, entre las 12.00 a 18.00 hs., se realizará la Expo Igualdad Bonaerense en el Estadio Único Diego Armando Maradona, en La Plata</i>
                                        </p> --}}
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_jubiladosmilei.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La oposición en Diputados buscará voltear el veto presidencial a la ley de movilidad jubilatoria. La protesta contará con el apoyo de la CGT, las CTA y movimientos sociales, en medio de la creciente tensión.
                                                </p>
                                                <br>
                                                <p>Este miércoles, una manifestación masiva promete colmar las calles frente al Congreso de la Nación. Gremios, movimientos sociales y organismos de derechos humanos se movilizarán en apoyo a los jubilados que exigen la restitución de la ley de movilidad, vetada por el presidente Javier Milei. La medida, que afecta a los jubilados que perciben la mínima, ha sido un detonante de indignación en diversos sectores, que denuncian el brutal ajuste sobre los más.
                                                </p>
                                                <br>
                                                <p>"Estamos al límite: gente sin trabajo, chicos muertos de hambre, jubilados sin medicación. Esta crisis es insostenible y el gobierno tiene que cambiar su política económica", advirtió Carlos Minucci, de la Asociación del Personal Superior de Empresas de Energía (APSEE), al confirmar la adhesión de su gremio a la marcha.</p>
                                                <br>
                                                <p>La convocatoria se organiza en torno a una amplia unidad de sectores. El Frente Sindical, la Corriente Federal, la UTEP y las dos CTA estarán presentes. También se espera la participación activa de movimientos sociales de izquierda, que en las últimas semanas han exigido un paro nacional. El Polo Obrero, uno de los grupos más combativos, dejó clara su postura: "Las calles no son de Patricia Bullrich ni de Milei, son de los trabajadores", lanzó Eduardo Belliboni.
                                                </p>
                                                <br>
                                                <p>La represión sufrida por los jubilados en las dos protestas anteriores marcó un punto de quietud. Las imágenes de ancianos gaseados por las fuerzas de seguridad han generado un fuerte rechazo. Esta vez, la apuesta es reunir una multitud imposible de ignorar. “Los que voten a favor del veto estarán condenando a los jubilados a morir de hambre. No vamos a permitir que se aplique nuevamente el protocolo represivo de Bullrich”, aseguró Rodolfo Aguiar, titular de ATE, quien anunció un paro de 24
                                                </p>
                                                <br>
                                                <p>El Congreso será el epicentro de la jornada de lucha. A partir de las 10 de la mañana, la Cámara de Diputados debatirá el veto, mientras millas de personas se concentrarán afuera para presionar a los legisladores. "No podemos dejar solos a los jubilados. Todos los sindicatos tienen jubilados, y todos nosotros seremos jubilados algún día. No se puede tolerar que tengan que elegir entre comprar medicamentos o comer", advirtió Vanesa Siley, diputada de Unión por la Patria y dirigente gremial</p>
                                                <br>
                                                <p>La decisión de adelantar la sesión parlamentaria al miércoles fue una respuesta directa al pedido de la oposición para tratar de anular el veto presidencial. Con una fuerte expectativa por la magnitud de la movilización, los gremios combativos piden un paro general que refuerce la lucha en las calles 
                                                </p>
                                                <br>
                                                <p>La movilización promete ser una demostración contundente de que el ajuste sobre los jubilados encontrará una resistencia implacable, tanto en las calles como en el recinto parlamentario.
                                                </p>
                                                <br>
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc116')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">FRANCISCO CRITICÓ EL AJUSTE Y LA REPRESIÓN EN ARGENTINA </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        {{-- <p><i>Los días 7 y 8 de septiembre, entre las 12.00 a 18.00 hs., se realizará la Expo Igualdad Bonaerense en el Estadio Único Diego Armando Maradona, en La Plata</i>
                                        </p> --}}
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_papa-milei.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El Papa apuntó contra el gobierno de Javier Milei por las políticas de ajuste y la represión de las protestas sociales. Respaldó a los movimientos populares y denunció la corrupción en el gobierno. 
                                                </p>
                                                <br>
                                                <p>El Papa Francisco, en un reciente simposio en el Vaticano, se pronunció enérgicamente sobre la realidad argentina, enfocándose en la represión de las protestas sociales y el ajuste implementado por el gobierno de Javier Milei. Durante su intervención, respaldó la lucha de los movimientos sociales, denunciando un episodio en el que un ministro del gabinete libertario solicitó sobornos a un inversor extranjero. "El diablo entra por el bolsillo, no lo olviden", afirmó, aludiendo a la corrupción en el actual gobierno.
                                                </p>
                                                <br>
                                                <p>Francisco no dudó en criticar la represión que sufren aquellos que reclaman sus derechos. “En vez de pagar la justicia social, pagaron el gas pimienta”, subrayó, refiriéndose a la represión policial que enfrentan quienes protestan por condiciones dignas. “Obreros y ciudadanos no deberían ser tratados como revoltosos por exigir justicia”, agregó.
                                                </p>
                                                <br>
                                                <p>Su discurso resonó en un momento crucial, ya que se produjo justo después de recibir a altos funcionarios de la CGT y otros líderes sociales. Francisco instó a la clase media a reflexionar sobre su situación: “¿Creen que los más ricos van a compartir lo que tienen o continuarán acumulando insaciablemente?”. Este cuestionamiento desafía la narrativa de que la riqueza se distribuye equitativamente.
                                                </p>
                                                <br>
                                                <p>El Papa advirtió sobre la "cobardía" de muchos políticos que, presionados por los medios, claudican ante los poderosos. “Renegar de los ideales por conveniencia es una apostasía”, enfatizó, dirigiéndose tanto a políticos como a otros actores sociales. Su mensaje subraya la importancia de mantener los principios en un contexto de presión económica.
                                                </p>
                                                <br>
                                                <p>En su intervención, Francisco recordó que “los pobres no pueden esperar”, resaltando la urgencia de abordar la justicia social. “Tierra, techo y trabajo son derechos sagrados”, afirmó, instando a los movimientos sociales a perseverar en su lucha. “El grito de los excluidos puede despertar las conciencias adormecidas de los dirigentes políticos”, concluyó.
                                                </p>
                                                <br>
                                                <p>Al finalizar, el Papa reiteró que la inequidad es la raíz de los problemas sociales. “No se resolverán los problemas del mundo sin una distribución equitativa de la riqueza”, advirtió, sugiriendo que la solución radica en un compromiso colectivo y la acción conjunta.
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc117')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI HUNDE AL PAÍS CON SU AJUSTE NEOLIBERAL  </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        {{-- <p><i>Los días 7 y 8 de septiembre, entre las 12.00 a 18.00 hs., se realizará la Expo Igualdad Bonaerense en el Estadio Único Diego Armando Maradona, en La Plata</i>
                                        </p> --}}
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_hunde.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La imagen de Javier Milei cae en picada mientras sus políticas de ajuste favorecen a los poderosos y hunden al pueblo. El malestar social crece, y su gobierno ya no puede ocultar el fracaso.
                                                </p>
                                                <br>
                                                <p>La gestión de Javier Milei está desmoronándose bajo el peso de sus propias políticas. El ajuste salvaje, que prioriza a los sectores más ricos y al FMI, ha generado un fuerte rechazo en la sociedad. La popularidad del presidente se desploma, perdiendo más de 20 puntos en las encuestas, mientras su imagen negativa ya supera el 54%. Las promesas de "cambio" que alguna vez convencieron a sectores precarizados y jóvenes han quedado en evidencia como lo que realmente son: un engaño.
                                                </p>
                                                <br>    
                                                <p>Raúl Timerman, del Grupo de Opinión, asegura que el ajuste en las jubilaciones y el recorte presupuestario en las universidades son las principales razones de este desplome. Mientras Milei festeja con los ricos, el pueblo sufre. Las políticas que buscan beneficiar a los poderosos han dejado a los más humildes a la deriva. El veto presidencial y los recortes no hacen más que profundizar la desigualdad en el país.
                                                </p>
                                                <br>    
                                                <p>Por su parte, Roberto Bacman, del Centro de Estudios de Opinión Pública, señala que los jóvenes que alguna vez apoyaron a Milei ahora lo abandonan. Los sectores populares, golpeados por la precarización laboral y la falta de apoyo estatal, ven cómo sus vidas empeoran bajo el mandato del libertario. El discurso del "cambio" se desmorona ante la cruda realidad de un ajuste que solo favorece a los de arriba.
                                                </p>
                                                <br>    
                                                <p>Federico Aurelio, de ARESCO, prevé que la caída en las encuestas continuará si la situación económica no mejora. Pero no hay esperanzas de mejora cuando el gobierno sigue apostando por las mismas políticas neoliberales que ya fracasaron en el pasado. El ajuste no es la solución, es el problema. Y Milei está haciendo pagar ese precio al pueblo.
                                                </p>
                                                <br>    
                                                <p>La gestión de Milei es el reflejo de un gobierno que gobierna para unos pocos, mientras el pueblo trabajador paga las consecuencias. No es una sorpresa que su imagen caiga en picada. Este es el precio de traicionar a quienes confiaron en sus promesas vacías.
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc118')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CRISTINA LLAMA A ENFRENTAR EL DESASTRE DEL GOBIERNO DE MILEI   </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 23/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        {{-- <p><i>Los días 7 y 8 de septiembre, entre las 12.00 a 18.00 hs., se realizará la Expo Igualdad Bonaerense en el Estadio Único Diego Armando Maradona, en La Plata</i>
                                        </p> --}}
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_desastre.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La expresidenta alertó sobre la crisis social y económica en los barrios populares y pidió construir una alternativa política.
                                                </p>
                                                <br>
                                                <p>Cristina Fernández de Kirchner lanzó un mensaje contundente durante un acto conmemorativo de los 20 años del partido Nuevo Encuentro. En su intervención, la exmandataria criticó de manera frontal la política de ajuste impulsada por Javier Milei, que definió como "un desastre social y económico sin precedentes". El llamado fue claro: es necesario construir una alternativa frente a lo que considera un modelo de exclusión y sufrimiento para las mayorías populares.
                                                </p>
                                                <br>
                                                <p>El deterioro de las condiciones de vida en los barrios populares fue uno de los ejes principales de su mensaje. Cristina advirtió que la retirada del Estado ha dejado a millones de argentinos en una situación de abandono, exacerbando la pobreza y la inseguridad. "Medicamentos que no se pueden comprar, alimentos que se dejaron de consumir, trabajos que se pierden", enumeró, trazando un panorama desolador sobre el impacto directo de las políticas libertarias en la vida cotidiana de la población.
                                                </p>
                                                <br>
                                                <p>A diferencia de otras ocasiones en las que la crítica al gobierno se centró en aspectos puramente económicos, en esta oportunidad Fernández también subrayó una dimensión emocional. Según la ex presidenta, la crisis que atraviesa el país "no solo golpea el bolsillo, sino que también afecta la moral y el ánimo de los argentinos". Aludió a un clima de tristeza y desesperanza, especialmente entre los sectores más humildes, que ven cómo sus condiciones de vida se deterioran día tras día.
                                                </p>
                                                <br>
                                                <p>El ajuste, en particular, está haciendo estragos en los jubilados y los sectores más vulnerables. La decisión de recortar beneficios sociales y reducir el financiamiento a universidades ha despertado una fuerte indignación entre quienes confiaron en Milei, llevándolos a un creciente descontento. Según Cristina, el avance de las políticas neoliberales está dejando heridas profundas en la sociedad argentina, y el pueblo empieza a darse cuenta de las verdaderas consecuencias de la gestión de La Libertad Avanza.
                                                </p>
                                                <br>
                                                <p>Fernández también alertó sobre el aumento de la violencia y el narcotráfico en los barrios más pobres, fenómenos que, según su diagnóstico, son el resultado de la desatención estatal. Al cerrar su intervención, instó a la militancia a "redoblar esfuerzos para frenar este modelo de ajuste" y recordó que "la política debe estar al servicio de las necesidades del pueblo, no de los intereses de las grandes corporaciones".
                                                </p>
                                                <br>
                                                <p>En este contexto, su mensaje fue un llamado a la acción, a la resistencia frente a lo que considera una ofensiva neoliberal destructiva. "Es el momento de unirse y seguir militando, porque lo que está en juego es el futuro del país", sentenció la ex presidenta.
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc119')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MENTIRAS PRESIDENCIALES DESMENTIDAS POR LA JUSTICIA  </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 28/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Justicia de Córdoba aclaró que no hay pruebas que vinculen a militantes de La Cámpora con los incendios en la provincia, contradiciendo las afirmaciones de Milei.</i>
                                        </p> 
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_cordoba.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El reciente intento del presidente Javier Milei de vincular a militantes de La Cámpora con los incendios en Córdoba ha sido desmentido por la Justicia. Tras las declaraciones del mandatario en las que aseguraba la detención de 17 militantes kirchneristas responsables de los incendios que devastan varias localidades cordobesas, el Ministerio Público Fiscal (MPF) salió al cruce y aclaró que no hay ni 17 detenidos ni evidencia alguna que conecte a los acusados con agrupaciones políticas.
                                                </p>
                                                <br>
                                                <p>El jefe de los fiscales de Córdoba, Juan Manuel Delgado, fue contundente en su desmentida: “No tenemos indicios de que estos acontecimientos hayan sido provocados por personas vinculadas a La Cámpora”, señaló en una entrevista, dejando en claro que las acusaciones que se viralizaron a través de la cuenta de Milei en redes sociales son infundadas.
                                                </p>
                                                <br>
                                                <p>El propio presidente compartió una publicación en su perfil de X (anteriormente Twitter), replicando la acusación de un usuario que aseguraba la detención de 17 militantes kirchneristas como responsables de iniciar los incendios. Sin embargo, la realidad judicial es muy diferente: hasta el momento, solo hay 11 detenidos, de los cuales algunos ya han sido liberados por falta de pruebas, y en ningún caso se ha confirmado la afiliación política de los sospechosos.
                                                </p>
                                                <br>
                                                <p>El ministro de Seguridad de Córdoba, Juan Pablo Quinteros, explicó que de los 11 detenidos, tres recibieron condenas por incendios intencionales, pero ningún caso está relacionado con cuestiones políticas. De hecho, los liberados fueron excarcelados por negligencia y no por delitos intencionales.
                                                </p>
                                                <br>
                                                <p>“Cuando se detiene a una persona no se le pregunta su filiación política, eso corresponde a la investigación”, aclaró Quinteros, remarcando que las publicaciones del presidente no solo son incorrectas, sino peligrosamente desinformativas.
                                                </p>
                                                <br>
                                                <p>Los incendios en Córdoba, que ya han destruido miles de hectáreas y afectado a cientos de familias, continúan avanzando y las autoridades trabajan contrarreloj para mitigar su impacto. Pero mientras las llamas se extienden, las declaraciones irresponsables desde el gobierno no hacen más que sumar confusión y desviar la atención de las verdaderas causas del desastre ambiental.
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc120')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MÉDICOS RESIDENTES EXIGEN MEJORAS SALARIALES  </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 29/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Los residentes de hospitales nacionales, incluido el Garrahan, exigen mejoras salariales y laborales. Agostina Fiandrino, residente del Garrahan, habla sobre la precarización del sistema de salud.</i>
                                        </p> 
                                        <br>
                                        <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/dukyUIWrwrE?si=clVWqNwEf5bO2klE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        {{-- <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_desastre.svg"
                                                alt="">
                                        </figure> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Los residentes de los hospitales nacionales continúan su lucha por una recomposición salarial y mejoras laborales. Tras varios meses de reclamos y sin respuestas concretas del Ministerio de Salud, Agostina Fiandrino, residente de pediatría del Hospital Garrahan, explicó en una entrevista exclusiva con Radio La Turba para ADN Populares, las razones detrás del paro de 24 horas y las futuras medidas de protesta, incluyendo un paro de 48 horas la semana próxima.
                                                </p>
                                                <br>
                                                <p>"Estamos hace meses exigiendo una recomposición salarial", comenta Fiandrino. "La situación es crítica, no solo para nosotros como residentes, sino para el sistema de salud en general. Nuestros sueldos están por debajo de la canasta básica familiar, y no ha habido una recomposición acorde a la inflación que enfrentamos".
                                                </p>
                                                <br>
                                                <p>El paro afecta a todos los hospitales nacionales, entre ellos el Garrahan, el Posadas, y el Malbrán, todos centros de alta complejidad que dependen del Ministerio de Salud de la Nación. Según Fiandrino, los sueldos de los residentes nacionales han quedado muy por debajo en comparación con otras jurisdicciones como la Ciudad Autónoma de Buenos Aires y las provincias. "Históricamente, teníamos sueldos más altos debido a la carga laboral que tenemos en hospitales de alta complejidad, pero en los últimos meses hemos sufrido un deterioro severo", explicó.
                                                </p>
                                                <br>
                                                <p>El reclamo no se centra únicamente en lo salarial. Fiandrino hizo hincapié en el desfinanciamiento general del sistema de salud. "No es solo nuestro salario, es el presupuesto de los hospitales que quedó congelado. No podemos tratar la salud pública como una variable de ajuste. Es el bienestar de todos los argentinos lo que está en juego"
                                                </p>
                                                <br>
                                                <p>A pesar de haber iniciado conversaciones con el Ministerio de Salud en julio, los avances fueron mínimos. "Nos prometieron un aumento salarial a través de un bono no remunerativo del 28,4%, que iba a ser incorporado al sueldo en diciembre, pero la resolución nunca se firmó", relató Fiandrino. Lo más grave, según ella, fue la improvisación con la que el Ministerio gestionó el conflicto. "Hace unos días, firmaron la resolución, y a las pocas horas la dieron de baja por falta de presupuesto. Es vergonzoso que un ministro firme algo sin tener los fondos garantizados".
                                                </p>
                                                <br>
                                                <p>Los residentes no solo enfrentan la precarización laboral, sino también la amenaza de despidos en otros hospitales nacionales, como el Posadas y el Bonaparte. Además, el gobierno propuso traspasar los hospitales nacionales a jurisdicciones provinciales, lo que según Fiandrino, significaría un desfinanciamiento aún mayor. "El Garrahan tiene un presupuesto equivalente al de una provincia. No podemos permitir que se reduzca su importancia y se diluya su función como hospital nacional de referencia", advirtió.
                                                </p>
                                                <br>
                                                <p>Finalmente, Fiandrino adelantó las próximas medidas: "La semana que viene realizaremos un paro de 48 horas, miércoles y jueves, y marcharemos en conjunto con la columna universitaria. Seguimos en lucha por la salud pública y por nuestros derechos como trabajadores de la salud".
                                                </p>
                                                <br>
                                                <p>Este conflicto expone la grave crisis de financiamiento que atraviesa el sistema de salud argentino, donde los trabajadores luchan por salarios dignos y recursos adecuados para garantizar la atención médica de millones de personas.
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc121')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LALI Y SU VIDEO CON REFERENCIAS A MILEI  </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 30/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Lali Espósito habló sobre su nueva canción "Fanático", destacando las referencias al presidente Javier Milei en su video. La cantante se mostró satisfecha con la recepción del público y llamó a los artistas a expresar sus mensajes en este contexto sociopolítico.</i>
                                        </p> 
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_lali.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Lali Espósito ha lanzado "Fanático", su nuevo sencillo, que rápidamente se volvió viral por las referencias al presidente Javier Milei y su gestión. En una reciente entrevista con el canal de streaming Luzu TV, la artista compartió que muchas de las alusiones en el video fueron intencionales, mientras que otras surgieron de la "inventiva popular". "Algunas (referencias) yo me enteré en Twitter. Muchas de las referencias son verdad y estuvieron ahí para que sean agarradas", expresó Lali, subrayando la interacción que ha tenido con sus seguidores a través de las redes sociales.
                                                </p>
                                                <br>
                                                <p>El video, que cuenta con más de dos millones de visualizaciones, fue dirigido por Lali y su primo Lautaro Espósito. En él, la artista realiza un casting entre varios "fanáticos", que representan diversas reacciones al fenómeno de la cultura pop. La producción incluye momentos de humor y crítica social, con guiños a la figura de Milei y a la situación actual del país.
                                                </p>
                                                <br>
                                                <p>En el contexto de la promoción de su nuevo álbum, que se espera para 2025, Lali reflexionó sobre la importancia de que los artistas utilicen su plataforma para transmitir mensajes significativos. "Creo que es un buen momento para no amedrentarse. Los artistas que tengan ganas, salgan a decir eso que tienen para decir", enfatizó en la misma entrevista, haciendo eco de la necesidad de resistencia en tiempos difíciles.
                                                </p>
                                                <br>
                                                <p>A lo largo de la letra de "Fanático", se pueden encontrar referencias directas a la actualidad política, como en el estribillo, que evoca una relación de poder y dependencia. Lali busca, de esta manera, que su música sea un canal para expresar las inquietudes de su generación y abordar temas que afectan a la sociedad.
                                                </p>
                                                <br>
                                                <p>En un contexto donde ha sido hostigada por el presidente y sus seguidores tras criticar su gestión, Lali se muestra firme en su postura. “Son tiempos de tanta data que es confuso: qué querés hacer, quién sos, qué tenés para decir. Rebelarse un poquito”, concluyó, reafirmando su compromiso con la cultura y la expresión artística en medio de un clima de incertidumbre.
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
        @elseif ($tituloSep == 'Sociedad-Noticia-Completa-soc122')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">AUMENTOS DE TARIFAS EN OCTUBRE: UN GOLPE AL BOLSILLO DE LAS FAMILIAS ARGENTINAS</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El gobierno de Javier Milei implementa subas de entre el 4% y el 16% en servicios esenciales, lo que agrava la situación económica y el poder adquisitivo de los hogares.</i>
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
                                                <p>En octubre, el gobierno de Javier Milei ha decidido implementar aumentos de tarifas que oscilan entre el 4% y el 16% en servicios esenciales, como colegios, medicina prepaga, agua, transporte y alquileres. Este es el segundo mes consecutivo de incrementos, lo que agrava la situación económica de las familias argentinas, que ya se enfrentan a un contexto de alta inflación y reducción del poder adquisitivo.
                                                </p>
                                                <br>
                                                <p>Entre los aumentos más significativos, destaca el del boleto del subte, que aumentará un 16,46%, mientras que las tarifas de agua ya han subido un 4,9%. Estos ajustes tarifarios no solo impactan el presupuesto familiar, sino que también reflejan una preocupante transferencia de ingresos desde los sectores medios hacia las empresas, que han recuperado rentabilidad a través de estas medidas.
                                                </p>
                                                <br>
                                                <p>La presión sobre el poder adquisitivo es alarmante. Según el Instituto Interdisciplinario de Economía Política (IIPE), un tipo de familia necesita más de 140 mil pesos para cubrir los costos fijos mensuales. Esta cifra resalta la magnitud de los desafíos económicos que enfrentan muchos hogares, que luchan por adaptarse a un escenario cada vez más complicado.
                                                </p>
                                                <br>
                                                <p>La incertidumbre sobre futuros aumentos y la falta de medidas concretas por parte del gobierno para frenar esta tendencia generan preocupación entre la población. Los hogares, a medida que intentan ajustar sus gastos a estos nuevos costos, se encuentran en una situación cada vez más precaria. Esto ha llevado a intensificar la discusión sobre la sostenibilidad de las políticas económicas actuales, lo que podría desencadenar un creciente descontento social si no se abordan las necesidades de las familias.
                                                </p>
                                                <br>
                                                <p>Con un panorama tan adverso, la urgencia por un cambio en las políticas económicas se hace cada vez más evidente. Las decisiones del gobierno en los próximos meses serán cruciales para determinar si las familias argentinas podrán encontrar alivio ante la creciente presión económica o si, por el contrario, se verán obligadas a seguir lidiando con aumentos que parecen no tener fin.
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
                                            <a href="">MASIVA MARCHA FEDERAL UNIVERSITARIA CONTRA EL VETO DE MILEI</a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 03/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Más de un millón de personas se movilizaron en rechazo a la decisión del Presidente Javier Milei de vetar la Ley de Financiamiento Universitario, consolidando una fuerte oposición en defensa de la educación pública.
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
                                                <p>La Segunda Marcha Federal Universitaria congregó a una multitud en las principales ciudades del país, con una asistencia que los organizadores estimaron en 1,5 millones de personas. En Buenos Aires, el epicentro de la protesta fue frente al Congreso, donde se dieron cita estudiantes, docentes, sindicatos, organizaciones sociales y referentes de derechos humanos, todos unificados en la defensa del presupuesto universitario. “No queremos que nos arrebaten nuestros sueños. Nuestro futuro no les pertenece”, afirmó Piera Fernández de Piccoli, presidenta de la Federación Universitaria Argentina (FUA), desde el escenario.
                                                </p>
                                                <br>
                                                <p>Los convocados alzaron sus voces en un contexto de creciente preocupación por el ajuste que el gobierno de Milei aplica a la educación pública. La marcha, considerada más masiva que la anterior realizada en abril, incluyó expresiones de apoyo en ciudades como Córdoba, Mendoza, Rosario, Tucumán y Ushuaia. “Ojalá el Gobierno tome nota y podamos planificar una solución”, dijo Victor Moriñigo, presidente del Consejo Interuniversitario Nacional.
                                                </p>
                                                <br>
                                                <p>El Presidente respondió a la marcha desde sus redes sociales, sosteniendo que “la universidad pública no está en peligro” y cuestionando la legitimidad de los manifestantes. A pesar de las tácticas del gobierno para limitar la movilización, como la detención de micros y el cierre de calles, la manifestación fue contundente y su mensaje claro.
                                                </p>
                                                <br>
                                                <p>La comunidad educativa denunció la crítica situación actual: “La pérdida de quienes trabajamos en las universidades públicas es de una gravedad inusitada; muchos docentes y no docentes perciben salarios por debajo de la línea de pobreza”, expusieron en un documento leído en el acto.
                                                </p>
                                                <br>
                                                <p>Entre los oradores, la expresidenta Cristina Fernández de Kirchner destacó la importancia de la educación pública para la movilidad social. También se hicieron presentes líderes opositores, desde Horacio Rodríguez Larreta hasta Sergio Massa, quienes coincidieron en la necesidad de mantener y fortalecer el financiamiento de las universidades.
                                                </p>
                                                <br>
                                                <p>La movilización no solo reunió a sectores políticos, sino que también atrajo a movimientos sociales, sindicatos y organismos de derechos humanos, evidenciando un amplio respaldo a la causa. “La universidad es de todos, y nuestros hijos ocupan las aulas de esas universidades públicas, tenemos que defenderlas”, declaró Norma Morales de la UTEP.
                                                <br> 
                                                <p>El acto concluyó con una ovación y la interpretación de "Fanático" de Lali Espósito, cerrando una jornada que reafirmó el compromiso de la sociedad con la educación pública y la justicia social.
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
                                        <p><i>La decisión del presidente se tomó horas después de la masiva marcha en defensa del financiamiento universitario, desatando la indignación de la comunidad educativa y la oposición política.
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
                                                <p>En una muestra clara de su desdén por la educación pública, el presidente Javier Milei firmó el veto a la Ley de Financiamiento Universitario horas después de la Segunda Marcha Federal Universitaria, que reunió a más de un millón de personas en todo el país. Desde Olivos, Milei se dedicó a descalificar a la oposición en redes sociales, acusándola de ser "populistas demagógicos" y de intentar desestabilizar su gobierno. La movilización, que concentró no solo a estudiantes y docentes, sino también a sindicatos y organizaciones sociales, fue calificada por el Gobierno como un mero acto político, tratando de restarle legitimidad a un reclamo que, según los organizadores, es vital para el futuro de la educación en Argentina.
                                                </p>
                                                <br>
                                                <p>En un comunicado emitido desde Casa Rosada, el Gobierno intentó dividir el apoyo de los distintos sectores políticos a la movilización, argumentando que la presencia de figuras como Cristina Kirchner, Sergio Massa y Horacio Rodríguez Larreta en la protesta formaba parte de un “nuevo frente de izquierda populista” que busca obstaculizar el plan económico del presidente. "El problema no es con las universidades, sino con los legisladores que hacen populismo demagógico", afirmaron, tratando de desviar la atención del verdadero asunto: la crítica situación de las instituciones educativas ante el recorte presupuestario.
                                                </p>
                                                <br>
                                                <p>Pese a los esfuerzos del Gobierno por deslegitimar la marcha, la realidad es que La Libertad Avanza carece de los votos necesarios en el Congreso para respaldar el veto que Milei firmó. Las universidades habían solicitado un presupuesto de 7,2 billones de pesos, mientras que el Gobierno solo asigna 3,8 billones, lo que revela una clara intención de desfinanciar la educación pública. Esto plantea serias dudas sobre la viabilidad del sistema universitario en el país, donde muchos docentes viven por debajo de la línea de pobreza.
                                                <br>
                                                <p>La comunidad educativa denunció la crítica situación actual: “La pérdida de quienes trabajamos en las universidades públicas es de una gravedad inusitada; muchos docentes y no docentes perciben salarios por debajo de la línea de pobreza”, expusieron en un documento leído en el acto.
                                                </p>
                                                <br>
                                                <p>La ministra de Seguridad, Patricia Bullrich, intensificó la narrativa de conspiración al insinuar que la movilización era un pretexto para preparar un “golpe” contra el Gobierno, desestimando la importancia de las demandas educativas. En respuesta a la creciente presión social, Milei utilizó su cuenta de Twitter para reafirmar su postura: "Si para enfrentar a uno solo tenés que juntarte con un montón de impresentables prostituyendo una causa noble, eso es una mayúscula muestra de debilidad y cobardía".
                                                </p>
                                                <br>
                                                <p>La decisión de Milei de firmar el veto a la ley de financiamiento universitario refleja una clara estrategia de confrontación con la comunidad educativa y los sectores políticos que apoyan la educación pública. Mientras la tensión en el Congreso crece y se intensifican las negociaciones por los votos, la lucha por una educación pública y de calidad se convierte en un tema central en el debate político argentino.
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
                                        <p><i>La carrera "Amo Mis Mamas" se llevará a cabo en La Plata para concientizar sobre la prevención del cáncer de mama, coincidiendo con su día internacional.
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
                                                <p>El próximo sábado 19 de octubre, el Estadio Único Diego Armando Maradona de La Plata será el escenario de la segunda edición de la carrera "Amo Mis Mamas", organizada por el Ministerio de Mujeres y Diversidad de la provincia de Buenos Aires. El evento, que comenzará a las 14 hs., tiene como objetivo visibilizar la importancia de la prevención y detección temprana del cáncer de mama, coincidiendo con el Día Internacional de la Lucha contra esta enfermedad.
                                                </p>
                                                <br>
                                                <p>La carrera se llevará a cabo bajo la consigna “Cada Paso Cuenta” y contará con la participación de diversas organizaciones locales que apoyan la causa, entre ellas la Secretaría de Mujeres y Diversidad del municipio de La Plata, la Dirección de Mujer, Género y Diversidad de Berisso y el Ministerio de Salud. Las actividades incluirán acreditaciones, entrega de kits, una charla técnica, y una feria de artesanas y artesanos, así como stands institucionales relacionados con la salud.
                                                </p>
                                                <br>
                                                <p>Los participantes podrán inscribirse en dos modalidades: un recorrido de 2 km participativos y otro de 8 km competitivos, ambos gratuitos y abiertos a la comunidad. La carrera dará inicio a las 19 hs., con la ruta de 2 km llegando hasta el Parque Alberti y la de 8 km hasta Plaza Moreno. Los corredores del trayecto más largo contarán con un chip para rastrear su ubicación.
                                                </p>
                                                <br>
                                                <p>Esta iniciativa es parte de las acciones del Ministerio de Mujeres y Diversidad, que desde 2024 promueve la campaña “Si cuidas, cuidate. Prevenir es una tarea compartida”. La propuesta busca generar conciencia sobre la salud integral de mujeres y diversidades, destacando la importancia de la detección temprana del cáncer.
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
                                        <p><i>El PJ enfrenta un momento crucial en su historia interna, donde se define la posible candidatura de Cristina Fernández de Kirchner a la presidencia del partido.
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
                                                <p>El operativo clamor por "Cristina presidenta" resuena nuevamente, esta vez en la búsqueda de la conducción del PJ. Ante un peronismo dividido por la disputa entre Máximo Kirchner y Axel Kicillof, la expresidenta se muestra dispuesta a asumir un rol que nunca había considerado, a la espera de que se reordenen las piezas del tablero político. Ricardo Quintela, gobernador de La Rioja y hasta hace poco único candidato a presidir el partido, desafió las expectativas al reafirmar su intención de competir: “El peronismo tiene que debatir, y si tiene que competir, tiene que competir”.
                                                </p>
                                                <br>
                                                <p>Mientras Quintela recorre el país buscando apoyos, CFK ha estado proponiendo alternativas desde el Instituto Patria, aunque ninguna ha tenido éxito hasta ahora. La figura de Quintela no era bien vista por algunos sectores, que argumentaban que el presidente del PJ debía ser alguien que no fuera un gobernador, debido a la necesidad de ejercer una oposición activa.
                                                </p>
                                                <br>
                                                <p>La presión para que Cristina acepte liderar el partido ha aumentado, especialmente tras la crisis social provocada por las políticas del actual gobierno. Gildo Insfrán, gobernador de Formosa y aliado clave, ha insistido en que la expresidenta debería ser la candidata. Recientemente, CFK mantuvo una reunión con Insfrán y otros senadores en la que se discutió su posible candidatura y se destacó su disposición para liderar.
                                                </p>
                                                <br>
                                                <p>La fragmentación del peronismo actual hace que la unidad sea esencial, y muchos consideran que la única figura que puede aglutinar al partido es CFK. Sin embargo, Ricardo Quintela, quien continúa recibiendo respaldo, ha dejado claro que no se retirará. “El que gana conduce, el que pierde acompaña”, afirmó desde Neuquén, donde se encontraba en campaña.
                                                </p>
                                                <br>
                                                <p>En un contexto donde el trasvasamiento generacional parece estancado, la pregunta que queda es si Cristina tomará el mando o si el partido encontrará una manera de unirse en torno a un candidato que represente a todos los sectores. La decisión debe tomarse pronto, ya que las elecciones internas están programadas para el 17 de noviembre.
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
                                        <p><i>El cierre del Hospital Nacional de Salud Mental Laura Bonaparte genera alarma entre los trabajadores y organizaciones de derechos humanos. El Gobierno nacional anunció la reestructuración del centro, que atiende a miles de personas con problemas de salud mental.
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
                                                <p>Los trabajadores del Hospital Nacional de Salud Mental Laura Bonaparte se encuentran en estado de alerta tras el anuncio del gobierno nacional de cerrar los servicios de internación y guardia. Esta decisión afectará a más de 25,000 pacientes atendidos anualmente y pone en riesgo la continuidad de un equipo de 600 trabajadores que luchan por brindar atención en un contexto de ajuste y precariedad laboral.
                                                </p>
                                                <br>
                                                <p>La noticia fue comunicada de manera confusa y repentina. Según Leonardo Fernández Camacho, delegado general de ATE, “no sabíamos nada hasta hoy, aunque nos han dicho que el Gobierno ya estaría firmando el decreto”. La respuesta oficial del Ministerio de Salud argumenta que se busca “priorizar la asignación de recursos en los pacientes que lo necesitan”, sin embargo, los trabajadores destacan que esta medida representa un abandono sistemático de la salud mental en el país.
                                                </p>
                                                <br>
                                                <p>An Millet, trabajador social del hospital, enfatizó la importancia de este centro como un lugar de cuidado integral. “No se trata solo del cierre del Bonaparte, sino de una política que atenta contra el bienestar de la población”, advirtió. La atención a personas en situación de vulnerabilidad y los programas de capacitación a nivel nacional corren el riesgo de desaparecer.
                                                <br>
                                                <p>Organizaciones de derechos humanos también expresaron su repudio ante esta decisión. En un comunicado, denuncian que el cierre del hospital es un ataque directo a los derechos humanos y a la salud pública. “En tiempos en que la atención de la salud mental es prioritaria, esta medida es un atropello inaceptable”, afirmaron.
                                                <br>
                                                <p>La comunidad y los trabajadores se movilizan para exigir la continuidad del hospital, que, desde su fundación, ha sido un pilar fundamental en la atención de la salud mental en el país. En un momento donde el sufrimiento psíquico se ha incrementado, es imperativo que el Estado garantice la atención y los recursos necesarios para la salud mental de su población.
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
                                            <a href="">CÁMARA DE DIPUTADOS APRUEBA VETO A LEY DE FINANCIAMIENTO UNIVERSITARIO
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Cámara de Diputados respaldó el veto presidencial a la Ley de Financiamiento Universitario, desoyendo la movilización social en defensa de la educación pública.

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
                                                <p>El veto a la Ley de Financiamiento Universitario fue convalidado en la Cámara de Diputados con 160 votos afirmativos, 84 negativos y 5 abstenciones. Este texto, que había sido aprobado por ambas Cámaras del Congreso y luego vetado por el Presidente, buscaba ampliar el financiamiento de las universidades nacionales para garantizar su funcionamiento y mejorar los salarios de docentes y no docentes. La decisión del gobierno de Javier Milei pone de relieve una política de ajuste que prioriza el recorte de recursos esenciales, en lugar de fortalecer la educación pública.
                                                </p>
                                                <br>
                                                <p>En paralelo al debate, organizaciones estudiantiles y sindicatos se concentraron frente al Congreso para expresar su rechazo al veto. En el recinto, los votos a favor de la sanción de la ley se enfrentaron a la decisión del Ejecutivo, cuya intención de judicializar la ley en caso de ser rechazada evidencia su postura contra el fortalecimiento de la educación pública. La Ley de Financiamiento Universitario proponía destinar el 85% de los recursos del presupuesto a gastos salariales y el 15% a gastos generales y de funcionamiento. Con este veto, el futuro de las instituciones educativas se encuentra en un panorama incierto, generando un clima de descontento en la comunidad académica que exige recursos suficientes para garantizar la calidad educativa.</p>
                                                <br>
                                                <p>La decisión de la Cámara de Diputados, alineada con la agenda neoliberal del gobierno, resalta la necesidad de una respuesta contundente por parte de los movimientos sociales y políticos que defienden la educación como pilar de una sociedad justa. La lucha por la Ley de Financiamiento Universitario no solo representa un desafío al ajuste de Javier Milei, sino también una defensa del futuro educativo de las próximas generaciones.
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
                                            <a href="">GRABOIS DENUNCIA VIOLENCIA INSTITUCIONAL EN ALLANAMIENTO A DIRIGENTA SOCIAL
                                            </a>
                                            {{-- <p class="font-light  text-lef text-gray-500">Por Emanuel Corrado</p> --}}
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Juan Grabois apuntó contra el gobierno de Javier Milei por el violento allanamiento a la casa de Fernanda Miño, ex titular del FISU, denunciando un avance de la represión estatal.
                                        </i>
                                        </p> 
                                        <br>
                                        {{-- <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_denunciagrabo.svg"
                                                alt="">
                                        </figure> --}}
                                        <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/enpgkjq3cF0?si=D0Ez_XHrRdLLde5E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Juan Grabois condenó el allanamiento realizado en la casa de Fernanda Miño, ex titular del Fondo de Integración Socio Urbana (FISU), acusando al gobierno de Javier Milei de cruzar una “línea roja” en su ataque a las organizaciones sociales. Miño fue víctima de un operativo policial en Villa La Cava, San Isidro, por un presunto robo de moto, que el dirigente del Movimiento de Trabajadores Excluidos (MTE) tildó de irregular y desproporcionado. Grabois, que se trasladó al lugar inmediatamente después del operativo, criticó la falta de atención a la grave problemática del narcotráfico en el barrio, que se ha convertido en un foco de violencia y muertes entre los jóvenes.
                                                </p>
                                                <br>
                                                <p>El ex candidato presidencial inicialmente responsabilizó a la Policía Federal, aunque luego aclaró que el operativo fue llevado a cabo por la Policía Bonaerense. “La responsabilidad por la golpiza a Fernanda y su hija es de la Bonaerense”, afirmó Grabois, mientras denunciaba cómo las fuerzas de seguridad habían aterrorizado a la familia durante el allanamiento. En un video compartido en redes sociales, el dirigente enfatizó que “nunca encontraron nada” en las acciones anteriores contra Miño y criticó el hecho de que un allanamiento nocturno por un supuesto robo de moto tuviera lugar mientras la dirigente regresaba de una actividad política.</p>
                                                <br>
                                                <p>Las denuncias de Grabois reflejan un creciente descontento entre los sectores sociales organizados, que ven en estas acciones un intento de silenciar las voces críticas al gobierno de Milei. "Son cobardes siempre con los de arriba y muy fuertes con los de abajo", sentenció, advirtiendo que este tipo de acciones no quedarán impunes. La situación ha encendido alarmas sobre la violencia institucional, llevando a muchos a cuestionar la efectividad de las políticas de seguridad que, según críticos, priorizan la represión sobre la protección de los derechos humanos.
                                                </p>
                                                <br>
                                                <p>Con un claro mensaje de resistencia, Grabois finalizó afirmando que "esto no queda así" y prometió seguir luchando contra las injusticias que afectan a los sectores más vulnerables, destacando la necesidad de una respuesta firme ante la creciente ola de represión.</p>
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
                                        <p><i>La inflación de septiembre mostró un aumento del 3,5% y acumuló un preocupante 101,6% en lo que va del año, en un contexto económico cada vez más adverso para las familias trabajadoras.
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
                                                <p>El Índice de Precios al Consumidor (IPC) de septiembre de 2024 registró un incremento interanual del 209%. El rubro que más aumentó fue Vivienda, agua, electricidad, gas y otros combustibles, con una suba del 7,3%. Esta alza estuvo impulsada por las actualizaciones en tarifas de servicios públicos y los costos de alquileres, que continúan afectando fuertemente a los sectores populares. La inflación golpea especialmente en las regiones de GBA, Noroeste y Cuyo, donde los servicios básicos impactaron de manera más profunda.
                                                </p>
                                                <br>
                                                <p>En contraste, en regiones como Pampeana, Noreste y Patagonia, el mayor aumento se dio en Alimentos y bebidas no alcohólicas (2,3%), con subas importantes en carnes, pan, cereales y productos lácteos. Esto profundiza aún más las dificultades para quienes enfrentan dificultades para llenar la canasta básica en un contexto de ajuste brutal promovido por el gobierno de Javier Milei, que insiste en políticas que empobrecen a los sectores más vulnerables.</p>
                                                <br>
                                                <p>La segunda mayor suba del mes se registró en Prendas de vestir y calzado (6,0%), atribuido al cambio de temporada. Mientras tanto, las menores variaciones se vieron en Bebidas alcohólicas y tabaco (2,2%) y Recreación y cultura (2,1%).
                                                </p>
                                                <br>
                                                <p>A nivel de categorías, los precios regulados subieron un 4,5%, principalmente por los aumentos en tarifas de servicios públicos, reflejando una vez más el peso de las políticas de ajuste en los sectores medios y bajos. El núcleo del IPC mostró una suba del 3,3%, mientras que los productos estacionales subieron un 2,9%.</p>
                                                <br>
                                                <p>La situación es cada vez más crítica para la mayoría de la población, que debe enfrentar un aumento constante del costo de vida mientras los salarios permanecen estancados. Las cifras del INDEC reflejan no solo el fracaso de las políticas neoliberales impulsadas por el gobierno, sino también la urgencia de generar un cambio de rumbo que priorice la protección social y el bienestar de las mayorías.</p>
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
                                        <p><i>En el acto para rebautizar el CCK, el presidente lanza duras críticas a la educación pública.
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
                                                <p>En un controvertido discurso durante el acto de rebautizo del Centro Cultural Kirchner como Palacio de la Libertad Domingo Faustino Sarmiento, el presidente Javier Milei aprovechó la ocasión para criticar nuevamente a las universidades públicas. Refiriéndose a la figura de Sarmiento, conocido como el "padre del aula" en Argentina, el mandatario sostuvo que “la universidad pública nacional hoy no le sirve a nadie más que a los hijos de la clase alta y los ricos y la clase media alta”, reiterando su intención de auditar las casas de altos estudios.
                                                </p>
                                                <br>
                                                <p>A pesar de que la tarea de auditar a las universidades no corresponde al Poder Ejecutivo, Milei insistió en que el sistema actual es un "subsidio de los pobres hacia los ricos", exacerbando la ya tensa relación con el ámbito académico. En su crítica, señaló que “en un país donde la mayoría de los niños son pobres y no saben leer, escribir ni realizar una operación matemática básica, el mito de la universidad gratuita se convierte en una farsa”.
                                                </p>
                                                <br>
                                                <p>El presidente también intentó vincular su discurso con la figura de Sarmiento, afirmando que, si los defensores de las universidades públicas verdaderamente apoyaran la movilidad social, "tomarían el ejemplo de Sarmiento y defenderían una educación inicial de calidad para todos". Según Milei, el sistema universitario ha dejado de ser una herramienta de ascenso social y se ha transformado en un "obstáculo" para el mismo.
                                                </p>
                                                <br>
                                                <p>Milei volvió a poner en escena la propuesta de auditorías, sosteniendo que las universidades están llenas de "filtraciones de dinero" que no llegan ni a los alumnos ni a los profesores. Rechazó las críticas que señalan que su gobierno pretende desmantelar la universidad pública, alegando que su único objetivo es "terminar con la corrupción".
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
                                        <p><i>Rocco Carbone analiza el auge del fascismo en Argentina y llama a la unidad de las fuerzas progresistas para construir un futuro emancipador.
                                        </i>
                                        </p> 
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/soc/soc_la_inidad_eman.svg"
                                                alt="">
                                        </figure>
                                        {{-- <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/enpgkjq3cF0?si=D0Ez_XHrRdLLde5E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En un momento de creciente polarización política en Argentina, el filósofo y analista político Rocco Carbone expone su preocupación sobre el ascenso del fascismo en el país. En una reciente entrevista, Carbone sostiene que el gobierno de Javier Milei representa una amenaza real para las conquistas democráticas y los derechos humanos, alineando su ideología con la de movimientos de extrema derecha que han proliferado en el continente.
                                                </p>
                                                <br>
                                                <p>Carbone destaca la importancia de no caer en la trampa del sectarismo y la fragmentación entre las fuerzas progresistas. "Debemos evitar los fraccionalismos en los partidos y movimientos sociales. Es esencial construir un gran campo de resistencia y afirmación que reúna a las tradiciones emancipadoras del peronismo y de la izquierda en Argentina", señala. Para él, esta unidad no solo es estratégica, sino necesaria para enfrentar la opresión que representa el actual gobierno.
                                                </p>
                                                <br>
                                                <p>El académico también hace referencia a Clara Zetkin, quien en la década de 1920 propuso la confluencia de fuerzas emancipadoras ante el auge del fascismo en Europa. Carbone sugiere que, al igual que Zetkin, hoy debemos articular las luchas de distintas tradiciones políticas para formar un bloque sólido que enfrente los desafíos actuales. "Debemos buscar una síntesis entre el peronismo y las diversas corrientes de izquierda que existen en el país", afirma.
                                                </p>
                                                <br>
                                                <p>A lo largo de la entrevista, Carbone enfatiza que la historia no ha terminado y que la resistencia es una parte integral de la lucha por la emancipación. “Los tiempos difíciles son oportunidades para reafirmar nuestras convicciones y avanzar hacia un futuro más justo”, concluye.
                                                </p>
                                                <br>
                                                <p>La visión de Rocco Carbone no solo es un llamado a la acción, sino también una invitación a la reflexión sobre el papel de cada militante y ciudadano en la construcción de una sociedad más equitativa, donde los derechos de todos sean respetados y promovidos.
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
