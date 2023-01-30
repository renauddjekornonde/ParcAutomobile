<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;
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
    return view('home.home');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/detail', function () {
    return view('home.detailVoiture');
});


Route::get('/connexion', function () {
    return view('pages.connexion');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/createVoiture', [VoitureController::class, 'create'])->name('createVoiture');
Route::get('/indexAdmin', [VoitureController::class, 'index'])->name('indexAdmin');

Route::match(['get', 'post'], '/storeVoiture', [VoitureController::class, 'store'])->name('storeVoiture');

Route::get('/showVoiture/{id}', [VoitureController::class, 'show'])->name('showVoiture');
Route::get('/editerVoiture/{id}', [VoitureController::class, 'editer'])->name('editerVoiture');
Route::patch('/updateVoiture/{id}', [VoitureController::class, 'update'])->name('updateVoiture');
Route::patch('/setStatut/{id}', [VoitureController::class, 'setStatut'])->name('setStatut');
Route::delete('/deleteVoiture/{id}', [VoitureController::class, 'destroy'])->name('destroyVoiture');
