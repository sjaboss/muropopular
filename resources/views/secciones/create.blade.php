<x-app-layout>


    <div class="container mx-auto p-4">
        <div class="flex flex-col">
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="flex justify-between items-center mb-4">
                    <h4 class="text-lg font-bold">Nueva Sección</h4>
                    <div class="flex items-center">
                        <ol class="breadcrumb flex items-center">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"
                                    class="text-gray-600 hover:text-gray-900">Sección</a></li>
                            <li class="breadcrumb-item active">Nuevo Registro</li>
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
            <h4 class="text-lg font-bold">Nueva Sección</h4>
          </div>
          <form class="flex flex-col" method="POST" action="{{ route('secciones.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
              <label for="seccion" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Sección') }}</label>
              <input type="text" class="block w-full p-2 pl-10 text-sm text-gray-700 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent @error('seccion') border-red-500 @enderror" id="seccion" name="seccion" value="{{ old('seccion') }}" required autofocus>
              @error('seccion')
                <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-4">
              <label for="orden" class="block text-gray-700 text-sm font-bold mb-2">{{ __('orden') }}</label>
              <input type="number" class="block w-full p-2 pl-10 text-sm text-gray-700 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent @error('orden') border-red-500 @enderror" id="orden" name="orden" value="{{ old('orden') }}" required>
              @error('orden')
                <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
              @enderror
            </div>
            <div class="flex justify-end mt-4">
              <a href="{{ route('secciones.index') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Guardar Registro</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </x-app-layout>
