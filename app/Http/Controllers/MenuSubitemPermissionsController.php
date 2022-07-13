<?php

namespace App\Http\Controllers;

use App\Models\MenuSubitemPermission;
use Illuminate\Http\Request;

class MenuSubitemPermissionsController extends Controller
{

    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $subItemPermission = MenuSubitemPermission::where('user_id', $request->header('user_id'))->where('subitem_id', $request->header('subitem_id'))->withTrashed()->get();

        if(sizeof($subItemPermission)) {

            $subItemPermission = MenuSubitemPermission::onlyTrashed()->where('subitem_id', $request->header('subitem_id'))->restore();

            return response()->json([
                'status' => true,
                'msg' => 'Dashboard habilitado com sucesso!'
            ]);

        } else {

            $subItemPermission = MenuSubitemPermission::create([
                'item_id' => $request->header('item_id'),
                'subitem_id' => $request->header('subitem_id'),
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
        //
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
        $itemDeleted = MenuSubitemPermission::where('user_id', $request->header('user_id'))->where('subitem_id', $id)->first();

        $itemDeleted->delete();

        return response()->json([
            'status' => true,
            'msg' => 'Dashboard desabilitado com sucesso!'
        ]);
    }
}
