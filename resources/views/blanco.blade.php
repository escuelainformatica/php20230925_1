  @extends("plantilla")
  @section("contenido")
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include("componentes.encabezado",['titulo'=>'Lista de Albumes'])

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        @include("componentes.encabezadotarjeta",['titulo'=>'Lista de Albumnes'])
        <div class="card-body">

        <!-- MODIFIQUE LOS VALORES AQUI -->

        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection