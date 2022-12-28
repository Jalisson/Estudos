<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estudos extends Controller
{
 
        public function exibirhome(){
            return view('cadastroCliente');
        }
        public function exibirprodutos(){
            return view('produtos');
        }
}
