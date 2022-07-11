<?php

namespace App\Http\Controllers;

use App\Models\MenuSubItem;
use App\Models\PermissionMenu;
use Illuminate\Http\Request;

class MenuSubItemsController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Request $request, $id)
    {
        $user_id = $request->header('user_id');

        $subitems = PermissionMenu::where('item_id', $id)->where('user_id', $user_id)->with('subItems')->get();

        return $subitems;
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
        //
    }
}
