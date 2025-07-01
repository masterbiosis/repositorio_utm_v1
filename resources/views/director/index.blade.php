@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Director de Carrera</h1>
        <div class="row">
            <div class="col-11">
            </div>
            <div class="col-1">
                <a class="btn btn-primary" href="{{route('directors.create')}}">Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>AP. PATERNO</th>
                            <th>AP. MATERNO</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>
                            <th>CARRERA</th>
                            <th></th>
                            <th></th>
                        </tr>
                    @foreach ($directors as $director)
                        <tr>
                            <td>{{$director->id}}</td>
                            <td>{{$director->nombre}}</td>
                            <td>{{$director->app}}</td>
                            <td>{{$director->apm}}</td>
                            <td>{{$director->email}}</td>
                            <td>{{$director->telefono}}</td>
                            <td>{{$director->carrera->nombre}}</td>
                            <td><a class="btn btn-success" href="{{route('directors.edit',['director'=>$director->id])}}">Modificar</a></td>
                            <td>
                                <form method="POST"  action="{{route('directors.destroy',['director'=>$director->id])}}">
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
