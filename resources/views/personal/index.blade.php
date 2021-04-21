@extends('adminlte::page')

@section('title', 'SGIAHuamanga')

@section('content_header')
    <h1>Personal</h1>
@stop

@section('content')
    <a href="{{ route('personal.create') }}" class="btn btn-primary mb-3">Nuevo</a>

    <table id="personals" class="table table-dark table-striped mt-4" >
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
                        <form action="{{ route('personal.destroy', $personal->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('personal.edit', $personal->id) }}" class="btn btn-primary">Editar</a>
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
     
@stop

@section('plugins.Datatables', true)

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#personals').DataTable();
        } ); 
    </script>
@stop


