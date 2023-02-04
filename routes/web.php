<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use Symfony\Component\Console\Input\Input;

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




Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/services', function () {
    return view('pages.services');
})->name('service');

Route::get('/createVoiture', [VoitureController::class, 'create'])->name('createVoiture');
Route::get('/createMarque', [MarqueController::class, 'create'])->name('createMarque');
Route::get('/createUser', [AdminController::class, 'create'])->name('createUser');

Route::get('/afficheMessage', [MessageController::class, 'afficheMessage'])->name('afficheMessage');
Route::get('/messageById/{id}', [MessageController::class, 'getMessageById'])->name('messageById');

Route::get('/', [PhotoController::class, 'index'])->name('home');

Route::get('/indexAdmin', [VoitureController::class, 'index'])
->middleware('auth')
->name('indexAdmin');

Route::match(['get', 'post'], '/storeVoiture', [VoitureController::class, 'store'])->name('storeVoiture');

Route::match(['get', 'post'], '/storeMarque', [MarqueController::class, 'store'])->name('storeMarque');

Route::match(['get', 'post'], '/storeUser', [AdminController::class, 'store'])->name('storeUser');

Route::get('/showVoiture/{id}', [VoitureController::class, 'show'])->name('showVoiture');
Route::get('/showMarque/{id}', [MarqueController::class, 'show'])->name('showMarque');
Route::get('/showPhoto/{id}', [PhotoController::class, 'show'])->name('showPhoto');
Route::get('/showUser/{id}', [AdminController::class, 'show'])->name('showUser');

Route::get('/editerVoiture/{id}', [VoitureController::class, 'editer'])->name('editerVoiture');
Route::get('/editerMarque/{id}', [MarqueController::class, 'editer'])->name('editerMarque');
Route::get('/editerUser/{id}', [AdminController::class, 'editer'])->name('editerAdmin');

Route::patch('/updateVoiture/{id}', [VoitureController::class, 'update'])->name('updateVoiture');
Route::patch('/updateMarque/{id}', [MarqueController::class, 'update'])->name('updateMarque');
Route::patch('/updateUser/{id}', [AdminController::class, 'update'])->name('updateUser');

Route::patch('/setStatut/{id}', [VoitureController::class, 'setStatut'])->name('setStatutVoiture');
Route::patch('/setStatutMarque/{id}', [MarqueController::class, 'setStatut'])->name('setStatutMarque');
Route::patch('/setStatutUser/{id}', [AdminController::class, 'setStatut'])->name('setStatutUser');

Route::delete('/deleteVoiture/{id}', [VoitureController::class, 'destroy'])->name('destroyVoiture');
Route::delete('/deleteMarque/{id}', [MarqueController::class, 'destroy'])->name('destroyMarque');
Route::delete('/deleteUser/{id}', [AdminController::class, 'destroy'])->name('destroyUser');

Route::post('/message',[MessageController::class, 'store'])->name('message');
Route::get('/logout', [UsersController::class, 'logout'])->name('ap_logout');

Route::post('/existEmail', [UsersController::class, 'existEmail'])->name('existEmail');

Route::get('/userChecker', [UsersController::class, 'userChecker'])->name('userChecker');



Route::post('/my-ipn', function () {
    $type_event = Input::get('type_event');
    $custom_field = json_decode(Input::get('custom_field'), true);
    $ref_command = Input::get('ref_command');
    $item_name = Input::get('item_name');
    $item_price = Input::get('item_price');
    $devise = Input::get('devise');
    $command_name = Input::get('command_name');
    $env = Input::get('env');
    $token = Input::get('token');
    $api_key_sha256 = Input::get('api_key_sha256');
    $api_secret_sha256 = Input::get('api_secret_sha256');

    $my_api_key = env('API_KEY');
    $my_api_secret = env('API_SECRET');

    if(hash('sha256', $my_api_secret) === $api_secret_sha256 && hash('sha256', $my_api_key) === $api_key_sha256)
    {
        //from PayTech
    }
    else{
        //not from PayTech
    }
})->name('paytech');

