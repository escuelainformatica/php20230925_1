<?php
namespace App\servicio;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Collection;

class ArtistRepo {
    /**
     * Lista todos los artistas
     */
    public function listarTodo():Collection {
        return Artist::all();
    }
    // type hinting.
    public function sumar(int $n1,int $n2):int {
        return $n1+$n2;
    }
    public function buscar():?int
    {
        return 20;   
    }
    public function nada():void
    {

    }
    public function funcion2():string|int|null
    {

    }
    
}