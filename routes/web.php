<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');
Route::resource('masters', MasterController::class);
Route::resource('candidats', CandidatController::class);
Route::view('/suivi','candidat.login')->name('login_candidat');
Route::get('/test', function () {
    return view('candidat.testCreate');
});
// Route::get('suivre-candidature',[CandidatController::class,'login_candidat'])->name('login_candidat');




/*------------ Enregistrer le candidat et les masters choisi avec les scores -----------*/

/*-------------------------------Fin Candidat-score-Master--------------------------*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
