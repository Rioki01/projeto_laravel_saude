<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controller para decidir rotas ANTES do login/autenticação

class SiteController extends Controller
{
    public function index(){
        return view('site.index');
    }
    public function login(){
        return view('site.login');
    }
    public function cadastro(){
        return view('site.cadastro');
    }
    public function sobrenos(){
        return view('site.sobrenos');
    }
}
