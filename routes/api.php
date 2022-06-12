<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ListItem\ListItemController;
use App\Http\Controllers\Home\Table\TableController;
use App\Http\Controllers\Home\User\UserController;
use App\Http\Controllers\RelationFilter\RelationFilterController;
use App\Http\Controllers\Report\ReportController;
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

Route::get('/report', [ReportController::class, 'makeReport']);


Route::prefix('/relfilter')->group(function() {
    Route::get('/entities', [RelationFilterController::class, 'getEntitiesInformation']);
    Route::post('/build', [RelationFilterController::class, 'buildReport']);
});

Route::prefix('/user')->group(function() {
    Route::post('/login', [UserController::class, 'login']);
    Route::middleware('auth')->group(function() {
        Route::get('/list', [UserController::class, 'users']);
        Route::get('/logout', [UserController::class, 'logout']);
        Route::get('', [UserController::class, 'getUser']);
    });
});

Route::middleware('auth')->group(function() {
    Route::get('/menu', [HomeController::class, 'getMenu']);

    Route::prefix('/table/{tableId}')->group(function() {
        Route::get('', [TableController::class, 'getTable']);
        Route::post('', [TableController::class, 'createRow']);
        Route::put('/row/{rowId}', [TableController::class, 'changeRow']);
        Route::patch('/row', [TableController::class, 'deleteRows']);
        Route::delete('/row/{rowId}', [TableController::class, 'deleteRow']);
    });

    Route::prefix('/list')->group(function() {
        Route::get('', [ListItemController::class, 'getLists']);
        Route::post('', [ListItemController::class, 'createList']);

        Route::prefix('/{listId}')->group(function() {
            Route::put('', [ListItemController::class, 'changeList']);
            Route::delete('', [ListItemController::class, 'deleteList']);
            Route::post('', [ListItemController::class, 'createItem']);

            Route::prefix('/item/{itemId}')->group(function() {
                Route::put('', [ListItemController::class, 'changeItem']);
                Route::delete('', [ListItemController::class, 'deleteItem']);
            });
        });
    });
});
