@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Alumnos Github vamos bien</h1>
        <div class="row">
            <div class="col-11">
            </div>
            <div class="col-1">
                <a class="btn btn-primary" href="{{route('alumnos.create')}}">Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>MATRICULA</th>
                            <th>NOMBRE</th>
                            <th>AP. PATERNO</th>
                            <th>AP. MATERNO</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>
                            <th></th>
                            <th></th>
                        </tr>
                    @foreach ($alumnos as $alumno)
                        <tr>
                            <td>{{$alumno->id}}</td>
                            <td>{{$alumno->matricula}}</td>
                            <td>{{$alumno->nombre}}</td>
                            <td>{{$alumno->app}}</td>
                            <td>{{$alumno->apm}}</td>
                            <td>{{$alumno->email}}</td>
                            <td>{{$alumno->telefono}}</td>
                            <td><a class="btn btn-success" href="{{route('alumnos.edit',['alumno'=>$alumno->id])}}">Modificar</a></td>
                            <td>
                                <form method="POST"  action="{{route('alumnos.destroy',['alumno'=>$alumno->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
