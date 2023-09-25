<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AlbumController::class)->prefix('album')->group(function() {
    Route::get("",'listar')->name("album.listar"); // 
    Route::get("/insertar",'insertar'); // Route::get("/album/insertar",[AlbumController::class,'insertar']);
    Route::post("/insertar",'insertarPost');
    Route::get("/actualizar/{AlbumId}",'actualizar'); 
    Route::post("/actualizar/{AlbumId}",'actualizarPost');
    Route::get("/eliminar/{AlbumId}",'eliminar'); 
});