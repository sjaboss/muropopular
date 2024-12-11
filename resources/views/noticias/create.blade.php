<x-app-layout>


    <div class="container mx-auto p-4">
        <div class="flex flex-col">
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="flex justify-between items-center mb-4">
                    <h4 class="text-lg font-bold">Noticia</h4>
                    <div class="flex items-center">
                        <ol class="breadcrumb flex items-center">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"
                                    class="text-gray-600 hover:text-gray-900">Noticia |</a></li>
                            <li class="breadcrumb-item active">| Nuevo Registro</li>
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
                    <h4 class="text-lg font-bold">Noticia</h4>
                </div>
                <form class="flex flex-col" method="POST" action="{{ route('noticias.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="flex mb-4">
                        <div class="w-1/2 mr-4">
                            <label for="fecha" class="text-sm font-bold mb-2">Fecha de la Noticia</label>
                            <input type="date" class="form-control @error('fecha') border-red-500 @enderror"
                                id="fecha" name="fecha" value="{{ old('fecha') }}" required autofocus>
                            @error('fecha')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-1/2">
                            <label for="seccion_id" class="text-sm font-bold mb-2">Seccion</label>
                            <select class="form-select @error('seccion_id') border-red-500 @enderror" id="seccion_id"
                                name="seccion_id" required>
                                <option value="" selected disabled>Sección</option>
                                @foreach ($secciones as $seccion)
                                    <option value="{{ $seccion->id }}">{{ $seccion->seccion }}</option>
                                @endforeach
                            </select>
                            @error('seccion_id')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="titulo" class="text-sm font-bold mb-2">Titulo</label>
                        <input type="text" class="form-control @error('titulo') border-red-500 @enderror"
                            id="titulo" name="titulo" value="{{ old('titulo') }}" required>
                        @error('titulo')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="bajada" class="text-sm font-bold mb-2">Bajada</label>
                        <textarea cols="30" rows="2" type="text" class="form-control @error('bajada') border-red-500 @enderror"
                            id="bajada" name="bajada" value="{{ old('bajada') }}" required></textarea>
                        @error('bajada')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="nota" class="text-sm font-bold mb-2">Nota</label>
                        <textarea cols="30" rows="12" type="text" class="form-control @error('nota') border-red-500 @enderror"
                            id="nota" name="nota" value="{{ old('nota') }}" required></textarea>
                        @error('nota')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-4">
                        <label for="foto" class="text-sm font-bold mb-2">Foto</label>
                        <input type="file" id="foto" name="foto"
                            class="form-control @error('foto') border-red-500 @enderror">
                        <img id="preview" class="img-thumbnail mt-2" src="" alt="">
                        @error('foto')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="flex flex-col mb-4">
                        <label for="autor" class="text-sm font-bold mb-2">Autor</label>
                        <input type="text" class="form-control @error('autor') border-red-500 @enderror"
                            id="autor" name="autor" value="{{ old('autor') }}" required>
                        @error('autor')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('noticias.index') }}"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Cancelar') }}
                        </a>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Guardar Registro') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            // mostrar imagen seleccionada
            document.addEventListener('DOMContentLoaded', function() {
                const photoInput = document.querySelector('#foto');
                const photoPreview = document.querySelector('#preview');
                photoInput.addEventListener('change', function() {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.addEventListener('load', function() {
                            photoPreview.src = reader.result;
                        })
                        reader.readAsDataURL(file);
                    }
                })
            })
        </script>




</x-app-layout>
