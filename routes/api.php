<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/', [\App\Http\Controllers\TestController::class,'index']);

Route::post('/login', [\App\Http\Controllers\AuthenticController::class, 'login']);

Route::middleware(\App\Http\Middleware\VerifyToken::class)->prefix('')->group(function () {


    Route::get('sub_menu/{id}', [\App\Http\Controllers\MenuSubItemsController::class, 'show_unique']);
    Route::resource('menu_items', \App\Http\Controllers\MenuItemsController::class);
    Route::resource('sub_menus', \App\Http\Controllers\MenuSubItemsController::class);
    Route::post('sub_menu/iframe', [\App\Http\Controllers\MenuSubItemsController::class, 'update_iframe']);

    Route::prefix('allowed')->group(function() {
        Route::get('list_menu', [\App\Http\Controllers\MenuAllowedController::class, 'list_menu']);
        Route::get('list_submenu', [\App\Http\Controllers\MenuAllowedController::class, 'list_subMenu']);
        Route::get('menu_general', [\App\Http\Controllers\MenuAllowedController::class, 'menu_general']);
        Route::get('menu_submenu_general', [\App\Http\Controllers\MenuAllowedController::class, 'menu_submenu_general']);
    });

    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::put('users/restore/{id}', [\App\Http\Controllers\UserController::class, 'restore']);
    Route::get('/teste', [\App\Http\Controllers\TestController::class, 'index']);
    Route::get('/info-geral', [\App\Http\Controllers\InfoGeneralController::class, 'users_counts']);

    Route::resource('menu-permissions', \App\Http\Controllers\MenuItemPermissionsController::class);
    Route::resource('submenu-permissions', \App\Http\Controllers\MenuSubitemPermissionsController::class);


});

