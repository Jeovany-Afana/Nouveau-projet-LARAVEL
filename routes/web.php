<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CahiersController;
use App\Http\Controllers\AuthController;

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


// Route::get('/index',[HomeController::class, 'index']);

    Route::get('/index', [HomeController::class, 'index'])->name('index');
    Route::post('/saveFiche', [AuthController::class, 'saveFiche'])->name('saveFiche');
Route::get('/inscription_prof', [HomeController::class, 'inscription_prof'])->name('inscription_prof')->name('inscription_prof');
Route::post('/login', [HomeController::class, 'login']);
Route::post('/liste_prof', [HomeController::class,'register_prof'])->name('liste_prof');
Route::get('/liste_responsables_classe', [HomeController::class, 'liste_responsables'])->name('liste_responsables');
Route::get('/inscription_responsable', [HomeController::class, 'inscription_responsable'])->name('inscription_responsable');
Route::get('/profile_responsable', [HomeController::class, 'profile_responsable']);
Route::get('/profile_prof', [HomeController::class, 'profile_prof'])->name('profile_prof');
Route::get('/affiche_fiche', [HomeController::class, 'affiche_fiche']);
Route::post('/saveteacher', [HomeController::class, 'saveteacher']);
Route::post('/savestudent', [HomeController::class, 'savestudent']);
Route::post('/teacherlogin', [AuthController::class, 'teacherlogin']);
Route::post('/studentlogin', [AuthController::class, 'studentlogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/ajoutFiche', [HomeController::class, 'ajoutFiche'])->name('ajoutFiche');
Route::get('/loginStudent', [AuthController::class, 'loginStudent']);
Route::get('/loginProf', [AuthController::class, 'loginProf']);
Route::post('/updateContenu', [HomeController::class, 'updateContenu'])->name('updateContenu');
Route::get('/inscription_admin', [HomeController::class, 'inscription_admin']);
Route::post('/saveAdmin', [AuthController::class, 'saveAdmin']);
Route::get('/loginAdmin', [AuthController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('/adminlogin', [AuthController::class, 'adminlogin']);
Route::get('/profile_admin', [AuthController::class, 'profile_admin']);
/**-----------------------------------------------GESTION DES CAHIERS---------------------------------------------- */
Route::get('/liste_cahiers', [CahiersController::class, 'liste_cahiers']);
Route::get('/liste_enseignants', [HomeController::class, 'liste_enseignants']);
Route::get('/liste_responsables',[HomeController::class, 'liste_responsables']);
Route::get('/liste_cahiers', [HomeController::class, 'liste_cahiers'])->name('liste_cahiers');
// web.php
Route::delete('/responsables/{id}', [HomeController::class, 'destroy'])->name('responsables.destroy');
Route::delete('/enseignants/{id}', [HomeController::class, 'destroyTeacher'])->name('enseignants.destroy');
Route::delete('/cahiers/{id}', [HomeController::class, 'destroyCahier'])->name('cahiers.destroy');



