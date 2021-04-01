<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
 

//controllers para mostrar
Route::get('/', function(){
   return back (users.index);
});
//código principal
Route::get('/', [UsuariosController::class, '/'])->name('/');
Route::get('/inicio',[UsuariosController::class,'userform']);
Route::post('/save',[UsuariosController::class, 'save'])->name('save');
//Listar usuarios
Route::get('/index',[UsuariosController::class, 'list'])->name('list');
//Eliminar usuarios
Route::delete('/delete/{id}',[UsuariosController::class, 'delete'])->name('delete');
//Formulario para edicion
Route::get('/editform/{id}',[UsuariosController::class, 'editform'])->name('editform');
//Edicion de datos
Route::post('/edit/{id}', [UsuariosController::class, 'edit'])->name('edit');
   //Pantalla de introducción
Route::get('/view', function (){
   return view('users.mostrar');
});
   Route::get('/intro', function (){
   return view('users.intro');
});
//Vistas secundarias
Route::get('/frotar', function (){
   return view('users.Frotacion');
});
Route::get('/percusion', function (){
   return view('users.Percusion');
});
Route::get('/punteo', function (){
   return view('users.Punteo');
});
Route::get('/soplo1', function (){
   return view('users.Soplo1');
});
Route::get('/soplo2', function (){
   return view('users.Soplo2');
});
   //Pantalla inicial
   Route::get('/', function (){
      return view('users.principio');
   });