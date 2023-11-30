<?php

namespace App\Http\Controllers;
use App\Models\Vests;
use Illuminate\Http\Request;

class VestsController extends Controller
{


    public function index(Request $request){

        $vests = $request->input('vest');
        $ano= $request->input('ano');
        //dd($ano);
        $resultado = [
            "enem" => [],
            "unesp" => [],
            "unicamp" => [],
            "fuvest" => []
        ];

        foreach ($vests as $vest) {
            $vestibulares = Vests::where('facu_vest', $vest)->whereIn('ano_vest', $ano)->get();
            $resultado[$vest] = $vestibulares;
        }
        //dd($resultado);

        return view("vestibulares/vest", ['enems' => $resultado['enem'], 'unesps' => $resultado['unesp'], 'fuvests' => $resultado['fuvest'], 'unicamps' => $resultado['unicamp']]);

     }


    public function download1($rota, $ano, Request $request){
        // Consulta o banco de dados para obter a coluna 'route_vest' com base em 'nome_vest'
        $vest1 = Vests::where('facu_vest', $rota)->where('ano_vest', $ano)->value('faseum_vest');
        //dd($vest1);
        return response()->download(storage_path($vest1));
    }


    public function download2($rota,$ano, Request $request){
        // Consulta o banco de dados para obter a coluna 'route_vest' com base em 'nome_vest'
        $vest2 = Vests::where('facu_vest', $rota)->where('ano_vest', $ano)->value('fasedois_vest');
        //dd($vest1);
        return response()->download(storage_path($vest2));
    }

    public function download3($rota,$ano, Request $request){
        // Consulta o banco de dados para obter a coluna 'route_vest' com base em 'nome_vest'
        $vest3 = Vests::where('facu_vest', $rota)->where('ano_vest', $ano)->value('fase3_vest');
        //dd($vest1);
        return response()->download(storage_path($vest3));
    }

    public function download4($rota,$ano, Request $request){
        // Consulta o banco de dados para obter a coluna 'route_vest' com base em 'nome_vest'
        $vest4 = Vests::where('facu_vest', $rota)->where('ano_vest', $ano)->value('fase4_vest');
        //dd($vest1);
        return response()->download(storage_path($vest4));
    }


    public function download5($rota, $ano, Request $request){
        // Consulta o banco de dados para obter a coluna 'route_vest' com base em 'nome_vest'
        $vest5 = Vests::where('facu_vest', $rota)->where('ano_vest', $ano)->value('fase5_vest');
        //dd($vest1);
        return response()->download(storage_path($vest5));
    }


    public function download6($rota,$ano, Request $request){
        // Consulta o banco de dados para obter a coluna 'route_vest' com base em 'nome_vest'
        $vest6 = Vests::where('facu_vest', $rota)->where('ano_vest', $ano)->value('fase6_vest');
        //dd($vest1);
        return response()->download(storage_path($vest6));
    }

    public function download7($rota,$ano, Request $request){
        // Consulta o banco de dados para obter a coluna 'route_vest' com base em 'nome_vest'
        $vest7 = Vests::where('facu_vest', $rota)->where('ano_vest', $ano)->value('fase7_vest');
        //dd($vest1);
        return response()->download(storage_path($vest7));
    }

    public function download8($rota,$ano, Request $request){
        // Consulta o banco de dados para obter a coluna 'route_vest' com base em 'nome_vest'
        $vest8 = Vests::where('facu_vest', $rota)->where('ano_vest', $ano)->value('fase8_vest');
        //dd($vest1);
        return response()->download(storage_path($vest8));
    }


}
