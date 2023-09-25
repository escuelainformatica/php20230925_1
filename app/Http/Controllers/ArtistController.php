<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\servicio\ArtistRepo;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function listar(ArtistRepo $as) {
        $artistas=$as->listarTodo();
        return view('artist.listar',['artistas'=>$artistas]);
    }
}
