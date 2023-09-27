  @extends('plantilla')
  @section('contenido')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          @include('componentes.encabezado', ['titulo' => 'Insertar Album'])

          <!-- Main content -->
          <section class="content">

              <!-- Default box -->
              <form method="post">
                  @csrf
                  <x-tarjeta titulo="Insertar Albumes">
                      <div class="form-group">
                          <label for="exampleInputEmail1">AlbumId</label>
                          <input type="text" class="form-control" id="AlbumId" name="AlbumId" disabled
                              value="{{ $album->AlbumId }}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control" id="Title" name="Title"
                              value="{{ $album->Title }}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">ArtistId</label>
                          <select name="ArtistId" class="form-control">
                              <option value="">--Seleccione Artista--</option>
                              @foreach ($artistas as $artista)
                                  @if ($artista->ArtistId == $album->ArtistId)
                                      <option value="{{ $artista->ArtistId }}" selected>{{ $artista->Name }}</option>
                                  @else
                                      <option value="{{ $artista->ArtistId }}">{{ $artista->Name }}</option>
                                  @endif
                              @endforeach()
                          </select <input type="text" class="form-control" id="ArtistId" name="ArtistId"
                              value="{{ $album->ArtistId }}">
                      </div>
                      <x-slot:pie>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </x-slot:pie>
                  </x-tarjeta>

              </form>
              <!-- /.card -->

          </section>
          <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
  @endsection
