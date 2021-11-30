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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users/{name?}', function ($name = null) {
    return "Hello " . $name;
});

Route::match(['get', 'post'], '/test-match', function (Request $req) {
    return $req->method();
});

Route::any('/test-any', function (Request $req) {
    return "Requested method is " . $req->method();
});
