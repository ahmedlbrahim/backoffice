<?php

use App\Event;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\ConnexionController;

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

Route::get('/login', [ConnexionController::class, 'index'])->name('login');

Route::post('/login', [ConnexionController::class, 'login']);

Route::get('/deconnexion', [ConnexionController::class, 'deconnexion'])->middleware(['auth'])->name('deconnexion');

Route::get('/', function () {
    $lists = Event::all();

    return view('list', compact('lists'));
})->middleware(['auth']);

Route::get('/registration', [RegistController::class, 'index'])->name('registration');

Route::post('/registration', [RegistController::class, 'traitement'])->name('registered');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
