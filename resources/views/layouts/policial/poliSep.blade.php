<x-app-layout>
    <div class="container ">

        <div class="mt-10"></div>


        @if ($tituloSep == 'policial-Noticia-Completa-poli1')
            <section>
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                    <div class=" col-span-4">

                        <ul>
                            <li class=" bg-white rounded-lg shadow mb-2"> {{-- primera --}}
                                <article>

                                    <div class="py-4 px-4 justify-between items-center">
                                        <h2 class="text-xl font-serif  font-bold pb-6">
                                            <a href="">NUEVO ESCÁNDALO DE ABUSO POLICIAL EN SALTA: A LAS PIÑAS EN
                                                PLENA CALLE</a>
                                        </h2>
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 shrink-0 ">
                                            <div class=" font-sans text-lg text-left col-span-6  ">
                                                <p><i>Durante el pasado fin de semana, la ciudad de Salta se vio
                                                        sacudida por otro incidente de violencia que involucra a la
                                                        policía salteña.</i> </p>
                                                <br>
                                                <figure>
                                                    <img class="w-full object-cover" src="../img/poli/poli_salta.svg"
                                                        alt="">
                                                </figure>
                                                <br>
                                                <p>El escándalo estalló luego de que se viralizara un video grabado en
                                                    dónde <b>se observa como un policía agrede con un golpe de puño a una
                                                    persona en plena Avenida Paraguay</b>. Este hecho sucedió en las
                                                    primeras horas del sábado, tras la conclusión del corso.</p>
                                                <br>
                                                <p>Este nuevo hecho de violencia policial, evidencia una vez más la
                                                    necesidad de abordar la conducta indebida dentro de las fuerzas
                                                    salteñas. Las imágenes muestran claramente cómo la situación se
                                                    tornó tensa, con el uniformado ejerciendo violencia contra el civil,
                                                    generando consternación y preocupación en la comunidad. </p>
                                                <br>
                                                <P>El abuso de autoridad por parte de un miembro de la policía es una
                                                    irregularidad que debe ser tratada con la debida seriedad y
                                                    rigurosidad. Este tipo de comportamiento no solo es inaceptable,
                                                    sino que también socava la confianza en las instituciones encargadas
                                                    de proteger y servir a la población.</P>
                                                <br>
                                                <P>Aunque las autoridades aún no han emitido una declaración oficial
                                                    sobre el incidente, es imperativo que se tomen medidas inmediatas
                                                    para investigar a fondo lo sucedido y garantizar que se cumpla con
                                                    el estado de derecho.</P>
                                                <br>
                                                <P><p><i>Fuente Diario InfoSalta: https://www.youtube.com/shorts/Jz79eG-Klgs 
                                                </i></p> </P>
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
