<?php

use App\Http\Controllers\PracticeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('practice',[PracticeController::class, 'sample']);

Route::get('practice2',[PracticeController::class, 'sample2']);

Route::get('practice3', function() {
    $test = 'test';
return response($test);
});