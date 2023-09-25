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
        <table class="table table-bordered">
          <thead>
            <tr>
            <th>Titulo</td>
            <th>Artista</td>
            <th>Editar</td>
          </tr>
          </thead>
          @foreach($albumes as $album)
          <tr>
            <td>{{$album->Title}}</td>
            <td>{{$album->artist->Name}}</td>
            <td><a class="badge bg-info" href='/album/actualizar/{{$album->AlbumId}}'>Actualizar</a><br>
            <a class="badge bg-danger" href='/album/eliminar/{{$album->AlbumId}}' onclick="return confirm('¿Esta seguro?')">Eliminar</a></td>
          </tr>
          @endforeach
          </table>
          
        </div>
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