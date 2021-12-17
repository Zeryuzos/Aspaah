

@extends('adminlte::page')

@section('title', 'Eventos ASPAAH')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content')
@if(session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
    @endif
    <div class="py-8">
        <div class="card-header lg:px-8">
        <a href="{{route('eventos.create')}}" class="btn btn-outline-info">AGREGAR</a>
        </div> 
        <div class=" mx-auto sm:px6 lg:px-8">
            <div class="shadow-xl sm:rounded-lg">              
            <table class="table-fixed w-full table-info table-bordered">
                <thead>
                    <tr class="text-black">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">NOMBRE DEL EVENTO</th>
                        <th class="px-4 py-2">FECHA</th>
                        <th class="px-4 py-2">DESCRIPCIÓN</th>
                        <th class="px-4 py-2"colspan="2">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventos as $evento)
                        <tr>
                            <td class="border px-4 py-2">{{$evento->id}}</td>
                            <td class="border px-4 py-2">{{$evento->nombre}}</td>
                            <td class="border px-4 py-2">{{$evento->fecha}}</td>
                            <td class="border px-4 py-2">{{$evento->description}}</td>
                            <td><a href="{{route('eventos.edit',$evento)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>EDITAR</a></td>
                            <td>
                                <form action="{{route('eventos.destroy',$evento)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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