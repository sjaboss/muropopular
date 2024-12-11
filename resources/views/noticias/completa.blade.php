<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title>ADN Populares | Noticias</title>
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Noticias">
    <meta property="og:description" content="Portal de noticias">
    <meta property="og:site_name" content="adnpopulares">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('img/10.png') }}">
    <!--Swiper slider css-->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
</head>

<body data-bs-spy="scroll">


    <section class="section">
        @include('layouts.menufrente')
    </section>
    <!-- Begin page -->
    <div class="layout-wrapper landing col-12">

        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">


                    <div class="text-center mt-1 my-0"> <!-- Agregué my-0 aquí -->
                        <h5 class="fs-20">Nos acompañan <span class="text-primary ">desde</span> Siempre
                        </h5>
                        <!-- Swiper -->
                        <div class="swiper trusted-client-slider mt-lg-2 mt-3 mb-sm-2 mb-2" dir="ltr">
                            <div class="swiper-wrapper">
                                @foreach ($publicidades as $publicidad)
                                    <div class="swiper-slide">
                                        <div>
                                            <img src="{{ asset('storage') . '/' . $publicidad->foto }}" alt="client-img"
                                                style="width: 250px; height: 300px; object-fit: contain;"
                                                class="mx-auto img-fluid d-block my-0"> <!-- Agregué my-0 aquí -->
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Nota Completa</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">{{ $noticias->seccion->seccion }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row gx-lg-5">
                            <div class="col-xl-4 col-md-8 mx-auto">
                                <div class="product-img-slider sticky-side-div">
                                    <div class="swiper product-nav-slider mt-2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="nav-slide-item">
                                                    <img class="img-fluid w-100 h-200 object-cover"
                                                        src="{{ asset('storage') . '/' . $noticias->foto }}"
                                                        alt="" class="object-cover d-block" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="mt-xl-0 mt-5">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h4>{{ $noticias->titulo }}</h4>
                                            <div class="hstack gap-3 flex-wrap">
                                                <div><a href="#"
                                                        class="text-primary d-block">{{ $noticias->autor }}</a>
                                                </div>
                                                <div class="vr"></div>
                                                <div class="text-muted">Publicado : <span
                                                        class="text-body fw-medium">{{ \Carbon\Carbon::parse($noticias->fecha)->format('d/m/Y') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                        <div class="text-muted fs-16">
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                        </div>
                                        <div class="text-muted">(Review)</div>
                                    </div>

                                    <!-- end row-->

                                    <div class="card-body">
                                        <p class="card-text mb-2">{!! nl2br(strip_tags($noticias->bajada)) !!}</p>
                                        <p class="card-text"><small class="text-muted">{!! nl2br(strip_tags($noticias->nota)) !!}</small>
                                        </p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </div>


    @include('layouts.footer')

    <!-- end layout wrapper-->


    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <!-- landing init -->
    <script src="{{ asset('assets/js/pages/landing.init.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>


</body>

</html>
