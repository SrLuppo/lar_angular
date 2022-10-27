<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', 'PostControlador@index');
Route::get('/', 'PostControlador@store');
Route::delete('/{id}', 'PostControlador@destroy');
Route::get('/like/{id}', 'PostControlador@destroy');
