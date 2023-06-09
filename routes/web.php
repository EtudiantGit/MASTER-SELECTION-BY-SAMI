<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\HomeController;
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
Route::get('liste/{id}',[HomeController::class,'telechargerListeDesCandidats'])->name('downloadPDF');
Route::get('/masters/{id}/download-excel',[HomeController::class,'telechargerListeDesCandidatsEXCEL'])->name('downloadEXCEL');



Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
