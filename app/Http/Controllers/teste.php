<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teste extends Controller
{
    public function testeinfo(){
        return view ('home', ['nome' => 'Jalisson']);
    }
}
