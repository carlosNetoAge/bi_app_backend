<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\PermissionMenu;
use Illuminate\Http\Request;

class MenuItemsController extends Controller
{

    public function index(Request $request)
    {

        $menus = MenuItem::select('id', 'item', 'deleted_at')->withTrashed()->get();

        return response($menus);
    }



    public function create(Request $request)
    {
        $menu = MenuItem::withTrashed()->where('id', $request->header('item_id'))->restore();

        return response()->json([
            'status' => true,
            'msg' => 'Dashboard habilitado com sucesso!'
        ]);

    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $menu = MenuItem::select('id', 'item')->where('id', $id)->first();

        return response($menu);
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
        $itemDeleted = MenuItem::where('id', $id)->first();

        $itemDeleted->delete();

        return response()->json([
            'status' => true,
            'msg' => 'Dashboard desabilitado com sucesso!'
        ]);
    }
}
