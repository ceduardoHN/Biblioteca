<?php

namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use Illuminate\Database\Eloquent\Model;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//RUTAS PARA LA TABLA LIBRO
Route::get("/libro",function(){
    $libros=Models\libro::all();
    $autores=Models\autor::all();
    return view("libro",compact("libros","autores"));
})->name("libro.index");
Route::post("/libro/store",[LibroController::class,"store"])->name("libro.store");
Route::get("/libro/editar/{id}",[LibroController::class,"edit"])->name("libro.edit");
Route::put("/libro/update/{id}",[LibroController::class,"update"])->name("libro.update");
Route::get("/libro/destroy/{id}",[LibroController::class,"destroy"])->name("libro.destroy");
Route::get("/libro/search",[LibroController::class,"search"])->name("libro.search");

//RUTAS PARA LA TABLA AUTOR
Route::get("/autor",function(){
    $autores=Models\autor::all();
    return view("autor",compact("autores"));
})->name("autor.index");
Route::post("/autor/store",[AutorController::class,"store"])->name("autor.store");
Route::get("/autor/editar/{id}",[AutorController::class,"edit"])->name("autor.edit");
Route::put("/autor/update/{id}",[AutorController::class,"update"])->name("autor.update");
Route::get("/autor/destroy/{id}",[AutorController::class,"destroy"])->name("autor.destroy");
Route::get("/autor/search",[AutorController::class,"search"])->name("autor.search");