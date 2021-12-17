@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Panel de Inicio</h1>
@stop

@section('content')
<br><br><br><br><br><br>
    <div class="row" >
        <div class="col-sm">
           <div class="card btn btn-light">
               <div class="card-body d-flex text-info">
                   CONSTANCIA<br><br><br><br><br><br>
                   <i class="far fa-address-card fa-2x ml-auto"></i>

               </div>
               <div class="card-footer text-info">
               <a href="#">IR A CONSTANCIA</a>
               </div>
           </div> 
        </div>

        <div class="col-sm">
           <div class="card btn btn-light">
               <div class="card-body d-flex text-info">
                   EVENTOS<br><br><br><br><br><br>
                   <i class="far fa-calendar-plus fa-2x ml-auto"></i>

               </div>
               <div class="card-footer text-info">
               <a href="{{route('eventos.index')}}">IR A EVENTOS</a>
               </div>
           </div> 
        </div>

        <div class="col-sm">
           <div class="card btn btn-light">
               <div class="card-body d-flex text-info">
                   ESTADO DE SOCIO<br><br><br><br><br><br>
                   <i class="fas fa-user fa-2x ml-auto"></i>

               </div>
               <div class="card-footer text-info">
               <a href="#">IR A ESTADO SOCIOS</a>
               </div>
           </div> 
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