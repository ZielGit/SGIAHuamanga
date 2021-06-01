@extends('adminlte::page')

@section('title', 'SGIAHuamanga')

@section('content_header')
    <h2>Asistencias</h2>
@stop

@section('content')
    <form action="{{route('asistencia.store')}}" method="post">
        @csrf
        <div>
            <label for="">Personal</label>
            <select name="personal_id" id="">
                <option value="">Elige un Personal</option>
                @foreach ($personals as $personal)
                <option value="{{$personal->id}}">{{$personal->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Fecha</label>
            <input type="date" name="fecha" id="">
        </div>
        <div>
            <label for="">Estado</label>
            <select name="estado" id="">
                <option value="Asistio" selected>Asistio</option>
                <option value="Tarde">Tarde</option>
                <option value="Falto">Falto</option>
            </select>
        </div>
        {{-- <table class="table">
            <thead class="">
                <tr>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{ $personal->id }}</th> 
                    <th><input id="date" type="date" name="fecha" class="form-control" value="{{old('fecha')}}" ><br></th>
                    <th>
                        <select name="estado">
                            <option value="Asistio" selected>Asistio</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Falto">Falto</option>
                        </select>
                    </th>
                    <th><button type="submit" class="btn btn-success">Marcar</button></th>
                </tr>
            </tbody>
        <br>
        </table> --}}
        <button type="submit" class="btn btn-success">Marcar</button>
        <a href="{{route('asistencia.index')}}" class="btn btn-secondary">Regresar</a>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop