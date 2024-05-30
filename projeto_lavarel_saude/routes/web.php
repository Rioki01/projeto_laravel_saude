<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


//rotas após autenticação/login.
//todas paginas que so podem ser vista apos login, estarão aqui!  
Route::middleware("auth")->group(function(){
    Route::get('/home', [AppController::class, 'home'])->name('app.home');
});

//rotas antes da autenticação/login.
Route::get('/index', [SiteController::class, 'index'])->name('site.index');
Route::get('/sobrenos', [SiteController::class, 'sobrenos'])->name('site.sobrenos');

//autenticações
Route::get('/login', [AuthController::class, 'login'])->name('site.login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthController::class, 'loginDestroy'])->name('login.destroy');
Route::get('/cadastro', [AuthController::class, 'cadastro'])->name('site.cadastro');
Route::post('/cadastro', [AuthController::class, 'cadastroPost'])->name('cadastro.post');
