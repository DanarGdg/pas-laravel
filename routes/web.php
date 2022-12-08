<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LecturesController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::group(['prefix' => '/courses'], function(){
    Route::get('/all', [CoursesController::class, 'index']);
    Route::get('/detail/{course:id}', [CoursesController::class, 'show']);

    Route::get('/create', [CoursesController::class, 'create']);
    Route::post('/add', [CoursesController::class, 'store']);
    Route::get('/edit/{course}', [CoursesController::class, 'edit']);
    Route::post('/update/{course}', [CoursesController::class, 'update']);
    Route::delete('/delete/{course}', [CoursesController::class, 'destroy']);

});

Route::group(['prefix' => '/lectures'], function(){
    Route::get('/all', [LecturesController::class, 'index']);
    Route::get('/detail/{lecture:id}', [LecturesController::class, 'show']);
    // Route::post('/add', [LecturesController::class, 'store']);

    // Route::get('/edit/{user}', [LecturesController::class, 'edit']);
    // Route::post('/update/{user}', [LecturesController::class, 'update']);
    // Route::delete('/delete/{book}', [CoursesController::class, 'destroy']);
});