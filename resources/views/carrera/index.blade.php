@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Carreras</h1>
        <div class="row">
            <div class="col-11">
            </div>
            <div class="col-1">
                <a class="btn btn-primary" href="{{route('carreras.create')}}">Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                        <tr>
                            <td>ID</td>
                            <td>NOMBRE</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @foreach ($carreras as $carrera)
                        <tr>
                            <td>{{$carrera->id}}</td>
                            <td>{{$carrera->nombre}}</td>
                            <td><a class="btn btn-success" href="{{route('carreras.edit',['carrera'=>$carrera->id])}}">Modificar</a></td>
                            <td>
                                <form method="POST"  action="{{route('carreras.destroy',['carrera'=>$carrera->id])}}">
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
