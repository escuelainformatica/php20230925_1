<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\servicio\AlbumRepo;
use App\servicio\ArtistRepo;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public AlbumRepo $albs;
    public ArtistRepo $arts;
    public Request $request;
    public function __construct(AlbumRepo $as,ArtistRepo $ArtistRepo,Request $request)
    {
        $this->albs=$as;
        $this->arts=$ArtistRepo;
        $this->request=$request;
    }
    public function listar($curPage=1) {
        $id=$this->request->get('ArtistId',null);
        
        
        $albumes=$this->albs->listarPaginado($curPage);
        $numAlbumes=$this->albs->contar();
        $numPage=ceil($numAlbumes/10);
        
        
        $artistas=$this->arts->listarTodo();
        
        return view("album.listar",[
            'albumes'=>$albumes,
            'artistas'=>$artistas,
            'curPage'=>$curPage,
            'numAlbumes'=>$numAlbumes,
            'numPage'=>$numPage]); // /resources/views/album/listar.blade.php        
    }
    public function insertar()
    {
        $album=new Album();
        $artistas=$this->arts->listarTodo();
        return view('album.insertar',['album'=>$album,'artistas'=>$artistas]);
    }

    public function insertarPost()
    {
        $album=new Album($this->request->all());
        $correcto=$this->albs->insertar($album); // insertar en la base de datos
        if($correcto) {
            return redirect()->route("album.listar");
        }
        $artistas=$this->arts->listarTodo();        
        return view('album.insertar',['album'=>$album,'artistas'=>$artistas]);
    }
    public function actualizar(int $AlbumId)
    {
        $album=$this->albs->obtener($AlbumId);
        $artistas=$this->arts->listarTodo();
        return view('album.editar',['album'=>$album,'artistas'=>$artistas]);
    }
    public function eliminar(int $AlbumId)
    {
        $this->albs->eliminar($AlbumId);
        return redirect()->route("album.listar");
    }
    public function ActualizarPost(int $AlbumId)
    {
        $album=new Album($this->request->all());
        $album->AlbumId=$this->request['AlbumId']; // similar a $_POST['AlbumId']
        $correcto=$this->albs->actualizar($album); // actualiza en la base de datos
        if($correcto) {
            return redirect()->route("album.listar");
        }
        $artistas=$this->arts->listarTodo();        
        return view('album.editar',['album'=>$album,'artistas'=>$artistas]);
    }
}
