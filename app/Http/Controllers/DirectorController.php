<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDirectorRequest;
use App\Http\Requests\UpdateDirectorRequest;
use App\Models\Carrera;
use App\Models\Director;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = Director::all();
        return view('director.index',[
            'directors'=>$directors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carrera::all();
        return view('director.create',[
            'carreras'=>$carreras
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDirectorRequest $request)
    {
        $director = Director::create(request()->all());
        session()->flash('success',"El director de carrera fue dado de alta exitosamente.");
        return redirect()->route('directors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director)
    {
        $carreras = Carrera::all();
        return view('director.edit',[
            'director'=>$director,
            'carreras'=>$carreras
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDirectorRequest $request, Director $director)
    {
        $director->update(request()->all());
        session()->flash('success',"El director de carrera fue modificada de manera correcta.");
        return redirect()->route('directors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Director $director)
    {
        $director->delete();
        session()->flash('success',"El director: {$director->nombre} {$director->app} {$director->apm} fue borrada de manera correcta.");
        return redirect()->route('directors.index');
    }
}
