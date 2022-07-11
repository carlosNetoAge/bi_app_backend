<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\PermissionMenu;
use Illuminate\Http\Request;

class MenuItemsController extends Controller
{

    public function index(Request $request)
    {

        $userId = $request->header('user_id');

        $permissions = PermissionMenu::where('user_id', $userId)->select('id', 'user_id')->with('menuItems')->get();

        return response($permissions);
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

    public function destroy($id)
    {
        //
    }
}
