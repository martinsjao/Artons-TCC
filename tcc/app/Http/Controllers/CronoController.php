<?php

namespace App\Http\Controllers;

use App\Models\Crono;
use App\Models\Crono_Cont;
use App\Models\ListModel;
use Illuminate\Http\Request;

class CronoController extends Controller
{

    public function index(){
        $semanas = Crono::with('cont_crono')->get();
        $crono_cont = Crono_Cont::all();

        return view('cronograma/crono', ['semana' => $semanas, 'crono_cont' => $crono_cont]);
    }

    public function create(){
        $conteudos = ListModel::all();
        return view('cronograma/form', ['conteudos' => $conteudos]);
    }

    public function store(Request $request)
    {
        $crono = new Crono();
        $crono -> nome_semana = $request-> nome_semana;
        $crono -> login_id = $request-> login_id;
        $crono->save();

        $cont_crono = new Crono_Cont();
        $cont_crono -> cont_id = $request-> cont_id;
        $cont_crono->semana_id = $crono->pk_cod_semana; // Adicionado para associar a semana correta
        $cont_crono->save();

        return redirect('/semanas');

    }

    public function cont($id, Request $request)
    {
        $crono_cont = Crono_Cont::all();
        $conteudos = ListModel::all();
        $nome = Crono::where('pk_cod_semana', $id)->value('nome_semana');
        $crono = Crono::where('pk_cod_semana', $id)->get();


        //enviar os dados para a tela
        return view('cronograma/addcont',[
            'crono' => $crono,
            'nome' => $nome,
            'conteudos' => $conteudos,
            'crono_cont' =>  $crono_cont,

            ]);
    }

    public function add(Request $request)
    {

        $cont_crono = new Crono_Cont();
        $cont_crono->cont_id = $request->cont_id;
        $cont_crono->semana_id = $request-> semana_id; // Use a variável correta aqui
        $cont_crono->save();

        return redirect('/semanas');

    }
    public function destroy($id, $contId)
    {
        $cont_crono = Crono_Cont::where('semana_id', $id)->where('cont_id', $contId)->first();

        if (!$cont_crono) {
            // Trate o caso em que o conteúdo não foi encontrado
            return redirect('/semanas')->with('error', 'Conteúdo não encontrado');
        }

        $cont_crono->delete();

        return redirect('/semanas')->with('success', 'Conteúdo excluído com sucesso');
    }

    public function delete($id)
    {
        $semana = Crono::where('pk_cod_semana', $id)->first();
        $cont_crono = Crono_cont::where('semana_id', $id);
        if (!$cont_crono) {
            // Trate o caso em que o conteúdo não foi encontrado
            return redirect('/semanas')->with('error', 'Conteúdo não encontrado');
        }

        $cont_crono->delete();
        $semana->delete();

        return redirect('/semanas')->with('success', 'Conteúdo excluído com sucesso');
    }
}
