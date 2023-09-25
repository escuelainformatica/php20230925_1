<?php
namespace App\servicio;
use App\Models\Album;

// clase de repositorio
// clase ado (activa data object)
// clase dao (Data object)

class AlbumRepo {
    /**
     * Esta funcion regresa un listado de album con los artistas ordenado por el titulo de los albumes.
     */
    public function listarOrdenPorTitle()
    {
        return Album::with(['artist'])->orderBy('Title')->get();
    }
    /**
     * Esta funcion lista por el numero de artista
     * @param int $artistId el numero de artista
     * @return mixed un listado de valores.
     */
    public function listarFiltrado($artistId) 
    {
        return Album::with(['artist'])->where('ArtistId',$artistId)->orderBy('Title')->get();
    }
    public function insertar(Album $album):bool
    {
        return $album->save();
    }
    public function obtener(int $AlbumId):?Album // Album o nulo (?) si no se encontro el valor.
    {
        return Album::find($AlbumId);
    }
    public function actualizar(Album $album):bool
    {        
        
        $antiguo=Album::find($album->AlbumId);
        $antiguo->Title=$album->Title;
        $antiguo->ArtistId=$album->ArtistId;
        return $antiguo->save();
    }
    public function eliminar(int $AlbumId) {
        $antiguo=Album::find($AlbumId); //Album::where('AlbumId',$AlbumId);
        return $antiguo->delete(); //$antiguo->save();
    }
}