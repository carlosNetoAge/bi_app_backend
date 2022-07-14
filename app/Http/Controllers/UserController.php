<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::select('id', 'ativo', 'nome', 'sobrenome', 'email')->get();

        return response($users);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $user = User::where('id', $id)->select('id','ativo', 'nome', 'sobrenome', 'email', 'setor_id', 'privilegio', 'registrado_em')->first();

        return response($user);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {

        $user = User::FindOrFail($id);

        $user->update([
            'ativo' => 0
        ]);

        return response()->json([
            'status' => true,
            'msg' => "Usuário bloqueado com sucesso!"
        ]);
    }

    public function restore($id)
    {
        $user = User::FindOrFail($id);

        $user->update([
            'ativo' => 1
        ]);

        return response()->json([
            'status' => true,
            'msg' => "Usuário desbloqueado com sucesso!"
        ]);
    }
}
