<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//rotas antes da autenticação/login.
Route::get('/index', [SiteController::class, 'index'])->name('site.index');
Route::get('/login', [SiteController::class, 'login'])->name('site.login');
Route::post('/login', [SiteController::class, 'login'])->name('site.login');
Route::get('/cadastro', [SiteController::class, 'cadastro'])->name('site.cadastro');
Route::get('/sobrenos', [SiteController::class, 'sobrenos'])->name('site.sobrenos');

//rotas após autenticação/login.
Route::get('/home', [AppController::class, 'home'])->name('app.home');