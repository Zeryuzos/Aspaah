@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Editar Comunidad</h1>
@stop

@section('content')
    <form action="/comunidads/{{$comunidad->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="">Distrito</label>
            <select aria-describedby="distrito_id" class="form-control" name="distrito_id" selected="true" disabled="disabled">
                @if (!$comunidad->distrito)
                <option value="" selected disabled>Selecciona un distrito</option>
                @foreach ($distritos as $distrito)
                <option value="{{ $distrito->id }}">
                    {{ $distrito->no_distrito }}</option>
                @endforeach
                @else
                @foreach ($distritos as $distrito)
                <option value="{{ $distrito->id }}" @if($comunidad->distrito->id === $distrito->id)
                    selected='selected'
                    @endif>
                    {{ $distrito->no_distrito }}</option>
                @endforeach
                @endif
            </select>
            <label for="" class="form-label">Nombre comunidad</label>
            <input placeholder="Santa Maria" type="text" id="no_comunidad" name="no_comunidad" class="form-control" value="{{$comunidad->no_comunidad}}">
            <label for="" class="form-label">Nombre comunidad</label>
            <input placeholder="Esta comunidad .." type="text" id="de_comunidad" name="de_comunidad" class="form-control" value="{{$comunidad->de_comunidad}}">
        </div>
        <a href="/comunidads" class="btn btn-warning" tabindex="2"><i class="fas fa-backspace"></i> Cancelar</a>
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