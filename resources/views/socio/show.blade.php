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
            <p class="card-category">Vista detallada de {{ $socio->no_socio}} {{ $socio->ap_socio}}</p>
          </div>
          <!--body-->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4 mb-5">
                  <a href="#" class="d-flex justify-content-center">
                    <img src="{{ Storage::url($socio->im_socio) }}" height="150" width="150">
                  </a>
                  <a href="#" class="d-flex justify-content-center">{{ $socio->em_socio }}</a>
                  </div>
                  <div class="col-md-8">
                      <div class="row border-bottom pb-1 mb-2">
                        <div class="col-md-5 col-6">
                        <P><b>Nombre:</b></P>
                        </div>
                        <div class="col-md-7 col-6">
                        {{ $socio->no_socio }} {{ $socio->ap_socio }} {{ $socio->am_socio }}
                        </div>
                      </div>
                      <div class="row border-bottom pb-1 mb-2">
                        <div class="col-md-5 col-6">
                        <P><b>Fecha de nacimiento:</b></P>
                        </div>
                        <div class="col-md-7 col-6">
                        {{ $socio->fn_socio }}
                        </div>
                      </div>
                      <div class="row border-bottom pb-1 mb-2">
                        <div class="col-md-5 col-6">
                        <P><b>Dni (Codigo Socio):</b></P>
                        </div>
                        <div class="col-md-7 col-6">
                        {{ $socio->dni_socio }}
                        </div>
                      </div>
                      <div class="row border-bottom pb-1 mb-2">
                        <div class="col-md-5 col-6">
                        <P><b>Categoria:</b></P>
                        </div>
                        <div class="col-md-7 col-6">
                          @if ($socio->categoria_id)
                          {{$socio->categoria->no_categoria}}
                          @endif
                        </div>
                      </div>
                      <div class="row border-bottom pb-1 mb-2">
                        <div class="col-md-5 col-6">
                        <P><b>Contacto:</b></P>
                        </div>
                        <div class="col-md-7 col-6">
                        {{ $socio->nu_celular_socio }}
                        </div>
                      </div>
                      <div class="row border-bottom pb-1 mb-2">
                        <div class="col-md-5 col-6">
                        <P><b>Estado Civil:</b></P>
                        </div>
                        <div class="col-md-7 col-6">
                        {{ $socio->es_civil_socio }}
                        </div>
                      </div>
                      <div class="row border-bottom pb-1 mb-2">
                        <div class="col-md-5 col-6">
                        <P><b>Dirección:</b></P>
                        </div>
                        <div class="col-md-7 col-6">
                        {{ $socio->di_socio }}
                        </div>
                      </div>
                      <div class="row border-bottom pb-1 mb-2">
                        <div class="col-md-5 col-6">
                        <P><b>Comunidad:</b></P>
                        </div>
                        <div class="col-md-7 col-6">
                          @if ($socio->comunidad_id)
                          {{$socio->comunidad->no_comunidad}}
                          @endif
                        </div>
                      </div>
                      <div class="row border-bottom pb-1 mb-2">
                        <div class="col-md-5 col-6">
                        <P><b>Ocupación:</b></P>
                        </div>
                        <div class="col-md-7 col-6">
                        {{ $socio->ocupacion_socio }}
                        </div>
                      </div>
                      <div class="row border-bottom pb-1 mb-2">
                        <div class="col-md-5 col-6">
                        <P><b>Grado de Instrucción:</b></P>
                        </div>
                        <div class="col-md-7 col-6">
                        {{ $socio->ginstruccion_socio }}
                        </div>
                      </div>
                      <div class="row border-bottom pb-1 mb-2">
                        <div class="col-md-5 col-6">
                        <P><b>Observaciones:</b></P>
                        </div>
                        <div class="col-md-7 col-6">
                        {{ $socio->observaciones_socio }}
                        </div>
                      </div>
                  </div>
                </div>
                <div class="row border-top border-info">
                  <div class="col-md-12 border-bottom">
                  <p><b>Conyugue</b></p>
                  </div>
                  <div class="col-md-12 col-12 mt-2">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-5 col-6">
                                  <P><b>Nombre:</b></P>
                              </div>
                              <div class="col-md-7 col-6">
                              {{ $socio->conyugue_socio }}
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-5 col-6">
                                  <P><b>Dni:</b></P>
                              </div>
                              <div class="col-md-7 col-6">
                              {{ $socio->conyugue_dni_socio }}
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
                <div class="row border-top mt-2 border-info">
                  <div class="col-md-12 border-bottom">
                  <p><b>Hijos</b></p>
                  </div>
                  <div class="col-md-12 col-12 mt-2">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-5 col-6">
                                  <P><b>Nombre:</b></P>
                              </div>
                              <div class="col-md-7 col-6">
                                @foreach($hijos as $hijo)
                                @if($hijo->socio->id === $socio->id)
                                {{ $hijo['na_hijo'] }}
                                @endif
                                @endforeach
                              </div>
                              <div class="col-md-5 col-6">
                                  <P><b>Fecha de nacimiento:</b></P>
                              </div>
                              <div class="col-md-7 col-6">
                                @foreach($hijos as $hijo)
                                @if($hijo->socio->id === $socio->id)
                                {{ $hijo['fn_hijo'] }}
                                @endif
                                @endforeach
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                          <div class="row">
                              <div class="col-md-5 col-6">
                                  <P><b>Dni:</b></P>
                              </div>
                              <div class="col-md-7 col-6">
                                @foreach($hijos as $hijo)
                                @if($hijo->socio->id === $socio->id)
                                {{ $hijo['dni_hijo'] }}
                                @endif
                                @endforeach
                              </div>
                              <div class="col-md-5 col-6">
                                  <P><b>Grado de Instrucción:</b></P>
                              </div>
                              <div class="col-md-7 col-6">
                                @foreach($hijos as $hijo)
                                @if($hijo->socio->id === $socio->id)
                                {{ $hijo['ginstruccion_hijo'] }}
                                @endif
                                @endforeach
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="button-container row">
              <div class="col-md-6 col-6">
              <a href="/socios" class="btn btn-info"><i class="fas fa-backward"></i> Volver </a>
              <a href="/socios/{{ $socio->id}}/edit" class="btn btn-primary ml-1"><i class="fas fa-edit"></i> Editar</a>
              </div>
              <div class="col-md-6 col-6 d-flex justify-content-end">
              <a href="#" class="btn btn-dark"><i class="far fa-id-badge"></i> Carnet</a>
              <a href="{{route('descargarPDF')}}" class="btn btn-secondary ml-2"><i class="fas fa-print"></i> Imprimir Información</a>
              </div>
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