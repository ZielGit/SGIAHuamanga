@extends('adminlte::page')

@section('title', 'SGIAHuamanga')

@section('content_header')
    <h2>Editar Personal</h2>

    <form action="{{ route('personal.update', $personal->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$personal->nombre}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input id="apellido" name="apellido" type="text" class="form-control" value="{{$personal->apellido}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cargo</label>
            <input id="cargo" name="cargo" type="text" class="form-control" value="{{$personal->cargo}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Condición</label>
            <input id="condicion" name="condicion" type="text" class="form-control" value="{{$personal->condicion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tipo de Plaza</label>
            <input id="plaza" name="tipo_plaza" type="text" class="form-control" value="{{$personal->tipo_plaza}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">DNI</label>
            <input id="dni" name="dni" type="text" class="form-control" value="{{$personal->dni}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jornada Laboral</label>
            <input id="jornada" name="jor_lab" type="text" class="form-control" value="{{$personal->jor_lab}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <input id="estado" name="estado" type="text" class="form-control" value="{{$personal->estado}}">
        </div>
        <a href="/" class="btn btn-secondary" tabindex="8">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
    </form>
@stop

@section('content')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop