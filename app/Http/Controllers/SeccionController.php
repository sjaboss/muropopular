<?php

namespace App\Http\Controllers;

use App\Models\Seccion;
use Illuminate\Http\Request;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los seccion
        $secciones = Seccion::orderBy('orden', 'asc')->paginate(10);
        // Devolver la vista con las secciones listados
        return view('secciones.index', compact('secciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Devolver la vista con las secciones listados
        return view('secciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos recibidos
        $request->validate([
            'seccion' => 'required|string|max:255', // Nombres requeridos
            'orden' => 'required|integer',
        ]);


        // Creación de la seccion con los datos validados
        Seccion::create([
            'seccion' => $request->seccion,
            'orden' => $request->orden,
        ]);

        // Redirigir a la lista de usuarios con un mensaje de éxito
        return redirect()->route('secciones.index')->with('success', 'Registro Creado Correctamente');
    }


    /**
     * Display the specified resource.
     */
    public function show(seccion $seccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontrar la seccion por su ID
        $seccion = Seccion::findOrFail($id);
        return view('secciones.edit', compact('seccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validación de los datos recibidos
        $request->validate([
            'seccion' => 'required|string|max:255',
            'orden' => 'required|integer',
        ]);

        // Encontrar la seccion por su ID
        $seccion = Seccion::findOrFail($id);


        // Actualización de los datos del usuario
        $seccion->update([
            'seccion' => $request->seccion,
            'orden' => $request->orden,
        ]);

        // Redirigir a la lista de usuarios con un mensaje de éxito
        return redirect()->route('secciones.index')->with('success', 'Registro Actualizado Correctamente');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encontrar la seccion por su ID
        $seccion = Seccion::findOrFail($id);
        // Eliminar la seccion
        $seccion->delete();
        // Redirigir a la lista de secciones con un mensaje de éxito
        return redirect()->route('secciones.index')->with('success', 'Registro Eliminado Correctamente');
    }
}
