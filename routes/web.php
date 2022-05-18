<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\LogoutController;
use App\Http\Controllers\PartiesController;
use app\Models\Parties;


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
    return view('welcome');
});
Route::get('/match', function () {
    return view('match');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/match','App\Http\Controllers\PartiesController@listMatchs', function () {
    return view('match');
})->middleware(['auth'])->name('dashboard');

Route::get('/match/{parties}', 'App\Http\Controllers\PartiesController@show', 'App\Http\Controllers\PartiesController@list');


Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
 });

require __DIR__.'/auth.php';
/*
Route::get('dashboard', function () {
    $parties = Parties::all();
    return view('dashboard', ['match' => $parties]);
  });
/*
Route::get('/matchs', 'PartiesController@list');
Route::get('/matchs/{match}', 'PartiesController@list');
/*
Route::view('AjouterJeu', 'Jeux/AjouterJeu');
Route::get('/jeux/{jeu}', 'JeuxController@show');
Route::post('jeux', 'JeuxController@store');
*/