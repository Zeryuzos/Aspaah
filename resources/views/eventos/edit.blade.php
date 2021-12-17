@extends('adminlte::page')

@section('title', 'Editar Evento')

@section('content_header')
    <h1>Editar Evento: {{$evento->nombre}}</h1>
@stop

@section('content')
    @if(session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
    @endif

<div class="card">
        <div class="card-body">
        {!! Form::model($evento,['route'=>['eventos.update',$evento],'method'=>'put'])!!}

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

            {!! Form::submit('Actualizar Evento',['class'=>'btn btn-outline-success'])!!}

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