@extends('adminlte::page')

@section('title', 'SGIAHuamanga')

@section('content_header')
    <h2>Editar Personal</h2>

    <form action="{{ route('personal.update', $personal->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" value="{{ old('nombre',$personal->nombre) }}">
            @error('nombre')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input name="apellido" type="text" class="form-control" value="{{ old('apellido',$personal->apellido) }}">
            @error('apellido')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cargo</label>
            <input name="cargo" type="text" class="form-control" value="{{ old('cargo',$personal->cargo) }}">
            @error('cargo')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Condición</label>
            <input name="condicion" type="text" class="form-control" value="{{ old('condicion',$personal->condicion) }}">
            @error('condicion')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tipo de Plaza</label>
            <input name="tipo_plaza" type="text" class="form-control" value="{{ old('tipo_plaza',$personal->tipo_plaza) }}">
            @error('tipo_plaza')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">DNI</label>
            <input name="dni" type="text" class="form-control" value="{{ old('dni',$personal->dni) }}">
            @error('dni')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jornada Laboral</label>
            <input name="jor_lab" type="text" class="form-control" value="{{ old('jor_lab',$personal->jor_lab) }}">
            @error('jor_lab')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <input name="estado" type="text" class="form-control" value="{{ old('estado',$personal->estado) }}">
            @error('estado')
                <small>*{{$message}}</small>
            @enderror
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