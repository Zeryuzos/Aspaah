@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Crear Provincia</h1>
@stop

@section('content')
    <form action="/provincias" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">Departamento</label>
            <select id="departamento_id" name="departamento_id" class="form-control" tabindex="1">
                !<option>Selecciona un Departamento</option>
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">{{ $departamento['no_departamento'] }}</option>
                @endforeach
            </select>
            <label for="" class="form-label">Nombre Provincia</label>
            <input placeholder="San Roman" type="text" id="no_provincia" name="no_provincia" class="form-control" tabindex="2">
        </div>
        <a href="/provincias" class="btn btn-warning" tabindex="4"><i class="fas fa-backspace"></i> Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="5"><i class="fas fa-file-download"></i> Guardar</button>
    </form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('/css/app.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop