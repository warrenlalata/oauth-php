<?php

use Illuminate\Http\Request;

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
use App\Http\Resources\User as UserResource;

Route::middleware(['auth:api',])->group(function () {
    // user
    Route::get('/user', function (Request $request) {
        return new UserResource($request->user());;
    });
    Route::delete('/logout', 'AuthController@logout');

    // posts
    Route::get('/posts', 'PostController@index');
    Route::get('/posts/{id}', 'PostController@show');
});
