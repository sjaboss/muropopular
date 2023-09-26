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
                                                    AJB, enfatizó que existe<strong> una "necesidad de incorporar una estrategia
                                                    que involucre la implementación de equipos técnicos
                                                    interdisciplinarios de acompañamiento y análisis de casos en cada
                                                    una de las sedes gremiales, para poder analizar detenidamente las
                                                    situaciones de violencia laboral, buscar soluciones efectivas,
                                                    proporcionar un apoyo completo y asesoramiento a quienes han sido
                                                    afectados y afectadas por estas problemáticas". Además, agregó que
                                                    "es necesaria una figura fuerte de delegados y delegadas que
                                                    desempeñan un papel central la detección y en la acción colectiva
                                                    contra las formas específicas que asume la violencia y el acoso en
                                                    el mundo del trabajo. Son un pilar fundamental en la organización
                                                    gremial, la gestión de conflictos y la supervisión y fiscalización
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
