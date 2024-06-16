<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Estudiante::all();
        // return $course;
        return view('estudiantes.index', compact('course'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $course = new Estudiante();
        $course->nombre = $request->input('nombre');
        $course->interes = $request->input('interes');

        if ($request->hasFile('imagen')){
            $course->imagen = $request->file('imagen')->store('public/estudiantes');
        }

        $course->save();
        return 'Guardado exitoso';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Estudiante::find($id);
        return view('estudiantes.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Estudiante::find($id);
        return view('estudiantes.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Estudiante::find($id);
        $course->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
            $course->imagen = $request->file('imagen')->store('public/estudiantes');
            $course->save();
            return 'Curso actualizado';
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

