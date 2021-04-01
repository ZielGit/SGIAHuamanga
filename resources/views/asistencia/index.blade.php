@extends('adminlte::page')

@section('title', 'SGIAHuamanga')

@section('content_header')
    <h2>Asistencias</h2>
@stop

@section('content')
    <a href="{{ route('asistencia.create') }}" class="btn btn-primary mb-3">Marcar Asistencia</a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre y Apellidos</th>
                <th>Fecha</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($personals as $personal)
            <tr>
                <th>{{ $personal->id }}</th>
                <th>{{ $personal->nombre }} {{ $personal->apellido }}</th>
                <th><a href="{{ route('asistencia.create', $personal->id) }}" class="btn btn-primary mb-3">Marcar Asistencia</a></th>
            </tr>
            @endforeach --}}
            @foreach ($asistencias as $asistencia)
            <tr>
                <th>{{ $asistencia->personal->id }}</th>
                <th>{{ $asistencia->personal->nombre }}</th>
                <th>{{ $asistencia->fecha }}</th>
                <th>{{ $asistencia->estado }}</th>
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