<div class="h-full overflow-auto">
    <nav class="navbar navbar-expand-md navbar-landing fixed-top" id="navbar">
        <div class="container">

            <style>
                img {
                    width: 105px;
                    height: 105px;
                    object-fit: cover;
                }


            </style>

            <a href="/" class="flex items-center">
                <img src="{{ asset('img/10.png') }}" class="img" alt="FlowBite Logo" />
                <span class="self-center text-2xl font-bold underline-red-500 whitespace-nowrap text-green-600">Tu canal de noticias</span>
            </a>
            {{--     @php
                use App\Models\Red;
                use App\Models\Logo;
                $redes = Red::all(); // o cualquier otra forma de obtener los datos
                $logos = Logo::all();
            @endphp
                <a class="navbar-brand" href="{{ route('home') }}">
                    @foreach ($logos as $logo)
                    <div>
                        <img src="{{ asset('storage') . '/' . $logo->foto }}" alt="logo light" height="90">
                    </div>
                @endforeach
                </a> --}}
            <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto  mt-lg-0" id="navbar-example">
                    <a href="{{ route('historiales.index') }}"
                    class="btn btn-success fw-medium text-decoration-none text-dark">Historial</a>
                    @foreach ($secciones->sortBy('orden') as $seccion)
                        <a href="{{ route('seccion', $seccion->seccion) }}"
                            class="btn btn-primary">{{ $seccion->seccion }}</a>
                    @endforeach

                </ul>
            </div>

        </div>
    </nav>
</div>
