<?php

namespace App\Http\Controllers;
use App\Models\Obras;
use Illuminate\Http\Request;

class ObrasController extends Controller
{

    public function download($rota, Request $request){
        // Consulta o banco de dados para obter a coluna 'route_obra' com base em 'nome_obra'
        $nome_obra = Obras::where('nome_obra', $rota)->value('route_obra');

        return response()->download(storage_path($nome_obra));
    }

    public function viewfile($id, Request $request){
        // Consulta o banco de dados para obter a coluna 'route_obra' com base em 'nome_obra'
        $nome_obra = Obras::where('nome_obra', $id)->value('route_obra');

        return response()->file(storage_path($nome_obra));
    }


    public function chamada(){

        $search = request('search_obra');

        if($search){
            $obras = Obras::where([
                ['nome_obra', 'like', '%'.$search.'%'],
            ])->get();
        }
        else{
            $obras = Obras::all();
        }


        return view("obras", [ 'obras'=> $obras, 'search_obras'=> $search]);
    }



}
