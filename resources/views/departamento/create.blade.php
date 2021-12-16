@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Crear Departamento</h1>
@stop

@section('content')
    <form action="/departamentos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre Departamento</label>
            <input placeholder="Moquegua" type="text" id="no_departamento" name="no_departamento" class="form-control" tabindex="1">
        </div>
        <a href="/departamentos" class="btn btn-warning" tabindex="3"><i class="fas fa-backspace"></i> Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="4"><i class="fas fa-file-download"></i> Guardar</button>
    </form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('/css/app.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop