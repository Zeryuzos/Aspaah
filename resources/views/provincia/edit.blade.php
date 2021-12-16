@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Editar provincias</h1>
@stop

@section('content')
    <form action="/provincias/{{$provincia->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="">Departamento</label>
            <select aria-describedby="departamento_id" class="form-control" name="departamento_id">
                @if (!$provincia->departamento)
                <option value="" selected disabled>Selecciona un Departamento</option>
                @foreach ($departamentos as $departamento)
                <option value="{{ $departamento->id }}">
                    {{ $departamento->no_departamento }}</option>
                @endforeach
                @else
                @foreach ($departamentos as $departamento)
                <option value="{{ $departamento->id }}" @if($provincia->departamento->id === $departamento->id)
                    selected='selected'
                    @endif>
                    {{ $departamento->no_departamento }}</option>
                @endforeach
                @endif
            </select>
            <label for="" class="form-label">Nombre provincia</label>
            <input placeholder="San Roman" type="text" id="no_provincia" name="no_provincia" class="form-control" value="{{$provincia->no_provincia}}">
        </div>
        <a href="/provincias" class="btn btn-warning" tabindex="2"><i class="fas fa-backspace"></i> Cancelar</a>
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