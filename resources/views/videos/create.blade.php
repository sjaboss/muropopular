<x-app-layout>


    <div class="container mx-auto p-4">
        <div class="flex flex-col">
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="flex justify-between items-center mb-4">
                    <h4 class="text-lg font-bold">Video</h4>
                    <div class="flex items-center">
                        <ol class="breadcrumb flex items-center">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"
                                    class="text-gray-600 hover:text-gray-900">Video |</a></li>
                            <li class="breadcrumb-item active">| Nuevo Video</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mx-auto p-4">
        <div class="flex flex-col">
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="flex justify-between items-center mb-4">
                    <h4 class="text-lg font-bold">Registrar Video</h4>
                </div>
                <form class="flex flex-col" method="POST" action="{{ route('videos.store') }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="w-full ">
                        <label for="fecha" class="form-label">{{ __('Fecha del video') }}</label>
                        <input type="date" class="form-control @error('fecha') is-invalid @enderror" id="fecha"
                            name="fecha" value="{{ old('fecha') }}" required autofocus>
                        @error('fecha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class=" w-full p-2">
                        <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
                        <input type="text" class="form-control w-full @error('titulo') is-invalid @enderror"
                            id="titulo" name="titulo" value="{{ old('titulo') }}" required>
                        @error('titulo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class=" w-full p-2">
                        <label for="orden" class="form-label">{{ __('Orden') }}</label>
                        <input type="number" class="form-control w-full @error('orden') is-invalid @enderror"
                            id="orden" name="orden" value="{{ old('orden') }}" required>
                        @error('orden')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class=" w-full p-2">
                        <label for="src" class="form-label">{{ __('Src') }}</label>
                        <input type="text" class="form-control w-full @error('src') is-invalid @enderror"
                            id="src" name="src" value="{{ old('src') }}" required></input>
                        @error('src')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class=" w-full p-2">
                        <label for="pie" class="form-label">{{ __('Pie') }}</label>
                        <input type="text" class="form-control w-full @error('pie') is-invalid @enderror"
                            id="pie" name="pie" value="{{ old('pie') }}" required></input>
                        @error('pie')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <a href="{{ route('videos.index') }}"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Cancelar') }}
                        </a>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Guardar Registro') }}
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>


    <script>
        document.getElementById('orden').addEventListener('input', function() {
            var valor = this.value;
            if (!/^\d+$/.test(valor)) {
                this.value = '';
                alert('Solo se permiten números');
            }
        });
    </script>
</x-app-layout>
