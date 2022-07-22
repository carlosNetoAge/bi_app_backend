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

        $menu = MenuItem::where('id', $request->header('item-id'))->withTrashed()->restore();

        return response()->json([
            'status' => true,
            'msg' => 'Dashboard habilitado com sucesso!'
        ]);


    }


    public function store(Request $request)
    {

        $menu = MenuItem::create($request->all());


        return response()->json([
            'status' => true,
            'msg' => 'Menu criado com SUCESSO!',
            'menu_id' => $menu->id
        ]);
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
