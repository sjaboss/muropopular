<x-app-layout>
    <div class="container ">


        <div class="mt-10"></div>

        @if ($tituloSep == 'Gremiales-Noticia-Completa-gre1')
            <section {{-- @class(['p-8']) --}} id="gre1"class="pt-20">
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <figure>
                                        <img class=" w-full object-cover"src="{{ asset('../img/G-4.svg') }}"
                                            alt="">
                                    </figure>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Paros Docentes de Sutebas Multicolores y Ademys
                                            </a>

                                        </h2>

                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La docencia de la provincia de Buenos Aires y de CABA paran el martes
                                                    25 y el
                                                    miércoles 26 contra el ajuste educativo y por la reapertura de las
                                                    paritarias
                                                </p>
                                                <p>El martes y miércoles próximo los Sutebas Multicolores van al paro,
                                                    en el
                                                    marco
                                                    de una enorme disconformidad de la docencia frente a la
                                                    pulverización del
                                                    salario en medio de la actual estampida inflacionaria, que ha
                                                    sepultado el
                                                    magro
                                                    acuerdo firmado por la dirección celeste de Roberto Baradel en marzo
                                                    pasado,
                                                    que
                                                    mientras hace campaña por la reelección del gobernador Axel Kicillof
                                                    deja
                                                    pasar
                                                    un ajuste histórico contra la educación de la provincia. </p>
                                                <p>Las medidas de fuerza coincidirán con un paro del sindicato de la
                                                    Ciudad de
                                                    Buenos Aires Ademys (martes 25), también por la reapertura de las
                                                    paritarias
                                                    y
                                                    la avanzada antieducativa de la ministra Soledad Acuña, y ambos
                                                    sectores
                                                    marcharán al Ministerio de Educación Nacional, el Palacio Pizzurno,
                                                    para
                                                    hacer
                                                    oír sus reclamos a las autoridades nacionales, el martes 25 a las 15
                                                    hs.</p>
                                                <p>Además del reclamo de un salario familiar que en un cargo cubra la
                                                    canasta
                                                    familiar indexado por inflación, los gremios multicolores paran en
                                                    defensa
                                                    de
                                                    las condiciones de trabajo contra el avance de una reforma laboral
                                                    de hecho
                                                    que
                                                    está destruyendo el estatuto docente, por infraestructura y obras
                                                    que no
                                                    existen, creación de todos los cargos faltantes, contra el
                                                    vaciamiento de
                                                    las
                                                    obras sociales y de sus prestaciones, becas para todes les
                                                    estudiantes y
                                                    comedores universales en las escuelas, defensa de los derechos
                                                    jubilatorios
                                                    y
                                                    por el aumento del presupuesto educativo y el fin del pago de la
                                                    deuda
                                                    externa.
                                                    Un plan de lucha que enfrenta el ajuste general de los gobiernos en
                                                    cumplimiento
                                                    de los pactos y exigencias con el FMI.</p>


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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre2')
            <section id="gre2" class="pt-21">
                <ul>
                    <li class=" bg-white rounded-lg shadow "> {{-- primera --}}
                        <article>
                            <figure>
                                <img class=" w-full object-cover"src="{{ asset('../img/G-17.svg') }}" alt="">
                            </figure>
                            <div class="py-4 px-4 justify-between items-center">
                                <h2 class="text-xl font-serif font-bold pb-6">
                                    <a href="">CLARIN NO CUMPLE LA LEY: SIPREBA CONVOCA CONFERENCIA DE PRENSA.
                                        Este
                                        martes 18/4 (¡mañana!) a las 9 hs. en Tacuarí 1800, frente a la redacción de
                                        Clarín.
                                    </a>
                                </h2>
                                <div
                                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                    <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p>Ante la falta de avances en el conflicto por los despidos masivos en Clarín y
                                            en
                                            el
                                            marco de la jornada de lucha salarial convocada por la Federación Argentina
                                            de
                                            Trabajadores de Prensa (Fatpren), desde SiPreBA convocamos a una conferencia
                                            de
                                            prensa con trabajadoras y trabajadores despedidos de AGEA.</p>
                                        <p>Durante el lunes 17, la empresa Clarín/AGEA no cumplió con la ley: no acató
                                            la
                                            conciliación obligatoria, no permitió a les compañeres que pretende despedir
                                            realizar sus tareas de forma habitual, ni se presentó en la audiencia frente
                                            al
                                            Ministerio de Trabajo de la Nación. </p>
                                        <p>En la conferencia de prensa daremos más detalles, informaremos el estado de
                                            situación
                                            y los pasos a seguir. Además, tal como habíamos votado en asamblea general
                                            del
                                            SiPreBA, durante la jornada realizaremos asambleas en las demás redacciones
                                            nucleadas en SiPreBA en consonancia con la lucha salarial impulsada por
                                            FATPREN.
                                            .
                                        </p>
                                        <p>SiPreBA y Comisión Interna Clarín
                                            @sipreba @delegadosclarin
                                            Lunes 17 de abril de 2023 - 18HS</p>


                                    </div>


                                </div>
                        </article>
                    </li>
                </ul>
            </section>
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre3')
            <section id="gre3" class="pt-21">
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre4')
            <section id="gre4" class="pt-21">
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre5')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CACHORRO” GODOY: "EL GOBIERNO SE QUEDÓ A MEDIO CAMINO CON
                                                LAS MEDIDAS
                                            </a>
                                        </h2>
                                        <p>El Secretario General de ATE y CTA Autónoma se refirió a las medidas
                                            anunciadas ayer por el ministro de Economía, Sergio Massa.
                                        </p>
                                        <br>
                                        <p><strong> “Para nosotros eran urgentes y necesarias estas medidas aunque
                                                creemos que se
                                                quedan a mitad de camino”</strong>, evaluó. En relación a lo anunciado
                                            para
                                            trabajadores del Estado explicó que<strong> “$60.000 era lo que
                                                solicitábamos como
                                                suma fija en marzo, y la realidad es que la inflación está mucho más
                                                disparada de lo que estaba en ese momento".</strong>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_cachorro.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>También se refirió a la situación particular de municipales y
                                                    provinciales, entre quienes están<strong> “los más afectados hoy en
                                                        el
                                                        universo de trabajadores estatales”</strong> porque
                                                    muchos<strong> “ni siquiera
                                                        tienen convenio colectivo de trabajo”. “Habrá que asegurarse que
                                                        el
                                                        gobierno nacional garantice los recursos para que estados
                                                        municipales y provinciales puedan acceder a dar estas medidas
                                                        indispensables”</strong>, dijo.
                                                </p>
                                                <br>
                                                <p><strong> “En el caso de los trabajadores que reciben el Salario
                                                        Social
                                                        Complementario, la respuesta es más limitado porque son 20 mil
                                                        pesos
                                                        en dos cuotas”</strong>, mientras que<strong> “para los
                                                        monotributistas de primera
                                                        categoría no llegan a 2 mil pesos por día”</strong>, agregó
                                                    Godoy sobre los
                                                    sectores más precarizados de las y los trabajadores.
                                                </p>
                                                <br>
                                                <p><strong> “El Gobierno está encaminado pero se queda a mitad de
                                                        camino”,
                                                        insistió el dirigente y señaló que el paquete quedó “limitado
                                                        por
                                                        los condicionamientos e imposiciones del FMI”</strong>. “El plan
                                                    del FMI es
                                                    inflacionario y el Gobierno debería haberse animado un poco más en
                                                    este tire y afloje”, enfatizó.
                                                </p>
                                                <br>
                                                <p>Por otra parte, el dirigente solicitó que se adelante la convocatoria
                                                    al Consejo del Salario porque<strong> “necesitamos que se
                                                        aumente”</strong> el
                                                    Mínimo, Vital y Móvil debido a que “la situación sigue siendo de
                                                    retroceso”.
                                                </p>
                                                <br>
                                                <p>Finalmente, evaluó que los candidatos presidenciales Javier Milei (La
                                                    Libertad Avanza) y Patricia Bullrich (Juntos por el Cambio)<strong>
                                                        “son
                                                        anti-trabajadores y no les interesa las condiciones de vida de
                                                        nuestro pueblo”. “Que esos sectores neoliberales que reivindican
                                                        a
                                                        Cavallo, a Macri, a Menem, puedan volver al Gobierno es la
                                                        demostración muy cabal de que este Gobierno viene muy retrasado
                                                        a
                                                        nivel nacional a dar las respuestas que el pueblo que lo llevo
                                                        al
                                                        Gobierno necesitan”</strong>, cuestionó.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}" alt="">
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre6')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PRIMER CONGRESO NACIONAL DE LA RED INTERSINDICAL CONTRA
                                                LA VIOLENCIA LABORAL
                                            </a>
                                        </h2>
                                        <p>La AJB participó del Primer Congreso Nacional de la Red Intersindical contra
                                            la violencia laboral que se llevó a cabo en Mar del Plata el 1 y 2 de
                                            septiembre.
                                        </p>
                                        <br>
                                        <p>El Congreso, en el que participaron 120 sindicatos de todo el país, tuvo como
                                            principal objetivo debatir y diseñar estrategias para combatir la violencia
                                            en el mundo del trabajo. Como AJB pusimos el foco en el Convenio 190 y la
                                            Recomendación Nro. 206 de la OIT. Estas normativas internacionales
                                            proporcionan un marco común para prevenir, remediar y eliminar la violencia
                                            y el acoso en el ámbito laboral e incluyen la violencia y el acoso de
                                            género.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_vl1.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Además, se resaltan los compromisos y las obligaciones asumidas por
                                                    el Estado Argentino para aplicar estos principios tanto en la
                                                    legislación como en la práctica a nivel nacional.
                                                </p>
                                                <br>
                                                <p>Se compartieron experiencias y buenas prácticas relacionadas con la
                                                    prevención y la denuncia de situaciones de violencia laboral en
                                                    diversos contextos, con especial énfasis en el ámbito judicial. Se
                                                    destacó la importancia de promover ambientes de trabajo seguros y
                                                    respetuosos, donde todas las personas puedan desarrollarse sin temor
                                                    a sufrir violencia o discriminación.
                                                </p>
                                                <br>
                                                <p><strong> Violencia en el mundo del trabajo en Argentina: un llamado a
                                                        la acción.</strong>.
                                                </p>
                                                <br>
                                                <figure>
                                                    <img class=" w-full object-cover" src="../img/grem/grem_vl2.svg"
                                                        alt="">
                                                </figure>
                                                <br>
                                                <p>También se presentaron los resultados de la "Encuesta Nacional sobre
                                                    Violencia y Acoso en el Mundo del Trabajo" realizada por la
                                                    Universidad Nacional de Avellaneda (UNDAV) y la Red Nacional
                                                    Intersindical contra la Violencia Laboral, en colaboración con
                                                    Iniciativa Spotlight.
                                                </p>
                                                <br>
                                                <p>Los datos que surgen de dicha encuesta son alarmantes: seis de cada
                                                    diez trabajadoras y trabajadores experimentaron situaciones de
                                                    violencia laboral en algún momento de su vida laboral, mientras que
                                                    tres de cada diez la padecen en sus empleos actuales. Esta violencia
                                                    laboral se manifiesta en diversas formas, siendo la violencia
                                                    psicológica la más prevalente (78%), seguida de la discriminación
                                                    (67%), la violencia sexual (52%) y la violencia física (35%).
                                                </p>
                                                <br>
                                                <p>Además, se reveló que la violencia laboral afecta principalmente a
                                                    trabajadores mayores de 30 años y a aquellos con niveles educativos
                                                    más altos. Sólo tres de cada diez personas que experimentan
                                                    violencia o acoso en el trabajo presentaron denuncias, y en este
                                                    puntos se remarcó el rol central de los sindicatos como un apoyo
                                                    fundamental. </p>
                                                <br>
                                                <p>Ruth Sahonero, Secretaria de Género e Igualdad de Oportunidades de la
                                                    AJB, enfatizó que existe<strong> una "necesidad de incorporar una
                                                        estrategia
                                                        que involucre la implementación de equipos técnicos
                                                        interdisciplinarios de acompañamiento y análisis de casos en
                                                        cada
                                                        una de las sedes gremiales, para poder analizar detenidamente
                                                        las
                                                        situaciones de violencia laboral, buscar soluciones efectivas,
                                                        proporcionar un apoyo completo y asesoramiento a quienes han
                                                        sido
                                                        afectados y afectadas por estas problemáticas". Además, agregó
                                                        que
                                                        "es necesaria una figura fuerte de delegados y delegadas que
                                                        desempeñan un papel central la detección y en la acción
                                                        colectiva
                                                        contra las formas específicas que asume la violencia y el acoso
                                                        en
                                                        el mundo del trabajo. Son un pilar fundamental en la
                                                        organización
                                                        gremial, la gestión de conflictos y la supervisión y
                                                        fiscalización
                                                        de violencia o acoso laboral".</strong>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}" alt="">
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre7')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DANIEL CATALANO: FIRMEZA Y UNIDAD PARA ENFRENTAR DESAFÍOS
                                                POLÍTICOS
                                            </a>
                                        </h2>
                                        <p><i>En un acto multitudinario, Daniel Catalano asume un nuevo mandato en ATE
                                                Capital y llama a la unidad de los trabajadores para afrontar los
                                                desafíos
                                                electorales y construir una política alternativa en la Ciudad.</i>
                                        </p>
                                        <br>
                                        <p>En un acto que reunió a un variado espectro político del campo nacional y
                                            popular, así como a figuras destacadas de sindicatos, organizaciones
                                            sociales, políticas y de derechos humanos, Daniel Catalano asumió un nuevo
                                            mandato al frente de ATE Capital. En este evento, se delinearon los desafíos
                                            que la organización enfrentará en el futuro cercano, incluyendo la
                                            construcción de una alternativa política real a la derecha en la Ciudad de
                                            Buenos Aires.
                                        </p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_tano.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Con un auditorio repleto de afiliados y militantes, el humorista,
                                                    director y conductor Dady Brieva ofreció un discurso que combinó
                                                    reflexión y humor. Posteriormente, a través de un video
                                                    institucional, se repasaron los logros y desafíos de ATE Capital
                                                    desde 2015, cuando Catalano ganó la dirección del sindicato.
                                                </p>
                                                <br>
                                                <p>Hugo Yasky, Diputado Nacional y Secretario General de la CTA-T,
                                                    expresó su agradecimiento por la continuación del legado de Germán
                                                    Abdala y el compromiso de formar líderes políticos a la altura de
                                                    las circunstancias.
                                                </p>
                                                <br>
                                                <p>Agustina Panissa, Secretaria Adjunta reelecta, afirmó: "Estamos
                                                    convencidos de que esta conducción está a la altura del momento,
                                                    frente al avance de las derechas más reaccionarias". Subrayó la
                                                    importancia de la unidad de los trabajadores que comparten un
                                                    proyecto de país basado en la igualdad, los derechos y la justicia
                                                    social.
                                                </p>
                                                <br>
                                                <p>En su discurso, Daniel Catalano llamó a "buscar a cada uno de los
                                                    argentinos que eligieron a Javier Milei" y enfatizó la necesidad de
                                                    un "debate profundo" en las bases. Aseguró que no están dispuestos a
                                                    naturalizar el surgimiento de la ultraderecha en el país y subrayó
                                                    su determinación para enfrentar cualquier desafío que surja.
                                                </p>
                                                <br>
                                                <p>El Secretario General destacó que están preparados para dar todas las
                                                    batallas necesarias y que la responsabilidad es buscar la unidad con
                                                    todos los trabajadores que compartan la visión de un país más
                                                    igualitario, con más derechos y justicia social.
                                                </p>
                                                <br>
                                                <p>El acto tuvo lugar en el Auditorio "Roberto Carri" de la Facultad de
                                                    Ciencias Sociales de la UBA y contó con la presencia de destacadas
                                                    personalidades, entre ellas Kelly Olmos, Taty Almeida, Hugo Yasky,
                                                    Amado Boudou, Marta Pujadas, y muchos otros. Catalano concluyó su
                                                    discurso llamando a la movilización ya votar en el balotaje el
                                                    próximo 19 de noviembre en apoyo a la fórmula de Unidad por la
                                                    Patria, liderada por Sergio Massa y Agustín Rossi. El auditorio
                                                    respondió con una ovación y de pie.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}" alt="">
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre8')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CGT PROPONE MINISTERIO DE DEPORTES EN GESTIÓN MASSA
                                            </a>
                                        </h2>
                                        <p><i>La Confederación General del Trabajo (CGT), en colaboración con un amplio
                                                espectro de entidades deportivas y políticas, ha presentado una
                                                propuesta: la creación de un ministerio de deportes bajo una eventual
                                                presidencia de Sergio Massa tras el balotaje del 19 de noviembre. Este
                                                proyecto tiene como objetivo principal mejorar la calidad de vida de la
                                                sociedad argentina a través de la cultura física y el deporte.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_cgt.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En una reunión masiva en la sede de la CGT, la Mesa Nacional del
                                                    Deporte,
                                                    integrada por diversos sectores sociales y políticos, ha elaborado
                                                    un
                                                    detallado documento donde se manifiesta la necesidad de un
                                                    ministerio
                                                    dedicado al deporte. El texto enfatiza <b>la importancia de diseñar
                                                        e
                                                        implementar políticas públicas que promuevan el deporte en todas
                                                        sus formas,
                                                        subrayando la necesidad de reactivar organismos como el Consejo
                                                        Nacional del
                                                        Deporte y los Consejos Provinciales y Municipales del
                                                        Deporte.</b>
                                                </p>
                                                <br>
                                                <p>La propuesta cuenta con un amplio respaldo de figuras relevantes en
                                                    el ámbito deportivo y político. Entre los participantes se
                                                    encontraban dirigentes de la CTA, el Comité Olímpico Argentino,
                                                    sindicatos, federaciones, clubes de barrio y agrupaciones políticas
                                                    que convergen bajo el paraguas de Unión por la Patria. También
                                                    asistieron funcionarios provinciales y municipales, deportistas
                                                    reconocidos y exfuncionarios del ámbito deportivo.
                                                </p>
                                                <br>
                                                <p>Entre los puntos clave del proyecto se encuentra la transformación de
                                                    los jugadores en clubes deportivos, la promoción de competencias
                                                    nacionales, el fomento de deportes adaptados y programas de
                                                    desarrollo, así como la implementación de leyes que garantizan
                                                    igualdad de género en el deporte y mejoras en infraestructuras
                                                    deportivas en clubes y colegios.
                                                </p>
                                                <br>
                                                <p>En palabras de <b>Fernando "Pato" Galmarini</b>, exsecretario de
                                                    Deportes de
                                                    la Nación, <b>"el deporte es esencial para la construcción de una
                                                        sociedad más justa".</b> Asimismo, se destaca la necesidad de un
                                                    apoyo
                                                    sostenido desde el gobierno nacional para potenciar la identidad y
                                                    proyectos deportivos de largo alcance.
                                                </p>
                                                <br>
                                                <p>La Mesa Nacional del Deporte plantea esta propuesta como una
                                                    herramienta para marcar el rumbo del país en los próximos años y
                                                    como una visión estratégica de referencia para las próximas dos
                                                    décadas. Se enfoca en implementar regulaciones y leyes que impulsen
                                                    la actividad deportiva a nivel nacional y promuevan el desarrollo
                                                    sostenible en este ámbito.
                                                </p>
                                                <br>
                                                <p>La iniciativa apunta a la creación de un bloque normativo que regule
                                                    la actividad deportiva a través de leyes ya existentes y
                                                    modificaciones para fortalecer el marco legal. Es vista como un paso
                                                    esencial para una planificación estratégica que impulsará el deporte
                                                    argentino en los próximos años y décadas, en sintonía con un enfoque
                                                    de progreso a largo plazo.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre9')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA CGT ENVÍA UN PETITORIO DE 15 PUNTOS A MASSA Y MILEI EN
                                                DEFENSA DE LOS TRABAJADORES Y SUS DERECHOS
                                            </a>
                                        </h2>
                                        <p><i>La central obrera busca clarificar la postura de los candidatos sobre
                                                legislación laboral a pocos días del balotaje.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_15puntos.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Confederación General del Trabajo (CGT) presentó un petitorio de
                                                    15 puntos dirigido a los candidatos Sergio Massa y Javier Milei,
                                                    enfocado en la defensa de los derechos laborales y la aclaración de
                                                    sus posturas sobre legislación laboral. Durante una conferencia de
                                                    prensa, los triunviros Héctor Daer, Pablo Moyano y Carlos Acuña,
                                                    acompañados por la ministra de Trabajo, Raquel Kelly Olmos,
                                                    revelaron este documento para obtener respuestas públicas de los
                                                    candidatos respecto a temas laborales.</b>
                                                </p>
                                                <br>
                                                <p>Entre los puntos más destacados del petitorio se encuentran: la
                                                    ratificación del derecho al trabajo según lo establecido en la
                                                    Constitución Nacional, la defensa de los derechos colectivos e
                                                    individuales a través de convenios colectivos y paritarias libres,
                                                    la progresividad de los derechos laborales y sociales para una
                                                    sociedad más justa y la convocatoria regular al Consejo de Salario
                                                    Mínimo, Vital y Móvil.
                                                </p>
                                                <br>
                                                <p>Durante la presentación, Daer destacó la importancia de estas
                                                    respuestas para los indecisos, subrayando que "las respuestas de los
                                                    candidatos van a ayudar a los indecisos a tomar una decisión". Sin
                                                    embargo, Moyano sugirió que ya tenían una idea de las respuestas que
                                                    darían ambos candidatos, mientras Daer reiteró la preferencia por
                                                    Massa y cuestionó las políticas que podría implementar Milei,
                                                    mencionando que "si dicen que va a recortar el 15 por ciento del
                                                    presupuesto, olvídense que puedan estar pensando en la Constitución
                                                    Nacional".
                                                </p>
                                                <br>
                                                <p>El petitorio, que incluye aspectos que van desde el derecho al
                                                    trabajo hasta la promoción de empleabilidad y el fortalecimiento de
                                                    la educación pública, busca poner en foco los temas fundamentales
                                                    que la CGT considera trascendentales para la protección y desarrollo
                                                    de los trabajadores en el país.
                                                </p>
                                                <br>
                                                <p><b>El petitorio, respaldado por la CGT, apunta a lograr que los
                                                        candidatos se pronuncien sobre los siguientes puntos clave:</b>
                                                </p>
                                                <br>
                                                <p>1- Ratificar la plena vigencia del derecho al trabajo, como lo
                                                    establece la Constitución Nacional.</p>
                                                <br>
                                                <p>2- Defender los derechos colectivos e individuales de los
                                                    trabajadores, incluyendo la protección laboral, paritarias libres y
                                                    una mejor distribución del ingreso.</p>
                                                <br>
                                                <p>3- Promover la progresividad de los derechos laborales y sociales
                                                    para construir una sociedad más justa.</p>
                                                <br>
                                                <p>4- Convocar regularmente al Consejo de Salario Mínimo, Vital y Móvil,
                                                    el cual establece el salario mínimo de los trabajadores.</p>
                                                <br>
                                                <p>5- Garantizar la implementación y funcionamiento del Consejo
                                                    Económico y Social (CES), un órgano de participación ciudadana para
                                                    debatir prioridades estratégicas para el desarrollo del país.</p>
                                                <br>
                                                <p>6- Establecer los fueros de la Justicia del Trabajo como el único
                                                    órgano jurisdiccional para cuestiones laborales.</p>
                                                <br>
                                                <p>7- Promover el trabajo registrado y digno con remuneración justa,
                                                    acceso a la salud, la educación y el esparcimiento.</p>
                                                <br>
                                                <p>8- Asegurar el pleno funcionamiento y financiamiento adecuado de los
                                                    sistemas de seguridad social, que incluyen atención médica,
                                                    seguridad laboral, jubilaciones y pensiones.</p>
                                                <br>
                                                <p>9- Fomentar la empleabilidad a través del aprendizaje continuo y la
                                                    formación técnico-profesional de los trabajadores para aumentar la
                                                    productividad.</p>
                                                <br>
                                                <p>10- Implementar el Convenio número 190 y las Recomendaciones 206 de
                                                    la Organización Internacional del Trabajo (OIT) sobre la violencia y
                                                    el acoso en el trabajo, garantizando igualdad de género y
                                                    diversidad.</p>
                                                <br>
                                                <p>11- Involucrar a los sindicatos en las políticas de vivienda para
                                                    satisfacer las necesidades de los trabajadores y sus familias.</p>
                                                <br>
                                                <p>12- Proteger a los trabajadores y sus familias a través del sistema
                                                    previsional y de seguridad social, garantizando jubilaciones
                                                    ajustables automáticamente con los promedios de salario establecidos
                                                    en los convenios colectivos.</p>
                                                <br>
                                                <p>13- Reducir la jornada laboral acordada mediante convenios colectivos
                                                    y adaptada a diferentes realidades.</p>
                                                <br>
                                                <p>14- Preservar la educación pública, obligatoria y gratuita en
                                                    Argentina, conforme a las leyes nacionales.</p>
                                                <br>
                                                <p>15- Invertir en obras públicas que impulsen políticas energéticas,
                                                    viales, educativas y de salud, además de la participación del Estado
                                                    en empresas de servicios públicos.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre10')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EN LAS PRÓXIMAS ELECCIONES NO SEREMOS NEUTRALES
                                            </a>
                                        </h2>
                                        <p><i>En las próximas elecciones no seremos neutrales. Votaremos, en defensa
                                                propia a la opción que defiende los postulados básicos de nuestro
                                                compromiso social y que no implica un retroceso inadmisible a las etapas
                                                más oscuras de nuestra historia.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_actores.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Dentro de pocos días se definirá cuál de dos modelos de país será el
                                                    que se desarrolle en los próximos cuatro años. El estatuto de la AAA
                                                    dice taxativamente: “se impone la prohibición de toda acción
                                                    política partidista”. Pero también en el mismo párrafo dice que “se
                                                    establece la obligatoriedad de colaborar en el afianzamiento y
                                                    respeto del régimen democrático y las libertades republicanas”.</b>
                                                </p>
                                                <br>
                                                <p>¿Qué hacer cuando una de las opciones partidarias representa lo
                                                    contrario de lo que el estatuto obliga a defender? ¿Qué hacer cuando
                                                    uno de los candidatos expresa desembozadamente el autoritarismo,
                                                    reivindicando todos los postulados económicos, políticos e incluso
                                                    el accionar represivo de la dictadura y representa un ataque directo
                                                    a los derechos conseguidos después de largas luchas?
                                                </p>
                                                <br>
                                                <p>En estas circunstancias especiales, creemos que es necesario un
                                                    compromiso especial, activo, sin falsas “neutralidades”, y ello
                                                    implica concurrir a votar por el proyecto que mejor represente los
                                                    intereses de la población y de nuestro sector. Como ya lo advertimos
                                                    cuando las propuestas eran meras declaraciones periodísticas de uno
                                                    de los candidatos, hoy reafirmadas en su plataforma electoral:
                                                    actuaremos en defensa propia.
                                                </p>
                                                <br>
                                                <p>Porque es propia la esperanza de que a través de la <b>MEMORIA</b> se
                                                    llegue a la <b>VERDAD</b> que imponga la <b>JUSTICIA</b> para las
                                                    víctimas del terrorismo de Estado perpetrado por la última dictadura
                                                    cívico militar (Son 30.000, y entre ellos están nuestros 28
                                                    compañeros y compañeras detenidos/desaparecidos).
                                                </p>
                                                <br>
                                                <p>Porque son propios los derechos laborales que amenazan con
                                                    arrebatarnos. Porque es propio un sistema jubilatorio estatal al que
                                                    accedimos luego de muchos años de lucha para ser considerados
                                                    trabajadores en relación de dependencia a través de nuestra Ley del
                                                    Actor.
                                                </p>
                                                <br>
                                                <p>Porque son propias las fuentes laborales que se generan con subsidios
                                                    del INCAA, el INT, y otros organismos de fomento provinciales y
                                                    nacionales que son amenazados en forma directa, y es nuestra (y de
                                                    todxs) la cultura e identidad que generan en cada rincón del país.
                                                </p>
                                                <br>
                                                <p>Porque es propio nuestro sistema solidario de salud implementado a
                                                    través de nuestra Obra Social de Actores (OSA) que, como todo
                                                    sistema solidario, sería arrasado con la quita de subsidios.</p>
                                                <br>
                                                <p>Porque es propia la estructura sindical que construimos a lo largo de
                                                    104 años de existencia respetando la convivencia democrática. Y,
                                                    sobre todo, porque es propia la democracia misma y los avances
                                                    logrados en materia de derechos civiles, derechos de la mujer y
                                                    diversidades. Es propia la salud y la educación pública.</p>
                                                <br>
                                                <p>Por lo tanto, en las próximas elecciones no seremos neutrales.
                                                    Votaremos, en defensa propia a la opción que defiende los postulados
                                                    básicos de nuestro compromiso social y que no implica un retroceso
                                                    inadmisible a las etapas más oscuras de nuestra historia.</p>
                                                <br>
                                                <p><b>Consejo Integral Asociación Argentina de Actores y Actrices</b>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre11')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">NUEVAS AUTORIDADES DE APSEE: CARLOS MINUCCI LIDERA CON UN
                                                ENFOQUE DECIDIDO HACIA LA RECUPERACIÓN ESTATAL
                                            </a>
                                        </h2>
                                        <p><i>En un acto cargado de compromiso y reivindicación sindical, Carlos Minucci
                                                asumió su cargo como Secretario General de APSEE.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_APSE.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En un acto cargado de compromiso y reivindicación sindical, Carlos
                                                    Minucci asumió su cargo como Secretario General de la Asociación del
                                                    Personal Superior de Empresas de Energía (APSEE), junto con la nueva
                                                    Comisión Directiva, con un mandato extendido hasta el 2027. Durante
                                                    la ceremonia, Minucci reafirmó su enfoque en la protección y
                                                    recuperación de las empresas estatales en un contexto desafiante.
                                                </p>
                                                <br>
                                                <p>"Vamos a recuperar las empresas del Estado, le guste a quien le
                                                    guste", estas palabras resuenan como el llamado a la acción más
                                                    significativa del discurso pronunciado por Minucci durante su
                                                    reasunción. A través de su intervención, señaló los desafíos
                                                    presentes en el actual escenario sindical y apuntó hacia la defensa
                                                    de los intereses laborales en el contexto de las transformaciones en
                                                    las empresas estatales.
                                                </p>
                                                <br>
                                                <p>Minucci hizo hincapié en la lucha histórica del sindicalismo,
                                                    resaltando la importancia de unir esfuerzos para contrarrestar las
                                                    amenazas que enfrenta el movimiento obrero en la actualidad.
                                                    "Estamos aquí para recuperar lo que generaciones anteriores han
                                                    defendido. Los grupos financieros están destruyendo lo que con tanto
                                                    esfuerzo se construyó", expresó con convicción.

                                                </p>
                                                <br>
                                                <p>En un llamado a la unidad, apeló a la memoria histórica del
                                                    movimiento obrero, recordando que la lucha sindical siempre ha sido
                                                    parte del legado peronista y que esta nueva gestión tiene un
                                                    compromiso firme con los trabajadores y trabajadoras. Minucci
                                                    destacó el compromiso de su gestión para liderar una Confederación
                                                    General del Trabajo (CGT) representativa y fiel a los intereses de
                                                    los trabajadores.

                                                </p>
                                                <br>
                                                <p>El evento de asunción contó con la presencia de figuras destacadas
                                                    del sindicalismo y del ámbito político. La diputada Vanesa Siley, el
                                                    diputado y la diputada nacional María Rosa Martínez, así como el
                                                    presidente de YPF Gas, Federico Basualdo, y el ministro de Trabajo
                                                    bonaerense, Walter Correa, se hicieron presentes en apoyo a esta
                                                    nueva etapa del sindicalismo energético.

                                                </p>
                                                <br>
                                                <p>La amplia asistencia de representantes de diversos sectores
                                                    sindicales y políticos reflejó el respaldo a la nueva dirección de
                                                    APSEE. Este evento marcó el inicio de un período clave en el que se
                                                    espera una firme defensa de los derechos laborales y una ardua lucha
                                                    por la recuperación de las empresas estatales, en un contexto
                                                    desafiante para el movimiento sindical argentino.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre12')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">UNIÓN SINDICAL CONTRA LAS MEDIDAS DE MILEI: CGT Y GREMIOS
                                                ANUNCIAN RESISTENCIA
                                            </a>
                                        </h2>
                                        <p><i>Las confederaciones CATT, CATHEDA y la CGT acuerdan acciones sindicales y
                                                judiciales para frenar el DNU y la polémica ley "Bases".</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_union.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En un gesto de unidad y resistencia, las confederaciones de
                                                    Trabajadores Del Transporte (CATT) y de Trabajadores y Empleados De
                                                    Los Hidrocarburos, Energía, Combustibles, Derivados y Afines
                                                    (CATHEDA), junto a la Confederación General del Trabajo (CGT), han
                                                    decidido plantar cara al gobierno de Javier Milei. Tras una reunión
                                                    celebrada en la sede de la CGT, los líderes sindicales acordaron
                                                    llevar a cabo acciones sindicales y judiciales en rechazo tanto al
                                                    polémico DNU 70/2023 como al proyecto de ley "Bases y Puntos de
                                                    Partida para la Libertad de los Argentinos".
                                                </p>
                                                <br>
                                                <p>En el encuentro, en el cual participaron figuras prominentes como
                                                    Hugo y Pablo Moyano, Omar Pérez de Camioneros, Juan Carlos Schmid de
                                                    Dragado y Balizamiento-FeMPINRA, entre otros, se evaluaron los
                                                    resultados del paro general y la movilización del 24 de enero. La
                                                    conclusión fue clara: la necesidad de resistir las medidas del
                                                    gobierno de Milei que consideran una amenaza a derechos laborales y
                                                    a la estabilidad económica y social.
                                                </p>
                                                <br>
                                                <p>Desde la CATT, se expresó que se están evaluando todas las
                                                    alternativas, siguiendo de cerca los acontecimientos en la Cámara de
                                                    Diputados con respecto a la Ley Ómnibus. Se subrayó la preocupación
                                                    ante la posibilidad de una desregulación brutal de la economía y la
                                                    derogación de leyes protectoras en áreas cruciales como empleo,
                                                    salud y educación.
                                                </p>
                                                <br>
                                                <p>"Vamos a hacer todo lo que esté a nuestro alcance contra la amenaza
                                                    de las privatizaciones, contra nuestra industria nacional acechada
                                                    por la apertura indiscriminada de importaciones y para evitar la
                                                    primarización y extranjerización de nuestros recursos naturales",
                                                    declaró la CATT.
                                                </p>
                                                <br>
                                                <p>La resistencia sindical se presenta como un frente unido para
                                                    proteger los intereses de los trabajadores y evitar medidas que
                                                    consideran perjudiciales para el tejido social y económico de
                                                    Argentina. La batalla sindical se anticipa como un capítulo
                                                    importante en la lucha por la preservación de derechos y la
                                                    estabilidad laboral en el país.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre13')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CAMARAZO DE REPORTERXS GRÁFICXS FRENTE AL CONGRESO TRAS
                                                REPRESIÓN DE BULLRICH
                                            </a>
                                        </h2>
                                        <p><i>Trabajadores de prensa denuncian agresión y piden libertad para ejercer su
                                                trabajo en democracia.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_camarazo.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>En una contundente muestra de repudio, integrantes de la Asociación
                                                    de Reporterxs Gráficxs de la República Argentina (Argra), el
                                                    Sindicato de Prensa de Buenos Aires (Sipreba) y la Federación
                                                    Argentina de Trabajadores de Prensa (Fatpren) llevaron a cabo este
                                                    martes un camarazo. frente al Congreso Nacional en rechazo a la
                                                    represión desatada por la ministra de Seguridad, Patricia Bullrich,
                                                    durante el tratamiento de la Ley Ómnibus la semana pasada.
                                                </p>
                                                <br>
                                                <p>En su convocatoria, los trabajadores de Argra expresaron su rechazo
                                                    contundente a la represión indiscriminada del Gobierno nacional, que
                                                    arremetió contra el pueblo argentino manifestándose en defensa de
                                                    sus derechos. Denunciaron que la brutalidad policial, promovida por
                                                    la Ministra Bullrich, constituye un ataque directo a los
                                                    trabajadores de prensa, quienes fueron víctimas de agresiones
                                                    físicas y detenciones arbitrarias.
                                                </p>
                                                <br>
                                                <p>Sebastian Vricella, integrante de ARGRA y participante del camarazo,
                                                    explicó que la actividad fue concebida como un acto simbólico para
                                                    repudiar la violencia ejercida por el Ministerio de Seguridad y las
                                                    fuerzas de seguridad. Vricella lamentó que la represión, perpetrada
                                                    bajo el manto de la democracia, se repita de manera recurrente y
                                                    afecta la integridad de los trabajadores de prensa, quienes solo
                                                    buscan ejercer su trabajo de manera libre y segura.
                                                </p>
                                                <br>
                                                <p>Las palabras de Vricella reflejan el sentimiento de toda una
                                                    comunidad que exige respeto por su trabajo y por los derechos
                                                    fundamentales en un Estado democrático. El camarazo, convertido en
                                                    un símbolo de resistencia, destaca la importancia de la libertad de
                                                    expresión y la protección de los trabajadores de prensa en la
                                                    construcción de una sociedad justa y democrática.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre14')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">OPOSICIÓN A LA REFORMA LABORAL DE MILEI SE HACE EVIDENTE
                                            </a>
                                        </h2>
                                        <p><i>Tras el intento fallido de implementar la Reforma Laboral a través del
                                                DNU, la oposición al gobierno de Milei se fortalece, denunciando
                                                estrategias que vulneran los derechos laborales.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_reforma.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La batalla por la reforma laboral en Argentina toma un nuevo rumbo
                                                    tras el revés sufrido por el gobierno de Milei en su intento de
                                                    implementarla mediante un Decreto de Necesidad y Urgencia (DNU). La
                                                    estrategia de llevarla al Congreso, anunciada por Oscar Zago, jefe
                                                    del bloque oficialista, despierta críticas y desconfianza entre los
                                                    sectores sindicales y políticos opositores.
                                                </p>
                                                <br>
                                                <p>La implementación de la reforma laboral ha sido un objetivo
                                                    prioritario para el gobierno de Milei, quien busca adaptar el marco
                                                    laboral argentino a los cambios del mundo actual. Sin embargo, las
                                                    medidas propuestas han generado un fuerte rechazo en diversos
                                                    sectores de la sociedad, que ven en ellas una amenaza directa a los
                                                    derechos laborales conquistados con esfuerzo a lo largo de los años.
                                                </p>
                                                <br>
                                                <p>La resistencia se hace evidente tanto en el Congreso como en las
                                                    calles. Diputados de la oposición, como Emilio Monzó de Hacemos
                                                    Coalición Federal, han expresado su rechazo a ciertos puntos de la
                                                    reforma, señalando que vulneran derechos fundamentales de los
                                                    trabajadores. Asimismo, organizaciones sindicales como la CGT
                                                    intensifican sus movilizaciones y analizan la protesta, incluyendo
                                                    la posibilidad de un nuevo paro general.
                                                </p>
                                                <br>
                                                <p>La propuesta de reforma laboral enfrenta obstáculos significativos.
                                                    Aspectos como el banco de horas, la modificación de los aportes
                                                    sindicales y la limitación de las actividades gremiales encuentran
                                                    una fuerte oposición, mientras que otros como la redeterminación de
                                                    multas y el período de prueba podrían generar un debate más amplio
                                                    en el Congreso.
                                                </p>
                                                <br>
                                                <p>El escenario político argentino se torna cada vez más complejo, con
                                                    un gobierno empeñado en imponer una reforma laboral cuestionada por
                                                    amplios sectores de la sociedad. La lucha por la defensa de los
                                                    derechos laborales se intensifica, marcando un punto de inflexión en
                                                    el devenir político del país.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre15')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">UNIENDO FUERZAS EN TIEMPOS DE CRISIS
                                            </a>
                                        </h2>
                                        <p><i>Organizaciones sociales y sindicales se reúnen para abordar la situación
                                                actual y coordinar acciones en defensa del pueblo argentino.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_uniendo.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En un contexto de aguda crisis social y económica, las diversas
                                                    organizaciones que integran la Multisectorial por el Trabajo, la
                                                    Producción y la Soberanía Nacional se congregaron en la sede
                                                    nacional de la CTA-T para analizar la situación y definir
                                                    estrategias de acción.
                                                </p>
                                                <br>
                                                <p>En el encuentro participaron representantes de las dos CTA, la UTEP,
                                                    la Mesa de Organismos de Derechos Humanos, la confederación de
                                                    PyMes, el MP25M y otras entidades comprometidas con la defensa de
                                                    los derechos del pueblo argentino.
                                                </p>
                                                <br>
                                                <p>Uno de los temas centrales abordados fue el reciente avance de la ley
                                                    Ómnibus en el Congreso, una medida que ha despertado fuertes
                                                    críticas y preocupaciones en diversos sectores de la sociedad. Se
                                                    destacó especialmente la represión violenta y desproporcionada
                                                    contra los manifestantes que se congregaron frente al Congreso para
                                                    expresar su rechazo a esta ley.
                                                </p>
                                                <br>
                                                <p>Además, se evaluó el proceso de formación de multisectoriales en
                                                    distintas regiones del país, con el objetivo de fortalecer la unidad
                                                    de los distintos sectores sociales y sindicales en la lucha por los
                                                    derechos y la justicia.
                                                </p>
                                                <br>
                                                <p>En este sentido, se hizo un llamado a apoyar las iniciativas de los
                                                    movimientos sociales, como la "Fila contra el hambre" impulsada por
                                                    la UTEP, que busca visibilizar la situación de vulnerabilidad de
                                                    miles de familias argentinas afectadas por la crisis económica.</p>
                                                <br>
                                                <p>También se repudiaron enfáticamente las declaraciones de la Ministra
                                                    de Seguridad, Patricia Bullrich, quien justificó la represión
                                                    policial y anunció la continuidad de estas prácticas en futuras
                                                    manifestaciones.</p>
                                                <br>
                                                <p>Por último, se acordó participar activamente en el "Congreso de las
                                                    chicas y los chicos del pueblo", una iniciativa que busca dar voz a
                                                    la juventud y promover la participación ciudadana en la construcción
                                                    de un país más justo y solidario.</p>
                                                <br>
                                                <p>La Multisectorial por el Trabajo, la Producción y la Soberanía
                                                    Nacional reafirmó su compromiso de seguir trabajando en la
                                                    articulación de acciones y la defensa de los derechos del pueblo
                                                    argentino frente a las políticas regresivas y autoritarias
                                                    impulsadas por el gobierno de Javier Milei.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre16')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA BANCARIA Y LA CGT UNIDAS CONTRA LA PRIVATIZACIÓN DEL
                                                BANCO NACIÓN
                                            </a>
                                        </h2>
                                        <p><i>La fuerza sindical se levanta: Trabajadores bancarios contra la
                                                privatización del Banco Nación, respaldados por la CGT y la CTA de los
                                                Trabajadores.</i>
                                        </p>
                                        <br>

                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_bancaria2.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En un acto de firmeza y unidad, la Asociación Bancaria, liderada por Sergio Palazzo, y la Confederación General del Trabajo (CGT), encabezada por el triunvirato Daer, Acuña y Moyano, se unieron en un rechazo contundente a la privatización del Banco Nación propuesta por el gobierno de Javier Milei. La masiva asamblea, que congregó a 3,000 trabajadores bancarios en el edificio del Banco Nación, marcó un hito en la defensa de una entidad emblemática para el país.
                                                </p>
                                                <br>
                                                <p>El secretario general de La Bancaria, Sergio Palazzo, expresó con firmeza la postura del gremio: "El Banco Nación no se vende, se defiende". Palazzo agradeció el respaldo de las centrales obreras y destacó su papel en la protección de los derechos laborales. En este sentido, hizo referencia a las acciones judiciales que impidieron una avanzada reforma laboral, señalando que "el movimiento obrero fue clave en esta batalla".
                                                </p>
                                                <br>
                                                <p>Por su parte, los líderes de la CGT, Héctor Daer, Carlos Acuña y Pablo Moyano, manifestaron su apoyo irrestricto a la lucha de La Bancaria y reafirmaron su compromiso con la defensa de los derechos de los trabajadores. Daer destacó la importancia de la unidad sindical en momentos de crisis y llamó a fortalecerla para enfrentar los desafíos que se presentan.
                                                </p>
                                                <br>
                                                <p>El respaldo de la CTA de los Trabajadores, representada por Hugo Yasky, y de otros sindicatos como SUTEBA, liderado por Roberto Baradel, evidencia la amplitud y la fuerza del movimiento obrero organizado en su rechazo a la privatización del Banco Nación.
                                                </p>
                                                <br>
                                                <p>El acto culminó con un abrazo simbólico al Banco Nación, en el que participaron dirigentes políticos, empresariales, pymes y diversos sectores sociales, demostrando que la defensa de la entidad bancaria pública trasciende las fronteras gremiales y se convierte en un símbolo de resistencia y unidad en tiempos de incertidumbre.</p>
                                                <br>
                                                <p>En definitiva, la asamblea de La Bancaria y la CGT dejó en claro que la privatización del Banco Nación no será aceptada sin una fuerte resistencia por parte de los trabajadores y de la sociedad en su conjunto. Es un mensaje claro al gobierno de Milei y a cualquier intento de desmantelar las instituciones públicas en beneficio de intereses privados. La unidad y la firmeza de los trabajadores son la mejor garantía para defender lo que es de todos los argentinos.</p>
                                                <br>
                                                <p>Por último, se acordó participar activamente en el "Congreso de las
                                                    chicas y los chicos del pueblo", una iniciativa que busca dar voz a
                                                    la juventud y promover la participación ciudadana en la construcción
                                                    de un país más justo y solidario.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre17')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CONTUNDENTE PARO NACIONAL DE CTERA
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 27/02/2024</p>
                                        <p><i>CTERA encabeza contundente paro docente nacional en reclamo de mejores condiciones laborales y educativas. Docentes de todo el país exigen paritarias y fondos para la educación.</i>
                                        </p>
                                        <br>
                                        <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/7UFyJXVkSJQ?si=ANptzOsNboMJdowo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article>
                                       {{--  <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_bancaria2.svg"
                                                alt="">
                                        </figure> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En una demostración de unidad y determinación, el paro nacional docente convocado por la Confederación de Trabajadores de la Educación de la República Argentina (CTERA) ha obtenido un 80% de adhesión en las diez jurisdicciones que debían iniciar el ciclo lectivo. Este paro, más que una medida de protesta por salarios dignos y condiciones laborales justas, es un llamado urgente ante la crisis que afecta la educación pública y los derechos de los trabajadores de la enseñanza.
                                                </p>
                                                <br>
                                                <p>A lo largo y ancho del país, se han desarrollado actos, concentraciones y movilizaciones en los que miles de docentes han levantado su voz exigiendo una Paritaria Nacional Docente, el pago integral del Fondo Nacional de Incentivo Docente (FONID) y del Fondo Compensador de Desigualdades. Salarios, así como fondos destinados a comedores escolares y programas educativos. Estas demandas son esenciales para asegurar una educación de calidad y el bienestar de los trabajadores del sector, incluyendo a los jubilados.
                                                </p>
                                                <br>
                                                <p>En la Ciudad de Buenos Aires, el epicentro de la protesta fue el Palacio Pizzurno, donde la Secretaria General de CTERA, Sonia Alesso, recordó las luchas del gremio: "Veo caras de compañeros con quienes compartimos la Carpa Blanca, compañeros con quienes resistimos el ajuste de los 90". Estas palabras resaltan la persistencia de los docentes argentinos en la defensa de sus derechos a lo largo de los años.
                                                </p>
                                                <br>
                                                <p>La realidad en las escuelas y comunidades vulnerables es crítica: los recursos destinados a comedores escolares y apoyo educativo son insuficientes, dejando a muchos docentes y alumnos sin las herramientas necesarias para el aprendizaje. Esta situación refleja una profunda desigualdad que va en contra del principio de una educación inclusiva y equitativa para todos.
                                                </p>
                                                <br>
                                                <p>Alesso agregó: "Luchamos para que no haya diferencias salariales basadas en el lugar de nacimiento. Todos merecen oportunidades justas para enseñar y aprender". Esta lucha por la igualdad de oportunidades y por una educación pública de calidad impulsa a los docentes a seguir adelante.</p>
                                                <br>
                                                <p>El paro docente es también un llamado al gobierno nacional para que responda a estas demandas con políticas educativas que promuevan la equidad y el bienestar de toda la comunidad educativa. Mañana, la CTERA se reunirá con el gobierno, y el miércoles evaluará la situación en un encuentro de Secretarios Generales.</p>
                                                <br>
                                                <p>La lucha continúa bajo la lluvia, con los trabajadores de la educación exigiendo paritarias justas y fondos adecuados para la educación. La CTERA, votando unánimemente un plan de lucha nacional, demuestra su compromiso con la defensa de los derechos de los trabajadores y una educación pública de calidad para todos.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre18')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CGT: DEFENSA FIRME DE LOS TRABAJADORES FRENTE A POLÍTICAS LABORALES DEL GOBIERNO
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                        <p><i>La CGT, firme en su defensa de los trabajadores, enfrenta las políticas laborales del gobierno con determinación y unidad</i>
                                        </p>
                                        <br>
                                      {{--   <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/7UFyJXVkSJQ?si=ANptzOsNboMJdowo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_cgtpario.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En un contexto político marcado por la confrontación y las medidas controvertidas del gobierno nacional, la Confederación General del Trabajo (CGT) se erige como un bastión de resistencia, defendiendo los derechos de los trabajadores frente a las políticas neoliberales impulsadas por el presidente Javier Milei.
                                                </p>
                                                <br>
                                                <p>El anuncio del mandatario durante la Asamblea Legislativa, donde propuso una reforma laboral y la limitación de los mandatos sindicales, entre otras, ha sido recibido con medidas firmes de rechazo por parte de la central obrera. Ante esta situación, la CGT ha optado por una estrategia de confrontación activa, buscando aliados en los ámbitos políticos y legislativos para frenar estas iniciativas que atentan contra los derechos laborales conquistados con años de lucha y sacrificio.
                                                </p>
                                                <br>
                                                <p>En este sentido, Pablo Moyano, líder del sindicato de Camioneros y referente destacado de la CGT, ha convocado a los gobernadores y legisladores peronistas a unirse en defensa de los intereses de los trabajadores. La central obrera ha dejado en claro que no permitirá que se vulneren los derechos laborales adquiridos, y que luchará con todas sus fuerzas contra las políticas que buscan precarizar el empleo y flexibilizar las condiciones laborales.
                                                </p>
                                                <br>
                                                <p>La propuesta de Milei de priorizar los acuerdos específicos entre trabajadores por sobre los convenios colectivos del sector ha generado un profundo malestar en la CGT, que considera que esto significaría un retroceso en materia de derechos laborales. Héctor Daer, titular de Sanidad y miembro influyente de la central obrera, ha advertido sobre los verdaderos objetivos del gobierno, que buscan debilitar a los sindicatos y favorecer a los sectores empresariales.
                                                </p>
                                                <br>
                                                <p>En conclusión, la CGT se encuentra en la primera línea de resistencia ante las embestidas del gobierno nacional, defendiendo los derechos de los trabajadores y luchando por un país más justo y solidario. En este contexto, la unidad del movimiento sindical y su compromiso con la defensa de los derechos laborales se presentan como herramientas fundamentales para enfrentar los desafíos que se avecinan.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre19')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LAS TRABAJADORAS Y LOS TRABAJADORES FUIMOS, SOMOS Y SEREMOS QUIENES GARANTIZAMOS LA DEMOCRACIA

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                        <p><i>Declaraciones de la Secretaria de Género de la CGT, Noé Ruiz hacia el 8M, Día Internacional de la Mujer Trabajadora en la CGT.</i>
                                        </p>
                                        <br>
                                      {{--   <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/7UFyJXVkSJQ?si=ANptzOsNboMJdowo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_noe2.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La secretaria de Género de la CGT, Noé Ruiz, ante las declaraciones del presidente Milei en la apertura de sesiones señaló que “es necesario extremar nuestros esfuerzos para poner límite a las políticas con las que el gobierno nacional agrede a las y los trabajadores". Luego sostuvo: "Estamos padeciendo una dominación por carencias y limitaciones. Esto abarca la salud, la educación, la vivienda, el hambre, todo. Ello nos hace esforzarnos a reflexionar sobre las formas de la organización y profundizar la unidad. El Gobierno quiere abolir los temas de género, la diversidad, la cultura. Quiere borrar de un plumazo los derechos de las trabajadoras y los trabajadores. Quiere negarnos los espacios de diálogo y de debate, por eso desprecia al Parlamento. Pero las trabajadoras y los trabajadores fuimos, somos y seremos quienes garantizamos la democracia”. 
                                                </p>
                                                <br>
                                                <p>Además expresó que "ante el avance del ajuste que golpea a las compañeras trabajadoras en su posibilidad de acceso a la vivienda, en temas de salud, de educación, de las familias, en complicaciones y mayores exigencias en cuestiones de cuidado y la imposibilidad de los adultos mayores de tener una jubilación que les permita comer y acceder la salud, la feminización de la pobreza está creciendo de forma exponencial".
                                                </p>
                                                <br>
                                                <p>"Es necesario que seamos muy cuidadosas en cómo ocupar las calles y los esquemas de seguridad y cuidado por un 8M en Paz , sin provocaciones y enfaticemos nuestros reclamos. Es muy triste ver ver las pérdidas de trabajo y los despidos en el sector público" dijo y enfatizó: “basta de violencias y femicidios”.
                                                </p>
                                                <br>
                                                <p>Asimismo, respecto de la amenaza de cierre de Télam, declaró que que “es lamentable que el gobierno quiera quitarle el derecho a la voz al pueblo y negar la libertad de prensa, y acuerdos internacionales, muy negativo, afectará la visión de Argentina ante el mundo."
                                                </p>
                                                <br>
                                                <p>“Hoy más que nunca es necesario rescatar la lucha de las mujeres trabajadoras en huelga, a principios del siglo XX, que lucharon por iguales salarios y Derechos. No daremos un paso atrás en los derechos adquiridos, puede haber reformas por cambios en el mundo del trabajo, consensuadas emtre trabajo y capital, pero no somos la casta, somos trabajadoras. Las mujeres hemos demostrado en nuestro país y el mundo que estamos preparadas para afrontar los desafios. Es necesaria la Justicia social con trabajo digno, no más violencia y paz social para todas y todos lo argentinos, esa es hoy nuestra lucha”, concluyó Noé Ruiz.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre20')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">TRABAJADORES METALÚRGICOS RECLAMAN A ACINDAR POR PARÁLISIS Y DESPIDOS

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 07/03/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La fábrica permaneció paralizada en marzo, generando despidos y preocupación entre los trabajadores</i>
                                        </p>
                                        <br>
                                        <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/OT4oMYWRJFs?si=554nnw0P_8LKa125" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article>
                                        {{-- <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_noe2.svg"
                                                alt="">
                                        </figure> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En Villa Constitución, trabajadores metalúrgicos y diversos gremios se han manifestado frente a la empresa siderúrgica Acindar, en reclamo por la parálisis que sufrió la fábrica durante el mes de marzo. La situación ha generado despidos por goteo y una profunda incertidumbre laboral en la región. 
                                                </p>
                                                <br>
                                                <p>Los trabajadores expresan su preocupación por la falta de respuestas por parte de la empresa ante esta situación, que afecta no solo a los empleados directos, sino también a la economía local ya las familias que dependen de la actividad de la fábrica.
                                                </p>
                                                <br>
                                                <p>La manifestación y el corte de ruta buscan visibilizar esta problemática y exigir a Acindar que tome medidas concretas para garantizar la continuidad de la producción y el empleo en la región. Los trabajadores han manifestado su disposición a continuar con las medidas de fuerza si no obtienen respuestas satisfactorias por parte de la empresa.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre21')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CTERA EXIGE AL GOBIERNO EL PAGO DEL FONID

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 14/03/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La demanda, que beneficiaría a más de un millón de docentes, busca garantizar el derecho al cobro de este rubro esencial para el salario de los educadores.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/OT4oMYWRJFs?si=554nnw0P_8LKa125" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_fonid2.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En un acto sin precedentes, la Confederación de Trabajadores de la Educación de la República Argentina (CTERA) ha decidido llevar su reclamo por el pago del Fondo Nacional de Incentivo Docente (FONID) al ámbito judicial. Este fondo, vital para el sustento de más de un millón de docentes en todo el país, se encuentra pendiente de pago por parte del Gobierno Nacional correspondiente a los años 2023 y 2024. 
                                                </p>
                                                <br>
                                                <p>La demanda, presentada en el Juzgado Nacional de 1ra. Instancia del Trabajo Nro. 8 de Capital Federal, representa un hito en la lucha por los derechos laborales de los educadores argentinos. CTERA, representada por su Secretaria General Sonia Alesso y con el respaldo del letrado Dr. Marcelo Bustos Fierro, busca garantizar el derecho de los docentes al cobro de un rubro que forma parte esencial de sus salarios.
                                                </p>
                                                <br>
                                                <p>El FONID, establecido por ley y contemplado en el marco de la Paritaria Nacional Docente, es una asignación presupuestaria fundamental para los trabajadores de la educación. Sin embargo, a pesar de contar con la asignación presupuestaria correspondiente, el Gobierno Nacional ha postergado el pago de este fondo, afectando gravemente la economía de los docentes y sus familias.
                                                </p>
                                                <br>
                                                <p>Esta acción legal, enmarcada en el procedimiento sumarísimo, busca poner fin a la injusticia y asegurar que los docentes reciban el pago que les corresponde por su incansable labor en las aulas. La solidaridad y el apoyo hacia los educadores en esta lucha por sus derechos laborales son fundamentales en este momento crucial para la educación en Argentina.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre22')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ATE EN PIE DE GUERRA: MILES DE DESPIDOS Y PARITARIAS A LA BAJA

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 26/03/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Asociación Trabajadores del Estado (ATE) protagonizó una jornada nacional de protesta contra el Gobierno, denunciando la amenaza de despidos masivos y paritarias insuficientes.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/OT4oMYWRJFs?si=554nnw0P_8LKa125" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_aten.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En medio de un clima de tensión laboral, la Asociación Trabajadores del Estado (ATE) ha alzado su voz en una contundente jornada de protesta contra las políticas laborales del Gobierno de Argentina. La amenaza de despidos masivos, que afectaría a decenas de miles de trabajadores cuyos contratos vencen el 31 de marzo, sumado al magro aumento del 8% ofrecido en la última paritaria, han sido los detonantes de esta movilización. 
                                                </p>
                                                <br>
                                                <p>ATE, uno de los gremios más importantes del país, que nuclea a trabajadores estatales de diferentes áreas, ha expresado su profundo rechazo a las medidas propuestas por el Gobierno, considerándolas un ataque directo a los derechos laborales de los trabajadores. Según informó el gremio en un comunicado, el Gobierno busca desvincular al 30% de los 70 mil trabajadores cuyos contratos están próximos a vencer. Esta situación ha generado un clima de incertidumbre y malestar entre los empleados estatales, que ven peligrar su fuente de trabajo en un contexto económico ya de por sí difícil.
                                                </p>
                                                <br>
                                                <p>La jornada de protesta de ATE incluyó movilizaciones, ruidazos, asambleas y cortes de rutas en todo el país, con la participación activa de trabajadores de distintos ministerios y organismos públicos. Los reclamos de ATE son claros y contundentes: renovación automática de los contratos, reincorporación de despedidos sin causa, aumento salarial acorde a la inflación y pase a planta permanente de los trabajadores precarizados.
                                                </p>
                                                <br>
                                                <p>Además de los despidos, ATE también rechaza el cierre de organismos públicos y la privatización de empresas estatales. En este sentido, el gremio defiende el Fondo de Garantía de Sustentabilidad (FGS) y solicita un aumento de emergencia para jubilados y pensionados.</p>
                                                <br>
                                                <p>Por otro lado, en el ámbito específico de la Administración Pública Nacional, ATE ha denunciado el "magro ofrecimiento" del Gobierno en la última paritaria, considerando que el 8% propuesto está muy por debajo de los últimos índices de inflación. Este descontento se suma al malestar generalizado entre los trabajadores estatales, que ven cómo sus salarios se erosionan mes a mes frente a la creciente inflación.</p>
                                                <br>
                                                <p>En este contexto, ATE ha dejado en claro que continuará en estado de alerta y movilización, dispuesto a defender los derechos de los trabajadores estatales y a enfrentar cualquier intento de ajuste por parte del Gobierno. La lucha por condiciones laborales dignas y por la defensa de los puestos de trabajo se ha convertido en una prioridad para el gremio, que busca garantizar la estabilidad y el bienestar de sus afiliados en un contexto económico y político cada vez más adverso.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre23')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">UNIDAD Y RESISTENCIA ANTE DESPIDOS Y REPRESIÓN

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Gremios se unen en Argentina para denunciar la militarización de los puestos de trabajo y los despidos bajo el gobierno de La Libertad Avanza. La conferencia de prensa, acompañada por diversos sindicatos, marca un llamado a la unidad y la resistencia ante las políticas que afectan a los trabajadores.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/OT4oMYWRJFs?si=554nnw0P_8LKa125" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_unidad.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>A 48 horas de la reunión del consejo directivo de la CGT y el congreso nacional de Camioneros, el clima sindical en Argentina se encuentra en ebullición. Daniel Catalano, titular de ATE Capital, encabezó una conferencia de prensa junto a una decena de gremios para denunciar la "militarización de los puestos de trabajo" y los "despidos arbitrarios" por parte del gobierno de La Libertad Avanza. 
                                                </p>
                                                <br>
                                                <p>En un acto de solidaridad y unidad, los gremios presentes respaldaron el reclamo de los empleados estatales y plantearon sus propias reivindicaciones frente a las políticas privatizadoras y las censantías que amenazan a diversos sectores laborales.
                                                </p>
                                                <br>
                                                <p>Sergio Palazzo, líder de La Bancaria, hizo un llamado a "activar la unidad" en el movimiento obrero para "generar un gran paro nacional" en respuesta a las políticas de ajuste del gobierno de ultraderecha. Palazzo enfatizó que "no podemos permitir que se dispongan los destinos de nuestro país en desmedro de la clase trabajadora".
                                                </p>
                                                <br>
                                                <p>Por su parte, Paco Manrique del SMATA, instó a la movilización "dentro de las estructuras sindicales" para una protesta organizada y efectiva.</p>
                                                <br>
                                                <p>La conferencia de prensa precedió a la reunión del consejo directivo de la CGT, donde se definirán los pasos a seguir por la central obrera, que se debate entre la convocatoria a una movilización o a un paro general en respuesta a la política económica de La Libertad Avanza.</p>
                                                <br>
                                                <p>En paralelo, el congreso nacional del sindicato de Camioneros reunirá a 20 mil trabajadores del sector. El gremio liderado por los Moyano firmó un acuerdo paritario que desafía las políticas de ajuste del gobierno, recuperando el poder adquisitivo de sus trabajadores. Ante la negativa del gobierno de homologar el acuerdo, Pablo Moyano prometió responder con un paro.</p>
                                                <br>
                                                <p>La denuncia de Catalano contra las autoridades por abuso de autoridad e incumplimiento de los deberes de funcionarios públicos marca un nuevo capítulo en la lucha sindical argentina, donde la unidad y la resistencia se erigen como pilares fundamentales en la defensa de los derechos laborales y la dignidad de los trabajadores.</p>
                                                <br>
                                                <p>En la conferencia de prensa, Catalano estuvo acompañado por Carmen Arias de la Asociación de Madres de Plaza de Mayo; Charly Pisoni de H.I.J.O.S; Victoria Montenegro, legisladora porteña de Unión por la Patria; Monona Rodríguez y Eduardo López de la Unión de Trabajadores de la Educación; Claudio Marín, del sindicato de telecomunicaciones FOETRA; Diego Morales, del Centro de Estudios Legales y Sociales; y Agustín Lecchi, del Sindicato de Prensa de Buenos Aires (Sipreba), entre otros.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre24')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ATE PROTESTA CONTRA DESPIDOS MASIVOS DEL GOBIERNO DE MILEI

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 09/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Asociación de Trabajadores del Estado (ATE) se enfrenta al gobierno en una batalla por los derechos laborales y contra la represión.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/OT4oMYWRJFs?si=554nnw0P_8LKa125" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_ateparo.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Asociación de Trabajadores del Estado (ATE) llevó a cabo un acto de protesta frente al Ministerio de Economía en rechazo a los despidos masivos de empleades estatales por parte del gobierno de Javier Milei. La manifestación siguió a una protesta en Plaza de Mayo, donde los líderes de ATE exigieron la reincorporación inmediata de los más de once mil trabajadores despedidos. 
                                                </p>
                                                <br>
                                                <p>Durante el acto, dirigentes de ATE denunciaron la presión policial, con la presencia de fuerzas represivas, como un intento del gobierno de frenar la voz popular. Daniel Catalano, secretario general de ATE Capital, expresó su preocupación por los despidos, destacando los recientes de 700 empleados públicos en el Ministerio de Salud y en el Ministerio de Trabajo.
                                                </p>
                                                <br>
                                                <p>Claudio Arévalo, secretario general de ATE Provincia, aseguró que los trabajadores estatales resistirán el embate del gobierno de Milei y llamó a la unidad de la clase trabajadora para derrotar al ajuste. Rodolfo Aguiar, secretario general de ATE Nacional, anunció un contra-pacto en respuesta al gobierno y llamó a movilizarse en Córdoba.
                                                </p>
                                                <br>
                                                <p>En un mensaje de unidad y lucha, los dirigentes de ATE se comprometieron a defender los derechos adquiridos en las calles y a resistir cualquier intento de ataque a los trabajadores estatales.</p>
                                                <br>
                                                <p>La protesta de ATE resalta en un contexto político y social tenso, donde el gobierno de Milei ha generado controversia con sus políticas de ajuste y despidos en el sector público. La presencia de fuerzas represivas en el acto refleja la tensión y el descontento social ante estas medidas.</p>
                                                <br>
                                                <p>El gobierno de Milei ha defendido los despidos como parte de un plan de ajuste necesario para la recuperación económica del país. Sin embargo, las críticas y protestas de organizaciones sindicales y sociales como ATE subrayan el impacto negativo de estas medidas en la vida de miles de trabajadores y sus familias.</p>
                                                <br>
                                                <p>ATE ha anunciado que continuará con sus acciones de protesta y resistencia ante los despidos y el ajuste del gobierno. La solidaridad y el apoyo de otras organizaciones sindicales y sociales son fundamentales en esta lucha por los derechos de los trabajadores estatales y la defensa de los servicios públicos.</p>
                                                <br>
                                                <p>En este contexto, la unidad y la movilización de los trabajadores se presentan como herramientas clave para enfrentar las políticas de ajuste y defender los derechos laborales y sociales conquistados en años de lucha.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre25')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">RUBÉN POLLO SOBRERO: VAMOS A UN GRAN PARO EL 9 DE MAYO

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 20/04/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El referente de la Unión Ferroviaria Oeste e Izquierda Socialista en el FIT Unidad, expresó fuertes críticas hacia el gobierno y la situación laboral en Argentina.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/OT4oMYWRJFs?si=554nnw0P_8LKa125" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_pollo.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En su declaración, destacó la importancia de enfrentar las políticas de ajuste y llamó a un paro contundente, parte de un plan de lucha nacional. Sobrero también mencionó la marcha federal educativa del 23 de abril y un encuentro nacional de luchadores en Plaza de Mayo el 27 de abril. 
                                                </p>
                                                <br>
                                                <p>El dirigente de la combativa Unión Ferroviaria Oeste y de Izquierda Socialista en el FIT Unidad, Rubén “Pollo” Sobrero, se refirió al paro convocado por la CGT: “Desde el Cuerpo de Delegados del Sarmiento llamamos a enfrentar la motosierra de Milei que está liquidando nuestros salarios y se ensaña contra las y los jubilados. Los ferroviarios estamos sufriendo los despidos de más de 100 compañeras y compañeros en infraestructura ferroviaria, el vaciamiento y tenemos la amenaza privatizadora de los ferrocarriles. El brutal ajuste y el creciente malestar popular provocaron que la CGT convoque al paro general del 9 de Mayo. Es lo que veníamos reclamando. Llamamos a que sea contundente, como parte de un plan de lucha nacional que tiene que continuar con un paro de 36 horas con movilización para derrotar el nefasto plan ultraderechista del gobierno.”
                                                </p>
                                                <br>
                                                <p>Sobrero finalizó: “El gobierno quiere una nueva ley ómnibus antiobrera, la reforma laboral y volver con el impuesto al salario, mientras los senadores escandalosamente se votan ellos mismos dietas millonarias. Y el recorte a las universidades llevó a una enorme reacción docente, no docente, estudiantil que se expresará de manera contundente en la gran marcha federal educativa del próximo martes 23 de abril. La predisposición para luchar es enorme. Hay que ganar las calles porque estamos convencidos que se puede derrotar el plan motosierra de Milei y el FMI. Y como no depositamos ninguna confianza en la dirigencia sindical, llamamos a tomar el paro en nuestras manos impulsándolo con asambleas en los lugares de trabajo. Y el sábado 27 de abril haremos un encuentro nacional de luchadores en Plaza de Mayo para impulsar una coordinación nacional de los sectores combativos”.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre26')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA CGT MARCHÓ POR EL DÍA DEL TRABAJADOR Y RATIFICÓ SU PLAN DE LUCHA

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 01/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La central obrera movilizó a miles de trabajadores y confirmó un paro general para el 9 de mayo, en rechazo a la Ley Bases aprobada por Diputados.</i>
                                        </p>
                                        <br>
                                        <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article>
                                        {{-- <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_pollo.svg"
                                                alt="">
                                        </figure> --}}
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Confederación General del Trabajo (CGT) encabezó este miércoles una multitudinaria movilización por el Día del Trabajador, bajo el lema "La Patria no se vende". La marcha, que comenzó a las 10 de la mañana en la avenida Independencia y Defensa y culminó en el monumento al Trabajo en Paseo Colón, se produjo en un contexto de creciente tensión laboral y social tras la media sanción de la Ley Bases por la Cámara de Diputados. 
                                                </p>
                                                <br>
                                                <p><b>Movilización masiva y reclamos</b>
                                                </p>
                                                <br>
                                                <p>La convocatoria fue masiva, con miles de trabajadores marchando en defensa de sus derechos y en protesta contra las políticas del gobierno de Javier Milei. El cotitular de la CGT, Héctor Daer, destacó la importancia de la movilización no solo como conmemoración del Día del Trabajador, sino también como una manifestación de los reclamos del movimiento obrero: “Hoy, nuestra presencia en las calles es un recordatorio de que los derechos laborales deben ser defendidos con firmeza. La Ley Bases pone en riesgo conquistas históricas y necesitamos mostrar nuestra unidad y determinación”.
                                                </p>
                                                <br>
                                                <p><b>Críticas a la Ley Bases</b></p>
                                                <br>
                                                <p>La reciente aprobación de la Ley Bases en la Cámara de Diputados ha generado un fuerte rechazo por parte de la CGT, que ve en este proyecto un intento de precarizar las condiciones laborales y debilitar la protección social. Durante la marcha, Daer expresó: "La Ley Bases es un retroceso para los trabajadores. No podemos permitir que se impongan reformas que vulneran nuestros derechos fundamentales".</p>
                                                <br>
                                                <p>La CGT ha instado al Senado a rechazar el proyecto, advirtiendo sobre las graves consecuencias que tendría su implementación en la vida de millones de trabajadores argentinos. "Esta ley no solo afecta a los trabajadores actuales, sino también a las futuras generaciones. Es nuestra responsabilidad frenarla", añadió Daer.</p>
                                                <br>
                                                <p><b>Paro general y plan de lucha</b></p>
                                                <br>
                                                <p>En la conferencia de prensa posterior a la marcha, la CGT confirmó que llevará adelante un paro general el próximo 9 de mayo, en protesta contra la Ley Bases y las políticas económicas del gobierno. Daer detalló que “hay una sumatoria de cuestiones irresueltas y una perspectiva de que se sigan acentuando. Eso nos va a llevar a una caída del poder adquisitivo y de compra de los ingresos mucho mayor”.</p>
                                                <br>
                                                <p>El paro general será el segundo desde que Javier Milei asumió la presidencia, reflejando el creciente descontento entre los trabajadores. “Es muy difícil esta ecuación entre precios y salarios. La gente no tiene plata para convalidar los precios que se plantean”, señaló Daer, enfatizando la urgencia de medidas que protejan el poder adquisitivo de los trabajadores.</p>
                                                <br>
                                                <p><b>Apoyo del Partido Justicialista</b></p>
                                                <br>
                                                <p>El Partido Justicialista (PJ) ha expresado su pleno respaldo a la convocatoria del paro y ha criticado duramente al gobierno de Milei. En un comunicado, el PJ manifestó: "Los trabajadores y jubilados no son ninguna casta. En un contexto de mega devaluación, recesión, inflación y tarifazos, es nuestro deber acompañar el reclamo de los trabajadores y jubilados de todo el país".</p>
                                                <br>
                                                <p><b>Conclusión</b></p>
                                                <br>
                                                <p>La movilización del 1 de mayo y el anuncio del paro general reflejan la determinación de la CGT de defender los derechos laborales y rechazar cualquier medida que los amenace. La central obrera ha dejado claro que continuará su plan de lucha hasta que se reviertan las políticas que considera perjudiciales para los trabajadores argentinos. La marcha no solo conmemoró el Día del Trabajador, sino que también envió un fuerte mensaje de unidad y resistencia frente a las reformas propuestas por el gobierno.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre27')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">SEGUNDO PARO GENERAL CONTRA EL GOBIERNO DE JAVIER MILEI

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 11/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Confederación General del Trabajo (CGT) calificó como "contundente" el segundo paro general contra el Gobierno de Javier Milei, destacando la adhesión masiva de trabajadores y llamando al Ejecutivo a reconsiderar su política de ajuste.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_2paro.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En una conferencia de prensa celebrada en el salón Felipe Vallese de la CGT, Héctor Daer, cotitular de la central obrera, expresó su satisfacción por la participación de los trabajadores en la medida de fuerza. Acompañado por otros dirigentes sindicales como Pablo Moyano y Carlos Acuña, Daer resaltó que el paro fue respaldado en todo el país y que fue una demostración clara del descontento de los trabajadores con la situación económica y laboral actual. 
                                                </p>
                                                <br>
                                                <p>El dirigente sindical también criticó la política de ajuste del Gobierno, especialmente en lo que respecta a la caída del salario y el aumento de la informalidad laboral. Daer instó al Ejecutivo a "tomar nota" de la expresión de los trabajadores y a reconfigurar su política económica para proteger los derechos laborales y sociales.
                                                </p>
                                                <br>
                                                <p>El paro general contó con una alta adhesión en diversos sectores, como el educativo y el de las estaciones de servicios, según informaron Moyano y Acuña. Además, se destacó la solidaridad de los trabajadores ante las posibles represalias de los empleadores y el Gobierno.
                                                </p>
                                                <br>
                                                <p>El proyecto de ley Bases, que será tratado por la Cámara de Senadores, también fue mencionado durante la conferencia. Daer advirtió sobre los efectos negativos que esta ley podría tener en los trabajadores, especialmente en términos de formalidad laboral y acceso a derechos sociales.</p>
                                                <br>
                                                <p>En conclusión, el segundo paro general contra el Gobierno de Javier Milei fue considerado como un éxito por parte de la CGT, que destacó la unidad y la determinación de los trabajadores en la defensa de sus derechos.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre28')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ATE LEGISLATURA HIZO UNA NUEVA ENTREGA DE LOS PREMIOS A LOS DERECHOS HUMANOS JORGE MORRESI

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 20/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La octava edición de los premios "Jorge Morresi" en la Legislatura porteña reconoció a destacadas figuras y organizaciones por su compromiso con la democracia y los derechos humanos.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_morre2.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Este lunes 20 de mayo, en el Salón Dorado de la Legislatura porteña, se realizó la octava edición de los premios “Jorge Morresi”, como reconocimiento especial a la trayectoria, al compromiso y a la defensa de la democracia y los derechos humanos, a distintas personalidades y organizaciones sociales. La ceremonia estuvo encabezada por la conducción de la delegación de la Legislatura de la Asociación de Trabajadores del Estado, a cargo de <b>Ezequiel Gennaro</b> y de <b>Noelia Martínez Pereyra</b>. 
                                                </p>
                                                <br>
                                                <p>Este año los distinguidos y las distinguidas fueron <b>Nora Cortiñas</b> y <b>Elia Espen</b>, de Madres de Plaza de Mayo Línea Fundadora; <b>Adolfo Pérez Esquivel</b>, Premio Nobel de la Paz; <b>Susana Rinaldi</b>, cantante, actriz y legisladora MC; <b>Graciela Blancat</b>, Coordinadora del Programa de DDHH de la Biblioteca Nacional Mariano Moreno; el ex diputado nacional <b>Lorenzo Pepe; Rodolfo Yanzón</b>, abogado querellante en los juicios de lesa humanidad, y <b>Daniel Catalano</b>, secretario general de ATE Capital, quien lo recibió por primera vez. Además, hubo reconocimientos colectivos a las dos organizaciones, <b>La Garganta Poderosa y CORREPI</b> (Coordinadora contra la Represión Policial e Institucional).
                                                </p>
                                                <br>
                                                <p>En la presentación, Ezequiel Gennaro, delegado general de ATE Legislatura, sostuvo que <b>“en estas épocas difíciles, en que se demoniza y se persigue a militantes popultares, y sobre todo, a los empleados estatales, los trabajadores debemos estar con la cabeza alta, peleando para que vuelvan el bienestar y la alegría, para todos los que vivimos en nuestro país”. Y añadió que “los premios Jorge Morresi son un reconocimiento a esos héroes y heroínas, que día a día luchan por un sociedad mejor”</b>.
                                                </p>
                                                <br>
                                                <p>Participaron del evento, los legisladores porteños Cele Fierro, Victoria Montenegro, Juan Pablo O Dezaile, Alejandro Grillo y Claudio Ferreño. Los premios Morresi son una distinción otorgada por la Junta Interna de la Asociación de Trabajadores del Estado (ATE) de la Legislatura de la Ciudad de Buenos Aires, y, entre otros, ya lo han recibido personalidades y entidades, como el ex presidente de Ecuador, Rafael Correa, los ex presidente y ex vicepresidente de Bolivia, Evo Morales y Álvaro García Linera, respectivamente; el juez Daniel Rafecas, el Equipo Argentino de Antropología Forense (EAAF),  entre otros y otras.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre29')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DESPIDOS EN EL INADI: CRÍTICAS POR DISCRIMINACIÓN

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 22/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Controversia por Despidos en el INADI: Mayoría del Colectivo LGTBIQ+ y Personas con Discapacidad Afectadas</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_inadi.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En una decisión que ha generado fuerte controversia, el Gobierno despidió a 120 trabajadores del Instituto Nacional contra la Discriminación, la Xenofobia y el Racismo (INADI). Según denuncias de ATE, la mayoría de las personas despedidas pertenecen al colectivo LGTBIQ+ y personas con discapacidad, lo que representa un ajuste del 40 por ciento del personal del organismo.
                                                </p>
                                                <br>
                                                <p>El despido de estas personas se realizó mediante un correo electrónico que indicaba que "no corresponde prorrogar su designación transitoria". Esta medida generó una rápida reacción del gremio y de los trabajadores, que se concentraron en torno a la sede del edificio en Avenida de Mayo al 1401. Desde ATE-INADI, se iniciaron medidas de fuerza que continuarán "hasta que haya una respuesta".
                                                </p>
                                                <br>
                                                <p>Entre los despedidos se encuentran personas con entre 10 y 25 años de antigüedad en sus puestos, y en el caso de las personas trans, sus puestos estaban cubiertos por la Ley de Cupo laboral Travesti Trans. Este despido masivo ha dejado áreas enteras del organismo desmanteladas y programas completos vaciados de contenido.
                                                </p>
                                                <br>
                                                <p>La interventora del INADI, Ángeles Quiroga, designada tras el anuncio del cierre del instituto en febrero y el traspaso de sus funciones al Ministerio de Justicia, ha sido duramente criticada por ATE, que la acusa de despedir compañeros sin cumplir con su tarea de promover la inclusión y los derechos que el organismo representa. ATE exige la urgente reincorporación de los despedidos y denuncia un nuevo avance en el desguace del Estado impulsado por el gobierno de Javier Milei.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre30')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PARO HISTÓRICO Y TRANSVERSAL: GREMIOS DOCENTES SE PLANTAN EN TODO EL PAÍS

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 24/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Con una adhesión masiva y la participación de gremios de todos los niveles educativos, docentes y no docentes realizaron una protesta nacional sin precedentes contra los recortes en el sistema educativo. La medida, que incluyó un acto frente al Congreso de la Nación, promete continuar ante la falta de respuesta del Gobierno.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_parodocente.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La jornada de protesta docente de este jueves será recordada como una de las más significativas de la historia reciente. Bajo el lema de unidad y resistencia, gremios de todos los niveles educativos, junto a trabajadores no docentes, llevaron a cabo un paro nacional con una adhesión masiva en respuesta al ajuste implementado por el gobierno de Javier Milei. La movilización incluyó una manifestación frente al Congreso de la Nación, donde se reclamó por la recomposición salarial, la restitución de transferencias presupuestarias y un aumento para los docentes jubilados.
                                                </p>
                                                <br>
                                                <p>El paro fue convocado por la Confederación de Trabajadores de la Educación de la República Argentina (Ctera), apoyada por otros sindicatos docentes de la CGT, como la Unión Docentes Argentinos (UDA), la Asociación del Magisterio de Enseñanza Técnica (Amet), la Confederación de Educadores Argentinos (CEA) y el Sindicato Argentino de Docentes Privados (Sadop).
                                                </p>
                                                <br>
                                                <p>“Este fue un paro con una participación altísima en todo el país”, aseguró Sonia Alesso, secretaria general de Ctera. Alesso destacó que la protesta fue “un hecho histórico” por su carácter transversal, abarcando todos los niveles del sistema educativo, desde el inicial hasta el universitario. En el acto frente al Congreso, Fabián Felman, titular de CEA, subrayó la importancia de la unidad nacional frente a políticas que, según él, buscan debilitar al movimiento obrero. "Este gobierno no va a reflexionar, porque es un gobierno de ricos", sentenció.
                                                </p>
                                                <br>
                                                <p>Alesso denunció la profunda caída del poder adquisitivo de los docentes, con salarios que en su mayoría están por debajo de la línea de pobreza. “El Gobierno no fijó el piso salarial nacional, por lo que seguimos con el del año pasado, de 250 mil pesos, que solo cobran cinco provincias. Otras 11 están entre 250 y 350 mil pesos”, explicó, resaltando la gravedad de la situación.</p>
                                                <br>
                                                <p>Además, Alesso acusó al Gobierno de incumplir las leyes fundamentales de la educación, incluyendo la Ley Nacional de Educación, la Ley de Financiamiento Educativo y la Ley de Educación Técnica Profesional. Hizo hincapié en el desfinanciamiento de fondos destinados a las provincias, como el Fondo Nacional de Incentivo Docente (Fonid), y recursos cruciales para comedores, copas de leche y la infraestructura escolar. Señaló que muchas obras en las provincias están paralizadas por recortes presupuestarios. "El próximo martes marcharemos nuevamente al Congreso para exigir a los legisladores que aprueben estas partidas", anunció.</p>
                                                <br>
                                                <p>Carlos de Feo, titular de la Federación Nacional de Docentes Universitarios (Conadu), criticó la falta de compromiso del Gobierno para resolver el conflicto. "En una reunión con el secretario de Trabajo, Julio Cordero, nos dijo que la educación es prioridad, pero a la hora de hablar de aumentos salariales, afirmó que no hay fondos. Es solo retórica", afirmó. “La negociación está estancada y no vemos un futuro claro”.</p>
                                                <br>
                                                <p>De Feo también advirtió sobre la continuidad de los reclamos, indicando que el conflicto se intensificará y habrá más movilizaciones en la calle. No descartó una nueva marcha universitaria en el segundo semestre, similar a la anterior.</p>
                                                <br>
                                                <p>Por su parte, el vocero presidencial, Manuel Adorni, reiteró que "no está prevista ninguna convocatoria de paritaria" y delegó la responsabilidad a las provincias. "Este es un país federal y las provincias deben resolver los temas docentes, incluyendo los salarios", sostuvo, criticando que este es "el tercer paro" docente del año.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre31')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA CGT MARCHARÁ AL CONGRESO CONTRA LA LEY BASES
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 28/05/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La movilización, anunciada por Pablo Moyano, tiene como objetivo "defender a los trabajadores". La central obrera rechaza la convocatoria al "Consejo de Mayo" propuesta por Javier Milei.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_leybases.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Confederación General del Trabajo (CGT), a través de su cotitular Pablo Moyano, confirmó que marchará en contra de la Ley Bases el día en que se debata en el Senado. Además, Moyano rechazó formar parte del Consejo de Mayo propuesto por Javier Milei, a quien criticó duramente, llamándolo "el hazmerreír del mundo".
                                                </p>
                                                <br>
                                                <p>Estas declaraciones se realizaron durante el plenario de la CGT en Pergamino, donde Moyano ratificó "el compromiso de la central obrera con la defensa de los trabajadores" y llamó a la unidad en defensa de los derechos laborales, oponiéndose al proyecto oficialista que ya cuenta con media sanción en Diputados pero enfrenta dificultades para conseguir consensos en Senadores.
                                                </p>
                                                <br>
                                                <p>Moyano criticó a senadores y gobernadores por apoyar un decreto de necesidad y urgencia que, según él, perjudica a los trabajadores y a los argentinos, a pesar de que "cantan la marcha peronista y al llegar al Congreso votan en contra de los trabajadores".
                                                </p>
                                                <br>
                                                <p>El líder de la CGT expresó su esperanza de que la Ley Bases sea rechazada y vuelva a Diputados para ser tratada el año que viene, destacando que cada vez más sectores salen a la calle en protesta. Moyano también rechazó el Consejo de Mayo propuesto por Milei, calificándolo como un "manotazo de ahogado" y una "chantada".</p>
                                                <br>
                                                <p>En otro orden, el ministro de Trabajo bonaerense y dirigente del gremio de curtidores, Walter Correa, también presente en el plenario, criticó la norma que, según él, busca la venta indiscriminada de recursos naturales, convirtiendo a Argentina en una colonia.</p>
                                                <br>
                                                <p>La CGT, en un contexto de creciente malestar, se suma a la oposición contra la Ley Bases y promete movilizarse en defensa de los derechos de los trabajadores, mientras el Gobierno se ve envuelto en polémicas por la gestión de alimentos destinados a comedores sociales.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre32')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CTA DENUNCIA AL GOBIERNO DE MILEI ANTE LA OIT
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 12/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Central de Trabajadores de la Argentina (CTA), liderada por Hugo Yasky, ha presentado una denuncia ante el Comité de Libertad Sindical de la Organización Internacional del Trabajo (OIT) acusando al gobierno de Javier Milei de violar los principios de libertad sindical y negociación colectiva.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_oit1.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En el documento presentado, la CTA enfatiza que el gobierno de Milei ha llevado a cabo despidos masivos e ilegales en la administración pública, contraviniendo los derechos históricamente defendidos por las organizaciones sindicales. Estas acciones, según la denuncia, constituyen una clara violación de los convenios internacionales sobre libertad sindical y negociación colectiva.
                                                </p>
                                                <br>
                                                <p>Desde la asunción del gobierno en diciembre último, se han producido múltiples despidos de trabajadores estatales bajo diversos decretos y resoluciones. En particular, el decreto 84/23 del 26 de diciembre pasado dispuso la no renovación contractual de los empleados ingresados en 2023 y la revisión de las contrataciones anteriores, lo que resultó en la cesantía de unos 20 mil trabajadores, con la amenaza de alcanzar los 70 mil, según declaraciones del propio presidente.
                                                </p>
                                                <br>
                                                <p>La CTA también denunció que el gobierno estigmatiza públicamente a los trabajadores estatales, calificándolos como militantes y minimizando el valor de su trabajo. Estas acciones, según la central sindical, reflejan una clara intención de deslegitimar y debilitar a las organizaciones sindicales y a sus representantes, llamándolos "casta" y prometiendo erradicarlos.
                                                </p>
                                                <br>
                                                <p>Ante esta situación, la CTA solicita la intervención urgente del Comité de Libertad Sindical de la OIT para investigar y detener las violaciones a los derechos laborales y sindicales en Argentina. Además, el secretario de Relaciones Internacionales de la CTA, Roberto Baradel, se reunió con el director general de la OIT, Gilbert Houngbo, para denunciar los atropellos del gobierno argentino contra los trabajadores.</p>
                                                <br>
                                                <p>En la reunión, Baradel planteó la preocupación por la situación argentina y por el principio rector del gobierno de Milei, que sostiene que "la justicia social es una aberración", contradiciendo uno de los temas fundamentales de la OIT. La CTA también denunció la decisión de Milei de despedir trabajadores, incumplir leyes y avasallar los derechos laborales fundamentales, reclamando la necesidad de que la OIT intervenga para propiciar el diálogo y la justicia social en Argentina.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre33')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA CGT REPUDIA LA VIOLENCIA CONTRA MANIFESTANTES
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 15/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La CGT repudió la represión a manifestantes pacíficos frente al Congreso y denunció provocación por parte de las fuerzas de seguridad.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_repu2.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Confederación General del Trabajo (CGT) emitió un comunicado en el que repudia la violenta represión sufrida por trabajadores y ciudadanos que se manifestaban pacíficamente frente al Congreso Nacional en rechazo a la aprobación de la Ley Bases. Denunciaron que las fuerzas de seguridad, bajo el mando de la ministra Patricia Bullrich, provocaron a los manifestantes para luego desatar una represión brutal, con el objetivo de generar una reacción que justifique el uso de gas pimienta.
                                                </p>
                                                <br>
                                                <p>La central obrera expresó su solidaridad con los manifestantes que fueron reprimidos en la Plaza de los Dos Congresos mientras expresaban su rechazo a la mencionada ley. Durante la jornada, sindicatos, organizaciones de derechos humanos, de la Economía Popular, militantes políticos, trabajadores de prensa y transeúntes se hicieron presentes. Incluso algunos legisladores fueron víctimas de la represión y debieron recibir atención médica.
                                                </p>
                                                <br>
                                                <p>Según la CGT, las fuerzas de seguridad no dudaron en reprimir incluso en presencia de adultos mayores y diputados nacionales. Utilizaron balas de goma, carros hidrantes y motos para golpear a quienes se cruzaban en su camino, con la clara intención de infundir terror. Sin embargo, los trabajadores no respondieron a estas provocaciones.
                                                </p>
                                                <br>
                                                <p>En un comunicado firmado por el secretario y la cosecretaria de Derechos Humanos de la CGT, Julio Piumato y Maia Volcovinsky, se afirma que la represión fue planificada para despejar la zona durante la votación de la ley, extendiéndose luego a los cacerolazos que se multiplicaron en el Congreso y otros puntos de la ciudad. Se denuncia la detención arbitraria de numerosos transeúntes para generar violencia.</p>
                                                <br>
                                                <p>La CGT compara esta situación con la vivida en 2000 durante la votación de la Ley Banelco, destacando la falta de legitimidad y consenso. En este contexto, la central obrera hace un llamado a la cordura, destacando que la represión nunca podrá acallar la voz del pueblo. Concluyen que tarde o temprano, habrá justicia.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre34')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PARO NACIONAL DE ACEITEROS CONTRA LA LEY BASES
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 28/06/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Federación de Trabajadores del Complejo Industrial Oleaginoso, Desmotadores de Algodón y Afines de la República Argentina (FTCIODyARA) inició un paro por tiempo indeterminado en todas las plantas aceiteras del país en rechazo a las medidas regresivas incluidas en la Ley Bases y el Paquete Fiscal.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_aceite2.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La FTCIODyARA lanzó un paro que abarca a todas las plantas aceiteras de Argentina, afectando tanto a grandes multinacionales como a establecimientos de la industria nacional. La medida se tomó en protesta contra el tratamiento en Diputados de las "medidas regresivas" incluidas en la Ley Bases y el Paquete Fiscal propuestos por el Ejecutivo.
                                                </p>
                                                <br>
                                                <p>Entre los reclamos principales, los aceiteros exigen que no se aprueben las leyes que, según ellos, reinstalarían el Impuesto al Salario, promulgarían una Reforma Laboral anti obrera y rematarían el patrimonio público de la nación. La medida de fuerza se mantendrá hasta nueva información.
                                                </p>
                                                <br>
                                                <p>En un comunicado oficial, la organización gremial expresó: "Nuestra organización gremial reafirma el profundo rechazo contra la Ley Ómnibus denominada ‘Bases’ por el gobierno nacional que incluye, entre otras medidas negativas, una Reforma Laboral regresiva y el remate del patrimonio público con privatizaciones y entrega de recursos comunes del pueblo argentino, junto al Paquete Fiscal que incluye enormes beneficios para los más ricos y la reinstalación del impuesto al Salario, mal llamado ‘Ganancias’, que alcanzará a la práctica totalidad de aceiteros y desmotadores de algodón".
                                                </p>
                                                <br>
                                                <p>Desde la Federación, se enfatiza que el proyecto ha regresado del Senado a la Cámara de Diputados con un carácter aún más agresivo contra la clase trabajadora, buscando limitar el derecho constitucional de huelga y habilitar despidos y persecución contra quienes lo ejerzan. "Es necesario enfatizar que este proyecto vuelve del Senado a la Cámara de Diputados con un carácter aún más agresivo contra la clase trabajadora, buscando limitar el derecho constitucional de huelga y habilitar despidos y persecución contra quienes lo ejerzan", subraya el comunicado.</p>
                                                <br>
                                                <p>La comisión directiva del gremio cierra el comunicado con una declaración firme: "Nuestra lucha es por la defensa de los derechos laborales, sindicales y democráticos de toda la clase trabajadora argentina, y por el Salario Mínimo Vital y Móvil según su definición constitucional y legal que garantiza la vida digna para nuestras familias".</p>
                                                <br>
                                                <p>Este conflicto se enmarca en un contexto de creciente tensión social y política en el país, donde las políticas del gobierno han sido criticadas por su impacto negativo en los derechos laborales y sociales. La reacción de los aceiteros es un reflejo de la resistencia de la clase trabajadora ante medidas que consideran perjudiciales para sus condiciones de vida y laborales. La resolución de este conflicto será clave para el futuro de las relaciones laborales en Argentina y para la estabilidad social del país.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre35')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA CGT CONTRAATACA: BATALLA LEGAL POR LOS SALARIOS
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 04/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La central obrera se prepara para una nueva ofensiva judicial, esta vez contra la reinstalación del impuesto a las ganancias sobre los sueldos, que afecta a varios sectores laborales.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_impuesto.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En un nuevo capítulo de resistencia sindical, la Confederación General del Trabajo (CGT) ha decidido redoblar esfuerzos para frenar la reinstalación del impuesto a las ganancias sobre los salarios. Luego de haber presentado un amparo exitoso contra el capítulo laboral del Decreto de Necesidad y Urgencia (DNU) 70/2023, los líderes sindicales ahora apuntan sus cañones contra el retroceso impositivo impulsado por el gobierno de Javier Milei.
                                                </p>
                                                <br>
                                                <p>La CGT, encabezada por Mario Manrique, Pablo Moyano, Héctor Daer, Carlos Acuña y Andrés Rodríguez, ha vuelto a encontrar consenso tras algunas tensiones internas. La falta de un plan unificado para resistir la sanción de la Ley de Bases y el Paquete Fiscal había generado divisiones, pero la necesidad de enfrentar el impuesto a las ganancias ha reunificado a la dirigencia sindical.
                                                </p>
                                                <br>
                                                <p>No todos los gremios serán afectados por este impuesto, pero los petroleros, aceiteros y pilotos de aerolíneas están entre los primeros perjudicados. Estos sectores ya han comenzado a trabajar con sus abogados para preparar presentaciones judiciales que frenen lo que consideran un golpe directo a los trabajadores. La CGT planea una acción institucional similar a la que presentó contra el DNU 70/2023, que aún sigue vigente por la falta de tratamiento en la Cámara de Diputados.
                                                </p>
                                                <br>
                                                <p>Días atrás, la central obrera emitió un contundente comunicado en rechazo al regreso del impuesto al trabajo. “Este impuesto representa un duro golpe a los ya deprimidos ingresos de los trabajadores”, señalaron, advirtiendo que la medida agravará la pérdida del poder adquisitivo, potenciando los índices de pobreza en un contexto de recesión y desempleo crecientes. La CGT también denunció que, mientras se fomentan prácticas como la evasión y el fraude laboral, se desfinancian los sistemas de seguridad social y se generan nuevos contribuyentes entre los trabajadores.</p>
                                                <br>
                                                <p>"Se condonan multas, se fomenta la evasión, el fraude en materia laboral, se desfinancian los sistemas de seguridad social, pero se generan nuevos contribuyentes: los trabajadores, imposibilitados de las prerrogativas de evasión o blanqueos de las que se benefician los grandes contribuyentes", reza el comunicado. Además, la CGT advirtió que utilizará todas las herramientas a su alcance para proteger los ingresos de quienes realmente producen riqueza en Argentina.</p>
                                                <br>
                                                <p>La unidad en la CGT se manifiesta también en la lucha contra el artículo de la Ley de Bases que considera el bloqueo de una empresa motivo suficiente para el despido con causa. El gremio de camioneros, en particular, se prepara para enfrentar esta disposición, argumentando que puede ser utilizada contra cualquier actividad sindical legítima.</p>
                                                <br>
                                                <p>La CGT también debe definir su posición respecto al intento del gobierno de involucrarlos en la reglamentación de la reforma laboral que incluye la Ley de Bases. Existe un consenso general en no participar en este proceso, ya que quedar "pegado" a la redacción de la reglamentación no beneficia a ninguno de los integrantes del consejo directivo.
                                                </p>
                                                <br>
                                                <p>Otro punto crucial a definir es la participación en el Pacto de Mayo, convocado por la Casa Rosada para el 9 de julio en Tucumán. Milei busca una foto rodeado de gobernadores, expresidentes, legisladores, jueces y dirigentes sindicales. Sin embargo, estos últimos deben decidir si se sumarán a un pacto en el que no tuvieron participación en la redacción.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre36')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Plenario Nacional de la CTA-T con Axel Kicillof
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 14/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Construir una salida política para confrontar con el modelo de la miseria planificada.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_plenario.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En la ciudad de La Plata se realizó el Plenario Nacional de la Central de Trabajadores y Trabajadoras de la Argentina, con la presencia del gobernador de la provincia de Buenos Aires, Axel Kicillof; del Ministro de Trabajo de PBA, Walter Correa; del ex Ministro de Trabajo, Carlos Tomada, así como de secretarixs generales y delegadxs de las distintas regionales de la CTA-T de todo el país. 
                                                </p>
                                                <br>
                                                <p>El secretario general de la CTA-T y diputado nacional, Hugo Yasky, apeló a la unidad del movimiento obrero y de las centrales sindicales para enfrentar las políticas del gobierno de Javier Milei "para que las víctimas de la motosierra de recortar salarios y echar trabajadores sepan que no están en soledad".
                                                </p>
                                                <br>
                                                <p>"Este gobierno posee la fortaleza que le da tener detrás de sí la concurrencia de los grupos corporativos más poderosos de la República Argentina, del poder económico y financiero del país", describió Yasky y agregó: "El éxito o el fracaso de lo que pretenden hacer depende de que puedan cumplir su cometido que es destruir al movimiento sindical. De nosotros depende, en gran medida, que no lo puedan hacer".
                                                </p>
                                                <br>
                                                <p>Para concluir, señaló: "El camino es organizar una resistencia que nos permita construir la salida política, que sea capaz de confrontar con el modelo de miseria y represión sistematizada y que implique la distribución de la riqueza y la defensa de los Derechos Humanos".</p>
                                                <br>
                                                <p>En el cierre del encuentro, el Gobernador de la Provincia de Buenos Aires compartió sus reflexiones con el auditorio y afirmó que el gobierno de Milei “es una formidable estafa electoral”. Y explicó que en campaña el actual presidente “decía que no se puede cambiar si están siempre los mismos, pero convocó a Caputo, Sturzenegger y Bullrich, un trío de fracasadores seriales que estuvo en todos los gobiernos neoliberales”.</p>
                                                <br>
                                                <p>Kicillof celebró que venía de cerrar paritarias con los trabajadores del estado provincial. Lo que demuestra que “a pesar del recorte de fondos a la provincia por 6,3 millones de millones de pesos que de forma anticonstitucional le fueron arrebatados por la autoridades nacionales, estamos cumpliendo con un mandato para darle más dignidad a lxs laburantes".</p>
                                                <br>
                                                <p>Por último, Axel señaló que Milei, “aunque tenga esas ideas estrafalarias y sea el único anarcocapitalista realmente existente sobre la tierra, no puede desoír o incumplir los deberes que le impone la Constitución Nacional que son derechos consagrados y no son optativos”. Por eso afirmó que “si a Milei le va bien con su modelo de sociedad dual extractivista a la Argentina le va a ir muy mal”.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre37')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MOYANO DENUNCIA ATAQUE A CAMIONEROS POR PARTE DE CABA
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 23/07/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Pablo Moyano critica duramente la decisión de Jorge Macri sobre los choferes de grúas y denuncia la falta de soluciones del gobierno de Javier Milei</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_camion.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El conflicto entre el sindicato de Camioneros y la administración de Jorge Macri ha escalado tras la decisión del jefe de gobierno porteño de estatizar a 300 choferes de grúas encuadrados en el gremio. Esta medida, anunciada recientemente, ha llevado a una notable disminución en la recolección de basura en la Ciudad de Buenos Aires, generando una acumulación de residuos en las calles. 
                                                </p>
                                                <br>
                                                <p>Pablo Moyano, secretario adjunto del sindicato, ha expresado su firme rechazo a la estatización y al intento de cambiar el convenio laboral de los trabajadores. En declaraciones radiales, Moyano denunció las “irregularidades” en las empresas de recolección de basura y cuestionó la lógica de que “un barrendero pague Ganancias”, resaltando las graves inconsistencias en las políticas de recolección y el impacto negativo sobre los trabajadores.
                                                </p>
                                                <br>
                                                <p>En respuesta a la medida de Macri, que incluye la cancelación del proceso licitatorio para el servicio de grúas y acarreo, el sindicato ha decidido reducir la recolección de basura como forma de protesta. Moyano aclaró que no se trata de un paro total, sino de una manifestación bajo el convenio actual, con una reducción en el tiempo de trabajo para expresar el descontento.
                                                </p>
                                                <br>
                                                <p>El jefe de gobierno porteño, Jorge Macri, justificó su decisión argumentando la necesidad de “cuidar cada peso de los contribuyentes” y prometió una revisión exhaustiva del servicio de grúas. Según Macri, el servicio continuará a cargo de la Ciudad a un costo significativamente menor, aunque esto ha sido visto por el sindicato como un mero intento de ganar tiempo sin resolver el fondo del problema.</p>
                                                <br>
                                                <p>En otro frente, Pablo Moyano criticó duramente al gobierno nacional de Javier Milei. En referencia a la reciente audiencia del Consejo del Salario, el sindicalista expresó su escepticismo, afirmando que el gobierno no ofrece soluciones reales y que las negociaciones resultan en medidas que afectan directamente a los trabajadores, como la reimplementación del impuesto a las Ganancias. Moyano aseguró que muchos trabajadores siguieron operando durante la pandemia, mientras que hoy se enfrentan a cargas impositivas injustas.</p>
                                                <br>
                                                <p>Moyano también abordó la disputa interna en la CGT sobre cómo enfrentar al gobierno de Milei. Mientras algunos sectores buscan una oposición dura, otros prefieren explorar vías de diálogo. El sindicalista adelantó que los gremios del transporte, bajo su liderazgo, están considerando judicializar la nueva normativa del impuesto a las Ganancias.</p>
                                                <br>
                                                <p>Finalmente, el secretario adjunto del sindicato de Camioneros señaló que no se han fijado fechas para futuras movilizaciones o paros, dejando claro que la central obrera está en proceso de debate interno sobre la mejor estrategia de lucha frente a un gobierno que considera ineficaz y perjudicial para los trabajadores.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre38')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CGT REACTIVA PROTESTAS ANTE EL GOBIERNO DE MILEI
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 04/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La central obrera se prepara para una nueva marcha el 7 de agosto, en respuesta al ajuste y la reforma laboral del gobierno. La estrategia incluye movilizaciones con las CTA y movimientos sociales.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_central.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La CGT ha decidido abandonar la inercia observada desde el paro general del 9 de mayo y se prepara para un nuevo ciclo de movilizaciones. La primera manifestación será una marcha programada para el 7 de agosto, en el día de San Cayetano, con la participación de las dos CTA y movimientos sociales. La táctica elegida para enfrentar al gobierno de Javier Milei es la de "golpear y salir", estrategia que será definida con mayor precisión en un próximo plenario de regionales. 
                                                </p>
                                                <br>
                                                <p>La crisis comenzó días después de la asunción de Luis Caputo como ministro de Economía, cuando anunció una devaluación del 118%. Este ajuste provocó un impacto inmediato en los trabajadores, llevando a la CGT a tomar medidas rápidas. Inicialmente, la central sindical emprendió acciones legales contra el DNU 70/2023 y convocó un paro general el 24 de enero. Aunque la CGT participó en movilizaciones hasta el 9 de mayo, experimentó un periodo de calma que no reflejaba la creciente tensión social. Los sectores más dialoguistas de la CGT, conocidos como los "gordos" y "independientes", intentaron negociar con el secretario de Trabajo, Julio Cordero, sin éxito, y la ley Bases, que afectó la legislación laboral, fue sancionada sin la intervención del peronismo en el Congreso.
                                                </p>
                                                <br>
                                                <p>En la reciente reunión del consejo directivo de la CGT, se acordó retomar la iniciativa y asegurar el éxito en las convocatorias futuras. La marcha del 7 de agosto se plantea como una oportunidad para movilizar a los trabajadores bajo la consigna de "paz, pan y trabajo". Pablo Moyano destacó que la protesta será pacífica pero multitudinaria, abordando temas como la recesión, despidos, reforma laboral, ganancias y apoyo a comedores y merenderos.
                                                </p>
                                                <br>
                                                <p>El fracaso en las negociaciones con el gobierno ha llevado al sector dialoguista a adoptar una táctica más activa. Andrés Rodríguez, titular de UPCN, propuso la estrategia de "golpear y salir", que fue aceptada por el consejo directivo. Esta estrategia debe ser ratificada en un plenario de regionales previsto para la segunda quincena de agosto. La CGT planea coordinar estas acciones con las dos CTA y organizaciones sociales que representan a trabajadores no registrados. A pesar de estos esfuerzos, persiste una queja entre los dirigentes gremiales por la falta de liderazgo político del peronismo, resumida en el desalentador "estamos solos".</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre39')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">DANIEL YOFRA: “LAS EMPRESAS QUERÍAN CONFLICTO PARA PRESIONAR AL GOBIERNO”
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 12/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Las agroexportadoras buscan presionar al Gobierno a través del conflicto con los aceiteros, especulando con cambios en el dólar y las retenciones.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_yofra.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Luego de casi una semana de conflicto en Rosario entre el sindicato de aceiteros y las industrias del sector agroexportador, aún no se vislumbra un acuerdo. Daniel Yofra, secretario general de la Federación de Aceiteros, declaró que los trabajadores solicitan un aumento salarial del 26%, mientras que las empresas ofrecen un 17% en cuotas. En una reciente entrevista, Yofra acusó a las agroexportadoras de utilizar el conflicto como herramienta de presión sobre el Gobierno para obtener un dólar a 1.800 pesos y la reducción de retenciones. 
                                                </p>
                                                <br>
                                                <p>Yofra destacó que la falta de avance en las negociaciones se debe a que las empresas no han solicitado la conciliación obligatoria, a pesar del impacto del paro en las exportaciones y el ingreso de divisas. Además, criticó la política gubernamental, argumentando que el actual Ministerio de Trabajo, bajo la dirección de un representante de las patronales, no está resolviendo los problemas de los trabajadores.
                                                </p>
                                                <br>
                                                <p>Las empresas agroexportadoras, según Yofra, parecen estar especulando con el conflicto para presionar al Gobierno, recordando huelgas anteriores donde se ha solicitado la intervención gubernamental en temas como el valor del dólar y las retenciones. En su opinión, esta estrategia busca que el Gobierno tome nota de las pérdidas ocasionadas por el paro.
                                                </p>
                                                <br>
                                                <p>El dirigente sindical también arremetió contra la política oficialista hacia los sindicatos, señalando que no se trata de mejorar las condiciones laborales, sino de conservar los acuerdos existentes. Criticó la gestión actual y pasada por su falta de compromiso con la mejora de las condiciones de los trabajadores, y mencionó que los aportes sindicales se utilizan para capacitar y mejorar la calidad de vida de los trabajadores.</p>
                                                <br>
                                                <p>Yofra enfatizó que el salario mínimo ha aumentado un 122% en el último año, mientras que el precio de la canasta básica se ha disparado un 250%. Frente a estas disparidades, instó a cambiar la percepción sobre los trabajadores y cuestionó los altos salarios de los políticos en comparación con las demandas salariales de los aceiteros.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre40')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ESTATALES EXIGEN FIN DE LA PRECARIZACIÓN Y AUMENTOS SALARIALES EN CABA
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 14/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Trabajadores estatales de CABA exigen el fin de la precarización y aumentos salariales justos ante la inflación, mientras el gobierno porteño los mantiene en una situación desfavorecedora.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_estatales.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Este martes, trabajadores estatales de la Ciudad de Buenos Aires se movilizan frente al Ministerio de Hacienda Porteño para exigir el fin de la precarización laboral y ajustes salariales acordes a la inflación. La Asociación de Trabajadores del Estado (ATE) revela que más de 20 mil empleados del Gobierno de la Ciudad de Buenos Aires (GCBA) se encuentran facturando como monotributistas, con una pérdida salarial que superó el 22% en 2023 y una paritaria 2024 que acentúa el deterioro del poder adquisitivo, con un ajuste del 5% por debajo de la inflación real. Muchos de estos trabajadores han estado en esta situación durante más de seis años. 
                                                </p>
                                                <br>
                                                <p>Romina Piccirillo, secretaria de Comunicación de ATE Capital, denuncia que “los monotributistas están desfasados respecto a los trabajadores de planta permanente, realizando las mismas tareas por un salario cercano a los $400 mil sin cobertura de ART, sin cargas sociales y sin seguro”. Además, los trabajadores que se encuentran en esta situación deben enfrentar el aumento de las cuotas del monotributo establecidas por el Gobierno nacional.
                                                </p>
                                                <br>
                                                <p>ATE Capital exige el pase a planta de estos trabajadores precarizados y un aumento salarial que se equipare al del resto de los empleados de planta. También propone que los monotributistas no tributen Ingresos Brutos. El gremio demanda que la suma fija recientemente acordada sea extendida a todos los empleados y que se considere como parte del salario remunerativo.
                                                </p>
                                                <br>
                                                <p>Un ejemplo notable de esta precarización en el GCBA es la Dirección de Prevención del Delito, que cuenta con 1.400 trabajadores, de los cuales solo 60 están en planta permanente o transitoria. ATE también critica los mecanismos de retiro voluntario impulsados por el Gobierno de Jorge Macri, que han dejado en crisis a varios organismos, incluido el Consejo de Derechos de Niños, Niñas y Adolescentes, exacerbando la crisis con amenazas y descuentos por inasistencias injustificadas. Esta situación está generando un impacto negativo en la atención y cumplimiento de funciones esenciales.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre41')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CORREA INAUGURÓ LA SUBDELEGACIÓN DE EZEIZA CON GRANADOS Y MOYANO
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 19/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La nueva sede en Ezeiza permitirá a los vecinos realizar trámites sin necesidad de viajar a Lomas de Zamora y representa un contraste con las políticas del gobierno nacional.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_ezeiza.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El ministro de Trabajo de la provincia de Buenos Aires, Walter Correa, inauguró hoy la nueva subdelegación Regional de Trabajo y Empleo en Ezeiza. En el acto, también participaron el intendente Gastón Granados y el secretario General Adjunto de Camioneros, Pablo Moyano. La nueva oficina, ubicada en el Shopping Los Nogales en calle Las Hortensias Nº31, permitirá a los vecinos realizar consultas y trámites del Ministerio de Trabajo sin tener que trasladarse hasta la Delegación de Lomas de Zamora. 
                                                </p>
                                                <br>
                                                <p>Esta apertura es parte de una política más amplia del gobernador Axel Kicillof, que busca acercar el Estado a la población mediante la creación de nuevas sedes en toda la provincia. Correa destacó que esta medida tiene como objetivo ratificar los derechos laborales y ofrecer herramientas accesibles a los trabajadores, a diferencia de la política del gobierno nacional, que ha sido criticada por su falta de atención a las necesidades del sector laboral.
                                                </p>
                                                <br>
                                                <p>Durante el acto, el ministro Correa y el intendente Granados firmaron un convenio en el que el municipio cede el uso de las instalaciones para el funcionamiento de la nueva subdelegación. Granados enfatizó la importancia de seguir luchando por los derechos de los trabajadores en un contexto de amenazas a esos derechos, y Moyano resaltó que la presencia del Estado provincial es crucial frente a las políticas nacionales que, según él, buscan desmantelar los logros laborales.
                                                </p>
                                                <br>
                                                <p>El acto contó también con la presencia de varios funcionarios del Ministerio de Trabajo, incluyendo la jefa de Gabinete Cecilia Cecchini, el subsecretario de Relaciones del Trabajo Andrés Reveles, y otros directores provinciales. Este evento resalta la creciente preocupación y el esfuerzo por proteger los derechos de los trabajadores en un momento de incertidumbre política.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre42')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CTA RECHAZA VETO DE MILEI A LA LEY DE MOVILIDAD PREVISIONAL
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 25/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La Central de Trabajadores y Trabajadoras de la Argentina (CTA-T) cuestiona duramente el veto presidencial a la ley de movilidad previsional y la decisión de destinar $100 mil millones a la SIDE.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_movilidad.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>En un comunicado de prensa, la Central de Trabajadores y Trabajadoras de la Argentina (CTA-T) ha expresado su firme rechazo al veto presidencial sobre la ley de movilidad previsional, recientemente aprobada por el Congreso. La ley, diseñada para ajustar mensualmente los haberes mínimos en función del Índice de Precios al Consumidor (IPC) y agregar un 8,1% para cubrir la inflación de enero, pretendía elevar el haber mínimo de $234.540 a $251.427 en septiembre, asegurando que el ingreso más bajo del sistema contributivo alcanzara los $317.704. 
                                                </p>
                                                <br>
                                                <p>El presidente Javier Milei, quien ha declarado que "no hay plata para los jubilados", ha optado en cambio por firmar un decreto de $100 mil millones destinado a la Secretaría de Inteligencia (SIDE). Este presupuesto había sido previamente rechazado por la Cámara de Diputados, generando una fuerte controversia.
                                                </p>
                                                <br>
                                                <p>La CTA-T, en su comunicado, critica esta decisión como una clara muestra de prioridades erradas, donde el gasto en seguridad interna supera el necesario apoyo a los jubilados. La organización también ha destacado que la movilización de hoy, en la que participaron miembros de la Multisectorial en Defensa de la Seguridad Social, tuvo como objetivo expresar el rechazo a las políticas del gobierno y exigir un ajuste que no perjudique a los sectores más vulnerables.
                                                </p>
                                                <br>
                                                <p>El comunicado subraya que el ajuste económico propuesto por el gobierno no solo ignora las necesidades de los jubilados, sino que también profundiza la desigualdad al beneficiar a los sectores más poderosos a expensas de los trabajadores y jubilados. La CTA-T destaca que la situación actual es una transferencia injusta de recursos hacia unos pocos, mientras que los jubilados y sectores vulnerables quedan desprotegidos.</p>
                                                <br>
                                                <p>En respuesta a estas medidas, se está conformando una mayoría en el Congreso que busca marcar límites a las políticas de ajuste del gobierno. La CTA-T, junto con distintos sectores sociales, como docentes, universitarios y coordinadoras de jubilados, está trabajando para promover una política más justa y equitativa.</p>
                                                <br>
                                                <p>El comunicado finaliza con un llamado a la defensa de los derechos de los jubilados, subrayando que el veto a la ley de movilidad es una injusticia que debe ser rechazada en favor de una política que priorice el bienestar de todos los ciudadanos.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre43')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL GOBIERNO DESPIDE TRABAJADORES POR MOTIVOS IDEOLÓGICOS
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 26/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>ATE Capital denunció que la administración de La Libertad Avanza impulsa despidos por razones políticas y la desaparición de organismos estatales clave.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_despido.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Asociación Trabajadores del Estado (ATE) Capital emitió un comunicado en el que acusó al gobierno de La Libertad Avanza de llevar a cabo una política de despidos discriminatorios y persecución ideológica. Según el sindicato, las filtraciones de los últimos días revelan que los despidos no solo se justifican en la supuesta reorganización estatal, sino también por motivos políticos, sindicales y de afiliación partidaria. 
                                                </p>
                                                <br>
                                                <p>"El Gobierno, no contento con destruir el Estado y mantener salarios de pobreza, ahora pretende despedir por pertenecer a un partido político o sindicato", expresó ATE Capital, que hace ocho meses denuncia lo que consideran "un ataque sistemático contra el Estado y sus trabajadores".
                                                </p>
                                                <br>
                                                <p>Desde ATE Capital aseguran que, en una primera instancia, la administración de La Libertad Avanza comenzó a perseguir al cupo trans, lo que derivó en el cierre del Instituto Nacional contra la Discriminación, la Xenofobia y el Racismo (INADI). En los últimos meses, afirman que el gobierno intensificó la persecución a empleados por razones políticas, gremiales y de salud. "Hoy persiguen a cualquiera que se comprometa con construir una realidad distinta a la crueldad impuesta por el Estado", sostuvieron desde el sindicato.
                                                </p>
                                                <br>
                                                <p>El comunicado del gremio hace énfasis en que los despidos actuales pueden ser considerados discriminatorios, ya que están motivados por etnia, raza, género, religión, afiliación política o gremial, entre otros. "Estos despidos son una clara muestra de la vuelta del autoritarismo al Estado", afirmaron.</p>
                                                <br>
                                                <p>La gestión de La Libertad Avanza, según ATE Capital, no busca solamente reducir la planta del Estado, sino también eliminar voces disidentes y consolidar un modelo de persecución ideológica dentro de la administración pública. "Como en las épocas más oscuras de nuestra historia, se dice defender la libertad, pero lo que realmente se aplica es un autoritarismo descarado", concluyeron en su denuncia.</p>
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre44')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PRIMERA REUNIÓN DEL PAPA CON LA CÚPULA DE LA CGT EN SEPTIEMBRE
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 27/08/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Dirigentes de la CGT se reunirán con el Papa Francisco para presentar un informe detallado sobre el impacto de las políticas de Javier Milei en el ámbito laboral y social.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_papacgt.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El Papa Francisco recibirá el 16 de septiembre a la cúpula de la CGT en el Vaticano, en un encuentro inédito en el que los líderes sindicales entregarán un documento que expresa su preocupación por las políticas económicas del presidente Javier Milei. Esta será la primera vez que Francisco reciba a una delegación completa de la central obrera, que incluirá a los secretarios generales Héctor Daer y Pablo Moyano, además de Gerardo Martínez, Andrés Rodríguez, José Luis Lingeri y Maia Volcovinsky. 
                                                </p>
                                                <br>
                                                <p>El documento que presentarán los sindicalistas aborda las reformas laborales impulsadas por la administración de Milei y otros aspectos de su política económica que han generado tensión entre la CGT y el Gobierno. La central obrera ha expresado su desacuerdo a través de dos paros generales en los primeros meses de la gestión de Milei y su retiro de la mesa del diálogo social en el marco del Pacto de Mayo.
                                                </p>
                                                <br>
                                                <p>El Papa Francisco se encontrará con los sindicalistas poco después de regresar de una gira por Asia, que comenzará en Indonesia el 2 de septiembre y finalizará en Singapur el 13 del mismo mes. Esta reunión con la CGT se suma a otros encuentros recientes del Papa con figuras críticas del Gobierno argentino, como el gobernador de La Rioja, Ricardo Quintela.
                                                </p>
                                                <br>
                                                <p>La visita de los líderes sindicales al Vaticano marca un momento significativo en la relación entre la CGT y el Papa Francisco, quienes previamente habían tenido audiencias individuales pero nunca como una comitiva conjunta. El encuentro será una oportunidad para que los sindicalistas expresen sus preocupaciones directamente al Sumo Pontífice sobre las reformas laborales y su impacto en la situación laboral y social del país.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre45')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MILEI VULNERA LOS DERECHOS LABORALES DE LOS AERONÁUTICOS
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 15/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El gobierno avanza con medidas que limitan el derecho a huelga, ignorando los compromisos internacionales de Argentina y la protección constitucional de los trabajadores.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_aeronauticos.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El reciente anuncio del presidente Javier Milei de declarar la aviación como un "servicio esencial" ha generado polémica. La medida, que busca imponer niveles mínimos de servicio, atenta contra el derecho fundamental de los trabajadores a la huelga, protegido tanto por la Constitución argentina como por convenios internacionales.
                                                </p>
                                                <br>
                                                <p>Stephen Cotton, secretario general de la Federación Internacional de los Trabajadores del Transporte (ITF), calificó la decisión como "regresiva" y "peligrosa". Según Cotton, la aviación no es un servicio esencial en el sentido legal estricto, y cualquier intento de limitar las huelgas en este sector contraviene los principios de la Organización Internacional del Trabajo (OIT), que Argentina ha ratificado.
                                                </p>
                                                <br>
                                                <p>La ITF, que representa a más de 17 millones de trabajadores en todo el mundo, denunció que el gobierno de Milei está ignorando la legislación argentina. La ley establece que una comisión independiente debe determinar qué servicios son esenciales y qué niveles mínimos deben mantenerse. Sin embargo, el gobierno está avanzando sin consultar a los sindicatos ni respetar este procedimiento.
                                                </p>
                                                <br>
                                                <p>Las principales centrales sindicales del país, la CGT y la CTA, ya han llevado el caso a la OIT, mientras la ITF se prepara para denunciar al gobierno argentino si se avanza con la reglamentación. Para Cotton, cualquier acto administrativo que imponga esta medida sin seguir el marco legal constituiría un abuso de autoridad y una violación de las obligaciones internacionales del país.
                                                </p>
                                                <br>
                                                <p>El conflicto, que amenaza con escalar, no solo afecta los derechos laborales, sino que plantea un serio desafío a la democracia argentina. “Cuando un gobierno ataca los derechos laborales, está atacando los cimientos mismos de la democracia”, advirtió Cotton.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre46')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">EL PAPA FRANCISCO IMPULSA LA DEFENSA DEL TRABAJO ANTE LA CGT 
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 17/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>En un encuentro con Pablo Moyano y Héctor Daer, el Papa llamó a preservar la justicia social frente a las reformas laborales del gobierno. </i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_papatrabajo.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El Papa Francisco recibió en la Ciudad del Vaticano a una delegación de la Confederación General del Trabajo (CGT) encabezada por Pablo Moyano y Héctor Daer, instando a los sindicalistas a “defender la justicia social como instrumento de equilibrio de las sociedades modernas”. La reunión, que tuvo lugar en la sede de Santa Bárbara, se prolongó por más de una hora y sirvió como un espacio para analizar la situación política y socioeconómica actual de Argentina, marcada por las políticas de ajuste del gobierno de Javier Milei.
                                                </p>
                                                <br>
                                                <p>Los líderes sindicales expresaron su profunda preocupación por las reformas laborales promovidas por La Libertad Avanza (LLA) y coincidieron con el Papa en la urgencia de dignificar el trabajo. Resaltaron la necesidad de establecer un diálogo social entre sindicatos, el Gobierno y el sector empresarial, buscando soluciones conjuntas a los desafíos que enfrenta el país.
                                                </p>
                                                <br>
                                                <p>Daer compartió que el planteo central fue el camino hacia la defensa de la dignidad del trabajo, un principio fundamental en la conducta social y la dignidad humana. “El Papa nos exhortó a defender esta cuestión y a defender la justicia social como instrumento de equilibrio de las sociedades modernas”, afirmó. Durante el encuentro, también se abordó el impacto de las crisis globales, reconociendo que “las convulsiones del mundo no sólo son nuestra coyuntura, sino que vivimos en un mundo eternamente convulsionado”.
                                                </p>
                                                <br>
                                                <p>Las principales centrales sindicales del país, la CGT y la CTA, ya han llevado el caso a la OIT, mientras la ITF se prepara para denunciar al gobierno argentino si se avanza con la reglamentación. Para Cotton, cualquier acto administrativo que imponga esta medida sin seguir el marco legal constituiría un abuso de autoridad y una violación de las obligaciones internacionales del país.
                                                </p>
                                                <br>
                                                <p>Adicionalmente, se discutió la necesidad de proteger a los niños y jóvenes de la influencia del narcotráfico, fortaleciendo la comunicación con la comunidad educativa. La posibilidad de una visita pastoral de Francisco a Argentina también fue tema de conversación. “Él dijo que quiere venir a la Argentina”, aseguró Daer, quien destacó que el Papa tiene compromisos previos, pero que “si Dios quiere, va a venir”.
                                                </p>
                                                <br>
                                                <p>La comitiva de la CGT incluyó a figuras destacadas como Andrés Rodríguez (Estatales), Gerardo Martínez (Uocra) y Marina Jaureguiberry (Sadop), entre otros. Daer enfatizó que la reunión representó a “todos los sectores” de la central obrera, incluyendo a los compañeros de la Economía Popular, marcando un claro compromiso con la defensa de la dignidad del trabajo en el país.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre47')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA CTA VUELVE A SER UNA SOLA 
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 18/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La reunificación de la Central de Trabajadores Argentinos marca un nuevo capítulo tras 15 años de división.. </i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_1cta.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Central de Trabajadores Argentinos (CTA) se reunificó oficialmente, uniendo a la CTA de los Trabajadores y la CTA Autónoma, un evento anunciado por los líderes de ambas organizaciones, Hugo “Cachorro” Godoy y Hugo Yasky, en una reciente entrevista radial. Este acuerdo se produce en un contexto de creciente tensión con el gobierno actual, lo que ha llevado a ambas vertientes a reconocer la necesidad de una respuesta unificada ante políticas que afectan a los sectores más vulnerables.
                                                </p>
                                                <br>
                                                <p>“Con este Gobierno no cabe otra posibilidad que confrontar en todos los planos que podamos, porque no deja abierta ninguna vía que no sea la de la confrontación”, afirmó Yasky durante la entrevista en AM 530, la radio de las Madres de Plaza de Mayo. Este llamado a la unidad surge de la observación de una “crueldad sistemática” en las decisiones económicas que impactan a jubilados, maestros y trabajadores del sector público, lo que ha incentivado a los líderes a actuar en conjunto.
                                                </p>
                                                <br>
                                                <p>Godoy complementó esta visión al señalar que la reunificación representa un proceso enriquecedor en un contexto marcado por la precarización laboral. “Es evidente el fraccionamiento que existe en la sociedad argentina y es una estrategia del poder efectivizarlo también en el seno de la clase trabajadora”, explicó. La historia de la CTA se remonta a los años 90, cuando se formó como una respuesta a la situación laboral de los trabajadores y a las decisiones de quienes eligieron aliarse con el entonces presidente Menem.
                                                </p>
                                                <br>
                                                <p>Ambos líderes coincidieron en la responsabilidad histórica que tienen frente a la actual administración, que han calificado de antidemocrática. “La salida de esto tiene que ser emancipadora”, concluyó Godoy, haciendo énfasis en la importancia de proporcionar no solo capacidad de resistencia, sino también propuestas concretas para enfrentar el modelo económico actual.
                                                </p>
                                                <br>
                                                <p>Este nuevo capítulo en la historia de la CTA representa una respuesta colectiva a los desafíos del presente y una promesa de movilización para proteger los derechos de los trabajadores en un clima político cada vez más adverso.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre48')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">CGT Y UNIVERSITARIOS UNIDOS CONTRA EL VETO A LA EDUCACIÓN
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 26/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La CGT se sumará a la marcha del 2 de octubre en la Plaza del Congreso, en defensa de la Ley de Financiamiento Educativo y en rechazo al ajuste impulsado por Javier Milei, en un contexto de crisis en la educación pública.</i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_cgt_uni.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La CGT confirmó su participación en la marcha del 2 de octubre en la Plaza del Congreso, en rechazo al veto a la Ley de Financiamiento Educativo anunciado por Javier Milei. La movilización, organizada por el Consejo Interuniversitario Nacional junto a diversos gremios, busca visibilizar la crisis que atraviesa la educación pública y frenar el ajuste gubernamental.
                                                </p>
                                                <br>
                                                <p>Pablo Moyano, líder de la CGT, expresó que es una obligación movilizarse y criticó las intenciones del presidente, indicando que este veto responde a las presiones del FMI. “Vamos a estar en la Plaza del Congreso”, afirmó Moyano, subrayando la importancia de apoyar a los trabajadores y a la educación.
                                                </p>
                                                <br>
                                                <p>La marcha se llevará a cabo como cierre de una semana de actividades que incluye clases abiertas, abrazos simbólicos en universidades, y un paro nacional. Esta serie de acciones busca poner de relieve la crisis educativa que se enfrenta debido a la falta de financiamiento y el recorte de presupuestos.
                                                </p>
                                                <br>
                                                <p>Daniel Ricci, de la Federación de Docentes de las Universidades (FEDUN), denunció que los salarios han perdido más del 60% de su poder adquisitivo desde la llegada de Milei al poder. “No hemos tenido respuestas a nuestros reclamos salariales, ni del presupuesto, ni de las becas que están congeladas hace más de un año”, aseguró.
                                                </p>
                                                <br>
                                                <p>La marcha del 2 de octubre será una oportunidad para que la CGT y el movimiento universitario se unan en defensa de la educación pública, planteando un frente común contra el ajuste y el desfinanciamiento que afectan tanto a estudiantes como a trabajadores del sector. La participación de la central obrera es clave para fortalecer la visibilidad de la crisis educativa y laboral en el país.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre49')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">TRABAJADORES DE AEROLÍNEAS ARGENTINAS PROTESTAN CONTRA PRIVATIZACIÓN

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 26/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>LEn una clara defensa de la línea de bandera, los trabajadores denunciaron que la privatización representa una amenaza no solo para sus empleos, sino también para el patrimonio nacional.
                                        </i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_aerolineas.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Los trabajadores de Aerolíneas Argentinas se movilizaron frente al Congreso en rechazo a la privatización de la línea de bandera, en un contexto donde los diputados debatían el proyecto en las comisiones de Transporte y Presupuesto. Pilotos, tripulantes, técnicos y trabajadores de carga expresaron su disconformidad con la medida, acompañados por sindicatos de la CGT y la CTA.
                                                </p>
                                                <br>
                                                <p>Durante la protesta, Pablo Biró, presidente de la Asociación de Pilotos de Líneas Aéreas (APLA), denunció que el gobierno busca estigmatizar a la empresa para justificar su venta, recordando las nefastas consecuencias de la privatización de los años '90. “El gobierno quiere que la sociedad se enoje para justificar, como en los ‘90, la privatización de la línea, que nos dejó consecuencias catastróficas”, afirmó.
                                                </p>
                                                <br>
                                                <p>Los manifestantes, uniformados y con pancartas en mano, se agruparon detrás de las vallas del operativo antipiquetes. En la plaza, se recordó cómo la privatización anterior de Aerolíneas, impulsada por Carlos Menem en 1990 y posteriormente vaciada en 2001, llevó a una pérdida significativa de patrimonio. A pesar de la recuperación de la aerolínea en 2008, los trabajadores advirtieron sobre el riesgo que representa la actual intentona privatizadora.
                                                <br>
                                                <p>La protesta surgió inicialmente por un reclamo salarial, ya que los trabajadores de Aerolíneas han perdido un 80% de su poder adquisitivo desde noviembre del año pasado. Andrés Junor, secretario gremial de Aeronavegantes, enfatizó que el gobierno ha ignorado sus demandas salariales, desviando la atención hacia la privatización.
                                                </p>
                                                <br>
                                                <p>Con proyectos de privatización en curso, los trabajadores sostienen que Aerolíneas Argentinas tiene un valioso patrimonio y advirtieron sobre el peligro de transferirlo a intereses privados. “Hay años de inversión puestos ahí, que están en riesgo de que se los transfieran a algún testaferro amigo de este gobierno”, señaló Gabriel Urrestarazu, piloto con 20 años de antigüedad.
                                                </p>
                                                <br>
                                                <p>La movilización de los trabajadores de Aerolíneas Argentinas pone de relieve no solo el temor por la pérdida de empleo y de la empresa, sino también el desafío que representa la defensa de la línea de bandera como un símbolo nacional frente a las políticas de ajuste y privatización.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre50')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">AUMENTO DEL SUBTE Y DENUNCIAS POR PELIGRO EN LA LÍNEA B

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 27/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>Los metrodelegados confirman que el boleto llegará a $860 sin SUBE registrada, mientras denuncian graves problemas de seguridad en la Línea B, calificándola como "una bomba de tiempo"

                                        </i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_subte.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El secretario ejecutivo de la Asociación Gremial de Trabajadores del Subte y Premetro (AGTSyP), Claudio Dellecarbonara, confirmó el aumento del boleto de subte, que pasará a costar $750 con la SUBE registrada y $860 sin ella. Sin embargo, más allá del golpe al bolsillo de los usuarios, el dirigente sindical alertó sobre un problema mayor: la grave situación de la Línea B. "Es una bomba de tiempo", señaló Dellecarbonara, advirtiendo que no se sabe cuándo ocurrirá una tragedia debido a las condiciones en las que opera esa línea.
                                                </p>
                                                <br>
                                                <p>Los trabajadores del subte denuncian desde hace años la presencia de asbesto, un mineral cancerígeno, en las formaciones y otros problemas estructurales que ponen en riesgo a los empleados y a los pasajeros. "Estamos trabajando en un ámbito con asbesto, los trenes tienen 70 años de fabricación, se prenden fuego y a veces las puertas se abren en pleno túnel", explicó el metrodelegado.
                                                </p>
                                                <br>
                                                <p>A pesar de los reiterados anuncios sobre la compra de nuevo material rodante, la situación no mejora. "Todo anuncio sobre trenes nuevos es positivo, pero siempre terminan quedando en promesas", lamentó. La situación empeora con cada aumento tarifario, que no se traduce en mejoras visibles para los trabajadores ni para los usuarios, mientras el sistema de transporte subterráneo sigue operando en condiciones peligrosas.
                                                <p>Desde el gremio también se lanzó una crítica hacia la CGT, a la que acusaron de estar ausente en la lucha por mejores condiciones laborales y salariales en un contexto de suba constante de tarifas y precarización del servicio. Según Dellecarbonara, algunos sectores del sindicalismo "prefieren defender sus intereses como casta antes que los de los trabajadores", mientras el riesgo en la Línea B sigue latente.
                                                </p>
                                                <br>
                                                <p>Este nuevo incremento del boleto en el subte agrava la situación de millones de usuarios que ven cómo el costo de la vida sigue subiendo sin que se traduzca en mejoras concretas en los servicios públicos, ni en las condiciones laborales de quienes operan en uno de los transportes más utilizados de la ciudad.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre51')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">LA CTA DENUNCIA EL AUMENTO HISTÓRICO DE LA POBREZA

                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 27/09/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>La CTA advierte sobre un aumento alarmante de la pobreza al 52,9% en solo seis meses, llamando a la unidad popular para frenar esta crisis.


                                        </i>
                                        </p>
                                        <br>
                                        {{-- <article>
                                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/mDyomkBc1DE?si=bnT2gxK0tSpFUqx1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            
                                        </article> --}}
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_freno.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>La Central de Trabajadores de la Argentina (CTA) ha hecho pública una gacetilla que señala un alarmante aumento de la pobreza en el país. En solo seis meses de gestión del gobierno de Javier Milei, la pobreza ha escalado al 52,9%, afectando a 24,9 millones de argentinos, lo que representa el peor registro en dos décadas, solo superado por la crisis de la convertibilidad en 2001.
                                                </p>
                                                <br>
                                                <p>El informe detalla que la pobreza afecta al 42,5% de los hogares, y que la indigencia ha alcanzado un preocupante 18,1%, lo que equivale a 8,5 millones de personas. Este escenario se agrava con datos que revelan que el 66,1% de los niños y niñas de entre 0 y 14 años viven en condiciones de pobreza, sumando un total de 7,3 millones de menores que sufren las consecuencias de esta crisis.
                                                </p>
                                                <br>
                                                <p>A pesar de los reiterados anuncios sobre la compra de nuevo material rodante, la situación no mejora. "Todo anuncio sobre trenes nuevos es positivo, pero siempre terminan quedando en promesas", lamentó. La situación empeora con cada aumento tarifario, que no se traduce en mejoras visibles para los trabajadores ni para los usuarios, mientras el sistema de transporte subterráneo sigue operando en condiciones peligrosas.
                                                </p>
                                                <p>La CTA sostiene que este aumento en los índices de pobreza e indigencia es resultado directo de las decisiones políticas del gobierno, con figuras como el ministro de Desregulación, Federico Sturzenegger, y el Toto Caputo, quienes han sido responsables de fracasos anteriores. La gacetilla también denuncia que los incrementos en tarifas de servicios públicos y el congelamiento de jubilaciones contribuyen a la profundización de la crisis. Además, la reciente reglamentación de la reforma laboral facilitará los despidos, lo que a su vez aumentará la desocupación.
                                                </p>
                                                <br>
                                                <p>A pesar de un poderoso sistema comunicacional que intenta ocultar esta realidad, la CTA advierte que el descontento popular es innegable. Ante esta situación, la organización llama a la unidad del movimiento popular y a las organizaciones sindicales y sociales para movilizarse y ponerle freno a lo que consideran un ataque feroz a las mayorías y a la soberanía nacional.
                                                </p>
                                                <br>
                                                <p>La gacetilla lleva la firma de los secretarios generales de la CTA, Hugo Godoy (CTA Autónoma) y Hugo Yasky (CTA de las y los Trabajadores), quienes reiteran su compromiso con la lucha por los derechos de los trabajadores y la defensa de los sectores más vulnerables.
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
                                    <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
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
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre52')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ATE EN PIE DE LUCHA CONTRA DESPIDOS MASIVOS
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 02/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El sindicato advierte sobre el desmantelamiento de derechos esenciales y exige al Gobierno la suspensión de estas cesantías, que profundizan la crisis en sectores vulnerables.
                                        </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_masivo.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>El conflicto entre el Gobierno nacional y la Asociación Trabajadores del Estado (ATE) se ha intensificado debido a una nueva ola de despidos masivos en la Administración Pública. ATE ha denunciado que estas cesantías, que afectan a áreas cruciales del Estado, forman parte de un proceso de desmantelamiento de políticas públicas clave, lo que ha generado una creciente preocupación por el impacto social de estas medidas.

                                                </p>
                                                <br>
                                                <p>El sindicato ha señalado que casi 65 mil contratos laborales están en riesgo de no ser renovados, lo que podría provocar un colapso en servicios fundamentales para los sectores más vulnerables de la población. Las áreas afectadas incluyen el Ministerio de Capital Humano, la Secretaría Nacional de Niñez, Adolescencia y Familia (Senaf), la Secretaría de Derechos Humanos y la Subsecretaría de Trabajo y Desarrollo Social. Los despidos en estos sectores ya suman centenares, y en algunos casos, como en Senaf, alcanzan las 600 bajas en los últimos nueve meses.

                                                </p>
                                                <br>
                                                <p>El Secretario General de ATE, Rodolfo Aguiar, ha declarado que estos despidos responden a una política de ajuste que está destruyendo el empleo estatal y profundizando las desigualdades sociales. Según Aguiar, el impacto de esta situación es especialmente grave en la clase media y los sectores más vulnerables, que están perdiendo acceso a derechos esenciales.

                                                </p>
                                                <p>Además de las cesantías, ATE ha criticado la pérdida del poder adquisitivo de los trabajadores estatales, que ha superado el 30% en lo que va del año, agravado por el congelamiento salarial impuesto por el Gobierno. En respuesta, el gremio ha convocado a una serie de protestas y asambleas en todo el país para visibilizar el descontento social y presionar por un cambio en las políticas gubernamentales.

                                                </p>
                                                <br>
                                                <p>Uno de los puntos de mayor tensión se ha producido en el ex Ministerio de Desarrollo Social, donde ATE Capital ha denunciado despidos masivos y arbitrarios. La protesta más reciente, que tuvo lugar frente a este organismo en la Av. 9 de Julio, ha sido parte de un plan de lucha que continuará hasta que el Gobierno revierta lo que ATE considera un proceso de desmantelamiento del Estado.

                                                </p>
                                                <br>
                                                
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre53')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">MANRIQUE RENUNCIA A LA CGT Y DENUNCIA DIVISIÓN INTERNA
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 17/10/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El ex secretario gremial de la CGT, cuestionó la conducción actual y alertó
                                            sobre la falta de espacios de debate en la central gremial.
                                        </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_manrrique.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Mario “Paco” Manrique oficializó su renuncia como secretario gremial de la
                                                    CGT, emitiendo duras críticas hacia la conducción encabezada por Héctor Daer
                                                    y Carlos Acuña. En su carta de renuncia, Manrique argumentó que su decisión
                                                    se debía al “cúmulo” de tareas que debía asumir como dirigente de su gremio y
                                                    como legislador, aunque su salida también refleja el creciente malestar dentro
                                                    de la central. Sus críticas se producen en un contexto de disputas políticas
                                                    dentro del Partido Justicialista y en medio de la presión del gobierno nacional.
                                                </p>
                                                <br>
                                                <p>El dirigente, cercano a Cristina Fernández y Máximo Kirchner, denunció que “la
                                                CGT está partida de hecho” y criticó la falta de espacios de debate, señalando
                                                que las decisiones se toman entre un reducido grupo de líderes. Al respecto,
                                                mencionó específicamente a Daer, Acuña, Gerardo Martínez y Andrés
                                                Rodríguez, a quienes acusó de monopolizar la voz de la CGT.
                                                </p>
                                                <br>
                                                <p>Manrique también se refirió a la falta de transparencia en las negociaciones con
                                                    el gobierno de Javier Milei, afirmando que “nadie sabe qué se está
                                                    negociando”. En el contexto de la interna del PJ, el exsecretario gremial
                                                    expresó su desacuerdo con la crítica a los personalismos y defendió la figura
                                                    de Cristina como presidenta del partido.
                                                </p>
                                                <br>
                                                <p>A pesar de la gravedad de sus acusaciones, la CGT logró evitar una crisis
                                                    interna que complicara su funcionamiento ante la inminente reunión de la mesa
                                                    tripartita convocada por el gobierno y empresarios. La renuncia de Manrique es
                                                    el tercer cambio en la cúpula de la CGT en un corto período, pero no parece
                                                    amenazar la estructura de la organización por el momento.
                                                </p>
                                                <br>
                                                <p>Con la renuncia, la central se enfrenta a un panorama incierto mientras los
                                                    “gordos” e “independientes” buscan afianzar su poder en medio de la presión
                                                    gubernamental. La ahora atención se centra en cómo se desarrollará la
                                                    próxima reunión de la mesa tripartita y en el impacto de la salida de Manrique
                                                    en la cohesión interna del movimiento sindical.
                                                </p>
                                                <br>
                                                
                                            </div>
                                        </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    @livewire('lateral')
                </div>
            </section>
        @elseif ($tituloSep == 'Gremiales-Noticia-Completa-gre54')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">
                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>
                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">ATE EXIGE PARAR LOS DESPIDOS EN EL MINISTERIO
                                                DE JUSTICIA
                                            </a>
                                        </h2>
                                        <p class="font-light  text-right text-gray-500">Publicado: 16/11/2024</p>
                                        <div class=" font-sans text-lg text-left col-span-6  ">
                                        <p><i>El sindicato denuncia despidos masivos en el Ministerio de Justicia y Derechos
                                            Humanos bajo condiciones de precarización laboral. Convocan a una protesta
                                            este martes 19 de noviembre.
                                        </i>
                                        </p>
                                        <br>
                                        <figure>
                                            <img class=" w-full object-cover" src="../img/grem/grem_ateParar.svg"
                                                alt="">
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>Este martes 19 de noviembre, a las 10, la Junta Interna de ATE del Ministerio
                                                    de Justicia y Derechos Humanos realizará una protesta en Sarmiento 329,
                                                    contra los despidos masivos que afectan a más de 2500 trabajadores de la
                                                    cartera. La medida, impulsada por el ministro Mariano Cúneo Libarona, busca
                                                    desvincular a los empleados mediante un &quot;retiro voluntario&quot;, que los obliga a
                                                    aceptar contratos precarios, con pérdida de salario y sin indemnización.
                                                </p>
                                                <br>
                                                <p>Según el sindicato, esta maniobra es parte de una estrategia de precarización
                                                    laboral que pone en riesgo el funcionamiento de un organismo clave,
                                                    responsable de garantizar el acceso a la justicia y proteger los derechos
                                                    humanos. En el marco de esta ofensiva, ya han fallecido tres trabajadores, lo
                                                    que evidencia la gravedad de la situación.
                                                </p>
                                                <br>
                                                <p>La medida afecta especialmente a los empleados contratados a través de la
                                                    Asociación de Concesionarios de Automotores de la República Argentina
                                                    (Acara), un ente cooperador del Ministerio. Los trabajadores que no acepten las
                                                    condiciones impuestas serán despedidos sin indemnización, mientras que los
                                                    que sigan en el Ministerio perderán sus incentivos salariales, y gran parte de la
                                                    planta se quedará sin estabilidad laboral.
                                                </p>
                                                <br>
                                                <p>En este contexto, ATE exige que se frene el ajuste y la precarización de los
                                                    empleados, convocando a una lucha unificada con otras organizaciones
                                                    sindicales, como UPCN. La movilización busca frenar la ofensiva del gobierno,
                                                    que a través del plan &quot;motosierra&quot; del ministro Cúneo Libarona, avanza en una                                                  
                                                    ola de despidos y ajustes, que afecta no solo a los trabajadores, sino también a
                                                    los servicios públicos esenciales para la sociedad.
                                                </p>
                                                <br>
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
