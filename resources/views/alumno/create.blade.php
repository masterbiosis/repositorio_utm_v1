@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Agregar Alumno
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('alumnos.store')}}">
                            @csrf

                            <div class="mb-3">
                                <label for="matricula" class="form-label">Maticula</label>
                                <input value="{{ old('matricula') }}" required name="matricula" type="text" class="form-control" id="matricula" aria-describedby="matricula">
                            </div>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input required name="nombre" type="text" class="form-control" id="nombre" aria-describedby="nombre">
                            </div>


                            <div class="mb-3">
                                <label for="app" class="form-label">Apellido Paterno</label>
                                <input required name="app" type="text" class="form-control" id="app" aria-describedby="app">
                            </div>

                            <div class="mb-3">
                                <label for="apm" class="form-label">Apellido Materno</label>
                                <input name="apm" type="text" class="form-control" id="apm" aria-describedby="apm">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input required name="email" type="text" class="form-control" id="email" aria-describedby="email">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input required name="telefono" type="text" class="form-control" id="telefono" aria-describedby="telefono">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input required minlength="8" name="password" type="password" class="form-control" id="password" aria-describedby="password">
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                                <input required minlength="8" name="password_confirmation" type="password" class="form-control" id="password_confirmation" aria-describedby="password_confirmation">

                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
