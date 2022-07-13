<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\MenuSubItem;
use App\Models\User;
use Illuminate\Http\Request;

class InfoGeneralController extends Controller
{
    public function users_counts()
    {
        $users = User::select('id', 'nome', 'sobrenome', 'email', 'registrado_em')->orderBy('id', 'desc')->limit(5)->get();
        $users_count = User::all()->count();

        $menus_count = MenuItem::all()->count();
        $dashboards_count = MenuSubItem::all()->count();

        return response()->json([
            "usuarios" => $users,
            "usuarios_contagem" => $users_count,
            "menu_contagem" => $menus_count,
            "dashboard_contagem" => $dashboards_count,
            "visitas_contagem" => 10
        ]);
    }
}
