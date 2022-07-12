<?php

namespace App\Http\Controllers;

use App\Models\MenuItemPermission;
use Illuminate\Http\Request;

class MenuItemPermissionsController extends Controller
{

    public function index()
    {
        return "oi";
    }

    public function create(Request $request)
    {

        $itemPermission = MenuItemPermission::where('user_id', $request->header('user_id'))->where('item_id', $request->header('item_id'))->withTrashed()->get();

        if(sizeof($itemPermission)) {

            $itemPermission = MenuItemPermission::onlyTrashed()->where('item_id', $request->header('item_id'))->restore();

            return response()->json([
                'status' => true,
                'msg' => 'Dashboard habilitado com sucesso!'
            ]);

        } else {

            $itemPermission = MenuItemPermission::create([
               'item_id' => $request->header('item_id'),
               'user_id' => $request->header('user_id'),
            ]);

            return response()->json([
                'status' => true,
                'msg' => 'Dashboard habilitado com sucesso!'
            ]);

        }

    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, $id)
    {
        $itemDeleted = MenuItemPermission::where('user_id', $request->header('user_id'))->where('item_id', $id)->first();

        $itemDeleted->delete();

        return response()->json([
            'status' => true,
            'msg' => 'Dashboard desabilitado com sucesso!'
        ]);

    }


}
