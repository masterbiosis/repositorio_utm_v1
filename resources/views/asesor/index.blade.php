@extends('layouts.app')
@section('title',"Asesores")
@section('content')

    <div class="container">
        <h1>Asesores</h1>
        <div class="row">
            <div class="col-11">
            </div>
            <div class="col-1">
                <a class="btn btn-primary" href="{{route('asesors.create')}}">Nuevo</a>
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
                            <th>EMPRESA</th>
                            <th></th>
                            <th></th>
                        </tr>
                    @foreach ($asesores as $asesor)
                        <tr>
                            <td>{{$asesor->id}}</td>
                            <td>{{$asesor->nombre}}</td>
                            <td>{{$asesor->app}}</td>
                            <td>{{$asesor->apm}}</td>
                            <td>{{$asesor->email}}</td>
                            <td>{{$asesor->telefono}}</td>
                            <td>{{$asesor->empresa->nombre}}</td>
                            <td><a class="btn btn-success" href="{{route('asesors.edit',['asesor'=>$asesor->id])}}">Modificar</a></td>
                            <td>
                                <form method="POST"  action="{{route('asesors.destroy',['asesor'=>$asesor->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="confirm('¿Estás seguro de que quieres eliminar este registro?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
