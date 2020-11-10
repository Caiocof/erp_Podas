<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\WorkTeamController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LtController;

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


//USER
Route::get('/cadastraUsuario', [RegisterUserController::class, 'index'])->name('regiterUser');
Route::post('/cadastraUsuario/store', [RegisterUserController::class, 'store'])->name('saveUser');


//LOGIN
Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/logou', [AuthController::class, 'logout'])->name('logout');
Route::post('/login/do', [AuthController::class, 'login'])->name('login.do');


//WORKS
//list
Route::get('/listaFuncionario', [WorksController::class, 'index'])->name('listWorks');
//create
Route::get('/cadastroFuncionario', [WorksController::class, 'create'])->name('registerWorks');
Route::post('/cadastroFuncionario/store', [WorksController::class, 'store'])->name('saveWorks');
//edit and drop
Route::get('/editarFuncionario/{id}', [WorksController::class, 'edit'])->name('editWorks');
Route::put('/editarFuncionario/update/{id}', [WorksController::class, 'update'])->name('saveEditWorks');
Route::delete('/apagarFuncionario/{id}', [WorksController::class, 'destroy'])->name('deleteWorks');


//WORKTEAMS
//list
Route::get('/listaEquipes', [WorkTeamController::class, 'index'])->name('listTeams');
//create
Route::get('/cadastroEquipe', [WorkTeamController::class, 'create'])->name('registerTeams');
Route::post('/cadastroEquipe/store', [WorkTeamController::class, 'store'])->name('saveTeams');
//edit and drop
Route::get('/editarEquipe/{id}', [WorkTeamController::class, 'edit'])->name('editTeams');
Route::put('/editarEquipe/update/{id}', [WorkTeamController::class, 'update'])->name('saveEditTeams');
Route::delete('/apagarEquipe/{id}', [WorkTeamController::class, 'destroy'])->name('deleteTeams');


//PRODUCTION
Route::get('/cadastroProducao/{id}', [ProductionController::class, 'create'])->name('lauchesProdution');
Route::post('/upload', [ProductionController::class, 'store'])->name('uploadProdution');

//LT's
//list
Route::get('/listaLts', [LtController::class, 'index'])->name('listLts');
// edit and drop
Route::get('/editarLts/{id}', [LtController::class, 'edit'])->name('editLts');
Route::put('/editarLts/update/{id}', [LtController::class, 'update'])->name('saveEditLts');
Route::delete('/apagar/Lts/{id}', [LtController::class, 'destroy'])->name('deleteLts');