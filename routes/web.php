<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


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

Route::get('/',HomeController::class);

route::get('cursos',[CursoController::class,'index'])->name('cursos.index');;

Route::get('cursos/create',[CursoController::class,'create'])->name('cursos.create');

route::post('cursos',[CursoController::class,'store'])->name('cursos.store');

Route::get('cursos/{curso}',[CursoController::class,'show'])->name('cursos.show');

route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');

route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');