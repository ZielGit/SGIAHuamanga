@extends('adminlte::page')

@section('title', 'SGIAHuamanga')

@section('content_header')
    <h2>Añadir Personal</h2>

    <form action="/personal" method="post">
    @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cargo</label>
            <input id="cargo" name="cargo" type="text" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Condición</label>
            <input id="condicion" name="condicion" type="text" class="form-control" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tipo de Plaza</label>
            <input id="plaza" name="plaza" type="text" class="form-control" tabindex="5">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">DNI</label>
            <input id="dni" name="dni" type="text" class="form-control" tabindex="6">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jornada Laboral</label>
            <input id="jornada" name="jornada" type="text" class="form-control" tabindex="7">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <input id="estado" name="estado" type="text" class="form-control" tabindex="8">
        </div>
        <a href="/" class="btn btn-secondary" tabindex="9">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
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