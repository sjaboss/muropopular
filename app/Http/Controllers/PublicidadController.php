<?php

namespace App\Http\Controllers;

use App\Models\Publicidad;
use Illuminate\Http\Request;

class PublicidadController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicidades = Publicidad::paginate(10);
        return view('publicidades.index', compact('publicidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('publicidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos recibidos
        $request->validate([
            'nombre' => 'required|string|max:255', // Nombres requeridos
            'foto' => 'image|mimes:jpg,jpeg,png,svg|max:2048', // Foto
        ]);

        // Almacenar la foto si fue proporcionada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('fotos', 'public'); // Almacena la foto en el sistema de archivos
        }


        // Creación de la publicidad con los datos validados
        Publicidad::create([
            'nombre' => $request->nombre,
            'foto' => $fotoPath,
        ]);

        // Redirigir a la lista de publicidades con un mensaje de éxito
        return redirect()->route('publicidades.index')->with('success', 'Registro Creado Correctamente');
    }


    /**
     * Display the specified resource.
     */
    public function show(Publicidad $publicidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontrar la publicidad por su ID
        $publicidad = Publicidad::findOrFail($id);
        return view('publicidades.edit', compact('publicidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validación de los datos recibidos
        $request->validate([
            'nombre' => 'required|string|max:255', // Nombres requeridos
            'foto' => 'image|mimes:jpg,jpeg,png,svg|max:2048', // Foto
        ]);

        // Encontrar el usuario por su ID
        $publicidad = Publicidad::findOrFail($id);

        // Actualizar la foto si fue proporcionada
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('fotos', 'public');
            $publicidad->foto = $fotoPath;
        }

        // Actualización de los datos del usuario
        $publicidad->update([
            'nombre' => $request->nombre,
        ]);

        // Redirigir a la lista de usuarios con un mensaje de éxito
        return redirect()->route('publicidades.index')->with('success', 'Registro Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encontrar el usuario por su ID
        $publicidad = Publicidad::findOrFail($id);
        // Eliminar el usuario
        $publicidad->delete();
        // Redirigir a la lista de usuarios con un mensaje de éxito
        return redirect()->route('publicidades.index')->with('success', 'Registro Eliminado Correctamente');
    }
}
