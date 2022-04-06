<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
//Route::get('/','HomeController');  // laravel 7 y anteriores
//route::get('cursos', 'CursoController@index'); // laravel 7 y anteriores

/* 
Route::get('/',HomeController::class);
route::get('cursos', [CursoController::class, 'index']); 
Route::get('cursos/create', [CursoController::class, 'create']);
route::get('cursos/{curso}', [CursoController::class, 'show']); */ //laravel 8 

Route::get('/',HomeController::class);

Route::controller(CursoController::class)->group(function(){
    route::get('cursos','index'); 
    Route::get('cursos/create', 'create');
    route::get('cursos/{curso}', 'show');
});

