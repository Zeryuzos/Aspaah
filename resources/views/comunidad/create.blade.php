@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Crear Comunidad</h1>
@stop

@section('content')
    <form action="/comunidads" method="POST">
        @csrf
        <div class="mb-3">
            <div class="row">
                <div class="col-md-4">
                  <label for="" class="form-label">Departamento</label>
                  <select class="form-control" id="departamentos" name="departamento">
                      <option value="">Selecciona el Departamento</option>
                      @foreach($departamentos as $departamento)
                      <option value="{{ $departamento->id }}">{{ $departamento['no_departamento'] }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="" class="form-label">Provincia</label>
                  <select class="form-control" id="provincia_id" name="provincia_id">
                      <option value="">Seleccione la provincia</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="" class="form-label">Distrito</label>
                  <select class="form-control" id="distrito_id" name="distrito_id">
                      <option value="">Seleccione el Distrito</option>
                  </select>
                </div>
            </div>
            <label for="" class="form-label">Nombre comunidad</label>
            <input placeholder="Santa Maria" type="text" id="no_comunidad" name="no_comunidad" class="form-control" tabindex="1">
            <label for="" class="form-label">Descripcion comunidad</label>
            <input placeholder="Esta comidad .." type="text" id="de_comunidad" name="de_comunidad" class="form-control" tabindex="2">
        </div>
        <a href="/comunidads" class="btn btn-warning" tabindex="4"><i class="fas fa-backspace"></i> Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="5"><i class="fas fa-file-download"></i> Guardar</button>
    </form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('/css/app.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
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

  });
</script>
@stop