<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste($p1, $p2)
    {
        //enviar variaveis por array associativa
            //return view('site.teste', ['p1' => $p1, 'p2' => $p2]);

        //enviar variaveis por compact
        return view('site.teste', compact('p1', 'p2'));

        //enviar variaveis por with()
            //return view('site.teste')->with('p1', $p1)->with('p2', $p2);
    }
}
