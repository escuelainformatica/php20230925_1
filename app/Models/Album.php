<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    public $primaryKey='AlbumId';
    public $fillable=['Title','ArtistId'];
    public $timestamps=false;

    public function artist() {
        return $this->belongsTo(Artist::class,'ArtistId','ArtistId');
     }
     
}
