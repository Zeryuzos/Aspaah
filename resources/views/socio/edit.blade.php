@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Editar Socios</h1>
@stop

@section('content')
    <form action="/socios/{{$socio->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <div class="row">
                <div class="col-md-4 mb-4 d-flex justify_content_Center position-relative opacity_image">
                    <img src="{{ Storage::url($socio->im_socio) }}" class="w-100 position-relative" id="imagenSeleccionada">
                    <div class="grid grid-cols-1 mx-7 position-absolute w-100 h-100">
                            <div class='flex items-center justify-center w-full color_img1 opacity_image_letra'>
                                <label class='flex flex-col w-full h-32 group'>
                                    <div class='flex flex-col items-center justify-center pt-7'>
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <p class='lowercase text-sm pt-1 tracking-wider'>Cambiar Foto</p>
                                    </div>
                                <input type="file" id="im_socio" name="im_socio" class="form-control hidden"/>
                                </label>
                            </div>
                    </div>
                </div>
                <div class="col-4">
                    <label for="">Categoria</label>
                    <select aria-describedby="categoria_id" class="form-control" name="categoria_id">
                        @if (!$socio->categoria)
                        <option value="" selected disabled>Selecciona un categoria</option>
                        @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">
                            {{ $categoria->no_categoria }}</option>
                        @endforeach
                        @else
                        @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" @if($socio->categoria->id === $categoria->id)
                            selected='selected'
                            @endif>
                            {{ $categoria->no_categoria }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Nombre Socio</label>
                    <input placeholder="Julio" type="text" id="no_socio" name="no_socio" class="form-control" value="{{$socio->no_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Apellido Paterno</label>
                    <input placeholder="Torres" type="text" id="ap_socio" name="ap_socio" class="form-control"value="{{$socio->ap_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Apellido Materno</label>
                    <input type="text" id="am_socio" name="am_socio" class="form-control"value="{{$socio->am_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Dni</label>
                    <input placeholder="02145677" type="text" id="dni_socio" name="dni_socio" class="form-control"value="{{$socio->dni_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Email</label>
                    <input placeholder="@gmail.com" type="text" id="em_socio" name="em_socio" class="form-control"value="{{$socio->em_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Celular</label>
                    <input placeholder="912020329" type="text" id="nu_celular_socio" name="nu_celular_socio" class="form-control"value="{{$socio->nu_celular_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Fecha de nacimiento</label>
                    <input type="date" id="fn_socio" name="fn_socio" class="form-control"value="{{$socio->fn_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Estado Civil</label>
                    <select name="es_civil_socio" id="es_civil_socio" class="form-control">
                        <option value="Soltero" {{($socio->es_civil_socio === 'Soltero') ? 'Selected' : ''}}>Soltero</option>
                        <option value="Casado" {{($socio->es_civil_socio === 'Casado') ? 'Selected' : ''}}>Casado</option>
                        <option value="Divorciado" {{($socio->es_civil_socio === 'Divorciado') ? 'Selected' : ''}}>Divorciado</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Dirección</label>
                    <input placeholder="Jr. La mar n°123" type="text" id="di_socio" name="di_socio" class="form-control" value="{{$socio->di_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Ruc</label>
                    <input placeholder="123-1231-gt5" type="text" id="ruc_socio" name="ruc_socio" class="form-control" value="{{$socio->ruc_socio}}">
                </div>
                <div class="col-4">
                    <label for="">Comunidad</label>
                    <select aria-describedby="comunidad_id" class="form-control" name="comunidad_id">
                        @if (!$socio->comunidad)
                        <option value="" selected disabled>Selecciona un Comunidad</option>
                        @foreach ($comunidads as $comunidad)
                        <option value="{{ $comunidad->id }}">
                            {{ $comunidad->no_comunidad }}</option>
                        @endforeach
                        @else
                        @foreach ($comunidads as $comunidad)
                        <option value="{{ $comunidad->id }}" @if($socio->comunidad->id === $comunidad->id)
                            selected='selected'
                            @endif>
                            {{ $comunidad->no_comunidad }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Latitud</label>
                    <input placeholder="123-1243" type="text" id="latitud_socio" name="latitud_socio" class="form-control" value="{{$socio->latitud_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Longitud</label>
                    <input placeholder="123-1243" type="text" id="longitud_socio" name="longitud_socio" class="form-control" value="{{$socio->longitud_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Ocupación</label>
                    <input placeholder="Obrero" type="text" id="ocupacion_socio" name="ocupacion_socio" class="form-control" value="{{$socio->ocupacion_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Grado de instrucción</label>
                    <select name="ginstruccion_socio" id="ginstruccion_socio" class="form-control">
                        <option value="Inicial" {{($socio->ginstruccion_socio === 'Inicial') ? 'Selected' : ''}}>Inicial</option>
                        <option value="Primaria"{{($socio->ginstruccion_socio === 'Primaria') ? 'Selected' : ''}}>Primaria</option>
                        <option value="Secundaria"{{($socio->ginstruccion_socio === 'Secundaria') ? 'Selected' : ''}}>Secundaria</option>
                        <option value="Tecnico"{{($socio->ginstruccion_socio === 'Tecnico') ? 'Selected' : ''}}>Tecnico</option>
                        <option value="Universidad"{{($socio->ginstruccion_socio === 'Universidad') ? 'Selected' : ''}}>Universidad</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Estado</label>
                    <select name="es_socio" id="es_socio" class="form-control">
                        <option value="1" {{($socio->es_socio === '1') ? 'Selected' : ''}}>Activo</option>
                        <option value="0" {{($socio->es_socio === '0') ? 'Selected' : ''}}>Inactivo</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Nombre del conyugue</label>
                    <input type="text" id="conyugue_socio" name="conyugue_socio" class="form-control"value="{{$socio->conyugue_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Dni del Conyugue</label>
                    <input type="text" id="conyugue_dni_socio" name="conyugue_dni_socio" class="form-control" value="{{$socio->conyugue_dni_socio}}">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Observaciones</label>
                    <input type="text" id="observaciones_socio" name="observaciones_socio" class="form-control" value="{{$socio->observaciones_socio}}">
                </div>
            </div>
        </div>
        <a href="/socios" class="btn btn-warning" tabindex="2"><i class="fas fa-backspace"></i> Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="3"><i class="fas fa-save"></i> Guardar</button>
    </form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('/css/app.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
    $(document).ready(function (e){
        $('#im_socio').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
@stop