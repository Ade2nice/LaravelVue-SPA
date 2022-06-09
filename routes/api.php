<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('books', [BookController::class, 'index']);
Route::post('/add', [BookController::class, 'store']);
Route::delete('/book/delete/{id}', [BookController::class, 'destroy']);
Route::put('/book/update/{id}', [BookController::class,'update']);
Route::get('/book/edit/{id}', [BookController::class,'show']);
Route::group(['prefix' => 'book'], function () {
    
    //Route::get('edit/{id}', 'BookController@edit');
    // Route::post('update/{id}', 'BookController@update');
    
});
