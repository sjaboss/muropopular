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
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <h1 class="card-title text-white m-4">Secciones</h1>
            </div>
        </div>
        <a href="{{ route('dashboard') }}" class="btn bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Volver</a>
        <a href="{{ route('secciones.create') }}"
        class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo
            Registro</a>
        <br>
        <br>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="seccionesTable" class="w-full text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center hidden">ID</th>
                        <th scope="col" class="px-6 py-3 text-center">Secciones</th>
                        <th scope="col" class="px-6 py-3 text-center">Orden</th>
                        <th scope="col" class="px-6 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($secciones as $seccion)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="hidden">{{ $seccion->id }}</td>
                            <td>{{ $seccion->seccion }}</td>
                            <td class="text-center">{{ $seccion->orden }}</td>
                            <td class="text-center">
                                <a href="{{ route('secciones.edit', $seccion->id) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Editar</a>
                                <button type="button"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-block"
                                    onclick="confirmarEliminacion({{ $seccion->id }})">Eliminar</button>
                                <form id="delete-form-{{ $seccion->id }}"
                                    action="{{ route('secciones.destroy', $seccion->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           <br>
                {{ $secciones->links() }}
            <br>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('#seccionesTable').DataTable();
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
        $('#seccionesTable').DataTable({
            "destroy": true, // Destruir instancia existente, si la hay
            "order": [
                [2, "desc"]
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



