@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Información De Socio</h1>
@stop

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Socio</div>
            <p class="card-category">Vista detallada del Socio {{ $socio->no_socio}}</p>
          </div>
          <!--body-->
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success" role="success">
              {{ session('success') }}
            </div>
            @endif
            <div class="row">
              <div class="col-md-4">
                <div class="card card-socio">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#">
                            <img src="{{ Storage::url($socio->im_socio) }}" height="75" width="75">
                          <h5 class="title mt-3">{{ $socio->no_socio }}</h5>
                        </a>
                        <p class="description">
                        {{ $socio->no_socio }} <br>
                        {{ $socio->ap_socio }} <br>
                        {{ $socio->am_socio }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident placeat.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <button class="btn btn-sm btn-primary">Editar</button>
                    </div>
                  </div>
                </div>
              </div><!--end card socio-->

              <div class="col-md-4">
                <div class="card card-socio">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#" class="d-flex">
                            <img src="{{ Storage::url($socio->im_socio) }}" height="75" width="75">
                          <h5 class="title mx-3">{{ $socio->no_socio }}</h5>
                        </a>
                        <p class="description">
                          {{ $socio->no_socio }} <br>
                          {{ $socio->ap_socio }} <br>
                          {{ $socio->am_socio }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident
                      placeat.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="/socios" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="/socios/{{ $socio->id}}/edit" class="btn btn-sm btn-primary">Editar</a>
                    </div>
                  </div>
                </div>
              </div><!--end card socio 2-->

              <!--Start third-->

              <!--end third-->

            </div>
          </div>
        </div>
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