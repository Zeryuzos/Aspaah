@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Crear Distrito</h1>
@stop

@section('content')
    <form action="/distritos" method="POST">
        @csrf
        <div class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="form-label">Departamento</label>
                    <select class="form-control" id="departamentos" name="departamento">
                        <option value="">Select Option</option>
                        @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->id }}">{{ $departamento['no_departamento'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Provincia</label>
                    <select class="form-control" id="provincia_id" name="provincia_id">
                        <option value="">Select Option</option>
                    </select>
                </div>
            </div>
            <label for="" class="form-label">Nombre distrito</label>
            <input placeholder="San Miguel" type="text" id="no_distrito" name="no_distrito" class="form-control" tabindex="2">
        </div>
        <a href="/distritos" class="btn btn-warning" tabindex="4"><i class="fas fa-backspace"></i> Cancelar</a>
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
  });
  
</script>
@stop