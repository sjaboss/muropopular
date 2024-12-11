<x-app-layout>
    <div class="container bg-gray-900 ">

        {{-- cartel de alta contactos --}}
        @if ($mensaje = Session::get('success'))
            <div role="alert">
                <div class=" bg-emerald-600  text-white font-bold rounded-t px-4 py-2">
                    {{ $mensaje }}
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    <p>Nos pondremos en contacto. Saludos!</p>
                </div>
                <br>
                <div class="text-center">
                    <a class=" bg-emerald-600 text-white hover:bg-emerald-300 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                        href="{{ route('nuestros.store') }}">
                        Aceptar
                    </a>
                </div>
            </div>
        @endif

        <div class="bg-gray-900 rounded-lg shadow-lg mb-4">
            <p></p>
        </div>

        <div>

            {{-- Videos --}}
            <div class="bg-gray-900 rounded-lg shadow-lg mb-4 text-center">
                <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 mx-auto">
                    <div class=" col-span-5 gap-4 rounded-lg border  shadow border-gray-600 p-2 bg-gray-800 text-white">
                        {{--  x4 --}}
                        @if ($noticias->count() > 0)
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 justify-center items-center">
                                @foreach ($videos->take(4) as $video)
                                    <div class="rounded-lg  border shadow border-emerald-600 text-center">
                                        <div class=" py-2 px-6 bg-gray-800">
                                            <div class="pt-2 text-emerald-500">
                                                <h2>
                                                    <div>
                                                        <iframe class="text-center" src="{{ $video['src'] }}"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            referrerpolicy="strict-origin-when-cross-origin"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                    <h1
                                                        class="text-lg font-serif animate-fade-right text-white pt-2 text-center">
                                                        {{ $video->titulo }}
                                                    </h1>

                                                </h2>
                                            </div>
                                        </div>
                                        <div class="font-light  text-right text-white bg-gray-800">
                                            <p class="p-4">
                                                {{ \Carbon\Carbon::parse($video->fecha)->format('d/m/Y') }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="alert alert-info">
                                <h5>No hay noticias cargadas</h5>
                                <p>Lo sentimos, no hay noticias disponibles en este momento.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>



            <!-- Fecha -->
            <div class="flex flex-col sm:flex-row items-center justify-center pb-4 gap-4">
                {{-- <span class="inline-flex items-center px-4 py-2 text-sm bg-blue-500 text-white rounded-full shadow">
                <a href="">ADN POPULARES</a>
            </span> --}}
                <input type="text" id="website-admin"
                    class="w-full sm:w-auto flex-1 min-w-0 text-sm text-center bg-white border border-gray-300 text-gray-700 placeholder-gray-400 rounded-full focus:ring-blue-500 focus:border-blue-500 shadow"
                    value="{{ $now->format('d-m-Y') }}">
                {{-- <span class="inline-flex items-center px-4 py-2 text-sm bg-blue-500 text-white rounded-full shadow">
                <a href="">ADN POPULARES</a>
            </span> --}}
            </div>


            {{-- cuerpo --}}
            <div>
                <div class="bg-gray-900 rounded-lg shadow-lg mb-4">
                    <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                        <div
                            class=" col-span-4 gap-4 rounded-lg border  shadow border-gray-600 p-2 bg-gray-800 text-white">
                            {{--  x4 --}}
                            @if ($noticias->count() > 0)
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                    @foreach ($noticias as $noticia)
                                        <div class="rounded-lg  border shadow border-emerald-600">
                                            <div class=" py-2 px-2 bg-gray-800">
                                                <div class="pt-2 text-emerald-500">
                                                    <h2>

                                                        <a href="{{ route('noticias.show', $noticia->id) }}">
                                                            <img class="h-48 w-full object-cover object-center rounded-lg"
                                                                src="{{ asset('storage') . '/' . $noticia->foto }}"
                                                                alt="Card image">
                                                        </a>
                                                        <h1
                                                            class="text-lg font-serif animate-fade-right text-white pt-2">

                                                            <a href="{{ route('noticias.show', $noticia->id) }}">{{ $noticia->titulo }}
                                                            </a>

                                                        </h1>

                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="font-light  text-right text-white bg-gray-800">
                                                <p class="p-4">
                                                    {{ \Carbon\Carbon::parse($noticia->fecha)->format('d/m/Y') }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="alert alert-info">
                                    <h5>No hay noticias cargadas</h5>
                                    <p>Lo sentimos, no hay noticias disponibles en este momento.</p>
                                </div>
                            @endif



                            {{-- videos --}}
                            <section>
                                <ul class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2  gap-6 py-4">
                                    <div>
                                        <article>

                                            <li class=" bg-white rounded-lg shadow  ">
                                                <article>
                                                    <figure>
                                                        <a href="">
                                                            <img class="h-80 w-full "
                                                                src="{{ asset('../img/publi/Recurso_1.png') }}"
                                                                alt="">
                                                        </a>
                                                    </figure>

                                                </article>
                                            </li>
                                        </article>
                                    </div>
                                    <div>
                                        <article>
                                            <iframe class="w-full aspect-video"
                                                src="https://www.youtube.com/embed/HWemIM7ML-E"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </article>
                                    </div>
                                </ul>
                            </section>
                        </div>

                        {{-- columna de la derecha chica --}}
                        <aside>
                            <div class="grid grid-cols-1 pl-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 shrink-0 ">
                                <div class=" mt-4 col-span-6">



                                    @foreach ($publicidades as $publicidad)
                                        <div class="swiper-slide">
                                            <div>
                                                <img src="{{ asset('storage') . '/' . $publicidad->foto }}" class="pb-3"
                                                    alt="">
                                            </div>
                                        </div>
                                    @endforeach

                                   {{--  <a href="" class="object-cover object-center h-35  " width="200">
                                        <img class="pb-3" src="{{ asset('img/publi/bener-leg2.png') }}"
                                            alt="">
                                    </a>

                                    <a href="" class="object-cover object-center " width="200">
                                        <img class="pb-3" src="{{ asset('img/publi/APSE.gif') }}" alt="">
                                    </a>
                                    <br>
                                    <div class="flex-col max-w-sm rounded-lg shado bg-gray-800 border-gray-700">
                                        <figure>
                                            <a href="">
                                                <img class=" w-full object-cover object-center"
                                                    src="{{ asset('../img/cade.svg') }}" alt="">
                                            </a>
                                        </figure>
                                        <p class="mb-2  font-bold pl-2  text-left text-white">
                                            Inscribite en los Talleres a la Gorra de Coop. CaDe
                                        </p>
                                        <div class="pt-2 pb-2">
                                            <h2>
                                                <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                    href="https://forms.gle/NLVJk6j8tboWQCV4A">Completá el
                                                    formulario</a>
                                            </h2>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="flex-col max-w-sm rounded-lg shado bg-gray-800 border-gray-700">
                                        <figure>
                                            <a href="">
                                                <img class=" w-full object-cover object-center"
                                                    src="{{ asset('../img/publi/laturba.svg') }}" alt="">
                                            </a>
                                        </figure>

                                        <div class="pt-2 pb-2">
                                            <h2>
                                                <a class="text-emerald-700 font-semibold hover:text-emerald-400 hover:underline"
                                                    href="https://radiolaturba.com.ar/">radiolaturba.com.ar</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="" class="object-cover object-center h-35  " width="200">
                                        <img class="pb-3" src="{{ asset('img/publi/karate.jpeg') }}" alt="">
                                    </a>
                                    <br>
                                    <a href="" class="object-cover object-center " width="200">
                                        <img class="pb-3" src="{{ asset('img/AND POPULAR FLYER.gif') }}"
                                            alt="">
                                    </a>
                                    <br>
                                    </article> --}}
                                    <div id="app">
                                        <h2 class="font-semibold text-center mt-4 mb-2">Internacionales</h2>
                                        <div v-for="item in info">
                                            <div class="flex-col pb-3">
                                                <div
                                                    class="flex-col max-w-sm    rounded-lg shadow bg-gray-800 border border-gray-700">
                                                    <a href="#">
                                                        <img class="rounded-t-lg"
                                                            :src="'https://www.dailymotion.com/thumbnail/video/' + item.id"
                                                            alt="" />
                                                    </a>
                                                    <div class="p-5">
                                                        <a href="#">
                                                            <h5
                                                                class="mb-2 text-2xl font-bold tracking-tight text-white">
                                                                @{{ item.title }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>


            {{-- gif --}}
            <div class="bg-gray-900 rounded-lg shadow-lg mb-4">
                <figure>
                    <a href="">
                        <img class="w-full object-cover object-center"
                            src="{{ asset('../img/Mantener viva la memoria_difu.gif') }}" alt="">
                    </a>
                </figure>
            </div>
        </div>

{{--
        <script>
            $(document).ready(function() {
                $('.your-class').slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    responsive: [{
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                duration: 0.25
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                duration: 0.25
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                duration: 0.25
                            }
                        },
                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                duration: 0.25
                            }
                        }
                    ]
                });
            });
        </script> --}}

        {{--     @push('script')
            <script>
                Livewire.on('glider', function(id) {
                    new Glider(document.querySelector('.glider-' + id), {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                        draggable: true,
                        autoplay: 2000,
                        dots: '.glider-' + id + '~ .dots',
                        arrows: {
                            prev: '.glider-' + id + '~ .glider-prev',
                            next: '.glider-' + id + '~ .glider-next'
                        },
                        responsive: [{
                                breakpoint: 640,
                                settings: {
                                    slidesToScroll: 2.5,
                                    slidesToShow: 2,
                                    duration: 0.25
                                }
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToScroll: 3.5,
                                    slidesToShow: 3,
                                    duration: 0.25
                                }
                            },
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToScroll: 4.5,
                                    slidesToShow: 4,
                                    duration: 0.25
                                }
                            },
                            {
                                breakpoint: 1280,
                                settings: {
                                    slidesToScroll: 5.5,
                                    slidesToShow: 5,
                                    duration: 0.25
                                }
                            }
                        ]
                    });
                });
            </script>
        @endpush --}}



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
                        axios.get("https://api.dailymotion.com/videos?channel=news&limit=1")
                            .then(response => {
                                this.info = response.data.list
                            });
                        axios.get(
                                "http://api.openweathermap.org/geo/1.0/direct?q=${Buenos%Aires},${AR}&limit=1&appid=${3d50320e2090d2d6ed8b11dbe5bab0a5}"
                            )
                            .then(response => {
                                this.clima = response.name
                            });
                    },
                });
            </script>
        @endpush
</x-app-layout>
