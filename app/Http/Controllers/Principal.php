<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
 //função para exibir a pagina home
        public function exibirhome(){
            return view('home');
        }
        public function exibirSobreNos(){
            return view('sobre-nos');
        }

}
