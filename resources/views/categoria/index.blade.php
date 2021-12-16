@extends('adminlte::page')

@section('title', 'Admin ASPAAH')

@section('content_header')
    <h1>Categoria</h1>
@stop

@section('content')
    <a href="categorias/create" class="btn btn-primary"><i class="fas fa-plus"></i> CREAR</a>
<div class="card-body">
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
    <table id="example1" class="table table-info table-bordered mt-4 table-hover dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead class="text-center">
            <tr role="row">
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>  
        </thead>
        <tbody class="text-center">
            @foreach ($categorias as $categoria)
            <tr class="odd">
                <td>{{ $categoria->id}}</td>
                <td>{{ $categoria->no_categoria}}</td>
                <td>{{ $categoria->de_categoria}}</td>
                <td class="">
                    <form class="d-flex justify-content-around formulario_eliminar" action="{{route ('categorias.destroy',$categoria->id)}}" method="POST">
                    <a class="btn btn-info" href="/categorias/{{ $categoria->id}}/edit"><i class="fas fa-edit"></i> Editar</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('/css/app.css') }}">
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
<!-- DataTables  & Plugins -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/plugins/jszip/jszip.min.js"></script>
<script src="/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.formulario_eliminar').submit(function(e){
        e.preventDefault();
            Swal.fire({
            title: '¿Estas Seguro?',
            text: "Este registro se eliminara definitivamente",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#00B161',
            cancelButtonColor: '#C01B3E',
            confirmButtonText: 'Si, Eliminar',
            cancelButtonText: 'No, Cancelar',
            }).then((result) => {
            if (result.isConfirmed) {
                /*Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )*/
                this.submit();
            }
            })
    });
</script>
@stop