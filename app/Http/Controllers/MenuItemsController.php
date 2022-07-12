<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\PermissionMenu;
use Illuminate\Http\Request;

class MenuItemsController extends Controller
{

    public function index(Request $request)
    {

        $menus = MenuItem::select('id', 'item')->get();

        return response($menus);
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
        $menu = MenuItem::select('id', 'item')->first();

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
        //
    }
}
