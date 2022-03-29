<?php
use App\Http\Controllers\{
    UserController
};
use App\Http\Controllers\Admin\NoticiaController;

use Illuminate\Support\Facades\Route;


/*-------------------------------------Rotas das noticias-----------------------------------------*/
Route::delete('/noticias/{id}', [NoticiaController::class, 'destroy'])->name('noticias.destroy');
Route::get('/users/{id}/noticias/create', [NoticiaController::class, 'create'])->name('noticias.create');
Route::post('/users/{id}/noticias/create', [NoticiaController::class, 'store'])->name('noticias.store');
Route::get('/users/{user}/noticias/noticias/{id}', [NoticiaController::class, 'editar'])->name('noticias.editar');
Route::put('/noticias/noticias/{id}', [NoticiaController::class, 'update'])->name('noticias.update');
Route::get('/users/{id}/noticias', [NoticiaController::class, 'index'])->name('noticias.index');



/*-------------------------------------Rotas dos usuarios-----------------------------------------*/
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'] )->name('home');
Route::get('/users', [UserController::class, 'index'] )->name('users.home');
Route::get('/users/{id}', [UserController::class, 'editar'] )->name('users.editar');
Route::get('/home', [UserController::class, 'index'] )->name('users.home');

/*Auth::routes();*/

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');*/
