<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumno.index',[
            'alumnos'=>$alumnos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        $alumno = Alumno::create(request()->all());
        session()->flash('success',"El alumno fue dado de alta exitosamente.");
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view('alumno.edit',[
            'alumno'=>$alumno
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        $alumno->update(request()->all());
        session()->flash('success',"El alumno fue modificada de manera correcta.");
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        session()->flash('success',"EL alumno: {$alumno->nombre} {$alumno->app} {$alumno->apm}, con matricula: {$alumno->matricula}, fue borrada de manera correcta.");
        return redirect()->route('alumnos.index');
    }
}
