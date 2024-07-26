<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Matheus";
        $idade = 29;

        $arr = [10, 20, 30, 40, 50];

        $nomes = ["Matheus", "Maria"];

        return view('welcome', 
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => "Programador",
                'arr' => $arr,
                'nomes' => $nomes
            ]
            );
    }
}