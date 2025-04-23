<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('demo', ['inputText' => "teksts"]);
});

Route::get('/posts', [PostController::class, 'index']);
