@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Editar Distrito</h1>
@stop

@section('content')
    <form action="/distritos/{{$distrito->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="">provincia</label>
            <select aria-describedby="provincia_id" class="form-control" name="provincia_id" selected="true" disabled="disabled">
                @if (!$distrito->provincia)
                <option value="" selected disabled>Selecciona un provincia</option>
                @foreach ($provincias as $provincia)
                <option value="{{ $provincia->id }}">
                    {{ $provincia->no_provincia }}</option>
                @endforeach
                @else
                @foreach ($provincias as $provincia)
                <option value="{{ $provincia->id }}" @if($distrito->provincia->id === $provincia->id)
                    selected='selected'
                    @endif>
                    {{ $provincia->no_provincia }}</option>
                @endforeach
                @endif
            </select>
            <label for="" class="form-label">Nombre distrito</label>
            <input placeholder="San Miguel" type="text" id="no_distrito" name="no_distrito" class="form-control" value="{{$distrito->no_distrito}}">
        </div>
        <a href="/distritos" class="btn btn-warning" tabindex="2"><i class="fas fa-backspace"></i> Cancelar</a>
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