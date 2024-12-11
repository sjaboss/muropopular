<x-app-layout>


    <div class="container mx-auto p-4">
        <div class="flex flex-col">
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="flex justify-between items-center mb-4">
                    <h4 class="text-lg font-bold">Publicidad</h4>
                    <div class="flex items-center">
                        <ol class="breadcrumb flex items-center">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"
                                    class="text-gray-600 hover:text-gray-900">Publicidad |</a></li>
                            <li class="breadcrumb-item active">| Editar Registro</li>
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
                <form class="flex flex-col"  method="POST" action="{{ route('publicidades.update',$publicidad->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col mb-4">
                        <div>
                            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                id="nombre" name="nombre" value="{{ old('nombre',$publicidad->nombre) }}" required autofocus>
                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="foto" class="form-label">{{ __('Foto') }}</label>
                        <input type="file" id="foto" accept="image/*" name="foto"
                            class="form-control pe-5 @error('foto') is-invalid @enderror">
                        <img id="preview" class="img-thumbnail mt-2"
                            src="{{ asset('storage') . '/' . $publicidad->foto }}">
                        @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="flex justify-end">
                        <a href="{{ route('publicidades.index') }}"
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