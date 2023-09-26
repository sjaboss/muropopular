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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol2')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SALUD MENTAL: LA PROVINCIA FORMALIZÓ UN PROGRAMA DESTINADO
                                                A JÓVENES DE ESCUELAS SECUNDARIAS </a>
                                        </h2>
                                        <p>Se trata de una propuesta articulada entre Salud y Educación que propicia
                                            espacios de escucha y acompañamiento. Ya se implementó en más de 410
                                            establecimientos.</p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/pol/pol_salud1.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">



                                                <p>A través de un trabajo conjunto entre el ministerio de Salud y la
                                                    Dirección General de Cultura y Educación, la Provincia implementa
                                                    desde hace un año talleres de salud mental en escuelas secundarias.
                                                    De esta manera, a través del programa “La salud mental es entre
                                                    todas y todos”, creado ahora por Resolución Ministerial, se abordan
                                                    en el aula temáticas vinculadas a la salud mental de las </p>
                                                <br>


                                                <p>La iniciativa funciona bajo la órbita de la Subsecretaría de Salud
                                                    Mental, Consumos Problemáticos y Violencias en el ámbito de la Salud
                                                    Pública y propone espacios de escucha y acompañamiento que son
                                                    coordinados por equipos interdisciplinarios de salud mental
                                                    incorporados especialmente para esta tarea. </p>
                                                <br>
                                                <p>El Programa surge tras la preocupación por los efectos que la
                                                    pandemia causó en la salud y salud mental de las y los jóvenes
                                                    bonaerenses. En ese contexto, y ante la necesidad de cuidar a esta
                                                    población, el gobernador Axel Kicillof propuso el desarrollo de
                                                    políticas destinadas a acompañar a las juventudes en los lugares
                                                    donde ellos y ellas habitan. </p>
                                                <br>
                                                <p>“Es un Programa intersectorial que tuvo su inicio en un momento muy
                                                    particular, donde al regresar a las escuelas nos encontramos, en el
                                                    trabajo conjunto con la cartera de Educación, variedad de
                                                    situaciones y experiencias traumáticas en las juventudes”, explicó
                                                    la subsecretaria, Julieta Calmels, quien destacó que “en la pandemia
                                                    aprendimos el cuidado colectivo”. </p>
                                                <br>
                                                <p>Agregó que, en ese contexto, “surge la necesidad de las juventudes de
                                                    ser escuchadas y encontrar espacios de confianza para poder hablar
                                                    de los malestares, pero también espacios donde construir las formas
                                                    de cuidado y acompañamiento”. </p>
                                                <br>
                                                <p>Las autoridades provinciales señalaron que la estrategia de trabajo
                                                    con escuelas se enmarca en la perspectiva de cuidado y atención con
                                                    base en las comunidades y precisaron que “si durante los talleres
                                                    surgen necesidades de atención urgente, se hace una derivación
                                                    cuidada a través del ministerio de Salud”. </p>
                                                <br>
                                                <p>El programa “La salud mental es entre todas y todos”, de articulación
                                                    interministerial, desarrolla acciones en consonancia con el programa
                                                    “Infancias y Juventudes” de la Subsecretaría, para el cuidado y
                                                    asistencia en salud mental de niños, niñas, adolescentes y jóvenes
                                                    de toda la provincia de Buenos Aires, en cumplimiento con la Ley
                                                    N°26.657 de "Derecho a la Protección de la Salud Mental”. </p>
                                                <figure>
                                                    <img class=" w-full object-cover" src="../img/pol/pol_salud2.svg"
                                                        alt="">

                                                </figure>
                                                <br>
                                                <p> <strong> Talleres <br></strong>
                                                    <br>
                                                    Desde la coordinación del Programa detallaron la dinámica y los
                                                    objetivos de la propuesta: “Las juventudes demandan ser escuchadas
                                                    por las y los adultos de manera cuidada y responsable, y en ese
                                                    sentido el taller se presenta como un dispositivo de escucha atenta
                                                    y afectuosa para la promoción de la salud mental y prevención de
                                                    diversas problemáticas que afectan a esta población”.
                                                </p>
                                                <br>
                                                <p>Los equipos de profesionales que llevan adelante la propuesta, y que
                                                    se suman al conjunto de los 160 espacios de atención en salud mental
                                                    provinciales (CPA), propician encuentros centrados en la escucha
                                                    situada, el diálogo, la sensibilización y el intercambio, siempre
                                                    desde un acompañamiento sin prejuicios ni estigmas. “Son espacios
                                                    grupales, de confianza, que permiten colectivizar el malestar ya que
                                                    su dinámica permite que hablen libremente de lo que sienten”,
                                                    señalaron los equipos de talleristas. </p>
                                                <br>

                                                <p>El desarrollo de este Programa en las escuelas secundarias
                                                    bonaerenses favoreció la construcción de vínculos sanos, el
                                                    fortalecimiento de la grupalidad y el acceso a la salud integral en
                                                    espacios por fuera de los centros sanitarios. Se implementó hasta el
                                                    momento en 413 establecimientos, alcanzando un total de 28.694
                                                    alumnos y alumnas. Se espera que en lo que resta del año la
                                                    propuesta llegue a 601 escuelas, correspondientes a 110 municipios
                                                    de la Provincia. </p>
                                                <br>

                                                <p>"Lo que proyectamos para todo el 2023 es llegar a 44 mil jóvenes,
                                                    habiendo realizado más de 5.200 encuentros. De esta manera, la
                                                    propuesta alcanzará a 60 mil estudiantes en total desde sus
                                                    inicios".</p>
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol3')
            <section>
                <ul>
                    <li class=" bg-white rounded-lg shadow "> {{-- primera --}}
                        <article>
                            <figure>
                                <img class=" w-full object-cover" src="../img/G-2.svg" alt="">
                            </figure>
                            <div class="py-4 px-4 justify-between items-center">
                                <h2 class="text-xl font-serif  font-bold pb-6">
                                    <a href="">Hugo Yasky “ Es mentira que con la inflación pierden todos,
                                        algunos
                                        ganan,
                                        y mucho" </a>
                                </h2>
                                <div
                                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                    <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p>En el Hotel ATE-UNL de la ciudad de Santa Fé se realizó el Plenario Nacional
                                            de
                                            la
                                            CTA, con una convocatoria multitudinaria de compañeras y compañeros de la
                                            Central de
                                            todo el país.</p>
                                        <p>Compartimos las palabras del Secretario General de la CTA y diputado
                                            nacional,
                                            Hugo
                                            Yasky, durante la conferencia de prensa previa al plenario, de la que
                                            participaron
                                            también los Secretarios Adjuntos de la CTA, Daniel Catalano y Edgardo Llano,
                                            José
                                            Testoni, Secretario General de CTA Santa Fe, Jorge Hoffmann, Secretario
                                            General
                                            de
                                            ATE-Santa Fe, Sonia Alesso, Secretaria General de CTERA: “Hoy comienza una
                                            serie
                                            de
                                            plenarios nacionales que se van a hacer en las distintas regiones del país.
                                            Empezamos en Santa Fe, a orillas del Paraná, un debate para definir un plan
                                            de
                                            acción nacional en un momento en que la Argentina ha entrado en un año
                                            electoral
                                            y
                                            que va a ser trascendente para los trabajadores”.</p>
                                        <p>Yasky señaló ante los medios de prensa, que “el cierre del Consejo del
                                            Salario no
                                            estuvo a la altura de lo que hubiésemos deseado, que era recuperar algunos
                                            puntos
                                            más del SMVyM que hoy está en una suerte de piso histórico, porque
                                            lamentablemente
                                            perdió 25 puntos durante los años de macrismo y otros 20 aproximadamente,
                                            durante la
                                            pandemia”, Al mismo tiempo, destacó que “se incorporó nuestra propuesta de
                                            que
                                            la
                                            revisión sea dentro de tres meses.”</p>
                                        <p>El Diputado Nacional anticipó: “Vamos a discutir las acciones gremiales que
                                            impulsaremos en todo el país, para que los salarios mantengan, por lo menos,
                                            algunos
                                            puntos por encima de la inflación. Ese es el objetivo”. Otro eje del debate
                                            que
                                            anunció Yasky, “lo va a motorizar el compañero Claudio Marín, secretario
                                            gremial
                                            de
                                            CTA y titular de Foetra, en torno al tema de la incidencia en el sector
                                            productivo
                                            en la nueva reconfiguración del trabajo a partir de este fenómeno que es la
                                            Inteligencia Artificial”.</p>
                                        <p>Ante la consulta de los medios presentes Yasky afirmó que: “la inflación es
                                            el
                                            principal flagelo que sufren los trabajadores. Cuando dicen que con la
                                            inflación
                                            pierden todos, es mentira. Hay sectores que ganan y mucho”. Y agregó, “el
                                            acuerdo
                                            con el FMI es inflacionario porque exige tarifas y tasas de interés que
                                            llevan
                                            los
                                            precios hacia arriba. Por eso, en forma paralela y complementaria a las
                                            paritarias
                                            reclamamos una suma fija porque los efectos económicos actuales lo exigen.”
                                        </p>
                                        <p>Sobre el escenario político en un año electoral, el representante gremial
                                            consideró
                                            que, “sin unidad del campo popular tenemos un panorama negro, pero debe ser
                                            una
                                            unidad con contenido. Tenemos que decir qué vamos a hacer con FMI, cómo
                                            vamos a
                                            mantener la soberanía sobre los recursos naturales y cómo distribuir con
                                            justicia
                                            los ingresos. Para todo esto la mejor dirigente del peronismo es Cristina.”
                                        </p>

                                    </div>


                                </div>
                        </article>
                    </li>
                </ul>
            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol4')
            <section>
                <ul>
                    <li class=" bg-white rounded-lg shadow "> {{-- primera --}}
                        <article>
                            <figure>
                                <img class=" w-full object-cover" src="../img/G-1.svg" alt="">
                            </figure>
                            <div class="py-4 px-4 justify-between items-center">
                                <h2 class="text-xl font-serif  font-bold pb-6">
                                    <a href="">La FeTIA participará de la Séptima Marcha por la Soberanía a Lago
                                        Escondido </a>
                                </h2>
                                <div
                                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                    <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p>WASIEJKO: “NO VAMOS A TOLERAR QUE UNOS POCOS SE APROPIEN DE LOS RECURSOS DE
                                            LAS Y
                                            LOS
                                            ARGENTINOS”</p>
                                        <p>Este jueves integrantes de la Federación de Trabajadores de la Industria,
                                            Energía,
                                            Servicios y Afines (FeTIA-CTA) que conduce Pedro Wasiejko, se reunieron en
                                            la
                                            CTA de
                                            los Trabajadores y Trabajadoras con Julio Urien para ultimar detalles de lo
                                            que
                                            será
                                            la participación de esta entidad en la Séptima Marcha por la Soberanía a
                                            Lago
                                            Escondido, que se realizará entre el 26 de enero y el 14 de febrero. Esta
                                            movilización es organizada por FIPCA y participan diversas organizaciones
                                            sociales,
                                            sindicales y políticas en defensa del territorio, los recursos y los
                                            derechos de
                                            las
                                            y los argentinos. En el encuentro estuvieron presentes Edgardo Depetri,
                                            titular
                                            del
                                            Frente Transversal y secretario de Asistencia Social en la Fetia y Rubén
                                            Ciuró,
                                            secretario de Derechos Humanos de la FeTIA, entre otros y otras.</p>
                                        <p>En el encuentro Julio Urien detalló que “a partir de este viernes habrán
                                            compañeras y
                                            compañeros de distintos puntos del país que ya están en zona, de distintas
                                            organizaciones, tanto de la CTA de las y los Trabajadores, de la CTA
                                            Autónoma,
                                            de la
                                            Fetia, el padre Paco de Cura en Opción por los Pobres, entre otras muchas
                                            agrupaciones. Este viernes habrá una conferencia de prensa en Bariloche, el
                                            sábado
                                            por la mañana va a entrar el primer contingente y a partir del lunes
                                            empezamos a
                                            concentrar para tratar de ingresar por el camino de Tacuifí. Los dos caminos
                                            están
                                            bloqueados por la gente que responde a Joe Lewis”. Y agregó: “Ellos no
                                            respetan
                                            las
                                            leyes, son el poder. Ahora nosotros con movilizaciones vamos a demostrar que
                                            el
                                            poder popular también existe. Yo creo que esta acción muestra la
                                            coordinación
                                            entre
                                            distintos sectores del campo popular y nacional que en la acción nos
                                            empezamos a
                                            coordinar y movilizar de forma pacifica, ponemos el cuero ante sus
                                            agresiones
                                            con la
                                            voluntad de defender nuestra soberanía”</p>
                                        <p>Pedro Wasiejko, titular de la FeTIA, aseguró que “desde hace años desde la
                                            FeTIA
                                            venimos participando activamente de esta movilización. El año pasado pudimos
                                            conocer
                                            que en la propiedad de Lewis se reunieron funcionarios judiciales con
                                            empresarios
                                            del Grupo Clarín. Casualmente son los mismos que persiguen a Cristina
                                            Fernández
                                            de
                                            Kirchner y emiten fallos que perjudican a las y los trabajadores. Tenemos
                                            que
                                            terminar con la impunidad de quienes creen que a través de la plata y las
                                            influencias pueden apropiarse del patrimonio de las y los argentinos. Vamos
                                            a
                                            seguir
                                            marchando y exigiendo que se abran los caminos públicos. No vamos a tolerar
                                            que
                                            unos
                                            pocos se apropien de los recursos de todos”, indicó.</p>
                                        <p>Por su parte, Edgardo Depetri manifestó que “la Marcha por la Soberanía a
                                            Lago
                                            Escondido representa una clara defensa de la soberanía nacional y pone de
                                            manifiesto
                                            uno de los grandes debates del momento actual que es la defensa de la
                                            democracia
                                            y
                                            la denuncia al pirata y estafador de nuestros bosques y lagos, Joe Lewis,
                                            que
                                            financió y organizó el escandaloso viaje de periodistas, funcionarios y
                                            jueces
                                            macristas y en cuya casa se escribió la sentencia y proscripción de la
                                            compañera
                                            Cristina Fernández de Kirchner”.</p>
                                        <p>Rubén Ciuró señaló que “este enclave británico en territorio nacional ha sido
                                            y
                                            es
                                            escenario de las tramas ocultas de la mafia judicial, las corporaciones y
                                            los
                                            funcionarios de Larreta. Marchamos al lago para defender nuestra democracia
                                            y la
                                            soberanía”.</p>
                                        <p>En el encuentro destacaron que a través de esta movilización, una vez más, se
                                            exigiría a Joe Lewis, al Poder Judicial y al gobierno de Río Negro que se
                                            arbitren
                                            los medios para dar cumplimiento al fallo del Tribunal Superior de Justicia
                                            de
                                            la
                                            Provincia de Rio Negro y la Cámara de Bariloche que ordena habilitar los
                                            caminos
                                            de
                                            Tacuafí y el de Montaña del Cajón Azul para poder ingresar al lago público
                                            que
                                            fue
                                            apropiado por parte del empresario inglés de manera ilegal.</p>
                                        <p>Silvana Franco, de la Mesa Nacional de la CTA-T acercó el respaldo y
                                            acompañamiento
                                            de la CONADU.</p>
                                        <p>Por otra parte, denunciarán la connivencia de sectores del sector político y
                                            de
                                            las
                                            fuerzas policiales con el empresario inglés que brindó sus instalaciones a
                                            jueces y
                                            fiscales nacionales para que se encuentren con los directivos del grupo
                                            Clarín y
                                            que
                                            llevó al gobierno nacional a presentar una denuncia penal por incumplimiento
                                            de
                                            los
                                            deberes de funcionario público, admisión de dádivas, ofrecimiento de dádivas
                                            y
                                            posible cohecho agravado de magistrados y/o tráfico de influencias agravado
                                            a
                                            quienes participaron de ese encuentro.</p>
                                        <p>Por otra parte, denunciarán la connivencia de sectores del sector político y
                                            de
                                            las
                                            fuerzas policiales con el empresario inglés que brindó sus instalaciones a
                                            jueces y
                                            fiscales nacionales para que se encuentren con los directivos del grupo
                                            Clarín y
                                            que
                                            llevó al gobierno nacional a presentar una denuncia penal por incumplimiento
                                            de
                                            los
                                            deberes de funcionario público, admisión de dádivas, ofrecimiento de dádivas
                                            y
                                            posible cohecho agravado de magistrados y/o tráfico de influencias agravado
                                            a
                                            quienes participaron de ese encuentro.</p>

                                    </div>


                                </div>
                        </article>
                    </li>
                </ul>

            </section>
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol5')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow "> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">¿OTOÑO? </a>
                                        </h2>
                                        {{--        <p>Se trata de una propuesta articulada entre Salud y Educación que propicia
                                espacios de escucha y acompañamiento. Ya se implementó en más de 410
                                establecimientos.</p>
                            <br> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/pol/pol_otoño.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Luego de las trabajosas negociaciones, en el oficialismo <strong> (ex
                                                        FDT)</strong>, hoy Unidos
                                                    por la Patria (UP), en las que no faltó casi nada, el colofón fue el
                                                    acto en
                                                    el aeroparque de la ciudad, donde se mostró el avión de los "vuelos
                                                    de la
                                                    muerte" de los crímenes de la dictadura cívico-militar. Allí
                                                    <strong>Cristina
                                                        Kirchner</strong> flanqueada por el precandidato de la
                                                    Presidencia, <strong>Sergio Massa</strong>,
                                                    bancó el acuerdo del oficialismo (ver columna anterior).
                                                </p>
                                                <br>
                                                <p>¿Hubo heridos? Sí, los hubo. Pero no víctimas fatales, que más
                                                    temprano que
                                                    tarde pondrán primera en el empeño de la campaña, que ya se lanzó y
                                                    con
                                                    fuerza. Se esperaba la definición pública de <strong>Massa</strong>,
                                                    que llego. En la Cámara
                                                    de la Construcción y rodeado de lo más granado del empresariado,
                                                    Massa casi
                                                    para fraseando a<strong> Néstor Kirchner</strong>, dijo que hay que
                                                    conseguir las divisas sin
                                                    hundirse más para pagar al FMI y sacarlo para siempre de Argentina.
                                                    Este
                                                    brutal endeudamiento a 100 años de la mano de<strong> Mauricio
                                                        Macri</strong> no lo comparte
                                                    nadie, salvo el y sus socios que lo fugaron.</p>
                                                <br>
                                                <p>Ahora, la pregunta del millón es que destino político imaginan para
                                                    <strong>CFK</strong>sus
                                                    seguidores más fervientes. Este analista, pensó en un principio en
                                                    la
                                                    jefatura del PJ, que garantiza la no injerencia de una Corte con un
                                                    sesgo
                                                    partidario opositor. Pero, rápidamente se pudo ver que sería un
                                                    obstáculo
                                                    para el futuro gobierno de UP, por el posible blanco móvil de los
                                                    medios
                                                    hiperconcentrados, entre otras cosas.
                                                </p>
                                                <br>
                                                <p>Además, desde la derecha violenta y cada vez más carente de
                                                    propuestas de
                                                    interés para los ciudadanos de a pie, o la izquierda radicalizada
                                                    (salvo
                                                    algunos pocos dirigentes) que cree a<strong> Cristina</strong> le
                                                    llegó el tiempo del "Otoño"
                                                    de la matriarca.</p>
                                                <br>
                                                <p>Ante esta tangible realidad política y con el invalorable aporte de
                                                    jóvenes
                                                    muy comprometidos con el destino de las mayorías, <>Cristina
                                                        Fernández de
                                                        Kirchner</strong>, dos veces Presidenta de la Nación, Senadora
                                                        bonaerense y actual
                                                        vicepresidenta de la República, bien podría prestar enormes
                                                        servicios a la
                                                        unidad latinoamericana como titular de la reflotada
                                                        <strong>UNASUR</strong>, como fue el caso
                                                        de Néstor quien evitó la guerra entre Colombia y Venezuela.</p>

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
                                </article>
                            </li>
                        </ul>
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol6')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow "> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DE LA GENERACION DIEZMADA Y LA MUERTE DE LA UTOPIA </a>
                                        </h2>

                                        <figure>
                                            <img class=" w-full object-cover" src="../img/pol/pol_edugarcia1.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Desde que CFK volvió a ser hincapié en la generación diezmada, esta
                                                    vez con Wado en el medio, a algunos sobrevivientes se nos dio por
                                                    volver a subrayar lo casi inalcanzable de esas 30000 almas que
                                                    dieron lo más preciado en pos de lograr un País para todos sin
                                                    minorías dominantes hasta el hartazgo, ni pibes en la miseria más
                                                    degradante.</p>
                                                <br>
                                                <p>Son todas las historias, de película, con finales trágicos, pero con
                                                    una MISTICA, una entrega, y un patriotismo que solo muy pocos
                                                    pueblos pueden tener el orgullo hoy, de conservar.</p>
                                                <br>
                                                <p>Vuelos de la Muerte, apropiaciones de pibes, robo de bienes, torturas
                                                    y asesinatos deleznables, con gestos heroicos de quienes
                                                    consideraron que la muerte era tan valiosa como la vida cuando en el
                                                    medio se jugaba el destino de una Nación.</p>
                                                <br>
                                                <p>Hemos asistido en los últimos años a la aparición de los hijos de esa
                                                    generación que tienen los mismos genes y están dispuestos a
                                                    continuar el desafío, pero no son multitud, también existe
                                                    desconcierto en los jóvenes que acompañan, que es producto de la
                                                    tremenda crisis que atraviesa la dirigencia política de este país y
                                                    que se repite en casi todo el mundo capitalista que corre
                                                    desesperado a romper las paredes que están a su derecha hasta que no
                                                    quede nada.</p>
                                                <br>
                                                <figure>
                                                    <img class=" w-full object-cover"
                                                        src="../img/pol/pol_edugarcia2.svg" alt="">

                                                </figure>
                                                <br>
                                                <p>La democracia formal que tenemos ha incluido a esa juventud, que
                                                    debió ser heredera de aquella en esas ganas tremendas de cambiar el
                                                    mundo, y está a mitad de camino dudando sobre esa necesidad
                                                    imperiosa de hacerlo.</p>
                                                <br>
                                                <p>Néstor les habló alguna vez a los más grandecitos de interpelar,
                                                    joder, avanzar, correr a quienes no pueden o no quieren atreverse a
                                                    dar vuelta esta taba siniestra que nos aprisiona.</p>
                                                <br>
                                                <p>La despiadada y violenta acción de la derecha nos vuelve a poner en
                                                    la situación de enfrentarla seriamente y no esperar que nadie lo
                                                    haga por nosotros. Es entonces PRIORITARIO que esa dirigencia pende
                                                    vieja y esa juventud aletargada despierten AHORA, para ejecutar el
                                                    proyecto de liberación que nos dejaron aquellos heroicos jóvenes
                                                    maravillosos, y resucitar la UTOPIA haciendola realidad.</p>
                                                <br>
                                                <p>PERO ES AHORA, MAÑANA ES LA MENTIRA PIADOSA CON LA QUE SE ENGANAN LAS
                                                    VOLUNTADES MORIBUNDAS. (JOSE INGENIEROS) </p>
                                                <br>
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/edugarcia.svg') }}"
                                                            alt="">
                                                        <p> <strong>Nota de Eduardo Alberto García<strong></p></a>



                                                    </figure>
                                                </div>

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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol7')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">El Gobierno nacional otorgó un aumento del 43% al
                                                personal militar de las Fuerzas Armadas </a>
                                        </h2>
                                        <p>El Ministerio de Defensa dispuso una nueva actualización en los salarios para
                                            el personal militar de las Fuerzas Armadas que incluye la segunda cuota de
                                            la jerarquización de los haberes y un aumento de pauta salarial que sumados
                                            superan el 43%.</p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/pol/pol_armada.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>De esta manera, miembros activos y retirados recibirán un nuevo
                                                    aumento del 29,3% en sus haberes sobre el monto percibido en junio,
                                                    al que se suma la segunda cuota de la jerarquización salarial, que
                                                    asciende a un 14% con base en el salario otorgado en marzo,
                                                    contabilizando un aumento superior al 43% en el mes de julio.
                                                    Asimismo, en agosto también será otorgado un incremento del 2,9%.
                                                </p>
                                                <br>
                                                <p>La resolución lleva las firmas de los ministros de Defensa, Jorge
                                                    Taiana, y de Economía, Sergio Massa, fue publicada en el Boletín
                                                    Oficial a través de la Resolución Conjunta 29/2023. La mencionada
                                                    resolución dispuso una nueva actualización en los haberes para el
                                                    personal militar de las Fuerzas Armadas "conforme los importes
                                                    establecidos para las distintas jerarquías".</p>
                                                <br>
                                                <p>En lo que va del año, el personal militar ya recibió un incremento de
                                                    más del 42,63%, que incluye el 23,13% de marzo, el 5,5% en junio y
                                                    un 14% de la primera cuota de la jerarquización salarial también en
                                                    el mes de marzo.</p>
                                                <br>
                                                <p>En los considerandos de la Resolución Conjunta se fundamenta que “es
                                                    necesario reconocer al personal de las Fuerzas Armadas, entre otras
                                                    razones por su profesionalidad, misiones y medio donde se
                                                    desempeñan. En consecuencia, es propósito del Gobierno Nacional
                                                    reconocer y mantener una adecuada organización escalafonaria que
                                                    responda a la capacidad, responsabilidad y dedicación del personal”.
                                                </p>
                                                <br>

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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol8')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL MIEDO DE MORALES </a>
                                        </h2>
                                        <p>En viaje por el exterior, un importante dirigente radical admitió a este
                                            columnista su perplejidad por la sofisticación y perversidad de la represión
                                            del gobierno jujeño de Gerardo Morales (presidente de la UCR), en protesta
                                            por la reforma a constitucional <strong>"inconsulta y anticonstitucional, a
                                                todas
                                                luces".</strong></p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/pol/pol_chinomorales.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Para esa fuente de información, <strong>"disparar a los ojos de los
                                                        manifestantes, detener personas dentro de sus casas sin orden
                                                        judicial y trasladar detenidos en vehículos particulares sin
                                                        identificación, o practicar la tortura del submarino seco son
                                                        recursos de la dictadura, que el radicalismo y el ex Presidente
                                                        Raúl
                                                        Alfonsín combatieron"</strong>, añadió.
                                                </p>
                                                <br>
                                                <p>En el plano electoral, dos dirigentes radicales secundan a otras
                                                    tantas fórmulas presidenciales del PRO, que competirán en las PASO.
                                                    Por un lado, el cuyano Luis Petri, será el precandidato del binomio
                                                    que encabeza la ex ministra de Seguridad de la gestión de Mauricio
                                                    Macri, Patricia Bullrich. La otra, que conduce el intendente de la
                                                    Ciudad de Buenos Aires, Horacio Rodríguez Larreta, con Gerardo
                                                    Morales, actual jefe de la UCR, en segundo lugar..</p>
                                                <br>
                                                <p>Días pasados y ante las manifestaciones que siguen en pie de
                                                    protesta, se ordenó un nuevo allanamiento al domicilio de la
                                                    dirigente Milagro Sala, detenida desde hace años y padeciendo una
                                                    trombosis aguda. Allí, junto a su marido, Raúl Noro (enfermo
                                                    terminal), soportó la ocupación policial por espacio de siete horas.
                                                </p>
                                                <br>
                                                <p>En opinión de dirigentes locales de aquella provincia, este
                                                    ensañamiento contra la dirigente social, <strong>"pone en evidencia
                                                        el miedo
                                                        de Morales a una dirigente social capaz de liderar un movimiento
                                                        provincial que generó un fenómeno social ascendente como no se
                                                        había
                                                        visto antes de Jujuy"</strong> y que el oficialismo se encargó
                                                    de
                                                    desarticular y destruir materialmente.
                                                </p>
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
                                </article>
                            </li>
                        </ul>
                    </div>


                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" col-span-6">

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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol9')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Tolosa Paz y Katopodis inauguraron un nuevo Centro de
                                                Desarrollo Infantil en General Las Heras</a>
                                        </h2>
                                        <p>Está ubicado en la localidad de Villars, en ese partido bonaerense, y tiene
                                            capacidad para brindar atención integral a 90 niños y niñas de entre 45 días
                                            y 4 años de edad.</p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/pol/pol_tolosa1.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La ministra de Desarrollo Social de la Nación, Victoria Tolosa Paz;
                                                    el ministro de Obras Públicas, Gabriel Katopodis, y el intendente de
                                                    General Las Heras, Javier Osuna, inauguraron un nuevo Centro de
                                                    Desarrollo Infantil (CDI), ubicado en la localidad bonaerense de
                                                    Villars.
                                                </p>
                                                <br>
                                                <p>La ministra Tolosa Paz expresó su agradecimiento a los equipos de
                                                    trabajo de ambos ministerios y del municipio de General las Heras,
                                                    que “posibilitaron la concreción de este nuevo CDI, con personal
                                                    especializado e infraestructura de calidad, para que nuestros pibes
                                                    y pibas puedan crecer con derechos", sostuvo.
                                                    "Aquí es donde el Estado aparece con un rol protagónico, para
                                                    diseñar políticas y acompañar con hechos concretos a la comunidad
                                                    organizada", señaló la ministra, ante un centenar de vecinas y
                                                    vecinos, directivos, docentes y estudiantes de diferentes
                                                    establecimientos educativos de General Las Heras.
                                                    "Estos espacios forman parte de las políticas de infancia y de
                                                    cuidado, uno de los ejes centrales del gobierno nacional.
                                                    Terminaremos esta gestión habiendo inaugurado 790 espacios de
                                                    primera infancia en todo el país", remarcó Victoria Tolosa Paz.
                                                </p>
                                                <figure>
                                                    <img class=" w-full object-cover" src="../img/pol/pol_tolosa2.svg"
                                                        alt="">

                                                </figure>

                                                <br>
                                                <p>Al respecto, el ministro Katopodis afirmó: “Esta Infraestructura del
                                                    Cuidado es una manera bien concreta de contar en qué país creemos”.
                                                    Mientras que el intendente de Las Heras, Javier Osuna, expresó su
                                                    satisfacción por tener “un gobierno nacional y provincial que
                                                    siempre nos ha respaldado, tanto como quienes encabezan estos
                                                    ministerios que hoy están con nosotros, que hacen fácil lo que es
                                                    difícil".

                                                </p>
                                                <br>
                                                <p>El nuevo CDI lleva el nombre de “María Eloísa Castellini”, en
                                                    homenaje a una maestra jardinera de Las Heras desaparecida durante
                                                    la última dictadura militar.
                                                    Tiene capacidad para brindar atención integral a 90 niños y niñas de
                                                    entre 45 días y 4 años de edad, y trabajará de manera articulada con
                                                    las instituciones de educación formal del distrito.

                                                </p>
                                                <br>
                                                <p>El edificio tiene una superficie de 200 metros cuadrados y cuenta con
                                                    distintas salas para cada grupo etario, lactario, sanitarios con
                                                    adaptación para personas con discapacidad y movilidad reducida,
                                                    patios internos, espacios lúdicos, juegos infantiles, cocina y
                                                    salones administrativos.
                                                </p>
                                                <br>
                                                <p>
                                                    Estuvieron presentes en la apertura el subsecretario de Primera
                                                    Infancia de la Secretaría Nacional de Niñez, Adolescencia y Familia,
                                                    Nicolás Falcone; el subsecretario de Asuntos Municipales de la
                                                    Provincia de Buenos Aires, Santiago Révora; la directora de
                                                    Desarrollo Social del municipio de Las Heras, Belén Zurdo; la
                                                    directora del CDI, Silvia Moreiras; el coordinador general de
                                                    Centros de Desarrollo Infantil del Ministerio de Obras Públicas,
                                                    Rodrigo Estigarribia; y la diputada provincial Luciana Padulo, entre
                                                    otras autoridades.
                                                </p>
                                                <br>
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol10')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Desplazamientos</a>
                                        </h2>
                                        <p>Massa lanzó sus primeros spots de campaña con una recorrida en la localidad
                                            bonaerense de San Martín de donde es oriundo.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/pol/pol_pablo1.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En los menos de tres minutos que dura el video que tiene el formato
                                                    de un short de Youtube materializa el eje de una campaña focalizada
                                                    en lo que Cristina señaló con singular énfasis en su última
                                                    aparición pública y en La Plata cuando reclama a la dirigencia
                                                    política (de su espacio) que deje de leer los diarios y salga a la
                                                    calle para ver que pasa con la gente. Apuntan a generar empatía
                                                    hacia el precandidato con una referencia de su nacimiento en el
                                                    partido y el origen de su familia.
                                                </p>
                                                <br>
                                                <p>También busca generar un contraste voluntario con las posiciones
                                                    cambiemitas cada vez mas atrapada en la lógica de su núcleo duro y
                                                    la idea de que en la sintonía del discurso social mediatizado, y no
                                                    tanto, hay un gran caudal electoral entronizando los fundamentos que
                                                    sostienen el modelo de gestión de Gerardo Morales de la
                                                    conflictividad social en Jujuy.

                                                </p>


                                                <br>
                                                <p>El tono del discurso de Unión por la Patria está bien definido tanto
                                                    por Cristina como por su efectiva puesta en practica y es el
                                                    parámetro de la unidad. Juntos por el Cambio, por el contrario,
                                                    tiene un problema tonal por eso incurre en una variación que roza el
                                                    delirio. Un día Rodriguez Larreta quiere exterminar al kirchnerismo,
                                                    al otro asume la postura Sciolista en la entrevista con Novaresio
                                                    convencido de que hay que cambiar el humor político y abandonar la
                                                    confrontación en tanto amigo/ enemigo.


                                                </p>
                                                <br>
                                                <p>Esa es una ventaja para Unión por la Patria que -por ahora- se ve
                                                    libre de un frankestein discursivo lo cual le evitaría el
                                                    alejamiento inevitable de una parte de su base electoral o la
                                                    ruptura definitiva. Esta diferencia tonal se ve contenida por la
                                                    precandidatura de Juan Grabois.

                                                </p>
                                                <br>
                                                <p>Quienes también capitalizan esta escasa vocación de hablar mas allá
                                                    de su núcleo duro, no tanto electoralmente pero sí en cuanto a una
                                                    unificación del discurso en plena campaña presidencial, es la linea
                                                    interna de Patricia Bulrrich y Luis Petri. No apuntan sino a
                                                    reforzar la radicalización de los parámetros característicos del
                                                    PRO, lo que se busca es dialogar con los que hablan en el mismo
                                                    dialecto. Prueba de ello son las declaraciones de Patricia Bullrich
                                                    en relación a la escasa matricula en las universidades públicas y la
                                                    incidencia extranjera, mientas Luis habló de tours sanitarios de
                                                    extranjeros.
                                                </p>
                                                <br>
                                                <p>
                                                    Larreta ahí conserva una ventaja porque mientras ellos hablan y
                                                    coquetean con Milei sin formalizar, el sumó a las listas a un
                                                    experto en el tema como Miguel Angel Pichetto y, lo vinculado a lo
                                                    antes señalado, eligiendo astutamente como vicepresidente a Gerardo
                                                    Morales. Es decir que mientras ellos verbalizan, Larreta suma
                                                    figuras de peso político con gestión insoslayable en la materia.
                                                </p>
                                                <br>

                                                <p>
                                                    Cabe recordar la preocupación por comprobar la hipótesis del grado
                                                    de desplazamiento discursivo en favor del ejercicio de la violencia
                                                    política para dirimir el conflicto social o las disidencias con el
                                                    campo nacional y popular, y mas concretamente el peronismo, que es
                                                    el que en definitiva lo ha constatado en carne propia con el intento
                                                    de asesinato de Cristina Fernández de Kirchner. Determinar el valor
                                                    de ese movimiento permitiría también poder emitir una especie de
                                                    predicción acerca de un escenario de balotaje entre Unión por la
                                                    Patria y Larreta, siempre sujeto a revisión y amplias chances de que
                                                    las probabilidades admitan en una misma proporción tanto el acierto
                                                    como el desatino, aunque en el caso del escenario Massa- Bullrich
                                                    sería determinante. Mas allá de que a priori pudiera admitirse esta
                                                    segunda opción como la mas favorable para Unión por la Patria.
                                                </p>
                                                <br>

                                                <p>
                                                    La elección en San Juan mostró que la falta de unidad del peronismo
                                                    es sinónimo de derrota. No solo porque el peronismo, sin perder la
                                                    esencia de lo que debe ser su gestión, es contenedor a mas no poder
                                                    sino porque el nepotismo también requiere criterio político. Todas
                                                    las malas decisiones que se podían tomar se tomaron y Uñac resignó
                                                    la provincia a Orrego. Dicho sea de paso: Patricia quiso primerear
                                                    exaltando a un candidato larretista para sumar un poroto a una
                                                    seguidilla de derrotas del PRO a nivel provincial. Piensa en
                                                    términos de presidente del partido, no es señal de acercamiento.
                                                    Larreta, en cambio, sí es el que se anota un pleno sumado al parcial
                                                    que supo conseguir en la elección cordobesa cuando en el intento de
                                                    invitar a Schiaretti al armado de Juntos, se despegó de la impronta
                                                    del perdedor Juez y a su vez participa en la disputa por un jugador
                                                    fuerte en el Justicialismo que también podría gravitar en favor de
                                                    Massa y hasta el propio Guillermo Moreno pondera.
                                                </p>
                                                <br>

                                                <p>
                                                    El Sábado Unión por la Patria visitó el oeste donde para no pocxs
                                                    está el agite. Empezaron en Morón con Lucas Ghi , siguieron por
                                                    Hurlingham junto a Selci y finalmente la ultima parada fue Merlo y
                                                    Menéndez. La gira que tuvo como principales figuras a Máximo
                                                    Kirchner, Axel Kicciloff y Wado De Pedro contó con la guiá de Martín
                                                    Sabbatella y las principales referentes de Nuevo Encuentro.
                                                    Remarcando su carácter de anfitrión, y pionero en el mapa político
                                                    de la tercera en instalar una gestión política progresista y, sobre
                                                    todo, eficiente durante los años de esplendor Sabbatellista,
                                                    principal aliado en su momento para equilibrar los embates de
                                                    reflejo Duhaldista de los jefes comunales en el conurbano oeste.

                                                </p>
                                                <br>

                                                <p>Con esa autoridad se mostró acompañando a la plana mayor de Unión por
                                                    la Patria por los tres distritos, mientras respaldó a los
                                                    integrantes de su espacio presentes en los armados de las listas a
                                                    concejales. Allí Máximo ejercitó un lobby cariñoso sobre Cristina
                                                    animando al público a pedir su presencia en la campaña en territorio
                                                    bonaerense.

                                                </p>
                                                <br>

                                                <p>

                                                    Efectuó una indiscreción: contó que la había llamado y no la pudo
                                                    convencer de sumarse al itinerario. Acto seguido pidió opinión a la
                                                    gente y la respuesta fue unánime: un coro multitudinario tarareando
                                                    “Cristina, Cristina corazón, acá tenes los pibxs para la
                                                    liberación”, cantaban algunos no tan pibxs. En la estación final,
                                                    Merlo, Menéndez ratificó que irá por la reelección siendo uno de los
                                                    pioneros de una síntesis, al menos desde la pertenencia formal,
                                                    entre el Frente Renovador y lo que fuera el Frente para la Victoria.
                                                    Fundamental para Unión por la Patria, siendo este el distrito de
                                                    mayor apoyo a Cristina y al peronismo por lo que podría ser uno de
                                                    los bastiones mas importantes para rubricar la alianza política
                                                    entre el massismo y el kirchnerismo.

                                                </p>
                                                <br>

                                                <p>
                                                    Este fin de semana fue el primer capítulo de la recorrida en campaña
                                                    de Unión por la Patria. La estrategia como decíamos está clara. La
                                                    delineó Cristina, tanto discursivamente en sus ultimas
                                                    presentaciones como en la intimidad. Prioridad: escuchar a la gente
                                                    ahora que la unidad -y sobre todo la campaña- relegaron la
                                                    contradicción secundaria a su lugar. La discusión interna se
                                                    canaliza en la posibilidad de Juan Grabois de quedarse con el primer
                                                    lugar en las PASO al permitirle la interna pero sin afectar la
                                                    competitividad del espacio y unificando los parámetros del discurso.
                                                    Digo, el peronismo es elástico y la unidad pone a prueba esa
                                                    elasticidad. Evita tirarle por la cabeza la doctrina a los sectores
                                                    mas progresistas vinculados con la izquierda y contiene las
                                                    descalificaciones con mal gusto a moralina edulcorada, fotos
                                                    descontextualizadas (que se pueden usar hacia ambos lados) y la poca
                                                    comprensión de contexto que podrían desajustar la identidad y el
                                                    objetivo de una campaña que comenzó con un peronismo en plena
                                                    gestión, herido en su competitividad electoral y encima corría desde
                                                    atrás. Y aun lo hace, en tiempo de descuento.

                                                </p>
                                                <br>
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/pablo.svg') }}" alt="">
                                                        <p> <strong>Nota de Pablo Arsegot<strong></p></a>


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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol11')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Wacky races</a>
                                        </h2>
                                        <p>Viernes. Parecía el cuento de Edgar Allan Poe Corazón Delator. Tic tac… tic
                                            tac… el sonido impaciente de un reloj oculto en un sarcófago cerrado por
                                            siete llaves. Tic… tac...

                                        </p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/pol/pol_pablo2.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Viernes. Parecía el cuento de Edgar Allan Poe Corazón Delator. Tic
                                                    tac… tic tac… el sonido impaciente de un reloj oculto en un
                                                    sarcófago cerrado por siete llaves. Tic… tac... Un corazón bullendo
                                                    entre los intersticios del esternón, agitado al ritmo vertiginoso de
                                                    las manecillas. Tic... Tac… tic.. tac... Y es que dos días antes era
                                                    Wado y había PASO. Scioli no se bajaba ni a palos incluso con el
                                                    piso alto y el caballo del comisario pisándole los talones, los
                                                    avales y todas las opciones posibles para armar lista propia en los
                                                    territorios, comunicado del PJ Bonaerense mediante y un culebrón a
                                                    la mexicana protagonizado por Daniel Osvaldo y Alberto Angel
                                                    advirtiendo recurrir a la justicia para dirimir la disputa interna.
                                                    Wado era el precandidato de Cristina y los carteles en el conurbano
                                                    lo mostraban a él y a su mentora política con la leyenda Se viene
                                                    Wado, igualito a como se promocionaba la futura estrella de
                                                    programas infantiles Gabbo en Los Simpson y para algunos –no pocos-
                                                    Wado es tan desconocido como lo fue Gabbo para los amarillos de
                                                    Springfield. Fue a Mercedes su ciudad natal, insinuó la wadoneta con
                                                    Massa, fue el conductor designado de la formación del tren que
                                                    arribó a la estación de la localidad bonaerense. Armó spot propio,
                                                    hizo sesión de fotos con su compañero de fórmula anunciado en la
                                                    mañana -el no tan previsto Juan Manzur- grabaron un spot conjunto.
                                                    Se saludaron y sonrieron para las cámaras y fuera de ellas. El
                                                    equipo de Manzur a pleno llegó a Buenos Aires. Se hizo la tardecita
                                                    en la Ciudad y no hubo ni spot, ni foto, ni flyer conjunta. En los
                                                    medios solo señalaban a Wado. De Manzur nada. No estaba rubricada
                                                    oficialmente la fórmula de Unión por la Patria con el binomio Wado-
                                                    Manzur. Todo muy normal. Y resonaban los cantos de sirena de Sergio
                                                    que en el congreso del Frente Renovador había proclamado la
                                                    ineluctable necesidad de una lista de unidad y, en caso contrario,
                                                    de haber PASO que ellos y ellas, soldados y soldadas del FR, iban a
                                                    estar. Pero no estaban en esa terna, ni en la que bendijera
                                                    oportunamente San Alberto Ángel de los Fernández. Entonces, algo
                                                    pasaba.

                                                </p>
                                                <br>
                                                <p>Tic… tac… Tic… tac… caía la noche. Daniel exhibía foto grupal:
                                                    Danielito y sus compañeros, Moyano, Tolosa, Artaza, todos juntos
                                                    unidos triunfarían. Mientras, Wado continuaba solitario en el trazo
                                                    de la boleta y la militancia lo proclamaba sucesor de Cristina,
                                                    delegado de ese delicioso néctar de puro kirchnerismo, tan deseado
                                                    por el paladar negro de los adeptos. Nos consta que subían el video
                                                    de Wado en campaña, relamiéndose. Las fotos con él. Todo registro
                                                    fotográfico que atestiguara la cercanía con el hombre que asumiría
                                                    la responsabilidad de representarlos en la máxima aspiración de un
                                                    ciudadano argentino y que, encima, provenía de su riñón mas intimo.
                                                    Ya no habría que votar por mandato a un moderado socialdemócrata del
                                                    ala izquierda progresista del PJ porteño, esta vez el
                                                    plenipotenciario ideario kirchnerista se vería ungido encabezando la
                                                    boleta, contagiando a una militancia que por no comerse un
                                                    dinosaurio, ni verse perseguido por los Velociraptores del Cambio,
                                                    habían aceptado en 2019 besar al sapo rogando que se convirtiera en
                                                    príncipe peronio lo cual nunca sucedió.

                                                </p>


                                                <br>
                                                <p>Tic… Tac… Tic…Tac… serían las 20:49 cuando finalmente la cuenta de
                                                    Twitter de Unión por la Patria anunció a los precandidatos Sergio
                                                    Massa y Agustín Rossi por comprensión histórica, por responsabilidad
                                                    institucional, política y social. El Frente Renovador presente. En
                                                    los días subsiguientes supimos cual era la idea original. Con
                                                    Cristina proscripta de hecho, las dos fuerzas mayoritarias de Unión
                                                    por la Patria aportarían sendos candidatos, Sergio y Wado. Pero
                                                    medió un obstáculo insoslayable: el capitán veto que ya no es Beto,
                                                    ni es capitán. Las esquirlas de la incomodidad presidencial producto
                                                    de la puesta a disposición de la renuncia por parte del Ministro del
                                                    Interior tras la estrepitosa derrota en las elecciones legislativas
                                                    de 2021 tuvo su contrapartida. Como acto palaciego final de su
                                                    gestión obturó al candidato de indisimulable pedigree camporista en
                                                    sintonía con las últimas embestidas del esgrimista profesional
                                                    Aníbal.

                                                </p>
                                                <br>
                                                <p>Porque en definitiva el presidente considera una afrenta el
                                                    pertinente cuestionamiento a sus estrategias de construcción de
                                                    fachada institucionalista, cipayescamente moderada, palaciega y
                                                    sobre todo a espaladas a dos cuestiones fundamentales: la
                                                    elaboración de una épica que incluya marcar agenda propia a partir
                                                    de una vigorosa iniciativa política y una narrativa frente a la
                                                    comunicación concentrada y particularmente interesada en ampliar
                                                    ferozmente su apropiación de los ingresos socialmente producidos y
                                                    la órbita de influencia y presión de sus intereses sectoriales.
                                                </p>
                                                <br>
                                                <p>Por su gestión, que no logró encauzar la política de ingresos en
                                                    favor de los trabajadores, ni la firma de un acuerdo con el FMI
                                                    capaz de instalar condiciones más favorables para afrontar la enorme
                                                    deuda contraída sin pasar por la auditoría permanente del Fondo o la
                                                    incertidumbre de que la escasez de dólares nos ponga al borde de una
                                                    devaluación, con lo que ello implicaría para los sectores populares
                                                    en relación a una licuación aun más terrible de su poder
                                                    adquisitivo, o el default y que tampoco supo cimentar la reforma
                                                    institucional para sanear el poder judicial a fin de desarticular el
                                                    Lawfare, fueron lo que fueron las derivaciones.
                                                </p>
                                                <br>
                                                <p>
                                                    El resultado: presentarse a una elección de medio término, no para
                                                    poner sobre la mesa una gestión exitosa, sino para plebiscitar a una
                                                    subsidiaria del Grupo Callao y posicionarla sobre la base de la
                                                    construcción política de un primer mandatario que solo ocupó tal
                                                    lugar por delegación del caudal electoral de la vicepresidenta.
                                                </p>
                                                <br>

                                                <p>
                                                    Tic tac... tic tac... No apto para una cardiopatía el cierre de
                                                    listas. Después de semanas de conjeturas, el misterio es develado a
                                                    pocas horas del plazo para el cierre de las inscripciones. La unidad
                                                    ordena en el frente peronista. Toca jugar a la oposición política.
                                                    Juntos por el cambio – que paradójicamente no cambia su nombre como
                                                    el Frente de Todos a pesar de su furibunda interna- querrá un cambio
                                                    de signo político, pero lo de juntos te la deben. En la misma lógica
                                                    de su propia disputa, está el sentido hondo de su praxis política.
                                                    En el cuento de Poe el asesino se delata solo. Creo que el final de
                                                    esta travesía hacia las PASO nos depara una conclusión similar.

                                                </p>



                                                <br>
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/pablo.svg') }}" alt="">
                                                        <p> <strong>Nota de Pablo Arsegot<strong></p></a>


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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol12')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SE REALIZARÁ LA BOTADURA DE LA COMPUERTA QUE CONSTRUYÓ EL
                                                ASTILLERO RÍO SANTIAGO PARA PUERTO BELGRANO</a>
                                        </h2>
                                        <p>Con funcionarios nacionales, provinciales y regionales el Astillero Rio
                                            Santiago celebrará su 70 Aniversario

                                        </p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/pol/pol_asr1.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El próximo viernes 7 de julio, a las 7 de la mañana, se realizará en
                                                    el Astillero Río Santiago la botadura de la compuerta para el Dique
                                                    de Carena 2 del Arsenal Naval Puerto Belgrano que se construyó
                                                    íntegramente en la planta naval ubicada en Ensenada. Se trata del
                                                    tercer artefacto naval que se envía al agua durante esta gestión
                                                    para el posterior alistamiento final y que tiene como destinatario a
                                                    la Armada Argentina. Con la presencia de autoridades nacionales,
                                                    provinciales, regionales, dirigentes políticos, sociales y
                                                    sindicales y las y los trabajadores se realizarán además durante esa
                                                    mañana distintas actividades para celebrar el 70 Aniversario del ARS
                                                    -que se cumplió el pasado 15 de junio- en el predio ubicado en
                                                    Hipólito Yrigoyen y Don Bosco, Ensenada con entrada libre y
                                                    gratuita, con previa inscripción.
                                                    Hay que destacar que la construcción de esta Compuerta -que es la
                                                    obra de metalmecánica más grande que se está realizando actualmente
                                                    en la Argentina- se hizo en el marco de una relación de colaboración
                                                    entre los astilleros públicos de nuestro país con el objetivo de
                                                    potenciar las capacidades tanto de Tandanor como de Astillero Río
                                                    Santiago para fortalecer nuestra soberanía. La obra se inició en
                                                    septiembre de 2021. Para la realización de la misma se procesaron
                                                    unas 800 toneladas de acero naval y se realizaron tareas de
                                                    mecanizado para las válvulas y otros dispositivos que componen este
                                                    artefacto.

                                                </p>
                                                <figure>
                                                    <img class=" w-full object-cover" src="../img/pol/pol_asr2.svg"
                                                        alt="">

                                                </figure>

                                                <br>
                                                <p>Además, en el marco de la celebración de los 70 años del Astillero
                                                    Río Santiago en conmemoración al decreto que publicó el 15 de junio
                                                    de 1953 el entonces Presidente Juan Domingo Perón en el que dispuso
                                                    la creación de Astilleros y Fábricas Navales del Estado (AFNE) se le
                                                    rendirá homenaje descubriendo un mural con su figura. También se
                                                    bautizará al edificio destinado a la Armada Argentina con el nombre
                                                    de Capitán Enrique Carranza, para destacar la figura de quien fuera
                                                    dos veces presidente del Astillero Rio Santiago y en cuyo período se
                                                    alcanzó el máximo esplendor de la planta naval. Por otra parte,
                                                    junto a autoridades del Correo Argentino se realizará el acto de
                                                    Matasellado del Entero Postal diseñado especialmente por el Correo
                                                    Argentino para celebrar el 70 Aniversario del ARS. Por último, las y
                                                    los funcionarios presentes recorrerán las Lanchas de Instrucción
                                                    para Cadetes de la Armada Argentina “Ciudad de Ensenada” y “Ciudad
                                                    de Berisso” que se botaron en octubre de 2021 y marzo de 2022
                                                    respectivamente y presenciarán las pruebas de muelle. Además el
                                                    público en general podrá ver las embarcaciones desde el exterior y
                                                    disfrutar de un espectáculo musical.


                                                </p>


                                                <br>
                                                <p>Es importante señalar que la relación colaborativa entre los
                                                    astilleros públicos se inició a partir de la gestión de Axel
                                                    Kicillof como gobernador de la provincia de Buenos Aires y Augusto
                                                    Costa a cargo del Ministerio de Producción, Ciencia e Innovación
                                                    Tecnológica del que depende el ARS; de Ariel Basteiro primero y
                                                    luego de Pedro Wasiejko en la Presidencia del Astillero Río
                                                    Santiago; de Agustin Rossi y Jorge Taiana como titulares del
                                                    Ministerio de Defensa respectivamente y Julio Guardia como Jefe de
                                                    Estado Mayor de la Armada Argentina. El Astillero Río Santiago,
                                                    Tandanor, el Ministerio de Defensa y la Armada trabajan de manera
                                                    conjunta para preservar la infraestructura de nuestro país.


                                                </p>


                                                <br>
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol13')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">El Jefe de Gabinete de la Ciudad estuvo en la
                                                Legislatura</a>
                                        </h2>
                                        <p>Felipe Miguel dio su informe sobre la marcha de la gestión del gobierno
                                            metropolitano y respondió preguntas de los diputados metropolitanos.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/pol/pol_ciudad.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Ante el pleno de la Legislatura local, en sesión especial presidida
                                                    por Emmanuel Ferrario, el jefe de Gabinete de la Ciudad de Buenos
                                                    Aires, Felipe Miguel, ofreció este martes su primer informe
                                                    semestral de 2023 sobre la marcha del gobierno de Horacio Rodríguez
                                                    Larreta y respondió las preguntas de los diputados porteños.
                                                    La de hoy fue la 15ta. Oportunidad en que Miguel cumplió con este
                                                    compromiso legal ante los representantes de la CABA, de otorgar dos
                                                    veces al año un amplio detalle sobre la marcha de la gestión del
                                                    Poder Ejecutivo.
                                                </p>
                                                <br>
                                                <p>En su alocución, Miguel confirmó que la Ciudad comprará 500 armas de
                                                    baja letalidad para incorporar al equipamiento policial. “Después de
                                                    muchos años de trabajo -dijo-, la policía de la Ciudad va a utilizar
                                                    las primeras 60 pistolas taser”.
                                                    “El uso de armas no letales no se discute en ningún país
                                                    comprometido con la seguridad de sus ciudadanos, solo se discute en
                                                    la Argentina absurda. Nosotros vamos a seguir incorporando
                                                    tecnología para complementar el trabajo de nuestras fuerzas y vamos
                                                    a impulsar que estas mismas incorporaciones se hagan a nivel
                                                    nacional para todas las fuerzas federales”, explicó el funcionario.
                                                </p>
                                                <br>
                                                <p>También referido a la seguridad pública, volvió a reclamarle al
                                                    gobierno nacional el traslado de los detenidos que hoy se encuentran
                                                    en comisarías de la Ciudad a los establecimientos penitenciarios
                                                    federales, tal como demandó la Justicia.
                                                </p>
                                                <br>
                                                <p>Sobre el final de su discurso, ponderó elogiosamente al jefe de
                                                    Gobierno Rodríguez Larreta, de quien dijo que “es un gran gestor, el
                                                    mejor que tuvo la Ciudad” y aseveró que se trata de “un líder que
                                                    tiene una visión clara, que sabe armar equipos, que estudia en
                                                    profundidad los temas, que mira lo que pasa en el mundo; que no se
                                                    conforma; que tiene la humildad de escuchar a otras personas”. </p>
                                                <br>
                                                <p>En Educación remarcó el comienzo del ciclo lectivo en febrero, “con
                                                    el objetivo de garantizar 192 días de clase” y la obligatoriedad de
                                                    la jornada extendida para sexto y séptimo grado y primer año de
                                                    secundaria por lo que todas las escuelas de la Ciudad tienen más
                                                    horas de clases”. </p>
                                                <br>
                                                <p>Hizo referencia en otro tramo a los 2141 jóvenes que están dando sus
                                                    primeros pasos en el mundo del trabajo gracias al Plan de Empleo
                                                    Joven, llegando a un total de 4.272 desde su lanzamiento, a mediados
                                                    del año pasado. Además, detalló que 1.224 personas están
                                                    participando de las Prácticas Formativas para favorecer su inserción
                                                    en el ámbito laboral. </p>
                                                <br>
                                                <p>“En la Ciudad la administración responsable de los recursos nos
                                                    permitió, primero, llegar al déficit cero, y ahora tener un
                                                    superávit financiero. Al mismo tiempo, hoy tenemos el menor peso de
                                                    deuda pública de los últimos 10 años. Gracias a este equilibrio
                                                    fiscal, pudimos bajar impuestos y costos para promover el trabajo”,
                                                    destacó Miguel. </p>
                                                <br>
                                                <p>El jefe de Gabinete capitalino puso énfasis asimismo en señalar las
                                                    obras realizadas para recuperar la visibilidad y el aprovechamiento
                                                    de la costa ribereña. Puntualizó lo siguiente:
                                                    <strong>“Desde junio los ciudadanos están disfrutando del “Parque
                                                        del Vega”,
                                                        un espacio verde de 5 hectáreas frente a Aeroparque, con una
                                                        impresionante vista al río”.</strong>
                                                </p>
                                                <br>
                                                <p><strong>“Este mes, parte del predio de la ex Ciudad Deportiva de Boca
                                                        Juniors
                                                        se va a transformar en un nuevo espacio verde y público de 3
                                                        hectáreas; y vamos a inaugurar la Plaza Amia entre el Parque de
                                                        la
                                                        Memoria y la Reserva Ecológica Norte (suma 3.285 m2 de espacios
                                                        verdes)”.</strong> </p>
                                                <br>
                                                <p><strong>“Durante septiembre y octubre, vamos a disfrutar del Distrito
                                                        Joven,
                                                        ubicado a lo largo de la Avenida Costanera. Un espacio de
                                                        esparcimiento de 73 hectáreas con propuestas culturales,
                                                        comerciales, deportivas, de entretenimiento y un paseo lineal de
                                                        cara al río con 7,6 kilómetros de costa”.</strong> </p>
                                                <br>
                                                <p><strong>“En el actual predio de Punta Carrasco, en septiembre vamos a
                                                        terminar un parque público de 8,9 hectáreas”.</strong> </p>
                                                <br>
                                                <p><strong>“Y desde diciembre vamos a disfrutar el Parque Costero BA,
                                                        una playa
                                                        pública de arena de 17.500 m2 en la costa del Río de la
                                                        Plata”.</strong> </p>
                                                <br>
                                                <p><strong>“Además, este mes vamos a sumar 8,8 hectáreas de espacio
                                                        verde y
                                                        público en el Parque Salguero”.</strong> </p>
                                                <br>
                                                <p><strong>“También se agregan nuevos espacios verdes en la ex Sastrería
                                                        Militar
                                                        de Las Cañitas (6.750 m²) y el nuevo parque lineal Rabanal en
                                                        Villa
                                                        Soldati”.
                                                        Sobre las obras hidráulicas, destacó que el año pasado se llegó
                                                        al
                                                        compromiso de construir 30 km de túneles dentro del plan
                                                        hidráulico,
                                                        y afirmó: “Este año vamos a sumar 6 kilómetros más en el marco
                                                        del
                                                        plan de construcción de 46 kilómetros de túneles que termina en
                                                        2025”</strong></p>
                                                <br>
                                                <p>El informe ministerial se inició pasadas las 10:00, con un discurso
                                                    inicial de aproximadamente una hora, abarcando todas las áreas y
                                                    temáticas de la administración pública de la Ciudad. Luego, los
                                                    diputados hicieron uso de la palabra para formular preguntas, hacer
                                                    comentarios o formular demandas, que se sumó a gran cantidad de
                                                    requisitorias planteadas por escrito. Luego de un cuarto intermedio
                                                    sobre el mediodía, la sesión especial continuó durante la tarde para
                                                    permitirle al ministro responder o replicar las manifestaciones de
                                                    los diversos bloques parlamentarios. </p>
                                                <br>
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol14')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Puerto Iguazú: cumbre del MERCOSUR</a>
                                        </h2>
                                        <p>El Comando Conjunto Aeroespacial de las FFAA desarrolla un operativo de
                                            vigilancia y
                                            control en la cumbre del MERCOSUR.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/pol/pol_mercosur.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El Ministerio de Defensa, que conduce Jorge Taiana, informa que, en
                                                    el marco de
                                                    la LXII Reunión del Consejo del Mercado Común y Cumbre de Jefes y
                                                    Jefas de
                                                    Estado del Mercosur y Estados Asociados, que se lleva a cabo los
                                                    días 3 y 4 de
                                                    julio en Puerto Iguazú, Misiones; el Comando Conjunto Aeroespacial
                                                    realiza el
                                                    despliegue de los medios necesarios para ejecutar operaciones de
                                                    vigilancia y
                                                    control aeroespacial durante el desarrollo de las jornadas.
                                                </p>
                                                <br>
                                                <p>Cabe mencionar que el Comando Conjunto Aeroespacial, dependiente del
                                                    Comando
                                                    Operacional de las Fuerzas Armadas, tiene la misión de conducir la
                                                    defensa
                                                    aeroespacial integral en forma permanente en el aeroespacio de
                                                    jurisdicción
                                                    nacional.
                                                </p>
                                                <br>
                                                <p>Respecto a los medios desplegados se mencionan la aeronave A4 AR
                                                    Fightinghawk,
                                                    Bell-412; sistema antidrone Eli 4030; y radares fijos y móviles que
                                                    aportan
                                                    información sobre la vigilancia del espacio. El operativo está al
                                                    mando del
                                                    brigadier Alejandro José Bisso, quien supervisa las acciones del
                                                    Centro de
                                                    Vigilancia y Control Aeroespacial de Merlo.
                                                </p>

                                                <br>
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol15')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">El Plenario de la CTA recibió a Agustín Rossi</a>
                                        </h2>
                                        <p>La Central de las Trabajadoras y los Trabajadores de Argentina realizó hoy su
                                            Plenario Nacional. El encuentro contó en el cierre con la presencia
                                            precandidato a vicepresidente por "Unión por la Patria", Agustín Rossi.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/pol/23_pol_cta1.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Central de las Trabajadoras y los Trabajadores de Argentina
                                                    realizó hoy su Plenario Nacional. El encuentro, que reunió a
                                                    representantes de la CTA de diversas provincias y de varios
                                                    sindicatos del país, contó en el cierre con la presencia del Jefe de
                                                    Gabinete de Ministros y precandidato a vicepresidente por "Unión por
                                                    la Patria", Ing. Agustín Rossi.

                                                </p>
                                                <br>
                                                <p>El plenario, encabezado por el Sec. Gral. Hugo Yasky, fue un espacio
                                                    de análisis de coyuntura política, social y económica, y en el que
                                                    cada delegación realizó un informe de situación de su provincia,
                                                    dejando planteadas temáticas de relevancia para los trabajadores y
                                                    trabajadoras de Argentina.
                                                </p>

                                                <figure>
                                                    <img class="w-full object-cover" src="../img/pol/23_pol_cta2.svg"
                                                        alt="">

                                                </figure>
                                                <br>
                                                <p>
                                                    Uno de los momentos destacados del plenario fue la visita de Rossi,
                                                    quien compartió con los presentes su visión y propuestas en el marco
                                                    de las próximas elecciones nacionales, generando un intercambio
                                                    enriquecedor y constructivo. Su presencia en esta instancia orgánica
                                                    de la Central refuerza la relevancia que tiene para la CTA, ser
                                                    parte activa en la definición de políticas vinculadas con las
                                                    necesidades de la clase trabajadora y la defensa de sus derechos.

                                                </p>

                                                <br>
                                                <p>
                                                    En su intervención, Yasky señaló: “estamos en un Plenario con
                                                    representantes de las provincias de todo el país, discutiendo la
                                                    situación política y el futuro de los trabajadores y las
                                                    trabajadoras, teniendo como telón de fondo, por ejemplo, los
                                                    gravísimos hechos que hemos visto en la provincia de Jujuy, con
                                                    represión, que un sector muy poderoso de la política argentina
                                                    pretende instalar para todo el país”. Y agregó "vamos a militar en
                                                    todo el país, para que el triunfo de Unión por la Patria sea el
                                                    triunfo de los que queremos vivir en una Patria con Justicia Social,
                                                    respeto a los derechos de las mujeres y de los hombres que trabajan,
                                                    y un país que respete los derechos humanos."
                                                </p>

                                                <br>
                                                <p>Por su parte, Agustín Rossi expresó “Estamos en un contexto político
                                                    en donde la derecha se presenta a cara descubierta. Ellos, que
                                                    empezaron a hablar de ‘los curros de los derechos humanos’, ya
                                                    insinúan ‘el curro del feminismo’, van a seguir con ‘el curro de la
                                                    diversidad’, van a ir por el tema de las Convenciones Colectivas de
                                                    Trabajo, por las paritarias, por las vacaciones pagas, por las
                                                    indemnizaciones y también se van a animar por el aguinaldo". Y
                                                    concluyó, "la verdad es que es una derecha que viene con un planteo
                                                    antiderechos y están dispuestos a usar la violencia institucional si
                                                    es necesario".

                                                </p>
                                                <br>

                                                <p>
                                                    También participaron de la reunión Roberto Baradel (Sec. Gral.
                                                    SUTEBA), Sonia Alesso (Sec. Gral CTERA), Estela Díaz (Ministra de la
                                                    Mujer y la Igualdad de Generos Bs. As.) Maria Reigada (Senadora
                                                    Pcial FdT), Edgardo Depetri (Subsec. de Ejecución de Obra Pública) y
                                                    Claudio Marin (Sec. Gral FOETRA Bs.As.) entre otros.

                                                </p>
                                                <br>


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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol16')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Victoria Tolosa Paz entregó maquinarias y telas a una
                                                cooperativa textil de La Plata</a>
                                        </h2>
                                        <p>La ministra de Desarrollo Social de la Nación recorrió la unidad productiva
                                            TexArg, en la capital bonaerense, e hizo entrega de 10 máquinas industriales
                                            de coser y de cortar, además de insumos y materiales de trabajo.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover" src="../img/pol/1.1_pol_textil.svg"
                                                alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La ministra de Desarrollo Social de la Nación,<strong> Victoria
                                                        Tolosa Paz,</strong>
                                                    continuó con su intensa agenda de trabajo, que tiene como ejes
                                                    centrales la profundización y ampliación de las distintas políticas
                                                    sociales que implementa la cartera nacional en todo el país.
                                                </p>
                                                <br>
                                                <p>En esta oportunidad, visitó las instalaciones de la cooperativa
                                                    textil TexArg, en la ciudad bonaerense de La Plata, para hacer
                                                    entrega de diez máquinas industriales de coser y cortar, además de
                                                    rollos de telas, insumos y materiales de trabajo, en el marco del
                                                    programa nacional Talleres Familiares, lo cual significó una
                                                    inversión de 6 millones de pesos.

                                                </p>

                                                <br>
                                                <p>
                                                    <strong> "Acompañamos a las cooperativas de trabajo y a cada una de
                                                        las
                                                        unidades productivas en todo el país, para que la rueda de la
                                                        producción no se detenga, y generen cada vez más ingresos y más
                                                        puestos laborales",</strong> expresó la ministra Tolosa Paz.


                                                </p>

                                                <br>
                                                <p>
                                                    En ese sentido, tal como explicó la presidenta de TexArg, Mirta
                                                    Benítez, las maquinarias e insumos recibidos le permitirán a la
                                                    cooperativa incorporar nuevas trabajadoras e incrementar la
                                                    producción de guardapolvos, que serán distribuidos a lo largo y a lo
                                                    ancho del país, a partir de un convenio con el Ministerio de
                                                    Desarrollo Social de la Nación.

                                                </p>

                                                <br>
                                                <p>Estuvieron presentes el director de Talleres Familiares y
                                                    Comunitarios, Juan Díaz; el subsecretario de Políticas Sociales,
                                                    Nicolás Carvalho; la concejala Cintia Mansilla; y el concejal Juan
                                                    Manuel Granillo Fernández, entre otras autoridades.


                                                </p>
                                                <br>



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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol17')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ANTÍTESIS</a>
                                        </h2>
                                        <p>Del lado de la organicidad justicialista, encarnada por una generación que
                                            tiene -y tuvo- responsabilidades surgidas del voto popular, la contradicción
                                            es obvia aunque no menos compleja de desentrañar
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/2.2_pol_arse1.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>No hay síntesis con correlato electoral. La única síntesis es
                                                    Cristina y cada variación hacia uno u otro lado del espectro
                                                    justicialista, provoca una minoría intensa de desaprobación, otra
                                                    primera minoría no tan ruidosa que asiente y milita con reservas y
                                                    una mayoría en el mapa electoral que optará <strong>-de hacerlo por
                                                        la
                                                        opción Massa-</strong> por motivos más ligados al pragmatismo y
                                                    sobre todo
                                                    sustentada por una idea difusa acerca de lo que implica Sergio pero
                                                    más nítida, y de mayor caudal, acerca de lo que significó la
                                                    experiencia de gestión de la alianza <strong>Cambiemos.</strong>
                                                </p>
                                                <br>
                                                <p>Del lado de la organicidad justicialista, encarnada por una
                                                    generación que tiene -y tuvo- responsabilidades surgidas del voto
                                                    popular, la contradicción es obvia aunque no menos compleja de
                                                    desentrañar, tiene la forma de una dicotomía entre representación
                                                    popular, estrategia electoral y el contexto político local y social
                                                    que incluye una lectura fina de la geopolítica en el marco de la
                                                    deuda asumida por el gobierno de Mauricio Macri con el Fondo
                                                    Monetario Internacional. Y sumado a esto, el fantasma de una derrota
                                                    del peronismo se torna más tenebroso por el rango que acusa el
                                                    espectro discursivo de los potenciales ganadores.

                                                </p>
                                                <br>
                                                <figure>
                                                    <img class="w-full object-cover"
                                                        src="{{ asset('../img/pol/2.2_pol_arse2.svg') }}"
                                                        alt="">
                                                </figure>
                                                <br>
                                                <p>
                                                    Si en 2015, con tibia reivindicación mediante, y la promesa de
                                                    continuidad de las políticas públicas gestadas por el
                                                    <strong>kirchnerismo</strong>
                                                    durante casi 12 años, se desató tal nivel comprobado de persecución
                                                    judicial y laboral y de estigmatización ideológica, al día de la
                                                    fecha una declaración de intenciones en ese sentido sin tapujos por
                                                    parte de Juntos por el Cambio es un indicio de cómo cambió la época
                                                    tras 2015 y como se radicalizó este proceso al desatarse dos
                                                    conmociones mundiales como la pandemia y el conflicto entre
                                                    <strong>Rusia y
                                                        Ucrania</strong> que enhebra un estado de situación a nivel
                                                    doméstico
                                                    tributario de parámetros cíclicos a las singularidades de un
                                                    reacomodamiento en la hegemonía a nivel mundial y cómo se posicionan
                                                    en este proceso los países subalternos.
                                                </p>

                                                <br>
                                                <p>
                                                    Cuando Cristina remarcó en la inauguración del <strong>Gasoducto
                                                        Néstor
                                                        Kirchner</strong> el carácter pragmático y no meramente
                                                    ideológico de la
                                                    recuperación de <strong>YPF</strong> el subrayado como todos los que
                                                    ejecuta busca
                                                    enunciar un concepto de índole general que es una referencia por
                                                    elevación a algo particular. Tengo mi hipótesis y es en relación a
                                                    la conformación de la lista de Unidad, a la particular elección y
                                                    respaldo a su encabezamiento y el andamiaje que lo estructura. Hay
                                                    indicios en favor de un intento de protección más que de impulso del
                                                    campo progresista. Esto de tranquilizar más que transformar. El
                                                    gesto protector es de la conducción estratégica. No es un viraje,
                                                    sería desensillar hasta que aclare.


                                                </p>
                                                <br>
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/pablo.svg') }}" alt="">
                                                        <p> <strong>Nota de Pablo Arsegot<strong></p></a>
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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol18')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">RADICALIZACIÓN AL PALO</a>
                                        </h2>
                                        {{--      <p>Del lado de la organicidad justicialista, encarnada por una generación que
                                            tiene -y tuvo- responsabilidades surgidas del voto popular, la contradicción
                                            es obvia aunque no menos compleja de desentrañar
                                        </p> --}}
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_chinoucr.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Continúa la represión del gobierno de<strong> Jujuy </strong>contra
                                                    docentes,
                                                    estatales y pueblos originarios que bajaron de los cerros para
                                                    defender el agua y las montañas y contra la nueva Constitución
                                                    provincial concebida por pocos y entre gallos y medianoche. El
                                                    <strong> gobernador Gerardo Morales</strong>, el mentor, es quién
                                                    marca el rumbo de la
                                                    violenta oposición ya que la ley madre de la provincia retrocede a
                                                    un Estado pre peronista y hasta pre yrigoyenista en materia de
                                                    derechos civiles y se enfrenta a la<strong> Constitución
                                                        Nacional</strong>.

                                                </p>
                                                <br>
                                                <p>Al parecer <strong>Morales</strong>, candidato en la fórmula del
                                                    <strong>PRO</strong> que encabeza
                                                    Horacio Rodríguez Larreta, quién promete terminar y para siempre con
                                                    el kirchnerismo, es el que se empeña en métodos de un pasado --no
                                                    tan pasado--, como arrancar de sus casas a jujeños y jujeñas, en
                                                    vehículos sin identificación u ordenar a policías disparar a la cara
                                                    y ojos a manifestantes (como el pinochetismo chileno). O practicar
                                                    la tortura del submarino seco a un joven autista detenido.


                                                </p>
                                                <br>

                                                <p>
                                                    Esta práctica deleznable, denunciada desde la<strong> APDH</strong>
                                                    por el ex
                                                    Presidente<strong> Raúl Alfonsín</strong> en los años de plomo
                                                    parece olvidar el
                                                    actual titular de la <strong>UCR</strong>. Es dable recordar que
                                                    Alfonsín hizo su
                                                    campaña electoral que lo llevó a la Presidencia en plena dictadura
                                                    cívico-militar y que entonces su advertencia a las juntas castrenses
                                                    fue el juzgamiento que impulsaría: cumplió y las puso tras las
                                                    rejas.

                                                    Y para completar la información de este momento bisagra, cabe
                                                    recordar que el Procurador de la República al momento del
                                                    derrocamiento del Presidente Hipólito Yrigoyen y que convalidó el
                                                    golpe de estado el 6 de setiembre de 1930, se llamaba
                                                    <strong>Horacio
                                                        Rodríguez Larreta</strong>.

                                                </p>


                                                <br>
                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28  "
                                                            src="{{ asset('../img/pol/Chino.svg') }}" alt="">
                                                        <p> <strong>Nota de Oscar Chino Martínez<strong></p></a>

                                                        <p class=""> <strong> Zemborain <strong></p></a>

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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol19')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">COMANDO GENERAL ELECTORAL</a>
                                        </h2>
                                        <p>Las autoridades supervisaron el operativo de custodia y despliegue para los
                                            comicios nacionales
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="w-full object-cover"
                                                src="{{ asset('../img/pol/pol_electoral1.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El ministro de Defensa,<strong> Jorge Taiana</strong>, junto al
                                                    secretario general de
                                                    Presidencia, Julio Vitobello, al director nacional Electoral, Marcos
                                                    Schiavi, y a la directora de Servicios Electorales, Mariana Aballay,
                                                    visitaron hoy la sede del Comando General Electoral, ubicada en el
                                                    Edificio Libertador, para supervisar el desarrollo del operativo de
                                                    custodia y despliegue de las urnas en los 24 distritos del
                                                    territorio nacional, en el marco de las elecciones Primarias,
                                                    Abiertas, Simultáneas y Obligatorias (PASO). El dispositivo a cargo
                                                    del jefe del Comando General Electoral, general de brigada Jorge
                                                    Fabián Berredo cuenta con más de 85.000 efectivos de las Fuerzas
                                                    Armadas y de las Fuerzas de Seguridad y tiene cobertura en 17 mil
                                                    establecimientos de todo el país.
                                                </p>
                                                <br>
                                                <p>Durante el encuentro, el ministro<strong> Taiana</strong>, aseguró
                                                    “Estamos
                                                    monitoreando en tiempo real cómo se está desplegando el operativo
                                                    del Comando General Electoral desde las bases de la Antártida hasta
                                                    La Quiaca. Estamos seguros de la eficiencia de este dispositivo y
                                                    sabemos que va a concretar la tarea en tiempo y forma para
                                                    garantizar la libertad y voluntad de todas y todos los argentinos”.
                                                </p>
                                                <br>
                                                <figure>
                                                    <img class="h-96 w-full object-cover"
                                                        src="{{ asset('../img/pol/pol_electoral2.svg') }}"
                                                        alt="">

                                                </figure>
                                                <br>
                                                <p>
                                                    En tanto,<strong> Vitobello</strong> se refirió al operativo y
                                                    expresó: “Pudimos
                                                    comprobar que está todo absolutamente organizado para que la
                                                    elección de mañana se desarrolle de forma normal, en coordinación
                                                    con la Cámara Nacional Electoral y el Correo Argentino”, y agregó:
                                                    “Convocamos al pueblo argentino que sea fiel a la tradición de
                                                    participación que ha tenido siempre y concurra a emitir su voto y a
                                                    cumplir con su deber cívico en este año que se cumplen 40 años de
                                                    democracia ininterrumpida en nuestro país”.
                                                </p>
                                                <br>
                                                <p>Finalmente,<strong> Schiavi</strong> expresó: “La democracia es un
                                                    valor que nosotros
                                                    construimos en los últimos 40 años y votar es muy importante.
                                                    Vayamos con alegría y responsabilidad a ejercer nuestro derecho. En
                                                    la democracia todos valemos uno y es el momento para ejercerlo”.
                                                </p>
                                                <br>

                                </article>
                            </li>
                        </ul>
                    </div>


                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" col-span-6">

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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol20')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Ecuador: La dolarización significó una devaluación del
                                                500%</a>
                                        </h2>
                                        <p>Ante el resultado de las PASO vale recordar las consecuencias de la
                                            dolarización en Ecuador, con pérdidas enormes para el pueblo.
                                        </p>
                                        <br>
                                        <p class="font-light text-gray-500">Por Hugo Gulman.</p>
                                        <br>
                                        <figure>
                                            <img class="h-80 w-full object-cover"
                                                src="{{ asset('../img/pol/pol_gulman.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Hernán Reyes Aguinaga, Doctor en Estudios Culturales Latinoamericanos
                                                    y doctor en Economía y Ciencias Políticas ecuatoriano recordó las
                                                    consecuencias y ataduras que implicó la dolarización en su país y
                                                    advirtió los riesgos que ocasionaría a la Argentina que se
                                                    concretaran políticas económicas en tal sentido, como lo propone
                                                    Javier Milei.
                                                </p>
                                                <br>
                                                <p>El especialista explicó que la dolarización fue un proceso muy
                                                    doloroso porque la economía ecuatoriana estuvo siempre en manos de
                                                    sectores oligárquicos, de las élites financieras, industriales,
                                                    élites comerciales.<strong> “En Ecuador significó una devaluación de
                                                        la
                                                        moneda en cinco veces. Un 500%, para que los argentinos tengan
                                                        una
                                                        medida de lo que ocurrió”</strong>, precisó.
                                                </p>
                                                <br>
                                                <p>
                                                    En esos tiempos el dólar se vendía a 5.000 sucres en el mercado
                                                    cambiario ecuatoriano al momento que se produjo la dolarización. Los
                                                    bancos y grandes empresas que contaron con información privilegiada
                                                    antes de que se tomara la medida, se beneficiaron con la compra de
                                                    divisa americana a ese valor. Al dolarizar la economía la moneda
                                                    local se devaluó y trepó hasta 25.000 sucres por dólar y la
                                                    población ecuatoriana le costó mucho entender que el sucre no solo
                                                    desapareció, sino prácticamente había dejado de tener valor.
                                                </p>
                                                <br>
                                                <p><strong> Se juntan con políticos poco apreciados, cuyo principal
                                                        interés es
                                                        destruir todas las instituciones del Estado, sin el mínimo
                                                        escrúpulo
                                                        para preservar los derechos básicos de la población,
                                                        especialmente
                                                        de los estratos más bajos”, definió Reyes Agunaga</strong>.
                                                </p>
                                                <br>
                                                <p>Después de haber ahorrado sucres, cuando iban a cambiar al banco no
                                                    podían entender cómo se habían ido y licuado sus reservas. Esto
                                                    benefició a los grandes empresarios que compraron dólares, y hay
                                                    prueba de eso: compraron cantidades millonarias de dólares ese mismo
                                                    día.<strong> “La población más pobre fue la que efectivamente se vio
                                                        más
                                                        afectada por esta medida y me duele que en la Argentina haya un
                                                        político como Milei, a quien considero alguien fuera de sus
                                                        cabales,
                                                        no puedo encontrar síntesis en su pensamiento. Me duele que un
                                                        político proponga ahora como solución una medida que
                                                        efectivamente
                                                        termina abriendo unas brechas sociales de lo más enormes entre
                                                        la
                                                        población argentina”</strong>, explicó Reyes Aguinaga.
                                                </p>
                                                <br>
                                                <p>Entre la nociva dolarización en Ecuador y la propuesta del candidato
                                                    Milei hay una circunstancia no menor: la maniobra económica fue
                                                    realizada por el expresidente Abdala Bucaram, quien contrató para
                                                    tal fin al ex ministro de economía argentino Domingo Cavallo, a
                                                    quien el candidato de ultra derecha Javier Milei admira, escucha y
                                                    considera el mejor ministro del mejor gobierno argentino.
                                                </p>
                                                <br>
                                                <p>Según el entrevistado, Domingo Cavallo es un personaje de ingrata
                                                    memoria en Ecuador, mientras que Abdala Bucaram fue un presidente de
                                                    un “populismo lumpenesco” que finalmente duró menos de un año en el
                                                    poder, con la intención precisamente de dolarizar.<strong> “Como se
                                                        dio
                                                        cuenta de que no había lugar para eso en la economía
                                                        ecuatoriana, se
                                                        terminó hablando en Ecuador de la convertibilidad, que es un
                                                        tema
                                                        que quizás las generaciones más jóvenes no conocen pero que a la
                                                        larga significó la antesala o el antecedente de lo que luego se
                                                        hizo
                                                        con la dolarización”</strong>, relató.
                                                </p>
                                                <br>
                                                <p>En tal sentido, situó al inspirador de la dolarización ecuatoriana
                                                    entre lo peor de los economistas más radicales, incluso que los
                                                    llamados Chicago Boys, que tuvieron tanto protagonismo en la época
                                                    del golpe militar en Chile o Argentina.<strong> “Se juntan con
                                                        políticos
                                                        poco apreciados, cuyo principal interés es destruir todas las
                                                        instituciones del Estado, sin el mínimo escrúpulo para preservar
                                                        los
                                                        derechos básicos de la población, especialmente de los estratos
                                                        más
                                                        bajos”</strong>, definió Reyes Agunaga.
                                                </p>
                                                <br>
                                                <p>Ante la consulta de Hugo Gulman y Larry Levy, el académico también
                                                    abordó la crisis que está padeciendo su país a muy pocos días de las
                                                    elecciones presidenciales, con una creciente violencia que derivó en
                                                    la muerte de uno de los candidatos presidenciales de la derecha y de
                                                    Pedro Briones, un importante dirigente del correismo, y la creciente
                                                    tensión derivada de los errores del presidente Guillermo
                                                    Lasso.<strong> “Hay
                                                        un clima de disonancia, de pesimismo, de desesperanza que viene
                                                        afectando al país y los últimos meses, y diría el último par de
                                                        años. Las anticipadas elecciones que Ecuador va a desarrollar el
                                                        próximo domingo no son sino el resultado de un gobierno
                                                        absolutamente fallido, que al grado que no pudo justificar su
                                                        pauperización ante la ciudadanía”</strong>, narró.
                                                </p>
                                                <br>
                                                <p>Según Reyes Aguinaga el gobierno anterior, de Lenin Moreno, encaminó
                                                    al país a un proceso gravísimo, con la desinstitucionalización del
                                                    Estado, que también afectó el campo de la seguridad de manera
                                                    furiosa porque Ecuador se ha convertido en uno de los países más
                                                    violentos del mundo. El número de personas muertas en actos de
                                                    asesinato, de homicidio, de delincuencia es enorme.<strong> “Hay un
                                                        proceso
                                                        imparable de infiltración de dinero del crimen organizado,
                                                        narcotráfico en la economía ecuatoriana y por ende han llegado
                                                        también a manos de políticos en Ecuador”</strong>, manifestó.
                                                </p>
                                                <br>
                                                <p>Ante la consulta de si en el juego geopolítico de América Latina y la
                                                    puja entre progresistas y Estados Unidos, hay algún vínculo con este
                                                    proceso violento que se está dando en Ecuador, Reyes Aguinaga
                                                    respondió que seguramente es así, ya que Ecuador es uno de los
                                                    países que en los últimos dos años y medio ha sido gobernado por una
                                                    derecha que ha aplicado el modelo neoliberal en la economía de
                                                    manera tajante y que a la vez ha permitido al Estado a
                                                    desinstitucionalizar a su máxima expresión.<strong> “De hecho, las
                                                        relaciones entre el gobierno de Guillermo Lasso con el gobierno
                                                        norteamericano y la presencia de la embajada norteamericana en
                                                        Ecuador ha sido permanente en los últimos años, tanto que se
                                                        habla
                                                        directamente de injerencia. Han habido manifiestos y
                                                        declaraciones
                                                        de la embajada norteamericana, siempre apoyando al gobierno de
                                                        Guillermo Lasso, ante la desastrosa gestión que realizó bajo el
                                                        mando del Estado”</strong>, planteó.
                                                </p>
                                                <br>
                                                <p> <strong> Quédate con el vuelto</strong> </p>
                                                <p><strong> Martes a las 13 en AM 740 por
                                                        https://radiorebelde.ar/</strong></p>
                                                <p><strong> Con Hugo Gulman y Larry Levy</strong></p>
                                                <p> Escuchá la nota completa en
                                                    https://ar.radiocut.fm/audiocut/ecuador-dolarizacion-significo-una-devaluacion-del-500/
                                                </p>
                                                <br>
                                                <p>Nota publicada en http://miradagremial.com.ar/
                                                </p>
                                                <br>
                                                <p>
                                                </p>
                                                <br>

                                </article>
                            </li>
                        </ul>
                    </div>


                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" col-span-6">

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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol21')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL GRITO DEL SILENCIO</a>
                                        </h2>

                                        <p class="font-light text-gray-500">Por Jorge Rachid.</p>
                                        <br>
                                        <p>CABA, 17 de agosto de 2023, EN HOMENAJE AL GENERAL SAN MARTÍN
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="h-80 w-full object-cover"
                                                src="{{ asset('../img/pol/pol_rachid.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Los acontecimientos son sorprendentes cuando nuestra conexión con la
                                                    realidad está debilitada. Cuando esa realidad forma parte de la vida
                                                    cotidiana de cualquier compatriota y es compartida en su vivencia
                                                    por la política, el escenario se abre a la comprensión y el
                                                    análisis.
                                                </p>
                                                <br>
                                                <p>Los procesos sociales y políticos están compuestos de múltiples
                                                    complejidades, que si son visualizadas desde una mirada binaria del
                                                    bien-mal, blanco-negro, superior-inferior, peronismo-antiperonismo
                                                    lleva a un resultado estrecho de análisis la realidad, que sólo
                                                    logra responder a nuestras propias inquietudes, pero no originan
                                                    respuestas que emocionen y generen esperanzas.
                                                </p>
                                                <br>
                                                <p>
                                                    Claro que es fácil con el diario del lunes hacer un análisis como
                                                    éste, pero cuando se viene anunciando un divorcio con la realidad
                                                    por parte del accionar político, se puede autocrítica mediante, por
                                                    no haber podido torcer esa situación, ni desde lo individual, ni
                                                    desde lo colectivo, corregir ese escenario. Todos los análisis
                                                    fueron posibilistas, es decir buscando los caminos más cortos, menos
                                                    arriesgados, prudentes y especuladores sobre el desarrollo de la
                                                    política del peronismo. Error de debilidad doctrinaria.
                                                </p>
                                                <br>
                                                <p>La entrega de soberanía con la deuda y el FMI, el debilitamiento de
                                                    las herramientas soberanas que son las que se necesitan para
                                                    reconstruir la Patria y que ha sido mancillada por una corriente
                                                    dominante. Tanto cultural como económica e institucional y que ha
                                                    denigrado la democracia como expresión del pueblo argentino, para
                                                    cooptarla a los fines de intereses concentrados, tanto nacionales
                                                    como internacional, han mellado el ser nacional.
                                                </p>
                                                <br>
                                                <p>Esa expresión de rechazo electoral a la medianía de una situación
                                                    prolongada de inercia, que impide concretar o proyectar caminos de
                                                    vida propios y de sus hijos, que además sufre en lo económico la
                                                    pérdida de valor de sus salario o ingresos habituales, opta por
                                                    recorrer aquello que es disruptivo, destructivo del orden
                                                    establecido, aunque sea a lugares antitéticos con su propia
                                                    realidad, porque necesita sacudir una realidad que lo agobia.
                                                </p>
                                                <br>
                                                <p>Sin dudas ese camino es peligroso, porque no es a cualquier precio
                                                    social la necesidad de cambiar el sistema, menos aún sin un norte
                                                    patriótico que demuestre la construcción de un modelo nuevo, ese que
                                                    anhelamos los peronistas, pero algunos lo plantean bajo un paraguas
                                                    de dependencia colonial, que siempre brinda abrigo, aunque precario,
                                                    sometiendo al pueblo a la situación opresor-oprimido.
                                                </p>
                                                <br>
                                                <p>Otros planteamos desde el peronismo, modificar el escenario desde lo
                                                    estructural, que fortalezca desde los constitucional, los ejes de
                                                    justicia social, distribución de la riqueza, eliminando las
                                                    posiciones monopólicas en todos sus aspectos, materiales,
                                                    alimentarios y de la economía real, como de servicios públicos y
                                                    derechos, con poder popular constituyente. Ese camino es posible con
                                                    sólo construir la política junto al pueblo, desde un pensamiento
                                                    nacional y una práctica que demuestre esos objetivos.
                                                </p>
                                                <br>
                                                <p>No intento hacer un análisis desde un punto de vista neutro, porque
                                                    en el marco internacional de una geopolítica, en pleno parto de la
                                                    historia, tan importante como el llamado “descubrimiento” que dio
                                                    origen a la Modernidad, según la visión eurocéntrica, colonial y
                                                    dominante que se prolonga a nuestros días, no tomar posición es
                                                    inaceptable.
                                                </p>
                                                <br>
                                                <p>El mundo ha cambiado girando hacia una realidad siempre ocultada por
                                                    la asfixia mediática “occidental y cristiana” y su soporte
                                                    económico, que ha doblegado la voluntad de los pueblos
                                                    latinoamericanos. El UNASUR fue la respuesta liberadora hace dos
                                                    décadas, por lo cual fue atacada por EEUU y sus aliados, logrando
                                                    destruirla por quienes hoy proponen el cambio, para consolidar la
                                                    entrega.
                                                </p>
                                                <br>
                                                <p>Es que el peronismo debe ser la expresión acabada de la Matria Patria
                                                    Grande, que nunca debió dejar de ser, convencido que, de ocupar ese
                                                    lugar geopolítico, no sólo integraremos las Argentina al mundo
                                                    multipolar, sino que esa acción será liberadora de las cadenas de la
                                                    dependencia, que pretende ajustar el mundo unipolar, proponiendo una
                                                    región sometida como propia, diseñando un nuevo Puerto Rico bajo su
                                                    dependencia.
                                                </p>
                                                <br>
                                                <p>Esa discusión plena, con un análisis profundo que se inicie desde lo
                                                    geopolítico, parece lejano a estos tiempos electorales agitados y
                                                    convulsos, pero son necesarios para recuperar las fuerzas militantes
                                                    necesarias para cargar de utopías, sueños y esperanzas las mochilas
                                                    del pueblo argentino, lejos de una militancia endogámica, que ha
                                                    hecho del canibalismo interno su principal accionar.
                                                </p>
                                                <br>
                                                <p> La contradicción Patria o Colonia la resuelve el Pueblo, con
                                                    nosotros o sin nosotros y dependerá de la capacidad de los
                                                    argentinos defenderla.
                                                </p>
                                                <br>


                                </article>
                            </li>
                        </ul>
                    </div>


                    {{-- columna de la derecha chica --}}
                    <aside>
                        <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                            <div class=" col-span-6">

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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol22')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ROMINA DEL PLÁ: “CON LA COMPLICIDAD DEL GOBIERNO, SE
                                                IMPUSO LA MODIFICACIÓN REGRESIVA CONTRA LOS INQUILINOS”</a>
                                        </h2>

                                        <p>En la sesión del miércoles 23 de agosto convocada para tratar la ley de
                                            alquileres, la diputada nacional Romina Del Plá denunció la modificación de
                                            la ley.

                                        </p>
                                        <br>
                                        <figure>
                                            <img class="h-96 w-full object-cover"
                                                src="{{ asset('../img/pol/pol_romina.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Romina Del Plá afirmó: “Con la complicidad del gobierno, se impuso la
                                                    modificación regresiva de la ley de alquileres que perjudica
                                                    fuertemente a las y los inquilinos. Hubo 13 ausentes del bloque del
                                                    Frente de Todos que, de haber concurrido, podrían haber cambiado el
                                                    resultado. Ni hablar del diputado camporista de Salta, Emiliano
                                                    Estrada, que decidió abstenerse en lugar de impugnar la propuesta
                                                    opositora”
                                                </p>
                                                <br>
                                                <p>Asimismo, señaló que: “Todos los políticos del FMI; Juntos por el
                                                    Cambio, el Frente de Todos y Milei, que fue quien garantizó con su
                                                    bloque de tres diputados el quorum necesario a Juntos por el Cambio
                                                    para que la sesión comience, actuaron en función de los intereses
                                                    inmobiliarios. Estamos ante uno de los fracasos más estrepitosos de
                                                    los que se tenga memoria, la incapacidad de darle una mínima
                                                    solución al problema de la vivienda de millones y millones de
                                                    personas. Con una inflación anualizada de 113% y subiendo, los
                                                    propietarios rechazan la legislación actual y aplican un lock out,
                                                    quitando sus viviendas de la oferta de alquileres y empujando los
                                                    precios a niveles exorbitantes. Con esta modificación, los políticos
                                                    del FMI en todas sus variantes le han clavado un nuevo puñal a los
                                                    desposeídos en medio de un caos económico, la confiscación del
                                                    salario y el desbande inflacionario”.
                                                </p>
                                                <br>
                                                <p>
                                                    Por último, afirmó que:<strong> “Desde el Frente de Izquierda y los
                                                        trabajadores-Unidad hemos insistido en abordar el problema de la
                                                        vivienda de manera integral mediante la construcción de
                                                        viviendas
                                                        populares, de utilización de tierras fiscales y tierras ociosas
                                                        privadas para constituir un banco de tierras, impuesto a la
                                                        vivienda
                                                        ociosa y urbanización de los barrios populares. Los inquilinos y
                                                        todos los sectores populares tenemos el desafío de organizarnos
                                                        para
                                                        defender nuestros derechos frente a la ofensiva
                                                        patronal.”</strong>
                                                </p>
                                                <br>



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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol23')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">AXEL KICILLOF SE REUNIÓ CON MARIEL FERNÁNDEZ EN
                                                MORENO</a>
                                        </h2>

                                        <p>La intendenta señaló que se aborda la situación con "mucha presencia del
                                            Estado que es lo que se necesita".
                                        </p>
                                        <br>
                                        <figure>
                                            <img class="h-96 w-full object-cover"
                                                src="{{ asset('../img/pol/pol_axel.svg') }}" alt="">

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La intendenta de Moreno, Mariel Fernández, recibió al gobernador Axel
                                                    Kicillof en el Palacio Municipal, donde tuvieron una reunión de
                                                    trabajo sobre el abordaje de los robos a comercios y supermercados.
                                                </p>
                                                <br>
                                                <p><strong> "Desde el primer momento estamos trabajando articuladamente
                                                        con el
                                                        Ministerio de Seguridad de la Provincia como hicimos siempre y
                                                        en
                                                        permanente diálogo con el gobernador a partir de los primeros
                                                        hechos"</strong> expresó Fernández luego del encuentro y
                                                    respecto de los
                                                    robos dijo que<strong> "Son hechos delictivos organizados que se
                                                        están
                                                        investigando. Tenemos imágenes de grupos de jóvenes en camioneta
                                                        señalando lugares".</strong> En este sentido, agregó que desde
                                                    el Municipio
                                                    se aportaron datos a la justicia para la investigación y que ya hay
                                                    17 personas detenidas que serán juzgadas por robo poblado o en
                                                    banda.</p>
                                                <br>
                                                <p>Respecto a la situación actual, la intendenta aseguró:<strong> "Se
                                                        está
                                                        trabajando de manera preventiva, se enviaron refuerzos de
                                                        provincia
                                                        y nación, también hablé con el Presidente. Está todo en materia
                                                        de
                                                        investigación y con mucha presencia del Estado que es lo que se
                                                        necesita."</strong>
                                                </p>
                                                <br>
                                                <p><strong> “A partir de hechos puntuales de robo y hurto que sucedieron
                                                        anoche
                                                        luego de varias horas de incentivar disturbios a través de redes
                                                        sociales, trabajamos rápidamente en coordinación con el Gobierno
                                                        Nacional y los municipios”</strong>, explicó Kicillof y
                                                    agregó:<strong> “Desplegamos
                                                        a más de 5.100 efectivos de las fuerzas especiales y hemos
                                                        logrado
                                                        prevenir nuevos hechos y detener a quienes cometieron delitos.
                                                        Estuvimos toda la noche trabajando y continuamos hoy
                                                        también.</strong>”
                                                </p>
                                                <br>
                                                <p><strong> “Aquí en Moreno nos pusimos en contacto rápidamente con la
                                                        intendenta
                                                        Mariel Fernández para investigar los hechos y poner a los
                                                        responsables a disposición de la Justicia”</strong>, sostuvo el
                                                    Gobernador y
                                                    añadió:<strong> “Ahora lo que estamos haciendo es llevar
                                                        tranquilidad:
                                                        mantuvimos una reunión con jueces y fiscales para articular
                                                        todas
                                                        las acciones necesarias que deriven en el castigo de todos
                                                        aquellos
                                                        que cometieron delitos”</strong>.</p>
                                                <br>
                                                <p>En la reunión también participaron Carlos Bianco, Jefe de Asesores
                                                    del Gobierno de Provincia; Nahuel Berguier, Secretario de Justicia y
                                                    DDHH; Juan Ciucio, Secretario de Seguridad y Luis godoy,
                                                    subsecretario de Seguridad Pública.
                                                </p>
                                                <br>

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
        @elseif ($tituloSep == 'Politica-Noticia-Completa-pol24')
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
                                                        src="{{ asset('../img/pol/pol_mayor1.svg') }}"
                                                        alt="">

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
                                                            src="{{ asset('../img/pol/pablo.svg') }}"
                                                            alt="">
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


                    axios.get("https://api.dailymotion.com/videos?channel=news&limit=0")
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
