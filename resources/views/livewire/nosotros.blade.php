<footer class="bg-gray-800 pt-10">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">

        <div class="md:flex md:justify-between">
            <div class="mb-12 md:mb-0">
                <a class="flex items-center">
                    <img src="{{ asset('img/10.png') }}" class="img_footer" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Tu canal de
                        noticias</span>
                </a>

                @php
                    use App\Models\Seccion;
                    $secciones = Seccion::all();
                @endphp


            </div>
            <div>
                <a type="button"   href="{{ route('historiales.index') }}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Historial</a>
            </div>
            @foreach ($secciones->sortBy('orden')->chunk(5) as $grupoSecciones)
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <ul class="text-gray-400 font-medium">

                        @foreach ($grupoSecciones as $seccion)
                            <li class="mb-2">
                                <a href="{{ route('seccion', $seccion->seccion) }}"
                                    class="btn btn-primary">{{ $seccion->seccion }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

        </div>



        <hr class="my-6 border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center">© 2024 <a class="hover:underline">Cooperativa de Trabajo
                    LTDA</a>. El Faro Comunicaciones.


                <a class="flex items-center  gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                    </svg>
                    <span class=" font-semibold whitespace-nowrap text-white">
                        prensa@adnpopulares.com</span>
                </a>
            </span>
            <style>
                .img_footer {
                    width: 70px;
                    height: 70px;
                    object-fit: cover;
                }

                .img_redes {
                    width: 25px;
                    height: 25px;
                    object-fit: cover;
                }
            </style>


            <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                <a href="https://x.com/AdnPopulares?t=vD2xXNELA_tShOoitX_ZzQ&s=09" target="_blank">
                    <img src="{{ asset('img/redes/x.png') }}" class="img_redes" alt="FlowBite Logo" />
                </a>
                <a href="https://www.instagram.com/adnpopulares?utm_source=qr&igsh=M2xrd2Y4eWNjMDZ3" target="_blank">
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
        </div>
    </div>
</footer>
