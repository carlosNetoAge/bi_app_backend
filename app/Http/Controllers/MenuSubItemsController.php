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

        $subitems = MenuSubItem::select('id', 'item_id', 'subitem')->where('item_id', $id)->get();

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
