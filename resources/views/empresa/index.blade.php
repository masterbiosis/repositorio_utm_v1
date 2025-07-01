@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Empresas</h1>
        <div class="row">
            <div class="col-11">
            </div>
            <div class="col-1">
                <a class="btn btn-primary" href="{{route('empresas.create')}}">Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>DIRECCIÓN</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>
                            <th></th>
                            <th></th>
                        </tr>
                    @foreach ($empresas as $empresa)
                        <tr>
                            <td>{{$empresa->id}}</td>
                            <td>{{$empresa->nombre}}</td>
                            <td>{{$empresa->direccion}}</td>
                            <td>{{$empresa->email}}</td>
                            <td>{{$empresa->telefono}}</td>
                            <td><a class="btn btn-success" href="{{route('empresas.edit',['empresa'=>$empresa->id])}}">Modificar</a></td>
                            <td>
                                <form method="POST"  action="{{route('empresas.destroy',['empresa'=>$empresa->id])}}">
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
