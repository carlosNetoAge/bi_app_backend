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

    public function create(Request $request)
    {
        $menu = MenuSubItem::withTrashed()->where('id', $request->header('subitem_id'))->restore();

        return response()->json([
            'status' => true,
            'msg' => 'Dashboard habilitado com sucesso!'
        ]);
    }

    public function store(Request $request)
    {
        $subitem = MenuSubItem::create($request->all());


        return response()->json([
            'status' => true,
            'msg' => 'Dashboard criado com SUCESSO!',
            'item_id' => $subitem->item_id
        ]);
    }


    public function show(Request $request, $id)
    {

        $subitems = MenuSubItem::select('id', 'item_id', 'subitem', 'deleted_at')->where('item_id', $id)->withTrashed()->get();

        return $subitems;
    }

    public function show_unique($id)
    {
        $subitem = MenuSubItem::where('id', $id)->select('id', 'subitem', 'iframe')->first();

        return response($subitem);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

    }

    public function update_iframe(Request $request)
    {
        $subitem = MenuSubItem::where('id', $request->input('subitem_id'))->first();

        $subitem->update([
            'iframe' => $request->input('iframe')
        ]);

        return response($subitem);
    }

    public function destroy($id)
    {
        $itemDeleted = MenuSubItem::where('id', $id)->first();

        $itemDeleted->delete();

        return response()->json([
            'status' => true,
            'msg' => 'Dashboard desabilitado com sucesso!'
        ]);
    }
}
