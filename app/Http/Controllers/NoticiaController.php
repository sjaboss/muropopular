<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Publicidad;
use App\Models\Seccion;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::orderBy('fecha', 'desc')->paginate(5);
        //tomar el valor de la fecha y agregarle un formato dd/mm/yyyy
        foreach ($noticias as $noticia) {
            $noticia->fecha = Carbon::parse($noticia->fecha)->format('d/m/Y');
        }

        // Configuramos la paginación
        $noticias->appends(request()->except('page'));

        return view('noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $secciones = Seccion::orderBy('seccion', 'asc')->get();
        return view('noticias.create', compact('secciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos recibidos
        $request->validate([
            'fecha'=> 'required|date', // fecha de la nota
            'seccion_id' => 'required|integer', // seccion requerido
            'titulo' => 'required|string|max:255', // titulo requerido
            'bajada' => 'required|string', // bajada requerido
            'nota' => 'required|string', // bajada requerido
            'autor' => 'required|string', // bajada requerido
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048', // Foto opcional
        ]);

        // Almacenar la foto si fue proporcionada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('fotos', 'public'); // Almacena la foto en el sistema de archivos
        }

        // Creación del nuevo usuario con los datos validados
        Noticia::create([
            'fecha' => $request->fecha,
            'seccion_id' => $request->seccion_id,
            'titulo' => $request->titulo,
            'bajada' => $request->bajada,
            'nota' => $request->nota,
            'autor' => $request->autor,
            'foto' => $fotoPath,
        ]);

        // Redirigir a la lista de usuarios con un mensaje de éxito
        return redirect()->route('noticias.index')->with('success', 'Registro Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         // Encontrar la noticia por su ID
         $noticias = Noticia::findOrFail($id);
         $secciones = Seccion::all();
         $publicidades = Publicidad::all();
         // Devolver la vista de edición con los datos del usuario y los roles
         return view('noticias.completa', compact('noticias','secciones','publicidades'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontrar la noticia por su ID
        $noticias = Noticia::findOrFail($id);
        $secciones = Seccion::all();
        // Devolver la vista de edición con los datos del usuario y los roles
        return view('noticias.edit', compact('noticias','secciones'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        {
            $request->validate([
                'fecha'=> 'required|date', // fecha de la nota
                'seccion_id' => 'required|integer', // seccion requerido
                'titulo' => 'required|string|max:255', // titulo requerido
                'bajada' => 'required|string', // bajada requerido
                'nota' => 'required|string', // bajada requerido
                'autor' => 'required|string', // bajada requerido
                'foto' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048', // Foto opcional
            ]);

            // Encontrar el usuario por su ID
            $noticia = Noticia::findOrFail($id);

            // Actualizar la foto si fue proporcionada
            if ($request->hasFile('foto')) {
                $fotoPath = $request->file('foto')->store('fotos', 'public');
                $noticia->foto = $fotoPath;
            }

            // Actualización de los datos del usuario
            $noticia->update([
            'fecha' => $request->fecha,
            'seccion_id' => $request->seccion_id,
            'titulo' => $request->titulo,
            'bajada' => $request->bajada,
            'nota' => $request->nota,
            'autor' => $request->autor,
            ]);

            // Redirigir a la lista de usuarios con un mensaje de éxito
            return redirect()->route('noticias.index')->with('success', 'Registro Actualizado Correctamente');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encontrar el usuario por su ID
        $noticia = Noticia::findOrFail($id);
        // Eliminar el usuario
        $noticia->delete();
        // Redirigir a la lista de usuarios con un mensaje de éxito
        return redirect()->route('noticias.index')->with('success', 'Registro Eliminado Correctamente');
    }
}
