<?php

namespace App\Http\Controllers;
use App\Models\ListModel;
use App\Models\Quests;
use App\Models\Disc;
use App\Models\Alt;
use Illuminate\Http\Request;

class ContController extends Controller
{

    public function index(Request $request, $id)
    {
        //$conteudo = $request->input('disc');
        $conteudos = ListModel::where('disc_id', $id)->get();
        return view('disciplinas/contEscrito',['conteudos' => $conteudos]);
    }


    public function request(Request $request)
    {
        $conteudo = new ListModel();
        $conteudo ->nome = $request->nome_cont;
        $conteudo ->disc_id = $request->disc_id;

    }

    public function inf($id, Request $request)
    {
            $nome = ListModel::where('pk_cod_cont', $id)->value('nome_cont');
            $texto = ListModel::where('pk_cod_cont', $id)->value('texto_cont');
        //dd($id);
        $conteudos = ListModel::where('pk_cod_cont', $id)->get();
    
       return view('disciplinas/contEscrito', ['conteudos' => $conteudos, 'nome' => $nome, 'texto' => $texto]);


    }

    public function video($id, Request $request)
    {
        $nome = ListModel::where('pk_cod_cont', $id)->value('nome_cont');

        //dd($id);
        $conteudos = ListModel::where('pk_cod_cont', $id)->get();
       return view('disciplinas/contVideo', ['conteudos' => $conteudos, 'nome' => $nome]);


    }

    public function quest($id, Request $request)
    {
        $nome = ListModel::where('pk_cod_cont', $id)->value('nome_cont');
        $questoes = Quests::where('cont_id', $id)->get();

        $alternativas = Alt::whereIn('quest_id', $questoes->pluck('pk_cod_quest'))->get();

        // //Utilizando INNER JOIN para obter dados da tabela Alt
        // $alternativas = Alt::join('questoes', 'pk_cod_quest', '=', 'quest_id')
        // ->whereIn('quest_id', $questoes->pluck('pk_cod_quest'))
        // ->select('texto_alt') // Selecione os campos que você precisa da tabela Alt
        // ->get();

        //dd($alternativas);
        //$alternativas = Alt::where('quest_id', $id)->get();
        //dd($alternativas);

        return view('disciplinas/questoes', [ 'nome' => $nome, 'questoes' => $questoes, 'alternativas' => $alternativas]);


    }
}
