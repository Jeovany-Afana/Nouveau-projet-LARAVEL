<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index',[HomeController::class, 'index']);
Route::get('/inscription_prof', [HomeController::class, 'inscription_prof'])->name('inscription_prof')->name('inscription_prof');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/liste_prof', [HomeController::class,'register_prof'])->name('liste_prof');
Route::get('/liste_responsables_classe', [HomeController::class, 'liste_responsables'])->name('liste_responsables');
Route::get('/inscription_responsable', [HomeController::class, 'inscription_responsable'])->name('inscription_responsable');
Route::get('/profile_responsable', [HomeController::class, 'profile_responsable']);
Route::get('/profile_prof', [HomeController::class, 'profile_prof'])->name('profile_prof');
Route::get('/affiche_fiche', [HomeController::class, 'affiche_fiche']);