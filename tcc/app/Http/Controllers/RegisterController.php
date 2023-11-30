<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function index()
    {
        $logins = User::all();
        return view('login/login',['User' => $logins]);
    }

    public function create()
    {
        return view('login/login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $login = new User(); //$login variavel dentro da function store que acessa a model login

        $login -> name = $request-> name;
        $login -> email = $request-> email;
        $login -> password = $request-> password;
        
 
        $login->save();

        $credentials = $request->only('email', 'password');
        $authenticated = Auth::attempt($credentials);
        
        if($authenticated)
        {
            $request->session()->regenerate();
            return redirect()->intended('inicial');
            
        }
        


        // $enters = Login::where('email_login', $request->input('email'))->first();

        // if(!$enters){
        //     return redirect('enter')->withErrors(['error' => 'email inválido']);
        // }
        
        // $senhas = Login::where('senha_login', $request->input('senha'))->first();

        // if(!$senhas){
        //     return redirect('enter')->withErrors(['error' => 'senha inválido']);
        // }

        
        return redirect('inicial');
        

        /*$senhas = Login::where('senha_login', $request->input('senha'))->first();

        if(!$senhas){
            return redirect('enter')->withErrors(['error' => 'email ou senha inválido']);
        }*/
 
        /*  

        $credentials = $request->only('email', 'senha');
        $authenticated = Login::where($credentials);
        
        if(!$authenticated)
        {
               
        }*/

    }

    public function destroy()
    {
        var_dump('logout');
    }
}

