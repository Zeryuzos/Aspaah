@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Crear Socio</h1>
@stop

@section('content')
    <form action="/socios" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 card-body">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <label for="">Categoria</label>
                    <select id="categoria_id" name="categoria_id" class="form-control" tabindex="1">
                        !<option>Selecciona una Categoria</option>
                    @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria['no_categoria'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Nombre Socio</label>
                    <input placeholder="Julio" type="text" id="no_socio" name="no_socio" class="form-control" tabindex="2">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Apellido Paterno</label>
                    <input placeholder="Torres" type="text" id="ap_socio" name="ap_socio" class="form-control" tabindex="3">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Apellido Materno</label>
                    <input type="text" id="am_socio" name="am_socio" class="form-control" tabindex="4">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Dni</label>
                    <input placeholder="02145677" type="text" id="dni_socio" name="dni_socio" class="form-control" tabindex="5">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Email</label>
                    <input placeholder="@gmail.com" type="text" id="em_socio" name="em_socio" class="form-control" tabindex="6">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Celular</label>
                    <input placeholder="912020329" type="text" id="nu_celular_socio" name="nu_celular_socio" class="form-control" tabindex="7">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Fecha de nacimiento</label>
                    <input type="date" id="fn_socio" name="fn_socio" class="form-control" tabindex="8">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Estado Civil</label>
                    <select name="es_civil_socio" id="es_civil_socio" class="form-control" tabindex="9">
                    <option value="Soltero">Soltero</option> 
                    <option value="Casado">Casado</option> 
                    <option value="Divorciado">Divorciado</option>
                    </select>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Dirección</label>
                    <input type="text" class="form-control is-invalid" name="di_socio" id="di_socio" placeholder="Jr. Ayllu" aria-describedby="inputGroupPrepend3" tabindex="10" required>
                    <div class="invalid-feedback">
                    Este campo es requerido
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Ruc</label>
                    <input placeholder="123-1231-gt5" type="text" id="ruc_socio" name="ruc_socio" class="form-control" tabindex="11">
                </div>
                <div class="col-md-4 mb-4">
                  <label for="" class="form-label">Departamento</label>
                  <select class="form-control" id="departamentos" name="departamento">
                      <option value="">Selecciona el Departamento</option>
                      @foreach($departamentos as $departamento)
                      <option value="{{ $departamento->id }}">{{ $departamento['no_departamento'] }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="col-md-4 mb-4">
                  <label for="" class="form-label">Provincia</label>
                  <select class="form-control" id="provincia_id" name="provincia_id">
                      <option value="">Seleccione la provincia</option>
                  </select>
                </div>
                <div class="col-md-4 mb-4">
                  <label for="" class="form-label">Distrito</label>
                  <select class="form-control" id="distrito_id" name="distrito_id">
                      <option value="">Seleccione el Distrito</option>
                  </select>
                </div>
                <div class="col-md-4 mb-4">
                  <label for="" class="form-label">Comunidad</label>
                  <select class="form-control" id="comunidad_id" name="comunidad_id">
                      <option value="">Seleccione la Comunidad</option>
                  </select>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Latitud</label>
                    <input placeholder="123-1243" type="text" id="latitud_socio" name="latitud_socio" class="form-control" tabindex="17">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Longitud</label>
                    <input placeholder="123-1243" type="text" id="longitud_socio" name="longitud_socio" class="form-control" tabindex="18">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Ocupación</label>
                    <input placeholder="Obrero" type="text" id="ocupacion_socio" name="ocupacion_socio" class="form-control" tabindex="19">                  
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Grado de instrucción</label>
                    <select name="ginstruccion_socio" id="ginstruccion_socio" class="form-control" tabindex="20">
                        <option value="Inicial">Inicial</option>
                        <option value="Primaria">Primaria</option> 
                        <option value="Secundaria">Secundaria</option> 
                        <option value="Tecnico">Tecnico</option>
                        <option value="Universidad">Universidad</option>
                    </select>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Estado</label>
                    <select name="es_socio" id="es_socio" class="form-control" tabindex="22">
                        <option value="1">Activo</option> 
                        <option value="0">Inactivo</option> 
                    </select>
                </div>
                <div class="col-md-4 mb-4">
                    <img id="imagenSeleccionada" style="max-height: 300px;">
                </div>
                <div class="col-md-4 mb-4">
                    <div class="grid grid-cols-1 mx-7">
                        <label for="" class="form-label">Foto</label>
                            <div class='flex items-center justify-center w-full border border-secondary color_img'>
                                <label class='flex flex-col w-full h-32 group'>
                                    <div class='flex flex-col items-center justify-center pt-7'>
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <p class='lowercase text-sm pt-1 tracking-wider'>Seleccionar Foto</p>
                                    </div>
                                <input type="file" id="im_socio" name="im_socio" class="form-control hidden" accept="image/"/>
                                <br>
                                @error('im_socio')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                </label>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Nombre del conyugue</label>
                    <input type="text" id="conyugue_socio" name="conyugue_socio" class="form-control" tabindex="25">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Dni del Conyugue</label>
                    <input type="text" id="conyugue_dni_socio" name="conyugue_dni_socio" class="form-control" tabindex="26">
                </div>
        </div>
        <div class="card">
            <div class="card-header bg_aspaah">
                <div class="row">
                    <div class="col-md-11 col-sm-11 col-10"><h2 class="card-title"><b>Datos de los Hijos</b></h2></div>
                    <div class="col-md-1 col-sm-1 col-2">
                    <button type="button" onclick="nuevo()" class="btn btn-dark mb-1"><i class="fas fa-file-download"></i></button>
                    </div>
                </div>
            </div>
            <div>
                <div class="card-body">
                    
                    <div id="imputs"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-6 mb-2">
                <label for="" class="form-label">Observaciones</label>
                <input type="text" id="observaciones_socio" name="observaciones_socio" class="form-control" tabindex="27">
            </div>
            <div class="col-md-6 col-6 mb-2 d-flex align-items-end justify-content-end">
                <a href="/socios" class="btn btn-warning mr-4" tabindex="4"><i class="fas fa-backspace"></i> Cancelar</a>
                <button type="submit" class="btn btn-success" tabindex="5"><i class="fas fa-file-download"></i> Guardar</button>
            </div>
        </div>
        
    </form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('/css/app.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
  $(document).ready(function () {
    $('#departamentos').on('change', function (e) {
          var id_dep = $('#departamentos').val();
          console.log(id_dep);
          $.get('provincia_idByDep/'+id_dep, function(data){
            console.log(data);
            $('#provincia_id').empty();
            $.each(data, function(fetch,obj){
              $('#provincia_id').append('<option value="'+ obj.id +'">'+ obj.no_provincia +'</option>');
            });
          });
      });

      $('#provincia_id').on('change', function (e) {
          var id_prov = $('#provincia_id').val();
          console.log(id_prov);
          $.get('distrito_idByProv/'+id_prov, function(data){
            console.log(data);
            $('#distrito_id').empty();
            $.each(data, function(fetch,obj){
              $('#distrito_id').append('<option value="'+ obj.id +'">'+ obj.no_distrito +'</option>');
            })
          });
      });

      $('#distrito_id').on('change', function (e) {
          var id_dist = $('#distrito_id').val();
          console.log(id_dist);
          $.get('comunidad_idByDist/'+id_dist, function(data){
            console.log(data);
            $('#comunidad_id').empty();
            $.each(data, function(fetch,obj){
              $('#comunidad_id').append('<option value="'+ obj.id +'">'+ obj.no_comunidad +'</option>');
            })
          });
      });

  });
  function nuevo() {
      console.log("crear boton");
      var fieldHTML = '<div class="row mb-5" id="fila">'+
            '<div class="col-md-6 mb-2">'+
                '<label for="" class="form-label">Nombre Completo</label>'+
                '<input placeholder="Jonny Tapia Altamirano" type="text" name="na_hijo[ ]" class="form-control">'+
            '</div>'+
            '<div class="col-md-6 mb-2">'+
                '<label for="" class="form-label">Dni</label>'+
                '<input type="text" name="dni_hijo[ ]" class="form-control">'+
            '</div>'+
            '<div class="col-md-6 mb-2">'+
                '<label for="" class="form-label">Fecha de nacimiento</label>'+
                '<input type="date" name="fn_hijo[ ]" class="form-control">'+
            '</div>'+
            '<div class="col-md-6 mb-2">'+
                '<label for="" class="form-label">Grado de instrucción</label>'+
                '<select name="ginstruccion_hijo[ ]" class="form-control">'+
                    '<option value="Inicial">Inicial</option>'+
                    '<option value="Primaria">Primaria</option>'+
                    '<option value="Secundaria">Secundaria</option>'+
                    '<option value="Tecnico">Tecnico</option>'+
                    '<option value="Universidad">Universidad</option>'+
                '</select>'+
            '</div>'+
            '<a class="btn btn-danger" id="remove_button"><i class="fas fa-trash"></i>Eliminar</a>'+
            '</div>';
    $("#imputs").append(fieldHTML);
    $("#imputs").on('click', '#remove_button', function(e){
      e.preventDefault();
      console.log("eliminar");
      $(this).parent('#fila').remove();
  });
  }
  
</script>
<script>
    $(document).ready(function (f){
        $('#im_socio').change(function(){
            let reader = new FileReader();
            reader.onload = (f) => {
                $('#imagenSeleccionada').attr('src', f.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>

@stop