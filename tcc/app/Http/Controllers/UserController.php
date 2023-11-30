<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit(Request $request, $id)
    {
        // Validar os dados do formulário, se necessário

        // Encontrar o usuário pelo ID
        $user = User::find($id);

        // Verificar se o usuário foi encontrado
        if (!$user) {
            return redirect()->back()->with('error', 'Usuário não encontrado');
        }

        // Atualizar os dados do usuário
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Salvar as alterações no banco de dados
        $user->save();

        // Redirecionar com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Usuário atualizado com sucesso');
    }
}
