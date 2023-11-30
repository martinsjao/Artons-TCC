<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Obras;


class HomeController extends Controller
{
    //LOGIN
    public function index()
    {
        $Homes = Home::all();
        return view('login/login',['login' => $Homes]);
    }

    public function create()
    {
        return view('login/login');
    }

    //Disciplinas
    public function indexd()
    {
        $Homes = Home::all();
        return view('disciplinas/disciplina',['disciplina' => $Homes]);
    }

    public function created()
    {
        return view('disciplinas/disciplina');
    }

    //Obras
    public function indexo()
    {
        $Obras = Obras::all();
        return view('obras',['obras' => $Obras]);
    }

    public function createo()
    {
        return view('obras');
    }


    //Vestibulares
    public function indexv()
    {
        $Homes = Home::all();
        return view('vestibulares/vest',['vest' => $Homes]);
    }

    public function createv()
    {
        return view('vestibulares/vest');
    }

    //Conta
    public function indexc()
    {
        $Contas = Conta::all();
        return view('conta',['conta' => $Contas]);
    }

    public function createc()
    {
        return view('conta');
    }


    //Progresso
    public function indexp()
    {
        $Progresso = Progress::all();
        return view('progress',['progress' => $Progresso]);
    }

    public function createp()
    {
        return view('progress');
    }

    //Cronograma
    public function indexcr()
    {
        $Cronograma = Crono::all();
        return view('crono',['crono' => $Cronograma]);
    }

    public function createcr()
    {
        return view('crono');
    }

    //Disciplinas
    public function indexi()
    {
        $Homes = Home::all();
        return view('inicial',['inicial' => $Homes]);
    }

    public function createi()
    {
        return view('inicial');
    }


}
