<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;



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

 /*  Diciamo alla route di entrare in PublicController scritto nell'array e di entrare nella classe: 'homepage'  */

Route::get('/', [PublicController::class, 'homepage'])->name('home');    
Route::get('/about-us', [PublicController::class, 'about_us'])->name('about_us');                         
Route::get('/where', [PublicController::class, 'where'])->name('where');   

Route::get('/movies', [MovieController::class, 'index'])->name('index.movies');
Route::get('/shows', [ShowController::class, 'index'])->name('index.shows'); 


//rotta parametrica
Route::get('/movies/detail/{title}', [MovieController::class, 'show'])->name('show.movies');       
Route::get('/shows/detail/{title}', [ShowController::class, 'show'])->name('shows');    
         