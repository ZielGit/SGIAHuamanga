@extends('adminlte::page')

@section('title', 'SGIAHuamanga')

@section('content_header')
    <h2>Añadir Personal</h2>
@stop

@section('content')
<form action="/personal" method="post">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input name="nombre" type="text" class="form-control" tabindex="1" value="{{old('nombre')}}">
                    @error('nombre')
                        <small>*{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="" class="form-label">Apellido</label>
                    <input name="apellido" type="text" class="form-control" tabindex="2" value="{{old('apellido')}}">
                    @error('apellido')
                        <small>*{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Cargo</label>
                <input name="cargo" type="text" class="form-control" tabindex="3" value="{{old('cargo')}}">
                @error('cargo')
                    <small>*{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Condición</label>
                <input name="condicion" type="text" class="form-control" tabindex="4" value="{{old('condicion')}}">
                @error('condicion')
                    <small>*{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tipo de Plaza</label>
                <input name="plaza" type="text" class="form-control" tabindex="5" value="{{old('plaza')}}">
                @error('plaza')
                    <small>*{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">DNI</label>
                <input name="dni" type="text" class="form-control" tabindex="6" value="{{old('dni')}}">
                @error('dni')
                    <small>*{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jornada Laboral</label>
                <input name="jornada" type="text" class="form-control" tabindex="7" value="{{old('jornada')}}">
                @error('jornada')
                    <small>*{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Estado</label>
                <input name="estado" type="text" class="form-control" tabindex="8" value="{{old('estado')}}">
                @error('estado')
                    <small>*{{$message}}</small>
                @enderror
            </div>
            <a href="/" class="btn btn-secondary" tabindex="9">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
        </div>
    </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop