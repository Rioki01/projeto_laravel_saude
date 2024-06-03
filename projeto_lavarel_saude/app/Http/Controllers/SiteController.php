<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controller para decidir rotas ANTES do login/autenticação

class SiteController extends Controller
{
    public function index(){
        return view('site.index');
    }
}
