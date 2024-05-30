<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controller para decidir rotas APOS o login/autenticação

class AppController extends Controller
{
    public function home(){
        return view('app.home');
    }
    
}
