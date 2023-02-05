<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\SabiasController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\infantesController;
use App\Http\Controllers\NoticiasController;

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


Route::get('/', [AppController::class, 'index'])->name('index');

// Route::get('/dashboard',[VideosController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth', 'verified'])->name('dashboard');
// Videos
Route::get('/videos',[VideosController::class,'index'])->middleware(['auth', 'verified'])->name('video.index');
Route::get('/videos/create',[VideosController::class,'create'])->middleware(['auth', 'verified'])->name('video.create');
Route::get('/videos/{video}/edit',[VideosController::class,'edit'])->middleware(['auth', 'verified'])->name('video.edit');


//Sabias
Route::get('/enlaces',[SabiasController::class,'index'])->middleware(['auth', 'verified'])->name('sabia.index');
Route::get('/enlaces/create',[SabiasController::class,'create'])->middleware(['auth', 'verified'])->name('sabia.create');
Route::get('/enlaces/{sabia}/edit',[SabiasController::class,'edit'])->middleware(['auth', 'verified'])->name('sabia.edit');


//Noticias
Route::get('/noticias',[NoticiasController::class,'index'])->middleware(['auth', 'verified'])->name('noticia.index');
Route::get('/noticias/create',[NoticiasController::class,'create'])->middleware(['auth', 'verified'])->name('noticia.create');
Route::get('/noticias/{noticia}/edit',[NoticiasController::class,'edit'])->middleware(['auth', 'verified'])->name('noticia.edit');


// Infantes
Route::get('/infantes',[infantesController::class,'index'])->middleware(['auth', 'verified'])->name('infante.index');
Route::get('/infantes/create',[infantesController::class,'create'])->middleware(['auth', 'verified'])->name('infante.create');
Route::get('/infantes/{infante}/edit',[infantesController::class,'edit'])->middleware(['auth', 'verified'])->name('infante.edit');

// Citas
Route::get('/dashboard',[CitasController::class,'index'])->middleware(['auth', 'verified'])->name('citas.index');
Route::get('/citas/create',[CitasController::class,'create'])->middleware(['auth', 'verified'])->name('citas.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
