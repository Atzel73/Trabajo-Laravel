<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
 

//controllers para mostrar

                                                 
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
//código principal
Route::get('/', function () {
    return view('users.index');
});

Route::get('/ekis',[UsuariosController::class,'userform']);
Route::post('/save', [UsuariosController::class, 'save'])->name('save');

Route::get('/index',[UsuariosController::class,'list']);
Route::delete('/delete/{id}', [UsuariosController::class, 'delete'])->name('delete');