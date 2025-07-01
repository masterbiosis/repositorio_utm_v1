<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAsesorRequest;
use App\Http\Requests\UpdateAsesorRequest;
use App\Models\Asesor;
use App\Models\Empresa;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asesores = Asesor::all();
        return view('asesor.index',[
            'asesores'=>$asesores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('asesor.create',[
            'empresas'=>$empresas
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAsesorRequest $request)
    {
        $asesor = Asesor::create(request()->all());
        session()->flash('success',"El asesor fue dado de alta exitosamente.");
        return redirect()->route('asesors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asesor $asesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asesor $asesor)
    {
        $empresas = Empresa::all();
        return view('asesor.edit',[
            'asesor'=>$asesor,
            'empresas'=>$empresas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAsesorRequest $request, Asesor $asesor)
    {
        $asesor->update(request()->all());
        session()->flash('success',"El asesor: {$asesor->nombre} fue modificado de manera correcta.");
        return redirect()->route('asesors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asesor $asesor)
    {
        if (session()->has('confirm')) {
            $asesor->delete();
            return redirect()->route('asesors.index')->with('success', 'El asesor: {$asesor->nombre} fue borrado de manera correcta.');
        }

        return redirect()->back()->with('error', 'La eliminación fue cancelada.');
        /*
        $asesor->delete();
        session()->flash('success',"El asesor: {$asesor->nombre} fue borrado de manera correcta.");
        return redirect()->route('asesors.index');
        */
    }
}
