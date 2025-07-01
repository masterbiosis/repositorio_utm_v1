@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Modificar Alumno
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('alumnos.update',['alumno'=>$alumno->id])}}">
                            @method('PUT')
                            @csrf

                            <div class="mb-3">
                                <label for="matricula" class="form-label">Maticula</label>
                                <input value="{{$alumno->matricula}}" required name="matricula" type="text" class="form-control" id="matricula" aria-describedby="matricula">

                            </div>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input value="{{$alumno->nombre}}" required name="nombre" type="text" class="form-control" id="nombre" aria-describedby="nombre">

                            </div>

                            <div class="mb-3">
                                <label for="app" class="form-label">Apellido Paterno</label>
                                <input value="{{$alumno->app}}" name="app" type="text" class="form-control" id="apm" aria-describedby="app">

                            </div>

                            <div class="mb-3">
                                <label for="apm" class="form-label">Apellido Materno</label>
                                <input value="{{$alumno->apm}}" required name="apm" type="text" class="form-control" id="apm" aria-describedby="apm">

                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <inpu value="{{$alumno->email}}"t required name="email" type="text" class="form-control" id="email" aria-describedby="email">

                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input value="{{$alumno->telefono}}" required name="telefono" type="text" class="form-control" id="telefono" aria-describedby="telefono">

                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
