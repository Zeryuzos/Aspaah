@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Editar Hijos</h1>
@stop

@section('content')
    <form action="/hijos/{{$hijo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <div class="row">
                <div class="col-4">
                    <label for="">socio</label>
                    <select aria-describedby="socio_id" class="form-control" name="socio_id" selected="true" disabled="disabled>
                        @if (!$hijo->socio)
                        <option value="" selected disabled>Selecciona un socio</option>
                        @foreach ($socios as $socio)
                        <option value="{{ $socio->id }}">
                            {{ $socio->no_socio }}</option>
                        @endforeach
                        @else
                        @foreach ($socios as $socio)
                        <option value="{{ $socio->id }}" @if($hijo->socio->id === $socio->id)
                            selected='selected'
                            @endif>
                            {{ $socio->no_socio }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Nombres Completo</label>
                    <input placeholder="Julio Paredes Capo" type="text" id="na_hijo" name="na_hijo" class="form-control" value="{{$hijo->na_hijo}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Dni</label>
                    <input placeholder="02145677" type="text" id="dni_hijo" name="dni_hijo" class="form-control"value="{{$hijo->dni_hijo}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Fecha de nacimiento</label>
                    <input type="date" id="fn_hijo" name="fn_hijo" class="form-control"value="{{$hijo->fn_hijo}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Grado de instrucción</label>
                    <select name="ginstruccion_hijo" id="ginstruccion_hijo" class="form-control">
                        <option value="Inicial" {{($hijo->ginstruccion_hijo === 'Inicial') ? 'Selected' : ''}}>Inicial</option>
                        <option value="Primaria"{{($hijo->ginstruccion_hijo === 'Primaria') ? 'Selected' : ''}}>Primaria</option>
                        <option value="Secundaria"{{($hijo->ginstruccion_hijo === 'Secundaria') ? 'Selected' : ''}}>Secundaria</option>
                        <option value="Tecnico"{{($hijo->ginstruccion_hijo === 'Tecnico') ? 'Selected' : ''}}>Tecnico</option>
                        <option value="Universidad"{{($hijo->ginstruccion_hijo === 'Universidad') ? 'Selected' : ''}}>Universidad</option>
                    </select>
                </div>
            </div>
        </div>
        <a href="/hijos" class="btn btn-warning" tabindex="2"><i class="fas fa-backspace"></i> Cancelar</a>
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