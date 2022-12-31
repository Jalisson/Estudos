<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estudos extends Controller
{
 //função para exibir a pagina home
        public function exibirhome(){
            return view('home');
        }
        public function exibirprodutos(){
            return view('produtos');
        }
}
