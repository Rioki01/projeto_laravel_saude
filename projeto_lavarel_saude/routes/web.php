<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


//rotas após autenticação/login.
//todas paginas que so podem ser vista apos login, estarão aqui!  

Route::group(['middleware' => 'auth'], function () {
    Route::get('/agendamento/idMedico', [AppController::class, 'agendamento_medico'])->name('interno.agendamento_medico');
    Route::get('/agendamento', [AppController::class, 'agendamento'])->name('interno.agendamento');
    Route::get('/idConsulta', [AppController::class, 'consulta'])->name('interno.consulta');
    Route::get('/consultas', [AppController::class, 'consultas'])->name('interno.consultas');
    Route::get('/id/editar', [AppController::class, 'edit'])->name('interno.edit-consulta');
    Route::get('/medicos', [AppController::class, 'medicos'])->name('interno.medicos');
});

Route::get('/', [AppController::class, 'home'])->name('interno.home')->middleware('auth');

//rotas antes da autenticação/login.
Route::get('/index', [SiteController::class, 'index'])->name('site.index');
Route::get('/sobrenos', [SiteController::class, 'sobrenos'])->name('site.sobrenos');

//autenticações
Route::get('/login', [AuthController::class, 'login'])->name('site.login');
Route::get('/redirectlogin', [AuthController::class, 'redirectlogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthController::class, 'loginDestroy'])->name('login.destroy');
Route::get('/cadastro', [AuthController::class, 'cadastro'])->name('site.cadastro');
Route::post('/cadastro', [AuthController::class, 'cadastroPost'])->name('cadastro.post');
