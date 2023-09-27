  @extends('plantilla')
  @section('contenido')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

          <!-- Content Header (Page header) -->
          <br>

          <!-- Main content -->
          <section class="content">
              <x-tarjeta titulo="Lista de Albumes">
                  <x-tabla :encabezados="['AlbumId', 'Titulo', 'Artista', 'Editar']">
                      @foreach ($albumes as $album)
                          <tr>
                              <td>{{ $album->AlbumId }}</td>
                              <td>{{ $album->Title }}</td>
                              <td>{{ $album->artist->Name }}</td>
                              <td><a class="badge bg-info" href='/album/actualizar/{{ $album->AlbumId }}'>Actualizar</a><br>
                                  <a class="badge bg-danger" href='/album/eliminar/{{ $album->AlbumId }}'
                                      onclick="return confirm('¿Esta seguro?')">Eliminar</a>
                              </td>
                          </tr>
                      @endforeach
                  </x-tabla>
                  <x-paginacion :numPage="$numPage" url="http://127.0.0.1:8000/album" :curPage="$curPage" />
                  <x-slot:pie>
                      <a href="http://127.0.0.1:8000/album/insertar" class="btn btn-primary">Insertar</a>
                  </x-slot>
              </x-tarjeta>


          </section>
          <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
  @endsection
