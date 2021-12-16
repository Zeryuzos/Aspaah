@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>HIJOS</h1>
@stop

@section('content')
    <form action="/hijos" method="POST">
        @csrf
        <div class="mb-3">
            <div class="row">
            <div class="col-md-4">
                <label for="">Socio</label>
                <select id="socio_id" name="socio_id" class="form-control" tabindex="1">
                    !<option>Selecciona el Socio</option>
                    @foreach ($socios as $socio)
                        <option value="{{ $socio->id }}">{{ $socio['no_socio'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 mb-4">
                <label for="" class="form-label">Nombre Completo</label>
                <input placeholder="Jonny Tapia Altamirano" type="text" id="na_hijo" name="na_hijo" class="form-control" tabindex="2">
            </div>
            <div class="col-md-4 mb-4">
                <label for="" class="form-label">Dni</label>
                <input type="text" id="dni_hijo" name="dni_hijo" class="form-control" tabindex="3">
            </div>
            <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Fecha de nacimiento</label>
                    <input type="date" id="fn_hijo" name="fn_hijo" class="form-control" tabindex="4">
            </div>
            <div class="col-md-4 mb-4">
                <label for="" class="form-label">Grado de instrucción</label>
                <select name="ginstruccion_hijo" id="ginstruccion_hijo" class="form-control" tabindex="5">
                    <option value="Inicial">Inicial</option>
                    <option value="Primaria">Primaria</option> 
                    <option value="Secundaria">Secundaria</option> 
                    <option value="Tecnico">Tecnico</option>
                    <option value="Universidad">Universidad</option>
                </select>
            </div>
            </div>
        </div>
        <a href="/hijos" class="btn btn-warning" tabindex="6"><i class="fas fa-backspace"></i> Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="7"><i class="fas fa-file-download"></i> Guardar</button>
    </form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('/css/app.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop