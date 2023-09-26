<header class="bg-gray-800 sticky top-0 z-50" x-data="dropdown()">

    <div class="container flex items-center h-16 justify-between md:justify-start">
    
        <a :class="{ 'bg-opacity-100 text-emerald-700 ': open }" x-on:click="show()"
            class="flex flex-col items-center justify-center px-6 md:px-4 order-last md:order-first bg-white bg-opacity-25 text-white cursor-pointer font-semiboldsemi h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                {{--     <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /> --}}
            </svg>
            <span class="text-sm hidden md:block">Secciones</span>
        </a>

        <a href="/"
            class=" flex flex-col items-center justify-center px-4 text-white cursor-pointer font-semiboldsemi h-full">
            <img src="{{ asset('img/publi/logo_blanco.svg') }}" class="block  h-28 w-auto">
        </a>

         <div class="flex-1 hidden md:block">
           {{--   @livewire('search')  --}}
        </div> 


        {{-- Redes Seociales --}}
        <div class="flex justify-end pt-6 pb-6 gap-3">
            <a href="https://twitter.com/AdnPopular" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-twitter" viewBox="0 0 16 16">
                    <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
            </a>
            <a href="https://instagram.com/adnpopular?igshid=ZDdkNTZiNTM=" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
            </a>

            <a href="https://www.facebook.com/profile.php?id=100090382688484" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
            </a>


            <a href="https://www.youtube.com/channel/UC5O5gL449lXNn5NgzqiXLPw" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 576 512">
                    <!--! Font Awesome Free 6.4.0 by
                    @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path
                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                </svg>
            </a>

        </div>



        <!-- Settings Dropdown -->
        <div class="ml-3 relative hidden md:block">
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                    alt="{{ Auth::user()->name }}" />
                            </button>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>




                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            @else
                <x-jet-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        <i class="fas fa-user-circle text-white text-4xl cursor-pointer"></i>
                    </x-slot>

                    <x-slot name="content">

                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>


                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>

    </div>

    <nav id="navigation-menu" x-show="open" :class="{ 'block': open, 'hidden': !open }"
        class="bg-gray-700 bg-opacity-25 absolute w-full hidden">
        <div class="container h-full hidden md:block">
            <div x-on:click.away="close()" class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">

                    @php
                        $titulo = 'Noticia-Completa';
                        $tituloSoc = 'Sociedad-Noticia-Completa';
                        $tituloPol = 'Policiales-Noticia-Completa';
                        $tituloEco = 'Ecomomía-Noticia-Completa';
                        $tituloGre = 'Gremiales-Noticia-Completa';
                        $tituloCul = 'Cultura-Noticia-Completa';
                        $tituloInt = 'Internacionales-Noticia-Completa';
                        $tituloDer = 'Derechos-Humanos-Noticia-Completa';
                        $tituloLeg = 'Legislatura-Noticia-Completa';
                        $tituloDep = 'Deportes-Noticia-Completa';
                        $tituloFem = 'Agenda-Feminista-Noticia-Completa';
                    @endphp
                    <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                            href="{{ route('sociedad.show', $tituloSoc) }}"
                            class="py-2 px-4 text-sm flex items-center">Sociedad</a></li>

                    <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                            href="{{ route('politica.show', $titulo) }}"
                            class="py-2 px-4 text-sm flex items-center">Politica</a></li>

                    <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                            href="{{ route('economia.show', $tituloEco) }}"
                            class="py-2 px-4 text-sm flex items-center">Economía</a></li>

                    <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                            href="{{ route('feminista.show', $tituloFem) }}"
                            class="py-2 px-4 text-sm flex items-center">Agenda Feminista</a></li>


                    <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                            href="{{ route('inter.show', $tituloInt) }}"
                            class="py-2 px-4 text-sm flex items-center">Internacionales</a></li>


                    <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                            href="{{ route('gremial.show', $tituloGre) }}"
                            class="py-2 px-4 text-sm flex items-center">Gremiales</a></li>

                    <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                            href="{{ route('cultura.show', $tituloCul) }}"
                            class="py-2 px-4 text-sm flex items-center">Cultura</a></li>

                    <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                            href="{{ route('derechos.show', $tituloDer) }}"
                            class="py-2 px-4 text-sm flex items-center">Derechos Humanos</a></li>

                    <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                            href="{{ route('policial.show', $tituloPol) }}"
                            class="py-2 px-4 text-sm flex items-center">Policiales</a></li>

                    <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                            href="{{ route('deportes.show', $tituloDep) }}"
                            class="py-2 px-4 text-sm flex items-center">Deportes</a></li>
                    <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                            href="{{ route('legislatura.show', $tituloLeg) }}"
                            class="py-2 px-4 text-sm flex items-center">Legislatura</a></li>
                </ul>
            </div>
        </div>




        {{--  menu celular --}}
        <div class="bg-white h-full overflow-auto">
            <ul class="bg-white">

                <div class="container bg-gray-200 pt-2 pb-2">
                    @livewire('search')
                </div>

                @php
                    $titulo = 'Noticia-Completa';
                    $tituloSoc = 'Sociedad-Noticia-Completa';
                    $tituloPol = 'Policiales-Noticia-Completa';
                    $tituloEco = 'Ecomomía-Noticia-Completa';
                    $tituloGre = 'Gremiales-Noticia-Completa';
                    $tituloCul = 'Cultura-Noticia-Completa';
                    $tituloInt = 'Internacionales-Noticia-Completa';
                    $tituloDer = 'Derechos-Humanos-Noticia-Completa';
                    $tituloLeg = 'Legislatura-Noticia-Completa';
                    $tituloDep = 'Deportes-Noticia-Completa';
                    $tituloFem = 'Agenda-Feminista-Noticia-Completa';
                @endphp

                <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                        href="{{ route('sociedad.show', $tituloSoc) }}"
                        class="py-2 px-4 text-sm flex items-center">Sociedad</a></li>

                <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                        href="{{ route('politica.show', $titulo) }}"
                        class="py-2 px-4 text-sm flex items-center">Politica</a></li>

                <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                        href="{{ route('economia.show', $tituloEco) }}"
                        class="py-2 px-4 text-sm flex items-center">Economía</a></li>
                <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                        href="{{ route('feminista.show', $tituloFem) }}"
                        class="py-2 px-4 text-sm flex items-center">Agenda Feminista</a></li>

                <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                        href="{{ route('inter.show', $tituloInt) }}"
                        class="py-2 px-4 text-sm flex items-center">Internacionales</a></li>

                <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                        href="{{ route('gremial.show', $tituloGre) }}"
                        class="py-2 px-4 text-sm flex items-center">Gremiales</a></li>

                <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                        href="{{ route('cultura.show', $tituloCul) }}"
                        class="py-2 px-4 text-sm flex items-center">Cultura</a></li>

                <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                        href="{{ route('derechos.show', $tituloDer) }}"
                        class="py-2 px-4 text-sm flex items-center">Derechos Humanos</a></li>

                <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                        href="{{ route('policial.show', $tituloPol) }}"
                        class="py-2 px-4 text-sm flex items-center">Policiales</a></li>

                <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                        href="{{ route('deportes.show', $tituloDep) }}"
                        class="py-2 px-4 text-sm flex items-center">Deportes</a></li>
                <li class="text-gray-500 hover:bg-emerald-600 hover:text-white "><a
                        href="{{ route('legislatura.show', $tituloLeg) }}"
                        class="py-2 px-4 text-sm flex items-center">Legislatura</a></li>

            </ul>
        </div>



    </nav>
</header>


