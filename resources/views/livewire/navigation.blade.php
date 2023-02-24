<header class="bg-gray-700 sticky top-0 z-50" x-data="dropdown()">

    <div class="container flex items-center h-16 justify-between md:justify-start">
        <a :class="{ 'bg-opacity-100 text-emerald-700 : open' }" x-on:click="show()"
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
            <img src="{{ asset('img/10.png') }}" class="block  h-14 w-auto">
        </a>

        <div class="flex-1 hidden md:block">
            @livewire('search')
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

                        {{--     <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link> --}}


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
            </ul>
        </div>



    </nav>
</header>
