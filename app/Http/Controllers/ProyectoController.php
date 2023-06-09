<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use DB;
use PDF;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function pdf()
     {
         $proyecto=Proyecto::orderBy('NombreProyecto', 'ASC')->get();
         $pdf=PDF::loadView('proyecto.reporte', compact('proyecto'));
         return $pdf->stream('proyectos.pdf');
     }

    public function index()
    {
        $proyecto=Proyecto::orderBy('NombreProyecto', 'ASC')->get();
        return view('proyecto.index', compact('proyecto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Proyecto::create($request->all());
        return redirect()->route('proyecto.index')->with('success', 'Proyecto registrado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $proyecto=Proyecto::findOrFail($id);

        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proyecto=Proyecto::findOrFail($id);

        $proyecto->update($request->all());

        return redirect()->route('proyecto.index')->with('success', 'Proyecto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proyecto=Proyecto::findOrFail($id);
        $proyecto->delete();

        return redirect()->route('proyecto.index')->with('success', 'Proyecto eliminado exitosamente');
    }
}
