<?php

use App\Http\Controllers\JuiceController;
use Illuminate\Support\Facades\Route;



Route::get('/info',function(){
    return view('myinfo.index');
});

Route::get('/users',function(){
    return view('users.index');
});
Route::get('/juices',[JuiceController::class,'index']);
Route::post('/juices',[JuiceController::class,'store']);
Route::get('/fetch-juices',[JuiceController::class,'fetchjuices']);
Route::get('edit-juice/{id}',[JuiceController::class,'edit']);
Route::put('update-juice/{id}',[JuiceController::class,'update']);
Route::delete('delete-juice/{id}',[JuiceController::class,'destroy'])->middleware('isATC');
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function (){
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

