<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> c8055c5 (first commit)
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
<<<<<<< HEAD
/*
Route::middleware('auth:api')->get('/media', function (Request $request) {
    return $request->user();
});
*/
=======

Route::middleware('auth:api')->get('/media', function (Request $request) {
    return $request->user();
});
>>>>>>> c8055c5 (first commit)
