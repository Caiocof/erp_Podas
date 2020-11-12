<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\WorkTeamController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LtController;
use App\Http\Controllers\RegionController;


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
Route::get('/listaFuncionarios', [WorksController::class, 'index'])->name('listWorks');

Route::get('/cadastroFuncionario', [WorksController::class, 'create'])->name('registerWorks');
Route::post('/cadastroFuncionario/store', [WorksController::class, 'store'])->name('saveWorks');

Route::get('/editarFuncionario/{id}', [WorksController::class, 'edit'])->name('editWorks');
Route::put('/editarFuncionario/update/{id}', [WorksController::class, 'update'])->name('saveEditWorks');
Route::delete('/apagarFuncionario/{id}', [WorksController::class, 'destroy'])->name('deleteWorks');


//WORKTEAMS
Route::get('/listaEquipes', [WorkTeamController::class, 'index'])->name('listTeams');

Route::get('/cadastroEquipe', [WorkTeamController::class, 'create'])->name('registerTeams');
Route::post('/cadastroEquipe/store', [WorkTeamController::class, 'store'])->name('saveTeams');

Route::get('/editarEquipe/{id}', [WorkTeamController::class, 'edit'])->name('editTeams');
Route::put('/editarEquipe/update/{id}', [WorkTeamController::class, 'update'])->name('saveEditTeams');
Route::delete('/apagarEquipe/{id}', [WorkTeamController::class, 'destroy'])->name('deleteTeams');


//PRODUCTION
Route::get('/cadastroProducao/{id}', [ProductionController::class, 'create'])->name('lauchesProdution');
Route::post('/upload', [ProductionController::class, 'store'])->name('uploadProdution');


//LT's
Route::get('/listaLts', [LtController::class, 'index'])->name('listLts');

Route::get('cadastroLt',[LtController::class, 'create'])->name('registerLts');
Route::post('cadastroLt/store', [LtController::class, 'store'])->name('saveLts');

Route::get('/editarLt/{id}', [LtController::class, 'edit'])->name('editLts');
Route::put('/editarLt/update/{id}', [LtController::class, 'update'])->name('saveEditLts');
Route::delete('/apagar/Lt/{id}', [LtController::class, 'destroy'])->name('deleteLts');


//REGION
Route::get('/listaRegions', [RegionController::class, 'index'])->name('listRegions');

Route::get('cadastroRegion',[RegionController::class, 'create'])->name('registerRegions');
Route::post('cadastroRegion/store', [RegionController::class, 'store'])->name('saveRegions');

Route::get('/editarRegion/{id}', [RegionController::class, 'edit'])->name('editRegions');
Route::put('/editarRegion/update/{id}', [RegionController::class, 'update'])->name('saveEditRegions');
Route::delete('/apagar/Region/{id}', [RegionController::class, 'destroy'])->name('deleteRegions');

