<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\MenuItemPermission;
use App\Models\MenuSubItem;
use App\Models\MenuSubitemPermission;
use Illuminate\Http\Request;

class MenuAllowedController extends Controller
{
    public function list_menu(Request $request)
    {
        $user_id = $request->header('user-id');

        return $user_id;

        $menu = MenuItemPermission::where('user_id', $user_id)->select('id', 'item_id', 'user_id')->with('menuItems')->get();

        return $menu;
    }

    public function list_subMenu(Request $request)
    {
        $user_id = $request->header('user_id');
        $item_id = $request->header('item_id');

        $subMenu = MenuSubitemPermission::where('user_id', $user_id)->where('item_id', $item_id)->select('id','item_id', 'subitem_id', 'user_id')->with('subItems')->get();

        return $subMenu;
    }

    public function menu_general(Request $request)
    {

        $user_id = $request->header('user_id');

        $menus = MenuItem::select('id', 'item')->with(['menu_allowed' => function($q) use ($user_id){
            $q->where('user_id', $user_id)->select('id', 'item_id', 'user_id');
        }])->get();

        return response($menus);

    }

    public function menu_submenu_general(Request $request)
    {
        $user_id = $request->header('user_id');
        $item_id = $request->header('item_id');

        $submenus = MenuSubItem::select('id', 'subitem', 'item_id')->where('item_id', $item_id)->with(['submenu_allowed' => function($q) use ($user_id, $item_id) {
            $q->where('user_id', $user_id)->where('item_id', $item_id)->select('id', 'item_id', 'subitem_id', 'user_id');
        }])->get();

        return response()->json($submenus);

    }
}
