<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class funcaoUnica extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        echo"I am sigle action Controller "; // eu sou uma Unica função do controlador 
    }
}
