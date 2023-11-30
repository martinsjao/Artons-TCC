<?php

namespace App\Http\Controllers;
use App\Models\Disc;
use App\Models\ListModel;
use Illuminate\Http\Request;

class listController extends Controller
{
    public function index()
    {
        $conteudos = ListModel::with('disciplinas')->get();
        return view('disciplinas/listConteudo',['conteudos' => $conteudos]);
    }



    public function request(Request $request)
    {
        $conteudo = new ListModel();
        $conteudo ->nome = $request->nome_cont;
        $conteudo ->disc_id = $request->disc_id;

    }

    public function inf($id, Request $request)
    {

        //dd($id);
        $conteudos = ListModel::where('disc_id', $id)->get();
        $nome = Disc::where('pk_cod_disc', $id)->value('nome_disc');
        return view('disciplinas/listConteudo', ['conteudos' => $conteudos, 'nome' => $nome]);


    }


}
