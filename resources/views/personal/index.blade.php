@extends('adminlte::page')

@section('title', 'SGIAHuamanga')

@section('content_header')
    <h1>Personal</h1>
@stop

@section('content')
    <a href="{{ route('personal.create') }}" class="btn btn-primary mb-3">Nuevo</a>

    <table id="personals" class="table table-dark" >
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cargo</th>
                <th scope="col">Condición</th>
                <th scope="col">Tipo de Plaza</th>
                <th scope="col">DNI</th>
                <th scope="col">Jornada Laboral</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personals as $personal)
                <tr>
                    <td>{{ $personal->id }}</td>
                    <td>{{ $personal->nombre }}</td>
                    <td>{{ $personal->apellido }}</td>
                    <td>{{ $personal->cargo }}</td>
                    <td>{{ $personal->condicion }}</td>
                    <td>{{ $personal->tipo_plaza }}</td>
                    <td>{{ $personal->dni }}</td>
                    <td>{{ $personal->jor_lab }}</td>
                    <td>{{ $personal->estado }}</td>
                    <td>
                        <a href="{{ route('personal.edit', $personal->id) }}" class="btn btn_primary mb-3">Editar</a>
                        <button class="btn btn-danger">Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
     
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


