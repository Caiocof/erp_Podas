<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\WorksController;

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
    return view('master');
});

//USER
Route::get('/cadastraUsuario', [RegisterUserController::class, 'index'])->name('regiterUser');
Route::post('/cadastraUsuario/store', [RegisterUserController::class, 'store'])->name('saveUser');


//WORKS
Route::get('/listaFuncionario', [WorksController::class, 'index'])->name('listWorks');
Route::get('/cadastraFuncionario', [WorksController::class, 'create'])->name('registerWorks');
Route::post('/cadastraFuncionario/store', [WorksController::class, 'store'])->name('saveWorks');
