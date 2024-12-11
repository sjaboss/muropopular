<x-app-layout>

    <style>
        .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination li {
    display: inline-block;
    margin-right: 10px;
}

.pagination li a {
    color: #337ab7;
    text-decoration: none;
    padding: 5px 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.pagination li a:hover {
    background-color: #337ab7;
    color: #fff;
}

.pagination li.active a {
    background-color: #337ab7;
    color: #fff;
}

.pagination li.disabled a {
    color: #ccc;
    cursor: not-allowed;
}
    </style>

    <section class="section pb-30 hero-section" id="hero">
        <div class="container">
            <div class="row">

                <div class="flex flex-col mt-4 mb-2">
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <div class="flex justify-between items-center mb-4">
                            <h4 class="text-lg font-bold">Publicidades</h4>
                            <div class="flex items-center">
                                <ol class="breadcrumb flex items-center">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"
                                            class="text-gray-600 hover:text-gray-900">Publicidades_ </a></li>
                                    <li class="breadcrumb-item active"> Historial</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body pt-4">
                                <a href="{{ route('dashboard') }}"
                                    class="btn bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Volver</a>
                                <a href="{{ route('publicidades.create') }}"
                                    class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo
                                    Registro</a>
                                <br>
                                <br>
                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                    <div class="flex justify-between items-center mb-4">
                                        <div class="flex-1 text-right">
                                            <input type="text" class="form-control" id="filtro"
                                                placeholder="Buscar...">
                                            <button
                                                class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                id="btn-filtro">Filtrar</button>
                                        </div>
                                    </div>
                                    <table id="publicidadesTable"
                                    class="w-full text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400 align-middle">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                                <th scope="col" class="px-6 py-3 text-center hidden">ID</th>
                                                <th scope="col" class="px-6 py-3 text-center">Publicidad</th>
                                                <th scope="col" class="px-6 py-3 text-center">Nombre</th>
                                                <th scope="col" class="px-6 py-3 text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($publicidades as $publicidad)
                                                <tr  class="text-center bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                    <td class="hidden">{{ $publicidad->id }}</td> <!-- Campo ID -->

                                                    <td>
                                                        <img class="rounded-full w-20 h-25 pl-2"
                                                            src="{{ asset('storage') . '/' . $publicidad->foto }}">
                                                    </td>

                                                    <td>{{ $publicidad->nombre }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('publicidades.edit', $publicidad->id) }}"
                                                            class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Editar</a>
                                                        <button type="button"
                                                            class="btn bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-block"
                                                            onclick="confirmarEliminacion({{ $publicidad->id }})">Eliminar</button>
                                                        <form id="delete-form-{{ $publicidad->id }}"
                                                            action="{{ route('publicidades.destroy', $publicidad->id) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <br>
                                    {{ $publicidades->links('pagination::bootstrap-4') }}
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('#publicidadesTable').DataTable();
        })
    </script>

    @if (session('success'))
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 2000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
            }).showToast();
        </script>
    @endif

    <script>
        function confirmarEliminacion(publicidadId) {
            Swal.fire({
                title: "¿Estás Seguro?",
                text: "No podrás revertir esta acción!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminar",
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + publicidadId).submit();
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#publicidadesTable').DataTable({
                "destroy": true, // Destruir instancia existente, si la hay
                "order": [
                    [0, "desc"]
                ], // Ordenar por la primera columna (ID) de forma descendente
                "columnDefs": [{
                        "targets": 0,
                        "visible": false
                    } // Ocultar la columna de ID
                ]
            });
        });
    </script>



</x-app-layout>
