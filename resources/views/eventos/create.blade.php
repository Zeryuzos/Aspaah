@extends('adminlte::page')

@section('title', 'Agregar Evento')

@section('content_header')
    <h1>AGREGAR NUEVO EVENTO</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
        {!! Form::open(['route'=>'eventos.store'])!!}
            <div class="form-group">
            {!! Form::label('nombre', 'Nombre del Evento')!!}
            {!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingrese nombre del evento'])!!} 
            @error('nombre')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            {!! Form::label('fecha', 'Fecha')!!}
            {!! Form::date('fecha',null,['class'=>'form-control', 'placeholder'=>'Ingrese fecha del evento'])!!} 
            @error('fecha')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            {!! Form::label('description', 'Descripción')!!}
            {!! Form::text('description',null,['class'=>'form-control', 'placeholder'=>'Ingrese una descripción detallada'])!!} 
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            {!! Form::submit('Guardar Evento',['class'=>'btn btn-outline-success'])!!}

        {!! Form::close()!!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('/css/app.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop