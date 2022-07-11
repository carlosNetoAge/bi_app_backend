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



});

Route::resource('menu_items', \App\Http\Controllers\MenuItemsController::class);
Route::resource('sub_menus', \App\Http\Controllers\MenuSubItemsController::class);
Route::get('allowed/list_menu', [\App\Http\Controllers\MenuAllowedController::class, 'list_menu']);
Route::get('allowed/list_submenu', [\App\Http\Controllers\MenuAllowedController::class, 'list_subMenu']);
