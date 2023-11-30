<?php

namespace App\Http\Controllers;
use App\Models\Disc;
use Illuminate\Http\Request;

class DiscController extends Controller
{
    public function chamada(){
        $disciplinas = Disc::all();
        return view("disciplinas/disciplina", ['disciplinas'=> $disciplinas]);
    }
}
