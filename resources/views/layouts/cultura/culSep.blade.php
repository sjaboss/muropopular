<x-app-layout>


    <div class="container ">

        @if ($tituloSep == 'Cultura-Noticia-Completa-cul1')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Ante la presunta muerte</a>
                                        </h2>



                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">



                                                <p>Unos años atrás, en la contratapa de la revista Cuestionario-
                                                    escribió Rodolfo Terragno una nota acerca del fallecimiento de su
                                                    padre. La nota tenía por título: “Ante la presunta muerte de mi
                                                    padre” Me llamó la atención la idea: presumía la muerte de su padre
                                                    y le escribía una amorosa misiva. </p>
                                                <br>
                                                <p>Se me ocurrió que era muy bueno eso de “presumir la muerte” como una
                                                    rara forma de asumirla. Cuando hace unos días atrás me enteré de la
                                                    muerte de quien había sido el responsable de mi formación artística:
                                                    Raúl Serrano, un tucumano de nacimiento que había desembarcado en
                                                    Rumania cerca de los años 60. Se había recibido allí y tenía por
                                                    esos años la dirección uno de los principales teatros de ese país.
                                                    Regresado a la Argentina en los setenta, con mayor precisión entre
                                                    el 71’ y 73’cursé con él como maestro de actuación; volviendo a
                                                    cursar en el 74’ como director. Él fue para mí uno de mis maestros,
                                                    un tipo muy estructurado, con una mirada minuciosa y profundamente
                                                    política en sus análisis. Sumamente riguroso para valorar las
                                                    labores teatrales. Así lo recuerdo, iluminando mi conocimiento del
                                                    método Stanislavskiano, por aquellos tormentosos años ’70. </p>

                                                <p>Raúl era un tipo que tenía un humor muy especial, gran estudioso del
                                                    Método Stanislavskiano, tanto que produjo trabajos sobre éste que
                                                    resultaron definitivamente aclaratorios de la teoría. Teoría que
                                                    haría suya y transmitiría de la única manera posible: uno debía
                                                    transitar por la creación del personaje partiendo de sí mismo, no
                                                    mintiendo, jugando siempre con la verdad. Decía: de la pequeña
                                                    verdad a la gran verdad. Esto era una premisa ineludible. También la
                                                    definición de Acción Escénica: Una tarea concreta con el fin de
                                                    modificar al otro, en las condiciones de la escena. No se barre para
                                                    barrer… se barre para escuchar (acercándose al otro) para
                                                    escucharlo, para molestarlo, para que nos corra del lugar. Lo que
                                                    sea. Pero la acción NO debe ser realizada por la acción misma, debe
                                                    tener un objetivo dentro de las condiciones de la escena… Y así me
                                                    fui formando en aquellos días de los ’70.
                                                </p>
                                                <br>
                                                <p>Ahora, con su ausencia, entiendo cabalmente la idea de Terragno.
                                                    Siempre será mejor presumir la muerte. Asumirla nos lleva a un dolor
                                                    sin límite, nos enfrenta con nuestra propia finitud, finitud que
                                                    conocemos desde que tenemos uso de razón. </p>
                                                <br>
                                                <p>Dicen que los maestros no mueren nunca, siguen viviendo en sus
                                                    discípulos… Ojalá sea cierto. </p>
                                                <br>

                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28"
                                                            src="{{ asset('../img/noteros/julito.svg') }}"
                                                            alt="">
                                                        <p> <strong>Nota de Julio Santamaría <strong></p></a>
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
        @elseif ($tituloSep == 'Cultura-Noticia-Completa-cul2')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Gabriela Novaro y Hernán Reinaudo presentan "Somos lo que
                                                nos emociona"</a>
                                        </h2>



                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">



                                                <p>Será en El Tango pide Pista 8 presentan Somos lo que nos emociona,
                                                    Sábado 8 de julio, 17 hs. PISTA URBANA Chacabuco 874 - San Telmo A
                                                    la gorra- reservas@pistaurbana.com. </p>
                                                <figure>
                                                    <a href="">
                                                        <img class=" w-full object-cover object-center"
                                                            src="{{ asset('../img/cul/cul_novaro1.svg') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                                <br>
                                                <p>Gabriela Novaro y Hernán Reinaudo se reúnen en 2004, cuando graban su
                                                    primer CD “Otra historia”. Desde entonces ponen el acento en el
                                                    tango nuevo y especialmente en las obras de autoras mujeres, como
                                                    Azucena Maizani, Marisa Vázquez o Malena Muyala, sin dejar de lado a
                                                    los clásicos imprescindibles. Presentan también personales versiones
                                                    de otros ritmos y canciones, como “Volverán las oscuras golondrinas”
                                                    (Alberto Favero-Nacha Guevara) que suena en tiempo de milonga, en su
                                                    último CD “Somos lo que nos emociona”. </p>
                                                <figure>
                                                    <a href="">
                                                        <img class=" w-full object-cover object-center"
                                                            src="{{ asset('../img/cul/cul_novaro2.svg') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                                <br>
                                                <p><strong>Sobre Gabriela Novaro</strong></p>
                                                <br>
                                                <p>Cantora de Avellaneda, Gabriela Novaro es dueña de una rica paleta de
                                                    recursos musicales, fruto de su formación académica y de su paso por
                                                    otros géneros, como el jazz. Profesora especializada en voz y
                                                    lenguaje y profesora de piano. </p>
                                                <br>
                                                <p><strong> Hernán Reinaudo</strong> </p>
                                                <br>
                                                <p>DSobre Hernán Reinaudo </p>
                                                <P>Compositor y arreglador de música argentina, es uno de los más
                                                    destacados guitarristas surgidos en los últimos años. Nacido en
                                                    Córdoba se formó en el Conservatorio Superior Félix T. Garzón en su
                                                    provincia y se instaló en Buenos Aires en 2001. Es uno de los
                                                    referentes de la generación que se volcó al género del tango a fines
                                                    de la década de los noventa.</P>
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
        @elseif ($tituloSep == 'Cultura-Noticia-Completa-cul3')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">Ante la presunta muerte</a>
                                        </h2>



                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">



                                                <p>Unos años atrás, en la contratapa de la revista Cuestionario-
                                                    escribió Rodolfo Terragno una nota acerca del fallecimiento de su
                                                    padre. La nota tenía por título: “Ante la presunta muerte de mi
                                                    padre” Me llamó la atención la idea: presumía la muerte de su padre
                                                    y le escribía una amorosa misiva. </p>
                                                <br>
                                                <p>Se me ocurrió que era muy bueno eso de “presumir la muerte” como una
                                                    rara forma de asumirla. Cuando hace unos días atrás me enteré de la
                                                    muerte de quien había sido el responsable de mi formación artística:
                                                    Raúl Serrano, un tucumano de nacimiento que había desembarcado en
                                                    Rumania cerca de los años 60. Se había recibido allí y tenía por
                                                    esos años la dirección uno de los principales teatros de ese país.
                                                    Regresado a la Argentina en los setenta, con mayor precisión entre
                                                    el 71’ y 73’cursé con él como maestro de actuación; volviendo a
                                                    cursar en el 74’ como director. Él fue para mí uno de mis maestros,
                                                    un tipo muy estructurado, con una mirada minuciosa y profundamente
                                                    política en sus análisis. Sumamente riguroso para valorar las
                                                    labores teatrales. Así lo recuerdo, iluminando mi conocimiento del
                                                    método Stanislavskiano, por aquellos tormentosos años ’70. </p>

                                                <p>Raúl era un tipo que tenía un humor muy especial, gran estudioso del
                                                    Método Stanislavskiano, tanto que produjo trabajos sobre éste que
                                                    resultaron definitivamente aclaratorios de la teoría. Teoría que
                                                    haría suya y transmitiría de la única manera posible: uno debía
                                                    transitar por la creación del personaje partiendo de sí mismo, no
                                                    mintiendo, jugando siempre con la verdad. Decía: de la pequeña
                                                    verdad a la gran verdad. Esto era una premisa ineludible. También la
                                                    definición de Acción Escénica: Una tarea concreta con el fin de
                                                    modificar al otro, en las condiciones de la escena. No se barre para
                                                    barrer… se barre para escuchar (acercándose al otro) para
                                                    escucharlo, para molestarlo, para que nos corra del lugar. Lo que
                                                    sea. Pero la acción NO debe ser realizada por la acción misma, debe
                                                    tener un objetivo dentro de las condiciones de la escena… Y así me
                                                    fui formando en aquellos días de los ’70.
                                                </p>
                                                <br>
                                                <p>Ahora, con su ausencia, entiendo cabalmente la idea de Terragno.
                                                    Siempre será mejor presumir la muerte. Asumirla nos lleva a un dolor
                                                    sin límite, nos enfrenta con nuestra propia finitud, finitud que
                                                    conocemos desde que tenemos uso de razón. </p>
                                                <br>
                                                <p>Dicen que los maestros no mueren nunca, siguen viviendo en sus
                                                    discípulos… Ojalá sea cierto. </p>
                                                <br>

                                                <div class="text-start object-center">
                                                    <figure>
                                                        <img class="w-28 h-28"
                                                            src="{{ asset('../img/noteros/julito.svg') }}"
                                                            alt="">
                                                        <p> <strong>Nota de Julio Santamaría <strong></p></a>
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
        @elseif ($tituloSep == 'Cultura-Noticia-Completa-cul4')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">STEFANO de Armando Discepolo </a>
                                        </h2>
                                        <p>Un clásico de la dramaturgia rioplatense en la magnífica puesta de Osmar
                                            Núñez, se presenta en su segunda temporada los sábados a las 21 horas, en el
                                            Teatro la Máscara, Piedras 736 , CABA.
                                        </p>
                                        <br>
                                        <p class="font-light  text-left text-indigo-600">🎙️...Hablamos con el actor
                                            Norberto Gonzalo, protagonista de STEFANO</p>
                                        <br>
                                        <figure>

                                            <div class="container min-w-100px w-auto max-w-900 mx-auto ">
                                                <div
                                                    class="card flex flex-col items-center bg-gradient-to-tr from-indigo-600 to-red-400 text-xl font-mono p-4 rounded-md text-white">
                                                    <div
                                                        class="cover flex flex-col items-center min-w-80px w-auto max-w-880px">
                                                        <img src="{{ asset('../img/cul/2.1_cul_stefano1.svg') }}"
                                                            class="{{-- w-3/6 --}} rounded-xl {{-- blur-sm --}}">
                                                        {{--    <p class="-translate-y-10 w-3/6 text-center break-words">Ies es una genialidad</p> --}}
                                                        <br>
                                                    </div>
                                                    <audio id="song" class="block w-full max-w-md mx-auto"
                                                        controls>
                                                        <source
                                                            src="{{ asset('../img/audios/2.1_cul_audiostefano.ogg') }}"
                                                            type="audio/ogg">
                                                    </audio>

                                                </div>
                                            </div>

                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>
                                                    Stefano es una víctima de sus propias imposibilidades, inmigrante
                                                    italiano en los primeros años del siglo XX, no puede concretar sus
                                                    sueños. Lo habita la desesperanza y la frustración, no pudiendo
                                                    despegarse de un entorno social y político que van desdibujando sus
                                                    deseos.
                                                </p>
                                                <br>
                                                <p>Actúan: Norberto Gonzalo, Patricio Gonzalo, Pablo Mariuzzi, Jorge
                                                    Paccini, Elena Petraglia, Paloma Santos, Lucas Soriano, Maria Nydia
                                                    Ursi-Ducó</p>
                                                <p>Diseño de vestuario: Alejandro Mateo</p>
                                                <p>Diseño de escenografía: Alejandro Mateo</p>
                                                <p>Diseño de luces: Cristina Lahet</p>
                                                <p>Realización escenográfica: Salvador Aleo, Marina Gonzalez, Norma
                                                    Rolandi</p>
                                                <p>Fotografía: Ana Maria Ferrari</p>
                                                <p>Diseño gráfico: Leandro Correa</p>
                                                <p>Asistencia artística: Mónica Benavidez</p>
                                                <p>Asistente Fotografía: Walter Cesar Remus</p>
                                                <p>Asistencia de dirección: Ruth Scheinsohn</p>
                                                <p>Asistencia De Escenas: Lucas Suryano</p>
                                                <p>Prensa: Marcos Mutuverría </p>
                                                <p>Arreglos musicales: Gerardo Amarante</p>
                                                <p>Producción ejecutiva: Claudia Díaz</p>
                                                <p>Dirección: Osmar Nuñez</p>

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
        @elseif ($tituloSep == 'Cultura-Noticia-Completa-cul6')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">UNA MUERTE COMPARTIDA (Escrita y dirigida por Paolo
                                                Giuliano)
                                            </a>
                                        </h2>
                                        <p>En un pueblo del interior, los secretos y las mentiras familiares, como olla
                                            a presión, viviendo al límite del estallido, desnudan la hipocresía y la
                                            violencia. La búsqueda de la libertad, como deseo incumplido, y las
                                            conductas humanas que los llevan a convertirse en temibles monstruos con
                                            finales trágicos.
                                        </p>
                                        <br>
                                        <p class="font-light  text-left text-indigo-600">🎙️...Hablamos con la actriz
                                            Patricia Guillermina Rozas</p>
                                        <br>
                                        <figure>
                                            <div class="container min-w-100px w-auto max-w-900 mx-auto ">
                                                <div
                                                    class="card flex flex-col items-center bg-gradient-to-tr from-indigo-600 to-red-400 text-xl font-mono p-4 rounded-md text-white">
                                                    <div
                                                        class="cover flex flex-col items-center min-w-80px w-auto max-w-880px">
                                                        <img src="{{ asset('../img/cul/cul_paolo.svg') }}"
                                                            class="{{-- w-3/6 --}} rounded-xl {{-- blur-sm --}}">
                                                        {{--    <p class="-translate-y-10 w-3/6 text-center break-words">Ies es una genialidad</p> --}}
                                                        <br>
                                                    </div>
                                                    <audio id="song" class="block w-full max-w-md mx-auto"
                                                        controls>
                                                        <source src="{{ asset('../img/audios/patri.ogg') }}"
                                                            type="audio/ogg">
                                                    </audio>
                                                </div>
                                            </div>
                                        </figure>
                                        <br>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p>
                                                    "Una muerte compartida" narra la historia de la familia Benavídez.
                                                    Nora llora la muerte de su hija Laura, cuya supuesta causa fue una
                                                    enfermedad. Sin embargo, la llegada de Marcos, su otro hijo
                                                    desconocido para el pueblo, sacude la versión oficial de la muerte
                                                    de Laura. Una serie de eventos inesperados obligan a Nora y a los
                                                    habitantes del pueblo a cuestionar sus prejuicios sobre la identidad
                                                    y la verdad.

                                                </p>
                                                <br>
                                                <p>"Una muerte compartida" invita al público a reflexionar sobre la
                                                    aceptación, la diversidad y los secretos familiares.
                                                </p>

                                                <p>Dramaturgia: PAOLO GIULIANO</p>
                                                <p>Actúan: Laura Correa, Luciano Diani, Sergio Janusas, Patricia
                                                    Guillermina Rozas, Facundo Salomon</p>
                                                <p>Vestuario: Gabriela Delmastro</p>

                                                <p>Escenografía: Gabriela Delmastro</p>

                                                <p>Diseño de luces: José Binetti</p>

                                                <p>Diseño De Sonido: Fernanda Martínez Mina</p>

                                                <p>Música original: Fernanda Martínez Mina</p>

                                                <p>Diseño gráfico: Nahuel Lamoglia</p>

                                                <p>Asistencia De Producción: Maitena Bochetto</p>

                                                <p>Dirección teatral: PAOLO GIULIANO </p>

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
        @elseif ($tituloSep == 'Cultura-Noticia-Completa-cul7')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">PATRICIA SOSA ABRAZÓ AL LUNA PARK CON SU EXPERIENCIA
                                                SINFÓNICA</a>
                                        </h2>

                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La artista se presentó junto a su banda y la orquesta AA 2000 en otra
                                                    gran noche de conexión con su público. </p>
                                                <br>
                                                <figure>
                                                    <a href="">
                                                        <img class="h-80 w-full object-cover object-center"
                                                            src="{{ asset('../img/cul/cul_sosa2.svg') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                                <br>
                                                <p>Luego de sus exitosos shows sold out en junio de este año, Patricia
                                                    Sosa iluminó el mítico escenario del Luna Park de Buenos Aires en un
                                                    espectáculo inolvidable que incluyó grandes éxitos de su repertorio
                                                    y poderosos mensajes que llegaron al corazón de los presentes.
                                                </p>
                                                <br>
                                                <figure>
                                                    <a href="">
                                                        <img class="h-80 w-full object-cover object-center"
                                                            src="{{ asset('../img/cul/cul_sosa1.svg') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                                <br>
                                                <p>Algunos minutos después de las 21 comenzaron a escucharse los sonidos
                                                    de la orquesta sinfónica AA 2000, dirigida por el maestro Néstor
                                                    Tedesco, abriendo el show y anticipando lo que se venía. Finalmente,
                                                    Patricia hizo su entrada cantando “Salva lo que queda”, la canción
                                                    elegida para dar comienzo a su show de más de dos horas de duración.
                                                    Sus poderosas notas vocales, combinadas con la armonía de la
                                                    orquesta sinfónica, crearon una experiencia musical que trascendió
                                                    los límites de lo convencional.
                                                </p>
                                                <br>
                                                <p>Esta experiencia musical contó con los arreglos orquestales
                                                    realizados por Daniel Vilá que fueron ejecutados con gran
                                                    profesionalismo los jóvenes músicos de la orquesta AA200 y
                                                    acompañados por la banda de Patricia Sosa integrada por Mariano Mere
                                                    (teclados, coros), César Cirera (guitarras), Gustavo Giuliano
                                                    (bajo), Pablo Garrocho (batería, coros), Marta Mediavilla y Laura
                                                    González (coros). </p>
                                                <br>
                                                <p>La fusión de estilos y ritmos musicales, combinada con letras
                                                    profundas y emotivas, mantuvo a la audiencia cautivada de principio
                                                    a fin. Fue un espectáculo que trascendió lo musical, convirtiéndose
                                                    en un evento que dejó una marca imborrable en el corazón de todos
                                                    los presentes.
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
        @elseif ($tituloSep == 'Cultura-Noticia-Completa-cul8')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">NUESTRA URGENCIA X VENCER</a>
                                        </h2>

                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>La lucha de Mujeres contra la dictadura. A 50 años del golpe
                                                    cívico-militar en Chile </p>
                                                <br>
                                                <figure>
                                                    <a href="">
                                                        <img class="h-80 w-full object-cover object-center"
                                                            src="{{ asset('../img/cul/cul_vencer.svg') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                                <br>
                                                <p>La exposición<strong> "Nuestra urgencia x vencer. Fotografías de la
                                                        lucha de
                                                        mujeres contra la dictadura"</strong> busca dar a conocer un
                                                    importante
                                                    archivo fotográfico inédito y recientemente documentado, realizado
                                                    durante la década de los 80 por la reportera gráfica<strong> Kena
                                                        Lorenzini</strong>,
                                                    integrante de la Asociación de Fotógrafos Independientes (AFI) y del
                                                    Movimiento Unitario Mujeres por la Vida. Estos registros
                                                    fotográficos retratan la diversidad de expresiones de lucha y
                                                    masivas manifestaciones protagonizadas por mujeres pertenecientes a
                                                    distintas agrupaciones por los derechos humanos, quienes tuvieron
                                                    como horizonte político sostener un movimiento activo contra la
                                                    dictadura civil y militar.
                                                </p>
                                                <br>
                                                <p>Inauguración:<strong> Sábado 9 de septiembre / 17 HS</strong></p>
                                                <p>Centro Cultural de la Memoria Haroldo Conti</p>
                                                <p>Av. Del Libertador 8151 Ciudad de Buenos Aires, Argentina
                                                </p>
                                                <p>Espacio Memoria y Derechos Humanos (Ex ESMA)</p>
                                                <p>Entrada gratuita</p>
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
        @elseif ($tituloSep == 'Cultura-Noticia-Completa-cul9')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">HAY MÚSICA QUE SE HEREDA Y HAY MÚSICA QUE ES HERENCIA</a>
                                        </h2>

                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p>Hace 50 años Lebón lanzaba su primer álbum solista (“David Lebón”,
                                                    1973), luego de haber participado en los discos de Pappo´s Blues
                                                    Vol.1, La Pesada del Rock and Roll, Color Humano I y Pescado Rabioso
                                                    2. </p>
                                                <br>
                                                <figure>
                                                    <a href="">
                                                        <img class="w-full object-cover object-center"
                                                            src="{{ asset('../img/cul/cul_lebon1.svg') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                                <br>
                                                <p>Toda una vida haciendo música y transmitiendo la buena energía que
                                                    genera su corazón y su generosidad.
                                                </p>
                                                <br>
                                                <p>David cuenta que su madre le transmitió su amor por la música,
                                                    cuando, por ejemplo, le ponía el disco Rubber Soul para que se
                                                    relajara. Mucha música que Lebón heredó para construir su propio
                                                    “mundo agradable” de arte.
                                                    A la vez, nuevas generaciones, heredan la música que nos hizo
                                                    crecer, como la suya, la de Charly García, la de Luis Alberto
                                                    Spinetta o la de Fito Paez, entre tantos otros.
                                                </p>
                                                <br>
                                                <p>Bajo este concepto, HERENCIA LEBÓN, es que David se juntó con su
                                                    banda, más algunos invitados de lujo, en un estudio del barrio de
                                                    Almagro, para grabar un show de seis temas (propios y de notables
                                                    compositores) de los cuales hoy, se conocen los otros 3 temas, esta
                                                    vez en formato acústico. </p>
                                                <br>
                                                <p><strong> HERENCIA LEBÓN 2</strong> comienza con una exquisita versión del clásico de
                                                    Serú Girán “Desarma y sangra”, de su amigo Charly García. El aporte
                                                    del violinista ruso Alexey Musatov, junto al piano de Leandro
                                                    Bulacio, hacen que la canción llegue directo al corazón.
                                                </p>
                                                <br>
                                                <p>Sigue con “Mundo agradable”, donde se luce la arpista Sonia Álvarez
                                                    que conecta con la voz y la guitarra de David y los coros de Dani
                                                    Ferrón, en un viaje emotivo por este clásico de Lebón.</p>
                                                <br>
                                                <p>El cierre es un homenaje a la banda que le cambió la cabeza a David,
                                                    cuando era apenas un adolescente. Nada menos que “Blackbird” de The
                                                    Beatles, versión íntima solo con su acústica.</p>
                                                <br>
                                                <p>HERENCIA LEBÓN también tendrá sus shows en vivo y serán el 11 y 12 de
                                                    noviembre en el Teatro Opera, donde David repasará gran parte de su
                                                    carrera con grandes canciones que ya son parte del ADN de nuestra
                                                    música popular.
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
        @elseif ($tituloSep == 'Cultura-Noticia-Completa-cul10')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">FESTIVAL FACAFF </a>
                                        </h2>

                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">

                                                <p><i>Cuarteto La Púa y Victoria Di Raimondo, Fernández Fierro y Dúo Huillier-Seren Miércoles 20 de septiembre 21 hs. Club Atlético Fernández Fierro Sánchez de Bustamante 772 – CABA</i></p>
                                                <br>
                                                <figure>
                                                    <a href="">
                                                        <img class="w-full object-cover object-center"
                                                            src="{{ asset('../img/cul/cul_caff1.svg') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                                <br>
                                                <p>Cuarteto La Púa y Victoria Di Raimondo continúan presentando “Canciones con niebla”, un álbum de canciones propias donde consolidan su contundente estilo, con una mirada del tango que aporta nuevos elementos para el crecimiento y la innovación del género. Sonarán también canciones de “Mariposa Muerta” y adelantos de su próximo trabajo.
                                                </p>
                                                <br>
                                                <p>Victoria Di Raimondo: voz
                                                </p>
                                                <br>
                                                <p>Leandro Angeli: guitarra</p>
                                                <br>
                                                <p>Juan Otero: guitarra
                                                </p>
                                                <br>
                                                <p>Cristian Huillier: guitarra</p>
                                                <br>
                                                <p>Pablo Sensottera guitarrón criollo</p>
                                                <br>
                                                <p>Fernández Fierro ha revolucionado la escena del tango con su violenta sonoridad y puesta en escena, así como por el inédito proyecto colectivo que llevan adelante: el grupo se organiza en forma cooperativa, impulsa una radio on-line de tango ([RadioCAFF] (edita sus discos de manera independiente y administra su propio club: el Club Atlético Fernández Fierro (CAFF) espacio ineludible de la escena independiente.
                                                </p>
                                                <br>
                                                <p>Anticipadas en <u>www.caff.ar o tickethoy</u>
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


                    axios.get("https://api.dailymotion.com/videos?channel=news&limit=2")
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
