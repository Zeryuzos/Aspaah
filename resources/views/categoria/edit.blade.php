@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Editar Categorias</h1>
@stop

@section('content')
    <form action="/categorias/{{$categoria->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input placeholder="San Miguel" type="text" id="no_categoria" name="no_categoria" class="form-control" value="{{$categoria->no_categoria}}">
            <label for="" class="form-label">Descripcion</label>
            <input placeholder="El distrito que da en ....." type="text" id="de_categoria" name="de_categoria" class="form-control" value="{{$categoria->de_categoria}}">
        </div>
        <a href="/categorias" class="btn btn-warning" tabindex="2"><i class="fas fa-backspace"></i> Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="3"><i class="fas fa-save"></i> Guardar</button>
    </form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('/css/app.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop