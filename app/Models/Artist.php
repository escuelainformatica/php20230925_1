<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public $primaryKey='ArtistId';
    public $fillable=['Name'];
    public $timestamps=false;
}
