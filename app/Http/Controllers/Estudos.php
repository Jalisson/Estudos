<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estudos extends Controller
{
    public function testeinfo($n, $s){
        return view('home', [
            'nome' => $n,
            'senha' => $s
        ]);
    }
    public function nomeado(){
        echo"<h1>Esse é a função de nome de rotas</h1>";
        echo"<a href=".route('nome1').">Primeira Rota</a>";

    }
    public function exibir_dados(){
        $this->email();
    }


    private function email(){
        echo"<h3>Aqui irá exibir as informações de e-mail </h3>";    
    }


    private $clientes = [
        [
            'nome' => 'Jalisson',
            'email' => 'njalisson@gmail.com'
        ],
        [
            'nome' => 'Naira Luiza',
            'email' => 'Naira@gmail.com'
        ],
        [
            'nome' => 'Edmilson',
            'email' => 'Edmilson@gmail.com'
        ],
        [
            'nome' => 'ANNA',
            'email' => 'ana@gmail.com'
        ]
    ];

    // public function info($index){

    //     if($index >3 || $index < 0 || is_string($index)){
    //         echo"O index precisa ser somente numero e de0 a 3";
    //     }else{
    //         echo'INFORMAÇÕES:<br>'.$this->clientes[$index]['nome']. '<br>'.$this->clientes[$index]['email'];
    //     }


    // }
    public function cliente($index = 0){
        echo"Infromações dos cliente: {$this->clientes[$index]['nome']}";

    }


}
